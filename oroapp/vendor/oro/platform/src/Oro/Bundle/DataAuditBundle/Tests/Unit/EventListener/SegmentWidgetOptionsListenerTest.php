<?php

namespace Oro\Bundle\DataAuditBundle\Tests\Unit\EventListener;

use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

use Oro\Bundle\DataAuditBundle\EventListener\SegmentWidgetOptionsListener;
use Oro\Bundle\SegmentBundle\Event\WidgetOptionsLoadEvent;
use Oro\Bundle\DataAuditBundle\SegmentWidget\ContextChecker;

class SegmentWidgetOptionsListenerTest extends \PHPUnit_Framework_TestCase
{
    /** @var AuthorizationCheckerInterface|\PHPUnit_Framework_MockObject_MockObject */
    protected $authorizationChecker;

    /** @var SegmentWidgetOptionsListener */
    protected $listener;

    public function setUp()
    {
        $this->authorizationChecker = $this->createMock(AuthorizationCheckerInterface::class);

        $this->listener = new SegmentWidgetOptionsListener(
            $this->authorizationChecker,
            new ContextChecker()
        );
    }

    public function testListener()
    {
        $options = [
            'column'       => [],
            'extensions'   => [],
            'entityChoice' => 'choice',
        ];

        $expectedOptions = [
            'column'            => [],
            'extensions'        => [
                'orodataaudit/js/app/components/segment-component-extension',
            ],
            'entityChoice'      => 'choice',
        ];

        $this->authorizationChecker->expects($this->once())
            ->method('isGranted')
            ->willReturn(true);

        $event = new WidgetOptionsLoadEvent($options);
        $this->listener->onLoad($event);

        $this->assertEquals($expectedOptions, $event->getWidgetOptions());
    }

    public function testOnLoadWhenNotApplicable()
    {
        $options = [
            'column'                       => [],
            'extensions'                   => [],
            ContextChecker::DISABLED_PARAM => true
        ];

        $event = new WidgetOptionsLoadEvent($options);
        $this->authorizationChecker->expects($this->once())
            ->method('isGranted')
            ->willReturn(true);

        $this->listener->onLoad($event);
        $this->assertEquals($options, $event->getWidgetOptions());
    }

    public function testOnLoadWhenNotGranted()
    {
        $options = [
            'column'       => [],
            'extensions'   => [],
        ];

        $event = new WidgetOptionsLoadEvent($options);
        $this->authorizationChecker->expects($this->once())
            ->method('isGranted')
            ->willReturn(false);

        $this->listener->onLoad($event);
        $this->assertEquals($options, $event->getWidgetOptions());
    }
}
