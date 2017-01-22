<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
header("cache-Control: no-store, no-cache, must-revalidate");
header("cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

/* ===================================================

 * Author :Ammar Naji Ahmed.
 * E-mail :amar_ash@yahoo.com
 * Phone  :0176937076
 
 * Copyright : NI Solution ========================================================== */

 class print_report extends CI_Controller{
	 
    function __construct(){
		
        parent::__construct();
        $this->check_isvalidated();
		
    }
    
	
    private function check_isvalidated(){
        if(! $this->session->userdata('validated')){
            redirect('index');
        }
		
	}

	
	//booking report
	
	public function report($facility_type = null, $report_type = null){
		
		$this->load->library('pdf');
		
		$datestring = "%Y-%m-%d";
        $time = time();
		$current_date = mdate($datestring, $time);
		
		$datestring = "%H:%i:%s";
        $time = time();
		$current_time = mdate($datestring, $time);
		
$this->load->model('booking_model');

if($report_type == null || $report_type == "daily"){
	$display_type = "Today";
	$today = date("Y-m-d");
	$result = $this->booking_model->get_daily_report($today, $facility_type);
	$data['report'] = $result['row'];
	 
	$result = $this->booking_model->get_all_slot_all();
	$data['slot'] = $result['row'];
	 
	$result = $this->booking_model->get_all_user();
	$data['user'] = $result['row'];
}

if($report_type == "monthly"){
	$display_type = "This Month";
	$this_month = date("m");
	$this_year = date("Y");
	$result = $this->booking_model->get_monthly_report($this_month, $this_year, $facility_type);
	$data['report'] = $result['row'];
	 
	$result = $this->booking_model->get_all_slot_all();
	$data['slot'] = $result['row'];
	 
	$result = $this->booking_model->get_all_user();
	$data['user'] = $result['row'];
}

if($report_type == "annually"){
	$display_type = "This Year";
	$this_year = date("Y");
	$result = $this->booking_model->get_annually_report($this_year, $facility_type);
	$data['report'] = $result['row'];
	 
	$result = $this->booking_model->get_all_slot_all();
	$data['slot'] = $result['row'];
	 
	$result = $this->booking_model->get_all_user();
	$data['user'] = $result['row'];
}

$result = $this->booking_model->get_all_facility();
$data['facility'] = $result['row'];

if($facility_type == null || $facility_type == "all"){
	$display_facility = "All Facilities";
}else{
	foreach($data['facility'] as $row):{
	if($row->fac_id == $facility_type){
		$display_facility = $row->name;
	}
		
	} endforeach;
}

//booked days
$booked_days = 0;
foreach($data['report'] as $row):{
$booked_days++;	
}endforeach;
		
	
		
// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Ammar Naji');
$pdf->SetTitle('Booking Report');
$pdf->SetSubject('');
$pdf->SetKeywords('booking, report');

// set default header data
$pdf->SetHeaderData('the_pearl.jpg', PDF_HEADER_LOGO_WIDTH, "The Pearl", "Contact Ifno  \nDate: ".$current_date."/".$current_time);	


// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    require_once(dirname(__FILE__).'/lang/eng.php');
    $pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
$pdf->SetFont('helvetica', 'B', 15);

// add a page
$pdf->AddPage();

$pdf->setJPEGQuality(75);

// Image method signature:
//Image($file, $x='', $y='', $w=0, $h=0, $type='', $link='', $align='', $resize=false, $dpi=300, $palign='', $ismask=false, $imgmask=false, $border=0, $fitbox=false, $hidden=false, $fitonpage=false);

// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -





$pdf->Write(0, 'Report Type: '.$display_type.' ( '.$display_facility.' )', '', 0, 'L', true, 1, false, false, 0);

// Image example with resizing

// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



	
$pdf->SetFont('helvetica','B',10);

$pdf->Cell(0, 10, '', 0, 1, 'L');

$pdf->Cell(0, 20, 'Total Booking: '.$booked_days, 0, 1, 'L');

$pdf->SetFont('helvetica', '', 10);

if($booked_days != 0){
	
	$tbl ='
<table cellspacing="2" cellpadding="0" border="1">
     <tr nobr="true">
        <th bgcolor="#cccccc" align="center">#</th>
		<th bgcolor="#cccccc" align="center">Date</th>
		<th bgcolor="#cccccc" align="center">Slot</th>
		<th bgcolor="#cccccc" align="center">Facility</th>
		<th bgcolor="#cccccc" align="center">Booked By</th>
		</tr></table>';
	$pdf->writeHTML($tbl, false, false, false, false, '');
	$i = 1;
	foreach($data['report'] as $row):{
		foreach($data['slot'] as $srow):{
			if($row->slot_id == $srow->id){
				$slot = $srow->from." - ".$srow->to;
			}	
		}endforeach;
		foreach($data['facility'] as $frow):{
			if($row->f_id == $frow->fac_id){
				$facility_name = $frow->name;
			}	
		}endforeach;
		$found = false;
		foreach($data['user'] as $urow):{
			if($row->request_by == $urow->uid){
				$booked_by = $urow->name;
				$found = true;
			}
			if(!$found){
			$booked_by = "Deleted";
			}	
		}endforeach;
	
		$tbl ='<table cellspacing="2" cellpadding="0" border="1">
		<tr nobr="true">
        <td bgcolor="#cccccc" align="center">'.$i.'</td>
        <td align="center">'.$row->date.'</td>
		<td align="center">'.$slot.'</td>
	    <td align="center">'.$facility_name.'</td>
		<td align="center">'.$booked_by.'</td>
    </tr>
	</table>';
	
	$pdf->writeHTML($tbl, false, false, false, false, '');
	} $i++; endforeach;
}else{
	$pdf->SetFont('helvetica','',10);
	
	$pdf->Cell(0, 20, 'No Data to Display', 0, 1, 'L');
	
	$pdf->SetFont('helvetica', '', 10);
	
}
	
	
	

$pdf->lastPage();



//Close and output PDF document
$pdf->Output('booking_report', 'I');

//============================================================+
// END OF FILE
//============================================================+
	
    }
	
	//full Clinical and Biochemisry Summary report
	
	
	
 }
 ?>