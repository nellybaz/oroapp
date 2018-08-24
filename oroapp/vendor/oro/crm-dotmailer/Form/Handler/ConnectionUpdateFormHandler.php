<?php

namespace Oro\Bundle\DotmailerBundle\Form\Handler;

use Doctrine\Common\Persistence\ManagerRegistry;

use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\Request;

use Oro\Bundle\DotmailerBundle\Entity\AddressBook;

class ConnectionUpdateFormHandler
{
    /**
     * @var ManagerRegistry
     */
    protected $managerRegistry;

    /**
     * @var Request
     */
    protected $request;

    /**
     * @param ManagerRegistry $managerRegistry
     * @param Request $request
     */
    public function __construct(ManagerRegistry $managerRegistry, Request $request)
    {
        $this->managerRegistry = $managerRegistry;
        $this->request = $request;
    }

    /**
     * @param Form  $form
     * @param array $data
     *
     * @return int|null Return id of selected Address book if form valid and null otherwise
     */
    public function handle(Form $form, array $data)
    {
        $form->setData($data);
        if ($this->request->isMethod('POST')) {
            if ($form->submit($this->request)->isValid()) {
                return $this->onSuccess($form);
            }
        }

        return null;
    }


    /**
     * "Success" form handler
     *
     * @param Form  $form
     *
     * @return int
     */
    protected function onSuccess(Form $form)
    {
        $manager = $this->managerRegistry->getManager();

        $data = $form->getData();
        /** @var AddressBook $addressBook */
        $addressBook = $data['addressBook'];
        $addressBook->setCreateEntities($data['createEntities']);
        $manager->persist($addressBook);
        $manager->flush();

        return $addressBook->getId();
    }
}
