<?php

	class postsModel extends Model{
		
		public function getEntries(){
			$return = array();
			$return[0] = array('title'=>'hello world');
			$return[1] = array('title'=>'hello universe');

			return $return;
		}
	}
?>
