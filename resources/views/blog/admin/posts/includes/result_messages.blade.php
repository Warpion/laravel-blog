@if($errors->any())
	<div class="row justify-content-center">
		<div class="col-md-11">
			<div class="alert alert-danger" role="alert">
				<button class="close" type="button" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">X</span>
				</button>
				<ul>
					@foreach($errors->all() as $errorTxt)
						<li>{{$errorTxt}}</li>
					@endforeach
				</ul>
			</div>
		</div>
	</div>
@endif

@if(session('success'))
	<div class="row justify-content-center">
		<div class="col-md-11">
			<div class="alert alert-success" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">X</span>
				</button>
				{{ session()->get('success') }}
				@if (session('restore'))
	      			<a href="{{route('blog.admin.posts.restore', session()->get('restore'))}}" 
	      				type="submit" class="btn btn-warning">Восстановить</a>
				@endif
			</div>
		</div>
	</div>	
@endif