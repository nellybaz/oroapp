<?php

namespace Oro\Bundle\PaymentBundle\Event;

use Symfony\Component\HttpFoundation\Response;

abstract class AbstractCallbackEvent extends AbstractTransactionEvent
{
    /** @var array */
    protected $data;

    /** @var Response */
    protected $response;

    /**
     * @param array $data
     */
    public function __construct(array $data = [])
    {
        $this->data = $data;

        $this->response = Response::create(null, Response::HTTP_FORBIDDEN);
    }

    /**
     * @return array
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @return Response
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * @param Response $response
     */
    public function setResponse(Response $response)
    {
        $this->response = $response;
    }

    /**
     * @return mixed
     */
    abstract public function getEventName();

    public function markSuccessful()
    {
        $this->response->setStatusCode(Response::HTTP_OK);
    }

    public function markFailed()
    {
        $this->response->setStatusCode(Response::HTTP_FORBIDDEN);

        $this->stopPropagation();
    }
}
