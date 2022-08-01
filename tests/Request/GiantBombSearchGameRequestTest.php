<?php declare(strict_types=1);

namespace Scraper\ScraperGiantBomb\Tests\Request;

use Scraper\ScraperGiantBomb\Model\GameSearch;
use Scraper\ScraperGiantBomb\Model\SearchGame;
use Scraper\ScraperGiantBomb\Request\GiantBombSearchGameRequest;

/**
 * @internal
 */
class GiantBombSearchGameRequestTest extends AbtractRequestTest
{
    public function testGiantBombSearchGameRequest(): void
    {
        $client = $this->getClient('search_game.json');

        $request = new GiantBombSearchGameRequest('apiKey');
        $request
            ->setQuery('horizon+zero+dawn')
        ;

        $result = $client->send($request);

        $this->assertInstanceOf(SearchGame::class, $result);
        $this->assertIsArray($result->results);
        $this->assertInstanceOf(GameSearch::class, $result->results[0]);
    }
}
