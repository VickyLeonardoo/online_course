<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Materi_course;
use App\Models\MateriModel;
use DB;


class MateriController extends Controller
{
    public function store(Request $request, $id)
    {
        $wordCount = DB::table('materi_courses')
        ->where('id_course',$id)
        ->count();
        // $wordCount = Materi_course::where('id_course', '<=', 2)->count();
        $eps = $wordCount + 1;
        Materi_course::create([
            'id_course' => $request->id_course,
            'judul_materi' => $request->judul,
            'link_materi' => $request->link,
            'keterangan' => $request->keterangan,
            'episode' => $eps,
        ]);
        return redirect()->back()->withToastSuccess('Task Created Successfully!');
    }

    public function update($id)
    {
        $data = [
            'judul_materi' => Request()->judul,
            'link_materi' => Request()->link,
            'keterangan' => Request()->keterangan,
        ];
        
        Materi_course::where('id_materi_course',$id)
        ->update($data);

        return Redirect()->back()->withToastSuccess('Task Created Successfully!');
    }

    public function delete($id)
    {
        Materi_course::where('id_materi_course',$id)
        ->delete();

        return Redirect()->back()->withToastSuccess('Task Created Successfully!');
        
    }
}
