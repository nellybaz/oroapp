<?php

namespace Oro\Bundle\PaymentBundle\Form\Handler;

use Doctrine\ORM\EntityManager;
use Oro\Bundle\PaymentBundle\Entity\PaymentMethodsConfigsRule;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\Request;

class PaymentMethodsConfigsRuleHandler
{
    const UPDATE_FLAG = 'update_methods_flag';

    /** @var Request */
    protected $request;

    /** @var EntityManager */
    protected $em;

    /** @var FormInterface */
    protected $form;

    /** @var EventDispatcherInterface */
    protected $eventDispatcher;

    /**
     * @param Request $request
     * @param EntityManager $em
     */
    public function __construct(Request $request, EntityManager $em)
    {
        $this->request = $request;
        $this->em = $em;
    }

    /**
     * @param FormInterface $form
     * @param PaymentMethodsConfigsRule $entity
     * @return bool
     */
    public function process(FormInterface $form, PaymentMethodsConfigsRule $entity)
    {
        $form->setData($entity);

        if (in_array($this->request->getMethod(), ['POST', 'PUT'], true)) {
            $form->submit($this->request);
            if (!$this->request->get(self::UPDATE_FLAG, false) && $form->isValid()) {
                $this->em->persist($entity);
                $this->em->flush();

                return true;
            }
        }

        return false;
    }
}
