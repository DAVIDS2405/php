<?php

interface CrudBaseInterface
{
    public function add();
    public function get();
}
interface UpdateCrudInterface
{
    public function update();
}

interface DeleteCrudInterface
{
    public function delete();
}

interface GeneralCrudInterface extends CrudBaseInterface, UpdateCrudInterface, DeleteCrudInterface {}


class SaleCrud implements GeneralCrudInterface
{
    public function add()
    {
        echo "Se agrega";
    }
    public function update()
    {
        throw new Exception("No se puede actualizar la venta");
    }
    public function get()
    {

        echo "Se obtiene la venta";
    }
    public function delete()
    {
        echo "Se elimina";
    }
}

function update(GeneralCrudInterface $crud)
{
    $crud->add();
    $crud->update();
}
