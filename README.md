# Ratings

A PHP class which implements various statistical functions for the sport of basketball

## Install

```
composer require chasecrawford/stats
```

## Usage

```php
use ChaseCrawford\Stats\Basketball;

print Basketball::trueShootingPercentage(
    15, // Field Goals Made
    30, // Field Goal Attempts
    5   // Free Throws Made
);

print Basketball::purePointRating(
    60, // Assists
    20, // Turnovers
    300, // Minutes Played
    65, // Team Pace
    68, // League Pace
);
```