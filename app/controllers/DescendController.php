<?php

// class to sort and display string in descending order
class DescendController extends Controller
{

    public function index()
    {
        $data = array(
            'data' => $this->sortString(),
        );

        $this->render('descend/index', $data);
    }

    public function sortString()
    {

        $string = $_POST['string'];
        $stringArray = str_split($string);
        rsort($stringArray);
        $string = implode('', $stringArray);

        return $string;

    }
}
