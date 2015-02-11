<?php
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
class FilemanagerLaravelController extends Controller {
	public function __construct(){
		// $this->beforeFilter('auth');
		
	}
	public function getShow()
	{
		return View::make('FilemanagerLaravel::filemanager.index');
	}
	public function getConnectors()
	{
		$f = FilemanagerLaravel::Filemanager();
		$f->run();
	}
	public function postConnectors()
	{
		$f = FilemanagerLaravel::Filemanager();
		$f->run();
	}

}
