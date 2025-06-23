<?php

namespace App\Http\Controllers;


use App\Models\Division;
use App\Models\Employee;
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
        $employees = Employee::with('division')->get(); // relasi dengan Division
        return view('employees.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $divisions = Division::all(); // untuk dropdown divisi
         return view('employees.create', compact('divisions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'nip' => 'required|unique:employees,nip',
            'jabatan' => 'required|string',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'tanggal_masuk' => 'required|date',
            'division_id' => 'required|exists:divisions,id',
        ]);

        Employee::create($validated);

        return redirect()->route('employees.index')->with('success', 'Karyawan berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = Employee::findOrFail($id);
        $divisions = Division::all();
        return view('employees.edit', compact('employee', 'divisions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
        {
            $validated = $request->validate([
                'nip' => 'required|unique:employees,nip,' . $id,
                'nama_lengkap' => 'required|string|max:255',
                'jabatan' => 'required|string',
                'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
                'tanggal_masuk' => 'required|date',
                'division_id' => 'required|exists:divisions,id',
            ]);

            $employee = Employee::findOrFail($id);
            $employee->update($validated);

            return redirect()->route('employees.index')->with('success', 'Data karyawan berhasil diperbarui!');
        }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();

        return redirect()->route('employees.index')->with('success', 'Data karyawan berhasil dihapus!');
    }
}
