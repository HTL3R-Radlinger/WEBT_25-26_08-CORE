<?php

declare(strict_types=1);

namespace HTL3r\Fortune\Domain\Repository;

use HTL3r\Fortune\Domain\Model\Message;
use TYPO3\CMS\Extbase\Persistence\QueryInterface;
use TYPO3\CMS\Extbase\Persistence\Repository;

/**
 * Picks one message per day deterministically:
 * All messages are sorted by UID, then a stable index is derived
 * by hashing today's date (Y-m-d) with crc32.
 * Every visitor sees the same message on a given day, and it
 * changes at midnight without any scheduled date field.
 */
class MessageRepository extends Repository
{
    public function findForToday(): ?Message
    {
//        $query = $this->createQuery();
//        $query->setOrderings(['uid' => QueryInterface::ORDER_ASCENDING]);
//        $pool = $query->execute()->toArray();

//        if ($pool === []) {
//            return null;
//        }

//        $dateKey = new \DateTimeImmutable('today')->format('Y-m-d');
//        $index   = abs(crc32($dateKey)) % count($pool);

//        return $pool[$index];
//        return $pool[0];
        $query = $this->createQuery();
        $query->setOrderings(['uid' => QueryInterface::ORDER_ASCENDING]);
        $query->setLimit(1);
        return $query->execute()->getFirst();

    }
}
