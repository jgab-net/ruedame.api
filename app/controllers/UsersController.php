<?php
/**
 * User: jgab
 * Date: 30/06/14
 * Time: 10:08 PM
 */

class UsersController extends BaseController {

    public function postIndex(){
        $response = new stdClass();

        $validator = Validator::make(
            Input::all(),
            array(
                'email' => 'required|email',
                'name' => 'required',
                'phone' => 'required'
            )
        );

        if($validator->fails()){
            $response->code=Lang::get('content.validation');
            $response->status='error';
            $response->messages = $validator->messages();
            return Response::json($response, 400);
        }

        $user = new User();
        $user->email = Input::get('email');
        $user->name = Input::get('name');
        $user->phone = Input::get('phone');

        $user->save();

        $response->code=Lang::get('content.registration_success');
        $response->status='success';

        return Response::json($response, 200);
    }
} 