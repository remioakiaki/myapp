<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Record;
use Illuminate\Support\Facades\Auth;

class RecordController extends Controller
{
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
        return view('record.create');
    }
}
