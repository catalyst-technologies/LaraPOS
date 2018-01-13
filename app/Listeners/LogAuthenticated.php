<?php

namespace App\Listeners;

use Session;
use Illuminate\Auth\Events\Authenticated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class LogAuthenticated {

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct() {
        
    }

    /**
     * Handle the event.
     *
     * @param  Authenticated  $event
     * @return void
     */
    public function handle(Authenticated $event) {
        $this->set_session();
    }

    private function set_session() {
        Session::put('branch', 0);
    }

}
