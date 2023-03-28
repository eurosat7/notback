<?php
declare(strict_types = 1);

namespace NotBack\Colors;

class HSLA extends Color {
    public function __construct (
        public int $h,
        public int $s,
        public int $l,
        public int $a,
    ) {
    }

    public function toString ():string {
        return implode("", [
            'hsla (',
            $this->h,
            ',',
            $this->s,
            ',',
            $this->l,
            ',',
            $this->a,
            ')',
        ]);
    }
}
