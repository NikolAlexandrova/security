<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
return view('home');
});

Route::get('/about', function () {
return view('about');
});

Route::get('/services', function () {
return view('services');
});

Route::get('/contact', function () {
return view('contact');
});

Route::get('/faq', function () {
return view('faq');
});

Route::get('/securitytraining', function () {
    return view('securitytraining');
});

Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');


use Illuminate\Support\Facades\Mail;

Route::get('/test-email', function () {
    try {
        Mail::raw('This is a test email', function ($message) {
            $message->to('n1kol1vay@gmail.com')
                ->subject('Test Email')
                ->from('svhelloworld223@gmail.com', 'Test Sender');
        });

        return 'Email sent successfully';
    } catch (\Exception $e) {
        return 'Error: ' . $e->getMessage();
    }
});
