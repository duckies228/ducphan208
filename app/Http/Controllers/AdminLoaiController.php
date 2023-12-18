<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class AdminLoaiController extends Controller{    
    public function index()
    {
        $data = \DB::table('loai')->orderBy('thutu','asc')->get();
        return view('admin/dsloai',['dsloai'=>$data]);    
    }    
    public function create()
    {
        return view('admin/themloai');
    }

    public function store(Request $request)
    {
        $ten_loai = $request['ten_loai'];
        $thutu = (int) $request['thutu'];
        $anhien = (int) $request['anhien'];
        \DB::table('loai')->insert(['ten_loai'=>$ten_loai,'thutu'=>$thutu,'anhien'=>$anhien]);
        return redirect('/admin/loai');
    
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
