<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::all();

        return view('employees.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employees.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $employee = new employee;
        // $employee->nama = $request->nama;
        // $employee->nik = $request->nik;
        // $employee->email = $request->email;
        // $employee->dept = $request->dept;

        // $employee->save();

        // Employee::create([
        //     'nama' => $request->nama,
        //     'nik' => $request->nik,
        //     'email' => $request->email,
        //     'dept' => $request->dept
        // ]);

        $request->validate([
            'nama' => 'required',
            'nik' => 'required|size:11',
            'email' => 'required',
            'dept' => 'required'
        ]);

        Employee::create($request->all());
        return redirect('/employees')->with('status', 'Data Karyawan Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        return view('employees.show', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        return view('employees.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        $request->validate([
            'nama' => 'required',
            'nik' => 'required|size:11',
            'email' => 'required',
            'dept' => 'required'
        ]);

        Employee::where('id', $employee->id)
            ->update([
                'nama' => $request->nama,
                'nik' => $request->nik,
                'email' => $request->email,
                'dept' => $request->dept
            ]);

        return redirect('/employees')->with('status', 'Data Karyawan Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        $employee::destroy($employee->id);

        return redirect('/employees')->with('status', 'Data Karyawan Berhasil Dihapus!');
    }
}
