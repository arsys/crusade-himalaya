<?php

namespace App\Http\Composers;
use App\TourCategory;
use App\Region;
use App\Setting;
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

	public function footer(View $view)
	{
		$setting = Setting::firstOrFail();
		$view->withSetting($setting);
	}
}