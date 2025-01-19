<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;
use Illuminate\Support\Facades\Log;
class gallerycontroller extends Controller
{
    public function Vgallery(){
        $gallerydata = Gallery::all();
        // dd($gallerydata);
        return view('User.Homepage.curdGaGallery',['gallerydata' => $gallerydata]);
    }

    public function submitgallery(Request $request)
{
    // Validate the form data
    $validatedData = $request->validate([
        'foodtime' => 'required|string',
        'foodimage' => 'required|image|mimes:jpeg,png,jpg|max:2048',
    ]);

    // // Store the image and get its path
    // $imagePath = $request->file('foodimage')->store('public/gallery');

    // // Get only the relative path after 'public/' for storing in the database
    // $relativeImagePath = str_replace('public/', '', $imagePath);
    
    

    $orgname = $request->file('foodimage')->getClientOriginalName();
        $imagePath = $request->file('foodimage')->storeAs('image',$orgname,'public');
        $relativeImagePath = str_replace('public/', '', $imagePath);


    // Create and save a new record in the database
    $record = new Gallery;
    $record->foodtime = $validatedData['foodtime'];
    $record->foodimage = $relativeImagePath;
    $record->save();

    return redirect()->back()->with('success', 'Team member added successfully.');
}
    //delete gallery pictur by id
    public function deletegallery($id)
    {
        try {
            $gallery = Gallery::find($id);

            if (!$gallery) {
                return redirect()->back()->with('error', 'Image not found');
            }

            // Delete the image from storage if needed
            // Storage::delete($gallery->foodimage);

            $gallery->delete();

            return redirect()->back()->with('success', 'Image deleted successfully');
        } catch (\Exception $e) {
            Log::error('Error deleting image: ' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred while deleting image');
        }
    }
    public function test(){
        return view('User.test');
    }






}
