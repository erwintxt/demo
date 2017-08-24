<?php

namespace App\Mail;

use User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UserTerdaftar extends Mailable {
	use Queueable, SerializesModels;
	public $user  ;
	/**
	 * Create a new message instance.
	 *
	 * @return void
	 */
	public function __construct(User $user) {
		$this->user = $user;
	}

	/**
	 * Build the message.
	 *
	 * @return $this
	 */
	public function build() {
        // view untuk email
		return $this->view('emails.userbaru');
	}
}
