<?php

namespace Oro\Component\WebCatalog;

use Oro\Component\Routing\RouteData;
use Oro\Component\WebCatalog\Entity\ContentVariantInterface;

interface ContentVariantTypeInterface
{
    /**
     * Get type name.
     *
     * @return string
     */
    public function getName();

    /**
     * Get title.
     *
     * Rendered on "Add ..." variant button
     *
     * @return string
     */
    public function getTitle();

    /**
     * Get form type class for supported type.
     *
     * @return string
     */
    public function getFormType();

    /**
     * Is current variant allowed to be added.
     *
     * Here some ACL checks may be performed
     *
     * @return bool
     */
    public function isAllowed();

    /**
     * Get routing data based on configured variant.
     *
     * @param ContentVariantInterface $contentVariant
     * @return RouteData
     */
    public function getRouteData(ContentVariantInterface $contentVariant);
}
