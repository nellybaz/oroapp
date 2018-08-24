<?php

namespace Oro\Bundle\SEOBundle\EventListener;

use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Translation\TranslatorInterface;

use Oro\Bundle\EntityBundle\ORM\DoctrineHelper;
use Oro\Bundle\UIBundle\Event\BeforeListRenderEvent;
use Oro\Bundle\UIBundle\View\ScrollData;

abstract class BaseFormViewListener
{
    const SEO_BLOCK_ID = 'seo';

    /**
     * @var TranslatorInterface
     */
    protected $translator;

    /**
     * @param TranslatorInterface $translator
     */
    public function __construct(TranslatorInterface $translator)
    {
        $this->translator = $translator;
    }

    /**
     * @param BeforeListRenderEvent $event
     * @param int $priority
     */
    protected function addViewPageBlock(BeforeListRenderEvent $event, $priority = 10)
    {
        $object = $event->getEntity();
        if (!$object) {
            return;
        }

        $twigEnv = $event->getEnvironment();
        $titleTemplate = $twigEnv->render('OroSEOBundle:SEO:title_view.html.twig', [
            'entity' => $object,
            'labelPrefix' => $this->getMetaFieldLabelPrefix()
        ]);
        $descriptionTemplate = $twigEnv->render('OroSEOBundle:SEO:description_view.html.twig', [
            'entity' => $object,
            'labelPrefix' => $this->getMetaFieldLabelPrefix(),
        ]);
        $keywordsTemplate = $twigEnv->render('OroSEOBundle:SEO:keywords_view.html.twig', [
            'entity' => $object,
            'labelPrefix' => $this->getMetaFieldLabelPrefix(),
        ]);

        $this->addSEOBlock($event->getScrollData(), $titleTemplate, $descriptionTemplate, $keywordsTemplate, $priority);
    }

    /**
     * @param BeforeListRenderEvent $event
     * @param int $priority
     */
    protected function addEditPageBlock(BeforeListRenderEvent $event, $priority = 10)
    {
        $twigEnv = $event->getEnvironment();
        $formView = $event->getFormView();
        $titleTemplate = $twigEnv->render(
            'OroSEOBundle:SEO:title_update.html.twig',
            ['form' => $formView]
        );
        $descriptionTemplate = $twigEnv->render(
            'OroSEOBundle:SEO:description_update.html.twig',
            ['form' => $formView]
        );
        $keywordsTemplate = $twigEnv->render(
            'OroSEOBundle:SEO:keywords_update.html.twig',
            ['form' => $formView]
        );

        $this->addSEOBlock($event->getScrollData(), $titleTemplate, $descriptionTemplate, $keywordsTemplate, $priority);
    }

    /**
     * @param ScrollData $scrollData
     * @param string $titleTemplate
     * @param string $descriptionTemplate
     * @param string $keywordsTemplate
     * @param int $priority
     */
    protected function addSEOBlock(
        ScrollData $scrollData,
        $titleTemplate,
        $descriptionTemplate,
        $keywordsTemplate,
        $priority = 10
    ) {
        $blockLabel = $this->translator->trans('oro.seo.label');
        $scrollData->addNamedBlock(self::SEO_BLOCK_ID, $blockLabel, $priority);
        $leftSubBlock = $scrollData->addSubBlock(self::SEO_BLOCK_ID);
        $rightSubBlock = $scrollData->addSubBlock(self::SEO_BLOCK_ID);
        $scrollData->addSubBlockData(self::SEO_BLOCK_ID, $leftSubBlock, $titleTemplate, 'metaTitles');
        $scrollData->addSubBlockData(self::SEO_BLOCK_ID, $leftSubBlock, $descriptionTemplate, 'metaDescriptions');
        $scrollData->addSubBlockData(self::SEO_BLOCK_ID, $rightSubBlock, $keywordsTemplate, 'metaKeywords');
    }

    /**
     * @return string
     */
    abstract public function getMetaFieldLabelPrefix();
}
