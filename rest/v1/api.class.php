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

 class RestApi {

 	private $conn = null;

 	public function __construct() {

    require_once "../../format_function/euroFormat_functions.php";
 		$this->conn = new PDO("mysql:host=$se;dbname=mizesolu_ewuStats", $us, $pa);
    $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

 	}

 	public function getStatsByYear($year) {

 		$stmt = $this->conn->prepare("SELECT * FROM YEARSTATS WHERE YEAR = :year");
 		$stmt->bindParam(':year', $year);
 		$stmt->execute();

 		$data = array();
 		while ($stat = $stmt->fetch(PDO::FETCH_ASSOC) ) {
 			$data[] = array(
        'YEAR'   => $stat['YEAR'],
        'COACH' => $stat['COACH'],
        'WIN'   => $stat['WIN'],
        'LOSS' => $stat['LOSS'],
        'TIE' => $stat['TIE'],
        'PCT'   => $stat['PCT'],
        'PF' => $stat['PF'],
        'PA'   => $stat['PA'],
        'DELTA' => $stat['DELTA']
 			);
 		}

 		echo json_encode($data);
 	}

  public function getStatsByCoach($coach) {

    $stmt = $this->conn->prepare("SELECT * FROM YEARSTATS WHERE COACH = :coach");
    $stmt->bindParam(':coach', $coach);
    $stmt->execute();

    $data = array();
    while ($stat = $stmt->fetch(PDO::FETCH_ASSOC) ) {
      $data[] = array(
        'YEAR'   => $stat['YEAR'],
        'COACH' => $stat['COACH'],
        'WIN'   => $stat['WIN'],
        'LOSS' => $stat['LOSS'],
        'TIE' => $stat['TIE'],
        'PCT'   => $stat['PCT'],
        'PF' => $stat['PF'],
        'PA'   => $stat['PA'],
        'DELTA' => $stat['DELTA']
      );
    }

    echo json_encode($data);
  }

  public function getStatsByWin($win) {

    $stmt = $this->conn->prepare("SELECT * FROM YEARSTATS WHERE WIN = :win");
    $stmt->bindParam(':win', $win);
    $stmt->execute();

    $data = array();
    while ($stat = $stmt->fetch(PDO::FETCH_ASSOC) ) {
      $data[] = array(
        'YEAR'   => $stat['YEAR'],
        'COACH' => $stat['COACH'],
        'WIN'   => $stat['WIN'],
        'LOSS' => $stat['LOSS'],
        'TIE' => $stat['TIE'],
        'PCT'   => $stat['PCT'],
        'PF' => $stat['PF'],
        'PA'   => $stat['PA'],
        'DELTA' => $stat['DELTA']
      );
    }

    echo json_encode($data);
  }

  public function getStatsByLoss($loss) {

    $stmt = $this->conn->prepare("SELECT * FROM YEARSTATS WHERE LOSS = :loss");
    $stmt->bindParam(':loss', $loss);
    $stmt->execute();

    $data = array();
    while ($stat = $stmt->fetch(PDO::FETCH_ASSOC) ) {
      $data[] = array(
        'YEAR'   => $stat['YEAR'],
        'COACH' => $stat['COACH'],
        'WIN'   => $stat['WIN'],
        'LOSS' => $stat['LOSS'],
        'TIE' => $stat['TIE'],
        'PCT'   => $stat['PCT'],
        'PF' => $stat['PF'],
        'PA'   => $stat['PA'],
        'DELTA' => $stat['DELTA']
      );
    }

    echo json_encode($data);
  }

  public function getStatsByTie($tie) {

    $stmt = $this->conn->prepare("SELECT * FROM YEARSTATS WHERE TIE = :tie");
    $stmt->bindParam(':tie', $tie);
    $stmt->execute();

    $data = array();
    while ($stat = $stmt->fetch(PDO::FETCH_ASSOC) ) {
      $data[] = array(
        'YEAR'   => $stat['YEAR'],
        'COACH' => $stat['COACH'],
        'WIN'   => $stat['WIN'],
        'LOSS' => $stat['LOSS'],
        'TIE' => $stat['TIE'],
        'PCT'   => $stat['PCT'],
        'PF' => $stat['PF'],
        'PA'   => $stat['PA'],
        'DELTA' => $stat['DELTA']
      );
    }

    echo json_encode($data);
  }

  public function getStatsByPCT($pct) {

    $stmt = $this->conn->prepare("SELECT * FROM YEARSTATS WHERE PCT = :pct");
    $stmt->bindParam(':pct', $pct);
    $stmt->execute();

    $data = array();
    while ($stat = $stmt->fetch(PDO::FETCH_ASSOC) ) {
      $data[] = array(
        'YEAR'   => $stat['YEAR'],
        'COACH' => $stat['COACH'],
        'WIN'   => $stat['WIN'],
        'LOSS' => $stat['LOSS'],
        'TIE' => $stat['TIE'],
        'PCT'   => $stat['PCT'],
        'PF' => $stat['PF'],
        'PA'   => $stat['PA'],
        'DELTA' => $stat['DELTA']
      );
    }

    echo json_encode($data);
  }

  public function getStatsByPF($pf) {

    $stmt = $this->conn->prepare("SELECT * FROM YEARSTATS WHERE PF = :pf");
    $stmt->bindParam(':pf', $pf);
    $stmt->execute();

    $data = array();
    while ($stat = $stmt->fetch(PDO::FETCH_ASSOC) ) {
      $data[] = array(
        'YEAR'   => $stat['YEAR'],
        'COACH' => $stat['COACH'],
        'WIN'   => $stat['WIN'],
        'LOSS' => $stat['LOSS'],
        'TIE' => $stat['TIE'],
        'PCT'   => $stat['PCT'],
        'PF' => $stat['PF'],
        'PA'   => $stat['PA'],
        'DELTA' => $stat['DELTA']
      );
    }

    echo json_encode($data);
  }

  public function getStatsByPA($pa) {

    $stmt = $this->conn->prepare("SELECT * FROM YEARSTATS WHERE PA = :pa");
    $stmt->bindParam(':pa', $pa);
    $stmt->execute();

    $data = array();
    while ($stat = $stmt->fetch(PDO::FETCH_ASSOC) ) {
      $data[] = array(
        'YEAR'   => $stat['YEAR'],
        'COACH' => $stat['COACH'],
        'WIN'   => $stat['WIN'],
        'LOSS' => $stat['LOSS'],
        'TIE' => $stat['TIE'],
        'PCT'   => $stat['PCT'],
        'PF' => $stat['PF'],
        'PA'   => $stat['PA'],
        'DELTA' => $stat['DELTA']
      );
    }

    echo json_encode($data);
  }

  public function getStatsByDelta($delta) {

    $stmt = $this->conn->prepare("SELECT * FROM YEARSTATS WHERE DELTA = :delta");
    $stmt->bindParam(':delta', $delta);
    $stmt->execute();

    $data = array();
    while ($stat = $stmt->fetch(PDO::FETCH_ASSOC) ) {
      $data[] = array(
        'YEAR'   => $stat['YEAR'],
        'COACH' => $stat['COACH'],
        'WIN'   => $stat['WIN'],
        'LOSS' => $stat['LOSS'],
        'TIE' => $stat['TIE'],
        'PCT'   => $stat['PCT'],
        'PF' => $stat['PF'],
        'PA'   => $stat['PA'],
        'DELTA' => $stat['DELTA']
      );
    }

    echo json_encode($data);
  }

 	public function getAllStats() {

 		$stmt = $this->conn->prepare('SELECT * FROM YEARSTATS');
 		$stmt->execute();

 		$data = array();
 		while ($stat = $stmt->fetch(PDO::FETCH_ASSOC) ) {
      $data[] = array(
 					'YEAR'   => $stat['YEAR'],
 					'COACH' => $stat['COACH'],
          'WIN'   => $stat['WIN'],
 					'LOSS' => $stat['LOSS'],
          'TIE' => $stat['TIE'],
          'PCT'   => $stat['PCT'],
 					'PF' => $stat['PF'],
          'PA'   => $stat['PA'],
 					'DELTA' => $stat['DELTA']
 			);
 		}

 		echo json_encode($data);
 	}

  public function createANewStat($data) {

    try {
      $array = explode(',', $data);
      $year = $array[0];
      $coach = $array[1];
      $win = $array[2];
      $loss = $array[3];
      $tie = $array[4];
      $pct = $array[5];
      $pf = $array[6];
      $pa = $array[7];
      $delta = $array[8];

      $stmt = $this->conn->prepare("INSERT INTO YEARSTATS (YEAR, COACH, WIN, LOSS, TIE, PCT, PF, PA, DELTA) VALUES (:Year,:Coach,:Win,:Loss,:Tie,:Pct,:Pf,:Pa,:Delta)");
      $stmt->bindParam(':Year', $year);
      $stmt->bindParam(':Coach', $coach);
      $stmt->bindParam(':Win', $win);
      $stmt->bindParam(':Loss', $loss);
      $stmt->bindParam(':Tie', $tie);
      $stmt->bindParam(':Pct', $pct);
      $stmt->bindParam(':Pf', $pf);
      $stmt->bindParam(':Pa', $pa);
      $stmt->bindParam(':Delta', $delta);
      $stmt->execute();

      http_response_code(201);
      echo json_encode(array('created' => true));

    } catch(PDOException $e){
      echo json_encode(array('error' => $e->getMessage()));
    }

  }

  public function updateAStat($data) {

    echo ' ClassData: '.$data."\n";
    try {
      $array = explode(',', $data);
      $year = $array[0];
      $coach = $array[1];
      $win = $array[2];
      $loss = $array[3];
      $tie = $array[4];
      $pct = $array[5];
      $pf = $array[6];
      $pa = $array[7];
      $delta = $array[8];

      $sql = "UPDATE YEARSTATS SET COACH = :Coach, WIN = :Win, LOSS = :Loss, TIE = :Tie, PCT = :Pct, PF = :Pf, PA = :Pa, DELTA = :Delta WHERE YEAR = :Year";

      $stmt = $this->conn->prepare($sql);
      $stmt->bindParam(':Year', $year, PDO::PARAM_STR);
      $stmt->bindParam(':Coach', $coach, PDO::PARAM_STR);
      $stmt->bindParam(':Win', $win, PDO::PARAM_STR);
      $stmt->bindParam(':Loss', $loss, PDO::PARAM_STR);
      $stmt->bindParam(':Tie', $tie, PDO::PARAM_STR);
      $stmt->bindParam(':Pct', $pct, PDO::PARAM_STR);
      $stmt->bindParam(':Pf', $pf, PDO::PARAM_STR);
      $stmt->bindParam(':Pa', $pa, PDO::PARAM_STR);
      $stmt->bindParam(':Delta', $delta, PDO::PARAM_STR);
      $stmt->execute();

      http_response_code(200);
      echo json_encode(array('success' => true));

    } catch(PDOException $e){
      echo json_encode(array('error' => $e->getMessage()));
    }
  }

  public function deleteAStat($year) {

    echo '  Year: '.$year."\n";

    try {

      $stmt = $this->conn->prepare("DELETE FROM YEARSTATS WHERE YEAR = :Year");
      $stmt->bindParam(':Year', $data);
      $stmt->execute();

      // $sql = "DELETE FROM YEARSTATS WHERE YEAR = :Year;";
      //
      // $stmt = $this->conn->prepare($sql);
      // $stmt->bindParam(':Year', $data, PDO::PARAM_STR);
      // $stmt->execute();

      http_response_code(200);
      echo json_encode(array('success' => true));

    } catch(PDOException $e){
      echo json_encode(array('error' => $e->getMessage()));
    }

  }

 	public function __destruct() {
 		$this->conn = null;
 	}
 }
