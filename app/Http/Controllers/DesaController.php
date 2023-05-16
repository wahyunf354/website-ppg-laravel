<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DesaController extends Controller
{
    public function index()
    {
        $desas = Desa::all();
        return view('admin.pages.desa.index', compact('desas'));
    }

    public function create()
    {
        return view('admin.pages.desa.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        };

        $desa = new Desa();
        $desa->name = $request->name;
        $desa->save();

        return redirect()->route('desa.index')->with('success', 'Berhasil menambah data desa');
    }

    public function edit($id)
    {
        $desa = Desa::find($id);
        return view('admin.pages.desa.edit', compact('desa'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        };
        $desa = Desa::find($id);
        $desa->name = $request->name;
        $desa->save();

        return redirect()->route('desa.index')->with('success', 'Berhasil mengubah data desa');
    }

    public function destroy($id)
    {
        // TODO: Delete Desa
    }
}
