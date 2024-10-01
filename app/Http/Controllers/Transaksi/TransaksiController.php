<?php

namespace App\Http\Controllers\Transaksi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class TransaksiController extends Controller
{
    //
    public function index()
    {
        return Inertia::render('Transaksi/Index');
    }
}
