<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\track;
use Illuminate\Http\Request;

class TrackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tracks = track::all();
        return $tracks;

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $track = track::create($request->all());
        return response()->json(['message' => 'Track created successfully'], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(track $track)
    {
        $track->load(['students', 'courses']);
        return $track;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, track $track)
    {
        $track->update($request->all());
        return response()->json(['message' => 'Track updated successfully'], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(track $track)
    {
        $track->delete();
        return response()->json(['message' => 'Track deleted successfully'], 200);
    }
}
