<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

class PagesController extends Controller
{
  public function show () {
       return view('pages.show');
     }
}
