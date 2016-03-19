<?php

namespace MrKoopie\WP_wrapper;

class WP_wrapper
{

	/** 
	 * Call $function in the root namespace and pass the arguments.
	 * @param  string $function  The $function name.
	 * @param  array  $arguments The parameters for $function.
	 * @return various           Returned data by the function.
	 */
	public function __call($function, $arguments)
	{
		return call_user_func_array( '\\'.$function, $arguments);
	}
}
