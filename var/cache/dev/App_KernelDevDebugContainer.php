<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerHYXhHxM\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerHYXhHxM/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerHYXhHxM.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerHYXhHxM\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerHYXhHxM\App_KernelDevDebugContainer([
    'container.build_hash' => 'HYXhHxM',
    'container.build_id' => 'c593a429',
    'container.build_time' => 1662104535,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerHYXhHxM');
