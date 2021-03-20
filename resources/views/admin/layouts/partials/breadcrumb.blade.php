<div class="container-fluid header  ">
    <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
            <h6 class="h2  d-inline-block mb-0 ">{{Str::of(last(request()->segments()))->title()}}</h6>
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                    <li class="breadcrumb-item"><a href="{{route(request()->segment(1))}}"><i class="fas fa-home "></i></a></li>
                    @php $segments = ''; @endphp
                    @foreach (request()->segments() as $urlSegment)
                    @php
                        $segments .= '/'.$urlSegment; @endphp
                       
                    <li class="breadcrumb-item "><a href="{{$segments}}" class="text-muted">{{Str::of($urlSegment)->title()}}</a></li>
                    @endforeach
                </ol>
            </nav>
        </div>
        <div class="col-lg-6 col-5 text-right">
            <a href="#" class="btn btn-sm btn-neutral text-custom">New</a>
            <a href="#" class="btn btn-sm btn-neutral text-custom">Filters</a>
        </div>
    </div>
</div>

@if (request()->is('dashboard/users'))

<div class="pb-5 bg-primary"></div>
@else
    
@endif
