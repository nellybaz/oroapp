<?php

namespace Oro\Bundle\AnalyticsBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Oro\Bundle\SecurityBundle\Annotation\AclAncestor;
use Oro\Bundle\AnalyticsBundle\Entity\Repository\RFMMetricCategoryRepository;
use Oro\Bundle\AnalyticsBundle\Entity\RFMMetricCategory;
use Oro\Bundle\ChannelBundle\Entity\Channel;

/**
 * @Route("/analytics")
 */
class RFMCategoryController extends Controller
{
    /**
     * @var RFMMetricCategoryRepository
     */
    protected $rfmMetricCategoryRepository;

    /**
     * @Route(
     *      "/rfm-category/view/channel/{entity}",
     *      name="oro_analytics_rfm_category_channel_view",
     *      requirements={"entity"="\d+"}
     * )
     * @ParamConverter(
     *      "channel",
     *      class="OroChannelBundle:Channel",
     *      options={"id" = "entity"}
     * )
     * @AclAncestor("oro_channel_view")
     * @Template
     *
     * @param Channel $channel
     * @return array
     */
    public function channelViewAction(Channel $channel)
    {
        $rfmCategories = [
            RFMMetricCategory::TYPE_RECENCY => $this->getCategories($channel, RFMMetricCategory::TYPE_RECENCY),
            RFMMetricCategory::TYPE_FREQUENCY => $this->getCategories($channel, RFMMetricCategory::TYPE_FREQUENCY),
            RFMMetricCategory::TYPE_MONETARY => $this->getCategories($channel, RFMMetricCategory::TYPE_MONETARY)
        ];

        return [
            'channel' => $channel,
            'rfmCategories' => $rfmCategories,
            'rfmCategoriesCount' => count($rfmCategories[RFMMetricCategory::TYPE_RECENCY])
        ];
    }

    /**
     * @param Channel $channel
     * @param string $type
     * @return array
     */
    protected function getCategories(Channel $channel, $type)
    {
        return $this->getRFMMetricCategoryRepository()
            ->getCategoriesByChannel($this->get('oro_security.acl_helper'), $channel, $type);
    }

    /**
     * @return RFMMetricCategoryRepository
     */
    protected function getRFMMetricCategoryRepository()
    {
        if (!$this->rfmMetricCategoryRepository) {
            $this->rfmMetricCategoryRepository = $this->getDoctrine()
                ->getRepository($this->container->getParameter('oro_analytics.entity.rfm_category.class'));
        }

        return $this->rfmMetricCategoryRepository;
    }
}
