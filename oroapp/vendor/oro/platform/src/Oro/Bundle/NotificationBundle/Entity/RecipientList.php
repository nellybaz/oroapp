<?php

namespace Oro\Bundle\NotificationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

use Symfony\Component\Validator\Context\ExecutionContextInterface;

use Oro\Bundle\UserBundle\Entity\User;
use Oro\Bundle\UserBundle\Entity\Group;

/**
 * EmailNotification
 *
 * @ORM\Table("oro_notification_recip_list")
 * @ORM\Entity(repositoryClass="Oro\Bundle\NotificationBundle\Entity\Repository\RecipientListRepository")
 */
class RecipientList
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
     * @var User[]|ArrayCollection
     * @ORM\ManyToMany(targetEntity="Oro\Bundle\UserBundle\Entity\User")
     * @ORM\JoinTable(name="oro_notification_recip_user",
     *      joinColumns={@ORM\JoinColumn(name="recipient_list_id", referencedColumnName="id", onDelete="CASCADE")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="id", onDelete="CASCADE")}
     * )
     */
    protected $users;

    /**
     * @var Group[]|ArrayCollection
     * @ORM\ManyToMany(targetEntity="Oro\Bundle\UserBundle\Entity\Group")
     * @ORM\JoinTable(name="oro_notification_recip_group",
     *      joinColumns={@ORM\JoinColumn(name="recipient_list_id", referencedColumnName="id", onDelete="CASCADE")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="group_id", referencedColumnName="id", onDelete="CASCADE")}
     * )
     */
    protected $groups;

    /**
     * @var string
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    protected $email;

    /**
     * @var array
     * @ORM\Column(name="additional_email_associations", type="simple_array", nullable=true)
     */
    protected $additionalEmailAssociations = [];

    /**
     * @var array
     * @ORM\Column(name="entity_emails", type="simple_array", nullable=true)
     */
    protected $entityEmails = [];

    public function __construct()
    {
        $this->groups = new ArrayCollection();
        $this->users = new ArrayCollection();
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Setter for email
     *
     * @param string $email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Getter for email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Gets the groups related to list
     *
     * @return ArrayCollection
     */
    public function getGroups()
    {
        return $this->groups;
    }

    /**
     * Add specified group
     *
     * @param Group $group
     * @return $this
     */
    public function addGroup(Group $group)
    {
        if (!$this->getGroups()->contains($group)) {
            $this->getGroups()->add($group);
        }

        return $this;
    }

    /**
     * Remove specified group
     *
     * @param Group $group
     * @return $this
     */
    public function removeGroup(Group $group)
    {
        if ($this->getGroups()->contains($group)) {
            $this->getGroups()->removeElement($group);
        }

        return $this;
    }

    /**
     * Add specified user
     *
     * @param User $user
     * @return $this
     */
    public function addUser(User $user)
    {
        if (!$this->getUsers()->contains($user)) {
            $this->getUsers()->add($user);
        }

        return $this;
    }

    /**
     * Remove specified user
     *
     * @param User $user
     * @return $this
     */
    public function removeUser(User $user)
    {
        if ($this->getUsers()->contains($user)) {
            $this->getUsers()->removeElement($user);
        }

        return $this;
    }

    /**
     * Getters for users
     *
     * @return ArrayCollection
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * @return array
     */
    public function getAdditionalEmailAssociations()
    {
        return $this->additionalEmailAssociations;
    }

    /**
     * @param array $additionalEmailAssociations
     */
    public function setAdditionalEmailAssociations($additionalEmailAssociations)
    {
        $this->additionalEmailAssociations = $additionalEmailAssociations;
    }

    /**
     * To string implementation
     *
     * @return string
     */
    public function __toString()
    {
        // get user emails
        $results = $this->getUsers()->map(
            function (User $user) {
                return sprintf(
                    '%s %s <%s>',
                    $user->getFirstName(),
                    $user->getLastName(),
                    $user->getEmail()
                );
            }
        )->toArray();

        $results = array_merge(
            $results,
            $this->getGroups()->map(
                function (Group $group) use (&$results) {
                    return sprintf(
                        '%s (group)',
                        $group->getName()
                    );
                }
            )->toArray()
        );

        if ($this->getEmail()) {
            $results[] = sprintf('Custom email: <%s>', $this->getEmail());
        }

        return implode(', ', $results);
    }

    /**
     * Custom validation constraint
     * Not valid if no one recipient specified
     *
     * @param ExecutionContextInterface $context
     */
    public function isValid(ExecutionContextInterface $context)
    {
        $notValid =
            $this->getGroups()->isEmpty()
            && $this->getUsers()->isEmpty()
            && $this->getEmail() == null
            && $this->getEntityEmails() === [];

        if ($notValid) {
            $propertyPath = $context->getPropertyPath() . '.recipientList';
            $context->addViolationAt(
                $propertyPath,
                'oro.notification.validators.recipient_list.empty.message'
            );
        }
    }

    /**
     * @return array
     */
    public function getEntityEmails()
    {
        return $this->entityEmails;
    }

    /**
     * @param array $entityEmails
     */
    public function setEntityEmails(array $entityEmails)
    {
        $this->entityEmails = $entityEmails;
    }
}
