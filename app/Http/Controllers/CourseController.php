<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Rank;
use App\Models\Candidte;
use App\Models\Sailor;
use App\Models\CourseCriteria;
use App\Models\CourseResult;


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

        public function CreatbCriteria($id)
        {
            $bcourse=Course::find($id);
            return view('admin.pages.courses.cribasic',compact('bcourse'));
        }
      
        public function ShowbCriteria()
        {
            // dd($id);
           
            $bcriteria=Coursecriteria::with('criterialRelation')->get();
            // dd($bcriteria);
            return view('admin.pages.courses.showcribasiclist',compact('bcriteria'));
        }

        public function StorebCriteria(Request $request,$id)
    
    {
        // dd($id);
        // dd($request->all());
        Coursecriteria::create([
            
                        'course_id'=>$id,
                        'name'=>$request->name,
                        'point'=>$request->point,
                        'details'=>$request->details
            
           ]);
                return redirect()->back();
    }
    public function CreatsCriteria($id)
    {
        // dd($id);
        $course=Course::find($id);
        // dd($course);
        return view('admin.pages.courses.crispecial',compact('course'));
    }
    
    public function ShowsCriteria()
    {
        // dd($id);
       
        $scriteria=Coursecriteria::with('criterialRelation')->get();
    
    
        return view('admin.pages.courses.showcrispecial',compact('scriteria'));
    }

    public function StoresCriteria(Request $request,$id)
    
    {
        // dd($id);
        // dd($request->all());
        CourseCriteria::create([
            

                        'course_id'=>$id,//TO DO
                        'name'=>$request->name,
                        'point'=>$request->point,
                        'details'=>$request->details
            
           ]);
                return  redirect()->back();
    }
    // select course
    public function SelectCourse()
    {
        $courses=Course::all();
        return view('admin.pages.courses.selectcourses',compact('courses'));
    }
    public function EligibleSailor()
    {
        $course=Course::with('criteria')->find(request()->course_id);
        // dd($course);
        $course_point = CourseCriteria::where('course_id',$course->id)->get();
        $course_point = $course_point->pluck('point');
        // dd($course_point);

        if($course->criteria)
        {
            $sailors=Sailor::with(['rankcategory','pullcandidate'])->where('point','<',$course->criteria->point)->get();
        //   dd($sailors);

            return view('admin.pages.courses.eligiblelist',compact('sailors','course','course_point'));
        }
        return redirect()->back()->with('success','No criteria has been fixed yet.');
      
    }

    // adding Course Result

    public function Addpoint($sailor_id)
    {
        $sailors=Sailor::find($sailor_id);
        $courses=Course::all();
      
        return view('admin.pages.courses.addresult',compact('courses','sailors'));
    }

    public function StorePoint(Request $request,$sailor_id)
    {

        $sailors=Sailor::find($sailor_id);
        $check=CourseResult::where('sailor_id',$sailor_id)
        ->where('course_id',$request->shortform)->first();

        if($check)
        {
            return redirect()->back()->with('success','This Course has already been done.');
        }
        else
        {
            CourseResult::create([
                'sailor_id'=>$sailor_id,
                'course_id'=>$request->shortform,
                'point'=>$request->point,
            ]);

            // $sailors->update([
            //     'point'=>$sailors->point+$request->point
            // ]);

            $sailors->increment('point',$request->point);


          
              return redirect()->back()->with('success','Result has been Submitted Successfully.');;
       }

    }
}




















