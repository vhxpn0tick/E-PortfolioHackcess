<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerGdraVS2\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerGdraVS2/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerGdraVS2.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerGdraVS2\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerGdraVS2\App_KernelDevDebugContainer([
    'container.build_hash' => 'GdraVS2',
    'container.build_id' => '39a75389',
    'container.build_time' => 1737812663,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerGdraVS2');
