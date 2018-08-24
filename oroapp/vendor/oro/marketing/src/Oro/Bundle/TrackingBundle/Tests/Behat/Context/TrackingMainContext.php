<?php

namespace Oro\Bundle\TrackingBundle\Tests\Behat\Context;

use Behat\Symfony2Extension\Context\KernelDictionary;

use Doctrine\Common\Persistence\ObjectRepository;

use Symfony\Component\Filesystem\Filesystem;

use Oro\Bundle\TestFrameworkBundle\Behat\Context\OroFeatureContext;
use Oro\Bundle\TrackingBundle\Entity\TrackingEvent;
use Oro\Bundle\TrackingBundle\Entity\TrackingWebsite;

class TrackingMainContext extends OroFeatureContext
{
    use KernelDictionary;

    const TRACKING_FILENAME_KEY = 'tracking';

    /**
     * This step used for generating static HTML page and add tracking code to it
     * It used in case when we need to check tracking data
     *
     * Example: Given I generate html page with tracking code from website "default"
     *
     * @When /^(?:|I )generate html page with tracking code from website "(?P<identifier>\w+)"$/
     *
     * @param string $identifier
     */
    public function generateHtmlPageWithTrackingCode($identifier)
    {
        $website = $this->getRepository(TrackingWebsite::class)->findOneBy(['identifier' => $identifier]);
        self::assertNotNull($website, sprintf('Could not found tracking website "%s",', $identifier));

        $twig = $this->getContainer()->get('twig');
        $trackingCode = $twig->render('OroTrackingBundle:TrackingWebsite:script.js.twig', ['entity' => $website]);
        $url = $this->getMinkParameter('base_url');
        $scheme = parse_url($url, PHP_URL_SCHEME);
        $url = str_replace($scheme . '://', '', $url);

        $trackingCode = str_replace(
            ['[user_identifier]', '[host]'],
            ['"testUserId"', sprintf('"%s"', trim($url, '/'))],
            $trackingCode
        );

        $filesystem = $this->getContainer()->get('filesystem');

        $filesystem->dumpFile(
            $this->getKernel()->getRootDir() . '/../web/' . $this->getHtmlFilename($identifier),
            $this->getHtmlContent($trackingCode)
        );
    }

    /**
     * Example: Given I open html page with tracking code for website "default"
     *
     * @When /^(?:|I )open html page with tracking code for website "(?P<identifier>\w+)"$/
     *
     * @param string $identifier
     */
    public function openPageWithTrackingCode($identifier)
    {
        $this->visitPath('/' . $this->getHtmlFilename($identifier));

        unlink($this->getKernel()->getRootDir() . '/../web/' . $this->getHtmlFilename($identifier));
    }

    /**
     * @param string $className
     *
     * @return ObjectRepository
     */
    private function getRepository($className)
    {
        return $this->getContainer()
            ->get('doctrine')
            ->getManagerForClass($className)
            ->getRepository($className);
    }

    /**
     * @param string $identifier
     *
     * @return string
     */
    private function getHtmlFilename($identifier)
    {
        return sprintf('%s_%s.html', self::TRACKING_FILENAME_KEY, $identifier);
    }

    /**
     * @param string $trackingCode
     *
     * @return string
     */
    private function getHtmlContent($trackingCode)
    {
        $html = <<<HTML
<!DOCTYPE html>
<html>
    <head>
        $trackingCode
    </head>
    <body></body>
</html>
HTML;

        return $html;
    }
}
