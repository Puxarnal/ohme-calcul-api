<?php

namespace App\Http\Controllers;

use App\Services\CalculatorService;
use Illuminate\Http\Request;

class OperationsController extends Controller
{
    /**
     * Adds two numbers
     * @param Request
     * @param CalculatorService $calculator
     * @return array
     */
    public function add(Request $request, CalculatorService $calculator)
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

        $result = array_reduce($numbers, [$calculator, 'add'], 0);

        return ['result' => $result];
    }

    /**
     * Multiplies two numbers
     * @param Request
     * @param CalculatorService $calculator
     * @return array
     */
    public function multiply(Request $request, CalculatorService $calculator)
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

        $result = array_reduce($numbers, [$calculator, 'multiply'], 1);

        return ['result' => $result];
    }

    /**
     * Substracts a number from another one
     * @param Request $request
     * @param CalculatorService $calculator
     * @return array
     */
    public function substract(Request $request, CalculatorService $calculator)
    {
        $request->validate([
            'number_1' => 'required|numeric',
            'number_2' => 'required|numeric'
        ]);

        $result = $calculator->substract($request->input('number_1'), $request->input('number_2'));

        return ['result' => $result];
    }

    /**
     * Divides a number by another one
     * @param Request $request
     * @param CalculatorService $calculator
     * @return array
     */
    public function divide(Request $request, CalculatorService $calculator)
    {
        $request->validate([
            'number_1' => 'required|numeric',
            'number_2' => 'required|numeric|not_in:0'
        ]);

        $result = $calculator->divide($request->input('number_1'), $request->input('number_2'));

        return ['result' => $result];
    }

    /**
     * Analyzes and computed operations nested within an array
     * @param Request $request
     * @param CalculatorService $calculator
     * @return array
     */
    public function nested(Request $request, CalculatorService $calculator)
    {
        $request->validate([
            'operations' => 'required|array'
        ]);

        $result = $calculator->nested($request->input('operations'));

        return ['result' => $result];
    }
}
