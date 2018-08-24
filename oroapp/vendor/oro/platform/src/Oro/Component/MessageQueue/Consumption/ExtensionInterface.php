<?php
namespace Oro\Component\MessageQueue\Consumption;

interface ExtensionInterface
{
    /**
     * Executed only once at the very beginning of the consumption.
     * At this stage the context does not contain processor, consumer and queue.
     *
     * @param Context $context
     */
    public function onStart(Context $context);
    
    /**
     * Executed at every new cycle before we asked a broker for a new message.
     * At this stage the context already contains processor, consumer and queue.
     * The consumption could be interrupted at this step.
     *
     * @param Context $context
     */
    public function onBeforeReceive(Context $context);

    /**
     * Executed when a new message is received from a broker but before it was passed to processor
     * The context contains a message.
     * The extension may set a status.
     * The consumption could be interrupted at this step but it will done only after the message is processed
     *
     * @param Context $context
     */
    public function onPreReceived(Context $context);

    /**
     * Executed when a message is processed by a processor.
     * The context contains a message status and could be changed
     * The consumption could be interrupted at this step but it will done only after the message is processed
     *
     * @param Context $context
     */
    public function onPostReceived(Context $context);

    /**
     * Called each time at the end of the cycle if nothing was done
     *
     * @param Context $context
     */
    public function onIdle(Context $context);

    /**
     * Called when the consumption was interrupted by an extension or exception
     * In case of exception it will be present in the context
     *
     * @param Context $context
     */
    public function onInterrupted(Context $context);
}
