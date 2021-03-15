@extends('layout.nav_bar')


@section('page_title')    
<h1>Welcome Home! {{ session('Name') }} </h1>
@endsection

@section('main_content')
<hr>
<input type='button' onclick="location.href='/profile';" value="Profile">
<input type='button' onclick="location.href='/generate_salary';" value="Generate Salary">
<input type='button' onclick="location.href='/salary_history';" value="Salary History">
<input type='button' onclick="location.href='/salary_details';" value="Salary Details">
<input type='button' onclick="location.href='/generate_bonus';" value="Generate Bonus">
<input type='button' onclick="location.href='/generate_voucher';" value="Generate voucher">
<input type='button' onclick="location.href='/apply_leave';" value="Apply for leave">
<hr>
@endsection

@section('title')
Home | ABC.com
@endsection