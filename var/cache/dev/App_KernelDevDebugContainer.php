<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerJkPJMOt\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerJkPJMOt/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerJkPJMOt.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerJkPJMOt\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerJkPJMOt\App_KernelDevDebugContainer([
    'container.build_hash' => 'JkPJMOt',
    'container.build_id' => '32461409',
    'container.build_time' => 1658993245,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerJkPJMOt');
