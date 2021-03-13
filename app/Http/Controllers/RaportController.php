<?php

namespace App\Http\Controllers;

use App\Nilai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RaportController extends Controller
{
      public function index()
      {
          $nilai = Nilai::all();
          return view('raport.index', compact('nilai'));
      }
}
