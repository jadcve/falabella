<?php


class main
{
    public function runChallenge($inicio, $fin)
    {
        $calc = new calculo;
        $div31 = new number(3, 1, 'Falabella');
        $div51 = new number(5, 1, 'IT');
        $div35 = new number(5, 3, 'Linio');

        $returnString = "";

        for ( $i=$inicio;$i<=$fin;$i++) 
        {
            $result = $i;
            $result = $calc->getResult($result,$div35);
            $result = $calc->getResult($result,$div31);
            $result = $calc->getResult($result,$div51);
            $returnString .= $result.",";
        }
        return $returnString;
    }

}

?>