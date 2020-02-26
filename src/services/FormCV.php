<?php


namespace src\services;


class FormCV
{
    private $errors;
    private $post;
    /**
     *
     */
    public function __construct($errors, $method = 'POST')
    {
        if($method == 'POST') {
            $this->post = $_POST;
        } else {
            $this->post = $_GET;
        }
        $this->errors = $errors;
    }
    /**
     * label
     * @param $name string
     * @param $label string
     * @return string
     */
    public function label(string $name)
    {
        return '<label for="'.$name.'"><img src="assets/img/plus.png"/></label>';
    }
    private function getValue($name)
    {
        return !empty($this->post[$name]) ? $this->post[$name] : '';
    }

    public function h3(string $titre)
    {
        return '<h3 class="'.$titre.'">Veuillez rentrer '.$titre.'</h3>';
    }
    public function input($name, $type)
    {
        return '<input type="'.$type.'" class="'.$name.'" name="'.$name.'" id="'.$name.'" value="'.$this->getValue($name).'" />';
    }

    public function textarea($name)
    {
        return '<textarea name="'.$name.'">'.$this->getValue($name).'</textarea>';
    }

    public function submit($name= 'submitted',$value = 'Envoyer')
    {
        return '<input type="submit" name="'.$name.'" value="'.$value.'"/>';
    }
    public function error($name)
    {
        $error = !empty($this->errors[$name]) ? $this->errors[$name] : '';
        return '<span class="error">'.$error.'</span>';
    }





}
