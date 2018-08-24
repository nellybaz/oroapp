<?php

namespace Oro\Bundle\SaleBundle\Tests\Functional\Controller\Frontend;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PropertyAccess\PropertyAccess;
use Symfony\Component\Translation\TranslatorInterface;

use Oro\Bundle\TestFrameworkBundle\Test\WebTestCase;
use Oro\Bundle\CurrencyBundle\Entity\Price;
use Oro\Bundle\SaleBundle\Entity\Quote;
use Oro\Bundle\SaleBundle\Tests\Functional\DataFixtures\LoadUserData;
use Oro\Bundle\SaleBundle\Tests\Functional\DataFixtures\LoadQuoteData;

class QuoteControllerTest extends WebTestCase
{
    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        $this->initClient();
        $this->client->useHashNavigation(true);
        $this->loadFixtures([
            'Oro\Bundle\SaleBundle\Tests\Functional\DataFixtures\LoadQuoteAddressData',
        ]);
    }

    /**
     * @param array $inputData
     * @param array $expectedData
     *
     * @dataProvider indexProvider
     */
    public function testIndex(array $inputData, array $expectedData)
    {
        $this->initClient([], $this->generateBasicAuthHeader($inputData['login'], $inputData['password']));

        $crawler = $this->client->request('GET', $this->getUrl('oro_sale_quote_frontend_index'));

        static::assertHtmlResponseStatusCodeEquals($this->client->getResponse(), 200);
        $this->assertContains('frontend-quotes-grid', $crawler->html());

        $response = $this->client->requestFrontendGrid([
            'gridName' => 'frontend-quotes-grid',
            'frontend-quotes-grid[_sort_by][qid]' => 'ASC',
        ]);

        $result = static::getJsonResponseContent($response, 200);

        $data = $result['data'];

        $this->assertEquals(count($expectedData['data']), count($data));

        if (isset($expectedData['columns'])) {
            $testedColumns = array_keys($data[0]);
            $expectedColumns = $expectedData['columns'];

            sort($testedColumns);
            sort($expectedColumns);

            $this->assertEquals($expectedColumns, $testedColumns);
        }

        for ($i = 0; $i < $iMax = count($expectedData['data']); $i++) {
            // not expected Draft Quote
            $this->assertArrayNotHasKey(LoadQuoteData::QUOTE_DRAFT, $data[$i]);
            foreach ($expectedData['data'][$i] as $key => $value) {
                $this->assertArrayHasKey($key, $data[$i]);
                $this->assertEquals($value, $data[$i][$key]);
            }
        }
    }

    /**
     * @return array
     *
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function indexProvider()
    {
        $defaultColumns = [
            'customerStatusName',
            'id',
            'qid',
            'createdAt',
            'validUntil',
            'poNumber',
            'shipUntil',
            'view_link',
        ];

        return [
            'customer1 user1 (only customer user quotes)' => [
                'input' => [
                    'login' => LoadUserData::ACCOUNT1_USER1,
                    'password' => LoadUserData::ACCOUNT1_USER1,
                ],
                'expected' => [
                    'data' => [
                        [
                            'qid' => LoadQuoteData::QUOTE3,
                        ],
                    ],
                    'columns' => $defaultColumns,
                ],
            ],
            'customer1 user2 (all customer qouotes)' => [
                'input' => [
                    'login' => LoadUserData::ACCOUNT1_USER2,
                    'password' => LoadUserData::ACCOUNT1_USER2,
                ],
                'expected' => [
                    'data' => [
                        [
                            'qid' => LoadQuoteData::QUOTE12,
                        ],
                        [
                            'qid' => LoadQuoteData::QUOTE13,
                        ],
                        [
                            'qid' => LoadQuoteData::QUOTE3,
                        ],
                        [
                            'qid' => LoadQuoteData::QUOTE4,
                        ],
                        [
                            'qid' => LoadQuoteData::QUOTE5,
                        ],
                        [
                            'qid' => LoadQuoteData::QUOTE8,
                        ],
                        [
                            'qid' => LoadQuoteData::QUOTE9,
                        ],
                    ],
                    'columns' => $defaultColumns,
                ],
            ],
            'customer1 user3 (all customer quotes and assignedTo)' => [
                'input' => [
                    'login' => LoadUserData::ACCOUNT1_USER3,
                    'password' => LoadUserData::ACCOUNT1_USER3,
                ],
                'expected' => [
                    'data' => [
                        [
                            'qid' => LoadQuoteData::QUOTE12,
                        ],
                        [
                            'qid' => LoadQuoteData::QUOTE13,
                        ],
                        [
                            'qid' => LoadQuoteData::QUOTE3,
                        ],
                        [
                            'qid' => LoadQuoteData::QUOTE4,
                        ],
                        [
                            'qid' => LoadQuoteData::QUOTE5,
                        ],
                        [
                            'qid' => LoadQuoteData::QUOTE8,
                        ],
                        [
                            'qid' => LoadQuoteData::QUOTE9,
                        ],
                    ],
                    'columns' => array_merge(['customerUserName'], $defaultColumns),
                ],
            ],
            'customer2 user1 (only customer user quotes)' => [
                'input' => [
                    'login' => LoadUserData::ACCOUNT2_USER1,
                    'password' => LoadUserData::ACCOUNT2_USER1,
                ],
                'expected' => [
                    'data' => [
                        [
                            'qid' => LoadQuoteData::QUOTE7,
                        ],
                    ],
                    'columns' => $defaultColumns,
                ],
            ],
            'parent customer user1 (all quotes)' => [
                'input' => [
                    'login' => LoadUserData::PARENT_ACCOUNT_USER1,
                    'password' => LoadUserData::PARENT_ACCOUNT_USER1,
                ],
                'expected' => [
                    'data' => [
                        [
                            'qid' => LoadQuoteData::QUOTE10,
                        ],
                        [
                            'qid' => LoadQuoteData::QUOTE11,
                        ],
                        [
                            'qid' => LoadQuoteData::QUOTE12,
                        ],
                        [
                            'qid' => LoadQuoteData::QUOTE13,
                        ],
                        [
                            'qid' => LoadQuoteData::QUOTE3,
                        ],
                        [
                            'qid' => LoadQuoteData::QUOTE4,
                        ],
                        [
                            'qid' => LoadQuoteData::QUOTE5,
                        ],
                        [
                            'qid' => LoadQuoteData::QUOTE6,
                        ],
                        [
                            'qid' => LoadQuoteData::QUOTE7,
                        ],
                        [
                            'qid' => LoadQuoteData::QUOTE8,
                        ],
                        [
                            'qid' => LoadQuoteData::QUOTE9,
                        ],
                    ],
                    'columns' => array_merge(['customerUserName'], $defaultColumns),
                ],
            ]
        ];
    }

    /**
     * @param array $inputData
     * @param array $expectedData
     *
     * @dataProvider viewProvider
     */
    public function testView(array $inputData, array $expectedData)
    {
        $this->initClient([], $this->generateBasicAuthHeader($inputData['login'], $inputData['password']));

        /* @var $quote Quote */
        $quote = $this->getReference($inputData['qid']);

        $crawler = $this->client->request('GET', $this->getUrl(
            'oro_sale_quote_frontend_view',
            ['id' => $quote->getId()]
        ));

        $result = $this->client->getResponse();
        static::assertHtmlResponseStatusCodeEquals($result, 200);

        $controls = $crawler->filter('.customer-info-grid__row, .page-title');

        $this->assertSameSize($expectedData['columns'], $controls);

        /* @var $translator TranslatorInterface */
        $translator = $this->getContainer()->get('translator');

        $accessor = PropertyAccess::createPropertyAccessor();
        foreach ($controls as $key => $control) {
            /* @var $control \DOMElement */
            $column = $expectedData['columns'][$key];

            $label = $translator->trans($column['label']);
            $property = $accessor->getValue($quote, $column['property']) ?: $translator->trans('N/A');
            if ($property instanceof \DateTime) {
                $property = $property->format('M j, Y');
            } elseif ($property instanceof Price) {
                $property = round($property->getValue());
            }

            $property = (string)$property;
            $this->assertContains($label, $control->textContent);
            $this->assertContains($property, $control->textContent);
        }

        $createOrderButton = (bool)$crawler
            ->filterXPath('//a[contains(., \'Accept and Submit to Order\')]')->count();

        $this->assertEquals($expectedData['createOrderButton'], $createOrderButton);
    }

    /**
     * @return array
     *
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function viewProvider()
    {
        return [
            'customer1 user1 (CustomerUser:VIEW_BASIC)' => [
                'input' => [
                    'qid' => LoadQuoteData::QUOTE3,
                    'login' => LoadUserData::ACCOUNT1_USER1,
                    'password' => LoadUserData::ACCOUNT1_USER1,
                ],
                'expected' => [
                    'createOrderButton' => false,
                    'columns' => [
                        [
                            'label' => 'oro.frontend.sale.quote.qid.label',
                            'property' => 'qid',
                        ],
                        [
                            'label' => 'oro.frontend.sale.quote.valid_until.label',
                            'property' => 'valid_until',
                        ],
                        [
                            'label' => 'oro.sale.quote.po_number.label',
                            'property' => 'po_number',
                        ],
                        [
                            'label' => 'oro.sale.quote.ship_until.label',
                            'property' => 'ship_until',
                        ],
                        [
                            'label' => 'oro.frontend.sale.quote.ship_estimate.label',
                            'property' => 'shipping_cost',
                        ],
                        [
                            'label' => 'oro.sale.quote.sections.shipping_address',
                            'property' => 'shippingAddress.street',
                        ]
                    ],
                ],
            ],
            'customer1 user3 (CustomerUser:VIEW_LOCAL)' => [
                'input' => [
                    'qid' => LoadQuoteData::QUOTE3,
                    'login' => LoadUserData::ACCOUNT1_USER3,
                    'password' => LoadUserData::ACCOUNT1_USER3,
                ],
                'expected' => [
                    'createOrderButton' => true,
                    'columns' => [
                        [
                            'label' => 'oro.frontend.sale.quote.qid.label',
                            'property' => 'qid',
                        ],
                        [
                            'label' => 'oro.frontend.sale.quote.valid_until.label',
                            'property' => 'valid_until',
                        ],
                        [
                            'label' => 'oro.sale.quote.po_number.label',
                            'property' => 'po_number',
                        ],
                        [
                            'label' => 'oro.sale.quote.ship_until.label',
                            'property' => 'ship_until',
                        ],
                        [
                            'label' => 'oro.frontend.sale.quote.ship_estimate.label',
                            'property' => 'shipping_cost',
                        ],
                        [
                            'label' => 'oro.sale.quote.sections.shipping_address',
                            'property' => 'shippingAddress.street',
                        ]
                    ],
                ],
            ],
            'customer1 user3 (CustomerUser:VIEW_LOCAL, Quote date)' => [
                'input' => [
                    'qid' => LoadQuoteData::QUOTE5,
                    'login' => LoadUserData::ACCOUNT1_USER3,
                    'password' => LoadUserData::ACCOUNT1_USER3,
                ],
                'expected' => [
                    'createOrderButton' => false,
                    'columns' => [
                        [
                            'label' => 'oro.frontend.sale.quote.qid.label',
                            'property' => 'qid',
                        ],
                        [
                            'label' => 'oro.frontend.sale.quote.valid_until.label',
                            'property' => 'valid_until',
                        ],
                        [
                            'label' => 'oro.sale.quote.po_number.label',
                            'property' => 'po_number',
                        ],
                        [
                            'label' => 'oro.sale.quote.ship_until.label',
                            'property' => 'ship_until',
                        ],
                    ],
                ],
            ],
            'customer1 user3 (CustomerUser:VIEW_LOCAL, Quote expired)' => [
                'input' => [
                    'qid' => LoadQuoteData::QUOTE8,
                    'login' => LoadUserData::ACCOUNT1_USER3,
                    'password' => LoadUserData::ACCOUNT1_USER3,
                ],
                'expected' => [
                    'createOrderButton' => false,
                    'columns' => [
                        [
                            'label' => 'oro.frontend.sale.quote.qid.label',
                            'property' => 'qid',
                        ],
                        [
                            'label' => 'oro.frontend.sale.quote.valid_until.label',
                            'property' => 'valid_until',
                        ],
                        [
                            'label' => 'oro.sale.quote.po_number.label',
                            'property' => 'po_number',
                        ],
                        [
                            'label' => 'oro.sale.quote.ship_until.label',
                            'property' => 'ship_until',
                        ],
                    ],
                ],
            ],
            'customer1 user3 (CustomerUser:VIEW_LOCAL, null Quote date)' => [
                'input' => [
                    'qid' => LoadQuoteData::QUOTE9,
                    'login' => LoadUserData::ACCOUNT1_USER3,
                    'password' => LoadUserData::ACCOUNT1_USER3,
                ],
                'expected' => [
                    'createOrderButton' => true,
                    'columns' => [
                        [
                            'label' => 'oro.frontend.sale.quote.qid.label',
                            'property' => 'qid',
                        ],
                        [
                            'label' => 'oro.frontend.sale.quote.valid_until.label',
                            'property' => 'valid_until',
                        ],
                        [
                            'label' => 'oro.sale.quote.po_number.label',
                            'property' => 'po_number',
                        ],
                        [
                            'label' => 'oro.sale.quote.ship_until.label',
                            'property' => 'ship_until',
                        ],
                        [
                            'label' => 'oro.paymentterm.entity_label',
                            'property' => 'payment_term_7c4f1e8e.label',
                        ],
                    ],
                ],
            ],
            'customer1 user3 (CustomerUser:DEEP)' => [
                'input' => [
                    'qid' => LoadQuoteData::QUOTE9,
                    'login' => LoadUserData::PARENT_ACCOUNT_USER1,
                    'password' => LoadUserData::PARENT_ACCOUNT_USER1,
                ],
                'expected' => [
                    'createOrderButton' => true,
                    'columns' => [
                        [
                            'label' => 'oro.frontend.sale.quote.qid.label',
                            'property' => 'qid',
                        ],
                        [
                            'label' => 'oro.frontend.sale.quote.valid_until.label',
                            'property' => 'valid_until',
                        ],
                        [
                            'label' => 'oro.sale.quote.po_number.label',
                            'property' => 'po_number',
                        ],
                        [
                            'label' => 'oro.sale.quote.ship_until.label',
                            'property' => 'ship_until',
                        ],
                        [
                            'label' => 'oro.paymentterm.entity_label',
                            'property' => 'payment_term_7c4f1e8e.label',
                        ],
                    ],
                ],
            ],
            'customer1 user3 (CustomerUser:DEEP) not acceptable' => [
                'input' => [
                    'qid' => LoadQuoteData::QUOTE12,
                    'login' => LoadUserData::ACCOUNT1_USER3,
                    'password' => LoadUserData::ACCOUNT1_USER3,
                ],
                'expected' => [
                    'createOrderButton' => false,
                    'columns' => [
                        [
                            'label' => 'oro.frontend.sale.quote.qid.label',
                            'property' => 'qid',
                        ],
                        [
                            'label' => 'oro.frontend.sale.quote.valid_until.label',
                            'property' => 'valid_until',
                        ],
                        [
                            'label' => 'oro.sale.quote.po_number.label',
                            'property' => 'po_number',
                        ],
                        [
                            'label' => 'oro.sale.quote.ship_until.label',
                            'property' => 'ship_until',
                        ],
                        [
                            'label' => 'oro.paymentterm.entity_label',
                            'property' => 'payment_term_7c4f1e8e.label',
                        ],
                    ],
                ],
            ],
        ];
    }

    /**
     * @dataProvider ACLProvider
     *
     * @param string $user
     * @param int $status
     */
    public function testViewAccessDenied($user, $status)
    {
        $this->loginUser($user);

        /* @var $quote Quote */
        $quote = $this->getReference(LoadQuoteData::QUOTE2);

        $this->client->request(
            'GET',
            $this->getUrl(
                'oro_sale_quote_frontend_view',
                ['id' => $quote->getId()]
            )
        );

        $response = $this->client->getResponse();
        static::assertHtmlResponseStatusCodeEquals($response, $status);
    }

    /**
     * @return array
     */
    public function ACLProvider()
    {
        return [
            'VIEW (nanonymous user)' => [
                'user' => '',
                'status' => 401
            ],
            'VIEW (user from another customer)' => [
                'user' => LoadUserData::ACCOUNT2_USER1,
                'status' => 403
            ],
            'VIEW (user from parent customer : LOCAL)' => [
                'user' => LoadUserData::PARENT_ACCOUNT_USER2,
                'status' => 403
            ],
        ];
    }

    public function testViewAccessGranted()
    {
        $this->loginUser(LoadUserData::PARENT_ACCOUNT_USER1);

        /* @var $quote Quote */
        $quote = $this->getReference(LoadQuoteData::QUOTE3);

        $this->client->request(
            'GET',
            $this->getUrl(
                'oro_sale_quote_frontend_view',
                ['id' => $quote->getId()]
            )
        );

        $response = $this->client->getResponse();
        static::assertHtmlResponseStatusCodeEquals($response, 200);
    }

    public function testViewDraft()
    {
        $this->loginUser(LoadUserData::PARENT_ACCOUNT_USER1);

        /* @var $quote Quote */
        $quote = $this->getReference(LoadQuoteData::QUOTE_DRAFT);

        $this->client->request(
            'GET',
            $this->getUrl(
                'oro_sale_quote_frontend_view',
                ['id' => $quote->getId()]
            )
        );

        $response = $this->client->getResponse();
        static::assertHtmlResponseStatusCodeEquals($response, Response::HTTP_FORBIDDEN);
    }

    public function testGridAccessDeniedForAnonymousUsers()
    {
        $this->initClient();
        $this->client->getCookieJar()->clear();

        $this->client->request('GET', $this->getUrl('oro_rfp_frontend_request_index'));
        static::assertHtmlResponseStatusCodeEquals($this->client->getResponse(), 404);

        $response = $this->client->requestGrid(['gridName' => 'frontend-quotes-grid'], [], true);
        $this->assertSame($response->getStatusCode(), 302);
    }

    public function testActualQuantityNotEqualToOfferedValidation()
    {
        $this->loginUser(LoadUserData::ACCOUNT1_USER2);
        /* @var $quote Quote */
        $quote = $this->getReference(LoadQuoteData::QUOTE13);
        $operationName = 'oro_sale_frontend_quote_submit_to_order';
        $entityId = $quote->getId();
        $entityClass = Quote::class;
        $operationExecuteParams = $this->getOperationExecuteParams($operationName, $entityId, $entityClass);
        $url = $this->getUrl(
            'oro_frontend_action_operation_execute',
            [
                'operationName' => $operationName,
                'entityId' => $entityId,
                'entityClass' => $entityClass,
                'route' => 'oro_sale_quote_frontend_view'
            ]
        );
        $this->client->request(
            'POST',
            $url,
            $operationExecuteParams,
            [],
            ['HTTP_X_REQUESTED_WITH' => 'XMLHttpRequest']
        );
        $this->assertJsonResponseStatusCodeEquals($this->client->getResponse(), 200);
        $data = json_decode($this->client->getResponse()->getContent(), true);
        $this->assertArrayHasKey('redirectUrl', $data);
        $this->assertTrue($data['success']);

        $crawler = $this->client->request('POST', $data['redirectUrl']);
        $this->assertHtmlResponseStatusCodeEquals($this->client->getResponse(), 200);

        $this->client->followRedirects(true);
        $crawler = $this->client->submit(
            $crawler->selectButton('Submit')->form(),
            [
                'oro_sale_quote_demand[demandProducts][0][quantity]'  => 50,
                'oro_sale_quote_demand[demandProducts][1][quantity]'  => 50
            ]
        );

        $this->assertCount(
            1,
            $crawler->filter('.validation-failed:contains("Quantity should be equal to offered quantity")')
        );
        $this->assertCount(
            1,
            $crawler->filter(
                '.validation-failed:contains("Quantity should be grater than or equal to offered quantity")'
            )
        );
    }

    /**
     * @param $operationName
     * @param $entityId
     * @param $entityClass
     *
     * @return array
     */
    protected function getOperationExecuteParams($operationName, $entityId, $entityClass)
    {
        $actionContext = [
            'entityId'    => $entityId,
            'entityClass' => $entityClass
        ];
        $container = static::getContainer();
        $operation = $container->get('oro_action.operation_registry')->findByName($operationName);
        $actionData = $container->get('oro_action.helper.context')->getActionData($actionContext);

        $tokenData = $container
            ->get('oro_action.operation.execution.form_provider')
            ->createTokenData($operation, $actionData);
        $container->get('session')->save();

        return $tokenData;
    }
}
