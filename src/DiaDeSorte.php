<?php

namespace GiordanoLima\LoteriasApi;

class DiaDeSorte extends LoteriasApi {

    public function getResultado()
    {
        $retorno = [];

        if($this->json && array_key_exists("resultadoOrdenado", $this->json))
            $retorno["resultado"] = $this->json["resultadoOrdenado"];
            
        if($this->json && array_key_exists("mes_DE_SORTE", $this->json))
            $retorno["mes-da-sorte"] = $this->json["mes_DE_SORTE"];

        return $retorno;
    }

    public function getGanhadores() {
        $retorno = [];
        
        if($this->json && array_key_exists("qt_GANHADOR_FAIXA_1", $this->json))
            $retorno["acertos7"] = $this->json["qt_GANHADOR_FAIXA_1"];

        if($this->json && array_key_exists("qt_GANHADOR_FAIXA_2", $this->json))
            $retorno["acertos6"] = $this->json["qt_GANHADOR_FAIXA_2"];

        if($this->json && array_key_exists("qt_GANHADOR_FAIXA_3", $this->json))
            $retorno["acertos5"] = $this->json["qt_GANHADOR_FAIXA_3"];

        if($this->json && array_key_exists("qt_GANHADOR_FAIXA_4", $this->json))
            $retorno["acertos4"] = $this->json["qt_GANHADOR_FAIXA_4"];

        if($this->json && array_key_exists("qt_GANHADOR_MES_DE_SORTE", $this->json))
            $retorno["mes-da-sorte"] = $this->json["qt_GANHADOR_MES_DE_SORTE"];

        return $retorno;
    }

    public function getPremio() {
        $retorno = [];
        
        if($this->json && array_key_exists("vr_RATEIO_FAIXA_1", $this->json))
            $retorno["acertos7"] = $this->json["vr_RATEIO_FAIXA_1"];

        if($this->json && array_key_exists("vr_RATEIO_FAIXA_2", $this->json))
            $retorno["acertos6"] = $this->json["vr_RATEIO_FAIXA_2"];

        if($this->json && array_key_exists("vr_RATEIO_FAIXA_3", $this->json))
            $retorno["acertos5"] = $this->json["vr_RATEIO_FAIXA_3"];

        if($this->json && array_key_exists("vr_RATEIO_FAIXA_4", $this->json))
            $retorno["acertos4"] = $this->json["vr_RATEIO_FAIXA_4"];

        if($this->json && array_key_exists("vr_RATEIO_MES_DE_SORTE", $this->json))
            $retorno["mes-da-sorte"] = $this->json["vr_RATEIO_MES_DE_SORTE"];

        return $retorno;
    }

    public function getData() {
        if($this->json && array_key_exists("dt_APURACAO", $this->json)){
            $date = new \DateTime();
            $date->setTimestamp((int)$this->json["dt_APURACAO"]);
            return $date;
        }
    }

    public function getDataProximoConcurso() {
        if($this->json && array_key_exists("dt_PROXIMO_CONCURSO", $this->json)){
            $date = new \DateTime();
            $date->setTimestamp((int)$this->json["dt_PROXIMO_CONCURSO"]);
            return $date;
        }
    }

    public function getPremioAcumulado() {
        if($this->json && array_key_exists("vr_ACUMULADO", $this->json))
            return $this->json["vr_ACUMULADO"];
    }

    public function getCidade() {
        if($this->json && array_key_exists("no_CIDADE", $this->json))
            return $this->json["no_CIDADE"];
    }
    
    public function getUrlData() {
        return 'http://www.loterias.caixa.gov.br/wps/portal/loterias/landing/diadesorte';
    }

}