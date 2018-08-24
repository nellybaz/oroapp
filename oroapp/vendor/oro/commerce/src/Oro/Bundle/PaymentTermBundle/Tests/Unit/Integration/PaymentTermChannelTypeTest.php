<?php

namespace Oro\Bundle\PaymentTermBundle\Tests\Unit\Integration;

use Oro\Bundle\PaymentTermBundle\Integration\PaymentTermChannelType;

class PaymentTermChannelTypeTest extends \PHPUnit_Framework_TestCase
{
    /** @var PaymentTermChannelType */
    private $channel;

    protected function setUp()
    {
        $this->channel = new PaymentTermChannelType();
    }

    public function testGetLabelReturnsCorrectString()
    {
        static::assertSame('oro.paymentterm.channel_type.label', $this->channel->getLabel());
    }

    public function testGetIcon()
    {
        static::assertSame(
            'bundles/oropaymentterm/img/payment-term-logo.png',
            $this->channel->getIcon()
        );
    }
}
