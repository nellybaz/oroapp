<?php

namespace Oro\Bundle\CustomerBundle\Form\Handler;

use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\Request;

use Oro\Bundle\CustomerBundle\Entity\CustomerUser;

class CustomerUserPasswordResetHandler extends AbstractCustomerUserPasswordHandler
{
    /**
     * @param FormInterface $form
     * @param Request $request
     * @return bool
     */
    public function process(FormInterface $form, Request $request)
    {
        if ($request->isMethod('POST')) {
            $form->submit($request);
            if ($form->isValid()) {
                /** @var CustomerUser $user */
                $user = $form->getData();

                $user
                    ->setConfirmed(true)
                    ->setConfirmationToken(null)
                    ->setPasswordRequestedAt(null);

                $this->userManager->updateUser($user);

                return true;
            }
        }

        return false;
    }
}
