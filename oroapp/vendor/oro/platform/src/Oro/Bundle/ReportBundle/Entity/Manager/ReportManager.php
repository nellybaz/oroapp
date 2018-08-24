<?php

namespace Oro\Bundle\ReportBundle\Entity\Manager;

use Doctrine\ORM\EntityManager;

class ReportManager
{
    /**
     * @var EntityManager
     */
    protected $em;

    /**
     * @param EntityManager $em
     */
    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    /**
     * Get report types
     *
     * @return array
     *  key => report name
     *  value => report label
     */
    public function getReportTypeChoices()
    {
        $result = [];
        $types = $this->em->getRepository('OroReportBundle:ReportType')->findAll();
        foreach ($types as $type) {
            $result[$type->getName()] = $type->getLabel();
        }

        return $result;
    }
}
