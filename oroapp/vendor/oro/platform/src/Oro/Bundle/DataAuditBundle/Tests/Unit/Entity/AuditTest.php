<?php

namespace Oro\Bundle\DataAuditBundle\Tests\Unit\Entity;

use DateTime;

use Oro\Bundle\DataAuditBundle\Entity\Audit;
use Oro\Bundle\DataAuditBundle\Entity\AuditField;
use Oro\Bundle\UserBundle\Entity\User;

class AuditTest extends \PHPUnit_Framework_TestCase
{
    public function testUser()
    {
        $user  = new User();
        $audit = new Audit();

        $this->assertEmpty($audit->getUser());

        $audit->setUser($user);

        $this->assertNotEmpty($audit->getUser());
    }

    public function testObjectName()
    {
        $audit = new Audit();
        $name  = 'LoggedObject';

        $this->assertEmpty($audit->getObjectName());

        $audit->setObjectName($name);

        $this->assertEquals($name, $audit->getObjectName());
    }

    public function testFieldsShouldBeEmptyWhenNewInstanceIsCreated()
    {
        $audit = new Audit();
        $this->assertEmpty($audit->getFields());
    }

    public function testCreateFieldShouldAddNewFieldToAudit()
    {
        $audit = new Audit();
        $audit->addField(new AuditField('field', 'integer', 1, 0));

        $this->assertCount(1, $audit->getFields());
        $field = $audit->getFields()->first();
        $this->assertEquals('integer', $field->getDataType());
        $this->assertEquals(1, $field->getNewValue());
        $this->assertEquals(0, $field->getOldValue());
    }

    public function testGetDataShouldRetrieveOldFormadUsingFields()
    {
        $oldDate = new DateTime();
        $newDate = new DateTime();

        $audit = new Audit();
        $audit->addField(new AuditField('field', 'integer', 1, 0));
        $audit->addField(new AuditField('field2', 'string', 'new_', '_old'));
        $audit->addField(new AuditField('field3', 'date', $newDate, $oldDate));
        $audit->addField(new AuditField('field4', 'datetime', $newDate, $oldDate));
        $auditFieldWithTranslationDomain = new AuditField('field5', 'string', 'new_translatable', 'old_translatable');
        $auditFieldWithTranslationDomain->setTranslationDomain('message');
        $audit->addField($auditFieldWithTranslationDomain);

        $this->assertEquals(
            [
                'field' => [
                    'new' => 1,
                    'old' => 0,
                ],
                'field2' => [
                    'new' => 'new_',
                    'old' => '_old',
                ],
                'field3' => [
                    'new' => [
                        'value' => $newDate,
                        'type'  => 'date',
                    ],
                    'old' => [
                        'value' => $oldDate,
                        'type'  => 'date',
                    ],
                ],
                'field4' => [
                    'new' => [
                        'value' => $newDate,
                        'type'  => 'datetime',
                    ],
                    'old' => [
                        'value' => $oldDate,
                        'type'  => 'datetime',
                    ],
                ],
                'field5' => [
                    'new' => 'new_translatable',
                    'old' => 'old_translatable',
                    'translationDomain' => 'message',
                ],
            ],
            $audit->getData()
        );
    }

    public function testShouldSetNowAsLoggedAtIfNotPassed()
    {
        $audit = new Audit();
        $audit->setLoggedAt();

        $this->assertGreaterThan(new \DateTime('now - 10 seconds'), $audit->getLoggedAt());
        $this->assertLessThan(new \DateTime('now + 10 seconds'), $audit->getLoggedAt());
    }

    public function testShouldSetPassedLoggedAtDate()
    {
        $loggedAt = new \DateTime('2012-11-10 01:02:03+0000');

        $audit = new Audit();
        $audit->setLoggedAt($loggedAt);

        $this->assertSame($loggedAt, $audit->getLoggedAt());
    }
}
