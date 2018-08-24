<?php

namespace Oro\Bundle\TaskBundle\Tests\Selenium\Pages;

use Oro\Bundle\TestFrameworkBundle\Pages\AbstractPageFilteredGrid;

/**
 * Class Tasks
 *
 * @package Oro\Bundle\TaskBundle\Tests\Selenium\Pages
 * @method Tasks openTasks(string $bundlePath)
 * @method Task add()
 * @method Task open(array $filter)
 *
 * {@inheritdoc}
 */
class Tasks extends AbstractPageFilteredGrid
{
    const NEW_ENTITY_BUTTON = "//a[@title='Create Task']";
    const URL = 'task';

    public function entityNew()
    {
        return new Task($this->test);
    }

    public function entityView()
    {
        return new Task($this->test);
    }
}
