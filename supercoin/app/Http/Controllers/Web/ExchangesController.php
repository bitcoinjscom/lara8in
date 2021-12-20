<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Exchange;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ExchangesController extends Controller
{
    public function index() {
        $exchages = Exchange::paginate(20);
        return Inertia::render('Exchanges/Index',[
            'exchanges' => $exchages
        ]);
    }
}
