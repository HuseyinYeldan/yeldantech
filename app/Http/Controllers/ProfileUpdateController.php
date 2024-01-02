<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Carbon;

use App\User;
use App\Blog;
use App\Project;

use Image;

class ProfileUpdateController extends Controller
{
    public function edit()
    {
        $user = Auth::user();
        $blogs = Blog::all();
        $projects = Project::all();


        return view('auth.profile-edit', compact('user','blogs','projects'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        // Validation Rules
        $rules = [
            'name' => [
                'string',
                'max:32',
                'unique:users,name,' . $user->id,
            ],
            'avatar' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'banner' => 'image|mimes:jpeg,png,jpg,gif,webp|max:4096',
            'biography' => 'max:1600',
            'facebook' => 'nullable|url',
            'instagram' => 'nullable|url',
            'twitter' => 'nullable|url',
            'linkedin' => 'nullable|url',
            'website' => 'nullable|url',
            'current_password' => 'required_with:new_password|password',
            'new_password' => 'required_with:current_password|min:8|confirmed',
        ];


        // Check if 'name' is being updated and enforce username change limit
        if ($request->has('name')) {
            $rules['name'][] = function ($attribute, $value, $fail) use ($user) {
                $lastChange = $user->last_username_change;
        
                // Check if $lastChange is a string and convert it to a Carbon instance
                if (is_string($lastChange)) {
                    $lastChange = Carbon::parse($lastChange);
                }
        
                $allowedChangeDate = now()->subMonth();
        
                if ($lastChange && $lastChange->gt($allowedChangeDate)) {
                    $fail('Kullanıcı adını ayda bir değiştirebilirsin.');
                }
            };
        }  
        

        $validatedData = $request->validate($rules);

        // Update User Data
        if ($request->has('name')) {
            $user->name = $validatedData['name'];
        }
        $user->biography = $validatedData['biography'];

        // $user->facebook = $validatedData['facebook'];
        // $user->instagram = $validatedData['instagram'];
        // $user->twitter = $validatedData['twitter'];
        // $user->linkedin = $validatedData['linkedin'];
        // $user->website = $validatedData['website'];


        // Update Profile Image (Avatar)
        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $avatarPath = 'avatars/' . time() . '.' . 'webp';

            // Convert the uploaded image to WebP format
            $avatar->storeAs('public', $avatarPath);
            $avatar = Image::make(storage_path("app/public/$avatarPath"));
            $avatar->encode('webp', 90)->save(public_path("storage/$avatarPath"));

            $user->avatar = $avatarPath;
        }

        // Update Banner Image
        if ($request->hasFile('banner')) {
            $banner = $request->file('banner');
            $bannerPath = 'banners/' . time() . '.' . 'webp';

            // Convert the uploaded image to WebP format
            $banner->storeAs('public', $bannerPath);
            $banner = Image::make(storage_path("app/public/$bannerPath"));
            $banner->encode('webp', 90)->save(public_path("storage/$bannerPath"));

            $user->banner = $bannerPath;
        }


        // Update Password (same as before)
        if ($request->filled('new_password')) {
            $user->password = Hash::make($validatedData['new_password']);
        }

        $user->last_username_change = now();
        $user->save();

        return redirect("/profil/{$user->name}")->with('success', 'Profiliniz başarıyla güncellendi!');
    }
    
    public function updateLinks(Request $request)
    {
        $user = Auth::user();

        // Validation Rules
        $rules = [
            'facebook' => 'nullable|max:100',
            'instagram' => 'nullable|max:100',
            'twitter' => 'nullable|max:100',
            'linkedin' => 'nullable|max:100',
            'website' => 'nullable|max:100',
        ];

        $validatedData = $request->validate($rules);

        $user->facebook = $validatedData['facebook'];
        $user->instagram = $validatedData['instagram'];
        $user->twitter = $validatedData['twitter'];
        $user->linkedin = $validatedData['linkedin'];
        $user->website = $validatedData['website'];

        

        $user->save();

        return redirect("/profil/{$user->name}")->with('success', 'Profiliniz başarıyla güncellendi!');
    }
}
