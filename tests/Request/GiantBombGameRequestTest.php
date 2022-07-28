<?php

namespace Scraper\ScraperGiantBomb\Tests\Request;

use Scraper\ScraperGiantBomb\Model\Game;
use Scraper\ScraperGiantBomb\Model\Person;
use Scraper\ScraperGiantBomb\Request\GiantBombGameRequest;

/**
 * @internal
 */
class GiantBombGameRequestTest extends AbtractRequestTest
{
    public function testGiantBombGameRequest(): void
    {
        $client = $this->getClient('game.json');

        $request = new GiantBombGameRequest('apiKey');
        $request
            ->setId('3030-49973')
        ;

        $result = $client->send($request);

        $this->assertInstanceOf(Game::class, $result);
        $this->assertIsArray($result->people);
        $this->assertInstanceOf(Person::class, $result->people[0]);
    }
}
