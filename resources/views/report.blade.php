@extends('layouts.app')
@section('content')
<div class="container">
        <div class="col-md-8 col-md-offset-2">
           <div class="panel panel-default">

                <div class="panel-heading">REPORT</div>

			
				
				<h5><b>&nbsp&nbspClass Dates : </b></h5>
				

				
				<?php
				$temp = str_ireplace("\\","",$subid);
                                $temp = str_ireplace("[{\"Subject_Id\":\"","",$temp);
                                $temp = str_ireplace("\"}]","",$temp);
				$count=0;
                                for($i = 0; $i < sizeof($days); $i++)
                                {
                                ?>
                                

                                <?php
						if($days[$i]->Subject_Id==$temp)
						{ 
						$count++;
						echo "&nbsp;&nbsp;";
						echo $days[$i]->Date; 
						                 
						
						}
				?>              
                                <?php
                                }
				?>                  
                        
			<br> 
                        <table class ="table">

                                <tr>
                                        <td><b>Name</b></td>
                                        <td><b>Classes Attended</b></td>
                                        
                                </tr>
			        
				<?php
                                if($count==0)
					{	echo "No Entry !";	}
				else 
				{
				for($i = 0; $i < sizeof($final); $i++)
					{
				?>				
				<tr>
			            <?php if(($final[$i]->$temp)/$count<=0.5)
										{  
				    ?>		
                                <td><?php echo $final[$i]->Name 	 	 ?> </td>
			   	<td><?php //$temp = str_ireplace("\\","",$subid);     	 
				          //$temp = str_ireplace("[{\"Subject_Id\":\"","",$temp);
					  //$temp = str_ireplace("\"}]","",$temp);					  
					  echo $final[$i]->$temp;

										 ?></td>

                                </tr>
					
				
                                <?php
										}						
                                	}
				}
                                ?>
				<h5><b>&nbsp&nbspTotal Classes :&nbsp <?php echo $count ?></b></h5>
				<b><center><span style="color:#F00;">STUDENTS WITH ATTENDANCE BELOW 50%</span></center></b>                                 
                    	</table>
                </div>
        </div>
    </div>
</div>
@endsection

