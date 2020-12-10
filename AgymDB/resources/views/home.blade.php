@extends('layouts.app')



@section('content')
<div class="card">
    <div class="card-header">{{ __('Dashboard') }}</div>
    <div class="c-body">
        <main class="c-main">
            <div class="container-fluid">
                <div class="fade-in">
                    <div class="row">
                        @include('partials.totalSales')   
                        @include('partials.totalCustomers') 
                        @include('partials.totalSubscribeCust')   
                        @include('partials.dailyEmployeeLog')  
                    </div>
                    <div class="card">
                        <div class="card-header"> Subscriptions</div>
                        <br>
                        @include('partials.currSubscriptions')     
                    </div>

                </div>  
            </div>
        </main>
    </div>            
</div>   
@endsection
