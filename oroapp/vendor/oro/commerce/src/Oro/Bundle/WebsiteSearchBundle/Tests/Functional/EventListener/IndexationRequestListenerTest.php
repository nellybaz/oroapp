<?php

namespace Oro\Bundle\WebsiteSearchBundle\Tests\Functional\EventListener;

use Doctrine\ORM\EntityManager;

use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\Form\FormInterface;

use Oro\Bundle\FormBundle\Event\FormHandler\AfterFormProcessEvent;
use Oro\Bundle\FormBundle\Event\FormHandler\Events;
use Oro\Bundle\TestFrameworkBundle\Test\WebTestCase;
use Oro\Bundle\WebsiteSearchBundle\Event\ReindexationRequestEvent;
use Oro\Bundle\UserBundle\DataFixtures\UserUtilityTrait;
use Oro\Bundle\TestFrameworkBundle\Entity\TestProduct;

class IndexationRequestListenerTest extends WebTestCase
{
    use UserUtilityTrait;

    protected function setUp()
    {
        $this->initClient([], $this->generateBasicAuthHeader());
    }

    public function testTriggersReindexationAfterProductCreation()
    {
        /**
         * @var EventDispatcher $eventDispatcher
         */
        $eventDispatcher = $this->client->getContainer()->get('event_dispatcher');

        /**
         * @var ReindexationRequestEvent $triggeredEvent
         */
        $triggeredEvent = null;

        $eventDispatcher->addListener(ReindexationRequestEvent::EVENT_NAME, function ($event) use (& $triggeredEvent) {
            $triggeredEvent = $event;
        });

        $product = $this->createProduct();

        $this->assertNotNull($triggeredEvent, 'Event was not triggered.');
        $this->assertContains(TestProduct::class, $triggeredEvent->getClassesNames());
        $this->assertContains($product->getId(), $triggeredEvent->getIds());
    }

    public function testTriggersReindexationAfterProductUpdate()
    {
        /**
         * @var EventDispatcher $eventDispatcher
         */
        $eventDispatcher = $this->client->getContainer()->get('event_dispatcher');

        $product = $this->createProduct();

        /**
         * @var ReindexationRequestEvent $triggeredEvent
         */
        $triggeredEvent = null;

        $eventDispatcher->addListener(ReindexationRequestEvent::EVENT_NAME, function ($event) use (& $triggeredEvent) {
            $triggeredEvent = $event;
        });

        /**
         * @var EntityManager $em
         */
        $em = $this->client->getContainer()->get('doctrine.orm.entity_manager');

        $product->setName($product->getName() . '-changed');

        $em->persist($product);
        $em->flush();

        $this->assertNotNull($triggeredEvent, 'Event was not triggered.');
        $this->assertContains(TestProduct::class, $triggeredEvent->getClassesNames());
        $this->assertContains($product->getId(), $triggeredEvent->getIds());
    }

    public function testTriggersReindexationAfterProductUpdateButNoDoublesEntities()
    {
        /**
         * @var EventDispatcher $eventDispatcher
         */
        $eventDispatcher = $this->client->getContainer()->get('event_dispatcher');

        $product = $this->createProduct();

        /**
         * @var ReindexationRequestEvent $triggeredEvent
         */
        $triggeredEvent = null;

        $eventDispatcher->addListener(ReindexationRequestEvent::EVENT_NAME, function ($event) use (& $triggeredEvent) {
            $triggeredEvent = $event;
        });

        /**
         * @var EntityManager $em
         */
        $em = $this->client->getContainer()->get('doctrine.orm.entity_manager');

        $product->setName($product->getName() . '-changed');

        // trigger beforeEntityFlush with same entity to ensure that entity will be indexed only once
        $eventDispatcher->dispatch(Events::BEFORE_FLUSH, new AfterFormProcessEvent(
            $this->getMockBuilder(FormInterface::class)->getMock(),
            $product
        ));
        $em->persist($product);
        $em->flush();

        $this->assertNotNull($triggeredEvent, 'Event was not triggered.');
        $this->assertContains(TestProduct::class, $triggeredEvent->getClassesNames());
        $this->assertContains($product->getId(), $triggeredEvent->getIds());
        $this->assertCount(1, $triggeredEvent->getIds());
    }

    public function testTriggersReindexationAfterProductDelete()
    {
        /**
         * @var EventDispatcher $eventDispatcher
         */
        $eventDispatcher = $this->client->getContainer()->get('event_dispatcher');

        $product = $this->createProduct();

        /**
         * @var ReindexationRequestEvent $triggeredEvent
         */
        $triggeredEvent = null;

        $eventDispatcher->addListener(ReindexationRequestEvent::EVENT_NAME, function ($event) use (& $triggeredEvent) {
            $triggeredEvent = $event;
        });

        /**
         * @var EntityManager $em
         */
        $em = $this->client->getContainer()->get('doctrine.orm.entity_manager');

        $productId = $product->getId(); // retrieve now, cause after removing, it will be NULL

        $em->remove($product);
        $em->flush();

        $this->assertNotNull($triggeredEvent, 'Event was not triggered.');
        $this->assertContains(TestProduct::class, $triggeredEvent->getClassesNames());
        $this->assertContains($productId, $triggeredEvent->getIds());
    }

    /**
     * Helper method for creating a product which will be used for testing
     *
     * @return TestProduct
     */
    private function createProduct()
    {
        /**
         * @var EntityManager $em
         */
        $em = $this->client->getContainer()->get('doctrine.orm.entity_manager');

        $product = new TestProduct();
        $product->setName('test');

        $em->persist($product);
        $em->flush();

        return $product;
    }
}
