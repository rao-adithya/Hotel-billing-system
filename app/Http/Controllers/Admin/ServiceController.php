<?php

namespace App\Http\Controllers\Admin;
use Session;
use App\Models\Service;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Booking;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();
        $bookings = Booking::all();
        $rooms = Room::all();
        return view('admin.service')->with('services',$services)->with('bookings',$bookings)->with('rooms',$rooms);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $services = new Service();
        $services->roomid = $request->input('roomid');
        $services->bookid = $request->input('bookid');
        $services->phoneno = $request->input('phoneno');
        $services->description = $request->input('description');
        $services->save();
        Session::flash('statuscode','success');
        return redirect('/service')->with('status','Data Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $services = Service::findorFail($id);
        $services->delete();
        Session::flash('statuscode','error');
        return redirect('/service')->with('status','Your data is deleted');
    }
}
