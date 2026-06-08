<?php

declare(strict_types=1);

namespace Htl3r\Fortune\Domain\Repository;

use Htl3r\Fortune\Domain\Model\Message;
use TYPO3\CMS\Extbase\Persistence\Repository;
use TYPO3\CMS\Extbase\Persistence\Generic\Typo3QuerySettings;

class MessageRepository extends Repository
{
//    public function initializeObject(): void
//    {
//        /** @var Typo3QuerySettings $querySettings */
//        $querySettings = $this->createQuery()->getQuerySettings();
//        $querySettings->setRespectStoragePage(true);
//        $querySettings->setStoragePageIds([45]);
//
//        $this->setDefaultQuerySettings($querySettings);
//    }

    public function findMessageOfTheDay(): ?Message
    {
//        $query = $this->createQuery();
//        $all = $query->execute()->toArray();
        $all = $this->findAll()->toArray();

        if (empty($all)) {
            return null;
        }

        $daySeed = (int)date('z') + (int)date('Y') * 366;
        $index = $daySeed % count($all);

        return $all[$index];
    }
}