<?php
/**
 * File containing the ezcTemplateString class
 *
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 * 
 *   http://www.apache.org/licenses/LICENSE-2.0
 * 
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 *
 * @package Template
 * @version //autogen//
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @access private
 */

/**
 * This class contains a bundle of static functions, each implementing a specific
 * function used inside the template language. 
 *
 * @package Template
 * @version //autogen//
 * @access private
 */
class ezcTemplateString
{
    /**
     * Returns the number of paragraphs found in the given string.
     *
     * @param string $string
     * @return int
     */
    public static function str_paragraph_count( $string )
    {
        $pos = 0;
        $count = 0;

        while ( preg_match( "/\n\n+/", $string, $m, PREG_OFFSET_CAPTURE, $pos ) )
        {
            ++$count;
            $pos = $m[0][1] + 1;
        }

        return $count;
    }
}


?>
