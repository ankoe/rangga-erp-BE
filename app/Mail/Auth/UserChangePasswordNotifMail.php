<?php

namespace App\Mail\Auth;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UserChangePasswordNotifMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $user;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->from('noreply@erp.com')
            ->view('mail.auth.password.change')
            ->subject('Notifikasi ganti password ERP')
            ->with([
                'browser'           => '',
                'operatingSystem'   => '',
                'device'            => '',
                'updatedAt'         => $this->user->updated_at,
            ]);
    }
}