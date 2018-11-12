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
use File;

class HomeController extends Controller
{
    public function getHomePage(){
        return view('homepages/home');
    }
    public function getPageMe(){
        return view('homepages/page-me');
    }
    public function getSearch(){
        return view('homepages/search');
    }
    public function postSearch(Request $request){
        return redirect('/users');
    }
    public function getConfiguration(){
        return view('configurations/index');
    }
    public function postUpdateEmail(Request $request){
        $validator = Validator::make($request->all(), [
            'user_email' => 'required|email',
        ]);

        if ($validator->fails()) {
            return redirect() -> back()
                ->withInput()
                ->withErrors($validator->errors());
        }
        else{
            $id = Auth::user()->id;
            $data = User::findOrFail($id);

            $data->email = $request->user_email;
            $data->save();
            return redirect('/users/configuration')->with('success', '更新が正常に完了');
        }
    }
    public function postUpdatePassword(Request $request){
        $validator = Validator::make($request->all(), [
            'current_password' => 'required|min:8',
            'user_password' => 'required|min:8',
            'user_password_confirm' => 'required|min:8',
        ]);

        if ($validator->fails()) {
            return redirect() -> back()
                ->withInput()
                ->withErrors($validator->errors());
        }
        else{
            $id = Auth::user()->id;
            $password = Auth::user()->password;
            $data = User::findOrFail($id);
            if($request->user_password_confirm != $request->user_password){
                return redirect('/users/configuration/update-password')
                    ->withInput()
                    ->with('error-user-password', '同じパスワードを確認する');
            }
            else{
                $data->password = bcrypt($request->user_password);
                $data->save();
                return redirect('/users/configuration')->with('success', '更新が正常に完了');
            }
        }
    }
    public function postUpdateTel(Request $request){
        $validator = Validator::make($request->all(), [
            'user_tel' => 'required|max:11',
        ]);

        if ($validator->fails()) {
            return redirect() -> back()
                ->withInput()
                ->withErrors($validator->errors());
        }
        else{
            $id = Auth::user()->id;
            $data = User::findOrFail($id);

            $data->tel = $request->user_tel;
            $data->save();
            return redirect('/users/configuration')->with('success', '更新が正常に完了');
        }
    }
    public function postMessageTemplate(Request $request){
        $validator = Validator::make($request->all(), [
            'user_default_message' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect() -> back()
                ->withInput()
                ->withErrors($validator->errors());
        }
        else{
            return redirect('/users/configuration')->with('success', '更新が正常に完了');
        }
    }

    public function getInvationUser(Request $request){
        $validator = Validator::make($request->all(), [
            'invitation_invite_code' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect() -> back()
                ->withInput()
                ->withErrors($validator->errors());
        }
        else{
            return redirect('/users/configuration')->with('success', '更新が正常に完了');
        }
    }

    public function getSignOut(){
        Auth::logout();
        return redirect('/sweethoneys/sign-in')->with('success', 'You have logged out of the account');
    }

    public function postEditProfileTweet(Request $request){
        $validator = Validator::make($request->all(), [
            'user_profile_tweet' => 'required|max:24',
        ]);

        if ($validator->fails()) {
            return redirect() -> back()
                ->withInput()
                ->withErrors($validator->errors());
        }
        else{
            $id = Auth::user()->id;
            $data = Profile::where('profile_id', $id)
                ->update(['tweet' => $request->user_profile_tweet]);

            return redirect('/users/me/profile/edit')->with('success', '更新が正常に完了');
        }
    }
    public function postProfileCommentEdit(Request $request){
        $validator = Validator::make($request->all(), [
            'user_profile_comment' => 'required|max:500',
        ]);

        if ($validator->fails()) {
            return redirect() -> back()
                ->withInput()
                ->withErrors($validator->errors());
        }
        else{
            $id = Auth::user()->id;
            $data = Profile::where('profile_id', $id)
                ->update(['self_introduce' => $request->user_profile_comment]);

            return redirect('/users/me/profile/edit')->with('success', '更新が正常に完了');
        }
    }

    public function postEditGoodPlace(Request $request){
        $validator = Validator::make($request->all(), [
            'user_profile_good_place' => 'required|max:30',
        ]);

        if ($validator->fails()) {
            return redirect() -> back()
                ->withInput()
                ->withErrors($validator->errors());
        }
        else{
            $id = Auth::user()->id;
            $data = Profile::where('profile_id', $id)
                ->update(['good_place' => $request->user_profile_good_place]);

            return redirect('/users/me/profile/edit-other-profile')->with('success', '更新が正常に完了');
        }
    }

    public function postEditHobby(Request $request){
        $validator = Validator::make($request->all(), [
            'user_profile_hobby' => 'required|max:30',
        ]);

        if ($validator->fails()) {
            return redirect() -> back()
                ->withInput()
                ->withErrors($validator->errors());
        }
        else{
            $id = Auth::user()->id;
            $data = Profile::where('profile_id', $id)
                ->update(['hobby' => $request->user_profile_hobby]);

            return redirect('/users/me/profile/edit-other-profile')->with('success', '更新が正常に完了');
        }
    }

    public function postSelectPersonality(Request $request){
        $validator = Validator::make($request->all(), [
            'personality_list' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect() -> back()
                ->withInput()
                ->withErrors($validator->errors());
        }
        else{
            $id = Auth::user()->id;
            $data = Profile::where('profile_id', $id)
                ->update(['personality' => $request->personality_list]);

            return redirect('/users/me/profile/edit-other-profile')->with('success', '更新が正常に完了');
        }
    }

    public function postEditNickname(Request $request){
        $validator = Validator::make($request->all(), [
            'user_profile_nickname' => 'required|max:500',
        ]);

        if ($validator->fails()) {
            return redirect() -> back()
                ->withInput()
                ->withErrors($validator->errors());
        }
        else{
            $id = Auth::User()->id;
            $data = User::where('id', $id)
                ->update(['name' => $request->user_profile_nickname]);
            return redirect('/users/me/profile/edit-basic-profile')->with('success', 'true');
        }
    }

    public function postEditBirthday(Request $request){
        $validator = Validator::make($request->all(), [
            'new_birthday' => 'required|date',
        ]);

        if ($validator->fails()) {
            return redirect() -> back()
                ->withInput()
                ->withErrors($validator->errors());
        }
        else{
            $date = explode('-',$request->new_birthday);
            $id = Auth::user()->id;
            $data = User::findOrFail($id);
            $data->year_birth = $date[0];
            $data->month_birth = $date[1];
            $data->day_birth = $date[2];
            $data->save();
            return redirect('/users/me/profile/edit-basic-profile')->with('success', 'true');
        }
    }

    public function postAgeCertification(Request $request){
        $validator = Validator::make($request->all(), [
            'user_age_certification_image' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect() -> back()
                ->withInput()
                ->withErrors($validator->errors());
        }
        else{
            $id = Auth::User()->id;
            $data = User::findOrFail($id);
            if($request->hasFile('user_age_certification_image')){
                $file = $request->file('user_age_certification_image');
                $fileName = time().'-'.$file->getClientOriginalName();
                $file->move('upload/age-certification-image', $fileName);
                $data->age_certification_image = $fileName;
                $data->save();
                return redirect('/users/age-certification/edit')->with('success', 'true');
            }
            else{ 
                return redirect('/users/age-certification/edit')->with('error', 'もう一度お試しください');
            }
        }
    }
    
    public function postIncomeCertification(Request $request){
        $validator = Validator::make($request->all(), [
            'user_income_certification_image' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect() -> back()
                ->withInput()
                ->withErrors($validator->errors());
        }
        else{
            $id = Auth::User()->id;
            $data = User::findOrFail($id);
            if($request->hasFile('user_income_certification_image')){
                $file = $request->file('user_income_certification_image');
                $fileName = time().'-'.$file->getClientOriginalName();
                $file->move('upload/income-certification-image', $fileName);
                $data->income_certification_image = $fileName;
                $data->save();
                return redirect('/users/income-certification/complete');
            }
            else{ 
                return redirect('/users/income-certification/new')->with('error', 'もう一度お試しください');
            }
        }
    }
}
