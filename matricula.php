<?php
class Matricula {
    protected $centro;
    protected $curso;
    protected $turno;
    public function __construct($centro,$curso,$turno){
        $this->centro=$centro;
        $this->curso=$curso;
        $this->turno=$turno;
    }
    public function imprimirDatos(){
        echo" <table>
              <th>Centro</th><th>Curso</th><th>Turno</th>
              <tr><td>".$this->centro."</td><td>".$this->curso."</td><td>".$this->turno."</td></tr>
              </table>";
      } 
}
?>
