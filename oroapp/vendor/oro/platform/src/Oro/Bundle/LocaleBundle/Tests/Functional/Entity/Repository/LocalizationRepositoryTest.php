<?php

namespace Oro\Bundle\LocaleBundle\Tests\Functional\Entity\Repository;

use Doctrine\ORM\EntityManager;

use Gedmo\Tool\Logging\DBAL\QueryAnalyzer;

use Oro\Bundle\LocaleBundle\Entity\Localization;
use Oro\Bundle\LocaleBundle\Entity\Repository\LocalizationRepository;
use Oro\Bundle\LocaleBundle\Model\LocaleSettings;
use Oro\Bundle\LocaleBundle\Tests\Functional\DataFixtures\LoadLocalizationData;
use Oro\Bundle\TestFrameworkBundle\Test\WebTestCase;
use Oro\Bundle\TranslationBundle\Entity\Language;

class LocalizationRepositoryTest extends WebTestCase
{
    /**
     * @var EntityManager
     */
    protected $em;

    /**
     * @var LocalizationRepository
     */
    protected $repository;

    protected function setUp()
    {
        $this->initClient();
        $this->loadFixtures([LoadLocalizationData::class]);
        $this->em = $this->getContainer()->get('doctrine')->getManagerForClass('OroLocaleBundle:Localization');
        $this->repository = $this->em->getRepository('OroLocaleBundle:Localization');
    }

    public function testFindRootsWithChildren()
    {
        $localizations = [$this->getCurrentLocalization(), $this->getReference('en_US'), $this->getReference('es')];
        $queryAnalyzer = new QueryAnalyzer($this->em->getConnection()->getDatabasePlatform());

        $prevLogger = $this->em->getConnection()->getConfiguration()->getSQLLogger();
        $this->em->getConnection()->getConfiguration()->setSQLLogger($queryAnalyzer);

        /** @var Localization[] $result */
        $result = $this->repository->findRootsWithChildren();

        $this->assertEquals(array_values($localizations), array_values($result));

        foreach ($result as $root) {
            $this->visitChildren($root);
        }

        $queries = $queryAnalyzer->getExecutedQueries();

        $this->assertCount(count($localizations) + 2, $queries);

        $this->em->getConnection()->getConfiguration()->setSQLLogger($prevLogger);
    }

    /**
     * @param Localization $localization
     */
    protected function visitChildren(Localization $localization)
    {
        $localization->getLanguageCode();
        foreach ($localization->getChildLocalizations() as $child) {
            $this->visitChildren($child);
        }
    }

    /**
     * @return object|Localization
     */
    protected function getCurrentLocalization()
    {
        /* @var $localeSettings LocaleSettings */
        $localeSettings = $this->getContainer()->get('oro_locale.settings');

        /* @var Language $language */
        $language = $this->getReference('language.' . $localeSettings->getLocale());
        $this->assertInstanceOf(Language::class, $language);

        return $this->repository->findOneBy(['language' => $language]);
    }

    public function testGetLocalizationsCount()
    {
        $result = $this->repository->getLocalizationsCount();

        $this->assertInternalType('int', $result);
        $this->assertEquals(4, $result);
    }

    public function testGetBatchIterator()
    {
        $expectedLocalizations = [$this->getDefaultLocalization()->getTitle()];
        foreach (LoadLocalizationData::getLocalizations() as $localization) {
            $expectedLocalizations[] = $localization['title'];
        }

        $localizations = [];
        foreach ($this->repository->getBatchIterator() as $localization) {
            $localizations[] = $localization->getTitle();
        }

        $this->assertEquals($expectedLocalizations, $localizations);
    }

    /**
     * @return object|Localization
     */
    protected function getDefaultLocalization()
    {
        $localeSettings = $this->getContainer()->get('oro_locale.settings');
        $locale = $localeSettings->getLocale();
        list($language) = explode('_', $locale);

        return $this->repository->findOneBy([
            'language' => $this->getReference('language.' . $language),
            'formattingCode' => $locale
        ]);
    }
}
