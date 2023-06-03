<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EmployeesController extends Controller
{
    public function index()
    {
        $employees = Employee::where('status', 1)->get();
        return view('admin.employees.index', compact('employees'));
    }
    public function add()
    {
        return view('admin.employees.add');
    }
    public function store(Request $request)
    {
        $employee = new Employee();
        $employee->code = $request->code;
        $employee->name = $request->name;
        $employee->email  = $request->email;
        $employee->password = Hash::make($request->password);
        $employee->phone = $request->phone;
        $employee->Added_by = auth('web')->user()->id;
        $employee->save();
        return back()->with('success', 'تم إضافة الموظف بنجاح');
    }
    public function edit($id)
    {
        $emp = Employee::find($id);
        return view('admin.employees.edit', compact('emp'));
    }
    public function update(Request $request)
    {
        $employee = Employee::where('id', $request->id)->first();
        $employee->code = $request->code;
        $employee->name = $request->name;
        $employee->email  = $request->email;
        $employee->phone = $request->phone;

        if ($request->password !== null) {
            $employee->password = Hash::make($request->password);
        }

        $employee->save();
        return redirect()->route('admin.employee.index')->with('success', 'تم تعديل بيانات الموظف بنجاح');
    }

    public function destory($id)
    {
        $employee = Employee::where('id', $id);
        $employee->update([
            'status' => 0
        ]);
        return back()->with('success', 'تم حذف الموظف بنجاح');
    }
}
