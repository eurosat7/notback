<?php
declare(strict_types = 1);

namespace NotBack\Elements;

use NotBack\NotBack;

class Page extends Element {

    private readonly Head $head;
    private readonly Body $body;

    public function __construct (
        NotBack $notBack,
        public string $title = ""
    ) {
        parent::__construct($notBack, "page");
        $this->head = $notBack->newElement(Head::class);
        $this->body = $notBack->newElement(Body::class);
        $this->children[] = $this->head;
        $this->children[] = $this->body;
    }

    public function addCssFile (string $cssfilename):void {
        $link = $this->notBack->newElement(Link::class);
        $link->href = $cssfilename;
        $this->head->add($link);
    }

    public function add (Element $element):void {
        $this->body->add($element);
    }

    public function toString ():string {
        $out = [];
        $out[] = '<html>';
        $out[] = parent::toString(); // TODO: Change the autogenerated stub
        $out[] = '</html>';

        return implode("\n", $out);
    }

}
