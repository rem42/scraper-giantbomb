<?php declare(strict_types=1);

namespace Scraper\ScraperGiantBomb\Api;

use Scraper\ScraperGiantBomb\Model\Game;

class GiantBombGameApi extends AbstractGiantBombApi
{
    protected function getContent(array $content): array
    {
        if (!isset($content['results'])) {
            return [];
        }

        return $content['results'];
    }

    protected function getType(): string
    {
        return Game::class;
    }
}
