<?php
declare(strict_types = 1);

namespace NotBack\CssAttributes;

class FontSize extends CssAttribute {
    public function __construct (
        public int $fontsize
    ) {
    }

    public function toString ():string {
        return 'fontsize: ' . $this->fontsize . 'px';
    }
}
