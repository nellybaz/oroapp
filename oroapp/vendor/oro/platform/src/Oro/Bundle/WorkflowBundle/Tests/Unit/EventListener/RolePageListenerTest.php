<?php

namespace Oro\Bundle\WorkflowBundle\Tests\Unit\EventListener;

use Symfony\Component\Form\FormView;
use Symfony\Component\HttpFoundation\Request;

use Oro\Bundle\UIBundle\Event\BeforeFormRenderEvent;
use Oro\Bundle\UIBundle\Event\BeforeViewRenderEvent;
use Oro\Bundle\UserBundle\Entity\Role;
use Oro\Bundle\WorkflowBundle\EventListener\RolePageListener;

class RolePageListenerTest extends \PHPUnit_Framework_TestCase
{
    /** @var RolePageListener */
    protected $listener;

    protected function setUp()
    {
        $translator = $this->createMock('Symfony\Component\Translation\TranslatorInterface');
        $translator->expects($this->any())
            ->method('trans')
            ->willReturnCallback(function ($value) {
                return 'translated: ' . $value;
            });

        $this->listener = new RolePageListener($translator);
    }

    public function testOnUpdatePageRenderWithoutRequest()
    {
        $event = new BeforeFormRenderEvent(
            $this->createMock('Symfony\Component\Form\FormView'),
            [],
            $this->createMock('\Twig_Environment'),
            null
        );

        $this->listener->onUpdatePageRender($event);

        $this->assertEquals([], $event->getFormData());
    }

    public function testOnUpdatePageRenderOnWrongPage()
    {
        $event = new BeforeFormRenderEvent(
            $this->createMock('Symfony\Component\Form\FormView'),
            [],
            $this->createMock('\Twig_Environment'),
            null
        );

        $this->listener->setRequest(new Request([], [], ['_route' => 'some_route']));

        $this->listener->onUpdatePageRender($event);

        $this->assertEquals([], $event->getFormData());
    }

    public function testOnUpdatePageRenderOnNonCloneRolePage()
    {
        $event = new BeforeFormRenderEvent(
            $this->createMock('Symfony\Component\Form\FormView'),
            [],
            $this->createMock('\Twig_Environment'),
            null
        );

        $this->listener->setRequest(
            new Request(
                [],
                [],
                ['_route' => 'oro_action_widget_form', '_route_params' => ['operationName' => 'some_operation']]
            )
        );

        $this->listener->onUpdatePageRender($event);

        $this->assertEquals([], $event->getFormData());
    }

    /**
     * @dataProvider onUpdatePageRenderRoutesProvider
     */
    public function testOnUpdatePageRenderWithEntityInEvent($routeName, $routeParameters = [])
    {
        $entity = new Role();
        $form = new FormView();
        $form->vars['value'] = new \stdClass();
        $twig = $this->createMock('\Twig_Environment');
        $event = new BeforeFormRenderEvent(
            $form,
            [
                'dataBlocks' => [
                    ['first block'],
                    ['second block'],
                    ['third block']
                ]
            ],
            $twig,
            $entity
        );

        $renderedHtml = '<div>Rendered datagrid position</div>';
        $twig->expects($this->once())
            ->method('render')
            ->with(
                'OroWorkflowBundle:Datagrid:aclGrid.html.twig',
                [
                    'entity'     => $entity,
                    'isReadonly' => false
                ]
            )
            ->willReturn($renderedHtml);


        $this->listener->setRequest(new Request([], [], ['_route' => $routeName, '_route_params' => $routeParameters]));

        $this->listener->onUpdatePageRender($event);

        $data = $event->getFormData();
        $this->assertCount(4, $data['dataBlocks']);
        $workflowBlock = $data['dataBlocks'][3];
        $this->assertEquals(
            'translated: oro.workflow.workflowdefinition.entity_plural_label',
            $workflowBlock['title']
        );
        $this->assertEquals(
            [['data' => [$renderedHtml]]],
            $workflowBlock['subblocks']
        );
    }

    /**
     * @dataProvider onUpdatePageRenderRoutesProvider
     */
    public function testOnUpdatePageRenderWithoutEntityInEvent($routeName, $routeParameters = [])
    {
        $entity = new Role();
        $form = new FormView();
        $form->vars['value'] = $entity;
        $twig = $this->createMock('\Twig_Environment');
        $event = new BeforeFormRenderEvent(
            $form,
            [
                'dataBlocks' => [
                    ['first block'],
                    ['second block'],
                    ['third block']
                ]
            ],
            $twig,
            null
        );

        $renderedHtml = '<div>Rendered datagrid position</div>';
        $twig->expects($this->once())
            ->method('render')
            ->with(
                'OroWorkflowBundle:Datagrid:aclGrid.html.twig',
                [
                    'entity'     => $entity,
                    'isReadonly' => false
                ]
            )
            ->willReturn($renderedHtml);


        $this->listener->setRequest(new Request([], [], ['_route' => $routeName, '_route_params' => $routeParameters]));

        $this->listener->onUpdatePageRender($event);

        $data = $event->getFormData();
        $this->assertCount(4, $data['dataBlocks']);
        $workflowBlock = $data['dataBlocks'][3];
        $this->assertEquals(
            'translated: oro.workflow.workflowdefinition.entity_plural_label',
            $workflowBlock['title']
        );
        $this->assertEquals(
            [['data' => [$renderedHtml]]],
            $workflowBlock['subblocks']
        );
    }

    public function onUpdatePageRenderRoutesProvider()
    {
        return [
            ['oro_user_role_update'],
            ['oro_user_role_create'],
            ['oro_action_widget_form', ['operationName' => 'clone_role']],
        ];
    }

    public function testOnViewPageRenderWithoutRequest()
    {
        $event = new BeforeViewRenderEvent(
            $this->createMock('\Twig_Environment'),
            [],
            new \stdClass()
        );

        $this->listener->onViewPageRender($event);

        $this->assertEquals([], $event->getData());
    }

    public function testOnViewPageRenderOnNonUpdateRolePage()
    {
        $event = new BeforeViewRenderEvent(
            $this->createMock('\Twig_Environment'),
            [],
            new \stdClass()
        );

        $this->listener->setRequest(new Request([], [], ['_route' => 'some_route']));

        $this->listener->onViewPageRender($event);

        $this->assertEquals([], $event->getData());
    }

    public function testOnViewPageRender()
    {
        $entity = new Role();
        $twig = $this->createMock('\Twig_Environment');
        $event = new BeforeViewRenderEvent(
            $twig,
            [
                'dataBlocks' => [
                    ['first block'],
                    ['second block'],
                    ['third block']
                ]
            ],
            $entity
        );


        $renderedHtml = '<div>Rendered datagrid position</div>';
        $twig->expects($this->once())
            ->method('render')
            ->with(
                'OroWorkflowBundle:Datagrid:aclGrid.html.twig',
                [
                    'entity'     => $entity,
                    'isReadonly' => true
                ]
            )
            ->willReturn($renderedHtml);


        $this->listener->setRequest(new Request([], [], ['_route' => 'oro_user_role_view']));

        $this->listener->onViewPageRender($event);

        $data = $event->getData();
        $this->assertCount(4, $data['dataBlocks']);
        $workflowBlock = $data['dataBlocks'][3];
        $this->assertEquals(
            'translated: oro.workflow.workflowdefinition.entity_plural_label',
            $workflowBlock['title']
        );
        $this->assertEquals(
            [['data' => [$renderedHtml]]],
            $workflowBlock['subblocks']
        );
    }
}
