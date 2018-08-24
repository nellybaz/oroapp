<?php

namespace Oro\Bundle\ReportBundle\Migrations\Data\ORM;

use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ORM\EntityManager;

class LoadCalendarDates extends AbstractFixture implements ContainerAwareInterface
{
    /** @var ContainerInterface */
    protected $container;

    /**
     * {@inheritdoc}
     */
    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    /**
     * @param EntityManager $manager
     * {@inheritdoc}
     */
    public function load(ObjectManager $manager)
    {
        $calendarDateManager = $this->container->get('oro_report.calendar_date_manager');
        $calendarDateManager->handleCalendarDates();
    }
}
