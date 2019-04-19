<?php

namespace Modules\User\Http\Controllers;

use App\User;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view('user::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('user::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show()
    {
        return view('user::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit()
    {
        return view('user::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request)
    {
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy()
    {
    }

    public function userProfile(){
        return view('user::profile.profile');
    }

    public function updateProfile(Request $request){
        try{

            $user_id = Sentinel::getUser()->id;
            $this->validate($request,[
                'first_name' => 'required',
                'last_name' => 'required',
                'blood' => 'required',
                'union' => 'required',
                'mobile' => 'required|unique:users,mobile,'.$user_id,
                'email' => 'email|unique:users,email,'.$user_id,
                'dob' => 'date_format:Y-m-d|before:today',

            ]);

            DB::beginTransaction();

            User::where('id',$user_id)->update([
               'first_name' => $request->get('first_name'),
               'last_name' => $request->get('last_name'),
               'mobile' => $request->get('mobile'),
               'email' => $request->get('email'),
               'gender' => $request->get('gender'),
               'dob' => $request->get('dob'),
               'current_zone' => $request->get('current_zone'),
               'occupation' => $request->get('occupation'),
               'designation' => $request->get('designation'),
               'marital_status' => $request->get('marital_status'),
               'height' => $request->get('height'),
               'weight' => $request->get('weight'),
            ]);
            DB::commit();

            return redirect()->back()->with('success','Successfully Updated');

        }catch (\Exception $exception){
            DB::rollback();
//            dd($exception->getMessage(),$exception->getCode(),$exception->getLine());
            return redirect()->back()->with('error','Something Went Wrong');
        }
    }
}
