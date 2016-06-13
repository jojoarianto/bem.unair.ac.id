@extends('layouts.materialize')

@section('content')

<div class="container">
	<div class="row">
		<div class="col s12 m6 push-m3 center" style="margin-top:8%">
			<div>
				<h2 class="flow-text">BEM UNAIR Generator Link</h2>
			</div>

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
							<input id="email" type="email" class="" value="{{ old('email') }}" name="email">
							<label for="email">Input your email</label>
						</div>
						<div class="input-field col s12">
							<input id="url" type="text" class="" value="{{ old('url') }}" name="url">
							<label for="url">Input your URL</label>
						</div>
						<div class="col s12">
							<div class="row">
								<div class="input-field col s12 m4">
									<input value="bem.unair.ac.id/" type="text" class="" disabled="true">
								</div>
								<div class="input-field col s12 m8">
									<label for="url_you_want">Word You want</label>
									<input id="url_you_want" type="text" class="" name="url_you_want" value="{{ old('url_you_want') }}">
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