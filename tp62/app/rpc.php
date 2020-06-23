<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace rpc\contract\tp61;

interfaces ArticleInterface
{
	public function add($title);


	public function list();
}

interfaces UserInterface
{
	public function money($money);


	public function getInfo($name);
}
return ['tp61' => ['rpc\contract\tp61\ArticleInterface', 'rpc\contract\tp61\UserInterface']];