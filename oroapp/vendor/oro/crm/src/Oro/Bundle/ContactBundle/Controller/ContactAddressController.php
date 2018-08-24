<?php

namespace Oro\Bundle\ContactBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

use Oro\Bundle\SecurityBundle\Annotation\AclAncestor;
use Oro\Bundle\ContactBundle\Entity\ContactAddress;
use Oro\Bundle\ContactBundle\Entity\Contact;

class ContactAddressController extends Controller
{
    /**
     * @Route("/address-book/{id}", name="oro_contact_address_book", requirements={"id"="\d+"})
     * @Template
     * @AclAncestor("oro_contact_view")
     */
    public function addressBookAction(Contact $contact)
    {
        return array(
            'entity' => $contact,
            'address_edit_acl_resource' => 'oro_contact_update'
        );
    }

    /**
     * @Route(
     *      "/{contactId}/address-create",
     *      name="oro_contact_address_create",
     *      requirements={"contactId"="\d+"}
     * )
     * @Template("OroContactBundle:ContactAddress:update.html.twig")
     * @AclAncestor("oro_contact_create")
     * @ParamConverter("contact", options={"id" = "contactId"})
     */
    public function createAction(Contact $contact)
    {
        return $this->update($contact, new ContactAddress());
    }

    /**
     * @Route(
     *      "/{contactId}/address-update/{id}",
     *      name="oro_contact_address_update",
     *      requirements={"contactId"="\d+","id"="\d+"},defaults={"id"=0}
     * )
     * @Template
     * @AclAncestor("oro_contact_update")
     * @ParamConverter("contact", options={"id" = "contactId"})
     */
    public function updateAction(Contact $contact, ContactAddress $address)
    {
        return $this->update($contact, $address);
    }

    /**
     * @param Contact $contact
     * @param ContactAddress $address
     * @return array
     * @throws BadRequestHttpException
     */
    protected function update(Contact $contact, ContactAddress $address)
    {
        $responseData = array(
            'saved' => false,
            'contact' => $contact
        );

        if ($this->getRequest()->getMethod() == 'GET' && !$address->getId()) {
            $address->setFirstName($contact->getFirstName());
            $address->setLastName($contact->getLastName());
            if (!$contact->getAddresses()->count()) {
                $address->setPrimary(true);
            }
        }

        if ($address->getOwner() && $address->getOwner()->getId() != $contact->getId()) {
            throw new BadRequestHttpException('Address must belong to contact');
        } elseif (!$address->getOwner()) {
            $contact->addAddress($address);
        }

        // Update contact's modification date when an address is changed
        $contact->setUpdatedAt(new \DateTime('now', new \DateTimeZone('UTC')));

        if ($this->get('oro_contact.form.handler.contact_address')->process($address)) {
            $this->getDoctrine()->getManager()->flush();
            $responseData['entity'] = $address;
            $responseData['saved'] = true;
        }

        $responseData['form'] = $this->get('oro_contact.contact_address.form')->createView();
        return $responseData;
    }
}
