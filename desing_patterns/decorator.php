<?php

interface BudgetInterface
{
    public function cost(): float;
}


class BasicBudget implements BudgetInterface
{
    private int $hours;
    private float $hourlyRate;

    public function __construct(int $hours, float $hourlyRate)
    {
        $this->hourlyRate = $hourlyRate;
        $this->hours = $hours;
    }

    public function cost(): float
    {
        return $this->hours * $this->hourlyRate;
    }
}


class BudgetDecorator implements BudgetInterface
{
    protected BudgetInterface $budget;

    public function __construct(BudgetInterface $budget)
    {
        $this->budget = $budget;
    }

    public function cost(): float
    {
        return $this->budget->cost();
    }
}

class ForeignBudgetDecorator extends BudgetDecorator
{
    const EXCHANGE_RATE = 1.5;

    public function cost(): float
    {
        return parent::cost() * self::EXCHANGE_RATE;
    }
}


class CustomerBudgetDecorator extends BudgetDecorator
{
    const EXCHANGE_RATE = 0.9;

    public function cost(): float
    {
        return parent::cost() * self::EXCHANGE_RATE;
    }
}


$budget = new BasicBudget(10, 100);

echo "Presupuesto base : $ " . $budget->cost() . "<br>";


$foreignBudget = new ForeignBudgetDecorator($budget);

echo "Presupuesto extranjero : $ " . $foreignBudget->cost() . "<br>";

$costumerBudget = new CustomerBudgetDecorator($budget);

echo "Presupuesto extranjero : $ " . $costumerBudget->cost() . "<br>";
