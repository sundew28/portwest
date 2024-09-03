<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Actions Handled By Resource Controller
    Verb        URI                     Action      Route Name
    GET         /photos	                index       photos.index
    GET	        /photos/create	        create	    photos.create
    POST	    /photos	                store	    photos.store
    GET	        /photos/{photo}	        show	    photos.show
    GET	        /photos/{photo}/edit	edit	    photos.edit
    PUT/PATCH	/photos/{photo}	        update	    photos.update
    DELETE	    /photos/{photo}	        destroy	    photos.destroy
     */
}
