<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function update(Request $request)
    {
        dd($request->all());
    }

    public function updateAll(Request $request)
    {
        dd($request->all());
    }

    public function delete(Request $request)
    {
        dd("Silinecek User ID: " . $request->id);
    }

    public function show(Request $request, int $id)
    {
        dd($id);
    }

    public function checkRole($role)
    {
        dd($role);
    }
}
