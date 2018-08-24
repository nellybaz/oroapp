<?php

namespace Oro\Bundle\UserBundle\Security\Http\Firewall;

use Escape\WSSEAuthenticationBundle\Security\Core\Authentication\Token\Token;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\Security\Core\Authentication\AuthenticationManagerInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\SecurityContextInterface;
use Symfony\Component\Security\Http\EntryPoint\AuthenticationEntryPointInterface;
use Symfony\Component\Security\Http\Firewall\ListenerInterface;
use UnexpectedValueException;

/**
 * Copy of WSSE Listener that adds additional attribute firewallName to the token.
 *
 * @see \Escape\WSSEAuthenticationBundle\Security\Http\Firewall\Listener
 */
class Listener implements ListenerInterface
{
    private $wsseHeader;

    /** @var SecurityContextInterface */
    protected $securityContext;

    /** @var AuthenticationManagerInterface */
    protected $authenticationManager;

    /** @var AuthenticationEntryPointInterface */
    protected $authenticationEntryPoint;

    /**
     * @var string The security firewall name whose urls should process by this listener
     */
    private $firewallName;

    /**
     * @param SecurityContextInterface $securityContext
     * @param AuthenticationManagerInterface $authenticationManager
     * @param AuthenticationEntryPointInterface $authenticationEntryPoint
     */
    public function __construct(
        SecurityContextInterface $securityContext,
        AuthenticationManagerInterface $authenticationManager,
        AuthenticationEntryPointInterface $authenticationEntryPoint
    ) {
        $this->securityContext = $securityContext;
        $this->authenticationManager = $authenticationManager;
        $this->authenticationEntryPoint = $authenticationEntryPoint;
    }

    /**
     * Sets security firewall name whose urls should process by this listener
     *
     * @param string $firewallName
     */
    public function setFirewallName($firewallName)
    {
        $this->firewallName = $firewallName;
    }

    /**
     * {@inheritdoc}
     */
    public function handle(GetResponseEvent $event)
    {
        $request = $event->getRequest();

        //find out if the current request contains any information by which the user might be authenticated
        if (!$request->headers->has('X-WSSE')) {
            return;
        }

        $ae_message = null;
        $this->wsseHeader = $request->headers->get('X-WSSE');
        $wsseHeaderInfo = $this->parseHeader();

        if ($wsseHeaderInfo !== false) {
            $token = new Token();
            $token->setUser($wsseHeaderInfo['Username']);

            $token->setAttribute('digest', $wsseHeaderInfo['PasswordDigest']);
            $token->setAttribute('nonce', $wsseHeaderInfo['Nonce']);
            $token->setAttribute('created', $wsseHeaderInfo['Created']);
            $token->setAttribute('firewallName', $this->firewallName);

            try {
                $returnValue = $this->authenticationManager->authenticate($token);

                if ($returnValue instanceof TokenInterface) {
                    return $this->securityContext->setToken($returnValue);
                } elseif ($returnValue instanceof Response) {
                    return $event->setResponse($returnValue);
                }
            } catch (AuthenticationException $ae) {
                $event->setResponse($this->authenticationEntryPoint->start($request, $ae));
            }
        }
    }

    /**
     * This method returns the value of a bit header by the key
     *
     * @param $key
     * @return mixed
     * @throws \UnexpectedValueException
     */
    private function parseValue($key)
    {
        if (!preg_match('/' . $key . '="([^"]+)"/', $this->wsseHeader, $matches)) {
            throw new UnexpectedValueException('The string was not found');
        }

        return $matches[1];
    }

    /**
     * This method parses the X-WSSE header
     *
     * If Username, PasswordDigest, Nonce and Created exist then it returns their value,
     * otherwise the method returns false.
     *
     * @return array|bool
     */
    private function parseHeader()
    {
        $result = array();

        try {
            $result['Username'] = $this->parseValue('Username');
            $result['PasswordDigest'] = $this->parseValue('PasswordDigest');
            $result['Nonce'] = $this->parseValue('Nonce');
            $result['Created'] = $this->parseValue('Created');
        } catch (UnexpectedValueException $e) {
            return false;
        }

        return $result;
    }
}
