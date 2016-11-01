<?php

/**
 * Get map of tasks by section and task number
 * @return array
 */
function getTasksMap ()
{
	return [
		'loops' => [
			'title' => 'Loops',
			'tasks' => [
				1,
				2
			]
		],
		'arrays_1' => [
			'title' => 'Arrays 1',
			'tasks' => [
				1
			]
		],
		'mysql' => [
			'title' => 'MySQL',
			'tasks' => [
				1,
				2
			]
		]
	];
}

/**
 * Get task title
 * @param string $section
 * @param integer $taskNumber
 * @return string
 */
function getTaskTitle($section, $taskNumber)
{
	$tasksMap = getTasksMap();
	$sectionData = $tasksMap[$section];
	$titleChunks = [
		$sectionData['title'],
		$taskNumber
	];
	return implode('->', $titleChunks);
}

/**
 * Get tsak input data
 * @return array
 *
 */

function getTaskInputData()
{
	$inputData = (!empty($_POST['inputDataText'])) ? explode(PHP_EOL, $_POST['inputDataText']) : [] ;
	$inputData2 = parse_str($inputData);
	foreach ($inputData as $key => $value) {
		if (preg_match('/[,]/', $inputData[$key])) {
			//$inputData[$key] = explode(',', $inputData[$key]);
			var_dump($inputData[$key]);
			$inputData2 = parse_str("$inputData[$key]");
		}
	}
	var_dump($inputData2);
	return $inputData;
}

/**
 * Get task data
 * @param string $section
 * @param integer $taskNumber
 * @return array
 */
function getTask($section, $taskNumber, $dbConnection)
{
	$tasksMap = getTasksMap();
	$pageTitle = getTaskTitle($section, $taskNumber);
	$description = ''; // @todo get description from tasksMap
	$categoryCode = $section;
	$task = new Task($taskNumber, $categoryCode, $description);
	$inputData = getTaskInputData();
	$result = $task->run($inputData, $dbConnection);

	return [
		'title' => $pageTitle,
		'description' => $task->getDescription(),
		'inputData' => $inputData,
		'result' => $result
	];
}
