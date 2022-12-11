<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;

class GroupController extends Controller
{
    public function index()
    {
        $groups = Group::all();
        return view('group.index', ['groups' => $groups]);
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
    public function show($id)
    {
        $group = Group::find($id);
        return view('group.show', compact('group'));
    }
}
