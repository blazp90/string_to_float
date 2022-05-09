/**
     * Format string to float val
     *
     * @example:
     *          2.110,60       => 2110.6
     *          2,110.60       => 2110.6
     *          2.110.60       => 2110.6
     *          2,110,60       => 2110.6
     *          89,561,52.66   => 8956152.66
     *          89.561.52,66   => 8956152.66
     *          20.2,1,10.6085 => 202110.6085
     *          2.A1b10.60     => 2110.6
     *          2,A1b10.60     => 2110.6
     *          2,A1b,10.6000  => 2110.6
     *          2,A1b,10.6080  => 2110.608
     *
     * @param string $number
     *
     * @return float
     */
    public function string_to_float($number)
    {
        // work with numbers only
        $number = preg_replace('#[^0-9\.,]#', '', $number);

        // explode string
        $stringArr = preg_split("/[,.]+/", $number);

        // loop numbers array
        $float = '';
        foreach($stringArr as $letter) {
            // add point before decimals
            if(end($stringArr) === $letter) {
                $float .= '.';
            }
            $float .= $letter;
        }

        return floatval($float);
    }
