<?php
   namespace Database\Factories;

   use App\Models\Inquiry;
   use Illuminate\Database\Eloquent\Factories\Factory;

   class InquiryFactory extends Factory
   {
       protected $model = Inquiry::class;

       public function definition()
       {
           return [
               'name' => $this->faker->name(),
               'email' => $this->faker->email(),
               'message' => $this->faker->paragraph(),
           ];
       }
   }
   ?>