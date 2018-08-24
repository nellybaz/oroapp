<?php

namespace Oro\Bundle\DataGridBundle\Extension\GridViews;

use Doctrine\Common\Persistence\ManagerRegistry;

use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Symfony\Component\Translation\TranslatorInterface;

use Oro\Bundle\DataGridBundle\Entity\AbstractGridView;
use Oro\Bundle\DataGridBundle\Event\GridViewsLoadEvent;
use Oro\Bundle\DataGridBundle\Extension\AbstractExtension;
use Oro\Bundle\DataGridBundle\Extension\Appearance\AppearanceExtension;
use Oro\Bundle\DataGridBundle\Datagrid\ParameterBag;
use Oro\Bundle\DataGridBundle\Datagrid\Common\MetadataObject;
use Oro\Bundle\DataGridBundle\Datagrid\Common\DatagridConfiguration;

use Oro\Bundle\SecurityBundle\Authentication\TokenAccessorInterface;
use Oro\Bundle\SecurityBundle\ORM\Walker\AclHelper;

use Oro\Component\DependencyInjection\ServiceLink;

class GridViewsExtension extends AbstractExtension
{
    const GRID_VIEW_ROOT_PARAM = '_grid_view';
    const DISABLED_PARAM       = '_disabled';

    const VIEWS_LIST_KEY           = 'views_list';
    const VIEWS_PARAM_KEY          = 'view';
    const MINIFIED_VIEWS_PARAM_KEY = 'v';
    const DEFAULT_VIEW_ID = '__all__';

    /** @var EventDispatcherInterface */
    protected $eventDispatcher;

    /** @var AuthorizationCheckerInterface */
    protected $authorizationChecker;

    /** @var TokenAccessorInterface */
    protected $tokenAccessor;

    /** @var TranslatorInterface */
    protected $translator;

    /** @var ManagerRegistry */
    protected $registry;

    /** @var AclHelper */
    protected $aclHelper;

    /** @var ServiceLink */
    protected $managerLink;

    /** @var array|AbstractGridView[] */
    protected $defaultGridView = [];

    /**
     * @param EventDispatcherInterface      $eventDispatcher
     * @param AuthorizationCheckerInterface $authorizationChecker
     * @param TokenAccessorInterface        $tokenAccessor
     * @param TranslatorInterface           $translator
     * @param ManagerRegistry               $registry
     * @param AclHelper                     $aclHelper
     * @param ServiceLink                   $managerLink
     */
    public function __construct(
        EventDispatcherInterface $eventDispatcher,
        AuthorizationCheckerInterface $authorizationChecker,
        TokenAccessorInterface $tokenAccessor,
        TranslatorInterface $translator,
        ManagerRegistry $registry,
        AclHelper $aclHelper,
        ServiceLink $managerLink
    ) {
        $this->eventDispatcher = $eventDispatcher;
        $this->authorizationChecker = $authorizationChecker;
        $this->tokenAccessor = $tokenAccessor;
        $this->translator = $translator;
        $this->registry = $registry;
        $this->aclHelper = $aclHelper;
        $this->managerLink = $managerLink;
    }

    /**
     * {@inheritdoc}
     */
    public function isApplicable(DatagridConfiguration $config)
    {
        return parent::isApplicable($config) && !$this->isDisabled();
    }

    /**
     * {@inheritdoc}
     */
    public function getPriority()
    {
        return 10;
    }

    /**
     * @return bool
     */
    protected function isDisabled()
    {
        $parameters = $this->getParameters()->get(self::GRID_VIEW_ROOT_PARAM, []);

        return !empty($parameters[self::DISABLED_PARAM]);
    }

    /**
     * {@inheritdoc}
     */
    public function visitMetadata(DatagridConfiguration $config, MetadataObject $data)
    {
        $currentViewId = $this->getCurrentViewId($config->getName());
        // need to set [initialState][filters] from [state][filters]
        // before [state][filters] will be set from default grid view
        $filtersState = $data->offsetGetByPath('[state][filters]', []);
        $data->offsetAddToArray('initialState', ['gridView' => self::DEFAULT_VIEW_ID, 'filters' => $filtersState]);
        $this->setDefaultParams($config->getName(), $data);
        $data->offsetAddToArray('state', ['gridView' => $currentViewId]);

        $systemGridView = new View(self::DEFAULT_VIEW_ID);
        $systemGridView->setDefault($this->getDefaultViewId($config->getName()) === null);
        if ($config->offsetGetByPath('[options][gridViews][allLabel]')) {
            $systemGridView->setLabel($this->translator->trans($config['options']['gridViews']['allLabel']));
        }

        $currentUser = $this->tokenAccessor->getUser();
        $gridViews = $this->managerLink->getService()->getAllGridViews($currentUser, $config->getName());

        if ($this->eventDispatcher->hasListeners(GridViewsLoadEvent::EVENT_NAME)) {
            $event = new GridViewsLoadEvent($config->getName(), $gridViews);
            $this->eventDispatcher->dispatch(GridViewsLoadEvent::EVENT_NAME, $event);
            $gridViews = $event->getGridViews();
        }

        $data->offsetAddToArray(
            'gridViews',
            [
                'views'       => $gridViews,
                'gridName'    => $config->getName(),
                'permissions' => $this->getPermissions()
            ]
        );
    }

    /**
     * Gets id for current grid view
     *
     * @param string $gridName
     *
     * @return int|string
     */
    protected function getCurrentViewId($gridName)
    {
        $params = $this->getParameters()->get(ParameterBag::ADDITIONAL_PARAMETERS, []);
        if (isset($params[self::VIEWS_PARAM_KEY])) {
            $viewKey = $params[self::VIEWS_PARAM_KEY];
            if (is_numeric($viewKey)) {
                return (int)$viewKey;
            } else {
                return $viewKey;
            }
        } else {
            $defaultViewId = $this->getDefaultViewId($gridName);

            return $defaultViewId ? $defaultViewId : self::DEFAULT_VIEW_ID;
        }
    }

    /**
     * Gets id for defined as default grid view for current logged user.
     *
     * @param string $gridName
     *
     * @return int|null
     */
    protected function getDefaultViewId($gridName)
    {
        $defaultGridViewId = null;
        $defaultGridView = $this->getDefaultView($gridName);

        if ($defaultGridView) {
            if ($defaultGridView->getType() == 'system') {
                $defaultGridViewId = $defaultGridView->getName();
            } else {
                $defaultGridViewId = $defaultGridView->getId();
            }
        }

        return $defaultGridViewId;
    }

    /**
     * Gets defined as default grid view for current logged user.
     *
     * @param string $gridName
     *
     * @return AbstractGridView|null
     */
    protected function getDefaultView($gridName)
    {
        if (!array_key_exists($gridName, $this->defaultGridView)) {
            $currentUser = $this->tokenAccessor->getUser();
            if (null === $currentUser) {
                return null;
            }
            $this->defaultGridView[$gridName] = $this->managerLink->getService()
                ->getDefaultView($currentUser, $gridName);
        }

        return $this->defaultGridView[$gridName];
    }

    /**
     * Sets default parameters.
     * Added filters and sorters for defined as default grid view for current logged user.
     *
     * @param string         $gridName
     * @param MetadataObject $data
     */
    protected function setDefaultParams($gridName, MetadataObject $data)
    {
        $params = $this->getParameters()->get(ParameterBag::ADDITIONAL_PARAMETERS, []);
        if (!isset($params[self::VIEWS_PARAM_KEY])) {
            $currentViewId                 = $this->getCurrentViewId($gridName);
            $params[self::VIEWS_PARAM_KEY] = $currentViewId;

            $defaultGridView = $this->getDefaultView($gridName);
            if ($defaultGridView) {
                $this->getParameters()->mergeKey('_filter', $defaultGridView->getFiltersData());
                $this->getParameters()->mergeKey('_sort_by', $defaultGridView->getSortersData());
                $this->getParameters()->mergeKey(AppearanceExtension::APPEARANCE_ROOT_PARAM, [
                    AppearanceExtension::APPEARANCE_TYPE_PARAM => $defaultGridView->getAppearanceTypeName(),
                    AppearanceExtension::APPEARANCE_DATA_PARAM => $defaultGridView->getAppearanceData()
                ]);
                $filtersState = array_merge(
                    $defaultGridView->getFiltersData(),
                    $data->offsetGetByPath('[state][filters]', [])
                );
                $data->offsetSetByPath('[state][filters]', $filtersState);
            }
        }
        $this->getParameters()->set(ParameterBag::ADDITIONAL_PARAMETERS, $params);
    }

    /**
     * @return array
     */
    protected function getPermissions()
    {
        return [
            'VIEW'   => $this->authorizationChecker->isGranted('oro_datagrid_gridview_view'),
            'CREATE' => $this->authorizationChecker->isGranted('oro_datagrid_gridview_create'),
            'EDIT'   => $this->authorizationChecker->isGranted('oro_datagrid_gridview_update'),
            'DELETE' => $this->authorizationChecker->isGranted('oro_datagrid_gridview_delete'),
            'SHARE'  => $this->authorizationChecker->isGranted('oro_datagrid_gridview_publish'),
        ];
    }

    /**
     * @param ParameterBag $parameters
     */
    public function setParameters(ParameterBag $parameters)
    {
        if ($parameters->has(ParameterBag::MINIFIED_PARAMETERS)) {
            $minifiedParameters = $parameters->get(ParameterBag::MINIFIED_PARAMETERS);
            $additional         = $parameters->get(ParameterBag::ADDITIONAL_PARAMETERS, []);

            if (array_key_exists(self::MINIFIED_VIEWS_PARAM_KEY, $minifiedParameters)) {
                $additional[self::VIEWS_PARAM_KEY] = $minifiedParameters[self::MINIFIED_VIEWS_PARAM_KEY];
            }

            $parameters->set(ParameterBag::ADDITIONAL_PARAMETERS, $additional);
        }

        parent::setParameters($parameters);
    }
}
