<?php

namespace App\Http\Controllers;

use App\Models\Bb;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;

class BbsController extends Controller
{
    //
    // public function index() {
    //     $bbs = Bb::latest()->get();
    //     $s = "BillBoard list \r\n\r\n";
    //     foreach($bbs as $bb) {
    //         $s .= $bb->title . "\r\n";
    //         $s .= $bb->price . env("CURRENCY") . "\r\n\r\n";
    //     }

    //     return Response($s)
    //             ->header('Content-Type', 'text/plain');
        
    // }
    public function index() {
        $bbs = [
            'bbs' => Bb::latest()->get(),
            'currency' => env("CURRENCY"),
            'reqa'=>''
        ];

        return view('bbs/index', $bbs);
    }


    public function detail(Bb $bb) {
        $user = $bb->user()->first();
        $userName = $bb->user()->first()->name;
        return view('bbs/detail', [ 
            'bb' => $bb, 
            'user' => $user,
            'username' => $userName] );
        // return response($s)->header('Content-Type', 'text/plain');
    } 

    
    public function listings(Bb $bb) {
        die('test');
        return 'test';
        foreach(Bb::all() as $bb ) {
            $user = $bb->user;
            echo $user->name, ' > ', $bb->title . ' - ' . $bb->price . '\r\n';
        }
    }
}
