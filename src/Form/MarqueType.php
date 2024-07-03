<?php

namespace App\Form;

use App\Entity\Fabricant;
use App\Entity\Marque;
use App\Entity\Pays;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MarqueType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom_marque')
            ->add('Pays', EntityType::class, [
                'class' => Pays::class,
                'choice_label' => function($pays, $index, $id_value) {

                    // return $id_value . ' - ' . $pays->getNom();
                       return $pays->getNom();
       
                   },
            ])
            ->add('fabricant', EntityType::class, [
                'class' => Fabricant::class,
                'choice_label' => function($fabricant, $index, $id_value) {

                    // return $id_value . ' - ' . $fabricant->getNom();
                       return $fabricant->getNom();
       
                   },
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Marque::class,
        ]);
    }
}
