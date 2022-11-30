<?php

Class items
{
    public $itemsArray = array(
        [
            'name' => 'Bike',
            'price' => 100
        ],
        [
            'name' => 'TV',
            'price' => 200
        ],
        [
            'name' => 'Album',
            'price' => 10
        ],
        [
            'name' => 'Book',
            'price' => 5
        ],
        [
            'name' => 'Phone',
            'price' => 500
        ],
        [
            'name' => 'Computer',
            'price' => 1000
        ]
    );

    public function minItem()
    {
        $min = $this->itemsArray[0]['price'];
        foreach ($this->itemsArray as $item) {
            if ($item['price'] < $min) {
                $min = $item['price'];
            }
        }
        return $min;
    }


    public function maxItem()
    {
        $max = $this->itemsArray[0]['price'];
        foreach ($this->itemsArray as $item) {
            if ($item['price'] > $max) {
                $max = $item['price'];
            }
        }
        return $max;
    }


    public function totalPrice()
    {
        $total = 0;
        foreach ($this->itemsArray as $item) {
            $total += $item['price'];
        }
        return $total;
    }

    public function totalPriceBiggerThan10()
    {
        $total = 0;
        foreach ($this->itemsArray as $item) {
            if ($item['price'] > 10) {
                $total += $item['price'];
            }
        }
        return $total;
    }
}

$object = new items();
echo 'Cheap: '.$object->minItem().'<br>';
echo 'Expensive: '.$object->maxItem();
echo '<br>Total: '.$object->totalPrice();
echo '<br>Total bigger than 10: '.$object->totalPriceBiggerThan10();