<?php

namespace Oro\Bundle\MagentoBundle\Tests\Unit\Acl\Voter;

use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;

use Oro\Bundle\OrganizationBundle\Entity\Organization;
use Oro\Bundle\MagentoBundle\Acl\Voter\OrganizationAnnotationVoter;

class OrganizationAnnotationVoterTest extends AbstractTwoWaySyncVoterTest
{
    /**
     * @var OrganizationAnnotationVoter
     */
    protected $voter;

    protected function setUp()
    {
        parent::setUp();

        $this->voter = new OrganizationAnnotationVoter($this->doctrineHelper);
        $this->voter->setSettingsProvider($this->settingsProvider);
    }

    protected function tearDown()
    {
        unset($this->voter, $this->doctrineHelper);
    }

    /**
     * @return array
     */
    public function supportsAttributeDataProvider()
    {
        return [
            'VIEW' => ['VIEW', false],
            'CREATE' => ['CREATE', false],
            'EDIT' => ['EDIT', false],
            'DELETE' => ['DELETE', false],
            'ASSIGN' => ['ASSIGN', false],
            'oro_magento_customer_create' => ['oro_magento_customer_create', true],
            'oro_magento_customer_update' => ['oro_magento_customer_update', false],
        ];
    }

    /**
     * @param object $object
     * @param string $className
     * @param array $attributes
     * @param bool $hasOrganizationApplicableChannels
     * @param bool $expected
     *
     * @dataProvider attributesDataProvider
     */
    public function testVote(
        $object,
        $className,
        $attributes,
        $hasOrganizationApplicableChannels,
        $expected
    ) {
        $this->doctrineHelper->expects($this->any())
            ->method('getEntityClass')
            ->with($object)
            ->will($this->returnValue($className));

        $this->voter->setClassName($className);

        $this->settingsProvider->expects($this->any())
            ->method('hasOrganizationApplicableChannels')
            ->will($this->returnValue($hasOrganizationApplicableChannels));

        /** @var TokenInterface $token */
        $token = $this->createMock('Symfony\Component\Security\Core\Authentication\Token\TokenInterface');
        $this->assertEquals(
            $expected,
            $this->voter->vote($token, $object, $attributes)
        );
    }

    /**
     * @return array
     *
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function attributesDataProvider()
    {
        $className = 'Oro\Bundle\OrganizationBundle\Entity\Organization';

        return [
            // default permissions not supported
            [new Organization(), $className, ['CREATE'], false, OrganizationAnnotationVoter::ACCESS_ABSTAIN],
            [new Organization(), $className, ['VIEW'], true, OrganizationAnnotationVoter::ACCESS_ABSTAIN],
            // default permissions with matched channels
            [
                new Organization(),
                $className,
                ['oro_magento_customer_create'],
                true,
                OrganizationAnnotationVoter::ACCESS_GRANTED,
            ],
            [
                new Organization(),
                $className,
                ['oro_magento_customer_update'],
                true,
                OrganizationAnnotationVoter::ACCESS_ABSTAIN,
            ],
            // default permissions without matched channels
            [
                new Organization(),
                $className,
                ['oro_magento_customer_create'],
                false,
                OrganizationAnnotationVoter::ACCESS_DENIED,
            ],
            [
                new Organization(),
                $className,
                ['oro_magento_customer_update'],
                false,
                OrganizationAnnotationVoter::ACCESS_ABSTAIN,
            ],
        ];
    }
}
