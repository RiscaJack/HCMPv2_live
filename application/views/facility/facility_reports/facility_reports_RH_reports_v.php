<div class="container" style="width: 96%; margin: auto;">

<div class="table-responsive" style="height:400px; overflow-y: auto;">
	<div style="margin:5px 0;">
		<p class="label label-info" >Enter appropriate values in all fields as indicated: </p>
	</div>
	<?php 
		$att = array("name"=>'myform','id'=>'myform'); 
		//add a function for saving the data
		echo form_open('divisional_reports/save_RH_report',$att); 
	
	?>


		<table  class="table table-hover table-bordered table-update" id="reproductive_health_reports_table" >
	<tr>

		<td>
			<label>Facility Name: </label>
			<input type="text" name="facility_name" class="form-control" disabled value="<?php echo $facility_name; ?>">
		</td>			
		
		<td class="col-xs-2">
		<label>Facility Code: </label>
			<input type="text" name="facility_code: " class="form-control" disabled value="<?php echo $facility_code; ?>">
		</td>
		</div>
		


		<div class="input-group">
			<td class="col-xs-4">
			<label>Facility Type: </label>
			<input type="text" name="dispensary" disabled class="form-control" value="<?php echo $facility_type_; ?>" >
			</td>
			
			<td class="col-xs-2">
			<label>District/Region:</label>
			<input type= 'text' name="district_name" disabled class="form-control" value="<?php echo $district_region_name; ?>">
			</td>
			</div>
			</tr>
			</table>
	<table  class="table table-hover table-bordered table-update" id="reproductive_health_reports_table" >
	<thead style="background-color: white">
		<tr>
			<th>Contraceptive</th>
			<th>Beginning Balance</th>
			<th>Received This Month</th>
			<th>Dispensed</th>
			<th>Losses</th>
			<th>Positive</th>
			<th>Negative</th>
			<th>Ending Balance</th>
			<th>Quantity Requested</th>
		</tr>
	</thead>
	<tbody>
		<tr row_id='0'>
			<td>Combined Oral contraceptive Pills</td>
			<td><input type='text' class='form-control input-small ' required name='Beginning_Balance[1]'/></td>
			<td><input type='text' class='form-control input-small ' required name='Received_This_Month[1]'/></td>
			<td><input type='text' class='form-control input-small ' required name='Dispensed[1]'/></td>
			<td><input type='text' class='form-control input-small ' required name='Losses[1]'/></td>
			<td><input type='text' class='form-control input-small ' required name='Positive[1]'/></td>
			<td><input type='text' class='form-control input-small ' required name='Negative[1]'/></td>
			<td><input type='text' class='form-control input-small ' required name='Ending_Balance[1]'/></td>
			<td><input type='text' class='form-control input-small ' required name='Quantity_Requested[1]'/></td>
			
			</tr>
		<tr row_id='0'>
			<td>Progestin only pills</td>
			<td><input type='text' class='form-control input-small ' required name='Beginning_Balance[2]'/></td>
			<td><input type='text' class='form-control input-small ' required name='Received_This_Month[2]'/></td>
			<td><input type='text' class='form-control input-small ' required name='Dispensed[2]'/></td>
			<td><input type='text' class='form-control input-small ' required name='Losses[2]'/></td>
			<td><input type='text' class='form-control input-small ' required name='Positive[2]'/></td>
			<td><input type='text' class='form-control input-small ' required name='Negative[2]'/></td>
			<td><input type='text' class='form-control input-small ' required name='Ending_Balance[2]'/></td>
			<td><input type='text' class='form-control input-small ' required name='Quantity_Requested[2]'/></td>
			
			</tr>
			<tr row_id='0'>
			<td>Injectables</td>
			<td><input type='text' class='form-control input-small ' required name='Beginning_Balance[3]'/></td>
			<td><input type='text' class='form-control input-small ' required name='Received_This_Month[3]'/></td>
			<td><input type='text' class='form-control input-small ' required name='Dispensed[3]'/></td>
			<td><input type='text' class='form-control input-small ' required name='Losses[3]'/></td>
			<td><input type='text' class='form-control input-small ' required name='Positive[3]'/></td>
			<td><input type='text' class='form-control input-small ' required name='Negative[3]'/></td>
			<td><input type='text' class='form-control input-small ' required name='Ending_Balance[3]'/></td>
			<td><input type='text' class='form-control input-small ' required name='Quantity_Requested[1]'/></td>
			
			</tr>
			<tr row_id='0'>
			<td>Implants (1-Rod)</td>
			<td><input type='text' class='form-control input-small ' required name='Beginning_Balance[4]'/></td>
			<td><input type='text' class='form-control input-small ' required name='Received_This_Month[4]'/></td>
			<td><input type='text' class='form-control input-small ' required name='Dispensed[4]'/></td>
			<td><input type='text' class='form-control input-small ' required name='Losses[4]'/></td>
			<td><input type='text' class='form-control input-small ' required name='Positive[4]'/></td>
			<td><input type='text' class='form-control input-small ' required name='Negative[4]'/></td>
			<td><input type='text' class='form-control input-small ' required name='Ending_Balance[4]'/></td>
			<td><input type='text' class='form-control input-small ' required name='Quantity_Requested[4]'/></td>
			
			</tr>
			<tr row_id='0'>
			<td>Implants (2-Rod)</td>
			<td><input type='text' class='form-control input-small ' required name='Beginning_Balance[5]'/></td>
			<td><input type='text' class='form-control input-small ' required name='Received_This_Month[5]'/></td>
			<td><input type='text' class='form-control input-small ' required name='Dispensed[5]'/></td>
			<td><input type='text' class='form-control input-small ' required name='Losses[5]'/></td>
			<td><input type='text' class='form-control input-small ' required name='Positive[5]'/></td>
			<td><input type='text' class='form-control input-small ' required name='Negative[5]'/></td>
			<td><input type='text' class='form-control input-small ' required name='Ending_Balance[5]'/></td>
			<td><input type='text' class='form-control input-small ' required name='Quantity_Requested[5]'/></td>
			
			</tr>
			<tr row_id='0'>
			<td>Emergency Contraceptive pills</td>
			<td><input type='text' class='form-control input-small ' required name='Beginning_Balance[6]'/></td>
			<td><input type='text' class='form-control input-small ' required name='Received_This_Month[6]'/></td>
			<td><input type='text' class='form-control input-small ' required name='Dispensed[6]'/></td>
			<td><input type='text' class='form-control input-small ' required name='Losses[6]'/></td>
			<td><input type='text' class='form-control input-small ' required name='Positive[6]'/></td>
			<td><input type='text' class='form-control input-small ' required name='Negative[6]'/></td>
			<td><input type='text' class='form-control input-small ' required name='Ending_Balance[6]'/></td>
			<td><input type='text' class='form-control input-small ' required name='Quantity_Requested[6]'/></td>
			
			</tr>
			<tr row_id='0'>
			<td>IUCDs</td>
			<td><input type='text' class='form-control input-small ' required name='Beginning_Balance[7]'/></td>
			<td><input type='text' class='form-control input-small ' required name='Received_This_Month[7]'/></td>
			<td><input type='text' class='form-control input-small ' required name='Dispensed[7]'/></td>
			<td><input type='text' class='form-control input-small ' required name='Losses[7]'/></td>
			<td><input type='text' class='form-control input-small ' required name='Positive[7]'/></td>
			<td><input type='text' class='form-control input-small ' required name='Negative[7]'/></td>
			<td><input type='text' class='form-control input-small ' required name='Ending_Balance[7]'/></td>
			<td><input type='text' class='form-control input-small ' required name='Quantity_Requested[1]'/></td>
			
			</tr>
			<tr row_id='0'>
			<td>Male Condoms</td>
			<td><input type='text' class='form-control input-small ' required name='Beginning_Balance[8]'/></td>
			<td><input type='text' class='form-control input-small ' required name='Received_This_Month[8]'/></td>
			<td><input type='text' class='form-control input-small ' required name='Dispensed[8]'/></td>
			<td><input type='text' class='form-control input-small ' required name='Losses[8]'/></td>
			<td><input type='text' class='form-control input-small ' required name='Positive[8]'/></td>
			<td><input type='text' class='form-control input-small ' required name='Negative[8]'/></td>
			<td><input type='text' class='form-control input-small ' required name='Ending_Balance[8]'/></td>
			<td><input type='text' class='form-control input-small ' required name='Quantity_Requested[8]'/></td>
			
			</tr>
			<tr row_id='0'>
			<td>Female Condoms</td>
			<td><input type='text' class='form-control input-small ' required name='Beginning_Balance[9]'/></td>
			<td><input type='text' class='form-control input-small ' required name='Received_This_Month[9]'/></td>
			<td><input type='text' class='form-control input-small ' required name='Dispensed[9]'/></td>
			<td><input type='text' class='form-control input-small ' required name='Losses[9]'/></td>
			<td><input type='text' class='form-control input-small ' required name='Positive[9]'/></td>
			<td><input type='text' class='form-control input-small ' required name='Negative[9]'/></td>
			<td><input type='text' class='form-control input-small ' required name='Ending_Balance[9]'/></td>
			<td><input type='text' class='form-control input-small ' required name='Quantity_Requested[9]'/></td>
			
			</tr>
			<tr row_id='0'>
			<td>Cycle Beads</td>
			<td><input type='text' class='form-control input-small ' required name='Beginning_Balance[10]'/></td>
			<td><input type='text' class='form-control input-small ' required name='Received_This_Month[10]'/></td>
			<td><input type='text' class='form-control input-small ' required name='Dispensed[10]'/></td>
			<td><input type='text' class='form-control input-small ' required name='Losses[10]'/></td>
			<td><input type='text' class='form-control input-small ' required name='Positive[10]'/></td>
			<td><input type='text' class='form-control input-small ' required name='Negative[10]'/></td>
			<td><input type='text' class='form-control input-small ' required name='Ending_Balance[10]'/></td>
			<td><input type='text' class='form-control input-small ' required name='Quantity_Requested[10]'/></td>
			
			</tr>
			<tr row_id='0'>
			<td>Others</td>
			<td><input type='text' class='form-control input-small ' required name='Beginning_Balance[11]'/></td>
			<td><input type='text' class='form-control input-small ' required name='Received_This_Month[11]'/></td>
			<td><input type='text' class='form-control input-small ' required name='Dispensed[11]'/></td>
			<td><input type='text' class='form-control input-small ' required name='Losses[11]'/></td>
			<td><input type='text' class='form-control input-small ' required name='Positive[11]'/></td>
			<td><input type='text' class='form-control input-small ' required name='Negative[11]'/></td>
			<td><input type='text' class='form-control input-small ' required name='Ending_Balance[11]'/></td>
			<td><input type='text' class='form-control input-small ' required name='Quantity_Requested[11]'/></td>
			
			</tr>
			<tr row_id='0'>
				<th colspan="5">SERVICE STATISTICS (Indicate only the number of Clients issued with Contraceptives</th>
				<td>New Clients</td>
				<td><input type='text' class='form-control input-small ' required name=''/></td>
				<td>Natural FP Counseling</td>
				<td><input type='text' class='form-control input-small ' required /></td>
			</tr>
			<tr row_id='0' rowspan="2">
				<td>&nbsp;</td>
				<td>New Clients</td>
				<td>Revisits</td>
				<!--<td>Change of Method</td>-->
				<td>From</td>
				<td>To</td>
				<td>Revisits</td>
				<td><input type='text' class='form-control input-small ' required /></td>
				<td>Natural FP Referrals</td>
				<td><input type='text' class='form-control input-small ' required /></td>
			</tr>
			<tr row_id='0'>
			<td>Combined Oral contraceptive Pills</td>
			<td><input type='text' class='form-control input-small ' required /></td>
			<td><input type='text' class='form-control input-small ' required /></td>
			<td><input type='text' class='form-control input-small ' required /></td>
			<td><input type='text' class='form-control input-small ' required /></td>
			<td colspan="4">&nbsp;</td>
			
			</tr>
		<tr row_id='0'>
			<td>Progestin only pills</td>
			<td><input type='text' class='form-control input-small ' required /></td>
			<td><input type='text' class='form-control input-small ' required /></td>
			<td><input type='text' class='form-control input-small ' required /></td>
			<td><input type='text' class='form-control input-small ' required /></td>
			<td colspan="4">HIV COUNSELING AND TESTING</td>
		</tr>
		
		<tr row_id='0'>
			<td>Injectables</td>
			<td><input type='text' class='form-control input-small ' required /></td>
			<td><input type='text' class='form-control input-small ' required /></td>
			<td><input type='text' class='form-control input-small ' required /></td>
			<td><input type='text' class='form-control input-small ' required /></td>
			<td rowspan="2">Counseled and Tested</td>
			<td rowspan="2">Referred for Counseling and Testing</td>
			<td colspan="2">Known HIV Status</td>
		</tr>
		<tr row_id='0'>
			<td>Implants (1-Rod)</td>
			<td><input type='text' class='form-control input-small ' required /></td>
			<td><input type='text' class='form-control input-small ' required /></td>
			<td><input type='text' class='form-control input-small ' required /></td>
			<td><input type='text' class='form-control input-small ' required /></td>
			<td>1</td>
			<td>2</td>
			
		</tr>
		<tr row_id='0'>
			<td>Implants (2-Rod)</td>
			<td><input type='text' class='form-control input-small ' required /></td>
			<td><input type='text' class='form-control input-small ' required /></td>
			<td><input type='text' class='form-control input-small ' required /></td>
			<td><input type='text' class='form-control input-small ' required /></td>
			<td><input type='text' class='form-control input-small ' required /></td>
			<td><input type='text' class='form-control input-small ' required /></td>
			<td><input type='text' class='form-control input-small ' required /></td>
			<td><input type='text' class='form-control input-small ' required /></td>
			
		</tr>
		<tr row_id='0'>
			<td>IUCDs</td>
			<td><input type='text' class='form-control input-small ' required /></td>
			<td><input type='text' class='form-control input-small ' required /></td>
			<td><input type='text' class='form-control input-small ' required /></td>
			<td><input type='text' class='form-control input-small ' required /></td>
			<td rowspan="4">&nbsp;</td>
			<td colspan="3">Sterilization</td>
			
		</tr>
		<tr row_id='0'>
			<td>Male Condoms</td>
			<td><input type='text' class='form-control input-small ' required /></td>
			<td><input type='text' class='form-control input-small ' required /></td>
			<td><input type='text' class='form-control input-small ' required /></td>
			<td><input type='text' class='form-control input-small ' required /></td>
			<td>Males</td>
			<td colspan="2"><input type='text' class='form-control input-small ' required /></td>
			
			
			
		</tr>
		<tr row_id='0'>
			<td>Female Condoms</td>
			<td><input type='text' class='form-control input-small ' required /></td>
			<td><input type='text' class='form-control input-small ' required /></td>
			<td><input type='text' class='form-control input-small ' required /></td>
			<td><input type='text' class='form-control input-small ' required /></td>
			<td>Females</td>
			<td colspan="2"><input type='text' class='form-control input-small ' required /></td>
			
		</tr>
		<tr row_id='0'>
			<td>Cycle Beads</td>
			<td><input type='text' class='form-control input-small ' required /></td>
			<td><input type='text' class='form-control input-small ' required /></td>
			<td><input type='text' class='form-control input-small ' required /></td>
			<td><input type='text' class='form-control input-small ' required /></td>
			<td>Referrals</td>
			<td colspan="2"><input type='text' class='form-control input-small ' required /></td>
			
		</tr>
		<tr row_id='0'>
			<td>Others</td>
			<td><input type='text' class='form-control input-small ' required /></td>
			<td><input type='text' class='form-control input-small ' required /></td>
			<td><input type='text' class='form-control input-small ' required /></td>
			<td><input type='text' class='form-control input-small ' required /></td>
			<td colspan="2">Cases for Emergency Pills</td>
			<td colspan="2"><input type='text' class='form-control input-small ' required /></td>
			
		</tr>
     </tbody>
   </table>
</div>
<hr />
<div class="container-fluid">
<div style="float: right">
<button class="save btn btn-sm btn-success"><span class="glyphicon glyphicon-open"></span>Save</button></div>
</div>
</div>
<?php echo form_close();?>
<script>
$(document).ready(function() {	
 var $table = $('table');
//float the headers
  $table.floatThead({ 
	 scrollingTop: 100,
	 zIndex: 1001,
	 scrollContainer: function($table){ return $table.closest('.table-responsive'); }
	});	
//step one load all the facility data here
var facility_stock_data=<?php echo $facility_stock_data;     ?>;
            ///when changing the commodity combobox
      		$(".desc").on('change',function(){
      		var row_id=$(this).closest("tr").index();	
      		var locator=$('option:selected', this);
			var data =$('option:selected', this).attr('special_data'); 
	       	var data_array=data.split("^");	       	
	        locator.closest("tr").find(".unit_size").val(data_array[1]);
	     	locator.closest("tr").find(".supplier_name").val(data_array[2]);
	     	locator.closest("tr").find(".commodity_id").val(data_array[0]);
	     	locator.closest("tr").find(".available_stock").val("");
	     	locator.closest("tr").find(".total_units").val(data_array[3]);
	     	locator.closest("tr").find(".expiry_date").val("");
	     	locator.closest("tr").find(".quantity_issued").val("0");
	     	locator.closest("tr").find(".clone_datepicker_normal_limit_today").val("");	     	

			var commodity_id=data_array[0];
			var stock_data=extract_data(data_array[0],commodity_id,'batch_data');
            var dropdown="<option special_data=''>--select Batch--</option>"+stock_data[0];
            var facility_stock_id=stock_data[1];
            var total_stock_bal=data_array[4];
            var total_issues_for_this_item=0; 
            var total_issues_for_this_batch=0         
			 /* get all the items which have been issued and have the same id and sum them up reduce the total available balance*/	
			  /* Check for all commodities that have the same id as the current item selected
		         * then sum up all the issues above the given item
		         * use this value to reduce the value of the total value of the commodity*/     
			$("input[name^=commodity_id]").each(function(index, value) { 
			 var row_id_=$(this).closest("tr").index(); 
			 var facility_stock_id_=$(this).closest("tr").find(".facility_stock_id").val();  
                  if($(this).val()==commodity_id){
                  total_issues_for_this_item=parseInt(calculate_actual_stock(data_array[3],$(this).closest("tr").find(".commodity_unit_of_issue").val(),
    $(this).closest("tr").find(".quantity_issued").val(),'return',''))+total_issues_for_this_item;
               } 
                  if(facility_stock_id_==facility_stock_id && row_id_<row_id){                 	
                   total_issues_for_this_batch=parseInt(calculate_actual_stock(data_array[3],$(this).closest("tr").find(".commodity_unit_of_issue").val(),
    $(this).closest("tr").find(".quantity_issued").val(),'return',''))+total_issues_for_this_batch;
              }
               });		        
		        var remaining_items=total_stock_bal-total_issues_for_this_item;	
		        locator.closest("tr").find(".facility_stock_id").val(stock_data[1]);	        
				locator.closest("tr").find(".batch_no").html(dropdown);
				locator.closest("tr").find(".expiry_date").val(""+stock_data[3]+"" );
				locator.closest("tr").find(".balance").val(remaining_items);
				locator.closest("tr").find(".available_stock").val(stock_data[2]-total_issues_for_this_batch);		
				locator.closest("tr").find(".commodity_id").val(commodity_id);
				locator.closest("tr").find(".commodity_balance").val(remaining_items);	
		});//entering the values to issue check if you have enough balance
        $(".quantity_issued").on('keyup',function (){
        	var bal=parseInt($(this).closest("tr").find(".available_stock").val());
        	var bal1=parseInt($(this).closest("tr").find(".commodity_balance").val());
        	var selector_object=$(this);
        	var data =$('option:selected', selector_object.closest("tr").find('.desc')).attr('special_data') 
	       	var data_array=data.split("^");
        	var remainder1=bal1-parseInt(calculate_actual_stock(data_array[3],selector_object.closest("tr").find(".commodity_unit_of_issue").val(),
    selector_object.val(),'return',selector_object));
    var remainder=bal-parseInt(calculate_actual_stock(data_array[3],selector_object.closest("tr").find(".commodity_unit_of_issue").val(),
    selector_object.val(),'return',selector_object));
        	var form_data=check_if_the_form_has_been_filled_correctly(selector_object);
        	var alert_message='';
        	if (remainder<0) {alert_message+="<li>Can not issue beyond available stock</li>";}
			if (selector_object.val() <0) { alert_message+="<li>Issued value must be above 0</li>";}
		    if (selector_object.val().indexOf('.') > -1) {alert_message+="<li>Decimals are not allowed.</li>";}		
			if (isNaN(selector_object.val())){alert_message+="<li>Enter only numbers</li>";}				
			if(isNaN(alert_message) || isNaN(form_data[0])){
	//reset the text field and the message dialog box 
    selector_object.val(""); var notification='<ol>'+alert_message+form_data[0]+'</ol>&nbsp;&nbsp;&nbsp;&nbsp;';
    //hcmp custom message dialog
    dialog_box(notification,'<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>');
    //This event is fired immediately when the hide instance method has been called.
    $('#communication_dialog').on('hide.bs.modal', function (e) { selector_object.focus();	})
    selector_object.closest("tr").find(".balance").val(selector_object.closest("tr").find(".commodity_balance").val());
    return;   }// set the balance here
   	selector_object.closest("tr").find(".balance").val(remainder1);	
        });// adding a new row 
        $(".add").click(function() {
        var selector_object=$('#facility_issues_table tr:last');
        var form_data=check_if_the_form_has_been_filled_correctly(selector_object);
        if(isNaN(form_data[0])){
        var notification='<ol>'+form_data[0]+'</ol>&nbsp;&nbsp;&nbsp;&nbsp;';
           //hcmp custom message dialog
        dialog_box(notification,'<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>');
        return;   }// set the balance here
			//set the quantities to readonly  $("#dropdown").prop("disabled", true);
			selector_object.closest("tr").find(".quantity_issued").attr('readonly','readonly');
			selector_object.closest("tr").find(".batch_no").attr("disabled", true);
			selector_object.closest("tr").find(".commodity_unit_of_issue").attr("disabled", true);
			selector_object.closest("tr").find(".desc").attr("disabled", true);				
			//reset the values of current element 
		  clone_the_last_row_of_the_table();
		});	/////batch no change event
		$('.batch_no').on('change',function(){
			var row_id=$(this).closest("tr").index();
		    var locator=$('option:selected', this);
			var data =$('option:selected', this).attr('special_data'); 
	       	var data_array=data.split("^");	
	       if(data_array[0]!=''){
	       	var new_date=$.datepicker.formatDate('d M yy', new Date(data_array[0]));
	       	var total_issues=0;
	      	var total_stock_bal=data_array[1];	
            var commodity_stock_id_old=parseInt($("input[name='commodity_id["+row_id+"]']").val());
            var facility_stock_id_current=parseInt(data_array[2]);
            $("input[name='facility_stock_id["+row_id+"]']").val(data_array[2]);     	
		        /* Check for all commodities that have the same id as the current item selected
		         * then sum up all the issues above the given item
		         * use this value to reduce the value of the total value of the commodity*/	        
		        $("input[name^=facility_stock_id]").each(function(index, value) {  	
                 var row_id_=$(this).closest("tr").index();                 
                 var total_current_issues=$(this).closest("tr").find(".quantity_issued").val();              
                  if($(this).val()==facility_stock_id_current && row_id_<row_id){
                   total_issues=parseInt(calculate_actual_stock(data_array[3],$(this).closest("tr").find(".commodity_unit_of_issue").val(),
    total_current_issues,'return',''))+total_issues;                 
                  }                
		        });
		        locator.closest("tr").find(".available_stock").val(total_stock_bal-total_issues);
		        locator.closest("tr").find(".expiry_date").val(""+new_date+"");	        		
			    locator.closest("tr").find(".quantity_issued").val("0");
			    locator.closest("tr").find(".balance").val(locator.closest("tr").find(".commodity_balance").val());
			    }else{
			      locator.closest("tr").find(".expiry_date").val("");
			    locator.closest("tr").find(".balance").val("");
			    locator.closest("tr").find(".available_stock").val("0");
			    locator.closest("tr").find(".quantity_issued").val("0");	
			    }
			  			
      }); // change issue type
        $(".commodity_unit_of_issue").on('change', function(){
          $(this).closest("tr").find(".quantity_issued").val('0');
          $(this).closest("tr").find(".balance").val($(this).closest("tr").find(".commodity_balance").val());	
        })/// remove the row
		$('.remove').on('click',function(){
			var data_ =$('option:selected', $(this).closest("tr").find('.desc')).attr('special_data'); 
	       	var data_array=data_.split("^");
			var row_id=$(this).closest("tr").index();
			var count_rows=0;
			var bal=parseInt(calculate_actual_stock(data_array[3],$(this).closest("tr").find(".commodity_unit_of_issue").val(),
    parseInt($(this).closest("tr").find(".quantity_issued").val()),'return',''))			
            var commodity_stock_id=parseInt($(this).closest("tr").find(".facility_stock_id").val());   
            var total=0;
            var commodity_id=$(this).closest("tr").find(".commodity_id").val();   			
			$("input[name^=commodity_id]").each(function(index, value) {				
			var new_id=$(this).closest("tr").index();
			var total_current_issues=$(this).closest("tr").find(".quantity_issued").val();
			var current_facility_stock_id=$(this).closest("tr").find(".facility_stock_id").val();
                  if(new_id>row_id && parseInt($(this).val())==commodity_id){ // check for total issues for this item              	 
                  var value=parseInt($(this).closest("tr").find(".commodity_balance").val())+bal;  ///available_stock
                   $(this).closest("tr").find(".commodity_balance").val(value);
                   $(this).closest("tr").find(".balance").val(value);                  
                  }                
                  if(new_id>row_id && current_facility_stock_id==commodity_stock_id){// check for total issues for batch this item
                   var value=parseInt($("input[name='available_stock["+new_id+"]']").val())+bal;  ///available_stock
                   $("input[name='available_stock["+new_id+"]']").val(value);
                  }
                 count_rows++;
		        });
	       //finally remove the row 
	       if(count_rows==1){
	       	 clone_the_last_row_of_the_table();
	       	 $(this).parent().parent().remove(); 
	       }else{
	       	$(this).parent().parent().remove(); 
	       }	         
      });
      /************save the data here*******************/
	$('.save').button().click(function() {
    $("input[name^=commodity_id]").each(function() {
                	$(this).closest("tr").find(".batch_no").removeAttr('disabled'); 
                	$(this).closest("tr").find(".commodity_unit_of_issue").removeAttr('disabled'); 	
                	$(this).closest("tr").find(".desc").removeAttr('disabled'); 		
                	});
	$( "#myform" ).submit();    
     });
        function clone_the_last_row_of_the_table(){
            var last_row = $('#facility_issues_table tr:last');
            var cloned_object = last_row.clone(true);
            var table_row = cloned_object.attr("row_id");
            var next_table_row = parseInt(table_row) + 1;           
		    cloned_object.attr("row_id", next_table_row);
			cloned_object.find(".service_point").attr('name','service_point['+next_table_row+']'); 
			cloned_object.find(".commodity_id").attr('name','commodity_id['+next_table_row+']'); 
			cloned_object.find(".commodity_id").attr('id',next_table_row); 
			cloned_object.find(".quantity_issued").attr('name','quantity_issued['+next_table_row+']'); 	
			cloned_object.find(".clone_datepicker_normal_limit_today").attr('name','clone_datepicker_normal_limit_today['+next_table_row+']'); 
			cloned_object.find(".available_stock").attr('name','available_stock['+next_table_row+']'); 
			cloned_object.find(".facility_stock_id").attr('name','facility_stock_id['+next_table_row+']'); 
			cloned_object.find(".batch_no").attr('name','batch_no['+next_table_row+']');
			cloned_object.find(".commodity_unit_of_issue").attr('name','commodity_unit_of_issue['+next_table_row+']');
			cloned_object.find(".expiry_date").attr('name','expiry_date['+next_table_row+']');
			cloned_object.find(".desc").attr('name','desc['+next_table_row+']');
			cloned_object.find(".commodity_balance").attr('name','commodity_balance['+next_table_row+']');					
            cloned_object.find("input").attr('value',"");     
            cloned_object.find(".quantity_issued").attr('value',"0");   
            cloned_object.find(".quantity_issued").removeAttr('readonly');  
            cloned_object.find(".batch_no").removeAttr('disabled');
            cloned_object.find(".commodity_unit_of_issue").removeAttr('disabled'); 
            cloned_object.find(".desc").removeAttr('disabled');   
            cloned_object.find(".commodity_balance").attr('value',"0");            
            cloned_object.find(".batch_no").html("");            
			cloned_object.insertAfter('#facility_issues_table tr:last');	
			refresh_clone_datepicker_normal_limit_today();	
        }
		function check_if_the_form_has_been_filled_correctly(selector_object){
		var alert_message='';
		var service_point=selector_object.closest("tr").find(".service_point").val();
		var commodity_id=selector_object.closest("tr").find(".desc").val();
		var issue_date=selector_object.closest("tr").find(".clone_datepicker_normal_limit_today").val();
		var issue_quantity=selector_object.closest("tr").find(".quantity_issued").val();
		//set the message here
		if (service_point==0) {alert_message+="<li>Select a Service Point</li>";}
	    if (commodity_id==0) {alert_message+="<li>Select a commodity first</li>";}
	    if (issue_date==0) {alert_message+="<li>Indicate the date of the issue</li>";}	
	    if (issue_quantity==0) {alert_message+="<li>Indicate how much you want to issue</li>";}	    
	    return[alert_message,service_point,commodity_id,issue_quantity,issue_date];	
		}//extract facility_data  from the json object 		
		function extract_data(commodity_id_,commodity_stock_row_id,type_of_drop_down){
			var row_id=0; var dropdown='';var facility_stock_id_='';  var total_stock_bal=0; var expiry_date='';
			$.each(facility_stock_data, function(i, jsondata) {
			var commodity_id=facility_stock_data[i]['commodity_id'];
			if(parseInt(commodity_id)==commodity_id_){
				if(type_of_drop_down=='batch_data'){//check if the user option is to create a batch combobox
					if(row_id==0){//if the row is 0, create a selected default value
					var facility_stock_id=facility_stock_data[i]['facility_stock_id'];	
			  		dropdown+="<option selected='selected'"+
			  		 "special_data="+facility_stock_data[i]['expiry_date']+
			  		 "^"+facility_stock_data[i]['commodity_balance']+
			  		 "^"+facility_stock_data[i]['facility_stock_id']+
			  		 "^"+facility_stock_data[i]['commodity_balance']+">";
			  				 expiry_date=$.datepicker.formatDate('d M yy', new Date(facility_stock_data[i]['expiry_date']));
			  				 bal=facility_stock_data[i]['commodity_balance'];
			  				 facility_stock_id_=facility_stock_data[i]['facility_stock_id'];
			  				 total_stock_bal=facility_stock_data[i]['commodity_balance'];
			  				 drug_id_current=commodity_id_;			  				 
			  			}else{
			  		dropdown+="<option "+
			  		 "special_data="+facility_stock_data[i]['expiry_date']+
			  		 "^"+facility_stock_data[i]['commodity_balance']+
			  		 "^"+facility_stock_data[i]['facility_stock_id']+
			  		 "^"+facility_stock_data[i]['commodity_balance']+">";	 
			  			total_stock_bal=facility_stock_data[i]['commodity_balance'];}			  			
						dropdown+=facility_stock_data[i]['batch_no'];						
						dropdown+="</option>";}
			row_id++; //auto-increment the checker
			}
				});
			return 	[dropdown,facility_stock_id_,total_stock_bal,expiry_date];
		}
	});	
</script>