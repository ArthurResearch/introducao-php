<?php

$a = array("Nome" => "Manuel de Medeiros",
            "Endereço" => "Rua das Acácias",
            "Cidade" => "Foz do Iguaçu",
            "UF" => "PR"
);
$b = array("Nome" => "Juliana de Amaral",
            "Endereço" => "Rua dos Pioneiros",
            "Cidade" => "Florianópolis",
            "UF" => "SC"
);
$c = array("Nome" => "Rodrigo Baidek",
            "Endereço" => "Rua Dom Pedro I",
            "Cidade" => "Petrópolis",
            "UF" => "RJ"
);
$d = array("Nome" => "Fabíola da Silva",
            "Endereço" => "Rua Chile",
            "Cidade" => "Guaralhos",
            "UF" => "SP"
);

$abcd = array($a, $b, $c, $d);

foreach ($abcd as $info){
        echo "Nome: " . $info['Nome'] . "\n";
        echo "Endereço: " . $info['Endereço'] . "\n";
        echo "Cidade: " . $info['Cidade'] . "\n";
        echo "UF: " . $info['UF'] . "\n\n";
    }