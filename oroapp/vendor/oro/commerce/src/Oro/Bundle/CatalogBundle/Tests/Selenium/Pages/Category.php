<?php

namespace Oro\Bundle\CatalogBundle\Tests\Selenium\Pages;

use Oro\Bundle\TestFrameworkBundle\Pages\AbstractPageEntity;

class Category extends AbstractPageEntity
{
    /** @var string */
    protected $subcategoryButton = '//a[@title="Create Subcategory"]';

    /** @var string */
    protected $deleteButton = '//a[@title="Delete Category"]';

    /** @var string */
    protected $deleteConfirmButton = '//a[contains(., "Yes, Delete")]';

    /** @var \PHPUnit_Extensions_Selenium2TestCase_Element */
    protected $defaultTitle;

    /**
     * {@inheritdoc}
     */
    public function __construct($testCase, $redirect = true)
    {
        parent::__construct($testCase, $redirect);

        $this->defaultTitle
            = $this->test->byXpath("//input[starts-with(@id,'oro_catalog_category_titles_values_default')]");
    }

    /**
     * @param string $title
     * @return $this
     */
    public function setDefaultTitle($title)
    {
        $this->defaultTitle->value($title);

        return $this;
    }

    /**
     * @return Category
     */
    public function createSubcategory()
    {
        $this->test->byXPath($this->subcategoryButton)->click();
        $this->waitPageToLoad();
        $this->waitForAjax();
        sleep(1);

        return new Category($this->test);
    }

    public function deleteCategory()
    {
        $this->test->byXPath($this->deleteButton)->click();
        $this->test->byXPath($this->deleteConfirmButton)->click();
        $this->waitPageToLoad();
        $this->waitForAjax();
        sleep(1);
    }

    /**
     * @return $this
     */
    public function saveCategory()
    {
        $this->save('Save');
        $this->waitPageToLoad();
        $this->waitForAjax();
        sleep(1);

        return $this;
    }

    /**
     * @return $this
     */
    public function assertDeleteAllowed()
    {
        $this->test->assertTrue(
            $this->isElementPresent($this->deleteButton),
            'Delete button %s does not exist'
        );

        return $this;
    }

    /**
     * @return $this
     */
    public function assertDeleteNotAllowed()
    {
        $this->test->assertFalse(
            $this->isElementPresent($this->deleteButton),
            'Delete button %s exists'
        );

        return $this;
    }
}
