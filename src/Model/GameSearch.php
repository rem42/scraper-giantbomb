<?php declare(strict_types=1);

namespace Scraper\ScraperGiantBomb\Model;

class GameSearch
{
    public ?string $aliases         = null;
    public ?string $apiDetailUrl    = null;
    public ?string $dateAdded       = null;
    public ?string $dateLastUpdated = null;
    public ?string $deck            = null;
    public ?string $description     = null;
    /* @phpstan-ignore-next-line */
    public $expectedReleaseDay;
    /* @phpstan-ignore-next-line */
    public $expectedReleaseMonth;
    /* @phpstan-ignore-next-line */
    public $expectedReleaseQuarter;
    /* @phpstan-ignore-next-line */
    public $expectedReleaseYear;
    public ?string $guid = null;
    public ?int $id      = null;
    public ?Image $image = null;
    /** @var array<int, ImageTag>|null */
    public ?array $imageTags         = [];
    public ?string $name             = null;
    public ?int $numberOfUserReviews = null;
    /** @var array<int, OriginalGameRating>|null */
    public ?array $originalGameRating   = [];
    public ?string $originalReleaseDate = null;
    /** @var array<int, Platform>|null */
    public ?array $platforms      = [];
    public ?string $siteDetailUrl = null;
    public ?string $resourceType  = null;

    public function addImageTags(ImageTag $imageTag): self
    {
        $this->imageTags[] = $imageTag;
        return $this;
    }

    public function addOriginalGameRating(OriginalGameRating $originalGameRating): self
    {
        $this->originalGameRating[] = $originalGameRating;
        return $this;
    }

    public function addPlatforms(Platform $platform): self
    {
        $this->platforms[] = $platform;
        return $this;
    }
}
