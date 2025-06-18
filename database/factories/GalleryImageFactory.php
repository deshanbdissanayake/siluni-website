<?php
namespace Database\Factories;

use App\Models\GalleryImage;
use Illuminate\Database\Eloquent\Factories\Factory;

class GalleryImageFactory extends Factory
{
    protected $model = GalleryImage::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'image_path' => 'gallery/placeholder.jpg',
            'description' => $this->faker->paragraph(),
        ];
    }
}