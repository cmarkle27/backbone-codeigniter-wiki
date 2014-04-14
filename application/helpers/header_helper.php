<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * CodeIgniter
 *
*/
if ( ! function_exists('script'))
{
	function script($uri)
	{
		$CI =& get_instance();
		echo "<script src=\"{$CI->config->base_url($uri)}\"></script>\n";
	}
}

if ( ! function_exists('css'))
{
	function css($uri)
	{
		$CI =& get_instance();
		echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"{$CI->config->base_url($uri)}\">\n";
	}
}


/* End of file path_helper.php */
/* Location: ./system/helpers/path_helper.php */