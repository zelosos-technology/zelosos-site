<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Authenticate;
use Illuminate\Http\Request;

class HomeController extends Controller
{

/*To put some restrict to some views
    public function __construct()
    {
        $this->middleware('auth')->only('index');
        OR
        $this->middleware([Authenticate::class, IsAdmin::class])
        ->only(['index','create']);

    }
*/
    public function index(){
        return view('index');
    }
}


