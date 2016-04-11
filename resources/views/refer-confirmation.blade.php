@extends('layouts.master')

@section('page-css')
<link href="{{ asset('css/subpage.css') }}" rel="stylesheet" type="text/css" >
<link href="{{ asset('css/confirmation.css') }}" rel="stylesheet" type="text/css" >
@endsection

@section('content')

@include('layouts.navbar-subpage')
<div class="page">
  <h1 id="refer_success">SUCCESS! THANKS FOR SIGNING YOUR FRIEND(S) UP FOR SHINE! #SHINEON</h1>
</div>
@endsection