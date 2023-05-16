<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use App\Models\Kelompok;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class KelompokController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $kelompoks = Kelompok::all();

        return view('admin.pages.kelompok.index', compact('kelompoks'));
    }

    public function create()
    {
        $desas = Desa::all();
        return view('admin.pages.kelompok.create', compact('desas'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required'],
            'desa' => ['required', Rule::exists('desas', 'id')]
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $kelompok = new Kelompok();
        $kelompok->name = $request->name;
        $kelompok->desa_id = $request->desa;
        $kelompok->save();

        return redirect()->route('kelompok.index')->with('success', 'Berhasil menambah Kelompok baru');
    }

    public function edit(string $id)
    {
        $kelompok = Kelompok::find($id);
        $desas = Desa::all();

        return view('admin.pages.kelompok.edit', compact('kelompok', 'desas'));
    }

    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required'],
            'desa' => ['required', Rule::exists('desas', 'id')]
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $kelompok = Kelompok::find($id);
        $kelompok->name = $request->name;
        $kelompok->desa_id = $request->desa;
        $kelompok->save();

        return redirect()->route('kelompok.index')->with('success', 'Berhasil mengubah data Kelompok');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Kelompok::destroy($id);
        return redirect()->route('kelompok.index')->with('warning', 'Berhasil menghapus data Kelompok');
    }
}
