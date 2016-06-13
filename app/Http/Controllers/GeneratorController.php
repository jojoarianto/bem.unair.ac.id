<?php namespace App\Http\Controllers;

use App\Http\Requests\StoreGeneratorPostRequest as StoreGeneratorPostRequest;
use App\Http\Controllers\Controller;
use App\Models\Generator;

class GeneratorController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('generator.index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(StoreGeneratorPostRequest $request)
	{		
		$generator = Generator::create($request->all());
		$url_to = config('app.url_basic').'/'.$generator['url_you_want'];
		return redirect()->back()->withSuccess( 'Url <strong><a target="_blank" href="http://'.$url_to.'">'.$url_to.'</a></strong> created' );
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		if ($id != '') {
			$generator = Generator::where('url_you_want', $id)->first();
			if ($generator) { return redirect($generator['url']); }
			return 'page not found';
		} else {
			return 'page not found';
		}
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
