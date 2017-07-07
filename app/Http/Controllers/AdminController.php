<?php
namespace App\Http\Controllers;

//use DB;
use App\Sub;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
//use Illuminate\Database\Query\Builder;
use App\First;
use App\Second;
use App\Third;
use App\Fourth;
use Storage;
use Excel;
use Input;
class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subject = DB::table('subject')->get();
        return view('admin' , compact('subject'));
    }

    public function subject()
    {
        return view('subject');
    }

    public function store(Request $request)
    {
	$sub = new sub;
	$sub->Subject_Name = $request->sub;
	$sub->Subject_Id = $request->id;
	$sub->Year = $request->year;
	$sub->Email_id = $request->email;

	$sub->save();

    }
    public function show()
    {
	$sub = sub::all();
	return view('show',['sub'=>$sub]);	
    }
    
    public function upload()
    {
	return view('upload');
    }
  /* public function import_csv_file()
    {
	Excel::load(Input::file('csv_file'),function($reader)
		{
			$reader->each(function($sheet)
			{
			First::firstOrCreate($sheet->toArray());
			
			return $sheet;
			});
		});
    }*/
    public function import_csv_file_1(Request $request)
    {
	$upload = $request->file('csv_file');
	$filePath = $upload->getRealPath();
	$file = fopen($filePath,'r');
	
	$header = fgetcsv($file);
	$escapedHeader=[];
	//dd($header);
	foreach($header as $key => $value)
	{
		$lheader=strtolower($value);
		$escapedItem=preg_replace('/[^a-z]/','',$lheader);
		//dd($escapedItem);
		array_push($escapedHeader,$escapedItem);
		
	}
	//dd($escapedHeader);
	while($columns = fgetcsv($file))
	{
		if($columns[0]=="")
		{
			continue;
		}
		foreach($columns as $key => &$value)
		{
			$val=preg_replace('/\D/','',$value);
		}
		//dd($value);
		$data = array_combine($escapedHeader,$columns);

		//foreach($data as $key => $value)
		//{
		//	$value = ($key == "roll")?(integer)$value : ;
		//	$value = ($key == "name")?(string)$value : ;
		
		//}
		$roll=$data['roll'];
		$name=$data['name'];
		$first=First::firstOrNew(['roll'=>$roll,'name'=>$name]);
		$first->save();
	}
   }

     public function import_csv_file_2(Request $request)
    {
        $upload = $request->file('csv_file');
        $filePath = $upload->getRealPath();
        $file = fopen($filePath,'r');

        $header = fgetcsv($file);
        $escapedHeader=[];
        //dd($header);
        foreach($header as $key => $value)
        {
                $lheader=strtolower($value);
                $escapedItem=preg_replace('/[^a-z]/','',$lheader);
                //dd($escapedItem);
                array_push($escapedHeader,$escapedItem);

        }
        //dd($escapedHeader);
        while($columns = fgetcsv($file))
        {
                if($columns[0]=="")
                {
                        continue;
                }
                foreach($columns as $key => &$value)
                {
                        $val=preg_replace('/\D/','',$value);
                }
                //dd($value);
                $data = array_combine($escapedHeader,$columns);

                //foreach($data as $key => $value)
                //{
                //      $value = ($key == "roll")?(integer)$value : ;
                //      $value = ($key == "name")?(string)$value : ;

                //}
                $roll=$data['roll'];
                $name=$data['name'];
                $second=Second::firstOrNew(['roll'=>$roll,'name'=>$name]);
                $second->save();
        }
        }

	 public function import_csv_file_3(Request $request)
    {
        $upload = $request->file('csv_file');
        $filePath = $upload->getRealPath();
        $file = fopen($filePath,'r');

        $header = fgetcsv($file);
        $escapedHeader=[];
        //dd($header);
        foreach($header as $key => $value)
        {
                $lheader=strtolower($value);
                $escapedItem=preg_replace('/[^a-z]/','',$lheader);
                //dd($escapedItem);
                array_push($escapedHeader,$escapedItem);

        }
        //dd($escapedHeader);
        while($columns = fgetcsv($file))
        {
                if($columns[0]=="")
                {
                        continue;
                }
                foreach($columns as $key => &$value)
                {
                        $val=preg_replace('/\D/','',$value);
                }
                //dd($value);
                $data = array_combine($escapedHeader,$columns);

                //foreach($data as $key => $value)
                //{
                //      $value = ($key == "roll")?(integer)$value : ;
                //      $value = ($key == "name")?(string)$value : ;

                //}
                $roll=$data['roll'];
                $name=$data['name'];
                $third=Third::firstOrNew(['roll'=>$roll,'name'=>$name]);
                $third->save();
        }
        }

	 public function import_csv_file_4(Request $request)
    {
        $upload = $request->file('csv_file');
        $filePath = $upload->getRealPath();
        $file = fopen($filePath,'r');

        $header = fgetcsv($file);
        $escapedHeader=[];
        //dd($header);
        foreach($header as $key => $value)
        {
                $lheader=strtolower($value);
                $escapedItem=preg_replace('/[^a-z]/','',$lheader);
                //dd($escapedItem);
                array_push($escapedHeader,$escapedItem);

        }
        //dd($escapedHeader);
        while($columns = fgetcsv($file))
        {
                if($columns[0]=="")
                {
                        continue;
                }
                foreach($columns as $key => &$value)
                {
                        $val=preg_replace('/\D/','',$value);
                }
                //dd($value);
                $data = array_combine($escapedHeader,$columns);

                //foreach($data as $key => $value)
                //{
                //      $value = ($key == "roll")?(integer)$value : ;
                //      $value = ($key == "name")?(string)$value : ;

                //}
                $roll=$data['roll'];
                $name=$data['name'];
                $fourth=Fourth::firstOrNew(['roll'=>$roll,'name'=>$name]);
                $fourth->save();
        }
        }


		
    public function edit($id)
    {
	$sub = sub::find($id);
	
	return view('edit', ['sub'=>$sub]);
    }

     public function update(Request $request, $id)
    {
        $sub = sub::find($id);

        $sub->Subject_Name      = $request->sub;
        $sub->Subject_Id        = $request->id;
        $sub->Year              = $request->year;
        $sub->Email_id          = $request->email;

        $sub->save();

        return redirect('admin/show');
    }
     
     public function destroy($id)
    {
	sub::destroy($id);
	return redirect('admin/show');
	
    }
}
