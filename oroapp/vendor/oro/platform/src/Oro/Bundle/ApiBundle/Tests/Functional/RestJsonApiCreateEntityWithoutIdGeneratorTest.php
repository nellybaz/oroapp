<?php

namespace Oro\Bundle\ApiBundle\Tests\Functional;

use Symfony\Component\HttpFoundation\Response;

use Oro\Bundle\ApiBundle\Tests\Functional\Environment\Entity\TestWithoutIdGenerator;

/**
 * @dbIsolationPerTest
 */
class RestJsonApiCreateEntityWithoutIdGeneratorTest extends RestJsonApiTestCase
{
    public function testCreateWithId()
    {
        $entityType = $this->getEntityType(TestWithoutIdGenerator::class);
        $entityId = 'entity1';
        $entityName = 'test name';

        $data = [
            'data' => [
                'type'       => $entityType,
                'id'         => $entityId,
                'attributes' => [
                    'name' => $entityName
                ]
            ]
        ];

        $response = $this->post(['entity' => $entityType], $data);
        $this->assertResponseContains($data, $response);

        // test that the entity was created in the database
        $this->getEntityManager()->clear();
        $createdEntity = $this->getEntityManager()->find(TestWithoutIdGenerator::class, $entityId);
        self::assertNotNull($createdEntity);
        self::assertEquals($entityId, $createdEntity->getId());
        self::assertEquals($entityName, $createdEntity->getName());
    }

    public function testCreateWithoutId()
    {
        $entityType = $this->getEntityType(TestWithoutIdGenerator::class);

        $data = [
            'data' => [
                'type'       => $entityType,
                'attributes' => [
                    'name' => 'test name'
                ]
            ]
        ];

        $response = $this->post(['entity' => $entityType], $data, [], false);
        self::assertResponseStatusCodeEquals($response, Response::HTTP_BAD_REQUEST);
        self::assertResponseContentTypeEquals($response, self::JSON_API_CONTENT_TYPE);

        $result = self::jsonToArray($response->getContent());
        self::assertEquals(
            [
                'errors' => [
                    [
                        'status' => '400',
                        'title'  => 'entity identifier constraint',
                        'detail' => 'The identifier is mandatory',
                        'source' => ['pointer' => '/data/id']
                    ]
                ]
            ],
            $result
        );
    }

    public function testCreateWhenEntityWithSpecifiedIdAlreadyExists()
    {
        $entityType = $this->getEntityType(TestWithoutIdGenerator::class);
        $entityId = 'entity1';

        $existingEntity = new TestWithoutIdGenerator();
        $existingEntity->setId($entityId);
        $existingEntity->setName('existing entity');
        $this->getEntityManager()->persist($existingEntity);
        $this->getEntityManager()->flush($existingEntity);
        $this->getEntityManager()->clear();

        $data = [
            'data' => [
                'type'       => $entityType,
                'id'         => $entityId,
                'attributes' => [
                    'name' => 'new entity'
                ]
            ]
        ];

        $response = $this->post(['entity' => $entityType], $data, [], false);
        self::assertResponseStatusCodeEquals($response, Response::HTTP_CONFLICT);
        self::assertResponseContentTypeEquals($response, self::JSON_API_CONTENT_TYPE);

        $result = self::jsonToArray($response->getContent());
        self::assertEquals(
            [
                'errors' => [
                    [
                        'status' => '409',
                        'title'  => 'conflict constraint',
                        'detail' => 'The entity already exists'
                    ]
                ]
            ],
            $result
        );
    }
}
