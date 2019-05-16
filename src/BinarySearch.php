<?php
declare(strict_types=1);

namespace kata02 {

    class BinarySearch
    {

        function chop(int $key, array $a): int
        {
            return $this->chop_worker($key, $a, 0, count($a));
        }

        function chop_worker(int $key, array $a, int $offset, int $length): int
        {
            $remaining = $length - $offset;
            if ($remaining == 0) {
                return -1;
            }

            $point = (int)floor($offset + $remaining / 2);
            if ($a[$point] == $key) {
                return $point;
            }
            if ($a[$point] > $key) {
                return $this->chop_worker($key, $a, $offset, $point);
            }
            return $this->chop_worker($key, $a, $point + 1, $length);
        }
    }
}
