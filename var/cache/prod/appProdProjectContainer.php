<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerCeiqa3j\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerCeiqa3j/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerCeiqa3j.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerCeiqa3j\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerCeiqa3j\appProdProjectContainer([
    'container.build_hash' => 'Ceiqa3j',
    'container.build_id' => '1f2aa987',
    'container.build_time' => 1588273364,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerCeiqa3j');
