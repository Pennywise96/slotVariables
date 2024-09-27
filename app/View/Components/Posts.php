<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Posts extends Component
{
    public array $posts;

    protected $slotVariables = ['posts'];

    /**
     * Create a new component instance.
     */
    public function __construct($posts = null)
    {
        $this->posts = ['Article 1', 'Article 2'];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.posts');
    }
}
