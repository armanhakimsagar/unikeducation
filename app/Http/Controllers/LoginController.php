<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\user;
use Session;
use Validator;
use Mail;

class LoginController extends Controller
{
    public function MailSend(Request $request){
        $title = $request->title;
        $textarea = $request->textarea;
        $email = $request->email;
        $mail = Mail::send('emails.send', ['title' => $title, 'content' => $textarea,'email' =>$email], function ($message){
        	$message->from("student@unikedubd.com", 'Unik Education');
        	$message->subject('Unik Education Website Message');
        	$message->to('info@unikedubd.com');
        });
        Session::flash('message', 'Email Send Successfully!'); 
        return redirect('/#contact');
    }
    
    public function RegistrationVerify(Request $request){
                
        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $verification_code = $request->code;
        
        return view('verify',compact('name','email','phone','verification_code'));
        
    }
    public function RegistrationSubmit(Request $request){
        
       //dd($request->all());
        if($request->verification_code != $request->submit_number){
            Session::flash('message', 'Verification Code Not Match!'); 
            return redirect('login');
        }
        $validator = Validator::make($request->all(),[
            'phone' => 'required|unique:users'
        ]);
        if ($validator->fails()) {
        return redirect('login')
                        ->withErrors($validator)
                        ->withInput();
        } else {
            $registration = new user;
            $registration->name = $request->name;
            $registration->email = $request->email;
            $registration->phone = $request->phone;
            $registration->verification_flag = 0;
            $registration->role = 0;
            $registration->save();
            Session::flash('message', 'Account Created Successfully . Please Log In Now!'); 
            return redirect('/');
        }
        
    }
    
    public function studentLogin(Request $request){

        $student = user::where([
                    ['name', '=', $request->name],
                    ['email', '=', $request->email],
                    ['phone', '=', $request->phone]
                ])->get();

        if (count($student) == 1) {
            foreach($student as $students){
                $email = $students->email;
            }
            Session::put('student', $email);
            return redirect('student/view');
        }else{
            Session::flash('emessage', "Username , Phone Number Or Email Not Match");
        	return redirect('/login');
        }

    }

    public function studentLogout(){
        Session::forget('student');
        Session::forget('warrior');
        Session::forget('unikadmin');
        Session::forget('champion');
        Session::forget('solder');
        Session::flush();
        return redirect('/');
	}

	public function adminLogin(Request $request){

        $warrior = user::where([
                    ['name', '=', $request->name],
                    ['email', '=', $request->email],
                    ['phone', '=', $request->phone],
                    ['role', '=', '1'],
                ])->get();

        $champion = user::where([
                    ['name', '=', $request->name],
                    ['email', '=', $request->email],
                    ['phone', '=', $request->phone],
                    ['role', '=', '2'],
                ])->get();

        $solder = user::where([
                    ['name', '=', $request->name],
                    ['email', '=', $request->email],
                    ['phone', '=', $request->phone],
                    ['role', '=', '3'],
                ])->get();

        $unikadmin = user::where([
                    ['name', '=', $request->name],
                    ['email', '=', $request->email],
                    ['phone', '=', $request->phone],
                    ['role', '=', '4'],
                ])->get();


        if (count($warrior) == 1) {

            session(['warrior' => 'warrior']);
            return redirect('warrior/list');

        } elseif (count($champion) == 1) {

            session(['champion' => 'champion']);
            return redirect('champion/list');

        } elseif (count($solder) == 1) {

            session(['solder' => 'solder']);
            return redirect('solder/list');

        }elseif (count($unikadmin) == 1) {

            session(['admin' => 'admin']);
            return redirect('admin/registration');

        }else {
            
            return redirect('/unikedu');

		}
	}
	
	public function sms_verify(Request $request){
	    $user = "Unikeducation";
        $pass = "88A1Q16o";
        $sid = "UnikeduEng";
        $verification_code = $request->verification_code;
        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $code = "Your verification number :".$verification_code;
        //dd($request->all());
        $url="http://sms.sslwireless.com/pushapi/dynamic/server.php";
        $param="user=$user&pass=$pass&sms[0][0]= $phone &sms[0][1]=".urlencode($code)."&sms[0][2]=123456789&sid=$sid";
        
        $crl = curl_init();
        curl_setopt($crl,CURLOPT_SSL_VERIFYPEER,FALSE);
        curl_setopt($crl,CURLOPT_SSL_VERIFYHOST,2);
        curl_setopt($crl,CURLOPT_URL,$url);
        curl_setopt($crl,CURLOPT_HEADER,0);
        curl_setopt($crl,CURLOPT_RETURNTRANSFER,1);
        curl_setopt($crl,CURLOPT_POST,1);
        curl_setopt($crl,CURLOPT_POSTFIELDS,$param);
        $response = curl_exec($crl);
        curl_close($crl);
        Session::flash('message', "Verification Code Send To This Number : $phone");
        return view('verify',compact('user','pass','name','pass','sid','verification_code','phone','email'));
	}

}
