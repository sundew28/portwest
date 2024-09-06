<?php

namespace App\Repository\Eloquent;

use App\Models\Tasks;
use App\Repository\TaskRepositoryInterface;
use Illuminate\Support\Collection;

class TaskRepository extends BaseRepository implements TaskRepositoryInterface
{

   /**
    * TaskRepository constructor.
    *
    * @param Tasks $model
    */
   public function __construct(Tasks $model)
   {
       parent::__construct($model);
   }

   /**
    * @return Collection
    */
   public function all(): Collection
   {
       return $this->model->all();    
   }

   /**
     * Update the specified task in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update($request, $id): mixed
    {        
       return $this->model->find($id)->update($request);        
    }

    /**
     * Delete the specified task in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id): mixed
    {
       return $this->model->find($id)->delete();        
    }
}