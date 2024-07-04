<?php

namespace App\Form;

use App\Entity\Article;
use App\Entity\Couleur;
use App\Entity\Marque;
use App\Entity\Typebiere;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom_article')
            ->add('prix_achat')
            ->add('volume')
            ->add('titrage')
            ->add('marque', EntityType::class, [
                'class' => Marque::class,
                'choice_label' => function($marque, $index, $id_value) {

                    // return $id_value . ' - ' . $pays->getNom();
                       return $marque->getNomMarque();
       
                   },
                   'attr' => [

                    'class' => 'm-3',  // Ajouter la classe Bootstrap
    
                ]
            ])
            ->add('couleur', EntityType::class, [
                'class' => Couleur::class,
                'choice_label' => function($couleur, $index, $id_value) {

                    // return $id_value . ' - ' . $pays->getNom();
                       return $couleur->getNom();
       
                   },
                   'attr' => [

                    'class' => 'm-3',  // Ajouter la classe Bootstrap
    
                ]
            ])
            ->add('type', EntityType::class, [
                'class' => Typebiere::class,
                'choice_label' => function($type, $index, $id_value) {

                    // return $id_value . ' - ' . $pays->getNom();
                       return $type->getNomType();
       
                   },
                   'attr' => [

                    'class' => 'm-3',  // Ajouter la classe Bootstrap
    
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Article::class,
        ]);
    }
}
