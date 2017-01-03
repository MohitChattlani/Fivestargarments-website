<?php

function render($template,$data=[])
{
	$path=__DIR__.("/../templates/".$template);
	if (file_exists($path))
	{
		extract($data);
		require($path);
	}
}
?>