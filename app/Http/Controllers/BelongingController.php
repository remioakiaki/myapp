<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\models\Group;

class BelongingController extends Controller
{
    public function attach($user_id, $group_id)
    {
        $user = User::find($user_id);
        $user->groups()->attach($group_id);

        return redirect()->route('group.index');
    }
    public function detach($user_id, $project_id)
    {
        // $user = User::find($user_id);
        // $user->projects()->detach($project_id);

        // return redirect()->route('projects.index');
    }
}
