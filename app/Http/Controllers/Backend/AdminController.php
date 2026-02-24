<?php
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\Subject;
use App\Models\SubTopic;
use App\Models\Topic;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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
        $subjects = Subject::where('is_active', 1)->get();
        return view('backend.add-topics', compact('subjects'));
    }

    public function addSubTopic()
    {
        $subjects = Subject::where('is_active', 1)->get();
        $topics   = Topic::where('is_active', 1)->get();
        return view('backend.add-sub-topic', compact('subjects', 'topics'));
    }

    public function addPage()
    {
        return view('backend.add-page');
    }

    public function storeSubjects(Request $request)
    {
        try {
            $request->validate([
                'subjectName'        => 'required|string|max:255',
                'subjectSlug'        => 'required|string|max:255|unique:subjects,slug',
                'subjectDescription' => 'nullable|string',
                'orderIndex'         => 'required|integer',
            ]);

            Subject::create([
                'title'       => $request->subjectName,
                'slug'        => $request->subjectSlug,
                'description' => $request->subjectDescription,
                'order_index' => $request->orderIndex,
                'is_active'   => 1,
            ]);
            return response()->json([
                'status'  => true,
                'message' => 'Subject added successfully',
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status'  => 'error',
                'message' => 'Failed to add subject: ' . $e->getMessage(),
            ], 500);
        }

    }
    public function updateSubject(Request $request, $id)
    {
        try {

            $request->validate([
                'subjectName'        => 'required|string|max:255',
                'subjectSlug'        => 'required|string|max:255|unique:subjects,slug',
                'subjectDescription' => 'nullable|string',
                'orderIndex'         => 'required|integer',
            ]);

            $data = Subject::find($id);

            if (! $data) {
                return response()->json([
                    'status'  => 'error',
                    'message' => 'Subject not found',
                ], 404);
            }

            $data->update([
                'title'       => $request->subjectName,
                'slug'        => $request->subjectSlug,
                'description' => $request->subjectDescription,
                'order_index' => $request->orderIndex,
            ]);

            return response()->json([
                'status'  => true,
                'message' => 'Subject updated successfully',
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status'  => 'error',
                'message' => 'Failed to update subject: ' . $e->getMessage(),
            ], 500);
        }

    }

    public function deleteSubject($id, $isActive)
    {
        try {

            $data = Subject::find($id);

            if (! $data) {
                return response()->json([
                    'status'  => 'error',
                    'message' => 'Subject not found',
                ], 404);
            }

            if ($isActive == 1) {
                $isActive = 0;
            }

            $data->update([
                'is_active' => $isActive,
            ]);

            return response()->json([
                'status'  => true,
                'message' => 'Subject deleted successfully',
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status'  => 'error',
                'message' => 'Failed to delete subject: ' . $e->getMessage(),
            ], 500);
        }

    }

    public function storeTopics(Request $request)
    {
        try {

            $request->validate([
                'subject_id'  => 'required|integer|exists:subjects,id',
                'title'       => 'required|string|max:255',
                'slug'        => 'required|string|max:255|unique:topics,slug',
                'order_index' => 'required|integer',
            ]);

            $slug = Str::slug($request->slug);

            Topic::create([
                'title'       => $request->title,
                'slug'        => $slug,
                'order_index' => $request->order_index,
                'subject_id'  => $request->subject_id,
                'is_active'   => 1,
            ]);

            return response()->json([
                'status'  => true,
                'message' => 'Topic added successfully',
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status'  => 'error',
                'message' => 'Failed to add topic: ' . $e->getMessage(),
            ], 500);
        }

    }

    public function updateTopics(Request $request, $id)
    {
        try {

            $request->validate([
                'title'       => 'required|string|max:255',
                'slug'        => 'required|string|max:255',
                'order_index' => 'required|integer',
                'subject_id'  => 'required|integer|exists:subjects,id',
            ]);

            $data = Topic::find($id);

            if (! $data) {
                return response()->json([
                    'status'  => 'error',
                    'message' => 'Topic not found',
                ], 404);
            }

            $data->update([
                'title'       => $request->title,
                'slug'        => $request->slug,
                'order_index' => $request->order_index,
                'subject_id'  => $request->subject_id,
            ]);

            return response()->json([
                'status'  => true,
                'message' => 'Topic updated successfully',
            ]);

        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json([
                'status'  => 'error',
                'message' => $e->errors()['slug'][0] ?? 'Validation failed',
            ], 422);

        } catch (\Exception $e) {
            return response()->json([
                'status'  => 'error',
                'message' => 'Failed to update topic: ' . $e->getMessage(),
            ], 500);
        }
    }

    public function deleteTopic($id, $isActive)
    {
        try {

            $data = Topic::find($id);

            if (! $data) {
                return response()->json([
                    'status'  => 'error',
                    'message' => 'Topic not found',
                ], 404);
            }
            if ($isActive == 1) {
                $isActive = 0;
            }

            $data->update([

                'is_active' => $isActive,
            ]);

            return response()->json([
                'status'  => true,
                'message' => 'Topic deleted successfully',
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status'  => 'error',
                'message' => 'Failed to delete topic: ' . $e->getMessage(),
            ], 500);
        }
    }

    public function storeSubTopics(Request $request)
    {
        try {
            $request->validate([
                'subjectId'   => 'required|string|exists:subjects,id',
                'topicId'     => 'required|integer|exists:topics,id',
                'title'       => 'required|string|max:255',
                'slug'        => 'required|string|max:255',
                'description' => 'nullable|string',
                'order_index' => 'required|integer',
            ]);

            SubTopic::create([
                'parent_id'   => $request->subjectId,
                'topic_id'    => $request->topicId,
                'title'       => $request->title,
                'slug'        => $request->slug,
                'description' => $request->description,
                'order_index' => $request->order_index,
                'is_active'   => 1,
            ]);

            return response()->json([
                'status'  => true,
                'message' => 'Sub-topic added successfully',
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'status'  => 'error',
                'message' => 'Failed to add sub-topic: ' . $e->getMessage(),
            ], 500);
        }

    }

    public function updateSubTopics(Request $request, $id)
    {
        try {

            $request->validate([
                'subjectId'   => 'required|string|exists:subjects,id',
                'topicId'     => 'required|integer|exists:topics,id',
                'title'       => 'required|string|max:255',
                'slug'        => 'required|string|max:255',
                'description' => 'nullable|string',
                'order_index' => 'required|integer',
            ]);

            // dd($request->subjectId);

            $data = SubTopic::find($id);

            if (! $data) {
                return response()->json([
                    'status'  => 'error',
                    'message' => 'Sub-topic not found',
                ], 404);
            }

            $data->update([
                'title'       => $request->title,
                'slug'        => $request->slug,
                'description' => $request->description,
                'order_index' => $request->order_index,
                'topic_id'    => $request->topicId,
                'parent_id'   => $request->subjectId,
            ]);
            return response()->json([
                'status'  => true,
                'message' => 'Sub-topic updated successfully',
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status'  => 'error',
                'message' => 'Failed to update sub-topic: ' . $e->getMessage(),
            ], 500);
        }

    }

    public function deleteSubTopic($id, $isActive)
    {
        try {

            $data = SubTopic::find($id);

            if (! $data) {
                return response()->json([
                    'status'  => 'error',
                    'message' => 'Sub-topic not found',
                ], 404);
            }

            if($isActive == 1){
                $isActive = 0;
            }

            $data->update([

                'is_active' => $isActive,
            ]);
            
            return response()->json([
                'status'  => true,
                'message' => 'Sub-topic deleted successfully',
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status'  => 'error',
                'message' => 'Failed to delete sub-topic: ' . $e->getMessage(),
            ], 500);
        }
    }

    public function addPageToDB(Request $request)
    {
        try {

            $request->validate([
                'page_name'    => 'required|string|max:255',
                'slug'         => 'required|string|max:255|unique:pages,slug',
                'content'      => 'nullable|string',
                'order_index'  => 'required|integer',
                'sub_topic_id' => 'required|integer|exists:sub_topics,id',
            ]);

            Page::create([
                'name'         => $request->page_name,
                'slug'         => $request->slug,
                'content'      => $request->content,
                'order_index'  => $request->order_index,
                'sub_topic_id' => $request->sub_topic_id,
            ]);
            return response()->json([
                'status'  => true,
                'message' => 'Page added successfully',
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status'  => 'error',
                'message' => 'Failed to add page: ' . $e->getMessage(),
            ], 500);
        }

    }

    public function editPage(Request $request, $id)
    {
        try {

            $request->validate([
                'page_name'    => 'required|string|max:255',
                'slug'         => 'required|string|max:255|unique:pages,slug,' . $id,
                'content'      => 'nullable|string',
                'order_index'  => 'required|integer',
                'sub_topic_id' => 'required|integer|exists:sub_topics,id',
            ]);

            $data = Page::find($id);
            if (! $data) {
                return response()->json([
                    'status'  => 'error',
                    'message' => 'Page not found',
                ], 404);
            }
            $data->update([
                'name'         => $request->page_name,
                'slug'         => $request->slug,
                'content'      => $request->content,
                'order_index'  => $request->order_index,
                'sub_topic_id' => $request->sub_topic_id,
            ]);
            return response()->json([
                'status'  => true,
                'message' => 'Page updated successfully',
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status'  => 'error',
                'message' => 'Failed to update page: ' . $e->getMessage(),
            ], 500);
        }

    }

    public function deletePage(Request $request, $id)
    {
        try {

            $request->validate([
                'is_active' => 'required|boolean',
            ]);

            $data = Page::find($id);
            if (! $data) {
                return response()->json([
                    'status'  => 'error',
                    'message' => 'Page not found',
                ], 404);
            }
            $data->update([

                'is_active' => $request->is_active,
            ]);
            return response()->json([
                'status'  => true,
                'message' => 'Page deleted successfully',
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status'  => 'error',
                'message' => 'Failed to delete page: ' . $e->getMessage(),
            ], 500);
        }
    }

}
