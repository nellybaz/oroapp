<?php

namespace Oro\Bundle\LocaleBundle\Tests\Unit\Provider;

use Oro\Bundle\ConfigBundle\Config\ConfigManager;
use Oro\Bundle\LocaleBundle\Entity\Localization;
use Oro\Bundle\LocaleBundle\Formatter\LanguageCodeFormatter;
use Oro\Bundle\LocaleBundle\Manager\LocalizationManager;
use Oro\Bundle\LocaleBundle\Provider\LocalizationChoicesProvider;
use Oro\Bundle\TranslationBundle\Entity\Language;
use Oro\Bundle\TranslationBundle\Provider\LanguageProvider;
use Oro\Component\Testing\Unit\EntityTrait;

class LocalizationChoicesProviderTest extends \PHPUnit_Framework_TestCase
{
    use EntityTrait;

    /** @var LocalizationManager|\PHPUnit_Framework_MockObject_MockObject */
    protected $localizationManager;

    /** @var ConfigManager|\PHPUnit_Framework_MockObject_MockObject */
    protected $configManager;

    /** @var LanguageCodeFormatter|\PHPUnit_Framework_MockObject_MockObject */
    protected $languageFormatter;

    /** @var LanguageProvider|\PHPUnit_Framework_MockObject_MockObject */
    protected $languageProvider;

    /** @var LocalizationChoicesProvider */
    protected $provider;

    protected function setUp()
    {
        $this->localizationManager = $this->createMock(LocalizationManager::class);
        $this->configManager = $this->createMock(ConfigManager::class);

        $this->languageFormatter = $this->createMock(LanguageCodeFormatter::class);
        $this->languageFormatter->expects($this->any())
            ->method('formatLocale')
            ->willReturnCallback(
                function ($code) {
                    return 'formatted_' . $code;
                }
            );

        $this->languageProvider = $this->createMock(LanguageProvider::class);

        $this->provider = new LocalizationChoicesProvider(
            $this->configManager,
            $this->languageFormatter,
            $this->languageProvider,
            $this->localizationManager
        );
    }

    /**
     * "@dataProvider getLanguageChoicesDataProvider
     *
     * @param bool $onlyEnabled
     */
    public function testGetLanguageChoices($onlyEnabled)
    {
        $data = [
            $this->getEntity(Language::class, ['id' => 105, 'code' => 'en']),
            $this->getEntity(Language::class, ['id' => 110, 'code' => 'de'])
        ];

        $this->languageProvider->expects($this->once())
            ->method('getLanguages')
            ->with($onlyEnabled)
            ->willReturn($data);

        $this->assertEquals(
            [
                105 => 'formatted_en',
                110 => 'formatted_de'
            ],
            $this->provider->getLanguageChoices($onlyEnabled)
        );
    }

    /**
     * @return \Generator
     */
    public function getLanguageChoicesDataProvider()
    {
        yield 'all languages' => ['onlyEnabled' => false];
        yield 'only enabled languages' => ['onlyEnabled' => true];
    }

    public function testGetFormattingChoices()
    {
        $this->assertConfigManagerCalled();

        $choices = $this->provider->getFormattingChoices();

        $this->assertInternalType('array', $choices);
        $this->assertArrayHasKey('br_FR', $choices);
        $this->assertArrayNotHasKey('ho', $choices);
        $this->assertEquals('bretón (Francia)', $choices['br_FR']);
    }

    public function testGetLocalizationChoices()
    {
        /** @var Localization $entity1 */
        $entity1 = $this->getEntity(Localization::class, ['id' => 100, 'name' => 'test1']);
        /** @var Localization $entity2 */
        $entity2 = $this->getEntity(Localization::class, ['id' => 42, 'name' => 'test2']);

        $this->localizationManager->expects($this->once())
            ->method('getLocalizations')
            ->with(null)
            ->willReturn([$entity1, $entity2]);

        $this->assertEquals(
            [
                $entity1->getId() => $entity1,
                $entity2->getId() => $entity2
            ],
            $this->provider->getLocalizationChoices()
        );
    }

    protected function assertConfigManagerCalled()
    {
        $this->configManager->expects($this->once())->method('get')->with('oro_locale.language')->willReturn('es');
    }
}
