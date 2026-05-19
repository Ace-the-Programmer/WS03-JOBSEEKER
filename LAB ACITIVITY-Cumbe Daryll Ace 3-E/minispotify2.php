<?php

abstract class Account
{
    protected $username;
    protected $plan;

    public function __construct($username, $plan)
    {
        $this->username = $username;
        $this->plan = $plan;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getPlan()
    {
        return $this->plan;
    }

    abstract public function Plan();
}

class Premium extends Account
{
    public function Plan()
    {
        return "Premium Plan: Ad-free music, offline listening, and more.";
    }
}

class Free extends Account
{
    public function Plan()
    {
        return "Free Plan: Access to music with ads and limited features.";
    }
}

interface Playable
{
    public function play();
    public function pause();
}

class Song implements Playable
{
    public function play()
    {
        return "Now Playing: Love Me Not ";
    }

    public function pause()
    {
        return "Paused. ";
    }
}

$user1 = new Premium('Ace', 'Premium');
$song1 = new Song();

echo "Username: " . $user1->getUsername() . "<br>Plan: " . $user1->getPlan() .
    "<br>" . $user1->Plan() . "<br>" . $song1->play() . "<br>";

$user2 = new Free('Ace', 'Free');
$song2 = new Song();

echo "Username: " . $user2->getUsername() . "<br>Plan: " . $user2->getPlan() .
    "<br>" . $user2->Plan() . "<br>" . $song2->pause();
