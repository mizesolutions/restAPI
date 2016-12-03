<?php
/**
 * ---------------------------------
 * PHP CODE BOOSTER
 * ---------------------------------
 *
 * @version 5.0
 * @Author: Sandip Patel
 * @package PHPCodebooster
 * @copyright (c) 2014, Sandip Patel
 *
 *  The below code is our modified version of Sandip Patel's original code
 *  which is found on PHP Code Booster:
 *  http://www.phpcodebooster.com/a/creating-a-restful-api-with-php
 *
 **/

try {

	// include api class
	require_once 'api.class.php';

	// Requests from the same server don't have a HTTP_ORIGIN header
	if (!array_key_exists('HTTP_ORIGIN', $_SERVER)) {
    	$_SERVER['HTTP_ORIGIN'] = $_SERVER['SERVER_NAME'];
	}

	// find out request method
	$method = $_SERVER['REQUEST_METHOD'];
	if ($method == 'POST' && array_key_exists('HTTP_X_HTTP_METHOD', $_SERVER)) {
		if ($_SERVER['HTTP_X_HTTP_METHOD'] == 'DELETE') {
			$method = 'DELETE';
		}
		else if ($_SERVER['HTTP_X_HTTP_METHOD'] == 'PUT') {
			$method = 'PUT';
		}
		else {
			throw new Exception('Unexpected Header');
		}
	}

	// create a new api
    $api = new RestApi();

    switch($method) {
        case 'GET':
            if(isset($_REQUEST['year'])) {
							$api->getStatsByYear($_REQUEST['year']);
						} elseif (isset($_REQUEST['coach'])) {
							$api->getStatsByCoach($_REQUEST['coach']);
						} elseif (isset($_REQUEST['win'])) {
							$api->getStatsByWin($_REQUEST['win']);
						} elseif (isset($_REQUEST['loss'])) {
							$api->getStatsByLoss($_REQUEST['loss']);
						} elseif (isset($_REQUEST['tie'])) {
							$api->getStatsByTie($_REQUEST['tie']);
						} elseif (isset($_REQUEST['pct'])) {
							$api->getStatsByPCT($_REQUEST['pct']);
						} elseif (isset($_REQUEST['pf'])) {
							$api->getStatsByPF($_REQUEST['pf']);
						} elseif (isset($_REQUEST['pa'])) {
							$api->getStatsByPA($_REQUEST['pa']);
						} elseif (isset($_REQUEST['delta'])) {
							$api->getStatsByDelta($_REQUEST['delta']);
						} else {
							$api->getAllStats();
						}
            break;

				case 'POST':
            $api->createANewStat($_REQUEST['data']);
            break;

				case 'PUT':
						echo 'Admin: '.$_REQUEST['data']."\n";
						$api->updateAStat($_REQUEST['data']);
						break;

				case 'DELETE':
						$api->deleteAStat($_REQUEST['year']);
						break;

        default:
            throw new Exception('Invalid Method');
            break;
    }
}
catch (Exception $e) {
    echo json_encode(array('error' => $e->getMessage()));
}
