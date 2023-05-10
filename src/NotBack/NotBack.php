<?php
declare(strict_types = 1);

namespace NotBack;

use NotBack\CssAttributes\CssAttribute;
use NotBack\Elements\Element;
use NotBack\Elements\Page;
use NotBack\Interfaces\Applyable;

class NotBack {
    /** @var array<string> */
    private array $styles = [];

    public function toString (Page $page):string {
        $cssfilename = $this->writeCssToFile();
        $page->addCssFile($cssfilename);

        return $page->toString();
    }

    /**
     * @param class-string<Applyable> $class
     */
    public function apply (string $class):void {
        $instance = new $class();
        $this->applyInstance($instance);
    }

    public function applyInstance (Applyable $class):void {
        $class->applyTo($this);
    }

    /**
     * @param class-string<Element> $class
     */
    public function newElement (string $class):Element {
        return new $class($this);
    }

    /**
     * @param CssAttribute[] $styleAttributes
     */
    public function addCssAsClassname (array $styleAttributes):string {
        $css = [];
        foreach ($styleAttributes as $def) {
            $css[] = $def->toString();
        }
        $text = implode(";", $css);
        $cssname = md5($text);
        $this->styles[$cssname] = '.' . $cssname . '{' . $text . '}';

        return $cssname;
    }

    public function addStyle (string $css):void {
        $md5 = md5($css);
        $this->styles[$md5] = $css;
    }

    private function writeCssToFile ():string {
        $content = implode("\n", $this->styles);
        $md5 = md5($content);
        $cssfilename = "assets/page." . $md5 . ".css";
        file_put_contents("public/" . $cssfilename, $content);

        return $cssfilename;
    }

}
