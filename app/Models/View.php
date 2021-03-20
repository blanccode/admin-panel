<?php

namespace App\Models;

use App\Helpers\CalcPercentages;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class View extends Model 
{
    use HasFactory;

    protected $fillabe = [];

    public function incrementViewCount()
    {
        $time = Carbon::now()->addMonth(1);
        $this->views++;
        $this->created_at = $time;
        $this->save();
        return;
        
    }

    public function addAllViews() :int {
        $views = View::all();

        $viewCount = 0;
        foreach ($views as $view) {
            $viewCount++;
            
        }
        return $viewCount;
    }
    public function calcViewsIncrease() 
    {
        return CalcPercentages::calcIncrease(CalcPercentages::getLastMonth($this), CalcPercentages::getCurrentMonth($this));
    }

    
    public function calcViewsSinceWeak() : int 
    {
        return CalcPercentages::calcIncrease(CalcPercentages::getSinceLastWeak($this) , CalcPercentages::getCurrentWeak($this));
        // return 3;
    }
    

}

