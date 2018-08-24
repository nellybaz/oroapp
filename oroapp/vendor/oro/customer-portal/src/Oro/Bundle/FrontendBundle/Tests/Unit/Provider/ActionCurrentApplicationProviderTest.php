<?php

namespace Oro\Bundle\FrontendBundle\Tests\Unit\Provider;

use Oro\Bundle\ActionBundle\Tests\Unit\Provider\CurrentApplicationProviderTest;
use Oro\Bundle\CustomerBundle\Entity\CustomerUser;
use Oro\Bundle\CustomerBundle\Security\Token\AnonymousCustomerUserToken;
use Oro\Bundle\FrontendBundle\Provider\ActionCurrentApplicationProvider;
use Oro\Bundle\UserBundle\Entity\User;

class ActionCurrentApplicationProviderTest extends CurrentApplicationProviderTest
{
    /** @var ActionCurrentApplicationProvider */
    protected $provider;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        parent::setUp();

        $this->provider = new ActionCurrentApplicationProvider($this->provider, $this->tokenStorage);
    }

    /**
     * @return array
     */
    public function getCurrentApplicationProvider()
    {
        return [
            'backend user' => [
                'token' => $this->createToken(new User(), $this->exactly(2)),
                'expectedResult' => 'default',
            ],
            'frontend user' => [
                'token' => $this->createToken(new CustomerUser()),
                'expectedResult' => 'commerce',
            ],
            'not supported user' => [
                'token' => $this->createToken('anon.', $this->exactly(2)),
                'expectedResult' => null,
            ],
            'empty token' => [
                'token' => null,
                'expectedResult' => null,
            ],
        ];
    }

    /**
     * @return array
     */
    public function isApplicationsValidDataProvider()
    {
        $user = new User();
        $customerUser = new CustomerUser();
        $otherUser = 'anon.';

        return [
            [
                'applications' => ['default', 'commerce'],
                'token' => $this->createToken($user, $this->exactly(2)),
                'expectedResult' => true
            ],
            [
                'applications' => ['default', 'commerce'],
                'token' => $this->createToken($customerUser),
                'expectedResult' => true
            ],
            [
                'applications' => ['default'],
                'token' => $this->createToken($user, $this->exactly(2)),
                'expectedResult' => true
            ],
            [
                'applications' => ['default'],
                'token' => $this->createToken($customerUser),
                'expectedResult' => false
            ],
            [
                'applications' => ['commerce'],
                'token' => $this->createToken($user, $this->exactly(2)),
                'expectedResult' => false
            ],
            [
                'applications' => ['commerce'],
                'token' => $this->createToken($customerUser),
                'expectedResult' => true
            ],
            [
                'applications' => ['default'],
                'token' => $this->createToken($otherUser, $this->exactly(2)),
                'expectedResult' => false
            ],
            [
                'applications' => ['commerce'],
                'token' => $this->createToken($otherUser, $this->exactly(2)),
                'expectedResult' => false
            ],
            [
                'applications' => ['default', 'commerce'],
                'token' => null,
                'expectedResult' => false
            ],
            [
                'applications' => [],
                'token' => null,
                'expectedResult' => true
            ],
        ];
    }

    public function testGetCurrentApplicationForCustomerVisitor()
    {
        $token = $this->createMock(AnonymousCustomerUserToken::class);
        $this->tokenStorage->expects($this->any())
            ->method('getToken')
            ->willReturn($token);

        $this->assertEquals(
            ActionCurrentApplicationProvider::COMMERCE_APPLICATION,
            $this->provider->getCurrentApplication()
        );
    }
}
