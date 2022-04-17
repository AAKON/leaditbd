<?php

namespace App\Http\Controllers;
use App\Models\CertificateInfo;
use Illuminate\Http\Request;

class CertificateController extends Controller
{
   public function certificateForm()
   {
      return view('certificateForm');
   }
   
   public function certificateDb(Request $request)
   {
      $certificate = CertificateInfo::where('certificate_no',$request->certificate_no)->first();
      if (empty($certificate)) {
          $certificate = new CertificateInfo;
      }
      $certificate->certificate_no = $request->certificate_no;
      $certificate->name = $request->name;
      $certificate->age = $request->age;
      $certificate->sex = $request->sex;
      $certificate->performance = $request->performance;
      if (isset($request->photo)) {
        $image = $request->file('photo');
        $imageName = 'image_'.time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('storage').'/upload/studentPhoto/', $imageName);
        $imgpath = '/upload/studentPhoto/'.$imageName;
        $certificate->photo =  $imgpath;
    }

    $certificate->save();

    return redirect()->back();

   }

   public function verify()
   {
       return view('certificatVerify');
   }

   public function verifyCertificate(Request $request)
   {
      $student = CertificateInfo::where('certificate_no',$request->certificate_no)->first();
      return view('student',compact('student'));
      
   }
}
