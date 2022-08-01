<?php declare(strict_types=1);

namespace Scraper\ScraperGiantBomb\Model;

class Game extends GameSearch
{
    /** @var array<int, Image>|null */
    public ?array $images = [];
    /** @var array<int, Video>|null */
    public ?array $videos = [];
    /** @var array<int, Character>|null */
    public ?array $characters = [];
    /** @var array<int, Concept>|null */
    public ?array $concepts = [];
    /** @var array<int, Developer>|null */
    public ?array $developers = [];
    /** @var array<int, Character>|null */
    public ?array $firstAppearanceCharacters = [];
    /** @var array<int, Concept>|null */
    public ?array $firstAppearanceConcepts = [];
    /** @var array<int, Location>|null */
    public ?array $firstAppearanceLocations = [];
    /** @var array<int, ObjectClass>|null */
    public ?array $firstAppearanceObjects = [];
    /** @var array<int, Person>|null */
    public ?array $firstAppearancePeople = [];
    /** @var array<int, Franchise>|null */
    public ?array $franchises = [];
    /** @var array<int, Genre>|null */
    public ?array $genres = [];
    /* @phpstan-ignore-next-line */
    public $killedCharacters;
    /** @var array<int, Location>|null */
    public ?array $locations = [];
    /** @var array<int, ObjectClass>|null */
    public ?array $objects = [];
    /** @var array<int, Person>|null */
    public ?array $people = [];
    /** @var array<int, Publisher>|null */
    public ?array $publishers = [];
    /** @var array<int, Release>|null */
    public ?array $releases = [];
    /** @var array<int, Dlc>|null */
    public ?array $dlcs = [];
    /** @var array<int, Review>|null */
    public ?array $reviews = [];
    /** @var array<int, SimilarGame>|null */
    public ?array $similarGames = [];
    /** @var array<int, Theme>|null */
    public ?array $themes = [];

    public function addImages(Image $image): self
    {
        $this->images[] = $image;
        return $this;
    }

    public function addVideos(Video $video): self
    {
        $this->videos[] = $video;
        return $this;
    }

    public function addCharacters(Character $character): self
    {
        $this->characters[] = $character;
        return $this;
    }

    public function addConcepts(Concept $concept): self
    {
        $this->concepts[] = $concept;
        return $this;
    }

    public function addDevelopers(Developer $developer): self
    {
        $this->developers[] = $developer;
        return $this;
    }

    public function addFirstAppearanceCharacters(Character $firstAppearanceCharacter): self
    {
        $this->firstAppearanceCharacters[] = $firstAppearanceCharacter;
        return $this;
    }

    public function addFirstAppearanceConcepts(Concept $firstAppearanceConcept): self
    {
        $this->firstAppearanceConcepts[] = $firstAppearanceConcept;
        return $this;
    }

    public function addFirstAppearanceLocations(Location $firstAppearanceLocation): self
    {
        $this->firstAppearanceLocations[] = $firstAppearanceLocation;
        return $this;
    }

    public function addFirstAppearanceObjects(ObjectClass $firstAppearanceObject): self
    {
        $this->firstAppearanceObjects[] = $firstAppearanceObject;
        return $this;
    }

    public function addFirstAppearancePeople(Person $firstAppearancePerson): self
    {
        $this->firstAppearancePeople[] = $firstAppearancePerson;
        return $this;
    }

    public function addFranchises(Franchise $franchise): self
    {
        $this->franchises[] = $franchise;
        return $this;
    }

    public function addGenres(Genre $genre): self
    {
        $this->genres[] = $genre;
        return $this;
    }

    public function addLocations(Location $location): self
    {
        $this->locations[] = $location;
        return $this;
    }

    public function addObjects(ObjectClass $object): self
    {
        $this->objects[] = $object;
        return $this;
    }

    public function addPeople(Person $person): self
    {
        $this->people[] = $person;
        return $this;
    }

    public function addPublishers(Publisher $publisher): self
    {
        $this->publishers[] = $publisher;
        return $this;
    }

    public function addReleases(Release $release): self
    {
        $this->releases[] = $release;
        return $this;
    }

    public function addDlcs(Dlc $dlc): self
    {
        $this->dlcs[] = $dlc;
        return $this;
    }

    public function addReviews(Review $review): self
    {
        $this->reviews[] = $review;
        return $this;
    }

    public function addSimilarGames(SimilarGame $similarGame): self
    {
        $this->similarGames[] = $similarGame;
        return $this;
    }

    public function addThemes(Theme $theme): self
    {
        $this->themes[] = $theme;
        return $this;
    }
}
