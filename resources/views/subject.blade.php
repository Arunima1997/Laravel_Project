@extends('layouts.app')
@section('content')
<div class="container">
    <!--<div class="row">-->
        <div class="col-md-8 col-md-offset-2">
           <div class="panel panel-default">

                <div class="panel-heading">Admin Dashboard</div>
		
   		<form method="post" action="store">
			Subject ID : <br>
			<input type="text" name="id"><br>
			Subject Name : <br>
                        <input type="text" name="sub"><br>
			Year : <br>
                        <input type="text" name="year"><br><br>
			Email ID : <br>
                        <input type="text" name="email"><br>
                	<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
			<input type="submit" name="Insert" value="Insert"> 
		</form>	
            	</div>
        </div>
    </div>
</div>
@endsection

