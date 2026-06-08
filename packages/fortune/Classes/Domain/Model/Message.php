<?php

declare(strict_types=1);

namespace Htl3r\Fortune\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class Message extends AbstractEntity
{
    protected string $message = '';

    public function getMessage(): string
    {
        return $this->message;
    }
}
