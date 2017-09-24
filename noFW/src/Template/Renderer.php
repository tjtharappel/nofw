<?php declare(strict_types = 1);

namespace RT\Template;

interface Renderer
{
    public function render($template, $data = []) : string;
}