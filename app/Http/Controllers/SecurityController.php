<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SecurityController extends Controller
{
    public function info ()
    {
        $securityTeam = [ 
            [ 
                'name'  => 'Nakamoto Atuy',
                'img'   => 'assets/img/atuy.jpg',
                'route' => 'security.view.profile'
            ],
            [ 
                'name'  => 'Jung Jamal',
                'img'   => 'assets/img/jamal.jpg',
                'route' => 'security.view.profile'
            ],
            [ 
                'name'  => 'Lee Tio',
                'img'   => 'assets/img/tian.jpg',
                'route' => 'security.view.profile'
            ],
            [ 
                'name'  => 'Na Jeman',
                'img'   => 'assets/img/jemin.jpg',
                'route' => 'security.view.profile'
            ],
            [ 
                'name'  => 'Dong Wirya',
                'img'   => 'assets/img/wirya.jpg',
                'route' => 'security.view.profile'
            ],
            [ 
                'name'  => 'Zhong Cahyo',
                'img'   => 'assets/img/chonlo.jpg',
                'route' => 'security.view.profile'
            ],
        ];

        return view ( 'security.securityInfo', compact ( 'securityTeam' ) );
    }


    public function editProfile ()
    {
        return view ( 'security.securityEditProfile' );
    }

    public function viewProfile ()
    {
        return view ( 'security.securityViewProfile' );
    }
}
