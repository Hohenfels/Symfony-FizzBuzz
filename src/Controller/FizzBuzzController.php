<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FizzBuzzController extends Controller
{
    /*
    ** fizzBuzzThis permet de lancer un test FizzBuzz sur un argument donné dans l'url
    ** /fizz-buzz-this/{id}
    */
    public function fizzBuzzThis($id)
    {
        if ($id % 3 == 0)
            $str = "Fizz";
        elseif ($id % 5 == 0)
            $str = "Buzz";
        elseif (($id % 3 == 0) && ($id % 5 == 0))
            $str = "FizzBuzz";
        else
            $str = "Not a FizzBuzz";
        return $this->render('fizz_buzz_this.html.twig', array(
            'nb' => $id, 'str' => $str,
        ));
    }

    /*
    ** fizzBuzzThis permet de lancer un test FizzBuzz sur nombre genéré aléatoirement
    ** /fizz-buzz-rand
    */
    public function fizzBuzzRandom()
    {
        $nb = mt_rand(0, 50);
        if ($nb % 3 == 0)
            $str = "Fizz";
        elseif ($nb % 5 == 0)
            $str = "Buzz";
        elseif (($nb % 3 == 0) && ($nb % 5 == 0))
            $str = "FizzBuzz";
        else
            $str = "Not a FizzBuzz";
        return $this->render('fizz_buzz_rand.html.twig', array(
            'nb' => $nb, 'str' => $str,
        ));
    }
}
?>
