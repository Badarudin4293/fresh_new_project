<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use app\models\feature;

class AbsentController extends Controller
{
      public function index()
      {
          $role = Role::all();
          return view ('Absent.index',compact('role'));
      }
}