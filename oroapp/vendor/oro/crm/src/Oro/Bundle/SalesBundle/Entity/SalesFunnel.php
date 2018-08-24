<?php

namespace Oro\Bundle\SalesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Oro\Bundle\EntityConfigBundle\Metadata\Annotation\Config;
use Oro\Bundle\EntityConfigBundle\Metadata\Annotation\ConfigField;
use Oro\Bundle\OrganizationBundle\Entity\Organization;
use Oro\Bundle\UserBundle\Entity\User;
use Oro\Bundle\LocaleBundle\Model\FirstNameInterface;
use Oro\Bundle\EmailBundle\Model\EmailHolderInterface;
use Oro\Bundle\SalesBundle\Model\ExtendSalesFunnel;

/**
 * @ORM\Table(
 *      name="orocrm_sales_funnel",
 *      indexes={@ORM\Index(name="sales_start_idx",columns={"startDate"})}
 *
 * )
 * @ORM\Entity(repositoryClass="Oro\Bundle\SalesBundle\Entity\Repository\SalesFunnelRepository")
 * @ORM\HasLifecycleCallbacks()
 * @Config(
 *      routeName="oro_sales_salesfunnel_index",
 *      routeView="oro_sales_salesfunnel_view",
 *      defaultValues={
 *          "entity"={
 *              "icon"="fa-filter"
 *          },
 *          "ownership"={
 *              "owner_type"="USER",
 *              "owner_field_name"="owner",
 *              "owner_column_name"="user_owner_id",
 *              "organization_field_name"="organization",
 *              "organization_column_name"="organization_id"
 *          },
 *          "security"={
 *              "type"="ACL",
 *              "group_name"="",
 *              "category"="sales_data"
 *          },
 *          "grid"={
 *              "default"="sales-funnel-grid"
 *           },
 *          "tag"={
 *              "enabled"=true
 *          }
 *      }
 * )
 * @deprecated since 2.0 will be removed after 2.2
 */
class SalesFunnel extends ExtendSalesFunnel implements
    FirstNameInterface,
    EmailHolderInterface
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(type="date")
     */
    protected $startDate;

    /**
     * @var User
     *
     * @ORM\ManyToOne(targetEntity="Oro\Bundle\UserBundle\Entity\User")
     * @ORM\JoinColumn(name="user_owner_id", referencedColumnName="id", onDelete="SET NULL")
     */
    protected $owner;

    /**
     * @var Lead
     *
     * @ORM\ManyToOne(targetEntity="Oro\Bundle\SalesBundle\Entity\Lead", cascade={"persist"})
     * @ORM\JoinColumn(name="lead_id", referencedColumnName="id", onDelete="SET NULL")
     */
    protected $lead;

    /**
     * @var Opportunity
     *
     * @ORM\ManyToOne(targetEntity="Oro\Bundle\SalesBundle\Entity\Opportunity", cascade={"persist"})
     * @ORM\JoinColumn(name="opportunity_id", referencedColumnName="id", onDelete="SET NULL")
     */
    protected $opportunity;

    /**
     * @var \DateTime
     *
     * @ORM\Column(type="datetime")
     * @ConfigField(
     *      defaultValues={
     *          "entity"={
     *              "label"="oro.ui.created_at"
     *          }
     *      }
     * )
     */
    protected $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(type="datetime", nullable=true)
     * @ConfigField(
     *      defaultValues={
     *          "entity"={
     *              "label"="oro.ui.updated_at"
     *          }
     *      }
     * )
     */
    protected $updatedAt;

    /**
     * @var Organization
     *
     * @ORM\ManyToOne(targetEntity="Oro\Bundle\OrganizationBundle\Entity\Organization")
     * @ORM\JoinColumn(name="organization_id", referencedColumnName="id", onDelete="SET NULL")
     */
    protected $organization;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param  \DateTime   $createdAt
     * @return SalesFunnel
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param  \Oro\Bundle\SalesBundle\Entity\Lead $lead
     * @return SalesFunnel
     */
    public function setLead($lead)
    {
        $this->lead = $lead;

        return $this;
    }

    /**
     * @return \Oro\Bundle\SalesBundle\Entity\Lead
     */
    public function getLead()
    {
        return $this->lead;
    }

    /**
     * @param  \Oro\Bundle\SalesBundle\Entity\Opportunity $opportunity
     * @return SalesFunnel
     */
    public function setOpportunity($opportunity)
    {
        $this->opportunity = $opportunity;

        return $this;
    }

    /**
     * @return \Oro\Bundle\SalesBundle\Entity\Opportunity
     */
    public function getOpportunity()
    {
        return $this->opportunity;
    }

    /**
     * @param  \Oro\Bundle\UserBundle\Entity\User $owner
     * @return SalesFunnel
     */
    public function setOwner($owner)
    {
        $this->owner = $owner;

        return $this;
    }

    /**
     * @return \Oro\Bundle\UserBundle\Entity\User
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * @param  \DateTime   $startDate
     * @return SalesFunnel
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param  \DateTime   $updatedAt
     * @return SalesFunnel
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Pre persist event listener
     *
     * @ORM\PrePersist
     */
    public function beforeSave()
    {
        $this->createdAt = new \DateTime('now', new \DateTimeZone('UTC'));
    }

    /**
     * Pre update event handler
     * @ORM\PreUpdate
     */
    public function beforeUpdate()
    {
        $this->updatedAt = new \DateTime('now', new \DateTimeZone('UTC'));
    }

    /**
     * Set organization
     *
     * @param Organization $organization
     * @return SalesFunnel
     */
    public function setOrganization(Organization $organization = null)
    {
        $this->organization = $organization;

        return $this;
    }

    /**
     * Get organization
     *
     * @return Organization
     */
    public function getOrganization()
    {
        return $this->organization;
    }

    /**
     * @return null|string
     */
    public function getEmail()
    {
        $email = null;
        if ($this->getLead() && $this->getLead()->getEmail()) {
            $email = $this->getLead()->getEmail();
        }

        if ($this->getOpportunity() && $this->getOpportunity()->getEmail()) {
            $email = $this->getOpportunity()->getEmail();
        }

        return $email;
    }

    /**
     * Get name of Sales Funnel depends on opportunity or lead
     *
     * @return string
     */
    public function getFirstName()
    {
        $opportunity = $this->getOpportunity();
        $lead = $this->getLead();

        if ($opportunity) {
            return $opportunity->getName();
        } elseif ($lead) {
            return $lead->getName();
        }

        return '';
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return (string) $this->getFirstName();
    }
}
