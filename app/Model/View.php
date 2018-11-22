<?php
namespace App\Model;
use App\Database\DB;

class View
{

    function all_view()
    {
        $users = DB::getInstance()->query("SELECT * FROM `traveler`");
        if($users->count()) {
            foreach ($users->results() as $user) {
                echo  'First name: ' . $user->fname . 'Last name: ' . $user->lname . 'Weight: '. $user->weight . 'No Fly lists: '. $user->no_fly_list ;

            }
        }
    }
}