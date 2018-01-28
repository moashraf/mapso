<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Sitesettings;
use App\News;
use DB;
use Validator;

class AdminNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $Sitesettings = Sitesettings::all();
        $Boats = News::paginate(10);

        return view('admin.all_news', ['Sitesettings' => $Sitesettings, 'Boats' => $Boats]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $Sitesettings = Sitesettings::all();
        return view('admin.news_add', ['Sitesettings' => $Sitesettings]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        try
        {


   $rules = [
            'Title' => 'required',
            'photo' => 'required|mimes:jpeg,bmp,png,jpe',
             'details' => 'required',
            ];

    $messages = [  'Year.numeric' => trans('ashraflang.figonum'),
            'Title.required' => 'required',
            'photo.mimes' => ' type file image only : jpeg,bmp,png,jpe',
             'details.required' => 'required',

                ];

                 $validator = \Illuminate\Support\Facades\Validator::make($request->all(), $rules, $messages );

  if ($validator->fails()) {
         return redirect('admin/admin_news/create')->withErrors($validator)->withInput();

  }
    else
    {


          $namelogo = "photo" . rand();
            $imageNamelogo = $namelogo . '.' . $request->file('photo')->getClientOriginalExtension();
            $request->file('photo') ->move(base_path() . '/public/wp-content/uploads/2017/05/', $imageNamelogo);
            $flight = new News;
          //  $flight->cat = $request->cat;
            $flight->img = "wp-content/uploads/2017/05/$imageNamelogo";
            $flight->content = $request->details;
            $flight->Title = $request->Title;
            $flight->save();

            if ($request->subscribe != null)
            {
           app('App\Http\Controllers\SendMailController')->news_send_Mail($flight->content, $flight->img, $flight->Title, $flight->id);
            }


    }

          

        }
        catch(customException $e)
        {
            echo $e->errorMessage();
            //return back();
            
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
     return back();
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try
        {

            $Sitesettings = Sitesettings::all();
            $Boats = News::where('id', $id)->first();
            return view('admin.news_update', ['Sitesettings' => $Sitesettings, 'Boats' => $Boats]);

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
    public function update(Request $request, $id)
    {
        try
        {

            /***** logo****/

            if ($request->file('photo') !== NULL)
            {

                $namelogo = "photo" . rand();
                $imageNamelogo = $namelogo . '.' . $request->file('photo')->getClientOriginalExtension();
                $request->file('photo') ->move(base_path() . '/public/wp-content/uploads/2017/05/', $imageNamelogo);
            }

            $flight = News::find($id);
           // $flight->cat = $request->cat;
            $flight->content = $request->details;
            $flight->Title = $request->Title;
            if ($request->file('photo') !== NULL)
            { $flight->img = "wp-content/uploads/2017/05/$imageNamelogo";}
            $flight->save();
        }
        catch(customException $e)
        {
            echo $e->errorMessage();
            //return back();
            
        }
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nerd = News::find($id);
        $nerd->delete();

        return back();

    }
}

