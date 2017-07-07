@extends('layouts.app')
@section('content')
<div class="container">
    <!--<div class="row">-->
        <div class="col-md-8 col-md-offset-2">
           <div class="panel panel-default">

                <div class="panel-heading">Subjects</div>
                 <body>
                        <ul>	
			<!--{{auth()->user()->password}}-->	
			<!-- @foreach ($sub as $s)
				<br>	
                                <li><a href="/home/attendance">{{ $s->Subject_Name}}</a></li>
					
                        @endforeach-->
			@foreach ($sub as $s)
			<br>
		<!--<li><a  href="/home/attendance" onclick="attendance( {{ $s->Subject_Name }} );"><i class="fa fa-pencil-square-o">{{$s->Subject_Name}}</i></a></li>-->

			<li><a href="/home/attendance&<?php echo $s->Subject_Name ?>">{{$s->Subject_Name}}</a></li>
			@endforeach
                        </ul>
                </body>


            </div>
        </div>
    </div>
</div>
@endsection

