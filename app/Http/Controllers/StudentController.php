<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function updateRow(){
        $student = Student::find(1);
        if($student) {
            $student->update([
                'name' => 'Thanh Hà',
                'age' => 11,
                'location' => "Đà Nẵng"
            ]);
        }
    }
    public function deleteRow(){
        $student = Student::find(26);
        if($student) {
            $student->delete();
        }
        else {
            return "Không tồn tại học sinh này";
        }
    }
}
