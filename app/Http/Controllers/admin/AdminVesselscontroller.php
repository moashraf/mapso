<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
  use App\Sitesettings;
  use App\Boats;
  use DB;

class AdminVesselscontroller extends Controller

    {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public

    function index()
        {
        $Sitesettings = Sitesettings::all();
        $Boats = Boats::paginate(10);
        return view('admin.table', ['Sitesettings' => $Sitesettings, 'Boats' => $Boats]);
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public

    function create()
        {
        $Sitesettings = Sitesettings::all();
        $boats_cat = DB::table('boats_cat')->pluck('boats_cat_text');
        return view('admin.form', ['Sitesettings' => $Sitesettings, 'boats_cat' => $boats_cat]);
        }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public

    function store(Request $request)
        {
        try
            {
            $nameDataSheet = "DataSheet" . rand();
            $imageNameDataSheet = $nameDataSheet . '.' . $request->file('DataSheet')->getClientOriginalExtension();
            $request->file('DataSheet')->move(base_path() . '/public/wp-content/uploads/2017/DataSheet/', $imageNameDataSheet);
            $name = rand();
            $imageName = $name . '.' . $request->file('fileToUpload')->getClientOriginalExtension();
            $request->file('fileToUpload')->move(base_path() . '/public/wp-content/uploads/2017/05/', $imageName);
            $namelogo = "logo" . rand();
            $imageNamelogo = $namelogo . '.' . $request->file('logo')->getClientOriginalExtension();
            $request->file('logo')->move(base_path() . '/public/wp-content/uploads/2017/05/', $imageNamelogo);
            $flight = new Boats;
            $flight->Boatsname = $request->Vessels_Name;
            $flight->Boatsimg = "wp-content/uploads/2017/05/$imageName";
            $flight->Boatscat = 11;
            $flight->Boats_logo = "wp-content/uploads/2017/05/$imageNamelogo";
            $flight->Hull_Material = $request->Hull_Material;
            $flight->Length_Overall = $request->Length_Overall;
            $flight->Beam_Overall = $request->Beam_Overall;
            $flight->Draught = $request->Draught;
            $flight->Displacement = $request->Displacement;
            $flight->Max_Speed = $request->Speed;
            $flight->details_boats = $request->details;
            $flight->VIDO = $request->VIDO;
            $flight->DataSheet = "wp-content/uploads/2017/DataSheet/$imageNameDataSheet";
            $flight->Application = $request->Application;
            $flight->save();
            /*   Ø§Ù„Ø¬Ø§Ù„ÙˆØ±ÙŠ*/
            foreach($request->Gallery as $photo1)
                {
                $photoexplode = $photo1->getClientOriginalName();
                $photoexplode = explode(".", $photoexplode);
                $namerand = rand();
                $namerand.= $photoexplode[0];
                $imageNameGallery = $namerand . '.' . $photo1->getClientOriginalExtension();
                $photo1->move(base_path() . '/public/wp-content/uploads/2017/05/', $imageNameGallery);
                $Singleboatgallery = new Singleboatgallery;
                $Singleboatgallery->boats_id_Gallery = $flight->id;
                $Singleboatgallery->img_url = "wp-content/uploads/2017/05/$imageNameGallery";
                $Singleboatgallery->img_tit = $photoexplode[0];
                $Singleboatgallery->save();
                }

            /*   Ø§Ù„Ø¬Ø§Ù„ÙˆØ±ÙŠ*/
            }

        catch(customException $e)
            {
            echo $e->errorMessage();

            // return back();

            }

        return back();
        }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public

    function show($id)
        {

        //

        }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public

    function edit($id)
        {
        try
            {
            $Sitesettings = Sitesettings::all();
            $Boats = Boats::where('id', $id)->first();
            $boats_cat = DB::table('boats_cat')->pluck('boats_cat_text');
            return view('admin.Vessels_update', ['Sitesettings' => $Sitesettings, 'Boats' => $Boats, 'boats_cat' => $boats_cat]);
            }

        catch(customException $e)
            {

            // echo $e->errorMessage();

            return back();
            }

        return back();
        }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public

    function update(Request $request, $id)
        {
        try
            {
            /***** DataSheet****/
            if ($request->file('DataSheet') !== NULL)
                {
                $nameDataSheet = "DataSheet" . rand();
                $imageNameDataSheet = $nameDataSheet . '.' . $request->file('DataSheet')->getClientOriginalExtension();
                $request->file('DataSheet')->move(base_path() . '/public/wp-content/uploads/2017/DataSheet/', $imageNameDataSheet);
                }

            /***** fileToUpload****/
            if ($request->file('fileToUpload') !== NULL)
                {
                $name = rand();
                $imageName = $name . '.' . $request->file('fileToUpload')->getClientOriginalExtension();
                $request->file('fileToUpload')->move(base_path() . '/public/wp-content/uploads/2017/05/', $imageName);
                }

            /***** logo****/
            if ($request->file('logo') !== NULL)
                {
                $namelogo = "logo" . rand();
                $imageNamelogo = $namelogo . '.' . $request->file('logo')->getClientOriginalExtension();
                $request->file('logo')->move(base_path() . '/public/wp-content/uploads/2017/05/', $imageNamelogo);
                }

            $flight = Boats::find($id);
            $flight->Boatsname = $request->Vessels_Name;
            if ($request->file('fileToUpload') !== NULL)
                {
                $flight->Boatsimg = "wp-content/uploads/2017/05/$imageName";
                }

            // $flight->Boatscat = $request->Model;

            if ($request->file('logo') !== NULL)
                {
                $flight->Boats_logo = "wp-content/uploads/2017/05/$imageNamelogo";
                }

            if ($request->file('DataSheet') !== NULL)
                {
                $flight->DataSheet = "wp-content/uploads/2017/DataSheet/$imageNameDataSheet";
                }

            $flight->Hull_Material = $request->Hull_Material;
            $flight->Length_Overall = $request->Length_Overall;
            $flight->Beam_Overall = $request->Beam_Overall;
            $flight->Draught = $request->Draught;
            $flight->Displacement = $request->Displacement;
            $flight->Max_Speed = $request->Speed;
            $flight->details_boats = $request->details;
            $flight->VIDO = $request->VIDO;
            $flight->Application = $request->Application;
            $flight->save();
            /*   Ø§Ù„Ø¬Ø§Ù„ÙˆØ±ÙŠ*/
            if ($request->file('Gallery') !== NULL)
                {
                foreach($request->Gallery as $photo1)
                    {
                    $photoexplode = $photo1->getClientOriginalName();
                    $photoexplode = explode(".", $photoexplode);
                    $namerand = rand();
                    $namerand.= $photoexplode[0];
                    $imageNameGallery = $namerand . '.' . $photo1->getClientOriginalExtension();
                    $photo1->move(base_path() . '/public/wp-content/uploads/2017/05/', $imageNameGallery);
                    $Singleboatgallery = new Singleboatgallery;
                    $Singleboatgallery->boats_id_Gallery = $flight->id;
                    $Singleboatgallery->img_url = "wp-content/uploads/2017/05/$imageNameGallery";
                    $Singleboatgallery->img_tit = $photoexplode[0];
                    $Singleboatgallery->save();
                    }
                }

            /*   Ø§Ù„Ø¬Ø§Ù„ÙˆØ±ÙŠ*/
            }

        catch(customException $e)
            {
            echo $e->errorMessage();

            // return back();

            }

        return back();
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public

    function destroy($id)
        {
        $nerd = Boats::find($id);
        $nerd->delete();
        $Singleboatgallery = Singleboatgallery::where('boats_id_Gallery', $nerd['id'])->get();
        foreach($Singleboatgallery as $Singleboatgalleryval)
            {
            $Singleboatgalleryval->delete();
            }

        return back();
        }
    }