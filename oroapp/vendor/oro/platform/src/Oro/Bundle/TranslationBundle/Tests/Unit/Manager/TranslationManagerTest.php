<?php

namespace Oro\Bundle\TranslationBundle\Tests\Unit\Manager;

use Doctrine\Bundle\DoctrineBundle\Registry;
use Doctrine\Common\Persistence\ObjectManager;

use Oro\Bundle\TranslationBundle\Entity\Language;
use Oro\Bundle\TranslationBundle\Entity\Repository\TranslationKeyRepository;
use Oro\Bundle\TranslationBundle\Entity\Repository\LanguageRepository;
use Oro\Bundle\TranslationBundle\Entity\Repository\TranslationRepository;
use Oro\Bundle\TranslationBundle\Entity\Translation;
use Oro\Bundle\TranslationBundle\Entity\TranslationKey;
use Oro\Bundle\TranslationBundle\Manager\TranslationManager;
use Oro\Bundle\TranslationBundle\Provider\TranslationDomainProvider;
use Oro\Bundle\TranslationBundle\Translation\DynamicTranslationMetadataCache;

use Oro\Component\Testing\Unit\EntityTrait;

class TranslationManagerTest extends \PHPUnit_Framework_TestCase
{
    use EntityTrait;

    /** @var \PHPUnit_Framework_MockObject_MockObject|Registry */
    protected $registry;

    /** @var \PHPUnit_Framework_MockObject_MockObject|TranslationDomainProvider */
    protected $domainProvider;

    /** @var \PHPUnit_Framework_MockObject_MockObject|DynamicTranslationMetadataCache */
    protected $dbTranslationMetadataCache;

    /** @var \PHPUnit_Framework_MockObject_MockObject|ObjectManager */
    protected $objectManager;

    /** @var \PHPUnit_Framework_MockObject_MockObject|TranslationKeyRepository */
    protected $translationKeyRepository;

    /** @var \PHPUnit_Framework_MockObject_MockObject|TranslationRepository */
    protected $translationRepository;

    /** @var \PHPUnit_Framework_MockObject_MockObject|LanguageRepository */
    protected $languageRepository;

    protected function setUp()
    {
        $this->registry = $this->getMockBuilder(Registry::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->domainProvider = $this->getMockBuilder(TranslationDomainProvider::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->dbTranslationMetadataCache = $this->getMockBuilder(DynamicTranslationMetadataCache::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->objectManager = $this->getMockBuilder(ObjectManager::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->translationKeyRepository = $this->getMockBuilder(TranslationKeyRepository::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->translationRepository = $this->getMockBuilder(TranslationRepository::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->languageRepository = $this->getMockBuilder(LanguageRepository::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->objectManager->expects($this->any())
            ->method('getRepository')
            ->willReturnMap(
                [
                    [TranslationKey::class, $this->translationKeyRepository],
                    [Translation::class, $this->translationRepository],
                    [Language::class, $this->languageRepository],
                ]
            );

        $this->registry->expects($this->any())->method('getManagerForClass')->willReturn($this->objectManager);
    }

    protected function tearDown()
    {
        unset(
            $this->registry,
            $this->domainProvider,
            $this->dbTranslationMetadataCache,
            $this->objectManager,
            $this->translationKeyRepository,
            $this->languageRepository
        );
    }

    public function testFindTranslationKey()
    {
        $key = 'key';
        $domain = TranslationManager::DEFAULT_DOMAIN;

        $this->objectManager->expects($this->never())->method('persist');
        $this->objectManager->expects($this->never())->method('flush');

        $this->translationKeyRepository->expects($this->once())
            ->method('findOneBy')
            ->with(['key' => $key, 'domain' => $domain]);

        $manager = $this->getTranslationManager();
        $translationKey1 = $manager->findTranslationKey($key, $domain);
        $translationKey2 = $manager->findTranslationKey($key, $domain);

        $this->assertInstanceOf(TranslationKey::class, $translationKey1);
        $this->assertSame($translationKey1, $translationKey2);
    }

    public function testSaveTranslation()
    {
        $key = 'key';
        $value = 'value';
        $domain = TranslationManager::DEFAULT_DOMAIN;
        $locale = 'locale';

        $this->translationKeyRepository->expects($this->once())
            ->method('findOneBy')
            ->with(['key' => $key, 'domain' => $domain])
            ->willReturn((new TranslationKey())->setKey($key)->setDomain($domain));

        $this->languageRepository->expects($this->once())
            ->method('findOneBy')
            ->with(['code' => $locale])
            ->willReturn((new Language())->setCode($locale));

        $this->objectManager->expects($this->never())->method('persist');
        $this->objectManager->expects($this->never())->method('flush');

        $manager = $this->getTranslationManager();
        $translation1 = $manager->saveTranslation($key, $value, $locale, $domain);
        $translation2 = $manager->saveTranslation($key, $value, $locale, $domain);

        $this->assertInstanceOf(Translation::class, $translation1);
        $this->assertSame($translation1, $translation2);
    }

    public function testCreateTranslation()
    {
        $key = 'key';
        $value = 'value';
        $domain = TranslationManager::DEFAULT_DOMAIN;
        $locale = 'locale';
        $expectedTranslation = $this->createTranslation($key, $value, $locale, $domain);

        $this->translationKeyRepository->expects($this->once())
            ->method('findOneBy')
            ->with(['key' => $key, 'domain' => $domain])
            ->willReturn((new TranslationKey())->setKey($key)->setDomain($domain));

        $this->languageRepository->expects($this->once())
            ->method('findOneBy')
            ->with(['code' => $locale])
            ->willReturn((new Language())->setCode($locale));

        $this->objectManager->expects($this->never())->method('persist');
        $this->objectManager->expects($this->never())->method('flush');

        $manager = $this->getTranslationManager();
        $translation = $manager->createTranslation($key, $value, $locale, $domain);

        $this->assertInstanceOf(Translation::class, $translation);
        $this->assertEquals($expectedTranslation, $translation);
    }

    public function testFlush()
    {
        $translationKey = (new TranslationKey())->setKey('key')->setDomain('domain');

        $this->translationKeyRepository->expects($this->any())->method('findOneBy')->willReturn($translationKey);

        $this->languageRepository->expects($this->any())
            ->method('findOneBy')->willReturn((new Language())->setCode('locale'));

        $manager = $this->getTranslationManager();
        $translation = $manager->saveTranslation('key', 'value', 'locale', 'domain');

        $this->objectManager->expects($this->at(0))->method('persist')->with($translationKey);
        $this->objectManager->expects($this->at(1))->method('persist')->with($translation);
        $this->objectManager->expects($this->at(2))->method('flush')->with([$translationKey, $translation]);

        $manager->flush();
    }

    public function testFlushTranslationWithoutValue()
    {
        $key = 'test.key';
        $value = null;
        $locale = 'test_locale';
        $domain = 'test_domain';

        $translation = $this->createTranslation($key, $value, $locale, $domain, 42);

        $this->translationKeyRepository->expects($this->any())
            ->method('findOneBy')
            ->willReturn($translation->getTranslationKey());

        $this->translationRepository->expects($this->any())->method('findTranslation')->willReturn($translation);

        $this->objectManager->expects($this->once())->method('persist')->with($translation->getTranslationKey());
        $this->objectManager->expects($this->once())->method('remove')->with($translation);
        $this->objectManager->expects($this->once())
            ->method('flush')
            ->with([$translation->getTranslationKey(), $translation]);

        $manager = $this->getTranslationManager();

        $this->assertNull($manager->saveTranslation($key, $value, $locale, $domain));

        $manager->flush();
    }

    public function testFlushWithoutChanges()
    {
        $this->objectManager->expects($this->never())->method($this->anything());
        $manager = $this->getTranslationManager();
        $manager->flush();
    }

    public function testForceFlush()
    {
        $this->objectManager->expects($this->once())->method('flush');
        $manager = $this->getTranslationManager();
        $manager->flush(true);
    }

    public function testClear()
    {
        $this->translationRepository->expects($this->any())->method('findTranslation')->willReturn(new Translation());
        $this->domainProvider->expects($this->exactly(2))->method('clearCache');

        $manager = $this->getTranslationManager();
        $manager->saveTranslation('key', 'value', 'locale', 'domain');
        $manager->clear();

        $this->objectManager->expects($this->never())->method('persist');
        $this->objectManager->expects($this->never())->method('flush');

        $manager->flush();
    }

    /**
     * @dataProvider invalidateCacheDataProvider
     *
     * @param $with
     */
    public function testInvalidateCache($with)
    {
        $this->dbTranslationMetadataCache->expects($this->once())->method('updateTimestamp')->with($with);
        $manager = $this->getTranslationManager();
        $manager->invalidateCache($with);
    }

    /**
     * @return array
     */
    public function invalidateCacheDataProvider()
    {
        return [
            [null],
            ['en'],
        ];
    }

    public function testRemoveMissingTranslationKey()
    {
        $nonExistingKey = uniqid('KEY_');
        $nonExistingDomain = uniqid('KEY_');
        $this->translationKeyRepository
            ->expects($this->once())
            ->method('findOneBy')
            ->willReturn(null)
            ->with(['key' => $nonExistingKey, 'domain' => $nonExistingDomain]);
        $this->objectManager->expects($this->never())->method('remove');
        $manager = $this->getTranslationManager();
        $manager->removeTranslationKey($nonExistingKey, $nonExistingDomain);
    }

    /**
     * @return TranslationManager
     */
    protected function getTranslationManager()
    {
        return new TranslationManager($this->registry, $this->domainProvider, $this->dbTranslationMetadataCache);
    }

    /**
     * @param string $key
     * @param string $value
     * @param string $locale
     * @param string $domain
     * @param int|null $id
     *
     * @return Translation
     */
    protected function createTranslation($key, $value, $locale, $domain, $id = null)
    {
        $translationKey = new TranslationKey();
        $translationKey->setKey($key)->setDomain($domain);

        $language = new Language();
        $language->setCode($locale);

        return $this->getEntity(
            Translation::class,
            [
                'id' => $id,
                'translationKey' => $translationKey,
                'value' => $value,
                'language' => $language
            ]
        );
    }
}
