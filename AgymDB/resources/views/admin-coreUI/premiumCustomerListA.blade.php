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
                                    <a class="nav-link" href='/admin/customerList'>All</a>
                                </li>
                                <li class="nav-item">
                                    <a class="dropdown-item nav-link" href='/admin/customerList/walk_in/all'>Walk-In</a>
                                    <a class="dropdown-item" href='/admin/customerList/walk_in/active'>Active</a>
                                    <a class="dropdown-item" href='/admin/customerList/walk_in/inactive'>Inactive</a>
                                </li>
                                <li class="nav-item">
                                    <a class="dropdown-item nav-link" href='/admin/customerList/monthly/all'>Monthly</a>
                                    <a class="dropdown-item" href='/admin/customerList/monthly/active'>Active</a>
                                    <a class="dropdown-item" href='/admin/customerList/monthly/inactive'>Inactive</a>
                                </li>
                                <li class="nav-item">
                                    <a class="dropdown-item nav-link active" href='/admin/customerList/premium/all'>Premium</a>
                                    <a class="dropdown-item" href='/admin/customerList/premium/active'>Active</a>
                                    <a class="dropdown-item" href='/admin/customerList/premium/inactive'>Inactive</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-header">
                            No. of Premium Customers:  {{$count}}
                        </div>
                        <table class="table table-responsive-sm table-hover table-outline mb-0">
                            <tr class="thead-light">
                                <td class="text-center">  </td>
                                <td class="text-center">#</td>
                                <td class="text-center">Name</td>
                                <td class="text-center">Age</td>
                                <td class="text-center">Address</td>
                                <td class="text-center">Email Address</td>
                                <td class="text-center">Contact No.</td>
                                <td class="text-center">Trainer</td>
                                <td class="text-center">More Info</td>
                                <td class="text-center">Action</td>
                            </tr>        
                            @forEach ($customers as $value => $customer)
                                @if($today->diffInDays($customer->end_date, false) > 0)
                                <tr>
                                    <td>
                                        @if($log[$value]->exit == NULL)
                                            <a href="/admin/log/{{$log[$value]->id}}/edit"><span class="dot" style='background-color: green;'></span></a>
                                        @else
                                            <a href="/admin/log/{{$customer->id}}/create"><span class="dot" style='background-color: red;'></span></a>
                                        @endif
                                    </td>

                                    <td> {{$customer->id}} </td>
                                    <td> {{$customer->fname}}   {{$customer->lname}} </td>

                                    <td> {{$age[$value]}} </td>
                                    <td> {{$customer->street_address}} ,  {{$customer->city}}  City </td>
                                    <td> {{$customer->email_address}} </td>
                                    <td> {{$customer->phone_number}} </td>
                                    <td> {{$trainers[$value]->fname}}   {{$trainers[$value]->lname}} </td>
                                    <td> icons </td>
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