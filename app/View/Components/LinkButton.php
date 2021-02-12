<?php

namespace App\View\Components;

use Illuminate\View\Component;

class LinkButton extends Component
{
    public $link;
    public $style;
    public $class;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($link, $style)
    {
        $this->link = $link;

        if ($style == 'full') {
            $this->style = $this->class . 'm-3 inline-flex items-center px-4 py-2 bg-blue-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-600 active:bg-blue-900 focus:outline-none focus:border-blue-900 focus:ring ring-blue-300 disabled:opacity-25 transition ease-in-out duration-300';
        } elseif ($style == 'light') {
            $this->style = $this->class . 'm-3 inline-flex items-center px-4 py-2 text-xs uppercase font-semibold border border-blue-600 border-solid rounded text-blue-600 bg-blue-50 hover:bg-blue-600 hover:text-white hover:border-blue-600 hover:border-blue-900 ease-in-out duration-300';
        } elseif ($style == 'red') {
            $this->style = $this->class . 'm-3 inline-flex items-center px-4 py-2 text-xs uppercase font-semibold border border-red-600 border-solid rounded text-red-600 bg-red-50 hover:bg-red-600 hover:text-white hover:border-red-600 hover:border-red-900 ease-in-out duration-300';
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.link-button');
    }
}
