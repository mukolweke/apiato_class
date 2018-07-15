<?php

namespace App\Containers\Welcome\Actions;

use App\Ship\Parents\Actions\Action;
use Config;

/**
 * Class WelcomeApiRootVisitorAction.
 *
 * @author Mahmoud Zalt <mahmoud@zalt.me>
 */
class FindMessageForApiRootVisitorAction extends Action
{

    /**
     * @return  array
     */
    public function run()
    {
        return ['Home to ' . Config::get('app.name') . '.'];
    }
}
