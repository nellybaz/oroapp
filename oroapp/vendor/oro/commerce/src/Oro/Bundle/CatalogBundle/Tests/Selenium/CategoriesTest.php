<?php

namespace Oro\Bundle\CatalogBundle\Tests\Selenium;

use Oro\Bundle\TestFrameworkBundle\Test\Selenium2TestCase;
use Oro\Bundle\CatalogBundle\Tests\Selenium\Pages\Categories;

class CategoriesTest extends Selenium2TestCase
{
    const MASTER_CATALOG = 'Master catalog';

    /**
     * @var string
     */
    protected static $firstCategory;

    /**
     * @var string
     */
    protected static $secondCategory;

    public static function setUpBeforeClass()
    {
        $suffix = uniqid();
        self::$firstCategory = 'First category ' . $suffix;
        self::$secondCategory = 'Second category ' . $suffix;
    }

    public function testCreateCategories()
    {
        /** @var Categories $categories */
        $categories = $this->login()->openCategories('Oro\Bundle\CatalogBundle');
        sleep(1);

        // preconditions
        $categories->assertTitle('Master Catalog - Products')
            ->assertCategoryExists(self::MASTER_CATALOG);

        // create first level category
        $categories->createCategory()
            ->assertTitle('Create Category - Master Catalog - Products')
            ->setDefaultTitle(self::$firstCategory)
            ->saveCategory();

        // assert first level category created
        $categories->assertTitle(self::$firstCategory . ' - Edit - Master Catalog - Products')
            ->assertMessage('Category has been saved')
            ->assertCategoryExists(self::$firstCategory)
            ->assertContainsSubcategory(self::MASTER_CATALOG, self::$firstCategory);

        // create second level category
        $categories->openCategory(self::$firstCategory)
            ->assertTitle(self::$firstCategory . ' - Edit - Master Catalog - Products')
            ->createSubcategory()
            ->assertTitle('Create Category - Master Catalog - Products')
            ->setDefaultTitle(self::$secondCategory)
            ->saveCategory();

        // assert second level category created
        $categories->assertTitle(self::$secondCategory . ' - Edit - Master Catalog - Products')
            ->openTreeSubcategories(self::$firstCategory)
            ->assertCategoryExists(self::$secondCategory)
            ->assertContainsSubcategory(self::$firstCategory, self::$secondCategory);
    }

    /**
     * @depends testCreateCategories
     */
    public function testDragAndDrop()
    {
        /** @var Categories $categories */
        $categories = $this->login()->openCategories('Oro\Bundle\CatalogBundle');
        sleep(1);

        /**
         * preconditions
         *
         *  - Master catalog
         *      - First category
         *          - Second category
         */
        $categories->assertCategoryExists(self::MASTER_CATALOG)
            ->assertCategoryExists(self::$firstCategory)
            ->assertContainsSubcategory(self::MASTER_CATALOG, self::$firstCategory)
            ->openTreeSubcategories(self::$firstCategory)
            ->assertCategoryExists(self::$secondCategory)
            ->assertContainsSubcategory(self::$firstCategory, self::$secondCategory);

        /**
         * move second category to master catalog
         *
         *  - Master catalog
         *      - Second category
         *      - First category
         */
        $categories->dragAndDrop(self::$secondCategory, self::MASTER_CATALOG)
            ->assertContainsSubcategory(self::MASTER_CATALOG, self::$secondCategory)
            ->assertNotContainSubcategory(self::$firstCategory, self::$secondCategory)
            ->assertCategoryAfter(self::$secondCategory, self::$firstCategory);

        /**
         * move second category after first category
         *
         *  - Master catalog
         *      - First category
         *      - Second category
         */
        $categories->dragAndDropAfterTarget(self::$secondCategory, self::$firstCategory)
            ->assertCategoryAfter(self::$firstCategory, self::$secondCategory);

        /**
         * move first category to second category
         *
         *  - Master catalog
         *      - Second category
         *          - First category
         */
        $categories->dragAndDrop(self::$firstCategory, self::$secondCategory)
            ->openTreeSubcategories(self::$secondCategory)
            ->assertContainsSubcategory(self::$secondCategory, self::$firstCategory)
            ->assertNotContainSubcategory(self::MASTER_CATALOG, self::$firstCategory);
    }

    /**
     * @depends testDragAndDrop
     */
    public function testDeleteCategories()
    {
        /** @var Categories $categories */
        $categories = $this->login()->openCategories('Oro\Bundle\CatalogBundle');
        sleep(1);

        /**
         * preconditions
         *
         *  - Master catalog
         *      - Second category
         *          - First category
         */
        $categories->assertCategoryExists(self::MASTER_CATALOG)
            ->assertCategoryExists(self::$secondCategory)
            ->assertContainsSubcategory(self::MASTER_CATALOG, self::$secondCategory)
            ->openTreeSubcategories(self::$secondCategory)
            ->assertCategoryExists(self::$firstCategory)
            ->assertContainsSubcategory(self::$secondCategory, self::$firstCategory);

        // master catalog can't be removed
        $categories->openCategory(self::MASTER_CATALOG)
            ->assertDeleteNotAllowed();

        // delete second category, first should be removed automatically
        $categories->openCategory(self::$secondCategory)
            ->assertDeleteAllowed()
            ->deleteCategory();

        // assert categories removed
        $categories->assertTitle('Master Catalog - Products')
            ->assertMessage('Category deleted')
            ->assertCategoryNotExist(self::$firstCategory)
            ->assertCategoryNotExist(self::$secondCategory);
    }

    /**
     * {@inheritdoc}
     */
    public function login($userName = null, $password = null, $args = [])
    {
        return parent::login($userName, $password, ['url' => '/admin']);
    }
}
