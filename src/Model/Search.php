<?php declare(strict_types=1);

namespace Scraper\ScraperGiantBomb\Model;

class Search
{
    public ?string $error             = null;
    public ?int $limit                = null;
    public ?int $offset               = null;
    public ?int $numberOfPageResults  = null;
    public ?int $numberOfTotalResults = null;
    public ?int $statusCode           = null;
    public ?string $version           = null;
}
