<?php 

include_once 'connection.php';

class Sql_query extends Connection
{
	public function getAllCuntry()
	{
		$sql_str = "SELECT * FROM countries";
		return $this->getSelectAllQuery($sql_str);
	}
	public function Users($data , $user_id = 0)
	{
		$sql_str = "INSERT INTO users SET firstname = '".$data['firstname']."',lastname = '".$data['lastname']."',email = '".$data['email']."',contact = '".$data['contact']."',password = '".$data['password']."',address_1 = '".$data['address_1']."',address_2 = '".$data['address_2']."',country_id = '".$data['country_id']."',state_id = '".$data['state_id']."',city_id = '".$data['city_id']."',created_date = NOW() , status = true";
		return $this->insertSqlString($sql_str);
	}
}