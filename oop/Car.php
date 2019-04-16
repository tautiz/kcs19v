<?php

declare(strict_types = 1);

Class Car
{
    private $spalva;
    private $greitis;
    private $kelionesAtstumas;
    private $kuroSanaudos;
    private $bakoDydis;
    private $kuroKiekis;
    private $minGreitis;
    private $maxGreitis;
    private $isibegejimoLaikas;

    public function __construct(array $car = [] ) {
        $this->spalva = $car["spalva"]??"Nera";
        $this->greitis = $car["greitis"]??0;
        $this->kelionesAtstumas = $car["kelionesAtstumas"]??0;
        $this->kuroSanaudos = $car["kuroSanaudos"]??0;
        $this->kuroKiekis = $car["kuroKiekis"]??0;
        $this->isibegejimoLaikas = $car["isibegejimoLaikas"]??0;
    }

    public function vaziuoti(float $atstumas): void
    {
        echo $this->spalva. " automobilis važiuoja " . $this->greitis . " greičiu";
        $this->kelionesAtstumas = $atstumas;
    }

    private function gautiPagreiti()
    {
        if (!empty($this->isibegejimoLaikas) || $this->isibegejimoLaikas > 0){
            return $this->maxGreitis / $this->isibegejimoLaikas;
        }
        return 0;
    }

    private function pagreicioAtstumas()
    {
        return (0.5 * $this->gautiPagreiti()) * ($this->getIsibegejimoLaikas() ^ 2);
    }

    private function gautiKelionesKelia()
    {
        return $this->pagreicioAtstumas()* 2 + $this->kelionesAtstumas;
    }

    public function getSpalva(): string
    {
        return $this->spalva;
    }

    public function setSpalva(string $spalva): Car
    {
        $this->spalva = $spalva;
        return $this;
    }

    public function getGreitis(): float
    {
        return $this->greitis;
    }

    public function setGreitis(float $greitis): Car
    {
        $this->greitis = $greitis;
        return $this;
    }

    public function getKelionesAtstumas(): int
    {
        return $this->kelionesAtstumas;
    }

    public function setKelionesAtstumas(int $kelionesAtstumas): Car
    {
        $this->kelionesAtstumas = $kelionesAtstumas;
        return $this;
    }

    public function getKuroSanaudos(): float
    {
        return $this->kuroSanaudos;
    }

    public function setKuroSanaudos(float $kuroSanaudos): Car
    {
        $this->kuroSanaudos = $kuroSanaudos;
        return $this;
    }

    public function getBakoDydis(): int
    {
        return $this->bakoDydis;
    }

    public function setBakoDydis(int $bakoDydis): Car
    {
        $this->bakoDydis = $bakoDydis;
        return $this;
    }

    public function getKuroKiekis(): float
    {
        return $this->kuroKiekis - ($this->getKuroSanaudos() * $this->gautiKelionesKelia());
    }

    public function setKuroKiekis(float $kuroKiekis): Car
    {
        $this->kuroKiekis = $kuroKiekis;
        return $this;
    }

    public function getMinGreitis()
    {
        return $this->minGreitis;
    }

    public function setMinGreitis($minGreitis)
    {
        $this->minGreitis = $minGreitis;
        return $this;
    }

    public function getMaxGreitis(): float
    {
        return $this->maxGreitis;
    }

    public function setMaxGreitis(float $maxGreitis): Car
    {
        $this->maxGreitis = $maxGreitis;
        return $this;
    }

    public function getIsibegejimoLaikas()
    {
        return $this->isibegejimoLaikas;
    }

    public function setIsibegejimoLaikas($isibegejimoLaikas)
    {
        $this->isibegejimoLaikas = $isibegejimoLaikas;
        return $this;
    }
}
