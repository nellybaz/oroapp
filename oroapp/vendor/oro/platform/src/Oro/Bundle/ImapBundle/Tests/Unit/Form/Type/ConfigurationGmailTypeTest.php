<?php

namespace Oro\Bundle\ImapBundle\Tests\Unit\Form\Type;

use Symfony\Bundle\FrameworkBundle\Translation\Translator;
use Symfony\Component\Form\PreloadedExtension;
use Symfony\Component\Form\Test\FormIntegrationTestCase;

use Oro\Bundle\ImapBundle\Form\Type\CheckButtonType;
use Oro\Bundle\ImapBundle\Form\Type\ConfigurationGmailType;
use Oro\Bundle\ImapBundle\Mail\Storage\GmailImap;
use Oro\Bundle\EmailBundle\Form\Type\EmailFolderTreeType;
use Oro\Bundle\FormBundle\Form\Extension\TooltipFormExtension;
use Oro\Bundle\ConfigBundle\Config\ConfigManager;
use Oro\Bundle\SecurityBundle\Authentication\TokenAccessorInterface;

class ConfigurationGmailTypeTest extends FormIntegrationTestCase
{
    /** @var TokenAccessorInterface|\PHPUnit_Framework_MockObject_MockObject */
    protected $tokenAccessor;

    /** @var Translator|\PHPUnit_Framework_MockObject_MockObject */
    protected $translator;

    /** @var \PHPUnit_Framework_MockObject_MockObject */
    protected $configProvider;

    /** @var ConfigManager|\PHPUnit_Framework_MockObject_MockObject */
    protected $userConfigManager;

    protected function setUp()
    {
        $user = $this->getMockBuilder('Oro\Bundle\UserBundle\Entity\User')
            ->setMethods(['getOrganization'])
            ->getMock();

        $organization = $this->createMock('Oro\Bundle\OrganizationBundle\Entity\Organization');

        $user->expects($this->any())
            ->method('getOrganization')
            ->willReturn($organization);

        $this->tokenAccessor = $this->createMock(TokenAccessorInterface::class);
        $this->tokenAccessor->expects($this->any())
            ->method('getUser')
            ->willReturn($user);
        $this->tokenAccessor->expects($this->any())
            ->method('getOrganization')
            ->willReturn($organization);

        $this->translator = $this->getMockBuilder('Oro\Bundle\TranslationBundle\Translation\Translator')
            ->disableOriginalConstructor()
            ->getMock();

        $this->userConfigManager = $this->getMockBuilder('Oro\Bundle\ConfigBundle\Config\ConfigManager')
            ->disableOriginalConstructor()
            ->getMock();

        $this->configProvider = $this
            ->getMockBuilder('Oro\Bundle\EntityConfigBundle\Provider\ConfigProvider')
            ->setMethods(['hasConfig', 'getConfig', 'get'])
            ->disableOriginalConstructor()
            ->getMock();

        parent::setUp();
    }

    protected function getExtensions()
    {
        return array_merge(
            parent::getExtensions(),
            [
                new PreloadedExtension(
                    [
                        'oro_imap_configuration_check' => new CheckButtonType(),
                        'oro_email_email_folder_tree' => new EmailFolderTreeType(),
                    ],
                    [
                        'form' => [new TooltipFormExtension($this->configProvider, $this->translator)],
                    ]
                ),
            ]
        );
    }

    /**
     * Test default values for form ConfigurationGmailType
     */
    public function testDefaultData()
    {
        $type = new ConfigurationGmailType($this->translator, $this->userConfigManager, $this->tokenAccessor);
        $form = $this->factory->create($type);

        $expectedViewData = [
            'imapHost' => GmailImap::DEFAULT_GMAIL_HOST,
            'imapPort' => GmailImap::DEFAULT_GMAIL_PORT,
            'imapEncryption' => GmailImap::DEFAULT_GMAIL_SSL,
            'smtpHost' => GmailImap::DEFAULT_GMAIL_SMTP_HOST,
            'smtpPort' => GmailImap::DEFAULT_GMAIL_SMTP_PORT,
            'smtpEncryption' => GmailImap::DEFAULT_GMAIL_SMTP_SSL
        ];

        foreach ($expectedViewData as $name => $value) {
            $this->assertEquals($value, $form->get($name)->getData());
        }
    }

    /**
     * @param array      $formData
     * @param array|bool $expectedViewData
     * @param array      $expectedModelData
     *
     * @dataProvider setDataProvider
     */
    public function testBindValidData($formData, $expectedViewData, $expectedModelData)
    {
        $type = new ConfigurationGmailType($this->translator, $this->userConfigManager, $this->tokenAccessor);
        $form = $this->factory->create($type);
        if ($expectedViewData) {
            $form->submit($formData);
            foreach ($expectedViewData as $name => $value) {
                $this->assertEquals($value, $form->get($name)->getData());
            }

            $entity = $form->getData();
            foreach ($expectedModelData as $name => $value) {
                $this->assertAttributeEquals($value, $name, $entity);
            }
        } else {
            $form->submit($formData);
            $this->assertNull($form->getData());
        }
    }

    /**
     * @return array
     */
    public function setDataProvider()
    {
        $accessTokenExpiresAt = new \DateTime();

        return [
            'should bind correct data' => [
                [
                    'user' => 'test',
                    'imapHost' => 'imap.gmail.com',
                    'imapPort' => '993',
                    'imapEncryption' => 'ssl',
                    'smtpHost' => 'smtp.gmail.com',
                    'smtpPort' => '993',
                    'smtpEncryption' => 'ssl',
                    'accessTokenExpiresAt' => $accessTokenExpiresAt,
                    'accessToken' => '1',
                    'refreshToken' => '111'
                ],
                [
                    'user' => 'test',
                    'imapHost' => 'imap.gmail.com',
                    'imapPort' => '993',
                    'imapEncryption' => 'ssl',
                    'smtpHost' => 'smtp.gmail.com',
                    'smtpPort' => '993',
                    'smtpEncryption' => 'ssl',
                    'accessTokenExpiresAt' => $accessTokenExpiresAt,
                    'accessToken' => '1',
                    'refreshToken' => '111'
                ],
                [
                    'user' => 'test',
                    'imapHost' => 'imap.gmail.com',
                    'imapPort' => '993',
                    'imapEncryption' => 'ssl',
                    'smtpHost' => 'smtp.gmail.com',
                    'smtpPort' => '993',
                    'smtpEncryption' => 'ssl',
                    'accessTokenExpiresAt' => $accessTokenExpiresAt,
                    'accessToken' => '1',
                    'refreshToken' => '111'
                ],
            ],
        ];
    }

    /**
     * Test name of type
     */
    public function testGetName()
    {
        $type = new ConfigurationGMailType($this->translator, $this->userConfigManager, $this->tokenAccessor);
        $this->assertEquals(ConfigurationGMailType::NAME, $type->getName());
    }
}
