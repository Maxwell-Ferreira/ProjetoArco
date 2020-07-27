<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Contato;

class MailContato extends Mailable
{
    use Queueable, SerializesModels;
    private $contato;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Contato $contato)
    {
        $this->contato = $contato;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Contato Projeto Arco')->view('emails.contato')->with('contato', $this->contato);
    }
}
