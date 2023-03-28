<?php
declare(strict_types = 1);

namespace NotBack\Interfaces;

use NotBack\NotBack;

interface Applyable {
    public function applyTo (NotBack $notback):void;
}
