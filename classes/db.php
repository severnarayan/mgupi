<?php

class DB
{
   
   public $filename = "file.dat";
   
   function addRecord($obj)
   {
   
       $str = serialize($obj);
	   
	   $fp = fopen($this->filename,"a+");
	   
	   fwrite($fp, $str."\n");
	   
	   fclose($fp);
   
   }
   
   function listRecords()
   {
   
       $lst = file($this->filename);
	   $cnt = 0;
	   
	   foreach($lst as $record)
	   {
	       $cnt++;
	       $obj = unserialize($record);
           echo "<br>".$cnt;
		   echo "Name: ".$obj->name."<br>";
		   
       }
   
   }
   
   
   
   
   
}




