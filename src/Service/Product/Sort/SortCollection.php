<?php


namespace Service\Product\Sort;


class SortCollection
{
    public function sort(ISort $sorter, array $products): array
    {
        echo 'Проверка выбора сортировки';

        return $sorter->sort($products);
    }
}