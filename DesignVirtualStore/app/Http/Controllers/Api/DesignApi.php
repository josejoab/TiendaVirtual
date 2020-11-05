<?php

namespace App\Http\Controllers\Api;
use App\Http\Resources\DesignResource;
use App\Http\Resources\DesignCollection;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Design;

class DesignApi extends Controller
{
    public function index()
    {
        return new DesignCollection(DesignResource::collection(Design::all()));
    }

    public function paginate()
    {
        return new DesignCollection(DesignResource::collection(Design::paginate(5)));
    }
}
