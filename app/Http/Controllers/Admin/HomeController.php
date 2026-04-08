<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Rate;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $response['totalNews'] = News::count();
        $response['pendentNews'] = News::where('status', 'filed')->count();
        $response['publishedNews'] = News::where('status', 'published')->count();
        $response['draftNews'] = News::where('status', 'draft')->count();
        $response['normalNews'] = News::where('detach', 'Normal')->count();
        $response['detachNews'] = News::where('detach', 'Destaque')->count();
        $response['filedNews'] = News::where('status', 'filed')->orderByDesc('updated_at')->get();
        $response['draftedNews'] = News::where('status', 'draft')->orderByDesc('updated_at')->get();
        $response['newsRanking'] = News::mostViewed(7)->get();

        /* notifications */
        $admin = auth()->user();
        $response['notifications'] = $admin->notifications()->limit(5)->get();
        $response['notificationCount'] = $admin->notifications()->count();
        /* end notifications */

        /* news per category percent */
        $nationalNewsQty = News::whereHas('category', function ($query) {
            $query->where('name', 'Nacional');
        })->count();
        $internationalNewsQty = News::whereHas('category', function ($query) {
            $query->where('name', 'Internacional');
        })->count();
        $businessNewsQty = News::whereHas('category', function ($query) {
            $query->where('name', 'Negócios');
        })->count();
        $TechnologyinnovationNewsQty = News::whereHas('category', function ($query) {
            $query->where('name', 'Tecnologia');
        })->count();
        
        if($response['totalNews'] > 0){
        $response['nationalPercent'] = number_format((100 * $nationalNewsQty) / $response['totalNews'], 1); ;
        $response['internationalPercent'] = number_format(( 100 * $internationalNewsQty) / $response['totalNews'], 1);
        $response['businessPercent'] = number_format((100 * $businessNewsQty) / $response['totalNews'], 1);
        $response['TechnologyinnovationPercent'] = number_format((100 * $TechnologyinnovationNewsQty) / $response['totalNews'], 1);
        /* end news per category percent */
        }

        if(auth()->user()->role === 'admin'){
            return view('admin.dashboard.Analytics.index', $response);
        } elseif(auth()->user()->role === 'editor'){
            return route('admin.news.index');
        }else{
            return redirect('/');
        }
        
    }
}
