<?php

namespace App\Enums; 

/**
 * Enums to reflect the status of the tasks
 */
enum TasksStatusEnum: int {

    case NEW = 1;

    case COMPLETED = 2;   

}