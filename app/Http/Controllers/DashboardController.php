<?php

namespace App\Http\Controllers;

use App\Models\Basic;
use App\Models\Comment;
use App\Models\Component;
use App\Models\Gallery;
use App\Models\Project;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{

    /*
    =========================================================
                        View Dashboard Users
    =========================================================
    */
    public function welcome()
    {
        $id = auth()->user()->role_id;
        $data = [
            'title' => 'KelasIOT | Welcome',
            'role'  => Role::where('id', $id)->first()
        ];
        // dd($data);

        return view('dashboard/welcome', $data);
    }

    public function dashboardAdmin(User $post)
    {
        $id = auth()->user()->role_id;
        $data = [
            'title'             => 'KelasIOT | Dashboard Admin',
            'role'              =>  Role::where('id', $id)->first(),
            'admins'            => User::where('role_id', 2)->get(),
            'members'           => User::where('role_id', 3)->get(),
            'true_member'       => User::where(['status' => 'true', 'role_id' => 3])->count(),
            'false_member'      => User::where(['status' => 'false', 'role_id' => 3])->count(),
            'sum_basics'        => Basic::count(),
            'sum_projects'      => Project::count(),
            'sum_quizs'         => Quiz::count(),
            'sum_components'    => Component::count()
        ];
        // dd($data['role']->name);

        return view('dashboard/index-admin', $data);
    }

    /*
    =========================================================
                        View CRUD Memebers
    =========================================================
    */
    public function adminActive()
    {
        $id = auth()->user()->role_id;
        $data = [
            'title' => 'KelasIOT | Admin Active',
            'role'  => Role::where('id', $id)->first(),
            'users' => User::where(['status' => 'true', 'role_id' => 2])->get()
        ];

        return view('users/admin/admin-active', $data);
    }

    public function adminNonActive()
    {
        $id = auth()->user()->role_id;
        $data = [
            'title' => 'KelasIOT | Admins Non-active',
            'role' => Role::where('id', $id)->first(),
            'users' => User::where(['status' => 'false', 'role_id' => 2])->get()
        ];

        return view('users/admin/admin-nonactive', $data);
    }

    public function memberActive()
    {
        $id = auth()->user()->role_id;
        $data = [
            'title' => 'KelasIOT | Members Active',
            'role'  => Role::where('id', $id)->first(),
            'users' => User::where(['status' => 'true', 'role_id' => 3])->get()
        ];

        return view('users/admin/member-active', $data);
    }

    public function memberNonActive()
    {
        $id = auth()->user()->role_id;
        $data = [
            'title' => 'KelasIOT | Members Non-active',
            'role' => Role::where('id', $id)->first(),
            'users' => User::where(['status' => 'false', 'role_id' => 3])->get()
        ];

        return view('users/admin/member-nonactive', $data);
    }

    /*
    =========================================================
                       Proses CRUD Members
    =========================================================
    */

    public function prosesActive(Request $request)
    {
        $id = $request->id;
        $role_id = $request->role_id;
        $data = [
            'status'    => $request->status,
            'updated_at' => now()
        ];
        // dd($data);

        DB::table('users')->where('id', $id)->update($data);

        if ($role_id == 2) {
            return redirect('/admin-nonactive')->with('status', 'di active kan.');
        } else if ($role_id == 3) {
            return redirect('/member-nonactive')->with('status', 'di active kan.');
        }
    }

    public function prosesNonActive(Request $request)
    {
        $id = $request->id;
        $role_id = $request->role_id;
        $data = [
            'status'    => $request->status,
            'updated_at' => now()
        ];
        // dd($data);

        DB::table('users')->where('id', $id)->update($data);

        if ($role_id == 2) {
            return redirect('/admin-active')->with('status', 'di non-active kan.');
        } else if ($role_id == 3) {
            return redirect('/member-active')->with('status', 'di non-active kan.');
        }
    }

    /*
    =========================================================
                       View CRUD Features
    =========================================================
    */

    # View Feature Basic
    public function basic()
    {
        $id = auth()->user()->role_id;
        $data = [
            'title' => 'KelasIOT | Basic',
            'role'  => Role::where('id', $id)->first(),
            'basic' => Basic::all()
        ];

        return view('dashboard/feature/basic/index', $data);
    }

    public function basicActive()
    {
        $id = auth()->user()->role_id;
        $data = [
            'title' => 'KelasIOT | Basic Active',
            'role'  => Role::where('id', $id)->first(),
            'basic' => Basic::where('status', 'true')->get()
        ];

        return view('dashboard/feature/basic/basic-active', $data);
    }

    public function basicNonActive()
    {
        $id = auth()->user()->role_id;
        $data = [
            'title' => 'KelasIOT | Basic Non-active',
            'role'  => Role::where('id', $id)->first(),
            'basic' => Basic::where('status', 'false')->get()
        ];

        return view('dashboard/feature/basic/basic-nonactive', $data);
    }

    # View Feature Project
    public function project()
    {
        $id = auth()->user()->role_id;
        $data = [
            'title'     => 'KelasIOT | Project',
            'role'      => Role::where('id', $id)->first(),
            'project'   => Project::all()
        ];

        return view('dashboard/feature/project/index', $data);
    }

    public function projectActive()
    {
        $id = auth()->user()->role_id;
        $data = [
            'title' => 'KelasIOT | Project Active',
            'role'  => Role::where('id', $id)->first(),
            'project' => Project::where('status', 'true')->get()
        ];

        return view('dashboard/feature/project/project-active', $data);
    }

    public function projectNonActive()
    {
        $id = auth()->user()->role_id;
        $data = [
            'title' => 'KelasIOT | Project Non-active',
            'role'  => Role::where('id', $id)->first(),
            'project' => Project::where('status', 'false')->get()
        ];

        return view('dashboard/feature/project/project-nonactive', $data);
    }

    # View Feature Quiz
    public function quiz()
    {
        $id = auth()->user()->role_id;
        $data = [
            'title'     => 'KelasIOT | Quiz',
            'role'      => Role::where('id', $id)->first(),
            'quiz'      => Quiz::all()
        ];

        return view('dashboard/feature/quiz/index', $data);
    }

    public function quizActive()
    {
        $id = auth()->user()->role_id;
        $data = [
            'title' => 'KelasIOT | Quiz Active',
            'role'  => Role::where('id', $id)->first(),
            'quiz'  => Quiz::where('status', 'true')->get()
        ];

        return view('dashboard/feature/quiz/quiz-active', $data);
    }

    public function quizNonActive()
    {
        $id = auth()->user()->role_id;
        $data = [
            'title' => 'KelasIOT | Quiz Non-active',
            'role'  => Role::where('id', $id)->first(),
            'quiz'  => Quiz::where('status', 'false')->get()
        ];

        return view('dashboard/feature/quiz/quiz-nonactive', $data);
    }

    # View Feature Component
    public function component()
    {
        $id = auth()->user()->role_id;
        $data = [
            'title'     => 'KelasIOT | Component',
            'role'      => Role::where('id', $id)->first(),
            'component'      => Component::all()
        ];

        return view('dashboard/feature/component/index', $data);
    }

    public function componentActive()
    {
        $id = auth()->user()->role_id;
        $data = [
            'title' => 'KelasIOT | Component Active',
            'role'  => Role::where('id', $id)->first(),
            'component'  => Component::where('status', 'true')->get()
        ];

        return view('dashboard/feature/component/component-active', $data);
    }

    public function componentNonActive()
    {
        $id = auth()->user()->role_id;
        $data = [
            'title' => 'KelasIOT | Component Non-active',
            'role'  => Role::where('id', $id)->first(),
            'component'  => Component::where('status', 'false')->get()
        ];

        return view('dashboard/feature/component/component-nonactive', $data);
    }

    # View Feature Question
    public function question(Quiz $post)
    {
        $id = auth()->user()->role_id;
        $data = [
            'title'     => 'KelasIOT | Quiz Questions',
            'role'      => Role::where('id', $id)->first(),
            'quiz'      => $post,
            'questions'      => Question::where('quiz_id', $post->id)->get()
        ];
        // dd($data);

        return view('dashboard/feature/quiz/question/index', $data);
    }

    # View Feature Gallery
    public function gallery(Component $post)
    {
        $id = auth()->user()->role_id;
        $data = [
            'title'     => 'KelasIOT | Component Gallery',
            'role'      => Role::where('id', $id)->first(),
            'component'      => $post,
            'galleries'      => Gallery::where('component_id', $post->id)->get()
        ];
        // dd($data);

        return view('dashboard/feature/component/gallery/index', $data);
    }

    /*
    =========================================================
                       Proses CRUD Feature
    =========================================================
    */
    # CRUD Feature Basic
    public function insertBasic(Request $request)
    {
        $request->validate([
            'title'     => 'required',
            'content'   => 'required',
            'author'    => 'required',
            'cover'     => 'image|file|max:1024',
            'status'    => 'required'
        ]);

        $slug = str_replace(' ', '-', strtolower($request->title));
        $data = [
            'title'     => $request->title,
            'slug'      => $slug,
            'content'   => $request->content,
            'author'    => $request->author,
            'status'    => $request->status,
            'created_at'   => now()
        ];
        if ($request->file('cover')) {
            $data['cover'] = $request->file('cover')->store('img-feature/basic');
        }

        DB::table('basics')->insert($data);
        return redirect('basic')->with('insert', 'di insert.');
    }

    public function updateBasic(Request $request)
    {
        $request->validate([
            'title'     => 'required',
            'content'   => 'required',
            'author'    => 'required',
            'cover'     => 'image|file|max:1024',
            'status'    => 'required'
        ]);

        $data = [
            'title'     => $request->title,
            'content'   => $request->content,
            'author'    => $request->author,
            'status'    => $request->status,
            'updated_at'   => now()
        ];
        if ($request->file('cover')) {
            $data['cover'] = $request->file('cover')->store('img-feature/basic');
        }

        $id = $request->id;
        DB::table('basics')->where('id', $id)->update($data);
        return redirect('basic')->with('update', 'di update.');
    }

    public function deleteBasic(Request $request)
    {
        $data = ['id' => $request->id];

        DB::table('basics')->delete($data);
        return redirect('basic')->with('delete', 'di delete.');
    }

    # CRUD Feature Project
    public function insertProject(Request $request)
    {
        $request->validate([
            'title'     => 'required',
            'content'   => 'required',
            'code'      => 'required',
            'author'    => 'required',
            'cover'     => 'image|file|max:1024',
            'image'     => 'image|file|max:1024',
            'status'    => 'required'
        ]);

        $slug = str_replace(' ', '-', strtolower($request->title));
        $data = [
            'title'     => $request->title,
            'slug'      => $slug,
            'content'   => $request->content,
            'code'      => $request->code,
            'author'    => $request->author,
            'status'    => $request->status,
            'created_at'   => now()
        ];
        if ($request->file('image')) {
            $data['image'] = $request->file('image')->store('img-feature/project/content');
        }

        if ($request->file('cover')) {
            $data['cover'] = $request->file('cover')->store('img-feature/project');
        }

        DB::table('projects')->insert($data);
        return redirect('project')->with('insert', 'di insert.');
    }

    public function updateProject(Request $request)
    {
        $request->validate([
            'title'     => 'required',
            'content'   => 'required',
            'code'      => 'required',
            'author'    => 'required',
            'cover'     => 'image|file|max:1024',
            'image'     => 'image|file|max:1024',
            'status'    => 'required'
        ]);

        $data = [
            'title'     => $request->title,
            'content'   => $request->content,
            'code'      => $request->code,
            'author'    => $request->author,
            'status'    => $request->status,
            'updated_at'   => now()
        ];
        if ($request->file('image')) {
            $data['image'] = $request->file('image')->store('img-feature/project/content');
        }
        if ($request->file('cover')) {
            $data['cover'] = $request->file('cover')->store('img-feature/project');
        }

        $id = $request->id;
        DB::table('projects')->where('id', $id)->update($data);
        return redirect('project')->with('update', 'di update.');
    }

    public function deleteProject(Request $request)
    {
        $data = ['id' => $request->id];

        DB::table('projects')->delete($data);
        return redirect('project')->with('delete', 'di delete.');
    }

    # CRUD Feature Quiz
    public function insertQuiz(Request $request)
    {
        $request->validate([
            'title'       => 'required',
            'description' => 'required',
            'author'      => 'required',
            'cover'       => 'image|file|max:1024',
            'status'      => 'required'
        ]);

        $slug = str_replace(' ', '-', strtolower($request->title));
        $data = [
            'title'       => $request->title,
            'slug'        => $slug,
            'description' => $request->description,
            'author'      => $request->author,
            'status'      => $request->status,
            'created_at'  => now()
        ];
        if ($request->file('cover')) {
            $data['cover'] = $request->file('cover')->store('img-feature/quiz');
        }

        DB::table('quizs')->insert($data);
        return redirect('quiz')->with('insert', 'di insert.');
    }

    public function updateQuiz(Request $request)
    {
        $request->validate([
            'title'       => 'required',
            'description' => 'required',
            'author'      => 'required',
            'cover'       => 'image|file|max:1024',
            'status'      => 'required'
        ]);

        $data = [
            'title'       => $request->title,
            'description' => $request->description,
            'author'      => $request->author,
            'status'      => $request->status,
            'updated_at'   => now()
        ];
        if ($request->file('cover')) {
            $data['cover'] = $request->file('cover')->store('img-feature/quiz');
        }

        $id = $request->id;
        DB::table('quizs')->where('id', $id)->update($data);
        return redirect('quiz')->with('update', 'di update.');
    }

    public function deleteQuiz(Request $request)
    {
        $data = ['id' => $request->id];

        DB::table('quizs')->delete($data);
        return redirect('quiz')->with('delete', 'di delete.');
    }

    # CRUD Feature Component
    public function insertComponent(Request $request)
    {
        $request->validate([
            'title'       => 'required',
            'description' => 'required',
            'author'      => 'required',
            'cover'       => 'image|file|max:1024',
            'status'      => 'required'
        ]);

        $slug = str_replace(' ', '-', strtolower($request->title));
        $data = [
            'title'       => $request->title,
            'slug'        => $slug,
            'description' => $request->description,
            'author'      => $request->author,
            'status'      => $request->status,
            'created_at'  => now()
        ];
        if ($request->file('cover')) {
            $data['cover'] = $request->file('cover')->store('img-feature/component');
        }

        DB::table('components')->insert($data);
        return redirect('component')->with('insert', 'di insert.');
    }

    public function updateComponent(Request $request)
    {
        $request->validate([
            'title'       => 'required',
            'description' => 'required',
            'author'      => 'required',
            'cover'       => 'image|file|max:1024',
            'status'      => 'required'
        ]);

        $data = [
            'title'       => $request->title,
            'description' => $request->description,
            'author'      => $request->author,
            'status'      => $request->status,
            'updated_at'   => now()
        ];
        if ($request->file('cover')) {
            $data['cover'] = $request->file('cover')->store('img-feature/component');
        }

        $id = $request->id;
        DB::table('components')->where('id', $id)->update($data);
        return redirect('component')->with('update', 'di update.');
    }

    public function deleteComponent(Request $request)
    {
        $data = ['id' => $request->id];

        DB::table('components')->delete($data);
        return redirect('component')->with('delete', 'di delete.');
    }

    # CRUD Feature Question
    public function insertQuestion(Request $request, Quiz $post)
    {
        $request->validate([
            'quiz_id'     => 'required',
            'question'    => 'required',
            'option_a'    => 'required',
            'option_b'    => 'required',
            'option_c'    => 'required',
            'option_d'    => 'required',
            'answer'      => 'required',
            'image'       => 'image|file|max:1024',
            'status'      => 'required'
        ]);

        $data = [
            'quiz_id'       => $request->quiz_id,
            'question'      => $request->question,
            'option_a'       => $request->option_a,
            'option_b'       => $request->option_b,
            'option_c'       => $request->option_c,
            'option_d'       => $request->option_d,
            'answer'       => $request->answer,
            'status'        => $request->status,
            'created_at'    => now()
        ];
        if ($request->file('image')) {
            $data['image'] = $request->file('image')->store('img-feature/quiz/question');
        }

        DB::table('questions')->insert($data);
        return redirect('/quiz/question/' . $post->id)->with('insert', 'di insert.');
    }

    public function updateQuestion(Request $request, Quiz $post)
    {
        $request->validate([
            'quiz_id'     => 'required',
            'question'    => 'required',
            'option_a'    => 'required',
            'option_b'    => 'required',
            'option_c'    => 'required',
            'option_d'    => 'required',
            'answer'      => 'required',
            'image'       => 'image|file|max:1024',
            'status'      => 'required'
        ]);

        $data = [
            'quiz_id'       => $request->quiz_id,
            'question'      => $request->question,
            'option_a'       => $request->option_a,
            'option_b'       => $request->option_b,
            'option_c'       => $request->option_c,
            'option_d'       => $request->option_d,
            'answer'       => $request->answer,
            'status'        => $request->status,
            'updated_at'    => now()
        ];
        // dd($data);
        if ($request->file('image')) {
            $data['image'] = $request->file('image')->store('img-feature/quiz/question');
        }

        $id = $request->id;
        DB::table('questions')->where('id', $id)->update($data);
        return redirect('/quiz/question/' . $post->id)->with('update', 'di update.');
    }

    public function deleteQuestion(Request $request, Quiz $post)
    {
        $data = ['id' => $request->id];

        DB::table('questions')->delete($data);
        return redirect('/quiz/question/' . $post->id)->with('delete', 'di delete.');
    }

    # CRUD Feature Gallery
    public function insertGallery(Request $request, Component $post)
    {
        $request->validate([
            'component_id' => 'required',
            'title'       => 'required',
            'description' => 'required',
            'link'      => 'required',
            'image'       => 'image|file|max:1024',
            'status'      => 'required'
        ]);

        $data = [
            'component_id' => $request->component_id,
            'title'       => $request->title,
            'description' => $request->description,
            'link'      => $request->link,
            'status'      => $request->status,
            'created_at'  => now()
        ];
        // dd($data);
        if ($request->file('image')) {
            $data['image'] = $request->file('image')->store('img-feature/component/gallery');
        }

        DB::table('galleries')->insert($data);
        return redirect('/component/gallery/' . $post->id)->with('insert', 'di insert.');
    }

    public function updateGallery(Request $request, Component $post)
    {
        $request->validate([
            'component_id' => 'required',
            'title'       => 'required',
            'description' => 'required',
            'link'      => 'required',
            'image'       => 'image|file|max:1024',
            'status'      => 'required'
        ]);

        $data = [
            'component_id' => $request->component_id,
            'title'       => $request->title,
            'description' => $request->description,
            'link'      => $request->link,
            'status'      => $request->status,
            'updated_at'  => now()
        ];
        // dd($data);
        if ($request->file('image')) {
            $data['image'] = $request->file('image')->store('img-feature/component/gallery');
        }

        $id = $request->id;
        DB::table('galleries')->where('id', $id)->update($data);
        return redirect('/component/gallery/' . $post->id)->with('update', 'di update.');
    }

    public function deleteGallery(Request $request, Component $post)
    {
        $data = ['id' => $request->id];

        DB::table('galleries')->delete($data);
        return redirect('/component/gallery/' . $post->id)->with('delete', 'di delete.');
    }

    /*
    =========================================================
                       View CRUD Comments
    =========================================================
    */

    public function comment()
    {
        $id = auth()->user()->role_id;
        $data = [
            'title'     => 'KelasIOT | Comments',
            'role'      => Role::where('id', $id)->first(),
            'comments'  => Comment::all()
        ];

        return view('dashboard/comment/index', $data);
    }

    /*
    =========================================================
                       Proses CRUD Comments
    =========================================================
    */

    public function deleteComment(Request $request)
    {
        $data = ['id' => $request->id];

        DB::table('comments')->delete($data);
        // session()->setFlashData('flash', 'dihapus');
        return redirect('comment')->with('sukses', 'di delete.');
    }
}
