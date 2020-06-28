<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace rpc\contract\tp61;

interface ArticleInterface
{
	public function create();


	public function delete(int $id);
}

interface ProductInterface
{
	public function getList();


	public function getDetail(int $id);
}
return ['tp61' => ['rpc\contract\tp61\ArticleInterface', 'rpc\contract\tp61\ProductInterface']];