<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\feature;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index()
    {
        $role = Role::all();
        $employees = Employee::all();
        return view ('Employee.index',compact(['role','employees']));
    }
    public function create()
    {
        $features = Feature::all();
        return view('employee.addRole',compact('features'));
    }
    public function store(Request $request)
    {
        Employee::create([
            'name_employee' => $request ->nama,
            'hp_employee' => $request ->nomor,
            'work_schedule' => $request ->jadwal_kerja
        ]);
        return redirect('/Employee')->with('success','data sudah di terima');
    }
    public function update($id){
        // dd(employee::find($id));
          $edit = employee::find($id);
          return view ('employee.addRole',compact(['edit']));
      }
      public function save_update(Request $request,$id){
          $Employee = employee::find($id);
  
          $Employee->name_employee = $request->nama;
          $Employee->hp_employee = $request->nomor;
          $Employee->work_schedule = $request->jadwal_kerja;
  
          $Employee->save();
  
          return redirect('/Employee')->with('Success','data sudah diubah');
      }
      public function remove($id){
        // dd(employee::find($id));
         $edit = employee::find($id)->delete();
         return redirect('/Employee')->with('Success','data sudah dihapus');

      }
      
}
