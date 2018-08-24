<?php

namespace Oro\Bundle\SaleBundle\Tests\Unit\Provider;

use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManager;
use Oro\Bundle\CheckoutBundle\Entity\Checkout;
use Oro\Bundle\CheckoutBundle\Entity\Repository\CheckoutRepository;
use Oro\Bundle\CustomerBundle\Entity\CustomerUser;
use Oro\Bundle\SaleBundle\Entity\Quote;
use Oro\Bundle\SaleBundle\Entity\QuoteDemand;
use Oro\Bundle\SaleBundle\Entity\Repository\QuoteDemandRepository;
use Oro\Bundle\SaleBundle\Provider\QuoteCheckoutProvider;

class QuoteCheckoutProviderTest extends \PHPUnit_Framework_TestCase
{
    /** @var ManagerRegistry|\PHPUnit_Framework_MockObject_MockObject */
    protected $managerRegistry;

    /** @var EntityManager|\PHPUnit_Framework_MockObject_MockObject */
    protected $entityManager;

    /** @var QuoteDemandRepository|\PHPUnit_Framework_MockObject_MockObject */
    protected $quoteDemandRepository;

    /** @var CheckoutRepository|\PHPUnit_Framework_MockObject_MockObject */
    protected $checkoutRepository;

    /** @var QuoteCheckoutProvider */
    protected $provider;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        $this->entityManager = $this->createMock(EntityManager::class);
        $this->quoteDemandRepository = $this->createMock(QuoteDemandRepository::class);
        $this->checkoutRepository = $this->createMock(CheckoutRepository::class);
        $this->managerRegistry = $this->createMock(ManagerRegistry::class);

        $this->provider = new QuoteCheckoutProvider($this->managerRegistry);
    }

    /**
     * @dataProvider quoteDemandDataProvider
     *
     * @param QuoteDemand|null $quoteDemand
     */
    public function testGetCheckoutByQuote(QuoteDemand $quoteDemand = null)
    {
        /** @var Quote|\PHPUnit_Framework_MockObject_MockObject $quote */
        $quote = $this->createMock(Quote::class);
        /** @var CustomerUser|\PHPUnit_Framework_MockObject_MockObject $customerUser */
        $customerUser = $this->createMock(CustomerUser::class);
        $workflowName = 'test_workflow';

        $this->managerRegistry
            ->expects($this->exactly($quoteDemand ? 2 : 1))
            ->method('getManagerForClass')
            ->willReturn($this->entityManager);

        $this->quoteDemandRepository
            ->expects($this->once())
            ->method('getQuoteDemandByQuote')
            ->with($quote, $customerUser)
            ->willReturn($quoteDemand);

        $this->checkoutRepository
            ->expects($this->exactly($quoteDemand ? 1 : 0))
            ->method('findCheckoutByCustomerUserAndSourceCriteria')
            ->with($customerUser, ['quoteDemand' => $quoteDemand], $workflowName);

        $this->entityManager
            ->expects($this->exactly($quoteDemand ? 2 : 1))
            ->method('getRepository')
            ->willReturnMap([
                [QuoteDemand::class,$this->quoteDemandRepository],
                [Checkout::class,$this->checkoutRepository],
            ]);

        $this->provider->getCheckoutByQuote($quote, $customerUser, $workflowName);
    }

    /**
     * @return array
     */
    public function quoteDemandDataProvider()
    {
        return [
            'quote demand' => [
                'quoteDemand' => $this->createMock(QuoteDemand::class),
            ],
            'no quote demand' => [
                'quoteDemand' => null,
            ],
        ];
    }
}
