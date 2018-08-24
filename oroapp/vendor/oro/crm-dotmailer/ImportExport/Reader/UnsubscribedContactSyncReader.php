<?php

namespace Oro\Bundle\DotmailerBundle\ImportExport\Reader;

use Guzzle\Iterator\AppendIterator;

use Oro\Bundle\DotmailerBundle\Provider\Transport\Iterator\OutOfSyncMarketingListItemIterator;

class UnsubscribedContactSyncReader extends AbstractExportReader
{
    protected function initializeReader()
    {
        $this->logger->info('Sync Marketing List Item State');

        $iterator = new AppendIterator();
        $addressBooks = $this->getAddressBooksToSync();

        foreach ($addressBooks as $addressBook) {
            $iterator->append(
                new OutOfSyncMarketingListItemIterator(
                    $addressBook,
                    $this->marketingListItemsQueryBuilderProvider,
                    $this->getContext()
                )
            );
        }

        $this->setSourceIterator($iterator);
    }
}
