<?php
/**
 * @file
 * material.feeds_importer_default.inc
 */

/**
 * Implements hook_feeds_importer_default().
 */
function material_feeds_importer_default() {
  $export = array();

  $feeds_importer = new stdClass;
  $feeds_importer->disabled = FALSE; /* Edit this to true to make a default feeds_importer disabled initially */
  $feeds_importer->api_version = 1;
  $feeds_importer->id = 'bibdata';
  $feeds_importer->config = array(
    'name' => 'Bibdata',
    'description' => 'Data fra bibliotekssystemet',
    'fetcher' => array(
      'plugin_key' => 'FeedsHTTPFetcher',
      'config' => array(
        'auto_detect_feeds' => 0,
        'use_pubsubhubbub' => 0,
        'designated_hub' => '',
      ),
    ),
    'parser' => array(
      'plugin_key' => 'LibrarydataParser',
      'config' => array(),
    ),
    'processor' => array(
      'plugin_key' => 'FeedsNodeProcessor',
      'config' => array(
        'content_type' => 'material',
        'expire' => '43200',
        'author' => '1',
        'mappings' => array(
          0 => array(
            'source' => 'title',
            'target' => 'title',
            'unique' => FALSE,
          ),
          1 => array(
            'source' => 'dk5',
            'target' => 'field_dk5',
            'unique' => FALSE,
          ),
          2 => array(
            'source' => 'author',
            'target' => 'field_author',
            'unique' => FALSE,
          ),
          3 => array(
            'source' => 'category',
            'target' => 'field_category',
            'unique' => FALSE,
          ),
          4 => array(
            'source' => 'list',
            'target' => 'field_list',
            'unique' => FALSE,
          ),
          5 => array(
            'source' => 'mattype',
            'target' => 'field_mattype',
            'unique' => FALSE,
          ),
          6 => array(
            'source' => 'keyno',
            'target' => 'field_keyno',
            'unique' => FALSE,
          ),
          7 => array(
            'source' => 'dep',
            'target' => 'field_dep',
            'unique' => FALSE,
          ),
          8 => array(
            'source' => 'prio',
            'target' => 'field_prio',
            'unique' => FALSE,
          ),
          9 => array(
            'source' => 'date',
            'target' => 'field_date:start',
            'unique' => FALSE,
          ),
          10 => array(
            'source' => 'id',
            'target' => 'guid',
            'unique' => 1,
          ),
          11 => array(
            'source' => 'pubdate',
            'target' => 'created',
            'unique' => FALSE,
          ),
          12 => array(
            'source' => 'opcode',
            'target' => 'field_opcode',
            'unique' => FALSE,
          ),
        ),
        'update_existing' => '1',
        'input_format' => 'plain_text',
      ),
    ),
    'content_type' => '',
    'update' => 0,
    'import_period' => '43200',
    'expire_period' => 3600,
    'import_on_create' => 1,
    'process_in_background' => 0,
  );
  $export['bibdata'] = $feeds_importer;

  return $export;
}
