<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerV4p32s5\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerV4p32s5/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerV4p32s5.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerV4p32s5\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerV4p32s5\App_KernelDevDebugContainer([
    'container.build_hash' => 'V4p32s5',
    'container.build_id' => '7fc16954',
    'container.build_time' => 1659423614,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerV4p32s5');
