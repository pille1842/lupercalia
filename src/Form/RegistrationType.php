<?php

namespace App\Form;

use App\Entity\Registration;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('firstName', TextType::class, [
                'label' => 'Vorname',
                'attr' => ['class' => 'uk-input'],
            ])
            ->add('lastName', TextType::class, [
                'label' => 'Nachname',
                'attr' => ['class' => 'uk-input'],
            ])
            ->add('nickName', TextType::class, [
                'label' => 'Biername',
                'required' => false,
                'attr' => ['class' => 'uk-input'],
            ])
            ->add('email', EmailType::class, [
                'label' => 'E-Mail-Adresse',
                'attr' => ['class' => 'uk-input'],
            ])
            ->add('fraternity', ChoiceType::class, [
                'choices' => [
                    'keine Angabe' => 'NON',
                    'PV Alemannia Lahr' => 'ALE',
                    'PV Badenia Freiburg' => 'BAD',
                    'PV Bund Bruchsal' => 'BUN',
                    'PV Frankonia Baden-Baden' => 'FRA',
                    'PV Germania Rastatt' => 'GER',
                    'PV Markomannia Rastatt' => 'MAR',
                    'PV Rhenania-Fidelitas Karlsruhe' => 'RHE',
                    'PV Teutonia Rastatt' => 'TEU',
                    'PV Vicinia Karlsruhe' => 'VIC',
                    'andere Verbindung (bitte in den Anmerkungen angeben)' => 'OTH',
                ],
                'label' => 'Verbindungszugehörigkeit',
                'attr' => ['class' => 'uk-select'],
            ])
            ->add('participateBegruessungsabend', CheckboxType::class, [
                'label' => 'Ich nehme am Begrüßungsabend teil',
                'required' => false,
                'attr' => ['class' => 'uk-checkbox'],
            ])
            ->add('guestsBegruessungsabend', NumberType::class, [
                'label' => 'Anzahl Gäste Begrüßungsabend',
                'empty_data' => 0,
                'required' => false,
                'attr' => ['class' => 'uk-input'],
            ])
            ->add('participateKulturbummel', CheckboxType::class, [
                'label' => 'Ich nehme am Kulturbummel teil',
                'required' => false,
                'attr' => ['class' => 'uk-checkbox'],
            ])
            ->add('guestsKulturbummel', NumberType::class, [
                'label' => 'Anzahl Gäste Kulturbummel',
                'empty_data' => 0,
                'required' => false,
                'attr' => ['class' => 'uk-input'],
            ])
            ->add('participateAbendessen', CheckboxType::class, [
                'label' => 'Ich nehme am gemeinsamen Abendessen teil',
                'required' => false,
                'attr' => ['class' => 'uk-checkbox'],
            ])
            ->add('guestsAbendessen', NumberType::class, [
                'label' => 'Anzahl Gäste gemeinsames Abendessen',
                'empty_data' => 0,
                'required' => false,
                'attr' => ['class' => 'uk-input'],
            ])
            ->add('participateFestkommers', CheckboxType::class, [
                'label' => 'Ich nehme am Festkommers teil',
                'required' => false,
                'attr' => ['class' => 'uk-checkbox'],
            ])
            ->add('guestsFestkommers', NumberType::class, [
                'label' => 'Anzahl Gäste Festkommers',
                'empty_data' => 0,
                'required' => false,
                'attr' => ['class' => 'uk-input'],
            ])
            ->add('participateFruehschoppen', CheckboxType::class, [
                'label' => 'Ich nehme am Frühschoppen teil',
                'required' => false,
                'attr' => ['class' => 'uk-checkbox'],
            ])
            ->add('guestsFruehschoppen', NumberType::class, [
                'label' => 'Anzahl Gäste Frühschoppen',
                'empty_data' => 0,
                'required' => false,
                'attr' => ['class' => 'uk-input'],
            ])
            ->add('notes', TextareaType::class, [
                'label' => 'Anmerkungen',
                'required' => false,
                'attr' => ['class' => 'uk-textarea'],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Registration::class,
        ]);
    }
}
