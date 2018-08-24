<?php

namespace Oro\Bundle\ApiBundle\Processor;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormInterface;

use Oro\Bundle\ApiBundle\Collection\IncludedEntityCollection;

interface FormContext extends ContextInterface
{
    /**
     * Returns request data.
     *
     * @return array
     */
    public function getRequestData();

    /**
     * Sets request data.
     *
     * @param array $requestData
     */
    public function setRequestData(array $requestData);

    /**
     * Returns additional data included into the request.
     *
     * @return array
     */
    public function getIncludedData();

    /**
     * Sets additional data included into the request.
     *
     * @param array $includedData
     */
    public function setIncludedData(array $includedData);

    /**
     * Returns a collection contains additional entities included into the request.
     *
     * @return IncludedEntityCollection|null
     */
    public function getIncludedEntities();

    /**
     * Sets a collection contains additional entities included into the request.
     *
     * @param IncludedEntityCollection|null $includedEntities
     */
    public function setIncludedEntities(IncludedEntityCollection $includedEntities = null);

    /**
     * Checks whether the form builder exists.
     *
     * @return bool
     */
    public function hasFormBuilder();

    /**
     * Gets the form builder.
     *
     * @return FormBuilderInterface|null
     */
    public function getFormBuilder();

    /**
     * Sets the form builder.
     *
     * @param FormBuilderInterface|null $formBuilder
     */
    public function setFormBuilder(FormBuilderInterface $formBuilder = null);

    /**
     * Checks whether the form exists.
     *
     * @return bool
     */
    public function hasForm();

    /**
     * Gets the form.
     *
     * @return FormInterface|null
     */
    public function getForm();

    /**
     * Sets the form.
     *
     * @param FormInterface|null $form
     */
    public function setForm(FormInterface $form = null);
}
