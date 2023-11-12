<?php

namespace App\View\Components;

use Illuminate\View\Component;

class StoryControl extends Component {
    public function __construct(
        public string $linkOne,
        public string $linkTwo,
        public string $nextLink
    ) {}

    public function render() {
        return view('components.story_control');
    }
}
