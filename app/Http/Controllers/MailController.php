<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ConfirmEmail;
use Illuminate\Support\Facades\Mail;
use App\Users;

class MailController extends Controller
{
    //

    public function confirm($userId) {
      $user = Users::findOrFail($userId);
    }
}
