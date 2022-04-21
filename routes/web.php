<?php

use App\Models\Link;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {

    $active = 'home';

    return view('pages.index', compact('active'));
});

Route::get('/about', function () {

    $active = 'about';

    return view('pages.about', compact('active'));
});

Route::get('/contact', function () {

    $active = 'contact';

    return view('pages.contact', compact('active'));
});

Route::get('/login', function () {

    $active = 'login';

    return view('credentials.login', compact('active'));
});

Route::post('/login', function (Request $request) {

    // validating data
    $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    // login session
    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();

        return redirect()->intended('/')->with('success', 'Login Success!');
    }

    return back()->with('error', 'Email Atau Password Salah!');
})->name('login');

Route::get('/logout', function (Request $request) {

    Auth::logout();

    $request->session()->regenerate();

    return redirect()->intended('/')->with('success', 'Logout Success!');
});

Route::get('/register', function () {

    $active = 'register';

    return view('credentials.register', compact('active'));
});

Route::post('/register', function (Request $request) { {

        // validating the data input
        $validatedRegister = $request->validate([
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5',
        ]);

        // hashing the image into bcrypt
        $validatedRegister['password'] = Hash::make($validatedRegister['password']);

        // create user
        User::create($validatedRegister);

        // redirect
        return redirect('/login')->with('success', 'Your Registration is succeed, Please Login!');
    }
});

Route::get('/projects', function () {

    $active = 'projects';

    return view('pages.projects', compact('active'));
});

Route::get('/link', function () {

    $active = 'link';

    $link = Link::where('user_id', Auth::user()->id)->get();

    return view('features.link', compact('active', 'link'));
})->middleware('auth');

Route::post('/link/create', function (Request $request) {

    $validatedLink = $request->validate([
        'link' => 'required|unique:links',
        'url' => 'required|url',
    ]);

    $validatedLink['user_id'] = Auth::user()->id;

    Link::create($validatedLink);

    return back()->with('success', 'Link Successfully Added!');
});

Route::get('/{link}', function ($link) {

    if (auth()->check()) {
        $slug = Link::where('link', $link)->first();

        if ($slug) {
            return redirect($slug->url);
        }
    }

    return abort(404);
});
