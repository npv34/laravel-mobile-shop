<?php


namespace App\Http\Repositories\Eloquents;


use App\Http\Repositories\Contracts\RepositoryInterface;

abstract class EloquentRepository implements RepositoryInterface
{
    protected $model;

    public function __construct()
    {
        $this->setModel();
    }

    /**
     * get Model
     * @return string
     */
    abstract public function getModel();

    /**
     * set Model
     */
    public function setModel()
    {
        $this->model = app()->make($this->getModel());
    }

    public function getAll()
    {
        $result = $this->model->all();
        return $result;
    }

    public function create($object)
    {
        return $object->save();
    }

    public function delete($id)
    {
        return $this->model->destroy($id);
    }

    public function update($object)
    {
        return $object->save();
    }

    public function find($id, $columns = array('*'))
    {
        $result = $this->model->find($id);
        return $result;
    }

    public function getPaging()
    {
        $result = $this->model->orderBy('created_at', 'desc')->paginate(15);
        return $result;
    }

    public function findByClauses(array $data)
    {
        $model = $this->model;
        foreach ($data as $d){
            $model = $model->where($d['field'], $d['operator'], $d['value']);
        }
        return $model->orderBy('created_at', 'DESC')->get();
    }
}
