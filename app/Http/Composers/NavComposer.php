<?php

namespace App\Http\Composers;

// use Hamcrest\Core\Set;
use Illuminate\Contracts\View\View;


class FrontendComposer
{

	public function whatWedo(View $view)
	{
		$dos = TourCategory::all();
		$view->withDos($dos);
	}

	public function whereWego(View $view)
	{
		$wheres = Region::all();
		$view->withWheres($wheres);
	}
}