
<form action="resultslinks.php" method="post">
	<div class="form-group">
		<div class="row ">
			<div class="col-sm-3"><label for="sel1">Select Year and Semister:</label></div>
			
			<div class="">
		  
				  <select class="form-control" id="year" name="year">
				  	<option>Year</option>
				    <option>I Year</option>
				    <option>II Year</option>
				    <option>III Year</option>
				    <option>IV Year</option>
				  </select>
		 	</div>
			 <div class="col-sm-2">
			  <select class="form-control" id="sem" name="sem">
			  	<option>Semister</option>
			    <option>I Semister</option>
			    <option>II Semister</option>
			  </select>
			</div>
			<div class="">
				<input type="submit" name="get" value="Get" class="btn btn-primary">
			</div>
		</div>
	</div>
</form>

