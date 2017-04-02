<?php 

	/**
	* Class Database
	*/
	class Database extends PDO
	{
		
		public function __construct($dsn, $user, $pass)
		{
			//$db = new PDO($dsn, $user, $pass);
			parent::__construct($dsn, $user, $pass);
		}

		public function select($sql, $data = array(), $fetchStyle = PDO::FETCH_ASSOC)
		{
			$stmt = $this->prepare($sql);

			foreach ($data as $key => $value) {
				$stmt->bindParam($key, $value);
			}

			$stmt->execute();
			return $stmt->fetchAll($fetchStyle);


			// $sql = "SELECT * FROM category $table";
			// $stmt = $this->prepare($sql);
			// $stmt->execute();
			// return $stmt->fetchAll();
		}



		public function insert($table, $data)
		{
			$keys = implode(', ' , array_keys($data));
			$values = ':' . implode(', :' , array_keys($data));


			$sql = "INSERT INTO $table($keys) VALUES($values)";
			$stmt = $this->prepare($sql);

			foreach ($data as $key => $value) {
				//echo $key . '<br/>';
				$stmt->bindParam(":$key", $value);
			}
			//die();
			return $stmt->execute();
		}

		public function update($table, $data, $cond)
		{
			$updateKeys = NULL;
			foreach ($data as $key => $value) {
				$updateKeys .= "$key=:$key,";
			}

			$updateKeys = rtrim($updateKeys, ',');

			$sql = "UPDATE $table SET $updateKeys WHERE $cond";
			$stmt = $this->prepare($sql);

			foreach ($data as $key => $value) {

				$stmt->bindParam(":$key", $value);
			}
			return $stmt->execute();
		}

		public function delete($table, $cond, $limit = 1)
		{
			$sql = "DELETE FROM $table WHERE $cond LIMIT $limit";
			return $this->exec($sql);
		}
	}
 ?>