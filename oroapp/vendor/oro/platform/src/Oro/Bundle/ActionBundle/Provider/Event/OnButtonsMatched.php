<?php

namespace Oro\Bundle\ActionBundle\Provider\Event;

use Symfony\Component\EventDispatcher\Event;

use Oro\Bundle\ActionBundle\Button\ButtonsCollection;

class OnButtonsMatched extends Event
{
    const NAME = 'oro_action.button_provider.on_buttons_matched';

    /** @var ButtonsCollection */
    protected $buttons;

    /**
     * @param ButtonsCollection $buttons
     */
    public function __construct(ButtonsCollection $buttons)
    {
        $this->buttons = $buttons;
    }

    /**
     * @return ButtonsCollection
     */
    public function getButtons()
    {
        return $this->buttons;
    }
}
