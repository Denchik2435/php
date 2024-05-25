<?php


// Базовий клас для всіх видів транспорту
class Bus
{
    protected $routeNumber;
    protected $capacity;

    public function __construct($routeNumber, $capacity)
    {
        $this->routeNumber = $routeNumber;
        $this->capacity = $capacity;
    }

    public function getRouteNumber()
    {
        return $this->routeNumber;
    }

    public function getCapacity()
    {
        return $this->capacity;
    }

    public function __destruct()
    {
        echo "Bus {$this->routeNumber} is destroyed.\n";
    }
}

class BigBus extends Bus
{
    private $doubleDecker;

    public function __construct($routeNumber, $capacity, $doubleDecker)
    {
        parent::__construct($routeNumber, $capacity);
        $this->doubleDecker = $doubleDecker;
    }

    public function isDoubleDecker()
    {
        return $this->doubleDecker;
    }

    public function __destruct()
    {
        echo "BigBus {$this->routeNumber} is destroyed.\n";
    }
}

class Marshrutka extends Bus
{
    private $ticketPrice;

    public function __construct($routeNumber, $capacity, $ticketPrice)
    {
        parent::__construct($routeNumber, $capacity);
        $this->ticketPrice = $ticketPrice;
    }

    public function getTicketPrice()
    {
        return $this->ticketPrice;
    }

    public function __destruct()
    {
        echo "Marshrutka {$this->routeNumber} is destroyed.\n";
    }
}

class Tralik extends Bus
{
    private $electric;

    public function __construct($routeNumber, $capacity, $electric)
    {
        parent::__construct($routeNumber, $capacity);
        $this->electric = $electric;
    }

    public function isElectric()
    {
        return $this->electric;
    }

    public function __destruct()
    {
        echo "Tralik {$this->routeNumber} is destroyed.\n";
    }
}

// Базовий клас для всіх пасажирів
class Passenger
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function __destruct()
    {
        echo "Passenger {$this->name} is destroyed.\n";
    }
}

class Student extends Passenger
{
    private $studentID;

    public function __construct($name, $studentID)
    {
        parent::__construct($name);
        $this->studentID = $studentID;
    }

    public function getStudentID()
    {
        return $this->studentID;
    }

    public function __destruct()
    {
        echo "Student {$this->name} is destroyed.\n";
    }
}

class Babka extends Passenger
{
    private $age;

    public function __construct($name, $age)
    {
        parent::__construct($name);
        $this->age = $age;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function __destruct()
    {
        echo "Babka {$this->name} is destroyed.\n";
    }
}

class Programist extends Passenger
{
    private $languages;

    public function __construct($name, $languages)
    {
        parent::__construct($name);
        $this->languages = $languages;
    }

    public function getLanguages()
    {
        return $this->languages;
    }

    public function __destruct()
    {
        echo "Programist {$this->name} is destroyed.\n";
    }
}

// Базовий клас для автобусних зупинок
class Busstop
{
    protected $location;

    public function __construct($location)
    {
        $this->location = $location;
    }

    public function getLocation()
    {
        return $this->location;
    }

    public function __destruct()
    {
        echo "Busstop at {$this->location} is destroyed.\n";
    }
}

class Konechka extends Busstop
{
    private $terminalNumber;

    public function __construct($location, $terminalNumber)
    {
        parent::__construct($location);
        $this->terminalNumber = $terminalNumber;
    }

    public function getTerminalNumber()
    {
        return $this->terminalNumber;
    }

    public function __destruct()
    {
        echo "Konechka at {$this->location} is destroyed.\n";
    }
}

class SimpleStop extends Busstop
{
    private $shelter;

    public function __construct($location, $shelter)
    {
        parent::__construct($location);
        $this->shelter = $shelter;
    }

    public function hasShelter()
    {
        return $this->shelter;
    }

    public function __destruct()
    {
        echo "SimpleStop at {$this->location} is destroyed.\n";
    }
}

// Приклад використання
$bigBus = new BigBus(1, 50, true);
$marshrutka = new Marshrutka(2, 20, 5);
$tralik = new Tralik(3, 30, true);

$student = new Student("Ivan", "S123");
$babka = new Babka("Olena", 70);
$programist = new Programist("Alex", ["PHP", "JavaScript"]);

$konechka = new Konechka("Central", 1);
$simpleStop = new SimpleStop("Main Street", true);

// Виклик методів для перевірки
echo $bigBus->isDoubleDecker() ? "Double Decker Bus\n" : "Single Decker Bus\n";
echo "Ticket Price: " . $marshrutka->getTicketPrice() . "\n";
echo $tralik->isElectric() ? "Electric Tralik\n" : "Non-Electric Tralik\n";

echo "Student ID: " . $student->getStudentID() . "\n";
echo "Babka Age: " . $babka->getAge() . "\n";
echo "Programist Languages: " . implode(", ", $programist->getLanguages()) . "\n";

echo "Terminal Number: " . $konechka->getTerminalNumber() . "\n";
echo $simpleStop->hasShelter() ? "Has Shelter\n" : "No Shelter\n";



