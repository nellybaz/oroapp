<?php

namespace Oro\Bundle\VisibilityBundle\Tests\Unit\Entity\VisibilityResolved;

use Oro\Component\Testing\Unit\EntityTestCaseTrait;
use Oro\Bundle\VisibilityBundle\Entity\Visibility\CustomerCategoryVisibility;
use Oro\Bundle\VisibilityBundle\Entity\VisibilityResolved\CustomerCategoryVisibilityResolved;
use Oro\Bundle\VisibilityBundle\Entity\VisibilityResolved\BaseCategoryVisibilityResolved;
use Oro\Bundle\CatalogBundle\Entity\Category;
use Oro\Bundle\ScopeBundle\Entity\Scope;

class CustomerCategoryVisibilityResolvedTest extends \PHPUnit_Framework_TestCase
{
    use EntityTestCaseTrait;

    /** @var CustomerCategoryVisibilityResolved */
    protected $customerCategoryVisibilityResolved;

    /** @var Category */
    protected $category;

    /** @var Scope */
    protected $scope;

    protected function setUp()
    {
        $this->category = new Category();
        $this->scope = new Scope();
        $this->customerCategoryVisibilityResolved = new CustomerCategoryVisibilityResolved(
            $this->category,
            $this->scope
        );
    }

    protected function tearDown()
    {
        unset($this->customerCategoryVisibilityResolved, $this->category, $this->scope);
    }

    /**
     * Test setters getters
     */
    public function testAccessors()
    {
        $this->assertPropertyAccessors(
            $this->customerCategoryVisibilityResolved,
            [
                ['visibility', 0],
                ['sourceCategoryVisibility', new CustomerCategoryVisibility()],
                ['source', BaseCategoryVisibilityResolved::VISIBILITY_VISIBLE],
            ]
        );
    }

    public function testGetScope()
    {
        $this->assertEquals($this->scope, $this->customerCategoryVisibilityResolved->getScope());
    }

    public function testGetCategory()
    {
        $this->assertEquals($this->category, $this->customerCategoryVisibilityResolved->getCategory());
    }
}
