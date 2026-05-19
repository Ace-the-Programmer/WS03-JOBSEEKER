<?php

interface Playable
{
    public function play();
    public function pause();
}

abstract class Account
{
    protected $username;
    protected $plan;

    public function __construct($username, $plan)
    {
        $this->username = $username;
        $this->plan = $plan;
    }

    public function getAccountInfo()
    {
        // Added <br> for browser compatibility
        return "<strong>Account Info</strong><br>User: " . $this->username . "<br>Plan: " . $this->plan . "<br>";
    }

    abstract public function Plan();
}

class PremiumAccount extends Account implements Playable
{
    public function __construct($username)
    {
        parent::__construct($username, "Premium");
    }

    public function play()
    {
        return "Status: [No Ads]  Playing high-quality audio...";
    }

    public function pause()
    {
        return "Status: Music paused.";
    }

    public function Plan()
    {
        return "Premium Plan: Ad-free music, high-quality audio.";
    }
}

class FreeAccount extends Account implements Playable
{
    public function __construct($username)
    {
        parent::__construct($username, "Free");
    }

    public function play()
    {
        return "Status: [AD] 'Buy Premium now!'  ... then playing music.";
    }

    public function pause()
    {
        return "Status: Music paused.";
    }

    public function Plan()
    {
        return "Free Plan: Music with ads.";
    }
}

// --- Implementation with Browser Formatting ---

echo "<h2>PREMIUM ACCOUNT</h2>";
$premiumUser = new PremiumAccount("Ace");
echo $premiumUser->getAccountInfo();
echo $premiumUser->play() . "<br>";
echo $premiumUser->pause() . "<br>";

echo "<hr>"; // Horizontal line separator

echo "<h2>FREE ACCOUNT</h2>";
$freeUser = new FreeAccount("Cumbe");
echo $freeUser->getAccountInfo();
echo $freeUser->play() . "<br>";
echo $freeUser->pause() . "<br>";
