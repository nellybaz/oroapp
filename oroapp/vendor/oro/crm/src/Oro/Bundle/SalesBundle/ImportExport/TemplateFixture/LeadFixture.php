<?php

namespace Oro\Bundle\SalesBundle\ImportExport\TemplateFixture;

use Oro\Bundle\EntityExtendBundle\Tools\ExtendHelper;
use Oro\Bundle\ImportExportBundle\TemplateFixture\AbstractTemplateRepository;
use Oro\Bundle\ImportExportBundle\TemplateFixture\TemplateFixtureInterface;
use Oro\Bundle\AccountBundle\Entity\Account;
use Oro\Bundle\SalesBundle\Entity\Customer;
use Oro\Bundle\SalesBundle\Entity\Lead;
use Oro\Bundle\SalesBundle\Entity\LeadPhone;
use Oro\Bundle\SalesBundle\Entity\LeadEmail;
use Oro\Bundle\SalesBundle\Entity\LeadAddress;

class LeadFixture extends AbstractTemplateRepository implements TemplateFixtureInterface
{
    /**
     * {@inheritdoc}
     */
    public function getEntityClass()
    {
        return 'Oro\Bundle\SalesBundle\Entity\Lead';
    }

    /**
     * {@inheritdoc}
     */
    public function getData()
    {
        return $this->getEntityData('Jerry Coleman');
    }

    /**
     * {@inheritdoc}
     */
    protected function createEntity($key)
    {
        return new Lead();
    }

    /**
     * @param string $key
     * @param Lead   $entity
     */
    public function fillEntityData($key, $entity)
    {
        $userRepo         = $this->templateManager->getEntityRepository('Oro\Bundle\UserBundle\Entity\User');
        $contactRepo      = $this->templateManager->getEntityRepository('Oro\Bundle\ContactBundle\Entity\Contact');
        $organizationRepo = $this->templateManager
            ->getEntityRepository('Oro\Bundle\OrganizationBundle\Entity\Organization');

        switch ($key) {
            case 'Jerry Coleman':
                $entity->setName('Oro Inc. Lead Name');
                $entity->setCompanyName('Oro Inc.');
                $entity->setOwner($userRepo->getEntity('John Doo'));
                $entity->setOrganization($organizationRepo->getEntity('default'));
                $entity->setCreatedAt(new \DateTime());
                $entity->setUpdatedAt(new \DateTime());
                $entity->setContact($contactRepo->getEntity('Jerry Coleman'));
                $entity->addEmail(new LeadEmail('JerryAColeman@armyspy.com'));
                $primaryAddress = $this->createLeadAddress(1);
                $entity->addAddress($primaryAddress);
                $entity->addAddress($this->createLeadAddress(2));
                $entity->addAddress($this->createLeadAddress(3));
                $entity->setPrimaryAddress($primaryAddress);
                $entity->setNamePrefix('Mr.');
                $entity->setFirstName('Jerry');
                $entity->setLastName('Coleman');
                $entity->setNameSuffix('Jr.');
                
                $statusName = 'New';
                $className = ExtendHelper::buildEnumValueClassName(Lead::INTERNAL_STATUS_CODE);
                $id = ExtendHelper::buildEnumValueId($statusName);
                $entity->setStatus(new $className($id, $statusName));
                
                $entity->setJobTitle('Manager');
                $entity->addPhone(new LeadPhone('585-255-1127'));
                $entity->addPhone(new LeadPhone('978-242-1314'));
                $entity->setWebsite('http://oro.com');
                $entity->setNumberOfEmployees(100);
                $entity->setIndustry('Internet');

                $customer = new Customer();
                $customer->setTarget((new Account())->setName('Jerry Coleman'));
                $entity->setCustomerAssociation($customer);

                return;
        }

        parent::fillEntityData($key, $entity);
    }

    /**
     * @param int $number
     *
     * @return LeadAddress
     *
     * @throws \LogicException
     */
    protected function createLeadAddress($number)
    {
        $countryRepo = $this->templateManager
            ->getEntityRepository('Oro\Bundle\AddressBundle\Entity\Country');
        $regionRepo  = $this->templateManager
            ->getEntityRepository('Oro\Bundle\AddressBundle\Entity\Region');

        $entity = new LeadAddress();

        $entity
            ->setFirstName('Jerry')
            ->setLastName('Coleman');

        switch ($number) {
            case 1:
                $entity
                    ->setCity('Rochester')
                    ->setStreet('1215 Caldwell Road')
                    ->setPostalCode('14608')
                    ->setRegion($regionRepo->getEntity('NY'))
                    ->setCountry($countryRepo->getEntity('US'));
                break;
            case 2:
                $entity
                    ->setCity('New York')
                    ->setStreet('4677 Pallet Street')
                    ->setPostalCode('10011')
                    ->setRegion($regionRepo->getEntity('NY'))
                    ->setCountry($countryRepo->getEntity('US'));
                break;
            case 3:
                $entity
                    ->setCity('New York')
                    ->setStreet('52 Jarvisville Road')
                    ->setPostalCode('11590')
                    ->setRegion($regionRepo->getEntity('NY'))
                    ->setCountry($countryRepo->getEntity('US'));
                break;
            default:
                throw new \LogicException(
                    sprintf(
                        'Undefined lead address. Number: %d.',
                        $number
                    )
                );
        }

        return $entity;
    }
}
