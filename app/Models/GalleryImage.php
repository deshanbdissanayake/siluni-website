<?php
   namespace App\Models;

   use Illuminate\Database\Eloquent\Factories\HasFactory;
   use Illuminate\Database\Eloquent\Model;

   class GalleryImage extends Model
   {
       use HasFactory;

       protected $fillable = [
           'title',
           'image_path',
           'description',
       ];

       /**
        * Get the full URL for the gallery image.
        *
        * @return string
        */
       public function getImageUrlAttribute()
       {
           return asset('storage/' . $this->image_path);
       }
   }
   ?>