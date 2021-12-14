<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\CourseCriteria;


class CourseController extends Controller
{
    public function ShowBasic()
    {
        $basic_courses = Course::where('variation','Basic')->get();
       return view('admin.pages.courses.basiclist',compact('basic_courses'));
    }
    public function ShowSpecial()
    {
        
        $special_courses = Course::where('variation','Specialized')->get();
       return view('admin.pages.courses.speciallist',compact('special_courses'));
    }
    public function ShowOther()
    {
        
        $other_courses = Course::where('variation','Others')->get();
       return view('admin.pages.courses.otherlist',compact('other_courses'));
    }
    
    
    
    public function CreatCourse()
    {
        return view('admin.pages.courses.courseform');
    }
    public function StoreBasic(Request $request)
    
    {
        // dd($request->all());
        Course::create([
            

                        'shortform'=>$request->shortform,
                        'details'=>$request->details,
                        'variation'=>$request->variation
            
           ]);
                return redirect()->back();
    }

      
      

    // Criteria for Courses

        public function CreatbCriteria()
        {
            return view('admin.pages.courses.cribasic');
        }
      
        public function ShowbCriteria()
        {
           
            $bcriteria=Coursecriteria::with('criterialRelation')->get();
            
            return view('admin.pages.courses.showcribasiclist',compact('bcriteria'));
        }

        public function StorebCriteria(Request $request)
    
    {
        // dd($request->all());
        Coursecriteria::create([
            
                        'course_id'=>1,
                        'name'=>$request->name,
                        'point'=>$request->point,
                        'details'=>$request->details
            
           ]);
                return redirect()->back();
    }
    public function CreatsCriteria()
    {
        return view('admin.pages.courses.crispecial');
    }
    
    public function ShowsCriteria()
    {
        
        $scriteria=Coursecriteria::with('criterialRelation')->get();
    
    
        return view('admin.pages.courses.showcrispecial',compact('scriteria'));
    }

    public function StoresCriteria(Request $request)
    
    {
        // dd($request->all());
        CourseCriteria::create([
            

                        'course_id'=>2,//TO DO
                        'name'=>$request->name,
                        'point'=>$request->point,
                        'details'=>$request->details
            
           ]);
                return  redirect()->back();
    }

}



















