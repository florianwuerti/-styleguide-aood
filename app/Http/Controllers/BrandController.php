<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller {
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct() {
		$this->middleware( 'auth' );
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index( Brand $brands ) {

		$isEmpty = $this->whenDBisEmpty();

		return view( 'backend.pages.dashboard', compact( 'brands', 'isEmpty' ) );

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param \Illuminate\Http\Request $request
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function store( Request $request ) {
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param int $id
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function show( $id ) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param int $id
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function edit( $id ) {
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @param int $id
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function update( Request $request, $id ) {
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param int $id
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function destroy( $id ) {
		//
	}

	public function whenDBisEmpty() {

		$images       = 'https://company-161686.frontify.com/img/blankslate/project/drop.png';
		$title        = 'Beginnen wir mit etwas Neuem.';
		$text         = 'Projekte ermöglichen es dir, Markeninhalte zu diskutieren und zu iterieren, dynamische Prototypen zu erstellen und Workflows anzupassen.';
		$is_available = 0;
		$btnTitle     = 'Erstellen deine erste Marke';

		$isEmpty = AdminDashboardController::isEmptyPage( $images, $title, $text, $is_available, $btnTitle );

		return $isEmpty;
	}

}
