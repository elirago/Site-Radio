<?php
require ("includes/mysql.php");
class modelo {
  private function conexion(){
      require("includes/config.php");
      return $mysqlBD =new mysql($configGral["bd"]["host"],$configGral["bd"]["usuario"],$configGral["bd"]["password"],$configGral["bd"]["base"],$configGral["bd"]["puerto"]); 
    }
  

  public function ejecutaconsulta($sql,$tipo){ 
    $mysqlBD=$this->conexion(); 
    $resRegistros=$mysqlBD->ejecutarQuery($sql);
    switch ($tipo) {           
      case 'selectmultiple':    
        while($row=$mysqlBD->regresaResultados($resRegistros)){
            $array[]=$row;
      }          
        return $array; 
      break;             
      case 'select':                
        $row=$mysqlBD->regresaResultados($resRegistros);                
        return $row;             
      break;             
      case 'insert':                 
        if($resRegistros){                     
          return true;                   
        }else{                    
          return false;                   
        }             
      break;             
      case 'insertreturn':                
        $ultimoidInsert=$mysqlBD->ultimoId();               
        return $ultimoidInsert;             
      break;             
      case 'update':               
      if($resRegistros){                    
        return true;                    
      }else{                    
        return false;                   
      }               
      break;  
      case 'numeroreg':
      $row=$mysqlBD->numeroRegistros($resRegistros); 
      return $row;
      break;
      case 'delete':               
      if($resRegistros){                    
        return true;                    
      }else{                    
        return false;                   
      }               
      break; 
    } 
  }


public function slideHome(){
  $sql="SELECT * FROM `galeria_home` where status=1";
    $res=$this->ejecutaconsulta($sql,"selectmultiple");
    return $res;
}
public function listaDias(){
 $sql="SELECT * FROM `cat_dias` where status=1";
    $res=$this->ejecutaconsulta($sql,"selectmultiple");
    return $res;
}
public function listaHoteles(){
  $sql="SELECT * FROM `hoteles` where status=1";
    $res=$this->ejecutaconsulta($sql,"selectmultiple");
    return $res;
}
public function listarProgramacion($idDia,$idCiudad){

$sql="SELECT * FROM `items_programacion` WHERE `id_dia` = '".$idDia."' AND id_ciudad='".$idCiudad."' ORDER BY `items_programacion`.`horario_inicial` ASC";
  $res=$this->ejecutaconsulta($sql,"selectmultiple");
  $numeroreg=$this->ejecutaconsulta($sql,"numeroreg");
  
  include("lista-programacion.php");


  
}

public function listarProgramacionMovil($idDia,$idCiudad){

$sql="SELECT * FROM `items_programacion` WHERE `id_dia` = '".$idDia."' AND id_ciudad='".$idCiudad."' ORDER BY `items_programacion`.`horario_inicial` ASC";
  $res=$this->ejecutaconsulta($sql,"selectmultiple");
  $numeroregMovil=$this->ejecutaconsulta($sql,"numeroreg");
  

  include("lista-programacionMovil.php");
}


public function datosLocutor($idL){
  $sql="SELECT * FROM `locutores` where ID='".$idL."' AND status=1";
    $res=$this->ejecutaconsulta($sql,"select");
    return $res;
}
public function datosPrograma($idP){
 $sql="SELECT * FROM `programas` where ID='".$idP."' AND status=1";
    $res=$this->ejecutaconsulta($sql,"select");
    return $res;
}
public function datosdias($id){
  $sql="SELECT * FROM `cat_dias` where ID='".$id."' AND status=1";
    $res=$this->ejecutaconsulta($sql,"select");
    return $res;
}
public function datosciudades($id){
  $sql="SELECT * FROM `cat_ciudades` where ID='".$id."' AND status=1";
    $res=$this->ejecutaconsulta($sql,"select");
    return $res;
}
public function listarDestacada(){
  $sql="SELECT * FROM `notipop` where destacada=1 and fecha_inicio<'".date("Y-m-d")."' and fecha_vigencia>'".date("Y-m-d")."' and status=1";
    $res=$this->ejecutaconsulta($sql,"select");
    return $res;
}

public function listarnotipopHome(){
  $sql="SELECT * FROM `notipop` where fecha_inicio<'".date("Y-m-d")."' and fecha_vigencia>'".date("Y-m-d")."' and status=1 and destacada=0 ORDER BY `notipop`.`orden` ASC limit 0,4";
    $res=$this->ejecutaconsulta($sql,"selectmultiple");
    return $res;
}
public function listarnotipopHomexlimit($limit){
  $sql="SELECT * FROM `notipop` where fecha_inicio<'".date("Y-m-d")."' and fecha_vigencia>'".date("Y-m-d")."' and status=1  ORDER BY `notipop`.`ID` ASC limit ".$limit."";
    $res=$this->ejecutaconsulta($sql,"selectmultiple");
    return $res;
}

public function listarpopChart(){
  $sql="SELECT * FROM `pop_chart` where status=1 ORDER BY `pop_chart`.`posicion` ASC limit 0,2";
    $res=$this->ejecutaconsulta($sql,"selectmultiple");
    return $res;
}
public function listaCiudades(){
  $sql="SELECT * FROM `cat_ciudades` where status=1";
  $res=$this->ejecutaconsulta($sql,"selectmultiple");
  return $res;
}

public function mostrarHeroPrincipal($idCiudad){

 $sql="SELECT * FROM `galeria_home` where status=1 and id_ciudad='".$idCiudad."' and fecha_vigencia>='".date("Y-m-d")."'";
    $res=$this->ejecutaconsulta($sql,"selectmultiple");

include("hero-principal.php");

}

public function mostrarStreaming($idCiudad){
  $datosciudades=$this->datosciudades($idCiudad);
include("streaming.php");

}

public function listaPopChart(){
  $sql="SELECT * FROM `pop_chart` where status=1 ORDER BY `pop_chart`.`posicion` ASC ";
  $res=$this->ejecutaconsulta($sql,"selectmultiple");
  return $res;
}
public function datosestadoPosicion($id){
  $sql="SELECT * FROM `cat_estado_posicion` where ID='".$id."' AND status=1";
    $res=$this->ejecutaconsulta($sql,"select");
    return $res;
}
public function datosPopChart($id){
   $sql="SELECT * FROM `pop_chart` where ID='".$id."' AND status=1";
    $res=$this->ejecutaconsulta($sql,"select");
    return $res;
}
public function listaNotipop(){
  $sql="SELECT * FROM `notipop` where fecha_inicio<'".date("Y-m-d")."' and fecha_vigencia>'".date("Y-m-d")."' and status=1  ORDER BY `notipop`.`orden` ASC limit 0,5";
  $res=$this->ejecutaconsulta($sql,"selectmultiple");
  return $res;
}

public function verVideoPop($idPopChart){
$datosPopChart=$this->datosPopChart($idPopChart);
include("frameVideo.php");
}

public function verTituloVideoPop($idPopChart){
$datosPopChart=$this->datosPopChart($idPopChart);
$datosestadoPosicion=$this->datosestadoPosicion($datosPopChart['id_cat_estado_posicion']);
include("titulosVideo.php");
}

public function listarNotipopCompletas(){
  
  $sql="SELECT * FROM `notipop` where fecha_inicio<'".date("Y-m-d")."' and fecha_vigencia>'".date("Y-m-d")."' and status=1  ORDER BY `notipop`.`orden` ASC ";
    $res=$this->ejecutaconsulta($sql,"selectmultiple");
    return $res;

}

public function totalNotipop(){
$sql="SELECT * FROM `notipop` where fecha_inicio<'".date("Y-m-d")."' and fecha_vigencia>'".date("Y-m-d")."' and status=1  ORDER BY `notipop`.`orden` ASC ";
    $total=$this->ejecutaconsulta($sql,"numeroreg");
    return $total;

}

public function totalNotipoplimit($compag,$cantidadMostrar){
$sql="SELECT * FROM `notipop` where fecha_inicio<'".date("Y-m-d")."' and fecha_vigencia>'".date("Y-m-d")."' and status=1  ORDER BY `notipop`.`orden` ASC LIMIT ".(($compag-1)*$cantidadMostrar)." , ".$cantidadMostrar." ";
    $res=$this->ejecutaconsulta($sql,"selectmultiple");
    return $res;

}

public function datosNotipopxid($idNotipop){
    $sql="SELECT * FROM `notipop` where ID='".$idNotipop."' AND status=1";
    $res=$this->ejecutaconsulta($sql,"select");
    return $res;
}

public function listarGaleriaPrincipal(){
  
  $sql="SELECT * FROM `galeria` where status=1  ORDER BY orden ASC ";
    $res=$this->ejecutaconsulta($sql,"selectmultiple");
    return $res;

}
public function listarGaleriaPrincipallimit($compag,$cantidadMostrar){
  
  $sql="SELECT * FROM `galeria` where status=1  ORDER BY orden ASC LIMIT ".(($compag-1)*$cantidadMostrar)." , ".$cantidadMostrar." ";
    $res=$this->ejecutaconsulta($sql,"selectmultiple");
    return $res;

}
public function datosGaleria($idGaleria){
    $sql="SELECT * FROM `galeria` where ID='".$idGaleria."' AND status=1";
    $res=$this->ejecutaconsulta($sql,"select");
    return $res;
}

public function listaGaleriaImgGrandes($orden){
  
 $sql="SELECT * FROM `items_galeria` where status=1 and tipo=1 and orden='".$orden."' ";
    $res=$this->ejecutaconsulta($sql,"select");
    return $res;

}
public function listaGaleriaImgChicas($orden){
  
 $sql="SELECT * FROM `items_galeria` where status=1 and tipo=0 and orden='".$orden."' ";
    $res=$this->ejecutaconsulta($sql,"select");
    return $res;

}

public function totalimagesGaleriaxtipo($tipo,$idGaleria){
$sql="SELECT * FROM `items_galeria` where id_galeria='".$idGaleria."' and status=1 and tipo='".$tipo."'  ";
    $total=$this->ejecutaconsulta($sql,"numeroreg");
    return $total;

}

public function listarGaleriaxlimit($limit){
  $sql="SELECT * FROM `galeria` where status=1   ORDER BY orden ASC limit ".$limit."  ";
  $res=$this->ejecutaconsulta($sql,"selectmultiple");
  return $res;
}

public function listarLocutores(){
  
  $sql="SELECT * FROM `locutores` where status=1 ORDER BY orden ASC";
    $res=$this->ejecutaconsulta($sql,"selectmultiple");
    return $res;

}
public function listaProgramasxLocutor($idLocutor){
  $sql="SELECT DISTINCT(id_programa) FROM `items_programacion` WHERE `id_locutor` = '".$idLocutor."' ORDER BY `items_programacion`.`id_programa` ASC";
    $res=$this->ejecutaconsulta($sql,"selectmultiple");
    return $res;
}
public function datoHorainicial($idPrograma){
   $sql="SELECT DISTINCT(horario_inicial)  FROM `items_programacion` WHERE `id_programa` = '".$idPrograma."'";
    $res=$this->ejecutaconsulta($sql,"select");
    return $res;
}
public function datoHorafinal($idPrograma){
   $sql="SELECT DISTINCT(horario_final)  FROM `items_programacion` WHERE `id_programa` = '".$idPrograma."'";
    $res=$this->ejecutaconsulta($sql,"select");
    return $res;
}


public function datodiaInicial($idPrograma){
   $sql="SELECT *  FROM `items_programacion` WHERE `id_programa` = '".$idPrograma."' ORDER BY `items_programacion`.`id_dia` ASC limit 0,1 ";
    $res=$this->ejecutaconsulta($sql,"select");
$datosdias=$this->datosdias($res['id_dia']);

    return $datosdias['nombre'];
}
public function datodiaFinal($idPrograma){
   $sql="SELECT *  FROM `items_programacion` WHERE `id_programa` = '".$idPrograma."' ORDER BY `items_programacion`.`id_dia` DESC limit 0,1 ";
    $res=$this->ejecutaconsulta($sql,"select");
$datosdias=$this->datosdias($res['id_dia']);

    return $datosdias['nombre'];
}

public function verificarMusica($diaAuxiliarActual,$diaActual,$horaminutos,$horaActual,$idCiudad){
  $sql="SELECT * FROM `items_programacion` WHERE `id_dia` = '".$diaAuxiliarActual."' and horario_inicial<='".$horaActual.":00:00' and horario_final>'".$horaActual.":00:00' AND id_ciudad='".$idCiudad."'";
    $res=$this->ejecutaconsulta($sql,"select");
  
return $res;
}

public function datosWebCam(){
  $sql="SELECT * FROM `webcam` where ID='1' and status=1 AND fecha_vigencia>='".date('Y-m-d')."'";
    $res=$this->ejecutaconsulta($sql,"select");
    return $res;

}




}

?>