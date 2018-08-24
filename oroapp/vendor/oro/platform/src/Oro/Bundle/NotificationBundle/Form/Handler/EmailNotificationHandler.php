<?php

namespace Oro\Bundle\NotificationBundle\Form\Handler;

use Doctrine\Common\Persistence\ManagerRegistry;

use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\Request;

use Oro\Bundle\FormBundle\Form\Handler\FormHandlerInterface;
use Oro\Bundle\NotificationBundle\Entity\EmailNotification;

class EmailNotificationHandler implements FormHandlerInterface
{
    const SUBMIT_MARKER = 'formSubmitMarker';

    /** @var ManagerRegistry */
    protected $registry;

    /**
     * @param ManagerRegistry $registry
     */
    public function __construct(ManagerRegistry $registry)
    {
        $this->registry = $registry;
    }

    /**
     * {@inheritdoc}
     */
    public function process($data, FormInterface $form, Request $request)
    {
        if (!$data instanceof EmailNotification) {
            throw new \InvalidArgumentException('Argument data should be instance of EmailNotification entity');
        }

        $form->setData($data);

        if ($this->isApplicable($request)) {
            $form->submit($request);

            if ($form->isValid()) {
                $manager = $this->registry->getManagerForClass('OroNotificationBundle:EmailNotification');
                $manager->persist($data);
                $manager->flush();

                return true;
            }
        }

        return false;
    }

    /**
     * @param Request $request
     * @return bool
     */
    private function isApplicable(Request $request)
    {
        $methods = [Request::METHOD_POST, Request::METHOD_PUT];

        return in_array($request->getMethod(), $methods, true) && $request->get(self::SUBMIT_MARKER, false);
    }
}
