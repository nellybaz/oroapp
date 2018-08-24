<?php

namespace Oro\Bundle\ApiBundle\Request;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

use Oro\Component\ChainProcessor\Exception\ExecutionFailedException;
use Oro\Bundle\ApiBundle\Exception\ExceptionInterface as ApiException;
use Oro\Bundle\ApiBundle\Util\ExceptionUtil;
use Oro\Bundle\ApiBundle\Util\ValueNormalizerUtil;
use Oro\Bundle\SecurityBundle\Exception\ForbiddenException;

class ExceptionTextExtractor implements ExceptionTextExtractorInterface
{
    /** @var bool */
    protected $debug;

    /** @var string[] */
    protected $safeExceptions;

    /**
     * @param bool     $debug
     * @param string[] $safeExceptions
     */
    public function __construct($debug, $safeExceptions)
    {
        $this->debug = $debug;
        $this->safeExceptions = $safeExceptions;
        $this->safeExceptions[] = ApiException::class;
        $this->safeExceptions[] = HttpExceptionInterface::class;
        $this->safeExceptions[] = AccessDeniedException::class;
        $this->safeExceptions[] = ForbiddenException::class;
    }

    /**
     * {@inheritdoc}
     */
    public function getExceptionStatusCode(\Exception $exception)
    {
        $underlyingException = ExceptionUtil::getProcessorUnderlyingException($exception);
        if ($underlyingException instanceof HttpExceptionInterface) {
            return $underlyingException->getStatusCode();
        }
        if ($underlyingException instanceof AccessDeniedException
            || $underlyingException instanceof ForbiddenException
        ) {
            return Response::HTTP_FORBIDDEN;
        }

        return Response::HTTP_INTERNAL_SERVER_ERROR;
    }

    /**
     * {@inheritdoc}
     */
    public function getExceptionCode(\Exception $exception)
    {
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function getExceptionType(\Exception $exception)
    {
        return ValueNormalizerUtil::humanizeClassName(
            get_class(ExceptionUtil::getProcessorUnderlyingException($exception)),
            'Exception'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function getExceptionText(\Exception $exception)
    {
        $underlyingException = ExceptionUtil::getProcessorUnderlyingException($exception);
        $text = null;
        if ($this->isSafeException($underlyingException)) {
            $text = $this->getSafeExceptionText($underlyingException);
        } elseif ($this->debug) {
            $text = $this->getSafeExceptionText($underlyingException);
            if ($text) {
                $text = '*DEBUG ONLY* ' . $text;
            }
        }
        if (null !== $text && !$text) {
            $text = null;
        }
        if (null !== $text) {
            if (substr($text, -1) !== '.') {
                $text .= '.';
            }
            if ($underlyingException !== $exception && $exception instanceof ExecutionFailedException) {
                $processorPath = $exception->getProcessorId();
                $e = $exception->getPrevious();
                while (null !== $e && $e instanceof ExecutionFailedException) {
                    $processorPath .= '->' . $e->getProcessorId();
                    $e = $e->getPrevious();
                }
                $text .= ' Processor: ' . $processorPath . '.';
            }
        }

        return $text;
    }

    /**
     * @param \Exception $exception
     *
     * @return bool
     */
    protected function isSafeException(\Exception $exception)
    {
        foreach ($this->safeExceptions as $class) {
            if (is_a($exception, $class)) {
                return true;
            }
        }

        return false;
    }

    /**
     * @param \Exception $exception
     *
     * @return string
     */
    protected function getSafeExceptionText(\Exception $exception)
    {
        if ($exception instanceof ForbiddenException) {
            return $exception->getReason();
        }

        return $exception->getMessage();
    }
}
