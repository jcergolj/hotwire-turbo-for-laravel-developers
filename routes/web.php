<?php

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\HtmlString;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('talk/intro', ['next' => route('about-me')]);
})->name('intro');

Route::get('/about-me', function () {
    return view('talk/about-me', ['next' => route('story-time'), 'previous' => route('intro')]);
})->name('about-me');

Route::get('/story-time', function () {
    return view('talk/story-time', ['previous' => route('about-me'), 'next' => route('hotwire')]);
})->name('story-time');

Route::get('/hotwire', function () {
    return view('talk/hotwire', ['previous' => route('story-time'), 'next' => route('turbo')]);
})->name('hotwire');

Route::get('/turbo', function () {
    return view('talk/turbo', ['previous' => route('hotwire'), 'next' => route('turbo-drive-basic')]);
})->name('turbo');

Route::get('/turbo-drive-basic', function () {
    return view('talk/turbo-drive-basic', ['previous' => route('turbo'), 'next' => route('turbo-drive-events')]);
})->name('turbo-drive-basic');

Route::get('/turbo-drive-events', function () {
    return view('talk/turbo-drive-events', ['previous' => route('turbo-drive-basic'), 'next' => route('turbo-drive-different-method')]);
})->name('turbo-drive-events');

Route::get('/turbo-drive-different-method', function () {
    return view('talk/turbo-drive-different-method', ['previous' => route('turbo-drive-basic'), 'next' => route('turbo-drive-confirmation-modal')]);
})->name('turbo-drive-different-method');

Route::get('/turbo-drive-confirmation-modal', function () {
    return view('talk/turbo-drive-confirmation-modal', ['previous' => route('turbo-drive-different-method'), 'next' => route('turbo-drive-progress-bar')]);
})->name('turbo-drive-confirmation-modal');

Route::get('/turbo-drive-progress-bar', function () {
    return view('talk/turbo-drive-progress-bar', ['previous' => route('turbo-drive-different-method'), 'next' => route('turbo-laravel')]);
})->name('turbo-drive-progress-bar');

Route::get('/turbo-laravel', function () {
    return view('talk/turbo-laravel', ['previous' => route('turbo-drive-different-method'), 'next' => route('turbo-laravel-installation')]);
})->name('turbo-laravel');

Route::get('/turbo-laravel-installation', function () {
    return view('talk/turbo-laravel-installation', ['previous' => route('turbo-laravel'), 'next' => route('morphing')]);
})->name('turbo-laravel-installation');

Route::get('/morphing', function () {
    return view('talk/morphing', ['previous' => route('turbo-laravel-installation'), 'next' => route('morphing-users-example')]);
})->name('morphing');

// @codesection-users-example
// web.php
Route::get('/morphing-users-example', function () {
    return view(
        'talk/morphing-users-example',
        [
            'previous' => route('morphing'),
            'next' => route('refresh-users-example'),
            'users' => User::orderBy('name')->get()
        ]
    );
})->name('morphing-users-example');

Route::get('/refresh-users-example', function () {
    return view(
        'talk/refresh-users-example',
        [
            'previous' => route('morphing-users-example'),
            'next' => route('morphing-users-example-code'),
            'users' => User::orderBy('name')->get()
        ]
    );
})->name('refresh-users-example');

Route::post('/users', function (Request $request) {
    User::create([
        'name' => $request->name,
        'email' => $request->name."@example.com",
        'password' => Hash::make('password'),
    ]);

    return back();
})->name('users.create');

Route::delete('/users/{user}', function (User $user) {
    $user->delete();

    return back();
})->name('users.delete');

Route::get('eager-load', function () {
    sleep(2);

    return '<turbo-frame id="eager-load">Loaded!</turbo-frame>';
})->name('eager-load');

// @endcodesection-users-example

Route::get('/morphing-users-example-code', function () {
    return view('talk/morphing-users-example-code', ['previous' => route('refresh-users-example'), 'next' => route('turbo-frames')]);
})->name('morphing-users-example-code');

Route::get('/turbo-frames', function () {
    return view('talk/turbo-frames', ['previous' => route('morphing-users-example-code'), 'next' => route('turbo-frames-user-example')]);
})->name('turbo-frames');

Route::get('/turbo-frames-user-example', function () {
    return view('talk/turbo-frames-user-example', [
        'previous' => route('turbo-frames'),
        'next' => route('turbo-frames-user-example-code'),
        'user' => User::first()
    ]);
})->name('turbo-frames-user-example');

Route::get('user/{user}/edit', function (User $user) {
    return view('users/edit', ['user' => $user]);
})->name('users.edit');

Route::patch('user/{user}', function (Request $request, User $user) {
    $user->name = $request->name;
    $user->save();

    if (Str::contains(back()->getTargetUrl(), '/edit')) {
        return redirect(config('app.url').'/turbo-frames-user-example');
    }

    return back();
})->name('users.update');

Route::get('/turbo-frames-user-example-code', function () {
    return view('talk/turbo-frames-user-example-code', [
        'previous' => route('turbo-frames'),
        'next' => route('turbo-streams'),
    ]);
})->name('turbo-frames-user-example-code');

Route::get('/turbo-streams', function () {
    return view('talk/turbo-streams', ['previous' => route('turbo-frames'), 'next' => route('turbo-streams-user-example')]);
})->name('turbo-streams');

Route::get('/turbo-streams-user-example', function () {
    return view('talk/turbo-streams-user-example', ['previous' => route('turbo-streams'), 'next' => route('turbo-streams-user-example-front-end-code')]);
})->name('turbo-streams-user-example');

Route::get('/turbo-streams-user-example-front-end-code', function () {
    return view('talk/turbo-streams-user-example-front-end-code', ['previous' => route('turbo-streams-user-example'), 'next' => route('turbo-streams-user-example-template-front-end-code')]);
})->name('turbo-streams-user-example-front-end-code');

Route::get('/turbo-streams-user-example-template-front-end-code', function () {
    return view('talk/turbo-streams-user-example-template-front-end-code', ['previous' => route('turbo-streams-user-example-front-end-code'), 'next' => route('turbo-streams-user-example-back-end-code')]);
})->name('turbo-streams-user-example-template-front-end-code');

Route::get('/turbo-streams-user-example-back-end-code', function () {
    return view('talk/turbo-streams-user-example-back-end-code', ['previous' => route('turbo-streams-user-example-front-end-code'), 'next' => route('how-to-start')]);
})->name('turbo-streams-user-example-back-end-code');

// @codesection-turbo-stream-user-example
// web.php
Route::post('/turbo-stream-user-example', function (Request $request) {
    if ($request->action === 'remove') {
        return turbo_stream()
            ->target('user-'.$request->name)
            ->action($request->action);
    }

    if ($request->action === 'remove all') {
        return turbo_stream()
            ->removeAll('.users');
    }

    if ($request->action === 'replace') {
        return turbo_stream([
            turbo_stream()
                ->target($request->existing)
                ->action($request->action)
                ->view('turbo_streams._template', [
                    'user' => $request->name,
                    'action' => $request->action
                ]),

            turbo_stream()
                ->update(
                    'replace-form',
                    new HtmlString('<x-p>We replaced John with Joe</x-p>')
                )
        ]);
    }

    return turbo_stream()
            ->target('results')
            ->action($request->action)
            ->view('turbo_streams._template', [
                'user' => $request->name,
                'action' => $request->action
            ]);
})->name('turbo-stream-user-example.store');
// @endcodesection-turbo-stream-user-example

Route::get('/how-to-start', function () {
    return view('talk/how-to-start', ['previous' => route('turbo-streams'), 'next' => route('thank-you')]);
})->name('how-to-start');

Route::get('/thank-you', function () {
    return view('talk/thank-you', ['previous' => route('how-to-start'), 'next' => route('intro')]);
})->name('thank-you');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// @codesection-delete
// web.php
Route::delete('delete', function () {
    return back()->with('status', 'Your account has been deleted.');
})->name('delete');
// @endcodesection-delete

require __DIR__.'/auth.php';
