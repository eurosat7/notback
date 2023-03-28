<?php
declare(strict_types = 1);

namespace NotBack\Themes;

use NotBack\Interfaces\Applyable;
use NotBack\NotBack;

class Minimal implements Applyable {
    public function applyTo (NotBack $notback):void {
        $notback->addStyle(file_get_contents(__DIR__ . "/minimal.css"));
    }
}
