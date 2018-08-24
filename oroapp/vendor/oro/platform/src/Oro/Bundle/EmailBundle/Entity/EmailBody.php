<?php

namespace Oro\Bundle\EmailBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation as JMS;

/**
 * Email Body
 *
 * @ORM\Table(name="oro_email_body")
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */
class EmailBody
{
    const CLASS_NAME = 'Oro\Bundle\EmailBundle\Entity\EmailBody';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @JMS\Type("integer")
     */
    protected $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime")
     * @JMS\Type("dateTime")
     */
    protected $created;

    /**
     * @var string
     *
     * @ORM\Column(name="body", type="text")
     * @JMS\Type("string")
     */
    protected $bodyContent;

    /**
     * @var bool
     *
     * @ORM\Column(name="body_is_text", type="boolean")
     * @JMS\Type("boolean")
     */
    protected $bodyIsText;

    /**
     * @var string
     *
     * @ORM\Column(name="text_body", type="text", nullable=true)
     */
    protected $textBody;

    /**
     * @var bool
     *
     * @ORM\Column(name="has_attachments", type="boolean")
     * @JMS\Type("boolean")
     */
    protected $hasAttachments;

    /**
     * @var bool
     *
     * @ORM\Column(name="persistent", type="boolean")
     * @JMS\Type("boolean")
     */
    protected $persistent;

    /**
     * @var ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="EmailAttachment", mappedBy="emailBody",
     *      cascade={"persist", "remove"}, orphanRemoval=true)
     * @JMS\Exclude
     */
    protected $attachments;

    /**
     * @var Email
     *
     * @ORM\OneToOne(targetEntity="Email", mappedBy="emailBody")
     * @JMS\Exclude
     */
    protected $email;

    public function __construct()
    {
        $this->bodyIsText = false;
        $this->hasAttachments = false;
        $this->persistent = false;
        $this->attachments = new ArrayCollection();
    }

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
     * Get entity created date/time
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Get body content.
     *
     * @return string
     */
    public function getBodyContent()
    {
        return $this->bodyContent;
    }

    /**
     * Set body content.
     *
     * @param string $bodyContent
     * @return $this
     */
    public function setBodyContent($bodyContent)
    {
        $this->bodyContent = ($bodyContent === null ? '' : $bodyContent);

        return $this;
    }

    /**
     * Indicate whether email body is a text or html.
     *
     * @return bool true if body is text/plain; otherwise, the body content is text/html
     */
    public function getBodyIsText()
    {
        return $this->bodyIsText;
    }

    /**
     * Set body content type.
     *
     * @param bool $bodyIsText true for text/plain, false for text/html
     * @return $this
     */
    public function setBodyIsText($bodyIsText)
    {
        $this->bodyIsText = $bodyIsText;

        return $this;
    }

    /**
     * Indicate whether email has attachments or not.
     *
     * @return bool true if body is text/plain; otherwise, the body content is text/html
     */
    public function getHasAttachments()
    {
        return $this->hasAttachments;
    }

    /**
     * Set flag indicates whether there are attachments or not.
     *
     * @param bool $hasAttachments
     * @return $this
     */
    public function setHasAttachments($hasAttachments)
    {
        $this->hasAttachments = $hasAttachments;

        return $this;
    }

    /**
     * Indicate whether email is persistent or not.
     *
     * @return bool true if this email newer removed from the cache; otherwise, false
     */
    public function getPersistent()
    {
        return $this->persistent;
    }

    /**
     * Set flag indicates whether email can be removed from the cache or not.
     *
     * @param bool $persistent true if this email newer removed from the cache; otherwise, false
     * @return $this
     */
    public function setPersistent($persistent)
    {
        $this->persistent = $persistent;

        return $this;
    }

    /**
     * Get email attachments
     *
     * @return ArrayCollection|EmailAttachment[]
     */
    public function getAttachments()
    {
        return $this->attachments;
    }

    /**
     * Add email attachment
     *
     * @param  EmailAttachment $attachment
     * @return $this
     */
    public function addAttachment(EmailAttachment $attachment)
    {
        $this->setHasAttachments(true);
        if (!$this->attachments->contains($attachment)) {
            $this->attachments->add($attachment);
            $attachment->setEmailBody($this);
        }

        return $this;
    }

    /**
     * @return Email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param Email $email
     * @return $this
     */
    public function setEmail(Email $email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Pre persist event listener
     *
     * @ORM\PrePersist
     */
    public function beforeSave()
    {
        $this->created = new \DateTime('now', new \DateTimeZone('UTC'));
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return (string)$this->getId();
    }

    /**
     * @return string
     */
    public function getTextBody()
    {
        return $this->textBody;
    }

    /**
     * @param string $textBody
     * @return $this
     */
    public function setTextBody($textBody)
    {
        $this->textBody = $textBody;

        return $this;
    }
}
