<?php

namespace App\View\Components\Admin\Form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Input1 extends Component
{

    public function __construct()
    {
       
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
      
        return view('components.admin.form.input1');
    }
}
