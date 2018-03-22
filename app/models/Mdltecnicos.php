<?php

/*
 * This file is part of the Ocrend Framewok 2 package.
 *
 * (c) Ocrend Software <info@ocrend.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace app\models;

use app\models as Model;
use Ocrend\Kernel\Models\Models;
use Ocrend\Kernel\Models\IModels;
use Ocrend\Kernel\Models\ModelsException;
use Ocrend\Kernel\Models\Traits\DBModel;
use Ocrend\Kernel\Router\IRouter;
use Ocrend\Kernel\Helpers\Strings;
use Ocrend\Kernel\Helpers\Files;
use PHPExcel;
use PHPExcel_IOFactory;
use PHPExcel_Reader_Excel2007;
use PHPExcel_Style_NumberFormat;

/**
 * Modelo Mdlpersonal
 *
 * @author Jorge Jara H. <jjara@wys.cl>
 */

class Mdltecnicos extends Models implements IModels {
    /**
      * Característica para establecer conexión con base de datos.
    */
    use DBModel;

    // Contenido del modelo...


		/**
      * Obtiene elementos de Mdltecnicos en tbltecnicos
      *
      * @param string $select: Elementos de tbltecnicos a seleccionar
      *
      * @return false|array: false si no hay datos.
      *                     array con los datos.
    */
    public function verTecnicos(string $select = '*'){
    return $this->db->select($select,'tbltecnicos');
}
    final public function getTecnicosById(int $id, string $select = '*') {
        return $this->db->select($select,'tbltecnicos',"id_tecnicos='$id'",'LIMIT 1');
    }
    final public function getPersonalAll($filtro = '1=1') {
      $filtro = 'where '.$filtro;
      return $this->db->query('select * from tbltecnicos'.$filtro);
    }
    public function registra_nuevo_tecnico() : array {
       try {
           global $http;

           # Obtener los datos $_POST
           $rut = $http->request->get('rut');
           $name = $http->request->get('nombres');
           $codigo = $http->request->get('codigo');
           $telefono = $http->request->get('telefono');

           # Verificar que no están vacíos
           if ($this->functions->e($rut, $name,$telefono)) {
               throw new ModelsException('Ingresar datos donde campos se especifica como Requerido');
           }
           # Verificar Rut
           $this->checkRut($rut);
           # Registrar al usuario
           $this->db->insert('tbltecnicos', array(
               'rut' => $rut,
               'nombre' => $name,
               'codigo' => $codigo,
               'telefono' => $telefono,
           ));

           return array('success' => 1, 'message' => 'Registrado con éxito.');
       } catch (ModelsException $e) {
           return array('success' => 0, 'message' => $e->getMessage());
       }
   }
    public function editar_tecnico(): array {
        try {
            global $http;
            #Obtener los datos $_POST
            $rut = $http->request->get('rut');
            $nombre = $http->request->get('nombre');
            $codigo = $http->request->get('codigo');
            $id_tecnico = $http->request->get('id_tecnico');
            $telefono = $http->request->get('telefono');

            if ($this->functions->e($rut, $nombre, $codigo,$telefono)) {
                throw new ModelsException('Todos los datos son necesarios');
            }
            $this->db->update('tbltecnicos',array(
                'rut'=> $rut,
                'nombre' => $nombre,
                'codigo' => $codigo,
                'telefono' => $telefono,
            ),"id_tecnicos='$id_tecnico'");
            //
            return array('success' => 1, 'message' => 'Modificacion de horas extra exitosa');
        }catch (ModelsException $e) {
            return array('success' => 0, 'message' => $e->getMessage());
        }
    }
    /**
      * Actualiza estado de usuario
      * y luego redirecciona a administracion/usuarios
      *
      * @return void
    */
    final public function update_estado_tecnico($id) {
        global $config;

        # Actualiza Estado
        $this->db->query("UPDATE tbltecnicos SET estado=if(estado=0,1,0) WHERE id_tecnicos=$id LIMIT 1;");


        # Redireccionar a la página principal del controlador
        $this->functions->redir($config['site']['url'] . 'despacho/listar_tecnicos');
    }

    /**
     * Verifica el rut introducido, tanto el formato como su existencia en el sistema
     *
     * @param string $rut: Rut del trabajador
     *
     */
    private function checkRut(string $rut) {
        # Existencia de email
        $rut = $this->db->scape($rut);
        $query = $this->db->select('rut', 'tbltecnicos', "rut='$rut'", 'LIMIT 1');
        if (false !== $query) {
            throw new ModelsException('El Rut introducido ya existe.');
        }
    }
    /**
     * Carga por excel
     *
     *
     */
     public function cargar_excel(){
         global $http;

         $file = $http->files->get('excel');

         $docname="";
         if (null !== $file ){
             $ext_doc = $file->getClientOriginalExtension();

             if ($ext_doc<>'xls' and $ext_doc<>'xlsx') return array('success' => 0, 'message' => "Debe seleccionar un archivo valido...");

             $docname = 'cargatecnico.'.$ext_doc;

             $file->move(API_INTERFACE . 'views/app/temp/', $docname);

             $archivo = API_INTERFACE . 'views/app/temp/'. $docname;
             //carga del excelname
             $objReader = new PHPExcel_Reader_Excel2007();
             $objPHPExcel = $objReader->load($archivo);

             $i=2;
             $param=0;
             $id_tec="";
             $cont=0;
             $this->db->Update('tbltecnicos', array('estado' => '0'),"1=1");
             while($param==0){
                 try {
                    if ($objPHPExcel->getActiveSheet()->getCell('A'.$i)->getvalue()!=NULL)
                    {
                        $rut = $objPHPExcel->getActiveSheet()->getCell('A'.$i)->getvalue();
                        $nombre=$objPHPExcel->getActiveSheet()->getCell('B'.$i)->getValue();
                        $codigo= $objPHPExcel->getActiveSheet()->getCell('C'.$i)->getvalue();
                        $telefono= $objPHPExcel->getActiveSheet()->getCell('D'.$i)->getvalue();

     					$result= $this->db->query_select("Select id_tecnicos from tbltecnicos Where codigo='$codigo'");
                        if (false == $result){
                            $this->db->Insert('tbltecnicos', array(
                               'rut'=>$rut,
                               'nombre'=>$nombre,
                               'codigo'=>$codigo,
                               'telefono'=>$telefono
                            ));
                        }else{
                            $this->db->Update('tbltecnicos', array(
                               'rut'=>$rut,
                               'nombre'=>$nombre,
                               'telefono'=>$telefono,
                               'estado'=> '1'
                           ),"codigo ='$codigo'");
                        }
                        $cont=0;
                    }else{
                        $cont++;
                    }
                    if ($cont>10){$param=1;}
                    $i++;
                 } catch (\Exception $e) {
                    return array('success' => 0, 'message' => $e->getMessage() );
                 }
             }
             if($i>2){
                return array('success' => 1, 'message' => "Datos cargados exitosamente");
             }else{
                return array('success' => 0, 'message' => "Valla!!! algo salio mal!");
             }
         }else{
             return array('success' => 0, 'message' => "Debe seleccionar un archivo valido...");
         }
     }

    /**
      * __construct()
    */
    public function __construct(IRouter $router = null) {
        parent::__construct($router);
        $this->startDBConexion();
    }

    /**
      * __destruct()
    */
    public function __destruct() {
        parent::__destruct();
        $this->endDBConexion();
    }
}
