<?php declare(strict_types=1);

namespace Scraper\ScraperGiantBomb\Api;

use Scraper\ScraperGiantBomb\Model\SearchGame;

class GiantBombSearchGameApi extends AbstractGiantBombApi
{
    protected function getContent(array $content): array
    {
        return $content;
    }

    protected function getType(): string
    {
        return SearchGame::class;
    }
}
