<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function pdfView(Request $request)
    {
        if($request->has('page') && $request->page > 0) {
            $data['page'] = $request->page;
        }else {
            $data['page'] = 5;
        }
        return view('pdf.view', $data);
    }
}
