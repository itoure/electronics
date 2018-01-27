<?php

namespace AppBundle\Utils;

class Utils
{

	public function success($data = [])
	{
		return array('success' => true, 'data' => $data);
	}

	public function error($msg)
	{
		return array('success' => false, 'error' => $msg);
	}

	public function denie()
	{
		return array('success' => false, 'error' => 'Access denied');
	}


}