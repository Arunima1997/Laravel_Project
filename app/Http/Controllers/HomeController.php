<?php

namespace App\Http\Controllers;
use Carbon\carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use resources\views;
use Input;
use Illuminate\Support\Facades\Schema;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
	
	$var=auth()->user()->email;
	//dd($var);
	$sub = DB::table('sub')->select('Subject_Name')->where('sub.Email_id','=',$var)->get();
	//dd($sub);
        //return $subject;
	//session()->put('$sub');
        return view('home', compact('sub'));
    }

    
    public function report($value)
    {
	//dd($value);
	$subid = DB::table('sub')->select('Subject_Id')->where('sub.Subject_Name','=',$value)->get();
	$year = DB::table('sub')->select('Year')->where('sub.Subject_Name','=',$value)->get();
	$days = DB::table('date')->get();
	//dd($year);
		ob_start();
                echo $year;
                $output=ob_get_contents();
                ob_end_clean();
                
                if ( $output=='[{"Year":1}]')
                {

                        $req = "first";
                }
                elseif ( $output=='[{"Year":2}]')
                {

                        $req = "second";
                }
                elseif ( $output=='[{"Year":3}]')
                {

                        $req = "third";
                }
                elseif ( $output=='[{"Year":4}]')
                {

                        $req = "fourth";
                }

                $final = DB::table($req)->get();
		//$test = $final->pluck($subid);
		
	return view('report',compact('days','final','subid'));
    }

   public function report_generate($tabu) 
   	{
 		$year = DB::table('sub')->select('Year')->where('sub.Subject_Name','=',$tabu)->get();
		$sub_id = DB::table('sub')->select('Subject_Id')->where('sub.Subject_Name','=',$tabu)->get();
        	//dd($year);
                ob_start();
                echo $year;
                $output=ob_get_contents();
                ob_end_clean();
                if ( $output=='[{"Year":1}]')
                {

                        $req = "first";
                }
                elseif ( $output=='[{"Year":2}]')
                {

                        $req = "second";
                }
                elseif ( $output=='[{"Year":3}]')
                {

                        $req = "third";
                }
                elseif ( $output=='[{"Year":4}]')
                {

                        $req = "fourth";
                }

                $final = DB::table($req)->get();
		ob_start();
                echo $sub_id;
                $va=ob_get_clean();
		$va = stripslashes($va);
		$txt = rtrim($va,"}]");
		$txt = ltrim($txt,"[{Subject_Id:");
		$txt = ltrim($txt,"Subject_Id:");
		$txt = explode(":",$txt);
		$txt = str_replace('"','', $txt);
		
		$columns = Schema::getColumnListing($req);
		foreach ($columns as $col)
		{
			
			if($col == $txt[1])
			{	
				$got=DB::table($req)->select($col)->get();
				//dd($got);
				//dd(request()->all());
				//$i=1;
				//foreach($got as $g)
				//{	
					$arr= request()->all('$sec->Class_Roll');
					//$out = array_slice($arr[1],1,1);
					//dd($out);
					print_r("\nPresent:\n");
					for($j = 1 ; $j <= 82 ; $j++)
					{
						if(isset($arr[$j])) 
						{
						//print_r(" Present:\n");
						print_r($j);
						print_r(" ");
    						//print_r("\nchecked");
						$value=DB::table($req)->where('Class_Roll',$j)->pluck($txt[1]);
						//print_r($j);
						//print_r($value);
						DB::table($req)->where('Class_Roll',$j)->increment($txt[1]); 
						}					
					}
			}
		}
		$dt = Carbon::now();
		ob_start();
		echo $dt->format('Y-m-d');
		$date=ob_get_clean();
		//print_r($date);
		DB::table('date')->insert(['Date' => $date, 'Subject_Id' => $txt[1] ]);
	}

    public function attendance($name)
	{
		//dd($name);
		$year = DB::table('sub')->select('Year')->where('sub.Subject_Name','=',$name)->get();	
		$sub_id = DB::table('sub')->select('Subject_Id')->where('sub.Subject_Name','=',$name)->get();
		//dd($sub_id);
		//$a = array();
		//dd(print_r($year));
		//$a=(array)$year;
		//$a = $year;
		//dd($year);
		ob_start();
		echo $year;
		$output=ob_get_contents();
		ob_end_clean();
		//dd($output);
		if ( $output=='[{"Year":1}]')
		{	//dd("yes");	
			
			$req = "first";
		}
		elseif ( $output=='[{"Year":2}]')
                {       //dd("yes");

                        $req = "second";
                }
		elseif ( $output=='[{"Year":3}]')
                {       //dd("yes");

                        $req = "third";
                }
		elseif ( $output=='[{"Year":4}]')
                {       //dd("yes");

                        $req = "fourth";
                }
	
               	$second = DB::table($req)->get();
		//dd($second);
                return view('attendance', compact('second','name'));
		//return view('attendance');
	}
}
