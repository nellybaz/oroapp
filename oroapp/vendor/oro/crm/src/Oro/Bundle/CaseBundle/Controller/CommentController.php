<?php

namespace Oro\Bundle\CaseBundle\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Oro\Bundle\SecurityBundle\Annotation\AclAncestor;
use Oro\Bundle\UserBundle\Entity\User;
use Oro\Bundle\CaseBundle\Entity\CaseEntity;
use Oro\Bundle\CaseBundle\Entity\CaseComment;

class CommentController extends Controller
{
    /**
     * @Route(
     *      "/{id}/comment/list.{_format}",
     *      name="oro_case_comment_list",
     *      requirements={"id"="\d+", "_format"="json"}, defaults={"_format"="json"}
     * )
     * @AclAncestor("oro_case_comment_view")
     */
    public function commentsListAction(CaseEntity $case)
    {
        $order = $this->getRequest()->get('sorting', 'DESC');
        $comments = $this->get('oro_case.manager')->getCaseComments($case, $order);

        return new JsonResponse(
            $this->get('oro_case.view_factory')->createCommentViewList($comments)
        );
    }

    /**
     * @Route(
     *      "/{id}/widget/comment",
     *      name="oro_case_widget_comments",
     *      requirements={"id"="\d+"}
     * )
     * @AclAncestor("oro_case_comment_view")
     * @Template("OroCaseBundle:Comment:comments.html.twig")
     */
    public function commentsWidgetAction(CaseEntity $case)
    {
        return [
            'case' => $case
        ];
    }

    /**
     * @Route(
     *      "/{caseId}/comment/create",
     *      name="oro_case_comment_create",
     *      requirements={"caseId"="\d+"}
     * )
     * @ParamConverter("case", options={"id"="caseId"})
     * @AclAncestor("oro_case_comment_create")
     * @Template("OroCaseBundle:Comment:update.html.twig")
     */
    public function createAction(CaseEntity $case)
    {
        $comment = $this->get('oro_case.manager')->createComment($case);
        $comment->setOwner($this->getUser());

        $formAction = $this->get('oro_entity.routing_helper')
            ->generateUrlByRequest('oro_case_comment_create', $this->getRequest(), ['caseId' => $case->getId()]);

        return $this->update($comment, $formAction);
    }

    /**
     * @Route(
     *      "/comment/{id}/update",
     *      name="oro_case_comment_update",
     *      requirements={"id"="\d+"}
     * )
     * @AclAncestor("oro_case_comment_update")
     * @Template
     */
    public function updateAction(CaseComment $comment)
    {
        $formAction = $this->get('router')->generate('oro_case_comment_update', ['id' => $comment->getId()]);

        $user = $this->getUser();
        if ($user instanceof User) {
            $comment->setUpdatedBy($user);
        }

        return $this->update($comment, $formAction);
    }

    /**
     * @param CaseComment $comment
     * @param string $formAction
     * @return array
     */
    protected function update(CaseComment $comment, $formAction)
    {
        $saved = $this->get('oro_case.form.handler.comment')->process($comment);

        return [
            'saved'      => $saved,
            'entity'     => $comment,
            'data'       => $saved ? $this->get('oro_case.view_factory')->createCommentView($comment) : null,
            'form'       => $this->get('oro_case.form.comment')->createView(),
            'formAction' => $formAction,
        ];
    }
}
