<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container1N393Iy\App_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container1N393Iy/App_KernelProdContainer.php') {
    touch(__DIR__.'/Container1N393Iy.legacy');

    return;
}

if (!\class_exists(App_KernelProdContainer::class, false)) {
    \class_alias(\Container1N393Iy\App_KernelProdContainer::class, App_KernelProdContainer::class, false);
}

return new \Container1N393Iy\App_KernelProdContainer([
    'container.build_hash' => '1N393Iy',
    'container.build_id' => 'f8aa2f34',
    'container.build_time' => 1624701807,
], __DIR__.\DIRECTORY_SEPARATOR.'Container1N393Iy');
