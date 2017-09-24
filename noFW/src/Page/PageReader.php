<?php declare(strict_types = 1);

namespace RT\Page;

interface PageReader
{
    public function readBySlug(string $slug) : string;
}