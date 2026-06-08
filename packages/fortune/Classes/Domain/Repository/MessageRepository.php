<?php

declare(strict_types=1);

namespace Htl3r\Fortune\Domain\Repository;

use Htl3r\Fortune\Domain\Model\Message;
use TYPO3\CMS\Extbase\Persistence\Repository;

class MessageRepository extends Repository
{
    public function findMessageOfTheDay(): ?Message
    {
        $all = $this->findAll()->toArray();

        if (empty($all)) {
            return null;
        }
        $daySeed = (int)date('z') + (int)date('Y') * 366;
        $index = $daySeed % count($all);

        return $all[$index];
    }
}