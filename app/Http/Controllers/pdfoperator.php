<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\PdfToText\Pdf;

class pdfoperator extends Controller
{
    //
    public function read()
    {
    	$data = Pdf::getText('book.pdf');
    	return $data;
    }
}
