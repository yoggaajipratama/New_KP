<?php

namespace WaterPlants\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        date_default_timezone_set('Asia/Jakarta');
        $today = date('Y-m-d');
        $dataD =DB::table('humidity')->where('date','=',$today)->orderBy('id','desc')->get();
        $dataX =DB::table('humidity')->where([['date',$today],['status','Nyala']])->orderBy('id','desc')->get();
        $dataY =DB::table('humidity')->where([['date',$today],['status','Mati']])->orderBy('id','desc')->get();
        return view('home',['dataD'=>$dataD, 'dataX'=>$dataX,'dataY'=>$dataY, 'today'=>$today]);
    }
    public function harian()
    {
        date_default_timezone_set('Asia/Jakarta');
        $today = date('Y-m-d');
        $data=DB::table('humidity')->where('date','=',$today)->orderBy('id','desc')->paginate(5);
        return view('k_harian',['data'=>$data],['today'=>$today]);
    }

    public function tahun()
    {
        date_default_timezone_set('Asia/Jakarta');
        $today = date('Y-m-d');
        return view('k_tahun',['today'=>$today]);
    }

    public function tahunan(Request $request)
    {
        $thisY = $request->tahun;
        $dataY=DB::table('humidity')->whereYear('date',$thisY)->orderBy('id','desc')->get();
        return view('k_tahunan',['dataY'=>$dataY],['thisY'=>$thisY]);
    }

    public function remote()
    {
        return view('remote/remote');
    }

    public function search_tahun(Request $request)
    {
        $thisDate = $request->date;
        $dataDate=DB::table('humidity')->where('date','=',$thisDate)->orderBy('id','desc')->get();
        return view('s_tahunan',['dataDate'=>$dataDate],['thisDate'=>$thisDate]);
    }
}
