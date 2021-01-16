@extends('layouts.app')

@section('content')
	@php /** @var \App\Models\BLogCategory */ @endphp

	@if($item->exists)
		<form method="POST" action="{{ route('blog.admin.categories.update', $item->id ) }}">
		@method('PATCH')
	@else
		<form method="POST" action="{{ route('blog.admin.categories.store') }}">
	@endif	
		@csrf
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12">
					{{ $errors->first() }}
					{{ session('success') }}
				</div>
				<div class="col-8">
					@include('blog.admin.categories.includes.item_edit_main_col')
				</div>
				<div class="col-4">
					@include('blog.admin.categories.includes.item_edit_add_col')
				</div>
			</div>
		</div>
	</form>

@endsection