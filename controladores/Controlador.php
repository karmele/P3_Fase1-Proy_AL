<?php
class Controlador
{
    public function run()
    {
        if (!isset($_POST['saludar']))//no se ha enviado el formulario
        { // primera petición
            //se llama al método para mostrar el formulario inicial
            $this->mostrarFormulario();
			exit();
        } else
        {
            //el formulario ya se ha enviado
            //se recogen y procesan los datos
            //se llama al método para mostrar el resultado
            $nombre=$_POST['nombre'];
            $apellido=$_POST['apellido'];
            $resultado ="Bienvenido/a $nombre $apellido ";
            $this->mostrarResultado($resultado);
			exit();		
        }
    }
    private function mostrarFormulario()
    {
     //se muestra la vista del formulario (la plantilla form_bienvenida.php)   
        include 'vistas/form_bienvenida.php';
    }
    private function mostrarResultado($resultado)
    {
    // y se muestra la vista del resultado (la plantilla resultado.,php)
        include 'vistas/vista_resultado.php';
    }
}
?>