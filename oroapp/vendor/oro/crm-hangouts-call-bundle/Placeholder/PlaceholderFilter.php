<?php

namespace Oro\Bundle\HangoutsCallBundle\Placeholder;

use Oro\Bundle\ConfigBundle\Config\ConfigManager;
use Oro\Bundle\UIBundle\Provider\UserAgentProvider;

class PlaceholderFilter
{
    /** @var ConfigManager */
    protected $configManager;

    /** @var UserAgentProvider */
    protected $userAgentProvider;

    /**
     * @param ConfigManager $configManager
     * @param UserAgentProvider $userAgentProvider
     */
    public function __construct(ConfigManager $configManager, UserAgentProvider $userAgentProvider)
    {
        $this->configManager  = $configManager;
        $this->userAgentProvider  = $userAgentProvider;
    }

    /**
     * Check if HangoutsCall for emails functionality is turned on
     *
     * @return bool
     */
    public function isEmailApplicable()
    {
        // hangouts call functionality is enabled in system configuration and it is desktop client
        return (bool)$this->configManager->get('oro_hangouts_call.enable_google_hangouts_for_email') &&
            $this->userAgentProvider->getUserAgent()->isDesktop();
    }

    /**
     * Check if HangoutsCall for phones functionality is turned on
     *
     * @return bool
     */
    public function isPhoneApplicable()
    {
        // hangouts call functionality is enabled in system configuration and it is desktop client
        return (bool)$this->configManager->get('oro_hangouts_call.enable_google_hangouts_for_phone') &&
            $this->userAgentProvider->getUserAgent()->isDesktop();
    }
}
