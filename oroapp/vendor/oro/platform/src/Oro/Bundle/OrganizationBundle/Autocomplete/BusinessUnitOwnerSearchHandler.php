<?php

namespace Oro\Bundle\OrganizationBundle\Autocomplete;

use Doctrine\Bundle\DoctrineBundle\Registry;

use Oro\Bundle\FormBundle\Autocomplete\SearchHandler;
use Oro\Bundle\OrganizationBundle\Entity\BusinessUnit;

class BusinessUnitOwnerSearchHandler extends SearchHandler
{
    /** @var  Registry */
    protected $doctrine;

    public function __construct($entityName, array $properties, Registry $doctrine)
    {
        parent::__construct($entityName, $properties);
        $this->doctrine = $doctrine;
    }

    /**
     * {@inheritdoc}
     */
    public function convertItem($item)
    {
        $result = parent::convertItem($item);

        $businessUnit = $this->doctrine->getManager()->getRepository('OroOrganizationBundle:BusinessUnit')
            ->find($result[$this->idFieldName]);

        $result['treePath'] = $this->getPath($businessUnit, []);
        $result['organization_id'] = $businessUnit->getOrganization()->getId();

        return $result;
    }

    /**
     * @param BusinessUnit $businessUnit
     * @param $path
     *
     * @return mixed
     */
    protected function getPath($businessUnit, $path)
    {
        array_unshift($path, ['name'=> $businessUnit->getName()]);

        $owner = $businessUnit->getOwner();
        if ($owner) {
            $path = $this->getPath($owner, $path);
        }

        return $path;
    }
}
