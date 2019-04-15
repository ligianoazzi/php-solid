<?php

namespace lda\Solid;

class Html
{
	public function img(string $src)
	{
		return '<img src="'.$src.'">';
	}
} 