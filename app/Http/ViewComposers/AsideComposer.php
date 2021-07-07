<?php 

namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use App\Category;

class AsideComposer{
	public function compose(View $view){
		$categories= Category::orderBy('name','DESC')->get();
		$view->with('categories',$categories);
	}
}