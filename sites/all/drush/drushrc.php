<?php 


$options['sites'] = array (
);
$options['profiles'] = array (
  0 => 'minimal',
  1 => 'standard',
);
$options['packages'] = array (
  'base' => 
  array (
    'modules' => 
    array (
      'forum' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/modules/forum/forum.module',
        'basename' => 'forum.module',
        'name' => 'forum',
        'info' => 
        array (
          'name' => 'Forum',
          'description' => 'Provides discussion forums.',
          'dependencies' => 
          array (
            0 => 'taxonomy',
            1 => 'comment',
          ),
          'package' => 'Core',
          'version' => '7.39',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'forum.test',
          ),
          'configure' => 'admin/structure/forum',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'forum.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1440020197',
          'php' => '5.2.4',
        ),
        'schema_version' => '7012',
        'project' => 'drupal',
        'version' => '7.39',
      ),
      'taxonomy' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/modules/taxonomy/taxonomy.module',
        'basename' => 'taxonomy.module',
        'name' => 'taxonomy',
        'info' => 
        array (
          'name' => 'Taxonomy',
          'description' => 'Enables the categorization of content.',
          'package' => 'Core',
          'version' => '7.39',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'options',
          ),
          'files' => 
          array (
            0 => 'taxonomy.module',
            1 => 'taxonomy.test',
          ),
          'configure' => 'admin/structure/taxonomy',
          'project' => 'drupal',
          'datestamp' => '1440020197',
          'php' => '5.2.4',
        ),
        'schema_version' => '7011',
        'project' => 'drupal',
        'version' => '7.39',
      ),
      'rdf' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/modules/rdf/rdf.module',
        'basename' => 'rdf.module',
        'name' => 'rdf',
        'info' => 
        array (
          'name' => 'RDF',
          'description' => 'Enriches your content with metadata to let other applications (e.g. search engines, aggregators) better understand its relationships and attributes.',
          'package' => 'Core',
          'version' => '7.39',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'rdf.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1440020197',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.39',
      ),
      'comment' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/modules/comment/comment.module',
        'basename' => 'comment.module',
        'name' => 'comment',
        'info' => 
        array (
          'name' => 'Comment',
          'description' => 'Allows users to comment on and discuss published content.',
          'package' => 'Core',
          'version' => '7.39',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'text',
          ),
          'files' => 
          array (
            0 => 'comment.module',
            1 => 'comment.test',
          ),
          'configure' => 'admin/content/comment',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'comment.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1440020197',
          'php' => '5.2.4',
        ),
        'schema_version' => '7009',
        'project' => 'drupal',
        'version' => '7.39',
      ),
      'user' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/modules/user/user.module',
        'basename' => 'user.module',
        'name' => 'user',
        'info' => 
        array (
          'name' => 'User',
          'description' => 'Manages the user registration and login system.',
          'package' => 'Core',
          'version' => '7.39',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'user.module',
            1 => 'user.test',
          ),
          'required' => true,
          'configure' => 'admin/config/people',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'user.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1440020197',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7018',
        'project' => 'drupal',
        'version' => '7.39',
      ),
      'node' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/modules/node/node.module',
        'basename' => 'node.module',
        'name' => 'node',
        'info' => 
        array (
          'name' => 'Node',
          'description' => 'Allows content to be submitted to the site and displayed on pages.',
          'package' => 'Core',
          'version' => '7.39',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'node.module',
            1 => 'node.test',
          ),
          'required' => true,
          'configure' => 'admin/structure/types',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'node.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1440020197',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7015',
        'project' => 'drupal',
        'version' => '7.39',
      ),
      'trigger' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/modules/trigger/trigger.module',
        'basename' => 'trigger.module',
        'name' => 'trigger',
        'info' => 
        array (
          'name' => 'Trigger',
          'description' => 'Enables actions to be fired on certain system events, such as when new content is created.',
          'package' => 'Core',
          'version' => '7.39',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'trigger.test',
          ),
          'configure' => 'admin/structure/trigger',
          'project' => 'drupal',
          'datestamp' => '1440020197',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'drupal',
        'version' => '7.39',
      ),
      'shortcut' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/modules/shortcut/shortcut.module',
        'basename' => 'shortcut.module',
        'name' => 'shortcut',
        'info' => 
        array (
          'name' => 'Shortcut',
          'description' => 'Allows users to manage customizable lists of shortcut links.',
          'package' => 'Core',
          'version' => '7.39',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'shortcut.test',
          ),
          'configure' => 'admin/config/user-interface/shortcut',
          'project' => 'drupal',
          'datestamp' => '1440020197',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.39',
      ),
      'help' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/modules/help/help.module',
        'basename' => 'help.module',
        'name' => 'help',
        'info' => 
        array (
          'name' => 'Help',
          'description' => 'Manages the display of online help.',
          'package' => 'Core',
          'version' => '7.39',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'help.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1440020197',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.39',
      ),
      'dashboard' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/modules/dashboard/dashboard.module',
        'basename' => 'dashboard.module',
        'name' => 'dashboard',
        'info' => 
        array (
          'name' => 'Dashboard',
          'description' => 'Provides a dashboard page in the administrative interface for organizing administrative tasks and tracking information within your site.',
          'core' => '7.x',
          'package' => 'Core',
          'version' => '7.39',
          'files' => 
          array (
            0 => 'dashboard.test',
          ),
          'dependencies' => 
          array (
            0 => 'block',
          ),
          'configure' => 'admin/dashboard/customize',
          'project' => 'drupal',
          'datestamp' => '1440020197',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.39',
      ),
      'contextual' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/modules/contextual/contextual.module',
        'basename' => 'contextual.module',
        'name' => 'contextual',
        'info' => 
        array (
          'name' => 'Contextual links',
          'description' => 'Provides contextual links to perform actions related to elements on a page.',
          'package' => 'Core',
          'version' => '7.39',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'contextual.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1440020197',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.39',
      ),
      'simpletest' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/modules/simpletest/simpletest.module',
        'basename' => 'simpletest.module',
        'name' => 'simpletest',
        'info' => 
        array (
          'name' => 'Testing',
          'description' => 'Provides a framework for unit and functional testing.',
          'package' => 'Core',
          'version' => '7.39',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'simpletest.test',
            1 => 'drupal_web_test_case.php',
            2 => 'tests/actions.test',
            3 => 'tests/ajax.test',
            4 => 'tests/batch.test',
            5 => 'tests/bootstrap.test',
            6 => 'tests/cache.test',
            7 => 'tests/common.test',
            8 => 'tests/database_test.test',
            9 => 'tests/entity_crud.test',
            10 => 'tests/entity_crud_hook_test.test',
            11 => 'tests/entity_query.test',
            12 => 'tests/error.test',
            13 => 'tests/file.test',
            14 => 'tests/filetransfer.test',
            15 => 'tests/form.test',
            16 => 'tests/graph.test',
            17 => 'tests/image.test',
            18 => 'tests/lock.test',
            19 => 'tests/mail.test',
            20 => 'tests/menu.test',
            21 => 'tests/module.test',
            22 => 'tests/pager.test',
            23 => 'tests/password.test',
            24 => 'tests/path.test',
            25 => 'tests/registry.test',
            26 => 'tests/schema.test',
            27 => 'tests/session.test',
            28 => 'tests/tablesort.test',
            29 => 'tests/theme.test',
            30 => 'tests/unicode.test',
            31 => 'tests/update.test',
            32 => 'tests/xmlrpc.test',
            33 => 'tests/upgrade/upgrade.test',
            34 => 'tests/upgrade/upgrade.comment.test',
            35 => 'tests/upgrade/upgrade.filter.test',
            36 => 'tests/upgrade/upgrade.forum.test',
            37 => 'tests/upgrade/upgrade.locale.test',
            38 => 'tests/upgrade/upgrade.menu.test',
            39 => 'tests/upgrade/upgrade.node.test',
            40 => 'tests/upgrade/upgrade.taxonomy.test',
            41 => 'tests/upgrade/upgrade.trigger.test',
            42 => 'tests/upgrade/upgrade.translatable.test',
            43 => 'tests/upgrade/upgrade.upload.test',
            44 => 'tests/upgrade/upgrade.user.test',
            45 => 'tests/upgrade/update.aggregator.test',
            46 => 'tests/upgrade/update.trigger.test',
            47 => 'tests/upgrade/update.field.test',
            48 => 'tests/upgrade/update.user.test',
          ),
          'configure' => 'admin/config/development/testing/settings',
          'project' => 'drupal',
          'datestamp' => '1440020197',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.39',
      ),
      'locale' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/modules/locale/locale.module',
        'basename' => 'locale.module',
        'name' => 'locale',
        'info' => 
        array (
          'name' => 'Locale',
          'description' => 'Adds language handling functionality and enables the translation of the user interface to languages other than English.',
          'package' => 'Core',
          'version' => '7.39',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'locale.test',
          ),
          'configure' => 'admin/config/regional/language',
          'project' => 'drupal',
          'datestamp' => '1440020197',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7005',
        'project' => 'drupal',
        'version' => '7.39',
      ),
      'path' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/modules/path/path.module',
        'basename' => 'path.module',
        'name' => 'path',
        'info' => 
        array (
          'name' => 'Path',
          'description' => 'Allows users to rename URLs.',
          'package' => 'Core',
          'version' => '7.39',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'path.test',
          ),
          'configure' => 'admin/config/search/path',
          'project' => 'drupal',
          'datestamp' => '1440020197',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.39',
      ),
      'number' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/modules/field/modules/number/number.module',
        'basename' => 'number.module',
        'name' => 'number',
        'info' => 
        array (
          'name' => 'Number',
          'description' => 'Defines numeric field types.',
          'package' => 'Core',
          'version' => '7.39',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'number.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1440020197',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.39',
      ),
      'options' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/modules/field/modules/options/options.module',
        'basename' => 'options.module',
        'name' => 'options',
        'info' => 
        array (
          'name' => 'Options',
          'description' => 'Defines selection, check box and radio button widgets for text and numeric fields.',
          'package' => 'Core',
          'version' => '7.39',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'options.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1440020197',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.39',
      ),
      'text' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/modules/field/modules/text/text.module',
        'basename' => 'text.module',
        'name' => 'text',
        'info' => 
        array (
          'name' => 'Text',
          'description' => 'Defines simple text field types.',
          'package' => 'Core',
          'version' => '7.39',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'text.test',
          ),
          'required' => true,
          'project' => 'drupal',
          'datestamp' => '1440020197',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'drupal',
        'version' => '7.39',
      ),
      'list' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/modules/field/modules/list/list.module',
        'basename' => 'list.module',
        'name' => 'list',
        'info' => 
        array (
          'name' => 'List',
          'description' => 'Defines list field types. Use with Options to create selection lists.',
          'package' => 'Core',
          'version' => '7.39',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
            1 => 'options',
          ),
          'files' => 
          array (
            0 => 'tests/list.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1440020197',
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'drupal',
        'version' => '7.39',
      ),
      'field_sql_storage' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/modules/field/modules/field_sql_storage/field_sql_storage.module',
        'basename' => 'field_sql_storage.module',
        'name' => 'field_sql_storage',
        'info' => 
        array (
          'name' => 'Field SQL storage',
          'description' => 'Stores field data in an SQL database.',
          'package' => 'Core',
          'version' => '7.39',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'field_sql_storage.test',
          ),
          'required' => true,
          'project' => 'drupal',
          'datestamp' => '1440020197',
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'drupal',
        'version' => '7.39',
      ),
      'field' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/modules/field/field.module',
        'basename' => 'field.module',
        'name' => 'field',
        'info' => 
        array (
          'name' => 'Field',
          'description' => 'Field API to add fields to entities like nodes and users.',
          'package' => 'Core',
          'version' => '7.39',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'field.module',
            1 => 'field.attach.inc',
            2 => 'field.info.class.inc',
            3 => 'tests/field.test',
          ),
          'dependencies' => 
          array (
            0 => 'field_sql_storage',
          ),
          'required' => true,
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'theme/field.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1440020197',
          'php' => '5.2.4',
        ),
        'schema_version' => '7003',
        'project' => 'drupal',
        'version' => '7.39',
      ),
      'aggregator' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/modules/aggregator/aggregator.module',
        'basename' => 'aggregator.module',
        'name' => 'aggregator',
        'info' => 
        array (
          'name' => 'Aggregator',
          'description' => 'Aggregates syndicated content (RSS, RDF, and Atom feeds).',
          'package' => 'Core',
          'version' => '7.39',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'aggregator.test',
          ),
          'configure' => 'admin/config/services/aggregator/settings',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'aggregator.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1440020197',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7004',
        'project' => 'drupal',
        'version' => '7.39',
      ),
      'poll' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/modules/poll/poll.module',
        'basename' => 'poll.module',
        'name' => 'poll',
        'info' => 
        array (
          'name' => 'Poll',
          'description' => 'Allows your site to capture votes on different topics in the form of multiple choice questions.',
          'package' => 'Core',
          'version' => '7.39',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'poll.test',
          ),
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'poll.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1440020197',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7004',
        'project' => 'drupal',
        'version' => '7.39',
      ),
      'image' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/modules/image/image.module',
        'basename' => 'image.module',
        'name' => 'image',
        'info' => 
        array (
          'name' => 'Image',
          'description' => 'Provides image manipulation tools.',
          'package' => 'Core',
          'version' => '7.39',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'file',
          ),
          'files' => 
          array (
            0 => 'image.test',
          ),
          'configure' => 'admin/config/media/image-styles',
          'project' => 'drupal',
          'datestamp' => '1440020197',
          'php' => '5.2.4',
        ),
        'schema_version' => '7005',
        'project' => 'drupal',
        'version' => '7.39',
      ),
      'blog' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/modules/blog/blog.module',
        'basename' => 'blog.module',
        'name' => 'blog',
        'info' => 
        array (
          'name' => 'Blog',
          'description' => 'Enables multi-user blogs.',
          'package' => 'Core',
          'version' => '7.39',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'blog.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1440020197',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.39',
      ),
      'toolbar' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/modules/toolbar/toolbar.module',
        'basename' => 'toolbar.module',
        'name' => 'toolbar',
        'info' => 
        array (
          'name' => 'Toolbar',
          'description' => 'Provides a toolbar that shows the top-level administration menu items and links from other modules.',
          'core' => '7.x',
          'package' => 'Core',
          'version' => '7.39',
          'project' => 'drupal',
          'datestamp' => '1440020197',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.39',
      ),
      'overlay' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/modules/overlay/overlay.module',
        'basename' => 'overlay.module',
        'name' => 'overlay',
        'info' => 
        array (
          'name' => 'Overlay',
          'description' => 'Displays the Drupal administration interface in an overlay.',
          'package' => 'Core',
          'version' => '7.39',
          'core' => '7.x',
          'project' => 'drupal',
          'datestamp' => '1440020197',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.39',
      ),
      'statistics' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/modules/statistics/statistics.module',
        'basename' => 'statistics.module',
        'name' => 'statistics',
        'info' => 
        array (
          'name' => 'Statistics',
          'description' => 'Logs access statistics for your site.',
          'package' => 'Core',
          'version' => '7.39',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'statistics.test',
          ),
          'configure' => 'admin/config/system/statistics',
          'project' => 'drupal',
          'datestamp' => '1440020197',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'drupal',
        'version' => '7.39',
      ),
      'php' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/modules/php/php.module',
        'basename' => 'php.module',
        'name' => 'php',
        'info' => 
        array (
          'name' => 'PHP filter',
          'description' => 'Allows embedded PHP code/snippets to be evaluated.',
          'package' => 'Core',
          'version' => '7.39',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'php.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1440020197',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.39',
      ),
      'search' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/modules/search/search.module',
        'basename' => 'search.module',
        'name' => 'search',
        'info' => 
        array (
          'name' => 'Search',
          'description' => 'Enables site-wide keyword searching.',
          'package' => 'Core',
          'version' => '7.39',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'search.extender.inc',
            1 => 'search.test',
          ),
          'configure' => 'admin/config/search/settings',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'search.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1440020197',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'drupal',
        'version' => '7.39',
      ),
      'system' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/modules/system/system.module',
        'basename' => 'system.module',
        'name' => 'system',
        'info' => 
        array (
          'name' => 'System',
          'description' => 'Handles general site configuration for administrators.',
          'package' => 'Core',
          'version' => '7.39',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'system.archiver.inc',
            1 => 'system.mail.inc',
            2 => 'system.queue.inc',
            3 => 'system.tar.inc',
            4 => 'system.updater.inc',
            5 => 'system.test',
          ),
          'required' => true,
          'configure' => 'admin/config/system',
          'project' => 'drupal',
          'datestamp' => '1440020197',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7079',
        'project' => 'drupal',
        'version' => '7.39',
      ),
      'dblog' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/modules/dblog/dblog.module',
        'basename' => 'dblog.module',
        'name' => 'dblog',
        'info' => 
        array (
          'name' => 'Database logging',
          'description' => 'Logs and records system events to the database.',
          'package' => 'Core',
          'version' => '7.39',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'dblog.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1440020197',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'drupal',
        'version' => '7.39',
      ),
      'book' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/modules/book/book.module',
        'basename' => 'book.module',
        'name' => 'book',
        'info' => 
        array (
          'name' => 'Book',
          'description' => 'Allows users to create and organize related content in an outline.',
          'package' => 'Core',
          'version' => '7.39',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'book.test',
          ),
          'configure' => 'admin/content/book/settings',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'book.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1440020197',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.39',
      ),
      'translation' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/modules/translation/translation.module',
        'basename' => 'translation.module',
        'name' => 'translation',
        'info' => 
        array (
          'name' => 'Content translation',
          'description' => 'Allows content to be translated into different languages.',
          'dependencies' => 
          array (
            0 => 'locale',
          ),
          'package' => 'Core',
          'version' => '7.39',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'translation.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1440020197',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.39',
      ),
      'openid' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/modules/openid/openid.module',
        'basename' => 'openid.module',
        'name' => 'openid',
        'info' => 
        array (
          'name' => 'OpenID',
          'description' => 'Allows users to log into your site using OpenID.',
          'version' => '7.39',
          'package' => 'Core',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'openid.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1440020197',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'drupal',
        'version' => '7.39',
      ),
      'file' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/modules/file/file.module',
        'basename' => 'file.module',
        'name' => 'file',
        'info' => 
        array (
          'name' => 'File',
          'description' => 'Defines a file field type.',
          'package' => 'Core',
          'version' => '7.39',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'tests/file.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1440020197',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.39',
      ),
      'syslog' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/modules/syslog/syslog.module',
        'basename' => 'syslog.module',
        'name' => 'syslog',
        'info' => 
        array (
          'name' => 'Syslog',
          'description' => 'Logs and records system events to syslog.',
          'package' => 'Core',
          'version' => '7.39',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'syslog.test',
          ),
          'configure' => 'admin/config/development/logging',
          'project' => 'drupal',
          'datestamp' => '1440020197',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.39',
      ),
      'filter' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/modules/filter/filter.module',
        'basename' => 'filter.module',
        'name' => 'filter',
        'info' => 
        array (
          'name' => 'Filter',
          'description' => 'Filters content in preparation for display.',
          'package' => 'Core',
          'version' => '7.39',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'filter.test',
          ),
          'required' => true,
          'configure' => 'admin/config/content/formats',
          'project' => 'drupal',
          'datestamp' => '1440020197',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7010',
        'project' => 'drupal',
        'version' => '7.39',
      ),
      'menu' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/modules/menu/menu.module',
        'basename' => 'menu.module',
        'name' => 'menu',
        'info' => 
        array (
          'name' => 'Menu',
          'description' => 'Allows administrators to customize the site navigation menu.',
          'package' => 'Core',
          'version' => '7.39',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'menu.test',
          ),
          'configure' => 'admin/structure/menu',
          'project' => 'drupal',
          'datestamp' => '1440020197',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7003',
        'project' => 'drupal',
        'version' => '7.39',
      ),
      'update' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/modules/update/update.module',
        'basename' => 'update.module',
        'name' => 'update',
        'info' => 
        array (
          'name' => 'Update manager',
          'description' => 'Checks for available updates, and can securely install or update modules and themes via a web interface.',
          'version' => '7.39',
          'package' => 'Core',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'update.test',
          ),
          'configure' => 'admin/reports/updates/settings',
          'project' => 'drupal',
          'datestamp' => '1440020197',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'drupal',
        'version' => '7.39',
      ),
      'color' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/modules/color/color.module',
        'basename' => 'color.module',
        'name' => 'color',
        'info' => 
        array (
          'name' => 'Color',
          'description' => 'Allows administrators to change the color scheme of compatible themes.',
          'package' => 'Core',
          'version' => '7.39',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'color.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1440020197',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'drupal',
        'version' => '7.39',
      ),
      'contact' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/modules/contact/contact.module',
        'basename' => 'contact.module',
        'name' => 'contact',
        'info' => 
        array (
          'name' => 'Contact',
          'description' => 'Enables the use of both personal and site-wide contact forms.',
          'package' => 'Core',
          'version' => '7.39',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'contact.test',
          ),
          'configure' => 'admin/structure/contact',
          'project' => 'drupal',
          'datestamp' => '1440020197',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7003',
        'project' => 'drupal',
        'version' => '7.39',
      ),
      'tracker' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/modules/tracker/tracker.module',
        'basename' => 'tracker.module',
        'name' => 'tracker',
        'info' => 
        array (
          'name' => 'Tracker',
          'description' => 'Enables tracking of recent content for users.',
          'dependencies' => 
          array (
            0 => 'comment',
          ),
          'package' => 'Core',
          'version' => '7.39',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'tracker.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1440020197',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'drupal',
        'version' => '7.39',
      ),
      'field_ui' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/modules/field_ui/field_ui.module',
        'basename' => 'field_ui.module',
        'name' => 'field_ui',
        'info' => 
        array (
          'name' => 'Field UI',
          'description' => 'User interface for the Field API.',
          'package' => 'Core',
          'version' => '7.39',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'field_ui.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1440020197',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.39',
      ),
      'block' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/modules/block/block.module',
        'basename' => 'block.module',
        'name' => 'block',
        'info' => 
        array (
          'name' => 'Block',
          'description' => 'Controls the visual building blocks a page is constructed with. Blocks are boxes of content rendered into an area, or region, of a web page.',
          'package' => 'Core',
          'version' => '7.39',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'block.test',
          ),
          'configure' => 'admin/structure/block',
          'project' => 'drupal',
          'datestamp' => '1440020197',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7009',
        'project' => 'drupal',
        'version' => '7.39',
      ),
    ),
    'themes' => 
    array (
      'seven' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/themes/seven/seven.info',
        'basename' => 'seven.info',
        'name' => 'Seven',
        'info' => 
        array (
          'name' => 'Seven',
          'description' => 'A simple one-column, tableless, fluid width administration theme.',
          'package' => 'Core',
          'version' => '7.39',
          'core' => '7.x',
          'stylesheets' => 
          array (
            'screen' => 
            array (
              0 => 'reset.css',
              1 => 'style.css',
            ),
          ),
          'settings' => 
          array (
            'shortcut_module_link' => '1',
          ),
          'regions' => 
          array (
            'content' => 'Content',
            'help' => 'Help',
            'page_top' => 'Page top',
            'page_bottom' => 'Page bottom',
            'sidebar_first' => 'First sidebar',
          ),
          'regions_hidden' => 
          array (
            0 => 'sidebar_first',
          ),
          'project' => 'drupal',
          'datestamp' => '1440020197',
        ),
        'project' => 'drupal',
        'version' => '7.39',
      ),
      'bartik' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/themes/bartik/bartik.info',
        'basename' => 'bartik.info',
        'name' => 'Bartik',
        'info' => 
        array (
          'name' => 'Bartik',
          'description' => 'A flexible, recolorable theme with many regions.',
          'package' => 'Core',
          'version' => '7.39',
          'core' => '7.x',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'css/layout.css',
              1 => 'css/style.css',
              2 => 'css/colors.css',
            ),
            'print' => 
            array (
              0 => 'css/print.css',
            ),
          ),
          'regions' => 
          array (
            'header' => 'Header',
            'help' => 'Help',
            'page_top' => 'Page top',
            'page_bottom' => 'Page bottom',
            'highlighted' => 'Highlighted',
            'featured' => 'Featured',
            'content' => 'Content',
            'sidebar_first' => 'Sidebar first',
            'sidebar_second' => 'Sidebar second',
            'triptych_first' => 'Triptych first',
            'triptych_middle' => 'Triptych middle',
            'triptych_last' => 'Triptych last',
            'footer_firstcolumn' => 'Footer first column',
            'footer_secondcolumn' => 'Footer second column',
            'footer_thirdcolumn' => 'Footer third column',
            'footer_fourthcolumn' => 'Footer fourth column',
            'footer' => 'Footer',
          ),
          'settings' => 
          array (
            'shortcut_module_link' => '0',
          ),
          'project' => 'drupal',
          'datestamp' => '1440020197',
        ),
        'project' => 'drupal',
        'version' => '7.39',
      ),
      'garland' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/themes/garland/garland.info',
        'basename' => 'garland.info',
        'name' => 'Garland',
        'info' => 
        array (
          'name' => 'Garland',
          'description' => 'A multi-column theme which can be configured to modify colors and switch between fixed and fluid width layouts.',
          'package' => 'Core',
          'version' => '7.39',
          'core' => '7.x',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'style.css',
            ),
            'print' => 
            array (
              0 => 'print.css',
            ),
          ),
          'settings' => 
          array (
            'garland_width' => 'fluid',
          ),
          'project' => 'drupal',
          'datestamp' => '1440020197',
        ),
        'project' => 'drupal',
        'version' => '7.39',
      ),
      'stark' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/themes/stark/stark.info',
        'basename' => 'stark.info',
        'name' => 'Stark',
        'info' => 
        array (
          'name' => 'Stark',
          'description' => 'This theme demonstrates Drupal\'s default HTML markup and CSS styles. To learn how to build your own theme and override Drupal\'s default code, see the <a href="http://drupal.org/theme-guide">Theming Guide</a>.',
          'package' => 'Core',
          'version' => '7.39',
          'core' => '7.x',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'layout.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1440020197',
        ),
        'project' => 'drupal',
        'version' => '7.39',
      ),
    ),
    'platforms' => 
    array (
      'drupal' => 
      array (
        'short_name' => 'drupal',
        'version' => '7.39',
        'description' => 'This platform is running Drupal 7.39',
      ),
    ),
    'profiles' => 
    array (
      'minimal' => 
      array (
        'name' => 'minimal',
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/profiles/minimal/minimal.profile',
        'project' => 'drupal',
        'info' => 
        array (
          'name' => 'Minimal',
          'description' => 'Start with only a few modules enabled.',
          'version' => '7.39',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'block',
            1 => 'dblog',
          ),
          'project' => 'drupal',
          'datestamp' => '1440020197',
          'php' => '5.2.4',
          'languages' => 
          array (
            0 => 'en',
          ),
        ),
        'version' => '7.39',
      ),
      'standard' => 
      array (
        'name' => 'standard',
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/profiles/standard/standard.profile',
        'project' => 'drupal',
        'info' => 
        array (
          'name' => 'Standard',
          'description' => 'Install with commonly used features pre-configured.',
          'version' => '7.39',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'block',
            1 => 'color',
            2 => 'comment',
            3 => 'contextual',
            4 => 'dashboard',
            5 => 'help',
            6 => 'image',
            7 => 'list',
            8 => 'menu',
            9 => 'number',
            10 => 'options',
            11 => 'path',
            12 => 'taxonomy',
            13 => 'dblog',
            14 => 'search',
            15 => 'shortcut',
            16 => 'toolbar',
            17 => 'overlay',
            18 => 'field_ui',
            19 => 'file',
            20 => 'rdf',
          ),
          'project' => 'drupal',
          'datestamp' => '1440020197',
          'php' => '5.2.4',
          'languages' => 
          array (
            0 => 'en',
          ),
          'old_short_name' => 'default',
        ),
        'version' => '7.39',
      ),
    ),
  ),
  'sites-all' => 
  array (
    'modules' => 
    array (
      'jquery_update' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/jquery_update/jquery_update.module',
        'basename' => 'jquery_update.module',
        'name' => 'jquery_update',
        'info' => 
        array (
          'name' => 'jQuery Update',
          'description' => 'Update jQuery and jQuery UI to a more recent version.',
          'package' => 'User interface',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'jquery_update.module',
            1 => 'jquery_update.install',
          ),
          'configure' => 'admin/config/development/jquery_update',
          'version' => '7.x-2.6',
          'project' => 'jquery_update',
          'datestamp' => '1434549783',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'jquery_update',
        'version' => '7.x-2.6',
      ),
      'scheduler' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/scheduler/scheduler.module',
        'basename' => 'scheduler.module',
        'name' => 'scheduler',
        'info' => 
        array (
          'name' => 'Scheduler',
          'description' => 'This module allows nodes to be published and unpublished on specified dates and time.',
          'core' => '7.x',
          'configure' => 'admin/config/content/scheduler',
          'files' => 
          array (
            0 => 'scheduler.install',
            1 => 'scheduler.module',
            2 => 'scheduler.test',
            3 => 'scheduler.views.inc',
            4 => 'scheduler_handler_field_scheduler_countdown.inc',
            5 => 'tests/scheduler_api.test',
          ),
          'test_dependencies' => 
          array (
            0 => 'date',
          ),
          'version' => '7.x-1.3',
          'project' => 'scheduler',
          'datestamp' => '1415728082',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7101',
        'project' => 'scheduler',
        'version' => '7.x-1.3',
      ),
      'token' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/token/token.module',
        'basename' => 'token.module',
        'name' => 'token',
        'info' => 
        array (
          'name' => 'Token',
          'description' => 'Provides a user interface for the Token API and some missing core tokens.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'token.test',
          ),
          'version' => '7.x-1.5',
          'project' => 'token',
          'datestamp' => '1361665026',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'token',
        'version' => '7.x-1.5',
      ),
      'file_entity' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/file_entity/file_entity.module',
        'basename' => 'file_entity.module',
        'name' => 'file_entity',
        'info' => 
        array (
          'name' => 'File entity',
          'description' => 'Extends Drupal file entities to be fieldable and viewable.',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
            1 => 'file',
            2 => 'ctools',
            3 => 'system (>=7.9)',
          ),
          'files' => 
          array (
            0 => 'views/views_handler_argument_file_type.inc',
            1 => 'views/views_handler_field_file_rendered.inc',
            2 => 'views/views_handler_field_file_type.inc',
            3 => 'views/views_handler_filter_file_type.inc',
            4 => 'views/views_handler_field_file_filename.inc',
            5 => 'views/views_handler_field_file_link.inc',
            6 => 'views/views_handler_field_file_link_edit.inc',
            7 => 'views/views_handler_field_file_link_delete.inc',
            8 => 'views/views_handler_field_file_link_download.inc',
            9 => 'views/views_handler_field_file_link_usage.inc',
            10 => 'views/views_plugin_row_file_rss.inc',
            11 => 'views/views_plugin_row_file_view.inc',
            12 => 'file_entity.test',
          ),
          'configure' => 'admin/config/media/file-settings',
          'version' => '7.x-2.0-alpha3',
          'project' => 'file_entity',
          'datestamp' => '1382744726',
          'php' => '5.2.4',
        ),
        'schema_version' => '7215',
        'project' => 'file_entity',
        'version' => '7.x-2.0-alpha3',
      ),
      'apachesolr_access' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/apachesolr/apachesolr_access/apachesolr_access.module',
        'basename' => 'apachesolr_access.module',
        'name' => 'apachesolr_access',
        'info' => 
        array (
          'name' => 'Apache Solr Access',
          'description' => 'Integrates node access and other permissions with Apache Solr search',
          'dependencies' => 
          array (
            0 => 'apachesolr',
          ),
          'package' => 'Search Toolkit',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'apachesolr_access.module',
            1 => 'tests/apachesolr_access.test',
          ),
          'version' => '7.x-1.6',
          'project' => 'apachesolr',
          'datestamp' => '1384712308',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'apachesolr',
        'version' => '7.x-1.6',
      ),
      'apachesolr' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/apachesolr/apachesolr.module',
        'basename' => 'apachesolr.module',
        'name' => 'apachesolr',
        'info' => 
        array (
          'name' => 'Apache Solr framework',
          'description' => 'Framework for searching with Solr',
          'package' => 'Search Toolkit',
          'core' => '7.x',
          'configure' => 'admin/config/search/apachesolr/settings',
          'files' => 
          array (
            0 => 'apachesolr.install',
            1 => 'apachesolr.module',
            2 => 'apachesolr.admin.inc',
            3 => 'apachesolr.index.inc',
            4 => 'apachesolr.interface.inc',
            5 => 'Drupal_Apache_Solr_Service.php',
            6 => 'Apache_Solr_Document.php',
            7 => 'Solr_Base_Query.php',
            8 => 'plugins/facetapi/adapter.inc',
            9 => 'plugins/facetapi/query_type_date.inc',
            10 => 'plugins/facetapi/query_type_term.inc',
            11 => 'plugins/facetapi/query_type_numeric_range.inc',
            12 => 'plugins/facetapi/query_type_geo.inc',
            13 => 'tests/Dummy_Solr.php',
            14 => 'tests/apachesolr_base.test',
            15 => 'tests/solr_index_and_search.test',
            16 => 'tests/solr_base_query.test',
            17 => 'tests/solr_base_subquery.test',
            18 => 'tests/solr_document.test',
          ),
          'version' => '7.x-1.6',
          'project' => 'apachesolr',
          'datestamp' => '1384712308',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7017',
        'project' => 'apachesolr',
        'version' => '7.x-1.6',
      ),
      'apachesolr_search' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/apachesolr/apachesolr_search.module',
        'basename' => 'apachesolr_search.module',
        'name' => 'apachesolr_search',
        'info' => 
        array (
          'name' => 'Apache Solr search',
          'description' => 'Search with Solr',
          'dependencies' => 
          array (
            0 => 'search',
            1 => 'apachesolr',
          ),
          'package' => 'Search Toolkit',
          'core' => '7.x',
          'configure' => 'admin/config/search/apachesolr/search-pages',
          'files' => 
          array (
            0 => 'apachesolr_search.install',
            1 => 'apachesolr_search.module',
            2 => 'apachesolr_search.admin.inc',
            3 => 'apachesolr_search.pages.inc',
          ),
          'version' => '7.x-1.6',
          'project' => 'apachesolr',
          'datestamp' => '1384712308',
          'php' => '5.2.4',
        ),
        'schema_version' => '7006',
        'project' => 'apachesolr',
        'version' => '7.x-1.6',
      ),
      'omega_tools' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/omega_tools/omega_tools.module',
        'basename' => 'omega_tools.module',
        'name' => 'omega_tools',
        'info' => 
        array (
          'name' => 'Omega Tools',
          'description' => 'Provides additional functionality for the <a href="http://drupal.org/project/omega">Omega Theme</a>.',
          'package' => 'Theme Tools',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'files' => 
          array (
            0 => 'omega_tools.module',
            1 => 'includes/omega_tools.admin.inc',
            2 => 'includes/omega_tools.drush.inc',
            3 => 'includes/omega_tools.wizard.inc',
          ),
          'version' => '7.x-3.0-rc4',
          'project' => 'omega_tools',
          'datestamp' => '1329502543',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'omega_tools',
        'version' => '7.x-3.0-rc4',
      ),
      'i18n_panels' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/panels/i18n_panels/i18n_panels.module',
        'basename' => 'i18n_panels.module',
        'name' => 'i18n_panels',
        'info' => 
        array (
          'name' => 'Panels translation',
          'description' => 'Supports translatable panels items.',
          'dependencies' => 
          array (
            0 => 'i18n',
            1 => 'panels',
            2 => 'i18n_string',
            3 => 'i18n_translation',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'version' => '7.x-3.4',
          'project' => 'panels',
          'datestamp' => '1392221614',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'panels',
        'version' => '7.x-3.4',
      ),
      'panels_node' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/panels/panels_node/panels_node.module',
        'basename' => 'panels_node.module',
        'name' => 'panels_node',
        'info' => 
        array (
          'name' => 'Panel nodes',
          'description' => 'Create nodes that are divided into areas with selectable content.',
          'package' => 'Panels',
          'dependencies' => 
          array (
            0 => 'panels',
          ),
          'configure' => 'admin/structure/panels',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'panels_node.module',
          ),
          'version' => '7.x-3.4',
          'project' => 'panels',
          'datestamp' => '1392221614',
          'php' => '5.2.4',
        ),
        'schema_version' => '6001',
        'project' => 'panels',
        'version' => '7.x-3.4',
      ),
      'panels_mini' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/panels/panels_mini/panels_mini.module',
        'basename' => 'panels_mini.module',
        'name' => 'panels_mini',
        'info' => 
        array (
          'name' => 'Mini panels',
          'description' => 'Create mini panels that can be used as blocks by Drupal and panes by other panel modules.',
          'package' => 'Panels',
          'dependencies' => 
          array (
            0 => 'panels',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'plugins/export_ui/panels_mini_ui.class.php',
          ),
          'version' => '7.x-3.4',
          'project' => 'panels',
          'datestamp' => '1392221614',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'panels',
        'version' => '7.x-3.4',
      ),
      'panels_ipe' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/panels/panels_ipe/panels_ipe.module',
        'basename' => 'panels_ipe.module',
        'name' => 'panels_ipe',
        'info' => 
        array (
          'name' => 'Panels In-Place Editor',
          'description' => 'Provide a UI for managing some Panels directly on the frontend, instead of having to use the backend.',
          'package' => 'Panels',
          'dependencies' => 
          array (
            0 => 'panels',
          ),
          'core' => '7.x',
          'configure' => 'admin/structure/panels',
          'files' => 
          array (
            0 => 'panels_ipe.module',
          ),
          'version' => '7.x-3.4',
          'project' => 'panels',
          'datestamp' => '1392221614',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'panels',
        'version' => '7.x-3.4',
      ),
      'panels' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/panels/panels.module',
        'basename' => 'panels.module',
        'name' => 'panels',
        'info' => 
        array (
          'name' => 'Panels',
          'description' => 'Core Panels display functions; provides no external UI, at least one other Panels module should be enabled.',
          'core' => '7.x',
          'package' => 'Panels',
          'configure' => 'admin/structure/panels',
          'dependencies' => 
          array (
            0 => 'ctools (>=1.4)',
          ),
          'files' => 
          array (
            0 => 'panels.module',
            1 => 'includes/common.inc',
            2 => 'includes/legacy.inc',
            3 => 'includes/plugins.inc',
            4 => 'plugins/views/panels_views_plugin_row_fields.inc',
          ),
          'version' => '7.x-3.4',
          'project' => 'panels',
          'datestamp' => '1392221614',
          'php' => '5.2.4',
        ),
        'schema_version' => '7303',
        'project' => 'panels',
        'version' => '7.x-3.4',
      ),
      'workbench' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/workbench/workbench.module',
        'basename' => 'workbench.module',
        'name' => 'workbench',
        'info' => 
        array (
          'name' => 'Workbench',
          'description' => 'Workbench editorial suite.',
          'package' => 'Workbench',
          'core' => '7.x',
          'configure' => 'admin/config/workbench/settings',
          'dependencies' => 
          array (
            0 => 'views',
          ),
          'version' => '7.x-1.2',
          'project' => 'workbench',
          'datestamp' => '1358534592',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'workbench',
        'version' => '7.x-1.2',
      ),
      'workbench_media' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/workbench_media/workbench_media.module',
        'basename' => 'workbench_media.module',
        'name' => 'workbench_media',
        'info' => 
        array (
          'name' => 'Workbench Media',
          'description' => 'Media and File features for the Workbench editorial suite.',
          'package' => 'Workbench',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'workbench',
            1 => 'media',
          ),
          'version' => '7.x-1.1',
          'project' => 'workbench_media',
          'datestamp' => '1346858332',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'workbench_media',
        'version' => '7.x-1.1',
      ),
      'pathologic' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/pathologic/pathologic.module',
        'basename' => 'pathologic.module',
        'name' => 'pathologic',
        'info' => 
        array (
          'name' => 'Pathologic',
          'description' => 'Helps avoid broken links and incorrect paths in content.',
          'package' => 'Input filters',
          'dependencies' => 
          array (
            0 => 'filter',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'pathologic.test',
          ),
          'version' => '7.x-2.12',
          'project' => 'pathologic',
          'datestamp' => '1387055607',
          'php' => '5.2.4',
        ),
        'schema_version' => '7200',
        'project' => 'pathologic',
        'version' => '7.x-2.12',
      ),
      'menu_position' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/menu_position/menu_position.module',
        'basename' => 'menu_position.module',
        'name' => 'menu_position',
        'info' => 
        array (
          'name' => 'Menu position',
          'description' => 'Customize menu position of nodes depending on their content type, associated terms and others conditions.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'menu (>7.11)',
          ),
          'files' => 
          array (
            0 => 'menu_position.module',
            1 => 'menu_position.admin.inc',
            2 => 'menu_position.install',
            3 => 'menu_position.node_type.inc',
          ),
          'configure' => 'admin/structure/menu-position',
          'version' => '7.x-1.1',
          'project' => 'menu_position',
          'datestamp' => '1329911144',
          'php' => '5.2.4',
        ),
        'schema_version' => '7102',
        'project' => 'menu_position',
        'version' => '7.x-1.1',
      ),
      'page_title' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/page_title/page_title.module',
        'basename' => 'page_title.module',
        'name' => 'page_title',
        'info' => 
        array (
          'name' => 'Page Title',
          'description' => 'Enhanced control over the page title (in the &lt;head> tag).',
          'core' => '7.x',
          'package' => 'SEO',
          'dependencies' => 
          array (
            0 => 'token',
          ),
          'files' => 
          array (
            0 => 'page_title.module',
            1 => 'page_title.admin.inc',
            2 => 'page_title.tokens.inc',
            3 => 'page_title.test',
            4 => 'views/plugins/page_title_plugin_display_page_with_page_title.inc',
            5 => 'views_handler_field_node_page_title.inc',
          ),
          'configure' => 'admin/config/search/page-title',
          'version' => '7.x-2.7',
          'project' => 'page_title',
          'datestamp' => '1336556786',
          'php' => '5.2.4',
        ),
        'schema_version' => '7200',
        'project' => 'page_title',
        'version' => '7.x-2.7',
      ),
      'nodespotbox_filter' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/nodespotbox/nodespotbox_filter/nodespotbox_filter.module',
        'basename' => 'nodespotbox_filter.module',
        'name' => 'nodespotbox_filter',
        'info' => 
        array (
          'name' => 'Nodespotbox filter',
          'description' => 'Implements a filter/limit the displays shown in the node edit form for spotboxes',
          'package' => 'Content',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'nodespotbox',
          ),
          'files' => 
          array (
            0 => 'nodespotbox_filter.install',
            1 => 'nodespotbox_filter.module',
          ),
          'version' => '7.x-1.7',
          'project' => 'nodespotbox',
          'datestamp' => '1348080539',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'nodespotbox',
        'version' => '7.x-1.7',
      ),
      'nodespotbox' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/nodespotbox/nodespotbox.module',
        'basename' => 'nodespotbox.module',
        'name' => 'nodespotbox',
        'info' => 
        array (
          'name' => 'Nodespotbox',
          'description' => 'Create spotboxes (blocks) from nodes using views to display content.',
          'package' => 'Content',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'views',
          ),
          'files' => 
          array (
            0 => 'nodespotbox.install',
            1 => 'nodespotbox.module',
          ),
          'version' => '7.x-1.7',
          'project' => 'nodespotbox',
          'datestamp' => '1348080539',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'nodespotbox',
        'version' => '7.x-1.7',
      ),
      'globalredirect' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/globalredirect/globalredirect.module',
        'basename' => 'globalredirect.module',
        'name' => 'globalredirect',
        'info' => 
        array (
          'name' => 'Global Redirect',
          'description' => 'Searches for an alias of the current URL and 301 redirects if found. Stops duplicate content arising when path module is enabled.',
          'package' => 'Path management',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'globalredirect.test',
          ),
          'configure' => 'admin/config/system/globalredirect',
          'version' => '7.x-1.5',
          'project' => 'globalredirect',
          'datestamp' => '1339748779',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '6101',
        'project' => 'globalredirect',
        'version' => '7.x-1.5',
      ),
      'module_filter' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/module_filter/module_filter.module',
        'basename' => 'module_filter.module',
        'name' => 'module_filter',
        'info' => 
        array (
          'name' => 'Module filter',
          'description' => 'Filter the modules list.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'module_filter.install',
            1 => 'module_filter.js',
            2 => 'module_filter.module',
            3 => 'module_filter.admin.inc',
            4 => 'module_filter.theme.inc',
            5 => 'css/module_filter.css',
            6 => 'css/module_filter_tab.css',
            7 => 'js/module_filter.js',
            8 => 'js/module_filter_tab.js',
          ),
          'configure' => 'admin/config/user-interface/modulefilter',
          'version' => '7.x-1.8',
          'project' => 'module_filter',
          'datestamp' => '1375995220',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7100',
        'project' => 'module_filter',
        'version' => '7.x-1.8',
      ),
      'mailchimp_activity' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/mailchimp/modules/mailchimp_activity/mailchimp_activity.module',
        'basename' => 'mailchimp_activity.module',
        'name' => 'mailchimp_activity',
        'info' => 
        array (
          'name' => 'MailChimp Activity',
          'description' => 'View activity for an email address associated with any entity.',
          'package' => 'MailChimp',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'mailchimp',
            1 => 'entity',
          ),
          'files' => 
          array (
            0 => 'mailchimp_activity.entity.inc',
            1 => 'mailchimp_activity.ui_controller.inc',
          ),
          'version' => '7.x-2.12',
          'project' => 'mailchimp',
          'datestamp' => '1374771079',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'mailchimp',
        'version' => '7.x-2.12',
      ),
      'mailchimp_campaign' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/mailchimp/modules/mailchimp_campaign/mailchimp_campaign.module',
        'basename' => 'mailchimp_campaign.module',
        'name' => 'mailchimp_campaign',
        'info' => 
        array (
          'name' => 'MailChimp Campaigns',
          'description' => 'Create, send and import MailChimp campaigns.',
          'package' => 'MailChimp',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'mailchimp_lists',
            1 => 'entity',
          ),
          'files' => 
          array (
            0 => 'mailchimp_campaign.admin.inc',
            1 => 'mailchimp_campaign.entity.inc',
          ),
          'configure' => 'admin/config/services/mailchimp/campaigns',
          'version' => '7.x-2.12',
          'project' => 'mailchimp',
          'datestamp' => '1374771079',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'mailchimp',
        'version' => '7.x-2.12',
      ),
      'mailchimp_lists' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/mailchimp/modules/mailchimp_lists/mailchimp_lists.module',
        'basename' => 'mailchimp_lists.module',
        'name' => 'mailchimp_lists',
        'info' => 
        array (
          'name' => 'MailChimp Lists',
          'description' => 'Manage and integrate MailChimp lists.',
          'package' => 'MailChimp',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'mailchimp',
            1 => 'entity',
            2 => 'entity_token',
          ),
          'configure' => 'admin/config/services/mailchimp/lists',
          'files' => 
          array (
            0 => 'lib/mailchimp_lists.entity.inc',
            1 => 'tests/mailchimp_lists.test',
          ),
          'version' => '7.x-2.12',
          'project' => 'mailchimp',
          'datestamp' => '1374771079',
          'php' => '5.2.4',
        ),
        'schema_version' => '7206',
        'project' => 'mailchimp',
        'version' => '7.x-2.12',
      ),
      'mailchimp' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/mailchimp/mailchimp.module',
        'basename' => 'mailchimp.module',
        'name' => 'mailchimp',
        'info' => 
        array (
          'name' => 'MailChimp',
          'description' => 'MailChimp email service integration.',
          'package' => 'MailChimp',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'includes/mailchimp.inc',
            1 => 'tests/mailchimp_tests.inc',
          ),
          'dependencies' => 
          array (
            0 => 'libraries (>=2)',
          ),
          'configure' => 'admin/config/services/mailchimp',
          'version' => '7.x-2.12',
          'project' => 'mailchimp',
          'datestamp' => '1374771079',
          'php' => '5.2.4',
        ),
        'schema_version' => '7201',
        'project' => 'mailchimp',
        'version' => '7.x-2.12',
      ),
      'devel_generate' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/devel/devel_generate/devel_generate.module',
        'basename' => 'devel_generate.module',
        'name' => 'devel_generate',
        'info' => 
        array (
          'name' => 'Devel generate',
          'description' => 'Generate dummy users, nodes, and taxonomy terms.',
          'package' => 'Development',
          'core' => '7.x',
          'tags' => 
          array (
            0 => 'developer',
          ),
          'configure' => 'admin/config/development/generate',
          'files' => 
          array (
            0 => 'devel_generate.test',
          ),
          'version' => '7.x-1.4',
          'project' => 'devel',
          'datestamp' => '1391635452',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'devel',
        'version' => '7.x-1.4',
      ),
      'devel_node_access' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/devel/devel_node_access.module',
        'basename' => 'devel_node_access.module',
        'name' => 'devel_node_access',
        'info' => 
        array (
          'name' => 'Devel node access',
          'description' => 'Developer blocks and page illustrating relevant node_access records.',
          'package' => 'Development',
          'dependencies' => 
          array (
            0 => 'menu',
          ),
          'core' => '7.x',
          'configure' => 'admin/config/development/devel',
          'tags' => 
          array (
            0 => 'developer',
          ),
          'version' => '7.x-1.4',
          'project' => 'devel',
          'datestamp' => '1391635452',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'devel',
        'version' => '7.x-1.4',
      ),
      'devel' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/devel/devel.module',
        'basename' => 'devel.module',
        'name' => 'devel',
        'info' => 
        array (
          'name' => 'Devel',
          'description' => 'Various blocks, pages, and functions for developers.',
          'package' => 'Development',
          'core' => '7.x',
          'configure' => 'admin/config/development/devel',
          'tags' => 
          array (
            0 => 'developer',
          ),
          'files' => 
          array (
            0 => 'devel.test',
            1 => 'devel.mail.inc',
          ),
          'version' => '7.x-1.4',
          'project' => 'devel',
          'datestamp' => '1391635452',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7006',
        'project' => 'devel',
        'version' => '7.x-1.4',
      ),
      'devel_themer' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/devel_themer/devel_themer.module',
        'basename' => 'devel_themer.module',
        'name' => 'devel_themer',
        'info' => 
        array (
          'name' => 'Theme developer',
          'description' => 'Essential theme API information for theme developers',
          'package' => 'Development',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'devel',
            1 => 'simplehtmldom (1.x)',
          ),
          'configure' => 'admin/config/development/devel_themer',
          'files' => 
          array (
            0 => 'devel_themer.module',
          ),
          'version' => '7.x-1.x-dev',
          'project' => 'devel_themer',
          'datestamp' => '1416866288',
          'php' => '5.2.4',
        ),
        'schema_version' => '6001',
        'project' => 'devel_themer',
        'version' => '7.x-1.x-dev',
      ),
      'date_tools' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/date/date_tools/date_tools.module',
        'basename' => 'date_tools.module',
        'name' => 'date_tools',
        'info' => 
        array (
          'name' => 'Date Tools',
          'description' => 'Tools to import and auto-create dates and calendars.',
          'dependencies' => 
          array (
            0 => 'date',
          ),
          'package' => 'Date/Time',
          'core' => '7.x',
          'configure' => 'admin/config/date/tools',
          'files' => 
          array (
            0 => 'tests/date_tools.test',
          ),
          'version' => '7.x-2.7',
          'project' => 'date',
          'datestamp' => '1387659206',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'date',
        'version' => '7.x-2.7',
      ),
      'date_views' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/date/date_views/date_views.module',
        'basename' => 'date_views.module',
        'name' => 'date_views',
        'info' => 
        array (
          'name' => 'Date Views',
          'description' => 'Views integration for date fields and date functionality.',
          'package' => 'Date/Time',
          'dependencies' => 
          array (
            0 => 'date_api',
            1 => 'views',
          ),
          'core' => '7.x',
          'php' => '5.2',
          'files' => 
          array (
            0 => 'includes/date_views_argument_handler.inc',
            1 => 'includes/date_views_argument_handler_simple.inc',
            2 => 'includes/date_views_filter_handler.inc',
            3 => 'includes/date_views_filter_handler_simple.inc',
            4 => 'includes/date_views.views.inc',
            5 => 'includes/date_views_plugin_pager.inc',
          ),
          'version' => '7.x-2.7',
          'project' => 'date',
          'datestamp' => '1387659206',
        ),
        'schema_version' => 0,
        'project' => 'date',
        'version' => '7.x-2.7',
      ),
      'date_all_day' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/date/date_all_day/date_all_day.module',
        'basename' => 'date_all_day.module',
        'name' => 'date_all_day',
        'info' => 
        array (
          'name' => 'Date All Day',
          'description' => 'Adds \'All Day\' functionality to date fields, including an \'All Day\' theme and \'All Day\' checkboxes for the Date select and Date popup widgets.',
          'dependencies' => 
          array (
            0 => 'date_api',
            1 => 'date',
          ),
          'package' => 'Date/Time',
          'core' => '7.x',
          'version' => '7.x-2.7',
          'project' => 'date',
          'datestamp' => '1387659206',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'date',
        'version' => '7.x-2.7',
      ),
      'date_repeat_field' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/date/date_repeat_field/date_repeat_field.module',
        'basename' => 'date_repeat_field.module',
        'name' => 'date_repeat_field',
        'info' => 
        array (
          'name' => 'Date Repeat Field',
          'description' => 'Creates the option of Repeating date fields and manages Date fields that use the Date Repeat API.',
          'dependencies' => 
          array (
            0 => 'date_api',
            1 => 'date',
            2 => 'date_repeat',
          ),
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'date_repeat_field.css',
            ),
          ),
          'package' => 'Date/Time',
          'core' => '7.x',
          'version' => '7.x-2.7',
          'project' => 'date',
          'datestamp' => '1387659206',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'date',
        'version' => '7.x-2.7',
      ),
      'date_api' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/date/date_api/date_api.module',
        'basename' => 'date_api.module',
        'name' => 'date_api',
        'info' => 
        array (
          'name' => 'Date API',
          'description' => 'A Date API that can be used by other modules.',
          'package' => 'Date/Time',
          'core' => '7.x',
          'php' => '5.2',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'date.css',
            ),
          ),
          'files' => 
          array (
            0 => 'date_api.module',
            1 => 'date_api_sql.inc',
          ),
          'version' => '7.x-2.7',
          'project' => 'date',
          'datestamp' => '1387659206',
          'dependencies' => 
          array (
          ),
        ),
        'schema_version' => '7001',
        'project' => 'date',
        'version' => '7.x-2.7',
      ),
      'date_context' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/date/date_context/date_context.module',
        'basename' => 'date_context.module',
        'name' => 'date_context',
        'info' => 
        array (
          'name' => 'Date Context',
          'description' => 'Adds an option to the Context module to set a context condition based on the value of a date field.',
          'package' => 'Date/Time',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'date',
            1 => 'context',
          ),
          'files' => 
          array (
            0 => 'date_context.module',
            1 => 'plugins/date_context_date_condition.inc',
          ),
          'version' => '7.x-2.7',
          'project' => 'date',
          'datestamp' => '1387659206',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'date',
        'version' => '7.x-2.7',
      ),
      'date_popup' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/date/date_popup/date_popup.module',
        'basename' => 'date_popup.module',
        'name' => 'date_popup',
        'info' => 
        array (
          'name' => 'Date Popup',
          'description' => 'Enables jquery popup calendars and time entry widgets for selecting dates and times.',
          'dependencies' => 
          array (
            0 => 'date_api',
          ),
          'package' => 'Date/Time',
          'core' => '7.x',
          'configure' => 'admin/config/date/date_popup',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'themes/datepicker.1.7.css',
            ),
          ),
          'version' => '7.x-2.7',
          'project' => 'date',
          'datestamp' => '1387659206',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'date',
        'version' => '7.x-2.7',
      ),
      'date_migrate_example' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/date/date_migrate/date_migrate_example/date_migrate_example.module',
        'basename' => 'date_migrate_example.module',
        'name' => 'date_migrate_example',
        'info' => 
        array (
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'date',
            1 => 'date_repeat',
            2 => 'date_repeat_field',
            3 => 'features',
            4 => 'migrate',
          ),
          'description' => 'Examples of migrating with the Date module',
          'features' => 
          array (
            'field' => 
            array (
              0 => 'node-date_migrate_example-body',
              1 => 'node-date_migrate_example-field_date',
              2 => 'node-date_migrate_example-field_date_range',
              3 => 'node-date_migrate_example-field_date_repeat',
              4 => 'node-date_migrate_example-field_datestamp',
              5 => 'node-date_migrate_example-field_datestamp_range',
              6 => 'node-date_migrate_example-field_datetime',
              7 => 'node-date_migrate_example-field_datetime_range',
            ),
            'node' => 
            array (
              0 => 'date_migrate_example',
            ),
          ),
          'files' => 
          array (
            0 => 'date_migrate_example.migrate.inc',
          ),
          'name' => 'Date Migration Example',
          'package' => 'Features',
          'project' => 'date',
          'version' => '7.x-2.7',
          'datestamp' => '1387659206',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'date',
        'version' => '7.x-2.7',
      ),
      'date_repeat' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/date/date_repeat/date_repeat.module',
        'basename' => 'date_repeat.module',
        'name' => 'date_repeat',
        'info' => 
        array (
          'name' => 'Date Repeat API',
          'description' => 'A Date Repeat API to calculate repeating dates and times from iCal rules.',
          'dependencies' => 
          array (
            0 => 'date_api',
          ),
          'package' => 'Date/Time',
          'core' => '7.x',
          'php' => '5.2',
          'files' => 
          array (
            0 => 'tests/date_repeat.test',
            1 => 'tests/date_repeat_form.test',
          ),
          'version' => '7.x-2.7',
          'project' => 'date',
          'datestamp' => '1387659206',
        ),
        'schema_version' => 0,
        'project' => 'date',
        'version' => '7.x-2.7',
      ),
      'date' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/date/date.module',
        'basename' => 'date.module',
        'name' => 'date',
        'info' => 
        array (
          'name' => 'Date',
          'description' => 'Makes date/time fields available.',
          'dependencies' => 
          array (
            0 => 'date_api',
          ),
          'package' => 'Date/Time',
          'core' => '7.x',
          'php' => '5.2',
          'files' => 
          array (
            0 => 'date.migrate.inc',
            1 => 'tests/date_api.test',
            2 => 'tests/date.test',
            3 => 'tests/date_field.test',
            4 => 'tests/date_migrate.test',
            5 => 'tests/date_validation.test',
            6 => 'tests/date_timezone.test',
          ),
          'version' => '7.x-2.7',
          'project' => 'date',
          'datestamp' => '1387659206',
        ),
        'schema_version' => '7004',
        'project' => 'date',
        'version' => '7.x-2.7',
      ),
      'views_export' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/views/views_export/views_export.module',
        'basename' => 'views_export.module',
        'name' => 'views_export',
        'info' => 
        array (
          'dependencies' => 
          array (
          ),
          'description' => '',
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'views_ui' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/views/views_ui.module',
        'basename' => 'views_ui.module',
        'name' => 'views_ui',
        'info' => 
        array (
          'name' => 'Views UI',
          'description' => 'Administrative interface to views. Without this module, you cannot create or edit your views.',
          'package' => 'Views',
          'core' => '7.x',
          'configure' => 'admin/structure/views',
          'dependencies' => 
          array (
            0 => 'views',
          ),
          'files' => 
          array (
            0 => 'views_ui.module',
            1 => 'plugins/views_wizard/views_ui_base_views_wizard.class.php',
          ),
          'version' => '7.x-3.11',
          'project' => 'views',
          'datestamp' => '1430321048',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'views',
        'version' => '7.x-3.11',
      ),
      'views' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/views/views.module',
        'basename' => 'views.module',
        'name' => 'views',
        'info' => 
        array (
          'name' => 'Views',
          'description' => 'Create customized lists and queries from your database.',
          'package' => 'Views',
          'core' => '7.x',
          'php' => '5.2',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'css/views.css',
            ),
          ),
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'files' => 
          array (
            0 => 'handlers/views_handler_area.inc',
            1 => 'handlers/views_handler_area_messages.inc',
            2 => 'handlers/views_handler_area_result.inc',
            3 => 'handlers/views_handler_area_text.inc',
            4 => 'handlers/views_handler_area_text_custom.inc',
            5 => 'handlers/views_handler_area_view.inc',
            6 => 'handlers/views_handler_argument.inc',
            7 => 'handlers/views_handler_argument_date.inc',
            8 => 'handlers/views_handler_argument_formula.inc',
            9 => 'handlers/views_handler_argument_many_to_one.inc',
            10 => 'handlers/views_handler_argument_null.inc',
            11 => 'handlers/views_handler_argument_numeric.inc',
            12 => 'handlers/views_handler_argument_string.inc',
            13 => 'handlers/views_handler_argument_group_by_numeric.inc',
            14 => 'handlers/views_handler_field.inc',
            15 => 'handlers/views_handler_field_counter.inc',
            16 => 'handlers/views_handler_field_boolean.inc',
            17 => 'handlers/views_handler_field_contextual_links.inc',
            18 => 'handlers/views_handler_field_custom.inc',
            19 => 'handlers/views_handler_field_date.inc',
            20 => 'handlers/views_handler_field_entity.inc',
            21 => 'handlers/views_handler_field_markup.inc',
            22 => 'handlers/views_handler_field_math.inc',
            23 => 'handlers/views_handler_field_numeric.inc',
            24 => 'handlers/views_handler_field_prerender_list.inc',
            25 => 'handlers/views_handler_field_time_interval.inc',
            26 => 'handlers/views_handler_field_serialized.inc',
            27 => 'handlers/views_handler_field_machine_name.inc',
            28 => 'handlers/views_handler_field_url.inc',
            29 => 'handlers/views_handler_filter.inc',
            30 => 'handlers/views_handler_filter_boolean_operator.inc',
            31 => 'handlers/views_handler_filter_boolean_operator_string.inc',
            32 => 'handlers/views_handler_filter_combine.inc',
            33 => 'handlers/views_handler_filter_date.inc',
            34 => 'handlers/views_handler_filter_equality.inc',
            35 => 'handlers/views_handler_filter_entity_bundle.inc',
            36 => 'handlers/views_handler_filter_group_by_numeric.inc',
            37 => 'handlers/views_handler_filter_in_operator.inc',
            38 => 'handlers/views_handler_filter_many_to_one.inc',
            39 => 'handlers/views_handler_filter_numeric.inc',
            40 => 'handlers/views_handler_filter_string.inc',
            41 => 'handlers/views_handler_filter_fields_compare.inc',
            42 => 'handlers/views_handler_relationship.inc',
            43 => 'handlers/views_handler_relationship_groupwise_max.inc',
            44 => 'handlers/views_handler_sort.inc',
            45 => 'handlers/views_handler_sort_date.inc',
            46 => 'handlers/views_handler_sort_formula.inc',
            47 => 'handlers/views_handler_sort_group_by_numeric.inc',
            48 => 'handlers/views_handler_sort_menu_hierarchy.inc',
            49 => 'handlers/views_handler_sort_random.inc',
            50 => 'includes/base.inc',
            51 => 'includes/handlers.inc',
            52 => 'includes/plugins.inc',
            53 => 'includes/view.inc',
            54 => 'modules/aggregator/views_handler_argument_aggregator_fid.inc',
            55 => 'modules/aggregator/views_handler_argument_aggregator_iid.inc',
            56 => 'modules/aggregator/views_handler_argument_aggregator_category_cid.inc',
            57 => 'modules/aggregator/views_handler_field_aggregator_title_link.inc',
            58 => 'modules/aggregator/views_handler_field_aggregator_category.inc',
            59 => 'modules/aggregator/views_handler_field_aggregator_item_description.inc',
            60 => 'modules/aggregator/views_handler_field_aggregator_xss.inc',
            61 => 'modules/aggregator/views_handler_filter_aggregator_category_cid.inc',
            62 => 'modules/aggregator/views_plugin_row_aggregator_rss.inc',
            63 => 'modules/book/views_plugin_argument_default_book_root.inc',
            64 => 'modules/comment/views_handler_argument_comment_user_uid.inc',
            65 => 'modules/comment/views_handler_field_comment.inc',
            66 => 'modules/comment/views_handler_field_comment_depth.inc',
            67 => 'modules/comment/views_handler_field_comment_link.inc',
            68 => 'modules/comment/views_handler_field_comment_link_approve.inc',
            69 => 'modules/comment/views_handler_field_comment_link_delete.inc',
            70 => 'modules/comment/views_handler_field_comment_link_edit.inc',
            71 => 'modules/comment/views_handler_field_comment_link_reply.inc',
            72 => 'modules/comment/views_handler_field_comment_node_link.inc',
            73 => 'modules/comment/views_handler_field_comment_username.inc',
            74 => 'modules/comment/views_handler_field_ncs_last_comment_name.inc',
            75 => 'modules/comment/views_handler_field_ncs_last_updated.inc',
            76 => 'modules/comment/views_handler_field_node_comment.inc',
            77 => 'modules/comment/views_handler_field_node_new_comments.inc',
            78 => 'modules/comment/views_handler_field_last_comment_timestamp.inc',
            79 => 'modules/comment/views_handler_filter_comment_user_uid.inc',
            80 => 'modules/comment/views_handler_filter_ncs_last_updated.inc',
            81 => 'modules/comment/views_handler_filter_node_comment.inc',
            82 => 'modules/comment/views_handler_sort_comment_thread.inc',
            83 => 'modules/comment/views_handler_sort_ncs_last_comment_name.inc',
            84 => 'modules/comment/views_handler_sort_ncs_last_updated.inc',
            85 => 'modules/comment/views_plugin_row_comment_rss.inc',
            86 => 'modules/comment/views_plugin_row_comment_view.inc',
            87 => 'modules/contact/views_handler_field_contact_link.inc',
            88 => 'modules/field/views_handler_field_field.inc',
            89 => 'modules/field/views_handler_relationship_entity_reverse.inc',
            90 => 'modules/field/views_handler_argument_field_list.inc',
            91 => 'modules/field/views_handler_filter_field_list_boolean.inc',
            92 => 'modules/field/views_handler_argument_field_list_string.inc',
            93 => 'modules/field/views_handler_filter_field_list.inc',
            94 => 'modules/filter/views_handler_field_filter_format_name.inc',
            95 => 'modules/locale/views_handler_field_node_language.inc',
            96 => 'modules/locale/views_handler_filter_node_language.inc',
            97 => 'modules/locale/views_handler_argument_locale_group.inc',
            98 => 'modules/locale/views_handler_argument_locale_language.inc',
            99 => 'modules/locale/views_handler_field_locale_group.inc',
            100 => 'modules/locale/views_handler_field_locale_language.inc',
            101 => 'modules/locale/views_handler_field_locale_link_edit.inc',
            102 => 'modules/locale/views_handler_filter_locale_group.inc',
            103 => 'modules/locale/views_handler_filter_locale_language.inc',
            104 => 'modules/locale/views_handler_filter_locale_version.inc',
            105 => 'modules/node/views_handler_argument_dates_various.inc',
            106 => 'modules/node/views_handler_argument_node_language.inc',
            107 => 'modules/node/views_handler_argument_node_nid.inc',
            108 => 'modules/node/views_handler_argument_node_type.inc',
            109 => 'modules/node/views_handler_argument_node_vid.inc',
            110 => 'modules/node/views_handler_argument_node_uid_revision.inc',
            111 => 'modules/node/views_handler_field_history_user_timestamp.inc',
            112 => 'modules/node/views_handler_field_node.inc',
            113 => 'modules/node/views_handler_field_node_link.inc',
            114 => 'modules/node/views_handler_field_node_link_delete.inc',
            115 => 'modules/node/views_handler_field_node_link_edit.inc',
            116 => 'modules/node/views_handler_field_node_revision.inc',
            117 => 'modules/node/views_handler_field_node_revision_link.inc',
            118 => 'modules/node/views_handler_field_node_revision_link_delete.inc',
            119 => 'modules/node/views_handler_field_node_revision_link_revert.inc',
            120 => 'modules/node/views_handler_field_node_path.inc',
            121 => 'modules/node/views_handler_field_node_type.inc',
            122 => 'modules/node/views_handler_filter_history_user_timestamp.inc',
            123 => 'modules/node/views_handler_filter_node_access.inc',
            124 => 'modules/node/views_handler_filter_node_status.inc',
            125 => 'modules/node/views_handler_filter_node_type.inc',
            126 => 'modules/node/views_handler_filter_node_uid_revision.inc',
            127 => 'modules/node/views_plugin_argument_default_node.inc',
            128 => 'modules/node/views_plugin_argument_validate_node.inc',
            129 => 'modules/node/views_plugin_row_node_rss.inc',
            130 => 'modules/node/views_plugin_row_node_view.inc',
            131 => 'modules/profile/views_handler_field_profile_date.inc',
            132 => 'modules/profile/views_handler_field_profile_list.inc',
            133 => 'modules/profile/views_handler_filter_profile_selection.inc',
            134 => 'modules/search/views_handler_argument_search.inc',
            135 => 'modules/search/views_handler_field_search_score.inc',
            136 => 'modules/search/views_handler_filter_search.inc',
            137 => 'modules/search/views_handler_sort_search_score.inc',
            138 => 'modules/search/views_plugin_row_search_view.inc',
            139 => 'modules/statistics/views_handler_field_accesslog_path.inc',
            140 => 'modules/system/views_handler_argument_file_fid.inc',
            141 => 'modules/system/views_handler_field_file.inc',
            142 => 'modules/system/views_handler_field_file_extension.inc',
            143 => 'modules/system/views_handler_field_file_filemime.inc',
            144 => 'modules/system/views_handler_field_file_uri.inc',
            145 => 'modules/system/views_handler_field_file_status.inc',
            146 => 'modules/system/views_handler_filter_file_status.inc',
            147 => 'modules/taxonomy/views_handler_argument_taxonomy.inc',
            148 => 'modules/taxonomy/views_handler_argument_term_node_tid.inc',
            149 => 'modules/taxonomy/views_handler_argument_term_node_tid_depth.inc',
            150 => 'modules/taxonomy/views_handler_argument_term_node_tid_depth_modifier.inc',
            151 => 'modules/taxonomy/views_handler_argument_vocabulary_vid.inc',
            152 => 'modules/taxonomy/views_handler_argument_vocabulary_machine_name.inc',
            153 => 'modules/taxonomy/views_handler_field_taxonomy.inc',
            154 => 'modules/taxonomy/views_handler_field_term_node_tid.inc',
            155 => 'modules/taxonomy/views_handler_field_term_link_edit.inc',
            156 => 'modules/taxonomy/views_handler_filter_term_node_tid.inc',
            157 => 'modules/taxonomy/views_handler_filter_term_node_tid_depth.inc',
            158 => 'modules/taxonomy/views_handler_filter_vocabulary_vid.inc',
            159 => 'modules/taxonomy/views_handler_filter_vocabulary_machine_name.inc',
            160 => 'modules/taxonomy/views_handler_relationship_node_term_data.inc',
            161 => 'modules/taxonomy/views_plugin_argument_validate_taxonomy_term.inc',
            162 => 'modules/taxonomy/views_plugin_argument_default_taxonomy_tid.inc',
            163 => 'modules/tracker/views_handler_argument_tracker_comment_user_uid.inc',
            164 => 'modules/tracker/views_handler_filter_tracker_comment_user_uid.inc',
            165 => 'modules/tracker/views_handler_filter_tracker_boolean_operator.inc',
            166 => 'modules/system/views_handler_filter_system_type.inc',
            167 => 'modules/translation/views_handler_argument_node_tnid.inc',
            168 => 'modules/translation/views_handler_field_node_link_translate.inc',
            169 => 'modules/translation/views_handler_field_node_translation_link.inc',
            170 => 'modules/translation/views_handler_filter_node_tnid.inc',
            171 => 'modules/translation/views_handler_filter_node_tnid_child.inc',
            172 => 'modules/translation/views_handler_relationship_translation.inc',
            173 => 'modules/user/views_handler_argument_user_uid.inc',
            174 => 'modules/user/views_handler_argument_users_roles_rid.inc',
            175 => 'modules/user/views_handler_field_user.inc',
            176 => 'modules/user/views_handler_field_user_language.inc',
            177 => 'modules/user/views_handler_field_user_link.inc',
            178 => 'modules/user/views_handler_field_user_link_cancel.inc',
            179 => 'modules/user/views_handler_field_user_link_edit.inc',
            180 => 'modules/user/views_handler_field_user_mail.inc',
            181 => 'modules/user/views_handler_field_user_name.inc',
            182 => 'modules/user/views_handler_field_user_permissions.inc',
            183 => 'modules/user/views_handler_field_user_picture.inc',
            184 => 'modules/user/views_handler_field_user_roles.inc',
            185 => 'modules/user/views_handler_filter_user_current.inc',
            186 => 'modules/user/views_handler_filter_user_name.inc',
            187 => 'modules/user/views_handler_filter_user_permissions.inc',
            188 => 'modules/user/views_handler_filter_user_roles.inc',
            189 => 'modules/user/views_plugin_argument_default_current_user.inc',
            190 => 'modules/user/views_plugin_argument_default_user.inc',
            191 => 'modules/user/views_plugin_argument_validate_user.inc',
            192 => 'modules/user/views_plugin_row_user_view.inc',
            193 => 'plugins/views_plugin_access.inc',
            194 => 'plugins/views_plugin_access_none.inc',
            195 => 'plugins/views_plugin_access_perm.inc',
            196 => 'plugins/views_plugin_access_role.inc',
            197 => 'plugins/views_plugin_argument_default.inc',
            198 => 'plugins/views_plugin_argument_default_php.inc',
            199 => 'plugins/views_plugin_argument_default_fixed.inc',
            200 => 'plugins/views_plugin_argument_default_raw.inc',
            201 => 'plugins/views_plugin_argument_validate.inc',
            202 => 'plugins/views_plugin_argument_validate_numeric.inc',
            203 => 'plugins/views_plugin_argument_validate_php.inc',
            204 => 'plugins/views_plugin_cache.inc',
            205 => 'plugins/views_plugin_cache_none.inc',
            206 => 'plugins/views_plugin_cache_time.inc',
            207 => 'plugins/views_plugin_display.inc',
            208 => 'plugins/views_plugin_display_attachment.inc',
            209 => 'plugins/views_plugin_display_block.inc',
            210 => 'plugins/views_plugin_display_default.inc',
            211 => 'plugins/views_plugin_display_embed.inc',
            212 => 'plugins/views_plugin_display_extender.inc',
            213 => 'plugins/views_plugin_display_feed.inc',
            214 => 'plugins/views_plugin_display_page.inc',
            215 => 'plugins/views_plugin_exposed_form_basic.inc',
            216 => 'plugins/views_plugin_exposed_form.inc',
            217 => 'plugins/views_plugin_exposed_form_input_required.inc',
            218 => 'plugins/views_plugin_localization_core.inc',
            219 => 'plugins/views_plugin_localization.inc',
            220 => 'plugins/views_plugin_localization_none.inc',
            221 => 'plugins/views_plugin_pager.inc',
            222 => 'plugins/views_plugin_pager_full.inc',
            223 => 'plugins/views_plugin_pager_mini.inc',
            224 => 'plugins/views_plugin_pager_none.inc',
            225 => 'plugins/views_plugin_pager_some.inc',
            226 => 'plugins/views_plugin_query.inc',
            227 => 'plugins/views_plugin_query_default.inc',
            228 => 'plugins/views_plugin_row.inc',
            229 => 'plugins/views_plugin_row_fields.inc',
            230 => 'plugins/views_plugin_row_rss_fields.inc',
            231 => 'plugins/views_plugin_style.inc',
            232 => 'plugins/views_plugin_style_default.inc',
            233 => 'plugins/views_plugin_style_grid.inc',
            234 => 'plugins/views_plugin_style_list.inc',
            235 => 'plugins/views_plugin_style_jump_menu.inc',
            236 => 'plugins/views_plugin_style_mapping.inc',
            237 => 'plugins/views_plugin_style_rss.inc',
            238 => 'plugins/views_plugin_style_summary.inc',
            239 => 'plugins/views_plugin_style_summary_jump_menu.inc',
            240 => 'plugins/views_plugin_style_summary_unformatted.inc',
            241 => 'plugins/views_plugin_style_table.inc',
            242 => 'tests/handlers/views_handlers.test',
            243 => 'tests/handlers/views_handler_area_text.test',
            244 => 'tests/handlers/views_handler_argument_null.test',
            245 => 'tests/handlers/views_handler_argument_string.test',
            246 => 'tests/handlers/views_handler_field.test',
            247 => 'tests/handlers/views_handler_field_boolean.test',
            248 => 'tests/handlers/views_handler_field_custom.test',
            249 => 'tests/handlers/views_handler_field_counter.test',
            250 => 'tests/handlers/views_handler_field_date.test',
            251 => 'tests/handlers/views_handler_field_file_extension.test',
            252 => 'tests/handlers/views_handler_field_file_size.test',
            253 => 'tests/handlers/views_handler_field_math.test',
            254 => 'tests/handlers/views_handler_field_url.test',
            255 => 'tests/handlers/views_handler_field_xss.test',
            256 => 'tests/handlers/views_handler_filter_combine.test',
            257 => 'tests/handlers/views_handler_filter_date.test',
            258 => 'tests/handlers/views_handler_filter_equality.test',
            259 => 'tests/handlers/views_handler_filter_in_operator.test',
            260 => 'tests/handlers/views_handler_filter_numeric.test',
            261 => 'tests/handlers/views_handler_filter_string.test',
            262 => 'tests/handlers/views_handler_sort_random.test',
            263 => 'tests/handlers/views_handler_sort_date.test',
            264 => 'tests/handlers/views_handler_sort.test',
            265 => 'tests/test_handlers/views_test_area_access.inc',
            266 => 'tests/test_plugins/views_test_plugin_access_test_dynamic.inc',
            267 => 'tests/test_plugins/views_test_plugin_access_test_static.inc',
            268 => 'tests/test_plugins/views_test_plugin_style_test_mapping.inc',
            269 => 'tests/plugins/views_plugin_display.test',
            270 => 'tests/styles/views_plugin_style_jump_menu.test',
            271 => 'tests/styles/views_plugin_style.test',
            272 => 'tests/styles/views_plugin_style_base.test',
            273 => 'tests/styles/views_plugin_style_mapping.test',
            274 => 'tests/styles/views_plugin_style_unformatted.test',
            275 => 'tests/views_access.test',
            276 => 'tests/views_analyze.test',
            277 => 'tests/views_basic.test',
            278 => 'tests/views_argument_default.test',
            279 => 'tests/views_argument_validator.test',
            280 => 'tests/views_exposed_form.test',
            281 => 'tests/field/views_fieldapi.test',
            282 => 'tests/views_glossary.test',
            283 => 'tests/views_groupby.test',
            284 => 'tests/views_handlers.test',
            285 => 'tests/views_module.test',
            286 => 'tests/views_pager.test',
            287 => 'tests/views_plugin_localization_test.inc',
            288 => 'tests/views_translatable.test',
            289 => 'tests/views_query.test',
            290 => 'tests/views_upgrade.test',
            291 => 'tests/views_test.views_default.inc',
            292 => 'tests/comment/views_handler_argument_comment_user_uid.test',
            293 => 'tests/comment/views_handler_filter_comment_user_uid.test',
            294 => 'tests/node/views_node_revision_relations.test',
            295 => 'tests/taxonomy/views_handler_relationship_node_term_data.test',
            296 => 'tests/user/views_handler_field_user_name.test',
            297 => 'tests/user/views_user_argument_default.test',
            298 => 'tests/user/views_user_argument_validate.test',
            299 => 'tests/user/views_user.test',
            300 => 'tests/views_cache.test',
            301 => 'tests/views_view.test',
            302 => 'tests/views_ui.test',
          ),
          'version' => '7.x-3.11',
          'project' => 'views',
          'datestamp' => '1430321048',
        ),
        'schema_version' => '7301',
        'project' => 'views',
        'version' => '7.x-3.11',
      ),
      'webform' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/webform/webform.module',
        'basename' => 'webform.module',
        'name' => 'webform',
        'info' => 
        array (
          'name' => 'Webform',
          'description' => 'Enables the creation of forms and questionnaires.',
          'core' => '7.x',
          'package' => 'Webform',
          'configure' => 'admin/config/content/webform',
          'files' => 
          array (
            0 => 'includes/webform.export.inc',
            1 => 'views/webform_handler_field_form_body.inc',
            2 => 'views/webform_handler_field_is_draft.inc',
            3 => 'views/webform_handler_field_node_link_edit.inc',
            4 => 'views/webform_handler_field_node_link_results.inc',
            5 => 'views/webform_handler_field_submission_count.inc',
            6 => 'views/webform_handler_field_submission_link.inc',
            7 => 'views/webform_handler_field_webform_status.inc',
            8 => 'views/webform_handler_filter_is_draft.inc',
            9 => 'views/webform_handler_filter_webform_status.inc',
            10 => 'views/webform.views.inc',
            11 => 'tests/components.test',
            12 => 'tests/permissions.test',
            13 => 'tests/submission.test',
            14 => 'tests/webform.test',
          ),
          'version' => '7.x-3.24',
          'project' => 'webform',
          'datestamp' => '1427956663',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7322',
        'project' => 'webform',
        'version' => '7.x-3.24',
      ),
      'ckeditor_link' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/ckeditor_link/ckeditor_link.module',
        'basename' => 'ckeditor_link.module',
        'name' => 'ckeditor_link',
        'info' => 
        array (
          'name' => 'CKEditor Link',
          'description' => 'Easily create links to Drupal internal paths through CKEditor.',
          'package' => 'User interface',
          'core' => '7.x',
          'configure' => 'admin/config/content/ckeditor_link',
          'version' => '7.x-2.3',
          'project' => 'ckeditor_link',
          'datestamp' => '1358413212',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ckeditor_link',
        'version' => '7.x-2.3',
      ),
      'nanosoap' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/nanosoap/nanosoap.module',
        'basename' => 'nanosoap.module',
        'name' => 'nanosoap',
        'info' => 
        array (
          'name' => 'NanoSOAP',
          'description' => 'Provides a small and simple library for accessing SOAP webservices without all the bells and whistles found in many PHP SOAP libraries.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'nanosoap.inc',
          ),
          'version' => '7.x-1.0',
          'project' => 'nanosoap',
          'datestamp' => '1331125859',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'nanosoap',
        'version' => '7.x-1.0',
      ),
      'features_override' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/features_override/features_override.module',
        'basename' => 'features_override.module',
        'name' => 'features_override',
        'info' => 
        array (
          'name' => 'Features Override',
          'description' => 'Allows exported Features to be overridden',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'features',
          ),
          'package' => 'Features',
          'version' => '7.x-2.0-rc1',
          'project' => 'features_override',
          'datestamp' => '1382019949',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'features_override',
        'version' => '7.x-2.0-rc1',
      ),
      'media_wysiwyg_view_mode' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/media/modules/media_wysiwyg_view_mode/media_wysiwyg_view_mode.module',
        'basename' => 'media_wysiwyg_view_mode.module',
        'name' => 'media_wysiwyg_view_mode',
        'info' => 
        array (
          'name' => 'Media WYSIWYG View Mode',
          'description' => 'Enables files inside of the WYSIWYG editor to be displayed using a separate view mode.',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'media',
            1 => 'wysiwyg',
          ),
          'configure' => 'admin/config/media/wysiwyg-view-mode',
          'version' => '7.x-2.0-alpha3',
          'project' => 'media',
          'datestamp' => '1382744872',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'media',
        'version' => '7.x-2.0-alpha3',
      ),
      'media_internet' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/media/modules/media_internet/media_internet.module',
        'basename' => 'media_internet.module',
        'name' => 'media_internet',
        'info' => 
        array (
          'name' => 'Media Internet Sources',
          'description' => 'Provides an API for accessing media on various internet services',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'media',
          ),
          'files' => 
          array (
            0 => 'includes/MediaBrowserInternet.inc',
          ),
          'version' => '7.x-2.0-alpha3',
          'project' => 'media',
          'datestamp' => '1382744872',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'media',
        'version' => '7.x-2.0-alpha3',
      ),
      'mediafield' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/media/modules/mediafield/mediafield.module',
        'basename' => 'mediafield.module',
        'name' => 'mediafield',
        'info' => 
        array (
          'name' => 'Media Field',
          'description' => 'Provides a field type that stores media-specific data. <em>Deprecated by the core File field type.</em>',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'media',
          ),
          'version' => '7.x-2.0-alpha3',
          'project' => 'media',
          'datestamp' => '1382744872',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'media',
        'version' => '7.x-2.0-alpha3',
      ),
      'media' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/media/media.module',
        'basename' => 'media.module',
        'name' => 'media',
        'info' => 
        array (
          'name' => 'Media',
          'description' => 'Provides the core Media API',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'file_entity',
            1 => 'image',
            2 => 'views',
          ),
          'test_dependencies' => 
          array (
            0 => 'token',
          ),
          'files' => 
          array (
            0 => 'includes/MediaReadOnlyStreamWrapper.inc',
            1 => 'includes/MediaBrowserPluginInterface.inc',
            2 => 'includes/MediaBrowserPlugin.inc',
            3 => 'includes/MediaBrowserUpload.inc',
            4 => 'includes/MediaBrowserView.inc',
            5 => 'includes/MediaEntityTranslationHandler.inc',
            6 => 'includes/media_views_plugin_display_media_browser.inc',
            7 => 'includes/media_views_plugin_style_media_browser.inc',
            8 => 'tests/media.test',
            9 => 'tests/media.entity.test',
            10 => 'tests/media.file.usage.test',
          ),
          'configure' => 'admin/config/media/browser',
          'version' => '7.x-2.0-alpha3',
          'project' => 'media',
          'datestamp' => '1382744872',
          'php' => '5.2.4',
        ),
        'schema_version' => '7218',
        'project' => 'media',
        'version' => '7.x-2.0-alpha3',
      ),
      'transliteration' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/transliteration/transliteration.module',
        'basename' => 'transliteration.module',
        'name' => 'transliteration',
        'info' => 
        array (
          'name' => 'Transliteration',
          'description' => 'Converts non-latin text to US-ASCII and sanitizes file names.',
          'core' => '7.x',
          'configure' => 'admin/config/media/file-system',
          'version' => '7.x-3.1',
          'project' => 'transliteration',
          'datestamp' => '1338540713',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'transliteration',
        'version' => '7.x-3.1',
      ),
      'job_scheduler_trigger' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/job_scheduler/modules/job_scheduler_trigger/job_scheduler_trigger.module',
        'basename' => 'job_scheduler_trigger.module',
        'name' => 'job_scheduler_trigger',
        'info' => 
        array (
          'name' => 'Job Scheduler Trigger',
          'description' => 'Creates scheduler triggers that fire up at certain days, times',
          'core' => '7.x',
          'php' => '5.2',
          'dependencies' => 
          array (
            0 => 'job_scheduler',
          ),
          'version' => '7.x-2.0-alpha3',
          'project' => 'job_scheduler',
          'datestamp' => '1336466457',
        ),
        'schema_version' => 0,
        'project' => 'job_scheduler',
        'version' => '7.x-2.0-alpha3',
      ),
      'job_scheduler' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/job_scheduler/job_scheduler.module',
        'basename' => 'job_scheduler.module',
        'name' => 'job_scheduler',
        'info' => 
        array (
          'name' => 'Job Scheduler',
          'description' => 'Scheduler API',
          'files' => 
          array (
            0 => 'job_scheduler.module',
            1 => 'job_scheduler.install',
            2 => 'JobScheduler.inc',
            3 => 'JobSchedulerCronTab.inc',
          ),
          'core' => '7.x',
          'php' => '5.2',
          'version' => '7.x-2.0-alpha3',
          'project' => 'job_scheduler',
          'datestamp' => '1336466457',
          'dependencies' => 
          array (
          ),
        ),
        'schema_version' => '7101',
        'project' => 'job_scheduler',
        'version' => '7.x-2.0-alpha3',
      ),
      'location_search' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/location/contrib/location_search/location_search.module',
        'basename' => 'location_search.module',
        'name' => 'location_search',
        'info' => 
        array (
          'name' => 'Location Search',
          'package' => 'Location',
          'description' => 'Advanced search page for locations.',
          'dependencies' => 
          array (
            0 => 'search',
            1 => 'location',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'location_search.module',
            1 => 'location_search.install',
            2 => 'location_search.admin.inc',
          ),
          'version' => '7.x-3.2-beta2',
          'project' => 'location',
          'datestamp' => '1387463317',
          'php' => '5.2.4',
        ),
        'schema_version' => '5300',
        'project' => 'location',
        'version' => '7.x-3.2-beta2',
      ),
      'location_cck' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/location/contrib/location_cck/location_cck.module',
        'basename' => 'location_cck.module',
        'name' => 'location_cck',
        'info' => 
        array (
          'name' => 'Location CCK',
          'description' => 'Defines a Location field type.',
          'dependencies' => 
          array (
            0 => 'location',
          ),
          'package' => 'CCK',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'location_cck.module',
            1 => 'location_cck.install',
          ),
          'version' => '7.x-3.2-beta2',
          'project' => 'location',
          'datestamp' => '1387463317',
          'php' => '5.2.4',
        ),
        'schema_version' => '6301',
        'project' => 'location',
        'version' => '7.x-3.2-beta2',
      ),
      'location_generate' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/location/contrib/location_generate/location_generate.module',
        'basename' => 'location_generate.module',
        'name' => 'location_generate',
        'info' => 
        array (
          'name' => 'Location Generate',
          'description' => 'Bulk assign random latitude and longitudes to nodes.',
          'package' => 'Development',
          'dependencies' => 
          array (
            0 => 'devel_generate',
            1 => 'location',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'location_generate.module',
          ),
          'version' => '7.x-3.2-beta2',
          'project' => 'location',
          'datestamp' => '1387463317',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'location',
        'version' => '7.x-3.2-beta2',
      ),
      'location_entity' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/location/contrib/location_entity/location_entity.module',
        'basename' => 'location_entity.module',
        'name' => 'location_entity',
        'info' => 
        array (
          'name' => 'Location Entity',
          'description' => 'Provide information about Location field to Entity module.',
          'core' => '7.x',
          'package' => 'Location',
          'dependencies' => 
          array (
            0 => 'location',
          ),
          'files' => 
          array (
            0 => 'location_entity.module',
          ),
          'version' => '7.x-3.2-beta2',
          'project' => 'location',
          'datestamp' => '1387463317',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'location',
        'version' => '7.x-3.2-beta2',
      ),
      'location_phone' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/location/contrib/location_phone/location_phone.module',
        'basename' => 'location_phone.module',
        'name' => 'location_phone',
        'info' => 
        array (
          'name' => 'Location Phone',
          'package' => 'Location',
          'description' => 'Allows you to add a phone number to a location.',
          'dependencies' => 
          array (
            0 => 'location',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'location_phone.module',
            1 => 'location_phone.install',
            2 => 'location_phone.views.inc',
          ),
          'version' => '7.x-3.2-beta2',
          'project' => 'location',
          'datestamp' => '1387463317',
          'php' => '5.2.4',
        ),
        'schema_version' => '6301',
        'project' => 'location',
        'version' => '7.x-3.2-beta2',
      ),
      'location_fax' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/location/contrib/location_fax/location_fax.module',
        'basename' => 'location_fax.module',
        'name' => 'location_fax',
        'info' => 
        array (
          'name' => 'Location Fax',
          'package' => 'Location',
          'description' => 'Allows you to add a fax number to a location.',
          'dependencies' => 
          array (
            0 => 'location',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'location_fax.module',
            1 => 'location_fax.install',
            2 => 'location_fax.views.inc',
          ),
          'version' => '7.x-3.2-beta2',
          'project' => 'location',
          'datestamp' => '1387463317',
          'php' => '5.2.4',
        ),
        'schema_version' => '6301',
        'project' => 'location',
        'version' => '7.x-3.2-beta2',
      ),
      'location_addanother' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/location/contrib/location_addanother/location_addanother.module',
        'basename' => 'location_addanother.module',
        'name' => 'location_addanother',
        'info' => 
        array (
          'name' => 'Location Add Another',
          'description' => 'Allows you to quickly add locations directly from a node without having to click \'edit\' first.',
          'dependencies' => 
          array (
            0 => 'location',
            1 => 'location_node',
          ),
          'package' => 'Location',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'location_addanother.module',
            1 => 'location_addanother.install',
          ),
          'version' => '7.x-3.2-beta2',
          'project' => 'location',
          'datestamp' => '1387463317',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'location',
        'version' => '7.x-3.2-beta2',
      ),
      'location_taxonomy' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/location/contrib/location_taxonomy/location_taxonomy.module',
        'basename' => 'location_taxonomy.module',
        'name' => 'location_taxonomy',
        'info' => 
        array (
          'name' => 'Location Taxonomy',
          'description' => 'Associate locations with taxonomy terms.',
          'dependencies' => 
          array (
            0 => 'location',
            1 => 'taxonomy',
          ),
          'package' => 'Location',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'location_taxonomy.module',
            1 => 'location_taxonomy.install',
          ),
          'version' => '7.x-3.2-beta2',
          'project' => 'location',
          'datestamp' => '1387463317',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'location',
        'version' => '7.x-3.2-beta2',
      ),
      'location_email' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/location/contrib/location_email/location_email.module',
        'basename' => 'location_email.module',
        'name' => 'location_email',
        'info' => 
        array (
          'name' => 'Location Email',
          'package' => 'Location',
          'description' => 'Allows you to add an email address to a location.',
          'dependencies' => 
          array (
            0 => 'location',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'location_email.module',
            1 => 'location_email.install',
            2 => 'location_email.views.inc',
          ),
          'version' => '7.x-3.2-beta2',
          'project' => 'location',
          'datestamp' => '1387463317',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'location',
        'version' => '7.x-3.2-beta2',
      ),
      'location' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/location/location.module',
        'basename' => 'location.module',
        'name' => 'location',
        'info' => 
        array (
          'name' => 'Location',
          'package' => 'Location',
          'description' => 'The location module allows you to associate a geographic location with content and users. Users can do proximity searches by postal code.  This is useful for organizing communities that have a geographic presence.',
          'core' => '7.x',
          'configure' => 'admin/config/content/location',
          'files' => 
          array (
            0 => 'location.module',
            1 => 'location.install',
            2 => 'location.admin.inc',
            3 => 'location.georss.inc',
            4 => 'location.inc',
            5 => 'location.token.inc',
            6 => 'location.views.inc',
            7 => 'location.views_default.inc',
            8 => 'location.migrate.inc',
            9 => 'tests/location_testcase.test',
            10 => 'tests/cow.test',
            11 => 'tests/earth.test',
            12 => 'tests/google_geocoder.test',
            13 => 'tests/location_cck.test',
            14 => 'tests/location_cck2.test',
            15 => 'handlers/location_handler_argument_location_country.inc',
            16 => 'handlers/location_handler_argument_location_province.inc',
            17 => 'handlers/location_handler_argument_location_proximity.inc',
            18 => 'handlers/location_handler_field_location_address.inc',
            19 => 'handlers/location_handler_field_location_country.inc',
            20 => 'handlers/location_handler_field_location_distance.inc',
            21 => 'handlers/location_handler_field_location_province.inc',
            22 => 'handlers/location_handler_field_location_street.inc',
            23 => 'handlers/location_handler_filter_location_country.inc',
            24 => 'handlers/location_handler_filter_location_province.inc',
            25 => 'handlers/location_handler_sort_location_distance.inc',
            26 => 'handlers/location_views_handler_field_coordinates.inc',
            27 => 'handlers/location_views_handler_field_latitude.inc',
            28 => 'handlers/location_views_handler_field_longitude.inc',
            29 => 'handlers/location_views_handler_filter_proximity.inc',
            30 => 'plugins/contexts/location.inc',
            31 => 'plugins/relationships/location_from_node.inc',
          ),
          'version' => '7.x-3.2-beta2',
          'project' => 'location',
          'datestamp' => '1387463317',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7302',
        'project' => 'location',
        'version' => '7.x-3.2-beta2',
      ),
      'location_user' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/location/location_user.module',
        'basename' => 'location_user.module',
        'name' => 'location_user',
        'info' => 
        array (
          'name' => 'User Locations',
          'description' => 'Associate locations with users.',
          'dependencies' => 
          array (
            0 => 'location',
          ),
          'package' => 'Location',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'location_user.module',
            1 => 'location_user.install',
          ),
          'configure' => 'admin/config/people/accounts',
          'version' => '7.x-3.2-beta2',
          'project' => 'location',
          'datestamp' => '1387463317',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'location',
        'version' => '7.x-3.2-beta2',
      ),
      'location_node' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/location/location_node.module',
        'basename' => 'location_node.module',
        'name' => 'location_node',
        'info' => 
        array (
          'name' => 'Node Locations',
          'description' => 'Associate locations with nodes.',
          'dependencies' => 
          array (
            0 => 'location',
          ),
          'package' => 'Location',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'location_node.module',
            1 => 'location_node.install',
          ),
          'version' => '7.x-3.2-beta2',
          'project' => 'location',
          'datestamp' => '1387463317',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'location',
        'version' => '7.x-3.2-beta2',
      ),
      'delta_ui' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/delta/delta_ui/delta_ui.module',
        'basename' => 'delta_ui.module',
        'name' => 'delta_ui',
        'info' => 
        array (
          'name' => 'Delta UI',
          'description' => 'The Delta UI provides a user interface to build and edit the contextual theme settings provided by the Delta module.',
          'package' => 'Theme Tools',
          'core' => '7.x',
          'version' => '7.x-3.0-beta11',
          'dependencies' => 
          array (
            0 => 'delta',
          ),
          'project' => 'delta',
          'datestamp' => '1343161343',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'delta',
        'version' => '7.x-3.0-beta11',
      ),
      'delta_blocks' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/delta/delta_blocks/delta_blocks.module',
        'basename' => 'delta_blocks.module',
        'name' => 'delta_blocks',
        'info' => 
        array (
          'name' => 'Delta Blocks',
          'description' => 'Exposes a number of core Drupal elements as blocks.',
          'core' => '7.x',
          'version' => '7.x-3.0-beta11',
          'package' => 'Theme Tools',
          'project' => 'delta',
          'datestamp' => '1343161343',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'delta',
        'version' => '7.x-3.0-beta11',
      ),
      'delta_color' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/delta/delta_color/delta_color.module',
        'basename' => 'delta_color.module',
        'name' => 'delta_color',
        'info' => 
        array (
          'name' => 'Delta Color',
          'description' => 'Makes the color module available for Delta templates.',
          'core' => '7.x',
          'version' => '7.x-3.0-beta11',
          'package' => 'Theme Tools',
          'dependencies' => 
          array (
            0 => 'delta',
            1 => 'color',
          ),
          'project' => 'delta',
          'datestamp' => '1343161343',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'delta',
        'version' => '7.x-3.0-beta11',
      ),
      'delta' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/delta/delta.module',
        'basename' => 'delta.module',
        'name' => 'delta',
        'info' => 
        array (
          'name' => 'Delta API',
          'description' => 'The Delta module is an advanced manipulation of the Theme Settings API to allow for customization/configuration of theme settings based on node types, context, or groups of paths.',
          'package' => 'Theme Tools',
          'core' => '7.x',
          'version' => '7.x-3.0-beta11',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'project' => 'delta',
          'datestamp' => '1343161343',
          'php' => '5.2.4',
        ),
        'schema_version' => '7304',
        'project' => 'delta',
        'version' => '7.x-3.0-beta11',
      ),
      'wysiwyg' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/wysiwyg/wysiwyg.module',
        'basename' => 'wysiwyg.module',
        'name' => 'wysiwyg',
        'info' => 
        array (
          'name' => 'Wysiwyg',
          'description' => 'Allows to edit content with client-side editors.',
          'package' => 'User interface',
          'core' => '7.x',
          'configure' => 'admin/config/content/wysiwyg',
          'files' => 
          array (
            0 => 'wysiwyg.module',
            1 => 'tests/wysiwyg.test',
          ),
          'version' => '7.x-2.2',
          'project' => 'wysiwyg',
          'datestamp' => '1349213776',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7200',
        'project' => 'wysiwyg',
        'version' => '7.x-2.2',
      ),
      'strongarm' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/strongarm/strongarm.module',
        'basename' => 'strongarm.module',
        'name' => 'strongarm',
        'info' => 
        array (
          'name' => 'Strongarm',
          'description' => 'Enforces variable values defined by modules that need settings set to operate properly.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'files' => 
          array (
            0 => 'strongarm.admin.inc',
            1 => 'strongarm.install',
            2 => 'strongarm.module',
          ),
          'version' => '7.x-2.0',
          'project' => 'strongarm',
          'datestamp' => '1339604214',
          'php' => '5.2.4',
        ),
        'schema_version' => '7201',
        'project' => 'strongarm',
        'version' => '7.x-2.0',
      ),
      'fb_social' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/fb_social/fb_social.module',
        'basename' => 'fb_social.module',
        'name' => 'fb_social',
        'info' => 
        array (
          'name' => 'fb social',
          'description' => 'Provides integration with Facebook social plugins',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'package' => 'Facebook Social Plugins',
          'core' => '7.x',
          'configure' => 'admin/structure/fbsocial',
          'files' => 
          array (
            0 => 'plugins/views/fb_social_handler_field.inc',
            1 => 'plugins/export_ui/fb_social_presets_ui.inc',
          ),
          'version' => '7.x-2.0-beta4',
          'project' => 'fb_social',
          'datestamp' => '1327205167',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'fb_social',
        'version' => '7.x-2.0-beta4',
      ),
      'context_ui' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/context/context_ui/context_ui.module',
        'basename' => 'context_ui.module',
        'name' => 'context_ui',
        'info' => 
        array (
          'name' => 'Context UI',
          'description' => 'Provides a simple UI for settings up a site structure using Context.',
          'dependencies' => 
          array (
            0 => 'context',
          ),
          'package' => 'Context',
          'core' => '7.x',
          'configure' => 'admin/structure/context',
          'files' => 
          array (
            0 => 'context.module',
            1 => 'tests/context_ui.test',
          ),
          'version' => '7.x-3.6',
          'project' => 'context',
          'datestamp' => '1420573188',
          'php' => '5.2.4',
        ),
        'schema_version' => '6004',
        'project' => 'context',
        'version' => '7.x-3.6',
      ),
      'context_layouts' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/context/context_layouts/context_layouts.module',
        'basename' => 'context_layouts.module',
        'name' => 'context_layouts',
        'info' => 
        array (
          'name' => 'Context layouts',
          'description' => 'Allow theme layer to provide multiple region layouts and integrate with context.',
          'dependencies' => 
          array (
            0 => 'context',
          ),
          'package' => 'Context',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'plugins/context_layouts_reaction_block.inc',
          ),
          'version' => '7.x-3.6',
          'project' => 'context',
          'datestamp' => '1420573188',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'context',
        'version' => '7.x-3.6',
      ),
      'context' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/context/context.module',
        'basename' => 'context.module',
        'name' => 'context',
        'info' => 
        array (
          'name' => 'Context',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'description' => 'Provide modules with a cache that lasts for a single page request.',
          'package' => 'Context',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'tests/context.test',
            1 => 'tests/context.conditions.test',
            2 => 'tests/context.reactions.test',
          ),
          'version' => '7.x-3.6',
          'project' => 'context',
          'datestamp' => '1420573188',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'context',
        'version' => '7.x-3.6',
      ),
      'diff' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/diff/diff.module',
        'basename' => 'diff.module',
        'name' => 'diff',
        'info' => 
        array (
          'name' => 'Diff',
          'description' => 'Show differences between content revisions.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'DiffEngine.php',
          ),
          'version' => '7.x-3.2',
          'project' => 'diff',
          'datestamp' => '1352784357',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7305',
        'project' => 'diff',
        'version' => '7.x-3.2',
      ),
      'danishstemmer' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/danishstemmer/danishstemmer.module',
        'basename' => 'danishstemmer.module',
        'name' => 'danishstemmer',
        'info' => 
        array (
          'name' => 'Danish Stemmer',
          'description' => 'Improve search on Danish sites by reducing words to their stem.',
          'package' => 'Search',
          'dependencies' => 
          array (
            0 => 'search',
          ),
          'core' => '7.x',
          'version' => '7.x-1.1',
          'project' => 'danishstemmer',
          'datestamp' => '1325708142',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'danishstemmer',
        'version' => '7.x-1.1',
      ),
      'features' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/features/features.module',
        'basename' => 'features.module',
        'name' => 'features',
        'info' => 
        array (
          'name' => 'Features',
          'description' => 'Provides feature management for Drupal.',
          'core' => '7.x',
          'package' => 'Features',
          'files' => 
          array (
            0 => 'tests/features.test',
          ),
          'configure' => 'admin/structure/features/settings',
          'version' => '7.x-2.0',
          'project' => 'features',
          'datestamp' => '1382018758',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '6101',
        'project' => 'features',
        'version' => '7.x-2.0',
      ),
      'redirect' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/redirect/redirect.module',
        'basename' => 'redirect.module',
        'name' => 'redirect',
        'info' => 
        array (
          'name' => 'Redirect',
          'description' => 'Allows users to redirect from old URLs to new URLs.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'redirect.module',
            1 => 'redirect.admin.inc',
            2 => 'redirect.install',
            3 => 'redirect.test',
            4 => 'views/redirect.views.inc',
            5 => 'views/redirect_handler_filter_redirect_type.inc',
            6 => 'views/redirect_handler_field_redirect_source.inc',
            7 => 'views/redirect_handler_field_redirect_redirect.inc',
            8 => 'views/redirect_handler_field_redirect_operations.inc',
            9 => 'views/redirect_handler_field_redirect_link_edit.inc',
            10 => 'views/redirect_handler_field_redirect_link_delete.inc',
          ),
          'configure' => 'admin/config/search/redirect/settings',
          'version' => '7.x-1.0-rc1',
          'project' => 'redirect',
          'datestamp' => '1347989995',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'redirect',
        'version' => '7.x-1.0-rc1',
      ),
      'memcache_admin' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/memcache/memcache_admin/memcache_admin.module',
        'basename' => 'memcache_admin.module',
        'name' => 'memcache_admin',
        'info' => 
        array (
          'name' => 'Memcache Admin',
          'description' => 'Adds a User Interface to monitor the Memcache for this site.',
          'core' => '7.x',
          'package' => 'Performance and scalability',
          'version' => '7.x-1.0',
          'project' => 'memcache',
          'datestamp' => '1326973845',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'memcache',
        'version' => '7.x-1.0',
      ),
      'memcache' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/memcache/memcache.module',
        'basename' => 'memcache.module',
        'name' => 'memcache',
        'info' => 
        array (
          'name' => 'Memcache',
          'description' => 'High performance integration with memcache.',
          'package' => 'Performance and scalability',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'tests/memcache.test',
            1 => 'tests/memcache-session.test',
            2 => 'tests/memcache-lock.test',
          ),
          'version' => '7.x-1.0',
          'project' => 'memcache',
          'datestamp' => '1326973845',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'memcache',
        'version' => '7.x-1.0',
      ),
      'context_inline_editor' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/context_inline_editor/context_inline_editor.module',
        'basename' => 'context_inline_editor.module',
        'name' => 'context_inline_editor',
        'info' => 
        array (
          'name' => 'Context inline editor',
          'description' => 'Adds the Context UI module\'s inline editor feature to a link in the shortcut bar',
          'dependencies' => 
          array (
            0 => 'context_ui',
            1 => 'toolbar',
          ),
          'package' => 'Context',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'context_inline_editor.module',
          ),
          'version' => '7.x-1.0-beta1+1-dev',
          'project' => 'context_inline_editor',
          'datestamp' => '1380567352',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'context_inline_editor',
        'version' => '7.x-1.0-beta1+1-dev',
      ),
      'linkit' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/linkit/linkit.module',
        'basename' => 'linkit.module',
        'name' => 'linkit',
        'info' => 
        array (
          'name' => 'Linkit',
          'description' => 'Provides an easy interface for inserting links to internal content, files and external pages by providing autocomplete search for several WYSIWYG-editors.',
          'core' => '7.x',
          'configure' => 'admin/config/content/linkit',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'entity',
          ),
          'files' => 
          array (
            0 => 'plugins/plugin.class.php',
            1 => 'plugins/linkit_plugins/linkit-plugin-entity.class.php',
          ),
          'version' => '7.x-2.6',
          'project' => 'linkit',
          'datestamp' => '1362862214',
          'php' => '5.2.4',
        ),
        'schema_version' => '7203',
        'project' => 'linkit',
        'version' => '7.x-2.6',
      ),
      'pathauto' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/pathauto/pathauto.module',
        'basename' => 'pathauto.module',
        'name' => 'pathauto',
        'info' => 
        array (
          'name' => 'Pathauto',
          'description' => 'Provides a mechanism for modules to automatically generate aliases for the content they manage.',
          'dependencies' => 
          array (
            0 => 'path',
            1 => 'token',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'pathauto.test',
          ),
          'configure' => 'admin/config/search/path/patterns',
          'recommends' => 
          array (
            0 => 'redirect',
          ),
          'version' => '7.x-1.2',
          'project' => 'pathauto',
          'datestamp' => '1344525185',
          'php' => '5.2.4',
        ),
        'schema_version' => '7005',
        'project' => 'pathauto',
        'version' => '7.x-1.2',
      ),
      'multiform' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/multiform/multiform.module',
        'basename' => 'multiform.module',
        'name' => 'multiform',
        'info' => 
        array (
          'name' => 'Multiple forms',
          'description' => 'Allows displaying and submitting multiple forms in one form',
          'files' => 
          array (
            0 => 'multiform.module',
            1 => 'tests/multiform.test',
          ),
          'core' => '7.x',
          'version' => '7.x-1.0',
          'project' => 'multiform',
          'datestamp' => '1327823749',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'multiform',
        'version' => '7.x-1.0',
      ),
      'context_filter' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/context_filter/context_filter.module',
        'basename' => 'context_filter.module',
        'name' => 'context_filter',
        'info' => 
        array (
          'name' => 'Context filter',
          'description' => 'Enables filtering of context selection options',
          'package' => 'Context',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'context_filter.module',
          ),
          'dependencies' => 
          array (
            0 => 'context_ui',
          ),
          'version' => '7.x-1.1+0-dev',
          'project' => 'context_filter',
          'datestamp' => '1380567341',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'context_filter',
        'version' => '7.x-1.1+0-dev',
      ),
      'mediaelement' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/mediaelement/mediaelement.module',
        'basename' => 'mediaelement.module',
        'name' => 'mediaelement',
        'info' => 
        array (
          'name' => 'MediaElement.js',
          'description' => 'Provide MediaElement.js to be used on the entire site or just with Filefields.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'libraries',
          ),
          'files' => 
          array (
            0 => 'mediaelement.admin.inc',
            1 => 'mediaelement.install',
            2 => 'mediaelement.module',
          ),
          'configure' => 'admin/config/media/mediaelement',
          'version' => '7.x-1.2',
          'project' => 'mediaelement',
          'datestamp' => '1326568843',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'mediaelement',
        'version' => '7.x-1.2',
      ),
      'workbench_files' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/workbench_files/workbench_files.module',
        'basename' => 'workbench_files.module',
        'name' => 'workbench_files',
        'info' => 
        array (
          'name' => 'Workbench Files',
          'description' => 'File-related features for the Workbench editorial suite.',
          'package' => 'Workbench',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'workbench',
          ),
          'version' => '7.x-1.0',
          'project' => 'workbench_files',
          'datestamp' => '1314385328',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'workbench_files',
        'version' => '7.x-1.0',
      ),
      'googleanalytics' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/google_analytics/googleanalytics.module',
        'basename' => 'googleanalytics.module',
        'name' => 'googleanalytics',
        'info' => 
        array (
          'name' => 'Google Analytics',
          'description' => 'Allows your site to be tracked by Google Analytics by adding a Javascript tracking code to every page.',
          'core' => '7.x',
          'package' => 'Statistics',
          'configure' => 'admin/config/system/googleanalytics',
          'files' => 
          array (
            0 => 'googleanalytics.test',
          ),
          'test_dependencies' => 
          array (
            0 => 'token',
          ),
          'version' => '7.x-1.4',
          'project' => 'google_analytics',
          'datestamp' => '1382021586',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7007',
        'project' => 'google_analytics',
        'version' => '7.x-1.4',
      ),
      'html5_tools' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/html5_tools/html5_tools.module',
        'basename' => 'html5_tools.module',
        'name' => 'html5_tools',
        'info' => 
        array (
          'name' => 'HTML5 Tools',
          'description' => 'Provides a set of tools to allow sites to be built using HTML5.',
          'core' => '7.x',
          'php' => '5',
          'package' => 'Markup',
          'dependencies' => 
          array (
            0 => 'elements',
            1 => 'field',
          ),
          'configure' => 'admin/config/development/html5-tools',
          'version' => '7.x-1.2',
          'project' => 'html5_tools',
          'datestamp' => '1336411555',
        ),
        'schema_version' => 0,
        'project' => 'html5_tools',
        'version' => '7.x-1.2',
      ),
      'backup_migrate' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/backup_migrate/backup_migrate.module',
        'basename' => 'backup_migrate.module',
        'name' => 'backup_migrate',
        'info' => 
        array (
          'name' => 'Backup and Migrate',
          'description' => 'Backup or migrate the Drupal Database quickly and without unnecessary data.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'backup_migrate.module',
            1 => 'backup_migrate.install',
            2 => 'includes/destinations.inc',
            3 => 'includes/profiles.inc',
            4 => 'includes/schedules.inc',
          ),
          'configure' => 'admin/config/system/backup_migrate',
          'version' => '7.x-2.8',
          'project' => 'backup_migrate',
          'datestamp' => '1383686305',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7205',
        'project' => 'backup_migrate',
        'version' => '7.x-2.8',
      ),
      'example' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/coder/coder_upgrade/tests/old/samples/example.module',
        'basename' => 'example.module',
        'name' => 'example',
        'info' => 
        array (
          'dependencies' => 
          array (
          ),
          'description' => '',
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'coder_upgrade' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/coder/coder_upgrade/coder_upgrade.module',
        'basename' => 'coder_upgrade.module',
        'name' => 'coder_upgrade',
        'info' => 
        array (
          'name' => 'Coder Upgrade',
          'description' => 'Modifies source code to assist with the upgrade of a module for changes to a relied upon API.',
          'package' => 'Development',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'gplib (<2.0)',
          ),
          'files' => 
          array (
            0 => 'coder_upgrade.test',
          ),
          'configure' => 'admin/config/development/coder/upgrade/settings',
          'version' => '7.x-2.2',
          'project' => 'coder',
          'datestamp' => '1393152812',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'coder',
        'version' => '7.x-2.2',
      ),
      'coder_review' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/coder/coder_review/coder_review.module',
        'basename' => 'coder_review.module',
        'name' => 'coder_review',
        'info' => 
        array (
          'name' => 'Coder Review',
          'description' => '"Developer module" which reviews your code identifying coding style problems and where updates to the API are required.',
          'package' => 'Development',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'coder',
          ),
          'files' => 
          array (
            0 => 'tests/coder_review_test_case.tinc',
            1 => 'tests/coder_review_6x.test',
            2 => 'tests/coder_review_7x.test',
            3 => 'tests/coder_review_comment.test',
            4 => 'tests/coder_review_i18n.test',
            5 => 'tests/coder_review_security.test',
            6 => 'tests/coder_review_sql.test',
            7 => 'tests/coder_review_style.test',
            8 => 'tests/coder_review_sniffer.test',
          ),
          'version' => '7.x-2.2',
          'project' => 'coder',
          'datestamp' => '1393152812',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'coder',
        'version' => '7.x-2.2',
      ),
      'coder' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/coder/coder.module',
        'basename' => 'coder.module',
        'name' => 'coder',
        'info' => 
        array (
          'name' => 'Coder',
          'description' => 'Developer Module that assists with code review and version upgrade',
          'package' => 'Development',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'coder.module',
          ),
          'version' => '7.x-2.2',
          'project' => 'coder',
          'datestamp' => '1393152812',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'coder',
        'version' => '7.x-2.2',
      ),
      'metatag_devel' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/metatag/metatag_devel/metatag_devel.module',
        'basename' => 'metatag_devel.module',
        'name' => 'metatag_devel',
        'info' => 
        array (
          'name' => 'Metatag:Devel',
          'description' => 'Provides development / debugging functionality for the Metatag module. Integrates with Devel Generate.',
          'package' => 'Development',
          'core' => '7.x',
          'tags' => 
          array (
            0 => 'developer',
          ),
          'dependencies' => 
          array (
            0 => 'metatag',
          ),
          'version' => '7.x-1.0-beta9',
          'project' => 'metatag',
          'datestamp' => '1390103307',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'metatag',
        'version' => '7.x-1.0-beta9',
      ),
      'metatag_panels' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/metatag/metatag_panels/metatag_panels.module',
        'basename' => 'metatag_panels.module',
        'name' => 'metatag_panels',
        'info' => 
        array (
          'name' => 'Metatag: Panels',
          'description' => 'Provides Metatag integration within the Panels interface.',
          'package' => 'SEO',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'metatag',
            2 => 'panels',
            3 => 'token',
          ),
          'version' => '7.x-1.0-beta9',
          'project' => 'metatag',
          'datestamp' => '1390103307',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'metatag',
        'version' => '7.x-1.0-beta9',
      ),
      'metatag_twitter_cards' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/metatag/metatag_twitter_cards/metatag_twitter_cards.module',
        'basename' => 'metatag_twitter_cards.module',
        'name' => 'metatag_twitter_cards',
        'info' => 
        array (
          'name' => 'Metatag: Twitter Cards',
          'description' => 'Provides support for Twitter\'s Card meta tags.',
          'package' => 'SEO',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'metatag',
          ),
          'version' => '7.x-1.0-beta9',
          'project' => 'metatag',
          'datestamp' => '1390103307',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'metatag',
        'version' => '7.x-1.0-beta9',
      ),
      'metatag_opengraph' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/metatag/metatag_opengraph/metatag_opengraph.module',
        'basename' => 'metatag_opengraph.module',
        'name' => 'metatag_opengraph',
        'info' => 
        array (
          'name' => 'Metatag: Open Graph',
          'description' => 'Provides support for open graph meta tags.',
          'package' => 'SEO',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'metatag',
          ),
          'version' => '7.x-1.0-beta9',
          'project' => 'metatag',
          'datestamp' => '1390103307',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'metatag',
        'version' => '7.x-1.0-beta9',
      ),
      'metatag_views' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/metatag/metatag_views/metatag_views.module',
        'basename' => 'metatag_views.module',
        'name' => 'metatag_views',
        'info' => 
        array (
          'name' => 'Metatag: Views',
          'description' => 'Provides Metatag integration within the Views interface.',
          'package' => 'SEO',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'metatag',
            1 => 'views',
          ),
          'files' => 
          array (
            0 => 'metatag_views_plugin_display_extender_metatags.inc',
          ),
          'version' => '7.x-1.0-beta9',
          'project' => 'metatag',
          'datestamp' => '1390103307',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'metatag',
        'version' => '7.x-1.0-beta9',
      ),
      'metatag_dc' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/metatag/metatag_dc/metatag_dc.module',
        'basename' => 'metatag_dc.module',
        'name' => 'metatag_dc',
        'info' => 
        array (
          'name' => 'Metatag: Dublin Core',
          'description' => 'Provides the fifteen <a href="http://dublincore.org/documents/dces/">Dublin Core Metadata Element Set 1.1</a> meta tags from the <a href="http://dublincore.org/">Dublin Core Metadata Institute</a>.',
          'package' => 'SEO',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'metatag',
          ),
          'version' => '7.x-1.0-beta9',
          'project' => 'metatag',
          'datestamp' => '1390103307',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'metatag',
        'version' => '7.x-1.0-beta9',
      ),
      'metatag_context' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/metatag/metatag_context/metatag_context.module',
        'basename' => 'metatag_context.module',
        'name' => 'metatag_context',
        'info' => 
        array (
          'name' => 'Metatag: Context',
          'description' => 'Assigned Metatag using Context definitions, allowing them to be assigned by path and other criteria.',
          'package' => 'SEO',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'context',
            1 => 'metatag',
          ),
          'files' => 
          array (
            0 => 'metatag_context.test',
          ),
          'version' => '7.x-1.0-beta9',
          'project' => 'metatag',
          'datestamp' => '1390103307',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'metatag',
        'version' => '7.x-1.0-beta9',
      ),
      'metatag' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/metatag/metatag.module',
        'basename' => 'metatag.module',
        'name' => 'metatag',
        'info' => 
        array (
          'name' => 'Metatag',
          'description' => 'Adds support and an API to implement meta tags.',
          'package' => 'SEO',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'system (>=7.15)',
            1 => 'ctools',
            2 => 'token',
          ),
          'configure' => 'admin/config/search/metatags',
          'files' => 
          array (
            0 => 'metatag.inc',
            1 => 'metatag.migrate.inc',
            2 => 'metatag.test',
          ),
          'version' => '7.x-1.0-beta9',
          'project' => 'metatag',
          'datestamp' => '1390103307',
          'php' => '5.2.4',
        ),
        'schema_version' => '7022',
        'project' => 'metatag',
        'version' => '7.x-1.0-beta9',
      ),
      'content_access_rules' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/content_access/content_access_rules/content_access_rules.module',
        'basename' => 'content_access_rules.module',
        'name' => 'content_access_rules',
        'info' => 
        array (
          'name' => 'Content Access Rules Integrations',
          'description' => 'Integrates Rules with Content access. Allows to act on access events, conditions, and actions.',
          'package' => 'Access control',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'content_access',
            1 => 'rules',
          ),
          'files' => 
          array (
            0 => 'content_access.rules.inc',
          ),
          'version' => '7.x-1.2-beta2',
          'project' => 'content_access',
          'datestamp' => '1366014321',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'content_access',
        'version' => '7.x-1.2-beta2',
      ),
      'content_access' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/content_access/content_access.module',
        'basename' => 'content_access.module',
        'name' => 'content_access',
        'info' => 
        array (
          'name' => 'Content Access',
          'description' => 'Provides flexible content access control.',
          'core' => '7.x',
          'package' => 'Access control',
          'files' => 
          array (
            0 => 'content_access.rules.inc',
            1 => 'tests/content_access.test',
            2 => 'tests/content_access_acl.test',
          ),
          'version' => '7.x-1.2-beta2',
          'project' => 'content_access',
          'datestamp' => '1366014321',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7101',
        'project' => 'content_access',
        'version' => '7.x-1.2-beta2',
      ),
      'media_vimeo' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/media_vimeo/media_vimeo.module',
        'basename' => 'media_vimeo.module',
        'name' => 'media_vimeo',
        'info' => 
        array (
          'name' => 'Media: Vimeo',
          'description' => 'Provides Vimeo support to the Media module.',
          'package' => 'Media',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'media_vimeo.module',
            1 => 'includes/MediaInternetVimeoHandler.inc',
            2 => 'includes/MediaVimeoStreamWrapper.inc',
            3 => 'includes/MediaVimeoStyles.inc',
            4 => 'includes/media_vimeo.formatters.inc',
            5 => 'includes/media_vimeo.styles.inc',
            6 => 'includes/media_vimeo.variables.inc',
          ),
          'dependencies' => 
          array (
            0 => 'media_internet',
          ),
          'version' => '7.x-1.0-beta5',
          'project' => 'media_vimeo',
          'datestamp' => '1332792648',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'media_vimeo',
        'version' => '7.x-1.0-beta5',
      ),
      'menu_block_export' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/menu_block/menu_block_export.module',
        'basename' => 'menu_block_export.module',
        'name' => 'menu_block_export',
        'info' => 
        array (
          'name' => 'Menu Block Export',
          'description' => 'Provides export interface for Menu block module.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'menu_block',
          ),
          'files' => 
          array (
            0 => 'menu_block_export.module',
            1 => 'menu_block_export.admin.inc',
          ),
          'configure' => 'admin/config/user-interface/menu-block/export',
          'version' => '7.x-2.3',
          'project' => 'menu_block',
          'datestamp' => '1328286646',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'menu_block',
        'version' => '7.x-2.3',
      ),
      'menu_block' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/menu_block/menu_block.module',
        'basename' => 'menu_block.module',
        'name' => 'menu_block',
        'info' => 
        array (
          'name' => 'Menu Block',
          'description' => 'Provides configurable blocks of menu items.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'menu (>7.11)',
          ),
          'files' => 
          array (
            0 => 'menu_block.module',
            1 => 'menu_block.admin.inc',
            2 => 'menu_block.follow.inc',
            3 => 'menu_block.pages.inc',
            4 => 'menu_block.sort.inc',
            5 => 'menu_block.install',
            6 => 'plugins/content_types/menu_tree/menu_tree.inc',
          ),
          'configure' => 'admin/config/user-interface/menu-block',
          'version' => '7.x-2.3',
          'project' => 'menu_block',
          'datestamp' => '1328286646',
          'php' => '5.2.4',
        ),
        'schema_version' => '7202',
        'project' => 'menu_block',
        'version' => '7.x-2.3',
      ),
      'link' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/link/link.module',
        'basename' => 'link.module',
        'name' => 'link',
        'info' => 
        array (
          'name' => 'Link',
          'description' => 'Defines simple link field types.',
          'core' => '7.x',
          'package' => 'Fields',
          'files' => 
          array (
            0 => 'link.module',
            1 => 'link.migrate.inc',
            2 => 'tests/link.test',
            3 => 'tests/link.attribute.test',
            4 => 'tests/link.crud.test',
            5 => 'tests/link.crud_browser.test',
            6 => 'tests/link.token.test',
            7 => 'tests/link.validate.test',
            8 => 'views/link_views_handler_argument_target.inc',
            9 => 'views/link_views_handler_filter_protocol.inc',
          ),
          'version' => '7.x-1.2',
          'project' => 'link',
          'datestamp' => '1385335705',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'link',
        'version' => '7.x-1.2',
      ),
      'l10n_update' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/l10n_update/l10n_update.module',
        'basename' => 'l10n_update.module',
        'name' => 'l10n_update',
        'info' => 
        array (
          'name' => 'Localization update',
          'description' => 'Provides automatic downloads and updates for translations.',
          'dependencies' => 
          array (
            0 => 'locale',
          ),
          'core' => '7.x',
          'package' => 'Multilingual',
          'files' => 
          array (
            0 => 'l10n_update.parser.inc',
          ),
          'version' => '7.x-1.0-rc1',
          'project' => 'l10n_update',
          'datestamp' => '1393346015',
          'php' => '5.2.4',
        ),
        'schema_version' => '7004',
        'project' => 'l10n_update',
        'version' => '7.x-1.0-rc1',
      ),
      'views_slideshow_cycle' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/views_slideshow/contrib/views_slideshow_cycle/views_slideshow_cycle.module',
        'basename' => 'views_slideshow_cycle.module',
        'name' => 'views_slideshow_cycle',
        'info' => 
        array (
          'name' => 'Views Slideshow: Cycle',
          'description' => 'Adds a Rotating slideshow mode to Views Slideshow.',
          'dependencies' => 
          array (
            0 => 'views_slideshow',
            1 => 'libraries',
          ),
          'package' => 'Views',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'views_slideshow_cycle.module',
            1 => 'views_slideshow_cycle.views_slideshow.inc',
            2 => 'theme/views_slideshow_cycle.theme.inc',
          ),
          'version' => '7.x-3.1',
          'project' => 'views_slideshow',
          'datestamp' => '1382584826',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'views_slideshow',
        'version' => '7.x-3.1',
      ),
      'views_slideshow' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/views_slideshow/views_slideshow.module',
        'basename' => 'views_slideshow.module',
        'name' => 'views_slideshow',
        'info' => 
        array (
          'name' => 'Views Slideshow',
          'description' => 'Provides a View style that displays rows as a jQuery slideshow.  This is an API and requires Views Slideshow Cycle or another module that supports the API.',
          'dependencies' => 
          array (
            0 => 'views (>=3.0)',
          ),
          'package' => 'Views',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'views_slideshow.module',
            1 => 'theme/views_slideshow.theme.inc',
            2 => 'views_slideshow.views.inc',
            3 => 'views_slideshow_plugin_style_slideshow.inc',
          ),
          'version' => '7.x-3.1',
          'project' => 'views_slideshow',
          'datestamp' => '1382584826',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'views_slideshow',
        'version' => '7.x-3.1',
      ),
      'entity' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/entity/entity.module',
        'basename' => 'entity.module',
        'name' => 'entity',
        'info' => 
        array (
          'name' => 'Entity API',
          'description' => 'Enables modules to work with any entity type and to provide entities.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'entity.features.inc',
            1 => 'entity.i18n.inc',
            2 => 'entity.info.inc',
            3 => 'entity.rules.inc',
            4 => 'entity.test',
            5 => 'includes/entity.inc',
            6 => 'includes/entity.controller.inc',
            7 => 'includes/entity.ui.inc',
            8 => 'includes/entity.wrapper.inc',
            9 => 'views/entity.views.inc',
            10 => 'views/handlers/entity_views_field_handler_helper.inc',
            11 => 'views/handlers/entity_views_handler_area_entity.inc',
            12 => 'views/handlers/entity_views_handler_field_boolean.inc',
            13 => 'views/handlers/entity_views_handler_field_date.inc',
            14 => 'views/handlers/entity_views_handler_field_duration.inc',
            15 => 'views/handlers/entity_views_handler_field_entity.inc',
            16 => 'views/handlers/entity_views_handler_field_field.inc',
            17 => 'views/handlers/entity_views_handler_field_numeric.inc',
            18 => 'views/handlers/entity_views_handler_field_options.inc',
            19 => 'views/handlers/entity_views_handler_field_text.inc',
            20 => 'views/handlers/entity_views_handler_field_uri.inc',
            21 => 'views/handlers/entity_views_handler_relationship_by_bundle.inc',
            22 => 'views/handlers/entity_views_handler_relationship.inc',
            23 => 'views/plugins/entity_views_plugin_row_entity_view.inc',
          ),
          'version' => '7.x-1.3',
          'project' => 'entity',
          'datestamp' => '1389210813',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'entity',
        'version' => '7.x-1.3',
      ),
      'entity_token' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/entity/entity_token.module',
        'basename' => 'entity_token.module',
        'name' => 'entity_token',
        'info' => 
        array (
          'name' => 'Entity tokens',
          'description' => 'Provides token replacements for all properties that have no tokens and are known to the entity API.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'entity_token.tokens.inc',
            1 => 'entity_token.module',
          ),
          'dependencies' => 
          array (
            0 => 'entity',
          ),
          'version' => '7.x-1.3',
          'project' => 'entity',
          'datestamp' => '1389210813',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'entity',
        'version' => '7.x-1.3',
      ),
      'media_youtube' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/media_youtube/media_youtube.module',
        'basename' => 'media_youtube.module',
        'name' => 'media_youtube',
        'info' => 
        array (
          'name' => 'Media: YouTube',
          'description' => 'Provides YouTube support for File Entity and the Media module.',
          'package' => 'Media',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'includes/MediaInternetYouTubeHandler.inc',
            1 => 'includes/MediaYouTubeStreamWrapper.inc',
            2 => 'includes/MediaYouTubeBrowser.inc',
          ),
          'dependencies' => 
          array (
            0 => 'media_internet',
          ),
          'version' => '7.x-2.0-rc4',
          'project' => 'media_youtube',
          'datestamp' => '1382761825',
          'php' => '5.2.4',
        ),
        'schema_version' => '7203',
        'project' => 'media_youtube',
        'version' => '7.x-2.0-rc4',
      ),
      'current_search' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/facetapi/contrib/current_search/current_search.module',
        'basename' => 'current_search.module',
        'name' => 'current_search',
        'info' => 
        array (
          'name' => 'Current Search Blocks',
          'description' => 'Provides an interface for creating blocks containing information about the current search.',
          'dependencies' => 
          array (
            0 => 'facetapi',
          ),
          'package' => 'Search Toolkit',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'plugins/current_search/item.inc',
            1 => 'plugins/current_search/item_active.inc',
            2 => 'plugins/current_search/item_group.inc',
            3 => 'plugins/current_search/item_text.inc',
            4 => 'tests/current_search.test',
          ),
          'configure' => 'admin/config/search/current_search',
          'version' => '7.x-1.3',
          'project' => 'facetapi',
          'datestamp' => '1364861711',
          'php' => '5.2.4',
        ),
        'schema_version' => '7101',
        'project' => 'facetapi',
        'version' => '7.x-1.3',
      ),
      'facetapi' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/facetapi/facetapi.module',
        'basename' => 'facetapi.module',
        'name' => 'facetapi',
        'info' => 
        array (
          'name' => 'Facet API',
          'description' => 'An abstracted facet API that can be used by various search backends.',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'package' => 'Search Toolkit',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'plugins/facetapi/adapter.inc',
            1 => 'plugins/facetapi/dependency.inc',
            2 => 'plugins/facetapi/dependency_bundle.inc',
            3 => 'plugins/facetapi/dependency_role.inc',
            4 => 'plugins/facetapi/empty_behavior.inc',
            5 => 'plugins/facetapi/empty_behavior_text.inc',
            6 => 'plugins/facetapi/filter.inc',
            7 => 'plugins/facetapi/query_type.inc',
            8 => 'plugins/facetapi/url_processor.inc',
            9 => 'plugins/facetapi/url_processor_standard.inc',
            10 => 'plugins/facetapi/widget.inc',
            11 => 'plugins/facetapi/widget_links.inc',
            12 => 'tests/facetapi_test.plugins.inc',
            13 => 'tests/facetapi.test',
          ),
          'version' => '7.x-1.3',
          'project' => 'facetapi',
          'datestamp' => '1364861711',
          'php' => '5.2.4',
        ),
        'schema_version' => '7103',
        'project' => 'facetapi',
        'version' => '7.x-1.3',
      ),
      'libraries' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/libraries/libraries.module',
        'basename' => 'libraries.module',
        'name' => 'libraries',
        'info' => 
        array (
          'name' => 'Libraries',
          'description' => 'Allows version-dependent and shared usage of external libraries.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'system (>=7.11)',
          ),
          'files' => 
          array (
            0 => 'tests/libraries.test',
          ),
          'version' => '7.x-2.2',
          'project' => 'libraries',
          'datestamp' => '1391965716',
          'php' => '5.2.4',
        ),
        'schema_version' => '7200',
        'project' => 'libraries',
        'version' => '7.x-2.2',
      ),
      'field_group_test' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/field_group/tests/field_group_test.module',
        'basename' => 'field_group_test.module',
        'name' => 'field_group_test',
        'info' => 
        array (
          'name' => 'Fieldgroup Test',
          'description' => 'Test module for fieldgroup',
          'core' => '7.x',
          'package' => 'Fieldgroup',
          'version' => '7.x-1.3',
          'project' => 'field_group',
          'datestamp' => '1380124361',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'field_group',
        'version' => '7.x-1.3',
      ),
      'field_group' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/field_group/field_group.module',
        'basename' => 'field_group.module',
        'name' => 'field_group',
        'info' => 
        array (
          'name' => 'Fieldgroup',
          'description' => 'Fieldgroup',
          'package' => 'Fields',
          'dependencies' => 
          array (
            0 => 'field',
            1 => 'ctools',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'field_group.install',
            1 => 'field_group.module',
            2 => 'field_group.field_ui.inc',
            3 => 'field_group.form.inc',
            4 => 'field_group.features.inc',
            5 => 'tests/field_group.ui.test',
            6 => 'tests/field_group.display.test',
          ),
          'version' => '7.x-1.3',
          'project' => 'field_group',
          'datestamp' => '1380124361',
          'php' => '5.2.4',
        ),
        'schema_version' => '7006',
        'project' => 'field_group',
        'version' => '7.x-1.3',
      ),
      'feeds_ui' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/feeds/feeds_ui/feeds_ui.module',
        'basename' => 'feeds_ui.module',
        'name' => 'feeds_ui',
        'info' => 
        array (
          'name' => 'Feeds Admin UI',
          'description' => 'Administrative UI for Feeds module.',
          'package' => 'Feeds',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'feeds',
          ),
          'configure' => 'admin/structure/feeds',
          'files' => 
          array (
            0 => 'feeds_ui.test',
          ),
          'version' => '7.x-2.0-alpha8',
          'project' => 'feeds',
          'datestamp' => '1366671911',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'feeds',
        'version' => '7.x-2.0-alpha8',
      ),
      'feeds_import' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/feeds/feeds_import/feeds_import.module',
        'basename' => 'feeds_import.module',
        'name' => 'feeds_import',
        'info' => 
        array (
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'feeds',
          ),
          'description' => 'An example of a node importer and a user importer.',
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'feeds:feeds_importer_default:1',
            ),
            'feeds_importer' => 
            array (
              0 => 'node',
              1 => 'user',
            ),
          ),
          'files' => 
          array (
            0 => 'feeds_import.test',
          ),
          'name' => 'Feeds Import',
          'package' => 'Feeds',
          'php' => '5.2.4',
          'version' => '7.x-2.0-alpha8',
          'project' => 'feeds',
          'datestamp' => '1366671911',
        ),
        'schema_version' => 0,
        'project' => 'feeds',
        'version' => '7.x-2.0-alpha8',
      ),
      'feeds_news' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/feeds/feeds_news/feeds_news.module',
        'basename' => 'feeds_news.module',
        'name' => 'feeds_news',
        'info' => 
        array (
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'features',
            1 => 'feeds',
            2 => 'views',
          ),
          'description' => 'A news aggregator built with feeds, creates nodes from imported feed items. With OPML import.',
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'feeds:feeds_importer_default:1',
              1 => 'views:views_default:3.0',
            ),
            'feeds_importer' => 
            array (
              0 => 'feed',
              1 => 'opml',
            ),
            'field' => 
            array (
              0 => 'node-feed_item-field_feed_item_description',
            ),
            'node' => 
            array (
              0 => 'feed',
              1 => 'feed_item',
            ),
            'views_view' => 
            array (
              0 => 'feeds_defaults_feed_items',
            ),
          ),
          'files' => 
          array (
            0 => 'feeds_news.module',
            1 => 'feeds_news.test',
          ),
          'name' => 'Feeds News',
          'package' => 'Feeds',
          'php' => '5.2.4',
          'version' => '7.x-2.0-alpha8',
          'project' => 'feeds',
          'datestamp' => '1366671911',
        ),
        'schema_version' => 0,
        'project' => 'feeds',
        'version' => '7.x-2.0-alpha8',
      ),
      'feeds' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/feeds/feeds.module',
        'basename' => 'feeds.module',
        'name' => 'feeds',
        'info' => 
        array (
          'name' => 'Feeds',
          'description' => 'Aggregates RSS/Atom/RDF feeds, imports CSV files and more.',
          'package' => 'Feeds',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'job_scheduler',
          ),
          'files' => 
          array (
            0 => 'includes/FeedsConfigurable.inc',
            1 => 'includes/FeedsImporter.inc',
            2 => 'includes/FeedsSource.inc',
            3 => 'libraries/ParserCSV.inc',
            4 => 'libraries/http_request.inc',
            5 => 'libraries/PuSHSubscriber.inc',
            6 => 'plugins/FeedsCSVParser.inc',
            7 => 'plugins/FeedsFetcher.inc',
            8 => 'plugins/FeedsFileFetcher.inc',
            9 => 'plugins/FeedsHTTPFetcher.inc',
            10 => 'plugins/FeedsNodeProcessor.inc',
            11 => 'plugins/FeedsOPMLParser.inc',
            12 => 'plugins/FeedsParser.inc',
            13 => 'plugins/FeedsPlugin.inc',
            14 => 'plugins/FeedsProcessor.inc',
            15 => 'plugins/FeedsSimplePieParser.inc',
            16 => 'plugins/FeedsSitemapParser.inc',
            17 => 'plugins/FeedsSyndicationParser.inc',
            18 => 'plugins/FeedsTermProcessor.inc',
            19 => 'plugins/FeedsUserProcessor.inc',
            20 => 'tests/feeds.test',
            21 => 'tests/feeds_date_time.test',
            22 => 'tests/feeds_mapper_date.test',
            23 => 'tests/feeds_mapper_date_multiple.test',
            24 => 'tests/feeds_mapper_field.test',
            25 => 'tests/feeds_mapper_file.test',
            26 => 'tests/feeds_mapper_path.test',
            27 => 'tests/feeds_mapper_profile.test',
            28 => 'tests/feeds_mapper.test',
            29 => 'tests/feeds_mapper_config.test',
            30 => 'tests/feeds_fetcher_file.test',
            31 => 'tests/feeds_processor_node.test',
            32 => 'tests/feeds_processor_term.test',
            33 => 'tests/feeds_processor_user.test',
            34 => 'tests/feeds_scheduler.test',
            35 => 'tests/feeds_mapper_link.test',
            36 => 'tests/feeds_mapper_taxonomy.test',
            37 => 'tests/parser_csv.test',
            38 => 'views/feeds_views_handler_argument_importer_id.inc',
            39 => 'views/feeds_views_handler_field_importer_name.inc',
            40 => 'views/feeds_views_handler_field_log_message.inc',
            41 => 'views/feeds_views_handler_field_severity.inc',
            42 => 'views/feeds_views_handler_field_source.inc',
            43 => 'views/feeds_views_handler_filter_severity.inc',
          ),
          'version' => '7.x-2.0-alpha8',
          'project' => 'feeds',
          'datestamp' => '1366671911',
          'php' => '5.2.4',
        ),
        'schema_version' => '7208',
        'project' => 'feeds',
        'version' => '7.x-2.0-alpha8',
      ),
      'flexslider_views' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/flexslider/flexslider_views/flexslider_views.module',
        'basename' => 'flexslider_views.module',
        'name' => 'flexslider_views',
        'info' => 
        array (
          'name' => 'Flex Slider Views Style',
          'description' => 'Adds a Views style plugin for FlexSlider',
          'core' => '7.x',
          'package' => 'Flex Slider',
          'dependencies' => 
          array (
            0 => 'views',
            1 => 'flexslider',
          ),
          'files' => 
          array (
            0 => 'flexslider_views.module',
            1 => 'flexslider_views.views.inc',
            2 => 'flexslider_views_plugin_style_flexslider.inc',
          ),
          'version' => '7.x-1.0-rc3',
          'project' => 'flexslider',
          'datestamp' => '1337289957',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'flexslider',
        'version' => '7.x-1.0-rc3',
      ),
      'flexslider_views_slideshow' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/flexslider/flexslider_views_slideshow/flexslider_views_slideshow.module',
        'basename' => 'flexslider_views_slideshow.module',
        'name' => 'flexslider_views_slideshow',
        'info' => 
        array (
          'name' => 'Flex Slider Views Slideshow',
          'description' => 'Integrate the FlexSlider library with Views Slideshow',
          'core' => '7.x',
          'package' => 'Flex Slider',
          'dependencies' => 
          array (
            0 => 'flexslider',
            1 => 'views_slideshow',
          ),
          'files' => 
          array (
            0 => 'flexslider_views_slideshow.module',
            1 => 'flexslider_views_slideshow.views_slideshow.inc',
            2 => 'theme/flexslider_views_slideshow.theme.inc',
          ),
          'version' => '7.x-1.0-rc3',
          'project' => 'flexslider',
          'datestamp' => '1337289957',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'flexslider',
        'version' => '7.x-1.0-rc3',
      ),
      'flexslider_fields' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/flexslider/flexslider_fields/flexslider_fields.module',
        'basename' => 'flexslider_fields.module',
        'name' => 'flexslider_fields',
        'info' => 
        array (
          'name' => 'Flex Slider Fields',
          'description' => 'Adds a display mode in Fields for FlexSlider',
          'core' => '7.x',
          'package' => 'Flex Slider',
          'dependencies' => 
          array (
            0 => 'flexslider',
          ),
          'version' => '7.x-1.0-rc3',
          'project' => 'flexslider',
          'datestamp' => '1337289957',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'flexslider',
        'version' => '7.x-1.0-rc3',
      ),
      'flexslider' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/flexslider/flexslider.module',
        'basename' => 'flexslider.module',
        'name' => 'flexslider',
        'info' => 
        array (
          'name' => 'Flex Slider',
          'description' => 'Integrate the Flex Slider library with Drupal',
          'core' => '7.x',
          'package' => 'Flex Slider',
          'dependencies' => 
          array (
            0 => 'libraries',
            1 => 'ctools',
            2 => 'image',
          ),
          'files' => 
          array (
            0 => 'flexslider.module',
            1 => 'theme/flexslider.theme.inc',
            2 => 'flexslider.test',
          ),
          'stylesheets' => 
          array (
            'screen' => 
            array (
              0 => 'assets/css/flexslider_img.css',
            ),
          ),
          'configure' => 'admin/config/media/flexslider',
          'version' => '7.x-1.0-rc3',
          'project' => 'flexslider',
          'datestamp' => '1337289957',
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'flexslider',
        'version' => '7.x-1.0-rc3',
      ),
      'ctools_access_ruleset' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/ctools/ctools_access_ruleset/ctools_access_ruleset.module',
        'basename' => 'ctools_access_ruleset.module',
        'name' => 'ctools_access_ruleset',
        'info' => 
        array (
          'name' => 'Custom rulesets',
          'description' => 'Create custom, exportable, reusable access rulesets for applications like Panels.',
          'core' => '7.x',
          'package' => 'Chaos tool suite',
          'version' => '7.x-1.9',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'project' => 'ctools',
          'datestamp' => '1440020680',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.9',
      ),
      'term_depth' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/ctools/term_depth/term_depth.module',
        'basename' => 'term_depth.module',
        'name' => 'term_depth',
        'info' => 
        array (
          'name' => 'Term Depth access',
          'description' => 'Controls access to context based upon term depth',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'package' => 'Chaos tool suite',
          'version' => '7.x-1.9',
          'project' => 'ctools',
          'datestamp' => '1440020680',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.9',
      ),
      'views_content' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/ctools/views_content/views_content.module',
        'basename' => 'views_content.module',
        'name' => 'views_content',
        'info' => 
        array (
          'name' => 'Views content panes',
          'description' => 'Allows Views content to be used in Panels, Dashboard and other modules which use the CTools Content API.',
          'package' => 'Chaos tool suite',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'views',
          ),
          'core' => '7.x',
          'version' => '7.x-1.9',
          'files' => 
          array (
            0 => 'plugins/views/views_content_plugin_display_ctools_context.inc',
            1 => 'plugins/views/views_content_plugin_display_panel_pane.inc',
            2 => 'plugins/views/views_content_plugin_style_ctools_context.inc',
          ),
          'project' => 'ctools',
          'datestamp' => '1440020680',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.9',
      ),
      'bulk_export' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/ctools/bulk_export/bulk_export.module',
        'basename' => 'bulk_export.module',
        'name' => 'bulk_export',
        'info' => 
        array (
          'name' => 'Bulk Export',
          'description' => 'Performs bulk exporting of data objects known about by Chaos tools.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'package' => 'Chaos tool suite',
          'version' => '7.x-1.9',
          'project' => 'ctools',
          'datestamp' => '1440020680',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.9',
      ),
      'stylizer' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/ctools/stylizer/stylizer.module',
        'basename' => 'stylizer.module',
        'name' => 'stylizer',
        'info' => 
        array (
          'name' => 'Stylizer',
          'description' => 'Create custom styles for applications such as Panels.',
          'core' => '7.x',
          'package' => 'Chaos tool suite',
          'version' => '7.x-1.9',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'color',
          ),
          'project' => 'ctools',
          'datestamp' => '1440020680',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.9',
      ),
      'ctools_custom_content' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/ctools/ctools_custom_content/ctools_custom_content.module',
        'basename' => 'ctools_custom_content.module',
        'name' => 'ctools_custom_content',
        'info' => 
        array (
          'name' => 'Custom content panes',
          'description' => 'Create custom, exportable, reusable content panes for applications like Panels.',
          'core' => '7.x',
          'package' => 'Chaos tool suite',
          'version' => '7.x-1.9',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'project' => 'ctools',
          'datestamp' => '1440020680',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.9',
      ),
      'ctools_ajax_sample' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/ctools/ctools_ajax_sample/ctools_ajax_sample.module',
        'basename' => 'ctools_ajax_sample.module',
        'name' => 'ctools_ajax_sample',
        'info' => 
        array (
          'name' => 'Chaos Tools (CTools) AJAX Example',
          'description' => 'Shows how to use the power of Chaos AJAX.',
          'package' => 'Chaos tool suite',
          'version' => '7.x-1.9',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'core' => '7.x',
          'project' => 'ctools',
          'datestamp' => '1440020680',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.9',
      ),
      'ctools_plugin_example' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/ctools/ctools_plugin_example/ctools_plugin_example.module',
        'basename' => 'ctools_plugin_example.module',
        'name' => 'ctools_plugin_example',
        'info' => 
        array (
          'name' => 'Chaos Tools (CTools) Plugin Example',
          'description' => 'Shows how an external module can provide ctools plugins (for Panels, etc.).',
          'package' => 'Chaos tool suite',
          'version' => '7.x-1.9',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'panels',
            2 => 'page_manager',
            3 => 'advanced_help',
          ),
          'core' => '7.x',
          'project' => 'ctools',
          'datestamp' => '1440020680',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.9',
      ),
      'page_manager' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/ctools/page_manager/page_manager.module',
        'basename' => 'page_manager.module',
        'name' => 'page_manager',
        'info' => 
        array (
          'name' => 'Page manager',
          'description' => 'Provides a UI and API to manage pages within the site.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'package' => 'Chaos tool suite',
          'version' => '7.x-1.9',
          'project' => 'ctools',
          'datestamp' => '1440020680',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.9',
      ),
      'ctools' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/modules/contrib/ctools/ctools.module',
        'basename' => 'ctools.module',
        'name' => 'ctools',
        'info' => 
        array (
          'name' => 'Chaos tools',
          'description' => 'A library of helpful tools by Merlin of Chaos.',
          'core' => '7.x',
          'package' => 'Chaos tool suite',
          'version' => '7.x-1.9',
          'files' => 
          array (
            0 => 'includes/context.inc',
            1 => 'includes/css-cache.inc',
            2 => 'includes/math-expr.inc',
            3 => 'includes/stylizer.inc',
            4 => 'tests/css_cache.test',
          ),
          'project' => 'ctools',
          'datestamp' => '1440020680',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'ctools',
        'version' => '7.x-1.9',
      ),
    ),
    'themes' => 
    array (
      'starterkit_alpha_xhtml' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/themes/omega/starterkits/alpha-xhtml/starterkit_alpha_xhtml.info',
        'basename' => 'starterkit_alpha_xhtml.info',
        'name' => 'Alpha XHTML Starterkit',
        'info' => 
        array (
          'name' => 'Alpha XHTML Starterkit',
          'description' => 'Default starterkit for <a href="http://drupal.org/project/omega">Alpha</a>. You should not directly edit this starterkit, but make your own copy. Information on this can be found in the <a href="http://himer.us/omega-docs">Omega Documentation</a>',
          'core' => '7.x',
          'engine' => 'phptemplate',
          'screenshot' => 'screenshot.png',
          'base theme' => 'alpha',
          'hidden' => true,
          'starterkit' => true,
          'regions' => 
          array (
            'page_top' => 'Page Top',
            'page_bottom' => 'Page Bottom',
            'content' => 'Content',
            'header' => 'Header',
            'footer' => 'Footer',
            'sidebar_first' => 'Sidebar First',
            'sidebar_second' => 'Sidebar Second',
          ),
          'zones' => 
          array (
            'content' => 'Content',
            'header' => 'Header',
            'footer' => 'Footer',
          ),
          'css' => 
          array (
            'global.css' => 
            array (
              'name' => 'Your custom global styles',
              'description' => 'This file holds all the globally active custom CSS of your theme.',
              'options' => 
              array (
                'weight' => '10',
              ),
            ),
          ),
          'settings' => 
          array (
            'alpha_grid' => 'alpha_default',
            'alpha_primary_alpha_default' => 'normal',
            'alpha_responsive' => '1',
            'alpha_layouts_alpha_fluid_primary' => 'normal',
            'alpha_layouts_alpha_fluid_normal_responsive' => '0',
            'alpha_layouts_alpha_fluid_normal_media' => 'all and (min-width: 740px) and (min-device-width: 740px), (max-device-width: 800px) and (min-width: 740px) and (orientation:landscape)',
            'alpha_layouts_alpha_default_primary' => 'normal',
            'alpha_layouts_alpha_default_fluid_responsive' => '0',
            'alpha_layouts_alpha_default_fluid_media' => 'all and (min-width: 740px) and (min-device-width: 740px), (max-device-width: 800px) and (min-width: 740px) and (orientation:landscape)',
            'alpha_layouts_alpha_default_fluid_weight' => '0',
            'alpha_layouts_alpha_default_narrow_responsive' => '1',
            'alpha_layouts_alpha_default_narrow_media' => 'all and (min-width: 740px) and (min-device-width: 740px), (max-device-width: 800px) and (min-width: 740px) and (orientation:landscape)',
            'alpha_layouts_alpha_default_narrow_weight' => '1',
            'alpha_layouts_alpha_default_normal_responsive' => '1',
            'alpha_layouts_alpha_default_normal_media' => 'all and (min-width: 980px) and (min-device-width: 980px), all and (max-device-width: 1024px) and (min-width: 1024px) and (orientation:landscape)',
            'alpha_layouts_alpha_default_normal_weight' => '2',
            'alpha_layouts_alpha_default_wide_responsive' => '1',
            'alpha_layouts_alpha_default_wide_media' => 'all and (min-width: 1220px)',
            'alpha_layouts_alpha_default_wide_weight' => '3',
            'alpha_viewport' => '1',
            'alpha_viewport_initial_scale' => '1',
            'alpha_viewport_min_scale' => '1',
            'alpha_viewport_max_scale' => '1',
            'alpha_viewport_user_scaleable' => '',
            'alpha_css' => 
            array (
              'alpha-reset.css' => 'alpha-reset.css',
              'alpha-alpha.css' => 'alpha-alpha.css',
              'alpha-mobile.css' => 'alpha-mobile.css',
              'global.css' => 'global.css',
            ),
            'alpha_debug_block_toggle' => '1',
            'alpha_debug_block_active' => '1',
            'alpha_debug_grid_toggle' => '1',
            'alpha_debug_grid_active' => '1',
            'alpha_debug_grid_roles' => 
            array (
              1 => '1',
              2 => '2',
              3 => '3',
            ),
            'alpha_toggle_messages' => '1',
            'alpha_toggle_action_links' => '1',
            'alpha_toggle_tabs' => '1',
            'alpha_toggle_breadcrumb' => '1',
            'alpha_toggle_page_title' => '1',
            'alpha_toggle_feed_icons' => '1',
            'alpha_hidden_title' => '',
            'alpha_hidden_site_name' => '',
            'alpha_hidden_site_slogan' => '',
            'alpha_zone_header_wrapper' => '',
            'alpha_zone_header_force' => '',
            'alpha_zone_header_section' => 'header',
            'alpha_zone_header_weight' => '',
            'alpha_zone_header_columns' => '12',
            'alpha_zone_header_primary' => '',
            'alpha_zone_header_order' => '0',
            'alpha_zone_header_css' => '',
            'alpha_zone_header_wrapper_css' => '',
            'alpha_zone_content_wrapper' => '',
            'alpha_zone_content_force' => '',
            'alpha_zone_content_section' => 'content',
            'alpha_zone_content_weight' => '',
            'alpha_zone_content_columns' => '12',
            'alpha_zone_content_primary' => '',
            'alpha_zone_content_order' => '0',
            'alpha_zone_content_css' => '',
            'alpha_zone_content_wrapper_css' => '',
            'alpha_zone_footer_wrapper' => '',
            'alpha_zone_footer_force' => '',
            'alpha_zone_footer_section' => 'footer',
            'alpha_zone_footer_weight' => '',
            'alpha_zone_footer_columns' => '12',
            'alpha_zone_footer_primary' => '',
            'alpha_zone_footer_order' => '0',
            'alpha_zone_footer_css' => '',
            'alpha_zone_footer_wrapper_css' => '',
            'alpha_region_dashboard_inactive_force' => '',
            'alpha_region_dashboard_inactive_zone' => '',
            'alpha_region_dashboard_inactive_prefix' => '',
            'alpha_region_dashboard_inactive_columns' => '',
            'alpha_region_dashboard_inactive_suffix' => '',
            'alpha_region_dashboard_inactive_weight' => '',
            'alpha_region_dashboard_inactive_position' => '',
            'alpha_region_dashboard_inactive_css' => '',
            'alpha_region_dashboard_sidebar_force' => '',
            'alpha_region_dashboard_sidebar_zone' => '',
            'alpha_region_dashboard_sidebar_prefix' => '',
            'alpha_region_dashboard_sidebar_columns' => '',
            'alpha_region_dashboard_sidebar_suffix' => '',
            'alpha_region_dashboard_sidebar_weight' => '',
            'alpha_region_dashboard_sidebar_position' => '',
            'alpha_region_dashboard_sidebar_css' => '',
            'alpha_region_dashboard_main_force' => '',
            'alpha_region_dashboard_main_zone' => '',
            'alpha_region_dashboard_main_prefix' => '',
            'alpha_region_dashboard_main_columns' => '',
            'alpha_region_dashboard_main_suffix' => '',
            'alpha_region_dashboard_main_weight' => '',
            'alpha_region_dashboard_main_position' => '',
            'alpha_region_dashboard_main_css' => '',
            'alpha_region_header_force' => '',
            'alpha_region_header_zone' => 'header',
            'alpha_region_header_prefix' => '',
            'alpha_region_header_columns' => '12',
            'alpha_region_header_suffix' => '',
            'alpha_region_header_weight' => '',
            'alpha_region_header_position' => '1',
            'alpha_region_header_css' => '',
            'alpha_region_content_force' => '',
            'alpha_region_content_zone' => 'content',
            'alpha_region_content_prefix' => '',
            'alpha_region_content_columns' => '6',
            'alpha_region_content_suffix' => '',
            'alpha_region_content_weight' => '1',
            'alpha_region_content_position' => '2',
            'alpha_region_content_css' => '',
            'alpha_region_sidebar_first_force' => '',
            'alpha_region_sidebar_first_zone' => 'content',
            'alpha_region_sidebar_first_prefix' => '',
            'alpha_region_sidebar_first_columns' => '3',
            'alpha_region_sidebar_first_suffix' => '',
            'alpha_region_sidebar_first_weight' => '2',
            'alpha_region_sidebar_first_position' => '1',
            'alpha_region_sidebar_first_css' => '',
            'alpha_region_sidebar_second_force' => '',
            'alpha_region_sidebar_second_zone' => 'content',
            'alpha_region_sidebar_second_prefix' => '',
            'alpha_region_sidebar_second_columns' => '3',
            'alpha_region_sidebar_second_suffix' => '',
            'alpha_region_sidebar_second_weight' => '3',
            'alpha_region_sidebar_second_position' => '3',
            'alpha_region_sidebar_second_css' => '',
            'alpha_region_footer_force' => '',
            'alpha_region_footer_zone' => 'footer',
            'alpha_region_footer_prefix' => '',
            'alpha_region_footer_columns' => '12',
            'alpha_region_footer_suffix' => '',
            'alpha_region_footer_weight' => '1',
            'alpha_region_footer_css' => '',
          ),
          'version' => '7.x-3.1',
          'project' => 'omega',
          'datestamp' => '1329681647',
        ),
        'project' => 'omega',
        'version' => '7.x-3.1',
      ),
      'starterkit_omega_html5' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/themes/omega/starterkits/omega-html5/starterkit_omega_html5.info',
        'basename' => 'starterkit_omega_html5.info',
        'name' => 'Omega HTML5 Starterkit',
        'info' => 
        array (
          'name' => 'Omega HTML5 Starterkit',
          'description' => 'Default starterkit for <a href="http://drupal.org/project/omega">Omega</a>. You should not directly edit this starterkit, but make your own copy. Information on this can be found in the <a href="http://himer.us/omega-docs">Omega Documentation</a>',
          'core' => '7.x',
          'engine' => 'phptemplate',
          'screenshot' => 'screenshot.png',
          'base theme' => 'omega',
          'hidden' => true,
          'starterkit' => true,
          'regions' => 
          array (
            'page_top' => 'Page Top',
            'page_bottom' => 'Page Bottom',
            'content' => 'Content',
            'user_first' => 'User Bar First',
            'user_second' => 'User Bar Second',
            'branding' => 'Branding',
            'menu' => 'Menu',
            'sidebar_first' => 'Sidebar First',
            'sidebar_second' => 'Sidebar Second',
            'header_first' => 'Header First',
            'header_second' => 'Header Second',
            'preface_first' => 'Preface First',
            'preface_second' => 'Preface Second',
            'preface_third' => 'Preface Third',
            'postscript_first' => 'Postscript First',
            'postscript_second' => 'Postscript Second',
            'postscript_third' => 'Postscript Third',
            'postscript_fourth' => 'Postscript Fourth',
            'footer_first' => 'Footer First',
            'footer_second' => 'Footer Second',
          ),
          'zones' => 
          array (
            'user' => 'User',
            'branding' => 'Branding',
            'menu' => 'Menu',
            'header' => 'Header',
            'preface' => 'Preface',
            'content' => 'Content',
            'postscript' => 'Postscript',
            'footer' => 'Footer',
          ),
          'css' => 
          array (
            'global.css' => 
            array (
              'name' => 'Your custom global styles',
              'description' => 'This file holds all the globally active custom CSS of your theme.',
              'options' => 
              array (
                'weight' => '10',
              ),
            ),
          ),
          'settings' => 
          array (
            'alpha_grid' => 'alpha_default',
            'alpha_primary_alpha_default' => 'normal',
            'alpha_responsive' => '1',
            'alpha_layouts_alpha_fluid_primary' => 'normal',
            'alpha_layouts_alpha_fluid_normal_responsive' => '0',
            'alpha_layouts_alpha_fluid_normal_media' => 'all and (min-width: 740px) and (min-device-width: 740px), (max-device-width: 800px) and (min-width: 740px) and (orientation:landscape)',
            'alpha_layouts_alpha_default_primary' => 'normal',
            'alpha_layouts_alpha_default_fluid_responsive' => '0',
            'alpha_layouts_alpha_default_fluid_media' => 'all and (min-width: 740px) and (min-device-width: 740px), (max-device-width: 800px) and (min-width: 740px) and (orientation:landscape)',
            'alpha_layouts_alpha_default_fluid_weight' => '0',
            'alpha_layouts_alpha_default_narrow_responsive' => '1',
            'alpha_layouts_alpha_default_narrow_media' => 'all and (min-width: 740px) and (min-device-width: 740px), (max-device-width: 800px) and (min-width: 740px) and (orientation:landscape)',
            'alpha_layouts_alpha_default_narrow_weight' => '1',
            'alpha_layouts_alpha_default_normal_responsive' => '1',
            'alpha_layouts_alpha_default_normal_media' => 'all and (min-width: 980px) and (min-device-width: 980px), all and (max-device-width: 1024px) and (min-width: 1024px) and (orientation:landscape)',
            'alpha_layouts_alpha_default_normal_weight' => '2',
            'alpha_layouts_alpha_default_wide_responsive' => '1',
            'alpha_layouts_alpha_default_wide_media' => 'all and (min-width: 1220px)',
            'alpha_layouts_alpha_default_wide_weight' => '3',
            'alpha_viewport' => '1',
            'alpha_viewport_initial_scale' => '1',
            'alpha_viewport_min_scale' => '1',
            'alpha_viewport_max_scale' => '1',
            'alpha_viewport_user_scaleable' => '',
            'alpha_libraries' => 
            array (
              'omega_formalize' => 'omega_formalize',
              'omega_equalheights' => '',
              'omega_mediaqueries' => 'omega_mediaqueries',
            ),
            'alpha_css' => 
            array (
              'alpha-reset.css' => 'alpha-reset.css',
              'alpha-mobile.css' => 'alpha-mobile.css',
              'alpha-alpha.css' => 'alpha-alpha.css',
              'omega-text.css' => 'omega-text.css',
              'omega-branding.css' => 'omega-branding.css',
              'omega-menu.css' => 'omega-menu.css',
              'omega-forms.css' => 'omega-forms.css',
              'omega-visuals.css' => 'omega-visuals.css',
              'global.css' => 'global.css',
            ),
            'alpha_debug_block_toggle' => '1',
            'alpha_debug_block_active' => '1',
            'alpha_debug_grid_toggle' => '1',
            'alpha_debug_grid_active' => '1',
            'alpha_debug_grid_roles' => 
            array (
              1 => '1',
              2 => '2',
              3 => '3',
            ),
            'alpha_toggle_messages' => '1',
            'alpha_toggle_action_links' => '1',
            'alpha_toggle_tabs' => '1',
            'alpha_toggle_breadcrumb' => '1',
            'alpha_toggle_page_title' => '1',
            'alpha_toggle_feed_icons' => '1',
            'alpha_hidden_title' => '',
            'alpha_hidden_site_name' => '',
            'alpha_hidden_site_slogan' => '',
            'alpha_zone_user_equal_height_container' => '',
            'alpha_zone_user_wrapper' => '1',
            'alpha_zone_user_force' => '',
            'alpha_zone_user_section' => 'header',
            'alpha_zone_user_weight' => '1',
            'alpha_zone_user_columns' => '12',
            'alpha_zone_user_primary' => '',
            'alpha_zone_user_css' => '',
            'alpha_zone_user_wrapper_css' => '',
            'alpha_zone_branding_equal_height_container' => '',
            'alpha_zone_branding_wrapper' => '1',
            'alpha_zone_branding_force' => '',
            'alpha_zone_branding_section' => 'header',
            'alpha_zone_branding_weight' => '2',
            'alpha_zone_branding_columns' => '12',
            'alpha_zone_branding_primary' => '',
            'alpha_zone_branding_css' => '',
            'alpha_zone_branding_wrapper_css' => '',
            'alpha_zone_menu_equal_height_container' => '',
            'alpha_zone_menu_wrapper' => '1',
            'alpha_zone_menu_force' => '',
            'alpha_zone_menu_section' => 'header',
            'alpha_zone_menu_weight' => '3',
            'alpha_zone_menu_columns' => '12',
            'alpha_zone_menu_primary' => '',
            'alpha_zone_menu_css' => '',
            'alpha_zone_menu_wrapper_css' => '',
            'alpha_zone_header_equal_height_container' => '',
            'alpha_zone_header_wrapper' => '1',
            'alpha_zone_header_force' => '',
            'alpha_zone_header_section' => 'header',
            'alpha_zone_header_weight' => '4',
            'alpha_zone_header_columns' => '12',
            'alpha_zone_header_primary' => '',
            'alpha_zone_header_css' => '',
            'alpha_zone_header_wrapper_css' => '',
            'alpha_zone_preface_equal_height_container' => '',
            'alpha_zone_preface_wrapper' => '1',
            'alpha_zone_preface_force' => '',
            'alpha_zone_preface_section' => 'content',
            'alpha_zone_preface_weight' => '1',
            'alpha_zone_preface_columns' => '12',
            'alpha_zone_preface_primary' => '',
            'alpha_zone_preface_css' => '',
            'alpha_zone_preface_wrapper_css' => '',
            'alpha_zone_content_equal_height_container' => '',
            'alpha_zone_content_wrapper' => '1',
            'alpha_zone_content_force' => '1',
            'alpha_zone_content_section' => 'content',
            'alpha_zone_content_weight' => '2',
            'alpha_zone_content_columns' => '12',
            'alpha_zone_content_primary' => 'content',
            'alpha_zone_content_css' => '',
            'alpha_zone_content_wrapper_css' => '',
            'alpha_zone_postscript_equal_height_container' => '',
            'alpha_zone_postscript_wrapper' => '1',
            'alpha_zone_postscript_force' => '',
            'alpha_zone_postscript_section' => 'content',
            'alpha_zone_postscript_weight' => '3',
            'alpha_zone_postscript_columns' => '12',
            'alpha_zone_postscript_primary' => '',
            'alpha_zone_postscript_css' => '',
            'alpha_zone_postscript_wrapper_css' => '',
            'alpha_zone_footer_equal_height_container' => '',
            'alpha_zone_footer_wrapper' => '1',
            'alpha_zone_footer_force' => '',
            'alpha_zone_footer_section' => 'footer',
            'alpha_zone_footer_weight' => '1',
            'alpha_zone_footer_columns' => '12',
            'alpha_zone_footer_primary' => '',
            'alpha_zone_footer_css' => '',
            'alpha_zone_footer_wrapper_css' => '',
            'alpha_region_dashboard_sidebar_equal_height_container' => '',
            'alpha_region_dashboard_sidebar_equal_height_element' => '',
            'alpha_region_dashboard_sidebar_force' => '',
            'alpha_region_dashboard_sidebar_zone' => '',
            'alpha_region_dashboard_sidebar_prefix' => '',
            'alpha_region_dashboard_sidebar_columns' => '1',
            'alpha_region_dashboard_sidebar_suffix' => '',
            'alpha_region_dashboard_sidebar_weight' => '-50',
            'alpha_region_dashboard_sidebar_css' => '',
            'alpha_region_dashboard_inactive_equal_height_container' => '',
            'alpha_region_dashboard_inactive_equal_height_element' => '',
            'alpha_region_dashboard_inactive_force' => '',
            'alpha_region_dashboard_inactive_zone' => '',
            'alpha_region_dashboard_inactive_prefix' => '',
            'alpha_region_dashboard_inactive_columns' => '1',
            'alpha_region_dashboard_inactive_suffix' => '',
            'alpha_region_dashboard_inactive_weight' => '-50',
            'alpha_region_dashboard_inactive_css' => '',
            'alpha_region_dashboard_main_equal_height_container' => '',
            'alpha_region_dashboard_main_equal_height_element' => '',
            'alpha_region_dashboard_main_force' => '',
            'alpha_region_dashboard_main_zone' => '',
            'alpha_region_dashboard_main_prefix' => '',
            'alpha_region_dashboard_main_columns' => '1',
            'alpha_region_dashboard_main_suffix' => '',
            'alpha_region_dashboard_main_weight' => '-50',
            'alpha_region_dashboard_main_css' => '',
            'alpha_region_user_first_equal_height_container' => '',
            'alpha_region_user_first_equal_height_element' => '',
            'alpha_region_user_first_force' => '',
            'alpha_region_user_first_zone' => 'user',
            'alpha_region_user_first_prefix' => '',
            'alpha_region_user_first_columns' => '8',
            'alpha_region_user_first_suffix' => '',
            'alpha_region_user_first_weight' => '1',
            'alpha_region_user_first_css' => '',
            'alpha_region_user_second_equal_height_container' => '',
            'alpha_region_user_second_equal_height_element' => '',
            'alpha_region_user_second_force' => '',
            'alpha_region_user_second_zone' => 'user',
            'alpha_region_user_second_prefix' => '',
            'alpha_region_user_second_columns' => '4',
            'alpha_region_user_second_suffix' => '',
            'alpha_region_user_second_weight' => '2',
            'alpha_region_user_second_css' => '',
            'alpha_region_branding_equal_height_container' => '',
            'alpha_region_branding_equal_height_element' => '',
            'alpha_region_branding_force' => '1',
            'alpha_region_branding_zone' => 'branding',
            'alpha_region_branding_prefix' => '',
            'alpha_region_branding_columns' => '12',
            'alpha_region_branding_suffix' => '',
            'alpha_region_branding_weight' => '1',
            'alpha_region_branding_css' => '',
            'alpha_region_menu_equal_height_container' => '',
            'alpha_region_menu_equal_height_element' => '',
            'alpha_region_menu_force' => '1',
            'alpha_region_menu_zone' => 'menu',
            'alpha_region_menu_prefix' => '',
            'alpha_region_menu_columns' => '12',
            'alpha_region_menu_suffix' => '',
            'alpha_region_menu_weight' => '1',
            'alpha_region_menu_css' => '',
            'alpha_region_header_first_equal_height_container' => '',
            'alpha_region_header_first_equal_height_element' => '',
            'alpha_region_header_first_force' => '',
            'alpha_region_header_first_zone' => 'header',
            'alpha_region_header_first_prefix' => '',
            'alpha_region_header_first_columns' => '6',
            'alpha_region_header_first_suffix' => '',
            'alpha_region_header_first_weight' => '1',
            'alpha_region_header_first_css' => '',
            'alpha_region_header_second_equal_height_container' => '',
            'alpha_region_header_second_equal_height_element' => '',
            'alpha_region_header_second_force' => '',
            'alpha_region_header_second_zone' => 'header',
            'alpha_region_header_second_prefix' => '',
            'alpha_region_header_second_columns' => '6',
            'alpha_region_header_second_suffix' => '',
            'alpha_region_header_second_weight' => '2',
            'alpha_region_header_second_css' => '',
            'alpha_region_preface_first_equal_height_container' => '',
            'alpha_region_preface_first_equal_height_element' => '',
            'alpha_region_preface_first_force' => '',
            'alpha_region_preface_first_zone' => 'preface',
            'alpha_region_preface_first_prefix' => '',
            'alpha_region_preface_first_columns' => '4',
            'alpha_region_preface_first_suffix' => '',
            'alpha_region_preface_first_weight' => '1',
            'alpha_region_preface_first_css' => '',
            'alpha_region_preface_second_equal_height_container' => '',
            'alpha_region_preface_second_equal_height_element' => '',
            'alpha_region_preface_second_force' => '',
            'alpha_region_preface_second_zone' => 'preface',
            'alpha_region_preface_second_prefix' => '',
            'alpha_region_preface_second_columns' => '4',
            'alpha_region_preface_second_suffix' => '',
            'alpha_region_preface_second_weight' => '2',
            'alpha_region_preface_second_css' => '',
            'alpha_region_preface_third_equal_height_container' => '',
            'alpha_region_preface_third_equal_height_element' => '',
            'alpha_region_preface_third_force' => '',
            'alpha_region_preface_third_zone' => 'preface',
            'alpha_region_preface_third_prefix' => '',
            'alpha_region_preface_third_columns' => '4',
            'alpha_region_preface_third_suffix' => '',
            'alpha_region_preface_third_weight' => '3',
            'alpha_region_preface_third_css' => '',
            'alpha_region_content_equal_height_container' => '',
            'alpha_region_content_equal_height_element' => '',
            'alpha_region_content_force' => '',
            'alpha_region_content_zone' => 'content',
            'alpha_region_content_prefix' => '',
            'alpha_region_content_columns' => '6',
            'alpha_region_content_suffix' => '',
            'alpha_region_content_weight' => '2',
            'alpha_region_content_css' => '',
            'alpha_region_sidebar_first_equal_height_container' => '',
            'alpha_region_sidebar_first_equal_height_element' => '',
            'alpha_region_sidebar_first_force' => '',
            'alpha_region_sidebar_first_zone' => 'content',
            'alpha_region_sidebar_first_prefix' => '',
            'alpha_region_sidebar_first_columns' => '3',
            'alpha_region_sidebar_first_suffix' => '',
            'alpha_region_sidebar_first_weight' => '1',
            'alpha_region_sidebar_first_css' => '',
            'alpha_region_sidebar_second_equal_height_container' => '',
            'alpha_region_sidebar_second_equal_height_element' => '',
            'alpha_region_sidebar_second_force' => '',
            'alpha_region_sidebar_second_zone' => 'content',
            'alpha_region_sidebar_second_prefix' => '',
            'alpha_region_sidebar_second_columns' => '3',
            'alpha_region_sidebar_second_suffix' => '',
            'alpha_region_sidebar_second_weight' => '3',
            'alpha_region_sidebar_second_css' => '',
            'alpha_region_postscript_first_equal_height_container' => '',
            'alpha_region_postscript_first_equal_height_element' => '',
            'alpha_region_postscript_first_force' => '',
            'alpha_region_postscript_first_zone' => 'postscript',
            'alpha_region_postscript_first_prefix' => '',
            'alpha_region_postscript_first_columns' => '3',
            'alpha_region_postscript_first_suffix' => '',
            'alpha_region_postscript_first_weight' => '1',
            'alpha_region_postscript_first_css' => '',
            'alpha_region_postscript_second_equal_height_container' => '',
            'alpha_region_postscript_second_equal_height_element' => '',
            'alpha_region_postscript_second_force' => '',
            'alpha_region_postscript_second_zone' => 'postscript',
            'alpha_region_postscript_second_prefix' => '',
            'alpha_region_postscript_second_columns' => '3',
            'alpha_region_postscript_second_suffix' => '',
            'alpha_region_postscript_second_weight' => '2',
            'alpha_region_postscript_second_css' => '',
            'alpha_region_postscript_third_equal_height_container' => '',
            'alpha_region_postscript_third_equal_height_element' => '',
            'alpha_region_postscript_third_force' => '',
            'alpha_region_postscript_third_zone' => 'postscript',
            'alpha_region_postscript_third_prefix' => '',
            'alpha_region_postscript_third_columns' => '3',
            'alpha_region_postscript_third_suffix' => '',
            'alpha_region_postscript_third_weight' => '3',
            'alpha_region_postscript_third_css' => '',
            'alpha_region_postscript_fourth_equal_height_container' => '',
            'alpha_region_postscript_fourth_equal_height_element' => '',
            'alpha_region_postscript_fourth_force' => '',
            'alpha_region_postscript_fourth_zone' => 'postscript',
            'alpha_region_postscript_fourth_prefix' => '',
            'alpha_region_postscript_fourth_columns' => '3',
            'alpha_region_postscript_fourth_suffix' => '',
            'alpha_region_postscript_fourth_weight' => '4',
            'alpha_region_postscript_fourth_css' => '',
            'alpha_region_footer_first_equal_height_container' => '',
            'alpha_region_footer_first_equal_height_element' => '',
            'alpha_region_footer_first_force' => '',
            'alpha_region_footer_first_zone' => 'footer',
            'alpha_region_footer_first_prefix' => '',
            'alpha_region_footer_first_columns' => '12',
            'alpha_region_footer_first_suffix' => '',
            'alpha_region_footer_first_weight' => '1',
            'alpha_region_footer_first_css' => '',
            'alpha_region_footer_second_equal_height_container' => '',
            'alpha_region_footer_second_equal_height_element' => '',
            'alpha_region_footer_second_force' => '',
            'alpha_region_footer_second_zone' => 'footer',
            'alpha_region_footer_second_prefix' => '',
            'alpha_region_footer_second_columns' => '12',
            'alpha_region_footer_second_suffix' => '',
            'alpha_region_footer_second_weight' => '2',
            'alpha_region_footer_second_css' => '',
          ),
          'version' => '7.x-3.1',
          'project' => 'omega',
          'datestamp' => '1329681647',
        ),
        'project' => 'omega',
        'version' => '7.x-3.1',
      ),
      'starterkit_omega_xhtml' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/themes/omega/starterkits/omega-xhtml/starterkit_omega_xhtml.info',
        'basename' => 'starterkit_omega_xhtml.info',
        'name' => 'Omega XHTML Starter Kit',
        'info' => 
        array (
          'name' => 'Omega XHTML Starter Kit',
          'description' => 'Default XHTML starterkit for <a href="http://drupal.org/project/omega">Omega</a>. You should not directly edit this starterkit, but make your own copy. Information on this can be found in the <a href="http://himer.us/omega-docs">Omega Documentation</a>.',
          'core' => '7.x',
          'engine' => 'phptemplate',
          'screenshot' => 'screenshot.png',
          'base theme' => 'omega',
          'hidden' => true,
          'starterkit' => true,
          'regions' => 
          array (
            'page_top' => 'Page Top',
            'page_bottom' => 'Page Bottom',
            'content' => 'Content',
            'user_first' => 'User Bar First',
            'user_second' => 'User Bar Second',
            'branding' => 'Branding',
            'menu' => 'Menu',
            'sidebar_first' => 'Sidebar First',
            'sidebar_second' => 'Sidebar Second',
            'header_first' => 'Header First',
            'header_second' => 'Header Second',
            'preface_first' => 'Preface First',
            'preface_second' => 'Preface Second',
            'preface_third' => 'Preface Third',
            'postscript_first' => 'Postscript First',
            'postscript_second' => 'Postscript Second',
            'postscript_third' => 'Postscript Third',
            'postscript_fourth' => 'Postscript Fourth',
            'footer_first' => 'Footer First',
            'footer_second' => 'Footer Second',
          ),
          'zones' => 
          array (
            'user' => 'User',
            'branding' => 'Branding',
            'menu' => 'Menu',
            'header' => 'Header',
            'preface' => 'Preface',
            'content' => 'Content',
            'postscript' => 'Postscript',
            'footer' => 'Footer',
          ),
          'css' => 
          array (
            'global.css' => 
            array (
              'name' => 'Your custom global styles',
              'description' => 'This file holds all the globally active custom CSS of your theme.',
              'options' => 
              array (
                'weight' => '10',
              ),
            ),
          ),
          'settings' => 
          array (
            'alpha_grid' => 'alpha_default',
            'alpha_primary_alpha_default' => 'normal',
            'alpha_responsive' => '1',
            'alpha_layouts_alpha_fluid_primary' => 'normal',
            'alpha_layouts_alpha_fluid_normal_responsive' => '0',
            'alpha_layouts_alpha_fluid_normal_media' => 'all and (min-width: 740px) and (min-device-width: 740px), (max-device-width: 800px) and (min-width: 740px) and (orientation:landscape)',
            'alpha_layouts_alpha_default_primary' => 'normal',
            'alpha_layouts_alpha_default_fluid_responsive' => '0',
            'alpha_layouts_alpha_default_fluid_media' => 'all and (min-width: 740px) and (min-device-width: 740px), (max-device-width: 800px) and (min-width: 740px) and (orientation:landscape)',
            'alpha_layouts_alpha_default_fluid_weight' => '0',
            'alpha_layouts_alpha_default_narrow_responsive' => '1',
            'alpha_layouts_alpha_default_narrow_media' => 'all and (min-width: 740px) and (min-device-width: 740px), (max-device-width: 800px) and (min-width: 740px) and (orientation:landscape)',
            'alpha_layouts_alpha_default_narrow_weight' => '1',
            'alpha_layouts_alpha_default_normal_responsive' => '1',
            'alpha_layouts_alpha_default_normal_media' => 'all and (min-width: 980px) and (min-device-width: 980px), all and (max-device-width: 1024px) and (min-width: 1024px) and (orientation:landscape)',
            'alpha_layouts_alpha_default_normal_weight' => '2',
            'alpha_layouts_alpha_default_wide_responsive' => '1',
            'alpha_layouts_alpha_default_wide_media' => 'all and (min-width: 1220px)',
            'alpha_layouts_alpha_default_wide_weight' => '3',
            'alpha_viewport' => '1',
            'alpha_viewport_initial_scale' => '1',
            'alpha_viewport_min_scale' => '1',
            'alpha_viewport_max_scale' => '1',
            'alpha_viewport_user_scaleable' => '',
            'alpha_libraries' => 
            array (
              'omega_formalize' => 'omega_formalize',
              'omega_equalheights' => '',
              'omega_mediaqueries' => 'omega_mediaqueries',
            ),
            'alpha_css' => 
            array (
              'alpha-reset.css' => 'alpha-reset.css',
              'alpha-mobile.css' => 'alpha-mobile.css',
              'alpha-alpha.css' => 'alpha-alpha.css',
              'omega-text.css' => 'omega-text.css',
              'omega-branding.css' => 'omega-branding.css',
              'omega-menu.css' => 'omega-menu.css',
              'omega-forms.css' => 'omega-forms.css',
              'omega-visuals.css' => 'omega-visuals.css',
              'global.css' => 'global.css',
            ),
            'alpha_debug_block_toggle' => '1',
            'alpha_debug_block_active' => '1',
            'alpha_debug_grid_toggle' => '1',
            'alpha_debug_grid_active' => '1',
            'alpha_debug_grid_roles' => 
            array (
              1 => '1',
              2 => '2',
              3 => '3',
            ),
            'alpha_toggle_messages' => '1',
            'alpha_toggle_action_links' => '1',
            'alpha_toggle_tabs' => '1',
            'alpha_toggle_breadcrumb' => '1',
            'alpha_toggle_page_title' => '1',
            'alpha_toggle_feed_icons' => '1',
            'alpha_hidden_title' => '',
            'alpha_hidden_site_name' => '',
            'alpha_hidden_site_slogan' => '',
            'alpha_zone_user_equal_height_container' => '',
            'alpha_zone_user_wrapper' => '1',
            'alpha_zone_user_force' => '',
            'alpha_zone_user_section' => 'header',
            'alpha_zone_user_weight' => '1',
            'alpha_zone_user_columns' => '12',
            'alpha_zone_user_primary' => '',
            'alpha_zone_user_css' => '',
            'alpha_zone_user_wrapper_css' => '',
            'alpha_zone_branding_equal_height_container' => '',
            'alpha_zone_branding_wrapper' => '1',
            'alpha_zone_branding_force' => '',
            'alpha_zone_branding_section' => 'header',
            'alpha_zone_branding_weight' => '2',
            'alpha_zone_branding_columns' => '12',
            'alpha_zone_branding_primary' => '',
            'alpha_zone_branding_css' => '',
            'alpha_zone_branding_wrapper_css' => '',
            'alpha_zone_menu_equal_height_container' => '',
            'alpha_zone_menu_wrapper' => '1',
            'alpha_zone_menu_force' => '',
            'alpha_zone_menu_section' => 'header',
            'alpha_zone_menu_weight' => '3',
            'alpha_zone_menu_columns' => '12',
            'alpha_zone_menu_primary' => '',
            'alpha_zone_menu_css' => '',
            'alpha_zone_menu_wrapper_css' => '',
            'alpha_zone_header_equal_height_container' => '',
            'alpha_zone_header_wrapper' => '1',
            'alpha_zone_header_force' => '',
            'alpha_zone_header_section' => 'header',
            'alpha_zone_header_weight' => '4',
            'alpha_zone_header_columns' => '12',
            'alpha_zone_header_primary' => '',
            'alpha_zone_header_css' => '',
            'alpha_zone_header_wrapper_css' => '',
            'alpha_zone_preface_equal_height_container' => '',
            'alpha_zone_preface_wrapper' => '1',
            'alpha_zone_preface_force' => '',
            'alpha_zone_preface_section' => 'content',
            'alpha_zone_preface_weight' => '1',
            'alpha_zone_preface_columns' => '12',
            'alpha_zone_preface_primary' => '',
            'alpha_zone_preface_css' => '',
            'alpha_zone_preface_wrapper_css' => '',
            'alpha_zone_content_equal_height_container' => '',
            'alpha_zone_content_wrapper' => '1',
            'alpha_zone_content_force' => '1',
            'alpha_zone_content_section' => 'content',
            'alpha_zone_content_weight' => '2',
            'alpha_zone_content_columns' => '12',
            'alpha_zone_content_primary' => 'content',
            'alpha_zone_content_css' => '',
            'alpha_zone_content_wrapper_css' => '',
            'alpha_zone_postscript_equal_height_container' => '',
            'alpha_zone_postscript_wrapper' => '1',
            'alpha_zone_postscript_force' => '',
            'alpha_zone_postscript_section' => 'content',
            'alpha_zone_postscript_weight' => '3',
            'alpha_zone_postscript_columns' => '12',
            'alpha_zone_postscript_primary' => '',
            'alpha_zone_postscript_css' => '',
            'alpha_zone_postscript_wrapper_css' => '',
            'alpha_zone_footer_equal_height_container' => '',
            'alpha_zone_footer_wrapper' => '1',
            'alpha_zone_footer_force' => '',
            'alpha_zone_footer_section' => 'footer',
            'alpha_zone_footer_weight' => '1',
            'alpha_zone_footer_columns' => '12',
            'alpha_zone_footer_primary' => '',
            'alpha_zone_footer_css' => '',
            'alpha_zone_footer_wrapper_css' => '',
            'alpha_region_dashboard_sidebar_equal_height_container' => '',
            'alpha_region_dashboard_sidebar_equal_height_element' => '',
            'alpha_region_dashboard_sidebar_force' => '',
            'alpha_region_dashboard_sidebar_zone' => '',
            'alpha_region_dashboard_sidebar_prefix' => '',
            'alpha_region_dashboard_sidebar_columns' => '1',
            'alpha_region_dashboard_sidebar_suffix' => '',
            'alpha_region_dashboard_sidebar_weight' => '-50',
            'alpha_region_dashboard_sidebar_css' => '',
            'alpha_region_dashboard_inactive_equal_height_container' => '',
            'alpha_region_dashboard_inactive_equal_height_element' => '',
            'alpha_region_dashboard_inactive_force' => '',
            'alpha_region_dashboard_inactive_zone' => '',
            'alpha_region_dashboard_inactive_prefix' => '',
            'alpha_region_dashboard_inactive_columns' => '1',
            'alpha_region_dashboard_inactive_suffix' => '',
            'alpha_region_dashboard_inactive_weight' => '-50',
            'alpha_region_dashboard_inactive_css' => '',
            'alpha_region_dashboard_main_equal_height_container' => '',
            'alpha_region_dashboard_main_equal_height_element' => '',
            'alpha_region_dashboard_main_force' => '',
            'alpha_region_dashboard_main_zone' => '',
            'alpha_region_dashboard_main_prefix' => '',
            'alpha_region_dashboard_main_columns' => '1',
            'alpha_region_dashboard_main_suffix' => '',
            'alpha_region_dashboard_main_weight' => '-50',
            'alpha_region_dashboard_main_css' => '',
            'alpha_region_user_first_equal_height_container' => '',
            'alpha_region_user_first_equal_height_element' => '',
            'alpha_region_user_first_force' => '',
            'alpha_region_user_first_zone' => 'user',
            'alpha_region_user_first_prefix' => '',
            'alpha_region_user_first_columns' => '8',
            'alpha_region_user_first_suffix' => '',
            'alpha_region_user_first_weight' => '1',
            'alpha_region_user_first_css' => '',
            'alpha_region_user_second_equal_height_container' => '',
            'alpha_region_user_second_equal_height_element' => '',
            'alpha_region_user_second_force' => '',
            'alpha_region_user_second_zone' => 'user',
            'alpha_region_user_second_prefix' => '',
            'alpha_region_user_second_columns' => '4',
            'alpha_region_user_second_suffix' => '',
            'alpha_region_user_second_weight' => '2',
            'alpha_region_user_second_css' => '',
            'alpha_region_branding_equal_height_container' => '',
            'alpha_region_branding_equal_height_element' => '',
            'alpha_region_branding_force' => '1',
            'alpha_region_branding_zone' => 'branding',
            'alpha_region_branding_prefix' => '',
            'alpha_region_branding_columns' => '12',
            'alpha_region_branding_suffix' => '',
            'alpha_region_branding_weight' => '1',
            'alpha_region_branding_css' => '',
            'alpha_region_menu_equal_height_container' => '',
            'alpha_region_menu_equal_height_element' => '',
            'alpha_region_menu_force' => '1',
            'alpha_region_menu_zone' => 'menu',
            'alpha_region_menu_prefix' => '',
            'alpha_region_menu_columns' => '12',
            'alpha_region_menu_suffix' => '',
            'alpha_region_menu_weight' => '1',
            'alpha_region_menu_css' => '',
            'alpha_region_header_first_equal_height_container' => '',
            'alpha_region_header_first_equal_height_element' => '',
            'alpha_region_header_first_force' => '',
            'alpha_region_header_first_zone' => 'header',
            'alpha_region_header_first_prefix' => '',
            'alpha_region_header_first_columns' => '6',
            'alpha_region_header_first_suffix' => '',
            'alpha_region_header_first_weight' => '1',
            'alpha_region_header_first_css' => '',
            'alpha_region_header_second_equal_height_container' => '',
            'alpha_region_header_second_equal_height_element' => '',
            'alpha_region_header_second_force' => '',
            'alpha_region_header_second_zone' => 'header',
            'alpha_region_header_second_prefix' => '',
            'alpha_region_header_second_columns' => '6',
            'alpha_region_header_second_suffix' => '',
            'alpha_region_header_second_weight' => '2',
            'alpha_region_header_second_css' => '',
            'alpha_region_preface_first_equal_height_container' => '',
            'alpha_region_preface_first_equal_height_element' => '',
            'alpha_region_preface_first_force' => '',
            'alpha_region_preface_first_zone' => 'preface',
            'alpha_region_preface_first_prefix' => '',
            'alpha_region_preface_first_columns' => '4',
            'alpha_region_preface_first_suffix' => '',
            'alpha_region_preface_first_weight' => '1',
            'alpha_region_preface_first_css' => '',
            'alpha_region_preface_second_equal_height_container' => '',
            'alpha_region_preface_second_equal_height_element' => '',
            'alpha_region_preface_second_force' => '',
            'alpha_region_preface_second_zone' => 'preface',
            'alpha_region_preface_second_prefix' => '',
            'alpha_region_preface_second_columns' => '4',
            'alpha_region_preface_second_suffix' => '',
            'alpha_region_preface_second_weight' => '2',
            'alpha_region_preface_second_css' => '',
            'alpha_region_preface_third_equal_height_container' => '',
            'alpha_region_preface_third_equal_height_element' => '',
            'alpha_region_preface_third_force' => '',
            'alpha_region_preface_third_zone' => 'preface',
            'alpha_region_preface_third_prefix' => '',
            'alpha_region_preface_third_columns' => '4',
            'alpha_region_preface_third_suffix' => '',
            'alpha_region_preface_third_weight' => '3',
            'alpha_region_preface_third_css' => '',
            'alpha_region_content_equal_height_container' => '',
            'alpha_region_content_equal_height_element' => '',
            'alpha_region_content_force' => '',
            'alpha_region_content_zone' => 'content',
            'alpha_region_content_prefix' => '',
            'alpha_region_content_columns' => '6',
            'alpha_region_content_suffix' => '',
            'alpha_region_content_weight' => '2',
            'alpha_region_content_css' => '',
            'alpha_region_sidebar_first_equal_height_container' => '',
            'alpha_region_sidebar_first_equal_height_element' => '',
            'alpha_region_sidebar_first_force' => '',
            'alpha_region_sidebar_first_zone' => 'content',
            'alpha_region_sidebar_first_prefix' => '',
            'alpha_region_sidebar_first_columns' => '3',
            'alpha_region_sidebar_first_suffix' => '',
            'alpha_region_sidebar_first_weight' => '1',
            'alpha_region_sidebar_first_css' => '',
            'alpha_region_sidebar_second_equal_height_container' => '',
            'alpha_region_sidebar_second_equal_height_element' => '',
            'alpha_region_sidebar_second_force' => '',
            'alpha_region_sidebar_second_zone' => 'content',
            'alpha_region_sidebar_second_prefix' => '',
            'alpha_region_sidebar_second_columns' => '3',
            'alpha_region_sidebar_second_suffix' => '',
            'alpha_region_sidebar_second_weight' => '3',
            'alpha_region_sidebar_second_css' => '',
            'alpha_region_postscript_first_equal_height_container' => '',
            'alpha_region_postscript_first_equal_height_element' => '',
            'alpha_region_postscript_first_force' => '',
            'alpha_region_postscript_first_zone' => 'postscript',
            'alpha_region_postscript_first_prefix' => '',
            'alpha_region_postscript_first_columns' => '3',
            'alpha_region_postscript_first_suffix' => '',
            'alpha_region_postscript_first_weight' => '1',
            'alpha_region_postscript_first_css' => '',
            'alpha_region_postscript_second_equal_height_container' => '',
            'alpha_region_postscript_second_equal_height_element' => '',
            'alpha_region_postscript_second_force' => '',
            'alpha_region_postscript_second_zone' => 'postscript',
            'alpha_region_postscript_second_prefix' => '',
            'alpha_region_postscript_second_columns' => '3',
            'alpha_region_postscript_second_suffix' => '',
            'alpha_region_postscript_second_weight' => '2',
            'alpha_region_postscript_second_css' => '',
            'alpha_region_postscript_third_equal_height_container' => '',
            'alpha_region_postscript_third_equal_height_element' => '',
            'alpha_region_postscript_third_force' => '',
            'alpha_region_postscript_third_zone' => 'postscript',
            'alpha_region_postscript_third_prefix' => '',
            'alpha_region_postscript_third_columns' => '3',
            'alpha_region_postscript_third_suffix' => '',
            'alpha_region_postscript_third_weight' => '3',
            'alpha_region_postscript_third_css' => '',
            'alpha_region_postscript_fourth_equal_height_container' => '',
            'alpha_region_postscript_fourth_equal_height_element' => '',
            'alpha_region_postscript_fourth_force' => '',
            'alpha_region_postscript_fourth_zone' => 'postscript',
            'alpha_region_postscript_fourth_prefix' => '',
            'alpha_region_postscript_fourth_columns' => '3',
            'alpha_region_postscript_fourth_suffix' => '',
            'alpha_region_postscript_fourth_weight' => '4',
            'alpha_region_postscript_fourth_css' => '',
            'alpha_region_footer_first_equal_height_container' => '',
            'alpha_region_footer_first_equal_height_element' => '',
            'alpha_region_footer_first_force' => '',
            'alpha_region_footer_first_zone' => 'footer',
            'alpha_region_footer_first_prefix' => '',
            'alpha_region_footer_first_columns' => '12',
            'alpha_region_footer_first_suffix' => '',
            'alpha_region_footer_first_weight' => '1',
            'alpha_region_footer_first_css' => '',
            'alpha_region_footer_second_equal_height_container' => '',
            'alpha_region_footer_second_equal_height_element' => '',
            'alpha_region_footer_second_force' => '',
            'alpha_region_footer_second_zone' => 'footer',
            'alpha_region_footer_second_prefix' => '',
            'alpha_region_footer_second_columns' => '12',
            'alpha_region_footer_second_suffix' => '',
            'alpha_region_footer_second_weight' => '2',
            'alpha_region_footer_second_css' => '',
          ),
          'version' => '7.x-3.1',
          'project' => 'omega',
          'datestamp' => '1329681647',
        ),
        'project' => 'omega',
        'version' => '7.x-3.1',
      ),
      'omega' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/themes/omega/omega/omega.info',
        'basename' => 'omega.info',
        'name' => 'Omega',
        'info' => 
        array (
          'name' => 'Omega',
          'description' => '<a href="http://drupal.org/project/omega">Omega</a> extends the Omega theme framework with some additional features and makes them availabe to its subthemes. This theme should not be used directly, instead you should create a subtheme based on one of the Omega or Alpha starterkits. Learn more about <a href="http://drupal.org/node/819170">Creating an Omega Subtheme</a> in the <a href="http://drupal.org/node/819164">Omega Handbook</a>.',
          'core' => '7.x',
          'engine' => 'phptemplate',
          'screenshot' => 'screenshot.png',
          'version' => '7.x-3.1',
          'base theme' => 'alpha',
          'regions' => 
          array (
            'page_top' => 'Page Top',
            'page_bottom' => 'Page Bottom',
            'content' => 'Content',
            'user_first' => 'User Bar First',
            'user_second' => 'User Bar Second',
            'branding' => 'Branding',
            'menu' => 'Menu',
            'sidebar_first' => 'Sidebar First',
            'sidebar_second' => 'Sidebar Second',
            'header_first' => 'Header First',
            'header_second' => 'Header Second',
            'preface_first' => 'Preface First',
            'preface_second' => 'Preface Second',
            'preface_third' => 'Preface Third',
            'postscript_first' => 'Postscript First',
            'postscript_second' => 'Postscript Second',
            'postscript_third' => 'Postscript Third',
            'postscript_fourth' => 'Postscript Fourth',
            'footer_first' => 'Footer First',
            'footer_second' => 'Footer Second',
          ),
          'zones' => 
          array (
            'user' => 'User',
            'branding' => 'Branding',
            'menu' => 'Menu',
            'header' => 'Header',
            'preface' => 'Preface',
            'content' => 'Content',
            'postscript' => 'Postscript',
            'footer' => 'Footer',
          ),
          'css' => 
          array (
            'omega-text.css' => 
            array (
              'name' => 'Text Styles',
              'description' => 'Default text styles for Omega.',
              'options' => 
              array (
                'weight' => '-10',
              ),
            ),
            'omega-branding.css' => 
            array (
              'name' => 'Branding Styles',
              'description' => 'Provides positioning for the logo, title and slogan.',
              'options' => 
              array (
                'weight' => '-10',
              ),
            ),
            'omega-menu.css' => 
            array (
              'name' => 'Menu Styles',
              'description' => 'Provides positoning and basic CSS for primary and secondary menus.',
              'options' => 
              array (
                'weight' => '-10',
              ),
            ),
            'omega-forms.css' => 
            array (
              'name' => 'Form Styles',
              'description' => 'Provides basic form styles.',
              'options' => 
              array (
                'weight' => '-10',
              ),
            ),
            'omega-visuals.css' => 
            array (
              'name' => 'Omega Styles',
              'description' => 'Custom visual styles for Omega. (pagers, menus, etc.)',
              'options' => 
              array (
                'weight' => '-10',
              ),
            ),
          ),
          'libraries' => 
          array (
            'omega_formalize' => 
            array (
              'name' => 'Formalize',
              'description' => 'Formalize is a framework by <a href="http://formalize.me/" title="Formalize">Nathan Smith</a> for neat looking cross-browser forms with extended functionality.',
              'js' => 
              array (
                0 => 
                array (
                  'file' => 'jquery.formalize.js',
                  'options' => 
                  array (
                    'weight' => '-20',
                  ),
                ),
              ),
              'css' => 
              array (
                0 => 
                array (
                  'file' => 'formalize.css',
                  'options' => 
                  array (
                    'weight' => '-20',
                  ),
                ),
              ),
            ),
            'omega_mediaqueries' => 
            array (
              'name' => 'Media queries',
              'description' => 'Provides a tiny JavaScript library that can be used in your custom JavaScript.',
              'js' => 
              array (
                0 => 
                array (
                  'file' => 'omega-mediaqueries.js',
                  'options' => 
                  array (
                    'weight' => '-19',
                  ),
                ),
              ),
            ),
            'omega_equalheights' => 
            array (
              'name' => 'Equal heights',
              'description' => 'Allows you to force all regions of a zone or all blocks of a region to be of equal size. <span class="marker">This library reveals a corresponding checkbox on every region and zone configuration panel if activated.</span>',
              'js' => 
              array (
                0 => 
                array (
                  'file' => 'omega-equalheights.js',
                  'options' => 
                  array (
                    'weight' => '-18',
                  ),
                ),
              ),
            ),
          ),
          'plugins' => 
          array (
            'panels' => 
            array (
              'layouts' => 'panels/layouts',
            ),
          ),
          'settings' => 
          array (
            'alpha_grid' => 'alpha_default',
            'alpha_primary_alpha_default' => 'normal',
            'alpha_responsive' => '1',
            'alpha_layouts_alpha_fluid_primary' => 'normal',
            'alpha_layouts_alpha_fluid_normal_responsive' => '0',
            'alpha_layouts_alpha_fluid_normal_media' => 'all and (min-width: 740px) and (min-device-width: 740px), (max-device-width: 800px) and (min-width: 740px) and (orientation:landscape)',
            'alpha_layouts_alpha_default_primary' => 'normal',
            'alpha_layouts_alpha_default_fluid_responsive' => '0',
            'alpha_layouts_alpha_default_fluid_media' => 'all and (min-width: 740px) and (min-device-width: 740px), (max-device-width: 800px) and (min-width: 740px) and (orientation:landscape)',
            'alpha_layouts_alpha_default_fluid_weight' => '0',
            'alpha_layouts_alpha_default_narrow_responsive' => '1',
            'alpha_layouts_alpha_default_narrow_media' => 'all and (min-width: 740px) and (min-device-width: 740px), (max-device-width: 800px) and (min-width: 740px) and (orientation:landscape)',
            'alpha_layouts_alpha_default_narrow_weight' => '1',
            'alpha_layouts_alpha_default_normal_responsive' => '1',
            'alpha_layouts_alpha_default_normal_media' => 'all and (min-width: 980px) and (min-device-width: 980px), all and (max-device-width: 1024px) and (min-width: 1024px) and (orientation:landscape)',
            'alpha_layouts_alpha_default_normal_weight' => '2',
            'alpha_layouts_alpha_default_wide_responsive' => '1',
            'alpha_layouts_alpha_default_wide_media' => 'all and (min-width: 1220px)',
            'alpha_layouts_alpha_default_wide_weight' => '3',
            'alpha_viewport' => '1',
            'alpha_viewport_initial_scale' => '1',
            'alpha_viewport_min_scale' => '1',
            'alpha_viewport_max_scale' => '1',
            'alpha_viewport_user_scaleable' => '',
            'alpha_libraries' => 
            array (
              'omega_formalize' => 'omega_formalize',
              'omega_equalheights' => '',
              'omega_mediaqueries' => 'omega_mediaqueries',
            ),
            'alpha_css' => 
            array (
              'alpha-reset.css' => 'alpha-reset.css',
              'alpha-mobile.css' => 'alpha-mobile.css',
              'alpha-alpha.css' => 'alpha-alpha.css',
              'omega-text.css' => 'omega-text.css',
              'omega-branding.css' => 'omega-branding.css',
              'omega-menu.css' => 'omega-menu.css',
              'omega-forms.css' => 'omega-forms.css',
              'omega-visuals.css' => 'omega-visuals.css',
            ),
            'alpha_debug_block_toggle' => '1',
            'alpha_debug_block_active' => '1',
            'alpha_debug_grid_toggle' => '1',
            'alpha_debug_grid_active' => '1',
            'alpha_debug_grid_roles' => 
            array (
              1 => '1',
              2 => '2',
              3 => '3',
            ),
            'alpha_toggle_messages' => '1',
            'alpha_toggle_action_links' => '1',
            'alpha_toggle_tabs' => '1',
            'alpha_toggle_breadcrumb' => '1',
            'alpha_toggle_page_title' => '1',
            'alpha_toggle_feed_icons' => '1',
            'alpha_hidden_title' => '',
            'alpha_hidden_site_name' => '',
            'alpha_hidden_site_slogan' => '',
            'alpha_zone_user_equal_height_container' => '',
            'alpha_zone_user_wrapper' => '1',
            'alpha_zone_user_force' => '',
            'alpha_zone_user_section' => 'header',
            'alpha_zone_user_weight' => '1',
            'alpha_zone_user_columns' => '12',
            'alpha_zone_user_primary' => '',
            'alpha_zone_user_css' => '',
            'alpha_zone_user_wrapper_css' => '',
            'alpha_zone_branding_equal_height_container' => '',
            'alpha_zone_branding_wrapper' => '1',
            'alpha_zone_branding_force' => '',
            'alpha_zone_branding_section' => 'header',
            'alpha_zone_branding_weight' => '2',
            'alpha_zone_branding_columns' => '12',
            'alpha_zone_branding_primary' => '',
            'alpha_zone_branding_css' => '',
            'alpha_zone_branding_wrapper_css' => '',
            'alpha_zone_menu_equal_height_container' => '',
            'alpha_zone_menu_wrapper' => '1',
            'alpha_zone_menu_force' => '',
            'alpha_zone_menu_section' => 'header',
            'alpha_zone_menu_weight' => '3',
            'alpha_zone_menu_columns' => '12',
            'alpha_zone_menu_primary' => '',
            'alpha_zone_menu_css' => '',
            'alpha_zone_menu_wrapper_css' => '',
            'alpha_zone_header_equal_height_container' => '',
            'alpha_zone_header_wrapper' => '1',
            'alpha_zone_header_force' => '',
            'alpha_zone_header_section' => 'header',
            'alpha_zone_header_weight' => '4',
            'alpha_zone_header_columns' => '12',
            'alpha_zone_header_primary' => '',
            'alpha_zone_header_css' => '',
            'alpha_zone_header_wrapper_css' => '',
            'alpha_zone_preface_equal_height_container' => '',
            'alpha_zone_preface_wrapper' => '1',
            'alpha_zone_preface_force' => '',
            'alpha_zone_preface_section' => 'content',
            'alpha_zone_preface_weight' => '1',
            'alpha_zone_preface_columns' => '12',
            'alpha_zone_preface_primary' => '',
            'alpha_zone_preface_css' => '',
            'alpha_zone_preface_wrapper_css' => '',
            'alpha_zone_content_equal_height_container' => '',
            'alpha_zone_content_wrapper' => '1',
            'alpha_zone_content_force' => '1',
            'alpha_zone_content_section' => 'content',
            'alpha_zone_content_weight' => '2',
            'alpha_zone_content_columns' => '12',
            'alpha_zone_content_primary' => 'content',
            'alpha_zone_content_css' => '',
            'alpha_zone_content_wrapper_css' => '',
            'alpha_zone_postscript_equal_height_container' => '',
            'alpha_zone_postscript_wrapper' => '1',
            'alpha_zone_postscript_force' => '',
            'alpha_zone_postscript_section' => 'content',
            'alpha_zone_postscript_weight' => '3',
            'alpha_zone_postscript_columns' => '12',
            'alpha_zone_postscript_primary' => '',
            'alpha_zone_postscript_css' => '',
            'alpha_zone_postscript_wrapper_css' => '',
            'alpha_zone_footer_equal_height_container' => '',
            'alpha_zone_footer_wrapper' => '1',
            'alpha_zone_footer_force' => '',
            'alpha_zone_footer_section' => 'footer',
            'alpha_zone_footer_weight' => '1',
            'alpha_zone_footer_columns' => '12',
            'alpha_zone_footer_primary' => '',
            'alpha_zone_footer_css' => '',
            'alpha_zone_footer_wrapper_css' => '',
            'alpha_region_dashboard_sidebar_equal_height_container' => '',
            'alpha_region_dashboard_sidebar_equal_height_element' => '',
            'alpha_region_dashboard_sidebar_force' => '',
            'alpha_region_dashboard_sidebar_zone' => '',
            'alpha_region_dashboard_sidebar_prefix' => '',
            'alpha_region_dashboard_sidebar_columns' => '1',
            'alpha_region_dashboard_sidebar_suffix' => '',
            'alpha_region_dashboard_sidebar_weight' => '-50',
            'alpha_region_dashboard_sidebar_css' => '',
            'alpha_region_dashboard_inactive_equal_height_container' => '',
            'alpha_region_dashboard_inactive_equal_height_element' => '',
            'alpha_region_dashboard_inactive_force' => '',
            'alpha_region_dashboard_inactive_zone' => '',
            'alpha_region_dashboard_inactive_prefix' => '',
            'alpha_region_dashboard_inactive_columns' => '1',
            'alpha_region_dashboard_inactive_suffix' => '',
            'alpha_region_dashboard_inactive_weight' => '-50',
            'alpha_region_dashboard_inactive_css' => '',
            'alpha_region_dashboard_main_equal_height_container' => '',
            'alpha_region_dashboard_main_equal_height_element' => '',
            'alpha_region_dashboard_main_force' => '',
            'alpha_region_dashboard_main_zone' => '',
            'alpha_region_dashboard_main_prefix' => '',
            'alpha_region_dashboard_main_columns' => '1',
            'alpha_region_dashboard_main_suffix' => '',
            'alpha_region_dashboard_main_weight' => '-50',
            'alpha_region_dashboard_main_css' => '',
            'alpha_region_user_first_equal_height_container' => '',
            'alpha_region_user_first_equal_height_element' => '',
            'alpha_region_user_first_force' => '',
            'alpha_region_user_first_zone' => 'user',
            'alpha_region_user_first_prefix' => '',
            'alpha_region_user_first_columns' => '8',
            'alpha_region_user_first_suffix' => '',
            'alpha_region_user_first_weight' => '1',
            'alpha_region_user_first_css' => '',
            'alpha_region_user_second_equal_height_container' => '',
            'alpha_region_user_second_equal_height_element' => '',
            'alpha_region_user_second_force' => '',
            'alpha_region_user_second_zone' => 'user',
            'alpha_region_user_second_prefix' => '',
            'alpha_region_user_second_columns' => '4',
            'alpha_region_user_second_suffix' => '',
            'alpha_region_user_second_weight' => '2',
            'alpha_region_user_second_css' => '',
            'alpha_region_branding_equal_height_container' => '',
            'alpha_region_branding_equal_height_element' => '',
            'alpha_region_branding_force' => '1',
            'alpha_region_branding_zone' => 'branding',
            'alpha_region_branding_prefix' => '',
            'alpha_region_branding_columns' => '12',
            'alpha_region_branding_suffix' => '',
            'alpha_region_branding_weight' => '1',
            'alpha_region_branding_css' => '',
            'alpha_region_menu_equal_height_container' => '',
            'alpha_region_menu_equal_height_element' => '',
            'alpha_region_menu_force' => '1',
            'alpha_region_menu_zone' => 'menu',
            'alpha_region_menu_prefix' => '',
            'alpha_region_menu_columns' => '12',
            'alpha_region_menu_suffix' => '',
            'alpha_region_menu_weight' => '1',
            'alpha_region_menu_css' => '',
            'alpha_region_header_first_equal_height_container' => '',
            'alpha_region_header_first_equal_height_element' => '',
            'alpha_region_header_first_force' => '',
            'alpha_region_header_first_zone' => 'header',
            'alpha_region_header_first_prefix' => '',
            'alpha_region_header_first_columns' => '6',
            'alpha_region_header_first_suffix' => '',
            'alpha_region_header_first_weight' => '1',
            'alpha_region_header_first_css' => '',
            'alpha_region_header_second_equal_height_container' => '',
            'alpha_region_header_second_equal_height_element' => '',
            'alpha_region_header_second_force' => '',
            'alpha_region_header_second_zone' => 'header',
            'alpha_region_header_second_prefix' => '',
            'alpha_region_header_second_columns' => '6',
            'alpha_region_header_second_suffix' => '',
            'alpha_region_header_second_weight' => '2',
            'alpha_region_header_second_css' => '',
            'alpha_region_preface_first_equal_height_container' => '',
            'alpha_region_preface_first_equal_height_element' => '',
            'alpha_region_preface_first_force' => '',
            'alpha_region_preface_first_zone' => 'preface',
            'alpha_region_preface_first_prefix' => '',
            'alpha_region_preface_first_columns' => '4',
            'alpha_region_preface_first_suffix' => '',
            'alpha_region_preface_first_weight' => '1',
            'alpha_region_preface_first_css' => '',
            'alpha_region_preface_second_equal_height_container' => '',
            'alpha_region_preface_second_equal_height_element' => '',
            'alpha_region_preface_second_force' => '',
            'alpha_region_preface_second_zone' => 'preface',
            'alpha_region_preface_second_prefix' => '',
            'alpha_region_preface_second_columns' => '4',
            'alpha_region_preface_second_suffix' => '',
            'alpha_region_preface_second_weight' => '2',
            'alpha_region_preface_second_css' => '',
            'alpha_region_preface_third_equal_height_container' => '',
            'alpha_region_preface_third_equal_height_element' => '',
            'alpha_region_preface_third_force' => '',
            'alpha_region_preface_third_zone' => 'preface',
            'alpha_region_preface_third_prefix' => '',
            'alpha_region_preface_third_columns' => '4',
            'alpha_region_preface_third_suffix' => '',
            'alpha_region_preface_third_weight' => '3',
            'alpha_region_preface_third_css' => '',
            'alpha_region_content_equal_height_container' => '',
            'alpha_region_content_equal_height_element' => '',
            'alpha_region_content_force' => '',
            'alpha_region_content_zone' => 'content',
            'alpha_region_content_prefix' => '',
            'alpha_region_content_columns' => '6',
            'alpha_region_content_suffix' => '',
            'alpha_region_content_weight' => '2',
            'alpha_region_content_css' => '',
            'alpha_region_sidebar_first_equal_height_container' => '',
            'alpha_region_sidebar_first_equal_height_element' => '',
            'alpha_region_sidebar_first_force' => '',
            'alpha_region_sidebar_first_zone' => 'content',
            'alpha_region_sidebar_first_prefix' => '',
            'alpha_region_sidebar_first_columns' => '3',
            'alpha_region_sidebar_first_suffix' => '',
            'alpha_region_sidebar_first_weight' => '1',
            'alpha_region_sidebar_first_css' => '',
            'alpha_region_sidebar_second_equal_height_container' => '',
            'alpha_region_sidebar_second_equal_height_element' => '',
            'alpha_region_sidebar_second_force' => '',
            'alpha_region_sidebar_second_zone' => 'content',
            'alpha_region_sidebar_second_prefix' => '',
            'alpha_region_sidebar_second_columns' => '3',
            'alpha_region_sidebar_second_suffix' => '',
            'alpha_region_sidebar_second_weight' => '3',
            'alpha_region_sidebar_second_css' => '',
            'alpha_region_postscript_first_equal_height_container' => '',
            'alpha_region_postscript_first_equal_height_element' => '',
            'alpha_region_postscript_first_force' => '',
            'alpha_region_postscript_first_zone' => 'postscript',
            'alpha_region_postscript_first_prefix' => '',
            'alpha_region_postscript_first_columns' => '3',
            'alpha_region_postscript_first_suffix' => '',
            'alpha_region_postscript_first_weight' => '1',
            'alpha_region_postscript_first_css' => '',
            'alpha_region_postscript_second_equal_height_container' => '',
            'alpha_region_postscript_second_equal_height_element' => '',
            'alpha_region_postscript_second_force' => '',
            'alpha_region_postscript_second_zone' => 'postscript',
            'alpha_region_postscript_second_prefix' => '',
            'alpha_region_postscript_second_columns' => '3',
            'alpha_region_postscript_second_suffix' => '',
            'alpha_region_postscript_second_weight' => '2',
            'alpha_region_postscript_second_css' => '',
            'alpha_region_postscript_third_equal_height_container' => '',
            'alpha_region_postscript_third_equal_height_element' => '',
            'alpha_region_postscript_third_force' => '',
            'alpha_region_postscript_third_zone' => 'postscript',
            'alpha_region_postscript_third_prefix' => '',
            'alpha_region_postscript_third_columns' => '3',
            'alpha_region_postscript_third_suffix' => '',
            'alpha_region_postscript_third_weight' => '3',
            'alpha_region_postscript_third_css' => '',
            'alpha_region_postscript_fourth_equal_height_container' => '',
            'alpha_region_postscript_fourth_equal_height_element' => '',
            'alpha_region_postscript_fourth_force' => '',
            'alpha_region_postscript_fourth_zone' => 'postscript',
            'alpha_region_postscript_fourth_prefix' => '',
            'alpha_region_postscript_fourth_columns' => '3',
            'alpha_region_postscript_fourth_suffix' => '',
            'alpha_region_postscript_fourth_weight' => '4',
            'alpha_region_postscript_fourth_css' => '',
            'alpha_region_footer_first_equal_height_container' => '',
            'alpha_region_footer_first_equal_height_element' => '',
            'alpha_region_footer_first_force' => '',
            'alpha_region_footer_first_zone' => 'footer',
            'alpha_region_footer_first_prefix' => '',
            'alpha_region_footer_first_columns' => '12',
            'alpha_region_footer_first_suffix' => '',
            'alpha_region_footer_first_weight' => '1',
            'alpha_region_footer_first_css' => '',
            'alpha_region_footer_second_equal_height_container' => '',
            'alpha_region_footer_second_equal_height_element' => '',
            'alpha_region_footer_second_force' => '',
            'alpha_region_footer_second_zone' => 'footer',
            'alpha_region_footer_second_prefix' => '',
            'alpha_region_footer_second_columns' => '12',
            'alpha_region_footer_second_suffix' => '',
            'alpha_region_footer_second_weight' => '2',
            'alpha_region_footer_second_css' => '',
          ),
          'project' => 'omega',
          'datestamp' => '1329681647',
        ),
        'project' => 'omega',
        'version' => '7.x-3.1',
      ),
      'alpha' => 
      array (
        'filename' => '/home/www/aegir/platforms/angel/drupal-7.39.0/sites/all/themes/omega/alpha/alpha.info',
        'basename' => 'alpha.info',
        'name' => 'Alpha',
        'info' => 
        array (
          'name' => 'Alpha',
          'description' => 'Alpha is the core basetheme for <a href="http://drupal.org/project/omega">Omega</a> and all its subthemes. It includes the most basic features of the Omega theme framework. This theme should not be used directly, instead you should create a subtheme based on one of the Omega or Alpha starterkits. Learn more about <a href="http://drupal.org/node/819170">Creating an Omega Subtheme</a> in the <a href="http://drupal.org/node/819164">Omega Handbook</a>.',
          'core' => '7.x',
          'engine' => 'phptemplate',
          'screenshot' => 'screenshot.png',
          'version' => '7.x-3.1',
          'regions' => 
          array (
            'page_top' => 'Page Top',
            'page_bottom' => 'Page Bottom',
            'content' => 'Content',
            'header' => 'Header',
            'footer' => 'Footer',
            'sidebar_first' => 'Sidebar First',
            'sidebar_second' => 'Sidebar Second',
          ),
          'zones' => 
          array (
            'content' => 'Content',
            'header' => 'Header',
            'footer' => 'Footer',
          ),
          'css' => 
          array (
            'alpha-reset.css' => 
            array (
              'name' => 'Reset',
              'description' => 'Created by <a href="http://meyerweb.com/eric/tools/css/reset/">Eric Meyer</a>.',
              'options' => 
              array (
                'weight' => '-20',
              ),
            ),
            'alpha-mobile.css' => 
            array (
              'name' => 'Mobile',
              'description' => 'Default stylesheet for mobile styles.',
              'options' => 
              array (
                'weight' => '-20',
              ),
            ),
            'alpha-alpha.css' => 
            array (
              'name' => 'Alpha',
              'description' => 'Default styles & resets for Alpha/Omega base theme.',
              'options' => 
              array (
                'weight' => '-20',
              ),
            ),
          ),
          'exclude' => 
          array (
            'misc/vertical-tabs.css' => 'This requires a description.',
            'modules/aggregator/aggregator.css' => 'This requires a description.',
            'modules/block/block.css' => 'This requires a description.',
            'modules/dblog/dblog.css' => 'This requires a description.',
            'modules/file/file.css' => 'This requires a description.',
            'modules/filter/filter.css' => 'This requires a description.',
            'modules/help/help.css' => 'This requires a description.',
            'modules/menu/menu.css' => 'This requires a description.',
            'modules/openid/openid.css' => 'This requires a description.',
            'modules/profile/profile.css' => 'This requires a description.',
            'modules/statistics/statistics.css' => 'This requires a description.',
            'modules/syslog/syslog.css' => 'This requires a description.',
            'modules/system/admin.css' => 'This requires a description.',
            'modules/system/maintenance.css' => 'This requires a description.',
            'modules/system/system.css' => 'This requires a description.',
            'modules/system/system.admin.css' => 'This requires a description.',
            'modules/system/system.base.css' => 'This requires a description.',
            'modules/system/system.maintenance.css' => 'This requires a description.',
            'modules/system/system.menus.css' => 'This requires a description.',
            'modules/system/system.messages.css' => 'This requires a description.',
            'modules/system/system.theme.css' => 'This requires a description.',
            'modules/taxonomy/taxonomy.css' => 'This requires a description.',
            'modules/tracker/tracker.css' => 'This requires a description.',
            'modules/update/update.css' => 'This requires a description.',
          ),
          'grids' => 
          array (
            'alpha_default' => 
            array (
              'name' => 'Default (960px)',
              'layouts' => 
              array (
                'fluid' => 'Fluid',
                'narrow' => 'Narrow',
                'normal' => 'Normal',
                'wide' => 'Wide',
              ),
              'columns' => 
              array (
                12 => '12 Columns',
                16 => '16 Columns',
                24 => '24 Columns',
              ),
            ),
            'alpha_fluid' => 
            array (
              'name' => 'Fluid',
              'layouts' => 
              array (
                'normal' => 'Normal',
              ),
              'columns' => 
              array (
                12 => '12 Columns',
                16 => '16 Columns',
                24 => '24 Columns',
              ),
            ),
          ),
          'settings' => 
          array (
            'alpha_grid' => 'alpha_default',
            'alpha_primary_alpha_default' => 'normal',
            'alpha_responsive' => '1',
            'alpha_layouts_alpha_fluid_primary' => 'normal',
            'alpha_layouts_alpha_fluid_normal_responsive' => '0',
            'alpha_layouts_alpha_fluid_normal_media' => 'all and (min-width: 740px) and (min-device-width: 740px), (max-device-width: 800px) and (min-width: 740px) and (orientation:landscape)',
            'alpha_layouts_alpha_default_primary' => 'normal',
            'alpha_layouts_alpha_default_fluid_responsive' => '0',
            'alpha_layouts_alpha_default_fluid_media' => 'all and (min-width: 740px) and (min-device-width: 740px), (max-device-width: 800px) and (min-width: 740px) and (orientation:landscape)',
            'alpha_layouts_alpha_default_fluid_weight' => '0',
            'alpha_layouts_alpha_default_narrow_responsive' => '1',
            'alpha_layouts_alpha_default_narrow_media' => 'all and (min-width: 740px) and (min-device-width: 740px), (max-device-width: 800px) and (min-width: 740px) and (orientation:landscape)',
            'alpha_layouts_alpha_default_narrow_weight' => '1',
            'alpha_layouts_alpha_default_normal_responsive' => '1',
            'alpha_layouts_alpha_default_normal_media' => 'all and (min-width: 980px) and (min-device-width: 980px), all and (max-device-width: 1024px) and (min-width: 1024px) and (orientation:landscape)',
            'alpha_layouts_alpha_default_normal_weight' => '2',
            'alpha_layouts_alpha_default_wide_responsive' => '1',
            'alpha_layouts_alpha_default_wide_media' => 'all and (min-width: 1220px)',
            'alpha_layouts_alpha_default_wide_weight' => '3',
            'alpha_viewport' => '1',
            'alpha_viewport_initial_scale' => '1',
            'alpha_viewport_min_scale' => '1',
            'alpha_viewport_max_scale' => '1',
            'alpha_viewport_user_scaleable' => '',
            'alpha_css' => 
            array (
              'alpha-reset.css' => 'alpha-reset.css',
              'alpha-alpha.css' => 'alpha-alpha.css',
              'alpha-mobile.css' => 'alpha-mobile.css',
            ),
            'alpha_debug_block_toggle' => '1',
            'alpha_debug_block_active' => '1',
            'alpha_debug_grid_toggle' => '1',
            'alpha_debug_grid_active' => '1',
            'alpha_debug_grid_roles' => 
            array (
              1 => '1',
              2 => '2',
              3 => '3',
            ),
            'alpha_toggle_messages' => '1',
            'alpha_toggle_action_links' => '1',
            'alpha_toggle_tabs' => '1',
            'alpha_toggle_breadcrumb' => '1',
            'alpha_toggle_page_title' => '1',
            'alpha_toggle_feed_icons' => '1',
            'alpha_hidden_title' => '',
            'alpha_hidden_site_name' => '',
            'alpha_hidden_site_slogan' => '',
            'alpha_zone_header_wrapper' => '',
            'alpha_zone_header_force' => '',
            'alpha_zone_header_section' => 'header',
            'alpha_zone_header_weight' => '',
            'alpha_zone_header_columns' => '12',
            'alpha_zone_header_primary' => '',
            'alpha_zone_header_css' => '',
            'alpha_zone_header_wrapper_css' => '',
            'alpha_zone_content_wrapper' => '',
            'alpha_zone_content_force' => '',
            'alpha_zone_content_section' => 'content',
            'alpha_zone_content_weight' => '',
            'alpha_zone_content_columns' => '12',
            'alpha_zone_content_primary' => '',
            'alpha_zone_content_css' => '',
            'alpha_zone_content_wrapper_css' => '',
            'alpha_zone_footer_wrapper' => '',
            'alpha_zone_footer_force' => '',
            'alpha_zone_footer_section' => 'footer',
            'alpha_zone_footer_weight' => '',
            'alpha_zone_footer_columns' => '12',
            'alpha_zone_footer_primary' => '',
            'alpha_zone_footer_css' => '',
            'alpha_zone_footer_wrapper_css' => '',
            'alpha_region_dashboard_inactive_force' => '',
            'alpha_region_dashboard_inactive_zone' => '',
            'alpha_region_dashboard_inactive_prefix' => '',
            'alpha_region_dashboard_inactive_columns' => '1',
            'alpha_region_dashboard_inactive_suffix' => '',
            'alpha_region_dashboard_inactive_weight' => '',
            'alpha_region_dashboard_inactive_css' => '',
            'alpha_region_dashboard_sidebar_force' => '',
            'alpha_region_dashboard_sidebar_zone' => '',
            'alpha_region_dashboard_sidebar_prefix' => '',
            'alpha_region_dashboard_sidebar_columns' => '1',
            'alpha_region_dashboard_sidebar_suffix' => '',
            'alpha_region_dashboard_sidebar_weight' => '',
            'alpha_region_dashboard_sidebar_css' => '',
            'alpha_region_dashboard_main_force' => '',
            'alpha_region_dashboard_main_zone' => '',
            'alpha_region_dashboard_main_prefix' => '',
            'alpha_region_dashboard_main_columns' => '1',
            'alpha_region_dashboard_main_suffix' => '',
            'alpha_region_dashboard_main_weight' => '',
            'alpha_region_dashboard_main_css' => '',
            'alpha_region_header_force' => '',
            'alpha_region_header_zone' => 'header',
            'alpha_region_header_prefix' => '',
            'alpha_region_header_columns' => '12',
            'alpha_region_header_suffix' => '',
            'alpha_region_header_weight' => '',
            'alpha_region_header_css' => '',
            'alpha_region_content_force' => '',
            'alpha_region_content_zone' => 'content',
            'alpha_region_content_prefix' => '',
            'alpha_region_content_columns' => '6',
            'alpha_region_content_suffix' => '',
            'alpha_region_content_weight' => '1',
            'alpha_region_content_css' => '',
            'alpha_region_sidebar_first_force' => '',
            'alpha_region_sidebar_first_zone' => 'content',
            'alpha_region_sidebar_first_prefix' => '',
            'alpha_region_sidebar_first_columns' => '3',
            'alpha_region_sidebar_first_suffix' => '',
            'alpha_region_sidebar_first_weight' => '2',
            'alpha_region_sidebar_first_css' => '',
            'alpha_region_sidebar_second_force' => '',
            'alpha_region_sidebar_second_zone' => 'content',
            'alpha_region_sidebar_second_prefix' => '',
            'alpha_region_sidebar_second_columns' => '3',
            'alpha_region_sidebar_second_suffix' => '',
            'alpha_region_sidebar_second_weight' => '3',
            'alpha_region_sidebar_second_css' => '',
            'alpha_region_footer_force' => '',
            'alpha_region_footer_zone' => 'footer',
            'alpha_region_footer_prefix' => '',
            'alpha_region_footer_columns' => '12',
            'alpha_region_footer_suffix' => '',
            'alpha_region_footer_weight' => '',
            'alpha_region_footer_css' => '',
          ),
          'project' => 'omega',
          'datestamp' => '1329681647',
        ),
        'project' => 'omega',
        'version' => '7.x-3.1',
      ),
    ),
  ),
  'profiles' => 
  array (
    'minimal' => 
    array (
      'modules' => 
      array (
      ),
      'themes' => 
      array (
      ),
    ),
    'standard' => 
    array (
      'modules' => 
      array (
      ),
      'themes' => 
      array (
      ),
    ),
  ),
);