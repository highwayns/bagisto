<?php

namespace Webkul\Vendor\Models;

use Illuminate\Database\Eloquent\Model;
use Webkul\Vendor\Contracts\VendorSource as VendorSourceContract;

class VendorSource extends Model implements VendorSourceContract
{
    protected $guarded = ['_token'];
}