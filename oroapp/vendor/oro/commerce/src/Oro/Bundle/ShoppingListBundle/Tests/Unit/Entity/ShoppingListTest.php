<?php

namespace Oro\Bundle\ShoppingListBundle\Tests\Unit\Entity;

use Oro\Bundle\CustomerBundle\Entity\CustomerVisitor;
use Oro\Bundle\OrganizationBundle\Entity\Organization;
use Oro\Bundle\ShoppingListBundle\Tests\Unit\Entity\Stub\ShoppingListStub;
use Oro\Bundle\UserBundle\Entity\User;
use Oro\Component\Testing\Unit\EntityTestCaseTrait;
use Oro\Component\Testing\Unit\EntityTrait;
use Oro\Bundle\PricingBundle\SubtotalProcessor\Model\Subtotal;
use Oro\Bundle\ShoppingListBundle\Entity\LineItem;
use Oro\Bundle\CustomerBundle\Entity\CustomerUser;
use Oro\Bundle\CustomerBundle\Entity\Customer;
use Oro\Bundle\ShoppingListBundle\Entity\ShoppingList;

class ShoppingListTest extends \PHPUnit_Framework_TestCase
{
    use EntityTestCaseTrait;
    use EntityTrait;

    public function testProperties()
    {
        $now = new \DateTime('now');
        $properties = [
            ['id', '123'],
            ['label', 'label-test-123'],
            ['notes', 'notes-test-123'],
            ['subtotal', new Subtotal()],
            ['organization', new Organization()],
            ['owner', new User()],
            ['customer', new Customer()],
            ['customerUser', new CustomerUser()],
            ['createdAt', $now, false],
            ['updatedAt', $now, false],
        ];

        $this->assertPropertyAccessors(new ShoppingList(), $properties);
        $this->assertPropertyCollections(new ShoppingList(), [
            ['lineItems', new LineItem()]
        ]);

        $label = 'label-test-775';
        $shoppingList = new ShoppingList();
        $shoppingList->setLabel($label);
        $this->assertEquals($label, $shoppingList);
    }

    public function testPrePersist()
    {
        $shoppingList = new ShoppingList();
        $shoppingList->prePersist();
        $this->assertInstanceOf('\DateTime', $shoppingList->getCreatedAt());
        $this->assertInstanceOf('\DateTime', $shoppingList->getUpdatedAt());
    }

    public function testPreUpdate()
    {
        $shoppingList = new ShoppingList();
        $shoppingList->preUpdate();
        $this->assertInstanceOf('\DateTime', $shoppingList->getUpdatedAt());
    }

    public function testSourceDocument()
    {
        $shoppingList = $this->getEntity(
            'Oro\Bundle\ShoppingListBundle\Entity\ShoppingList',
            [
                'id' => 1,
                'label' => 'TEST'
            ]
        );

        $this->assertSame($shoppingList, $shoppingList->getSourceDocument());
        $this->assertEquals('TEST', $shoppingList->getSourceDocumentIdentifier());
    }

    public function testGetVisitor()
    {
        $visitor = new CustomerVisitor();

        $shoppingList = new ShoppingListStub();
        $shoppingList->addVisitor($visitor);

        $this->assertSame($visitor, $shoppingList->getVisitor());
    }

    public function testJsonSerialize()
    {
        $shoppingList = $this->getEntity(
            'Oro\Bundle\ShoppingListBundle\Entity\ShoppingList',
            [
                'id' => 1,
                'label' => 'TEST'
            ]
        );

        $this->assertEquals('{"id":1,"label":"TEST","is_current":false}', json_encode($shoppingList));
    }
}
