<?php

namespace Oro\Bundle\RedirectBundle\Tests\Functional\Manager;

use Doctrine\Common\Persistence\ManagerRegistry;

use Oro\Bundle\TestFrameworkBundle\Test\WebTestCase;
use Oro\Bundle\RedirectBundle\Entity\Slug;
use Oro\Bundle\RedirectBundle\Manager\SlugManager;

class SlugManagerTest extends WebTestCase
{
    /**
     * @var ManagerRegistry
     */
    protected $registry;

    /**
     * @var SlugManager
     */
    protected $slugManager;

    protected function setUp()
    {
        $this->initClient();
        $this->client->useHashNavigation(true);
        $this->registry    = $this->getContainer()->get('doctrine');
        $this->slugManager = $this->getContainer()->get('oro_redirect.slug.manager');
    }

    public function testMakeUrlUnique()
    {
        $manager = $this->registry->getManagerForClass('OroRedirectBundle:Slug');

        $slug = new Slug();
        $slug->setUrl('domain.com/hvac-equipment/detection-kits');
        $slug->setRouteName('oro_cms_page_view');
        $slug->setRouteParameters(['id' => 1]);
        $manager->persist($slug);

        $slug1 = new Slug();
        $slug1->setUrl('domain.com/hvac-equipment/detection-kits1-1');
        $slug1->setRouteName('oro_cms_page_view');
        $slug1->setRouteParameters(['id' => 1]);
        $manager->persist($slug1);

        $slug2 = new Slug();
        $slug2->setUrl('domain.com/hvac-equipment/detection-kits1-2');
        $slug2->setRouteName('oro_cms_page_view');
        $slug2->setRouteParameters(['id' => 1]);
        $manager->persist($slug2);

        $manager->flush();

        $testSlug = new Slug();
        $testSlug->setUrl('domain.com/hvac-equipment/detection-kits');
        $testSlug->setRouteName('oro_cms_page_view');
        $testSlug->setRouteParameters(['id' => 2]);

        $this->slugManager->makeUrlUnique($testSlug);
        $manager->persist($testSlug);
        $manager->flush();

        $this->assertEquals('domain.com/hvac-equipment/detection-kits-1', $testSlug->getUrl());

        $testSlug1 = new Slug();
        $testSlug1->setUrl('domain.com/hvac-equipment/detection-kits');
        $testSlug1->setRouteName('oro_cms_page_view');
        $testSlug1->setRouteParameters(['id' => 21]);

        $this->slugManager->makeUrlUnique($testSlug1);
        $manager->persist($testSlug1);
        $manager->flush();

        $this->assertEquals('domain.com/hvac-equipment/detection-kits-2', $testSlug1->getUrl());

        $testSlug2 = new Slug();
        $testSlug2->setUrl('domain.com/hvac-equipment/detection-kits1-1');
        $testSlug2->setRouteName('oro_cms_page_view');
        $testSlug2->setRouteParameters(['id' => 21]);

        $this->slugManager->makeUrlUnique($testSlug2);
        $manager->persist($testSlug2);
        $manager->flush();

        $this->assertEquals('domain.com/hvac-equipment/detection-kits1-3', $testSlug2->getUrl());
    }
}
