<?php

namespace Oro\Bundle\FrontendLocalizationBundle\Extension;

use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

use Oro\Bundle\FrontendLocalizationBundle\Manager\UserLocalizationManager;
use Oro\Bundle\LocaleBundle\Entity\Localization;
use Oro\Bundle\LocaleBundle\Extension\CurrentLocalizationExtensionInterface;
use Oro\Bundle\UserBundle\Entity\User;
use Oro\Bundle\CustomerBundle\Entity\CustomerUser;

class CurrentLocalizationExtension implements CurrentLocalizationExtensionInterface
{
    /**
     * @var TokenStorageInterface
     */
    protected $tokenStorage;

    /**
     * @var UserLocalizationManager
     */
    protected $localizationManager;

    /**
     * @param TokenStorageInterface $tokenStorage
     * @param UserLocalizationManager $localizationManager
     */
    public function __construct(TokenStorageInterface $tokenStorage, UserLocalizationManager $localizationManager)
    {
        $this->tokenStorage = $tokenStorage;
        $this->localizationManager = $localizationManager;
    }

    /**
     * @return Localization|null
     */
    public function getCurrentLocalization()
    {
        if ($this->getLoggedUser() instanceof User) {
            return null;
        }

        return $this->localizationManager->getCurrentLocalization();
    }

    /**
     * @return null|User|CustomerUser
     */
    protected function getLoggedUser()
    {
        $token = $this->tokenStorage->getToken();

        return $token ? $token->getUser() : null;
    }
}
