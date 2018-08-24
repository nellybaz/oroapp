<?php

namespace Oro\Bundle\CheckoutBundle\Tests\Functional\Entity\Repository;

use Oro\Bundle\TestFrameworkBundle\Test\WebTestCase;
use Oro\Bundle\CheckoutBundle\Entity\Repository\CheckoutWorkflowStateRepository;
use Oro\Bundle\CheckoutBundle\Tests\Functional\DataFixtures\LoadCheckoutWorkflowState;

class CheckoutWorkflowStateRepositoryTest extends WebTestCase
{
    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        $this->initClient();
        $this->loadFixtures(['Oro\Bundle\CheckoutBundle\Tests\Functional\DataFixtures\LoadCheckoutWorkflowState']);
    }

    /**
     * @return CheckoutWorkflowStateRepository
     */
    protected function getRepository()
    {
        return $this->getContainer()->get('doctrine')->getRepository('OroCheckoutBundle:CheckoutWorkflowState');
    }

    public function testGetEntityStateByToken()
    {
        $statesData = LoadCheckoutWorkflowState::getStatesData();
        $stateEntity = $this->getReference(LoadCheckoutWorkflowState::CHECKOUT_STATE_1);
        $stateData = $statesData[LoadCheckoutWorkflowState::CHECKOUT_STATE_1];

        $this->assertEquals(
            $stateEntity,
            $this->getRepository()->getEntityByToken(
                $stateData['entityId'],
                $stateData['entityClass'],
                $stateData['token']
            )
        );
    }

    public function testDeleteEntityStates()
    {
        $statesData = LoadCheckoutWorkflowState::getStatesData();
        $stateData = $statesData[LoadCheckoutWorkflowState::CHECKOUT_STATE_2];
        $this->assertEquals(2, $this->countEntities());

        $this->getRepository()->deleteEntityStates($stateData['entityId'], $stateData['entityClass']);

        $this->assertEquals(1, $this->countEntities());
    }

    /**
     * @return int
     */
    protected function countEntities()
    {
        return $this->getRepository()->createQueryBuilder('t')
            ->select('COUNT(t)')
            ->getQuery()
            ->getSingleScalarResult();
    }
}
