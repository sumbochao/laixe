<?php

namespace App\Http\Controllers;

class BaseController extends Controller
{
    public function assign($var = '', $array)
    {
        return view($this->get_viewer(), [$var => $array]);
    }

    public function get_class_name()
    {
        $class_name = explode('@',\Route::getCurrentRoute()->getActionName())[0];
        $class_name = substr($class_name, -14, 13);
        $count = strlen($class_name) - 9;
        $class_name = substr($class_name, 0, $count);
        $class_name  = mb_convert_case($class_name, MB_CASE_LOWER, "UTF-8");
        return $class_name;
    }

    public function get_method_name()
    {
        $action = explode('@',\Route::getCurrentRoute()->getActionName());
        $action = array_reverse($action);
        $action = array_shift($action);
        return $action;
    }
    public function get_viewer()
    {
        return $this->get_class_name().'.'.$this->get_method_name();
    }
}
