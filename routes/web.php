<?php
use Illuminate\Support\Facades\Input;
use App\Post;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/**
 * Ini adalah routing yang pertama kali di akses
 */
Route::redirect('/', '/home');

/**
 * Ini adalah routing untuk menampilkan halaman home
 */
Route::get('/home', 'HomeController@index')->middleware('guest')->name('home');

Route::get('/signin', 'HomeController@login')->middleware('guest')->name('signin');

Route::get('/signup', 'HomeController@logup')->middleware('guest')->name('signup');

Route::get('/about', 'HomeController@tentang')->name('about');

Route::get('/rule', 'HomeController@kebijakanPrivasi')->name('rule');

Route::get('/home', 'HomeController@index')->middleware('guest')->name('home');

//Admin
Route::get('/datatable', 'AdminController@index')->name('admin');

//Post Login/Register/Logout
Route::post('/login', 'AuthController@postLogin')->middleware('guest')->name('login');
Route::post('/register', 'AuthController@postRegister')->middleware('guest')->name('register');
Route::get('auth/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\LoginController@handleProviderCallback');

//ketika sudah login

Route::get('/logout', 'AuthController@logout')->middleware('auth')->name('logout');
Route::get('/profile', 'AuthController@profile')->name('account');



// Crud Article
Route::get('/account/{id}/edit_post', 'PostController@edit')->middleware('auth')->name('edit');
Route::get('/timeline/create', 'PostController@create')->name('post.create');
Route::put('/account/{id}', 'PostController@update')->name('update');
Route::delete('/account/{id}', 'PostController@destroy')->middleware('auth')->name('destroy_posts');

//Search
Route::post('/search', function(){
    $qword = Input::get('qword');
    if($qword != ""){
        $posts = Post::where('body', 'LIKE' , '%' . $qword . '%')
                                    ->orWhere('title', 'LIKE' , '%' . $qword . '%')
                                    ->get();
        if(count($posts) >0 )
            return view('search.search_view')->withDetails($posts)->withQuery($qword);
    }
    return view('search.search_view')->withMassage("Hasil pencarian tidak ada.");
});
Route::post('/searching', function(){
    $q = Input::get('q');
    if($q != ""){
        $posts = Post::where('body', 'LIKE' , '%' . $q . '%')
                                    ->orWhere('title', 'LIKE' , '%' . $q . '%')
                                    ->get();
        if(count($posts) >0 )
            return view('search.search_view2')->withDetails($posts)->withQuery($q);
    }
    return view('search.search_view')->withMassage("Hasil pencarian tidak ada.");
});
//

Route::post('/timeline/store', 'PostController@store')->name('post.store');
Route::get('/timeline', 'PostController@index')->name('timeline');
Route::get('show_post/{id}', 'PostController@show')->name('post.show');
Route::get('profile', 'AuthController@profile')->name('profile');
Route::get('account/{id}', 'AuthController@account')->name('account');

//comments
Route::post('/comment/store', 'CommentController@store')->name('comment.add');
Route::post('/reply/store', 'CommentController@replyStore')->name('reply.add');
//notifications
Route::post('/notification/get', 'NotificationController@get');
Route::post('/notification/read', 'NotificationController@read');