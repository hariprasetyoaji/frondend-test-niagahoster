<?php

namespace App\Http\Controllers;

use App\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function index()
    {
        $packages = Package::latest()->get();
        return response([
            'success' => true,
            'message' => 'All Packages',
            'data' => $packages
        ], 200);
    }
}
