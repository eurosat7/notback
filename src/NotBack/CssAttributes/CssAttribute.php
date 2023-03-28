<?php
declare(strict_types = 1);

namespace NotBack\CssAttributes;

abstract class CssAttribute {
    abstract public function toString ():string;
}
