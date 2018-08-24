<?php

namespace Oro\Bundle\CalendarBundle\Twig;

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Translation\TranslatorInterface;

use Oro\Bundle\CalendarBundle\Entity;
use Oro\Bundle\CalendarBundle\Model\Recurrence;

class RecurrenceExtension extends \Twig_Extension
{
    /** @var ContainerInterface */
    protected $container;

    /** @var array */
    protected $patternsCache = [];

    /**
     * @param ContainerInterface $container
     */
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    /**
     * @return TranslatorInterface
     */
    protected function getTranslator()
    {
        return $this->container->get('translator');
    }

    /**
     * @return Recurrence
     */
    protected function getRecurrenceModel()
    {
        return $this->container->get('oro_calendar.model.recurrence');
    }

    /**
     * {@inheritdoc}
     */
    public function getFunctions()
    {
        return [
            new \Twig_SimpleFunction('get_recurrence_text_value', [$this, 'getRecurrenceTextValue']),
            new \Twig_SimpleFunction('get_event_recurrence_pattern', [$this, 'getEventRecurrencePattern'])
        ];
    }

    /**
     * Returns text representation of Recurrence object.
     *
     * @param null|Entity\Recurrence $recurrence
     *
     * @return string
     *
     * @throws \InvalidArgumentException
     */
    public function getRecurrenceTextValue(Entity\Recurrence $recurrence = null)
    {
        $textValue = $this->getTranslator()->trans('oro.calendar.calendarevent.recurrence.na');
        if ($recurrence) {
            $textValue = $this->getRecurrenceModel()->getTextValue($recurrence);
        }

        return $textValue;
    }

    /**
     * This method aimed to show recurrence text representation of events in email invitations.
     *
     * @param Entity\CalendarEvent $event
     *
     * @return string
     */
    public function getEventRecurrencePattern(Entity\CalendarEvent $event)
    {
        if (!isset($this->patternsCache[spl_object_hash($event)])) {
            $text = '';
            if ($event->getRecurrence()) {
                $text = $this->getRecurrenceModel()->getTextValue($event->getRecurrence());
            } elseif ($event->getParent() && $event->getParent()->getRecurrence()) {
                $text = $this->getRecurrenceModel()->getTextValue($event->getParent()->getRecurrence());
            }
            $this->patternsCache[spl_object_hash($event)] = $text; //regular events and exceptions
        }

        return $this->patternsCache[spl_object_hash($event)];
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'oro_recurrence';
    }
}
