<?php

namespace Oro\Bundle\FrontendLocalizationBundle\Tests\Unit\DependencyInjection;

use Oro\Bundle\FrontendLocalizationBundle\DependencyInjection\OroFrontendLocalizationExtension;
use Oro\Bundle\TestFrameworkBundle\Test\DependencyInjection\ExtensionTestCase;

class OroWebsiteExtensionTest extends ExtensionTestCase
{
    public function testLoad()
    {
        $this->loadExtension(new OroFrontendLocalizationExtension());

        $expectedDefinitions = [
            'oro_frontend_localization.manager.user_localization',
            'oro_frontend_localization.acl.voter.localization',
        ];

        $this->assertDefinitionsLoaded($expectedDefinitions);
    }
}
