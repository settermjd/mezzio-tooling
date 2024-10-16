<?php

declare(strict_types=1);

namespace Mezzio\Tooling\Module;

use function preg_replace;

final class ModuleMetadata
{
    private string $name;

    private string $rootPath;

    private string $sourcePath;

    public function __construct(
        string $name,
        string $rootPath,
        string $sourcePath
    ) {
        $this->name       = $name;
        $this->rootPath   = $rootPath;
        $this->sourcePath = preg_replace('#^\./#', '', $sourcePath);
    }

    public function name(): string
    {
        return $this->name;
    }

    public function rootPath(): string
    {
        return $this->rootPath;
    }

    public function sourcePath(): string
    {
        return $this->sourcePath;
    }
}
