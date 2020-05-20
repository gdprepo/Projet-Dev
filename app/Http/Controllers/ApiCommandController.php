<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\Command as CommandResource;
use App\Command;

class ApiCommandController extends Controller
{
    public function index()
    {
        return CommandResource::collection(Command::all());
    }
}
