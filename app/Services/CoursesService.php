<?php

namespace App\Services;

use App\Models\Courses;
use App\Services\Interfaces\CoursesServiceInterface;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

/**
 * Class CoursesService
 * @package App\Services
 */
class CoursesService implements CoursesServiceInterface
{
    protected $model;
    public function __construct(Courses $courses)
    {
        $this->model = $courses;
    }
    public function paginate()
    {
        return $this->model->withTrashed()->orderBy('id', 'desc')->paginate(5);
    }
    public function all()
    {
        return $this->model->withTrashed()->orderBy('id', 'desc')->get();
    }
    public function find($id)
    {
        return $this->model->withTrashed()->where('id', $id)->first();
    }
    public function create(array $data)
    {
        return $this->model->create($data);
    }
    public function update($id, array $data)
    {
        unset($data["_token"]);
        unset($data["_method"]);
        $course = $this->model->where('id', $id)->first();

        if (isset($data['lessons'])) {
            $res = json_decode($course->lessons, true) ?? [];
            $res[$data["lessons"]] = [];
            $course->lessons = json_encode($res);
        } else if (isset($data["delete_lessons"])) {
            $res = json_decode($course->lessons, true) ?? [];
            unset($res[$data["delete_lessons"]]);
            $course->lessons = json_encode($res);
        } else if (isset($data['update_lesson'])) {
            $res = json_decode($course->lessons, true) ?? [];
            $res[$data['update_lesson']][] = $data["create_section_name"];
            $course->lessons = json_encode($res);
        } else if (isset($data['delete_section'])) {
            $res = json_decode($course->lessons, true) ?? [];
            $delete_section = $data['delete_section'];
            $res[$data["from_lesson"]] = array_filter($res[$data["from_lesson"]], function ($e) use ($delete_section) {
                return $e !== $delete_section;
            });
            $course->lessons = json_encode($res);
        } else if (isset($data["change_name_lesson"])) {
            $res = json_decode($course->lessons, true) ?? [];
            $newArr = [];
            foreach ($res as $key => $value) {
                if ($key != $data["change_name_lesson"])
                    $newArr[$key] = $value;
                else
                    $newArr[$data["new_lesson_name"]] = $value;
            }
            $course->lessons = json_encode($newArr);

        } else {

            $course->course_name = $data["course_name"];
            $course->slug = $data["slug"];
            $course->price = $data["price"];
            $course->discount = $data["discount"];
            $course->category_id = $data["category_id"];
            $course->description = $data["description"];
            $course->overview = $data["overview"];
            $course->number_of_sessions = $data["number_of_sessions"];
            if (isset($data["image"])) {
                $course->image = $data["image"];
                $course->image_public_id = $data["image_public_id"];
            }

            if (isset($data["background"])) {
                $course->background = $data["background"];
                $course->background_public_id = $data["background_public_id"];
            }
        }
        return $course->save();
    }
    public function delete($id)
    {
        return $this->model->where('id', $id)->delete();
    }

    public function restore($id)
    {
        return $this->model->withTrashed()->where('id', $id)->restore($id);
    }

    public function forceDelete($id)
    {
        $course = $this->model->withTrashed()->where('id', $id)->first();
        Cloudinary::destroy($course->image_public_id);
        Cloudinary::destroy($course->background_public_id);

        return $course->forceDelete();
    }
}
