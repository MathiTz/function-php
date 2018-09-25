<?php
    
    $hierarquia = array(
        array(
            'nome_cargo'=>'CEO',
            'subordinados'=>array(
                // inicio: diretor comercial   
                array(
                    'nome_cargo'=>'Diretor Comercial',
                    'subordinados'=>array(
                        //Inicio: gerente de vendas
                        'nome_cargo'=>'Gerente de Vendas'
                    )
                    //termino : gerente de vendas
                ),
                // Termino: diretor
                //Inicio: diretor financeiro
                array(
                    'nome_cargo'=>'Diretor Financeiro',
                    'subordinados'=>array(
                        //Inicio: Gerente de Contas a Pagar
                        array(
                            'nome_cargo'=>'Gerente de Contas a Pagar',
                            'subordiandos'=>array(
                                //Inicio: supervisor de pagamentos
                                array(
                                    'nome_cargo'=>'Supervisor de Pagamentos'
                                )
                                //termino: supervisor de pagamentos
                            )
                                ),
                        // termino: gerente de contas
                        //inicio: gerente de compras
                        array(
                            'nome_cargo'=>'Gerente de Compras',
                            'subordinados'=>array(
                                // inicio: supervisor de suprimentos
                                array(
                                    'nome_cargo'=>'Supervisor de Suprimentos'
                                )
                                //termino: supervisor de suprimentos
                            )
                        )
                        //termino: gerente de compras
                    )
                )
                //termino: diretor financeiro

            )
        )
    );

    function exibe($cargos){

        $html = '<ul>';

        foreach ($cargos as $cargo) {
            

            $html .= '<li>';

            $html .= $cargo['nome_cargo'];

            if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0){

                $html .= exibe($cargo['subordinados']);

            }

            $html .= '</li>';

        }

        $html .= "</ul>";

        return $html;

    }
    echo exibe($hierarquia);


?>