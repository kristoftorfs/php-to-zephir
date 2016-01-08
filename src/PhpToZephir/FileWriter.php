<?php

namespace PhpToZephir;

class FileWriter
{
    const BASE_DESTINATION = 'converted/';

    /**
     * @param array $file
     */
    public function write(array $file)
    {
        $dest = $file['fileDestination'];
        $destDir = dirname($dest);

        // Create directory
        if (!is_dir($destDir)) {
            mkdir($destDir, 0755, true);
        }

        // Write file
        file_put_contents($dest, $file['zephir']);
    }
}
