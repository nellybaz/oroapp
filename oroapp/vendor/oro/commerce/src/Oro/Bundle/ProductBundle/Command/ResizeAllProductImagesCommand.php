<?php

namespace Oro\Bundle\ProductBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

use Oro\Bundle\ProductBundle\Event\ProductImageResizeEvent;
use Oro\Bundle\BatchBundle\ORM\Query\BufferedIdentityQueryResultIterator;

class ResizeAllProductImagesCommand extends ContainerAwareCommand
{
    const COMMAND_NAME = 'product:image:resize-all';
    const OPTION_FORCE = 'force';
    const BATCH_SIZE = 1000;

    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this
            ->setName(self::COMMAND_NAME)
            ->addOption(self::OPTION_FORCE, null, null, 'Overwrite existing images')
            ->setDescription(<<<DESC
Resize All Product Images (the command only adds jobs to a queue, ensure the oro:message-queue:consume command 
is running to get images resized)
DESC
            );
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $iterator = $this->getProductImagesIterator();
        $entitiesProcessed = 0;
        $forceOption = $this->getForceOption($input);

        foreach ($iterator as $productImage) {
            $this->getEventDispatcher()->dispatch(
                ProductImageResizeEvent::NAME,
                new ProductImageResizeEvent($productImage['id'], $forceOption)
            );
            $entitiesProcessed++;
        }

        $output->writeln(sprintf('%d product image(s) queued for resize.', $entitiesProcessed));
    }

    /**
     * @return EventDispatcherInterface
     */
    protected function getEventDispatcher()
    {
        return $this->getContainer()->get('event_dispatcher');
    }

    /**
     * @return BufferedIdentityQueryResultIterator
     */
    protected function getProductImagesIterator()
    {
        $doctrineHelper = $this->getContainer()->get('oro_entity.doctrine_helper');
        $className = $this->getContainer()->getParameter('oro_product.entity.product_image.class');
        $queryBuilder =  $doctrineHelper
            ->getEntityRepositoryForClass($className)
            ->createQueryBuilder('productImage');

        $identifierName = $doctrineHelper->getSingleEntityIdentifierFieldName($className);
        $queryBuilder->select("productImage.$identifierName as id");

        $iterator = new BufferedIdentityQueryResultIterator($queryBuilder);
        $iterator->setBufferSize(self::BATCH_SIZE);

        return $iterator;
    }

    /**
     * @param InputInterface $input
     * @return bool
     */
    protected function getForceOption(InputInterface $input)
    {
        return (bool) $input->getOption(self::OPTION_FORCE);
    }
}
