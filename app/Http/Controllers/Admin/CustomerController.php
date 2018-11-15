<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use App\User;
use App\Profile;
use Validator;
use DateTime;
use Auth;

class CustomerController extends Controller
{
    public function postSignIn(Request $request){
        $validator = Validator::make($request->all(), [
            'user_email' => 'required|email|max:255',
            'user_password' => 'required|min:6'
        ]);

        if ($validator->fails()) {
            return redirect() -> back()
                ->withInput()
                ->withErrors($validator->errors());
        }

        $auth = array(
            'email' => $request->user_email,
            'password' => $request->user_password
        );
        
        if( Auth::attempt($auth) ){
            return redirect('/users')->with('success', 'You are now logged in');
        }else{
            return redirect('sweethoneys/sign-in')->with('error', 'Wrong sign in  account')->withInput();
        }
    }
    public function postForgotPassword(Request $request){
        $validator = Validator::make($request->all(), [
            'user_email' => 'required|email|unique:users,email',
        ]);

        if ($validator->fails()) {
            return 'OK';
        }else{
            return redirect('sweethoneys/forgot-password')->with('error', 'メールは存在しません');
        }
    }
    public function postSignUpStepOne(Request $request){
        $data = new User();
        $data->year_birth = $request->user_create_temp_year;
        $data->month_birth = $request->user_create_temp_month;
        $data->day_birth = $request->user_create_temp_day;
        $data->sex = $request->user_create_temp_sex;
        $data->student = $request->user_create_temp_sex;;
        $data->created_at = new DateTime();
        $data->remember_token = $request->_token;
        $data->save();
        return redirect('sweethoneys/sign-up/step-2/'.$data->id);
    }

    public function postSignUpStepTwo(Request $request, $id){
        $data = User::findOrFail($id);
        $data->name = $request->user_create_temp_name;
        $data->address = $request->user_create_temp_address;
        $data->save();
        return redirect('sweethoneys/sign-up/step-3/'.$id);
    }

    public function postSignUpStepThree(Request $request, $id){
        $validator = Validator::make($request->all(), [
            'user_create_temp_email' => 'required|email|unique:users,email|max:255',
            'user_create_temp_password' => 'required|min:8'
        ]);

        if ($validator->fails()) {
            return redirect() -> back()
                ->withInput()
                ->withErrors($validator->errors());
        }
        else{
            $data = User::findOrFail($id);
            $data->email = $request->user_create_temp_email;
            $data->password = bcrypt($request->user_create_temp_password);
            $data->save();
            return redirect('sweethoneys/sign-up/step-4/'.$id);
        }
    }

    public function postSignUpStepFour(Request $request, $id){
        $validator = Validator::make($request->all(), [
            'user_create_temp_phone' => 'required|unique:users,tel|max:11',
        ]);

        if ($validator->fails()) {
            return redirect() -> back()
                ->withInput()
                ->withErrors($validator->errors());
        }
        else{
            $data = User::findOrFail($id);
            $data->tel = $request->user_create_temp_phone;
            $data->itu_code = $request->user_create_temp_itu_code;
            $data->save();

            $profile = new Profile();
            $profile->profile_id = $data->id;
            $profile->save();

            return redirect('sweethoneys/smsauthor/'.$id)->with('tel', $data->tel);
        }
    }

    public function postRegister(Request $request, $id){
        $validator = Validator::make($request->all(), [
            'user_verification_code' => 'required|max:6',
        ]);

        if ($validator->fails()) {
            return redirect() -> back()
                ->withInput()
                ->withErrors($validator->errors());
        }
        else{
            return redirect('sweethoneys/sign-in');
        }
    }

    public function postContact(Request $request){
        $validator = Validator::make($request->all(), [
            'contact_name' => 'required',
            'contact_hurigana' => 'required',
            'contact_company' => 'required',
            'contact_email' => 'required|email',
            'contact_phone' => 'required|max:11',
            'contact_category' => 'required',
            'contact_body' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect() -> back()
                ->withInput()
                ->withErrors($validator->errors());
        }
        else{
            $data = $request->all();
            return view('sweethoneys/contact-confirm', compact('data'));
        }
    }

    public function postContactConfirm(Request $request){
        return view('sweethoneys/contact-complete');
    }
    public function postContactAuth(Request $request){
        $validator = Validator::make($request->all(), [
            'inquiry_category_id' => 'required',
            'inquiry_detail' => 'required',
            'inquiry_email' => 'required|email',
        ]);

        if ($validator->fails()) {
            return redirect() -> back()
                ->withInput()
                ->withErrors($validator->errors());
        }
        else{
            return redirect('/inquiries-complete');
        }
    }

    public function postConvertPoint(Request $request, $id){
        $validator = Validator::make($request->all(), [
            'message' => 'required|max:200',
        ]);

        if ($validator->fails()) {
            return redirect() -> back()
                ->withInput()
                ->withErrors($validator->errors());
        }
        else{
            return redirect('/users/'.$id.'/view-profile')->with('success','成功した転送');
        }
    }

    public function postReportUser(Request $request, $id){
        $validator = Validator::make($request->all(), [
            'violation_category_id' => 'required',
            'violation_reason' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect() -> back()
                ->withInput()
                ->withErrors($validator->errors());
        }
        else{
            return redirect('/users/'.$id.'/view-profile')->with('success','ブロックしました');
        }
    }
}   
