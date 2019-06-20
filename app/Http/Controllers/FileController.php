<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class FileController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function formSubmit(Request $request)
    {
        $fileName = time().'.'.$request->file->getClientOriginalExtension();
        $request->file->move(public_path('upload'), $fileName);
        
        return response()->json(['success'=>'You have successfully upload file.']);
    }
}