<?php

namespace Oro\Bundle\FormBundle\Tests\Unit\Form\Type;

use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Mapping\ClassMetadataInfo;

use Symfony\Component\Form\PreloadedExtension;
use Symfony\Component\Form\Test\FormIntegrationTestCase;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

use Oro\Bundle\EntityBundle\ORM\DoctrineHelper;
use Oro\Bundle\FormBundle\Form\Type\EntityIdentifierType;
use Oro\Bundle\FormBundle\Form\Type\MultipleEntityType;

class MultipleEntityTypeTest extends FormIntegrationTestCase
{
    const PERMISSION_ALLOW    = 'test_permission_allow';
    const PERMISSION_DISALLOW = 'test_permission_disallow';

    /** @var \PHPUnit_Framework_MockObject_MockObject */
    protected $doctrineHelper;

    /** @var \PHPUnit_Framework_MockObject_MockObject */
    protected $authorizationChecker;

    /** @var \PHPUnit_Framework_MockObject_MockObject */
    protected $registry;

    /** @var \PHPUnit_Framework_MockObject_MockObject */
    protected $em;

    protected function setUp()
    {
        $this->doctrineHelper = $this->createMock(DoctrineHelper::class);
        $this->authorizationChecker = $this->createMock(AuthorizationCheckerInterface::class);

        $metadata = new ClassMetadataInfo('\stdClass');
        $metadata->identifier[] = 'id';

        $this->em = $this->createMock(EntityManager::class);
        $this->em->expects($this->any())->method('getClassMetadata')
            ->willReturnMap([['\stdClass', $metadata]]);

        $this->registry = $this->createMock(ManagerRegistry::class);
        $this->registry->expects($this->any())->method('getManagerForClass')
            ->willReturnMap([['\stdClass', $this->em]]);

        parent::setUp();
    }

    protected function tearDown()
    {
        unset($this->authorizationChecker, $this->registry);

        parent::tearDown();
    }

    /**
     * @return array
     */
    protected function getExtensions()
    {
        $types = [
            'oro_multiple_entity'   => new MultipleEntityType($this->doctrineHelper, $this->authorizationChecker),
            'oro_entity_identifier' => new EntityIdentifierType($this->registry)
        ];

        return [
            new PreloadedExtension($types, [])
        ];
    }

    public function testBuildForm()
    {
        $form = $this->factory->create('oro_multiple_entity', null, ['class' => '\stdClass']);

        $this->assertTrue($form->has('added'));
        $this->assertTrue($form->has('removed'));
    }

    public function testHasKnownOptions()
    {
        $form = $this->factory->create('oro_multiple_entity', null, ['class' => '\stdClass']);

        $knownOptions = [
            'add_acl_resource',
            'class',
            'default_element',
            'grid_url',
            'initial_elements',
            'selector_window_title',
            'extra_config',
            'selection_url',
            'selection_route',
            'selection_route_parameters',
        ];

        foreach ($knownOptions as $option) {
            $this->assertTrue($form->getConfig()->hasOption($option));
        }
    }

    /**
     * @dataProvider optionsDataProvider
     *
     * @param array  $options
     * @param string $expectedKey
     * @param mixed  $expectedValue
     */
    public function testViewHasVars($options, $expectedKey, $expectedValue)
    {
        $form = $this->factory->create('oro_multiple_entity', null, array_merge($options, ['class' => '\stdClass']));

        if (isset($options['add_acl_resource'])) {
            $this->authorizationChecker->expects($this->once())
                ->method('isGranted')
                ->with($options['add_acl_resource'])
                ->will($this->returnValue($expectedValue));
        } else {
            $this->authorizationChecker->expects($this->never())
                ->method('isGranted');
        }

        $view = $form->createView();
        $this->assertArrayHasKey($expectedKey, $view->vars);
        $this->assertEquals($expectedValue, $view->vars[$expectedKey]);
    }

    /**
     * @return array
     */
    public function optionsDataProvider()
    {
        return [
            [
                [],
                'allow_action',
                true
            ],
            [
                ['add_acl_resource' => self::PERMISSION_ALLOW],
                'allow_action',
                true
            ],
            [
                ['add_acl_resource' => self::PERMISSION_DISALLOW],
                'allow_action',
                false
            ],
            [
                ['grid_url' => '/test'],
                'grid_url',
                '/test'
            ],
            [
                [],
                'grid_url',
                null
            ],
            [
                ['initial_elements' => []],
                'initial_elements',
                []
            ],
            [
                [],
                'initial_elements',
                null
            ],
            [
                ['selector_window_title' => 'Select'],
                'selector_window_title',
                'Select'
            ],
            [
                [],
                'selector_window_title',
                null
            ],
            [
                ['default_element' => 'name'],
                'default_element',
                'name'
            ],
            [
                [],
                'default_element',
                null
            ],
            [
                '$formOptions'   => ['grid_url' => 'testUrl'],
                '$expectedKey'   => 'grid_url',
                '$expectedValue' => 'testUrl',
            ],
            [
                '$formOptions'   => ['selection_url' => 'testUrlSelection'],
                '$expectedKey'   => 'selection_url',
                '$expectedValue' => 'testUrlSelection',
            ],
            [
                '$formOptions'   => ['selection_route' => 'testRoute'],
                '$expectedKey'   => 'selection_route',
                '$expectedValue' => 'testRoute',
            ],
            [
                '$formOptions'   => ['selection_route_parameters' => ['testParam1']],
                '$expectedKey'   => 'selection_route_parameters',
                '$expectedValue' => ['testParam1'],
            ]
        ];
    }
}
