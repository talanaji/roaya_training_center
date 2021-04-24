<?php

if ( ! function_exists('redundancy_where_value_s'))
{
      function redundancy_where_value_s($table , $where_coll , $val , $other_conds)
	  {
 		 $ci=& get_instance();
		 $sel = $ci->db->query("select count(*) CT from ".$table." where ".$where_coll." = '".$val."'  ".$other_conds)->row();
 		return $sel->CT;
	  }
}
if ( ! function_exists('draw_lists'))
{
	function draw_lists($table , $select_id , $select_txt)
	{
		$ci= & get_instance();
		$seld =  $ci->db->query("select ".$select_id." , ".$select_txt." from ".$table." order by ".$select_id." asc")->result();
		foreach($seld as $rowsd)
		{
			echo "<option value='".$rowsd->$select_id ."'>".$rowsd->$select_txt ."</option>";
		}
	}
	function draw_lists2($table , $select_id , $select_txt,$wh,$wh_v)
	{
		$ci= & get_instance();
		$seld =  $ci->db->query("select ".$select_id." , ".$select_txt." from ".$table." where ".$wh."=".$wh_v." order by ".$select_id." asc")->result();
		foreach($seld as $rowsd)
		{
			echo "<option value='".$rowsd->$select_id ."'>".$rowsd->$select_txt ."</option>";
		}
	}
}
	   function get_st_table ($table)

	{
		
				$ci= & get_instance();
		$d =  $ci->db->query("select * from ".$table."")->result();
		
	
		foreach($d as $dd)
             //foreach($d as  $key=>$dd )
                 {
					 $mss = "";
					 $d7 = "";
					 $d4 = GetAllSumHour($dd->st_code);
				
					 $d7 = allpayments($dd->st_code);
					$d6 = GetAllSumHourToday($dd->st_code);
					 $d5 = GetAllAmontHourMonth($dd->st_code);
					$d7=$d7 - $d6;
					 if ($d7 < 0)
					 {
					 $mss = "class='table-danger'";
					 }
					 else if($d7 > 0)
				 {
					 $mss = "class='table-success'"; 
				 }
					 if($d4 == "" || $d4 == null)
						 
			 $d4 = $ci->lang->line("no_data");
			 if($d5 == "" || $d5 == null)
					 $d5 = $ci->lang->line("no_data");
					 $as3ad = "";
					 
					  $as3ad=$dd->st_paymentmethods_code;
					  
					  
				  $ci->db->from('payment_methods');
                $ci->db->where('m_code',$as3ad);
                $reault_array = $ci->db->get()->result_array();
                $d = $reault_array[0]['m_name'];
             //  $reault_array = $ci->db->get()->result_array1();
			   
			   
			   
          
					 
		echo  "<tr ".$mss.">
                                            <td >".$dd->st_name."</td>
                                            <td>".$dd->st_phone1."</td>
                                              <td>".$dd->st_payment_date."-".$ci->lang->line("of_month")."</td>
                                            <td>".$d."</td>
                                            <td>".$d4."</td>
                                            <td>".$d5."</td>
                                            <td>". $d7 ."</td>
											 <td >
<a style='cursor:pointer' class='Del1' title='".$dd->p_code."'><img src='".base_url()."public/assets/images/icon/email.png' width='25' height='25' alt='Flowers in Chania'></a>
<a style='cursor:pointer' class='Del1' title='".$dd->p_code."'><img src='".base_url()."public/assets/images/icon/sms-token.png' width='25' height='25' alt='Flowers in Chania'></a>
		 
											 </td>
                                            
                                            
                                        </tr>";	
                 }
				
	}
 function GetAllSumHour($id)
	 {	

	 $ci= & get_instance();
		$query2 =  $ci->db->query("select * from reservations where res_std_code=".$id." AND res_is_confirmed=1")->result();
            foreach ($query2 as $row)
                 {
		$time_start = strtotime($row->res_time_start);
        $time_end= strtotime($row->res_time_end);		 
		$sum =  $time_end - $time_start;
		$sum =  $sum / 3600;
		$sum_time = $sum_time + $sum;
            }
				return $sum_time ;
				 
	 }
 function GetAllAmontHourMonth($id)
	 {
		 $ci= & get_instance();
		$query3 =  $ci->db->query("select * from reservations where res_std_code=".$id." AND res_is_confirmed=1")->result();
         $sum_time = 0;
		 $month = date('m');
             foreach ($query3 as $row)
                 {
		$time_start = strtotime($row->res_time_start);
        $time_end= strtotime($row->res_time_end);		
		$monthdata =  date('m',$time_start);
		$m =$monthdata -$month;
        if( $m == 0 )
		{
		$sum =  $time_end - $time_start;
		$sum =  $sum / 3600;
		$sum_time = $sum_time + $sum;
		}
                  }
				  return $sum_time ;	
	 }
 function GetAllSumHourToday($id)
	 {
		 $ci= & get_instance();
		$query4 =  $ci->db->query("select * from reservations where res_std_code=".$id." AND res_is_confirmed=1")->result();
         $sum_time = 0;
		 $amont =0;
		 $mm =0;
             foreach ($query4 as $row)
                 {
		$time_start = strtotime($row->res_time_start);
        $time_end= strtotime($row->res_time_end);	
        $sum_amont = $row->res_paid_price - $row->res_teacher_percent;		
		$sum =  $time_end - $time_start;
		$sum =  $sum / 3600;
		$sum_time = $sum_time + $sum;
		 $s= $sum_amont*$sum_time;
		 $amont =$amont +$s;
                  }
				 
				  return  $amont ;
	 }
	 	 function allpayments($id)
	 {
		 $ci= & get_instance();
		$query5 =  $ci->db->query("select * from payments where st_code=".$id." ")->result();
		
		 $mmm =0;
	 
             foreach ($query5 as $row)
                 {
	$mmm = $mmm + $row->amount ;
	
                  }
				 
				  return  $mmm ;
	 }


?>