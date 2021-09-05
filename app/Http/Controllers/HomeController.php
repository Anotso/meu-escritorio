<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $navbar = [
            'soon' => 'Meu Escritório',
            'pages' => [
                'Inicio' => route('index'),
                'Sobre' => '/about',
                'Contato' => '/contact'
            ]
        ];
        return view('site.index', compact('navbar'));
    }

    public function dashboard()
    {
        return view('dashboard.index');
    }

    public function configHomePage()
    {
        return view('dashboard.settings.settingsHomePage');
    }

    public function settingsSystem()
    {
        return view('dashboard.settings.settingsSystem');
    }
}
