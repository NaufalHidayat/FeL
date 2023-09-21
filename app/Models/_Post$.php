<?php

namespace App\Models;


class Post {
    private static $project = [
        [
            "title" => "Project Pertama",
            "slug" => "project-pertama",
            "Language" => "C++",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit non obcaecati optio rem magnam deserunt blanditiis a voluptatum et veritatis quos corrupti labore doloribus, quisquam quibusdam? Porro voluptates voluptatem enim? Unde, vitae ad quibusdam enim atque repellat accusantium dolores laudantium explicabo, corporis beatae, ipsum consequuntur quam rerum itaque quos qui? Eveniet sit impedit quas laudantium tempora eum nesciunt, velit officiis facere numquam officia iusto veritatis cumque aperiam, ea quis quos totam magni possimus error ducimus qui quod? Qui, natus officiis." 
        ],
        [
            "title" => "Project Kedua",
            "slug" => "project-kedua",
            "Language" => "SolidJS",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit consequuntur quae nisi! Amet vitae illo repellat quis, unde quod rerum debitis eos placeat alias ipsa sed aut esse, est cumque ut ex at laborum! Porro temporibus ducimus quaerat aperiam possimus soluta ea dolorem qui praesentium eligendi, repellendus error officiis vitae!" 
        ]
        ];

        public static function all(){
            return collect(self::$project);
        }

        public static function find($slug){
            $project = static::all();
            return $project->firstWhere('slug', $slug);
        }
}


