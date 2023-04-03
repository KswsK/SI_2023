<?php

namespace App\View\Components;

use Illuminate\Http\Request;
use Illuminate\View\Component;

class AppLayout extends Component
{
    public Request $request;
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
    * Get the view / contents that represents the component.
    *
    * @return \Illuminate\View\View
    */
    public function render()
    {
        return view('layouts.app');
    }
}
