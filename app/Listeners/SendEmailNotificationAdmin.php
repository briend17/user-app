<?php

namespace App\Listeners;

use App\Events\UserRegistered;
use App\Models\Pais;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendEmailNotificationAdmin
{
    /**
     * Handle the event.
     *
     * @param  UserRegistered  $event
     * @return void
     */
    public function handle(UserRegistered $event)
    {
        $user = User::getUserAdmin();
        $pais = Pais::with(['user'])->get();
        Mail::send('emails.user_registered_country',['pais' => $pais], function($message) use($user){
            $message->to($user->email,$user->name)->subject('Usuarios registrados en user-app');
        });
    }
}
