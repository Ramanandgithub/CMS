<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('backend.dashboard.index');
    }

    public function addSubject()
    {
        return view('backend.add-subject');
    }

    public function userList()
    {
        return view('backend.users');
    }

    public function userProfile()
    {
        return view('backend.profile');
    }

    public function addTopics()
    {
        return view('backend.add-topics');
    }


    public function addSubTopic()
    {
        return view('backend.add-sub-topic');
    }

    public function addPage()
    {
        return view('backend.add-page');
    }

    public function addSubjects(Request $request)
    {
        try{
            // Handle subject addition logic here
            $request->validate([
                'subject_name' => 'required|string|max:255',
                'slug' => 'required|string|max:255|unique:subjects,slug',
                'description' => 'nullable|string',
                'order_index' => 'required|integer',
            ]);

            Subject::create([
                'name' => $request->subject_name,
                'slug' => $request->slug,
                'description' => $request->description,
                'order_index' => $request->order_index,
            ]);
            return response()->json([
                'status' => true,
                'message' => 'Subject added successfully'
            ]);
        }catch(\Exception $e){
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to add subject: ' . $e->getMessage()
            ], 500);
        }
        


    }
    public function editSubject(Request $request, $id)
    {
        try{
            // Handle subject addition logic here
            $request->validate([
                'subject_name' => 'required|string|max:255',
                'slug' => 'required|string|max:255|unique:subjects,slug',
                'description' => 'nullable|string',
                'order_index' => 'required|integer',
            ]);

            $data = Subject::find($id);
            if(!$data){
                return response()->json([
                    'status' => 'error',
                    'message' => 'Subject not found'
                ], 404);
            }
            $data->update([
                'name' => $request->subject_name,
                'slug' => $request->slug,
                'description' => $request->description,
                'order_index' => $request->order_index,
            ]);
            return response()->json([
                'status' => true,
                'message' => 'Subject updated successfully'
            ]);
        }catch(\Exception $e){
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to update subject: ' . $e->getMessage()
            ], 500);
        }
        


    }

    public function deleteSubject(Request $request, $id)
    {
        try{
            // Handle subject addition logic here
            $request->validate([
                'is_active' => 'required|boolean',
            ]);

            $data = Subject::find($id);
            if(!$data){
                return response()->json([
                    'status' => 'error',
                    'message' => 'Subject not found'
                ], 404);
            }
            $data->update([
                
                'is_active' => $request->is_active,
            ]);
            return response()->json([
                'status' => true,
                'message' => 'Subject deleted successfully'
            ]);
        }catch(\Exception $e){
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to delete subject: ' . $e->getMessage()
            ], 500);
        }
        


    }

    

}
