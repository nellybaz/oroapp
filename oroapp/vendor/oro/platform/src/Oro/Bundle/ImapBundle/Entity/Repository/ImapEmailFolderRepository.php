<?php

namespace Oro\Bundle\ImapBundle\Entity\Repository;

use Doctrine\Common\Collections\Criteria;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;

use Oro\Bundle\EmailBundle\Entity\EmailOrigin;
use Oro\Bundle\EmailBundle\Entity\EmailFolder;
use Oro\Bundle\ImapBundle\Entity\ImapEmailFolder;

class ImapEmailFolderRepository extends EntityRepository
{
    /**
     * @param EmailOrigin $origin
     * @param bool        $withOutdated
     *
     * @return QueryBuilder
     */
    public function getFoldersByOriginQueryBuilder(EmailOrigin $origin, $withOutdated = false)
    {
        $qb = $this->createQueryBuilder('imap_folder')
            ->innerJoin('imap_folder.folder', 'folder')
            ->where('folder.origin = :origin')
            ->setParameter('origin', $origin);
        if (!$withOutdated) {
            $qb->andWhere('folder.outdatedAt IS NULL');
        }

        return $qb;
    }

    /**
     * @param EmailOrigin $origin
     * @param bool        $withOutdated
     * @param bool|null   $syncEnabled
     * @param bool        $sortByFailedCount
     *
     * @return ImapEmailFolder[]
     */
    public function getFoldersByOrigin(
        EmailOrigin $origin,
        $withOutdated = false,
        $syncEnabled = EmailFolder::SYNC_ENABLED_IGNORE,
        $sortByFailedCount = false
    ) {
        $qb = $this->getFoldersByOriginQueryBuilder($origin, $withOutdated)
            ->select(
                'imap_folder',
                'folder',
                'COALESCE(folder.synchronizedAt, :minDate) AS HIDDEN nullsFirstDate'
            );
        $qb->setParameter('minDate', new \DateTime('1970-01-01', new \DateTimeZone('UTC')));
        if ($syncEnabled !== EmailFolder::SYNC_ENABLED_IGNORE) {
            $qb->andWhere('folder.syncEnabled = :syncEnabled')
                ->setParameter('syncEnabled', (bool)$syncEnabled);
        }
        $qb->addOrderBy('nullsFirstDate', Criteria::ASC);

        $imapFolders = $qb->getQuery()->getResult();
        if ($sortByFailedCount) {
            usort($imapFolders, function (ImapEmailFolder $imapFolder1, ImapEmailFolder $imapFolder2) {
                $failedCount1 = $imapFolder1->getFolder()->getFailedCount();
                $failedCount2 = $imapFolder2->getFolder()->getFailedCount();
                if ($failedCount1 === $failedCount2) {
                    return 0;
                }

                return ($failedCount1 < $failedCount2) ? -1 : 1;
            });
        }

        return $imapFolders;
    }

    /**
     * @param EmailOrigin $origin
     *
     * @return QueryBuilder
     */
    public function getEmptyOutdatedFoldersByOriginQueryBuilder(EmailOrigin $origin)
    {
        return $this->createQueryBuilder('imap_folder')
            ->innerJoin('imap_folder.folder', 'folder')
            ->leftJoin('folder.emailUsers', 'emailUsers')
            ->where('folder.outdatedAt IS NOT NULL AND emailUsers.id IS NULL')
            ->andWhere('folder.origin = :origin')
            ->setParameter('origin', $origin);
    }

    /**
     * @param EmailOrigin $origin
     *
     * @return ImapEmailFolder[]
     */
    public function getEmptyOutdatedFoldersByOrigin(EmailOrigin $origin)
    {
        return $this->getEmptyOutdatedFoldersByOriginQueryBuilder($origin)
            ->select('imap_folder, folder')
            ->getQuery()
            ->getResult();
    }
}
