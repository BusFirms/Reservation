<?php

class BusFirms
{

    private $type = 'json';
    private $endpoint = 'https://www.busfirms.com/api/quote';


    private function parseData($array)
    {
        if ($this->type=='xml') return $this->array2xml($array);
        return json_encode($array);
 
    }


    private function requestData($result)
    {
        if ($this->type=='xml') return simplexml_load_string($result);
        return (object)json_decode($result);
    }

    private function array2xml($array, $xml = false)
    {
        if ($xml === false) {
            $xml = new SimpleXMLElement('<root/>');
        }
        foreach ($array as $key => $value) {
            if (is_array($value)) {
                $this->array2xml($value, $xml->addChild($key));
            } else {
                $xml->addChild($key, $value);
            }
        }
        return  $xml->asXML();
    }

    public function send($data)
    {
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->endpoint);

        // For xml, change the content-type.
        curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: text/".$this->type));

        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $this->parseData($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); // ask for results to be returned

        // Send to remote and return data to caller.
        $result = curl_exec($ch);

        curl_close($ch);
        return $this->requestData($result);
    }
}
