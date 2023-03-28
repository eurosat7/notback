<?php
declare(strict_types = 1);

namespace NotBack\Elements;

class Link extends Element {
    public string $href = "";

    public function toString ():string {
        return (implode("", [
            '<link rel="stylesheet" href="' .
            $this->esc('. $this->href .'),
            '">',
        ]));
    }
}
