<?php

namespace Oro\Bundle\SaleBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Oro\Bundle\AddressBundle\Entity\AbstractAddress;
use Oro\Bundle\AddressBundle\Entity\AddressType;
use Oro\Bundle\ImportExportBundle\Serializer\Serializer;
use Oro\Bundle\FormBundle\Form\Extension\StripTagsExtension;
use Oro\Bundle\LocaleBundle\Formatter\AddressFormatter;
use Oro\Bundle\SaleBundle\Model\QuoteAddressManager;
use Oro\Bundle\SaleBundle\Provider\QuoteAddressSecurityProvider;

class QuoteAddressType extends AbstractType
{
    const NAME = 'oro_quote_address_type';

    /** @var string */
    protected $dataClass;

    /** @var AddressFormatter */
    protected $addressFormatter;

    /** @var QuoteAddressManager */
    protected $quoteAddressManager;

    /** @var QuoteAddressSecurityProvider */
    protected $quoteAddressSecurityProvider;

    /** @var Serializer */
    protected $serializer;

    /**
     * @param AddressFormatter $addressFormatter
     * @param QuoteAddressManager $quoteAddressManager
     * @param QuoteAddressSecurityProvider $quoteAddressSecurityProvider
     * @param Serializer $serializer
     */
    public function __construct(
        AddressFormatter $addressFormatter,
        QuoteAddressManager $quoteAddressManager,
        QuoteAddressSecurityProvider $quoteAddressSecurityProvider,
        Serializer $serializer
    ) {
        $this->addressFormatter = $addressFormatter;
        $this->quoteAddressManager = $quoteAddressManager;
        $this->quoteAddressSecurityProvider = $quoteAddressSecurityProvider;
        $this->serializer = $serializer;
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $type = $options['addressType'];
        $quote = $options['quote'];

        $isManualEditGranted = $this->quoteAddressSecurityProvider->isManualEditGranted($type);

        $builder->addEventListener(
            FormEvents::PRE_SET_DATA,
            function (FormEvent $event) use ($quote, $type, $isManualEditGranted) {
                $form = $event->getForm();

                $addressCollection = $this->quoteAddressManager->getGroupedAddresses($quote, $type, 'oro.sale.quote.');
                $addresses = $addressCollection->toArray();

                $customerAddressOptions = [
                    'label' => false,
                    'required' => false,
                    'mapped' => false,
                    'choices' => $this->getChoices($addresses),
                    'configs' => ['placeholder' => 'oro.quote.form.address.choose'],
                    'attr' => [
                        'data-addresses' => json_encode($this->getPlainData($addresses)),
                        'data-default' => $addressCollection->getDefaultAddressKey(),
                    ],
                ];

                if ($isManualEditGranted) {
                    $customerAddressOptions['choices'] = array_merge(
                        $customerAddressOptions['choices'],
                        ['oro.sale.quote.form.address.manual']
                    );
                    $customerAddressOptions['configs']['placeholder'] = 'oro.sale.quote.form.address.choose_or_create';
                }

                $form->add('customerAddress', 'genemu_jqueryselect2_choice', $customerAddressOptions);
            }
        );

        $builder->add('phone', 'text', [StripTagsExtension::OPTION_NAME => true]);

        $builder->addEventListener(
            FormEvents::SUBMIT,
            function (FormEvent $event) use ($isManualEditGranted) {
                if (!$isManualEditGranted) {
                    $event->setData(null);
                }

                $form = $event->getForm();
                if (!$form->has('customerAddress')) {
                    return;
                }

                $identifier = $form->get('customerAddress')->getData();
                if ($identifier === null) {
                    return;
                }

                //Enter manually or Customer/CustomerUser address
                $quoteAddress = $event->getData();

                $address = null;
                if ($identifier) {
                    $address = $this->quoteAddressManager->getEntityByIdentifier($identifier);
                }

                if ($quoteAddress || $address) {
                    $event->setData($this->quoteAddressManager->updateFromAbstract($address, $quoteAddress));
                }
            },
            -10
        );
    }

    /**
     * {@inheritdoc}
     */
    public function finishView(FormView $view, FormInterface $form, array $options)
    {
        $isManualEditGranted = $this->quoteAddressSecurityProvider->isManualEditGranted($options['addressType']);
        $exceptKey = ['phone'];

        foreach ($view->children as $key => $child) {
            if (in_array($key, $exceptKey)) {
                continue;
            }

            $child->vars['disabled'] = !$isManualEditGranted;
            $child->vars['required'] = false;
            unset(
                $child->vars['attr']['data-validation'],
                $child->vars['attr']['data-required'],
                $child->vars['label_attr']['data-required']
            );
        }

        if ($view->offsetExists('customerAddress')) {
            $view->offsetGet('customerAddress')->vars['disabled'] = false;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver
            ->setRequired(['quote', 'addressType'])
            ->setDefaults(['data_class' => $this->dataClass])
            ->setAllowedValues('addressType', [AddressType::TYPE_SHIPPING])
            ->setAllowedTypes('quote', 'Oro\Bundle\SaleBundle\Entity\Quote');
    }

    /**
     * @param string $dataClass
     */
    public function setDataClass($dataClass)
    {
        $this->dataClass = $dataClass;
    }

    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return 'oro_address';
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->getBlockPrefix();
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return self::NAME;
    }

    /**
     * @param array $addresses
     *
     * @return array
     */
    protected function getChoices(array $addresses = [])
    {
        array_walk_recursive(
            $addresses,
            function (&$item) {
                if ($item instanceof AbstractAddress) {
                    $item = $this->addressFormatter->format($item, null, ', ');
                }

                return $item;
            }
        );

        return $addresses;
    }

    /**
     * @param array $addresses
     *
     * @return array
     */
    protected function getPlainData(array $addresses = [])
    {
        $data = [];

        array_walk_recursive(
            $addresses,
            function ($item, $key) use (&$data) {
                if ($item instanceof AbstractAddress) {
                    $data[$key] = $this->serializer->normalize($item);
                }
            }
        );

        return $data;
    }
}
