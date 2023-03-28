<?php
declare(strict_types = 1);

namespace NotBack\Presets;

use NotBack\Interfaces\Applyable;
use NotBack\NotBack;

class MobileFirst implements Applyable {
    public function applyTo (NotBack $notback):void {
        $notback->addStyle(file_get_contents(__DIR__ . "/mobilefirst.css"));
    }
}
