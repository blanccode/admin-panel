<?php

namespace App\Helpers;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;


class CalcPercentages {


    public static function calcIncrease($pastNum, $currentNum)
    {   if( isset($pastNum) && isset($currentNum) ) {
            $increase = $currentNum - $pastNum;

            $increase = $increase / $pastNum * 100;

            return number_format($increase, 2);
        }
    }

    // public static function calcIncrease($a, $b)
    // {
    //     return self::calcIncreaseSinceMonth(self::getLastMonth(), self::getCurrent());
    // }

    public static function getCurrentMonth($models) : int
    {
        $model = $models->whereYear('created_at', now()->year)
            ->whereMonth('created_at', now()->month)
            ->get();
        $getMonth = 0;
        foreach ($model as $model) {
            $getMonth++;
        }
        return $getMonth;
    }

    public static function getLastMonth($models) : int
    {
        $model = $models->whereDate('created_at', now()->subMonth())->get();
        $getLastMonth = 0;

        foreach ($model as $model) {
            $getLastMonth++;
        }
        return $getLastMonth;
    }
    
    
    public static function getSinceLastWeak($models) : int
    {
        $date = \Carbon\Carbon::now()->startOfWeek() and Carbon::now()->endOfWeek();
        $model = $models->whereBetween('created_at', [Carbon::now()->subWeek()->startOfWeek(), Carbon::now()->endOfWeek()])->get();

        $int = 0;

        foreach ($model as $model) {
            $int++;
        }
        return $int;

    } 
    public static function getCurrentWeak($models) :int
    {
        $date = \Carbon\Carbon::now()->startOfWeek() and Carbon::now()->endOfWeek();
        $model = $models->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->get();

        $int = 0;

        foreach ($model as $model) {
            $int++;
        }
        return $int;


    } 



}