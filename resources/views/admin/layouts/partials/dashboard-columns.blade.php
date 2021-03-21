{{-- 
@if ($usersPercentage >= 0 )
<span class="text-success mr-2"><i class="fa fa-arrow-up"></i>
    {{$usersPercentage}}%</span>

@else
<span class="text-warning mr-2"><i class="fa fa-arrow-down"></i>
    {{$usersPercentage}}%</span>
@endif --}}
<form method="POST">
    @csrf
    <div class="custom-flex">
          
        <select name="since" value="" class="form-control pt-0">
            <option value="last-week" class="">Since Last Week</option>
            <option value="last-month" class="">Since Last Month</option>
            <option value="last-year" class="">Since Last Year</option>
        </select>


        <i class="fas fa-chevron-down arrow-down"></i>

    </div>
</form>
        {{-- <div class="col-xl-3 col-md-6">
            <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">New users</h5>
                            <span class="h2 font-weight-bold mb-0 gray">{{$totalUsers ?? ''}}</span>
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                                <i class="ni ni-chart-pie-35"></i>
                            </div>
                        </div>
                    </div>
                    @if ($usersPercentage ?? '' >= 0 )
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i>
                        {{number_format($usersPercentage ?? 0, 2)}}%</span>
    
                    @else
                    <span class="text-warning mr-2"><i class="fa fa-arrow-down"></i>
                        {{number_format($usersPercentage ?? 0 , 2)}}%</span>
                    @endif
                    @include('admin.layouts.partials.dropdown')
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">Sales</h5>
                            <span class="h2 font-weight-bold mb-0 gray">924</span>
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                                <i class="ni ni-money-coins"></i>
                            </div>
                        </div>
                    </div>
                    @if ($salesPercentage ?? '' >= 0 )
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i>
                        {{number_format($salesPercentage ?? 0, 2)}}%</span>
    
                    @else
                    <span class="text-warning mr-2"><i class="fa fa-arrow-down"></i>
                        {{number_format($salesPercentage ?? 0, 2)}}%</span>
                    @endif
                    @include('admin.layouts.partials.dropdown')
                    
                </div>
                
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">Performance</h5>
                            <span class="h2 font-weight-bold mb-0 gray">49,65%</span>
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                                <i class="ni ni-chart-bar-32"></i>
                            </div>
                        </div>
                    </div>
                    @if ($salesPercentage ?? '' >= 0 )
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i>
                        {{number_format($salesPercentage ?? 0, 2)}}%</span>
    
                    @else
                    <span class="text-warning mr-2"><i class="fa fa-arrow-down"></i>
                        {{number_format($salesPercentage ?? 0, 2)}}%</span>
                    @endif
                    @include('admin.layouts.partials.dropdown')
                </div>
            </div>
        </div>--}}
