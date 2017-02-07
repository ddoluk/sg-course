<?php

/**
 * Without using a PHP program to evaluate them, determine whether each of these expressions is true or false :
 * 100.00 - 100
 * "zero"
 * "false"
 * 0 + "true"
 * 0.000
 * "0.0"
 * strcmp("false","False")
 * 0 <=> "0"
 *
 * 100.00 - 100             - 0.00 (false)
 * "zero"                   - стрічка не є порожньою (true)
 * "false"                  - стрічка не є порожньою (true)
 * 0 + "true"               - поверне нуль (false)
 * 0.000                    - (false)
 * "0.0"                    - стрічка не є порожньою (true)
 * strcmp("false","False")  - (false)
 */