<?php

namespace App\Http\Controllers;

use App\Models\HelpOrder;
use Illuminate\Http\Request;

class HelpOrderController extends Controller
{
    public function index()
    {
        //
    }

    public function show(HelpOrder $helpOrder)
    {
        return $helpOrder;
    }

    public function create()
    {
        //
    }

    public function store()
    {
        //
    }

    public function edit(HelpOrder $helpOrder)
    {
        return $helpOrder;
    }

    public function update(HelpOrder $helpOrder)
    {
        return $helpOrder;
    }

    public function destroy(HelpOrder $helpOrder)
    {
        return $helpOrder;
    }
}
