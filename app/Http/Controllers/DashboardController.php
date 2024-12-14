<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index ()
    {
        $places = [ 
            [ 
                'name'  => 'Tel-U Coffee',
                'image' => 'TelUCoffe.jpg',
                'url'   => 'https://maps.app.goo.gl/pb4AhMc9XaNhjbeWA',
            ],
            [ 
                'name'  => 'Open Library',
                'image' => 'OpenLibrary.png',
                'url'   => 'https://maps.app.goo.gl/NGCB958Nt8voJqzd6',
            ],
            [ 
                'name'  => 'Telkom University Landmark Tower (TULT)',
                'image' => 'TULT.png',
                'url'   => 'https://maps.app.goo.gl/m6Py2hPECeD2vkp58',
            ],
            [ 
                'name'  => 'Student Center',
                'image' => 'StudentCenter.png',
                'url'   => 'https://maps.app.goo.gl/NKgRZ7eTdev3WePo6',
            ],
            [ 
                'name'  => 'Telkom University Sport Centre',
                'image' => 'SportCentre.png',
                'url'   => 'https://maps.app.goo.gl/vQ5aJMBrexUKhSRRA',
            ],
            [ 
                'name'  => 'Gedung Tokong Nanas (GKU)',
                'image' => 'TokongNanas.png',
                'url'   => 'https://maps.app.goo.gl/EKGxfQptzx4jt5uF8',
            ],
            [ 
                'name'  => 'Telkom University Language Center',
                'image' => 'LanguageCenter.png',
                'url'   => 'https://maps.app.goo.gl/8haQBKMrdSatJcwX8',
            ],
            [ 
                'name'  => 'Gedung Serba Guna (GSG)',
                'image' => 'GedungSerbaGuna.png',
                'url'   => 'https://maps.app.goo.gl/Q8V7U5mQeoiMueK47',
            ],
            [ 
                'name'  => 'Gedung Damar',
                'image' => 'GedungDamar.png',
                'url'   => 'https://maps.app.goo.gl/XJfYRmGtwrsk52d16',
            ],
        ];

        return view ( 'content.dashboard', compact ( 'places' ) );
    }

    public function map ()
    {
        return view ( 'content.map' );
    }
}
