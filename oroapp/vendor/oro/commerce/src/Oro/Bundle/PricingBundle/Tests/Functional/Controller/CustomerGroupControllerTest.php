<?php

namespace Oro\Bundle\PricingBundle\Tests\Functional\Controller;

use Oro\Bundle\CustomerBundle\Entity\CustomerGroup;
use Oro\Bundle\CustomerBundle\Form\Type\CustomerGroupType;

/**
 * @group CommunityEdition
 */
class CustomerGroupControllerTest extends AbstractPriceListsByEntityTestCase
{
    /**
     * @var  CustomerGroup
     */
    protected $customerGroup;

    public function setUp()
    {
        parent::setUp();
        $this->customerGroup = $this->getReference('customer_group.group3');
    }

    /**
     * {@inheritdoc}
     */
    public function getUpdateUrl($id = null)
    {
        return $this->getUrl('oro_customer_customer_group_update', ['id' => $id ?: $this->customerGroup->getId()]);
    }

    /**
     * {@inheritdoc}
     */
    public function getCreateUrl()
    {
        return $this->getUrl('oro_customer_customer_group_create');
    }

    /**
     * {@inheritdoc}
     */
    public function getViewUrl()
    {
        return $this->getUrl('oro_customer_customer_group_view', ['id' => $this->customerGroup->getId()]);
    }

    /**
     * {@inheritdoc}
     */
    public function getMainFormName()
    {
        return CustomerGroupType::NAME;
    }

    /**
     * {@inheritdoc}
     */
    public function getPriceListsByEntity()
    {
        return $this->client
            ->getContainer()
            ->get('doctrine')
            ->getManager()
            ->getRepository('OroPricingBundle:PriceListToCustomerGroup')
            ->findBy(['customerGroup' => $this->customerGroup]);
    }
}
