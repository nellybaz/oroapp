<?php

namespace Oro\Bundle\ReminderBundle\Controller\Api\Rest;

use FOS\RestBundle\Controller\Annotations\NamePrefix;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Routing\ClassResourceInterface;
use FOS\RestBundle\Util\Codes;

use Oro\Bundle\ReminderBundle\Entity\Reminder;

/**
 * @NamePrefix("oro_api_")
 */
class ReminderController extends FOSRestController implements ClassResourceInterface
{
    /**
     * Update reminder, set shown status
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function postShownAction()
    {
        $user = $this->getUser();

        if ($user == null) {
            return $this->handleView($this->view('User not logged in.', Codes::HTTP_UNAUTHORIZED));
        }

        $userId = $user->getId();

        $reminders = $this->getReminderRepository()->findReminders($this->getRequest()->get('ids', []));

        /**
         * @var Reminder $reminder
         */
        foreach ($reminders as $reminder) {
            if ($reminder->getState() == Reminder::STATE_REQUESTED &&
                $reminder->getRecipient()->getId() == $userId
            ) {
                $reminder->setState(Reminder::STATE_SENT);
            }
        }

        $this->getDoctrine()->getManager()->flush();

        return $this->handleView($this->view('', Codes::HTTP_OK));
    }

    /**
     * @return \Oro\Bundle\ReminderBundle\Entity\Repository\ReminderRepository
     */
    protected function getReminderRepository()
    {
        return $this->getDoctrine()->getRepository('OroReminderBundle:Reminder');
    }
}
