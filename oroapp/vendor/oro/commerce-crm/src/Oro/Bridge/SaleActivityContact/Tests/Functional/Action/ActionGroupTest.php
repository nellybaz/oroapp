<?php

namespace Oro\Bridge\SaleActivityContact\Tests\Functional\Action;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\Util\ClassUtils;

use Oro\Bundle\ActionBundle\Tests\Functional\ActionTestCase;
use Oro\Bundle\CustomerBundle\Entity\CustomerUser;
use Oro\Bundle\RFPBundle\Entity\RequestAdditionalNote;
use Oro\Bundle\RFPBundle\Tests\Functional\DataFixtures\LoadRequestData;
use Oro\Bundle\SaleBundle\Tests\Functional\DataFixtures\LoadQuoteData;
use Oro\Bundle\UserBundle\Entity\User;

use Oro\Component\Testing\Unit\EntityTrait;

use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;

/**
 * @dbIsolationPerTest
 */
class ActionGroupTest extends ActionTestCase
{
    use EntityTrait;

    /**
     * {@inheritdoc}
     */
    public function setUp()
    {
        parent::setUp();

        $this->initClient();
        $this->loadFixtures([LoadRequestData::class, LoadQuoteData::class]);
    }

    public function testOroRfpDuplicate()
    {
        $request = $this->getEntityAndSetContactFields(LoadRequestData::REQUEST2);

        $actionData = $this->executeActionGroup('oro_rfp_duplicate', ['request' => $request]);

        $this->assertActivityContactFieldsEmpty($actionData->offsetGet('requestCopy'));
    }

    public function testOroRfpCreateRequestAdditionalNote()
    {
        $request = $this->getReference(LoadRequestData::REQUEST2);
        $this->assertActivityContactFieldsEmpty($request);

        $token = new UsernamePasswordToken($this->getEntity(User::class, ['id' => 1]), 'admin', 'key');
        $this->client->getContainer()->get('security.token_storage')->setToken($token);

        $actionData = $this->executeActionGroup(
            'oro_rfp_create_request_additional_note',
            [
                'request' => $request,
                'note_type' => RequestAdditionalNote::TYPE_SELLER_NOTE,
                'notes' => 'test note'
            ]
        );

        $request = $actionData->offsetGet('request');
        $this->assertNull($request->getAcLastContactDateIn());
        $this->assertInstanceOf(\DateTime::class, $request->getAcLastContactDateOut());
        $this->assertInstanceOf(\DateTime::class, $request->getAcLastContactDate());
        $this->assertEquals(0, $request->getAcContactCountIn());
        $this->assertEquals(1, $request->getAcContactCountOUt());
        $this->assertEquals(1, $request->getAcContactCount());

        $token = new UsernamePasswordToken($this->getEntity(CustomerUser::class, ['id' => 2]), 'user', 'key');
        $this->client->getContainer()->get('security.token_storage')->setToken($token);

        $actionData = $this->executeActionGroup(
            'oro_rfp_create_request_additional_note',
            [
                'request' => $request,
                'note_type' => RequestAdditionalNote::TYPE_CUSTOMER_NOTE,
                'notes' => 'test note'
            ]
        );

        $request = $actionData->offsetGet('request');
        $this->assertInstanceOf(\DateTime::class, $request->getAcLastContactDateIn());
        $this->assertInstanceOf(\DateTime::class, $request->getAcLastContactDateOut());
        $this->assertInstanceOf(\DateTime::class, $request->getAcLastContactDate());
        $this->assertEquals(1, $request->getAcContactCountIn());
        $this->assertEquals(1, $request->getAcContactCountOUt());
        $this->assertEquals(2, $request->getAcContactCount());
    }

    public function testOroSaleQuoteDuplicate()
    {
        $quote = $this->getEntityAndSetContactFields(LoadQuoteData::QUOTE_DRAFT);

        $actionData = $this->executeActionGroup('oro_sale_quote_duplicate', ['quote' => $quote]);

        $this->assertActivityContactFieldsEmpty($actionData->offsetGet('quoteCopy'));
    }

    /**
     * @param object $entity
     */
    protected function assertActivityContactFieldsEmpty($entity)
    {
        $this->assertNull($entity->getAcLastContactDateIn());
        $this->assertNull($entity->getAcLastContactDateOut());
        $this->assertNull($entity->getAcLastContactDate());
        $this->assertEquals(0, $entity->getAcContactCountIn());
        $this->assertEquals(0, $entity->getAcContactCountOUt());
        $this->assertEquals(0, $entity->getAcContactCount());
    }

    /**
     * @param string $reference
     * @return object
     */
    private function getEntityAndSetContactFields($reference)
    {
        $entity = $this->getReference($reference);
        $this->assertNotNull($entity);

        $em = $this->getManagerForEntity($entity);
        $this->assertNotNull($em);

        $entity->setAcLastContactDate(new \DateTime());
        $entity->setAcLastContactDateIn(new \DateTime());
        $entity->setAcLastContactDateOut(new \DateTime());
        $entity->setAcContactCountIn(1);
        $entity->setAcContactCountOut(2);
        $entity->setAcContactCount(3);

        $em->flush($entity);

        return $entity;
    }

    /**
     * @param object $entity
     * @return ObjectManager
     */
    private function getManagerForEntity($entity)
    {
        return $this->getContainer()->get('doctrine')->getManagerForClass(ClassUtils::getClass($entity));
    }
}
