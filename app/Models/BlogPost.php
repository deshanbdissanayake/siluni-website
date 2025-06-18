<?php
   namespace App\Models;

   use Illuminate\Database\Eloquent\Factories\HasFactory;
   use Illuminate\Database\Eloquent\Model;

   class BlogPost extends Model
   {
       use HasFactory;

       protected $fillable = [
           'title',
           'content',
           'image',
       ];

       /**
        * Get the full URL for the blog post image.
        *
        * @return string|null
        */
       public function getImageUrlAttribute()
       {
           return $this->image ? asset('storage/' . $this->image) : null;
       }
   }
   ?>