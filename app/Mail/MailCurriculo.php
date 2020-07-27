<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Curriculo;

class MailCurriculo extends Mailable
{
    use Queueable, SerializesModels;

    private $curriculo;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Curriculo $curriculo)
    {
        $this->curriculo = $curriculo;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Contato Projeto Arco')->view('emails.curriculo')->with('curriculo', $this->curriculo);
    }
}
