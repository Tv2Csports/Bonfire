<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Protected_attribute_model extends BF_Model {

	protected $table = 'records_table';

	protected $set_created = false;
	protected $set_modified = false;

	protected $protected_attributes = array('name');
}