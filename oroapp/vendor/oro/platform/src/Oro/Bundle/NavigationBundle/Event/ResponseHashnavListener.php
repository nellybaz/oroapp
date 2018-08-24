<?php
namespace Oro\Bundle\NavigationBundle\Event;

use Symfony\Component\HttpKernel\Event\FilterResponseEvent;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Bundle\FrameworkBundle\Templating\EngineInterface;

class ResponseHashnavListener
{
    const HASH_NAVIGATION_HEADER = 'x-oro-hash-navigation';

    /**
     * @var TokenStorageInterface
     */
    protected $tokenStorage;

    /**
     * @var EngineInterface
     */
    protected $templating;

    /**
     * @var bool
     */
    protected $isDebug;

    /**
     * @param TokenStorageInterface $tokenStorage
     * @param EngineInterface       $templating
     * @param bool                  $isDebug
     */
    public function __construct(
        TokenStorageInterface $tokenStorage,
        EngineInterface $templating,
        $isDebug = false
    ) {
        $this->tokenStorage = $tokenStorage;
        $this->templating = $templating;
        $this->isDebug = $isDebug;
    }

    /**
     * Checking request and response and decide whether we need a redirect
     *
     * @param FilterResponseEvent $event
     */
    public function onResponse(FilterResponseEvent $event)
    {
        $request  = $event->getRequest();
        $response = $event->getResponse();
        if ($request->get(self::HASH_NAVIGATION_HEADER) || $request->headers->get(self::HASH_NAVIGATION_HEADER)) {
            $location       = '';
            $isFullRedirect = false;
            if ($response->isRedirect()) {
                $location = $response->headers->get('location');
                if ($request->attributes->get('_fullRedirect') || !is_object($this->tokenStorage->getToken())) {
                    $isFullRedirect = true;
                }
            }
            if ($response->isNotFound() || ($response->getStatusCode() == 503 && !$this->isDebug)) {
                $location = $request->getUri();
                $isFullRedirect = true;
            }
            if ($location) {
                $response->headers->remove('location');
                $response->setStatusCode(200);
                $response = $this->templating->renderResponse(
                    'OroNavigationBundle:HashNav:redirect.html.twig',
                    array(
                        'full_redirect' => $isFullRedirect,
                        'location'      => $location,
                    ),
                    $response
                );
            }

            // disable cache for ajax navigation pages and change content type to json
            $response->headers->set('Content-Type', 'application/json');
            $response->headers->addCacheControlDirective('no-cache', true);
            $response->headers->addCacheControlDirective('max-age', 0);
            $response->headers->addCacheControlDirective('must-revalidate', true);
            $response->headers->addCacheControlDirective('no-store', true);
            $event->setResponse($response);
        }
    }
}
