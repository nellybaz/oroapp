<?php

namespace Oro\Bridge\CustomerAccount\Tests\Functional\Functional\Controller;

use Oro\Bundle\AccountBundle\Tests\Functional\API\RestAccountTest as BaseRestAccountTest;

class RestAccountTest extends BaseRestAccountTest
{
    /**
     * @param array $request
     * @depends testCreate
     */
    public function testList($request)
    {
        $this->client->request(
            'GET',
            $this->getUrl('oro_api_get_accounts')
        );

        $result = $this->getJsonResponseContent($this->client->getResponse(), 200);
        $this->assertEquals(2, count($result));
    }
}
