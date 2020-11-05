<?php

namespace App\Providers;

use Illuminate\Http\Request;
use Illuminate\Support\ServiceProvider;
use App\Interfaces\pdfDownload;
use App\Util\pdf;

class PdfServiceProvider extends ServiceProvider{

    public function register(){
        $this->app->bind(pdfDownload::class, function($app, $request){
            return new pdf($request['request']);
        });
    }
}