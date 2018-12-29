<?php
 



  

	######### Main Security Basic Filter Function ;) #########


	function sanitize( $str , $type = "str" )
	{
		$str = strip_tags ($str);
		$str = trim ($str);
		$str = htmlspecialchars ($str, ENT_NOQUOTES);
		$str = addslashes ($str);
		if($type == "area")
		$str = str_replace("\n","<br />",$str);
		return $str;
	}

	

	function colorize($val)
	{
		if($val > 0)
		{
			$color = "red";

		}else
		{
			$color = "black";

		}
		return ("<font color=".$color.">".$val."</font>");
	}

	function parseSubMeters($val)
	{
		$dotPos = strrpos($val,",");
		if($dotPos != false)
		{
			$metersFlo = intval(substr($val,$dotPos+1));
		}else{
			$dotPos = strrpos($val,".");
			if($dotPos != false)
			{
				$metersFlo = (substr($val,$dotPos+1));
			}else
			{
				$metersFlo = "-";
			}	
		}
		return ($metersFlo);
	}



  
	function getusername($_Id)
		{

			$product = $GLOBALS['db']->query(" SELECT * FROM `staff` WHERE `id` = '".$_Id."' LIMIT 1");
			$productCount = $GLOBALS['db']->resultcount();
			if($productCount == 1)
			{
				$_product = $GLOBALS['db']->fetchitem($product);
				return ("<b>".$_product['name']."</b>");
			}else
			{
				return ("طلب غير مكتمل"); 
			}
		}
 	function getlog_type($_Id)
		{

			$product = $GLOBALS['db']->query(" SELECT * FROM `log_type` WHERE `id` = '".$_Id."' LIMIT 1");
			$productCount = $GLOBALS['db']->resultcount();
			if($productCount == 1)
			{
				$_product = $GLOBALS['db']->fetchitem($product);
				return ("<b>".$_product['module']."</b>");
			}else
			{
				return ("طلب غير مكتمل"); 
			}
		}



	function getMembershipType($_Id)
		{
			$mem = "membership_".$_Id;
			if($_Id > 0 && $_Id <=3)
			{
				return ($GLOBALS[$mem]);
			}else
			{
				return ("غير محدد");
			}
		}



	function parseMeters($val)
	{
		 return intval($val);
	}
	function parseMoney($val)
	{
		$dotPos = strrpos($val,".");
		if($dotPos != false)
		{
			$moneyFlo = (substr($val,0,$dotPos));
		}
		return ($moneyFlo);
		
	}
	

    ######### Swapping textarea Content #########
    function br2nl($str)
	{
	    $str = str_replace("<br />","\n",$str);
	    return $str;
	}

	function commaSeperate($str)
	{
	    $str = str_replace(",","<br />",$str);
	    return $str;
	}


	######### Valid Email Check #########
	function checkMail($str)
	{
		return ( ! preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $str)) ? false : true;
	}

	function full_date_format ($date)
	{
	    return  date('l dS F Y - G:i:s', $date);
	}

	function full_format_ar ($val)
	{
		global $arCodeObject;
		return $arCodeObject->int2str($val);
	}

    function _date_format ($date)
	{
	    return  date('Y-m-d', $date);
	}
	
	function getFromTable($params, &$smarty)
	{
		$attId   		= $params['a'];
		$tableName   	= $params['b'];
		$functionName   = $params['c'];
		$attName   		= $params['d'];
		
		require_once('./inc/Classes/system-'.$tableName.'.php');

		eval("\$class = new system".ucfirst($tableName)."();");

		$returnedData = $class->$functionName($attId);

		return ($returnedData[$attName]);
	}

	function buildaddress($params, &$smarty)
	{
		
		$attmob   		= $params['a'];
		$attId   		= $params['e'];
		$tableName   	= $params['b'];
		$functionName   = $params['c'];
		$attName   		= $params['d'];
		
		require_once('./inc/Classes/system-'.$tableName.'.php');

		eval("\$class = new system".ucfirst($tableName)."();");

		$returnedData = $class->$functionName($attId , $attmob );
		return ($returnedData[$attName]);
	}


   


   function getposition($params, &$smarty)
		{
	   
		    $Id   		    = $params['a'];
		    $table   		= $params['b'];


	        $query = $GLOBALS['db']->query("SELECT x.id , x.position FROM (SELECT t.id,@rownum := @rownum + 1 AS position FROM `".$table."` t 
            JOIN (SELECT @rownum := 0)r WHERE t.`status`=1 ) x WHERE x.id = '".$Id."' ");
			 $productCount = $GLOBALS['db']->resultcount();
			if($productCount == 1)
			{
				$_product = $GLOBALS['db']->fetchitem($product);
				$position = $_product['position'] - 1;
				return ($position);
			}

		}




    function getFromInternalTable($a, $b, $c, $d)
	{
		$attId   		= $a;
		$tableName   	= $b;
		$functionName   = $c;
		$attName   		= $d;

		require_once('./inc/Classes/system-'.$tableName.'.php');

		eval("\$class = new system".ucfirst($tableName)."();");

		$returnedData = $class->$functionName($attId);

		if($returnedData[$attName] != "")
        return ($returnedData[$attName]);
        return "";
	}
    
    function replacestring($num){
	     $num =	  str_replace("] , [","]<br>[",$num);
		  return "$num";
	  }




	

?>