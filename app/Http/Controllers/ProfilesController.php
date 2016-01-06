<?php

namespace Projectopera\Http\Controllers;

use Illuminate\Http\Request;

use Projectopera\Http\Requests;
use Projectopera\Http\Controllers\Controller;

class ProfilesController extends Controller
{
public function getAbout(){
    return view('pages.about');
}
}
