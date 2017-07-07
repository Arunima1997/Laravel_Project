@extends('layouts.app')
@section('content')
<div class="container">
    <!--<div class="row">-->
        <div class="col-md-8 col-md-offset-2">
           <div class="panel panel-default">

                <div class="panel-heading">Update</div>
		
   		<form method="post" action="update&<?php echo $sub->id ?>">
			Subject ID : <br>
			<input type="text" name="id" value = "<?php echo $sub->Subject_Id ?>"><br>
			Subject Name : <br>
                        <input type="text" name="sub" value = "<?php echo $sub->Subject_Name ?>"><br>
			Year : <br>
                        <input type="text" name="year" value = "<?php echo $sub->Year ?>"><br><br>
			Email ID : <br>
                        <input type="text" name="email" value = "<?php echo $sub->Email_id ?>"><br>
                	<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
			<input type="submit" name="Update" value="Update"> 
		</form>	
            	</div>
        </div>
    </div>
</div>
@endsection

