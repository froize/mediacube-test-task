<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\Employee;

class GridController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $branches = Branch::with('employees')->get();
        $employees = Employee::all();
        return view('grid.index', compact('branches', 'employees'));
    }
}
