<?php
declare(strict_types = 1);

namespace NotBack\Elements;

use NotBack\NotBack;

class Page extends Element {

    private Head $head;
    private Body $body;

    public function __construct (
        NotBack $notBack,
        public string $title = ""
    ) {
        parent::__construct($notBack, "page");
        $this->head = $notBack->newElement(Head::class);
        $this->body = $notBack->newElement(Body::class);
    }

    public function addCssFile (string $cssfilename):void {
        $link = $this->notBack->newElement(Link::class);
        $link->href = $cssfilename;
        $this->head->add($link);
    }

    public function add (Element $element):void {
        $this->body->add($element);
    }

}
