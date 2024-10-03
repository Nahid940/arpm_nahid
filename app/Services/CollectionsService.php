<?php
namespace App\Services;

class CollectionsService
{

    public function dataProcessor()
    {

        $employees = [
            ['name' => 'John', 'city' => 'Dallas'],
            ['name' => 'Jane', 'city' => 'Austin'],
            ['name' => 'Jake', 'city' => 'Dallas'],
            ['name' => 'Jill', 'city' => 'Dallas'],
        ];
    
        $employeesByCity =[];

        //Map on the employee data array
        array_map(function ($employee) use (&$employeesByCity) {
            $employeesByCity[$employee['city']][] = $employee['name'];
        }, $employees);


        $output =$this->generateOutputByOffice($employeesByCity);

        return $output ;

    }


    public function generateOutputByOffice($employeesByCity)
    {
        $offices = [
            ['office' => 'Dallas HQ', 'city' => 'Dallas'],
            ['office' => 'Dallas South', 'city' => 'Dallas'],
            ['office' => 'Austin Branch', 'city' => 'Austin'],
        ];

        $output = array_reduce($offices, function ($carry, $office) use ($employeesByCity) {
            if (isset($employeesByCity[$office['city']])) {
                $carry[$office['city']][$office['office']] = $employeesByCity[$office['city']];
            }
            return $carry;
        }, []);

        return $output;
    }

}