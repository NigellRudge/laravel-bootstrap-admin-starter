<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParentController extends Controller
{
    protected $data = array();
    public function __construct()
    {
        $data['controller_name'] = '';
        $data['category_name'] = '';
    }
}
