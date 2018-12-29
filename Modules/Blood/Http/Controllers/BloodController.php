<?php

namespace Modules\Blood\Http\Controllers;

use App\PkUser;
use App\User;
use Carbon\Carbon;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Validation\ValidatesRequests;

class BloodController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view('blood::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('blood::create');
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
        return view('blood::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit()
    {
        return view('blood::edit');
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

    public function groupBlood($group)
    {
        $availableDate =  Carbon::today()->subDays(90);
        $availableDonor = User::where('last_given_blood', '<', $availableDate)
            ->where('blood', $group)->get();
        return view('blood::group_blood', compact('availableDonor'));
    }

    public function updateBlood(Request $request)
    {
        $this->validate($request, [
//            'blood_group' => 'required',
            'last_given_date' => 'required',
            'current_zone' => 'required',
        ]);
        try{

            $user_id = Sentinel::getUser()->id;
            $blood_group = $request->get('blood_group');
            $last_given_date = $request->get('last_given_date');
            $current_zone = $request->get('current_zone');
            DB::beginTransaction();
                 User::where('id',$user_id)->update([
                   'blood' => $blood_group,
                   'last_given_blood' => $last_given_date,
                   'current_zone' => $current_zone,
                ]);
            DB::commit();
            return redirect()->back()->with('suc_msg','Blood Information Update Successfully');
        }catch (\Exception $e){
            return redirect()->back()->with('err_msg','Something went Wrong');
        }

    }
}
