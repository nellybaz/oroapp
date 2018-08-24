<?php

namespace Oro\Bundle\SaleBundle\Tests\Performance\DataFixtures;

use Doctrine\Common\Persistence\ObjectManager;

use Oro\Bundle\SaleBundle\Tests\Functional\DataFixtures\LoadQuoteData;
use Oro\Bundle\SaleBundle\Tests\Functional\DataFixtures\AbstractFixture;

class LoadQuoteDataForPerformance extends AbstractFixture
{
    /** Total quotes will be NUMBER_OF_QUOTE_GROUPS * count(LoadQuoteData::$items) */
    const NUMBER_OF_QUOTE_GROUPS = 10000;

    const QUOTES_TO_EXPIRE = 10000;

    /** @var int  */
    protected $quotesToExpire = self::QUOTES_TO_EXPIRE;

    /** @var array  */
    protected static $quoteUpdateFields = [
        'user_owner_id',
        'qid',
        'organization_id',
        'ship_until',
        'po_number',
        'created_at',
        'updated_at',
        'expired',
        'valid_until'
    ];

    /**
     * {@inheritdoc}
     */
    public function load(ObjectManager $manager)
    {
        $user = $this->getUser($manager);
        $insertQuoteBaseSql = $this->getUpdateQuotesBaseSql();

        $params = [];

        // generate sprintf string for insert values
        foreach (self::$quoteUpdateFields as $field) {
            $params[] = "'%s'";
        }
        $valueSprintf = '(' . implode(', ', $params) . '),';
        $UTC = new \DateTimeZone("UTC");

        for ($i = 1; $i <= static::NUMBER_OF_QUOTE_GROUPS; $i++) {
            $quoteSql = $insertQuoteBaseSql;
            foreach (LoadQuoteData::$items as $item) {
                $poNumber = 'CA' . rand(1000, 9999) . 'USD';

                // generate VALUES sql
                $quoteSql .= sprintf(
                    $valueSprintf,
                    $user->getId(),
                    $item['qid'],
                    $user->getOrganization()->getId(),
                    (new \DateTime('+10 day', $UTC))->format('Y-m-d'),
                    $poNumber,
                    (new \DateTime('now', $UTC))->format('Y-m-d'),
                    (new \DateTime('now', $UTC))->format('Y-m-d'),
                    $this->getExpiredValue(),
                    $this->getValidUntilValue($UTC)
                );
            }
            $quoteSql = substr($quoteSql, 0, -1) . ';';
            $manager->getConnection()->exec($quoteSql);
        }
    }

    /**
     * @return string
     */
    protected function getUpdateQuotesBaseSql()
    {
        $sql = "INSERT INTO oro_sale_quote (";
        foreach (self::$quoteUpdateFields as $field) {
            $sql .= $field . ", ";
        }
        $sql = substr($sql, 0, -2) . ') VALUES ';

        return $sql;
    }

    /**
     * @return int
     */
    protected function getExpiredValue()
    {
        if ($this->quotesToExpire >= 0) {
            $this->quotesToExpire--;

            return 0;
        }

        return 1;
    }

    /**
     * @param string $timezone
     *
     * @return string
     */
    protected function getValidUntilValue($timezone)
    {
        return $this->quotesToExpire >= 0
            ? (new \DateTime('-1days', $timezone))->format('Y-m-d H:i:s')
            : (new \DateTime('+1days', $timezone))->format('Y-m-d H:i:s');
    }

    /**
     * {@inheritdoc}
     */
    public function getDependencies()
    {
        return [
            'Oro\Bundle\SaleBundle\Tests\Functional\DataFixtures\LoadUserData',
            'Oro\Bundle\SaleBundle\Tests\Functional\DataFixtures\LoadCustomerUserAddresses',
            'Oro\Bundle\SaleBundle\Tests\Functional\DataFixtures\LoadCustomerAddresses',
            'Oro\Bundle\ProductBundle\Tests\Functional\DataFixtures\LoadProductUnitPrecisions',
        ];
    }
}
