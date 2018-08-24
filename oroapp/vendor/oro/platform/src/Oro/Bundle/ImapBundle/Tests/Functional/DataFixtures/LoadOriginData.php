<?php

namespace Oro\Bundle\ImapBundle\Tests\Functional\DataFixtures;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use Symfony\Component\PropertyAccess\PropertyAccess;

use Oro\Bundle\EmailBundle\Entity\EmailFolder;
use Oro\Bundle\ImapBundle\Entity\ImapEmailFolder;
use Oro\Bundle\ImapBundle\Entity\UserEmailOrigin;
use Oro\Bundle\UserBundle\Entity\User;

class LoadOriginData extends AbstractFixture implements DependentFixtureInterface
{
    /**
     * @var array Channels configuration
     */
    protected $data = [
        [
            'mailboxName' => 'Test Mailbox',
            'reference' => 'origin_one',
            'owner' => LoadUserData::SIMPLE_USER_ENABLED
        ],
        [
            'mailboxName' => 'Test Mailbox 2',
            'reference' => 'origin_two',
            'folder' => [
                'name' => 'Folder 1',
                'type' => 'inbox',
                'enabled' => true,
            ],
            'owner' => LoadUserData::SIMPLE_USER_ENABLED
        ],
        [
            'mailboxName' => 'Test Mailbox 3',
            'reference' => 'origin_tree',
            'owner' => LoadUserData::SIMPLE_USER_DISABLED
        ],
    ];

    /**
     * {@inheritDoc}
     */
    public function getDependencies()
    {
        return [
            LoadUserData::class
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function load(ObjectManager $manager)
    {
        $organization = $manager->getRepository('OroOrganizationBundle:Organization')->getFirst();

        foreach ($this->data as $data) {
            $origin = new UserEmailOrigin();
            $origin->setOrganization($organization);
            $this->setEntityPropertyValues($origin, $data, ['reference', 'folder']);

            /** @var User $owner */
            $owner = $this->getReference($data['owner']);
            $origin->setOwner($owner);

            $this->setReference($data['reference'], $origin);
            $manager->persist($origin);

            if (array_key_exists('folder', $data)) {
                $folder = new EmailFolder();
                $folder->setOrigin($origin);
                $folder->setSyncEnabled($data['folder']['enabled']);
                $folder->setFullName($data['folder']['name']);
                $folder->setName($data['folder']['name']);
                $folder->setType($data['folder']['type']);
                $manager->persist($folder);
                $imapFolder = new ImapEmailFolder();
                $imapFolder->setFolder($folder);
                $imapFolder->setUidValidity(1);
                $manager->persist($imapFolder);

                $origin->addFolder($folder);
            }
        }

        $manager->flush();
    }

    /**
     * @param object $entity
     * @param array $data
     * @param array $excludeProperties
     */
    public function setEntityPropertyValues($entity, array $data, array $excludeProperties = [])
    {
        $propertyAccessor = PropertyAccess::createPropertyAccessor();
        foreach ($data as $property => $value) {
            if (in_array($property, $excludeProperties)) {
                continue;
            }
            $propertyAccessor->setValue($entity, $property, $value);
        }
    }
}
