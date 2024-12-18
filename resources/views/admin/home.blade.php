@extends('layouts.admin')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">{{ __('dashboard.dashboard') }}</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">{{ __('dashboard.dashboard') }}</li>
    </ol>
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body d-flex justify-content-between">
                    <span>{{ __('dashboard.departments') }}</span>
                    <span class="badge bg-success">{{ $departments }}</span>
                </div>                
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link text-decoration-none" href="{{ route('admin.departments.index') }}">{{ __('dashboard.view_all') }}</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body d-flex justify-content-between">
                    <span>{{ __('dashboard.services') }}</span>
                    <span class="badge bg-success">{{ $services }}</span>
                </div> 
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link text-decoration-none" href="{{ route('admin.services.index') }}">{{ __('dashboard.view_all') }}</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">{{ __('dashboard.events') }}</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link text-decoration-none" href="#">{{ __('dashboard.view_all') }}</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">{{ __('dashboard.news_section') }}</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link text-decoration-none" href="#">{{ __('dashboard.view_all') }}</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-6">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-chart-area me-1"></i>
                    {{ __('dashboard.ayat_of_the_day') }}
                </div>
                <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-chart-bar me-1"></i>
                    {{ __('dashboard.hadith_of_the_day') }}
                </div>
                <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-6">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-chart-area me-1"></i>
                    {{ __('dashboard.ayat_of_the_day') }}
                </div>
                <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-chart-bar me-1"></i>
                    {{ __('dashboard.hadith_of_the_day') }}
                </div>
                <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
            </div>
        </div>
    </div>
</div>
@endsection
