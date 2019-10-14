<?php


namespace App\Http\Services;


interface BaseServiceInterface
{
    function getAll();
    function findById($id);
}
