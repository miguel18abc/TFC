<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container15iwH8i\App_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container15iwH8i/App_KernelProdContainer.php') {
    touch(__DIR__.'/Container15iwH8i.legacy');

    return;
}

if (!\class_exists(App_KernelProdContainer::class, false)) {
    \class_alias(\Container15iwH8i\App_KernelProdContainer::class, App_KernelProdContainer::class, false);
}

return new \Container15iwH8i\App_KernelProdContainer([
    'container.build_hash' => '15iwH8i',
    'container.build_id' => 'c9919148',
    'container.build_time' => 1670841980,
], __DIR__.\DIRECTORY_SEPARATOR.'Container15iwH8i');
