<?php

namespace App\Http\Controllers;

use App\Handlers\ImageUploadHandler;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\UserRequest;

class UsersController extends Controller
{
    //个人页面
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    //个人资料编辑页面
    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    //更新个人资料
    public function update(UserRequest $request, ImageUploadHandler $imageUploadHandler, User $user)
    {
        $data = $request->all();

        if ($request->avatar) {
            $result = $imageUploadHandler->save($request->avatar, 'avatars', $user->id, 362);
            if ($result) {
                $data['avatar'] = $result['path'];
            }
        }

        $user->update($data);

        return redirect()->route('users.show', $user->id)->with('success', '个人资料更新成功！');
    }
}
