<?php namespace Capsule\Helpers;
/**
 * Helper Environtment here
 *
 * Author : Muhamad Reza Abdul Rohim <reza.wikrama3@gmailc.com>
 * 
 */
use Session;

class Helper
{

	public function __construct()
	{
		//
	}

	public function initScript($params)
	{
		$str="<script>";
		$str.= $params;
		$str.="</script>";
		
		return $str;
	}

	public function flash($str)
	{
		$encode = json_encode($str);
		$swal = "swal($encode)";
		return $this->initScript($swal);
	}

	public function flashValidation()
	{
		if(Session::has('errors'))
		{
			$str = '';
			foreach(Session::get('errors')->all() as $error)
			{
				$str.= $error.'<br/>';
			}

			return $this->flash([
				'type'		=> 'error',
				'title'		=> 'Error Validation',
				'text'		=> $str,
				'html'		=> true,
			]);

		}else{
			return '';
		}
	}

	public function flashSuccess()
	{
		if(Session::has('success'))
		{
			return $this->flash([
				'type'		=> 'success',
				'title'		=> 'Success',
				'text'		=> Session::get('success'),
				'html'		=> true,
			]);
		}
	}

	public function flashInfo()
	{
		if(Session::has('info'))
		{
			return $this->flash([
				'type'		=> 'info',
				'title'		=> 'info',
				'text'		=> Session::get('info'),
				'html'		=> true,
			]);
		}
	}

	public function flashError()
	{
		if(Session::has('error'))
		{
			return $this->flash([
				'type'		=> 'error',
				'title'		=> 'Error',
				'text'		=> Session::get('error'),
				'html'		=> true,
			]);
		}
	}

	public function encrypt($value)
	{
		return md5(md5(md5(md5('MUHAMADREZAABDULROHIM'.$value))));
	}
}