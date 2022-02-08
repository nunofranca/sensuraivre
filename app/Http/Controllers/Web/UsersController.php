<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\UserRequestStore;
use App\Services\Users\UserServiceInterface;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    private $userService;

    public function __construct(UserServiceInterface $userService)
    {
        $this->userService = $userService;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        try {
            $users = $this->userService->getAll();
            return view('painel.users.index', [
                'users' => $users
            ]);
        } catch (\Exception $e) {
            return $e->getMessage();
        }

    }


    public function store(UserRequestStore $request)
    {

        $attributes = $request->validated();

        try {
            $this->userService->create($attributes);
            return redirect()->back();
        } catch (\Exception $e) {
            return $e->getMessage();
        }

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
