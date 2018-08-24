<?php

namespace Oro\Bundle\ShoppingListBundle\Tests\Unit\Voter;

use Oro\Bundle\ShoppingListBundle\Manager\ShoppingListLimitManager;
use Oro\Bundle\ShoppingListBundle\Voter\ShoppingListCreateVoter;
use Oro\Bundle\FeatureToggleBundle\Checker\Voter\VoterInterface;
use Oro\Component\Testing\Unit\EntityTrait;

class ShoppingListCreateVoterTest extends \PHPUnit_Framework_TestCase
{
    use EntityTrait;

    /** @var ShoppingListCreateVoter */
    private $shoppingListCreateVoter;

    /** @var ShoppingListLimitManager|\PHPUnit_Framework_MockObject_MockObject */
    private $shoppingListLimitManager;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        $this->shoppingListLimitManager = $this->getMockBuilder(ShoppingListLimitManager::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->shoppingListCreateVoter = new ShoppingListCreateVoter($this->shoppingListLimitManager);
    }

    public function testVoteWrongFeaturePassed()
    {
        $this->assertEquals(
            VoterInterface::FEATURE_ABSTAIN,
            $this->shoppingListCreateVoter->vote('some_dummy_feature')
        );
    }

    public function testVoteFeatureEnabled()
    {
        $this->shoppingListLimitManager->expects($this->once())
            ->method('isCreateEnabled')
            ->willReturn(true);

        $this->assertEquals(
            VoterInterface::FEATURE_ENABLED,
            $this->shoppingListCreateVoter->vote('shopping_list_create')
        );
    }

    public function testVoteFeatureDisabled()
    {
        $this->shoppingListLimitManager->expects($this->once())
            ->method('isCreateEnabled')
            ->willReturn(false);

        $this->assertEquals(
            VoterInterface::FEATURE_DISABLED,
            $this->shoppingListCreateVoter->vote('shopping_list_create')
        );
    }
}
