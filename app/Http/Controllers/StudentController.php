<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\M_Student;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = M_Student::all();
        return view('student.index')->with([
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nik' => 'required',
            'kelas' => 'required',
            'email' => 'required|email',
            'alamat' => 'required',
        ]);
        $data = $request->except(['_token']);
        M_Student::insert($data);
        return redirect('/')
            ->with('success', 'Tambah Siswa Berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = M_Student::findOrFail($id);
        // dd($data);
        return view('show')->with([
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $data = M_Student::findOrFail($id);
        return view('edit')->with([
            'data' => $data
        ]);
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
        $request->validate([
            'nama' => 'required',
            'nik' => 'required',
            'email' => 'required|email',
            'alamat' => 'required',
        ]);
        $item = M_Student::findOrfail($id);
        $data = $request->except(['_token']);
        $item->update($data);
        return redirect('/')
            ->with('success', 'Edit Data Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = M_Student::findOrfail($id);
        $item->delete();
        return redirect('/')
            ->with('success', 'Hapus Data Berhasil');
    }
    public function logout()
    {
        Auth::logout(); // menghapus session yang aktif
        return redirect()->route('login');
    }
}
