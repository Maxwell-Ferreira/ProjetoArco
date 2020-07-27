<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Orcamento;

class MailOrcamento extends Mailable
{
    use Queueable, SerializesModels;
    private $orcamento;

        /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Orcamento $orcamento)
    {
        $this->orcamento = $orcamento;
    }

        /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Contato Projeto Arco')->view('emails.orcamento')->with('orcamento', $this->orcamento);
    }
}
