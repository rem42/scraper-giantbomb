<?php

namespace Scraper\ScraperGiantBomb\Api;

use Scraper\Scraper\Api\AbstractApi;

abstract class AbstractGiantBombApi extends AbstractApi
{
    public function execute(): object|array|bool|string
    {
        $content = $this->response->getContent();

        $content = json_decode($content, true, 512, \JSON_THROW_ON_ERROR);

        if (!\is_array($content)) {
            throw new \Exception('no result');
        }

        $jsonContent = json_encode($this->getContent($content), \JSON_THROW_ON_ERROR);

        /* @phpstan-ignore-next-line */
        return $this->serializer->deserialize($jsonContent, $this->getType(), 'json');
    }

    /**
     * @param array<string, array<string, array<string, mixed>>> $content
     *
     * @return array<string, mixed>
     */
    abstract protected function getContent(array $content): array;

    /**
     * @return class-string|string
     */
    abstract protected function getType(): string;
}
