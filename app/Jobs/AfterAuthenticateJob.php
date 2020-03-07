<?php

namespace App\Jobs;

use OhMyBrew\ShopifyApp\Models\Shop;

class AfterAuthenticateJob
{
    /**
     * Shop's instance.
     *
     * @var string
     */
    protected $shop;

    /**
     * Create a new job instance.
     *
     * @param object $shop The shop's object
     *
     * @return void
     */
    public function __construct(Shop $shop)
    {
        $this->shop = $shop;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        if (!$this->shop->isGrandfathered()) {
            $planName = $this->shop->api()->rest('GET', '/admin/shop.json')->body->shop->plan_name;
            if ($planName === 'affiliate' || $planName === 'staff_business') {
                 $this->shop->grandfathered = true;
                 $this->shop->save();
            }
        }
    }
}