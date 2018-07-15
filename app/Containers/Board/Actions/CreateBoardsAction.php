<?php

namespace App\Containers\Board\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class CreateBoardsAction extends Action
{
    public function run(Request $request)
    {
        $this->validate($request,[
            'title'=>'required',
            'body'=> 'required'
        ]);

        $data = $request->sanitizeInput([
            // request data



        ]);

        $boards = Apiato::call('Board@CreateBoardsTask', [$data]);

        return $boards;
    }
}
