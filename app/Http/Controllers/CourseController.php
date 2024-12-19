<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses= Course::orderby('id','desc')->paginate(10);
        return view('course.index',compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $courses= Course::select('id','name')->get();
        return view('course.create',compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'min:3', 'max:255'],
            'description' => ['required', 'string', 'min:10', 'max:500'],
            'duration' => ['required', 'integer'],
            'price' => ['required', 'numeric'], 
            'image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
            'categories' => ['required', 'array', 'min:1'],
        ]);

        $data = $request->all();
        $data['instructor_id'] = auth()->id();

        //*****for store image***** */
        // if($request->hasFile('image')){
        //     $image = $request->file('image');
        //     $imageName = time().'.'.$image->extension();
        //     $image->move(public_path('images'),$imageName);
        //     $data['image'] = $imageName;
        // }

        $course = Course::create($data);
        $course->categories()->sync($request->categories);
        return redirect()->route('course.index')->with('success', 'Course created successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $course = Course::with('reviews.user')->findOrFail($id); 
        return view('course.course-details', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $course = Course::find($id);
        return view('course.edit',compact('course'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => ['required', 'string', 'min:3', 'max:255'],
            'description' => ['required', 'string', 'min:10', 'max:500'],
            'duration' => ['required', 'integer'],
            'price' => ['required', 'numeric'], 
            'image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
            'categories' => ['required', 'array', 'min:1'],
        ]);

        $data = $request->all();

        $course = Course::find($id);
        $course->update($data);
        $course->categories()->sync($request->categories);
        return redirect()->route('course.index')->with('success', 'Course updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $course = Course::find($id);
        $course->delete();
        return redirect()->route('course.index')->with('success', 'Course deleted successfully.');
    }

    public function search(Request $request)
    {
        // Validate the search input to ensure it is a string and not empty
        $validated = $request->validate([
            'search' => 'nullable|string|max:255',
        ]);
    
        $search = $request->search;
    
        // If the search query is empty, return all courses (or you can choose to handle differently)
        if (empty($search)) {
            $courses = Course::paginate(10);
        } else {
            // Search for courses matching the name
            $courses = Course::where('name', 'like', "%$search%")
                            ->paginate(10);
        }
    
        return view('course.index', compact('courses'));
    }
    
}
