<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    public function index()
    {
        //
    }

    public function show(Plan $plan)
    {
        return $plan;
    }

    public function create()
    {
        //
    }

    public function store()
    {
        //
    }

    public function edit(Plan $plan)
    {
        return $plan;
    }

    public function update(Plan $plan)
    {
        return $plan;
    }

    public function destroy(Plan $plan)
    {
        return $plan;
    }
}
