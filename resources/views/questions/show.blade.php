@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-12">
				<div class="card">
					<div class="card-body">
						<div class="card-title">
							<div class="d-flex align-items-center">
								<h1>{{ $question->title }}</h1>
								<div class="ml-auto">
									<a href="{{ route('questions.index') }}" class="btn btn-outline-secondary">Back to all question</a>
								</div>
							</div>
						</div>
						<hr>
						<div class="media">
							<div class="d-flex flex-column votes-controls">
								<a href="" title="This question is useful" class="vote-up">
									Vote up
								</a>
								<span class="votes-count">120</span>
								<a title="This question is not useful" class="vote-down off">
									Vote down
								</a>
								<a title="Click to mark as favorite question (Click again to undo)" class="favorite">
									Favorite
									<span class="favorite-count">123</span>
								</a>
							</div>
							<div class="media-body">
								{!! $question->body !!}
								<div class="float-right clearfix mt-5">
									<span class="text-muted">Questioned {{ $question->created_date }}</span>
									<div class="media mt-2">
										<a href="{{ $question->user->url }}" class="pr-2">
											<img src="{{ $question->user->avatar }}" alt="">
										</a>
										<div class="media-body mt-1">
											<a href="{{ $question->user->url }}">{{ $question->user->name }}</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		@include('answers._index', [
			'answers' => $question->answers,
			'answersCount' => $question->answers_count
		])

		@include('answers._create')
	</div>
@endsection
