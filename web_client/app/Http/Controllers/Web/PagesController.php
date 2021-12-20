<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PagesController extends Controller
{
    public function index() {
      //Inertia::setRootView('beta');
       return Inertia::render('Web/Pages/Index');
    }
    public function promo() {
        Inertia::setRootView('landing');
        return Inertia::render('Web/Promo/Project');
    }

    public function about() {

    }
}
