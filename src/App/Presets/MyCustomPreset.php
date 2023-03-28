<?php
declare(strict_types = 1);

namespace App\Presets;

use NotBack\Colors\Color;
use NotBack\Colors\RGB;
use NotBack\CssAttributes\Border;
use NotBack\CssAttributes\Padding;
use NotBack\Interfaces\Applyable;
use NotBack\NotBack;

class MyCustomPreset implements Applyable {
    public function __construct (
        public readonly Color $mainColor = new RGB(255, 255, 255),
        public readonly Border $strongBorder = new Border(4),
        public readonly Padding $padding = new Padding(20),
    ) {
    }

    public function applyTo (NotBack $notback):void {
        // $notback->addStyle( file_get_contents("some.css") );
    }
}
