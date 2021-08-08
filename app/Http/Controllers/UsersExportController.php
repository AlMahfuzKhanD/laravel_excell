<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Excel;

class UsersExportController extends Controller
{
    private $excel;
    public function __construct(Excel $excel){
        $this->excel = $excel;
    }
    public function export()
    {
        // return Excel::download(new UsersExport,'users.xlsx');
        // Exportable
        // return (new UsersExport)->download('users.xlsx');
        // Responsable
        // return new UsersExport;
        //Excel dependency injection

        //return $excel->download(new UsersExport,'Users.xlsx');
        //using constructor
        return $this->excel->download(new UsersExport,'Users.xlsx');
    }
}
