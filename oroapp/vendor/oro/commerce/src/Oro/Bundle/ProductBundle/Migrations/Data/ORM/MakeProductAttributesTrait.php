<?php

namespace Oro\Bundle\ProductBundle\Migrations\Data\ORM;

use Doctrine\Common\Persistence\ObjectManager;

use Oro\Bundle\EntityConfigBundle\Attribute\Entity\AttributeFamily;
use Oro\Bundle\EntityConfigBundle\Attribute\Entity\AttributeGroup;
use Oro\Bundle\EntityConfigBundle\Attribute\Entity\AttributeGroupRelation;
use Oro\Bundle\EntityConfigBundle\Config\ConfigManager;
use Oro\Bundle\EntityExtendBundle\EntityConfig\ExtendScope;
use Oro\Bundle\ProductBundle\Entity\Product;

use Symfony\Component\DependencyInjection\ContainerAwareTrait;

trait MakeProductAttributesTrait
{
    use ContainerAwareTrait;

    /**
     * @param array $fields
     * @param string $owner
     */
    private function makeProductAttributes(array $fields, $owner = ExtendScope::ORIGIN_SYSTEM)
    {
        $configManager = $this->getConfigManager();
        $configHelper = $this->container->get('oro_entity_config.config.config_helper');
        $entityManager = $configManager->getEntityManager();

        foreach ($fields as $field => $attributeOptions) {
            $fieldConfigModel = $configManager->getConfigFieldModel(Product::class, $field);

            $options = [
                'attribute' => array_merge([
                    'is_attribute' => true,
                ], $attributeOptions),
                'extend' => [
                    'owner' => $owner
                ]
            ];

            $configHelper->updateFieldConfigs($fieldConfigModel, $options);
            $entityManager->persist($fieldConfigModel);
        }

        $entityManager->flush();
    }

    /**
     * @param array $fields
     */
    private function updateProductAttributes(array $fields)
    {
        $configManager = $this->getConfigManager();
        $configHelper = $this->container->get('oro_entity_config.config.config_helper');
        $entityManager = $configManager->getEntityManager();

        foreach ($fields as $field => $attributeOptions) {
            $fieldConfigModel = $configManager->getConfigFieldModel(Product::class, $field);

            $configHelper->updateFieldConfigs($fieldConfigModel, ['attribute' => $attributeOptions]);
            $entityManager->persist($fieldConfigModel);
        }

        $entityManager->flush();
    }

    /**
     * @return ConfigManager
     */
    private function getConfigManager()
    {
        return $this->container->get('oro_entity_config.config_manager');
    }

    /**
     * Iterates over passed groups array assigning corresponding attributes
     * Assigns groups to passed family
     *
     * @param array $groupsWithAttributes
     * @param AttributeFamily $attributeFamily
     * @param ObjectManager $manager
     */
    protected function addGroupsWithAttributesToFamily(
        array $groupsWithAttributes,
        AttributeFamily $attributeFamily,
        ObjectManager $manager
    ) {
        $configManager = $this->getConfigManager();

        foreach ($groupsWithAttributes as $groupData) {
            $attributeGroup = new AttributeGroup();
            $attributeGroup->setDefaultLabel($groupData['groupLabel']);
            $attributeGroup->setIsVisible($groupData['groupVisibility']);
            $attributeGroup->setCode($groupData['groupCode']);
            foreach ($groupData['attributes'] as $attribute) {
                $fieldConfigModel = $configManager->getConfigFieldModel(Product::class, $attribute);
                $attributeGroupRelation = new AttributeGroupRelation();
                $attributeGroupRelation->setEntityConfigFieldId($fieldConfigModel->getId());
                $attributeGroup->addAttributeRelation($attributeGroupRelation);
            }

            $attributeFamily->addAttributeGroup($attributeGroup);
        }

        $manager->persist($attributeFamily);
        $manager->flush();
    }
}
