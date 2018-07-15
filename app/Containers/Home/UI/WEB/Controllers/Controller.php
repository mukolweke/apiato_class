<?php

namespace App\Containers\Home\UI\WEB\Controllers;

use App\Ship\Parents\Controllers\WebController;

/**
 * Class Controller
 *
 * @author  Mahmoud Zalt  <mahmoud@zalt.me>
 */
class Controller extends WebController
{

    /**
     * @return  string
     */
    public function sayWelcome()
    {
        // No actions to call. Since there's nothing to do but returning a response.

        return view('home::welcome-page');
    }


    public function viewBoards(){
        dd(
            'bata'
        );
        return view('board::board-index');
    }

    public function viewMembers(){
        dd('kuku');
        return view('member::member-index');
    }

    public function login(){
//        dd('kuku');
        return view('authentication::login');
    }
}
