<?php

namespace Oro\Bundle\TaxBundle\Tests\Unit\Resolver\SellerResolver\VatResolver\EUVatResolver;

use Brick\Math\BigDecimal;

use Oro\Bundle\AddressBundle\Entity\Country;
use Oro\Bundle\TaxBundle\Entity\Tax;
use Oro\Bundle\TaxBundle\Entity\TaxRule;
use Oro\Bundle\TaxBundle\Matcher\CountryMatcher;
use Oro\Bundle\TaxBundle\Model\Address;
use Oro\Bundle\TaxBundle\Model\Result;
use Oro\Bundle\TaxBundle\Model\Taxable;
use Oro\Bundle\TaxBundle\Resolver\RowTotalResolver;
use Oro\Bundle\TaxBundle\Resolver\SellerResolver\VatResolver\EUVatResolver\DigitalItemResolver;
use Oro\Bundle\TaxBundle\Resolver\UnitResolver;

class DigitalItemResolverTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var UnitResolver|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $unitResolver;

    /**
     * @var RowTotalResolver|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $rowTotalResolver;

    /**
     * @var CountryMatcher|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $matcher;

    /** @var  DigitalItemResolver|\PHPUnit_Framework_MockObject_MockObject */
    protected $resolver;

    public function setUp()
    {
        $this->unitResolver = $this->getMockBuilder('Oro\Bundle\TaxBundle\Resolver\UnitResolver')
            ->disableOriginalConstructor()
            ->getMock();

        $this->rowTotalResolver = $this->getMockBuilder('Oro\Bundle\TaxBundle\Resolver\RowTotalResolver')
            ->disableOriginalConstructor()
            ->getMock();

        $this->matcher = $this->getMockBuilder('Oro\Bundle\TaxBundle\Matcher\CountryMatcher')
            ->disableOriginalConstructor()
            ->getMock();

        $this->resolver = new DigitalItemResolver($this->unitResolver, $this->rowTotalResolver, $this->matcher);
    }

    /**
     * @dataProvider resolveDataProvider
     * @param string $taxableAmount
     * @param array $taxRules
     */
    public function testResolve($taxableAmount, array $taxRules)
    {
        $taxable = new Taxable();
        $taxable->setPrice($taxableAmount);
        $taxable->setQuantity(3);
        $taxable->setAmount($taxableAmount);
        $taxable->setDestination((new Address())->setCountry(new Country('UK')));
        $taxable->getContext()->offsetSet(Taxable::DIGITAL_PRODUCT, true);
        $taxable->getContext()->offsetSet(Taxable::PRODUCT_TAX_CODE, 'prod_tax_code');


        $this->matcher->expects($this->once())->method('match')->willReturn($taxRules);

        $taxableUnitPrice = BigDecimal::of($taxable->getPrice());

        $this->rowTotalResolver->expects($this->once())
            ->method('resolveRowTotal')
            ->with($taxable->getResult(), $taxRules, $taxableUnitPrice, $taxable->getQuantity());

        $this->unitResolver->expects($this->once())
            ->method('resolveUnitPrice')
            ->with($taxable->getResult(), $taxRules, $taxableUnitPrice);

        $this->resolver->resolve($taxable);
    }

    /**
     * @return array
     */
    public function resolveDataProvider()
    {
        return [
            [
                '19.99',
                [$this->getTaxRule('city', '0.08')],
            ],
            [
                '19.99',
                [
                    $this->getTaxRule('city', '0.08'),
                    $this->getTaxRule('region', '0.07'),
                ],
            ],
        ];
    }

    public function testResolveWithEmptyTaxable()
    {
        $taxable = new Taxable();

        $this->assertNothing();
        $this->resolver->resolve($taxable);
    }

    public function testResolveWithEmptyAddress()
    {
        $taxable = new Taxable();
        $taxable->setQuantity(3);
        $taxable->setAmount('20');

        $this->assertNothing();
        $this->resolver->resolve($taxable);

        $item = new Taxable();
        $taxable->addItem($item);
        $this->resolver->resolve($taxable);

        $taxable->removeItem($item);
        $taxable->setPrice('20');
        $this->resolver->resolve($taxable);

        $taxable->setOrigin(new Address());
        $this->resolver->resolve($taxable);
    }

    public function testResultLocked()
    {
        $result = new Result();
        $result->lockResult();
        $taxable = new Taxable();
        $taxable->setPrice('20');
        $taxable->setDestination(new Address());
        $taxable->setResult($result);

        $this->assertNothing();

        $this->resolver->resolve($taxable);
    }

    /**
     * @param string $taxCode
     * @param string $taxRate
     * @return TaxRule
     */
    protected function getTaxRule($taxCode, $taxRate)
    {
        $taxRule = new TaxRule();
        $tax = new Tax();
        $tax
            ->setRate($taxRate)
            ->setCode($taxCode);
        $taxRule->setTax($tax);

        return $taxRule;
    }

    protected function assertNothing()
    {
        $this->matcher->expects($this->never())->method($this->anything());
        $this->unitResolver->expects($this->never())->method($this->anything());
        $this->rowTotalResolver->expects($this->never())->method($this->anything());
    }
}
