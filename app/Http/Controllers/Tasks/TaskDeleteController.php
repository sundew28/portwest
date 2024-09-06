<?php

namespace App\Http\Controllers\Tasks;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\Repository\TaskRepositoryInterface;
use Illuminate\Support\Facades\Redirect;

/**
 * Single action controller in use to keep the code clean , scable and easy to maintain. I have used the repository design 
 * pattern to seperate the business logic and data layer. An abstract layer is placed in between.
 * 
 */
class TaskDeleteController extends Controller
{
    /**
     * Inject our Task interface into the constructor with promoted properties
     * 
     */
    public function __construct(private TaskRepositoryInterface $taskRepository)
    {}

    /**
     * Handle the incoming request.
     *
     * @param  \App\Http\Requests\TasksRequest $request
     *
     * @return mixed
     */
    public function __invoke(Request $request): mixed
    { 

        // Usage of "rescue" function of laravel instead of try - catch        
        rescue(
            fn () => $this->taskRepository->destroy($request->id), 
            "Task couldn't be deleted.",
            false
        );       
       return Redirect::to('/tasks');
    }
}
