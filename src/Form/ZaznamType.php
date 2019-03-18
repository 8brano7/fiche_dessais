<?php

namespace App\Form;
use App\Entity\Zaznam;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ZaznamType extends AbstractType
{
    public function buildForm ( FormBuilderInterface $builder , array $options )
    {
        $builder
            -> add('cislo_danu' ,TextType :: class )
            -> add('n_altis' ,TextType :: class )
            -> add('oddelenie_ziadatela' ,TextType :: class )
            ->add('skuska_v_inom_zavode', ChoiceType::class, array('required' => false, "expanded" => true, 'multiple' => true, 'choices' => array (
                "Velizy" => "Velizy",
                "Mulhouse"=> "Mulhouse",
                "Poissy"=> "Poissy",  )))
            -> add('cislo_predchadzajucej_skusky' ,Texttype :: class )
            -> add('nazov_skusky' ,TextType :: class )
            -> add('ziadatel_skusky' ,TextType :: class )
            -> add('telefon' ,TextType :: class )
            ->add('datum_vyplnenia', DateType::class, ["widget"=>"single_text","format"=>"dd/MM/yyyy"])
            ->add('realizacia_skusky', DateType::class, ["widget"=>"single_text","format"=>"dd/MM/yyyy hh:mm"])
            -> add('referencia_dielu' ,TextType :: class )
            -> add('miesto_spotreby_post' ,TextType :: class )
            -> add('dodavatel' ,TextType :: class )
            -> add('mnozstvo_dielov' ,TextType :: class )
            -> add('cislo_pracovneho_postupu' ,TextType :: class )
//            -> add('mnozstvo' ,NumberType :: class )
            ->add('ucastnici_skusky', ChoiceType::class, array('required' => false, "expanded" => true, 'multiple' => true, 'choices' => array (
                "cc" => "cc",
                "cmon"=> "cmon",
                "dchm"=> "dchm",
                "dsee"=> "dsee",
                "fer"=> "fer",
                "meca"=> "meca",)))
            -> add('zmena_dielu' ,TextType :: class )
            -> add('zmena_bezpecnostneho_skrutkovania' ,TextType :: class )
            -> add('zmena_procesu' ,TextType :: class )
            -> add('zmena_pracovneho_postupu' ,TextType :: class )
            -> add('zmena_skrutkovania' ,TextType :: class )
            -> add('pozadovany_pocet_aut' ,NumberType :: class )
            -> add('pocet_aut_realizovanych' ,NumberType :: class )
            -> add('dotknute_posty_na_montazi' ,TextType :: class )
            -> add('blokovat_auta_na_kontrolu' ,TextType :: class )
            -> add('pocet_aut_kontrola' ,NumberType :: class )
            -> add('skuska_jazda' ,TextType :: class )
            -> add('skuska_iqf' ,TextType :: class )
            -> add('skuska_hluk' ,TextType :: class )
            -> add('skuska_sprcha' ,TextType :: class )
            -> add('dovod_skusky' ,TextType :: class )
            -> add('pozadovane_kontroly' ,TextType :: class )
            -> add('zmena_oproti_seriovemu_stavu' ,TextType :: class )
            -> add('skuska_iqa' ,TextType :: class )
            -> add('skuska_ine' ,TextType :: class )
            -> add('retus' ,TextType :: class )
            -> add('modernizacia_po_skuske' ,TextType :: class )
            ->add('motorizacia', ChoiceType::class, array('required' => false, "expanded" => true, 'multiple' => true, 'choices' => array (
                "TT Essence / benzín"=> "TT Essence / benzín",
                "TT Diesel"=> "TT Diesel",)))
            ->add('vozidla', ChoiceType::class, array('required' => false, "expanded" => true, 'multiple' => true, 'choices' => array (
                "B6"=> "B6",
                "P21"=> "P21",
                "A9"=> "A9",
                "P21e"=> "P21e",
                )))
            -> add('fotka' ,FileType :: class, array('required' => false, 'label' => 'nahraj fotku') )
        ;


    }

    public function configureOptions ( OptionsResolver $resolver )
    {
        $resolver -> setDefaults ( array (
            'data_class' => Zaznam::class ,
            'csrf_protection' => false,
            'empty_data' => new Zaznam(),
        ));
    }

    public function getBlockPrefix()
    {
        return "";
    }
}