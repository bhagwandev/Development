<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use Redirect,Response;
class customerController extends Controller
{
    public function listview(){
        $allData = Customer::all();
        return view('customer',['allData'=>$allData]);
    }

    public function index(Request $request)
{
    if(request()->ajax()) {
        return datatables()->of(Customer::select('*'))
        ->addColumn('action', 'DataTables.action')
        ->rawColumns(['action'])
        ->addIndexColumn()
        ->make(true);
    }
    return view('customer');
}

}
