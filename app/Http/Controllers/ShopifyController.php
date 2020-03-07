<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OhMyBrew\ShopifyApp\Facades\ShopifyApp;
use Log;

class ShopifyController extends Controller
{
    public function index() {
  
        $shop = ShopifyApp::shop();
        Log::info('This is the Shop Object: '.print_r($shop,true));
        return;

    }
}

?>