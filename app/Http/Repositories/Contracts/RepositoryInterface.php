<?php


namespace App\Http\Repositories\Contracts;


interface RepositoryInterface
{
    function getAll();

    function create($object);

    function delete($id);

    function update($object);

    function find($id, $columns = array('*'));

    function findByClauses(array $data);
}
