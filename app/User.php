<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
	protected $table='users';
	protected $primaryKey='UserID';

	function getName(){
		return "$this->UserFirstName"." $this->UserLastName";
	}

	function getEmail(){
		return "$this->UserEmail";
	}

	function getCountry(){
		return "$this->UserCountry";
	}

    function get_gravatar( $email='$this->email', $s = 130, $d = 'mm', $r = 'g', $img = false, $atts = array() ) {
    	$url = 'https://www.gravatar.com/avatar/';
    	$url .= md5( strtolower( trim( $email ) ) );
    	$url .= "?s=$s&d=$d&r=$r";
    	if ( $img ) {
    		$url = '<img src="' . $url . '"';
    		foreach ( $atts as $key => $val )
    			$url .= ' ' . $key . '="' . $val . '"';
    		$url .= ' />';
    	}
    	return $url;
    }
}
