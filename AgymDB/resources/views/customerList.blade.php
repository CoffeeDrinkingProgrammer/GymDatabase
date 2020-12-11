@extends('layouts.app')

@section('content')
    <div>
        <a href='/admin/employeeList'>All</a>
    </div>
    <div>
        <a href='/admin/employeeList/current'>Current</a>
    </div>
    <div>
        <a href='/admin/employeeList/previous'>Previous</a>
    </div>
    <form>
        <div>
			<label>Search: <input type="text" name="search" placeholder="find employee name"></label>
		</div>
    </form>
    <table class='employeeList'>
        <tr>
            <td>Name</td>
            <td>Age</td>
            <td>Address</td>
            <td>Email Address</td>
            <td>Contact No.</td>
            <td>Membership</td>
            <td>Status</td>
            <td>More Info</td>
            <td>Action</td>
        </tr>
        @forEach ($employees as $value => $employee)
            <tr>
                <td> {{$employee->fname}}   {{$employee->lname}} </td>
                <td> {{$bday[$value]}} </td>
                <td> {{$employee->streetAddress}} ,  {{$employee->city}}  City </td>
                <td> {{$employee->emailAddress}} </td>
                <td> {{$employee->phoneNumber}} </td>
                <td> {{$employee->monthlySalary}} </td>
                <td> {{$employee->noOfTrainees}} </td>
                <td>
                    <form>
                        <input type='hidden' name='employeeID' value='{{$employee->employeeID}}'>
                        <input type="submit" name="Update" value="update">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    <style> /* just remove this later. This just helps me make the data in a readable format */
        .employeeList {
            width: 80%;
            margin-right: 10%;
            margin-left: 10%;
            border-color: black;
            align: center;
        }
    </style>
@endsection
