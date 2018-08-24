<?php

namespace Oro\Bundle\ProductBundle\ContentVariantType;

use Oro\Bundle\ProductBundle\Entity\Product;
use Oro\Bundle\ProductBundle\Form\Type\ProductPageVariantType;
use Oro\Component\Routing\RouteData;
use Oro\Component\WebCatalog\ContentVariantTypeInterface;
use Oro\Component\WebCatalog\Entity\ContentVariantInterface;
use Symfony\Component\PropertyAccess\PropertyAccessor;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

class ProductPageContentVariantType implements ContentVariantTypeInterface
{
    const TYPE = 'product_page';

    /** @var AuthorizationCheckerInterface */
    private $authorizationChecker;

    /** @var PropertyAccessor */
    private $propertyAccessor;

    /**
     * @param AuthorizationCheckerInterface $authorizationChecker
     * @param PropertyAccessor              $propertyAccessor
     */
    public function __construct(
        AuthorizationCheckerInterface $authorizationChecker,
        PropertyAccessor $propertyAccessor
    ) {
        $this->authorizationChecker = $authorizationChecker;
        $this->propertyAccessor = $propertyAccessor;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return self::TYPE;
    }

    /**
     * {@inheritdoc}
     */
    public function getTitle()
    {
        return 'oro.product.content_variant.product_page.label';
    }

    /**
     * {@inheritdoc}
     */
    public function getFormType()
    {
        return ProductPageVariantType::class;
    }

    /**
     * {@inheritdoc}
     */
    public function isAllowed()
    {
        return $this->authorizationChecker->isGranted('oro_product_view');
    }

    /**
     * {@inheritdoc}
     */
    public function getRouteData(ContentVariantInterface $contentVariant)
    {
        /** @var Product $product */
        $product = $this->propertyAccessor->getValue($contentVariant, 'productPageProduct');

        return new RouteData('oro_product_frontend_product_view', ['id' => $product->getId()]);
    }
}
