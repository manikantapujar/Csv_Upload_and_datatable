<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\Dataimport;
use Maatwebsite\Excel\Facades\Excel;
use App\DataTables\CsvlistDataTable;
use App\Http\Controllers\Csvdatacontroller;
use App\Models\Csv;
use DataTables;


class Csvdatacontroller extends Controller
{ 
    public function display()  
    {  
       return view('input');  
    }
    public function show()
    {
        // echo "Hi";
        // die();
        Excel::Import(new Dataimport , request()->file('file'));
        // return redirect()->back();
       $this->sendRequest($index);
    }
    // public function show1(CsvlistDataTable $dataTable)
    // {
    //     // return view('listdata');
    //     return $dataTable->render('listdata');
    // }
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Csv::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('view');
    }
}
