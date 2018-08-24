<?php

namespace Oro\Bundle\CMSBundle\Migrations\Data;

use Doctrine\Common\Cache\FlushableCache;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;

use Symfony\Component\Yaml\Yaml;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

use Oro\Bundle\LocaleBundle\Entity\LocalizedFallbackValue;
use Oro\Bundle\OrganizationBundle\Entity\Organization;
use Oro\Bundle\CMSBundle\Entity\Page;

abstract class AbstractLoadPageData extends AbstractFixture implements ContainerAwareInterface
{
    /**
     * @var ContainerInterface
     */
    protected $container;

    /**
     * @var array
     */
    protected $pages = [];

    /**
     * {@inheritDoc}
     */
    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $organization = $this->getOrganization($manager);

        $slugRedirectGenerator = $this->container->get('oro_redirect.generator.slug_entity');

        $loadedPages = [];
        foreach ((array)$this->getFilePaths() as $filePath) {
            $pages = $this->loadFromFile($filePath, $organization);
            foreach ($pages as $page) {
                $manager->persist($page);
                $loadedPages[] = $page;
            }
        }
        $manager->flush();

        foreach ($loadedPages as $page) {
            $slugRedirectGenerator->generate($page, true);
        }

        $cache = $this->container->get('oro_redirect.url_cache');
        if ($cache instanceof FlushableCache) {
            $cache->flushAll();
        }
        $manager->flush();
    }

    /**
     * @param ObjectManager $manager
     * @return Organization
     */
    protected function getOrganization(ObjectManager $manager)
    {
        return $manager->getRepository('OroOrganizationBundle:Organization')->getFirst();
    }

    /**
     * @param $filePath
     * @param Organization $organization
     * @return Page[]
     */
    protected function loadFromFile($filePath, Organization $organization)
    {
        $rows = Yaml::parse(file_get_contents($filePath));
        $pages = [];
        foreach ($rows as $reference => $row) {
            $page = new Page();
            $page->addTitle((new LocalizedFallbackValue())->setString($row['title']));
            $page->addSlugPrototype((new LocalizedFallbackValue())->setString($row['slug']));
            $page->setContent($row['content']);
            $page->setOrganization($organization);

            $pages[$reference] = $page;
        }

        return $pages;
    }

    /**
     * @return string
     */
    abstract protected function getFilePaths();

    /**
     * @param string $path
     * @return array|string
     */
    protected function getFilePathsFromLocator($path)
    {
        $locator = $this->container->get('file_locator');
        return $locator->locate($path);
    }
}
