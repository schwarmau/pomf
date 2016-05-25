<?php

/**
 * Returns information about uploaded files.
 *
 * @copyright Copyright (c) 2013, 2014 Peter Lejeck <peter.lejeck@gmail.com>
 * @copyright Copyright (c) 2016 the Pantsu.cat developers
 * <hostmaster@pantsu.cat>
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 */

class UploadedFile
{
    /* Public attributes */
    public $name;
    public $mime;
    public $size;
    public $tempfile;
    public $error;

    /**
     * SHA-1 checksum
     *
     * @deprecated 2.1.0 To be replaced with SHA-256 hashing.
     * @var string 40 digit hexadecimal hash (160 bits)
     */
    private $sha1;

    /**
     * Generates the SHA-1 or returns the cached SHA-1 hash for the file.
     *
     * @deprecated 2.1.0 To be replaced with SHA-256 hashing.
     * @return string|false $sha1
     */
    public function get_sha1()
    {
        if (!$this->sha1) {
            $this->sha1 = sha1_file($this->tempfile);
        }

        return $this->sha1;
    }
}
