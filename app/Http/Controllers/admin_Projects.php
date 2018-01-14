<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
   use App\Slider;
 use App\Sitesettings;
 use App\Projects;
 use Validator;

class admin_Projects extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          
            $slider =   Slider::all();
            $getallnews =   Sitesettings::all();
            $Projects =   projects::paginate(20);
            return view('admin\all_Projects', compact(  'slider'  , 'getallnews' , 'Projects'  ));

  }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {  
              $slider =   Slider::all();
            $getallnews =   Sitesettings::all();
             return view('admin\Projects_add', compact(  'slider'  , 'getallnews'   ));



    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

/*
 $validator = $this->Validate(request(), [
            'Year' => 'required',
            'Boat_Type' => 'required',
            'Yard_Name' => 'required',
            'Series' => 'required',
            'Boat_Name' => 'required',
            'Application' => 'required'
            
         ]);

Projects::create($validator);

     return back();

*/


 $validator = Validator::make($request->all(), [
            'Year' => 'required',
            'Boat_Type' => 'required',
            'Yard_Name' => 'required',
            'Series' => 'required',
            'Boat_Name' => 'required',
            'Application' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('post/create')->withErrors($validator) ->withInput();
        }





       try {
     

        $Projects = new Projects;
        $Projects->Year = $request->Year;
        $Projects->Boat_Type = $request->Boat_Type;
        $Projects->Yard_Name = $request->Yard_Name;
        $Projects->Series = $request->Series;
        $Projects->Boat_Name = $request->Boat_Name;
        $Projects->Application = $request->Application;
        $Projects->save();
     
      
       
}  
        catch (customException $e) {
 // echo $e->errorMessage();
    return back();

}
    return back();

  








    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {


    $nerd = Projects::find($id);
     $nerd->delete();
       return back();   


    }
}
