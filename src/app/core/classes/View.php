<?php

class View
{
	protected $pathToViews;

	public function __construct($pathToViews)
	{
		$this->pathToViews = $pathToViews;
	}

	public function render($viewName, array $parameters = [])
	{
		$subPathElements = explode(':', $viewName);
        $subPath = implode('/', $subPathElements) . '.php';
        $viewPath = rtrim($this->pathToViews, '/') . '/' . $subPath;
        $parameters['pathToView'] = $viewPath;
        var_dump($parameters);
        extract($parameters);
        require $this->pathToViews . '/layout.php';
	}
}
