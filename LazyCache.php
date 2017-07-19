<?php

namespace igor162\TagDependencyHelper;

use Yii;
use yii\base\Behavior;

/**
 * LazyCache behavior.
 * Add it to your cache component, for example in your config:
 *
 * ```php
 * 'components' => [
 *      'cache' => [
 *          'class' => 'yii\caching\Memcache',
 *          'as lazy' => [
 *              'class' => 'igor162\TagDependencyHelper\LazyCache',
 *          ],
 *      ],
 * ],
 *
 * ```
 *
 *
 * @package igor162\TagDependencyHelper
 */
class LazyCache extends Behavior
{
    use LazyCacheTrait;
}