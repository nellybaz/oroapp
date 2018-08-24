<?php

namespace Oro\Bundle\ProductBundle\EventListener;

use Oro\Bundle\FormBundle\Event\FormHandler\AfterFormProcessEvent;
use Oro\Bundle\ProductBundle\Entity\Product;
use Psr\Log\LoggerInterface;
use Symfony\Component\PropertyAccess\Exception\NoSuchPropertyException;
use Symfony\Component\PropertyAccess\PropertyAccessor;

class ProductHandlerListener
{
    /** @var PropertyAccessor */
    protected $propertyAccessor;

    /** @var LoggerInterface */
    protected $logger;

    /**
     * {@inheritdoc}
     */
    public function __construct(PropertyAccessor $propertyAccessor, LoggerInterface $logger)
    {
        $this->propertyAccessor = $propertyAccessor;
        $this->logger = $logger;
    }

    /**
     * @param AfterFormProcessEvent $event
     */
    public function onBeforeFlush(AfterFormProcessEvent $event)
    {
        $data = $event->getData();

        if (!$data instanceof Product) {
            return;
        }

        if ($data->isConfigurable()) {
            $this->clearCustomExtendVariantFields($data);
        } else {
            $data->getVariantLinks()->clear();
        }
    }

    /**
     * @param Product $product
     */
    protected function clearCustomExtendVariantFields(Product $product)
    {
        foreach ($product->getVariantFields() as $variantField) {
            try {
                $this->propertyAccessor->setValue($product, $variantField, null);
            } catch (NoSuchPropertyException $e) {
                $this->logger->warning('Can not clear custom extend variant field', ['exception' => $e]);
            }
        }
    }
}
