<?php

namespace Oro\Bundle\ShippingBundle\Tests\Unit\Form\EventSubscriber;

class MethodConfigCollectionSubscriberTest extends AbstractConfigSubscriberTest
{
    public function setUp()
    {
        parent::setUp();
        $this->subscriber = $this->methodConfigCollectionSubscriber;
    }
}
