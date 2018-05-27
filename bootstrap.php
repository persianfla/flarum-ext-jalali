<?php

use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\Contracts\Bus\Dispatcher as BusDispatcher;
use Sijad\Jalali\Listener;


return function (Dispatcher $events, BusDispatcher $bus) {
    $events->subscribe(Listener\AddClientAssets::class);
};
