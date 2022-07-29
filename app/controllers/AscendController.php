<?php

// class to sort and display string in ascending order
class AscendController extends Controller
{

    public function index()
    {
        $data = array(
            'data' => $this->sortString(),
        );

        $this->render('ascend/index', $data);
    }

    public function sortString()
    {
        // get the string from the form
        $string = $_POST['string'];
        $stringArray = str_split($string);
        sort($stringArray);
        $string = implode('', $stringArray);

        return $string;
    }
}
