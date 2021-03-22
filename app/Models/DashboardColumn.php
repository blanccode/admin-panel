<?php

namespace App\Models;

use App\Helpers\CalcPercentages;
use Carbon\Carbon;
use App\Models\Sale;
use App\Models\User;
use App\Models\View;
use App\Repositories\RoleRepository;
use App\Repositories\UserRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DashboardColumn extends Model
{
    use HasFactory;

    public $dashboardColumns;
    public $viewsCount;
    public $viewsPercentage;
    public $usersCount;
    public $usersPercentage;
    public $salesPercentage;


    public function __construct( Sale $sale,View $view, User $user, UserRepository $userRepository, RoleRepository $roleRepository ) {
    

        $this->userRepository = $userRepository;
        $this->roleRepository = $roleRepository;

        $viewsCount = $view->addAllViews();
        $usersCount = $this->userRepository->getUserCount();
        $salesCount = $sale->getSalesCount();
        
        $viewsPercentage = $view->calcViewsIncrease();
        $usersPercentage = $user->calcUsersIncrease();
        $salesPercentage = $sale->calcSalesIncrease();

        $viewsSinceWeek = $view->calcViewsSinceWeak();
        $usersSinceWeek = $user->calcUsersSinceWeek();

        $salesSinceWeek = $sale->calcSalesSinceWeek();


        // dd($user->calcUsersIncrease());
        
        $this->dashboardColumns[0]['title'] = 'total traffic';
        $this->dashboardColumns[0]['icon-class'] = "bg-gradient-red";
        $this->dashboardColumns[0]['icon-name'] = "ni ni-active-40";
        $this->dashboardColumns[0]['count'] = $viewsCount;
        $this->dashboardColumns[0]['month-percentage'] = $viewsPercentage;
        $this->dashboardColumns[0]['week-percentage'] = $viewsSinceWeek;
        // $this->dashboardColumns[0]['percentage'] = $view->calcViewsIncrease();

        $this->dashboardColumns[1]['title'] = 'new users';
        $this->dashboardColumns[1]['icon-class'] = "bg-gradient-orange";
        $this->dashboardColumns[1]['icon-name'] = "ni ni-chart-pie-35";
        $this->dashboardColumns[1]['count'] = $usersCount;
        $this->dashboardColumns[1]['month-percentage'] = $usersPercentage;
        $this->dashboardColumns[1]['week-percentage'] = $usersSinceWeek;
        // $this->dashboardColumns[1]['percentage'] = $user->calcUsersIncrease();

        $this->dashboardColumns[2]['title'] = 'sales';
        $this->dashboardColumns[2]['icon-class'] = "bg-gradient-green";
        $this->dashboardColumns[2]['icon-name'] = "ni ni-money-coins";
        $this->dashboardColumns[2]['count'] = $salesCount;
        $this->dashboardColumns[2]['month-percentage'] = $salesPercentage;
        $this->dashboardColumns[2]['week-percentage'] = $salesSinceWeek;
        // $this->dashboardColumns[2]['percentage'] = $sale->calcSalesIncrease();

        $this->dashboardColumns[3]['title'] = 'performence';
        $this->dashboardColumns[3]['icon-class'] = "bg-gradient-info";
        $this->dashboardColumns[3]['icon-name'] = "ni ni-chart-bar-32";
        $this->dashboardColumns[3]['count'] = "100%";
        $this->dashboardColumns[3]['month-percentage'] = -20;
        $this->dashboardColumns[3]['week-percentage'] = -3;
        // $this->dashboardColumns[3]['percentage'] =  $user->calcUsersIncrease();
    }
}
