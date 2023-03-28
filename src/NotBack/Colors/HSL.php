<?php
declare(strict_types = 1);

namespace NotBack\Colors;

class HSL extends Color {
    public function __construct (
        public int $h,
        public int $s,
        public int $l
    ) {
    }

    public function toString ():string {
        return implode("", [
            'hsl (',
            $this->h,
            ',',
            $this->s,
            ',',
            $this->l,
            ')',
        ]);
    }
}
