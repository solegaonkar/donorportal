<?php
include 'functions.php';
$donor = new VSM_Digi();
## Read value
$draw = $_POST['draw'];
$row = $_POST['start'];
$rowperpage = $_POST['length']; // Rows display per page
$columnIndex = $_POST['order'][0]['column']; // Column index
$columnName = $_POST['columns'][$columnIndex]['data']; // Column name
$columnSortOrder = $_POST['order'][0]['dir']; // asc or desc
$searchValue = $_POST['search']['value']; // Search value

## Search 
$searchQuery = " ";


if($searchValue != ''){
	
	
$searchValueArray = explode(" ",$searchValue);

	for($i=0;$i<sizeof($searchValueArray);$i++)
	{
			$searchQuery .= " and (fname like '%".$searchValueArray[$i]."%' or
			mname like '%".$searchValueArray[$i]."%' or 
			lname like '%".$searchValueArray[$i]."%' or   
			district like '%".$searchValueArray[$i]."%' or 
			mobile like '%".$searchValueArray[$i]."%' or 
			landline like '%".$searchValueArray[$i]."%' or 
			pancard like '%".$searchValueArray[$i]."%' or 
			address1 like '%".$searchValueArray[$i]."%' or 
			address2 like '%".$searchValueArray[$i]."%' or 
			email like '%".$searchValueArray[$i]."%' or 
			city like '%".$searchValueArray[$i]."%' or 
			donorcat like '%".$searchValueArray[$i]."%' or 
			details like'%".$searchValueArray[$i]."%' ) ";
			
	}


		
}

## Total number of records without filtering
$q1 = "select count(*) as allcount from donors";
$sel =$donor->trigger_query($q1);
$records = mysqli_fetch_assoc($sel);
$totalRecords = $records['allcount'];

## Total number of records with filtering
$q2 = "select count(*) as allcount from donors WHERE 1 ".$searchQuery;
$sel =$donor->trigger_query($q2);
$records = mysqli_fetch_assoc($sel);
$totalRecordwithFilter = $records['allcount'];

## Fetch records
$q3 = "select (@row_number:=@row_number + 1)  as srno ,d.*,CONCAT(d.fname,' ',d.mname,' ',d.lname) as fullname from (SELECT @row_number:=0) AS t,donors d WHERE 1 ".$searchQuery." order by ".$columnName." ".$columnSortOrder." limit ".$row.",".$rowperpage;
$empRecords =$donor->trigger_query($q3);
//$empRecords = mysqli_query($conn, $empQuery);
$data = array();

while ($row = mysqli_fetch_assoc($empRecords)) {
    $data[] = array(
    		"srno"=>$row["srno"],
    		"action"=>
							"<span style='overflow:hidden; white-space: nowrap; text-overflow: ellipsis;'>
									<a href='donor_update.php?did=".$row["did"]."'>
									<button type='button' class='btn btn-warning btn-xs'>
									<i class='fas fa-pencil-alt'></i>
									</button>
									</a>  
									<a href='donor_view.php?did=".$row["did"]."'>
									<button type='button' class='btn btn-primary btn-xs'><i class='fa fa-eye'></i></button>
									</a>    
									<a href='donor_delete.php?did=".$row["did"]."' alt='Delete Donor'>
									<button type='button' class='btn btn-danger btn-xs'><i class='fas fa-trash'></i></button>
									</a>
							</span>"
			
			
			,
    		"did"=>"D".$row['did'],
    		"fullname"=>"<span style='overflow:hidden; white-space: nowrap; text-overflow: ellipsis;'>".ucfirst($row['fullname'])."</span>",
    		"address1"=>$row['address1'],
    		"address2"=>$row['address2'],
    		"address3"=>$row['address3'],
    		"district"=>$row['district'],
    		"city"=>$row['city'],
    		"mobile"=>$row['mobile'],
    		"landline"=>$row['landline'],
    		"altnumber"=>$row['altnumber'],
    		"email"=>$row['email'],
    		"pancard"=>$row['pancard'],
    		"iscompany"=>$row['iscompany'],
    		"isvip"=>$row['isvip'],
    		"donorcat"=>$row['donorcat'],
    		"details"=>$row['details']
    	);
}

## Response
$response = array(
    "draw" => intval($draw),
    "iTotalRecords" => $totalRecords,
    "iTotalDisplayRecords" => $totalRecordwithFilter,
    "aaData" => $data
);

echo json_encode($response);
