<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home OTGcoders',
            'tes' => ['123', '456', '789']
        ];
        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About'
        ];

        echo view('pages/about', $data);
    }


    //--------------------------------------------------------------------

}
