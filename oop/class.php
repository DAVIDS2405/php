
<?php

declare(strict_types=1);

class Sale
{
    public int $total;
    private string $date;
    public array $concepts;
    public static int $count;

    public function __construct(string $date, float $total)
    {
        $this->date = $date;
        $this->total = $total;
        $this->concepts = [];
        self::$count++;
    }

    public function addConcept(Concept $concept)
    {
        $this->concepts[] = $concept;
    }

    public static function reset()
    {
        self::$count = 0;
    }

    public function getDate(): string
    {
        return $this->date;
    }
    public function setDate(string $date)
    {
        $this->date = $date;
    }


    public function createInvoice(): string
    {
        return "Create de sale ticket";
    }

    public function __destruct()
    {
        echo "Delete the object";
    }
}

class Concept
{
    public string $description;
    public int|float $amount;

    public function __construct(string $description, float|int $amount)
    {
        $this->description = $description;
        $this->amount = $amount;
    }
}

class OnlineSale extends Sale
{
    public string $paymentMethod;

    public function __construct(string $date, float $total, string $paymentMethod)
    {
        parent::__construct($date, $total);
        $this->paymentMethod = $paymentMethod;
    }

    public function showInfo(): string
    {
        return "La venta tiene un monto de: $this->total";
    }
}

$sale = new Sale(date("d-m-Y"), 10.5);
$sale = new Sale(date("d-m-Y"), 10.5);
echo Sale::$count;

echo Sale::reset();
$sale = new Sale(date("d-m-Y"), 10.5);
echo Sale::$count;

$concept = new Concept("cerveza", 10);
$sale->addConcept($concept);
