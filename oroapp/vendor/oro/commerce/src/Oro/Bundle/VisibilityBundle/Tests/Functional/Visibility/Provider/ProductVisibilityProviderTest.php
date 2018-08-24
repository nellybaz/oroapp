<?php

namespace Oro\Bundle\VisibilityBundle\Tests\Functional\Visibility\Provider;

use Oro\Bundle\ConfigBundle\Config\ConfigManager;
use Oro\Bundle\CustomerBundle\Entity\CustomerGroup;
use Oro\Bundle\CustomerBundle\Migrations\Data\ORM\LoadAnonymousCustomerGroup;
use Oro\Bundle\CustomerBundle\Tests\Functional\DataFixtures\LoadCustomerUserData;
use Oro\Bundle\TestFrameworkBundle\Test\WebTestCase;
use Oro\Bundle\VisibilityBundle\Entity\Visibility\VisibilityInterface;
use Oro\Bundle\VisibilityBundle\Entity\VisibilityResolved\BaseVisibilityResolved;
use Oro\Bundle\VisibilityBundle\Tests\Functional\DataFixtures\LoadCategoryVisibilityData;
use Oro\Bundle\VisibilityBundle\Tests\Functional\DataFixtures\LoadProductVisibilityScopedData;
use Oro\Bundle\VisibilityBundle\Visibility\Provider\ProductVisibilityProvider;
use Oro\Bundle\WebsiteBundle\Migrations\Data\ORM\LoadWebsiteData as LoadWebsiteDataMigration;
use Oro\Bundle\WebsiteBundle\Tests\Functional\DataFixtures\LoadWebsiteData;

class ProductVisibilityProviderTest extends WebTestCase
{
    const PRODUCT_VISIBILITY_CONFIGURATION_PATH = 'oro_visibility.product_visibility';
    const CATEGORY_VISIBILITY_CONFIGURATION_PATH = 'oro_visibility.category_visibility';

    /**
     * @var ConfigManager|\PHPUnit_Framework_MockObject_MockObject
     */
    private $configManager;

    /**
     * @var ProductVisibilityProvider
     */
    private $provider;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        $this->initClient();

        $this->loadFixtures([
            LoadWebsiteData::class,
            LoadCustomerUserData::class,
            LoadCategoryVisibilityData::class,
            LoadProductVisibilityScopedData::class
        ]);

        $this->configManager = $this->getMockBuilder(ConfigManager::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->provider = new ProductVisibilityProvider(
            $this->getContainer()->get('oro_entity.doctrine_helper'),
            $this->configManager,
            $this->getContainer()->get('oro_scope.scope_manager')
        );

        $this->provider->setVisibilityScopeProvider(
            $this->getContainer()->get('oro_visibility.provider.visibility_scope_provider')
        );

        $this->getContainer()->get('oro_visibility.visibility.cache.product.cache_builder')->buildCache();
    }

    /**
     * @return int
     */
    private function getAnonymousCustomerGroupId()
    {
        $customerGroupRepository = $this->getContainer()
            ->get('doctrine')
            ->getManagerForClass('OroCustomerBundle:CustomerGroup')
            ->getRepository('OroCustomerBundle:CustomerGroup');

        /** @var CustomerGroup $customerGroup */
        $customerGroup = $customerGroupRepository
            ->findOneBy(['name' => LoadAnonymousCustomerGroup::GROUP_NAME_NON_AUTHENTICATED]);

        return $customerGroup->getId();
    }

    public function testGetCustomerVisibilitiesForProducts()
    {
        $this->configManager
            ->expects($this->exactly(2))
            ->method('get')
            ->withConsecutive(
                [self::PRODUCT_VISIBILITY_CONFIGURATION_PATH],
                [self::CATEGORY_VISIBILITY_CONFIGURATION_PATH]
            )
            ->willReturnOnConsecutiveCalls(VisibilityInterface::HIDDEN, VisibilityInterface::HIDDEN);

        $this->provider->setProductVisibilitySystemConfigurationPath(static::PRODUCT_VISIBILITY_CONFIGURATION_PATH);
        $this->provider->setCategoryVisibilitySystemConfigurationPath(static::CATEGORY_VISIBILITY_CONFIGURATION_PATH);

        $expectedCustomersVisibilities = [
            [
                'productId' => $this->getReference('product-1')->getId(),
                'customerId' => $this->getReference('customer.level_1')->getId(),
            ],
            [
                'productId' => $this->getReference('product-4')->getId(),
                'customerId' => $this->getReference('customer.orphan')->getId(),
            ],
        ];

        $this->assertEquals(
            $expectedCustomersVisibilities,
            $this->provider->getCustomerVisibilitiesForProducts(
                [
                    $this->getReference('product-1'),
                    $this->getReference('product-4'),
                ],
                $this->getDefaultWebsiteId()
            )
        );
    }

    public function testGetCustomerVisibilitiesForProductsWhenCustomerGroupVisibilityDiffersProduct()
    {
        $this->configManager
            ->expects($this->exactly(2))
            ->method('get')
            ->withConsecutive(
                [self::PRODUCT_VISIBILITY_CONFIGURATION_PATH],
                [self::CATEGORY_VISIBILITY_CONFIGURATION_PATH]
            )
            ->willReturnOnConsecutiveCalls(VisibilityInterface::VISIBLE, VisibilityInterface::VISIBLE);

        $this->provider->setProductVisibilitySystemConfigurationPath(static::PRODUCT_VISIBILITY_CONFIGURATION_PATH);
        $this->provider->setCategoryVisibilitySystemConfigurationPath(static::CATEGORY_VISIBILITY_CONFIGURATION_PATH);

        $expectedCustomersVisibilities = [
            [
                'productId' => $this->getReference('product-3')->getId(),
                'customerId' => $this->getReference('customer.level_1')->getId(),
            ],
            [
                'productId' => $this->getReference('product-3')->getId(),
                'customerId' => $this->getReference('customer.level_1.3')->getId(),
            ],
            [
                'productId' => $this->getReference('product-5')->getId(),
                'customerId' => $this->getReference('customer.level_1.2')->getId(),
            ],
            [
                'productId' => $this->getReference('product-5')->getId(),
                'customerId' => $this->getReference('customer.level_1.2.1')->getId(),
            ],
            [
                'productId' => $this->getReference('product-5')->getId(),
                'customerId' => $this->getReference('customer.level_1.2.1.1')->getId(),
            ],
            [
                'productId' => $this->getReference('product-5')->getId(),
                'customerId' => $this->getReference('customer.level_1.3')->getId(),
            ],
        ];

        $this->assertEquals(
            $expectedCustomersVisibilities,
            $this->provider->getCustomerVisibilitiesForProducts(
                [
                    $this->getReference('product-3'),
                    $this->getReference('product-5')
                ],
                $this->getDefaultWebsiteId()
            )
        );
    }

    public function testGetCustomerVisibilitiesForProductsWhenCustomerGroupVisibilityDiffers()
    {
        $this->configManager
            ->expects($this->exactly(2))
            ->method('get')
            ->withConsecutive(
                [self::PRODUCT_VISIBILITY_CONFIGURATION_PATH],
                [self::CATEGORY_VISIBILITY_CONFIGURATION_PATH]
            )
            ->willReturnOnConsecutiveCalls(VisibilityInterface::VISIBLE, VisibilityInterface::VISIBLE);

        $this->provider->setProductVisibilitySystemConfigurationPath(static::PRODUCT_VISIBILITY_CONFIGURATION_PATH);
        $this->provider->setCategoryVisibilitySystemConfigurationPath(static::CATEGORY_VISIBILITY_CONFIGURATION_PATH);

        $expectedCustomersVisibilities = [
            [
                'productId' => $this->getReference('product-1')->getId(),
                'customerId' => $this->getReference('customer.level_1.3')->getId(),
            ],
            [
                'productId' => $this->getReference('product-2')->getId(),
                'customerId' => $this->getReference('customer.level_1')->getId(),
            ],
            [
                'productId' => $this->getReference('product-2')->getId(),
                'customerId' => $this->getReference('customer.level_1.2')->getId(),
            ],
            [
                'productId' => $this->getReference('product-2')->getId(),
                'customerId' => $this->getReference('customer.level_1.2.1')->getId(),
            ],
            [
                'productId' => $this->getReference('product-2')->getId(),
                'customerId' => $this->getReference('customer.level_1.2.1.1')->getId(),
            ],
        ];

        $this->assertEquals(
            $expectedCustomersVisibilities,
            $this->provider->getCustomerVisibilitiesForProducts(
                [
                    $this->getReference('product-1'),
                    $this->getReference('product-2')
                ],
                $this->getDefaultWebsiteId()
            )
        );
    }

    public function testGetCustomerVisibilitiesForProductsWhenCustomerGroupVisibilityDiffersAndInversed()
    {
        $this->configManager
            ->expects($this->exactly(2))
            ->method('get')
            ->withConsecutive(
                [self::PRODUCT_VISIBILITY_CONFIGURATION_PATH],
                [self::CATEGORY_VISIBILITY_CONFIGURATION_PATH]
            )
            ->willReturnOnConsecutiveCalls(VisibilityInterface::HIDDEN, VisibilityInterface::VISIBLE);

        $this->provider->setProductVisibilitySystemConfigurationPath(static::PRODUCT_VISIBILITY_CONFIGURATION_PATH);
        $this->provider->setCategoryVisibilitySystemConfigurationPath(static::CATEGORY_VISIBILITY_CONFIGURATION_PATH);

        $expectedCustomersVisibilities = [
            [
                'productId' => $this->getReference('product-1')->getId(),
                'customerId' => 1
            ],
            [
                'productId' => $this->getReference('product-1')->getId(),
                'customerId' => $this->getReference('customer.orphan')->getId(),
            ],
            [
                'productId' => $this->getReference('product-1')->getId(),
                'customerId' => $this->getReference('customer.level_1.1')->getId(),
            ],
            [
                'productId' => $this->getReference('product-1')->getId(),
                'customerId' => $this->getReference('customer.level_1.1.1')->getId(),
            ],
            [
                'productId' => $this->getReference('product-1')->getId(),
                'customerId' => $this->getReference('customer.level_1.1.2')->getId(),
            ],
            [
                'productId' => $this->getReference('product-1')->getId(),
                'customerId' => $this->getReference('customer.level_1.2')->getId(),
            ],
            [
                'productId' => $this->getReference('product-1')->getId(),
                'customerId' => $this->getReference('customer.level_1.2.1')->getId(),
            ],
            [
                'productId' => $this->getReference('product-1')->getId(),
                'customerId' => $this->getReference('customer.level_1.2.1.1')->getId(),
            ],
            [
                'productId' => $this->getReference('product-1')->getId(),
                'customerId' => $this->getReference('customer.level_1.3')->getId(),
            ],
            [
                'productId' => $this->getReference('product-1')->getId(),
                'customerId' => $this->getReference('customer.level_1.3.1')->getId(),
            ],
            [
                'productId' => $this->getReference('product-1')->getId(),
                'customerId' => $this->getReference('customer.level_1.3.1.1')->getId(),
            ],
            [
                'productId' => $this->getReference('product-1')->getId(),
                'customerId' => $this->getReference('customer.level_1.4')->getId(),
            ],
            [
                'productId' => $this->getReference('product-1')->getId(),
                'customerId' => $this->getReference('customer.level_1.4.1')->getId(),
            ],
            [
                'productId' => $this->getReference('product-1')->getId(),
                'customerId' => $this->getReference('customer.level_1.4.1.1')->getId(),
            ],
            [
                'productId' => $this->getReference('product-1')->getId(),
                'customerId' => $this->getReference('customer.level_1_1')->getId(),
            ],
        ];

        $this->assertEquals(
            $expectedCustomersVisibilities,
            $this->provider->getCustomerVisibilitiesForProducts(
                [
                    $this->getReference('product-1'),
                ],
                $this->getDefaultWebsiteId()
            )
        );
    }

    /**
     * @return int
     */
    private function getDefaultWebsiteId()
    {
        return $this->getContainer()
            ->get('doctrine')
            ->getManagerForClass('OroWebsiteBundle:Website')
            ->getRepository('OroWebsiteBundle:Website')
            ->findOneBy(['name' => LoadWebsiteDataMigration::DEFAULT_WEBSITE_NAME])
            ->getId();
    }

    public function testGetNewUserAndAnonymousVisibilitiesForProducts()
    {
        $this->configManager
            ->expects($this->exactly(3))
            ->method('get')
            ->withConsecutive(
                [self::PRODUCT_VISIBILITY_CONFIGURATION_PATH],
                [self::CATEGORY_VISIBILITY_CONFIGURATION_PATH],
                ['oro_customer.anonymous_customer_group']
            )
            ->willReturnOnConsecutiveCalls(
                VisibilityInterface::HIDDEN,
                VisibilityInterface::HIDDEN,
                $this->getAnonymousCustomerGroupId()
            );

        $this->provider->setProductVisibilitySystemConfigurationPath(static::PRODUCT_VISIBILITY_CONFIGURATION_PATH);
        $this->provider->setCategoryVisibilitySystemConfigurationPath(static::CATEGORY_VISIBILITY_CONFIGURATION_PATH);

        $expectedVisibilities = [
            [
                'productId' => $this->getReference('product-3')->getId(),
                'visibility_new' => BaseVisibilityResolved::VISIBILITY_VISIBLE,
                'visibility_anonymous' => BaseVisibilityResolved::VISIBILITY_VISIBLE,
                'is_visible_by_default' => BaseVisibilityResolved::VISIBILITY_HIDDEN
            ],
            [
                'productId' => $this->getReference('product-5')->getId(),
                'visibility_new' => BaseVisibilityResolved::VISIBILITY_HIDDEN,
                'visibility_anonymous' => BaseVisibilityResolved::VISIBILITY_VISIBLE,
                'is_visible_by_default' => BaseVisibilityResolved::VISIBILITY_HIDDEN
            ],
        ];

        $this->assertEquals(
            $expectedVisibilities,
            $this->provider->getNewUserAndAnonymousVisibilitiesForProducts([
                $this->getReference('product-3'),
                $this->getReference('product-5'),
            ], $this->getDefaultWebsiteId())
        );
    }
}
