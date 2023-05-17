<?php

namespace App\Http\Controllers;

use App\Imports\DatasImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ImportController extends Controller
{
    public function import(Request $request)
    {
      $request->validate([
        'file' => 'required|mimes:xlsx',
    ]);
        //dd($request->all());
        $data =  Excel::import(new DatasImport,request()->file('file'));
        if ($data) {
            return back()->with('success', 'Importation réussie');
        } else {
            // voir les erreurs avec php sans utiliser dd
            return 'erreur';


        }




    }
}
