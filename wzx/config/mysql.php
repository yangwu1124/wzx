<?php

class mysql {

	private $host;
	private $name;
	private $pass;
	private $table;
	private $ut;

	function __construct($host,$name,$pass,$table,$ut){
     	$this->host=$host;
     	$this->name=$name;
     	$this->pass=$pass;
     	$this->table=$table;
     	$this->ut=$ut;
     	$this->connect();

	}



	function connect(){

		$conn=@mysql_connect($this->host,$this->name,$this->pass) or die (mysql_error);
        mysql_select_db($this->table,$conn);
        mysql_query("SET NAMES '$this->ut'");
	}

	function fn_sql($sql){

		$query=mysql_query($sql) or die (mysql_error());
		return $query;

	}

    function fn_insert($table,$field,$value) {
    	mysql_query("insert into $table ($field) values ($value)") or die (mysql_error());
    	return true;
    }

    function fn_select($sql){
    	$query=mysql_query($sql);
		return mysql_fetch_array($query);
    }
    function fn_update($sql){
    	$query = mysql_query($sql);
    	return true;
    }
	function fn_delete($table,$field,$value){

		mysql_query("delete from `$table` where `$field` = '$value'") or die(mysql_error());
		return true;
	}
	function fn_tiaozhuan($tishi,$url){
		if(empty($url)){
			echo "<script type='text/javascript'>alert('$tishi');</script>";
		}else{
			echo "<script type='text/javascript'>alert('$tishi');window.location='$url';</script>";
		}
	}


}


    $res= new mysql('localhost','root','heipi96977169','licai2',"UTF-8");

?>
