<?php

namespace App\Http\Controllers;

use App\Models\Bb;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;

class BbsController extends Controller
{
    //
    public function index() {
        $bbs = Bb::latest()->get();
        $s = "BillBoard list \r\n\r\n";
        foreach($bbs as $bb) {
            $s .= $bb->title . "\r\n";
            $s .= $bb->price . env("CURRENCY") . "\r\n\r\n";
        }

        return Response($s)
                ->header('Content-Type', 'text/plain');
        
    }

    public function detail(Bb $id) {
        // $bb = Bb::find($id);
        $s = $id->title ."\r\n"
        . '  ' . $id->content."\r\n"
        . ' - ' . $id->price."\r\n";
        return response($s)->header('Content-Type', 'text/plain');
    } 
}
