<?php
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'portal');


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

error_reporting(1);

class VSM_Digi
{
	public $conn;
	
	function __construct()
	{
		$this->conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS) or die('Connection Issue '.mysql_error());
		mysqli_select_db($this->conn, DB_NAME);
	}
	
//*****************************************Login Page functions******************************************
	public function verify_credentials()
	{
		$username = mysqli_real_escape_string($this->conn ,$_POST["username"]);
		$password = mysqli_real_escape_string($this->conn ,$_POST["password"]);
		$enpassword = md5(md5(sha1($password)));
		
		$res = mysqli_num_rows(mysqli_query( $this->conn , "SELECT username from login where username = '$username' and password='$enpassword'"));
		$error = mysqli_error($this->conn);
		
		$result = array($res, $error, $username);
		return $result;
	}
	
	public function change_password()
	{
		$username = $_SESSION['username'];
		$oldpass = mysqli_real_escape_string($this->conn ,$_POST["oldpass"]);
		$newpass = mysqli_real_escape_string($this->conn ,$_POST["newpass"]);
		$oldenpass = md5(md5(sha1($oldpass)));
		
		$checkpass = mysqli_fetch_assoc(mysqli_query( $this->conn , "select password from login where username = '$username'"));
		
		if($oldenpass == $checkpass["password"])
		{
			$enpass = md5(md5(sha1($newpass)));
			$res = mysqli_query($this->conn , "Update login set password = '$enpass', changedts = now() where username = '$username'");
			$error = mysqli_error($this->conn);
			
			$result = array($res, $error);
			return $result;
		}
		else
		{
			$result = "OPI";
			return $result;
		}
	}

//********************************************Donor Functions******************************************************
	public function create_donor()
	{
		$createdby = $_SESSION['username'];
		$fname=$_POST["fname"];
		$mname=$_POST["mname"];
		$lname=$_POST["lname"];
		$address1=$_POST["address1"];
		$address2=$_POST["address2"];
		$address3=$_POST["address3"];
		$district=$_POST["district"];
		$city=$_POST["city"];
		$mobile=$_POST["mobile"];
		$landline=$_POST["landline"];
		$altnumber=$_POST["altnumber"];
		if(isset($_POST["iscompany"]))
			$iscompany = "yes";
		else
			$iscompany = "no";
		if(isset($_POST["isvip"]))
			$isvip = "yes";
		else
			$isvip = "no";
		$donorcat=$_POST["donorcat"];
		$details=$_POST["details"];
		$email=$_POST["email"];
		$pancard=$this->encrypt($_POST["pancard"]);
				
		$res = mysqli_query( $this->conn , "INSERT into donors(did,fname,mname,lname,address1,address2,address3,district,city,mobile,landline,altnumber,
											email,pancard,iscompany,isvip,donorcat,details,createdby,createdon) 
							VALUES(NULL,'$fname','$mname','$lname','$address1','$address2','$address3','$district','$city','$mobile',
									'$landline','$altnumber','$email','$pancard','$iscompany','$isvip','$donorcat','$details','$createdby',now())");
		$error = mysqli_error($this->conn);
		
		$result = array($res, $error);
		return $result;
	}
	
	public function update_donor()
	{
		$changedby = $_SESSION['username'];
		$did=$_POST["did"];
		$fname=$_POST["fname"];
		$mname=$_POST["mname"];
		$lname=$_POST["lname"];
		$address1=$_POST["address1"];
		$address2=$_POST["address2"];
		$address3=$_POST["address3"];
		$district=$_POST["district"];
		$city=$_POST["city"];
		$mobile=$_POST["mobile"];
		$landline=$_POST["landline"];
		$altnumber=$_POST["altnumber"];
		if(isset($_POST["iscompany"]))
			$iscompany = "yes";
		else
			$iscompany = "no";
		if(isset($_POST["isvip"]))
			$isvip = "yes";
		else
			$isvip = "no";
		$donorcat=$_POST["donorcat"];
		$details=$_POST["details"];
		$email=$_POST["email"];
		$pancard=$this->encrypt($_POST["pancard"]);
				
		$res = mysqli_query( $this->conn , "Update donors 
											set fname = '$fname', mname = '$mname', lname = '$lname',
											address1 = '$address1', address2 = '$address2', address3 = '$address3',
											district = '$district', city = '$city', mobile = '$mobile', landline = '$landline', altnumber = '$altnumber',
											email = '$email', pancard = '$pancard', iscompany = '$iscompany', isvip = '$isvip', donorcat = '$donorcat',
											details = '$details', changedby = '$changedby', changedon = now() where did = $did");
		$error = mysqli_error($this->conn);
		
		$result = array($res, $error);
		return $result;
	}
	
	public function get_donorlist()
	{		
		$donorlist = mysqli_query( $this->conn , "select did, fname, mname, lname from donors");
		return $donorlist;
	}
	
	public function retrieve_donorlist()
	{		
		$donorlist = mysqli_query( $this->conn , "select * from donors");
		return $donorlist;
	}
	
	public function get_donorlist_did($donorid)
	{		
		$did = $donorid;
		$donorlist = mysqli_fetch_assoc(mysqli_query( $this->conn , "select * from donors where did = $did"));		$donorlist["pancard"] = $this->decrypt($donorlist["pancard"]);

		return $donorlist;
	}	
	
	public function get_donationlist_did($donorid)
	{		
		$did = $donorid;
		$donorlist = mysqli_query( $this->conn , "select * from donations where did = $did");
		return $donorlist;
	}
	
	public function check_emailexists($data)
	{
		$email=$data;
		$res = mysqli_fetch_assoc(mysqli_query($this->conn, "Select did, fname, lname from donors where email LIKE '%$email%'"));
		return $res;
	}
	
	public function check_panexists($data)
	{
		$pancard=$this->encrypt($data);
		$res = mysqli_fetch_assoc(mysqli_query($this->conn, "Select did, fname, lname from donors where pancard LIKE '%$pancard%'"));		
		return $res;
	}
	
	public function delete_donorlist_did($did)
	{		
		$did = $did;
		$donordelete = mysqli_query( $this->conn , "DELETE FROM donors WHERE did = '$did';");
		$donorerror = mysqli_error($this->conn);
		
		$donationdelete = mysqli_query( $this->conn , "DELETE FROM donations WHERE did = '$did';");
		$donationerror = mysqli_error($this->conn);
		
		$result = array($donordelete, $donorerror, $donationdelete, $donationerror);
		return $result;
	}
//************************************************Donation Related functions**********************************	
	public function create_donation()
	{
		$createdby = $_SESSION['username'];
		$did= $_POST["donor"];
		
		//Get Date in proper format
		$tdate= $_POST["tdate"];
		$tdate1 = explode("-",$tdate);
		$tdate = $tdate1[2].$tdate1[1].$tdate1[0];

		$modeofpay = $_POST["modeofpay"];
		$amount= $_POST["amount"];
		$dtype= $_POST["dtype"];
		$fyear = $_POST["fyear"];
		$branch = $_POST["branch"];
		$receipt = $_POST["receipt"];
		if ($receipt == '')
			$receipt = "NULL";
		if(isset($_POST["receiptcheck"]))
		{
			$receiptcheck = "yes";	
			$receiptno= mysqli_fetch_assoc(mysqli_query($this->conn, "Select max(receipt)+1 as maxreceipt from donations"));		
			$receipt = $receiptno['maxreceipt'];
			if ($receipt < 30000)
				$receipt = 30000;
			else
				$receipt = $receiptno['maxreceipt'];
		}
		else
			$receiptcheck = "no";
		$reference = $_POST["reference"];
		$kname= $_POST["kname"];
		$reason= $_POST["reason"];
		$remarks= $_POST["remarks"];
		
		$res = mysqli_query( $this->conn , "INSERT into 					donations(tid,did,tdate,modeofpay,amount,donationtype,fyear,branch,receipt,receiptcheck,reference,
							kname,reason,remarks,createdby,createdon) 
							VALUES(NULL,'$did','$tdate','$modeofpay','$amount','$dtype','$fyear','$branch',$receipt,'$receiptcheck','$reference','$kname','$reason','$remarks','$createdby',now())");
		$error = mysqli_error($this->conn);
		
		$result = array($res, $error);
		return $result;
	}
	
	public function update_donation()
	{
		$did= $_POST["donor"];
		$tid= $_POST["tid"];
		$changedby = $_SESSION['username'];
		
		//Get Date in proper format
		$tdate= $_POST["tdate"];
		$tdate1 = explode("-",$tdate);
		$tdate = $tdate1[2].$tdate1[1].$tdate1[0];

		$modeofpay = $_POST["modeofpay"];
		$amount= $_POST["amount"];
		$dtype= $_POST["dtype"];
		$fyear = $_POST["fyear"];
		$branch = $_POST["branch"];
		$receipt = $_POST["receipt"];
		if ($receipt == '')
			$receipt = "NULL";
		$reference = $_POST["reference"];
		$kname= $_POST["kname"];
		$reason= $_POST["reason"];
		$remarks= $_POST["remarks"];
		
		$res = mysqli_query( $this->conn , "UPDATE donations SET did = '$did', tdate = '$tdate', modeofpay = '$modeofpay', amount = '$amount',donationtype = '$dtype',
											fyear = '$fyear', branch = '$branch',  receipt = $receipt, reference = '$reference', kname = '$kname', reason = '$reason',
											remarks = '$remarks', changedby = '$changedby',
											changedon = now() where tid = '$tid'");
		$error = mysqli_error($this->conn);
		
		$result = array($res, $error);
		return $result;
	}
	
	public function check_receiptexists($data)
	{
		$receipt=$data;		
		$res = mysqli_fetch_assoc(mysqli_query($this->conn, "Select tid from donations where receipt LIKE '$receipt'"));		
		return $res;
	}
		
	public function donations_list_get()
	{		
		$donorlist = mysqli_query( $this->conn , "SELECT concat(a.fname,' ',a.mname,' ',a.lname) as 'fullname', b.* FROM `donors` a ,donations b WHERE a.did = b.did;");
		return $donorlist;
	}
	
	public function donations_list_get_v2()
	{	
		$daterange = $_POST['daterange'];
		$startdate =  explode("/",substr($daterange,0,10));
		$enddate = explode("/",substr($daterange,13,10));
		$startmonth = $startdate[1];
		$startyear = $startdate[2];
		$startdate = $startdate[2]."-".$startdate[1]."-".$startdate[0];
		$enddate = $enddate[2]."-".$enddate[1]."-".$enddate[0];
		
		$did = isset($_POST['donor']) ? $_POST['donor'] : '';
		$modeofpay = $_POST["modeofpay"];
		$fyear = $_POST["fyear"];
		$branch = $_POST["branch"];
		$reference = $_POST["reference"];
		$reason= $_POST["reason"];
		
		$conditions = array();
		$conditions[0] = "a.did = b.did";
		$conditions[1] = "(b.tdate between '$startdate' and '$enddate')";

		if(!empty($did))
		  $conditions[] = "b.did='$did'";
		if(!empty($modeofpay))
		  $conditions[] = "b.modeofpay='$modeofpay'";
		if(!empty($fyear))
		  $conditions[] = "b.fyear='$fyear'";
		if(!empty($branch))
		  $conditions[] = "b.branch='$branch'";
		if(!empty($reference))
		  $conditions[] = "b.reference='$reference'";
		if(!empty($reason))
		  $conditions[] = "b.reason='$reason'";
		
		
        $sql = "SELECT concat(a.fname,' ',a.mname,' ',a.lname) as 'fullname', a.email, b.* 
                FROM `donors` a, donations b";
        if (count($conditions) > 0)
			$sql.= " WHERE ".implode(' AND ', $conditions);
	
		$donorlist = mysqli_query( $this->conn , $sql);
		
		$result = array($donorlist,$sql);
		return $result;
	}

	public function get_donationlist_tid($tid)
	{		
		$tid = $tid;
		$donationlist = mysqli_fetch_assoc(mysqli_query( $this->conn , "SELECT concat(a.fname,' ',a.mname,' ',a.lname) as 'fullname', a.did, b.* FROM `donors` a ,donations b WHERE a.did = b.did and b.tid = '$tid';"));
		return $donationlist;
	}
	
	public function delete_donationlist_tid($tid)
	{		
		$tid = $tid;
		$donationlist = mysqli_query( $this->conn , "DELETE FROM donations WHERE tid = '$tid';");
		$error = mysqli_error($this->conn);
		
		$result = array($donationlist, $error);
		return $result;
	}
//************************************************Report Section functions*******************************************
	public function report_MonthlyDonationMailer($daterange)
	{
		$startdate =  explode("/",substr($daterange,0,10));
		$enddate = explode("/",substr($daterange,13,10));
		
		$startmonth = $startdate[1];
		$startyear = $startdate[2];
		$startdate = $startdate[2]."-".$startdate[1]."-".$startdate[0];
		$enddate = $enddate[2]."-".$enddate[1]."-".$enddate[0];
		$monthName = date('F', mktime(0, 0, 0, $startmonth, 10));  //Convert Month number to Name
		
		$monthlydonationlist = mysqli_query( $this->conn , "SELECT b.tdate, concat(a.fname,' ',a.mname,' ',a.lname) as 'donorname', b.amount, 
															b.receipt, b.branch, b.reference, b.kname FROM donors a, donations b WHERE a.did = b.did
															and tdate between '$startdate' and '$enddate';");
		
		$result = array($monthlydonationlist,$monthName.' '.$startyear);
		return $result;
	}
	
	public function report_MonthlyDonationMailer_summary($daterange)
	{
		$startdate =  explode("/",substr($daterange,0,10));
		$enddate = explode("/",substr($daterange,13,10));
		
		$startdate = $startdate[2]."-".$startdate[1]."-".$startdate[0];
		$enddate = $enddate[2]."-".$enddate[1]."-".$enddate[0];
		
		$monthlydonationlist = mysqli_query( $this->conn , "SELECT reference, count(*) as 'MainCount', sum(amount) as 'MainSum',
							(count(*) /(select count(*) from donations where tdate BETWEEN '$startdate' and '$enddate' ))*100 as 'CountPercent',
							(sum(amount) /(select sum(amount) from donations where tdate BETWEEN '$startdate' and '$enddate' ))*100 as 'Sumpercent' 
							FROM `donations` where tdate BETWEEN '$startdate' and '$enddate'
							GROUP BY `reference` order by MainSum desc");
		
		return $monthlydonationlist;
	}
	
	public function report_MonthlyDonationMailer_branch_summary($daterange)
	{
		$startdate =  explode("/",substr($daterange,0,10));
		$enddate = explode("/",substr($daterange,13,10));
		
		$startdate = $startdate[2]."-".$startdate[1]."-".$startdate[0];
		$enddate = $enddate[2]."-".$enddate[1]."-".$enddate[0];
		
		$monthlydonationlist = mysqli_query( $this->conn , "SELECT branch, count(*) as 'MainCount', sum(amount) as 'MainSum',
							(count(*) /(select count(*) from donations where tdate BETWEEN '$startdate' and '$enddate' ))*100 as 'CountPercent',
							(sum(amount) /(select sum(amount) from donations where tdate BETWEEN '$startdate' and '$enddate' ))*100 as 'Sumpercent' 
							FROM `donations` where tdate BETWEEN '$startdate' and '$enddate'
							GROUP BY `branch` order by MainSum desc");
		
		return $monthlydonationlist;
	}
	
	public function report_MonthlyDonationMailer_summary2($daterange)
	{
		$startdate =  explode("/",substr($daterange,0,10));
		$year =  $startdate[2];
		$month = $startdate[1];
		
		if ($month > 03)
			$fy = $year."-".substr($year+1,2,2);
		else
			$fy = ($year-1)."-".substr($year,2,2);
		
		$monthlydonationlist = mysqli_query( $this->conn , "SELECT month(`tdate`) as mon,`fyear`,sum(amount) as amount from donations
													where fyear = '$fy'
													group by `fyear`, mon 
													ORDER BY CASE 
													WHEN mon = 04 THEN 1 
													WHEN mon = 05 THEN 2 
													WHEN mon = 06 THEN 3 
													WHEN mon = 07 THEN 4 
													WHEN mon = 08 THEN 5 
													WHEN mon = 09 THEN 6 
													WHEN mon = 10 THEN 7 
													WHEN mon = 11 THEN 8 
													WHEN mon = 12 THEN 9 
													WHEN mon = 01 THEN 10 
													WHEN mon = 02 THEN 11 
													WHEN mon = 03 THEN 12
													END");
		
		$result = array($monthlydonationlist, $fy);
		return $result;
	}
	
	public function report_MonthlyDonationMailer_summary2_v2($daterange)
	{
		$startdate =  explode("/",substr($daterange,0,10));
		$year =  $startdate[2];
		$month = $startdate[1];
		
		if ($month > 03)
			$fy = $year."-".substr($year+1,2,2);
		else
			$fy = ($year-1)."-".substr($year,2,2);
		
		$monthlydonationlist = mysqli_query( $this->conn , "select
																fyear,
																sum(if(month(`tdate`)=04,amount,'')) as April,
																sum(if(month(`tdate`)=05,amount,'')) as May,
																sum(if(month(`tdate`)=06,amount,'')) as June,
																sum(if(month(`tdate`)=07,amount,'')) as July,
																sum(if(month(`tdate`)=08,amount,'')) as August,
																sum(if(month(`tdate`)=09,amount,'')) as September,
																sum(if(month(`tdate`)=10,amount,'')) as October,
																sum(if(month(`tdate`)=11,amount,'')) as November,
																sum(if(month(`tdate`)=12,amount,'')) as December,
																sum(if(month(`tdate`)=01,amount,'')) as Jan,
																sum(if(month(`tdate`)=02,amount,'')) as Feb,
																sum(if(month(`tdate`)=03,amount,'')) as March,
																sum(amount) as Total
																from donations
																group by fyear
																order by fyear desc");
		
		return $monthlydonationlist;
	}
	
	public function report_donorlist()
	{		
		$donorlist = mysqli_query( $this->conn , "select * from donors");
		return $donorlist;
	}

	public function report_donationlist()
	{		
		$donorlist = mysqli_query( $this->conn , "SELECT concat(a.fname,' ',a.mname,' ',a.lname) as 'fullname', b.* FROM `donors` a ,donations b WHERE a.did = b.did;");
		return $donorlist;
	}
	
	public function report_donationlist_v2()
	{		
		$donorlist = mysqli_query( $this->conn , "SELECT concat(a.fname,' ',a.mname,' ',a.lname) as 'fullname',concat(a.address1,' ',a.address2,' ',a.address3) as 'address', a.mobile, a.email, a.pancard, a.isvip, a.iscompany, b.* FROM `donors` a ,donations b WHERE a.did = b.did;");
		return $donorlist;
	}
	
	public function currformat($money)
	{
		if(strpos($money,"."))
		{
			$amount = explode('.',$money);
			$money = $amount[0];
		}
		$len = strlen($money);
		$m = '';
		$money = strrev($money);
		for($i=0;$i<$len;$i++){
			if(( $i==3 || ($i>3 && ($i-1)%2==0) )&& $i!=$len){
				$m .=',';
			}
			$m .=$money[$i];
		}
	   if(!empty($amount[1]))
		   return strrev($m).".".$amount[1];
		else
			return strrev($m);
	}
	
	public function number_to_words($amount)
	{
		$number = $amount;
		$no = round($number);
		$point = round($number - $no, 2) * 100;
		$hundred = null;
		$digits_1 = strlen($no);
		$i = 0;
		$str = array();
		$words = array('0' => '', '1' => 'one', '2' => 'two',
		'3' => 'three', '4' => 'four', '5' => 'five', '6' => 'six',
		'7' => 'seven', '8' => 'eight', '9' => 'nine',
		'10' => 'ten', '11' => 'eleven', '12' => 'twelve',
		'13' => 'thirteen', '14' => 'fourteen',
		'15' => 'fifteen', '16' => 'sixteen', '17' => 'seventeen',
		'18' => 'eighteen', '19' =>'nineteen', '20' => 'twenty',
		'30' => 'thirty', '40' => 'forty', '50' => 'fifty',
		'60' => 'sixty', '70' => 'seventy',
		'80' => 'eighty', '90' => 'ninety');
		$digits = array('', 'hundred', 'thousand', 'lakh', 'crore');
		while ($i < $digits_1) {
		 $divider = ($i == 2) ? 10 : 100;
		 $number = floor($no % $divider);
		 $no = floor($no / $divider);
		 $i += ($divider == 10) ? 1 : 2;
		 if ($number) {
			$plural = (($counter = count($str)) && $number > 9) ? '' : null;
			$hundred = ($counter == 1 && $str[0]) ? 'and ' : null;
			$str [] = ($number < 21) ? $words[$number] .
				" " . $digits[$counter] . $plural . " " . $hundred
				:
				$words[floor($number / 10) * 10]
				. " " . $words[$number % 10] . " "
				. $digits[$counter] . $plural . " " . $hundred;
		 } else $str[] = null;
		}
		$str = array_reverse($str);
		$result = implode('', $str);
		$points = ($point) ?
		"." . $words[$point / 10] . " " . 
			  $words[$point = $point % 10] : '';
		$finalresult =  "Rs ".ucwords(trim($result))." only";

		return $finalresult;
	}
//************************************************Home screen functions*******************************************
	public function dashboard_year_total()
	{		
		$cyear = date("Y");
		$cmonth = date("m");
		if($cmonth == 1 || $cmonth == 2 || $cmonth == 3)
			$cyear = $cyear - 1;
		$startdate = $cyear."-"."04-01";
		$enddate = ($cyear+1)."-"."03-31";
		
		$yeartotal = mysqli_fetch_assoc(mysqli_query( $this->conn , "select sum(amount) as amount from donations where tdate BETWEEN '$startdate' and '$enddate'"));
		$yeartotal = number_format(($yeartotal['amount']/100000),2);
		
		return $yeartotal;
	}
	
	public function dashboard_month_total()
	{		
		$cyear = date("Y");
		$cmonth = date("m");
		$startdate = $cyear."-".$cmonth."-01";
		$enddate = $cyear."-".$cmonth."-31";
		
		$monthtotal = mysqli_fetch_assoc(mysqli_query( $this->conn , "select sum(amount) as amount from donations where tdate BETWEEN '$startdate' and '$enddate'"));
		$monthtotal = number_format(($monthtotal['amount']/100000),2);
		
		return $monthtotal;
	}
	
	public function dashboard_year_count()
	{		
		$cyear = date("Y");
		$cmonth = date("m");
		if($cmonth == 1 || $cmonth == 2 || $cmonth == 3)
			$cyear = $cyear - 1;
		$startdate = $cyear."-"."04-01";
		$enddate = ($cyear+1)."-"."03-31";
		
		$yearcount = mysqli_fetch_assoc(mysqli_query( $this->conn , "select count(tid) as totalcount from donations where tdate BETWEEN '$startdate' and '$enddate'"));
		
		return $yearcount['totalcount'];
	}
	public function dashboard_donation_segment()
	{		
		$cyear = date("Y");
		$cmonth = date("m");
		if($cmonth == 1 || $cmonth == 2 || $cmonth == 3)
			$cyear = $cyear - 1;
		$fyear = $cyear."-".substr(($cyear+1),2,2);
		
		$donseg = mysqli_query( $this->conn , "SELECT a.iscompany, sum(b.amount) as amount 
																	FROM donors a, `donations` b WHERE a.did = b.did and b.fyear = '2016-17' 
																	group by a.iscompany");
		
		$i=0;
		while ($row = mysqli_fetch_assoc($donseg))
		{
			$segarray[$i]['value'] = number_format(($row['amount']/100000),2);
			
			if($row['iscompany'] == 'no')
			{
				$segarray[$i]['label'] = 'Individual';
				$segarray[$i]['color'] = '#f56954';
				$segarray[$i]['highlight'] = '#f56954';
			}
			elseif($row['iscompany'] == 'yes')
			{
				$segarray[$i]['label'] = 'CSR';
				$segarray[$i]['color'] = '#00a65a';
				$segarray[$i]['highlight'] = '#00a65a';
			}
			else
				$segarray[$i]['label'] = 'Other';
			
			$i++;
		}
		$segjson = json_encode($segarray);
		
		return $segjson;
	}
	
	public function dashboard_donation_comparision()
	{				
		$doncompare = mysqli_query( $this->conn , "SELECT month(`tdate`) as mon,`fyear`,sum(amount) as amount from donations
													group by `fyear`, mon 
													ORDER BY CASE 
													WHEN mon = 04 THEN 1 
													WHEN mon = 05 THEN 2 
													WHEN mon = 06 THEN 3 
													WHEN mon = 07 THEN 4 
													WHEN mon = 08 THEN 5 
													WHEN mon = 09 THEN 6 
													WHEN mon = 10 THEN 7 
													WHEN mon = 11 THEN 8 
													WHEN mon = 12 THEN 9 
													WHEN mon = 01 THEN 10 
													WHEN mon = 02 THEN 11 
													WHEN mon = 03 THEN 12
													END");
		
		$i=0;
		while ($row = mysqli_fetch_assoc($doncompare))
		{
			if($row['fyear'] == '2015-16')
				$fy201516[$i] = number_format(($row['amount']/100000),2);
			elseif($row['fyear'] == '2016-17')
				$fy201617[$i] = number_format(($row['amount']/100000),2);
			elseif($row['fyear'] == '2017-18')
				$fy201718[$i] = number_format(($row['amount']/100000),2);
			$i++;
		}
		$fy201516 = json_encode($fy201516);
		$fy201617 = json_encode($fy201617);
		$fy201718 = json_encode($fy201718);
		
		$result = array($fy201516, $fy201617,$fy201718);
		return $result;
	}
	
	public function dashboard_normal_donations_ytd()
	{		
		$cyear = date("Y");
		$cmonth = date("m");
		if($cmonth == 1 || $cmonth == 2 || $cmonth == 3)
			$cyear = $cyear - 1;
		$startdate = $cyear."-"."04-01";
		$enddate = ($cyear+1)."-"."03-31";
		
		$yeartotal = mysqli_fetch_assoc(mysqli_query( $this->conn , "select sum(amount) as amount from donations where tdate BETWEEN '$startdate' and '$enddate' and donationtype = 'Normal' "));
		$yeartotal = number_format(($yeartotal['amount']/100000),2);
		
		return $yeartotal;
	}
	
	public function dashboard_corpus_donations_ytd()
	{		
		$cyear = date("Y");
		$cmonth = date("m");
		if($cmonth == 1 || $cmonth == 2 || $cmonth == 3)
			$cyear = $cyear - 1;
		$startdate = $cyear."-"."04-01";
		$enddate = ($cyear+1)."-"."03-31";
		
		$yeartotal = mysqli_fetch_assoc(mysqli_query( $this->conn , "select sum(amount) as amount from donations where tdate BETWEEN '$startdate' and '$enddate' and donationtype = 'Corpus'"));
		$yeartotal = number_format(($yeartotal['amount']/100000),2);
		
		return $yeartotal;
	}
	
/********************************************Ahawal Functions********************************************/
	public function get_volunteerlist()
	{		
		$volunteerlist = mysqli_query( $this->conn , "select vid, vfname, vmname, vlname  from volunteer");
		return $volunteerlist;
	}
	
	public function get_studentlist()
	{		
		$studentlist = mysqli_query( $this->conn , "select sid, sfname, smname, slname from student");
		return $studentlist;
	}

	public function create_ahawal()
	{
		$amonth	=	$_POST["amonth"];
		$vid	=	$_POST["vid"];
		$sid	=	$_POST["sid"];
		$class  =	addslashes($_POST["class"]);
		$ayear  =	$_POST["ayear"];
		
		
		$examopt   	=	$_POST["examopt"];
		if($examopt=="No")
		{
			$examq1   	=	"";
			$examq2   	=	"";
		}
		else
		{
			$examq1   	=	addslashes($_POST["examq1"]);
			$examq2   	=	addslashes($_POST["examq2"]);
		}
		
		
		$extraactopt=	$_POST["extraactopt"];
		if($extraactopt=="No")
		{
			$extraactq1	=	"";
		}else{
			$extraactq1	=	addslashes($_POST["extraactq1"]);
		}
		
		
		$bookopt=	$_POST["bookopt"];
		if($bookopt=="No")
		{
		$bookq1	=	"";
		$bookq2	=	"";
		}else{
		$bookq1	=	addslashes($_POST["bookq1"]);
		$bookq2	=	addslashes($_POST["bookq2"]);		
		}
		
		
		$socialopt  =	$_POST["socialopt"];
		if($socialopt=="No")
		{
		$socialq1	=	"";
		}else{
		$socialq1	=	addslashes($_POST["socialq1"]);	
		}
		
		
		$scholarshipopt	=	$_POST["scholarshipopt"];
		if($scholarshipopt=="No")
		{
		$scholarshipq1	=	"";
		$scholarshipq2	=	"";
		}else{
		$scholarshipq1	=	addslashes($_POST["scholarshipq1"]);
		$scholarshipq2	=	addslashes($_POST["scholarshipq2"]);
		}
		
		
		$healthopt	=	$_POST["healthopt"];
		if($healthopt=="No")
		{
		$healthq1 	=	"";
		}else{
		$healthq1 	=	addslashes($_POST["healthq1"]);
		}
		
		$shareopt 	=	$_POST["shareopt"];
		if($shareopt=="No")
		{
		$shareq1  	=	"";
		}else{
		$shareq1  	=	addslashes($_POST["shareq1"]);
		}
		
		$helpopt  	=	$_POST["helpopt"];
		if($helpopt=="No")
		{
		$helpq1   	=	"";
		}else{
		$helpq1   	=	addslashes($_POST["helpq1"]);
		}
		

		$befrankopt	=	$_POST["befrankopt"];
		$befrankq1	=	addslashes($_POST["befrankq1"]);
		$connectopt	=	$_POST["connectopt"];
		$connectq1	=	addslashes($_POST["connectq1"]);
		$meetingopt	=	$_POST["meetingopt"];
		$meetingq1	=	addslashes($_POST["meetingq1"]);
		
		
		$housevisitq1  	=	$_POST["housevisitq1"];
		if($housevisitq1 == "Not visited" && $housevisitq1 == "Not applicable")
			$housevisitq2 = "";
		else
			$housevisitq2	=	addslashes($_POST["housevisitq2"]);
		
		$advamountq1	=	addslashes($_POST["advamountq1"]);
		$advamountq2	=	addslashes($_POST["advamountq2"]);
		$advamountq3	=	addslashes($_POST["advamountq3"]);
		$advamountq4	=	addslashes($_POST["advamountq4"]);
						
		$res = mysqli_query( $this->conn , "INSERT into ahawal(aid,amonth,vid,sid,class,ayear,examopt,examq1,examq2,extraactopt,extraactq1,
											bookopt,bookq1,bookq2,socialopt,socialq1,scholarshipopt,scholarshipq1,scholarshipq2,
											healthopt,healthq1,shareopt,shareq1,helpopt,helpq1,befrankopt,befrankq1,
											connectopt,connectq1,meetingopt,meetingq1,housevisitq1,housevisitq2,advamountq1,advamountq2,advamountq3,
											advamountq4,createdby,createdon,changedby,changedon) 
											VALUES(NULL,'$amonth','$vid','$sid','$class','$ayear','$examopt','$examq1','$examq2','$extraactopt','$extraactq1',
											'$bookopt','$bookq1','$bookq2','$socialopt','$socialq1','$scholarshipopt','$scholarshipq1','$scholarshipq2',
											'$healthopt','$healthq1','$shareopt','$shareq1','$helpopt','$helpq1','$befrankopt','$befrankq1',
											'$connectopt','$connectq1','$meetingopt','$meetingq1','$housevisitq1','$housevisitq2','$advamountq1','$advamountq2','$advamountq3',
											'$advamountq4','OUTSIDE',NOW(),NULL,NULL)");
		$error = mysqli_error($this->conn);
		
		$result = array($res, $error);
		return $result;
	}


	
		public function update_ahawal()
	{
		$user=$_SESSION['username'];
		$aid =$_POST["aid"];
		$amonth	=	$_POST["amonth"];
		$vid	=	$_POST["vid"];
		$sid	=	$_POST["sid"];
		$class   	=	$_POST["class"];
		$ayear   	=	$_POST["ayear"];
		
		
		$examopt   	=	$_POST["examopt"];
		if($examopt=="No")
		{
		$examq1   	=	"";
		$examq2   	=	"";
		}else{
		$examq1   	=	$_POST["examq1"];
		$examq2   	=	$_POST["examq2"];
		}
		
		
		$extraactopt=	$_POST["extraactopt"];
		if($extraactopt=="No")
		{
		$extraactq1	=	"";
		}else{
		$extraactq1	=	$_POST["extraactq1"];
		}
		
		
		$bookopt=	$_POST["bookopt"];
		if($bookopt=="No")
		{
		$bookq1	=	"";
		$bookq2	=	"";
		}else{
		$bookq1	=	$_POST["bookq1"];
		$bookq2	=	$_POST["bookq2"];		
		}
		
		
		$socialopt  =	$_POST["socialopt"];
		if($socialopt=="No")
		{
		$socialq1	=	"";
		}else{
		$socialq1	=	$_POST["socialq1"];	
		}
		
		
		$scholarshipopt	=	$_POST["scholarshipopt"];
		if($scholarshipopt=="No")
		{
		$scholarshipq1	=	"";
		$scholarshipq2	=	"";
		}else{
		$scholarshipq1	=	$_POST["scholarshipq1"];
		$scholarshipq2	=	$_POST["scholarshipq2"];
		}
		
		
		$healthopt	=	$_POST["healthopt"];
		if($healthopt=="No")
		{
		$healthq1 	=	"";
		}else{
		$healthq1 	=	$_POST["healthq1"];
		}
		
		$shareopt 	=	$_POST["shareopt"];
		if($shareopt=="No")
		{
		$shareq1  	=	"";
		}else{
		$shareq1  	=	$_POST["shareq1"];
		}
		
		$helpopt  	=	$_POST["helpopt"];
		if($helpopt=="No")
		{
		$helpq1   	=	"";
		}else{
		$helpq1   	=	$_POST["helpq1"];
		}
		

		$befrankopt	=	$_POST["befrankopt"];
		$befrankq1	=	$_POST["befrankq1"];
		$connectopt	=	$_POST["connectopt"];
		$connectq1	=	$_POST["connectq1"];
		$connectopt	=	$_POST["connectopt"];
		$connectq1	=	$_POST["connectq1"];
		
		
		
		$housevisitq1  	=	$_POST["housevisitq1"];
		$housevisitq2	=	$_POST["housevisitq2"];
		
		$advamountq1	=	$_POST["advamountq1"];
		$advamountq2	=	$_POST["advamountq2"];
		$advamountq3	=	$_POST["advamountq3"];
		$advamountq4	=	$_POST["advamountq4"];
						
		$res = mysqli_query( $this->conn , "Update ahawal set  aid='$aid',amonth='$amonth',vid='$vid',sid='$sid',class='$class',ayear='$ayear',examopt='$examopt',examq1='$examq1',examq2='$examq1',extraactopt='$extraactopt',extraactq1='$extraactq1',
											bookopt='$bookopt',bookq1='$bookq1',bookq2='$bookq2',socialopt='$socialopt',socialq1='$socialq1',scholarshipopt='$scholarshipopt',scholarshipq1='$scholarshipq1',scholarshipq2='$scholarshipq2',
											healthopt='$healthopt',healthq1='$healthq1',shareopt='$shareopt',shareq1='$shareq1',helpopt='$helpopt',helpq1='$helpq1',befrankopt='$befrankopt',befrankq1='$befrankq1',
											connectopt='$connectopt',connectq1='$connectq1',housevisitq1='$housevisitq1',housevisitq2='$housevisitq2',advamountq1='$advamountq1',advamountq2='$advamountq2',advamountq3='$advamountq3',
											advamountq4='$advamountq4',changedby='$user',changedon=NOW()  where  aid='$aid'") ;
		$error = mysqli_error($this->conn);
		
		$result = array($res, $error);
		return $result;
	}
	
	public function ahawal_list_get()
	{		
		$ahawallist = mysqli_query( $this->conn , "SELECT vt.vfname,concat(st.sfname,' ',st.smname,' ',st.slname) as sfullname,ah.* from ahawal as ah Inner join volunteer as vt Inner join student as st where ah.vid=vt.vid and ah.sid=st.sid ");
        	return $ahawallist;
	}

	public function get_ahawallist_aid($aid)
	{		
		$aid = $aid;
		$ahawallist = mysqli_fetch_assoc(mysqli_query( $this->conn , "SELECT vt.vfname,concat(st.sfname,' ',st.smname,' ',st.slname) as sfullname,ah.* from ahawal as ah Inner join volunteer as vt Inner join student as st where ah.vid=vt.vid and ah.sid=st.sid and ah.aid = '$aid';"));
		return $ahawallist;
	}
	
	public function retrieve_ahawallist()
	{		
		$ahawallist = mysqli_query( $this->conn , "select * from ahawal");
		return $ahawallist;
	}

	public function trigger_query($query)
	{		
		$result = mysqli_query( $this->conn , $query);
		return $result;
	}
	
	public function send_mail_attachment_old($to, $from, $cc, $subject, $message, $filename, $content, $tid) 
	{
        $separator = md5(time());
        $eol = "\r\n";
    
        $headers = "From: " . $from . $eol;
        #$headers .= "CC: " . $cc . $eol;
        $headers .= "MIME-Version: 1.0" . $eol;
        $headers .= "Content-Type: multipart/mixed; boundary=\"" . $separator . "\"" . $eol;
        $headers .= "Content-Transfer-Encoding: 7bit" . $eol;
        $headers .= "This is a MIME encoded message." . $eol;
    
        // message
        $body = "--" . $separator . $eol;
        $body .= "Content-Type: text/plain; charset=\"iso-8859-1\"" . $eol;
        $body .= "Content-Transfer-Encoding: 8bit" . $eol;
        $body .= $message . $eol;
    
        // attachment
        $body .= "--" . $separator . $eol;
        $body .= "Content-Type: application/octet-stream; name=\"" . $filename . "\"" . $eol;
        $body .= "Content-Transfer-Encoding: base64" . $eol;
        $body .= "Content-Disposition: attachment" . $eol;
        $body .= $content . $eol;
        $body .= "--" . $separator . "--";
    
        //SEND Mail
        if (mail($to, $subject, $body, $headers)) {
            echo "mail send ... OK"; // or use booleans here
			
			//Update mail counter
			$this->updatemailcounter($tid);
			
        } else {
            echo "mail send ... ERROR!";
            print_r( error_get_last() );
        }
    }
	
	public function send_mail_attachment($to, $from, $cc, $subject, $message, $filename, $content, $tid) 
	{
		
		file_put_contents('./log_' . date("j.n.Y") . '.log', $subject, FILE_APPEND);
			
        $mail = new PHPMailer();
		$mail->IsSMTP();
		$mail->Mailer = "smtp";
		//$mail->SMTPDebug  = 1;  
		$mail->SMTPDebug = SMTP::DEBUG_SERVER;
		$mail->SMTPAuth   = TRUE;
		//$mail->SMTPSecure = "tls";
		$mail->Port       = 587;
		$mail->SMTPSecure = "tls";
		//$mail->Host       = "email-smtp.us-east-1.amazonaws.com";
		$mail->Host       = 'smtp.gmail.com';
		//$mail->Host = gethostbyname('smtp.gmail.com');
		$mail->Username   = 'vsmthane@gmail.com';
		//$mail->Username   = "vikas.solegaonkar@gmail.com";
		//$mail->Password   = 'VSMrocks';
		$mail->Password   = "zxuvtdvijdhcedmj";

		//$mail->IsHTML(true);
		$mail->AddAddress($to,"");
		$mail->SetFrom('vsmthane@gmail.com', "VSM Thane");
		//$mail->SetFrom('vikas.solegaonkar@gmail.com', "VSM Thane");
		//$mail->AddReplyTo($from, "VSM Thane"); 
		$mail->Subject    = $subject;
		$mail->AltBody = 'This is a plain-text message body';
		
		$content_type = "application/pdf";
		$mail->AddStringAttachment(base64_decode($content), $filename, "base64", $content_type);		
		
		$mail->MsgHTML($message); 
		//file_put_contents('./log_' . date("j.n.Y") . '.log', print_r( $mail->ErrorInfo).'Line end', FILE_APPEND);
        //SEND Mail
        if ($mail->send()) {
            echo "mail send ... OK"; // or use booleans here
			file_put_contents('./log_' . date("j.n.Y") . '.log', 'Success', FILE_APPEND);
			//Update mail counter
			$this->updatemailcounter($tid);
			file_put_contents('./log_' . date("j.n.Y") . '.log', 'Insert success\n', FILE_APPEND);
        } else {
            echo "mail send ... ERROR!";
            print_r( $mail->ErrorInfo);
			file_put_contents('./log_' . date("j.n.Y") . '.log', $mail->ErrorInfo, FILE_APPEND);
        }
    }
	
    private function updatemailcounter($tid) 
	{
		$tid = $tid;
        $res = mysqli_query( $this->conn , "UPDATE donations 
											SET mailcounter = mailcounter + 1
											WHERE tid = $tid") ;
    }
	
	private function encrypt($str) 
	{
        $ciphering = "AES-128-CTR"; 
        $iv_length = openssl_cipher_iv_length($ciphering); 
        $options = 0; 
        $iv = '1234567891011121'; 
        
        $key = "VSMThane"; 
        
        // Use openssl_encrypt() function to encrypt the data 
        return openssl_encrypt($str, $ciphering, 
                    $key, $options, $iv); 
    }
    private function decrypt($encryption) 
	{
        $ciphering = "AES-128-CTR"; 
        $iv_length = openssl_cipher_iv_length($ciphering); 
        $options = 0; 
        $iv = '1234567891011121'; 
        
        $key = "VSMThane"; 
        $decryption=openssl_decrypt ($encryption, $ciphering,  
                $key, $options, $iv); 
        return $decryption;
    }



}
?>