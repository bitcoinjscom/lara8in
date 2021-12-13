<?php

namespace App\Listeners;

use App\Models\Mongodb\LogAuth;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class LoginListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        LogAuth::create([
            'user_id' => $event->user->id,
            'tag' => 'login',
            'ip_address' => request()->getClientIp(),
            'agent' => request()->userAgent(),
            'origin' => request()->headers->get('origin')
        ]);
    }
}
