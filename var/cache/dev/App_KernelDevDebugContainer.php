<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXHqAzt1\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXHqAzt1/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXHqAzt1.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXHqAzt1\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerXHqAzt1\App_KernelDevDebugContainer([
    'container.build_hash' => 'XHqAzt1',
    'container.build_id' => '4de94749',
    'container.build_time' => 1713124573,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXHqAzt1');
