<?php
declare(strict_types = 1);

namespace NotBack\Components;

use NotBack\Elements\Element;
use NotBack\NotBack;

class Row extends Element {

    public function __construct (
        NotBack $notBack,
        protected string $tag = "row",
    ) {
        parent::__construct($notBack);
        $this->classnames[] = "row";
    }
}
