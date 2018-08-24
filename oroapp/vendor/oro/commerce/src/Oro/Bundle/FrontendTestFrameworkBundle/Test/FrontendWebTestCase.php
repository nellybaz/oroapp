<?php

namespace Oro\Bundle\FrontendTestFrameworkBundle\Test;

use Oro\Bundle\SecurityBundle\Authentication\Token\UsernamePasswordOrganizationToken;
use Oro\Bundle\TestFrameworkBundle\Test\WebTestCase;
use Oro\Bundle\CustomerBundle\Entity\CustomerUser;
use Oro\Bundle\WebsiteBundle\Tests\Functional\Stub\WebsiteManagerStub;

abstract class FrontendWebTestCase extends WebTestCase
{
    /**
     * @after
     */
    public function afterFrontendTest()
    {
        if (null !== $this->client) {
            $this->getWebsiteManagerStub()->disableStub();
        }
    }

    /**
     * @param string $email
     */
    protected function updateCustomerUserSecurityToken($email)
    {
        $user = $this->getContainer()
            ->get('doctrine')
            ->getRepository(CustomerUser::class)
            ->findOneBy(['email' => $email]);

        $token = new UsernamePasswordOrganizationToken($user, false, 'k', $user->getOrganization(), $user->getRoles());
        $this->getContainer()->get('security.token_storage')->setToken($token);
    }

    /**
     * @param string $websiteReference
     */
    public function setCurrentWebsite($websiteReference = null)
    {
        $websiteManagerStub = $this->getWebsiteManagerStub();
        $defaultWebsite = $websiteManagerStub->getDefaultWebsite();
        if (!$websiteReference || $websiteReference === 'default') {
            $website = $defaultWebsite;
        } else {
            if (!$this->hasReference($websiteReference)) {
                throw new \RuntimeException(
                    sprintf('WebsiteScope scope reference "%s" was not found', $websiteReference)
                );
            }
            $website = $this->getReference($websiteReference);
        }

        $websiteManagerStub->enableStub();
        $websiteManagerStub->setCurrentWebsiteStub($website);
        $websiteManagerStub->setDefaultWebsiteStub($defaultWebsite);
    }

    /**
     * @return int
     */
    protected function getDefaultWebsiteId()
    {
        return $this->getWebsiteManagerStub()->getDefaultWebsite()->getId();
    }

    /**
     * @return WebsiteManagerStub
     */
    private function getWebsiteManagerStub()
    {
        $manager = $this->client->getContainer()->get('oro_website.manager');
        if (!$manager instanceof WebsiteManagerStub) {
            throw new \LogicException(sprintf(
                'The service "oro_website.manager" should be instance of "%s", given "%s".',
                WebsiteManagerStub::class,
                get_class($manager)
            ));
        }

        return $manager;
    }
}
