<?php
namespace Oro\Bundle\AddressBundle\Tests\Unit\Form\Type;

use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Oro\Bundle\AddressBundle\Form\Type\CountryType;

class CountryTypeTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var CountryType
     */
    protected $type;

    /**
     * Setup test env
     */
    protected function setUp()
    {
        $this->type = new CountryType(
            'Oro\Bundle\AddressBundle\Entity\Address',
            'Oro\Bundle\AddressBundle\Entity\Value\AddressValue'
        );
    }

    public function testSetDefaultOptions()
    {
        /** @var OptionsResolverInterface $resolver */
        $resolver = $this->createMock('Symfony\Component\OptionsResolver\OptionsResolverInterface');
        $resolver->expects($this->once())
            ->method('setDefaults')
            ->with($this->isType('array'));
        $this->type->setDefaultOptions($resolver);
    }

    public function testGetParent()
    {
        $this->assertEquals('genemu_jqueryselect2_translatable_entity', $this->type->getParent());
    }

    public function testGetName()
    {
        $this->assertEquals('oro_country', $this->type->getName());
    }
}
