<?php

namespace Sijad\Jalali\Listener;

use Flarum\Event\ConfigureClientView;
use Illuminate\Contracts\Events\Dispatcher;

class AddClientAssets
{
    public function subscribe(Dispatcher $events)
    {
        $events->listen(ConfigureClientView::class, [$this, 'addAssets']);
    }

    public function addAssets(ConfigureClientView $event)
    {
        if ($event->isForum()) {
            $event->addAssets([
                __DIR__.'/../../js/forum/dist/extension.js',
            ]);
            $event->addBootstrapper('sijad/jalali/main');
        }
    }
}
