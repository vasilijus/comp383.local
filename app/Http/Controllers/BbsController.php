<?php

namespace App\Http\Controllers;

use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;

class BbsController extends Controller
{
    //
    public function index() {
        return Response('Zdes budet novostnaja lenta')
                ->header('Content-Type', 'text/plain');
    }
}
