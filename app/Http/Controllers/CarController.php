<?php

namespace App\Http\Controllers;

use App\Models\Car;

class CarController extends Controller {
	public function showCarAction($id) {
        $car = User::find($id);

		echo $car->id . "<br>";
		echo $car->znacka . "<br>";
		echo $car->typ . "<br>";
		echo $car->spz . "<br>";
        echo $car->farba . "<br>";
        echo $car->najazdene . "<br>";
	}

	public function insertCarAction() {
        $car = new Car();
        $car -> znacka = str_random(5);
        $car -> typ = str_random(5);
        $car -> spz = str_random(5);
        $car -> farba = str_random(5);
        $car -> najazdene = mt_rand(1, 80);
        $car -> save();
	}

	public function updateCarAction($id) {
        $car = Car::where("id", "=", $id) -> first();
        $car -> update([
            "najazdene" => mt_rand(1, 80)
        ]);
	}

	public function deleteCarAction($id) {
        $car = Car::find($id);
        $car -> delete();
	}

	public function showAllAction() {
	    $cars = Car::all();

	    foreach ($cars as $car) {
	        echo $car -> znacka . " " . $car -> typ . " " . $car -> najazdene."<br>";
        }
    }
}
