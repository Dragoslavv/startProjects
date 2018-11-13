<?php
namespace App\Model;
use App\Database\DB;

class User
{

    function all_users()
    {
        $users = DB::getInstance()->query("SELECT * FROM `users`");
        if($users->count()) {
            foreach ($users->results() as $user) {
                echo $user->fname . '' . $user->lname;
            }
        }
    }
}
