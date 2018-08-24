<?php

namespace Oro\Bundle\CMSBundle\ContentVariantType;

use Oro\Bundle\CMSBundle\Entity\Page;
use Oro\Bundle\CMSBundle\Form\Type\CmsPageVariantType;
use Oro\Component\Routing\RouteData;
use Oro\Component\WebCatalog\ContentVariantTypeInterface;
use Oro\Component\WebCatalog\Entity\ContentVariantInterface;
use Symfony\Component\PropertyAccess\PropertyAccessor;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

class CmsPageContentVariantType implements ContentVariantTypeInterface
{
    const TYPE = 'cms_page';

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
        return 'oro.cms.page.entity_label';
    }

    /**
     * {@inheritdoc}
     */
    public function getFormType()
    {
        return CmsPageVariantType::class;
    }

    /**
     * {@inheritdoc}
     */
    public function isAllowed()
    {
        return $this->authorizationChecker->isGranted('oro_cms_page_view');
    }

    /**
     * {@inheritdoc}
     */
    public function getRouteData(ContentVariantInterface $contentVariant)
    {
        /** @var Page $cmsPage */
        $cmsPage = $this->propertyAccessor->getValue($contentVariant, 'cmsPage');

        return new RouteData('oro_cms_frontend_page_view', ['id' => $cmsPage->getId()]);
    }
}
