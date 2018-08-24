<?php

namespace Oro\Bundle\MarketingListBundle\Tests\Unit\Provider;

use Doctrine\ORM\Mapping\ClassMetadata;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\Common\Persistence\ObjectManager;

use Oro\Bundle\AddressBundle\Entity\AbstractAddress;
use Oro\Bundle\EntityBundle\Provider\VirtualFieldProviderInterface;
use Oro\Bundle\EntityConfigBundle\Config\ConfigInterface;
use Oro\Bundle\EntityConfigBundle\Provider\ConfigProvider;
use Oro\Bundle\MarketingListBundle\Provider\ContactInformationExclusionProvider;

class ContactInformationExclusionProviderTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var ContactInformationExclusionProvider
     */
    protected $provider;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject
     */
    protected $registry;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject
     */
    protected $configProvider;

    /**
     * @var VirtualFieldProviderInterface|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $virtualFieldProvider;

    /**
     * @var ClassMetadata|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $metadata;

    protected function setUp()
    {
        $this->virtualFieldProvider = $this
            ->createMock(VirtualFieldProviderInterface::class);
        $this->metadata = $this
            ->getMockBuilder(ClassMetadata::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->registry = $this->createMock(ManagerRegistry::class);
        $this->configProvider = $this
            ->getMockBuilder(ConfigProvider::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->provider = new ContactInformationExclusionProvider(
            $this->virtualFieldProvider,
            $this->configProvider,
            $this->registry
        );
    }

    public function testIsIgnoredEntityHasContactInformationField()
    {
        $className = 'stdClass';

        $this->virtualFieldProvider->expects($this->once())
            ->method('isVirtualField')
            ->with($className, 'contactInformation')
            ->will($this->returnValue(true));

        $this->assertFalse($this->provider->isIgnoredEntity($className));
    }

    public function testIsIgnoredEntityHasNoContactInformationFields()
    {
        $this->configureRegistry($className = 'stdClass');

        $this->virtualFieldProvider->expects($this->once())
            ->method('isVirtualField')
            ->with($className, 'contactInformation')
            ->will($this->returnValue(false));

        $this->assertTrue($this->provider->isIgnoredEntity($className));
    }

    public function testIsIgnoredField()
    {
        $this->assertFalse($this->provider->isIgnoredField($this->metadata, 'fieldName'));
    }

    public function testIsIgnoredRelation()
    {
        $this->assertFalse($this->provider->isIgnoredRelation($this->metadata, 'associationName'));
    }

    public function testHasFieldConfigContactInformation()
    {
        $this->configureRegistry($className = 'stdClass', true);

        $this->assertFalse($this->provider->isIgnoredEntity($className));
    }

    public function testAddressesAreIgnored()
    {
        $this->assertTrue($this->provider->isIgnoredEntity(AbstractAddress::class));
    }

    private function configureRegistry($className, $withContactInformation = false)
    {
        $om = $this->getMockBuilder(ObjectManager::class)
            ->disableOriginalConstructor()
            ->getMock();

        $om->expects($this->once())
            ->method('getClassMetadata')
            ->with($this->equalTo($className))
            ->willReturn($this->metadata);

        $fieldNames = [];

        if ($withContactInformation) {
            $fieldConfig = $this->createMock(ConfigInterface::class);
            $fieldConfig->expects($this->once())
                ->method('has')
                ->with($this->equalTo('contact_information'))
                ->willReturn(true);

            $this->configProvider->expects($this->once())
                ->method('hasConfig')
                ->willReturn(true);

            $this->configProvider->expects($this->once())
                ->method('getConfig')
                ->willReturn($fieldConfig);

            $fieldNames = ['email'];
        }

        $this->metadata
            ->expects($this->once())
            ->method('getFieldNames')
            ->willReturn($fieldNames);

        $this->registry
            ->expects($this->once())
            ->method('getManagerForClass')
            ->with($this->equalTo($className))
            ->willReturn($om);
    }
}
