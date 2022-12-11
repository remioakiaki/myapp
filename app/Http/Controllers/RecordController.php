<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Record;
use Illuminate\Support\Facades\Auth;

class RecordController extends Controller
{
    public function index($user_id)
    {
        $records = Record::where('user_id', $user_id)->get();
        return view('record.index', compact('records'));
    }
    public function create()
    {
        return view('record.create');
    }
    public function store(Record $record, Request $request)
    {
        $user = auth()->user();
        $record_request = $request->all();

        if ($user->not_store_height) {
            $height = $record_request['height'];
        } else {
            $height = $user->height;
        }
        $record_request['bmi'] = round($record_request['weight'] / (($height / 100) * ($height / 100)), 2);
        if ($user->not_store_weight) {
            unset($record_request['weight']);
        }
        $record->fill($record_request)->save();
        return redirect()->route('record.index', ['user_id' => \Auth::id()]);
    }
}
