<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\data;

use App\user;

use Session;

class StudentController extends Controller
{
    public function index(){
        $email = Session::get('student');
        $data = data::where('user_email',$email)->get();
    	return view('student/register',compact('data'));
    }

   public function register(){
        $email = Session::get('student');
        $data = data::where('user_email',$email)->get();
    	return view('student/view',compact('data'));
    }

    public function submit(Request $request){

        $data = new data;

        if (isset($request->sponsor_father)) {
            $data->sponsor_father    = $request->sponsor_father;
        }else{
            $data->sponsor_father    = "Insert data please";
        }
        if (isset($request->sponsor_mother)) {
            $data->sponsor_mother    = $request->sponsor_mother;
        }else{
            $data->sponsor_mother    = "Insert data please";
        }
        if (isset($request->sponsor_profession)) {
            $data->sponsor_profession    = $request->sponsor_profession;
        }else{
            $data->sponsor_profession    = "Insert data please";
        }
        if (isset($request->student_father)) {
            $data->student_father    = $request->student_father;
        }else{
            $data->student_father    = "Insert data please";
        }
        if (isset($request->student_mother)) {
            $data->student_mother    = $request->student_mother;
        }else{
            $data->student_mother    = "Insert data please";
        }

        if(isset($request->sponsor_dob)){
            $data->sponsor_dob    = $request->sponsor_dob;
        }else{
            $data->sponsor_dob    = "Insert data please";
        }
        
        if (isset($request->student_name)) {
            $data->student_name    = $request->student_name;
        }else{
            $data->student_name    = "Insert data please";
        }
        if (isset($request->date_of_birth)) {
            $data->date_of_birth    = $request->date_of_birth;
        }else{
            $data->date_of_birth    = "Insert data please";
        }
        if (isset($request->sex)) {
            $data->sex    = $request->sex;
        }else{
            $data->sex    = "Insert data please";
        }
        if (isset($request->phone_number)) {
            $data->phone_number    = $request->phone_number;
        }else{
            $data->phone_number    = "Insert data please";
        }
        if (isset($request->place_of_birth)) {
            $data->place_of_birth    = $request->place_of_birth;
        }else{
            $data->place_of_birth    = "Insert data please";
        }
        if (isset($request->birth_certificate_number)) {
            $data->birth_certificate_number    = $request->birth_certificate_number;
        }else{
            $data->birth_certificate_number    = "Insert data please";
        }
        if (isset($request->passport_number)) {
            $data->passport_number    = $request->passport_number;
        }else{
            $data->passport_number    = "Insert data please";
        }
        if (isset($request->issue_date)) {
            $data->issue_date    = $request->issue_date;
        }else{
            $data->issue_date    = "Insert data please";
        }
        if (isset($request->expiry_date)) {
            $data->expiry_date    = $request->expiry_date;
        }else{
            $data->expiry_date    = "Insert data please";
        }
        if (isset($request->student_permanent_address)) {
            $data->student_permanent_address    = $request->student_permanent_address;
        }else{
            $data->student_permanent_address    = "Insert data please";
        }
        if (isset($request->student_present_address)) {
            $data->student_present_address    = $request->student_present_address;
        }else{
            $data->student_present_address    = "Insert data please";
        }
        if (isset($request->student_father_dateof_birth)) {
            $data->student_father_dateof_birth    = $request->student_father_dateof_birth;
        }else{
            $data->student_father_dateof_birth    = "Insert data please";
        }
        if (isset($request->student_father_occupation)) {
            $data->student_father_occupation    = $request->student_father_occupation;
        }else{
            $data->student_father_occupation    = "Insert data please";
        }
        if (isset($request->student_father_permanent_address)) {
            $data->student_father_permanent_address    = $request->student_father_permanent_address;
        }else{
            $data->student_father_permanent_address    = "Insert data please";
        }
        if (isset($request->student_father_present_address)) {
            $data->student_father_present_address    = $request->student_father_present_address;
        }else{
            $data->student_father_present_address    = "Insert data please";
        }
        if (isset($request->student_father_office_address)) {
            $data->student_father_office_address    = $request->student_father_office_address;
        }else{
            $data->student_father_office_address    = "Insert data please";
        }
        if (isset($request->student_mother_dateof_birth)) {
            $data->student_mother_dateof_birth    = $request->student_mother_dateof_birth;
        }else{
            $data->student_mother_dateof_birth    = "Insert data please";
        }
        if (isset($request->student_mother_occupation)) {
            $data->student_mother_occupation    = $request->student_mother_occupation;
        }else{
            $data->student_mother_occupation    = "Insert data please";
        }
        if (isset($request->student_mother_permanent_address)) {
            $data->student_mother_permanent_address    = $request->student_mother_permanent_address;
        }else{
            $data->student_mother_permanent_address    = "Insert data please";
        }
        if (isset($request->student_mother_present_address)) {
            $data->student_mother_present_address    = $request->student_mother_present_address;
        }else{
            $data->student_mother_present_address    = "Insert data please";
        }
        if (isset($request->student_mother_office_address)) {
            $data->student_mother_office_address    = $request->student_mother_office_address;
        }else{
            $data->student_mother_office_address    = "Insert data please";
        }
        if (isset($request->student_brother_dateof_birth)) {
            $data->student_brother_dateof_birth    = $request->student_brother_dateof_birth;
        }else{
            $data->student_brother_dateof_birth    = "Insert data please";
        }
        if (isset($request->student_brother_occupation)) {
            $data->student_brother_occupation    = $request->student_brother_occupation;
        }else{
            $data->student_brother_occupation    = "Insert data please";
        }
        if (isset($request->student_brother_permanent_address)) {
            $data->student_brother_permanent_address    = $request->student_brother_permanent_address;
        }else{
            $data->student_brother_permanent_address    = "Insert data please";
        }
        if (isset($request->student_brother_present_address)) {
            $data->student_brother_present_address    = $request->student_brother_present_address;
        }else{
            $data->student_brother_present_address    = "Insert data please";
        }
        if (isset($request->student_brother_office_address)) {
            $data->student_brother_office_address    = $request->student_brother_office_address;
        }else{
            $data->student_brother_office_address    = "Insert data please";
        }
        if (isset($request->student_sister_dateof_birth)) {
            $data->student_sister_dateof_birth    = $request->student_sister_dateof_birth;
        }else{
            $data->student_sister_dateof_birth    = "Insert data please";
        }
        if (isset($request->student_sister_occupation)) {
            $data->student_sister_occupation    = $request->student_sister_occupation;
        }else{
            $data->student_sister_occupation    = "Insert data please";
        }
        if (isset($request->student_sister_permanent_address)) {
            $data->student_sister_permanent_address    = $request->student_sister_permanent_address;
        }else{
            $data->student_sister_permanent_address    = "Insert data please";
        }
        if (isset($request->student_sister_present_address)) {
            $data->student_sister_present_address    = $request->student_sister_present_address;
        }else{
            $data->student_sister_present_address    = "Insert data please";
        }
        if (isset($request->student_sister_office_address)) {
            $data->student_sister_office_address    = $request->student_sister_office_address;
        }else{
            $data->student_sister_office_address    = "Insert data please";
        }
        if (isset($request->student_others_dateof_birth)) {
            $data->student_others_dateof_birth    = $request->student_others_dateof_birth;
        }else{
            $data->student_others_dateof_birth    = "Insert data please";
        }
        if (isset($request->student_others_occupation)) {
            $data->student_others_occupation    = $request->student_others_occupation;
        }else{
            $data->student_others_occupation    = "Insert data please";
        }
        if (isset($request->student_others_permanent_address)) {
            $data->student_others_permanent_address    = $request->student_others_permanent_address;
        }else{
            $data->student_others_permanent_address    = "Insert data please";
        }
        if (isset($request->student_others_present_address)) {
            $data->student_others_present_address    = $request->student_others_present_address;
        }else{
            $data->student_others_present_address    = "Insert data please";
        }
        if (isset($request->student_others_office_address)) {
            $data->student_others_office_address    = $request->student_others_office_address;
        }else{
            $data->student_others_office_address    = "Insert data please";
        }
        if (isset($request->student_others2_dateof_birth)) {
            $data->student_others2_dateof_birth    = $request->student_others2_dateof_birth;
        }else{
            $data->student_others2_dateof_birth    = "Insert data please";
        }
        if (isset($request->student_others2_occupation)) {
            $data->student_others2_occupation    = $request->student_others2_occupation;
        }else{
            $data->student_others2_occupation    = "Insert data please";
        }
        if (isset($request->student_others2_permanent_address)) {
            $data->student_others2_permanent_address    = $request->student_others2_permanent_address;
        }else{
            $data->student_others2_permanent_address    = "Insert data please";
        }
        if (isset($request->student_others2_present_address)) {
            $data->student_others2_present_address    = $request->student_others2_present_address;
        }else{
            $data->student_others2_present_address    = "Insert data please";
        }
        if (isset($request->student_others2_office_address)) {
            $data->student_others2_office_address    = $request->student_others2_office_address;
        }
        if (isset($request->sponsor_name)) {
            $data->sponsor_name    = $request->sponsor_name;
        }else{
            $data->sponsor_name    = "Insert data please";
        }
        if (isset($request->relation_with_sponsor)) {
            $data->relation_with_sponsor    = $request->relation_with_sponsor;
        }else{
            $data->relation_with_sponsor    = "Insert data please";
        }
        if (isset($request->permanent_address)) {
            $data->permanent_address    = $request->permanent_address;
        }else{
            $data->permanent_address    = "Insert data please";
        }
        if (isset($request->present_address)) {
            $data->present_address    = $request->present_address;
        }else{
            $data->present_address    = "Insert data please";
        }
        if (isset($request->office_address)) {
            $data->office_address    = $request->office_address;
        }else{
            $data->office_address    = "Insert data please";
        }
        if (isset($request->sponsor_nid_permanent_address)) {
            $data->sponsor_nid_permanent_address    = $request->sponsor_nid_permanent_address;
        }else{
            $data->sponsor_nid_permanent_address    = "Insert data please";
        }
        if (isset($request->sponsor_nid_present_address)) {
            $data->sponsor_nid_present_address    = $request->sponsor_nid_present_address;
        }else{
            $data->sponsor_nid_present_address    = "Insert data please";
        }
        if (isset($request->sponsor_nid_office_address)) {
            $data->sponsor_nid_office_address    = $request->sponsor_nid_office_address;
        }else{
            $data->sponsor_nid_office_address    = "Insert data please";
        }
        if (isset($request->sponsor_trade_license_permanent_address)) {
            $data->sponsor_trade_license_permanent_address    = $request->sponsor_trade_license_permanent_address;
        }else{
            $data->sponsor_trade_license_permanent_address    = "Insert data please";
        }
        if (isset($request->sponsor_trade_license_present_address)) {
            $data->sponsor_trade_license_present_address    = $request->sponsor_trade_license_present_address;
        }else{
            $data->sponsor_trade_license_present_address    = "Insert data please";
        }
        if (isset($request->sponsor_trade_license_office_address)) {
            $data->sponsor_trade_license_office_address    = $request->sponsor_trade_license_office_address;
        }else{
            $data->sponsor_trade_license_office_address    = "Insert data please";
        }
        if (isset($request->sponsor_job_certificate_permanent_address)) {
            $data->sponsor_job_certificate_permanent_address    = $request->sponsor_job_certificate_permanent_address;
        }else{
            $data->sponsor_job_certificate_permanent_address    = "Insert data please";
        }
        if (isset($request->sponsor_job_certificate_present_address)) {
            $data->sponsor_job_certificate_present_address    = $request->sponsor_job_certificate_present_address;
        }else{
            $data->sponsor_job_certificate_present_address    = "Insert data please";
        }
        if (isset($request->sponsor_job_certificate_office_address)) {
            $data->sponsor_job_certificate_office_address    = $request->sponsor_job_certificate_office_address;
        }else{
            $data->sponsor_job_certificate_office_address    = "Insert data please";
        }
        if (isset($request->sponsor_tin_permanent_address)) {
            $data->sponsor_tin_permanent_address    = $request->sponsor_tin_permanent_address;
        }else{
            $data->sponsor_tin_permanent_address    = "Insert data please";
        }
        if (isset($request->sponsor_tin_present_address)) {
            $data->sponsor_tin_present_address    = $request->sponsor_tin_present_address;
        }else{
            $data->sponsor_tin_present_address    = "Insert data please";
        }
        if (isset($request->sponsor_tin_office_address)) {
            $data->sponsor_tin_office_address    = $request->sponsor_tin_office_address;
        }else{
            $data->sponsor_tin_office_address    = "Insert data please";
        }
        if (isset($request->sponsor_income_certificate_permanent_address)) {
            $data->sponsor_income_certificate_permanent_address    = $request->sponsor_income_certificate_permanent_address;
        }else{
            $data->sponsor_income_certificate_permanent_address    = "Insert data please";
        }
        if (isset($request->sponsor_income_certificate_present_address)) {
            $data->sponsor_income_certificate_present_address    = $request->sponsor_income_certificate_present_address;
        }else{
            $data->sponsor_income_certificate_present_address    = "Insert data please";
        }
        if (isset($request->sponsor_income_certificate_office_address)) {
            $data->sponsor_income_certificate_office_address    = $request->sponsor_income_certificate_office_address;
        }else{
            $data->sponsor_income_certificate_office_address    = "Insert data please";
        }
        if (isset($request->sponsor_tax_permanent_address)) {
            $data->sponsor_tax_permanent_address    = $request->sponsor_tax_permanent_address;
        }else{
            $data->sponsor_tax_permanent_address    = "Insert data please";
        }
        if (isset($request->sponsor_tax_present_address)) {
            $data->sponsor_tax_present_address    = $request->sponsor_tax_present_address;
        }else{
            $data->sponsor_tax_present_address    = "Insert data please";
        }
        if (isset($request->sponsor_tax_office_address)) {
            $data->sponsor_tax_office_address    = $request->sponsor_tax_office_address;
        }else{
            $data->sponsor_tax_office_address    = "Insert data please";
        }
        if (isset($request->annual_income_year_1)) {
            $data->annual_income_year_1    = $request->annual_income_year_1;
        }else{
            $data->annual_income_year_1    = "Insert data please";
        }
        if (isset($request->annual_income_year_2)) {
            $data->annual_income_year_2    = $request->annual_income_year_2;
        }else{
            $data->annual_income_year_2    = "Insert data please";
        }
        if (isset($request->annual_income_year_3)) {
            $data->annual_income_year_3    = $request->annual_income_year_3;
        }else{
            $data->annual_income_year_3    = "Insert data please";
        }
        if (isset($request->annual_incometax_year_1)) {
            $data->annual_incometax_year_1    = $request->annual_incometax_year_1;
        }else{
            $data->annual_incometax_year_1    = "Insert data please";
        }
        if (isset($request->annual_incometax_year_2)) {
            $data->annual_incometax_year_2    = $request->annual_incometax_year_2;
        }else{
            $data->annual_incometax_year_2    = "Insert data please";
        }
        if (isset($request->annual_incometax_year_3)) {
            $data->annual_incometax_year_3    = $request->annual_incometax_year_3;
        }else{
            $data->annual_incometax_year_3    = "Insert data please";
        }
        if (isset($request->primary_school_course_start_date)) {
            $data->primary_school_course_start_date    = $request->primary_school_course_start_date;
        }else{
            $data->primary_school_course_start_date    = "Insert data please";
        }
        if (isset($request->primary_school_graduation_date)) {
            $data->primary_school_graduation_date    = $request->primary_school_graduation_date;
        }else{
            $data->primary_school_graduation_date    = "Insert data please";
        }
        if (isset($request->primary_school_course_duration)) {
            $data->primary_school_course_duration    = $request->primary_school_course_duration;
        }else{
            $data->primary_school_course_duration    = "Insert data please";
        }
        if (isset($request->primary_school_education_gap)) {
            $data->primary_school_education_gap    = $request->primary_school_education_gap;
        }else{
            $data->primary_school_education_gap    = "Insert data please";
        }
        if (isset($request->SSC_course_start_date)) {
            $data->SSC_course_start_date    = $request->SSC_course_start_date;
        }else{
            $data->SSC_course_start_date    = "Insert data please";
        }
        if (isset($request->SSC_graduation_date)) {
            $data->SSC_graduation_date    = $request->SSC_graduation_date;
        }else{
            $data->SSC_graduation_date    = "Insert data please";
        }
        if (isset($request->SSC_course_duration)) {
            $data->SSC_course_duration    = $request->SSC_course_duration;
        }else{
            $data->SSC_course_duration    = "Insert data please";
        }
        if (isset($request->SSC_education_gap)) {
            $data->SSC_education_gap    = $request->SSC_education_gap;
        }else{
            $data->SSC_education_gap    = "Insert data please";
        }
        if (isset($request->HSC_course_start_date)) {
            $data->HSC_course_start_date    = $request->HSC_course_start_date;
        }else{
            $data->HSC_course_start_date    = "Insert data please";
        }
        if (isset($request->HSC_graduation_date)) {
            $data->HSC_graduation_date    = $request->HSC_graduation_date;
        }else{
            $data->HSC_graduation_date    = "Insert data please";
        }
        if (isset($request->HSC_course_duration)) {
            $data->HSC_course_duration    = $request->HSC_course_duration;
        }else{
            $data->HSC_course_duration    = "Insert data please";
        }
        if (isset($request->HSC_education_gap)) {
            $data->HSC_education_gap    = $request->HSC_education_gap;
        }else{
            $data->HSC_education_gap    = "Insert data please";
        }
        if (isset($request->bachelor_course_start_date)) {
            $data->bachelor_course_start_date    = $request->bachelor_course_start_date;
        }else{
            $data->bachelor_course_start_date    = "Insert data please";
        }
        if (isset($request->bachelor_graduation_date)) {
            $data->bachelor_graduation_date    = $request->bachelor_graduation_date;
        }else{
            $data->bachelor_graduation_date    = "Insert data please";
        }
        if (isset($request->bachelor_course_duration)) {
            $data->bachelor_course_duration    = $request->bachelor_course_duration;
        }else{
            $data->bachelor_course_duration    = "Insert data please";
        }
        if (isset($request->bachelor_education_gap)) {
            $data->bachelor_education_gap    = $request->bachelor_education_gap;
        }else{
            $data->bachelor_education_gap    = "Insert data please";
        }
        if (isset($request->masters_course_start_date)) {
            $data->masters_course_start_date    = $request->masters_course_start_date;
        }else{
            $data->masters_course_start_date    = "Insert data please";
        }
        
        if (isset($request->masters_graduation_date)) {
            $data->masters_graduation_date    = $request->masters_graduation_date;
        }else{
            $data->masters_graduation_date    = "Insert data please";
        }
        if (isset($request->masters_course_duration)) {
            $data->masters_course_duration    = $request->masters_course_duration;
        }else{
            $data->masters_course_duration    = "Insert data please";
        }
        if (isset($request->masters_education_gap)) {
            $data->masters_education_gap    = $request->masters_education_gap;
        }else{
            $data->masters_education_gap    = "Insert data please";
        }
        
        if (isset($request->others_graduation_date)) {
            $data->others_graduation_date    = $request->others_graduation_date;
        }else{
            $data->others_graduation_date    = "Insert data please";
        }
        if (isset($request->others_course_start_date)) {
            $data->others_course_start_date    = $request->others_course_start_date;
        }else{
            $data->others_course_start_date    = "Insert data please";
        }
        if (isset($request->others_course_duration)) {
            $data->others_course_duration    = $request->others_course_duration;
        }else{
            $data->others_course_duration    = "Insert data please";
        }
        if (isset($request->others_education_gap)) {
            $data->others_education_gap    = $request->others_education_gap;
        }else{
            $data->others_education_gap    = "Insert data please";
        }




        if (isset($request->japanese_language_school_name)) {
            $data->japanese_language_school_name    = $request->japanese_language_school_name;
        }else{
            $data->japanese_language_school_name    = "Insert data please";
        }
        if (isset($request->japanese_school_address)) {
            $data->japanese_school_address    = $request->japanese_school_address;
        }else{
            $data->japanese_school_address    = "Insert data please";
        }
        if (isset($request->japanese_course_start_date)) {
            $data->japanese_course_start_date    = $request->japanese_course_start_date;
        }else{
            $data->japanese_course_start_date    = "Insert data please";
        }
        if (isset($request->japanese_graduation_date)) {
            $data->japanese_graduation_date    = $request->japanese_graduation_date;
        }else{
            $data->japanese_graduation_date    = "Insert data please";
        }
        if (isset($request->japanese_course_duration)) {
            $data->japanese_course_duration    = $request->japanese_course_duration;
        }else{
            $data->japanese_course_duration    = "Insert data please";
        }
        if (isset($request->sponsor_phone_number)) {
            $data->sponsor_phone_number    = $request->sponsor_phone_number;
        }else{
            $data->sponsor_phone_number    = "Insert data please";
        }
        if (isset($request->sponsor_office_phone_number)) {
            $data->sponsor_office_phone_number    = $request->sponsor_office_phone_number;
        }else{
            $data->sponsor_office_phone_number    = "Insert data please";
        }
        if (isset($request->student_father_phone_number)) {
            $data->student_father_phone_number   = $request->student_father_phone_number;
        }else{
            $data->student_father_phone_number    = "Insert data please";
        }
        if (isset($request->student_mother_phone_number)) {
            $data->student_mother_phone_number    = $request->student_mother_phone_number;
        }else{
            $data->student_mother_phone_number    = "Insert data please";
        }
        if (isset($request->sponsor_trade_license_number)) {
            $data->sponsor_trade_license_number    = $request->sponsor_trade_license_number;
        }else{
            $data->sponsor_trade_license_number    = "Insert data please";
        }
        if (isset($request->sponsor_nid_number)) {
            $data->sponsor_nid_number    = $request->sponsor_nid_number;
        }else{
            $data->sponsor_nid_number    = "Insert data please";
        }
        if (isset($request->sponsor_tin_number)) {
            $data->sponsor_tin_number    = $request->sponsor_tin_number;
        }else{
            $data->sponsor_tin_number    = "Insert data please";
        }
        if (isset($request->sponsor_job_designation)) {
            $data->sponsor_job_designation    = $request->sponsor_job_designation;
        }else{
            $data->sponsor_job_designation    = "Insert data please";
        }
        if (isset($request->sponsor_job_starting_date)) {
            $data->sponsor_job_starting_date   = $request->sponsor_job_starting_date;
        }else{
            $data->sponsor_job_starting_date    = "Insert data please";
        }
        if (isset($request->sponsor_job_to_till_date)) {
            $data->sponsor_job_to_till_date    = $request->sponsor_job_to_till_date;
        }else{
            $data->sponsor_job_to_till_date    = "Insert data please";
        }
        if (isset($request->sponsor_yearly_basic_salary)) {
            $data->sponsor_yearly_basic_salary    = $request->sponsor_yearly_basic_salary;
        }else{
            $data->sponsor_yearly_basic_salary    = "Insert data please";
        }
        if (isset($request->sponsor_travel_allowance)) {
            $data->sponsor_travel_allowance    = $request->sponsor_travel_allowance;
        }else{
            $data->sponsor_travel_allowance    = "Insert data please";
        }
        if (isset($request->sponsor_insurance)) {
            $data->sponsor_insurance    = $request->sponsor_insurance;
        }else{
            $data->sponsor_insurance    = "Insert data please";
        }
        if (isset($request->sponsor_yearly_bonus)) {
            $data->sponsor_yearly_bonus    = $request->sponsor_yearly_bonus;
        }else{
            $data->sponsor_yearly_bonus    = "Insert data please";
        }
        if (isset($request->sponsor_housing_allowance)) {
            $data->sponsor_housing_allowance    = $request->sponsor_housing_allowance;
        }else{
            $data->sponsor_housing_allowance    = "Insert data please";
        }
        if (isset($request->sponsor_others)) {
            $data->sponsor_others    = $request->sponsor_others;
        }else{
            $data->sponsor_others    = "Insert data please";
        }
        if (isset($request->student_job_designation)) {
            $data->student_job_designation    = $request->student_job_designation;
        }else{
            $data->student_job_designation    = "Insert data please";
        }
        if (isset($request->student_job_starting_date)) {
            $data->student_job_starting_date    = $request->student_job_starting_date;
        }else{
            $data->student_job_starting_date    = "Insert data please";
        }
        if (isset($request->student_job_to_till_date)) {
            $data->student_job_to_till_date    = $request->student_job_to_till_date;
        }else{
            $data->student_job_to_till_date    = "Insert data please";
        }
        if (isset($request->student_yearly_basic_salary)) {
            $data->student_yearly_basic_salary    = $request->student_yearly_basic_salary;
        }else{
            $data->student_yearly_basic_salary    = "Insert data please";
        }
        if (isset($request->student_travel_allowance)) {
            $data->student_travel_allowance    = $request->student_travel_allowance;
        }else{
            $data->student_travel_allowance    = "Insert data please";
        }



        if (isset($request->student_insurance)) {
            $data->student_insurance    = $request->student_insurance;
        }else{
            $data->student_insurance    = "Insert data please";
        }
        if (isset($request->student_yearly_bonus)) {
            $data->student_yearly_bonus    = $request->student_yearly_bonus;
        }else{
            $data->student_yearly_bonus    = "Insert data please";
        }
        if (isset($request->student_housing_allowance)) {
            $data->student_housing_allowance    = $request->student_housing_allowance;
        }else{
            $data->student_housing_allowance    = "Insert data please";
        }
        if (isset($request->student_others)) {
            $data->student_others    = $request->student_others;
        }else{
            $data->student_others    = "Insert data please";
        }
        if (isset($request->sponsor_bank_name)) {
            $data->sponsor_bank_name    = $request->sponsor_bank_name;
        }else{
            $data->sponsor_bank_name    = "Insert data please";
        }
        if (isset($request->sponsor_bank_branch_name)) {
            $data->sponsor_bank_branch_name    = $request->sponsor_bank_branch_name;
        }else{
            $data->sponsor_bank_branch_name    = "Insert data please";
        }
        if (isset($request->sponsor_bank_address)) {
            $data->sponsor_bank_address    = $request->sponsor_bank_address;
        }else{
            $data->sponsor_bank_address    = "Insert data please";
        }
        if (isset($request->sponsor_bank_phone_number)) {
            $data->sponsor_bank_phone_number    = $request->sponsor_bank_phone_number;
        }else{
            $data->sponsor_bank_phone_number    = "Insert data please";
        }
        if (isset($request->sponsor_bank_account_number)) {
            $data->sponsor_bank_account_number    = $request->sponsor_bank_account_number;
        }else{
            $data->sponsor_bank_account_number    = "Insert data please";
        }



        if (isset($request->sponsor_bank_account_type)) {
            $data->sponsor_bank_account_type    = $request->sponsor_bank_account_type;
        }else{
            $data->sponsor_bank_account_type    = "Insert data please";
        }
        if (isset($request->sponsor_bank_account_balance)) {
            $data->sponsor_bank_account_balance    = $request->sponsor_bank_account_balance;
        }else{
            $data->sponsor_bank_account_balance    = "Insert data please";
        }
        if (isset($request->sponsor_bank_account_balance_in_word)) {
            $data->sponsor_bank_account_balance_in_word    = $request->sponsor_bank_account_balance_in_word;
        }else{
            $data->sponsor_bank_account_balance_in_word    = "Insert data please";
        }
        if (isset($request->date_of_bank_statement)) {
            $data->date_of_bank_statement    = $request->date_of_bank_statement;
        }else{
            $data->date_of_bank_statement    = "Insert data please";
        }
        if (isset($request->student_running_college_university_name)) {
            $data->student_running_college_university_name    = $request->student_running_college_university_name;
        }else{
            $data->student_running_college_university_name    = "Insert data please";
        }
        if (isset($request->season_year)) {
            $data->season_year    = $request->season_year;
        }else{
            $data->season_year    = "Insert data please";
        }
        if (isset($request->roll_number)) {
            $data->roll_number    = $request->roll_number;
        }else{
            $data->roll_number    = "Insert data please";
        }
        if (isset($request->student_subject_name)) {
            $data->student_subject_name    = $request->student_subject_name;
        }else{
            $data->student_subject_name    = "Insert data please";
        }
        if (isset($request->student_date_of_certificate)) {
            $data->student_date_of_certificate    = $request->student_date_of_certificate;
        }else{
            $data->student_date_of_certificate    = "Insert data please";
        }
        if (isset($request->student_student_id_number)) {
            $data->student_student_id_number    = $request->student_student_id_number;
        }else{
            $data->student_student_id_number    = "Insert data please";
        }


        if (isset($request->primarys)) {
            $data->primarys    = $request->primarys;
        }else{
            $data->primarys    = "Insert data please";
        }
        if (isset($request->ssc)) {
            $data->ssc    = $request->ssc;
        }else{
            $data->ssc    = "Insert data please";
        }
        if (isset($request->hsc)) {
            $data->hsc    = $request->hsc;
        }else{
            $data->hsc    = "Insert data please";
        }
        if (isset($request->bachelor)) {
            $data->bachelor    = $request->bachelor;
        }else{
            $data->bachelor    = "Insert data please";
        }
        if (isset($request->master)) {
            $data->master    = $request->master;
        }else{
            $data->master    = "Insert data please";
        }
        if (isset($request->others)) {
            $data->others    = $request->others;
        }else{
            $data->others    = "Insert data please";
        }
        if (isset($request->student_brother)) {
            $data->student_brother    = $request->student_brother;
        }else{
            $data->student_brother    = "Insert data please";
        }
        if (isset($request->student_sister)) {
            $data->student_sister    = $request->student_sister;
        }else{
            $data->student_sister    = "Insert data please";
        }
        if (isset($request->student_other)) {
            $data->student_other    = $request->student_other;
        }else{
            $data->student_other    = "Insert data please";
        }

        

        $data->visibility       = 1;

        $data->user_email           = Session::get('student');

        $warrior = data::where('allocated_id','warrior')->count();

        $champion = data::where('allocated_id','champion')->count();

        $solder = data::where('allocated_id','solder')->count();

        if($warrior == 0 || $warrior < $champion || $champion < $solder){

            $data->allocated_id     = "warrior";
        
        }elseif($champion < $warrior || $champion < $solder){

            $data->allocated_id     = "champion";

        }elseif($solder < $warrior || $solder < $champion){

            $data->allocated_id     = "solder";

        }else{

            $data->allocated_id     = "warrior";
        
        }

        

        $data->save();

        Session::flash('inserted', 'Inserted Successfully!'); 
        return redirect('student/view');
    	
    }

}
