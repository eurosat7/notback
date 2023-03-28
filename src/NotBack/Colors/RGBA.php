<?php
declare(strict_types = 1);

namespace NotBack\Colors;

class RGBA extends Color {
    public function __construct (
        public int $r,
        public int $g,
        public int $b,
        public int $a,
    ) {
    }

    public function toString ():string {
        return implode("", [
            'rgbga (',
            $this->r,
            ',',
            $this->g,
            ',',
            $this->b,
            ',',
            $this->a,
            ')',
        ]);
    }
}
