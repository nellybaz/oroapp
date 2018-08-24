<?php

namespace Oro\Bundle\EmailBundle\Datagrid\Extension\MassAction;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\QueryBuilder;

use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Symfony\Component\Translation\TranslatorInterface;

use Oro\Bundle\DataGridBundle\Extension\MassAction\MassActionResponse;
use Oro\Bundle\DataGridBundle\Extension\MassAction\MassActionHandlerInterface;
use Oro\Bundle\DataGridBundle\Extension\MassAction\MassActionHandlerArgs;
use Oro\Bundle\EmailBundle\Entity\EmailUser;
use Oro\Bundle\EmailBundle\Entity\Manager\EmailManager;
use Oro\Bundle\SecurityBundle\Authentication\TokenAccessorInterface;

class MarkMassActionHandler implements MassActionHandlerInterface
{
    const MARK_READ = 1;
    const MARK_UNREAD = 2;
    const FLUSH_BATCH_SIZE = 100;

    /** @var EntityManager */
    protected $entityManager;

    /** @var TranslatorInterface */
    protected $translator;

    /** @var AuthorizationCheckerInterface */
    protected $authorizationChecker;

    /** @var TokenAccessorInterface */
    protected $tokenAccessor;

    /** @var array */
    protected $needToProcessThreadIds = [];

    /** @var string */
    protected $responseMessage = 'oro.email.datagrid.mark.success_message';

    /** @var EmailManager */
    protected $emailManager;

    /**
     * @param EntityManager                 $entityManager
     * @param TranslatorInterface           $translator
     * @param AuthorizationCheckerInterface $authorizationChecker
     * @param TokenAccessorInterface        $tokenAccessor
     * @param EmailManager                  $emailManager
     */
    public function __construct(
        EntityManager $entityManager,
        TranslatorInterface $translator,
        AuthorizationCheckerInterface $authorizationChecker,
        TokenAccessorInterface $tokenAccessor,
        EmailManager $emailManager
    ) {
        $this->entityManager = $entityManager;
        $this->translator = $translator;
        $this->authorizationChecker = $authorizationChecker;
        $this->tokenAccessor = $tokenAccessor;
        $this->emailManager = $emailManager;
    }

    /**
     * {@inheritDoc}
     */
    public function handle(MassActionHandlerArgs $args)
    {
        $data = $args->getData();

        $massAction = $args->getMassAction();
        $options = $massAction->getOptions()->toArray();
        $this->entityManager->beginTransaction();
        try {
            set_time_limit(0);
            $iteration = $this->handleHeadEmails($options, $data);
            $this->handleThreadEmails($options);
            $this->entityManager->commit();
        } catch (\Exception $e) {
            $this->entityManager->rollback();
            throw $e;
        }

        return $this->getResponse($args, $iteration);
    }

    /**
     * @param array $options
     * @param array $data
     * @return int
     */
    protected function handleHeadEmails($options, $data)
    {
        $markType = $options['mark_type'];
        $folderType = null;
        $isAllSelected = $this->isAllSelected($data);
        $iteration = 0;
        $emailUserIds = [];

        if (array_key_exists('values', $data) && !empty($data['values'])) {
            $emailUserIds = explode(',', $data['values']);
        }

        if ($emailUserIds || $isAllSelected) {
            if (isset($data['filters']['folder']['value'])) {
                $folderType = $data['filters']['folder']['value'];
            }

            $queryBuilder = $this
                ->entityManager
                ->getRepository('OroEmailBundle:EmailUser')
                ->getEmailUserBuilderForMassAction(
                    $emailUserIds,
                    $this->tokenAccessor->getUser(),
                    $folderType,
                    $isAllSelected,
                    $this->tokenAccessor->getOrganization()
                );
            $iteration = $this->process($queryBuilder, $markType, $iteration);
        }

        return $iteration;
    }

    /**
     * @param array $options
     */
    protected function handleThreadEmails($options)
    {
        $iteration = 0;
        $markType = $options['mark_type'];

        if (!$this->needToProcessThreadIds) {
            return;
        }

        $queryBuilder = $this
            ->entityManager
            ->getRepository('OroEmailBundle:EmailUser')
            ->getEmailUserByThreadId($this->needToProcessThreadIds, $this->tokenAccessor->getUser());

        $result = $queryBuilder->getQuery()->iterate();
        foreach ($result as $entity) {
            $entity = $entity[0];

            if ($this->authorizationChecker->isGranted('EDIT', $entity)) {
                $this->emailManager->setEmailUserSeen($entity, $markType === self::MARK_READ);
            }
            $this->entityManager->persist($entity);

            if (($iteration % self::FLUSH_BATCH_SIZE) === 0) {
                $this->entityManager->flush();
                $this->entityManager->clear();
            }
            $iteration++;
        }
        $this->entityManager->flush();
    }

    /**
     * @param array $data
     * @return bool
     */
    protected function isAllSelected($data)
    {
        return array_key_exists('inset', $data) && $data['inset'] === '0';
    }

    /**
     * @param MassActionHandlerArgs $args
     * @param int $entitiesCount
     *
     * @return MassActionResponse
     */
    protected function getResponse(MassActionHandlerArgs $args, $entitiesCount = 0)
    {
        $massAction      = $args->getMassAction();
        $responseMessage = $massAction->getOptions()->offsetGetByPath('[messages][success]', $this->responseMessage);

        $successful = $entitiesCount > 0;
        $options    = ['count' => $entitiesCount];

        return new MassActionResponse(
            $successful,
            $this->translator->transChoice(
                $responseMessage,
                $entitiesCount,
                ['%count%' => $entitiesCount]
            ),
            $options
        );
    }

    /**
     * @param QueryBuilder $queryBuilder
     * @param int $markType
     * @param int $iteration
     * @return mixed
     */
    protected function process($queryBuilder, $markType, $iteration)
    {
        $result = $queryBuilder->getQuery()->iterate();
        foreach ($result as $entity) {
            /** @var EmailUser $entity */
            $entity = $entity[0];

            if ($this->authorizationChecker->isGranted('EDIT', $entity)) {
                $this->emailManager->setEmailUserSeen($entity, $markType === self::MARK_READ);
            }

            if ($entity->getEmail()->getThread()) {
                $this->needToProcessThreadIds[] = $entity->getEmail()->getThread()->getId();
            }

            $this->entityManager->persist($entity);

            if (($iteration % self::FLUSH_BATCH_SIZE) === 0) {
                $this->entityManager->flush();
                $this->entityManager->clear();
            }
            $iteration++;
        }
        $this->entityManager->flush();

        return $iteration;
    }
}
