<?php

namespace Oro\Bundle\InstallerBundle\Process\Step;

use Sylius\Bundle\FlowBundle\Process\Context\ProcessContextInterface;

class FinalStep extends AbstractStep
{
    public function displayAction(ProcessContextInterface $context)
    {
        $this->get('session.flash_bag')->clear();

        $this->complete();

        return $this->render('OroInstallerBundle:Process/Step:final.html.twig');
    }
}
