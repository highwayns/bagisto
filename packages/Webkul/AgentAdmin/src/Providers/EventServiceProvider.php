<?php

namespace Webkul\AgentAdmin\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Event::listen('checkout.order.save.after', 'Webkul\AgentAdmin\Listeners\Order@sendNewOrderMail');

        Event::listen('sales.invoice.save.after', 'Webkul\AgentAdmin\Listeners\Order@sendNewInvoiceMail');

        Event::listen('sales.shipment.save.after', 'Webkul\AgentAdmin\Listeners\Order@sendNewShipmentMail');

        Event::listen('sales.order.cancel.after','Webkul\AgentAdmin\Listeners\Order@sendCancelOrderMail');

        Event::listen('sales.refund.save.after','Webkul\AgentAdmin\Listeners\Order@sendNewRefundMail');
    }
}