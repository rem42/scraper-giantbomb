<?php

namespace Scraper\ScraperGiantBomb\Model;

class SearchGame extends Search
{
    /** @var array<int, GameSearch> */
    public array $results = [];

    public function addResults(GameSearch $result): self
    {
        $this->results[] = $result;
        return $this;
    }
}
