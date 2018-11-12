<?php
use App\User;
use App\Profile;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', function () {
    return view('customer/index');
});
Route::get('/welcomes', function () {
    return view('customer/welcomes');
});

Route::get('/redirect/{social}', 'SocialAuthController@redirect');
Route::get('/callback/{social}', 'SocialAuthController@callback');

Route::get('/sign-up', function () {
    return view('customer/sign-up');
});
Route::get('/sign-in', function () {
    if(Auth::check()){
        return redirect('/users');
    }else{
        return view('customer/sign-in');
    }
});
Route::get('/inquiries-complete', function () {
    return view('customer/inquiries-complete');
});
Route::get('/forgot-password', function () {
    return view('customer/forgot-password');
});
Route::get('/purchase/input-creditcard', function(){
    return view('/configurations/input-creditcard');
});
Route::get('/purchase/{point}', function(){
    return view('/customer/purchase');
});

Route::post('/sign-in', ['as' => 'sign-in', 'uses' => 'Admin\CustomerController@postSignIn']);
Route::post('/forgot-password', ['as' => 'forgot-password', 'uses' => 'Admin\CustomerController@postForgotPassword']);
Route::post('/signup-step1', ['as' => 'sign-up-step-1', 'uses' => 'Admin\CustomerController@postSignUpStepOne']);
Route::post('/signup-step2/{id}', ['as' => 'sign-up-step-2', 'uses' => 'Admin\CustomerController@postSignUpStepTwo']);
Route::post('/signup-step3/{id}', ['as' => 'sign-up-step-3', 'uses' => 'Admin\CustomerController@postSignUpStepThree']);
Route::post('/signup-step4/{id}', ['as' => 'sign-up-step-4', 'uses' => 'Admin\CustomerController@postSignUpStepFour']);
Route::post('/signup/register/{id}', ['as' => 'register', 'uses' => 'Admin\CustomerController@postRegister']);

Route::group(['prefix' => '/sign-up'], function() {
    Route::get('/', function () {
        return view('customer/sign-up');
    });

    Route::get('/step-2/{id}', function ($id) {
        return view('customer/signup-step2')->with('id', $id);
    });
    Route::get('/step-3/{id}', function ($id) {
        return view('customer/signup-step3')->with('id', $id);
    });
    Route::get('/step-4/{id}', function ($id) {
        return view('customer/signup-step4')->with('id', $id);
    });
    Route::get('/register/{id}', function ($id) {
        return view('customer/signup-register')->with('id', $id);
    });
});
Route::group(['prefix' => 'webpages'], function() {
    Route::get('/question', function () {
        return view('webpages/question');
    });
    Route::get('/contact', function () {
        return view('webpages/contact');
    });
    Route::get('/contact-auth', function () {
        return view('webpages/contact-auth');
    });
    Route::get('/support', function () {
        return view('webpages/support');
    });
    Route::get('/contact-confirm', function () {
        return view('webpages/contact-confirm');
    });
    Route::get('/contact-complete', function () {
        return view('webpages/contact-complete');
    });
    Route::get('/privacy-policy', function () {
        return view('webpages/privacy-policy');
    });
    Route::get('/company', function () {
        return view('webpages/company');
    });
    Route::get('/rule', function () {
        return view('webpages/rule');
    });
    Route::get('/specific-business-deal', function () {
        return view('webpages/business-deal');
    });
    Route::get('/fund-settlement', function () {
        return view('webpages/fund-settlement');
    });
    Route::get('/privatemode', function () {
        return view('webpages/privatemode');
    });
    Route::get('/point-history', function () {
        return view('webpages/point-history');
    });
    Route::get('/about-profile-text', function () {
        return view('webpages/about-profile-text');
    });
    Route::get('/buy-points', function () {
        return view('webpages/buy-points');
    });
    Route::get('/pay', function () {
        return view('webpages/pay');
    });
    Route::post('/contact', ['as' => 'contact', 'uses' => 'Admin\CustomerController@postContact']);
    Route::post('/contact-confirm', ['as' => 'contact-confirm', 'uses' => 'Admin\CustomerController@postContactConfirm']);
    Route::post('/contact-auth', ['as' => 'contact-auth', 'uses' => 'Admin\CustomerController@postContactAuth']);
});
Route::group(['middleware' => 'end.user', 'prefix' => 'users'], function() {
    Route::get('/', ['as' => 'home', 'uses' => 'Admin\HomeController@getHomePage']);
    Route::get('/sign-out', ['as' => 'sign-out', 'uses' => 'Admin\HomeController@getSignOut']);
    Route::get('/search', ['as' => 'search', 'uses' => 'Admin\HomeController@getSearch']);
    Route::get('/points', function(){
        return view('/configurations/points');
    });
    Route::get('/convert-point-to-like-nice/{point}', function($point){
        $id = Auth::User()->id;
        $message = Auth::user()->point;
        $like = Auth::user()->nice;
        $data = User::findOrFail($id);
        if($message < $point){
            return redirect('/users/points')->with('success', '失敗した');
        }else{
            $data->point = $message - $point;
            $data->nice = $like + $point;
            $data->save();
            return redirect('/users/points')->with('success', '成功した');
        }
    });
    Route::group(['prefix' => 'messages'], function() {
        Route::get('/matching', function(){
            return view('/messages/matching');
        });
        Route::get('/have-messaged', function(){
            return view('/messages/have-messaged');
        });
    });
    Route::group(['prefix' => 'incomming'], function() {
        Route::get('/relations', function(){
            return view('/incomming/relations');
        });
        Route::get('/foot-prints', function(){
            return view('/incomming/foot-prints');
        });
    });
    Route::group(['prefix' => 'outcomming'], function() {
        Route::get('/blocks', function(){
            return view('/outcomming/blocks');
        });
        Route::get('/relations', function(){
            return view('/outcomming/relations');
        });
        Route::get('/favorites', function(){
            return view('/outcomming/favorites');
        });
    });
    Route::group(['prefix' => 'notices'], function() {
        Route::get('/', function(){
            return view('/notices/index');
        });
        // Cần chỉnh sửa lại 
        Route::get('/read-all', function(){
            return view('/notices/read-all');
        });
        Route::get('/{noticesId}', function($noticesId){
            return view('/notices/show');
        });
    });
    Route::group(['prefix' => 'invitation'], function() {
        Route::get('/new', function(){
            return view('/invitation-new/index');
        });
        Route::get('/new-status', function(){
            return view('/invitation-new/status');
        });
    });
    Route::group(['prefix' => 'income-certification'], function() {
        Route::get('/', function(){
            return view('/income-certification/index');
        });
        Route::get('/new', function(){
            return view('/income-certification/new');
        });
        Route::get('/complete', function(){
            return view('/income-certification/complete');
        });
        Route::post('/new', ['as' => 'income.certification.new', 'uses' => 'Admin\HomeController@postIncomeCertification']);
    });
    Route::group(['prefix' => 'age-certification'], function() {
        Route::get('/incomplete', function(){
            return view('/age-certification/incomplete');
        });
        Route::get('/edit', function(){
            return view('/age-certification/edit');
        });
        Route::post('/edit', ['as' => 'age.certification', 'uses' => 'Admin\HomeController@postAgeCertification']);
    });
    Route::group(['prefix' => 'me'], function() {
        Route::get('/', ['as' => 'page-me', 'uses' => 'Admin\HomeController@getPageMe']);
        Route::group(['prefix' => 'profile'], function() {
            Route::get('/', function(){
                $id = Auth::User()->id;
                $data = App\Profile::where('profile_id', $id)->get();
                return view('/profile-user/index', compact('data'));
            });
            Route::get('/edit', function(){
                $id = Auth::User()->id;
                $data = App\Profile::where('profile_id', $id)->get();
                return view('/profile-user/edit', compact('data'));
            });
            Route::get('/comment/edit', function(){
                $id = Auth::User()->id;
                $data = App\Profile::where('profile_id', $id)->select('self_introduce')->get();
                return view('/profile-user/comment-edit', compact('data'));
            });
            Route::get('/nickname/edit', function(){
                return view('/profile-user/nickname-edit');
            });
            Route::get('/birthday/edit', function(){
                return view('/profile-user/birthday-edit');
            });

            Route::get('/edit-basic-profile', function(){
                $id = Auth::User()->id;
                $data = App\Profile::where('profile_id', $id)->get();
                return view('/profile-user/edit-basic-profile', compact('data'));
            });
            // Edit basic profile 
            Route::get('/update-address/{value}', function($value){
                $id = Auth::User()->id;
                $data = User::findOrFail($id);
                $data->address = $value;
                $data->save();
                return redirect('/users/me/profile/edit-basic-profile')->with('success', 'true');
            });
            Route::get('/update-height/{value}', function($value){
                $id = Auth::User()->id;
                $data = Profile::where('profile_id', $id)
                    ->update(['height' => $value]);
                return redirect('/users/me/profile/edit-basic-profile')->with('success', 'true');
            });
            Route::get('/update-body-type/{value}', function($value){
                $id = Auth::User()->id;
                $data = Profile::where('profile_id', $id)
                    ->update(['body_type' => $value]);
                return redirect('/users/me/profile/edit-basic-profile')->with('success', 'true');
            });
            Route::get('/update-birth-origin/{value}', function($value){
                $id = Auth::User()->id;
                $data = Profile::where('profile_id', $id)
                    ->update(['birth_origin' => $value]);
                return redirect('/users/me/profile/edit-basic-profile')->with('success', 'true');
            });
            Route::get('/update-education/{value}', function($value){
                $id = Auth::User()->id;
                $data = Profile::where('profile_id', $id)
                    ->update(['education' => $value]);
                return redirect('/users/me/profile/edit-basic-profile')->with('success', 'true');
            });
            Route::get('/update-annual-salary/{value}', function($value){
                $id = Auth::User()->id;
                $data = Profile::where('profile_id', $id)
                    ->update(['annual_salary' => $value]);
                return redirect('/users/me/profile/edit-basic-profile')->with('success', 'true');
            });
            Route::get('/update-have-children/{value}', function($value){
                $id = Auth::User()->id;
                $data = Profile::where('profile_id', $id)
                    ->update(['have_children' => $value]);
                return redirect('/users/me/profile/edit-basic-profile')->with('success', 'true');
            });
            // Edit other profile 
            Route::get('/update-job/{value}', function($value){
                $id = Auth::User()->id;
                $data = Profile::where('profile_id', $id)
                    ->update(['job' => $value]);
                return redirect('/users/me/profile/edit-other-profile')->with('success', 'true');
            });
            Route::get('/update-request-until-meet/{value}', function($value){
                $id = Auth::User()->id;
                $data = Profile::where('profile_id', $id)
                    ->update(['request_until_meet' => $value]);
                return redirect('/users/me/profile/edit-other-profile')->with('success', 'true');
            });
            Route::get('/update-holiday/{value}', function($value){
                $id = Auth::User()->id;
                $data = Profile::where('profile_id', $id)
                    ->update(['holiday' => $value]);
                return redirect('/users/me/profile/edit-other-profile')->with('success', 'true');
            });
            Route::get('/update-drinking-habit/{value}', function($value){
                $id = Auth::User()->id;
                $data = Profile::where('profile_id', $id)
                    ->update(['drinking_habit' => $value]);
                return redirect('/users/me/profile/edit-other-profile')->with('success', 'true');
            });
            Route::get('/update-smoking-habit/{value}', function($value){
                $id = Auth::User()->id;
                $data = Profile::where('profile_id', $id)
                    ->update(['smoking_habit' => $value]);
                return redirect('/users/me/profile/edit-other-profile')->with('success', 'true');
            });
            Route::get('/good-place/edit', function(){
                $id = Auth::User()->id;
                $data = App\Profile::where('profile_id', $id)->get();
                return view('/profile-user/good-place-edit', compact('data'));
            });
            Route::get('/hobby/edit', function(){
                $id = Auth::User()->id;
                $data = App\Profile::where('profile_id', $id)->get();
                return view('/profile-user/hobby-edit', compact('data'));
            });
            Route::get('/select-personality', function(){
                $id = Auth::User()->id;
                $data = App\Profile::where('profile_id', $id)->select('personality')->get();
                return view('/profile-user/select-personality', compact('data'));
            });

            Route::get('/tweet/edit', function(){
                $id = Auth::User()->id;
                $data = App\Profile::where('profile_id', $id)->select('tweet')->get();
                return view('/profile-tweet/edit', compact('data'));
            });
            Route::get('/tweet/about', function(){
                return view('/profile-tweet/about');
            });
            Route::get('/tweet/templates', function(){
                return view('/profile-tweet/templates');
            });
            Route::get('/edit-other-profile', function(){
                $id = Auth::User()->id;
                $data = App\Profile::where('profile_id', $id)->get();
                return view('/profile-user/edit-other-profile', compact('data'));
            });
            Route::post('/tweet/edit', ['as' => 'users.profile.tweet.edit', 'uses' => 'Admin\HomeController@postEditProfileTweet']);
            Route::post('/nickname/edit', ['as' => 'users.profile.nickname.edit', 'uses' => 'Admin\HomeController@postEditNickname']);
            Route::post('/birthday/edit', ['as' => 'users.profile.birthday.edit', 'uses' => 'Admin\HomeController@postEditBirthday']);
            Route::post('/good-place/edit', ['as' => 'users.profile.good-place.edit', 'uses' => 'Admin\HomeController@postEditGoodPlace']);
            Route::post('/hobby/edit', ['as' => 'users.profile.hobby.edit', 'uses' => 'Admin\HomeController@postEditHobby']);
            Route::post('/select-personality', ['as' => 'users.profile.select.personality', 'uses' => 'Admin\HomeController@postSelectPersonality']);
        });
    });
    Route::group(['prefix' => 'configuration'], function() {
        Route::get('/', ['as' => 'configuration', 'uses' => 'Admin\HomeController@getConfiguration']);

        Route::get('/update-email', function(){
            return view('/configurations/email');
        });
        Route::get('/update-tel', function(){
            return view('/configurations/tel');
        });
        Route::get('/update-password', function(){
            return view('/configurations/password');
        });
        Route::get('/notify-setting', function(){
            return view('/configurations/notify-setting');
        });
        Route::get('/undisplay-message-list', function(){
            return view('/configurations/undisplay-message-list');
        });
        Route::get('/message-template', function(){
            return view('/configurations/message-template');
        });
        Route::get('/creditcard-subscription', function(){
            return view('/configurations/creditcard-subscription');
        });
        Route::get('/footprint-setting', function(){
            return view('/configurations/footprint-setting');
        });
        Route::post('/update-email', ['as' => 'update.email', 'uses' => 'Admin\HomeController@postUpdateEmail']);
        Route::post('/update-tel', ['as' => 'update.tel', 'uses' => 'Admin\HomeController@postUpdateTel']);
        Route::post('/update-password', ['as' => 'update.password', 'uses' => 'Admin\HomeController@postUpdatePassword']);
        Route::post('/notify-setting', ['as' => 'notify.setting', 'uses' => 'Admin\HomeController@postNotifySetting']);
        Route::post('/message-template', ['as' => 'message.template', 'uses' => 'Admin\HomeController@postMessageTemplate']);
    });
    Route::post('/profile/comment/edit', ['as' => 'profile.comment.edit', 'uses' => 'Admin\HomeController@postProfileCommentEdit']);
    Route::post('/invitation/new-status', ['as' => 'users.invitation', 'uses' => 'Admin\HomeController@getInvationUser']);
    Route::post('/search', ['as' => 'user.search', 'uses' => 'Admin\HomeController@postSearch']);
});