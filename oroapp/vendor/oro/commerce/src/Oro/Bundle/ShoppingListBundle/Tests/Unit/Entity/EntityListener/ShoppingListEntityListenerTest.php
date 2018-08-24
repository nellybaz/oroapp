<?php

namespace Oro\Bundle\ShoppingList\Tests\Unit\Entity\EntityListener;

use Oro\Bundle\CustomerBundle\Security\Token\AnonymousCustomerUserToken;
use Oro\Bundle\SecurityBundle\Authentication\TokenAccessorInterface;
use Oro\Bundle\ShoppingListBundle\Entity\EntityListener\ShoppingListEntityListener;
use Oro\Bundle\ShoppingListBundle\Entity\ShoppingList;
use Oro\Bundle\UserBundle\Entity\User;
use Oro\Bundle\UserBundle\Provider\DefaultUserProvider;

class ShoppingListEntityListenerTest extends \PHPUnit_Framework_TestCase
{
    /** @var DefaultUserProvider|\PHPUnit_Framework_MockObject_MockObject */
    private $defaultUserProvider;

    /** @var TokenAccessorInterface|\PHPUnit_Framework_MockObject_MockObject */
    private $tokenAccessor;

    /** @var ShoppingListEntityListener */
    private $listener;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        $this->defaultUserProvider = $this->createMock(DefaultUserProvider::class);
        $this->tokenAccessor = $this->createMock(TokenAccessorInterface::class);

        $this->listener = new ShoppingListEntityListener($this->defaultUserProvider, $this->tokenAccessor);
    }

    /**
     * @dataProvider persistNotSetDefaultOwnerDataProvider
     *
     * @param string $token
     * @param ShoppingList $shoppingList
     */
    public function testPrePersistNotSetDefaultOwner($token, ShoppingList $shoppingList)
    {
        $this->tokenAccessor
            ->expects($this->once())
            ->method('getToken')
            ->willReturn($token);

        $newUser = new User();
        $newUser->setFirstName('first_name');
        $this->listener->prePersist($shoppingList);
        $this->assertNotSame($newUser, $shoppingList->getOwner());
    }

    /**
     * @return array
     */
    public function persistNotSetDefaultOwnerDataProvider()
    {
        return [
            'with token and without owner' => [
                'token' => new AnonymousCustomerUserToken(''),
                'shoppingList' => new ShoppingList()
            ],
            'without token and without owner' => [
                'token' => null,
                'shoppingList' => new ShoppingList()
            ],
            'unsupported token and without owner' => [
                'token' => new \stdClass(),
                'shoppingList' => new ShoppingList()
            ],
            'with owner' => [
                'token' => new AnonymousCustomerUserToken(''),
                'shoppingList' => (new ShoppingList())->setOwner(new User())
            ]
        ];
    }

    /**
     * @dataProvider persistSetDefaultOwnerDataProvider
     *
     * @param string $token
     * @param ShoppingList $shoppingList
     */
    public function testPrePersistSetDefaultOwner($token, ShoppingList $shoppingList)
    {
        $this->tokenAccessor
            ->expects($this->once())
            ->method('getToken')
            ->willReturn($token);

        $newUser = new User();
        $newUser->setFirstName('first_name');
        $this->defaultUserProvider
            ->expects($this->once())
            ->method('getDefaultUser')
            ->with('oro_shopping_list', 'default_guest_shopping_list_owner')
            ->willReturn($newUser);

        $this->listener->prePersist($shoppingList);
        $this->assertSame($newUser, $shoppingList->getOwner());
    }

    /**
     * @return array
     */
    public function persistSetDefaultOwnerDataProvider()
    {
        return [
            'with token and without owner' => [
                'token' => new AnonymousCustomerUserToken(''),
                'shoppingList' => new ShoppingList()
            ]
        ];
    }
}
