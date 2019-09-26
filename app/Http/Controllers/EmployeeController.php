<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Department;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Employee::with('position')->orderBy('id')->paginate(20);
        return view("index",compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datas = Department::all();
        return view("addEmployee",compact('datas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'nama' => 'required',
            'tempatlahir' => 'required',
            'tanggallahir' => 'required|date',
            'telepon' => 'required|numeric',
            'email' => 'required|email',
            'position' => 'required',
        ]);
        $data = new Employee;
        $data->nip = Carbon::now()->format('dmYHs').$data->id;
        $data->position_id = $request->position;
        $data->nama = $request->nama;
        $data->tempatLahir = $request->tempatlahir;
        $data->tanggalLahir = $request->tanggallahir;
        $data->telepon = $request->telepon;
        $data->email = $request->email;
        $data->save();

        return redirect()->route('employee.index')->with('flash.message','Pegawai Baru Berhasil Ditambahkan')->with('flash.class', 'success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Employee::findOrFail($id);
        $data['id'] = $id;
        return view("editEmployee",compact('data'));        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $validate = $request->validate([
            'nama' => 'required',
            'tempatlahir' => 'required',
            'tanggallahir' => 'required|date',
            'telepon' => 'required|numeric',
            'email' => 'required|email'
        ]);

        $data = Employee::findOrFail($request->id);
        $data->position_id = $request->position;        
        $data->nama = $request->nama;
        $data->tempatLahir = $request->tempatlahir;
        $data->tanggalLahir = $request->tanggallahir;
        $data->telepon = $request->telepon;
        $data->email = $request->email;
        $data->save();

        return redirect()->route('employee.index')->with('flash.message','Data Pegawai Berhasil Di Simpan')->with('flash.class', 'success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Employee::findOrFail($id);
        $data->delete();
        return redirect()->route('employee.index')->with('flash.message','Data Pegawai Berhasil Di Hapus')->with('flash.class', 'success');
    }
}
