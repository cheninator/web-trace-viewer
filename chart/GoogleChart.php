<?php
	
	require_once("GoogleChartColumn.php");
	require_once("GoogleChartRow.php");
	
	class GoogleChart 
	{
		public $cols;
		public $rows;

		public function __construct()
		{	
			$this->cols = array();
			$this->rows = array();
		}

		public function getClassType($class)
		{
			$val = $class;

			switch($class)
			{
				case "process":
				case "cpu":
					$val = "string";
					break;

				case "ratio":
				case "int":
					$val = "number";
					break;
			}

			return $val;
		}

		public function addColumn(GoogleChartColumn $column)
		{
			array_push($this->cols, $column);
		}

		public function addRow(GoogleChartRow $row)
		{
			array_push($this->rows, $row);
		}
	}

?>