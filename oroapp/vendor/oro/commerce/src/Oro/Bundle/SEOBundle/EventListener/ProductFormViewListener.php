<?php

namespace Oro\Bundle\SEOBundle\EventListener;

use Oro\Component\Exception\UnexpectedTypeException;
use Oro\Bundle\ProductBundle\Entity\Product;
use Oro\Bundle\UIBundle\Event\BeforeListRenderEvent;

class ProductFormViewListener extends BaseFormViewListener
{
    /**
     * Insert SEO information
     *
     * @param BeforeListRenderEvent $event
     */
    public function onProductView(BeforeListRenderEvent $event)
    {
        $product = $event->getEntity();

        if (!$product instanceof Product) {
            throw new UnexpectedTypeException($product, Product::class);
        }

        $this->addViewPageBlock($event);
    }

    /**
     * {@inheritDoc}
     */
    protected function addViewPageBlock(BeforeListRenderEvent $event, $priority = 10)
    {
        $product = $event->getEntity();

        $twigEnv = $event->getEnvironment();
        $titleTemplate = $twigEnv->render('OroSEOBundle:SEO:title_view.html.twig', [
            'entity' => $product,
            'labelPrefix' => $this->getMetaFieldLabelPrefix()
        ]);
        $descriptionTemplate = $twigEnv->render('OroSEOBundle:SEO:description_view.html.twig', [
            'entity' => $product,
            'labelPrefix' => $this->getMetaFieldLabelPrefix()
        ]);
        $keywordsTemplate = $twigEnv->render('OroSEOBundle:SEO:keywords_view.html.twig', [
            'entity' => $product,
            'labelPrefix' => $this->getMetaFieldLabelPrefix()
        ]);
        $slugsTemplate = $twigEnv->render('OroRedirectBundle::entitySlugs.html.twig', [
            'entitySlugs' => $product->getSlugs()
        ]);
        $scrollData = $event->getScrollData();
        $blockLabel = $this->translator->trans('oro.seo.label');
        $scrollData->addNamedBlock(self::SEO_BLOCK_ID, $blockLabel, 800);
        $subBlock = $scrollData->addSubBlock(self::SEO_BLOCK_ID);
        $scrollData->addSubBlockData(self::SEO_BLOCK_ID, $subBlock, $slugsTemplate, 'generatedSlugs');
        $scrollData->addSubBlockData(self::SEO_BLOCK_ID, $subBlock, $titleTemplate, 'metaTitles');
        $scrollData->addSubBlockData(self::SEO_BLOCK_ID, $subBlock, $descriptionTemplate, 'metaDescriptions');
        $scrollData->addSubBlockData(self::SEO_BLOCK_ID, $subBlock, $keywordsTemplate, 'metaKeywords');
    }

    /**
     * @param BeforeListRenderEvent $event
     */
    public function onProductEdit(BeforeListRenderEvent $event)
    {
        $this->addEditPageBlock($event);
    }

    /**
     * @return string
     */
    public function getMetaFieldLabelPrefix()
    {
        return 'oro.product';
    }
}
