<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Log;

class LogsController extends Controller
{
    public function index()
    {
        $logs = Log::orderBy('id','DESC')->get();
        return view('components.log', compact('logs'));
    }
}
