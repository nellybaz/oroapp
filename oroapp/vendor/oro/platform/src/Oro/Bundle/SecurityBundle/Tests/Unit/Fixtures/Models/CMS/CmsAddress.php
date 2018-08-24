<?php

namespace Oro\Bundle\SecurityBundle\Tests\Unit\Fixtures\Models\CMS;

/**
 * @Entity
 * @Table(name="cms_addresses")
 */
class CmsAddress
{
    /**
     * @Column(type="integer")
     * @Id @GeneratedValue
     */
    public $id;

    /**
     * @Column(length=50)
     */
    public $country;

    /**
     * @Column(length=50)
     */
    public $zip;

    /**
     * @Column(length=50)
     */
    public $city;

    /**
     * Testfield for Schema Updating Tests.
     */
    public $street;

    /**
     * @OneToOne(targetEntity="CmsUser", inversedBy="address")
     * @JoinColumn(name="user_id", referencedColumnName="id")
     */
    public $user;

    /**
     * @OneToOne(targetEntity="CmsOrganization", inversedBy="address")
     * @JoinColumn(name="organization", referencedColumnName="id")
     */
    public $organization;


    public function getId()
    {
        return $this->id;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function getCountry()
    {
        return $this->country;
    }

    public function getZipCode()
    {
        return $this->zip;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function setUser(CmsUser $user)
    {
        if ($this->user !== $user) {
            $this->user = $user;
            $user->setAddress($this);
        }
    }

    /**
     * @param mixed $organization
     */
    public function setOrganization($organization)
    {
        $this->organization = $organization;
    }

    /**
     * @return mixed
     */
    public function getOrganization()
    {
        return $this->organization;
    }
}
