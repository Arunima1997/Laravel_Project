@extends('layouts.app')
@section('content')
<div class="container">
    <!--<div class="row">-->
        <div class="col-md-8 col-md-offset-2">
           <div class="panel panel-default">

                <div class="panel-heading">Show Subject Database</div>

			<table>
				<tr></tr>
			<table class ="table">
				<tr>
					<td>Subject ID</td>
					<td>Subject Name</td>
					<td>Year</td>
					<td>Email ID</td>
					<td colspan="2">Action</td>
				</tr>
			<?php
				foreach($sub as $subject) {
				?>
				<tr>
				<td><?php echo $subject->Subject_Id ?></td>
				<td><?php echo $subject->Subject_Name ?></td>
				<td><?php echo $subject->Year ?></td>
				<td><?php echo $subject->Email_id ?></td>
				
				<td><a href ="edit&<?php echo $subject->id ?>">Edit</a></td>
				<td><a href ="delete&<?php echo $subject->id ?>">Delete</a></td>
				</tr>
				<?php
				}
				?>
			</table>
                
                </div>
        </div>
    </div>
</div>
@endsection

