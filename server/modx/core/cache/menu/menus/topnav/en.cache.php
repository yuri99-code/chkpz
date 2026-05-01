<?php  return array (
  0 => 
  array (
    'text' => 'site',
    'parent' => 'topnav',
    'action' => '',
    'description' => '',
    'icon' => '<i class="icon-file-text-o icon"></i>',
    'menuindex' => 0,
    'params' => '',
    'handler' => '',
    'permissions' => 'menu_site',
    'namespace' => 'core',
    'id' => 'site',
    'children' => 
    array (
      0 => 
      array (
        'text' => 'new_resource',
        'parent' => 'site',
        'action' => 'resource/create',
        'description' => 'new_resource_desc',
        'icon' => '',
        'menuindex' => 0,
        'params' => '',
        'handler' => '',
        'permissions' => 'new_document',
        'namespace' => 'core',
        'id' => 'new_resource',
        'children' => 
        array (
        ),
        'controller' => '',
      ),
      1 => 
      array (
        'text' => 'refresh_site',
        'parent' => 'site',
        'action' => '',
        'description' => 'refresh_site_desc',
        'icon' => '',
        'menuindex' => 1,
        'params' => '',
        'handler' => 'MODx.clearCache(); return false;',
        'permissions' => 'empty_cache',
        'namespace' => 'core',
        'id' => 'refresh_site',
        'children' => 
        array (
          0 => 
          array (
            'text' => 'refreshuris',
            'parent' => 'refresh_site',
            'action' => '',
            'description' => 'refreshuris_desc',
            'icon' => '',
            'menuindex' => 0,
            'params' => '',
            'handler' => 'MODx.refreshURIs(); return false;',
            'permissions' => 'empty_cache',
            'namespace' => 'core',
            'id' => 'refreshuris',
            'children' => 
            array (
            ),
            'controller' => '',
          ),
        ),
        'controller' => '',
      ),
      2 => 
      array (
        'text' => 'remove_locks',
        'parent' => 'site',
        'action' => '',
        'description' => 'remove_locks_desc',
        'icon' => '',
        'menuindex' => 2,
        'params' => '',
        'handler' => 'MODx.removeLocks();return false;',
        'permissions' => 'remove_locks',
        'namespace' => 'core',
        'id' => 'remove_locks',
        'children' => 
        array (
        ),
        'controller' => '',
      ),
      3 => 
      array (
        'text' => 'site_schedule',
        'parent' => 'site',
        'action' => 'resource/site_schedule',
        'description' => 'site_schedule_desc',
        'icon' => '',
        'menuindex' => 3,
        'params' => '',
        'handler' => '',
        'permissions' => 'view_document',
        'namespace' => 'core',
        'id' => 'site_schedule',
        'children' => 
        array (
        ),
        'controller' => '',
      ),
      4 => 
      array (
        'text' => 'content_types',
        'parent' => 'site',
        'action' => 'system/contenttype',
        'description' => 'content_types_desc',
        'icon' => '',
        'menuindex' => 4,
        'params' => '',
        'handler' => '',
        'permissions' => 'content_types',
        'namespace' => 'core',
        'id' => 'content_types',
        'children' => 
        array (
        ),
        'controller' => '',
      ),
      5 => 
      array (
        'text' => 'trash',
        'parent' => 'site',
        'action' => 'resource/trash',
        'description' => 'trash_desc',
        'icon' => '',
        'menuindex' => 5,
        'params' => '',
        'handler' => '',
        'permissions' => 'menu_trash',
        'namespace' => 'core',
        'id' => 'trash',
        'children' => 
        array (
        ),
        'controller' => '',
      ),
    ),
    'controller' => '',
  ),
  1 => 
  array (
    'text' => 'Медиа',
    'parent' => 'topnav',
    'action' => '',
    'description' => '',
    'icon' => '<i class="icon-file-image-o icon"></i>',
    'menuindex' => 1,
    'params' => '',
    'handler' => '',
    'permissions' => 'file_manager',
    'namespace' => 'core',
    'id' => 'media',
    'children' => 
    array (
      0 => 
      array (
        'text' => 'file_browser',
        'parent' => 'media',
        'action' => 'media/browser',
        'description' => 'file_browser_desc',
        'icon' => '',
        'menuindex' => 0,
        'params' => '',
        'handler' => '',
        'permissions' => 'file_manager',
        'namespace' => 'core',
        'id' => 'file_browser',
        'children' => 
        array (
        ),
        'controller' => '',
      ),
      1 => 
      array (
        'text' => 'sources',
        'parent' => 'media',
        'action' => 'source',
        'description' => 'sources_desc',
        'icon' => '',
        'menuindex' => 1,
        'params' => '',
        'handler' => '',
        'permissions' => 'sources',
        'namespace' => 'core',
        'id' => 'sources',
        'children' => 
        array (
        ),
        'controller' => '',
      ),
    ),
    'controller' => '',
  ),
  2 => 
  array (
    'text' => 'components',
    'parent' => 'topnav',
    'action' => '',
    'description' => '',
    'icon' => '<i class="icon-cube icon"></i>',
    'menuindex' => 2,
    'params' => '',
    'handler' => '',
    'permissions' => 'components',
    'namespace' => 'core',
    'id' => 'components',
    'children' => 
    array (
      0 => 
      array (
        'text' => 'installer',
        'parent' => 'components',
        'action' => 'workspaces',
        'description' => 'installer_desc',
        'icon' => '',
        'menuindex' => 0,
        'params' => '',
        'handler' => '',
        'permissions' => 'packages',
        'namespace' => 'core',
        'id' => 'installer',
        'children' => 
        array (
        ),
        'controller' => '',
      ),
    ),
    'controller' => '',
  ),
);