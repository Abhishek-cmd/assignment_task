<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Common_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database('default');
	}
	public function getByField($table, $fieldName, $value, $conn = false) {
		$conn = $this->getConn($conn);
		$conn->where($fieldName, $value);
		$query = $conn->get($table);
		$result = $query->result_array();
		if(sizeof($result) > 0) {
			return $result[0];
		} else {
			return array();
		}
			
	}
	
	public function getAll($table, $limit=false, $offset=0, $conn = false) {
		$conn = $this->getConn($conn);
		if($limit != false) {
			$conn->limit($limit, $offset);
		}
		$query = $conn->get($table);
		$result = $query->result_array();
		return $result;
	}
	
	public function getAllFor($table, $fieldName, $value, $limit=false, $offset=0, $conn = false) {
		$conn = $this->getConn($conn);
		if($limit != false) {
			$conn->limit($limit, $offset);
		}
		$conn->where($fieldName, $value);
		$query = $conn->get($table);
		$result = $query->result_array();
		// echo $this->db->last_query();exit;
		return $result;
	}
	public function getAllOrderBy($table, $orderBy, $order, $limit=false, $offset=0, $conn = false) {
		$conn = $this->getConn($conn);
		if($limit != false) {
			$conn->limit($limit, $offset);
		}
		$conn->order_by($orderBy, $order);
		$query = $conn->get($table);
		$result = $query->result_array();
		return $result;
	}
	
	public function getAllForOrderBy($table, $fieldName, $value, $orderBy, $order, $limit=false, $offset=0, $conn = false) {
		$conn = $this->getConn($conn);
		if($limit != false) {
			$conn->limit($limit, $offset);
		}
		$conn->where($fieldName, $value);
		$conn->order_by($orderBy, $order);
		$query = $conn->get($table);
		$result = $query->result_array();
		return $result;
	}
	
	public function searchFor($table, $criteria, $limit=false, $offset=0, $conn = false) {
		$conn = $this->getConn($conn);
		if($limit !== false) {
			$conn->limit($limit, $offset);
		}
		if(is_array($criteria) && count($criteria) > 0) {
			foreach ($criteria as $key=>$val) {
				if(is_numeric($key)) {
					$conn->where($val);
				} else {
					$conn->where($key, $val);
				}
			}
		}
		$query = $conn->get($table);
		$result = $query->result_array();
		return $result;
		
	}
	public function searchForOrderBy($table, $criteria, $orderBy, $order, $limit=false, $offset=0, $conn = false) {
		$conn = $this->getConn($conn);
		if($limit != false) {
			$conn->limit($limit, $offset);
		}
		foreach ($criteria as $key=>$val) {
			if(is_numeric($key)) {
				$conn->where($val);
			} else {
				$conn->where($key, $val);
			}
		}
		$conn->order_by($orderBy, $order);
		$query = $conn->get($table);
		$result = $query->result_array();
		return $result;
	}
	
	public function insert($table, $data, $conn = false) {
		$conn = $this->getConn($conn);
		$conn->insert($table, $data);
		return $conn->insert_id();
	}
	public function update($table, $data, $condition, $conn = false) {
		$conn = $this->getConn($conn);
		$conn->update($table, $data, $condition);
		return true;
	}
	
	public function last_query($conn = false) {
		$conn = $this->getConn($conn);
		return $conn->last_query();
	}
	
	public function delete($table, $where=NULL, $conn = false) {
		$conn = $this->getConn($conn);
		if(is_null($where)) {
			throw new Exception("Cannot delete all rows... need to specify where clause / condition");
		}
		$conn->delete($table, $where);
	}
	
	public function getPrimaryKey($table, $conn = false) {
		$conn = $this->getConn($conn);
		$fields = $conn->field_data($table);
		foreach ($fields as $field)
		{
			if($field->primary_key == 1) {
				return $field->name;
			}
		}
	}
	
	public function updateField($table, $field, $incrementBy, $condition, $conn = false) {
		$conn = $this->getConn($conn);
		$conn->set($field, $field . $incrementBy, FALSE);
		$conn->where($condition);
		$conn->update($table);
	}
	
	public function countSearchFor($table, $criteria, $conn = false) {
		$conn = $this->getConn($conn);
		if(is_array($criteria) && count($criteria) > 0)
		foreach ($criteria as $key=>$val) {
			if(is_numeric($key)) {
				$conn->where($val);
			} else {
				$conn->where($key, $val);
			}
		}
		$result = $conn->count_all_results($table);
		return $result;
	}
	
	public function countAllFor($table, $fieldName, $value, $conn = false) {
		$conn = $this->getConn($conn);
		$conn->where($fieldName, $value);
		$result = $conn->count_all_results($table);
		return $result;
	}
	
	public function countAll($table, $conn = false) {
		$conn = $this->getConn($conn);
		$result = $conn->count_all_results($table);
		return $result;
	}

	public function getDistinct($table, $fieldName, $conn = false) {
		$conn = $this->getConn($conn);
		$conn->select($fieldName);
		$conn->where("$fieldName != ''");

		$conn->order_by("$fieldName", 'ASC');

		$conn->distinct();
		$query = $conn->get($table);
		$result = $query->result_array();
		$final = array();
		foreach($result as $row) {
			array_push($final, $row[$fieldName]);
		}
		return $final;
	}

	public function getDistinct_order_by($table, $fieldName, $conn = false) {
		$conn = $this->getConn($conn);
		$conn->select($fieldName);
		$conn->where("$fieldName != ''");

		$conn->order_by("$fieldName", 'DESC');

		$conn->distinct();
		$query = $conn->get($table);
		$result = $query->result_array();
		$final = array();
		foreach($result as $row) {
			array_push($final, $row[$fieldName]);
		}
		return $final;
	}

	public function getDistinct_order_by_asc($table, $fieldName, $conn = false) {
		$conn = $this->getConn($conn);
		$conn->select($fieldName);
		$conn->where("$fieldName != ''");

		$conn->order_by("$fieldName", 'ASC');

		$conn->distinct();
		$query = $conn->get($table);
		$result = $query->result_array();
		$final = array();
		foreach($result as $row) {
			array_push($final, $row[$fieldName]);
		}
		return $final;
	}
	
	public function getCount($query, $conn = false) {
	$conn = $this->getConn($conn);
	   $query = $conn->query($query);
	   return $query->num_rows();
   }
	 public function getByQuery($query, $conn = false) {
	 	$conn = $this->getConn($conn);
		$query = $conn->query($query);
		if ($query->num_rows() > 0)
		{
		 $result = $query->result_array();
		 return $result;
	    }
	}

	public function getByWhere($table, $fieldName, $value, $columns = '', $conn = false) {
		$conn = $this->getConn($conn);
		$conn->where($fieldName, $value);
		if($columns != "")
		$conn->select($columns);
		$query  = $conn->get($table);
		$result = $query->result_array();
		return $result;
	}

	public function getByWhere_IN_OrderBy($table, $fieldName, $value, $columns = '', $orderBy = '', $order= '', $limit=false, $offset=0, $conn = false) {
		$conn = $this->getConn($conn);
		if($limit != false) {
			$conn->limit($limit, $offset);
		}
		$conn->where_in($fieldName, $value);
		
		if($orderBy != "" && $order != "" )
		$conn->order_by($orderBy, $order);

		if($columns != "")
		$conn->select($columns);

		$query = $conn->get($table);
		$result = $query->result_array();
		return $result;
	}

	private function getConn($conn) {
		if(!is_bool($conn)) {
			return $conn;
		} else {
			return $this->db;
		}
	}

	public function getfield_byid($tablename, $fieldname, $id){
		$this->db->select($fieldname);
		$this->db->from($tablename);
		$this->db->where('id',$id);
		$row = $this->db->get()->row();
		if (isset($row)) {
			return $row->$fieldname;
		} else {
			return false;
		}
	}
	
}
?>