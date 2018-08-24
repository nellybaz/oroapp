<?php

namespace Oro\Bundle\UIBundle\Route;

use Symfony\Bundle\FrameworkBundle\Routing\Router as SymfonyRouter;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

use Oro\Component\PropertyAccess\PropertyAccessor;

class Router
{
    const ACTION_PARAMETER     = 'input_action';
    const ACTION_SAVE_AND_STAY = 'save_and_stay';
    const ACTION_SAVE_CLOSE    = 'save_and_close';

    /** @var RequestStack */
    protected $requestStack;

    /** @var SymfonyRouter */
    protected $router;

    /** @var AuthorizationCheckerInterface */
    protected $authorizationChecker;

    /** @var PropertyAccessor */
    protected $propertyAccessor;

    /**
     * @param RequestStack                  $requestStack
     * @param SymfonyRouter                 $router
     * @param AuthorizationCheckerInterface $authorizationChecker
     */
    public function __construct(
        RequestStack $requestStack,
        SymfonyRouter $router,
        AuthorizationCheckerInterface $authorizationChecker
    ) {
        $this->requestStack = $requestStack;
        $this->router = $router;
        $this->authorizationChecker = $authorizationChecker;

        $this->propertyAccessor = new PropertyAccessor();
    }

    /**
     * Redirects to "Save and Stay" or "Save and Close" route depends on which button is clicked
     *
     * @param array  $saveAndStayRoute  A route data for "Save and Stay" button
     * @param array  $saveAndCloseRoute A route data for "Save and Close" button
     * @param object $entity            An entity was saved. Specify this parameter only if an entity
     *                                  is ACL protected and you want to redirect to "Save and Close" route when
     *                                  a new entity is created and an user have no permissions to edit this entity.
     *                                  Please note that if this parameter is not specified, an user clicks
     *                                  "Save and Stay" and he/she does not have permissions to edit an entity
     *                                  an access denied error happens. So, be careful if you decide to not specify
     *                                  this parameter.
     * @return RedirectResponse
     * @throws \LogicException If a route date is not valid
     * @deprecated Since 1.10, use redirect instead.
     */
    public function redirectAfterSave(array $saveAndStayRoute, array $saveAndCloseRoute, $entity = null)
    {
        switch ($this->requestStack->getCurrentRequest()->get(self::ACTION_PARAMETER)) {
            case self::ACTION_SAVE_AND_STAY:
                /**
                 * If user has no permission to edit Save and close callback should be used
                 */
                if (is_null($entity) || $this->authorizationChecker->isGranted('EDIT', $entity)) {
                    $routeData = $saveAndStayRoute;
                } else {
                    $routeData = $saveAndCloseRoute;
                }

                break;
            case self::ACTION_SAVE_CLOSE:
                $routeData = $saveAndCloseRoute;

                break;
            default:
                /**
                 * Avoids of BC break
                 */
                $routeData = $saveAndCloseRoute;
        }

        if (!isset($routeData['route'])) {
            throw new \InvalidArgumentException('The "route" attribute must be defined.');
        }

        $params = isset($routeData['parameters'])
            ? $routeData['parameters']
            : [];

        return new RedirectResponse(
            $this->router->generate($routeData['route'], $params)
        );
    }

    /**
     * @param array|object|null $context
     * @return RedirectResponse
     */
    public function redirect($context)
    {
        $request = $this->requestStack->getCurrentRequest();

        $rawRouteData = json_decode($this->getRawRouteData($request), true);

        /**
         * Default route should be used in case of no input_action in request
         */
        if (!is_array($rawRouteData)) {
            return new RedirectResponse($request->getUri());
        }

        if ($this->hasRedirectUrl($rawRouteData)) {
            $redirectUrl = $this->parseRedirectUrl($rawRouteData);
        } else {
            $routeName = $this->parseRouteName($rawRouteData);
            $routeParams = $this->parseRouteParams($rawRouteData, $context);
            $routeParams = $this->mergeRequestQueryParams($routeParams);
            $redirectUrl = $this->router->generate($routeName, $routeParams);
        }
        return new RedirectResponse($redirectUrl);
    }

    /**
     * Gets data for routing from request parameter with name self::ACTION_PARAMETER
     *
     * Expected input value is a JSON value with keys "route" (required) and "params" (optional).
     * For example:
     * <code>
     *  {"route": "some_route_name", "params": {"some_parameter_name": "some_value"}}
     * </code>
     *
     * @param Request $request
     * @return String JSON string representing raw route data taken from request.
     */
    protected function getRawRouteData(Request $request)
    {
        $result = $request->get(self::ACTION_PARAMETER);

        if ($result && !is_string($result)) {
            throw new \InvalidArgumentException(
                sprintf(
                    'Request parameter "%s" must be string, %s is given.',
                    self::ACTION_PARAMETER,
                    is_object($result) ? get_class($result) : gettype($result)
                )
            );
        }

        return $result;
    }

    /**
     * Parses data for routing based on JSON string.
     *
     * @param string $rawRouteData JSON string with keys "route" (required) and "params" (optional).
     * @param array|object|null $context
     * @return array An array with keys "route" and "parameters".
     */
    protected function parseRouteData($rawRouteData, $context)
    {
        $arrayData = json_decode($rawRouteData, true);

        /**
         * Default route should be used in case of no input_action in request
         */
        if (!is_array($arrayData)) {
            return [
                'route' => $this->requestStack->getCurrentRequest()->getRequestUri()
            ];
        }

        return [
            'route' => $this->parseRouteName($arrayData),
            'params' => $this->parseRouteParams($arrayData, $context),
        ];
    }

    /**
     * Parses value of route name.
     *
     * @param array $arrayData
     * @return string
     */
    protected function parseRouteName(array $arrayData)
    {
        if (empty($arrayData['route'])) {
            throw new \InvalidArgumentException(
                sprintf(
                    'Cannot parse route name from request parameter "%s". Value of key "%s" cannot be empty: %s',
                    self::ACTION_PARAMETER,
                    'route',
                    json_encode($arrayData)
                )
            );
        }

        if (!is_string($arrayData['route'])) {
            throw new \InvalidArgumentException(
                sprintf(
                    'Cannot parse route name from request parameter "%s". Value of key "%s" must be string: %s',
                    self::ACTION_PARAMETER,
                    'route',
                    json_encode($arrayData)
                )
            );
        }

        return $arrayData['route'];
    }

    /**
     * Check redirectUrl for existence.
     *
     * @param array $arrayData
     * @return string
     */
    protected function hasRedirectUrl(array $arrayData)
    {
        return !empty($arrayData['redirectUrl']);
    }

    /**
     * Parses redirectUrl.
     *
     * @param array $arrayData
     * @return string
     */
    protected function parseRedirectUrl(array $arrayData)
    {
        if (empty($arrayData['redirectUrl'])) {
            throw new \InvalidArgumentException(
                sprintf(
                    'Cannot parse route name from request parameter "%s". Value of key "%s" cannot be empty: %s',
                    self::ACTION_PARAMETER,
                    'redirectUrl',
                    json_encode($arrayData)
                )
            );
        }

        if (!is_string($arrayData['redirectUrl'])) {
            throw new \InvalidArgumentException(
                sprintf(
                    'Cannot parse route name from request parameter "%s". Value of key "%s" must be string: %s',
                    self::ACTION_PARAMETER,
                    'redirectUrl',
                    json_encode($arrayData)
                )
            );
        }

        // check for mailformed URL
        if (parse_url($arrayData['redirectUrl']) === false) {
            throw new \InvalidArgumentException(
                sprintf(
                    'Cannot parse route name from request parameter "%s". Value of key "%s" is not valid URL',
                    self::ACTION_PARAMETER,
                    'redirectUrl'
                )
            );
        }

        return $arrayData['redirectUrl'];
    }

    /**
     * Parses value of route parameters.
     *
     * @param array $arrayData
     * @param array|object|null $context
     * @return mixed
     */
    protected function parseRouteParams(array $arrayData, $context)
    {
        if (empty($arrayData['params'])) {
            return [];
        }
        if (!is_array($arrayData['params'])) {
            throw new \InvalidArgumentException(
                sprintf(
                    'Cannot parse route name from request parameter "%s". Value of key "%s" must be array: %s',
                    self::ACTION_PARAMETER,
                    'params',
                    json_encode($arrayData)
                )
            );
        }

        $parsedParameters = $arrayData['params'];
        if (!$context) {
            return $parsedParameters;
        }

        foreach ($arrayData['params'] as $parameterName => $parameterValue) {
            $parsedParameters[$parameterName] = $this->parseRouteParam($parameterValue, $context);
        }

        return $parsedParameters;
    }

    /**
     * Returns list of passed route parameters merged with query parameters of current request.
     *
     * @param array $routeParams
     * @return array
     */
    protected function mergeRequestQueryParams(array $routeParams)
    {
        $queryParams = $this->requestStack->getCurrentRequest()->query->all();

        if ($queryParams) {
            $routeParams = array_merge($queryParams, $routeParams);
        }

        return $routeParams;
    }

    /**
     * Parses parameter passed to router data.
     *
     * Considers a value of parameter as a property path if it starts from '$'. For that case value of this property
     * will be taken from $context
     *
     * @param string $parameterValue Parameter value or path to property
     * @param array|object|null $context
     * @return mixed Value of parsed parameter
     */
    protected function parseRouteParam($parameterValue, $context)
    {
        if (is_string($parameterValue) && strpos($parameterValue, '$') === 0) {
            return $this->propertyAccessor->getValue($context, substr($parameterValue, 1));
        }

        return $parameterValue;
    }
}
