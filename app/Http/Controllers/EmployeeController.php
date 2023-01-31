<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use app\models\feature;

class EmployeeController extends Controller
{
    public function index()
    {
        $role = Role::all();
        return view ('Employee.index',compact('role'));
    }
}
