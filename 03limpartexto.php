<?php

function resumirTexto(string $texto, int $limite, string $continue = "..."): string
{

   $textoLimpo = trim($texto);

   if(mb_strlen($textoLimpo) <= $limite){
      return $textoLimpo;
   }

   $resumirTexto = mb_substr($textoLimpo, 0, mb_strrpos(mb_substr($textoLimpo, 0, $limite), ''));

   return $resumirTexto.$continue;

   

}



?> 