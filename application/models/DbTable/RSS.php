<?php

class Application_Model_DbTable_RSS extends Zend_Db_Table_Abstract
{

	protected $_name = 'rss';
	function listRSS(){
		// select all rss table
		return $this->fetchAll()->toArray();
	}
	
	function getRSSById($id){
		return $this->find($id)->toArray();
	}

	function deleteRSS($id){
		return $this->delete('id='.$id);
	}

	function addRSS($link){	
		$row = $this->createRow();
		$row->link = $link['link'];
		return $row->save();
	}

	public function editRSS($link, $id)
	{
		$l = $link['link'];
		$data = array(
			'link'      => "$l"
			);

		$where = $this->getAdapter()->quoteInto('id = ?', $id);

		$this->update($data, $where);
	}
}

