<?php

declare(strict_types=1);

namespace Htl3r\Fortune\Domain\Repository;

use Htl3r\Fortune\Domain\Model\Message;
use TYPO3\CMS\Extbase\Persistence\Repository;

/**
 * @extends Repository<Message>
 */
class MessageRepository extends Repository
{
    /**
     * Returns a deterministic "random" message based on the current day.
     * The seed changes every day so visitors always get the same message
     * throughout one day but a different one the next.
     */
    public function findMessageOfTheDay(): ?Message
    {
        $all = $this->findAll()->toArray();

//        var_dump($this->findAll());
//        var_d ump($all);

        if (empty($all)) {
            return null;
        }

        $daySeed = (int)date('z') + (int)date('Y') * 366;
        $index = $daySeed % count($all);

        return $all[$index];
    }
}
