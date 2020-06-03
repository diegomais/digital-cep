<?php

use PHPUnit\Framework\TestCase;
use DiegoMais\DigitalCep\Search;

class SearchTest extends TestCase
{
  /**
   * @dataProvider testData
   */
  public function testGetAddressFromZipCodeDefaultUsage(string $input, array $responseExpected){
    $search = new Search;
    $search = $search->getAddressFromZipCode($input);

    $this->assertEquals($responseExpected, $search);
  }

  public function testData(){
    return [
      "Praça da Sé" => [
        "01001000",
        [
          "cep" => "01001-000",
          "logradouro" => "Praça da Sé",
          "complemento" => "lado ímpar",
          "bairro" => "Sé",
          "localidade" => "São Paulo",
          "uf" => "SP",
          "unidade" => "",
          "ibge" => "3550308",
          "gia" => "1004"
        ]
      ],
      "Rua Luís Asson" => [
        "03624010",
        [
          "cep" => "03624-010",
          "logradouro" => "Rua Luís Asson",
          "complemento" => "",
          "bairro" => "Vila Buenos Aires",
          "localidade" => "São Paulo",
          "uf" => "SP",
          "unidade" => "",
          "ibge" => "3550308",
          "gia" => "1004"
        ]
      ]
    ];
  }
}