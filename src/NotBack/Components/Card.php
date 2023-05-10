<?php
declare(strict_types = 1);

namespace NotBack\Components;

use NotBack\NotBack;

class Card extends Row {
    public function __construct (
        NotBack $notBack,
        public string $title = "",
        public string $teaser = "",
        /**
         * @var array<string|int>
         */
        public array $route = [],
        public string $image = "",
        string $content = "" // todo should be a <div>
    ) {
        parent::__construct($notBack);
        $this->content = $content;
    }
}
