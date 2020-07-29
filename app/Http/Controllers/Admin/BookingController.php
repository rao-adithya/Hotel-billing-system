<?php

namespace App\Http\Controllers\Admin;
use Session;
use App\Models\Booking;
use App\Models\Category;
use App\Models\Room;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookings = Booking::all();
        $categories = Category::all();
        $rooms = Room::all();
        return view('admin.createbookings')->with('bookings',$bookings)->with('categories',$categories)->with('rooms',$rooms);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $bookings = new Booking();
        
        $bookings->name = $request->input('name');
        $bookings->phone = $request->input('phone');
        $bookings->email = $request->input('email');
        $bookings->categoryid = $request->input('categoryid');
        $bookings->roomid = $request->input('roomid');
        $bookings->address = $request->input('address');
        $bookings->checkin = $request->input('checkin');
        $bookings->checkout = $request->input('checkout');
        $bookings->save();

        Session::flash('statuscode','success');
        return redirect('/bookings')->with('status','Reservation Done');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\bookings  $bookings
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
         //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\bookings  $bookings
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bookings = Booking::find($id);
        $rooms = Room::all();
        $rms = array();
        foreach ($rooms as $row){
            $rms[$row->id] = $row->roomno;
        }
        return view('admin.bookings.edit')->with('bookings',$bookings)->with('rooms',$rms);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\bookings  $bookings
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $bookings = Booking::find($id);
        $bookings->name = $request->input('name');
        $bookings->phone = $request->input('phone');
        $bookings->email = $request->input('email');
        $bookings->categoryid = $request->input('categoryid');
        $bookings->roomid = $request->input('roomid');
        $bookings->address = $request->input('address');
        $bookings->checkin = $request->input('checkin');
        $bookings->checkout = $request->input('checkout');
        $bookings->save();
        Session::flash('statuscode','info');
        return redirect('/bookings')->with('status','Data Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\bookings  $bookings
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bookings = Booking::findorFail($id);
        $bookings -> delete();
        
        Session::flash('statuscode','error');
        return redirect('/bookings')->with('status','Your data is deleted');
    }
}
