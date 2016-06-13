@extends('layouts.materialize')

@section('content')

<div class="container">
	<div class="row">
		<div class="col s12 m6 push-m3 center" style="margin-top:8%">
			<div>
				<h2 class="flow-text">{{ config('app.generator_name_app') }}</h2>
			</div>
			<!-- <hr> -->
			<br>
			@if ( \Session::has('success') )
			<div class="row" style="margin-bottom:0px !important">
				<div class="col s12 m12">
					<div class="card black-text text-darken-2">
						<div class="card-content white-text">
							<p style="color:#000;">
							{!! \Session::get('success') !!}
							</p>
						</div>
					</div>
				</div>
			</div>
			@endif

			<div class="row">
				{!! Form::open(array('url' => '/gen', 'class' => 'col s12')) !!}

					@if ( $errors->count() > 0 )
						<div class="row" style="margin-bottom:0px !important">
							<div class="col s12 m12">
								<div class="card blue-grey darken-1">
									<div class="card-content white-text">
										<p>
										@foreach($errors->all() as $message)
											{{ $message }} </br>
										@endforeach
										</p>
									</div>
								</div>
							</div>
						</div>
					@endif

					<div class="row">
						<div class="input-field col s12">
							<input id="email" type="email" class="
							@if ( $errors->has('email') ) invalid @endif" value="{{ old('email') }}" name="email" required>
							<label for="email">Input your email</label>
						</div>
						<div class="input-field col s12">
							<input id="url" type="text" class="@if ( $errors->has('url') ) invalid @endif" value="{{ old('url') }}" name="url" required>
							<label for="url">Input your URL</label>
						</div>
						<div class="col s12">
							<div class="row">
								<div class="input-field col s5">
									<input value="{{ config('app.url_basic') }}/" type="text" class="" disabled="true" style="color: #000;">
								</div>
								<div class="input-field col s7">
									<label for="url_you_want">Word You want</label>
									<input id="url_you_want" type="text" class="@if ( $errors->has('url_you_want') ) invalid @endif" name="url_you_want" value="{{ old('url_you_want') }}" required>
								</div>
							</div>
						</div>
					</div>

					<button class="waves-effect waves-light btn"><i class="material-icons left">call_made</i>Generate</button>
				{!! Form::close() !!}
			</div>

		</div>
	</div>

</div>


@endsection