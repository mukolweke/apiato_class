<?php

namespace App\Containers\Board\UI\WEB\Controllers;

use App\Containers\Boards\UI\WEB\Requests\CreateBoardsRequest;
use App\Containers\Boards\UI\WEB\Requests\DeleteBoardsRequest;
use App\Containers\Boards\UI\WEB\Requests\GetAllBoardsRequest;
use App\Containers\Boards\UI\WEB\Requests\FindBoardsByIdRequest;
use App\Containers\Boards\UI\WEB\Requests\UpdateBoardsRequest;
use App\Containers\Boards\UI\WEB\Requests\StoreBoardsRequest;
use App\Containers\Boards\UI\WEB\Requests\EditBoardsRequest;
use App\Ship\Parents\Controllers\WebController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\Board\UI\WEB\Controllers
 */
class Controller extends WebController
{


    public function __construct()
    {


    }

    /**
     * Show all entities
     *
     * @param GetAllBoardsRequest $request
     */
    public function index(GetAllBoardsRequest $request)
    {

        return view('board::board-index');
    }

//    public function index(GetAllBoardsRequest $request)
//    {
//        $boards = Apiato::call('Board@GetAllBoardsAction', [$request]);
//
//        // ..
//    }


    public function showAll(FindBoardsByIdRequest $request)
    {
        $boards = Apiato::call('Board@GetAllBoardsAction', [$request]);

        dd($boards);
    }


    /**
     * Show one entity
     *
     * @param FindBoardsByIdRequest $request
     */
    public function show(FindBoardsByIdRequest $request)
    {
        $boards = Apiato::call('Board@FindBoardsByIdAction', [$request]);

        // ..
    }

    /**
     * Create entity (show UI)
     *
     * @param CreateBoardsRequest $request
     */
    public function create(CreateBoardsRequest $request)
    {
        // ..
    }

    /**
     * Add a new entity
     *
     * @param StoreBoardsRequest $request
     */
    public function store(StoreBoardsRequest $request)


    {
        dd($request);
//        dd($request->all());
        $boards = Apiato::call('Board@CreateBoardsAction', [$request]);

        // ..
    }

    /**
     * Edit entity (show UI)
     *
     * @param EditBoardsRequest $request
     */
    public function edit(EditBoardsRequest $request)
    {
        $boards = Apiato::call('Board@GetBoardsByIdAction', [$request]);

        // ..
    }

    /**
     * Update a given entity
     *
     * @param UpdateBoardsRequest $request
     */
    public function update(UpdateBoardsRequest $request)
    {
        $boards = Apiato::call('Board@UpdateBoardsAction', [$request]);

        // ..
    }

    /**
     * Delete a given entity
     *
     * @param DeleteBoardsRequest $request
     */
    public function delete(DeleteBoardsRequest $request)
    {
         $result = Apiato::call('Board@DeleteBoardsAction', [$request]);

         // ..
    }
}
