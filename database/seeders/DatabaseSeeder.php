<?php
   namespace Database\Seeders;

   use Illuminate\Database\Seeder;
   use App\Models\User;
   use App\Models\BlogPost;
   use App\Models\GalleryImage;
   use App\Models\Inquiry;

   class DatabaseSeeder extends Seeder
   {
       public function run()
       {
           User::factory()->create([
               'name' => 'Admin',
               'email' => 'admin@example.com',
               'password' => bcrypt('password'),
           ]);

           BlogPost::factory(10)->create();
           GalleryImage::factory(20)->create();
           Inquiry::factory(5)->create();
       }
   }
   ?>