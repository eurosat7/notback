<?php
declare(strict_types = 1);

namespace NotBack\Components;

use NotBack\Elements\Element;
use NotBack\NotBack;

class Row extends Element {

    public function __construct (
        NotBack $notBack
    ) {
        parent::__construct($notBack);
        $this->classnames[] = "row";
    }
}
