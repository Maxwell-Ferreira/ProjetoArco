<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Usuario;

class MailEsqueceuSenha extends Mailable
{
    use Queueable, SerializesModels;

    private $usuario;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Usuario $usuario)
    {
        $this->usuario = $usuario;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Contato Projeto Arco')->view('emails.esqueceuSenha')
            ->with('usuario', $this->usuario);
    }
}