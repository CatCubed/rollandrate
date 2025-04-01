<?php

namespace App\Entity;

use App\Repository\GameRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: GameRepository::class)]
class Game
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private string $title;

    #[ORM\Column(length: 255)]
    private string $description;

    #[ORM\Column(length: 255)]
    private string $rules;

    #[ORM\Column(length: 255)]
    private string $image;

    #[ORM\Column]
    private int $releaseYear;

    #[ORM\Column]
    private int $difficulty;

    #[ORM\Column]
    private array $genres = [];

    #[ORM\Column]
    private int $playerCountMin;

    #[ORM\Column]
    private int $playerCountMax;

    #[ORM\Column]
    private float $reviewScore;

    #[ORM\Column]
    private array $images = [];

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;

        return $this;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getRules(): string
    {
        return $this->rules;
    }

    public function setRules(string $rules): static
    {
        $this->rules = $rules;

        return $this;
    }

    public function getImage(): string
    {
        return $this->image;
    }

    public function setImage(string $image): static
    {
        $this->image = $image;

        return $this;
    }

    public function getReleaseYear(): int
    {
        return $this->releaseYear;
    }

    public function setReleaseYear(int $releaseYear): static
    {
        $this->releaseYear = $releaseYear;

        return $this;
    }

    public function getDifficulty(): int
    {
        return $this->difficulty;
    }

    public function setDifficulty(int $difficulty): static
    {
        $this->difficulty = $difficulty;

        return $this;
    }

    public function getGenres(): array
    {
        return $this->genres;
    }

    public function setGenres(array $genres): static
    {
        $this->genres = $genres;

        return $this;
    }

    public function getPlayerCountMin(): int
    {
        return $this->playerCountMin;
    }

    public function setPlayerCountMin(int $playerCountMin): static
    {
        $this->playerCountMin = $playerCountMin;

        return $this;
    }

    public function getPlayerCountMax(): ?int
    {
        return $this->playerCountMax;
    }

    public function setPlayerCountMax(int $playerCountMax): static
    {
        $this->playerCountMax = $playerCountMax;

        return $this;
    }

    public function getReviewScore(): float
    {
        return $this->reviewScore;
    }

    public function setReviewScore(float $reviewScore): static
    {
        $this->reviewScore = $reviewScore;

        return $this;
    }

    public function getImages(): array
    {
        return $this->images;
    }

    public function setImages(array $images): static
    {
        $this->images = $images;

        return $this;
    }
}
