<?php
namespace Lib;
class PizzaStore
{
    public function orderPizza(string $type)
    {
        $pizza = $this->createPizza($type);
        $pizza->prepare();
        $pizza->cut();
        return $pizza;
    }
    protected function createPizza(string $type)
    {
        switch (strtolower($type)) {
            case 'margarita':
                return new Pizza('Маргарита', 'томатный соус', ['сыр']);
            case 'pepperoni':
                return new Pizza('Пепперони', 'томатный соус', ['сыр', 'колбаса']);
        }
    }
}
