<?php

namespace Oro\Bundle\DataGridBundle\Tests\Behat\Element;

use Behat\Mink\Element\NodeElement;
use Oro\Bundle\TestFrameworkBundle\Behat\Element\Element;

class DateTimePicker extends Element
{
    /**
     * @param \DateTime $dateTime
     */
    public function setValue($dateTime)
    {
        if (!$this->isOpened()) {
            $this->getDatePicker()->click();
        }
        $this->getYearPicker()->selectOption($dateTime->format('Y'));
        $this->getMonthPicker()->selectOption($dateTime->format('M'));
        $this->getCalendarDate($dateTime->format('j'))->click();

        if ($this->getElements('TimePicker')) {
            $this->getTimePicker()->setValue($dateTime);
        }
    }

    /**
     * @return NodeElement|null
     */
    protected function getMonthPicker()
    {
        return $this->findVisible('css', '.ui-datepicker-month');
    }

    /**
     * @return NodeElement|null
     */
    protected function getYearPicker()
    {
        return $this->findVisible('css', '.ui-datepicker-year');
    }

    /**
     * @return NodeElement|null
     */
    protected function getCalendar()
    {
        return $this->findVisible('css', '.ui-datepicker-calendar');
    }

    /**
     * @return TimePicker
     */
    protected function getTimePicker()
    {
        return $this->getElement('TimePicker');
    }

    /**
     * @return NodeElement|null
     */
    protected function getDatePicker()
    {
        return $this->find('css', 'input.datepicker-input');
    }

    /**
     * @param int|string $dateValue
     * @return NodeElement|null
     */
    protected function getCalendarDate($dateValue)
    {
        return $this->getCalendar()->find('css', "tbody a:contains('$dateValue')");
    }

    /**
     * @return bool
     */
    protected function isOpened()
    {
        $class = $this->getDatePicker()->getAttribute('class');

        if ($class !== null) {
            return preg_match('/\bui-datepicker-dialog-is-(below|above)\b/', $class) === 1;
        }

        return false;
    }
}
