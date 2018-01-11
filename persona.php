<?php
class Persona {
    protected $nombre;
    protected $apellidos;
    protected $direccion;
    protected $codigoPostal;
    protected $provincia;
    protected $telefono;
    protected $email;
    public function __construct($nombre,$apellidos,$direccion,$codigoPostal,$provincia,$telefono,$email){
        $this->nombre=$nombre;
        $this->apellidos=$apellidos;
        $this->direccion=$direccion;
        $this->codigoPostal=$codigoPostal;
        $this->provincia=$provincia;
        $this->telefono=$telefono;
        $this->email= $email;
    }
    public function imprimirDatos(){
      echo"<table>
            <th>Nombre</th><th>Apellidos</th><th>Dirección</th><th>CP</th><th>Provincia</th><th>Teléfono</th><th>E-mail</th>
            <tr><td>".$this->nombre."</td><td>".$this->apellidos."</td><td>".$this->direccion."</td>".$this->codigoPostal."</td><td>".$this->provincia."</td><td>".$this->telefono."</td><td>".$this->email."</td></tr>
            </table>";
    }

}
?>
