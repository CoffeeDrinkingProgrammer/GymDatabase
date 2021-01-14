@extends('layouts.app')

@section('menu')
    @include('admin.adminmenu')
@endsection

@section('content')
<div class="card">
    <div class="card-header">{{ __('CUSTOMERS') }}</div>
    <div class="c-body">
        <main class="c-main">
            <div class="container-fluid">
                <div class="fade-in">
                    <div class="card">
                        <div class="card-header">
                            <form>
                                <div>
                                    <label>Search: <input type="text" name="search" placeholder="find customer name"></label>
                                </div>
                            </form>
                            <button>
                                <!-- Can be replaced with an image or icon -->
                                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">+</a>
                            </button>
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link " href='/admin/customerList'>All</a>
                                </li>
                                <li class="nav-item">
                                    <a class="dropdown-item nav-link active" href='/admin/customerList/walk_in/all'>Walk-In</a>
                                    <a class="dropdown-item" href='/admin/customerList/walk_in/active'>Active</a>
                                    <a class="dropdown-item" href='/admin/customerList/walk_in/inactive'>Inactive</a>
                                </li>
                                <li class="nav-item">
                                    <a class="dropdown-item nav-link" href='/admin/customerList/monthly/all'>Monthly</a>
                                    <a class="dropdown-item" href='/admin/customerList/monthly/active'>Active</a>
                                    <a class="dropdown-item" href='/admin/customerList/monthly/inactive'>Inactive</a>
                                </li>
                                <li class="nav-item">
                                    <a class="dropdown-item nav-link" href='/admin/customerList/premium/all'>Premium</a>
                                    <a class="dropdown-item" href='/admin/customerList/premium/active'>Active</a>
                                    <a class="dropdown-item" href='/admin/customerList/premium/inactive'>Inactive</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-header">
                            No. of Walk-In Customers:  {{$count}}
                        </div>
                        <table class="table table-responsive-sm table-hover table-outline mb-0">
                            <tr class="thead-light">
                                <td class="text-center">  </td>
                                <td class="text-center">#</td>
                                <td class="text-center">Name</td>
                                <td class="text-center">Action</td>
                            </tr>        
                            @forEach ($customers as $value => $customer)
                                @if($membershipStatus[$value] == 'INACTIVE')
                                <tr>
                                    <td>
                                        <span class="dot" style='background-color: gray;'></span>
                                    </td>
                                    <td> {{$customer->id}} </td>
                                    <td> {{$customer->fname}}   {{$customer->lname}} </td>
                                    <td>
                                        <button><a href="{{route('customerEdit', $customer->id)}}">Update</a></button>
                                        <button><a href="{{route('customerDetail', $customer->id)}}">Details</a></button>
                                    </td>
                                </tr>
                                @endif   
                            @endforeach
                        </table>
                    </div>
                </div>  
            </div>
        </main>
    </div>            
</div>
<style>
    .dot {
        height: 15px;
        width: 15px;
        border-radius: 50%;
        display: inline-block;
    }
</style>
@endsection