<?php
declare(strict_types = 1);

namespace NotBack\Elements;

use NotBack\CssAttributes\CssAttribute;
use NotBack\NotBack;

/**
 * @psalm-consistent-constructor
 */
class Element {

    /** @var Element[] $children */
    protected array $children = [];

    /** @var CssAttribute[] $styleAttributes */
    protected array $styleAttributes = [];
    /** @var array<string> */
    public array $classnames = [];
    public ?string $content = null;

    public function __construct (
        protected readonly NotBack $notBack,
        protected string $tag = "div"
    ) {
    }

    public function clone ():static {
        return clone $this;
    }

    public function add (Element $element):void {
        $this->children[] = $element;
    }

    public function addCssAttribute (CssAttribute $attribute):void {
        $this->styleAttributes[] = $attribute;
    }

    public function toString ():string {
        $out = [];
        $out[] = $this->startTag();
        foreach ($this->children as $child) {
            $out[] = $child->toString();
        }
        if ($this->content !== null) {
            $out[] = $this->content;
        }
        $out[] = $this->endTag();

        return implode("\n", $out);
    }

    public function esc (string $string):string {
        return htmlentities($string);
    }

    public function startTag ():string {
        $this->classnames[] = $this->notBack->addCssAsClassname($this->styleAttributes);

        return '<' . $this->tag . ' class="' . implode(" ", $this->classnames) . '">';
    }

    public function endTag ():string {
        return "</" . $this->tag . ">";
    }

    // I stopped here...
}
