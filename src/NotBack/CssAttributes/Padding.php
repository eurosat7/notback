<?php
declare(strict_types = 1);

namespace NotBack\CssAttributes;

class Padding extends CssAttribute {
    public function __construct (
        public int $width,
    ) {
    }

    public function toString ():string {
        return 'padding: ' . $this->width . 'px';
    }
}
