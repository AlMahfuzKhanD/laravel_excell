<?php

namespace App\Exports;

use App\User;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\FromCollection;

//class UsersExport implements FromCollection
class UsersExport implements FromArray
{
//    use Exportable;
    //private $fileName = 'Users.xlsx';
    /**
    * @return \Illuminate\Support\Collection
    */
    public function array() :array
    {
//        return User::all();
        return
            [
                ['Harish','Harish@Example.com'],
                ['Mah','mah@Example.com'],
                ['Khan','Khan@Example.com']

            ];

    }
}
