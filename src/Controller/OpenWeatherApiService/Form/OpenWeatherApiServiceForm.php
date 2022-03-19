<?php

namespace App\Controller\OpenWeatherApiService\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\NotBlank;

class OpenWeatherApiServiceForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder->add('city', TextType::class, [
            'constraints' => [
                new NotBlank(),
            ],
        ]);
    }
}
