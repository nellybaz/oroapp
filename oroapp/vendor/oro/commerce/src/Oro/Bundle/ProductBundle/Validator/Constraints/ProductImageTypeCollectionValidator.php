<?php

namespace Oro\Bundle\ProductBundle\Validator\Constraints;

use Doctrine\Common\Collections\Collection;

use Symfony\Component\Translation\TranslatorInterface;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

use Oro\Bundle\LayoutBundle\Model\ThemeImageType;
use Oro\Bundle\LayoutBundle\Provider\ImageTypeProvider;

class ProductImageTypeCollectionValidator extends ConstraintValidator
{
    const ALIAS = 'oro_product_image_type_collection_validator';

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
     * @param ImageTypeProvider $imageTypeProvider
     * @param TranslatorInterface $translator
     */
    public function __construct(
        ImageTypeProvider $imageTypeProvider,
        TranslatorInterface $translator
    ) {
        $this->imageTypeProvider = $imageTypeProvider;
        $this->translator = $translator;
    }

    /**
     * @param ProductImageType[]|Collection $value
     * @param Constraint|ProductImageCollection $constraint
     */
    public function validate($value, Constraint $constraint)
    {
        if ($value->isEmpty()) {
            return;
        }

        $typeNames = [];
        /** @var \Oro\Bundle\ProductBundle\Entity\ProductImageType $imageType */
        foreach ($value as $imageType) {
            $typeNames[] = $imageType->getType();
        }

        /** @var ThemeImageType[] $availableTypes */
        $availableTypes = $this->imageTypeProvider->getImageTypes();
        foreach (array_count_values($typeNames) as $typeName => $count) {
            if ($count > 1) {
                $this->context
                    ->buildViolation($constraint->message, [
                        '%type%' => $this->translator->trans(
                            $availableTypes[$typeName]->getLabel()
                        ),
                    ])
                    ->addViolation();
            }
        }
    }
}
