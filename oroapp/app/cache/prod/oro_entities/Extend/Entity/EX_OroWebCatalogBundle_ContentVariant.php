<?php

namespace Extend\Entity;

abstract class EX_OroWebCatalogBundle_ContentVariant implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    protected $serialized_data;
    protected $product_page_product;
    protected $product_collection_segment;
    protected $exclude_subcategories;
    protected $cms_page;
    protected $category_page_category;

    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }

    public function setProductPageProduct($value)
    {
        $this->product_page_product = $value; return $this;
    }

    public function setProductCollectionSegment($value)
    {
        $this->product_collection_segment = $value; return $this;
    }

    public function setExcludeSubcategories($value)
    {
        $this->exclude_subcategories = $value; return $this;
    }

    public function setCmsPage($value)
    {
        $this->cms_page = $value; return $this;
    }

    public function setCategoryPageCategory($value)
    {
        $this->category_page_category = $value; return $this;
    }

    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    public function getProductPageProduct()
    {
        return $this->product_page_product;
    }

    public function getProductCollectionSegment()
    {
        return $this->product_collection_segment;
    }

    public function getExcludeSubcategories()
    {
        return $this->exclude_subcategories;
    }

    public function getCmsPage()
    {
        return $this->cms_page;
    }

    public function getCategoryPageCategory()
    {
        return $this->category_page_category;
    }

    public function __construct()
    {
    }
}