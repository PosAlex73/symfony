<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerSkwrPJo\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerSkwrPJo/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerSkwrPJo.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerSkwrPJo\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerSkwrPJo\App_KernelDevDebugContainer([
    'container.build_hash' => 'SkwrPJo',
    'container.build_id' => 'b74af15b',
    'container.build_time' => 1658003681,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerSkwrPJo');
