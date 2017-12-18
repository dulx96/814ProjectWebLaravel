<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
	protected $table='users';
	protected $primaryKey='UserID';
    public $timestamps = false;


	function getName(){
		return "$this->UserFirstName"." $this->UserLastName";
	}

	function getEmail(){
		return "$this->UserEmail";
	}

	function getCountry(){
		return "$this->UserCountry";
	}

    function get_gravatar( $email) {
    	$url = 'https://www.gravatar.com/avatar/';
    	$url .= md5( strtolower( trim( $email ) ) );
    	return $url;
    }
}
