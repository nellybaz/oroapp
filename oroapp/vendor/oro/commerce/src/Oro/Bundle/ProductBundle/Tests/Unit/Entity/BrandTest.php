<?php

namespace Oro\Bundle\ProductBundle\Tests\Unit\Entity;

use Doctrine\Common\Collections\ArrayCollection;

use Oro\Bundle\LocaleBundle\Entity\Localization;
use Oro\Bundle\LocaleBundle\Entity\LocalizedFallbackValue;
use Oro\Bundle\OrganizationBundle\Entity\Organization;
use Oro\Bundle\RedirectBundle\Entity\Slug;
use Oro\Bundle\RedirectBundle\Model\SlugPrototypesWithRedirect;
use Oro\Bundle\UserBundle\Entity\User;
use Oro\Component\Testing\Unit\EntityTestCaseTrait;
use Oro\Bundle\ProductBundle\Tests\Unit\Entity\Stub\Brand;

/**
 * @SuppressWarnings(PHPMD.TooManyMethods)
 * @SuppressWarnings(PHPMD.TooManyPublicMethods)
 * @SuppressWarnings(PHPMD.ExcessiveClassComplexity)
 */
class BrandTest extends \PHPUnit_Framework_TestCase
{
    use EntityTestCaseTrait;

    public function testProperties()
    {
        $now = new \DateTime('now');
        $properties = [
            ['id', '123'],
            ['owner', new User()],
            ['organization', new Organization()],
            ['createdAt', $now, false],
            ['updatedAt', $now, false],
            ['status', Brand::STATUS_ENABLED, Brand::STATUS_DISABLED],
            ['slugPrototypesWithRedirect', new SlugPrototypesWithRedirect(new ArrayCollection(), false), false],
            ['defaultTitle', 'Foo', null],
        ];

        $this->assertPropertyAccessors(new Brand(), $properties);
    }

    public function testCollections()
    {
        $collections = [
            ['names', new LocalizedFallbackValue()],
            ['descriptions', new LocalizedFallbackValue()],
            ['shortDescriptions', new LocalizedFallbackValue()],
            ['slugPrototypes', new LocalizedFallbackValue()],
            ['slugs', new Slug()]
        ];

        $this->assertPropertyCollections(new Brand(), $collections);
    }

    public function testToString()
    {
        $brand = new Brand();
        $this->assertSame('', (string)$brand);

        $brand->addName((new LocalizedFallbackValue())->setString('localized_name'));
        $this->assertEquals('localized_name', (string)$brand);
    }

    public function testPrePersist()
    {
        $brand = new Brand();
        $this->assertNull($brand->getDefaultTitle());
        $brand->addName((new LocalizedFallbackValue())->setString('Default Title'));
        $brand->prePersist();
        $this->assertInstanceOf('\DateTime', $brand->getCreatedAt());
        $this->assertInstanceOf('\DateTime', $brand->getUpdatedAt());
        $this->assertSame('Default Title', $brand->getDefaultTitle());
    }

    public function testPreUpdate()
    {
        $brand = new Brand();
        $brand->addName((new LocalizedFallbackValue())->setString('Default Title'));
        $brand->preUpdate();
        $this->assertInstanceOf('\DateTime', $brand->getUpdatedAt());
        $this->assertSame('Default Title', $brand->getDefaultTitle());
    }

    public function testClone()
    {
        $id = 123;
        $brand = new Brand();
        $brand->getNames()->add(new LocalizedFallbackValue());
        $brand->getDescriptions()->add(new LocalizedFallbackValue());
        $brand->getShortDescriptions()->add(new LocalizedFallbackValue());
        $brand->addSlugPrototype(new LocalizedFallbackValue());
        $brand->addSlug(new Slug());

        $refProduct = new \ReflectionObject($brand);
        $refId = $refProduct->getProperty('id');
        $refId->setAccessible(true);
        $refId->setValue($brand, $id);

        $this->assertEquals($id, $brand->getId());
        $this->assertCount(1, $brand->getNames());
        $this->assertCount(1, $brand->getDescriptions());
        $this->assertCount(1, $brand->getShortDescriptions());
        $this->assertCount(1, $brand->getSlugPrototypes());
        $this->assertCount(1, $brand->getSlugs());

        $brandCopy = clone $brand;
        $this->assertNull($brandCopy->getId());
        $this->assertEmpty($brandCopy->getNames());
        $this->assertEmpty($brandCopy->getDescriptions());
        $this->assertEmpty($brandCopy->getShortDescriptions());
        $this->assertEmpty($brandCopy->getSlugPrototypes());
        $this->assertEmpty($brandCopy->getSlugs());
    }

    public function testGetDefaultName()
    {
        $defaultName = new LocalizedFallbackValue();
        $defaultName->setString('default');

        $localizedName = new LocalizedFallbackValue();
        $localizedName->setString('localized')
            ->setLocalization(new Localization());

        $category = new Brand();
        $category->addName($defaultName)
            ->addName($localizedName);

        $this->assertEquals($defaultName, $category->getDefaultName());
    }

    public function testNoDefaultName()
    {
        $brand = new Brand();
        $this->assertNull($brand->getDefaultName());
    }

    public function testGetDefaultDescription()
    {
        $defaultDescription = new LocalizedFallbackValue();
        $defaultDescription->setString('default');

        $localizedDescription = new LocalizedFallbackValue();
        $localizedDescription->setString('localized')
            ->setLocalization(new Localization());

        $brand = new Brand();
        $brand->addDescription($defaultDescription)
            ->addDescription($localizedDescription);

        $this->assertEquals($defaultDescription, $brand->getDefaultDescription());
    }

    public function testGetDefaultShortDescription()
    {
        $defaultShortDescription = new LocalizedFallbackValue();
        $defaultShortDescription->setString('default short');

        $localizedShortDescription = new LocalizedFallbackValue();
        $localizedShortDescription->setString('localized')->setLocalization(new Localization());

        $brand = new Brand();
        $brand->addShortDescription($defaultShortDescription)->addShortDescription($localizedShortDescription);

        $this->assertEquals($defaultShortDescription, $brand->getDefaultShortDescription());
    }

    /**
     * @return array
     */
    public function getDefaultDescriptionExceptionDataProvider()
    {
        return [
            'several default descriptions' => [[new LocalizedFallbackValue(), new LocalizedFallbackValue()]],
        ];
    }

    public function testGetStatuses()
    {
        $statuses = Brand::getStatuses();
        $this->assertInternalType('array', $statuses);
        $this->assertNotEmpty('array', $statuses);
        $this->arrayHasKey('enabled');
        $this->arrayHasKey('dissabled');
    }
}
