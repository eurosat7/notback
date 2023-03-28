<?php
declare(strict_types = 1);

namespace NotBack\Elements;

use NotBack\NotBack;

class Body extends Element {
    public function __construct (
        NotBack $notBack
    ) {
        parent::__construct($notBack, "body");
    }
}
