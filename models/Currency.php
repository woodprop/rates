<?php


class Currency
{
    private $apiUrl = 'http://www.cbr.ru/scripts/';
    public $USD;
    public $EUR;
    public function __construct($date)
    {
        $this->url = $this->apiUrl . "XML_daily.asp?date_req=$date";
        $this->getData();
    }

    public function getData(){
        $xml = simplexml_load_string(file_get_contents($this->url));
        $json = json_encode($xml);
        $array = json_decode($json,TRUE);
        $this->USD = floatval(str_replace(',', '.', $array['Valute'][10]['Value']));
        $this->EUR = floatval(str_replace(',', '.', $array['Valute'][11]['Value']));

    }
}
