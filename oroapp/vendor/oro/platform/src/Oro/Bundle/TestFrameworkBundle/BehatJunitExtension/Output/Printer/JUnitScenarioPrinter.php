<?php

namespace Oro\Bundle\TestFrameworkBundle\BehatJunitExtension\Output\Printer;

use Behat\Behat\Output\Node\EventListener\JUnit\JUnitOutlineStoreListener;
use Behat\Behat\Output\Node\Printer\Helper\ResultToStringConverter;
use Behat\Gherkin\Node\ExampleNode;
use Behat\Gherkin\Node\FeatureNode;
use Behat\Gherkin\Node\OutlineNode;
use Behat\Gherkin\Node\ScenarioLikeInterface;
use Behat\Testwork\Output\Formatter;
use Behat\Testwork\Output\Printer\JUnitOutputPrinter;
use Behat\Testwork\Tester\Result\TestResult;
use Oro\Bundle\TestFrameworkBundle\BehatJunitExtension\EventListener\JUnitDurationListener;

final class JUnitScenarioPrinter
{
    /**
     * @var ResultToStringConverter
     */
    private $resultConverter;

    /**
     * @var JUnitOutlineStoreListener
     */
    private $outlineStoreListener;

    /**
     * @var OutlineNode
     */
    private $lastOutline;

    /**
     * @var int
     */
    private $outlineStepCount;

    /**
     * @param ResultToStringConverter $resultConverter
     * @param JUnitOutlineStoreListener $outlineListener
     * @param JUnitDurationListener $durationListener
     */
    public function __construct(
        ResultToStringConverter $resultConverter,
        JUnitOutlineStoreListener $outlineListener,
        JUnitDurationListener $durationListener
    ) {
        $this->resultConverter = $resultConverter;
        $this->outlineStoreListener = $outlineListener;
        $this->durationListener = $durationListener;
    }

    /**
     * {@inheritDoc}
     */
    public function printOpenTag(
        Formatter $formatter,
        FeatureNode $feature,
        ScenarioLikeInterface $scenario,
        TestResult $result
    ) {
        $name = implode(' ', array_map(function ($l) {
            return trim($l);
        }, explode("\n", $scenario->getTitle())));

        if ($scenario instanceof ExampleNode) {
            $name = $this->buildExampleName($scenario);
        }

        /** @var JUnitOutputPrinter $outputPrinter */
        $outputPrinter = $formatter->getOutputPrinter();

        $outputPrinter->addTestcase([
            'name' => $name,
            'status' => $this->resultConverter->convertResultToString($result),
            'time' => $this->durationListener->getDuration($scenario)
        ]);
    }

    /**
     * @param ExampleNode $scenario
     * @return string
     */
    private function buildExampleName(ExampleNode $scenario)
    {
        $currentOutline = $this->outlineStoreListener->getCurrentOutline($scenario);
        if ($currentOutline === $this->lastOutline) {
            $this->outlineStepCount++;
        } else {
            $this->lastOutline = $currentOutline;
            $this->outlineStepCount = 1;
        }

        $name = $currentOutline->getTitle() . ' #' . $this->outlineStepCount;
        return $name;
    }
}
