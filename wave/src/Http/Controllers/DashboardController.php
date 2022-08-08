<?php

namespace Wave\Http\Controllers;

use Illuminate\Http\Request;
use Wave\Stock;
use DataTables;

class DashboardController extends \App\Http\Controllers\Controller
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
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if ($request->ajax()) {
            $data = Stock::get();
            return Datatables::of($data)->addIndexColumn()
                ->rawColumns(['edit', 'delete'])
                ->make(true);
        }

        return view('theme::dashboard.index');
    }

    
}
