<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerZQzlYOd\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerZQzlYOd/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerZQzlYOd.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerZQzlYOd\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerZQzlYOd\App_KernelDevDebugContainer([
    'container.build_hash' => 'ZQzlYOd',
    'container.build_id' => '54253dfd',
    'container.build_time' => 1662392889,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerZQzlYOd');
