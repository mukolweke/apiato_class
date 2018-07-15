<?php

namespace App\Containers\Welcome\UI\API\Controllers;

use App\Ship\Parents\Controllers\ApiController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller.
 *
 * @author Mahmoud Zalt <mahmoud@zalt.me>
 */
class Controller extends ApiController
{

    /**
     * @return  \Illuminate\Http\JsonResponse
     */
    public function apiRoot()
    {
        $message = Apiato::call('Home@FindMessageForApiRootVisitorAction');

        return response()->json($message);
    }

    /**
     * @return  \Illuminate\Http\JsonResponse
     */
    public function v1ApiLandingPage()
    {
        $message = Apiato::call('Home@FindMessageForApiV1VisitorAction');

        return response()->json($message);
    }

}
