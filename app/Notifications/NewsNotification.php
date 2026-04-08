<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Models\News;

class NewsNotification extends Notification
{
    use Queueable;

    protected $news;

    public function __construct(News $news)
    {
        $this->news = $news;
    }

    // Definir canais: email e database, por exemplo
    public function via($notifiable)
    {
        return ['mail', 'database'];
    }

    // Canal email
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Notícia arquivada para publicação')
            ->greeting('Olá, administrador!')
            ->line("A notícia **{$this->news->title}** foi arquivada e está pronta para publicação.")
            ->action('Ver notícia', url('/admin/news/' . $this->news->id))
            ->line('Verifique e publique se estiver tudo certo.');
    }

    // Canal banco de dados
    public function toDatabase($notifiable)
    {
        return [
            'news_id' => $this->news->id,
            'title'   => $this->news->title,
            'message' => "A notícia '{$this->news->title}' foi arquivada e aguarda publicação.",
        ];
    }
}
