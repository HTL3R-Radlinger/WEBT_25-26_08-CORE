<?php

declare(strict_types=1);

namespace Htl3r\Fortune\Controller;

use Htl3r\Fortune\Domain\Repository\MessageRepository;
use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class FortuneController extends ActionController
{
    public function __construct(
        private readonly MessageRepository $messageRepository
    )
    {}

    public function showAction(): ResponseInterface
    {
        $message = $this->messageRepository->findMessageOfTheDay();

        if ($message === null) {
            return $this->htmlResponse('<div class="lucky-message">🥠 Keine Botschaft vorhanden.</div>');
        }

        $text = htmlspecialchars($message->getMessage());

        $html = <<<HTML
        <div class="lucky-message">
            <div class="lucky-message__icon">🥠</div>
            <code class="lucky-message__text" style="color: black;">{$text}</code>
        </div>
    HTML;

        return $this->htmlResponse($html);
    }
}
