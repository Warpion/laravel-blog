<div class="row justify-content-center">
	<div class="col-12">
		<div class="card">
			<div class="card-body">
				<div class="card-body">
					<div class="card-title"></div>
					<ul class="nav nav-tabs" role="tablist">
						<li class="nav-item">
							<a href="#maindata" data-toggle="tab" role="tab" class="nav-link active">Основные данные</a>
						</li>
					</ul>
					<br>
					<div class="tab-content">
						<div class="tab-pane active" id="maindata" orle="tabpanel">
							<div class="form-group">
								<label for="title">Заголовок</label>
								<input type="text" name="title" value="{{ $item->title }}" class="form-control" minlength="3" required id="title">
							</div>

							<div class="form-group">
								<label for="slug">Идинтификатор</label>
								<input class="form-control" name="slug" id="slug" type="text" value="{{ $item->slug }}">
							</div>
							
							<div class="form-group">
								<label for="parent_id">Родитель</label>
								<select id="parent_id" name="parent_id" required class="form-control">
									@foreach($categoryList as $categoryOption)
										<option value="{{ $categoryOption->id }}"
											@if($categoryOption->id == $item->parent_id) selected @endif>
											{{-- {{ $categoryOption->id }}. {{ $categoryOption->title }} --}}
											{{ $categoryOption->id_title }}

										</option>
									@endforeach
								</select>
							</div>
							
							<div class="form-group">
								<label for="description">Описание</label>
								<textarea
									name="description"
									id="description"
									class="form-control"
									rows="3"
								>{{ old('description', $item->description) }}</textarea>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>