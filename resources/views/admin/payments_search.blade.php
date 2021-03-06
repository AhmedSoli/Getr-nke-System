@extends('layouts.AdminPanel')
@section('content')
<div class="container">
	<h3 class="w3-tag w3-padding w3-round w3-light-grey">View Payments</h3>
	<div class="panel-body" style="overflow-y: scroll; height:200px;">
		<div class="row w3-border-bottom">
			<div class="col-xs-3">
				<p clasS="w3-label w3-text-grey">Admin</p>
			</div>
			<div class="col-xs-2">
				<p class="w3-label w3-text-grey">Name</p>
			</div>
			<div class="col-xs-2">
				<p class="w3-label w3-text-grey">Note</p>
			</div>
			<div class="col-xs-2">
				<p class="w3-label w3-text-grey">Amount</p>
			</div>
			<div class="col-xs-3">
				<p class="w3-label w3-text-grey">Date</p>
			</div>
		</div>
		@foreach ($payments as $payment)
		<div class="row w3-border-bottom">
			<div class="col-xs-3">
				{{$payment->user->name}}
			</div>
			<div class="col-xs-2">
				{{$payment->product->name}}
			</div>
			<div class="col-xs-2">
				{{$payment->note}}
			</div>
			<div class="col-xs-2">
				{{$payment->amount}}€
			</div>
			<div class="col-xs-3">
				{{$payment->created_at}}
			</div>
		</div>
		@endforeach
	</div>
</div>
@endsection