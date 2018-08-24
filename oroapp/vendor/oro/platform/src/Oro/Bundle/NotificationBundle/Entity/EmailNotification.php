<?php

namespace Oro\Bundle\NotificationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

use Oro\Bundle\EntityConfigBundle\Metadata\Annotation\Config;
use Oro\Bundle\EmailBundle\Entity\EmailTemplate;
use Oro\Bundle\NotificationBundle\Model\ExtendEmailNotification;

/**
 * EmailNotification
 *
 * @ORM\Table("oro_notification_email_notif")
 * @ORM\Entity(repositoryClass="Oro\Bundle\NotificationBundle\Entity\Repository\EmailNotificationRepository")
 * @Config(
 *      defaultValues={
 *          "security"={
 *              "type"="ACL",
 *              "group_name"="",
 *              "category"="account_management"
 *          },
 *          "note"={
 *              "immutable"=true
 *          },
 *          "comment"={
 *              "immutable"=true
 *          },
 *          "activity"={
 *              "immutable"=true
 *          },
 *          "attachment"={
 *              "immutable"=true
 *          }
 *      }
 * )
 */
class EmailNotification extends ExtendEmailNotification
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
     * @var string
     *
     * @ORM\Column(name="entity_name", type="string", length=255)
     */
    protected $entityName;

    /**
     * @var Event
     * @ORM\ManyToOne(targetEntity="Oro\Bundle\NotificationBundle\Entity\Event",cascade={"persist"})
     */
    protected $event;

    /**
     * @var EmailTemplate
     *
     * @ORM\ManyToOne(targetEntity="Oro\Bundle\EmailBundle\Entity\EmailTemplate")
     * @ORM\JoinColumn(name="template_id", referencedColumnName="id", onDelete="SET NULL")
     */
    protected $template;

    /**
     * @var RecipientList
     *
     * @ORM\OneToOne(
     *     targetEntity="Oro\Bundle\NotificationBundle\Entity\RecipientList",
     *     cascade={"all"},
     *     orphanRemoval=true
     * )
     * @ORM\JoinColumn(name="recipient_list_id", referencedColumnName="id")
     */
    protected $recipientList;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set entityName
     *
     * @param string $entityName
     *
     * @return EmailNotification
     */
    public function setEntityName($entityName)
    {
        $this->entityName = $entityName;

        return $this;
    }

    /**
     * Get entityName
     *
     * @return string
     */
    public function getEntityName()
    {
        return $this->entityName;
    }

    /**
     * @return bool
     */
    public function hasEntityName()
    {
        return !empty($this->entityName);
    }

    /**
     * Set event
     *
     * @param Event $event
     * @return EmailNotification
     */
    public function setEvent(Event $event = null)
    {
        $this->event = $event;

        return $this;
    }

    /**
     * Get event
     *
     * @return Event
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * Set template
     *
     * @param EmailTemplate $template
     *
     * @return EmailNotification
     */
    public function setTemplate(EmailTemplate $template = null)
    {
        $this->template = $template;

        return $this;
    }

    /**
     * Get template
     *
     * @return EmailTemplate
     */
    public function getTemplate()
    {
        return $this->template;
    }

    /**
     * Set recipient
     *
     * @param RecipientList $recipientList
     *
     * @return EmailNotification
     */
    public function setRecipientList(RecipientList $recipientList = null)
    {
        $this->recipientList = $recipientList;

        return $this;
    }

    /**
     * Get recipient
     *
     * @return RecipientList
     */
    public function getRecipientList()
    {
        return $this->recipientList;
    }

    /**
     * Get recipient groups list
     *
     * @return ArrayCollection
     */
    public function getRecipientGroupsList()
    {
        return $this->recipientList ? $this->recipientList->getGroups() : new ArrayCollection();
    }

    /**
     * Get recipient users list
     *
     * @return ArrayCollection
     */
    public function getRecipientUsersList()
    {
        return $this->recipientList ? $this->recipientList->getUsers() : new ArrayCollection();
    }
}
