<?php

namespace App\Http\Controllers\APIs;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use App\Http\Controllers\Controller;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $users = User::all();
         return response()->json([ $users ]);

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
    * @api {post} /api/login Grant Access Token
    * @apiGroup Authentication
    * @apiParam {string} email User Email
    * @apiParam {string} password User Password
    * @apiSuccess {string} token Access Token
    *
    * @apiSuccessExample Successful Response:
    *  HTTP/1.1 200 OK
    *{
    *    "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwczpcL1wvbW92ZWluYW5kb3V0LmFxdWlsYXRlY2hzLmNvbVwvYXBpXC9sb2dpbiIsImlhdCI6MTU5NTQ5OTgwNCwiZXhwIjoxNTk1NTAzNDA0LCJuYmYiOjE1OTU0OTk4MDQsImp0aSI6Ik1mcXFFWUtTWG9CaDdZTGMiLCJzdWIiOjEsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ipmix0eUpVneon54IdDDXjvpqQVjCuGsyBnnKUhc2ts"
    * }
    *
    */

    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        try {
            if (! $token = JWTAuth::attempt($credentials)) {
                return response()->json(['error' => 'invalid_credentials'], 400);
            }
        } catch (JWTException $e) {
            return response()->json(['error' => 'could_not_create_token'], 500);
        }

        return response()->json(compact('token'));
    }

      /**
    * @api {post} /api/register Register New User
    * @apiGroup Authentication
    * @apiParam {string} name User Name
    * @apiParam {string} email User Email
    * @apiParam {string} password  Password
    * @apiParam {string} confirm_password Confirm Password
    * @apiSuccess {object} user User Details
        *@apiSuccess {string} token Access Token
    *  @apiSuccessExample Successful Response:
    *  HTTP/1.1 200 OK
    *{
    *  "user": {
    *  "name": "Binyameen",
    *   "email": "yameenmalik79@gmail.com",
    *  "updated_at": "2020-07-23 11:34:27",
    *  "created_at": "2020-07-23 11:34:27",
    *  "id": 2
    *  },
    *  "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwczpcL1wvbW92ZWluYW5kb3V0LmFxdWlsYXRlY2hzLmNvbVwvYXBpXC9yZWdpc3RlciIsImlhdCI6MTU5NTUwNDA2NywiZXhwIjoxNTk1NTA3NjY3LCJuYmYiOjE1OTU1MDQwNjcsImp0aSI6IkhrRXJkekJvSElWR29XeWMiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.VrYMos6e9BFkdAnxadGXcvGivLA1y_0usIpfMhfAwtE"
    * }
    *
    */

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'required_with:confirm_password|same:confirm_password'],
            'confirm_password' => ['required', 'string', 'min:8'],
        ]);

        if($validator->fails()){
            return response()->json($validator->errors()->toJson(), 400);
        }

        $user = User::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => Hash::make($request->get('password')),
        ]);

        $token = JWTAuth::fromUser($user);

        return response()->json(compact('user','token'),201);
    }

    public function getAuthenticatedUser()
    {
        try
        {
            if (! $user = JWTAuth::parseToken()->authenticate()) {
                return response()->json(['user_not_found'], 404);
            }

        }catch (Tymon\JWTAuth\Exceptions\TokenExpiredException $e)
        {
            return response()->json(['token_expired'], $e->getStatusCode());

        }catch (Tymon\JWTAuth\Exceptions\TokenInvalidException $e)
        {

            return response()->json(['token_invalid'], $e->getStatusCode());

        }catch (Tymon\JWTAuth\Exceptions\JWTException $e)
        {
            return response()->json(['token_absent'], $e->getStatusCode());
        }
        return response()->json(compact('user'));
    }


}
