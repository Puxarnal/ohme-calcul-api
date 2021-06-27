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
        $numbers = [];

        if ($request->has('numbers')) {
            $request->validate([
                'numbers' => 'array',
                'numbers.*' => 'numeric'
            ]);

            $numbers = $request->input('numbers');

        } else {
            $request->validate([
                'number_1' => 'required|numeric',
                'number_2' => 'required|numeric',
            ]);

            $numbers = [
                $request->input('number_1'),
                $request->input('number_2')
            ];
        }

        $result = array_sum($numbers);

        return ['result' => $result];
    }

    /**
     * Multiplies two numbers
     * @param Request
     * @return array
     */
    public function multiply(Request $request)
    {
        $numbers = [];

        if ($request->has('numbers')) {
            $request->validate([
                'numbers' => 'array',
                'numbers.*' => 'numeric'
            ]);

            $numbers = $request->input('numbers');

        } else {
            $request->validate([
                'number_1' => 'required|numeric',
                'number_2' => 'required|numeric',
            ]);

            $numbers = [
                $request->input('number_1'),
                $request->input('number_2')
            ];
        }

        $result = array_reduce(
            $numbers,
            function ($product, $factor) {
                return $product * $factor;
            },
            1
        );

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
            'number_2' => 'required|numeric|not_in:0'
        ]);

        $result = $request->input('number_1') / $request->input('number_2');

        return ['result' => $result];
    }
}
