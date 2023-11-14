<?php 

class ControladorBlog{
    /**
     *  Mostrar el contenido tabla: blog
     */

    static public function ctrMostrarBlog(){
        $tabla = "blog_etj";

        $respuesta = ModeloBlog::mdlMostrarBlog($tabla);

        return $respuesta;
    }

    /**
     *  Mostrar tabla categorias
     */

     static public function ctrMostrarCategorias(){
        $tabla = "categorias_etj";

        $respuesta = ModeloBlog::mdlMostrarCategorias($tabla);

        return $respuesta;
    }

    /**
     * Mostrar articulos y categorias con inner join
     */

     static public function ctrMostrarConInnerjoin($desde, $cantidad){
        $tabla1 = "categorias_etj";
        $tabla2 = "articulos_etj";

        $respuesta = ModeloBlog::mdlMostrarConInnerjoin($tabla1, $tabla2, $desde, $cantidad);

        return $respuesta;
     }

     /**
      *  Mostrar total de articulos
      */

    static public function ctrMostrarTotalArticulos(){
        $tabla1 = "articulos_etj";

        $respuesta = ModeloBlog::mdlMostrarTotalArticulos($tabla1);

        return $respuesta;
    }
}

