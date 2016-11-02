<?php

/**
* 
*/
class ClassesTaskController extends Controller
{
	
	public function classesAction($request)
	{
		$taskNumber = (!empty($request['task'])) ? $request['task'] : 0;
		$taskOut = new MyClassInit();
		$out = $taskOut->result;
		$this->render('classesView:class', [
			'output' => $out
		]);
	}
}
