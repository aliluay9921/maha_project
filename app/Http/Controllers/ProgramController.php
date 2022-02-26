<?php

namespace App\Http\Controllers;

use DataTables;
use App\Models\Program;
use App\Traits\UploadImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;


class ProgramController extends Controller
{
    use UploadImage;

    public function Programs()
    {
        return view("Program");
    }

    // get all program to datatable admin panel

    public function getProgram()
    {
        $data = Program::latest()->get();
        return Datatables::of($data)
            ->addColumn('action', function ($row) {
                return '
                <a href="/download/' . $row->id . '" class="btn  btn-primary"></i> تحميل البرنامج</a>
                <a href="/delete_program/' . $row->id . '" class="btn  btn-danger"></i> حذف</a>
                <a href="/edit_program/' . $row->id . '" class="btn  btn-success"></i> تعديل</a>
                ';
            })->addColumn('image', function ($row) {
                return '<img src="/image/image_program/' . $row->image . '" width="100 px" height="50px" class="img-rounded" align="center" />';
            })
            ->rawColumns(['action', "image"])
            ->make(true);
    }

    public function addProgram(Request $request)
    {

        $validator = Validator::make($request->all(), [
            "name" => "required",
            "details" => "required",
            "link" => "required|url",
            "size" => "required",
            "image" => "required|mimes:png,jpg,jfif,jpeg"
        ]);
        if ($validator->fails()) {
            return back()->with(["error" => "حصل خطأ عند الاضافة"]);
        }
        $file_extension = $request->image->getClientOriginalName();
        $file_name = time() . '.' . $file_extension;
        $path = 'image/image_program/';
        $request->image->move($path, $file_name);
        Program::create([
            "name"    => $request->name,
            "details" => $request->details,
            "link"    => $request->link,
            "size"    => $request->size,
            "image"   => $file_name,
        ]);
        return redirect()->back()->with(["success" => "تم اضافة برنامج جديد بنجاح"]);
    }

    public function deleteProgram($id)
    {
        $get = Program::find($id);
        if ($get) {
            $get->delete();
            return back()->with(["success" => "تم حذف البرنامج بنجاح"]);
        } else {
            return back()->with(["error" => "خطاً في اختيار البرنامج"]);
        }
    }
    public function editProgram($id)
    {
        $program = Program::find($id);
        return view("editProgram", compact('program'));
    }
    public function download($id)
    {
        $get = Program::find($id);
        if ($get) {
            $get->update([
                'downloads' => $get->downloads += 1
            ]);
            return Redirect::to($get->link);
        }
    }

    public function updateProgram(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "id" => "required|exists:programs,id",
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator->errors());
        }
        $data = [];
        $data = [
            'name' => $request->name,
            'size' => $request->size,
            'details' => $request->details,
            'link' => $request->link,
        ];
        if ($request->has('image')) {
            $file_extension = $request->image->getClientOriginalName();
            $file_name = time() . '.' . $file_extension;
            $path = 'image/image_program/';
            $request->image->move($path, $file_name);
            $data['image'] = $file_name;
        }

        Program::find($request->id)->update($data);
        return back()->with(['success' => 'تم التعديل على البرنامج بنجاح']);
    }

    public function getProgramStudent()
    {
        $programs = Program::get();
        return view("allProgram", compact("programs"));
    }

    public function search(Request $request)
    {
        $programs = Program::where(function ($q) use ($request) {
            $columns = Schema::getColumnListing('programs');
            foreach ($columns as $column) {
                $q->orWhere($column, 'LIKE', '%' . $request->search . '%');
            }
        })->get();
        return view("allProgram", compact("programs"));
    }
}