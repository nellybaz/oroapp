<?php

namespace Oro\Bundle\ApiBundle\Processor\Update\JsonApi;

use Oro\Bundle\ApiBundle\Processor\Shared\JsonApi\ValidateRequestData as BaseProcessor;
use Oro\Bundle\ApiBundle\Request\JsonApi\JsonApiDocumentBuilder as JsonApiDoc;

/**
 * Validates that the request data contains valid JSON.API object.
 */
class ValidateRequestData extends BaseProcessor
{
    /**
     * {@inheritdoc}
     */
    protected function validatePrimaryDataObject(array $data, $pointer)
    {
        if ($this->validateResourceObject($data, $pointer)) {
            $this->validatePrimaryDataObjectId($data, $pointer);
            $this->validatePrimaryDataObjectType($data, $pointer);
            $this->validateAttributesOrRelationshipsExist($data, $pointer);
        }
    }

    /**
     * @param array  $data
     * @param string $pointer
     *
     * @return bool
     */
    protected function validatePrimaryDataObjectId(array $data, $pointer)
    {
        // do matching only if the identifier is not normalized yet
        $id = $this->context->getId();
        if (is_string($id) && $id !== $data[JsonApiDoc::ID]) {
            $this->addConflictError(
                $this->buildPointer($pointer, JsonApiDoc::ID),
                sprintf(
                    'The \'%1$s\' property of the primary data object'
                    . ' should match \'%1$s\' parameter of the query sting',
                    JsonApiDoc::ID
                )
            );

            return false;
        }

        return true;
    }

    /**
     * @param array  $data
     * @param string $pointer
     */
    protected function validateAttributesOrRelationshipsExist(array $data, $pointer)
    {
        if (!array_key_exists(JsonApiDoc::ATTRIBUTES, $data)
            && !array_key_exists(JsonApiDoc::RELATIONSHIPS, $data)
        ) {
            $this->addError(
                $pointer,
                sprintf(
                    'The primary data object should contain \'%s\' or \'%s\' block',
                    JsonApiDoc::ATTRIBUTES,
                    JsonApiDoc::RELATIONSHIPS
                )
            );
        }
    }
}
