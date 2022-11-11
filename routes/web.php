<?php

use App\Jobs\SendTestMailJob;
use Illuminate\Support\Facades\Mail;

use App\Mail\SendMarkDownMail;
use App\Mail\TestSendingMail;
use App\Models\User;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {


    // $data = ["name" => "The Test Coder"];
    // Mail::send('email', $data, function ($msg) {
    //     $msg->to("ambadcr7@gmail.com", "Advance laravel User")
    //         ->subject("Advance Laravel Series");
    //     // ->setBody("Hi, This is working fine");
    // });
    // echo "Mail Sent";

    // Mail::to("test@test.com")->send(new TestSendingMail());
    // echo "Mail Sent";

    // dispatch(function () {
    //     Mail::to("test1@test.com")
    //         ->send(new SendMarkDownMail());
    // })->delay(now()->addSeconds(5));
    // echo "Mail Sent";

    // Mail::to("test1@test.com")
    //     ->send(new SendMarkDownMail());
    // echo "Mail Sent";
    $user = User::findOrFail(3);
    // dispatch(new SendTestMailJob())->delay(now()->addSeconds(5));
    SendTestMailJob::dispatch($user)->delay(now()->addSeconds(5));
    echo "Mail Sent OK!!";
});
