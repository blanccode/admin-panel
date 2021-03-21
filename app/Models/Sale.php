<?php

namespace App\Models;

use App\Helpers\CalcPercentages;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Sale extends Model
{
    use HasFactory;


    public function calcSalesIncrease()
    {

        return CalcPercentages::calcIncrease(CalcPercentages::getLastMonth($this), CalcPercentages::getCurrentMonth($this));
    }
    public function getSalesCount()
    {
        $sales = Sale::all();
        $salesCount = 0;
        foreach ($sales as $sale) {
            $salesCount++;
        }
        return $salesCount;
    }
    public function calcSalesSinceWeek(): int
    {
        return CalcPercentages::calcIncrease(CalcPercentages::getSinceLastWeek($this), CalcPercentages::getCurrentWeak($this));
    }

   
}
