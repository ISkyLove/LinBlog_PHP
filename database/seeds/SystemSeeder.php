<?php
use Illuminate\Database\Seeder;

class SystemSeeder extends Seeder
{

    public function run()
    {
        $config = [
            [
                'cate' => 1,
                'system_name' => 'title',
                'system_value' => 'Lin Blog'
            ],
            [
                'cate' => 1,
                'system_name' => 'subheading',
                'system_value' => '朔风如解意，容易莫摧残'
            ],
            [
                'cate' => 1,
                'system_name' => 'put_on_record',
                'system_value' => 'SkyLove'
            ],
            [
                'cate' => 1,
                'system_name' => 'all_ow_access',
                'system_value' => 1
            ],
            [
                'cate' => 1,
                'system_name' => 'allow_comments',
                'system_value' => 1
            ],
            [
                'cate' => 1,
                'system_name' => 'seo_key',
                'system_value' => 'IT ANDROID JAVA'
            ],
            [
                'cate' => 1,
                'system_name' => 'seo_desc',
                'system_value' => 'IT 技术 随笔 心情'
            ],
            [
                'cate' => 1,
                'system_name' => 'copyright',
                'system_value' => 'Lin Blog'
            ]
        ];
        DB::table('systems')->insert($config);
    }

}