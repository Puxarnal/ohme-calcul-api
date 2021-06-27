<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OperationsController extends Controller
{
    /**
     * Adds two numbers
     * @param Request
     * @return array
     */
    public function add(Request $request)
    {
        $request->validate([
            'number_1' => 'required|numeric',
            'number_2' => 'required|numeric',
        ]);

        $result = $request->input('number_1') + $request->input('number_2');

        return ['result' => $result];
    }

    /**
     * Multiplies two numbers
     * @param Request
     * @return array
     */
    public function multiply(Request $request)
    {
        $request->validate([
            'number_1' => 'required|numeric',
            'number_2' => 'required|numeric',
        ]);

        $result = $request->input('number_1') * $request->input('number_2');

        return ['result' => $result];
    }

    /**
     * Substracts a number from another one
     * @param Request $request
     * @return array
     */
    public function substract(Request $request)
    {
        $request->validate([
            'number_1' => 'required|numeric',
            'number_2' => 'required|numeric'
        ]);

        $result = $request->input('number_1') - $request->input('number_2');

        return ['result' => $result];
    }

    /**
     * Divides a number by another one
     * @param Request $request
     * @return array
     */
    public function divide(Request $request)
    {
        $request->validate([
            'number_1' => 'required|numeric',
            'number_2' => 'required|numeric'
        ]);

        $result = $request->input('number_1') / $request->input('number_2');

        return ['result' => $result];
    }
}
