<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Record;

class RecordController extends Controller
{
    public function create()
    {
        return view('record.create');
    }
    public function store(Record $record, Request $request)
    {
        $record_request = $request->all();
        $record_request['bmi'] = round($record_request['weight'] / (($record_request['height'] / 100) * ($record_request['height'] / 100)), 2);
        $record->fill($record_request)->save();
        return view('record.create');
    }
}
