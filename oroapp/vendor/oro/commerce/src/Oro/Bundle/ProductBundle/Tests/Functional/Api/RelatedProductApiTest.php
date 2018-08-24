<?php

namespace Oro\Bundle\ProductBundle\Tests\Functional\Api;

use Symfony\Component\HttpFoundation\Response;

use Oro\Bundle\UserBundle\Migrations\Data\ORM\LoadRolesData;
use Oro\Bundle\ApiBundle\Tests\Functional\RestJsonApiTestCase;
use Oro\Bundle\CatalogBundle\Tests\Functional\DataFixtures\LoadUserData as CatalogLoadUserData;
use Oro\Bundle\ProductBundle\DependencyInjection\Configuration;
use Oro\Bundle\ProductBundle\Entity\Product;
use Oro\Bundle\ProductBundle\Entity\RelatedItem\RelatedProduct;
use Oro\Bundle\ProductBundle\Tests\Functional\DataFixtures\LoadRelatedProductData;
use Oro\Bundle\UserBundle\Tests\Functional\API\DataFixtures\LoadUserData;

/**
 * @SuppressWarnings(PHPMD.TooManyMethods)
 * @SuppressWarnings(PHPMD.TooManyPublicMethods)
 * @SuppressWarnings(PHPMD.ExcessivePublicCount)
 * @dbIsolationPerTest
 */
class RelatedProductApiTest extends RestJsonApiTestCase
{
    protected function setUp()
    {
        parent::setUp();
        $this->loadFixtures([
            LoadRelatedProductData::class,
            LoadUserData::class,
            CatalogLoadUserData::class
        ]);
        $this->setViewPermission(CatalogLoadUserData::ROLE_CATALOG_MANAGER, Product::class, true);
    }

    public function testGetList()
    {
        $response = $this->cget(['entity' => 'relatedproducts']);

        $this->assertResponseContains('related_product/cget.yml', $response);
    }

    /**
     * oro_related_products_edit - false
     * Product::VIEW             - true
     */
    public function testGetListAccessDeniedOnLackOfPermissionToEditRelatedProducts()
    {
        $response = $this->cget(
            ['entity' => 'relatedproducts'],
            [],
            $this->generateWsseAuthHeader(
                LoadUserData::USER_NAME,
                LoadUserData::USER_PASSWORD
            ),
            false
        );

        $this->assertResponseStatusCodeEquals($response, Response::HTTP_FORBIDDEN);
    }

    /**
     * oro_related_products_edit - true
     * Product::VIEW             - false
     */
    public function testGetListAccessDeniedOnLackOfPermissionToViewProductEntity()
    {
        $this->setViewPermission(CatalogLoadUserData::ROLE_CATALOG_MANAGER, Product::class, false);

        $response = $this->cget(
            ['entity' => 'relatedproducts'],
            [],
            $this->generateWsseAuthHeader(
                CatalogLoadUserData::USER_NAME_CATALOG_MANAGER,
                CatalogLoadUserData::USER_PASSWORD_CATALOG_MANAGER
            ),
            false
        );

        $this->assertResponseStatusCodeEquals($response, Response::HTTP_FORBIDDEN);
    }

    public function testGet()
    {
        $response = $this->get([
            'entity' => 'relatedproducts',
            'id' => '<toString(@related-product-product-3-product-1->id)>',
        ]);

        $this->assertResponseContains('related_product/get.yml', $response);
    }

    /**
     * oro_related_products_edit - false
     * Product::VIEW             - true
     */
    public function testGetAccessDeniedOnLackOfPermissionToEditRelatedProducts()
    {
        $response = $this->get(
            [
                'entity' => 'relatedproducts',
                'id' => '<toString(@related-product-product-3-product-1->id)>',
            ],
            [],
            $this->generateWsseAuthHeader(
                LoadUserData::USER_NAME,
                LoadUserData::USER_PASSWORD
            ),
            false
        );

        $this->assertResponseStatusCodeEquals($response, Response::HTTP_FORBIDDEN);
    }

    /**
     * oro_related_products_edit - true
     * Product::VIEW             - false
     */
    public function testGetAccessDeniedOnLackOfPermissionToViewProductEntity()
    {
        $this->setViewPermission(CatalogLoadUserData::ROLE_CATALOG_MANAGER, Product::class, false);

        $response = $this->get(
            [
                'entity' => 'relatedproducts',
                'id' => '<toString(@related-product-product-3-product-1->id)>',
            ],
            [],
            $this->generateWsseAuthHeader(
                CatalogLoadUserData::USER_NAME_CATALOG_MANAGER,
                CatalogLoadUserData::USER_PASSWORD_CATALOG_MANAGER
            ),
            false
        );

        $this->assertResponseStatusCodeEquals($response, Response::HTTP_FORBIDDEN);
    }

    public function testValidationErrorOnPostInCaseFunctionalityIsDisabled()
    {
        $this->setRelatedProductsEnabled(false);

        $response = $this->post(['entity' => 'relatedproducts'], 'related_product/post.yml', [], false);

        $this->assertResponseValidationError(
            [
                'title'  => 'value constraint',
                'detail' => 'Related Items functionality is disabled.'
            ],
            $response
        );
    }

    public function testValidationErrorOnPostInCaseUserTriesToAddProductToItself()
    {
        $this->setRelatedProductsEnabled(true);

        $response = $this->post(
            ['entity' => 'relatedproducts'],
            'related_product/post_relation_to_itself.yml',
            [],
            false
        );

        $this->assertResponseValidationError(
            [
                'title'  => 'value constraint',
                'detail' => 'It is not possible to create relations from product to itself.'
            ],
            $response
        );
    }

    public function testValidationErrorOnPostInCaseRelationAlreadyExist()
    {
        $response = $this->post(['entity' => 'relatedproducts'], 'related_product/post_relation_exists.yml', [], false);

        $this->assertResponseValidationError(
            [
                'title'  => 'value constraint',
                'detail' => 'Relation between products already exists.'
            ],
            $response
        );
    }

    public function testValidationErrorOnPostInCaseLimitExceeded()
    {
        $this->setRelatedProductsLimit(1);

        $response = $this->post(['entity' => 'relatedproducts'], 'related_product/post_limit.yml', [], false);

        $this->assertResponseValidationError(
            [
                'title'  => 'value constraint',
                'detail' => 'It is not possible to add more related items, because of the limit of relations.'
            ],
            $response
        );
    }

    public function testValidationErrorOnPostIfRequestHasNoRelationshipData()
    {
        $this->setRelatedProductsLimit(10);

        $response = $this->post(
            ['entity' => 'relatedproducts'],
            'related_product/post_no_relationships.yml',
            [],
            false
        );

        $this->assertResponseValidationErrors(
            [
                [
                    'title'  => 'not blank constraint',
                    'detail' => 'This value should not be blank.',
                    'source' => ['pointer' => '/data/relationships/product/data']
                ],
                [
                    'title'  => 'not blank constraint',
                    'detail' => 'This value should not be blank.',
                    'source' => ['pointer' => '/data/relationships/relatedItem/data']
                ]
            ],
            $response
        );
    }

    public function testValidationErrorOnPostIfRequestHasNoProductRelationshipData()
    {
        $response = $this->post(
            ['entity' => 'relatedproducts'],
            'related_product/post_without_product.yml',
            [],
            false
        );

        $this->assertResponseValidationError(
            [
                'title'  => 'not blank constraint',
                'detail' => 'This value should not be blank.',
                'source' => ['pointer' => '/data/relationships/product/data']
            ],
            $response
        );
    }

    public function testValidationErrorOnPostIfRequestHasNoRelatedItemRelationshipData()
    {
        $response = $this->post(
            ['entity' => 'relatedproducts'],
            'related_product/post_without_related_item.yml',
            [],
            false
        );

        $this->assertResponseValidationError(
            [
                'title'  => 'not blank constraint',
                'detail' => 'This value should not be blank.',
                'source' => ['pointer' => '/data/relationships/relatedItem/data']
            ],
            $response
        );
    }

    public function testDelete()
    {
        $this->delete(
            [
                'entity' => 'relatedproducts',
                'id' => '<toString(@related-product-product-5-product-4->id)>',
            ]
        );

        $response = $this->get(
            [
                'entity' => 'relatedproducts',
                'id' => '<toString(@related-product-product-5-product-4->id)>',
            ],
            [],
            [],
            false
        );

        $this->assertResponseStatusCodeEquals($response, Response::HTTP_NOT_FOUND);
    }

    /**
     * oro_related_products_edit - true
     * Product::EDIT             - true
     * Product::VIEW             - false
     */
    public function testDeleteDeniedOnLackOfPermissionToViewProductEntity()
    {
        $this->setEditPermission(CatalogLoadUserData::ROLE_CATALOG_MANAGER, Product::class, true);
        $this->setActionPermissions(CatalogLoadUserData::ROLE_CATALOG_MANAGER, 'oro_related_products_edit', true);

        $response = $this->delete(
            [
                'entity' => 'relatedproducts',
                'id' => '<toString(@related-product-product-3-product-1->id)>',
            ],
            [],
            $this->generateWsseAuthHeader(
                CatalogLoadUserData::USER_NAME_CATALOG_MANAGER,
                CatalogLoadUserData::USER_PASSWORD_CATALOG_MANAGER
            ),
            false
        );

        $this->assertResponseStatusCodeEquals($response, Response::HTTP_NOT_FOUND);

        $response = $this->get(
            [
                'entity' => 'relatedproducts',
                'id' => '<toString(@related-product-product-3-product-1->id)>',
            ]
        );

        $this->assertResponseContains('related_product/get.yml', $response);
    }

    public function testRelatedProductIsAddedOnPost()
    {
        $this->setRelatedProductsEnabled(true);
        $this->setRelatedProductsLimit(100);

        $response = $this->post(['entity' => 'relatedproducts'], 'related_product/post.yml');

        $this->assertResponseContains('related_product/post.yml', $response);

        // test that the entity was created
        $entity = $this->getEntityManager()->find(RelatedProduct::class, $this->getResourceId($response));
        self::assertNotNull($entity);
    }

    /**
     * oro_related_products_edit - false
     * Product::VIEW,EDIT        - true
     */
    public function testPostAccessDeniedOnLackOfPermissionToEditRelatedProducts()
    {
        $response = $this->post(
            ['entity' => 'relatedproducts'],
            'related_product/post.yml',
            $this->generateWsseAuthHeader(
                LoadUserData::USER_NAME,
                LoadUserData::USER_PASSWORD
            ),
            false
        );

        $this->assertResponseStatusCodeEquals($response, Response::HTTP_FORBIDDEN);
    }

    /**
     * oro_related_products_edit - true
     * Product::VIEW             - true
     * Product::EDIT             - false
     */
    public function testPostAccessDeniedOnLackOfPermissionToEditProductEntity()
    {
        $this->setActionPermissions(LoadRolesData::ROLE_USER, 'oro_related_products_edit', true);
        $response = $this->post(
            ['entity' => 'relatedproducts'],
            'related_product/post.yml',
            $this->generateWsseAuthHeader(
                LoadUserData::USER_NAME_2,
                LoadUserData::USER_PASSWORD_2
            ),
            false
        );

        $this->assertResponseStatusCodeEquals($response, Response::HTTP_FORBIDDEN);
    }

    /**
     * @param bool $enabled
     */
    private function setRelatedProductsEnabled($enabled)
    {
        $configManager = $this->getContainer()->get('oro_config.global');
        $name = sprintf('%s.%s', Configuration::ROOT_NODE, Configuration::RELATED_PRODUCTS_ENABLED);
        $configManager->set($name, $enabled);
        $configManager->flush();
    }

    /**
     * @param int $limit
     */
    private function setRelatedProductsLimit($limit)
    {
        $configManager = $this->getContainer()->get('oro_config.manager');
        $name = sprintf('%s.%s', Configuration::ROOT_NODE, Configuration::MAX_NUMBER_OF_RELATED_PRODUCTS);
        $configManager->set($name, $limit, 0);
        $configManager->set($name, $limit, 1);
        $configManager->flush();
    }

    /**
     * @param string $role
     * @param string $actionId
     * @param bool   $value
     */
    private function setActionPermissions($role, $actionId, $value)
    {
        $aclManager = $this->getContainer()->get('oro_security.acl.manager');

        $sid = $aclManager->getSid($role);
        $oid = $aclManager->getOid('Action:' . $actionId);
        $builder = $aclManager->getMaskBuilder($oid);
        $mask = $value ? $builder->reset()->add('EXECUTE')->get() : $builder->reset()->get();
        $aclManager->setPermission($sid, $oid, $mask);

        $aclManager->flush();
    }

    /**
     * @param string $role
     * @param string $entity
     * @param bool   $value
     */
    private function setViewPermission($role, $entity, $value)
    {
        $aclManager = $this->getContainer()->get('oro_security.acl.manager');

        $sid = $aclManager->getSid($role);
        $oid = $aclManager->getOid('entity:' . $entity);
        $builder = $aclManager->getMaskBuilder($oid);
        $mask = $value ? $builder->reset()->add('VIEW_GLOBAL')->get() : $builder->reset()->get();
        $aclManager->setPermission($sid, $oid, $mask, true);

        $aclManager->flush();
    }

    /**
     * @param string $role
     * @param string $entity
     * @param bool   $value
     */
    private function setEditPermission($role, $entity, $value)
    {
        $aclManager = $this->getContainer()->get('oro_security.acl.manager');

        $sid = $aclManager->getSid($role);
        $oid = $aclManager->getOid('entity:' . $entity);
        $builder = $aclManager->getMaskBuilder($oid);
        $mask = $value ? $builder->reset()->add('EDIT_GLOBAL')->get() : $builder->reset()->get();
        $aclManager->setPermission($sid, $oid, $mask, true);

        $aclManager->flush();
    }
}
