<?php

namespace App\Http\Controllers;

use App\Events\TestEvent;
use Illuminate\Http\Request;

class TestEventController extends Controller
{
    public function testingEvent(){
        event(new TestEvent);
    }
}
