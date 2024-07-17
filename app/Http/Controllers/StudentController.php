<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    public function index(Request $request){
        $students = Student::orderBy('id','desc');

        if ($request->filter) {
            $filter = $request->filter;
            $students->where(function ($query) use ($filter) {
                $query->where('last_name', 'like', "%$filter%")
                      ->orWhere('first_name', 'like', "%$filter%");
            });
        }

        return  view('student_templates.studentlist', ['students' => $students->get(), 'editmodal' => '']);

    }

    public function close(){
        return "";
    }

    public function create(){
        return view('student_templates.addModal');
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'last_name' => 'string',
            'first_name' => 'string',
            'birth_date' => 'string',
            'address' => 'string',
        ]);

        if($validator->fails()) {
            $students = Student::orderBy('id','desc')->get();
            return view('student_templates.create-error', ['errors'=>$validator->errors(), 'students'=>$students,'msg' => 'Error Occured']);
        }

        Student::create($request->all());
        $students = Student::orderBy('id','desc')->get();

        return  view('student_templates.studentlist', ['students' => $students]);
    }

    public function delModal(Student $student){
        return view('student_templates.deleteModal', ['student' => $student]);
    }

    public function destroy(Student $student) {
        $student->delete();
        $students = Student::orderBy('id','desc')->get();
        return  view('student_templates.studentlist', ['students' => $students]);
    }

    public function update(Request $request, Student $student) {

        $validator = Validator::make($request->all(), [
            'first_name' => 'string',
            'last_name' => 'string',
            'birth_date' => 'numeric',
            'address' => 'numeric',
        ]);

        $fields = $request->validate([
           'first_name' => 'string',
            'last_name' => 'string',
            'birth_date' => 'numeric',
            'address' => 'numeric',
        ]);

        if($validator->fails()) {
            $students = Student::orderBy('updated_at','desc')->get();
            return view('template.error_message', ['errors'=>$validator->errors(), 'students'=>$students]);
        }

        $student->update($fields);
        // $students = Student::orderBy('updated_at','desc')->get();

        return  view('student_templates.studentDetail', ['students' => $students, 'msg' => 'Student Edited']);
    }

    public function show(Student $student){
        return view('student_templates.editModal',['student' => $student]);
    }

    public function detail(Student $student){
        return view('student_templates.studentDetail',['student' => $student]);
    }

    public function body(){
        return view('templates.body');
    }
}
