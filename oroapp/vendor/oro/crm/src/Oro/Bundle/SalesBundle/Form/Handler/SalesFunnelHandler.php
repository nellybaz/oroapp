<?php

namespace Oro\Bundle\SalesBundle\Form\Handler;

use Oro\Bundle\SalesBundle\Entity\SalesFunnel;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\Request;

use Doctrine\Common\Persistence\ObjectManager;

/**
 * @deprecated since 2.0 will be removed after 2.2
 */
class SalesFunnelHandler
{
    /**
     * @var FormInterface
     */
    protected $form;

    /**
     * @var Request
     */
    protected $request;

    /**
     * @var ObjectManager
     */
    protected $manager;

    /**
     * @param FormInterface $form
     * @param Request       $request
     * @param ObjectManager $manager
     */
    public function __construct(FormInterface $form, Request $request, ObjectManager $manager)
    {
        $this->form    = $form;
        $this->request = $request;
        $this->manager = $manager;
    }

    /**
     * Process form
     *
     * @param  SalesFunnel $entity
     * @return bool        True on successful processing, false otherwise
     */
    public function process(SalesFunnel $entity)
    {
        $this->form->setData($entity);

        if (in_array($this->request->getMethod(), array('POST', 'PUT'))) {
            $this->form->submit($this->request);

            if ($this->form->isValid()) {
                $this->onSuccess($entity);

                return true;
            }
        }

        return false;
    }

    /**
     * "Success" form handler
     *
     * @param SalesFunnel $entity
     */
    protected function onSuccess(SalesFunnel $entity)
    {
        $this->manager->persist($entity);
        $this->manager->flush();
    }
}
