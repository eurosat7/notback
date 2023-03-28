<?php
declare(strict_types = 1);

namespace NotBack\CssAttributes;

use NotBack\Colors\Color;
use NotBack\Colors\RGBA;

class Border extends CssAttribute {
    public const STYLE_SOLID = "solid";

    public function __construct (
        public int $width,
        public Color $color = new RGBA(0, 0, 0, 0),
        public string $style = self::STYLE_SOLID,
    ) {
    }

    public function toString ():string {
        return 'border: ' . $this->width . 'px ' . $this->style . ' ' . $this->color->toString();
    }
}
