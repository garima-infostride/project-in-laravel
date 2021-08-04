<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Queue\RedisQueue;
use App\Models\Post;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{
    public function create(Request $request)
    {
        $data['post'] = new Post();
        if ($request->post_id) {
            $id = $request->post_id;
            $data['post'] = Post::where('id', $id)->first();
        }
        return view('admin.post.addPost', $data);
    }

    public function show()
    {
        $data['posts'] = Post::paginate(5);
        return view('admin.post.showPost', $data);
    }
    public function store(Request $request)
    {
        $id = '';
        if ($request->post_id) {
            $id = $request->post_id;
        }
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'section_title' => 'required',
        ]);
        if ($validator->fails()) {
            $success = 0;
            return back()->withErrors($validator)->withInput();
        } else {
            $filename = '';
            if ($request->image) {
                $filename = $this->fileUpload($request, 'image', '');
            } else {
                if ($request->old_image) {
                    $filename = $request->old_image;
                }
            }
            $data = array(
                'page_title' => $request->page_title,
                'section_title' => $request->section_title,
                'title' => $request->title,
                'description' => $request->description,
                'button_text' => $request->button_text,
                'fees' => $request->fees,
                'image' => $filename,
            );
            $post = Post::updateOrCreate(['id' => $id], $data);
            if ($post) {
                if ($id)
                    return redirect()->route('post-show')->with(['message' => 'Post Successfully Updated']);
                else
                    return redirect()->route('post-show')->with(['message' => 'Post Successfully Inserted']);
            } else {
                return back()->with(['message' => 'Something Wrong']);
            }
        }
    }
    public function delete(Request $request)
    {
        $id = $request->id;
        $img = $request->image;
        if ($id) {
            if (File::exists(public_path('uploads/' . $img))) {
                File::delete(public_path('uploads/' . $img));

                $res = Post::find($id)->delete();
                if ($res) {
                    echo json_encode("Successfully deleted");
                } else {
                    echo json_encode("Somthing went worng");
                }
            } else {
                echo json_encode("File not exists.");
            }
        } else {
            echo json_encode("Post Id not found");
        }
    }
}
