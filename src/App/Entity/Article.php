<?php
declare(strict_types = 1);

namespace App\Entity;

use NotBack\Components\Card;

class Article {
    public function __construct (
        protected int $id,
        protected string $title,
        protected string $teaser,
        protected string $image
    ) {
    }

    public function applyToCard (Card $card):void {
        $card->title = $this->title;
        $card->route = ['article', $this->id];
        $card->content = $this->teaser;
        $card->image = $this->image;
    }
}
