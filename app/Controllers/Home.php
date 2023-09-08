<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function profile(): string
    {
        // return view('profile');
        $data = [
            'nama'=>'M Hanif Pratama',
            'npm'=>'2017051040',
            'alamat'=>'Pahoman'
        ];
        return view('profile',$data);
    }

    public function profile_url($nama="", $npm="", $alamat=""): string
    {
        $data = [
            'nama'=>$nama,
            'npm'=>$npm,
            'alamat'=>$alamat
        ];
        return view('profile_url',$data);
    }
}

