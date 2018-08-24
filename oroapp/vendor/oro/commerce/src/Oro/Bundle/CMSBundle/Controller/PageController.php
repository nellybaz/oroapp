<?php

namespace Oro\Bundle\CMSBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Oro\Bundle\SecurityBundle\Annotation\AclAncestor;
use Oro\Bundle\SecurityBundle\Annotation\Acl;
use Oro\Bundle\CMSBundle\Entity\Page;
use Oro\Bundle\CMSBundle\Form\Type\PageType;

class PageController extends Controller
{
    /**
     * @Route("/view/{id}", name="oro_cms_page_view", requirements={"id"="\d+"})
     * @Template
     * @Acl(
     *      id="oro_cms_page_view",
     *      type="entity",
     *      class="OroCMSBundle:Page",
     *      permission="VIEW"
     * )
     *
     * @param Page $page
     * @return array
     */
    public function viewAction(Page $page)
    {
        return [
            'entity' => $page
        ];
    }

    /**
     * @Route("/info/{id}", name="oro_cms_page_info", requirements={"id"="\d+"})
     * @Template
     * @AclAncestor("oro_cms_page_view")
     *
     * @param Page $page
     * @return array
     */
    public function infoAction(Page $page)
    {
        return [
            'entity' => $page
        ];
    }

    /**
     * @Route("/", name="oro_cms_page_index")
     * @Template
     * @AclAncestor("oro_cms_page_view")
     *
     * @return array
     */
    public function indexAction()
    {
        return [
            'entity_class' => Page::class
        ];
    }

    /**
     * @Route("/create", name="oro_cms_page_create")
     * @Template("OroCMSBundle:Page:update.html.twig")
     *
     * @Acl(
     *      id="oro_cms_page_create",
     *      type="entity",
     *      class="OroCMSBundle:Page",
     *      permission="CREATE"
     * )
     *
     * @return array|RedirectResponse
     */
    public function createAction()
    {
        $page = new Page();
        return $this->update($page);
    }

    /**
     * @Route("/update/{id}", name="oro_cms_page_update", requirements={"id"="\d+"})
     * @Template
     * @Acl(
     *      id="oro_cms_page_update",
     *      type="entity",
     *      class="OroCMSBundle:Page",
     *      permission="EDIT"
     * )
     * @param Page $page
     * @return array|RedirectResponse
     */
    public function updateAction(Page $page)
    {
        return $this->update($page);
    }

    /**
     * @param Page $page
     * @return array|RedirectResponse
     */
    protected function update(Page $page)
    {
        return $this->get('oro_form.model.update_handler')->handleUpdate(
            $page,
            $this->createForm(PageType::NAME, $page),
            function (Page $page) {
                return [
                    'route' => 'oro_cms_page_update',
                    'parameters' => ['id' => $page->getId()]
                ];
            },
            function (Page $page) {
                return [
                    'route' => 'oro_cms_page_view',
                    'parameters' => ['id' => $page->getId()]
                ];
            },
            $this->get('translator')->trans('oro.cms.controller.page.saved.message')
        );
    }

    /**
     * @Route("/get-changed-urls/{id}", name="oro_cms_page_get_changed_urls", requirements={"id"="\d+"})
     *
     * @AclAncestor("oro_cms_page_update")
     *
     * @param Page $page
     * @return JsonResponse
     */
    public function getChangedSlugsAction(Page $page)
    {
        return new JsonResponse($this->get('oro_redirect.helper.changed_slugs_helper')
            ->getChangedSlugsData($page, PageType::class));
    }
}
