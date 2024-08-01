<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClassesRequest;
use App\Services\Interfaces\ClassesServiceInterface;
use App\Services\Interfaces\CoursesServiceInterface;
use App\Services\Interfaces\UserClassesInterface;
use App\Services\Interfaces\UserServiceInterface;
use Illuminate\Http\Request;

class ClassesController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    protected $classesService;
    protected $courseService;
    protected $userService;
    protected $userClassesService;

    public function __construct(
        ClassesServiceInterface $classesService,
        CoursesServiceInterface $courseService,
        UserServiceInterface $userService,
        UserClassesInterface $userClassesService

    ) {
        $this->classesService = $classesService;
        $this->userService = $userService;
        $this->courseService = $courseService;
        $this->userClassesService = $userClassesService;

    }
    public function index()
    {
        $classes = $this->classesService->paginate();
        return view('classes.index', compact('classes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = $this->userService->all();
        $courses = $this->courseService->all();
        return view('classes.add', compact('users', 'courses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ClassesRequest $request)
    {
        $res = $this->classesService->create($request->all());
        return redirect()->route('admin.classes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $class = $this->classesService->find($id);
        $userInClass = $this->userClassesService->findByClass($id);
        $listUser = $this->userService->all();
        return view("classes.detail", compact('userInClass', 'class', 'listUser'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $class = $this->classesService->find($id);
        $users = $this->userService->all();
        $courses = $this->courseService->all();
        return view('classes.edit', compact('users', 'courses', 'class'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if ($request->user_id) {
            $this->userClassesService->update($id, $request->all());
            return true;
        } else if ($request->id_user_class) {
            return $this->userClassesService->delete($request->id_user_class);

        } else if ($request->list) {
            foreach ($request->list as $value) {
                $this->userClassesService->delete($value);
            }
            return true;
        } else {
            $this->validate($request, app(ClassesRequest::class)->rules());
            $res = $this->classesService->update($id, $request->all());
            return redirect()->route('admin.classes.index');

        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return $this->classesService->delete($id);
    }
    public function restore(string $id)
    {
        return $this->classesService->restore($id);

    }

    public function forceDelete(Request $request, string $id)
    {

        if ($request->list) {
            foreach ($request->list as $value) {

                $this->classesService->forceDelete($value);
            }
            return true;

        } else {
            $this->userService->forceDelete($id);
            return true;
        }


    }
}
