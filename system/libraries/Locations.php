<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class CI_Locations {	


	public function __construct()
	{	
		$apikey = 'AIzaSyDFN2LXcPO9F_Cfp1ITF_MzAjcjqFgnQbA';


	}

function get_city_by_id($city_id)
	{

		$CI = &get_instance();
		$CI->load->library('curl');


		$apikey = 'AIzaSyDFN2LXcPO9F_Cfp1ITF_MzAjcjqFgnQbA';


		$url = 'https://maps.googleapis.com/maps/api/place/details/json?key='.$apikey.'&placeid='.$city_id;
		


    $CI->curl->create($url);
    $CI->curl->ssl(TRUE);

    $json_array = json_decode($CI->curl->simple_get($url));

    return $json_array->result->formatted_address;
	}




}













 ?>