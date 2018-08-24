<?php

namespace Oro\Bundle\MarketingActivityBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Oro\Bundle\FilterBundle\Filter\DateTimeRangeFilter;
use Oro\Bundle\MarketingActivityBundle\Entity\MarketingActivity;
use Oro\Bundle\MarketingActivityBundle\Entity\Repository\MarketingActivityRepository;
use Oro\Bundle\SecurityBundle\Annotation\AclAncestor;

/**
 * @Route("/marketing-activity")
 */
class MarketingActivityController extends Controller
{
    /**
     * @Route(
     *         "/widget/marketing-activities/summary/{campaignId}",
     *          name="oro_marketing_activity_widget_summary",
     *          requirements={"campaignId"="\d+"}
     * )
     * @AclAncestor("oro_marketing_activity_view")
     * @Template
     *
     * @param integer $campaignId  The ID of Campaign entity
     * @param string  $entityClass Entity class name
     * @param integer $entityId    Entity id
     *
     * @return array
     */
    public function summaryAction($campaignId, $entityClass = null, $entityId = null)
    {
        $summaryData = $this->getDoctrine()
            ->getRepository('OroMarketingActivityBundle:MarketingActivity')
            ->getMarketingActivitySummaryByCampaign($campaignId, $entityClass, $entityId);

        return [
            'summary' => $summaryData
        ];
    }

    /**
     * @Route(
     *     "/view/widget/marketing-activities/{entityClass}/{entityId}",
     *     name="oro_marketing_activity_widget_marketing_activities"
     * )
     * @AclAncestor("oro_marketing_activity_view")
     * @Template("OroMarketingActivityBundle:MarketingActivity:marketingActivitiesSection.html.twig")
     *
     * @param string  $entityClass The entity class which marketing activities should be rendered
     * @param integer $entityId    The entity object id which marketing activities should be rendered
     *
     * @return array
     */
    public function widgetAction($entityClass, $entityId)
    {
        $entity = $this->get('oro_entity.routing_helper')->getEntity($entityClass, $entityId);

        $campaignEntityClass = $this->container->getParameter('oro_campaign.entity.class');
        $configurationEntityKey = $this->get('oro_entity.routing_helper')->getUrlSafeClassName($campaignEntityClass);

        $entityClass = $this->get('oro_entity.routing_helper')->resolveEntityClass($entityClass);
        $marketingActivitySectionItems = $this->getDoctrine()
            ->getRepository('OroMarketingActivityBundle:MarketingActivity')
            ->getMarketingActivitySectionItemsQueryBuilder($entityClass, $entityId)
            ->getQuery()
            ->getArrayResult();

        $campaignFilterValues = $this->get('oro_marketing_activity.normalizer.marketing_activity.section_data')
            ->getCampaignFilterValues($marketingActivitySectionItems);

        return [
            'entity'                  => $entity,
            'configurationKey'        => $configurationEntityKey,
            'campaignFilterValues'    => $campaignFilterValues,
        ];
    }

    /**
     * @Route(
     *      "/widget/marketing-activities/info/{id}",
     *      name="oro_marketing_activity_widget_marketing_activities_info",
     *      requirements={"id"="\d+"},
     * )
     * @AclAncestor("oro_marketing_activity_view")
     * @Template("OroMarketingActivityBundle:MarketingActivity/widget:marketingActivitySectionItemInfo.html.twig")
     *
     * @param integer $id The ID of Campaign entity
     * @param Request $request
     *
     * @return array
     */
    public function infoAction($id, Request $request)
    {
        return [
            'campaignId'  => $id,
            'entityClass' => $request->get('targetActivityClass'),
            'entityId'    => $request->get('targetActivityId')
        ];
    }

    /**
     * Get filtered marketing activities for given entity
     *
     * @Route(
     *     "/view/widget/marketing-activities/list/{entityClass}/{entityId}",
     *     name="oro_marketing_activity_widget_marketing_activities_list"
     * )
     * @AclAncestor("oro_marketing_activity_view")
     *
     * @param string  $entityClass The entity class which marketing activities should be rendered
     * @param integer $entityId    The entity object id which marketing activities should be rendered
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function listAction($entityClass, $entityId, Request $request)
    {
        $entityClass = $this->get('oro_entity.routing_helper')->resolveEntityClass($entityClass);
        $filter      = $request->get('filter');
        $pageFilter  = $request->get('pageFilter');
        /** @var MarketingActivityRepository $repository */
        $repository = $this->getDoctrine()->getRepository('OroMarketingActivityBundle:MarketingActivity');

        $queryBuilder = $repository
            ->getMarketingActivitySectionItemsQueryBuilder($entityClass, $entityId, $pageFilter);

        $this->get('oro_marketing_activity.section_data.filter.helper')
            ->addFiltersToQuery($queryBuilder, $filter);

        $items = $queryBuilder->setMaxResults($this->get('oro_config.manager')->get('oro_activity_list.per_page'))
            ->getQuery()
            ->getArrayResult();

        $repository->addEventTypeData($items, $entityClass, $entityId);

        $results = $this->get('oro_marketing_activity.normalizer.marketing_activity.section_data')
            ->getNormalizedData($items, $entityClass, $entityId);

        return new JsonResponse($results);
    }
}
