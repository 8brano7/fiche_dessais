<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ZaznamRepository")
 */
class Zaznam
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;



    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $cislo_danu;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $n_altis;



    /**
     * @ORM\Column(type="string", length=255)
     */
    private $oddelenie_ziadatela;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $skuska_v_inom_zavode_text;

    /**
     * @ORM\Column(type="simple_array", nullable=true)
     */
    private $skuska_v_inom_zavode_select;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $cislo_predchadzajucej_skusky;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nazov_dotknuteho_dielu;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ziadatel_skusky;

    /**
     * @ORM\Column(type="integer")
     */
    private $telefon;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $datum_vyplnenia;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $realizacia_skusky;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $referencia_dielu;


    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $miesto_spotreby_post;



    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $c_danu;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $dodavatel;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $cislo_pracovneho_postupu;

    /**
     * @ORM\Column(type="integer")
     */
    private $mnozstvo;

    /**
     * @ORM\Column(type="simple_array")
     */
    private $ucastnici_skusky;

    /**
     * @ORM\Column(type="simple_array", nullable=true)
     */
    private $ingq;



    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $dovod_skusky;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $zmena_oproti_seriovemu_stavu;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $zmena_dielu;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $zmena_skrutkovania;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $zmena_procesu;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $zmena_bezpecnostneho_skrutkovania;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $zmena_pracovneho_postupu;


    /**
     * @ORM\Column(type="integer")
     */
    private $pozadovany_pocet_aut;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $blokovat_auta_na_kontrolu;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $pocet_aut_kontrola;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $dotknute_posty_na_montazi;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $pozadovane_kontroly;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $skuska_jazda;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $skuska_iqf;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $skuska_hluk;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $skuska_sprcha;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $skuska_iqa;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $skuska_ine;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $modernizacia_po_skuske;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $retus;




    /**
     * @ORM\Column(type="simple_array", nullable=true)
     */
    private $motorizacia;


    /**
     * @ORM\Column(type="simple_array")
     */
    private $vozidla;

    /**
     * @ORM\Column(type="integer",nullable=true)
     */
    private $pocet_aut_realizovanych;

    /**
     * @var string
     * @Assert\NotBlank(message="nahrajte obrazok prosim")
     * @Assert\Image()
     * @Assert\File(mimeTypes={"image/jpeg"})
     * @ORM\Column(name="fotka", type="string", length=255, nullable=true)
     */
    private $fotka;


    public function getId(): ?int
    {
        return $this->id;
    }



    public function getCisloDanu(): ?string
    {
        return $this->cislo_danu;
    }

    public function setCisloDanu(?string $cislo_danu): self
    {
        $this->cislo_danu = $cislo_danu;

        return $this;
    }

    public function getNAltis(): ?string
    {
        return $this->n_altis;
    }

    public function setNAltis(?string $n_altis): self
    {
        $this->n_altis = $n_altis;

        return $this;
    }



    public function getOddelenieZiadatela(): ?string
    {
        return $this->oddelenie_ziadatela;
    }

    public function setOddelenieZiadatela(?string $oddelenie_ziadatela): self
    {
        $this->oddelenie_ziadatela = $oddelenie_ziadatela;

        return $this;
    }

    public function getSkuskaVInomZavodeText(): ?string
    {
        return $this->skuska_v_inom_zavode_text;
    }

    public function setSkuskaVInomZavodeText(?string $skuska_v_inom_zavode_text): self
    {
        $this->skuska_v_inom_zavode_text = $skuska_v_inom_zavode_text;

        return $this;
    }

    public function getSkuskaVInomZavodeSelect(): ?array
    {
        return $this->skuska_v_inom_zavode_select;
    }

    public function setSkuskaVInomZavodeSelect(?array $skuska_v_inom_zavode_select): self
    {
        $this->skuska_v_inom_zavode_select = $skuska_v_inom_zavode_select;

        return $this;
    }

    public function getCisloPredchadzajucejSkusky(): ?int
    {
        return $this->cislo_predchadzajucej_skusky;
    }

    public function setCisloPredchadzajucejSkusky(?int $cislo_predchadzajucej_skusky): self
    {
        $this->cislo_predchadzajucej_skusky = $cislo_predchadzajucej_skusky;

        return $this;
    }

    public function getNazovDotknutehoDielu(): ?string
    {
        return $this->nazov_dotknuteho_dielu;
    }

    public function setNazovDotknutehoDielu(?string $nazov_dotknuteho_dielu): self
    {
        $this->nazov_dotknuteho_dielu = $nazov_dotknuteho_dielu;

        return $this;
    }

    public function getZiadatelSkusky(): ?string
    {
        return $this->ziadatel_skusky;
    }

    public function setZiadatelSkusky(?string $ziadatel_skusky): self
    {
         if ($ziadatel_skusky==null)  {
             $this->ziadatel_skusky = null;
         } else {
             $this->ziadatel_skusky = strtoupper($ziadatel_skusky);
         }

         return $this;
    }

    public function getTelefon(): ?int
    {
        return $this->telefon;
    }

    public function setTelefon(?int $telefon): self
    {
        $this->telefon = $telefon;

        return $this;
    }

    public function getDatumVyplnenia(): ?\DateTime
    {
        return $this->datum_vyplnenia;
    }

    public function setDatumVyplnenia(?\DateTime $datum_vyplnenia): self
    {
        $this->datum_vyplnenia = $datum_vyplnenia;

        return $this;
    }

    public function getRealizaciaSkusky(): ?\DateTime
    {
        return $this->realizacia_skusky;
    }

    public function setRealizaciaSkusky(?\DateTime $realizacia_skusky): self
    {
        $this->realizacia_skusky = $realizacia_skusky;

        return $this;
    }

    public function getReferenciaDielu(): ?int
    {
        return $this->referencia_dielu;
    }

    public function setReferenciaDielu(?int $referencia_dielu): self
    {
        $this->referencia_dielu = $referencia_dielu;

        return $this;
    }



    public function getMiestoSpotrebyPost(): ?string
    {
        return $this->miesto_spotreby_post;
    }

    public function setMiestoSpotrebyPost(?string $miesto_spotreby_post): self
    {
        $this->miesto_spotreby_post = $miesto_spotreby_post;

        return $this;
    }


    public function getCDanu(): ?int
    {
        return $this->c_danu;
    }

    public function setCDanu(?int $c_danu): self
    {
        $this->c_danu = $c_danu;

        return $this;
    }

    public function getDodavatel(): ?string
    {
        return $this->dodavatel;
    }

    public function setDodavatel(?string $dodavatel): self
    {
        $this->dodavatel = $dodavatel;

        return $this;
    }

    public function getCisloPracovnehoPostupu(): ?int
    {
        return $this->cislo_pracovneho_postupu;
    }

    public function setCisloPracovnehoPostupu(?int $cislo_pracovneho_postupu): self
    {
        $this->cislo_pracovneho_postupu = $cislo_pracovneho_postupu;

        return $this;
    }

    public function getMnozstvo(): ?int
    {
        return $this->mnozstvo;
    }

    public function setMnozstvo(?int $mnozstvo): self
    {
        $this->mnozstvo = $mnozstvo;

        return $this;
    }

    public function getUcastniciSkusky(): ?array
    {
        return $this->ucastnici_skusky;
    }

    public function setUcastniciSkusky(?array $ucastnici_skusky): self
    {
        $this->ucastnici_skusky = $ucastnici_skusky;

        return $this;
    }

    public function getIngq(): ?array
    {
        return $this->ingq;
    }

    public function setIngq(?array $ingq): self
    {
        $this->ingq = $ingq;

        return $this;
    }




    public function getDovodSkusky(): ?string
    {
        return $this->dovod_skusky;
    }

    public function setDovodSkusky(?string $dovod_skusky): self
    {
        $this->dovod_skusky = $dovod_skusky;

        return $this;
    }

    public function getZmenaOprotiSeriovemuStavu(): ?string
    {
        return $this->zmena_oproti_seriovemu_stavu;
    }

    public function setZmenaOprotiSeriovemuStavu(?string $zmena_oproti_seriovemu_stavu): self
    {
        $this->zmena_oproti_seriovemu_stavu = $zmena_oproti_seriovemu_stavu;

        return $this;
    }

    public function getZmenaDielu(): ?string
    {
        return $this->zmena_dielu;
    }

    public function setZmenaDielu(?string $zmena_dielu): self
    {
        $this->zmena_dielu = $zmena_dielu;

        return $this;
    }

    public function getZmenaSkrutkovania(): ?string
    {
        return $this->zmena_skrutkovania;
    }

    public function setZmenaSkrutkovania(?string $zmena_skrutkovania): self
    {
        $this->zmena_skrutkovania = $zmena_skrutkovania;

        return $this;
    }

    public function getZmenaProcesu(): ?string
    {
        return $this->zmena_procesu;
    }

    public function setZmenaProcesu(?string $zmena_procesu): self
    {
        $this->zmena_procesu = $zmena_procesu;

        return $this;
    }

    public function getZmenaBezpecnostnehoSkrutkovania(): ?string
    {
        return $this->zmena_bezpecnostneho_skrutkovania;
    }

    public function setZmenaBezpecnostnehoSkrutkovania(?string $zmena_bezpecnostneho_skrutkovania): self
    {
        $this->zmena_bezpecnostneho_skrutkovania = $zmena_bezpecnostneho_skrutkovania;

        return $this;
    }

    public function getZmenaPracovnehoPostupu(): ?string
    {
        return $this->zmena_pracovneho_postupu;
    }

    public function setZmenaPracovnehoPostupu(?string $zmena_pracovneho_postupu): self
    {
        $this->zmena_pracovneho_postupu = $zmena_pracovneho_postupu;

        return $this;
    }


    public function getPozadovanyPocetAut(): ?int
    {
        return $this->pozadovany_pocet_aut;
    }

    public function setPozadovanyPocetAut(?int $pozadovany_pocet_aut): self
    {
        $this->pozadovany_pocet_aut = $pozadovany_pocet_aut;

        return $this;
    }

    public function getBlokovatAutaNaKontrolu(): ?string
    {
        return $this->blokovat_auta_na_kontrolu;
    }

    public function setBlokovatAutaNaKontrolu(?string $blokovat_auta_na_kontrolu): self
    {
        $this->blokovat_auta_na_kontrolu = $blokovat_auta_na_kontrolu;

        return $this;
    }

    public function getPocetAutKontrola(): ?int
    {
        return $this->pocet_aut_kontrola;
    }

    public function setPocetAutKontrola(?int $pocet_aut_kontrola): self
    {
        $this->pocet_aut_kontrola = $pocet_aut_kontrola;

        return $this;
    }

    public function getDotknutePostyNaMontazi(): ?string
    {
        return $this->dotknute_posty_na_montazi;
    }

    public function setDotknutePostyNaMontazi(?string $dotknute_posty_na_montazi): self
    {
        $this->dotknute_posty_na_montazi = $dotknute_posty_na_montazi;

        return $this;
    }

    public function getPozadovaneKontroly(): ?string
    {
        return $this->pozadovane_kontroly;
    }

    public function setPozadovaneKontroly(?string $pozadovane_kontroly): self
    {
        $this->pozadovane_kontroly = $pozadovane_kontroly;

        return $this;
    }

    public function getSkuskaJazda(): ?string
    {
        return $this->skuska_jazda;
    }

    public function setSkuskaJazda(?string $skuska_jazda): self
    {
        $this->skuska_jazda = $skuska_jazda;

        return $this;
    }

    public function getSkuskaIqf(): ?string
    {
        return $this->skuska_iqf;
    }

    public function setSkuskaIqf(?string $skuska_iqf): self
    {
        $this->skuska_iqf = $skuska_iqf;

        return $this;
    }

    public function getSkuskaHluk(): ?string
    {
        return $this->skuska_hluk;
    }

    public function setSkuskaHluk(?string $skuska_hluk): self
    {
        $this->skuska_hluk = $skuska_hluk;

        return $this;
    }

    public function getSkuskaSprcha(): ?string
    {
        return $this->skuska_sprcha;
    }

    public function setSkuskaSprcha(?string $skuska_sprcha): self
    {
        $this->skuska_sprcha = $skuska_sprcha;

        return $this;
    }

    public function getSkuskaIqa(): ?string
    {
        return $this->skuska_iqa;
    }

    public function setSkuskaIqa(?string $skuska_iqa): self
    {
        $this->skuska_iqa = $skuska_iqa;

        return $this;
    }

    public function getSkuskaIne(): ?string
    {
        return $this->skuska_ine;
    }

    public function setSkuskaIne(?string $skuska_ine): self
    {
        $this->skuska_ine = $skuska_ine;

        return $this;
    }

    public function getModernizaciaPoSkuske(): ?string
    {
        return $this->modernizacia_po_skuske;
    }

    public function setModernizaciaPoSkuske(?string $modernizacia_po_skuske): self
    {
        $this->modernizacia_po_skuske = $modernizacia_po_skuske;

        return $this;
    }

    public function getRetus(): ?string
    {
        return $this->retus;
    }

    public function setRetus(?string $retus): self
    {
        $this->retus = $retus;

        return $this;
    }



    public function getMotorizacia(): ?array
    {
        return $this->motorizacia;
    }

    public function setMotorizacia(?array $motorizacia): self
    {
        $this->motorizacia = $motorizacia;

        return $this;
    }


    public function getVozidla(): ?array
    {
        return $this->vozidla;
    }

    public function setVozidla(?array $vozidla): self
    {
        $this->vozidla = $vozidla;

        return $this;
    }

    public function getPocetAutRealizovanych(): ?int
    {
        return $this->pocet_aut_realizovanych;
    }

    public function setPocetAutRealizovanych(int $pocet_aut_realizovanych): self
    {
        $this->pocet_aut_realizovanych = $pocet_aut_realizovanych;

        return $this;
    }

    public function getFotka(): ?string
    {
        return $this->fotka;
    }

    public function setFotka(?string $fotka): self
    {
        $this->fotka = $fotka;

        return $this;
    }


}
