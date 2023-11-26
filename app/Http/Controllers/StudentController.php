<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /*tüm öğrenci kayıtlarını alır (Student::all()) ve bu kayıtları list adlı bir görünüme (view) ile birlikte döndürür.
      öğrenci listesini görüntülemek için kullanılır.*/
    public function index()
    {
        $students = Student::all();
        return view("list", compact("students"));
    }

    /*yeni bir öğrenci eklemek için kullanılacak olan formu gösteren bir görünümü döndürür.
      Yeni öğrenci eklemek için kullanıcıya bir form sunar.*/
    public function create()
    {
        return view("create");
    }

    /*yeni öğrenci bilgilerini alır ve bu bilgilerle yeni bir öğrenci oluşturur.
      Oluşturulan öğrencinin detayları form ile gelen verilerle belirlenir.
      /students rotasına yönlendirme yapar.*/
    public function store(Request $request)
    {

        Student::create([
            'name' => $request->name,
            'lastname'=>$request->lastname,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'cgpa' => $request->cgpa,
        ]);

        return redirect()->to("/students");
    }


    /*öğrencinin bilgilerini düzenlemek için kullanılan formu gösteren bir görünümü döndürür.*/
    public function edit(Student $student)
    {
        return view("edit", compact("student"));
    }


    /*öğrencinin bilgilerini günceller. Güncelleme işlemi, form ile gelen verilere göre gerçekleşir.
        /students rotasına yönlendirme yapar.*/
    public function update(Request $request, Student $student)
    {
        $student->update([
            'name' => $request->name,
            'lastname' =>$request->lastname,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'cgpa' => $request->cgpa,
        ]);

        return redirect()->to("/students");
    }

    /*belirli bir öğrenciyi veritabanından siler.
      Silme işlemi başarılı olduktan sonra, /students rotasına yönlendirme yapar.*/
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->to("/students");
    }




}
