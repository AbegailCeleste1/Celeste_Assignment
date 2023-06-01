@extends('layouts.main')
<title>Dashboard</title>
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h5 class="font-weight-bold">Add New Residents</h5>
                @livewire('show-wire')
        </div>  
    </div>
</div>
@endsection