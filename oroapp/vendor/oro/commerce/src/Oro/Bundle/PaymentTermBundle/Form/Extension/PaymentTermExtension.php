<?php

namespace Oro\Bundle\PaymentTermBundle\Form\Extension;

use Oro\Bundle\CustomerBundle\Entity\CustomerOwnerAwareInterface;
use Oro\Bundle\FormBundle\Utils\FormUtils;
use Oro\Bundle\PaymentTermBundle\Form\Type\PaymentTermSelectType;
use Oro\Bundle\PaymentTermBundle\Provider\PaymentTermProvider;

use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormInterface;

class PaymentTermExtension extends AbstractTypeExtension
{
    /** @var PaymentTermProvider */
    protected $paymentTermProvider;

    /** @var bool[] */
    protected $replacedFields = [];

    /**
     * @param PaymentTermProvider $paymentTermProvider
     */
    public function __construct(PaymentTermProvider $paymentTermProvider)
    {
        $this->paymentTermProvider = $paymentTermProvider;
    }

    /** {@inheritdoc} */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->addEventListener(
            FormEvents::POST_SET_DATA,
            function (FormEvent $event) {
                $form = $event->getForm();
                $parent = $form->getParent();
                if (!$parent) {
                    return;
                }

                if (array_key_exists($this->getKey($parent, $form), $this->replacedFields)) {
                    return;
                }

                $data = $parent->getData();
                if (!$data) {
                    return;
                }

                if (!$data instanceof CustomerOwnerAwareInterface) {
                    return;
                }

                $this->replacedFields[$this->getKey($parent, $form)] = true;
                FormUtils::replaceField($parent, $form->getName(), $this->getPaymentTermOptions($data));
            }
        );
    }

    /**
     * @param FormInterface $parent
     * @param FormInterface $child
     * @return string
     */
    protected function getKey(FormInterface $parent, FormInterface $child)
    {
        return implode('+', [$parent->getName(), $child->getName()]);
    }

    /**
     * {@inheritdoc}
     * @throws \InvalidArgumentException If extendedType not set
     */
    public function getExtendedType()
    {
        return PaymentTermSelectType::NAME;
    }

    /**
     * @param CustomerOwnerAwareInterface $data
     * @return array
     */
    protected function getPaymentTermOptions(CustomerOwnerAwareInterface $data)
    {
        $options = [
            'attr' => [
                'data-customer-payment-term' => $this->getCustomerPaymentTermId($data),
                'data-customer-group-payment-term' => $this->getCustomerGroupPaymentTermId($data),
            ],
        ];

        return $options;
    }

    /**
     * @param CustomerOwnerAwareInterface $customerOwnerAware
     * @return int|null
     */
    protected function getCustomerPaymentTermId(CustomerOwnerAwareInterface $customerOwnerAware)
    {
        $paymentTerm = $this->paymentTermProvider->getCustomerPaymentTermByOwner($customerOwnerAware);

        return $paymentTerm ? $paymentTerm->getId() : null;
    }

    /**
     * @param CustomerOwnerAwareInterface $customerOwnerAware
     * @return int|null
     */
    protected function getCustomerGroupPaymentTermId(CustomerOwnerAwareInterface $customerOwnerAware)
    {
        $paymentTerm = $this->paymentTermProvider->getCustomerGroupPaymentTermByOwner($customerOwnerAware);

        return $paymentTerm ? $paymentTerm->getId() : null;
    }
}
