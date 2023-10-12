<?php

namespace app\MyClass;

use Illuminate\Support\Carbon;

class User
{
    private string $username;
    private string $firstName;
    private string $lastName;
    private string $gender;
    private string $birthday;
    private string $nativeLanguage;
    private array $knownLanguages; // string array
    private array $targetLanguages; // string array
    private array $currentMeetingList; // Meetup array

    public function __construct(
        string $username,
        string $firstName,
        string $lastName,
        string $gender,
        string $birthday,
        string $nativeLanguage,
        array $knownLanguages,
        array $targetLanguages,
        array $currentMeetingList
    ) {
        $this->username = $username;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->gender = $gender;
        $this->birthday = $birthday;
        $this->nativeLanguage = $nativeLanguage;
        $this->knownLanguages = $knownLanguages;
        $this->targetLanguages = $targetLanguages;
        $this->currentMeetingList = $currentMeetingList;
    }

    public function getAge(): string
    {
        $age = Carbon::parse($this->birthday);
        return $age;
    }

    // getter and setter start
    public function getUserName(): string
    {
        return $this->username;
    }

    public function setUserName(string $username): void
    {
        $this->username = $username;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
    }

    public function getGender(): string
    {
        return $this->gender;
    }

    public function setGender(string $gender): void
    {
        $this->gender = $gender;
    }

    public function getBirthday(): string
    {
        return $this->birthday;
    }

    public function setBirthday(string $birthday): void
    {
        $this->birthday = $birthday;
    }

    public function getNativeLanguage(): string
    {
        return $this->nativeLanguage;
    }

    public function setNativeLanguage(string $nativeLanguage): void
    {
        $this->nativeLanguage = $nativeLanguage;
    }

    /**
     * @return string array[]
     */
    public function getKnownLanguages(): array
    {
        return $this->knownLanguages;
    }

    /**
     * @param string[]
     */
    public function setKnownLanguages(array $knownLanguages): void
    {
        $this->knownLanguages = $knownLanguages;
    }

    /**
     * @return string[]
     */
    public function getTargetLanguages(): array
    {
        return $this->targetLanguages;
    }

    /**
     * @param string[]
     */
    public function setTargetLanguages(array $targetLanguages): void
    {
        $this->targetLanguages = $targetLanguages;
    }

    /**
     * @return Meetup[]
     */
    public function getCurrentMeetingList(): array
    {
        return $this->currentMeetingList;
    }

    /**
     * @param Meetup[]
     */
    public function setCurrentMeetingList(array $currentMeetingList): void
    {
        $this->currentMeetingList = $currentMeetingList;
    }
    // getter and setter end
}
