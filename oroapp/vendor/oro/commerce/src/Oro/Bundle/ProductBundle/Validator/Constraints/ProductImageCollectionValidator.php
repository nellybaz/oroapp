<?php

namespace Oro\Bundle\ProductBundle\Validator\Constraints;

use Doctrine\Common\Collections\Collection;

use Symfony\Component\Translation\TranslatorInterface;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

use Oro\Bundle\LayoutBundle\Provider\ImageTypeProvider;
use Oro\Bundle\ProductBundle\Entity\ProductImage as EntityProductImage;
use Oro\Bundle\ProductBundle\Helper\ProductImageHelper;

class ProductImageCollectionValidator extends ConstraintValidator
{
    const ALIAS = 'oro_product_image_collection_validator';

    /**
     * @var ImageTypeProvider $imageTypeProvider
     */
    protected $imageTypeProvider;

    /**
     * @var TranslatorInterface $translator
     */
    protected $translator;

    /**
     * @var ExecutionContextInterface $context
     */
    protected $context;

    /**
     * @var ProductImageHelper $productImageHelper
     */
    protected $productImageHelper;

    /**
     * @param ImageTypeProvider $imageTypeProvider
     * @param TranslatorInterface $translator
     * @param ProductImageHelper $productImageHelper
     */
    public function __construct(
        ImageTypeProvider $imageTypeProvider,
        TranslatorInterface $translator,
        ProductImageHelper $productImageHelper
    ) {
        $this->imageTypeProvider = $imageTypeProvider;
        $this->translator = $translator;
        $this->productImageHelper = $productImageHelper;
    }

    /**
     * @param EntityProductImage[]|Collection $value
     * @param Constraint|ProductImageCollection $constraint
     *
     * {@inheritdoc}
     */
    public function validate($value, Constraint $constraint)
    {
        $maxNumberByType = $this->imageTypeProvider->getMaxNumberByType();
        $imagesByTypeCounter = $this->productImageHelper->countImagesByType($value);

        foreach ($maxNumberByType as $name => $maxTypeValues) {
            if (array_key_exists($name, $imagesByTypeCounter) &&
                !is_null($maxTypeValues['max']) &&
                $imagesByTypeCounter[$name] > $maxTypeValues['max']
            ) {
                $this->context
                    ->buildViolation($constraint->message, [
                        '%type%' => $this->translator->trans($maxTypeValues['label']),
                        '%maxNumber%' => $maxTypeValues['max']
                    ])
                    ->addViolation();
            }
        }
    }
}
