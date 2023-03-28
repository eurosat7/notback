<?php
declare(strict_types = 1);

namespace App\Themes;

use NotBack\Colors\Color;
use NotBack\Colors\RGB;
use NotBack\NotBack;
use NotBack\Themes\Minimal;

class MyCustomTheme extends Minimal {
    public function __construct (
        public readonly Color $accent1 = new RGB(255, 0, 0),
    ) {
    }

    public function applyTo (NotBack $notback):void {
        // $notback->addStyle( file_get_contents("some.css") );
    }
}
