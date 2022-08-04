<?php declare(strict_types=1);

namespace Scraper\ScraperGiantBomb\Request;

use Scraper\Scraper\Attribute\Scraper;

/**
 * @Scraper(path="search/")
 */
#[Scraper(path: 'search/')]
class GiantBombSearchGameRequest extends GiantBombRequest
{
    /**
     * @return array<string, bool|int|string>
     */
    public function getQuery(): array
    {
        $this->parameters['resources'] = 'game';

        return parent::getQuery();
    }

    public function setQuery(string $query): self
    {
        $this->parameters['query'] = $query;

        return $this;
    }
}
