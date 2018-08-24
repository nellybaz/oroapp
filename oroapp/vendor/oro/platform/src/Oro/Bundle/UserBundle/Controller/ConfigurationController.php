<?php

namespace Oro\Bundle\UserBundle\Controller;

use Oro\Bundle\ConfigBundle\Config\ConfigManager;
use Oro\Bundle\SecurityBundle\Annotation\Acl;
use Oro\Bundle\SecurityBundle\Annotation\AclAncestor;
use Oro\Bundle\UserBundle\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ConfigurationController extends Controller
{
    /**
     * @Route(
     *      "/user/{id}/{activeGroup}/{activeSubGroup}",
     *      name="oro_user_config",
     *      requirements={"id"="\d+"},
     *      defaults={"activeGroup" = null, "activeSubGroup" = null}
     * )
     * @Template()
     * @Acl(
     *      id="oro_user_user_config",
     *      type="entity",
     *      class="OroUserBundle:User",
     *      permission="CONFIGURE"
     * )
     *
     * @param User $entity
     * @param null $activeGroup
     * @param null $activeSubGroup
     * @return array
     */
    public function userConfigAction(User $entity, $activeGroup = null, $activeSubGroup = null)
    {
        $result = $this->config($entity, $activeGroup, $activeSubGroup);
        $result['routeName'] = 'oro_user_config';
        $result['routeParameters'] = ['id' => $entity->getId()];

        return $result;
    }

    /**
     * @Route("/user/profile/{activeGroup}/{activeSubGroup}", name="oro_user_profile_configuration")
     * @Template("OroUserBundle:Configuration:userConfig.html.twig")
     * @AclAncestor("update_own_configuration")
     *
     * @param null $activeGroup
     * @param null $activeSubGroup
     * @return array
     */
    public function userProfileConfigAction($activeGroup = null, $activeSubGroup = null)
    {
        $result = $this->config($this->getUser(), $activeGroup, $activeSubGroup);
        $result['routeName'] = 'oro_user_profile_configuration';
        $result['routeParameters'] = [];

        return $result;
    }

    /**
     * @param User $entity
     * @param string|null $activeGroup
     * @param string|null $activeSubGroup
     * @return array
     */
    protected function config(User $entity, $activeGroup = null, $activeSubGroup = null)
    {
        $provider = $this->get('oro_user.provider.user_config_form_provider');
        /** @var ConfigManager $manager */
        $manager = $this->get('oro_config.user');
        $prevScopeId = $manager->getScopeId();
        //update scope id to match currently configured user
        $manager->setScopeIdFromEntity($entity);

        list($activeGroup, $activeSubGroup) = $provider->chooseActiveGroups($activeGroup, $activeSubGroup);

        $jsTree = $provider->getJsTree();
        $form = false;

        if ($activeSubGroup !== null) {
            $form = $provider->getForm($activeSubGroup);

            if ($this->get('oro_config.form.handler.config')
                ->setConfigManager($manager)
                ->process($form, $this->getRequest())
            ) {
                $this->get('session')->getFlashBag()->add(
                    'success',
                    $this->get('translator')->trans('oro.config.controller.config.saved.message')
                );

                // outdate content tags, it's only special case for generation that are not covered by NavigationBundle
                $taggableData = ['name' => 'user_configuration', 'params' => [$activeGroup, $activeSubGroup]];
                $sender       = $this->get('oro_sync.content.topic_sender');

                $sender->send($sender->getGenerator()->generate($taggableData));
            }
        }
        //revert previous scope id
        $manager->setScopeId($prevScopeId);

        return [
            'entity'         => $entity,
            'data'           => $jsTree,
            'form'           => $form ? $form->createView() : null,
            'activeGroup'    => $activeGroup,
            'activeSubGroup' => $activeSubGroup,
            'scopeInfo'      => $manager->getScopeInfo()
        ];
    }
}
