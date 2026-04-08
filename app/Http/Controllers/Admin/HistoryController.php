<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Activitylog\Models\Activity;

class HistoryController extends Controller
{
    public function index()
    {
        /* notifications */
        $admin = auth()->user();
        $response['notifications'] = $admin->notifications()->limit(5)->get();
        /* end notifications */

        $logs = Activity::with('causer')->orderBy('created_at', 'desc')->get();
        $response['logs'] = $logs;
        
        return view('admin.history.index', $response);
    }

    public function destroy()
    {
        $data = Activity::all();
        $data->delete();

        
    }
}
