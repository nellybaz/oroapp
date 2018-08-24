<?php

namespace Oro\Bundle\FrontendTestFrameworkBundle\Test;

use Symfony\Component\DomCrawler\Crawler;
use Symfony\Component\HttpFoundation\Response;

use Oro\Bundle\TestFrameworkBundle\Test\Client as BaseClient;

class Client extends BaseClient
{
    /**
     * {@inheritdoc}
     */
    public function request(
        $method,
        $uri,
        array $parameters = [],
        array $files = [],
        array $server = [],
        $content = null,
        $changeHistory = true
    ) {
        $crawler = parent::request($method, $uri, $parameters, $files, $server, $content, $changeHistory);

        $this->checkForBackendUrls($uri, $crawler);

        return $crawler;
    }

    /**
     * @param array|string $gridParameters
     * @param array $filter
     * @param bool $isRealRequest
     * @return Response
     */
    public function requestFrontendGrid($gridParameters, $filter = [], $isRealRequest = false)
    {
        return $this->requestGrid($gridParameters, $filter, $isRealRequest, 'oro_frontend_datagrid_index');
    }

    /**
     * {@inheritdoc}
     */
    protected function isHashNavigationRequest($uri, array $parameters, array $server)
    {
        // no hash navigation at frontend
        return parent::isHashNavigationRequest($uri, $parameters, $server) && !$this->isFrontendUri($uri);
    }

    /**
     * @param $uri string
     * @param $crawler
     */
    protected function checkForBackendUrls($uri, Crawler $crawler)
    {
        if ($this->isFrontendUri($uri)) {
            $backendPrefix = $this->getBackendPrefix();
            if (count($crawler) && strpos($crawler->html(), $backendPrefix) !== false) {
                throw new \PHPUnit_Framework_AssertionFailedError(
                    sprintf('Page "%s" contains backend prefix "%s".', $uri, $backendPrefix)
                );
            }
        }
    }

    /**
     * @param string $uri
     * @return bool
     */
    protected function isFrontendUri($uri)
    {
        return strpos($uri, $this->getBackendPrefix()) === false;
    }

    /**
     * @return string
     */
    protected function getBackendPrefix()
    {
        return $this->getContainer()->getParameter('web_backend_prefix');
    }
}
