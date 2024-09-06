<?php
namespace App\Repository;

use App\Models\Tasks;
use Illuminate\Support\Collection;

interface TaskRepositoryInterface
{
   public function all(): Collection;
}