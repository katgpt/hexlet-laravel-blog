<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Метод для обработки маршрута about
    public function about()
    {
        return view('about'); // Возвращает представление "about"
    }
}
