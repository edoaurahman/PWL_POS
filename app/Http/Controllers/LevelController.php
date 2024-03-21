<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLevelRequest;
use App\Models\LevelModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LevelController extends Controller
{
    public function index()
    {
        $data = LevelModel::all();
        return view('level', ['data' => $data]);
    }

    public function store(StoreLevelRequest $request)
    {
        $validated = $request->validated();
        LevelModel::create($validated);
        return redirect('level');
    }

    public function tambah()
    {
        return view('level_tambah');
    }
}
