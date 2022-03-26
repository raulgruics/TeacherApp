<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\students;

class StudentController extends Controller
{
    
    //Home page (Page no.1)


     public function welcome() {
    return view('Welcome' );
    }

    // Step 1 Project creation ===============================================================================================
    //Displaying the page (Page no2)
    public function showProject() {
  
    return  view('createProject' );
    }
  
    //Insert data into MySql database (Page no.2)
    public function createProject(Request $request) {
  
    $studentdata = new students();
    $studentdata->student = request('student');
    $studentdata->groups = request('numberOfGroup');
    $studentdata->projectName = request('projectname');
    $studentdata->save();
   
    return  redirect('/Students' );
    }

//=============================================

  //Step 2  Display Data-tables and add student(Page no. 3)


    // Display data 
    public function show() {
        
    $data=students::all();
    return view('Students' ,['studentsdata' => $data]);
    }
   
    //Delete Student from the database
 
    public function delete($id){ 

        $delete=students::findOrFail($id);
        $delete->delete();
        return redirect('Students');
    }

    //Add data into database
    public function addStudent(Request $request) {
  
    $addingstudent = new students();
   $addingstudent->student = request('student');
   $addingstudent->save();
   
    return  redirect('/Students' );
    }
    







  
}
