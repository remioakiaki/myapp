<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;

class GroupController extends Controller
{
    public function index()
    {
    }
    public function create()
    {
        return view('group.create');
    }
    public function store(Group $group, Request $request)
    {
        $group_request = $request->all();

        if (is_null($group_request['image'])) {
            unset($group_request['image']);
        }
        $group->fill($group_request)->save();

        return view('group.create');
    }
}