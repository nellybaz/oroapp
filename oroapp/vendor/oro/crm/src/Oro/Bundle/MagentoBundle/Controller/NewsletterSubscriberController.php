<?php

namespace Oro\Bundle\MagentoBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Oro\Bundle\SecurityBundle\Annotation\Acl;
use Oro\Bundle\SecurityBundle\Annotation\AclAncestor;
use Oro\Bundle\MagentoBundle\Entity\Customer;
use Oro\Bundle\MagentoBundle\Entity\NewsletterSubscriber;

/**
 * @Route("/newsletter-subscriber")
 */
class NewsletterSubscriberController extends Controller
{
    /**
     * @Route("/", name="oro_magento_newsletter_subscriber_index")
     * @AclAncestor("oro_magento_newsletter_subscriber_view")
     * @Template
     */
    public function indexAction()
    {
        return [
            'entity_class' => $this->container->getParameter('oro_magento.entity.newsletter_subscriber.class')
        ];
    }

    /**
     * @param NewsletterSubscriber $newsletterSubscriber
     * @return array
     *
     * @Route("/view/{id}", name="oro_magento_newsletter_subscriber_view", requirements={"id"="\d+"}))
     * @Acl(
     *      id="oro_magento_newsletter_subscriber_view",
     *      type="entity",
     *      permission="VIEW",
     *      class="OroMagentoBundle:NewsletterSubscriber"
     * )
     * @Template
     */
    public function viewAction(NewsletterSubscriber $newsletterSubscriber)
    {
        return ['entity' => $newsletterSubscriber];
    }

    /**
     * @param NewsletterSubscriber $newsletterSubscriber
     * @return array
     *
     * @Route("/info/{id}", name="oro_magento_newsletter_subscriber_info", requirements={"id"="\d+"}))
     * @Acl(
     *      id="oro_magento_newsletter_subscriber_view",
     *      type="entity",
     *      permission="VIEW",
     *      class="OroMagentoBundle:NewsletterSubscriber"
     * )
     * @Template("OroMagentoBundle:NewsletterSubscriber/widget:info.html.twig")
     */
    public function infoAction(NewsletterSubscriber $newsletterSubscriber)
    {
        return ['entity' => $newsletterSubscriber, 'useCustomer' => $this->getRequest()->get('useCustomer')];
    }

    /**
     * @param NewsletterSubscriber $newsletterSubscriber
     * @return JsonResponse
     *
     * @Route(
     *      "/subscribe/{id}",
     *      name="oro_magento_newsletter_subscriber_subscribe",
     *      requirements={"id"="\d+"})
     * )
     * @Acl(
     *      id="oro_magento_newsletter_subscriber_subscribe",
     *      type="entity",
     *      permission="EDIT",
     *      class="OroMagentoBundle:NewsletterSubscriber"
     * )
     */
    public function subscribeAction(NewsletterSubscriber $newsletterSubscriber)
    {
        return new JsonResponse($this->doJob($newsletterSubscriber, NewsletterSubscriber::STATUS_SUBSCRIBED));
    }

    /**
     * @param NewsletterSubscriber $newsletterSubscriber
     * @return JsonResponse
     *
     * @Route(
     *      "/unsubscribe/{id}",
     *      name="oro_magento_newsletter_subscriber_unsubscribe",
     *      requirements={"id"="\d+"})
     * )
     * @Acl(
     *      id="oro_magento_newsletter_subscriber_unsubscribe",
     *      type="entity",
     *      permission="EDIT",
     *      class="OroMagentoBundle:NewsletterSubscriber"
     * )
     */
    public function unsubscribeAction(NewsletterSubscriber $newsletterSubscriber)
    {
        return new JsonResponse($this->doJob($newsletterSubscriber, NewsletterSubscriber::STATUS_UNSUBSCRIBED));
    }

    /**
     * @param Customer $customer
     * @return JsonResponse
     *
     * @Route(
     *      "/subscribe/customer/{id}",
     *      name="oro_magento_newsletter_subscriber_subscribe_customer",
     *      requirements={"id"="\d+"})
     * )
     * @Acl(
     *      id="oro_magento_newsletter_subscriber_subscribe_customer",
     *      type="entity",
     *      permission="EDIT",
     *      class="OroMagentoBundle:NewsletterSubscriber"
     * )
     */
    public function subscribeByCustomerAction(Customer $customer)
    {
        return $this->processCustomerSubscription($customer, NewsletterSubscriber::STATUS_SUBSCRIBED);
    }

    /**
     * @param Customer $customer
     * @return JsonResponse
     *
     * @Route(
     *      "/unsubscribe/customer/{id}",
     *      name="oro_magento_newsletter_subscriber_unsubscribe_customer",
     *      requirements={"id"="\d+"})
     * )
     * @Acl(
     *      id="oro_magento_newsletter_subscriber_unsubscribe_customer",
     *      type="entity",
     *      permission="EDIT",
     *      class="OroMagentoBundle:NewsletterSubscriber"
     * )
     */
    public function unsubscribeByCustomerAction(Customer $customer)
    {
        return $this->processCustomerSubscription($customer, NewsletterSubscriber::STATUS_UNSUBSCRIBED);
    }

    /**
     * @param NewsletterSubscriber $newsletterSubscriber
     * @param int $statusIdentifier
     *
     * @return array
     */
    protected function doJob(NewsletterSubscriber $newsletterSubscriber, $statusIdentifier)
    {
        $jobResult = $this->get('oro_importexport.job_executor')->executeJob(
            'export',
            'magento_newsletter_subscriber_export',
            [
                'channel' => $newsletterSubscriber->getChannel()->getId(),
                'entity' => $newsletterSubscriber,
                'statusIdentifier' => $statusIdentifier,
                'writer_skip_clear' => true,
                'processorAlias' => 'oro_magento'
            ]
        );

        return [
            'successful' => $jobResult->isSuccessful(),
            'error' => $jobResult->getFailureExceptions()
        ];
    }

    /**
     * @param Customer $customer
     * @param int $status
     * @return JsonResponse
     */
    protected function processCustomerSubscription(Customer $customer, $status)
    {
        $newsletterSubscribers = $this->get('oro_magento.model.newsletter_subscriber_manager')
            ->getOrCreateFromCustomer($customer);

        $jobResult = ['successful' => false];
        foreach ($newsletterSubscribers as $newsletterSubscriber) {
            if ($newsletterSubscriber->getStatus()->getId() != $status) {
                $jobResult = $this->doJob($newsletterSubscriber, $status);
                if (!$jobResult['successful']) {
                    break;
                }
            }
        }

        return new JsonResponse($jobResult);
    }
}
