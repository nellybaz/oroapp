<?php

namespace Oro\Bundle\AccountBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Oro\Bundle\SecurityBundle\Annotation\Acl;
use Oro\Bundle\SecurityBundle\Annotation\AclAncestor;
use Oro\Bundle\SoapBundle\Entity\Manager\ApiEntityManager;
use Oro\Bundle\AccountBundle\Entity\Account;
use Oro\Bundle\ChannelBundle\Entity\Channel;

class AccountController extends Controller
{
    /**
     * @Route("/view/{id}", name="oro_account_view", requirements={"id"="\d+"})
     * @Acl(
     *      id="oro_account_view",
     *      type="entity",
     *      permission="VIEW",
     *      class="OroAccountBundle:Account"
     * )
     * @Template()
     */
    public function viewAction(Account $account)
    {
        $channels = $this->getDoctrine()
            ->getRepository('OroChannelBundle:Channel')
            ->findBy([], ['channelType' => 'ASC', 'name' => 'ASC']);

        $customers = $this->getDoctrine()
            ->getRepository('OroMagentoBundle:Customer')
            ->findBy(['account' => $account->getId()]);

        return [
            'entity' => $account,
            'channels' => $channels,
            'customers' => $customers,
        ];
    }

    /**
     * Create account form
     *
     * @Route("/create", name="oro_account_create")
     * @Acl(
     *      id="oro_account_create",
     *      type="entity",
     *      permission="CREATE",
     *      class="OroAccountBundle:Account"
     * )
     * @Template("OroAccountBundle:Account:update.html.twig")
     */
    public function createAction()
    {
        return $this->update();
    }

    /**
     * Edit user form
     *
     * @Route("/update/{id}", name="oro_account_update", requirements={"id"="\d+"})
     * @Acl(
     *      id="oro_account_update",
     *      type="entity",
     *      permission="EDIT",
     *      class="OroAccountBundle:Account"
     * )
     * @Template()
     */
    public function updateAction(Account $entity)
    {
        return $this->update($entity);
    }

    /**
     * @Route(
     *      "/{_format}",
     *      name="oro_account_index",
     *      requirements={"_format"="html|json"},
     *      defaults={"_format" = "html"}
     * )
     * @AclAncestor("oro_account_view")
     * @Template
     */
    public function indexAction()
    {
        return [
            'entity_class' => $this->container->getParameter('oro_account.entity.account.class')
        ];
    }

    /**
     * @return ApiEntityManager
     */
    protected function getManager()
    {
        return $this->get('oro_account.account.manager.api');
    }

    /**
     * @param Account $entity
     * @return array
     */
    protected function update(Account $entity = null)
    {
        if (!$entity) {
            $entity = $this->getManager()->createEntity();
        }

        return $this->get('oro_form.model.update_handler')->update(
            $entity,
            $this->get('oro_account.form.account'),
            $this->get('translator')->trans('oro.account.controller.account.saved.message'),
            $this->get('oro_account.form.handler.account')
        );
    }

    /**
     * @Route(
     *      "/widget/contacts/{id}",
     *      name="oro_account_widget_contacts_info",
     *      requirements={"id"="\d+"},
     *      defaults={"id"=0}
     * )
     * @AclAncestor("oro_contact_view")
     * @Template()
     */
    public function contactsInfoAction(Account $account = null)
    {
        return [
            'account' => $account
        ];
    }

    /**
     * @Route("/widget/info/{id}", name="oro_account_widget_info", requirements={"id"="\d+"})
     * @AclAncestor("oro_account_view")
     * @Template()
     */
    public function infoAction(Account $account)
    {
        return [
            'account' => $account
        ];
    }
}
