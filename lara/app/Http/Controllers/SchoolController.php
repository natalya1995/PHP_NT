<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\School;
use Http\Requests\SchoolRequest;

class SchoolController extends Controller
{
public function create(SchoolRequest $request)
{
    $request->validation();
    ; $school=new School();
    ; $school->name=$request->name;
    ; $school->adress=$request->adress;
    ; $school->save();


    $school=School::create($request->all());

    return response()->json($school,201);

}
    public function item($id)
    {
        $school=School::findOrFail($id);
        return response()->json($school,200);

        dd($id);
    }
    public function list(Request $request)
    {
       $schools=School::where('id','>',2)->paginate(5);
      return response()->json($schools,200);
    }

 public function update(Request $request, $id)
    {
        $school = School::findOrFail($id);
        $school->update($request->all());

        return response()->json($school, 202);
    }

    public function delete($id)
    {
        $school = School::findOrFail($id);
        $school->delete();

        return response()->json(null, 204);
    }
}
