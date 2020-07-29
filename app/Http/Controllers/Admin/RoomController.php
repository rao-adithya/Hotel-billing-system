<?php

namespace App\Http\Controllers\Admin;
use Session;
use App\Models\Room;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;



class RoomController extends Controller
{
    public function index()
    {
        $rooms = Room::all();
        $categories = Category::all();
        return view('admin.createrooms')->with('rooms',$rooms)->with('categories',$categories);
    }


        public function store(Request $request)
    {
        $rooms = new Room();
        $rooms->categoryid = $request->input('categoryid');
        $rooms->roomno = $request->input('roomno');
        $rooms->save();
        Session::flash('statuscode','success');
        return redirect('/rooms')->with('status','Data Added');
    }

        public function destroy($id)
    {
        $rooms = Room::findorFail($id);
        $rooms->delete();
        Session::flash('statuscode','error');
        return redirect('/rooms')->with('status','Your data is deleted');
    }

    public function edit($id)
    {
        $editrooms = Room::find($id);
        $categories = Category::all();
        return view('admin.rooms.edit')->with('editrooms',$editrooms)->with('categories',$categories);
    }

    public function update(Request $request, $id)
    {
        $editrooms = Room::findorFail($id);
        $categories = Category::all();
        $editrooms->categoryid = $request->input('categoryid');
        $editrooms->roomno = $request->input('roomno');
        $categories->update();
        $editrooms->update();
        Session::flash('statuscode','info');
        return redirect('/rooms')->with('status','Data Updated');
    }

}
