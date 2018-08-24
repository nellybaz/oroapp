<?php

namespace Oro\Bundle\TestFrameworkBundle\Tests\Behat\Context;

use Behat\Gherkin\Node\TableNode;
use Oro\Bundle\TestFrameworkBundle\Behat\Context\OroFeatureContext;
use Oro\Bundle\TestFrameworkBundle\Behat\Fixtures\FixtureLoader;
use Oro\Bundle\TestFrameworkBundle\Behat\Fixtures\FixtureLoaderAwareInterface;
use Oro\Bundle\TestFrameworkBundle\Behat\Fixtures\FixtureLoaderDictionary;

class FixturesContext extends OroFeatureContext implements FixtureLoaderAwareInterface
{
    use FixtureLoaderDictionary;

    /**
     * Load entity with some data
     * Example:
     *   Given the following activity list:
     *     | subject      |
     *     | hello world! |
     *     | <sentence()> |
     *
     * @Given /^(?:the|there are|there is) following ([\w ]+):?$/
     */
    public function theFollowing($name, TableNode $table)
    {
        $this->fixtureLoader->loadTable($name, $table);
    }

    //@codingStandardsIgnoreStart
    /**
     * Load random entities in database
     * Example: I have 6 contacts
     * Example: And there are 30 users
     * Example: I have 1 task
     * Example: And there are 5 calls
     * Example: I have 3 accounts
     *
     * @Given /^there (?:is|are) (?P<numberOfEntities>(?:\d+)) (?P<name>(?:(?!from|records in activity list|records in grid)(\D*)))$/
     * @Given /^(?:|I )have (?P<numberOfEntities>(?:\d+)) (?P<name>(?:(?!from)(\D*)))$/
     */
    //@codingStandardsIgnoreEnd
    public function thereIs($numberOfEntities, $name)
    {
        $this->fixtureLoader->loadRandomEntities($name, $numberOfEntities);
    }

    //@codingStandardsIgnoreStart
    /**
     * Load extra user(s) with their|its own entities
     * It can be used for load random entities with specific owner
     * Example: And there are two users with their own 3 Tasks
     * Example: And there is user with its own Account
     *
     * @Given /^there (?:are|is) (?P<userCount>(?:|one|two|\d+))(?:|\s)user(?: |s )with (?:their|its) own(?:|\s+)(?P<entitiesCount>(?:|\d+)) (?P<entity>(\D*))$/
     */
    //@codingStandardsIgnoreEnd
    public function iHaveUsersWithTheirEntities($userCount, $entity, $entitiesCount)
    {
        $userCount = $this->getCount($userCount);
        $entitiesCount = $this->getCount($entitiesCount);
        $users = $this->fixtureLoader->loadRandomEntities('user', $userCount);
        $entities = [];

        foreach ($users as $referenceId => $user) {
            for ($i = 0; $i < $entitiesCount; $i++) {
                $entities[] = $this->fixtureLoader->getObjectFromArray($entity, ['owner' => '@'.$referenceId]);
            }
        }

        $this->fixtureLoader->persist($entities);
    }

    /**
     * @param int|string $count
     * @return int
     */
    protected function getCount($count)
    {
        switch (trim($count)) {
            case '':
                return 1;
            case 'one':
                return 1;
            case 'two':
                return 2;
            default:
                return (int) $count;
        }
    }
}
