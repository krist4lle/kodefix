<?php

namespace App\Services;

class SmsService
{
    /**
     * Array with combination of letters like on old mobile phone.
     *
     * @var array|string[]
     */
    private array $keys = ['abc', 'def', 'ghi', 'jkl', 'mno', 'pqrs', 'tuv', 'wxyz'];


    /**
     * Solve sms string to find numbers.
     *
     * @param string $sms
     * @return string
     */
    public function solveSms(string $sms): string
    {
        $letters = str_split(strtolower($sms));
        $pushes = '';

        foreach ($letters as $letter) {
            foreach ($this->keys as $i => $key) {
                if (str_contains($key, $letter)) {
                    $number = $i + 2;
                    $position = strpos($key, $letter) + 1;

                    $pushes = $this->countPushes($pushes, $position, $number);
                }
            }
        }

        return $pushes;
    }

    /**
     * Counts how many pushes of button needs to do.
     *
     * @param string $pushes
     * @param int $position
     * @param int $number
     * @return string
     */
    private function countPushes(string $pushes, int $position, int $number): string
    {
        for ($j = 0; $j < $position; $j++) {
            $pushes .= $number;
        }

        return $pushes;
    }
}
