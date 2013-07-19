<?php
/**
 * @file
 * material.views_default.inc
 */

/**
 * Implements hook_views_default_views().
 */
function material_views_default_views() {
  $export = array();

  $view = new view();
  $view->name = 'material';
  $view->description = '';
  $view->tag = 'default';
  $view->base_table = 'node';
  $view->human_name = 'Material';
  $view->core = 7;
  $view->api_version = '3.0';
  $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

  /* Display: Master */
  $handler = $view->new_display('default', 'Master', 'default');
  $handler->display->display_options['use_more_always'] = FALSE;
  $handler->display->display_options['access']['type'] = 'perm';
  $handler->display->display_options['cache']['type'] = 'none';
  $handler->display->display_options['query']['type'] = 'views_query';
  $handler->display->display_options['query']['options']['query_comment'] = FALSE;
  $handler->display->display_options['exposed_form']['type'] = 'basic';
  $handler->display->display_options['pager']['type'] = 'none';
  $handler->display->display_options['pager']['options']['offset'] = '0';
  $handler->display->display_options['style_plugin'] = 'table';
  $handler->display->display_options['style_options']['grouping'] = array(
    0 => array(
      'field' => 'field_category',
      'rendered' => 1,
      'rendered_strip' => 0,
    ),
  );
  $handler->display->display_options['style_options']['row_class'] = 'priority-[field_prio]';
  $handler->display->display_options['style_options']['columns'] = array(
    'field_category' => 'field_category',
    'field_prio' => 'field_prio',
    'field_dep' => 'field_dep',
    'field_date' => 'field_date',
    'field_opcode' => 'field_opcode',
    'field_author' => 'field_author',
    'title' => 'title',
    'field_keyno' => 'field_keyno',
    'field_list' => 'field_list',
    'nothing' => 'nothing',
  );
  $handler->display->display_options['style_options']['default'] = '-1';
  $handler->display->display_options['style_options']['info'] = array(
    'field_category' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'field_prio' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'field_dep' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'field_date' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'field_opcode' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'field_author' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'title' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'field_keyno' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'field_list' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'nothing' => array(
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
  );
  $handler->display->display_options['style_options']['override'] = FALSE;
  /* Field: Content: Category */
  $handler->display->display_options['fields']['field_category']['id'] = 'field_category';
  $handler->display->display_options['fields']['field_category']['table'] = 'field_data_field_category';
  $handler->display->display_options['fields']['field_category']['field'] = 'field_category';
  $handler->display->display_options['fields']['field_category']['label'] = '';
  $handler->display->display_options['fields']['field_category']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_category']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_category']['hide_alter_empty'] = FALSE;
  /* Field: Content: Prio */
  $handler->display->display_options['fields']['field_prio']['id'] = 'field_prio';
  $handler->display->display_options['fields']['field_prio']['table'] = 'field_data_field_prio';
  $handler->display->display_options['fields']['field_prio']['field'] = 'field_prio';
  $handler->display->display_options['fields']['field_prio']['label'] = '';
  $handler->display->display_options['fields']['field_prio']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_prio']['alter']['text'] = '[field_dep] [field_category] [field_prio]';
  $handler->display->display_options['fields']['field_prio']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_prio']['hide_alter_empty'] = FALSE;
  /* Field: Content: Dep */
  $handler->display->display_options['fields']['field_dep']['id'] = 'field_dep';
  $handler->display->display_options['fields']['field_dep']['table'] = 'field_data_field_dep';
  $handler->display->display_options['fields']['field_dep']['field'] = 'field_dep';
  $handler->display->display_options['fields']['field_dep']['label'] = '';
  $handler->display->display_options['fields']['field_dep']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_dep']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_dep']['hide_alter_empty'] = FALSE;
  /* Field: Content: Date */
  $handler->display->display_options['fields']['field_date']['id'] = 'field_date';
  $handler->display->display_options['fields']['field_date']['table'] = 'field_data_field_date';
  $handler->display->display_options['fields']['field_date']['field'] = 'field_date';
  $handler->display->display_options['fields']['field_date']['label'] = '';
  $handler->display->display_options['fields']['field_date']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_date']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_date']['hide_alter_empty'] = FALSE;
  $handler->display->display_options['fields']['field_date']['settings'] = array(
    'format_type' => 'week_year',
    'fromto' => 'both',
    'multiple_number' => '',
    'multiple_from' => '',
    'multiple_to' => '',
  );
  /* Field: Content: opcode */
  $handler->display->display_options['fields']['field_opcode']['id'] = 'field_opcode';
  $handler->display->display_options['fields']['field_opcode']['table'] = 'field_data_field_opcode';
  $handler->display->display_options['fields']['field_opcode']['field'] = 'field_opcode';
  $handler->display->display_options['fields']['field_opcode']['label'] = '#';
  $handler->display->display_options['fields']['field_opcode']['element_label_colon'] = FALSE;
  /* Field: Content: Author */
  $handler->display->display_options['fields']['field_author']['id'] = 'field_author';
  $handler->display->display_options['fields']['field_author']['table'] = 'field_data_field_author';
  $handler->display->display_options['fields']['field_author']['field'] = 'field_author';
  $handler->display->display_options['fields']['field_author']['label'] = 'Forfatter';
  $handler->display->display_options['fields']['field_author']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_author']['hide_alter_empty'] = FALSE;
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['label'] = 'Titel';
  $handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
  $handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
  $handler->display->display_options['fields']['title']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['title']['hide_alter_empty'] = FALSE;
  $handler->display->display_options['fields']['title']['link_to_node'] = FALSE;
  /* Field: Content: Keyno */
  $handler->display->display_options['fields']['field_keyno']['id'] = 'field_keyno';
  $handler->display->display_options['fields']['field_keyno']['table'] = 'field_data_field_keyno';
  $handler->display->display_options['fields']['field_keyno']['field'] = 'field_keyno';
  $handler->display->display_options['fields']['field_keyno']['label'] = '';
  $handler->display->display_options['fields']['field_keyno']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_keyno']['alter']['external'] = TRUE;
  $handler->display->display_options['fields']['field_keyno']['alter']['target'] = 'fullpost';
  $handler->display->display_options['fields']['field_keyno']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_keyno']['hide_alter_empty'] = FALSE;
  /* Field: Content: List */
  $handler->display->display_options['fields']['field_list']['id'] = 'field_list';
  $handler->display->display_options['fields']['field_list']['table'] = 'field_data_field_list';
  $handler->display->display_options['fields']['field_list']['field'] = 'field_list';
  $handler->display->display_options['fields']['field_list']['label'] = '';
  $handler->display->display_options['fields']['field_list']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_list']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_list']['hide_alter_empty'] = FALSE;
  /* Field: Global: Custom text */
  $handler->display->display_options['fields']['nothing']['id'] = 'nothing';
  $handler->display->display_options['fields']['nothing']['table'] = 'views';
  $handler->display->display_options['fields']['nothing']['field'] = 'nothing';
  $handler->display->display_options['fields']['nothing']['label'] = '';
  $handler->display->display_options['fields']['nothing']['alter']['text'] = '<a class="fullpost" href="http://www.aakb.dk/ting/object/775100%3A[field_keyno]" target="aakb">[field_keyno]</a> - <a class="netpunkt" href="#" rel="[field_keyno]-[field_list]">Læs</a>';
  $handler->display->display_options['fields']['nothing']['element_label_colon'] = FALSE;
  /* Sort criterion: Content: Category (field_category) */
  $handler->display->display_options['sorts']['field_category_value']['id'] = 'field_category_value';
  $handler->display->display_options['sorts']['field_category_value']['table'] = 'field_data_field_category';
  $handler->display->display_options['sorts']['field_category_value']['field'] = 'field_category_value';
  /* Sort criterion: Content: Prio (field_prio) */
  $handler->display->display_options['sorts']['field_prio_value']['id'] = 'field_prio_value';
  $handler->display->display_options['sorts']['field_prio_value']['table'] = 'field_data_field_prio';
  $handler->display->display_options['sorts']['field_prio_value']['field'] = 'field_prio_value';
  $handler->display->display_options['sorts']['field_prio_value']['order'] = 'DESC';
  /* Sort criterion: Content: Dep (field_dep) */
  $handler->display->display_options['sorts']['field_dep_value']['id'] = 'field_dep_value';
  $handler->display->display_options['sorts']['field_dep_value']['table'] = 'field_data_field_dep';
  $handler->display->display_options['sorts']['field_dep_value']['field'] = 'field_dep_value';
  $handler->display->display_options['sorts']['field_dep_value']['order'] = 'DESC';
  /* Sort criterion: Content: opcode (field_opcode) */
  $handler->display->display_options['sorts']['field_opcode_value']['id'] = 'field_opcode_value';
  $handler->display->display_options['sorts']['field_opcode_value']['table'] = 'field_data_field_opcode';
  $handler->display->display_options['sorts']['field_opcode_value']['field'] = 'field_opcode_value';
  /* Sort criterion: Content: Author (field_author) */
  $handler->display->display_options['sorts']['field_author_value']['id'] = 'field_author_value';
  $handler->display->display_options['sorts']['field_author_value']['table'] = 'field_data_field_author';
  $handler->display->display_options['sorts']['field_author_value']['field'] = 'field_author_value';
  /* Sort criterion: Content: Title */
  $handler->display->display_options['sorts']['title']['id'] = 'title';
  $handler->display->display_options['sorts']['title']['table'] = 'node';
  $handler->display->display_options['sorts']['title']['field'] = 'title';
  /* Filter criterion: Content: Date (field_date) */
  $handler->display->display_options['filters']['field_date_value']['id'] = 'field_date_value';
  $handler->display->display_options['filters']['field_date_value']['table'] = 'field_data_field_date';
  $handler->display->display_options['filters']['field_date_value']['field'] = 'field_date_value';
  $handler->display->display_options['filters']['field_date_value']['operator'] = 'between';
  $handler->display->display_options['filters']['field_date_value']['value']['value'] = '2011-12-15';
  $handler->display->display_options['filters']['field_date_value']['group'] = 0;
  $handler->display->display_options['filters']['field_date_value']['exposed'] = TRUE;
  $handler->display->display_options['filters']['field_date_value']['expose']['operator_id'] = 'field_date_value_op';
  $handler->display->display_options['filters']['field_date_value']['expose']['operator'] = 'field_date_value_op';
  $handler->display->display_options['filters']['field_date_value']['expose']['identifier'] = 'date';
  $handler->display->display_options['filters']['field_date_value']['form_type'] = 'date_popup';
  $handler->display->display_options['filters']['field_date_value']['default_date'] = '-1 month';
  $handler->display->display_options['filters']['field_date_value']['default_to_date'] = 'now';
  $handler->display->display_options['filters']['field_date_value']['year_range'] = '-1:+1';
  /* Filter criterion: Content: Dep (field_dep) */
  $handler->display->display_options['filters']['field_dep_value']['id'] = 'field_dep_value';
  $handler->display->display_options['filters']['field_dep_value']['table'] = 'field_data_field_dep';
  $handler->display->display_options['filters']['field_dep_value']['field'] = 'field_dep_value';
  $handler->display->display_options['filters']['field_dep_value']['group'] = 0;
  $handler->display->display_options['filters']['field_dep_value']['exposed'] = TRUE;
  $handler->display->display_options['filters']['field_dep_value']['expose']['operator_id'] = 'field_dep_value_op';
  $handler->display->display_options['filters']['field_dep_value']['expose']['label'] = 'Afd';
  $handler->display->display_options['filters']['field_dep_value']['expose']['operator'] = 'field_dep_value_op';
  $handler->display->display_options['filters']['field_dep_value']['expose']['identifier'] = 'dep';
  /* Filter criterion: Content: Category (field_category) */
  $handler->display->display_options['filters']['field_category_value']['id'] = 'field_category_value';
  $handler->display->display_options['filters']['field_category_value']['table'] = 'field_data_field_category';
  $handler->display->display_options['filters']['field_category_value']['field'] = 'field_category_value';
  $handler->display->display_options['filters']['field_category_value']['operator'] = '!=';
  $handler->display->display_options['filters']['field_category_value']['value'] = '-';

  /* Display: Page */
  $handler = $view->new_display('page', 'Page', 'page');
  $handler->display->display_options['path'] = 'material';
  $export['material'] = $view;

  return $export;
}
