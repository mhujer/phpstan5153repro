<?php declare(strict_types = 1);

namespace App;

use Consistence\Type\ArrayType\ArrayType;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;

final class InputType extends \Symfony\Component\Form\AbstractType
{

    public function buildView(FormView $view, FormInterface $form, array $options): void
    {
        if (array_key_exists('class', $view->vars['attr'])) {
            $view->vars['attr']['class'] .= 'foobar';
        }
    }

}
