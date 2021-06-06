<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## About News Projects

# Intsallation Commands

```bash
laravel new News
composer require laravel/jetstream
php artisan jetstream:install liveware
php artisan jetstream:install inertia
```

`php artisan vendor:publish --tag=jetstream-views
`

```npm install 
npm run dev
php artisan migrate
```

## UnZip Files

backend folder in public have all the Front End Theme Here are the Steps

1. In Public Directory  "backend" folder have all the Front End Theme

1. In Views Create Folder `admin`and also in admin folder create `body` folder
    1. In admin folder
        1. create file `admin_master.blade.php`
        1. create file `index.blade.php`
    1. In admin/body folder
        1. create file `header.blade.php,footer.blade.php,sidebar.blade.php`

`php artisan make:controller AdminController`

```php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
 public function logout()
    {
        Auth::logout();
        return Redirect::route('login')->with('success','User Logout');
    }
}
```

In Routes assign route name

```php
Route::get('/admin/logout',[App\Http\Controllers\AdminController::class,'logout'])->name('admin.logout');
```

use in your logout button in my case it is in `header.blade.php` so i use on it

`href="{{route('admin.logout')}}"`

## Custom Login/Register page

if you want to custom login or Register page then `app\Providers\JetstreamServiceProvider.php`

```php
public function boot()
    {
        $this->configurePermissions();

        Jetstream::deleteUsersUsing(DeleteUser::class);
        //Todo: For Login
        Fortify::loginView(function () {
            return view('auth.login');
        });
        //Todo: For Register
        Fortify::registerView(function (){
            return view('auth.register');
        });
    }
```

## We use Query builder so that's why we don't use model

```bash
php artisan make:migration create_category_table --create=categories
php artisan make:migration create_subcategory_table --create=subcategories
```

```php
// Todo: CATEGORY
 Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('category_en');
            $table->string('category_urdu');
            $table->string('soft_delete')->nullable()->default(0);
            $table->timestamps();
        });
// Todo: SUB CATEGORY
Schema::create('subcategories', function (Blueprint $table) {
            $table->id();
            $table->string('category_id');
            $table->string('subcategory_en');
            $table->string('subcategory_urdu');
            $table->timestamps();
        });
```

`php artisan migrate`

## Make Category Controller

`php artisan make:controller Backend/CategoryController`

crate crud of it w.r.t to Theme as shown in files

### Custom pagination

In Your backend/category/`index.blade.php` after the table tag use

```html

<div class="mt-3 d-flex justify-content-center">
    {{$category->links('pagination-links')}}
</div>
```

```bash
php artisan vendor:publish --tag=laravel-pagination
```

create file in Views name `pagination-links.blade.php` and paste the code

```php
@if ($paginator->hasPages())
    <ul class="pagination">

        @if ($paginator->onFirstPage())
            <li class="page-link"><span>← BACK</span></li>
        @else
            <li ><a  class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev">← BACK</a></li>
        @endif



        @foreach ($elements as $element)

            @if (is_string($element))
                <li class="page-link"><span>{{ $element }}</span></li>
            @endif



            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="page-link"><span>{{ $page }}</span></li>
                    @else
                        <li><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach



        @if ($paginator->hasMorePages())
            <li><a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next">Next →</a></li>
        @else
            <li class="page-link" ><span>Next →</span></li>
        @endif
    </ul>
@endif 
```

## Important

to save image in particular directory

```php

//TODO: With DB
 public function store(Request $request)
    {
        $data = array();
        $image = $request->image;
            if ($image) 
            {
                $image_one = uniqid() . '.' . $image->getClientOriginalExtension(); # take image like 123. with extention like png/jpeg
                Image::make($image)->resize(500, 300)->save('image/postimg/' . $image_one);
                $data['image'] = 'image/postimg/' . $image_one;
                // public/image/postimg/3434.png
                DB::table('posts')->where('id', $id)->update($data);
                return redirect()->route('posts.index');
            } 
            else
             {
                return redirect()->back();
            }   
 }
     
//Todo: With Elequent
 public function store(Request $request)
    {
 $data = array();
        $image = $request->photo;
        if ($image) {
            $image_one = uniqid() . '.' . $image->getClientOriginalExtension(); # take image like 123. with extention like png/jpeg
            Image::make($image)->resize(500, 300)->save('image/photo_gallery/' . $image_one);
            $data['photo'] = 'image/photo_gallery/' . $image_one;
            // public/image/postimg/3434.png
//            dd($data);
            Photo::create($data);
            return redirect()->route('photo.index');
        } else {
            return redirect()->back();
        }
}
```