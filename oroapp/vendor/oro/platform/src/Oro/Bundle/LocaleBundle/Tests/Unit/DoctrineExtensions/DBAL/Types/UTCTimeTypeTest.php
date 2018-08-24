<?php

namespace Oro\Bundle\LocaleBundle\Tests\Unit\DoctrineExtensions\DBAL\Types;

use Doctrine\DBAL\Platforms\MySqlPlatform;
use Doctrine\DBAL\Platforms\AbstractPlatform;

use Oro\Bundle\LocaleBundle\DoctrineExtensions\DBAL\Types\UTCTimeType;

class UTCTimeTypeTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var UTCTimeType
     */
    protected $type;

    /**
     * @var AbstractPlatform
     */
    protected $platform;

    protected function setUp()
    {
        // class has private constructor
        $this->type = $this->getMockBuilder('Oro\Bundle\LocaleBundle\DoctrineExtensions\DBAL\Types\UTCTimeType')
            ->setMethods(null)
            ->disableOriginalConstructor()
            ->getMock();

        $this->platform = $this->getMockBuilder('Doctrine\DBAL\Platforms\AbstractPlatform')
            ->disableOriginalConstructor()
            ->setMethods(array('getTimeFormatString'))
            ->getMockForAbstractClass();
        $this->platform->expects($this->any())
            ->method('getTimeFormatString')
            ->will($this->returnValue('H:i:s'));
    }

    protected function tearDown()
    {
        unset($this->type);
        unset($this->platform);
    }

    /**
     * @param \DateTime $source
     * @param string $expected
     * @dataProvider convertToDatabaseValueDataProvider
     */
    public function testConvertToDatabaseValue($source, $expected)
    {
        $this->assertEquals($expected, $this->type->convertToDatabaseValue($source, $this->platform));
    }

    protected function timezoneExhibitsDST($tzId)
    {
        $tz = new \DateTimeZone($tzId);
        $date = new \DateTime("now", $tz);
        $trans = $tz->getTransitions();
        foreach ($trans as $k => $t) {
            if ($t["ts"] > $date->format('U')) {
                return $trans[$k-1]['isdst'];
            }
        }
        return false;
    }

    /**
     * @return array
     */
    public function convertToDatabaseValueDataProvider()
    {
        return array(
            'null' => array(
                'source'   => null,
                'expected' => null,
            ),
            'UTC' => array(
                'source' => new \DateTime('08:00:00', new \DateTimeZone('UTC')),
                'expected' => '08:00:00',
            ),
            'positive shift' => array(
                'source' => new \DateTime('08:00:00', new \DateTimeZone('Europe/Athens')),
                'expected' => ($this->timezoneExhibitsDST('Europe/Athens')) ? '05:00:00': '06:00:00',
            ),
            'negative shift' => array(
                'source' => new \DateTime('08:00:00', new \DateTimeZone('America/Los_Angeles')),
                'expected' => ($this->timezoneExhibitsDST('America/Los_Angeles')) ? '15:00:00': '16:00:00',
            ),
        );
    }

    public function testConvertToPHPValue()
    {
        $source = '08:00:00';
        $expected = \DateTime::createFromFormat('H:i:s|', '08:00:00', new \DateTimeZone('UTC'));

        $this->assertEquals($expected, $this->type->convertToPHPValue($source, $this->platform));
    }

    /**
     * @expectedException \Doctrine\DBAL\Types\ConversionException
     */
    public function testConvertToPHPValueException()
    {
        $this->type->convertToPHPValue('qwerty', $this->platform);
    }
}
