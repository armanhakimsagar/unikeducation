<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\user;

use App\data;

use Session;

class AdminController extends Controller
{
    public function list1(){
        $warrior = data::where("allocated_id","warrior")->get();
        return view('stuff/warrior',compact('warrior'));
    }

    public function details1($id){
        $warrior_id = data::where("id",$id)->get();
        return view('stuff/stuff_details',compact('warrior_id'));
    }

    public function admin_update(Request $request){
        
        $data = data::find($request->old_id);


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

        
        $data->save();

        $allocated_admin = data::where("allocated_admin","1")->get();
        return view('admin/approve',compact('allocated_admin'));
    }

    public function index(){

        $allocated_admin = data::where("allocated_admin","1")->get();
        return view('admin/approve',compact('allocated_admin'));
    }

    public function reporting(){
        $allocated_admin = data::where("allocated_admin","1")->get();
        return view('admin/reporting',compact('allocated_admin'));
    }

    public function details_form($id){
        $admin = data::where("id",$id)->get();
        return view('admin/details_form',compact('admin'));
    }

    public function report($id){
        $select = data::find($id);
    	return view('admin/report',compact('select'));
    }
    
    public function docs($id){
        $select = data::find($id);
        $std_name = $select->student_name;
        $student_father_dateof_birth = $select->student_father_dateof_birth;
        $student_father_occupation = $select->student_father_occupation;
        $student_father_permanent_address = $select->student_father_permanent_address;
        $student_father_present_address = $select->student_father_present_address;
        $student_mother_dateof_birth = $select->student_mother_dateof_birth;
        $student_mother_occupation = $select->student_mother_occupation;
        $student_mother_permanent_address = $select->student_mother_permanent_address;
        $student_mother_present_address = $select->student_mother_present_address;
        $student_brother_dateof_birth = $select->student_brother_dateof_birth;
        $student_brother_occupation = $select->student_brother_occupation;
        $student_brother_permanent_address = $select->student_brother_permanent_address;
        $student_brother_present_address = $select->student_brother_present_address;
        $student_sister_dateof_birth = $select->student_sister_dateof_birth;
        $student_sister_occupation = $select->student_sister_occupation;
        $student_sister_permanent_address = $select->student_sister_permanent_address;
        $student_sister_present_address = $select->student_sister_present_address;
        $student_father = $select->student_father;
        $student_mother = $select->student_mother;
        $student_sister = $select->student_sister;
        $student_brother = $select->student_brother;
    	return view('admin/docs',compact('student_brother','student_sister','std_name','student_father_dateof_birth','student_father_occupation','student_father_permanent_address','student_father_present_address','student_mother_dateof_birth','student_mother_occupation','student_mother_permanent_address','student_mother_present_address','student_brother_dateof_birth','student_brother_occupation','student_brother_permanent_address','student_brother_present_address','student_sister_dateof_birth','student_sister_occupation','student_sister_permanent_address','student_sister_present_address','student_father','student_mother'));
    }

    public function guarantor_report($id){
        $select = data::find($id);
        $std_name = $select->student_name;
        $permanent_address = $select->permanent_address;
        $phone_number = $select->phone_number;
        $date_of_birth = $select->date_of_birth;
        $sex = $select->sex;
        $student_permanent_address = $select->student_permanent_address;
        $student_present_address = $select->student_present_address;
        $sponsor_name = $select->sponsor_name;
        $sponsor_tin_present_address = $select->sponsor_tin_present_address;
        $relation_with_sponsor = $select->relation_with_sponsor;
        $sponsor_tin_permanent_address = $select->sponsor_tin_permanent_address;
        $student_father = $select->student_father;
        $student_mother = $select->student_mother;
        $sponsor_bank_phone_number = $select->sponsor_bank_phone_number;
        return view('admin/guarantor_report',compact('std_name','sponsor_name','permanent_address','phone_number','date_of_birth','sex','student_permanent_address','student_present_address','sponsor_name','sponsor_tin_present_address','relation_with_sponsor','sponsor_tin_permanent_address','student_father','student_mother','sponsor_bank_phone_number'));
    }

    public function income_report($id){
        //dd();
        $select = data::find($id);
        $sponsor_name = $select->sponsor_name;
        $sponsor_tin_present_address = $select->sponsor_tin_present_address;
        $sponsor_phone_number = $select->sponsor_phone_number;
        $sponsor_tin_permanent_address = $select->sponsor_tin_permanent_address;
        $sponsor_tin_number = $select->sponsor_tin_number;
        $annual_income_year_1 = $select->annual_income_year_1;
        $annual_income_year_2 = $select->annual_income_year_2;
        $annual_income_year_3 = $select->annual_income_year_3;
        $sponsor_father = $select->sponsor_father;
        $sponsor_mother = $select->sponsor_mother;
        $sponsor_profession = $select->sponsor_profession;
        return view('admin/income',compact('sponsor_profession','sponsor_name','sponsor_tin_present_address','sponsor_phone_number','sponsor_tin_permanent_address','sponsor_tin_number','annual_income_year_1','annual_income_year_2','annual_income_year_3','sponsor_father','sponsor_mother'));
    }

    public function tin_report($id){
        $select = data::find($id);
        $sponsor_name  = $select->sponsor_name;
        $sponsor_tin_present_address = $select->sponsor_tin_present_address;
        $sponsor_tin_permanent_address = $select->sponsor_tin_permanent_address;
        $sponsor_tin_number = $select->sponsor_tin_number;
        $sponsor_father = $select->sponsor_father;
        $sponsor_mother = $select->sponsor_mother;
        return view('admin/tin',compact('sponsor_name','sponsor_tin_present_address','sponsor_tin_permanent_address','sponsor_tin_number','sponsor_father','sponsor_mother'));
    }

    public function bank_report($id){
        $select = data::find($id);
        $sponsor_name = $select->sponsor_name;
        $sponsor_father = $select->sponsor_father;
        $sponsor_tin_present_address = $select->sponsor_tin_present_address;
        $sponsor_bank_account_number = $select->sponsor_bank_account_number;
        $sponsor_bank_account_balance = $select->sponsor_bank_account_balance;
        $sponsor_bank_account_balance_in_word = $select->sponsor_bank_account_balance_in_word;
        return view('admin/bank_report',compact('sponsor_name','sponsor_father','sponsor_tin_present_address','sponsor_bank_account_number','sponsor_bank_account_balance','sponsor_bank_account_balance_in_word'));
    }

    public function job_report($id){
        $select = data::find($id);
        $sponsor_job_designation = $select->sponsor_job_designation;
        $sponsor_name = $select->sponsor_name;
        $sponsor_job_designation = $select->sponsor_job_designation;
        $student_job_starting_date = $select->student_job_starting_date;
        $student_job_to_till_date = $select->student_job_to_till_date;
        $sponsor_yearly_basic_salary = $select->sponsor_yearly_basic_salary;
        $sponsor_travel_allowance = $select->sponsor_travel_allowance;
        $sponsor_insurance = $select->sponsor_insurance;
        $sponsor_housing_allowance = $select->sponsor_housing_allowance;
        $sponsor_yearly_bonus = $select->sponsor_yearly_bonus;
        $sponsor_others = $select->sponsor_others;
        $sponsor_father = $select->sponsor_father;
        return view('admin/job_certificate',compact('sponsor_job_designation','sponsor_name','sponsor_job_designation','student_job_starting_date','student_job_to_till_date','sponsor_yearly_basic_salary','sponsor_travel_allowance','sponsor_insurance','sponsor_housing_allowance','sponsor_yearly_bonus','sponsor_others','sponsor_father'));
    }

    public function std_birth_certificate($id){
        $select = data::find($id);
        $student_name = $select->student_name;
        $date_of_birth = $select->date_of_birth;
        $birth_certificate_number = $select->birth_certificate_number;
        $sex = $select->sex;
        $place_of_birth = $select->place_of_birth;
        $student_permanent_address = $select->student_permanent_address;
        $student_present_address = $select->student_present_address;
        $student_father = $select->student_father;
        $student_mother = $select->student_mother;
       return view('admin/student_birth_certificate',compact('student_name','date_of_birth','birth_certificate_number','sex','place_of_birth','student_permanent_address','student_present_address','student_father','student_mother'));
    }

    public function std_running_certificate($id){
       $select = data::find($id);
       $student_name = $select->student_name;
       $student_subject_name  = $select->student_subject_name;
       $student_running_college_university_name = $select->student_running_college_university_name;
       $season_year  = $select->season_year;
       $roll_number = $select->roll_number;
       $bachelor_course_duration = $select->bachelor_course_duration;
       $student_father = $select->student_father;
       $student_mother = $select->student_mother;
       return view('admin/student_running_certificate',compact('student_name','student_subject_name','student_running_college_university_name','season_year','roll_number','bachelor_course_duration','student_father','student_mother'));
    }

    public function std_job_certificate($id){
       $select = data::find($id);
       $student_name = $select->student_name;
       $student_job_starting_date = $select->student_job_starting_date;
       $student_job_to_till_date = $select->student_job_to_till_date;
       $student_job_designation = $select->student_job_designation;
       $student_father = $select->student_father;
       $student_mother = $select->student_mother;
       return view('admin/std_job_certificate',compact('student_name','student_job_starting_date','student_job_to_till_date','student_job_designation','student_father','student_mother'));
    }

    public function std_uni_certificate($id){
       $select = data::find($id);
       $student_name = $select->student_name;
       $student_subject_name = $select->student_subject_name;
       $roll_number = $select->roll_number;
       $season_year = $select->season_year;
       $bachelor_course_duration = $select->bachelor_course_duration;
       $student_father = $select->student_father;
       $student_mother = $select->student_mother;
       return view('admin/student_university_card',compact('student_name','student_subject_name','roll_number','season_year','bachelor_course_duration','student_father','student_mother'));
    }

    public function trade_certificate($id){
       $select = data::find($id);
       $sponsor_name = $select->sponsor_name;
       $student_father = $select->student_father;
       $student_mother = $select->student_mother;
       $sponsor_tin_present_address = $select->sponsor_tin_present_address;
       $sponsor_tin_permanent_address = $select->sponsor_tin_permanent_address;
       return view('admin/trade',compact('sponsor_name','student_father','student_mother','sponsor_tin_present_address','sponsor_tin_permanent_address'));
    }

    public function income_tax($id){

        $select = data::find($id);
        $sponsor_name = $select->sponsor_name;
        $sponsor_tin_present_address = $select->sponsor_tin_present_address;
        $sponsor_father  = $select->sponsor_father;
        $sponsor_tin_permanent_address = $select->sponsor_tin_permanent_address;
        $sponsor_tin_number = $select->sponsor_tin_number;
        $annual_incometax_year_1 = $select->annual_incometax_year_1;
        $annual_incometax_year_2 = $select->annual_incometax_year_2;
        $annual_incometax_year_3 = $select->annual_incometax_year_3;
        $annual_income_year_1 = $select->annual_income_year_1;
        $annual_income_year_2 = $select->annual_income_year_2;
        $annual_income_year_3 = $select->annual_income_year_3;
        return view('admin/income_tax',compact('sponsor_name','sponsor_tin_present_address','sponsor_father','sponsor_tin_permanent_address','sponsor_tin_number','annual_incometax_year_1','annual_incometax_year_2','annual_incometax_year_3','annual_income_year_1','annual_income_year_2','annual_income_year_3'));
    }

    public function interview($id){
        
        $data = data::find($id);
        $student_name = $data->student_name;
        $date_of_birth = $data->date_of_birth;
        $place_of_birth = $data->place_of_birth;
        $student_permanent_address = $data->student_permanent_address;
        $student_present_address = $data->student_present_address;
        $japanese_language_school_name = $data->japanese_language_school_name;
        $japanese_school_address = $data->japanese_school_address;
        $japanese_course_start_date = $data->japanese_course_start_date;
        $japanese_graduation_date = $data->japanese_graduation_date;
        $japanese_course_duration = $data->japanese_course_duration;

        $primarys = $data->primarys;
        $primary_school_course_start_date = $data->primary_school_course_start_date;
        $primary_school_graduation_date = $data->primary_school_graduation_date;
        $primary_school_course_duration = $data->primary_school_course_duration;

        $ssc = $data->ssc;
        $SSC_course_start_date = $data->SSC_course_start_date;
        $SSC_graduation_date = $data->SSC_graduation_date;
        $SSC_course_duration = $data->SSC_course_duration;

        $hsc = $data->hsc;
        $HSC_course_start_date = $data->HSC_course_start_date;
        $HSC_graduation_date = $data->HSC_graduation_date;
        $HSC_course_duration = $data->HSC_course_duration;

        $bachelor = $data->bachelor;
        $bachelor_course_start_date = $data->bachelor_course_start_date;
        $bachelor_graduation_date = $data->bachelor_graduation_date;
        $bachelor_course_duration = $data->bachelor_course_duration;

        $masters = $data->masters;
        $masters_course_start_date = $data->masters_course_start_date;
        $masters_graduation_date = $data->masters_graduation_date;
        $masters_course_duration = $data->masters_course_duration;

        $student_father = $data->student_father;
        $student_father_dateof_birth = $data->student_father_dateof_birth;
        $student_father_occupation = $data->student_father_occupation;
        $student_father_permanent_address = $data->student_father_permanent_address;
        $student_father_present_address = $data->student_father_present_address;
        $student_mother = $data->student_mother;
        $student_mother_occupation = $data->student_mother_occupation;
        $student_mother_dateof_birth = $data->student_mother_dateof_birth;
        $student_brother = $data->student_brother;
        $student_brother_dateof_birth = $data->student_brother_dateof_birth;
        $student_brother_occupation = $data->student_brother_occupation;
        $student_sister = $data->student_sister;
        $student_sister_dateof_birth = $data->student_sister_dateof_birth;
        $student_sister_occupation = $data->student_sister_occupation;

        $student_sister_dateof_birth = $data->student_sister_dateof_birth;
        $student_other = $data->student_other;
        $student_others_occupation = $data->student_others_occupation;
        $student_other_dateof_birth = $data->student_other_dateof_birth;
        $sponsor_name = $data->sponsor_name;
        $present_address = $data->present_address;
        $sponsor_profession = $data->sponsor_profession;
        $annual_income_year_3 = $data->annual_income_year_3;
        $relation_with_sponsor = $data->relation_with_sponsor;

        return view('admin/interview',compact('student_brother_occupation','primary_school_course_duration','student_name','date_of_birth','place_of_birth','student_permanent_address','student_present_address','japanese_language_school_name','japanese_school_address','japanese_course_start_date','japanese_graduation_date','japanese_course_duration','primarys','primary_school_course_start_date','primary_school_graduation_date','student_father','student_father_dateof_birth','student_father_occupation','student_father_permanent_address','student_father_present_address','student_mother','student_mother_occupation','student_mother_dateof_birth','student_brother','student_brother_dateof_birth','student_sister','student_sister_occupation','student_sister_dateof_birth','student_other','student_others_occupation','student_other_dateof_birth','sponsor_name','present_address','sponsor_profession','annual_income_year_3','relation_with_sponsor','ssc','SSC_course_start_date','SSC_graduation_date','SSC_course_duration','hsc','HSC_course_start_date','HSC_graduation_date','HSC_course_duration','bachelor','bachelor_course_start_date','bachelor_graduation_date','bachelor_course_duration','masters','masters_course_start_date','masters_graduation_date','masters_course_duration'));
    }

}
