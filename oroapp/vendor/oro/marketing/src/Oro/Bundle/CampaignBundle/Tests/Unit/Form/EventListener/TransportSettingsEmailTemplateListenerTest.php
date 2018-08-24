<?php

namespace Oro\Bundle\CampaignBundle\Tests\Unit\Form\EventListener;

use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

use Oro\Bundle\CampaignBundle\Entity\EmailCampaign;
use Oro\Bundle\CampaignBundle\Form\EventListener\TransportSettingsEmailTemplateListener;
use Oro\Bundle\MarketingListBundle\Entity\MarketingList;
use Oro\Bundle\SecurityBundle\Authentication\TokenAccessorInterface;

class TransportSettingsEmailTemplateListenerTest extends \PHPUnit_Framework_TestCase
{
    /** @var TransportSettingsEmailTemplateListener */
    protected $listener;

    /** @var \PHPUnit_Framework_MockObject_MockObject */
    protected $registry;

    /** @var \PHPUnit_Framework_MockObject_MockObject */
    protected $tokenAccessor;

    /** @var \PHPUnit_Framework_MockObject_MockObject */
    protected $form;

    protected function setUp()
    {
        $this->registry = $this->createMock('Symfony\Bridge\Doctrine\RegistryInterface');
        $this->tokenAccessor = $this->createMock(TokenAccessorInterface::class);

        $this->form = $this
            ->getMockBuilder('Symfony\Component\Form\Form')
            ->disableOriginalConstructor()
            ->getMock();

        $this->form
            ->expects($this->any())
            ->method('getParent')
            ->will($this->returnSelf());

        $this->form
            ->expects($this->any())
            ->method('get')
            ->will($this->returnSelf());

        $config = $this->createMock('Symfony\Component\Form\FormConfigInterface');

        $config
            ->expects($this->any())
            ->method('getOptions')
            ->will($this->returnValue([]));

        $type = $this->createMock('Symfony\Component\Form\ResolvedFormTypeInterface');
        $type
            ->expects($this->any())
            ->method('getName')
            ->will($this->returnValue('string'));
        $config
            ->expects($this->any())
            ->method('getType')
            ->will($this->returnValue($type));

        $this->form
            ->expects($this->any())
            ->method('getConfig')
            ->will($this->returnValue($config));

        $this->listener = new TransportSettingsEmailTemplateListener($this->registry, $this->tokenAccessor);
    }

    public function testGetSubscribedEvents()
    {
        $this->assertArrayHasKey(FormEvents::PRE_SET_DATA, $this->listener->getSubscribedEvents());
        $this->assertArrayHasKey(FormEvents::PRE_SUBMIT, $this->listener->getSubscribedEvents());
    }

    public function testPreSet()
    {
        $marketingList = new MarketingList();
        $marketingList->setEntity('\stdClass');

        $emailCampaign = new EmailCampaign();
        $emailCampaign->setMarketingList($marketingList);

        $this->form
            ->expects($this->once())
            ->method('getData')
            ->will($this->returnValue($emailCampaign));

        $this->form
            ->expects($this->atLeastOnce())
            ->method('add');

        $event = new FormEvent($this->form, []);

        $this->listener->preSet($event);
    }

    /**
     * @param array  $data
     * @param object $marketingList
     * @param bool   $expected
     *
     * @dataProvider preSubmitDataProvider
     */
    public function testPreSubmit(array $data, $marketingList, $expected)
    {
        $event = new FormEvent(
            $this->form,
            $data
        );

        $repository = $this
            ->getMockBuilder('\Doctrine\Common\Persistence\ObjectRepository')
            ->disableOriginalConstructor()
            ->getMock();

        $this->registry
            ->expects($this->any())
            ->method('getRepository')
            ->will($this->returnValue($repository));

        $repository
            ->expects($this->any())
            ->method('find')
            ->will($this->returnValue($marketingList));

        if ($expected) {
            $this->form
                ->expects($this->atLeastOnce())
                ->method('add');
        }

        $this->listener->preSubmit($event);
    }

    /**
     * @return array
     */
    public function preSubmitDataProvider()
    {
        $marketingList = new MarketingList();
        $marketingList->setEntity('\stdClass');

        return [
            [[], null, false],
            [['parentData' => ['marketingList' => 1]], null, false],
            [['parentData' => ['marketingList' => 1]], $marketingList, true],
        ];
    }
}
