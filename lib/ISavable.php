<?php 

interface ISavable {
	function save();
	function edit();
	public static function delete($id);
	public static function printList();
}