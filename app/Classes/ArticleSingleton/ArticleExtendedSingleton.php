<?php

namespace App\Classes\ArticleSingleton;

class ArticleExtendedSingleton extends Singleton{
	private $data = [];

	public function setAllArticles($v){
		$this->data[] = $v;
	}

	public function getAllArticles(){
		return $this->data;
	}
}