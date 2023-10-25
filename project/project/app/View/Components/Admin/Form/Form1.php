<?php

namespace App\View\Components\Admin\Form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Form1 extends Component
{
    public $action;
    public $method;
    public $submit_name;

    public function __construct($action,$submit="Submit",$method="post")
    {
       
        $this->action=$action;
        $this->method=$method;
        $this->submit_name=$submit;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin.form.form1');
    }
}
