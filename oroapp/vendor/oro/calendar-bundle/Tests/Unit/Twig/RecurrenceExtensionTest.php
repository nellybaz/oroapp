<?php

namespace Oro\Bundle\CalendarBundle\Tests\Unit\Twig;

use Symfony\Component\Translation\TranslatorInterface;

use Oro\Bundle\CalendarBundle\Entity;
use Oro\Bundle\CalendarBundle\Model\Recurrence;
use Oro\Bundle\CalendarBundle\Model\Recurrence\StrategyInterface;
use Oro\Bundle\CalendarBundle\Twig\RecurrenceExtension;
use Oro\Component\Testing\Unit\TwigExtensionTestCaseTrait;

class RecurrenceExtensionTest extends \PHPUnit_Framework_TestCase
{
    use TwigExtensionTestCaseTrait;

    /** @var RecurrenceExtension */
    protected $extension;

    /** @var \PHPUnit_Framework_MockObject_MockObject */
    protected $translator;

    /** @var \PHPUnit_Framework_MockObject_MockObject */
    protected $strategy;

    /** @var \PHPUnit_Framework_MockObject_MockObject */
    protected $recurrenceModel;

    protected function setUp()
    {
        $this->translator = $this->createMock(TranslatorInterface::class);
        $this->strategy = $this->createMock(StrategyInterface::class);
        $this->recurrenceModel = new Recurrence($this->strategy);

        $container = self::getContainerBuilder()
            ->add('translator', $this->translator)
            ->add('oro_calendar.model.recurrence', $this->recurrenceModel)
            ->getContainer($this);

        $this->extension = new RecurrenceExtension($container);
    }

    public function testGetName()
    {
        $this->assertEquals('oro_recurrence', $this->extension->getName());
    }

    public function testGetRecurrenceTextValue()
    {
        $this->strategy->expects($this->once())
            ->method('getTextValue')
            ->willReturn('test_pattern');

        $this->assertEquals(
            'test_pattern',
            self::callTwigFunction($this->extension, 'get_recurrence_text_value', [new Entity\Recurrence()])
        );
    }
    
    public function testGetRecurrenceTextValueWithNA()
    {
        $this->translator->expects($this->once())
            ->method('trans')
            ->willReturn('N/A');

        $this->assertEquals(
            'N/A',
            self::callTwigFunction($this->extension, 'get_recurrence_text_value', [null])
        );
    }
}
