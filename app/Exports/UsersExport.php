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
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithMapping;

class UsersExport implements FromCollection , ShouldAutoSize, WithMapping, WithHeadingRow
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
       return User::with('address')->get();
        //dd($user);
//        return User::all();
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

    public function map($user): array
{
    return [
        $user->id,
    $user->name,
    $user->email,
       // $user->address->country
    ];
}
public function headings():array
{
    return [
        '#',
        'name',
        'email'
    ];

}
}
