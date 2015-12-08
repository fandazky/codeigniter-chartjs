<?php if(!defined('BASEPATH')) exit('Hacking Attempt : Keluar dari sistem..!!');

class M_datachart extends CI_Model
{

    public function getEarningsJSON($year) {
		$sql = "SELECT total FROM earnings WHERE year = $year ORDER BY STR_TO_DATE(month, '%m')";
		$totals = array(); 

		while($res = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
			$totals[] = $res['total'];
		}

		$final = json_encode($totals);
		$results = preg_replace('/"([a-zA-Z]+[a-zA-Z0-9_]*)":/','$1:', $final);
		print $results;
	}
    
    public function getChartLabelJSON() {
		$sql = "SELECT DISTINCT month FROM earnings ORDER BY STR_TO_DATE(month, '%m')";
		$months = array();

		while($res = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
			$months[] = $res['month'];
		}
		print json_encode($months);
	}
    
    
    public function getYear(){
        // $this->db->select('year');
        // $this->db->group_by('year');
        // $query = $this->db->get('earnings');
        $query = $this->db->query("SELECT DISTINCT year FROM earnings ORDER BY year ASC");
        return $query->result();
    }

    public function getMonth(){
        // $this->db->select('month');
        // $this->db->group_by('month');
        // $query = $this->db->get('earnings');
        $query = $this->db->query("SELECT DISTINCT month FROM earnings ORDER BY STR_TO_DATE(month, '%m')");
        return $query->result();
    }

    public function getEarning($year){
    	// $this->db->select("total");
    	// $this->db->order_by("STR_TO_DATE(month, '%m')");
    	// $query = $this->db->get_where("earnings", array("year" => $year));
    	$query = $this->db->query("SELECT total FROM earnings WHERE year = '$year' ORDER BY STR_TO_DATE(month, '%m')");
    	return $query->result();
    }
}