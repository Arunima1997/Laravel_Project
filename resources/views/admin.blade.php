@extends('layouts.app')
@section('content')
<div class="container">
    <!--<div class="row">-->
        <div class="col-md-8 col-md-offset-2">
           <div class="panel panel-default">

                <div class="panel-heading">Admin Dashboard</div>

                <body>
                      	<br><br> 
			<center><a href = "/admin/show">View Subject Database</a></center>
			<br><br>
			<center><a href = "/admin/subject">Insert Into Subject Database</a></center>
			<br><br>	
        		<center><a href = "/admin/upload">Upload Student Details(Year-wise)</a><center>
			<br><br>
                </body>

            	</div>
        </div>
    </div>
</div>
@endsection

