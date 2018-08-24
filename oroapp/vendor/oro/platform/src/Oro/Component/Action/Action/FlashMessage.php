<?php

namespace Oro\Component\Action\Action;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\PropertyAccess\PropertyPath;
use Symfony\Component\Translation\TranslatorInterface;

use Oro\Bundle\UIBundle\Tools\HtmlTagHelper;
use Oro\Component\Action\Exception\InvalidParameterException;
use Oro\Component\ConfigExpression\ContextAccessor;

/**
 * Show flash message
 * Usage:
 * @flash_message:
 *      message: 'Message %parameter_one%, %parameter_two%'
 *      type: 'info'
 *      message_parameters:
 *          parameter_one: 'test'
 *          parameter_two: $someEntity.name
 */
class FlashMessage extends AbstractAction
{
    const DEFAULT_MESSAGE_TYPE = 'info';

    /**
     * @var TranslatorInterface
     */
    protected $translator;

    /**
     * @var HtmlTagHelper
     */
    protected $htmlTagHelper;

    /**
     * @var Request|null
     */
    protected $request;

    /**
     * @var string|PropertyPath
     */
    protected $message;

    /**
     * @var string|PropertyPath
     */
    protected $type;

    /**
     * @var array|PropertyPath
     */
    protected $messageParameters;

    /**
     * @param ContextAccessor $contextAccessor
     * @param TranslatorInterface $translator
     * @param HtmlTagHelper $htmlTagHelper
     */
    public function __construct(
        ContextAccessor $contextAccessor,
        TranslatorInterface $translator,
        HtmlTagHelper $htmlTagHelper
    ) {
        parent::__construct($contextAccessor);

        $this->translator = $translator;
        $this->htmlTagHelper = $htmlTagHelper;
    }

    /**
     * @param Request|null $request
     */
    public function setRequest(Request $request = null)
    {
        $this->request = $request;
    }

    /**
     * {@inheritdoc}
     */
    protected function executeAction($context)
    {
        if ($this->request) {
            $message = $this->contextAccessor->getValue($context, $this->message);

            $messageParameters = $this->getMessageParameters($context);
            $translatedMessage = $this->translator->trans($message, $messageParameters);

            $type = $this->contextAccessor->getValue($context, $this->type);
            if (!$type) {
                $type = self::DEFAULT_MESSAGE_TYPE;
            }

            /** @var Session $session */
            $session = $this->request->getSession();
            $session->getFlashBag()->add(
                $type,
                $this->htmlTagHelper->sanitize($translatedMessage)
            );
        }
    }

    /**
     * {@inheritdoc}
     */
    public function initialize(array $options)
    {
        if (empty($options['message'])) {
            throw new InvalidParameterException('Message parameter is required');
        }
        if (array_key_exists('type', $options)) {
            $this->type = $options['type'];
        }
        if (array_key_exists('message_parameters', $options)) {
            $this->messageParameters = $options['message_parameters'];
        }

        $this->message = $options['message'];

        return $this;
    }

    /**
     * @param mixed $context
     * @return array
     */
    protected function getMessageParameters($context)
    {
        $parameters = (array)$this->contextAccessor->getValue($context, $this->messageParameters);
        $result = [];
        foreach ($parameters as $key => $parameter) {
            $result['%' . $key . '%'] = $this->contextAccessor->getValue($context, $parameter);
        }

        return $result;
    }
}
