<?php

   function exibirmsg($resul){
            
       switch ($resul) {
                                    case -1:
                                        echo ' <div class="alert alert-info">
                                                Ocorreu um erro na operação TENTE MAIS TARDE!!!
                                               </div>';
                                        break;
                                    
                                    case 0;
                                        echo ' <div class="alert alert-warning">
                                                Preencher campos obrigatorios!!
                                               </div>';
                                        break;

                                    case 1;
                                        echo ' <div class="alert alert-success">
                                                Ação realizada com sucesso!!!
                                               </div>';
                                        break;
                                }
       
   }


?>
