<?php

namespace Oro\Bundle\BusinessEntitiesBundle\Tests\Unit\Entity;

use Oro\Bundle\BusinessEntitiesBundle\Entity\BaseCart;

class BaseCartTest extends \PHPUnit_Framework_TestCase
{
    const TEST_STRING    = 'testString';
    const TEST_ID        = 123;
    const TEST_FLOAT     = 123.123;

    /** @var BaseCart */
    protected $entity;

    protected function setUp()
    {
        $this->entity = new BaseCart();
    }

    protected function tearDown()
    {
        unset($this->entity);
    }

    /**
     * @dataProvider  getSetDataProvider
     *
     * @param string $property
     * @param mixed  $value
     * @param mixed  $expected
     */
    public function testSetGet($property, $value = null, $expected = null)
    {
        if ($value !== null) {
            call_user_func_array(array($this->entity, 'set' . ucfirst($property)), array($value));
        }

        $this->assertEquals($expected, call_user_func_array(array($this->entity, 'get' . ucfirst($property)), array()));
    }

    /**
     * @return array
     */
    public function getSetDataProvider()
    {
        $created  = new \DateTime('now');
        $updated  = new \DateTime('now');

        return [
            'id'        => ['id', self::TEST_ID, self::TEST_ID],
            'createdAt' => ['createdAt', $created, $created],
            'updatedAt' => ['updatedAt', $updated, $updated],
            'grandTotal' => ['grandTotal', self::TEST_FLOAT, self::TEST_FLOAT],
            'subTotal' => ['subTotal', self::TEST_FLOAT, self::TEST_FLOAT],
            'taxAmount' => ['taxAmount', self::TEST_FLOAT, self::TEST_FLOAT],
        ];
    }
}
