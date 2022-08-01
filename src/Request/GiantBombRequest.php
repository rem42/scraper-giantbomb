<?php declare(strict_types=1);

namespace Scraper\ScraperGiantBomb\Request;

use Scraper\Scraper\Annotation\Scraper;
use Scraper\Scraper\Request\RequestQuery;
use Scraper\Scraper\Request\ScraperRequest;

/**
 * @Scraper(host="www.giantbomb.com", scheme="HTTPS", method="GET", path="api/")
 */
abstract class GiantBombRequest extends ScraperRequest implements RequestQuery
{
    /** @var array<string, int|string|bool> */
    protected array $parameters = [];

    public function __construct(
        protected string $apiKey
    ) {}

    /**
     * @return array<string, bool|int|string>
     */
    public function getQuery(): array
    {
        return array_merge(
            [
                'api_key' => $this->apiKey,
                'format'  => 'json',
            ],
            $this->parameters
        );
    }
}
