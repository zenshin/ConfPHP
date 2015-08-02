<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use LaravelCaptcha\Integration\BotDetectCaptcha;
use App\Facades\MyAlert;

class ContactController extends Controller
{
// get captcha instance to handle for the contact page
    private function getContactCaptchaInstance() {
        // Captcha parameters
        $captchaConfig = [
            'CaptchaId' => 'ContactCaptcha', // a unique Id for the Captcha instance
            'UserInputId' => 'CaptchaCode', // Id of the Captcha code input textbox
            // path of the Captcha config file inside your Controllers folder
            'CaptchaConfigFilePath' => 'captcha_config/ContactCaptchaConfig.php',
        ];
        $captcha = BotDetectCaptcha::GetCaptchaInstance($captchaConfig);

        return $captcha;
    }

//Server Contact view:: we will create view in next step
    public function getContact(){
        $title = 'contact';
        // get contact captcha instance
        $captcha = $this->getContactCaptchaInstance();

        // passing Captcha Html to contact view
//        return view('contact', ['captchaHtml' => $captcha->Html()]);

        return View::make('contact.form', ['captchaHtml' => $captcha->Html()],compact('title'));
    }

    //Contact Form
    public function getContactUsForm(Request $request)
    {
        $title = 'contact';

        // get contact captcha instance
        $captcha = $this->getContactCaptchaInstance();

        // validate the user-entered Captcha code when the form is submitted
        $code = $request->input('CaptchaCode');
        $isHuman = $captcha->Validate($code);

        //Get all the data and store it inside Store Variable
        $data = $request->
        all();

        //Validation rules
        $rules = array(
            'email' => 'required|email',
            'message' => 'required'
        );

        //Validate data
        $validator = Validator::make($data, $rules);

        //If everything is correct than run passes.
        if ($validator->passes())
        {

            if (!$isHuman || $validator->fails()) {
                if (!$isHuman) {
                    $validator->errors()->add('CaptchaCode', 'Wrong code. Try again please.');
                }

                return redirect()
                    ->back()
                    ->withInput()
                    ->withErrors($validator->errors());
            }

            // Captcha validation passed
            // TODO: send email
            //Send email using Laravel send function
            Mail::send('contact.hello', $data, function ($message) use ($data) {
//email 'From' field: Get users email add and name
                $message->from($data['email']);
//email 'To' field: cahnge this to emails that you want to be notified.
                $message->to('tomfrom@yopmail.com', 'my name')->cc('tomfrom@yopmail.com')->subject('contact request');

            });
            return redirect()
                ->back()
                ->with('message', MyAlert::message('email envoyé avec succès!','success'));

        }
        else
        {
            return Redirect::to('/contact')->withErrors($validator);
        }
    }
}