<?php

namespace App\View\Components\features;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class featureCard extends Component
{
    public $comment;
    public $image;
    /**
     * Create a new component instance.
     */
    public function __construct(
        string $comment,
        string $image
    )
    {
        $this->comment = $comment;
        $this->image = $image;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.features.feature-card');
    }
}
