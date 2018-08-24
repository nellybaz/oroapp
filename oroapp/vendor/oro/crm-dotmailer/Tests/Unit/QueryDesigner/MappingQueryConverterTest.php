<?php

namespace Oro\Bundle\DotmailerBundle\Tests\Unit\QueryDesigner;

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Query\Expr\From;
use Doctrine\ORM\Query\Expr\Select;
use Doctrine\ORM\QueryBuilder;

use Oro\Bundle\ContactBundle\Entity\Contact;
use Oro\Bundle\QueryDesignerBundle\Tests\Unit\OrmQueryConverterTest;
use Oro\Bundle\DotmailerBundle\QueryDesigner\MappingQueryConverter;

class MappingQueryConverterTest extends OrmQueryConverterTest
{
    public function testConvert()
    {
        $doctrine = $this->getDoctrine(
            [
                Contact::class => [],
            ],
            [
                Contact::class => ['id'],
            ]
        );

        /** @var EntityManagerInterface|\PHPUnit_Framework_MockObject_MockObject $em */
        $em = $doctrine->getManagerForClass(Contact::class);
        $qb = new QueryBuilder($em);
        $qb->from(Contact::class, 't1');

        $converter = new MappingQueryConverter(
            $this->getFunctionProvider(),
            $this->getVirtualFieldProvider(),
            $doctrine
        );

        $columns = [
            [
                'name' => 'firstName',
            ],
            [
                'name' => 'lastName',
            ],
        ];
        $compositeColumns = [
            [
                'columns' => ['firstName'],
                'alias' => 'FIRSTNAME'
            ],
            [
                'columns' => ['lastName'],
                'alias' => 'LASTTNAME'
            ],
            [
                'columns' => ['firstName', 'lastName'],
                'alias' => 'FULLNAME'
            ]
        ];
        $converter->addMappingColumns($qb, Contact::class, $columns, $compositeColumns);

        //assert from was not changed
        $this->assertEquals([new From(Contact::class, 't1')], $qb->getDQLPart('from'));

        $this->assertEquals([
            new Select(['t1.firstName as FIRSTNAME']),
            new Select('t1.lastName as LASTTNAME'),
            new Select("CONCAT_WS(' ', t1.firstName, t1.lastName) as FULLNAME")
        ], $qb->getDQLPart('select'));
    }
}
