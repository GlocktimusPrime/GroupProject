<!DOCTYPE html>
<?php
$regstring = "";
if(isset($_GET['submit'])) {
include 'register_proc.php';
register();
}
function  includenav(){include 'authnav.php';}
?>
<html lang="en">
			<? includenav();?>
			<script type="text/javascript" src="/assets/js/bootstrap-dropdown.js"></script>
		</div>	
	            <div class="container">
                <div class="row">
                    <div class="span12">
                     <form class="form-horizontal">
<fieldset>
 <div class="well">
<legend>Register</legend>    
    <script src="js/jquery-1.10.0.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
	<script> // Bootstrap js date picker code
		$(function(){
			window.prettyPrint && prettyPrint();
			$('#dp1').datepicker({
				format: 'mm-dd-yyyy'
			});
			$('#bday').datepicker();
			$('#dp3').datepicker();
			$('#dp3').datepicker();
			$('#dpYears').datepicker();
			$('#dpMonths').datepicker();	
			var startDate = new Date(2013,1,1);
			var endDate = new Date(2013,1,25);
			$('#dp4').datepicker()
				.on('changeDate', function(ev){
					if (ev.date.valueOf() > endDate.valueOf()){
						$('#alert').show().find('strong').text('The start date can not be greater then the end date');
					} else {
						$('#alert').hide();
						startDate = new Date(ev.date);
						$('#startDate').text($('#dp4').data('date'));
					}
					$('#dp4').datepicker('hide');
				});
			$('#dp5').datepicker()
				.on('changeDate', function(ev){
					if (ev.date.valueOf() < startDate.valueOf()){
						$('#alert').show().find('strong').text('The end date can not be less then the start date');
					} else {
						$('#alert').hide();
						endDate = new Date(ev.date);
						$('#endDate').text($('#dp5').data('date'));
					}
					$('#dp5').datepicker('hide');
				});

        // disabling dates
        var nowTemp = new Date();
        var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

        var checkin = $('#dpd1').datepicker({
          onRender: function(date) {
            return date.valueOf() < now.valueOf() ? 'disabled' : '';
          }
        }).on('changeDate', function(ev) {
          if (ev.date.valueOf() > checkout.date.valueOf()) {
            var newDate = new Date(ev.date)
            newDate.setDate(newDate.getDate() + 1);
            checkout.setValue(newDate);
          }
          checkin.hide();
          $('#dpd2')[0].focus();
        }).data('datepicker');
        var checkout = $('#dpd2').datepicker({
          onRender: function(date) {
            return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : '';
          }
        }).on('changeDate', function(ev) {
          checkout.hide();
        }).data('datepicker');
		});
	</script>
</script>
<div class="control-group">
  <label class="control-label" for="nameinput">Username</label>
  <div class="controls">
    <input id="user" name="user" type="text" placeholder="" class="input-xlarge" required="">
  </div>
</div>
<div class="control-group">
  <label class="control-label" for="passwordinput">Password</label>
  <div class="controls">
    <input id="password" name="password" type="password" placeholder="" class="input-xlarge" required=""> 
  </div>
    </div>
  <div class="control-group">
  <label class="control-label" for="bdayinput">Birthday</label>
   <div class="controls">
 <div class="input-append date" id="dp3" data-date="12-02-2012" data-date-format="dd-mm-yyyy" data-date-viewmode="years">
  <input id="bday" name="bday" class="span2" size="16" type="text" value="12-02-2012">
  <span class="add-on"><i class="icon-th"></i></span>
</div>
    </div>
  </div>
<div class="control-group">
  <label class="control-label" for="singlebutton">Submit</label>
  <div class="controls">
<form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
<button type="submit" id="singlebutton" name="submit" value="1" class="btn-large btn-inverse">Go</button>
</form>
</div>
</br>
<?php 
global $taken;
print $taken;
print $regstring; ?>
  </div>
</div>
</fieldset>
</form>
</div>
</div>
</div>
<hr/>
 <div class="container">
<div class=" footer"> 
<span><a href="" ><span class="label label-inverse">Home</span></a></span>
<span><a href="help.php" >Help</a></span>
<span>
<?php
include('footer.php');
?>
</span> 	
</div>     
	</div>
</body>
</html>