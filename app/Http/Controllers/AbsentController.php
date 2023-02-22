<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\feature;
use App\Models\Absent;

class AbsentController extends Controller
{
      public function index()
      {
          $role = Role::all();
          $absents = Absent::all();
          return view ('Absent.index',compact(['role','absents']));
      }
      public function Absentnow($id)  
    {
      $features = Feature::all();
        return view('absent.addRole',compact(['features','id']));
    }
    public function store(Request $request,$id)
      // return $request->all();
    {
      Absent::Create([
        'user_id' => $id,
        'date' => $request ->tanggal,
        'time_in' => $request ->masuk,
        'time_out' => $request ->keluar,
        'note' => $request ->status_absen
    ]);
    return redirect('/Absent')->with('success','data sudah di terima');
    }
    }
