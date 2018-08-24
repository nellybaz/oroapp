<?php

namespace Oro\Bundle\AttachmentBundle\Guesser;

use Symfony\Component\HttpFoundation\File\MimeType\MimeTypeGuesserInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\FileBag;

class MsMimeTypeGuesser implements MimeTypeGuesserInterface
{
    /**
     * @var array
     */
    protected $typesMap = [
        'msg' => [
            'd0cf11e0a1b11ae1' => 'application/vnd.ms-outlook',
        ],
    ];

    /** @var array */
    protected $files;

    /**
     * {@inheritdoc}
     */
    public function guess($path)
    {
        $extension = $this->getExtensionByPath($path);
        if (!$extension) {
            return null;
        }

        if (!isset($this->typesMap[$extension])) {
            return null;
        }

        $handle = fopen($path, 'r');
        $bytes = bin2hex(fread($handle, 8));
        fclose($handle);

        if (!isset($this->typesMap[$extension][$bytes])) {
            return null;
        }

        return $this->typesMap[$extension][$bytes];
    }

    /**
     * @param string $path
     * @return string|null
     */
    private function getExtensionByPath($path)
    {
        $extension = null;

        $uploadedFiles = $this->fetchUploadedFiles();
        if (isset($uploadedFiles[$path])) {
            $path = $uploadedFiles[$path];
        }

        $extension = pathinfo($path, PATHINFO_EXTENSION);
        if ($extension) {
            $extension = strtolower($extension);
        }

        return $extension;
    }

    /**
     * @return array
     */
    private function fetchUploadedFiles()
    {
        if (null === $this->files) {
            $this->files = [];

            $fileBagArray = (new FileBag($_FILES))->getIterator()->getArrayCopy();
            array_walk_recursive(
                $fileBagArray,
                function ($item) {
                    /** $item UploadedFile */
                    if ($item instanceof UploadedFile) {
                        $this->files[$item->getRealPath()] = $item->getClientOriginalName();
                    }
                }
            );
        }

        return $this->files;
    }
}
