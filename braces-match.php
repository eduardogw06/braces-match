<?php

    function bracesMatch($string){
        $string = str_split($string);
        $charactersMatch = [
            '(' => ')',
            '[' => ']',
            '{' => '}'
        ];
        $aux = [];
        
        for($i = 0; $i < count($string); $i++){
            $openBraces = ['(', '[', '{'];
            
            // Guardar os caracteres de abertura
            if(in_array($string[$i], $openBraces)){
                $aux[] = $string[$i];
            }else{
                if(!empty($aux)){
                    $last = array_pop($aux);
                    
                    // Verificar a correspondência do caracter de fechamento
                    if($string[$i] !== $charactersMatch[$last]){
                        return false;
                    }
                }else{
                    return false;
                }
            }
        }
        
        if(!empty($aux)){
            return false;
        }
        
        return true;
    }


    echo bracesMatch("()");
    echo bracesMatch("(){}[]");
    echo bracesMatch("{()}{}");
    echo bracesMatch("[{()}][(){}]");
    echo "--------------";
    echo bracesMatch("(");
    echo bracesMatch("[]{()");
    echo bracesMatch("[{)]");
    echo bracesMatch("{()}}{}");