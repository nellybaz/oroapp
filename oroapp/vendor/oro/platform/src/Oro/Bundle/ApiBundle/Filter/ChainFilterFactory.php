<?php

namespace Oro\Bundle\ApiBundle\Filter;

class ChainFilterFactory implements FilterFactoryInterface
{
    /** @var FilterFactoryInterface[] */
    protected $factories = [];

    /**
     * Registers an expression factory in the chain.
     *
     * @param FilterFactoryInterface $filterFactory
     */
    public function addFilterFactory(FilterFactoryInterface $filterFactory)
    {
        $this->factories[] = $filterFactory;
    }

    /**
     * {@inheritdoc}
     */
    public function createFilter($filterType, array $options = [])
    {
        foreach ($this->factories as $factory) {
            $filter = $factory->createFilter($filterType, $options);
            if (null !== $filter) {
                return $filter;
            }
        }

        return null;
    }
}
