@extends('layouts.materialize')

@section('content')

<div class="container">
	<div class="row">
		<div class="col s12 m6 push-m3 center" style="margin-top:12%">
			<div>
				<h2 class="flow-text">BEM UNAIR Generator Link</h2>
			</div>

			<div class="row">
				{!! Form::open(array('url' => '/gen', 'class'=>'col s12')) !!}
					<div class="row" style="margin-bottom:0px !important">
						<div class="col s12 m12">
							<div class="card blue-grey darken-1">
								<div class="card-content white-text">
									<p>
										You must enter all field
									</p>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="input-field col s12">
							<input id="url" type="text" class="" name="url">
							<label for="url">Input your URL</label>
						</div>
						<div class="input-field col s12">
							<input value="bem.unair.ac.id/" id="url" type="text" class="" name="url_you_want">
							<label for="url">URL You want</label>
						</div>
					</div>

					<button class="waves-effect waves-light btn"><i class="material-icons left">call_made</i>Generate</button>
				{!! Form::close() !!}
			</div>

		</div>
	</div>

</div>


@endsection