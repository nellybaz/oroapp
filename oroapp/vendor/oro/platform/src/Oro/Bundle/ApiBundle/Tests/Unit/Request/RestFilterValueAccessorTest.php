<?php

namespace Oro\Bundle\ApiBundle\Tests\Unit\Request;

use Symfony\Component\HttpFoundation\Request;

use Oro\Bundle\ApiBundle\Filter\FilterValue;
use Oro\Bundle\ApiBundle\Request\RestFilterValueAccessor;

class RestFilterValueAccessorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @param Request $request
     *
     * @return RestFilterValueAccessor
     */
    private function getRestFilterValueAccessor(Request $request)
    {
        $filterValueAccessor = new RestFilterValueAccessor($request);
        $filterValueAccessor->setOperatorPattern(
            '(!|<|>|%21|%3C|%3E)?=|<>|%3C%3E|<|>|\*|%3C|%3E|%2A|(!|%21)?(~|\^|\$|%7E|%5E|%24)'
        );
        $filterValueAccessor->setOperatorNameMap([
            'eq'              => '=',
            'neq'             => '!=',
            'gt'              => '>',
            'lt'              => '<',
            'gte'             => '>=',
            'lte'             => '<=',
            'contains'        => '~',
            'not_contains'    => '!~',
            'starts_with'     => '^',
            'not_starts_with' => '!^',
            'ends_with'       => '$',
            'not_ends_with'   => '!$'
        ]);

        return $filterValueAccessor;
    }

    /**
     * @param string $path
     * @param string $value
     * @param string $operator
     * @param string $sourceKey
     *
     * @return FilterValue
     */
    protected function getFilterValue($path, $value, $operator, $sourceKey)
    {
        $result = new FilterValue($path, $value, $operator);
        $result->setSourceKey($sourceKey);

        return $result;
    }

    /**
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function testParseQueryString()
    {
        $queryStringValues = [
            'prm1=val1'                          => ['prm1', '=', 'val1', 'prm1', 'prm1'],
            'PRM1=val1'                          => ['PRM1', '=', 'val1', 'PRM1', 'PRM1'],
            'prm2<>val2'                         => ['prm2', '!=', 'val2', 'prm2', 'prm2'],
            'prm3<val3'                          => ['prm3', '<', 'val3', 'prm3', 'prm3'],
            'prm4<=val4'                         => ['prm4', '<=', 'val4', 'prm4', 'prm4'],
            'prm5>val5'                          => ['prm5', '>', 'val5', 'prm5', 'prm5'],
            'prm6>=val6'                         => ['prm6', '>=', 'val6', 'prm6', 'prm6'],
            'prm7%3C%3Eval7'                     => ['prm7', '!=', 'val7', 'prm7', 'prm7'],
            'PRM7%3C%3Eval7'                     => ['PRM7', '!=', 'val7', 'PRM7', 'PRM7'],
            'prm8%3Cval8'                        => ['prm8', '<', 'val8', 'prm8', 'prm8'],
            'prm9%3C=val9'                       => ['prm9', '<=', 'val9', 'prm9', 'prm9'],
            'prm10%3Eval10'                      => ['prm10', '>', 'val10', 'prm10', 'prm10'],
            'prm11%3E=val11'                     => ['prm11', '>=', 'val11', 'prm11', 'prm11'],
            'prm12<><val12>'                     => ['prm12', '!=', '<val12>', 'prm12', 'prm12'],
            'prm_13=%3Cval13%3E'                 => ['prm_13', '=', '<val13>', 'prm_13', 'prm_13'],
            'prm14!=val14'                       => ['prm14', '!=', 'val14', 'prm14', 'prm14'],
            'prm15%21=val15'                     => ['prm15', '!=', 'val15', 'prm15', 'prm15'],
            'page[number]=123'                   => ['page[number]', '=', '123', 'number', 'page[number]'],
            'page%5Bsize%5D=456'                 => ['page[size]', '=', '456', 'size', 'page[size]'],
            'filter[address.country]=US'         => [
                'filter[address.country]',
                '=',
                'US',
                'address.country',
                'filter[address.country]'
            ],
            'filter[address.defaultRegion]=LA'   => [
                'filter[address.defaultRegion]',
                '=',
                'LA',
                'address.defaultRegion',
                'filter[address.defaultRegion]'
            ],
            'filter%5Baddress.region%5D=NY'      => [
                'filter[address.region]',
                '=',
                'NY',
                'address.region',
                'filter[address.region]'
            ],
            'filter[address][type]=billing'      => [
                'filter[address.type]',
                '=',
                'billing',
                'address.type',
                'filter[address][type]'
            ],
            'filter%5Baddress%5D%5Bcode%5D=Z123' => [
                'filter[address.code]',
                '=',
                'Z123',
                'address.code',
                'filter[address][code]'
            ],
            'empty[prm20][]=123'                 => ['empty[prm20.]', '=', '123', 'prm20.', 'empty[prm20][]'],
            'empty%5Bprm21%5D%5B%5D=123'         => ['empty[prm21.]', '=', '123', 'prm21.', 'empty[prm21][]'],
            'empty[prm22][][]=123'               => ['empty[prm22..]', '=', '123', 'prm22..', 'empty[prm22][][]'],
            'empty%5Bprm23%5D%5B%5D%5B%5D=123'   => ['empty[prm23..]', '=', '123', 'prm23..', 'empty[prm23][][]'],
        ];
        $request = Request::create(
            'http://test.com?' . implode('&', array_keys($queryStringValues))
        );

        $accessor = $this->getRestFilterValueAccessor($request);

        foreach ($queryStringValues as $itemKey => $itemValue) {
            list($key, $operator, $value, $path, $sourceKey) = $itemValue;
            $this->assertTrue($accessor->has($key), sprintf('has - %s', $itemKey));
            $this->assertEquals(
                $this->getFilterValue($path, $value, $operator, $sourceKey),
                $accessor->get($key),
                $itemKey
            );
        }

        $this->assertFalse($accessor->has('unknown'), 'has - unknown');
        $this->assertNull($accessor->get('unknown'), 'get - unknown');

        $this->assertCount(count($queryStringValues), $accessor->getAll(), 'getAll');
        $this->assertEquals(
            [
                'prm1' => $this->getFilterValue('prm1', 'val1', '=', 'prm1'),
            ],
            $accessor->getGroup('prm1')
        );
        $this->assertEquals(
            [
                'page[number]' => $this->getFilterValue('number', '123', '=', 'page[number]'),
                'page[size]'   => $this->getFilterValue('size', '456', '=', 'page[size]'),
            ],
            $accessor->getGroup('page')
        );
        $this->assertEquals(
            [
                'filter[address.country]'       => $this->getFilterValue(
                    'address.country',
                    'US',
                    '=',
                    'filter[address.country]'
                ),
                'filter[address.defaultRegion]' => $this->getFilterValue(
                    'address.defaultRegion',
                    'LA',
                    '=',
                    'filter[address.defaultRegion]'
                ),
                'filter[address.region]'        => $this->getFilterValue(
                    'address.region',
                    'NY',
                    '=',
                    'filter[address.region]'
                ),
                'filter[address.type]'          => $this->getFilterValue(
                    'address.type',
                    'billing',
                    '=',
                    'filter[address][type]'
                ),
                'filter[address.code]'          => $this->getFilterValue(
                    'address.code',
                    'Z123',
                    '=',
                    'filter[address][code]'
                ),
            ],
            $accessor->getGroup('filter')
        );
    }

    public function testParseQueryStringWithAlternativeSyntaxOfFilters()
    {
        $queryStringValues = [
            'prm1[eq]=val1'            => ['prm1', '=', 'val1', 'prm1', 'prm1'],
            'prm2[neq]=val2'           => ['prm2', '!=', 'val2', 'prm2', 'prm2'],
            'prm3[lt]=val3'            => ['prm3', '<', 'val3', 'prm3', 'prm3'],
            'prm4[lte]=val4'           => ['prm4', '<=', 'val4', 'prm4', 'prm4'],
            'prm5[gt]=val5'            => ['prm5', '>', 'val5', 'prm5', 'prm5'],
            'prm6[gte]=val6'           => ['prm6', '>=', 'val6', 'prm6', 'prm6'],
            'filter[field1][eq]=val1'  => ['filter[field1]', '=', 'val1', 'field1', 'filter[field1]'],
            'filter[field2][neq]=val2' => ['filter[field2]', '!=', 'val2', 'field2', 'filter[field2]'],
            'filter[field3][lt]=val3'  => ['filter[field3]', '<', 'val3', 'field3', 'filter[field3]'],
            'filter[field4][lte]=val4' => ['filter[field4]', '<=', 'val4', 'field4', 'filter[field4]'],
            'filter[field5][gt]=val5'  => ['filter[field5]', '>', 'val5', 'field5', 'filter[field5]'],
            'filter[field6][gte]=val6' => ['filter[field6]', '>=', 'val6', 'field6', 'filter[field6]'],
        ];
        $request = Request::create(
            'http://test.com?' . implode('&', array_keys($queryStringValues))
        );

        $accessor = $this->getRestFilterValueAccessor($request);

        foreach ($queryStringValues as $itemKey => $itemValue) {
            list($key, $operator, $value, $path, $sourceKey) = $itemValue;
            $this->assertTrue($accessor->has($key), sprintf('has - %s', $itemKey));
            $this->assertEquals(
                $this->getFilterValue($path, $value, $operator, $sourceKey),
                $accessor->get($key),
                $itemKey
            );
        }

        $this->assertFalse($accessor->has('unknown'), 'has - unknown');
        $this->assertNull($accessor->get('unknown'), 'get - unknown');

        $this->assertCount(count($queryStringValues), $accessor->getAll(), 'getAll');
        $this->assertEquals(
            [
                'prm1' => $this->getFilterValue('prm1', 'val1', '=', 'prm1'),
            ],
            $accessor->getGroup('prm1')
        );
        $this->assertEquals(
            [
                'filter[field1]' => $this->getFilterValue('field1', 'val1', '=', 'filter[field1]'),
                'filter[field2]' => $this->getFilterValue('field2', 'val2', '!=', 'filter[field2]'),
                'filter[field3]' => $this->getFilterValue('field3', 'val3', '<', 'filter[field3]'),
                'filter[field4]' => $this->getFilterValue('field4', 'val4', '<=', 'filter[field4]'),
                'filter[field5]' => $this->getFilterValue('field5', 'val5', '>', 'filter[field5]'),
                'filter[field6]' => $this->getFilterValue('field6', 'val6', '>=', 'filter[field6]'),
            ],
            $accessor->getGroup('filter')
        );
    }

    /**
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function testRequestBody()
    {
        $requestBody = [
            'prm1'   => 'val1',
            'prm2'   => ['=' => 'val2'],
            'prm3'   => ['!=' => 'val3'],
            'prm4'   => ['val4'],
            'prm5'   => ['=' => ['key' => 'val5']],
            'filter' => [
                'address.country'       => 'US',
                'address.region'        => ['<>' => 'NY'],
                'address.defaultRegion' => ['<>' => 'LA'],
                'path1'                 => ['val1'],
                'path2'                 => ['=' => ['key' => 'val2']],
            ]
        ];
        $request = Request::create(
            'http://test.com',
            'DELETE',
            $requestBody
        );

        $accessor = $this->getRestFilterValueAccessor($request);

        $this->assertEquals(
            $this->getFilterValue('prm1', 'val1', '=', 'prm1'),
            $accessor->get('prm1'),
            'prm1'
        );
        $this->assertEquals(
            $this->getFilterValue('prm2', 'val2', '=', 'prm2'),
            $accessor->get('prm2'),
            'prm2'
        );
        $this->assertEquals(
            $this->getFilterValue('prm3', 'val3', '!=', 'prm3'),
            $accessor->get('prm3'),
            'prm3'
        );
        $this->assertEquals(
            $this->getFilterValue('prm4', ['val4'], '=', 'prm4'),
            $accessor->get('prm4'),
            'prm4'
        );
        $this->assertEquals(
            $this->getFilterValue('prm5', ['key' => 'val5'], '=', 'prm5'),
            $accessor->get('prm5'),
            'prm5'
        );
        $this->assertEquals(
            $this->getFilterValue('address.country', 'US', '=', 'filter[address.country]'),
            $accessor->get('filter[address.country]'),
            'filter[address.country]'
        );
        $this->assertEquals(
            $this->getFilterValue('address.region', 'NY', '!=', 'filter[address.region]'),
            $accessor->get('filter[address.region]'),
            'filter[address.region]'
        );
        $this->assertEquals(
            $this->getFilterValue('address.defaultRegion', 'LA', '!=', 'filter[address.defaultRegion]'),
            $accessor->get('filter[address.defaultRegion]'),
            'filter[address.defaultRegion]'
        );
        $this->assertEquals(
            $this->getFilterValue('path1', ['val1'], '=', 'filter[path1]'),
            $accessor->get('filter[path1]'),
            'filter[path1]'
        );
        $this->assertEquals(
            $this->getFilterValue('path2', ['key' => 'val2'], '=', 'filter[path2]'),
            $accessor->get('filter[path2]'),
            'filter[path2]'
        );

        $this->assertCount(10, $accessor->getAll(), 'getAll');
        $this->assertEquals(
            [
                'prm1' => $this->getFilterValue('prm1', 'val1', '=', 'prm1'),
            ],
            $accessor->getGroup('prm1')
        );
        $this->assertEquals(
            [
                'filter[address.country]'       => $this->getFilterValue(
                    'address.country',
                    'US',
                    '=',
                    'filter[address.country]'
                ),
                'filter[address.region]'        => $this->getFilterValue(
                    'address.region',
                    'NY',
                    '!=',
                    'filter[address.region]'
                ),
                'filter[address.defaultRegion]' => $this->getFilterValue(
                    'address.defaultRegion',
                    'LA',
                    '!=',
                    'filter[address.defaultRegion]'
                ),
                'filter[path1]'                 => $this->getFilterValue(
                    'path1',
                    ['val1'],
                    '=',
                    'filter[path1]'
                ),
                'filter[path2]'                 => $this->getFilterValue(
                    'path2',
                    ['key' => 'val2'],
                    '=',
                    'filter[path2]'
                ),
            ],
            $accessor->getGroup('filter')
        );
    }

    /**
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function testRequestBodyWithAlternativeSyntaxOfFilters()
    {
        $requestBody = [
            'prm1'   => ['eq' => 'val1'],
            'prm2'   => ['neq' => 'val2'],
            'prm3'   => ['lt' => 'val3'],
            'prm4'   => ['lte' => 'val4'],
            'prm5'   => ['gt' => 'val5'],
            'prm6'   => ['gte' => 'val6'],
            'filter' => [
                'field1' => ['eq' => 'val1'],
                'field2' => ['neq' => 'val2'],
                'field3' => ['lt' => 'val3'],
                'field4' => ['lte' => 'val4'],
                'field5' => ['gt' => 'val5'],
                'field6' => ['gte' => 'val6'],
            ]
        ];
        $request = Request::create(
            'http://test.com',
            'DELETE',
            $requestBody
        );

        $accessor = $this->getRestFilterValueAccessor($request);

        $this->assertEquals(
            $this->getFilterValue('prm1', 'val1', '=', 'prm1'),
            $accessor->get('prm1'),
            'prm1'
        );
        $this->assertEquals(
            $this->getFilterValue('prm2', 'val2', '!=', 'prm2'),
            $accessor->get('prm2'),
            'prm2'
        );
        $this->assertEquals(
            $this->getFilterValue('prm3', 'val3', '<', 'prm3'),
            $accessor->get('prm3'),
            'prm3'
        );
        $this->assertEquals(
            $this->getFilterValue('prm4', 'val4', '<=', 'prm4'),
            $accessor->get('prm4'),
            'prm4'
        );
        $this->assertEquals(
            $this->getFilterValue('prm5', 'val5', '>', 'prm5'),
            $accessor->get('prm5'),
            'prm5'
        );
        $this->assertEquals(
            $this->getFilterValue('prm6', 'val6', '>=', 'prm6'),
            $accessor->get('prm6'),
            'prm6'
        );

        $this->assertEquals(
            $this->getFilterValue('field1', 'val1', '=', 'filter[field1]'),
            $accessor->get('filter[field1]'),
            'filter[field1]'
        );
        $this->assertEquals(
            $this->getFilterValue('field2', 'val2', '!=', 'filter[field2]'),
            $accessor->get('filter[field2]'),
            'filter[field2]'
        );
        $this->assertEquals(
            $this->getFilterValue('field3', 'val3', '<', 'filter[field3]'),
            $accessor->get('filter[field3]'),
            'filter[field3]'
        );
        $this->assertEquals(
            $this->getFilterValue('field4', 'val4', '<=', 'filter[field4]'),
            $accessor->get('filter[field4]'),
            'filter[field4]'
        );
        $this->assertEquals(
            $this->getFilterValue('field5', 'val5', '>', 'filter[field5]'),
            $accessor->get('filter[field5]'),
            'filter[field5]'
        );
        $this->assertEquals(
            $this->getFilterValue('field6', 'val6', '>=', 'filter[field6]'),
            $accessor->get('filter[field6]'),
            'filter[field6]'
        );

        $this->assertCount(12, $accessor->getAll(), 'getAll');
        $this->assertEquals(
            [
                'prm1' => $this->getFilterValue('prm1', 'val1', '=', 'prm1'),
            ],
            $accessor->getGroup('prm1')
        );
        $this->assertEquals(
            [
                'filter[field1]' => $this->getFilterValue('field1', 'val1', '=', 'filter[field1]'),
                'filter[field2]' => $this->getFilterValue('field2', 'val2', '!=', 'filter[field2]'),
                'filter[field3]' => $this->getFilterValue('field3', 'val3', '<', 'filter[field3]'),
                'filter[field4]' => $this->getFilterValue('field4', 'val4', '<=', 'filter[field4]'),
                'filter[field5]' => $this->getFilterValue('field5', 'val5', '>', 'filter[field5]'),
                'filter[field6]' => $this->getFilterValue('field6', 'val6', '>=', 'filter[field6]'),
            ],
            $accessor->getGroup('filter')
        );
    }

    public function testFilterFromQueryStringShouldOverrideFilterFromRequestBody()
    {
        $request = Request::create(
            'http://test.com?prm1=val1',
            'DELETE',
            ['prm1' => ['!=' => 'val2']]
        );
        $accessor = $this->getRestFilterValueAccessor($request);

        $this->assertCount(1, $accessor->getAll());
        $this->assertEquals($this->getFilterValue('prm1', 'val1', '=', 'prm1'), $accessor->get('prm1'));
    }

    public function testOverrideExistingFilterValue()
    {
        $accessor = $this->getRestFilterValueAccessor(Request::create('http://test.com?prm1=val1'));

        $this->assertEquals($this->getFilterValue('prm1', 'val1', '=', 'prm1'), $accessor->get('prm1'));

        $accessor->set('prm1', new FilterValue('prm1', 'val11', '='));
        $this->assertEquals(new FilterValue('prm1', 'val11', '='), $accessor->get('prm1'));
        $this->assertEquals(
            ['prm1' => new FilterValue('prm1', 'val11', '=')],
            $accessor->getAll(),
            'getAll'
        );
        $this->assertEquals(
            ['prm1' => new FilterValue('prm1', 'val11', '=')],
            $accessor->getGroup('prm1'),
            'getGroup'
        );
    }

    public function testOverrideExistingGroupedFilterValue()
    {
        $accessor = $this->getRestFilterValueAccessor(Request::create('http://test.com?group[path]=val1'));

        $this->assertEquals($this->getFilterValue('path', 'val1', '=', 'group[path]'), $accessor->get('group[path]'));

        $accessor->set('group[path]', new FilterValue('path', 'val11', '='));
        $this->assertEquals(new FilterValue('path', 'val11', '='), $accessor->get('group[path]'));
        $this->assertEquals(
            ['group[path]' => new FilterValue('path', 'val11', '=')],
            $accessor->getAll(),
            'getAll'
        );
        $this->assertEquals(
            ['group[path]' => new FilterValue('path', 'val11', '=')],
            $accessor->getGroup('group'),
            'getGroup'
        );
    }

    public function testAddNewFilterValue()
    {
        $accessor = $this->getRestFilterValueAccessor(Request::create('http://test.com'));

        $accessor->set('prm1', new FilterValue('prm1', 'val1', '='));
        $this->assertEquals(new FilterValue('prm1', 'val1', '='), $accessor->get('prm1'));
        $this->assertEquals(
            ['prm1' => new FilterValue('prm1', 'val1', '=')],
            $accessor->getAll(),
            'getAll'
        );
        $this->assertEquals(
            ['prm1' => new FilterValue('prm1', 'val1', '=')],
            $accessor->getGroup('prm1'),
            'getGroup'
        );
    }

    public function testAddNewGroupedFilterValue()
    {
        $accessor = $this->getRestFilterValueAccessor(Request::create('http://test.com'));

        $accessor->set('group[path]', new FilterValue('path', 'val1', '='));
        $this->assertEquals(new FilterValue('path', 'val1', '='), $accessor->get('group[path]'));
        $this->assertEquals(
            ['group[path]' => new FilterValue('path', 'val1', '=')],
            $accessor->getAll(),
            'getAll'
        );
        $this->assertEquals(
            ['group[path]' => new FilterValue('path', 'val1', '=')],
            $accessor->getGroup('group'),
            'getGroup'
        );
    }

    public function testRemoveExistingFilterValueViaSetMethod()
    {
        $accessor = $this->getRestFilterValueAccessor(Request::create('http://test.com?prm1=val1'));

        $this->assertEquals($this->getFilterValue('prm1', 'val1', '=', 'prm1'), $accessor->get('prm1'));

        // test override existing filter value
        $accessor->set('prm1');
        $this->assertNull($accessor->get('prm1'));
        $this->assertCount(0, $accessor->getAll(), 'getAll');
        $this->assertCount(0, $accessor->getGroup('prm1'), 'getGroup');
    }

    public function testRemoveExistingGroupedFilterValueViaSetMethod()
    {
        $accessor = $this->getRestFilterValueAccessor(Request::create('http://test.com?group[path]=val1'));

        $this->assertEquals($this->getFilterValue('path', 'val1', '=', 'group[path]'), $accessor->get('group[path]'));

        // test override existing filter value
        $accessor->set('group[path]');
        $this->assertNull($accessor->get('group[path]'));
        $this->assertCount(0, $accessor->getAll(), 'getAll');
        $this->assertCount(0, $accessor->getGroup('group'), 'getGroup');
    }

    public function testRemoveExistingFilterValueViaRemoveMethod()
    {
        $accessor = $this->getRestFilterValueAccessor(Request::create('http://test.com?prm1=val1'));

        $this->assertEquals($this->getFilterValue('prm1', 'val1', '=', 'prm1'), $accessor->get('prm1'));

        // test remove existing filter value by key
        $accessor->remove('prm1');
        $this->assertNull($accessor->get('prm1'));
        $this->assertCount(0, $accessor->getAll(), 'getAll');
        $this->assertCount(0, $accessor->getGroup('prm1'), 'getGroup');
    }

    public function testRemoveExistingGroupedFilterValueViaRemoveMethod()
    {
        $accessor = $this->getRestFilterValueAccessor(Request::create('http://test.com?group[path]=val1'));

        $this->assertEquals($this->getFilterValue('path', 'val1', '=', 'group[path]'), $accessor->get('group[path]'));

        // test remove existing filter value by key
        $accessor->remove('group[path]');
        $this->assertNull($accessor->get('group[path]'));
        $this->assertCount(0, $accessor->getAll(), 'getAll');
        $this->assertCount(0, $accessor->getGroup('group'), 'getGroup');
    }
}
