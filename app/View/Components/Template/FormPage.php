<?php

namespace App\View\Components\Template;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FormPage extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public string $action,
        public ?string $method = null,
        public ?string $append = null,
        public ?string $header = null
    ) {}

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function render(): View
    {
        return view('components.template.form-page');
    }
}
