@extends('layouts.app')
@section('content')
<div class="container">
    <!--<div class="row">-->
        <div class="col-md-8 col-md-offset-2">
        	<div class="panel panel-default">
		 	<form action ="report_generate&<?php echo $name ?>" method = "post" enctype = "multipart/form-data">
                	<div class="panel-heading">Take Attendance</div>
			<h4><center>Teacher: {{ auth()->user()->name}}</center></h4>
				<div class="form-inline">
		
		 		@foreach ($second as $key=>$sec)
                                <br> 
                                	<div class = "form-group">
			
					<table class ="table">	
					<tr>
				<!--&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp-->
					<td>{{$sec->Roll }}</td>
				<!--&nbsp&nbsp&nbsp&nbsp-->
					<td>{{ $sec->Name}}</td> 
					</div>
						<div class = "form-group">
					
						<td><label><input tabindex="1" type="checkbox"  style="text-align:center; " name="{{ $sec->Class_Roll }}"  /></label></td>
			
						</div>
					</tr>
					</table>
                 		@endforeach
		
	 			</div>
			<br>
		<!--<form action ="report_generate " method = "post" enctype = "multipart/form-data" >-->
		<!--<input type = "hidden" name = "_token" value = "{{{ csrf_token() }}}"/>-->
				<div class = "form-group">
                		<input type="submit" value= "Submit">
				<br>
				<center><a href ="/home/report&<?php echo $name ?>">Attendance Report</a></center>
                		</div>
		

                	</div>
			</form>
        	</div>
    	</div>
</div>
@endsection

