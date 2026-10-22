<?php
//
interface Ordaingarria
{
    public function ordaindu(float $zenbatekoa): bool;
}
class Txartela implements Ordaingarria
{
    public function ordaindu(float $zenbatekoa): bool
    {
        echo "$zenbatekoa € txartelarekin";
        return true;
    }
}

//
function eginOrdainketa(Ordaingarria $ordainketaModua, float $zenbatekoa): void
{
    $ordainketaModua->ordaindu($zenbatekoa);
}
$txartela = new Txartela();
eginOrdainketa($txartela, 25.50);

//
abstract class Animalia
{
    public function lo_egin(): string
    {
        return "Zzz";
    }
    abstract public function soinua(): string;
}
class Txakurra extends Animalia
{
    public function soinua(): string
    {
        return "Zaunka";
    }
}

//
interface Mugikorra
{
    public function mugitu(): string;
}
abstract class Ibilgailua
{
    public function gelditu(): string
    {
        return "Geldituta";
    }
}
class Bizikleta extends Ibilgailua implements Mugikorra
{
    public function mugitu(): string
    {
        return "Pedalei eragin";
    }
}
?>
