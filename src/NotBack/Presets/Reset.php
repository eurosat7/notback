<?php
declare(strict_types = 1);

namespace NotBack\Presets;

use NotBack\Interfaces\Applyable;
use NotBack\NotBack;

class Reset implements Applyable {
    public function applyTo (NotBack $notback):void {
        $css = file_get_contents(__DIR__ . "/reset.css");
        if ($css !== false) {
            $notback->addStyle($css);
        }
    }
}
