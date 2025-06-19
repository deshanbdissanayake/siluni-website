<?php
    use App\Http\Controllers\Admin\DashboardController;
    use App\Http\Controllers\Admin\BlogPostController;
    use App\Http\Controllers\Admin\GalleryImageController;
    use App\Http\Controllers\Admin\InquiryController;
    use App\Http\Controllers\FrontendController;
    use App\Http\Controllers\BlogController;
    use App\Http\Controllers\GalleryController;
    use App\Http\Controllers\ContactController;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Route;

    // Authentication Routes (provided by laravel/ui)
    Auth::routes();

    // Frontend Routes
    Route::get('/', [FrontendController::class, 'home'])->name('home');
    Route::get('/home', [FrontendController::class, 'home'])->name('home');
    Route::get('/about', [FrontendController::class, 'about'])->name('about');
    Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
    Route::get('/blog/{id}', [BlogController::class, 'show'])->name('blog.show');
    Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery.index');
    Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
    Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

    // Admin Routes
    Route::prefix('admin')->middleware(['auth'])->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
        Route::resource('blog-posts', BlogPostController::class)->names([
            'index' => 'admin.blog-posts.index',
            'create' => 'admin.blog-posts.create',
            'store' => 'admin.blog-posts.store',
            'show' => 'admin.blog-posts.show',
            'edit' => 'admin.blog-posts.edit',
            'update' => 'admin.blog-posts.update',
            'destroy' => 'admin.blog-posts.destroy',
        ]);
        Route::resource('gallery-images', GalleryImageController::class)->names([
            'index' => 'admin.gallery-images.index',
            'create' => 'admin.gallery-images.create',
            'store' => 'admin.gallery-images.store',
            'show' => 'admin.gallery-images.show',
            'edit' => 'admin.gallery-images.edit',
            'update' => 'admin.gallery-images.update',
            'destroy' => 'admin.gallery-images.destroy',
        ]);
        Route::resource('inquiries', InquiryController::class)->names([
            'index' => 'admin.inquiries.index',
            'show' => 'admin.inquiries.show',
            'destroy' => 'admin.inquiries.destroy',
        ])->only(['index', 'show', 'destroy']);
    });
?>