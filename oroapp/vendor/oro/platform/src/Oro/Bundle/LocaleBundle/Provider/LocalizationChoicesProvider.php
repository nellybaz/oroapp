<?php

namespace Oro\Bundle\LocaleBundle\Provider;

use Symfony\Component\Intl\Intl;

use Oro\Bundle\ConfigBundle\Config\ConfigManager;
use Oro\Bundle\LocaleBundle\Entity\Localization;
use Oro\Bundle\LocaleBundle\Formatter\LanguageCodeFormatter;
use Oro\Bundle\LocaleBundle\Manager\LocalizationManager;
use Oro\Bundle\TranslationBundle\Provider\LanguageProvider;

class LocalizationChoicesProvider
{
    /** @var ConfigManager */
    protected $configManager;

    /** @var LanguageCodeFormatter */
    protected $languageFormatter;

    /** @var LanguageProvider */
    protected $languageProvider;

    /** @var LocalizationManager */
    protected $localizationManager;

    /**
     * @param ConfigManager $configManager
     * @param LanguageCodeFormatter $languageFormatter
     * @param LanguageProvider $languageProvider
     * @param LocalizationManager $localizationManager
     */
    public function __construct(
        ConfigManager $configManager,
        LanguageCodeFormatter $languageFormatter,
        LanguageProvider $languageProvider,
        LocalizationManager $localizationManager
    ) {
        $this->configManager = $configManager;
        $this->languageFormatter = $languageFormatter;
        $this->languageProvider = $languageProvider;
        $this->localizationManager = $localizationManager;
    }

    /**
     * @param bool $onlyEnabled
     *
     * @return array
     */
    public function getLanguageChoices($onlyEnabled = false)
    {
        $result = [];

        foreach ($this->languageProvider->getLanguages($onlyEnabled) as $language) {
            $result[$language->getId()] = $this->languageFormatter->formatLocale($language->getCode());
        }

        return $result;
    }

    /**
     * @return array
     */
    public function getFormattingChoices()
    {
        return Intl::getLocaleBundle()->getLocaleNames($this->getSystemLanguage());
    }

    /**
     * @return array
     */
    public function getLocalizationChoices()
    {
        /** @var Localization[] $choices */
        $choices = $this->localizationManager->getLocalizations();
        $data = [];

        foreach ($choices as $choice) {
            $data[$choice->getId()] = $choice->getName();
        }

        return $data;
    }

    /**
     * @return string
     */
    protected function getSystemLanguage()
    {
        return $this->configManager->get('oro_locale.language');
    }
}
