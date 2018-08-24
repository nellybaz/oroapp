<?php

namespace Oro\Bundle\CampaignBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

use Oro\Bundle\ConfigBundle\DependencyInjection\SettingsBuilder;

class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode    = $treeBuilder->root('oro_campaign');

        SettingsBuilder::append(
            $rootNode,
            [
                'campaign_sender_email' => ['value' => sprintf('no-reply@%s.example', gethostname())],
                'campaign_sender_name'  => ['value' => 'Oro'],
                'feature_enabled' => ['value' => true],
            ]
        );

        return $treeBuilder;
    }
}
