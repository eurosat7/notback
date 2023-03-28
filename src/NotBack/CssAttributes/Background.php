<?php
declare(strict_types = 1);

namespace NotBack\CssAttributes;

use NotBack\Colors\Color;
use NotBack\Colors\RGBA;

class Background extends CssAttribute {
    public const STYLE_SOLID = "solid";

    public function __construct (
        public Color $color = new RGBA(0, 0, 0, 0),
    ) {
    }

    public function toString ():string {
        return 'background: ' . $this->color->toString();
    }
}
