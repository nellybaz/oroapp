<?php

namespace Oro\Bundle\UserBundle\Mailer;

use Oro\Bundle\UserBundle\Entity\UserInterface;

class Processor extends BaseProcessor
{
    const TEMPLATE_USER_RESET_PASSWORD          = 'user_reset_password';
    const TEMPLATE_USER_RESET_PASSWORD_AS_ADMIN = 'user_reset_password_as_admin';
    const TEMPLATE_USER_CHANGE_PASSWORD         = 'user_change_password';
    const TEMPLATE_FORCE_RESET_PASSWORD         = 'force_reset_password';
    const TEMPLATE_USER_IMPERSONATE             = 'user_impersonate';

    /**
     * @param UserInterface $user
     *
     * @return int
     */
    public function sendChangePasswordEmail(UserInterface $user)
    {
        return $this->getEmailTemplateAndSendEmail(
            $user,
            static::TEMPLATE_USER_CHANGE_PASSWORD,
            ['entity' => $user, 'plainPassword' => $user->getPlainPassword()]
        );
    }

    /**
     * @param UserInterface $user
     *
     * @return int
     */
    public function sendResetPasswordEmail(UserInterface $user)
    {
        return $this->getEmailTemplateAndSendEmail(
            $user,
            static::TEMPLATE_USER_RESET_PASSWORD,
            ['entity' => $user]
        );
    }

    /**
     * @param UserInterface $user
     *
     * @return int
     */
    public function sendResetPasswordAsAdminEmail(UserInterface $user)
    {
        return $this->getEmailTemplateAndSendEmail(
            $user,
            static::TEMPLATE_USER_RESET_PASSWORD_AS_ADMIN,
            ['entity' => $user]
        );
    }

    /**
     * @param UserInterface $user
     *
     * @return int
     */
    public function sendForcedResetPasswordAsAdminEmail(UserInterface $user)
    {
        return $this->getEmailTemplateAndSendEmail(
            $user,
            static::TEMPLATE_FORCE_RESET_PASSWORD,
            ['entity' => $user]
        );
    }

    /**
     * @param UserInterface $user
     *
     * @return int
     */
    public function sendImpersonateEmail(UserInterface $user)
    {
        return $this->getEmailTemplateAndSendEmail(
            $user,
            static::TEMPLATE_USER_IMPERSONATE,
            ['entity' => $user]
        );
    }
}
