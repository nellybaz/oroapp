<?php

namespace Oro\Bundle\ProductBundle\Event;

use Symfony\Component\EventDispatcher\Event;

use Oro\Bundle\ProductBundle\Model\QuickAddRowCollection;

class QuickAddRowsCollectionReadyEvent extends Event
{
    const NAME = 'oro_product.quick_add_rows_collection_ready';

    /**
     * @var QuickAddRowCollection
     */
    private $collection;

    /**
     * @param QuickAddRowCollection $collection
     */
    public function __construct(QuickAddRowCollection $collection)
    {
        $this->collection = $collection;
    }

    /**
     * @return QuickAddRowCollection
     */
    public function getCollection()
    {
        return $this->collection;
    }
}
