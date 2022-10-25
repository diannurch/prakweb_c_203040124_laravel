<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Dian Nurcahya N',
        //     'email' => 'diannurcahya52@gamil.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Kim Seokjin',
        //     'email' => 'jin@gamil.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);


        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla a sapiente architecto distinctio dignissimos natus sint ut ea eum corporis dolore fugiat soluta omnis, voluptatum enim mollitia quidem. Perspiciatis at assumenda excepturi laudantium deserunt architecto aliquid, mollitia neque impedit id quod atque error facere eum praesentium aperiam.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta commodi doloribus quis, incidunt tenetur fuga, debitis eligendi delectus atque deleniti ratione ab ullam suscipit, dolorem cumque vitae. Dolorum, nesciunt ipsam, eius quos dignissimos nam laboriosam iusto explicabo nemo beatae, expedita rerum veniam sed vel deserunt. Dicta repellendus incidunt eaque mollitia itaque magnam blanditiis aliquam aperiam iste sit molestiae optio ad dolor excepturi debitis pariatur, deserunt vero aut quod tempora quos esse rerum delectus. Numquam eius rerum quasi ab deserunt. Assumenda asperiores expedita repellendus quo tempora iure inventore in deserunt quam alias commodi fuga beatae dicta, sequi aut eius tenetur et.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla a sapiente architecto distinctio dignissimos natus sint ut ea eum corporis dolore fugiat soluta omnis, voluptatum enim mollitia quidem. Perspiciatis at assumenda excepturi laudantium deserunt architecto aliquid, mollitia neque impedit id quod atque error facere eum praesentium aperiam.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta commodi doloribus quis, incidunt tenetur fuga, debitis eligendi delectus atque deleniti ratione ab ullam suscipit, dolorem cumque vitae. Dolorum, nesciunt ipsam, eius quos dignissimos nam laboriosam iusto explicabo nemo beatae, expedita rerum veniam sed vel deserunt. Dicta repellendus incidunt eaque mollitia itaque magnam blanditiis aliquam aperiam iste sit molestiae optio ad dolor excepturi debitis pariatur, deserunt vero aut quod tempora quos esse rerum delectus. Numquam eius rerum quasi ab deserunt. Assumenda asperiores expedita repellendus quo tempora iure inventore in deserunt quam alias commodi fuga beatae dicta, sequi aut eius tenetur et.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla a sapiente architecto distinctio dignissimos natus sint ut ea eum corporis dolore fugiat soluta omnis, voluptatum enim mollitia quidem. Perspiciatis at assumenda excepturi laudantium deserunt architecto aliquid, mollitia neque impedit id quod atque error facere eum praesentium aperiam.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta commodi doloribus quis, incidunt tenetur fuga, debitis eligendi delectus atque deleniti ratione ab ullam suscipit, dolorem cumque vitae. Dolorum, nesciunt ipsam, eius quos dignissimos nam laboriosam iusto explicabo nemo beatae, expedita rerum veniam sed vel deserunt. Dicta repellendus incidunt eaque mollitia itaque magnam blanditiis aliquam aperiam iste sit molestiae optio ad dolor excepturi debitis pariatur, deserunt vero aut quod tempora quos esse rerum delectus. Numquam eius rerum quasi ab deserunt. Assumenda asperiores expedita repellendus quo tempora iure inventore in deserunt quam alias commodi fuga beatae dicta, sequi aut eius tenetur et.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla a sapiente architecto distinctio dignissimos natus sint ut ea eum corporis dolore fugiat soluta omnis, voluptatum enim mollitia quidem. Perspiciatis at assumenda excepturi laudantium deserunt architecto aliquid, mollitia neque impedit id quod atque error facere eum praesentium aperiam.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta commodi doloribus quis, incidunt tenetur fuga, debitis eligendi delectus atque deleniti ratione ab ullam suscipit, dolorem cumque vitae. Dolorum, nesciunt ipsam, eius quos dignissimos nam laboriosam iusto explicabo nemo beatae, expedita rerum veniam sed vel deserunt. Dicta repellendus incidunt eaque mollitia itaque magnam blanditiis aliquam aperiam iste sit molestiae optio ad dolor excepturi debitis pariatur, deserunt vero aut quod tempora quos esse rerum delectus. Numquam eius rerum quasi ab deserunt. Assumenda asperiores expedita repellendus quo tempora iure inventore in deserunt quam alias commodi fuga beatae dicta, sequi aut eius tenetur et.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
