<?php

namespace Oro\Bundle\RFPBundle\Api\Processor;

use Oro\Bundle\ApiBundle\Processor\FormContext;
use Oro\Component\ChainProcessor\ContextInterface;
use Oro\Component\ChainProcessor\ProcessorInterface;

class UpdateRequestDataForRequestEntity implements ProcessorInterface
{
    /**
     * {@inheritdoc}
     */
    public function process(ContextInterface $context)
    {
        /** @var FormContext $context */

        $requestData = $context->getRequestData();

        if (!$requestData) {
            return;
        }

        $context->setRequestData($this->processRequestData($requestData));
    }

    /**
     * @param array $requestData
     * @return array
     */
    protected function processRequestData(array $requestData)
    {
        foreach ($this->getDisabledAttribute() as $attribute) {
            if (array_key_exists($attribute, $requestData)) {
                unset($requestData[$attribute]);
            }
        }

        return $requestData;
    }

    /**
     * @return array
     */
    protected function getDisabledAttribute()
    {
        return [
            'customer_status',
            'internal_status',
            'createdAt',
            'updatedAt',
            'requestAdditionalNotes'
        ];
    }
}
