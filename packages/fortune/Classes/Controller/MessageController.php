<?php

declare(strict_types=1);

namespace Htl3r\Fortune\Controller;

use Htl3r\Fortune\Domain\Repository\MessageRepository;
use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use TYPO3\CMS\Core\Http\HtmlResponse;

class MessageController extends ActionController
{
    public function __construct(
        private readonly MessageRepository $messageRepository
    )
    {
    }

//    public function index(): ResponseInterface
//    {
//        $this->view->assign('message', $this->messageRepository->findForToday());
//        return $this->htmlResponse();
//    }
    public function showAction(): ResponseInterface
    {
        $message = $this->messageRepository->findForToday();

        if ($message === null) {
            return $this->htmlResponse('<div class="lucky-message">🥠 Keine Botschaft vorhanden.</div>');
        }

        $text = htmlspecialchars($message->getMessage());

        $html = <<<HTML
        <div class="lucky-message">
            <div class="lucky-message__icon">🥠</div>
            <blockquote class="lucky-message__text">{$text}</blockquote>
        </div>
    HTML;

        return $this->htmlResponse($html);
    }
}