<?php
class REST{
	public static $url = "http://localhost:8080/RESTfulWS/rest/"; 
	public static $appkey = "kEIYWArRKhqxPGIfWnsS6wu5YADmsg";
 
	static function POSTRequest($path, $data){
		$data_string = json_encode($data);
		$ch = curl_init(REST::$url.$path);                                                                      
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
			'Content-Type: application/json',                                                                                
			'Content-Length: ' . strlen($data_string))                                                                       
		);                                                                                                                   
		 
		$result = curl_exec($ch);
		return $result;
	}
	static function GETRequest($path){
		$ch = curl_init(REST::$url.$path);                                                                      
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");                                                                                                                                  
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
			'Content-Type: application/json')                                                                       
		);                                                                                                                   
		 
		$result = curl_exec($ch);
		return $result;
	}
}