<?php

namespace ChaseCrawford\Stats;

class Basketball
{
    public static function calcTrueShootingPercentage(
        int $fieldGoalsMade,
        int $fieldGoalAttempts,
        int $freeThrowsMade
    ) : float
    {
        return (($fieldGoalsMade + 0.5 * $freeThrowsMade) / $fieldGoalAttempts) * 100;
    }

    public static function calcPurePointRating(
        int $assists,
        int $turnovers,
        int $minutes,
        float $teamPace,
        float $leaguePace
    ) : float
    {
        return ($leaguePace / $teamPace) * ((($assists * 2/3) - $turnovers) / $minutes) * 100;
    }
}