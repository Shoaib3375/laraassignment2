<?php

namespace App\Http\Controllers;

use App\Models\Userform;
use App\Http\Requests\StoreUserformRequest;
use App\Http\Requests\UpdateUserformRequest;
use App\Http\Resources\UserformResource;
use Illuminate\Database\Eloquent\Casts\Json;
use Illuminate\Http\Response;

class UserformController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return UserformResource::collection(Userform::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserformRequest $request)
    {
        $Userform = Userform::create($request->validated());
        return  UserformResource::make( $Userform );
    }

    /**
     * Display the specified resource.
     */
    public function show(Userform $userform)
    {
        return UserformResource::make($userform); 
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserformRequest $request, Userform $userform)
    {
        $userform->update($request->validated());
        return UserformResource::make( $userform );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Userform $userform)
    {
        $userform->delete();
        return Response()->json([
            'delete'=>'success'
        ]);
    }
}
