<?php
/**
 * Created by PhpStorm.
 * User: molukaka
 * Date: 14/07/2018
 * Time: 13:01
 */

namespace App\Containers\Board\Tasks;


use App\Containers\Boards\Data\Repositories\BoardsRepository;

class ShowBoardsTask
{

    private $repository;

    public function __construct(BoardsRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }

}