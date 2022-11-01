<?php

class Model extends DataBase {
    public function listUsers(){
        return mysqli_query($this->conx, "SELECT * FROM users");
    }
public function infoUsuario()
{
return array(
'nombre' => 'Jeremias',
'apellido' => 'Sprindfield'
);
}
}