<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $courses = \App\Models\Courses::all();

        return view('reg.create', compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $request->validate([
            'course_id' => 'required|exists:courses,id',
        ]);

        $user = session('user');
        if (!$user) {
            return redirect()->route('users.index')->with('error', 'กรุณาเข้าสู่ระบบก่อนลงทะเบียน');
        }
        $reg = new \App\Models\Reg();
        $reg->user_id = $user->id;
        $reg->course_id = $request->input('course_id');
        $reg->save();
        return redirect()->route('users.index')->with('success', 'ลงทะเบียนเรียบร้อยแล้ว');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
