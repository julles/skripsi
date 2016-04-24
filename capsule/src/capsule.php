<?php
function user()
{
	return auth()->user();
}

function setting()
{
	return new \Capsule\Settings\Setting();
}

function helper()
{
	return new \Capsule\Helpers\Helper();
}