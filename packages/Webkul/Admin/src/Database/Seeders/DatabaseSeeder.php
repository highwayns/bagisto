<?php

namespace Webkul\Admin\Database\Seeders;

use Illuminate\Database\Seeder;
use Webkul\Category\Database\Seeders\DatabaseSeeder as CategorySeeder;
use Webkul\Attribute\Database\Seeders\DatabaseSeeder as AttributeSeeder;
use Webkul\Core\Database\Seeders\DatabaseSeeder as CoreSeeder;
use Webkul\User\Database\Seeders\DatabaseSeeder as UserSeeder;
use Webkul\Customer\Database\Seeders\DatabaseSeeder as CustomerSeeder;
use Webkul\Inventory\Database\Seeders\DatabaseSeeder as InventorySeeder;
use Webkul\CMS\Database\Seeders\DatabaseSeeder as CMSSeeder;
use Webkul\Vendor\Database\Seeders\DatabaseSeeder as VendorSeeder;
use Webkul\Agent\Database\Seeders\DatabaseSeeder as AgentSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategorySeeder::class);
        $this->call(InventorySeeder::class);
        $this->call(CoreSeeder::class);
        $this->call(AttributeSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(CustomerSeeder::class);
        $this->call(CMSSeeder::class);
        $this->call(VendorSeeder::class);
        $this->call(AgentSeeder::class);
    }
}