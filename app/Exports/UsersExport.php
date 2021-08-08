<?php

namespace App\Exports;

use App\User;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Support\Collection;
use Illuminate\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class UsersExport implements FromCollection , ShouldAutoSize
//class UsersExport implements FromArray
//class UsersExport implements FromView
{
//    use Exportable;
    //private $fileName = 'Users.xlsx';
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return User::all();
//        return
//            [
//                ['Harish','Harish@Example.com'],
//                ['Mah','mah@Example.com'],
//                ['Khan','Khan@Example.com']
//
//            ];

//        return view('exports.users',[
//            'users'=>User::all()
//        ] );

    }
}
