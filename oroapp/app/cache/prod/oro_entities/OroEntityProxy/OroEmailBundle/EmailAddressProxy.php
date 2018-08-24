<?php

namespace OroEntityProxy\OroEmailBundle;

use Oro\Bundle\EmailBundle\Entity\EmailAddress;
use Oro\Bundle\EmailBundle\Entity\EmailOwnerInterface;

class EmailAddressProxy extends EmailAddress
{
    /**
     * @var EmailOwnerInterface
     */
    private $owner1;
    /**
     * @var EmailOwnerInterface
     */
    private $owner2;
    /**
     * @var EmailOwnerInterface
     */
    private $owner3;

    /**
     * {@inheritdoc}
     */
    public function getOwner()
    {
        if ($this->owner1 !== null) {
            return $this->owner1;
        }
        if ($this->owner2 !== null) {
            return $this->owner2;
        }
        if ($this->owner3 !== null) {
            return $this->owner3;
        }

        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function setOwner(EmailOwnerInterface $owner = null)
    {
        if ($owner !== null && is_a($owner, 'Oro\Bundle\UserBundle\Entity\User')) {
            $this->owner1 = $owner;
        } else {
            $this->owner1 = null;
        }
        if ($owner !== null && is_a($owner, 'Oro\Bundle\EmailBundle\Entity\Mailbox')) {
            $this->owner2 = $owner;
        } else {
            $this->owner2 = null;
        }
        if ($owner !== null && is_a($owner, 'Oro\Bundle\ContactBundle\Entity\Contact')) {
            $this->owner3 = $owner;
        } else {
            $this->owner3 = null;
        }
        $this->setHasOwner($owner !== null);

        return $this;
    }

    /**
     * Pre persist event listener
     */
    public function beforeSave()
    {
        $date = new \DateTime('now', new \DateTimeZone('UTC'));
        $this->setCreated($date);
        $this->setUpdated($date);
    }

    /**
     * Pre update event listener
     */
    public function beforeUpdate()
    {
        $this->setUpdated(new \DateTime('now', new \DateTimeZone('UTC')));
    }
}
