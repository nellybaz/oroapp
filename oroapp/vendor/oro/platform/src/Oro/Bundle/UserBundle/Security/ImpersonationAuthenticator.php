<?php

namespace Oro\Bundle\UserBundle\Security;

use Doctrine\Common\Persistence\ManagerRegistry;
use Oro\Bundle\SecurityBundle\Authentication\Guesser\UserOrganizationGuesser;
use Oro\Bundle\SecurityBundle\Authentication\Token\UsernamePasswordOrganizationTokenFactoryInterface;
use Oro\Bundle\UserBundle\Entity\Impersonation;
use Oro\Bundle\UserBundle\Entity\User;
use Oro\Bundle\UserBundle\Event\ImpersonationSuccessEvent;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationCredentialsNotFoundException;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\Exception\BadCredentialsException;
use Symfony\Component\Security\Core\Exception\CustomUserMessageAuthenticationException;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Guard\GuardAuthenticatorInterface;

class ImpersonationAuthenticator implements GuardAuthenticatorInterface
{
    const TOKEN_PARAMETER = '_impersonation_token';

    /** @var ManagerRegistry */
    protected $doctrine;

    /** @var UsernamePasswordOrganizationTokenFactoryInterface */
    protected $tokenFactory;

    /** @var EventDispatcherInterface */
    protected $eventDispatcher;

    /** @var UrlGeneratorInterface */
    protected $router;

    /**
     * @param ManagerRegistry $doctrine
     * @param UsernamePasswordOrganizationTokenFactoryInterface $tokenFactory
     * @param EventDispatcherInterface $eventDispatcher
     * @param UrlGeneratorInterface $router
     */
    public function __construct(
        ManagerRegistry $doctrine,
        UsernamePasswordOrganizationTokenFactoryInterface $tokenFactory,
        EventDispatcherInterface $eventDispatcher,
        UrlGeneratorInterface $router
    ) {
        $this->doctrine = $doctrine;
        $this->tokenFactory = $tokenFactory;
        $this->eventDispatcher = $eventDispatcher;
        $this->router = $router;
    }

    /**
     * {@inheritdoc}
     */
    public function getCredentials(Request $request)
    {
        return $request->query->get(static::TOKEN_PARAMETER);
    }

    /**
     * {@inheritdoc}
     */
    public function getUser($credentials, UserProviderInterface $userProvider)
    {
        $impersonation = $this->getImpersonation($credentials);
        $this->checkImpersonation($impersonation);

        return $impersonation->getUser();
    }

    /**
     * {@inheritdoc}
     */
    public function checkCredentials($credentials, UserInterface $user)
    {
        // checks are already done in getImpersonation
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function onAuthenticationSuccess(Request $request, TokenInterface $token, $providerKey)
    {
        $impersonation = $this->getImpersonation($this->getCredentials($request));
        $token->setAttribute('IMPERSONATION', $impersonation->getId());

        $event = new ImpersonationSuccessEvent($impersonation);
        $this->eventDispatcher->dispatch(ImpersonationSuccessEvent::EVENT_NAME, $event);

        $impersonation->setLoginAt(new \DateTime('now', new \DateTimeZone('UTC')));
        $impersonation->setIpAddress($request->getClientIp());
        $this->doctrine->getManager()->flush();
    }

    /**
     * {@inheritdoc}
     */
    public function onAuthenticationFailure(Request $request, AuthenticationException $exception)
    {
        $request->getSession()->set(Security::AUTHENTICATION_ERROR, $exception);

        return new RedirectResponse($this->router->generate('oro_user_security_login'));
    }

    /**
     * {@inheritdoc}
     */
    public function start(Request $request, AuthenticationException $authException = null)
    {
        if ($authException) {
            $request->getSession()->set(Security::AUTHENTICATION_ERROR, $authException);
        }

        return new RedirectResponse($this->router->generate('oro_user_security_login'));
    }

    /**
     * {@inheritdoc}
     */
    public function supportsRememberMe()
    {
        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function createAuthenticatedToken(UserInterface $user, $providerKey)
    {
        $guesser = new UserOrganizationGuesser();
        /** @var User $user */
        $organization = $guesser->guessByUser($user);

        if (!$organization) {
            throw new BadCredentialsException("You don't have active organization assigned.");
        }

        return $this->tokenFactory->create($user, null, $providerKey, $organization, $user->getRoles());
    }

    /**
     * Get Impersonation by token
     *
     * @param string $token
     * @return Impersonation
     */
    protected function getImpersonation($token)
    {
        return $this->doctrine
            ->getRepository('OroUserBundle:Impersonation')
            ->findOneBy(['token' => $token]);
    }

    /**
     * @param  Impersonation $impersonation
     * @throws AuthenticationCredentialsNotFoundException when token is not found
     * @throws CustomUserMessageAuthenticationException when token is already used
     * @throws CustomUserMessageAuthenticationException when token is expired
     */
    protected function checkImpersonation(Impersonation $impersonation = null)
    {
        if (!$impersonation) {
            throw new AuthenticationCredentialsNotFoundException();
        }

        if ($impersonation->getLoginAt()) {
            throw new CustomUserMessageAuthenticationException('Impersonation token is already used.');
        }

        $now = new \DateTime('now', new \DateTimeZone('UTC'));
        if ($impersonation->getExpireAt() <= $now) {
            throw new CustomUserMessageAuthenticationException('Impersonation token has expired.');
        }
    }
}
