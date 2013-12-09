<html>
	<head>
		<link rel="stylesheet" href="css/bootstrap.min.css">
	</head>
	<body>
		<div class="container">
			<form name="form_Ah_entries" method="POST" action="generate.php">
				<div class="basic">
					<div class="row">
						<div class="col-md-3 field-text">
							<b>Selling Date</b>
						</div>
						<div class="col-md-8">
							<input type="date" name="sellDate" id="date" class="datepicker">
						</div>
					</div>
					<br/>
					<div class="row">
						<div class="col-md-3 field-text">
							<b>Selling Purpose</b>
						</div>
						<div class="col-md-8">
							<input type="text" name="sellPurpose" id="purpose" class="form-control" placeholder="e.g. Tagbond Event">
						</div>
					</div>
					<br/>
					<div class="row">
						<div class="col-md-3 field-text">
							<b>Released To</b>
						</div>
						<div class="col-md-8">
							<input type="text" id="recipient" name="sellPerson" class="form-control" placeholder="e.g. Jeff Dalawampu">
						</div>
					</div>
				</div>
				<hr class="divider">
				<div class="header">
				<h4>Add Band Item</h4>
				</div>
				<div class="add-item">
					<div class="row">
						<div class="col-md-2">
							<input type="text" id="qty" class="form-control" placeholder="Qty">
						</div>
						<div class="col-md-3">
							<select id="size" class="form-control">
								<option value="">Size</option>
								<option value="small">Small</option>
								<option value="medium">Medium</option>
								<option value="large">Large</option>
							</select>
					 	</div>
						<div class="col-md-3">
							<select id="color" class="form-control">
								<option value="">Color</option>
								<option value="red">Red</option>
								<option value="black">Black</option>
								<option value="white">White</option>
								<option value="pink">Pink</option>
								<option value="yellow">Yellow</option>
								<option value="gray">Gray</option>
								<option value="ltblue">Lt. Blue</option>
								<option value="violet">Violet</option>
								<option value="orange">Orange</option>
								<option value="ltgreen">Lt. Green</option>
							</select>
						</div>
						<div class="col-md-2">
							<input type="text" id="total" class="form-control" placeholder="Sub" readonly>
						</div>
						<div class="col-md-2">
							<button type="button" class="btn btn-danger addParticular"><i class="glyphicon glyphicon-plus"></i></button>
						</div>
					</div>
				</div>
				<br/>
				<table class="breakdown table table-striped">
				</table>
				<div class="submitField" style="display:none">
					<input type="submit" name="submitOrder" class="btn btn-danger" value="Process">
				</div>
			</form>
		</div>
	</body>
	<script src="js/jquery-1.9.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script>
		$(document).ready(function(){
			$('#date').val(new Date().toJSON().slice(0,10));
			$field1 = false;
			$field2 = false;
			$particulars = false;
			$('#purpose').keyup(function(){
				if($(this).val() != ""){
					$field1 = true;
				}else{
					$field1 = false;
				}
				if($particulars == true && $field1 == true && $field2 == true){
					$('.submitField').show();
				}else{
					$('.submitField').hide();
				}
			});
			$('#recipient').keyup(function(){
				if($(this).val() != ""){
					$field2 = true;
				}else{
					$field2 = false;
				}
				if($particulars == true && $field1 == true && $field2 == true){
					$('.submitField').show();
				}else{
					$('.submitField').hide();
				}
			});
			$("#qty").keypress(function (e) {
				var txt = $("#recipient").val();
				if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
					return false;
				}
			});
			$('#qty').keyup(function(){
				$('#total').val($(this).val()*100);
			});
			$('.addParticular').on('click',function(){
				if($('#qty').val() != "" && $('#size option:selected').val() != "" && $('#color option:selected').val() != "" && ($('#total').val() != "" || $('#total').val() != 0)){
					$('.breakdown').append('<tr class="breakDownRow"><td><input type="text" class="chosen text-center" name="qty[]" value="'+$('#qty').val()+'" readonly></td><td><input type="text" class="chosen text-center" name="size[]" value="'+$('#size option:selected').val()+'" readonly></td><td><input type="text" class="chosen text-center" name="color[]" value="'+$('#color option:selected').val()+'" readonly></td><td><input type="text" class="chosen text-center" name="sub[]" value="'+$('#total').val()+'" readonly></td><td><i class="del glyphicon glyphicon-remove-circle"></i></td></tr>');
					
					$('#qty').val('');
					$('#color').val('');
					$('#size').val('');
					$('#total').val('');
					$particulars = true;
				}else{
					alert('Cannot add item')
				}
				if($particulars == true && $field1 == true && $field2 == true){
					$('.submitField').show();
				}else{
					$('.submitField').hide();
				}

			});
			$(document).on('click','.del',function(){
				$(this).closest('tr').remove();
				$i = 0;
				$('.breakDownRow').each(function(){
					$i++;
				});
				if($i == 0){
					$particulars = false;
					$('.submitField').hide();
				}
				if($particulars == true && $field1 == true && $field2 == true){
					$('.submitField').show();
				}else{
					$('.submitField').hide();
				}
			});
		});
	</script>
	<style>
		.container{
			padding:20px;
			width:600px;
			margin-top:70px;
			border:4px solid #ccc;
		}
		.datepicker{
			padding:5px;
			border:1px solid #ccc;
			border-radius:5px;
		}
		.field-text{
			padding-top:5px !important;
		}
		.addParticular{
			height:33px;
		}
		.chosen{
			border:none;
			width:100px;
			background:none;
		}
		.del{
			margin-top:3px;
		}
	</style>
</html>