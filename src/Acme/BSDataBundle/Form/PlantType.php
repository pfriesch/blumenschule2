<?php

namespace Acme\BSDataBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;


class PlantType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $Month = array(
            1 => 'I',
            2 => 'II',
            3 => 'III',
            4 => 'IV',
            5 => 'V',
            6 => 'VI',
            7 => 'VII',
            8 => 'VIII',
            9 => 'IX',
            10 => 'X',
            11 => 'XI',
            12 => 'XII',
        );
        $builder
            ->add('name',null,array("label"=>'Name'))
            ->add('code',null,array("label"=>'Code'))
            ->add('latein',null,array("label"=>'Latein'))
            ->add('hardy',null,array("label"=>'Winterhart'))
            ->add('place',null,array("label"=>'Standort'))
            //->add('LastUpdate',null,array("label"=>'Letzte Akutalisierung'))
            ->add('synonym',null,array("label"=>'Synonym'))
            ->add('instructions',null,array("label"=>'Pflegeanleitung'))
            ->add('h_from',null,array("label"=>'Höhe von'))
            ->add('h_to',null,array("label"=>'bis'))
            ->add('b_from','choice',array("label"=>'Blüte von','choices'   => $Month))
            ->add('b_to','choice',array("label"=>' bis','choices'   => $Month))
            ->add('b_color',null,array("label"=>'Farbe'))
            ->add('flavour',null,array("label"=>'Duft'))
            ->add('light',null,array("label"=>'Licht'))
            ->add('base',null,array("label"=>'Boden'))
            ->add('labeltext',null,array("label"=>'Etiketentext'))
            ->add('habitus',null,array("label"=>'Habitus'))
            ->add('pricegroup',null,array("label"=>'Preisgruppe'))
            ->add('potsize',null,array("label"=>'Topfgröße'))
            ->add('aviable',null,array("label"=>'Lieferbar'))
            ->add('comment',null,array("label"=>'Kommentar'))
            ->add('stock',null,array("label"=>'Lager'))
        ;
    }
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Acme\BSDataBundle\Entity\Plant'
        ));
    }

    public function getName()
    {
        return 'acme_bsdatabundle_planttype';
    }


}
