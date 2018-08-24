<?php

namespace Oro\Bundle\CustomerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table("oro_cus_usr_adr_to_adr_type",
 *      uniqueConstraints={
 *          @ORM\UniqueConstraint(name="oro_customer_user_adr_id_type_name_idx", columns={
 *              "customer_user_address_id",
 *              "type_name"
 *          })
 *      }
 * )
 * @ORM\Entity
 */
class CustomerUserAddressToAddressType extends AbstractAddressToAddressType
{
    /**
     * @var CustomerUserAddress
     *
     * @ORM\ManyToOne(
     *      targetEntity="Oro\Bundle\CustomerBundle\Entity\CustomerUserAddress",
     *      inversedBy="types"
     * )
     * @ORM\JoinColumn(name="customer_user_address_id", referencedColumnName="id", onDelete="CASCADE")
     */
    protected $address;
}
