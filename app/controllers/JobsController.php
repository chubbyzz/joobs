<?php

class JobsController extends \BaseController {

	public function applay() {
		dd('applaied');
	}

	/**
	 * Display a listing of the resource.
	 * GET /jobs
	 *
	 * @return Response
	 */
	public function index() {
		$jobs = Job::orderBy("created_at", "DESC")->paginate(9);

		return View::make('jobs.index')->with('jobs', $jobs);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /jobs/create
	 *
	 * @return Response
	 */
	public function create() {
		return View::make('jobs.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /jobs
	 *
	 * @return Response
	 */
	public function store() {
		//
	}

	/**
	 * Display the specified resource.
	 * GET /jobs/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($slug) {
		try {
			$job = Job::whereSlug($slug)->firstOrFail();
			return View::make('jobs.show')->with('job', $job);
		} catch (Exption $e) {
			return App::abort(404);
		}
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /jobs/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id) {
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /jobs/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id) {
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /jobs/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id) {
		//
	}

}