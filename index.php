<?php
include("vendor/autoload.php");

use App\{Entity\Article};
use App\Presets\MyCustomPreset;
use App\Themes\MyCustomTheme;
use NotBack\{Components, CssAttributes\Background, CssAttributes\FontSize, Elements, NotBack, Presets\MobileFirst, Presets\Reset};

$notback = new NotBack();
$notback->apply(Reset::class);
$notback->apply(MobileFirst::class);
$notback->apply(MyCustomTheme::class);

$preset = new MyCustomPreset();

$page = $notback->newElement(Elements\Page::class);
$page->addCssAttribute(new Background($preset->mainColor));
$page->title = 'home';

$carussell = $notback->newElement(Components\Carussell::class);
$carussell->addCssAttribute($preset->padding);
$carussell->addCssAttribute($preset->strongBorder);

$page->add($carussell);

$bigcard = $notback->newElement(Components\Card::class);
$bigcard->addCssAttribute(new FontSize(40));

$smallcard = $notback->newElement(Components\Card::class);
$smallcard->addCssAttribute(new FontSize(20));

$articles = []; // mysql result set
$articles[11] = new Article(1, "some title", "teaser text", 'images/articles/1/thumbnail.png');
$articles[22] = new Article(2, "some other title", "some teaser text", 'images/articles/2/thumbnail.png');
$articles[33] = new Article(3, "other title", "some teaser", 'images/articles/3/thumbnail.png');

$card_a11 = $bigcard->clone();
$card_a22 = $smallcard->clone();
$card_a33 = $smallcard->clone();
$articles[11]->applyToCard($card_a11);
$articles[22]->applyToCard($card_a22);
$articles[33]->applyToCard($card_a33);

$carussell->add($card_a11);
$carussell->add($card_a22);
$carussell->add($card_a33);

echo $notback->toString($page);
