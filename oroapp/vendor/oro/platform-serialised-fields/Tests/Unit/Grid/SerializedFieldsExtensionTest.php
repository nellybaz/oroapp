<?php

namespace Oro\Bundle\EntitySerializedFieldsBundle\Tests\Unit\Grid;

use Oro\Bundle\DataGridBundle\Datagrid\Common\DatagridConfiguration;
use Oro\Bundle\DataGridBundle\Datagrid\DatagridGuesser;
use Oro\Bundle\EntityBundle\ORM\EntityClassResolver;
use Oro\Bundle\EntityConfigBundle\Config\Config;
use Oro\Bundle\EntityConfigBundle\Config\ConfigManager;
use Oro\Bundle\EntityConfigBundle\Config\Id\FieldConfigId;
use Oro\Bundle\EntityConfigBundle\Provider\ConfigProvider;
use Oro\Bundle\EntityExtendBundle\Grid\FieldsHelper;
use Oro\Bundle\EntitySerializedFieldsBundle\Grid\SerializedFieldsExtension;
use Oro\Bundle\FeatureToggleBundle\Checker\FeatureChecker;

class SerializedFieldsExtensionTest extends \PHPUnit_Framework_TestCase
{
    const ENTITY_CLASS_NAME = 'SomeEntityClassName';
    const ENTITY_ALIAS = 'entityAlias';

    /**
     * @var FieldsHelper|\PHPUnit_Framework_MockObject_MockObject
     */
    private $fieldsHelper;

    /**
     * @var ConfigManager|\PHPUnit_Framework_MockObject_MockObject
     */
    private $configManager;

    /**
     * @var EntityClassResolver|\PHPUnit_Framework_MockObject_MockObject
     */
    private $entityClassResolver;

    /**
     * @var DatagridGuesser|\PHPUnit_Framework_MockObject_MockObject
     */
    private $datagridGuesser;

    /**
     * @var SerializedFieldsExtension
     */
    private $extension;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject|FeatureChecker
     */
    private $featureChecker;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        $this->configManager = $this->getMockBuilder(ConfigManager::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->entityClassResolver = $this->getMockBuilder(EntityClassResolver::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->datagridGuesser = $this->getMockBuilder(DatagridGuesser::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->fieldsHelper = $this->getMockBuilder(FieldsHelper::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->featureChecker = $this->getMockBuilder(FeatureChecker::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->featureChecker->expects($this->any())
            ->method('isResourceEnabled')
            ->willReturn(true);

        $this->extension = new SerializedFieldsExtension(
            $this->configManager,
            $this->entityClassResolver,
            $this->datagridGuesser,
            $this->fieldsHelper,
            $this->featureChecker
        );
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown()
    {
        unset(
            $this->configManager,
            $this->entityClassResolver,
            $this->datagridGuesser,
            $this->fieldsHelper,
            $this->featureChecker,
            $this->extension
        );
    }

    /**
     * @return array
     */
    public function getFieldsDataProvider()
    {
        $notSerializedField1 = new FieldConfigId('scope', self::ENTITY_CLASS_NAME, 'notSerializedField1');
        $notSerializedField2 = new FieldConfigId('scope', self::ENTITY_CLASS_NAME, 'notSerializedField2');
        $serializedField1 = new FieldConfigId('scope', self::ENTITY_CLASS_NAME, 'serializedField1');
        $serializedField2 = new FieldConfigId('scope', self::ENTITY_CLASS_NAME, 'serializedField2');

        return [
            'only not serialized fields' => [
                'fields' => [
                    $notSerializedField1,
                    $notSerializedField2,
                ],
                'fieldsData' => [
                    [self::ENTITY_CLASS_NAME, 'notSerializedField1'],
                    [self::ENTITY_CLASS_NAME, 'notSerializedField2'],
                ],
                'configs' => [
                    new Config($notSerializedField1, ['is_serialized' => false]),
                    new Config($notSerializedField2, ['is_serialized' => false])
                ],
                'expectedExpressions' => [
                    sprintf('%s.%s', self::ENTITY_ALIAS, 'serialized_data'),
                    sprintf('%s.%s', self::ENTITY_ALIAS, 'notSerializedField1'),
                    sprintf('%s.%s', self::ENTITY_ALIAS, 'notSerializedField2')
                ]
            ],
            'serialized and not serialized fields' => [
                'fields' => [
                    $notSerializedField1,
                    $notSerializedField2,
                    $serializedField1,
                    $serializedField2
                ],
                'fieldsData' => [
                    [self::ENTITY_CLASS_NAME, 'notSerializedField1'],
                    [self::ENTITY_CLASS_NAME, 'notSerializedField2'],
                    [self::ENTITY_CLASS_NAME, 'serializedField1'],
                    [self::ENTITY_CLASS_NAME, 'serializedField2']
                ],
                'configs' => [
                    new Config($notSerializedField1, ['is_serialized' => false]),
                    new Config($notSerializedField2, ['is_serialized' => false]),
                    new Config($serializedField1, ['is_serialized' => true]),
                    new Config($serializedField2, ['is_serialized' => true])
                ],
                'expectedExpressions' => [
                    sprintf('%s.%s', self::ENTITY_ALIAS, 'serialized_data'),
                    sprintf('%s.%s', self::ENTITY_ALIAS, 'notSerializedField1'),
                    sprintf('%s.%s', self::ENTITY_ALIAS, 'notSerializedField2')
                ]
            ],
            'only serialized fields' => [
                'fields' => [
                    $serializedField1,
                    $serializedField2,
                ],
                'fieldsData' => [
                    [self::ENTITY_CLASS_NAME, 'serializedField1'],
                    [self::ENTITY_CLASS_NAME, 'serializedField2'],
                ],
                'configs' => [
                    new Config($serializedField1, ['is_serialized' => true]),
                    new Config($serializedField2, ['is_serialized' => true])
                ],
                'expectedData' => [
                    sprintf('%s.%s', self::ENTITY_ALIAS, 'serialized_data')
                ]
            ],
        ];
    }

    /**
     * @dataProvider getFieldsDataProvider
     * @param array $fields
     * @param array $fieldsData
     * @param array $configs
     * @param array $expectedData
     */
    public function testBuildExpression(array $fields, array $fieldsData, array $configs, array $expectedData)
    {
        $datagridConfig = DatagridConfiguration::create([]);

        $extendConfigProvider = $this->getMockBuilder(ConfigProvider::class)
            ->disableOriginalConstructor()
            ->getMock();

        $extendConfigProviderMock = $extendConfigProvider
            ->expects($this->exactly(count($fields)))
            ->method('getConfig');

        $this->configManager
            ->expects($this->any())
            ->method('getProvider')
            ->with('extend')
            ->willReturn($extendConfigProvider);

        $this->entityClassResolver
            ->expects($this->any())
            ->method('getEntityClass')
            ->willReturn(self::ENTITY_CLASS_NAME);

        call_user_func_array([$extendConfigProviderMock, 'withConsecutive'], $fieldsData);
        call_user_func_array([$extendConfigProviderMock, 'willReturnOnConsecutiveCalls'], $configs);

        $this->extension->buildExpression($fields, $datagridConfig, self::ENTITY_ALIAS);

        $this->assertEquals($expectedData, $datagridConfig->offsetGetByPath('[source][query][select]'));
    }
}
