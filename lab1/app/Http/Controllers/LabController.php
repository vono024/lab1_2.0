<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LabController extends Controller
{
    public function index()
    {
        return view('lab.index');
    }

    public function about(Request $request)
    {
        $mode = $request->attributes->get('mode');
        return view('lab.about', ['mode' => $mode]);
    }

    public function status()
    {
        return view('lab.status', [
            'app_name' => config('app.name'),
            'app_env' => config('app.env'),
            'php_version' => PHP_VERSION,
        ]);
    }

    public function echo(Request $request)
    {
        $mode = $request->attributes->get('mode');
        
        if ($mode === 'debug') {
            return response()->json([
                'message' => 'Echo endpoint',
                'timestamp' => now()->toDateTimeString(),
                'mode' => $mode,
            ]);
        }
        
        return response()->json(['message' => 'Access denied'], 403);
    }
}
