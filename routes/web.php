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

    $count = User::count();

    return view('pages.index', compact('active', 'count'));
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


    $back = back()->getTargetUrl();

    $active = 'login';

    return view('credentials.login', compact('active', 'back'));
});

Route::post('/login', function (Request $request) {

    // validating data
    $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    $basename = basename(parse_url($request->back, PHP_URL_PATH));

    $findLink = Link::where('link', $basename)->first();

    // login session
    if (Auth::attempt($credentials)) {

        $request->session()->regenerate();

        if ($findLink) {

            $slug = $findLink->where('user_id', Auth::user()->id)->first();

            return redirect($slug->url);
        }

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
            'username' => 'required|unique:users',
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

    $link = Link::where('user_id', Auth::user()->id)->paginate(4);

    $count = Link::count();

    if ($link->first() === null) {
        $link = null;
        return view('features.link', compact('active', 'link', 'count'));
    }
    return view('features.link', compact('active', 'link', 'count'));
})->middleware('auth');

Route::post('/link/create', function (Request $request) {

    $validatedLink = $request->validate([
        'link' => 'required',
        'url' => 'required|url',
    ]);

    $validatedLink['user_id'] = Auth::user()->id;

    $validLink = Link::where('user_id', $validatedLink['user_id'])->where('link', $validatedLink['link'])->first();

    if ($validLink) {
        return back()->with('error', 'Link already taken by you! Check again your link and choose another link!');
    }

    Link::create($validatedLink);

    return back()->with('success', 'Link Successfully Added!');
});

Route::get('/{link}', function ($link) {

    if (auth()->check()) {
        $slug = Link::where('user_id', Auth::user()->id)->where('link', $link)->first();

        if ($slug) {

            if (auth()->user()->id == $slug->user_id) {
                return redirect($slug->url);
            }
        }

        session()->flash('notFound', 'Your URL not found! Please check again!');

        return redirect('/link');
    }

    session()->flash('notFound', 'Your URL not found! Please check again!');

    return redirect('/link');
})->middleware('auth')->name('slug');

Route::get('/{id}/delete', function ($id) {

    $delete = Link::find($id);
    $delete->delete();

    return redirect('link')->with('success', 'Link Successfully Deleted!');
});

Route::post('/{id}/update', function ($id, Request $request) {

    $update = Link::find($id);
    $update->link = $request->link;
    $update->url = $request->url;

    $update->save();

    return redirect('link')->with('success', 'Link Successfully Updated!');
});
