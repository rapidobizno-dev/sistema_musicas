<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Spatie\Activitylog\Models\Activity;

class ReportController extends Controller
{
    public function index()
    {
        $news = News::all();
        $pdf = PDF::loadView('pdf.news.index', compact('news'))
          ->setPaper('a4', 'landscape');

        return $pdf->download('relatorio.pdf');
    }

    public function historyReport(){
      
      $logs = Activity::with('causer')->orderBy('created_at', 'desc')->get();
      $pdf = PDF::loadView('pdf.history.index', compact('logs'))
        ->setPaper('a4', 'landscape');

      return $pdf->download('relatorio-atividades.pdf');
    }
}
