<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tampilkan extends CI_Controller {

    public function __construct()
    {
        parent::__construct(); 
        $this->load->model('m_datachart');
    }
    
	public function index()
	{
		$Data['tahun'] = $this->m_datachart->getYear();
		$this->load->view('index', $Data);
	}

	public function showchart()
	{
		$year1 = $this->input->post('yearOne');
		$year2 = $this->input->post('yearTwo');

		$earning1 = $this->m_datachart->getEarning($year1);
		$earning2 = $this->m_datachart->getEarning($year2);

		$total1= array();
		$total2= array();

		foreach ($earning1 as $tot) {
			$total1[] = $tot->total;
		}

		foreach ($earning2 as $tot) {
			$total2[] = $tot->total;
		}	

		$bulan = $this->m_datachart->getMonth();
		$label = array();
		foreach ($bulan as $m) {
			$label[] = $m->month;
		}

		//print_r($label);

		$Data['label'] = json_encode($label);//json_encode($label);
		$Data['tahun'] = $this->m_datachart->getYear();
		$Data['result1'] = json_encode($total1);
		$Data['result2'] = json_encode($total2);
		$Data['one'] = $year1;
		$Data['two'] = $year2;

		$this->load->view('chart', $Data);
		//print_r($this->m_datachart->getMonth());
		// print_r($this->m_datachart->getEarning($year1));
		// echo " spasi ";
		//print_r($this->m_datachart->getEarning($year2));

	}
}
