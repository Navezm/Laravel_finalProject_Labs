<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class FormSend extends Mailable
{
    use Queueable, SerializesModels;
    public $infos;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->infos = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->infos->email)->view('template.templateForm')->subject($this->infos->subject)->with(['name' => $this->infos->name, 'email' => $this->infos->email, 'subject' => $this->infos->subject, 'content' => $this->infos->content]);
    }
}
