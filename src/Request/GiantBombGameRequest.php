<?php declare(strict_types=1);

namespace Scraper\ScraperGiantBomb\Request;

use Scraper\Scraper\Attribute\Scraper;

#[Scraper(path: 'game/{id}')]
class GiantBombGameRequest extends GiantBombRequest
{
    protected string $id;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->id = $id;
        return $this;
    }
}
