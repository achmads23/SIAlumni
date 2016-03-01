<?php

namespace App\Listeners;

use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\User;
class EventListener
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
     * @param  SomeEvent  $event
     * @return void
     */
    public function handle(SomeEvent $event)
    {
        //
    }

    public function onUserLogin($event)
    {
        $user = User::find(Auth::user()->id);
        $user->last_login = Carbon::now('Asia/Jakarta');
        $user->save();
    }
}
