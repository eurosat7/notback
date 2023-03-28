<?php
declare(strict_types = 1);

namespace NotBack\Components;

use NotBack\NotBack;

class Component {
    public function __construct (
        protected readonly NotBack $notback
    ) {
    }
}
