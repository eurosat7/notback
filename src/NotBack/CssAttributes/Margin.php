<?php
declare(strict_types = 1);

namespace NotBack\CssAttributes;

class Margin extends CssAttribute {
    public function __construct (
        public int $width,
    ) {
    }

    public function toString ():string {
        return 'margin: ' . $this->width . 'px';
    }
}
