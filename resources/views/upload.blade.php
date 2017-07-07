@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
           <div class="panel panel-default">

                <div class="panel-heading">Upload/Overwrite Student Databases (Year-Wise)</div>
			<center><h3> First Year Database</h3></center>
			<br>
			<form class = "form-inline" action = "import_csv_file_1" method = "post" enctype = "multipart/form-data" >
				<input type = "hidden" name = "_token" value="{{{ csrf_token() }}}"/>
					<div class = "form-group">
				
					<input type="file" name="csv_file">
					</div>
					<div class = "form-group">
					<input type="submit" value="Submit">
					</div>
				
			</form>
			<br>
			<center><h3> Second Year Database</h3></center>
                        <br>
                        <form class = "form-inline" action = "import_csv_file_2" method = "post" enctype = "multipart/form-data" >
                                <input type = "hidden" name = "_token" value="{{{ csrf_token() }}}"/>
                                        <div class = "form-group">

                                        <input type="file" name="csv_file">
                                        </div>
                                        <div class = "form-group">
                                        <input type="submit" value="Submit">
                                        </div>

                        </form>
			<br>
			<center><h3>Third Year Database</h3></center>
                        <br>
                        <form class = "form-inline" action = "import_csv_file_3" method = "post" enctype = "multipart/form-data" >
                                <input type = "hidden" name = "_token" value="{{{ csrf_token() }}}"/>
                                        <div class = "form-group">

                                        <input type="file" name="csv_file">
                                        </div>
                                        <div class = "form-group">
                                        <input type="submit" value="Submit">
                                        </div>

                        </form>
			<br>
			<center><h3> Fourth Year Database</h3></center>
                        <br>
                        <form class = "form-inline" action = "import_csv_file_4" method = "post" enctype = "multipart/form-data" >
                                <input type = "hidden" name = "_token" value="{{{ csrf_token() }}}"/>
                                        <div class = "form-group">

                                        <input type="file" name="csv_file">
                                        </div>
                                        <div class = "form-group">
                                        <input type="submit" value="Submit">
                                        </div>

                        </form>


			<br>
			<br>
		
					
					

                </div>
        </div>
    </div>
</div>
@endsection

