<?php

namespace App\View\Components;

use Illuminate\View\Component;

class LinkButton extends Component
{
    public $link;
    public $style;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($link, $style)
    {
        $this->link = $link;

        if ($style == 'full') {
            $this->style = 'inline-flex items-center px-4 py-2 bg-blue-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-600 active:bg-blue-900 focus:outline-none focus:border-blue-900 focus:ring ring-blue-300 disabled:opacity-25 transition ease-in-out duration-300';
        } elseif ($style == 'light') {
            $this->style = 'inline-flex items-center px-4 py-2 text-xs uppercase font-semibold rounded text-white bg-blue-200 hover:bg-blue-600 hover:text-white ease-in-out duration-300';
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
