<?php

namespace App\Http\Controllers;

use Cartalyst\Sentinel\Checkpoints\ThrottlingException;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PkAuthController extends Controller
{
    /**
     * Index function login Page
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('pk.login.login');
    }

    /**
     * Registration Page registration function
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function registration()
    {
        return view('pk.login.registration');
    }

    /**
     * Registration Sign up
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */

    public function signUp(Request $request)
    {
        try {
            $this->validate($request, [
                'first_name' => 'required|string|max:50',
                'last_name' => 'required|string|max:50',
                'mobile' => 'required|max:11|unique:users',
                'password' => 'required|string|min:6|confirmed',
                'union' => 'required',
                'blood' => 'required',
                'password_confirmation' => 'required'
            ]);

            $password = $request->get('password');
            $con_pass = $request->get('password_confirmation');
            $mobile = $request->get('mobile');
            $mob = substr($mobile, 0, 3);

            if ($mob == '017' || $mob == '013' || $mob == '012' || $mob == '018' || $mob == '019' || $mob == '016' || $mob == '015' || $mob == '011') {
                if (strlen($mobile) != 11) {
                    return redirect()->back()->withinput()->with('err_msg', 'Mobile Number Must be 11 Character');
                } else {
                    if (strlen($password) > 5 && strlen($password) < 19) {
                        if ($password === $con_pass) {
                            DB::beginTransaction();
                                $register = Sentinel::registerAndActivate($request->all());
                                $role = Sentinel::findRoleBySlug('pk_user');
                                $role->users()->attach($register);
                            DB::commit();
                            if ($register) {
                                return redirect('/pk-login')->with('suc_msg', 'Registration Successfully You Can Sign in now');
                            } else {
                                return redirect()->back()->withinput()->with('err_msg', 'Something went Wrong, please contact with system administrator');
                            }
                        } else {
                            return redirect()->back()->withinput()->with('err_msg', 'Password Does not match');
                        }
                    } else {
                        return redirect()->back()->withinput()->with('err_msg', 'Password Should be 6 to 18 chracter');
                    }
                }
            } else {
                return redirect()->back()->withinput()->with('err_msg', 'Mobile Number is not Valid');
            }

        } catch (\Exception $e) {
            return redirect()->back()->with('err_msg', 'Something Went Wrong,please contact with system administrator');
        }

    }

    /**
     * Sign in Log in
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */

    public function signIn(Request $request)
    {
        try {

            $this->validate($request, [
                'mobile' => 'required|string|max:11',
                'password' => 'required|max:18',
            ]);
            $password = $request->get('password');
            $mobile = $request->get('mobile');
            $mob = substr($mobile, 0, 3);

            if ($mob == '017'|| $mob == '013' || $mob == '012' || $mob == '018' || $mob == '019' || $mob == '016' || $mob == '015' || $mob == '011') {
                if (strlen($mobile) != 11) {
                    return redirect()->back()->withInput()->with('err_msg', 'Mobile Number Must be 11 Character');
                } else {
                    if (strlen($password) > 5 && strlen($password) < 19) {
                        $request->password = $password;
                        $request->mobile = substr($mobile, 1);
                        $signIn = Sentinel::authenticate($request->all());
                        if ($signIn) {
                            return redirect('/pk-friends');
                        } else {
                            return redirect()->back()->with('err_msg', 'Email or password does not match !!!');
                        }
                    }
                }
            } else {
                return redirect()->back()->withinput()->with('err_msg', 'Invalid Mobile Number');
            }

        }catch (ThrottlingException $e) {
            $delay = $e->getDelay();
            return redirect()->back()->withinput()->with('err_msg', "Don,t cheating , You are banned for $delay seconds");
        }catch (\Exception $e) {
            return redirect()->back()->with('err_msg', 'Something Went Wrong,please contact with system administrator');
        }

    }

    /**
     * Sign out Log out
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */

    public function signOut(Request $request)
    {
        Sentinel::logout();
        return redirect('/pk-login');
    }
}
