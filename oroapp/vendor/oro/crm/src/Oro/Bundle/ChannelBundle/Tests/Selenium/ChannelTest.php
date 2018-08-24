<?php

namespace Oro\Bundle\ChannelBundle\Tests\Selenium;

use Oro\Bundle\TestFrameworkBundle\Test\Selenium2TestCase;
use Oro\Bundle\ChannelBundle\Tests\Selenium\Pages\Channels;

/**
 * Class ChannelTest
 *
 * @package Oro\Bundle\ChannelBundle\Tests\Selenium\Sales
 */
class ChannelTest extends Selenium2TestCase
{
    /**
     * @return string
     */
    public function testCreateChannel()
    {
        $name = 'Channel_' . mt_rand();

        $login = $this->login();
        /** @var Channels $login */
        $login->openChannels('Oro\Bundle\ChannelBundle')
            ->assertTitle('All - Channels - System')
            ->add()
            ->assertTitle('Create Channel - Channels - System')
            ->setType('Custom')
            ->setName($name)
            ->setStatus('Active')
            ->addEntity('Opportunity')
            ->addEntity('Lead')
            ->addEntity('Sales Process')
            ->addEntity('Business Customer')
            ->addEntity('Contact Request')
            ->save()
            ->assertMessage('Channel saved');

        return $name;
    }
}
