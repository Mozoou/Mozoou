<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $labelClass = 'block mb-2 text-sm font-medium text-gray-900 dark:text-white';
        $attr = 'bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500';
        $builder
            ->add('firstname', TextType::class, [
                'label' => 'First name',
                'label_attr' => [
                    'class' => $labelClass
                ],
                'attr' => [
                    'class' => $attr
                ],
            ])
            ->add('lastname', TextType::class, [
                'label' => 'Last name',
                'label_attr' => [
                    'class' => $labelClass
                ],
                'attr' => [
                    'class' => $attr
                ],
            ])
            ->add('email', EmailType::class, [
                'label' => 'Email address',
                'label_attr' => [
                  'class' => $labelClass
                ],
                'attr' => [
                    'class' => $attr
                ],
            ])
            ->add('plainPassword', RepeatedType::class, [
                // instead of being set onto the object directly,
                // this is read and encoded in the controller
                'type' => PasswordType::class,
                'mapped' => false,
                'required' => true,
                'first_options'  => [
                    'label' => 'Password',
                    'label_attr' => [
                        'class' => $labelClass
                    ],
                    'attr' => [
                        'class' => $attr
                    ],
                ],
                'second_options' => [
                    'label' => 'Repeat Password',
                    'label_attr' => [
                        'class' => $labelClass
                    ],
                    'attr' => [
                        'class' => $attr
                    ],
                ],
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Register',
                'row_attr' => [
                    'class' => 'mt-4'
                ],
                'attr' => [
                    'class' => 'py-2 px-4 bg-primary text-white font-semibold rounded-lg shadow-md bg-blue-700 hover:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
