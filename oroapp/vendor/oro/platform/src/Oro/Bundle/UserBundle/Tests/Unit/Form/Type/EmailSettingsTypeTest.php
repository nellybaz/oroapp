<?php
namespace Oro\Bundle\UserBundle\Tests\Unit\Type;

use Oro\Bundle\UserBundle\Form\Type\EmailSettingsType;
use Symfony\Component\Validator\Constraints\Valid;

class EmailSettingsTypeTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var EmailSettingsType
     */
    protected $type;

    /** @var \PHPUnit_Framework_MockObject_MockObject */
    protected $userConfigManager;

    /** @var \PHPUnit_Framework_MockObject_MockObject */
    protected $subscriber;

    /**
     * Setup test env
     */
    protected function setUp()
    {
        $this->userConfigManager   = $this->getMockBuilder('Oro\Bundle\ConfigBundle\Config\ConfigManager')
            ->disableOriginalConstructor()
            ->getMock();
        $this->subscriber = $this->getMockBuilder('Oro\Bundle\UserBundle\Form\EventListener\UserImapConfigSubscriber')
            ->disableOriginalConstructor()
            ->getMock();
        $this->type = new EmailSettingsType($this->userConfigManager, $this->subscriber);
    }

    public function testConfigureOptions()
    {
        $resolver = $this->createMock('Symfony\Component\OptionsResolver\OptionsResolver');
        $resolver->expects($this->once())
            ->method('setDefaults')
            ->with($this->callback(function ($param) {
                $this->assertEquals($param['data_class'], 'Oro\Bundle\UserBundle\Entity\User');
                $this->assertEquals($param['ownership_disabled'], true);
                $this->assertEquals($param['dynamic_fields_disabled'], true);
                
                return true;
            }));
        $this->type->setDefaultOptions($resolver);
    }

    public function testBuildFormImapAccount()
    {
        $this->userConfigManager->expects($this->once())->method('get')->with('oro_imap.enable_google_imap')
            ->will($this->returnValue(true));
        $builder = $this->getMockBuilder('Symfony\Component\Form\FormBuilder')
            ->disableOriginalConstructor()
            ->setMethods(['add', 'addEventSubscriber'])
            ->getMock();
        $builder->expects($this->once())->method('addEventSubscriber')->with($this->subscriber);
        $builder->expects($this->once())->method('add')->with(
            'imapAccountType',
            'oro_imap_choice_account_type',
            [
                'label' => false,
                'constraints' => [new Valid()],
            ]
        );
        
        $this->type->buildForm($builder, []);
    }

    public function testBuildFormImapConfiguration()
    {
        $this->userConfigManager->expects($this->once())->method('get')->with('oro_imap.enable_google_imap')
            ->will($this->returnValue(false));
        $builder = $this->getMockBuilder('Symfony\Component\Form\FormBuilder')
            ->disableOriginalConstructor()
            ->setMethods(['add', 'addEventSubscriber'])
            ->getMock();
        $builder->expects($this->once())->method('add')->with(
            'imapConfiguration',
            'oro_imap_configuration',
            [
                'label' => false,
                'constraints' => [new Valid()],
            ]
        );
        
        $this->type->buildForm($builder, []);
    }

    public function testGetName()
    {
        $this->assertEquals('oro_user_emailsettings', $this->type->getName());
    }
}
