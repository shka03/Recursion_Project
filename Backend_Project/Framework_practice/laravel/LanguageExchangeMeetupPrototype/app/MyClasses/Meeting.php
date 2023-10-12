<?php

namespace app\MyClass;

use app\MyClass\User;

class Meeting
{
    private string $hostUsername;
    private string $title;
    private string $meetDate;
    private string $location;
    private string $languageA;
    private string $languageB;
    private array $participants;
    private int $min;
    private int $max;

    public function __construct(
        string $hostUsername,
        string $title,
        string $meetDate,
        string $location,
        string $languageA,
        string $languageB,
        array $participants,
        int $min,
        int $max
    ) {
        $this->hostUsername = $hostUsername;
        $this->title = $title;
        $this->meetDate = $meetDate;
        $this->location = $location;
        $this->languageA = $languageA;
        $this->languageB = $languageB;
        $this->participants = $participants;
        $this->min = $min;
        $this->max = $max;
    }

    public function addParticipant(User $participant): bool
    {
        $userCount = count($this->participants) + 1;
        if ($userCount >= $this->max) return false;

        // 追加を行い、部屋の言語の数を調べる。
        $this->participants[] = $participant;

        $countLanguageA = 0;
        $countLanguageB = 0;

        foreach ($this->participants as $existingParticipant) {
            if (
                $existingParticipant->getNativeLanguage() === $this->languageA ||
                $existingParticipant->getKnownLanguages() === $this->languageA
            ) {
                $countLanguageA++;
            } elseif (
                $existingParticipant->getNativeLanguage() === $this->languageB ||
                $existingParticipant->getKnownLanguages() === $this->languageB
            ) {
                $countLanguageB++;
            }
        }

        if ($countLanguageA !== $countLanguageB) {
            unset($this->participants[$userCount - 1]);

            return false;
        }

        return true;
    }

    // getter and setter start
    public function getHostUsername(): string
    {
        return $this->hostUsername;
    }

    public function setHostUsername(string $hostUsername): void
    {
        $this->hostUsername = $hostUsername;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getMeetDate(): string
    {
        return $this->meetDate;
    }

    public function setMeetDate(string $meetDate): void
    {
        $this->meetDate = $meetDate;
    }

    public function getLocation(): string
    {
        return $this->location;
    }

    public function setLocation(string $location): void
    {
        $this->location = $location;
    }

    public function getLanguageA(): string
    {
        return $this->languageA;
    }

    public function setLanguageA(string $languageA): void
    {
        $this->languageA = $languageA;
    }

    public function getLanguageB(): string
    {
        return $this->languageB;
    }

    public function setLanguageB(string $languageB): void
    {
        $this->languageB = $languageB;
    }

    /**
     * @return User[]
     */
    public function getParticipants(): array
    {
        return $this->participants;
    }

    /**
     * @param User[]
     */
    public function setParticipants(array $participants): void
    {
        $this->participants = $participants;
    }

    public function getMin(): int
    {
        return $this->min;
    }

    public function setMin(int $min): void
    {
        $this->min = $min;
    }

    public function getMax(): int
    {
        return $this->max;
    }

    public function setMax(int $max): void
    {
        $this->max = $max;
    }
    // getter and setter end
}
