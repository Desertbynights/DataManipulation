<?php

namespace desertbynight\datemanipulation;

class ItalianDate
{
    protected $originalData;

    public function __construct($originalData)
    {
        $this->originalData = $originalData;
    }

    public function toItalianDate()
    {
        $result = $this->originalData->format('d-m-Y');
        switch(substr($result, 3,2)) {
            case "01":
                return str_replace("-01-", " gennaio ", $result);
                break;
            case "02":
                return str_replace("-02-", " febbraio ", $result);
                break;
            case "03":
                return str_replace("-03-", " marzo ", $result);
                break;
            case "04":
                return str_replace("-04-", " aprile ", $result);
                break;
            case "05":
                return str_replace("-05-", " maggio ", $result);
                break;
            case "06":
                return str_replace("-06-", " giugno ", $result);
                break;
            case "07":
                return str_replace("-07-", " luglio ", $result);
                break;
            case "08":
                return str_replace("-08-", " agosto ", $result);
                break;
            case "09":
                echo str_replace("-09-", " settembre ", $result);
                break;
            case "10":
                return str_replace("-10-", " ottobre ", $result);
                break;
            case "11":
                return str_replace("-11-", " novembre ", $result);
                break;
            case "12":
                return str_replace("-12-", " dicembre ", $result);
                break;

        }
    }
}
