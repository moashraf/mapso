<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Sitesettings;
use App\ContactUs;

class admin_ContactUs_Controller extends Controller
{


  public function index()
    {

        $Sitesettings = Sitesettings::all();
        $Boats = ContactUs::paginate(10);
        return view('admin.all_Contact_Us', ['Sitesettings' => $Sitesettings, 'Boats' => $Boats]);
    }



    public function store(Request $request)
    {

        try
        {

            $rules = [
              'map' => 'required', 
              'Title' => 'required', 
              'type' => 'required', 
              'address' => 'required', 
              'tel' => 'required', 
              'fax' => 'required', 
              'tel' => 'required', 
             'mail' => 'required', 
           ];


            $validator = \Illuminate\Support\Facades\Validator::make($request->all() , $rules, [ ]);

            if ($validator->fails())
            {
                return redirect('admin/admin_Contact_Us/create')
                    ->withErrors($validator)->withInput();

            }
            else
            {

                $flight = new ContactUs;
                $flight->map_link = $request->map;
                $flight->title_c = $request->Title;
                $flight->titel_type = $request->type;
                $flight->addr = $request->address;
                $flight->tel = $request->tel;
                $flight->fax = $request->fax;
                $flight->mail = $request->mail;
                $flight->save();

            }

        }
        catch(customException $e)
        {
            //echo $e->errorMessage();
            return back();

        }
        return back();

    }

    /**************************************************************************************************************************/

    public function create()
    {

        $Sitesettings = Sitesettings::all();
        return view('admin.Contact_Us_add', ['Sitesettings' => $Sitesettings]);

    }
 
  
 
public function edit($id)
    {

            $Sitesettings = Sitesettings::all();
            $ContactUs = ContactUs::where('id', $id)->first();
             return view('admin.Contact_Us_update', ['Sitesettings' => $Sitesettings, 'ContactUs' => $ContactUs ]);
    }
 
    public function update(Request $request, $id)
    {

 try
        {

              $rules = [
              'map' => 'required', 
              'Title' => 'required', 
              'type' => 'required', 
              'address' => 'required', 
              'tel' => 'required', 
              'fax' => 'required', 
              'tel' => 'required', 
             'mail' => 'required', 
           ];


            $validator = \Illuminate\Support\Facades\Validator::make($request->all() , $rules, [ ]);

            if ($validator->fails())
            {
                return redirect("admin/admin_Contact_Us/$id/edit")
                    ->withErrors($validator)->withInput();

            }
            else
            {


            if ($request !== NULL)
{
                $flight = ContactUs::find($id);
                $flight->map_link = $request->map;
                $flight->title_c = $request->Title;
                $flight->titel_type = $request->type;
                $flight->addr = $request->address;
                $flight->tel = $request->tel;
                $flight->fax = $request->fax;
                $flight->mail = $request->mail;
                $flight->save();
           }}
        }
        catch(customException $e)
        {
            echo $e->errorMessage();
            //return back();
            
        }
        return back();
    }

    public function destroy($id)
    {
        $nerd = ContactUs::find($id);
        $nerd->delete();

        return back();

    }

}

