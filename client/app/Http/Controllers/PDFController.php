<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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

    public function setQRSession(Request $request)
    {
        Session::put('qr1', $request->qr1);
        Session::put('qr2', $request->qr2);
        return response()->json([
            'message' => 'QR session set.',
            'qr1' => Session::get('qr1'),
            'qr2' => Session::get('qr2'),
        ]);
    }
}
