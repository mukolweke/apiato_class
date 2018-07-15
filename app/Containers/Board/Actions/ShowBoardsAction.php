<?php

namespace App\Containers\Board\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class ShowBoardsAction extends Action
{
    public function run(Request $request)
    {

        $boards = Apiato::call('Board@CreateBoardsTask');

        return $boards;
    }
}
