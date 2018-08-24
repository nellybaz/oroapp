<?php

namespace Oro\Bundle\TaxBundle\Tests\Functional\Manager;

use Doctrine\Common\Persistence\ManagerRegistry;

use Symfony\Component\PropertyAccess\PropertyAccessor;

use Oro\Component\Testing\Unit\LoadTestCaseDataTrait;
use Oro\Bundle\ConfigBundle\Config\ConfigManager;
use Oro\Bundle\TestFrameworkBundle\Test\WebTestCase;
use Oro\Bundle\TaxBundle\Tests\ResultComparatorTrait;

/**
 * @dbIsolationPerTest
 */
class TaxManagerTest extends WebTestCase
{
    use LoadTestCaseDataTrait;
    use ResultComparatorTrait;

    /** @var ConfigManager */
    protected $configManager;

    /** @var PropertyAccessor */
    protected $propertyAccessor;

    /** @var ManagerRegistry */
    protected $doctrine;

    protected function setUp()
    {
        $this->initClient();
        $this->client->useHashNavigation(true);

        $this->loadFixtures(
            [
                'Oro\Bundle\TaxBundle\Tests\Functional\DataFixtures\LoadTaxRules',
            ]
        );

        $this->configManager = $this->getContainer()->get('oro_config.global');
        $this->propertyAccessor = $this->getContainer()->get('property_accessor');
        $this->doctrine = $this->getContainer()->get('doctrine');
    }

    /**
     * @dataProvider methodsDataProvider
     * @param string $method
     * @param string $reference
     * @param array $configuration
     * @param array $databaseBefore
     * @param array $expectedResult
     * @param array $databaseAfter
     */
    public function testMethods(
        $method,
        $reference,
        array $configuration,
        array $databaseBefore = [],
        array $expectedResult = [],
        array $databaseAfter = []
    ) {
        foreach ($configuration as $key => $value) {
            $this->configManager->set(sprintf('oro_tax.%s', $key), $value);
        }

        $this->prepareDatabase($databaseBefore);

        $this->executeMethod($method, $this->getReference($reference), $expectedResult);

        $this->assertDatabase($databaseAfter);
    }

    /**
     * @return array
     */
    public function methodsDataProvider()
    {
        return $this->getTestCaseData(__DIR__);
    }

    /**
     * @param string $method
     * @param object $object
     * @param array $expectedResult
     */
    protected function executeMethod($method, $object, $expectedResult)
    {
        $manager = $this->getContainer()->get('oro_tax.manager.tax_manager');

        $this->compareResult($expectedResult, $manager->{$method}($object, true));

        // cache trigger
        $this->compareResult($expectedResult, $manager->{$method}($object, true));
    }

    /**
     * @param array $databaseBefore
     */
    protected function prepareDatabase(array $databaseBefore)
    {
        // Disable taxation for load fixtures
        $previousTaxEnableState = $this->configManager->get('oro_tax.tax_enable');
        $this->configManager->set('oro_tax.tax_enable', false);

        foreach ($databaseBefore as $class => $items) {
            foreach ($items as $reference => $item) {
                $items[$reference] = $this->getReferenceFromDoctrine($item);
            }
            $databaseBefore[$class] = $items;
        }

        $objectsData = \Nelmio\Alice\Fixtures::load($databaseBefore, $this->doctrine->getManager());

        // Restore previous taxation state after load fixtures
        $this->configManager->set('oro_tax.tax_enable', $previousTaxEnableState);

        foreach ($objectsData as $reference => $object) {
            $this->getReferenceRepository()->setReference($reference, $object);
        }
    }

    /**
     * @param array $config
     * @return array
     */
    protected function getReferenceFromDoctrine($config)
    {
        foreach ($config as $key => $item) {
            if (is_array($item)) {
                if (array_key_exists('class', $item) && array_key_exists('query', $item)) {
                    $config[$key] = $this->doctrine
                        ->getRepository($item['class'])
                        ->findOneBy($item['query']);
                } elseif (is_numeric(key($item))) {
                    $config[$key] = $this->getReferenceFromDoctrine($item);
                }
            }
        }

        return $config;
    }


    /**
     * @param array $databaseAfter
     */
    protected function assertDatabase(array $databaseAfter)
    {
        foreach ($databaseAfter as $class => $items) {
            $repository = $this->doctrine->getRepository($class);

            foreach ($items as $item) {
                foreach ($item as $key => $param) {
                    if (is_array($param) && array_key_exists('reference', $param)) {
                        $item[$key] = $this->getReference($param['reference'])->getId();
                    }
                }

                $this->assertNotEmpty($repository->findBy($item), sprintf('%s %s', $class, json_encode($item)));
            }
        }
    }
}
