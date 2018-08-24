<?php

namespace Oro\Bundle\NavigationBundle\Event;

use Doctrine\ORM\EntityManager;
use Doctrine\Common\Persistence\ManagerRegistry;

use Symfony\Component\HttpKernel\HttpKernel;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;

use Oro\Bundle\EntityBundle\Event\OroEventManager;
use Oro\Bundle\NavigationBundle\Entity\Builder\ItemFactory;
use Oro\Bundle\NavigationBundle\Entity\NavigationHistoryItem;
use Oro\Bundle\NavigationBundle\Provider\TitleServiceInterface;
use Oro\Bundle\SecurityBundle\Authentication\Token\OrganizationContextTokenInterface;

class ResponseHistoryListener
{
    /** @var array */
    public static $excludedActions = [
        'Oro\Bundle\FrontendBundle\Controller\FrontendController::exceptionAction',
    ];

    /** @var string */
    protected $historyItemFQCN;

    /** @var string */
    protected $userFQCN;

    /** @var string */
    protected $navigationHistoryItemType;

    /** @var ItemFactory */
    protected $navItemFactory;

    /** @var TokenStorageInterface */
    protected $tokenStorage;

    /** @var ManagerRegistry */
    protected $registry;

    /** @var TitleServiceInterface */
    protected $titleService;

    /**
     * @param ItemFactory           $navigationItemFactory
     * @param TokenStorageInterface $tokenStorage
     * @param ManagerRegistry       $registry
     * @param TitleServiceInterface $titleService
     */
    public function __construct(
        ItemFactory $navigationItemFactory,
        TokenStorageInterface $tokenStorage,
        ManagerRegistry $registry,
        TitleServiceInterface $titleService
    ) {
        $this->navItemFactory = $navigationItemFactory;
        $this->tokenStorage = $tokenStorage;
        $this->registry = $registry;
        $this->titleService = $titleService;
    }

    /**
     * Process onResponse event, updates user history information
     *
     * @param  FilterResponseEvent $event
     *
     * @return bool|null
     */
    public function onResponse(FilterResponseEvent $event)
    {
        if (!$this->shouldSaveHistory($event)) {
            return null;
        }

        /** @var EntityManager $em */
        $em       = $this->registry->getManagerForClass($this->historyItemFQCN);
        $request  = $event->getRequest();
        $response = $event->getResponse();
        $token    = $this->tokenStorage->getToken();
        $user     = $organization = null;
        if ($token instanceof TokenInterface) {
            $user = $token->getUser();
        }

        // check if a current request can be added to a history
        if (!$this->canAddToHistory($response, $request, $user)) {
            return false;
        }

        if ($token instanceof OrganizationContextTokenInterface) {
            $organization = $token->getOrganizationContext();
        }

        $postArray = [
            'url'          => $request->getRequestUri(),
            'user'         => $user,
            'organization' => $organization
        ];

        /** @var $historyItem  NavigationHistoryItem */
        $historyItem = $em->getRepository($this->historyItemFQCN)->findOneBy($postArray);

        if (!$historyItem) {
            $routeParameters = $request->get('_route_params');
            unset($routeParameters['id']);

            $entityId = filter_var($request->get('id'), FILTER_VALIDATE_INT);
            if (false !== $entityId) {
                $entityId = (int)$entityId;
            } else {
                $entityId = null;
            }

            $postArray['route']           = $request->get('_route');
            $postArray['routeParameters'] = $routeParameters;
            $postArray['entityId']        = $entityId;

            /** @var $historyItem \Oro\Bundle\NavigationBundle\Entity\NavigationItemInterface */
            $historyItem = $this->navItemFactory->createItem(
                $this->navigationHistoryItemType,
                $postArray
            );
        }

        $historyItem->setTitle($this->titleService->getSerialized());

        // force update
        $historyItem->doUpdate();

        // disable Doctrine events for history item processing
        $eventManager = $em->getEventManager();
        if ($eventManager instanceof OroEventManager) {
            $eventManager->disableListeners('^Oro');
        }

        $em->persist($historyItem);
        $em->flush($historyItem);

        if ($eventManager instanceof OroEventManager) {
            $eventManager->clearDisabledListeners();
        }

        return true;
    }

    /**
     * @param FilterResponseEvent $event
     * @return bool
     */
    private function shouldSaveHistory(FilterResponseEvent $event)
    {
        if (HttpKernel::MASTER_REQUEST != $event->getRequestType()) {
            // Do not do anything
            return false;
        }

        //exclude exceptions, history should not save exception pages
        $attributes = $event->getRequest()->attributes;
        if (isset($attributes) && in_array($attributes->get('_controller'), self::$excludedActions)) {
            return false;
        }

        return true;
    }

    /**
     * Is request valid for adding to history
     *
     * @param Response $response
     * @param Request  $request
     * @param          $user
     *
     * @return bool
     */
    private function canAddToHistory(Response $response, Request $request, $user = null)
    {
        $userFQCN = $this->userFQCN;
        $result = ($user instanceof $userFQCN)
            && $response->getStatusCode() === 200
            && $request->getRequestFormat() === 'html'
            && $request->getMethod() === 'GET'
            && (!$request->isXmlHttpRequest()
                || $request->headers->get(ResponseHashnavListener::HASH_NAVIGATION_HEADER));

        if ($result) {
            $route  = $request->get('_route');
            $result = $route[0] !== '_' && $route !== 'oro_default';
        }

        if ($result && $response->headers->has('Content-Disposition')) {
            $contentDisposition = $response->headers->get('Content-Disposition');
            $result             = (strpos($contentDisposition, ResponseHeaderBag::DISPOSITION_INLINE) !== 0)
                && (strpos($contentDisposition, ResponseHeaderBag::DISPOSITION_ATTACHMENT) !== 0);
        }

        return $result;
    }

    /**
     * @param string $entityFQCN
     */
    public function setHistoryItemEntityFQCN($entityFQCN)
    {
        $this->historyItemFQCN = $entityFQCN;
    }

    /**
     * @param string $entityFQCN
     */
    public function setUserEntityFQCN($entityFQCN)
    {
        $this->userFQCN = $entityFQCN;
    }

    /**
     * @param string $type
     */
    public function setNavigationHistoryItemType($type)
    {
        $this->navigationHistoryItemType = $type;
    }
}
