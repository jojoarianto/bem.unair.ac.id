@extends('layouts.materialize')

@section('content')

<div class="container">
	<div class="row">
		<div class="col s12 m6 push-m3 center" style="margin-top:13%">
			
			<div>
				<h2 class="flow-text">BEM UNAIR Generator Link</h2>
			</div>

			<div class="row">
				<form class="col s12">
					<div class="row">
						<div class="input-field col s12">
							<input id="url" type="text" class="">
							<label for="url">Input your URL</label>
						</div>
						<div class="input-field col s12">
							<input value="bem.unair.ac.id/" id="url" type="text" class="">
							<label for="url">URL You want</label>
						</div>
					</div>

					<button class="waves-effect waves-light btn"><i class="material-icons left">call_made</i>Generate</button>
				</form>
			</div>

		</div>
	</div>

</div>


@endsection