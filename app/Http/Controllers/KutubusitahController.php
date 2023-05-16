<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use App\Models\Kutubusitah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class KutubusitahController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $kutubusitahs = Kutubusitah::all();
        return view('admin.pages.kutubusitah.index', compact('kutubusitahs'));
    }

    public function create()
    {
        return view('admin.pages.kutubusitah.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        };

        $kutubusitah = new Kutubusitah();
        $kutubusitah->name = $request->name;
        $kutubusitah->save();

        return redirect()->route('kutubusitah.index')->with('success', 'Berhasil menambah data kutubusitah');
    }

    public function edit(string $id)
    {
        $kutubusitah = Kutubusitah::find($id);
        return view('admin.pages.kutubusitah.edit', compact('kutubusitah'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
