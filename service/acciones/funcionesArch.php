<?php

    // Retorna una matriz del archivo, donde cada línea del archivo es una fila de la matriz
    function ExtraerArrayArchCsv($urlFile)
    {
        $file = fopen($urlFile, "r");
        $lista = NULL;
    
        // Cargo el array
        if($file != NULL && $file != false)
        {        
            for($i = 0; !feof($file); $i++)
            {         
                $linea = explode(";", fgets($file));        
                if(count($linea) > 1)
                {
                    $lista[$i] = $linea;                            
                }                    
            }            
            fclose($file);
        }    

        return $lista;
    }

    // Retorna el array de strings con los datos de fila del id solicitado. En caso de 
    // no encontrarlo retorna NULL. El id se busca en el primer campo.
    function GetRowById($urlFile, $id)
    {
        $file = fopen($urlFile, "r");
        $fila= NULL;

        if($file != NULL && $file !=false)
        {
            for($i = 0; !feof($file); $i++)
            {
                $fila = explode(";", fgets($file));
                if ($id == $fila[0])
                {
                    break;
                }
            }
            fclose($file);
        }

        return $fila;
    }

    // Abre si existe el archivo, lo crea sino, y escribe una línea al final. 
    function EscribirLineaArch($fileUrl, $line)
    {
        $file = fopen($fileUrl, "a");

        if($file != NULL && $file != false)
        {                        
            fwrite($file, "$line\n");            
            fclose($file);
        }
    }

    //
    function SobreEscribirArch ($fileUrl, $txt)
    {
        $file = fopen($fileUrl, "w");

        if($file != NULL && $file != false)
        {
            fwrite($file, $txt);
            fclose($file);
        } 
    }

    // Devuelve la lectura de todo el archivo.
    function LeerArch ($fileUrl)
    {
        $file = fopen($fileUrl, "r");

        if($file != NULL && $file != false)
        {
            return fread($file, filesize($fileUrl));
            fclose($file);
        }
    }

?>