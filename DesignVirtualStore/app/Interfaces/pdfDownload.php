<?php

namespace App\Interfaces;
use Illuminate\Http\Request;

interface pdfDownload{
    public function printPDF($language, Request $request);
}