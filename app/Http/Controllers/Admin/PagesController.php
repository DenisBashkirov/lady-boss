<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;
use Route;

class PagesController extends BaseController
{
    public function index()
    {
        return $this->renderOutput();
    }
}
