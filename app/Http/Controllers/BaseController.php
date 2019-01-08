<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Route;

class BaseController extends Controller
{
    protected $template;
    protected $vars;
    protected $page_title;
    protected $meta_description;
    protected $meta_keywords;

    public function __construct()
    {
        $route_name = Route::getCurrentRoute() ? Route::getCurrentRoute()->getName() : null;
        $this->template = 'backend.pages.' . $route_name;
    }

    protected function  renderOutput()
    {
        $this->vars = array_add($this->vars, 'page_title', $this->page_title);
        $this->vars = array_add($this->vars, 'meta_description', $this->meta_description);
        $this->vars = array_add($this->vars, 'meta_keywords', $this->meta_keywords);

        $data = $this->vars;

        if (!empty($data))
            return view($this->template, $data);
        else
            return view($this->template);
    }
}