<?php
		function doingay($ngay)
		{		
			$kq = substr($ngay,6,4) ."/". substr($ngay,3,2) . "/". substr($ngay,0,2);		
			return $kq;
		}	
		function ngaythang($ngay)
		{
			$kq ="";
			if($ngay!="0000/00/00")			
				$kq = substr($ngay,8,2)."/". substr($ngay,5,2) . "/".substr($ngay,0,4)  ;		
			return $kq;
		}
		function kieudouble($so)
		{
			$kq = "";$a="";
			$kq1 = 0;$vt1=0;$vt2=0;
			if ($so != "")
			{
				$vt1 = strpos($so,",");
				$vt2 = strpos($so,".");
				if ($vt1==-1 && $vt2==-1)
				{
					$kq1 = (double)$so;
				}
				else
				{
					if ($vt1 > 0)
					{
						$kq = str_replace(",","",$so);
					}
					else
					{
						$kq = str_replace(".","",$so);
					}
				}			
				$kq1 = (double)$kq;
			}
			else
			{
				$kq1 = 0;
			}
			return $kq1;
		}
		function dinhdangso($so)
		{
			$kq = "";
			if ($so !=0)			
				//$kq = number_format($so);
				$kq = number_format($so, 0, ',','.');
			return $kq;	
		}
		function xulyso($so)
		{
			$kq = "";$a="";
			$kq1 = 0;$vt1=0;$vt2=0;
			if ($so != "")
			{
				$vt1 = strpos($so,",");
				$vt2 = strpos($so,".");
				if ($vt1==-1 && $vt2==-1)
				{
					$kq1 = (double)$so;
				}
				else
				{
					if ($vt1 > 0)
					{
						$kq = str_replace(",","",$so);
					}
					else
					{
						$kq = str_replace(".","",$so);
					}
				}			
				$kq1 = (double)$kq;
			}
			else
			{
				$kq1 = 0;
			}
			return $kq1;
		}	
		// Đọc số tiền		
		$mangso = array('không','một','hai','ba','bốn','năm','sáu','bảy','tám','chín'); 
		$donvi=" đồng chẵn./. ";
		function dochangchuc($so,$daydu) 
		{ 
			global $mangso; 
			$chuoi = ""; 
			$chuc = floor($so/10); 
			$donvi = $so%10; 
			if ($chuc>1)
			{ 
				$chuoi = " " . $mangso[$chuc] . " mươi"; 
				if ($donvi==1) 				 
					$chuoi .= " mốt"; 				
			} 
			else if ($chuc==1)
			{ 
				$chuoi = " mười"; 
				if ($donvi==1) 
					$chuoi .= " một"; 
			} 
			else if ($daydu && $donvi>0)			 
				$chuoi = " lẻ"; 			
			if ($donvi==5 && $chuc>1) 			
				$chuoi .= " lăm"; 			
			else if ($donvi>1||($donvi==1&&$chuc==0))			
				$chuoi .= " " . $mangso[$donvi]; 			
			return $chuoi; 
		} 
		function docblock($so,$daydu) 
		{ 
			global $mangso; 
			$chuoi = ""; 
			$tram = floor($so/100); 
			$so = $so%100; 
			if ($daydu || $tram>0) 
			{ 
				$chuoi = " " . $mangso[$tram] . " trăm"; 
				$chuoi .= dochangchuc($so,true); 
			} 
			else 			
				$chuoi = dochangchuc($so,false); 			
			return $chuoi; 
		} 
		function dochangtrieu($so,$daydu) 
		{ 
			$chuoi = ""; 
			$trieu = floor($so/1000000); 
			$so = $so%1000000; 
			if ($trieu>0) 
			{ 
				$chuoi = docblock($trieu,$daydu) . " triệu"; 
				$daydu = true; 
			} 
			$nghin = floor($so/1000); 
			$so = $so%1000; 
			if ($nghin>0)
			{ 
				$chuoi .= docblock($nghin,$daydu) . " nghìn"; 
				$daydu = true; 
			} 
			if ($so>0) 
				$chuoi .= docblock($so,$daydu);  
			return $chuoi; 
		} 
		function docso($so)
		{
			global $mangso;
			global $donvi;
			if ($so==0) return $mangso[0];
			$chuoi = "";
			$hauto = "";
			do
			{
				$ty = $so%1000000000;
				$so = floor($so/1000000000);
				if ($so>0)
					$chuoi = dochangtrieu($ty,true) . $hauto . $chuoi . $donvi;
				else
					$chuoi = dochangtrieu($ty,false) . $hauto . $chuoi . $donvi;
				$hauto = " tỷ";
			}
			while ($so>0);
			return ucfirst(trim($chuoi));
		}
	function docsonguoi($so)
	{
		global $mangso;
		if ($so == 0) return $mangso[0];
		$chuoi = "";
		$hauto = "";
		do {
			$ty = $so % 1000000000;
			$so = floor($so / 1000000000);
			if ($so > 0)
				$chuoi = dochangtrieu($ty, true) . $hauto . $chuoi . " người";
			else
				$chuoi = dochangtrieu($ty, false) . $hauto . $chuoi . " người";
			$hauto = " tỷ";
		} while ($so > 0);
		return ucfirst(trim($chuoi));
	}
	function CallAPI($method, $url, $data = false)
	{
		$curl = curl_init();
		$data_string = json_encode($data);
		switch ($method) {
			case "POST":
				curl_setopt($curl, CURLOPT_POST, 1);
				if ($data)
					curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
				break;
			case "PUT":
				curl_setopt($curl, CURLOPT_PUT, 1);
				break;
			default:
				if ($data)
					$url = sprintf("%s?%s", $url, http_build_query($data_string));
		}

		$headers = array(
			"X-Custom-Header: value",
			"Content-Type: application/json",
			"token:Y3NkbF9uY2M=.LuvWLIwiinyaz1kp099QiYhZcJc9lV8vXTCYWlMkcl5EgkP2PrCwT7kRCzMIKnzXj0zvNdYoxLqfbeaG"
		);
		curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		/*
		if (curl_exec($curl) === false) {
			echo 'Curl error: ' . curl_error($curl);
		}*/
		$result = curl_exec($curl);
		curl_close($curl);
		print_r(json_decode($result, true));
		return $result;
	}
	function gioitinhAPI($gioitinh){
		$kq = 1;
		switch ($gioitinh) {
			case "Nam":
				$kq = 2;
				break;
			case "Nữ":
				$kq = 3;
				break;
			default:
				$kq = 1;
		}
		return $kq;
	}
?>