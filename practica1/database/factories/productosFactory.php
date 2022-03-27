<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\productos;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class productosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre'=>$this->faker->sentence(),
            'descripcion'=>$this->faker->sentence(),
            'categoria'=>$this->faker->sentence(),
            'precioCompra'=>$this->faker->biasedNumberBetween(0, 20),
            'precioVenta'=>$this->faker->biasedNumberBetween(0, 20),
            'stock'=>$this->faker->numberBetween(1,20)
              
        ];
    }
}
