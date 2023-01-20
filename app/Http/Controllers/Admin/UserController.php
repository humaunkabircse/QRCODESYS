<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;


class UserController extends Controller
{

//__Index__//
    public function index()
    {
        $users = User::all();
        return view('admin.user.index', compact('users'));
    }

//__Create__//
    public function create()
    {
        return view('admin.user.create');
    }


//__Edit__//
    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.user.edit', compact('user'));
    }


//__Store__//
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:users|max:255',
        ]);
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request['password']);
        $user->is_admin = $request->is_admin;

        if($request->hasFile('profile_image'))
        {
            //get filename with extension
            $filenamewithextension = $request->file('profile_image')->getClientOriginalName();

            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

            //get file extension
            $extension = $request->file('profile_image')->getClientOriginalExtension();

            //filename to store
            $filenametostore = $filename.'_'.time().'.'.$extension;

            //small thumbnail name
            $smallthumbnail = $filename.'_small_'.time().'.'.$extension;

            //Upload File
            $request->file('profile_image')->storeAs('public/profile_images', $filenametostore);
            $request->file('profile_image')->storeAs('public/profile_images/thumbnail', $smallthumbnail);

            //create small thumbnail
            $smallthumbnailpath = public_path('storage/profile_images/thumbnail/'.$smallthumbnail);
            $this->createThumbnail($smallthumbnailpath, 100, 100);
        }    

        $user->profile_image = $request->file('profile_image')->storeAs('/profile_images/thumbnail', $smallthumbnail);
        $user->save();

        $notification = array('message' => 'User Created Successfully', 'alert-type' => 'success');
        return redirect('admin/user')->with($notification);

       
    }
//__createThumbnail__//
    public function createThumbnail($path, $width, $height)
        {
            $img = Image::make($path)->fit($width, $height, function ($constraint) {
                // $constraint->aspectRatio();
                $constraint->upsize();
            });
            $img->save($path);
        }



//__Update__//
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request['password']);
        $user->is_admin = $request->is_admin;

        // if($request->hasFile('profile_image'))
        // {
        //     //get filename with extension
        //     $filenamewithextension = $request->file('profile_image')->getClientOriginalName();

        //     //get filename without extension
        //     $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

        //     //get file extension
        //     $extension = $request->file('profile_image')->getClientOriginalExtension();

        //     //filename to store
        //     $filenametostore = $filename.'_'.time().'.'.$extension;

        //     //small thumbnail name
        //     $smallthumbnail = $filename.'_small_'.time().'.'.$extension;

        //     //Upload File
        //     $request->file('profile_image')->save('public/profile_images', $filenametostore);
        //     $request->file('profile_image')->save('public/profile_images/thumbnail', $smallthumbnail);

        //     //create small thumbnail
        //     $smallthumbnailpath = public_path('storage/profile_images/thumbnail/'.$smallthumbnail);
        //     $this->createThumbnail($smallthumbnailpath, 100, 100);
        // }    

        // $user->profile_image = $request->file('profile_image')->save('/profile_images/thumbnail', $smallthumbnail);   
        
        $user->update();

        $notification = array('message' => 'User Updated Successfully', 'alert-type' => 'success');
        return redirect('admin/user')->with($notification);
        
    

    }


//__Delete__//
    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();

        $notification = array('message' => 'User Deleted Successfully', 'alert-type' => 'success');
        return redirect()->back()->with($notification);

    }





}
