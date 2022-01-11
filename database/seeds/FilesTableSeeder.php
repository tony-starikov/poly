<?php

use Illuminate\Database\Seeder;

class FilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('files')->insert([

            // Work 1

            [
                'work_id' => '1',
                'type' => 'image',
                'video_mp4' => null,
                'video_webm' => null,
                'src' => 'works/work_image_1.jpg',
            ],
            [
                'work_id' => '1',
                'type' => 'image',
                'video_mp4' => null,
                'video_webm' => null,
                'src' => 'works/work_image_2.jpg',
            ],
            [
                'work_id' => '1',
                'type' => 'video',
                'video_mp4' => 'works/work_video.mp4',
                'video_webm' => 'works/work_video.webm',
                'src' => null,
            ],
            [
                'work_id' => '1',
                'type' => 'marmoset',
                'video_mp4' => null,
                'video_webm' => null,
                'src' => 'https://www.artstation.com/embed/665067',
            ],
            [
                'work_id' => '1',
                'type' => 'gif',
                'video_mp4' => null,
                'video_webm' => null,
                'src' => 'works/work_gif.gif',
            ],

            // Work 2

            [
                'work_id' => '2',
                'type' => 'image',
                'video_mp4' => null,
                'video_webm' => null,
                'src' => 'works/work_image_1.jpg',
            ],
            [
                'work_id' => '2',
                'type' => 'image',
                'video_mp4' => null,
                'video_webm' => null,
                'src' => 'works/work_image_2.jpg',
            ],
            [
                'work_id' => '2',
                'type' => 'video',
                'video_mp4' => 'works/work_video.mp4',
                'video_webm' => 'works/work_video.webm',
                'src' => null,
            ],
            [
                'work_id' => '2',
                'type' => 'marmoset',
                'video_mp4' => null,
                'video_webm' => null,
                'src' => 'https://www.artstation.com/embed/665067',
            ],
            [
                'work_id' => '2',
                'type' => 'gif',
                'video_mp4' => null,
                'video_webm' => null,
                'src' => 'works/work_gif.gif',
            ],

            // Work 3

            [
                'work_id' => '3',
                'type' => 'image',
                'video_mp4' => null,
                'video_webm' => null,
                'src' => 'works/work_image_1.jpg',
            ],
            [
                'work_id' => '3',
                'type' => 'image',
                'video_mp4' => null,
                'video_webm' => null,
                'src' => 'works/work_image_2.jpg',
            ],
            [
                'work_id' => '3',
                'type' => 'video',
                'video_mp4' => 'works/work_video.mp4',
                'video_webm' => 'works/work_video.webm',
                'src' => null,
            ],
            [
                'work_id' => '3',
                'type' => 'marmoset',
                'video_mp4' => null,
                'video_webm' => null,
                'src' => 'https://www.artstation.com/embed/665067',
            ],
            [
                'work_id' => '3',
                'type' => 'gif',
                'video_mp4' => null,
                'video_webm' => null,
                'src' => 'works/work_gif.gif',
            ],

            // Work 4

            [
                'work_id' => '4',
                'type' => 'image',
                'video_mp4' => null,
                'video_webm' => null,
                'src' => 'works/work_image_1.jpg',
            ],
            [
                'work_id' => '4',
                'type' => 'image',
                'video_mp4' => null,
                'video_webm' => null,
                'src' => 'works/work_image_2.jpg',
            ],
            [
                'work_id' => '4',
                'type' => 'video',
                'video_mp4' => 'works/work_video.mp4',
                'video_webm' => 'works/work_video.webm',
                'src' => null,
            ],
            [
                'work_id' => '4',
                'type' => 'marmoset',
                'video_mp4' => null,
                'video_webm' => null,
                'src' => 'https://www.artstation.com/embed/665067',
            ],
            [
                'work_id' => '4',
                'type' => 'gif',
                'video_mp4' => null,
                'video_webm' => null,
                'src' => 'works/work_gif.gif',
            ],

            // Work 5

            [
                'work_id' => '5',
                'type' => 'image',
                'video_mp4' => null,
                'video_webm' => null,
                'src' => 'works/work_image_1.jpg',
            ],
            [
                'work_id' => '5',
                'type' => 'image',
                'video_mp4' => null,
                'video_webm' => null,
                'src' => 'works/work_image_2.jpg',
            ],
            [
                'work_id' => '5',
                'type' => 'video',
                'video_mp4' => 'works/work_video.mp4',
                'video_webm' => 'works/work_video.webm',
                'src' => null,
            ],
            [
                'work_id' => '5',
                'type' => 'marmoset',
                'video_mp4' => null,
                'video_webm' => null,
                'src' => 'https://www.artstation.com/embed/665067',
            ],
            [
                'work_id' => '5',
                'type' => 'gif',
                'video_mp4' => null,
                'video_webm' => null,
                'src' => 'works/work_gif.gif',
            ],

            // Work 6

            [
                'work_id' => '6',
                'type' => 'image',
                'video_mp4' => null,
                'video_webm' => null,
                'src' => 'works/work_image_1.jpg',
            ],
            [
                'work_id' => '6',
                'type' => 'image',
                'video_mp4' => null,
                'video_webm' => null,
                'src' => 'works/work_image_2.jpg',
            ],
            [
                'work_id' => '6',
                'type' => 'video',
                'video_mp4' => 'works/work_video.mp4',
                'video_webm' => 'works/work_video.webm',
                'src' => null,
            ],
            [
                'work_id' => '6',
                'type' => 'marmoset',
                'video_mp4' => null,
                'video_webm' => null,
                'src' => 'https://www.artstation.com/embed/665067',
            ],
            [
                'work_id' => '6',
                'type' => 'gif',
                'video_mp4' => null,
                'video_webm' => null,
                'src' => 'works/work_gif.gif',
            ],

            // Work 7

            [
                'work_id' => '7',
                'type' => 'image',
                'video_mp4' => null,
                'video_webm' => null,
                'src' => 'works/work_image_1.jpg',
            ],
            [
                'work_id' => '7',
                'type' => 'image',
                'video_mp4' => null,
                'video_webm' => null,
                'src' => 'works/work_image_2.jpg',
            ],
            [
                'work_id' => '7',
                'type' => 'video',
                'video_mp4' => 'works/work_video.mp4',
                'video_webm' => 'works/work_video.webm',
                'src' => null,
            ],
            [
                'work_id' => '7',
                'type' => 'marmoset',
                'video_mp4' => null,
                'video_webm' => null,
                'src' => 'https://www.artstation.com/embed/665067',
            ],
            [
                'work_id' => '7',
                'type' => 'gif',
                'video_mp4' => null,
                'video_webm' => null,
                'src' => 'works/work_gif.gif',
            ],

            // Work 8

            [
                'work_id' => '8',
                'type' => 'image',
                'video_mp4' => null,
                'video_webm' => null,
                'src' => 'works/work_image_1.jpg',
            ],
            [
                'work_id' => '8',
                'type' => 'image',
                'video_mp4' => null,
                'video_webm' => null,
                'src' => 'works/work_image_2.jpg',
            ],
            [
                'work_id' => '8',
                'type' => 'video',
                'video_mp4' => 'works/work_video.mp4',
                'video_webm' => 'works/work_video.webm',
                'src' => null,
            ],
            [
                'work_id' => '8',
                'type' => 'marmoset',
                'video_mp4' => null,
                'video_webm' => null,
                'src' => 'https://www.artstation.com/embed/665067',
            ],
            [
                'work_id' => '8',
                'type' => 'gif',
                'video_mp4' => null,
                'video_webm' => null,
                'src' => 'works/work_gif.gif',
            ],

            // Work 9

            [
                'work_id' => '9',
                'type' => 'image',
                'video_mp4' => null,
                'video_webm' => null,
                'src' => 'works/work_image_1.jpg',
            ],
            [
                'work_id' => '9',
                'type' => 'image',
                'video_mp4' => null,
                'video_webm' => null,
                'src' => 'works/work_image_2.jpg',
            ],
            [
                'work_id' => '9',
                'type' => 'video',
                'video_mp4' => 'works/work_video.mp4',
                'video_webm' => 'works/work_video.webm',
                'src' => null,
            ],
            [
                'work_id' => '9',
                'type' => 'marmoset',
                'video_mp4' => null,
                'video_webm' => null,
                'src' => 'https://www.artstation.com/embed/665067',
            ],
            [
                'work_id' => '9',
                'type' => 'gif',
                'video_mp4' => null,
                'video_webm' => null,
                'src' => 'works/work_gif.gif',
            ],

            // Work 10

            [
                'work_id' => '10',
                'type' => 'image',
                'video_mp4' => null,
                'video_webm' => null,
                'src' => 'works/work_image_1.jpg',
            ],
            [
                'work_id' => '10',
                'type' => 'image',
                'video_mp4' => null,
                'video_webm' => null,
                'src' => 'works/work_image_2.jpg',
            ],
            [
                'work_id' => '10',
                'type' => 'video',
                'video_mp4' => 'works/work_video.mp4',
                'video_webm' => 'works/work_video.webm',
                'src' => null,
            ],
            [
                'work_id' => '10',
                'type' => 'marmoset',
                'video_mp4' => null,
                'video_webm' => null,
                'src' => 'https://www.artstation.com/embed/665067',
            ],
            [
                'work_id' => '10',
                'type' => 'gif',
                'video_mp4' => null,
                'video_webm' => null,
                'src' => 'works/work_gif.gif',
            ],

            // Work 11

            [
                'work_id' => '11',
                'type' => 'image',
                'video_mp4' => null,
                'video_webm' => null,
                'src' => 'works/work_image_1.jpg',
            ],
            [
                'work_id' => '11',
                'type' => 'image',
                'video_mp4' => null,
                'video_webm' => null,
                'src' => 'works/work_image_2.jpg',
            ],
            [
                'work_id' => '11',
                'type' => 'video',
                'video_mp4' => 'works/work_video.mp4',
                'video_webm' => 'works/work_video.webm',
                'src' => null,
            ],
            [
                'work_id' => '11',
                'type' => 'marmoset',
                'video_mp4' => null,
                'video_webm' => null,
                'src' => 'https://www.artstation.com/embed/665067',
            ],
            [
                'work_id' => '11',
                'type' => 'gif',
                'video_mp4' => null,
                'video_webm' => null,
                'src' => 'works/work_gif.gif',
            ],

            // Work 12

            [
                'work_id' => '12',
                'type' => 'image',
                'video_mp4' => null,
                'video_webm' => null,
                'src' => 'works/work_image_1.jpg',
            ],
            [
                'work_id' => '12',
                'type' => 'image',
                'video_mp4' => null,
                'video_webm' => null,
                'src' => 'works/work_image_2.jpg',
            ],
            [
                'work_id' => '12',
                'type' => 'video',
                'video_mp4' => 'works/work_video.mp4',
                'video_webm' => 'works/work_video.webm',
                'src' => null,
            ],
            [
                'work_id' => '12',
                'type' => 'marmoset',
                'video_mp4' => null,
                'video_webm' => null,
                'src' => 'https://www.artstation.com/embed/665067',
            ],
            [
                'work_id' => '12',
                'type' => 'gif',
                'video_mp4' => null,
                'video_webm' => null,
                'src' => 'works/work_gif.gif',
            ],

            // Work 13

            [
                'work_id' => '13',
                'type' => 'image',
                'video_mp4' => null,
                'video_webm' => null,
                'src' => 'works/work_image_1.jpg',
            ],
            [
                'work_id' => '13',
                'type' => 'image',
                'video_mp4' => null,
                'video_webm' => null,
                'src' => 'works/work_image_2.jpg',
            ],
            [
                'work_id' => '13',
                'type' => 'video',
                'video_mp4' => 'works/work_video.mp4',
                'video_webm' => 'works/work_video.webm',
                'src' => null,
            ],
            [
                'work_id' => '13',
                'type' => 'marmoset',
                'video_mp4' => null,
                'video_webm' => null,
                'src' => 'https://www.artstation.com/embed/665067',
            ],
            [
                'work_id' => '13',
                'type' => 'gif',
                'video_mp4' => null,
                'video_webm' => null,
                'src' => 'works/work_gif.gif',
            ],

        ]);
    }
}
