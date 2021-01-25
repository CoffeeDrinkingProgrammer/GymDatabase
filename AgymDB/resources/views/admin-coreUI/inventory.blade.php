@extends('layouts.app')

@section('menu')
    @include('admin.adminmenu')
@endsection

@section('content')
<div class="card">
    <div class="card-header">{{ __('INVENTORY') }}</div>
    <div class="c-body">
        <main class="c-main">
            <div class="container-fluid">
                <div class="fade-in">
                    <div class="card">
                        <div class="card-header">
                            <form>
                                <label>Search: <input type="text" name="search" placeholder="find inventory item"></label>
                            </form>
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" href='/admin/inventoryList/all'>All</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href='/admin/inventoryList/1'>Food</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href='/admin/inventoryList/3'>Active Wear</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href='/admin/inventoryList/2'>Merchandise</a>
                                </li>
                            </ul>
                        </div>
                        <table class="table table-responsive-sm table-hover table-outline mb-0">
                            <tr class="thead-light">
                                <td class="text-center"> # </td>
                                <td class="text-center"> Name </td>
                                <td class="text-center"> Batch # </td>
                                <td class="text-center"> Batch Amount </td>
                                <td class="text-center"> Amount Left </td>
                                <td class="text-center"> Arrival Date </td>
                                <td class="text-center"> Expiry Date </td>
                                <td class="text-center"> Checked On </td>
                            </tr>

                            @forEach($batches as $key => $batch)
                                <tr>
                                    <td> {{$key+1}} </td>
                                    <td> {{$batch->item_name}}  </td>
                                    <td> {{$batch->id}} </td>
                                    <td> {{$batch->batch_amount}} </td>
                                    <td> {{$batch->amt_left_batch}} </td>
                                    <td> {{$batch->date_received}} </td>
                                    <td> {{$batch->expiry_date}} </td>
                                    <td> {{$batch->updated_at}} </td>
                                </tr>
                            @endforeach

                        </table>
                    </div>
                </div>  
            </div>
        </main>
    </div>            
</div>
@endsection