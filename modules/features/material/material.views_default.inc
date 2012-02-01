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

  $view = new view;
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
  $handler->display->display_options['title'] = 'Material';
  $handler->display->display_options['access']['type'] = 'perm';
  $handler->display->display_options['cache']['type'] = 'none';
  $handler->display->display_options['query']['type'] = 'views_query';
  $handler->display->display_options['query']['options']['query_comment'] = FALSE;
  $handler->display->display_options['exposed_form']['type'] = 'basic';
  $handler->display->display_options['pager']['type'] = 'none';
  $handler->display->display_options['pager']['options']['offset'] = '0';
  $handler->display->display_options['style_plugin'] = 'list';
  $handler->display->display_options['style_options']['grouping'] = 'field_category';
  $handler->display->display_options['style_options']['group_rendered'] = 1;
  $handler->display->display_options['style_options']['row_class'] = 'priority-[field_prio]';
  $handler->display->display_options['style_options']['wrapper_class'] = 'category-section';
  $handler->display->display_options['row_plugin'] = 'fields';
  $handler->display->display_options['row_options']['inline'] = array(
    'field_date' => 'field_date',
    'field_dk5' => 'field_dk5',
    'title' => 'title',
    'field_author' => 'field_author',
    'field_keyno' => 'field_keyno',
    'nothing' => 'nothing',
  );
  $handler->display->display_options['row_options']['separator'] = '-';
  $handler->display->display_options['row_options']['hide_empty'] = 1;
  $handler->display->display_options['row_options']['default_field_elements'] = 1;
  /* Field: Content: Category */
  $handler->display->display_options['fields']['field_category']['id'] = 'field_category';
  $handler->display->display_options['fields']['field_category']['table'] = 'field_data_field_category';
  $handler->display->display_options['fields']['field_category']['field'] = 'field_category';
  $handler->display->display_options['fields']['field_category']['label'] = '';
  $handler->display->display_options['fields']['field_category']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_category']['alter']['alter_text'] = 0;
  $handler->display->display_options['fields']['field_category']['alter']['make_link'] = 0;
  $handler->display->display_options['fields']['field_category']['alter']['absolute'] = 0;
  $handler->display->display_options['fields']['field_category']['alter']['external'] = 0;
  $handler->display->display_options['fields']['field_category']['alter']['replace_spaces'] = 0;
  $handler->display->display_options['fields']['field_category']['alter']['trim_whitespace'] = 0;
  $handler->display->display_options['fields']['field_category']['alter']['nl2br'] = 0;
  $handler->display->display_options['fields']['field_category']['alter']['word_boundary'] = 1;
  $handler->display->display_options['fields']['field_category']['alter']['ellipsis'] = 1;
  $handler->display->display_options['fields']['field_category']['alter']['strip_tags'] = 0;
  $handler->display->display_options['fields']['field_category']['alter']['trim'] = 0;
  $handler->display->display_options['fields']['field_category']['alter']['html'] = 0;
  $handler->display->display_options['fields']['field_category']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_category']['element_default_classes'] = 1;
  $handler->display->display_options['fields']['field_category']['hide_empty'] = 0;
  $handler->display->display_options['fields']['field_category']['empty_zero'] = 0;
  $handler->display->display_options['fields']['field_category']['hide_alter_empty'] = 0;
  $handler->display->display_options['fields']['field_category']['field_api_classes'] = 0;
  /* Field: Content: Date */
  $handler->display->display_options['fields']['field_date']['id'] = 'field_date';
  $handler->display->display_options['fields']['field_date']['table'] = 'field_data_field_date';
  $handler->display->display_options['fields']['field_date']['field'] = 'field_date';
  $handler->display->display_options['fields']['field_date']['label'] = '';
  $handler->display->display_options['fields']['field_date']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_date']['alter']['alter_text'] = 0;
  $handler->display->display_options['fields']['field_date']['alter']['make_link'] = 0;
  $handler->display->display_options['fields']['field_date']['alter']['absolute'] = 0;
  $handler->display->display_options['fields']['field_date']['alter']['external'] = 0;
  $handler->display->display_options['fields']['field_date']['alter']['replace_spaces'] = 0;
  $handler->display->display_options['fields']['field_date']['alter']['trim_whitespace'] = 0;
  $handler->display->display_options['fields']['field_date']['alter']['nl2br'] = 0;
  $handler->display->display_options['fields']['field_date']['alter']['word_boundary'] = 1;
  $handler->display->display_options['fields']['field_date']['alter']['ellipsis'] = 1;
  $handler->display->display_options['fields']['field_date']['alter']['strip_tags'] = 0;
  $handler->display->display_options['fields']['field_date']['alter']['trim'] = 0;
  $handler->display->display_options['fields']['field_date']['alter']['html'] = 0;
  $handler->display->display_options['fields']['field_date']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_date']['element_default_classes'] = 1;
  $handler->display->display_options['fields']['field_date']['hide_empty'] = 0;
  $handler->display->display_options['fields']['field_date']['empty_zero'] = 0;
  $handler->display->display_options['fields']['field_date']['hide_alter_empty'] = 0;
  $handler->display->display_options['fields']['field_date']['settings'] = array(
    'format_type' => 'week_year',
    'fromto' => 'both',
    'multiple_number' => '',
    'multiple_from' => '',
    'multiple_to' => '',
  );
  $handler->display->display_options['fields']['field_date']['field_api_classes'] = 0;
  /* Field: Content: Prio */
  $handler->display->display_options['fields']['field_prio']['id'] = 'field_prio';
  $handler->display->display_options['fields']['field_prio']['table'] = 'field_data_field_prio';
  $handler->display->display_options['fields']['field_prio']['field'] = 'field_prio';
  $handler->display->display_options['fields']['field_prio']['label'] = '';
  $handler->display->display_options['fields']['field_prio']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_prio']['alter']['alter_text'] = 0;
  $handler->display->display_options['fields']['field_prio']['alter']['text'] = '[field_dep] [field_category] [field_prio]';
  $handler->display->display_options['fields']['field_prio']['alter']['make_link'] = 0;
  $handler->display->display_options['fields']['field_prio']['alter']['absolute'] = 0;
  $handler->display->display_options['fields']['field_prio']['alter']['external'] = 0;
  $handler->display->display_options['fields']['field_prio']['alter']['replace_spaces'] = 0;
  $handler->display->display_options['fields']['field_prio']['alter']['trim_whitespace'] = 0;
  $handler->display->display_options['fields']['field_prio']['alter']['nl2br'] = 0;
  $handler->display->display_options['fields']['field_prio']['alter']['word_boundary'] = 1;
  $handler->display->display_options['fields']['field_prio']['alter']['ellipsis'] = 1;
  $handler->display->display_options['fields']['field_prio']['alter']['strip_tags'] = 0;
  $handler->display->display_options['fields']['field_prio']['alter']['trim'] = 0;
  $handler->display->display_options['fields']['field_prio']['alter']['html'] = 0;
  $handler->display->display_options['fields']['field_prio']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_prio']['element_default_classes'] = 1;
  $handler->display->display_options['fields']['field_prio']['hide_empty'] = 0;
  $handler->display->display_options['fields']['field_prio']['empty_zero'] = 0;
  $handler->display->display_options['fields']['field_prio']['hide_alter_empty'] = 0;
  $handler->display->display_options['fields']['field_prio']['field_api_classes'] = 0;
  /* Field: Content: dk5 */
  $handler->display->display_options['fields']['field_dk5']['id'] = 'field_dk5';
  $handler->display->display_options['fields']['field_dk5']['table'] = 'field_data_field_dk5';
  $handler->display->display_options['fields']['field_dk5']['field'] = 'field_dk5';
  $handler->display->display_options['fields']['field_dk5']['label'] = '';
  $handler->display->display_options['fields']['field_dk5']['alter']['alter_text'] = 0;
  $handler->display->display_options['fields']['field_dk5']['alter']['make_link'] = 0;
  $handler->display->display_options['fields']['field_dk5']['alter']['absolute'] = 0;
  $handler->display->display_options['fields']['field_dk5']['alter']['external'] = 0;
  $handler->display->display_options['fields']['field_dk5']['alter']['replace_spaces'] = 0;
  $handler->display->display_options['fields']['field_dk5']['alter']['trim_whitespace'] = 0;
  $handler->display->display_options['fields']['field_dk5']['alter']['nl2br'] = 0;
  $handler->display->display_options['fields']['field_dk5']['alter']['word_boundary'] = 1;
  $handler->display->display_options['fields']['field_dk5']['alter']['ellipsis'] = 1;
  $handler->display->display_options['fields']['field_dk5']['alter']['strip_tags'] = 0;
  $handler->display->display_options['fields']['field_dk5']['alter']['trim'] = 0;
  $handler->display->display_options['fields']['field_dk5']['alter']['html'] = 0;
  $handler->display->display_options['fields']['field_dk5']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_dk5']['element_default_classes'] = 1;
  $handler->display->display_options['fields']['field_dk5']['hide_empty'] = 0;
  $handler->display->display_options['fields']['field_dk5']['empty_zero'] = 0;
  $handler->display->display_options['fields']['field_dk5']['hide_alter_empty'] = 0;
  $handler->display->display_options['fields']['field_dk5']['field_api_classes'] = 0;
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['label'] = '';
  $handler->display->display_options['fields']['title']['alter']['alter_text'] = 0;
  $handler->display->display_options['fields']['title']['alter']['make_link'] = 0;
  $handler->display->display_options['fields']['title']['alter']['absolute'] = 0;
  $handler->display->display_options['fields']['title']['alter']['external'] = 0;
  $handler->display->display_options['fields']['title']['alter']['replace_spaces'] = 0;
  $handler->display->display_options['fields']['title']['alter']['trim_whitespace'] = 0;
  $handler->display->display_options['fields']['title']['alter']['nl2br'] = 0;
  $handler->display->display_options['fields']['title']['alter']['word_boundary'] = 0;
  $handler->display->display_options['fields']['title']['alter']['ellipsis'] = 0;
  $handler->display->display_options['fields']['title']['alter']['strip_tags'] = 0;
  $handler->display->display_options['fields']['title']['alter']['trim'] = 0;
  $handler->display->display_options['fields']['title']['alter']['html'] = 0;
  $handler->display->display_options['fields']['title']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['title']['element_default_classes'] = 1;
  $handler->display->display_options['fields']['title']['hide_empty'] = 0;
  $handler->display->display_options['fields']['title']['empty_zero'] = 0;
  $handler->display->display_options['fields']['title']['hide_alter_empty'] = 0;
  $handler->display->display_options['fields']['title']['link_to_node'] = 0;
  /* Field: Content: Author */
  $handler->display->display_options['fields']['field_author']['id'] = 'field_author';
  $handler->display->display_options['fields']['field_author']['table'] = 'field_data_field_author';
  $handler->display->display_options['fields']['field_author']['field'] = 'field_author';
  $handler->display->display_options['fields']['field_author']['label'] = '';
  $handler->display->display_options['fields']['field_author']['alter']['alter_text'] = 0;
  $handler->display->display_options['fields']['field_author']['alter']['make_link'] = 0;
  $handler->display->display_options['fields']['field_author']['alter']['absolute'] = 0;
  $handler->display->display_options['fields']['field_author']['alter']['external'] = 0;
  $handler->display->display_options['fields']['field_author']['alter']['replace_spaces'] = 0;
  $handler->display->display_options['fields']['field_author']['alter']['trim_whitespace'] = 0;
  $handler->display->display_options['fields']['field_author']['alter']['nl2br'] = 0;
  $handler->display->display_options['fields']['field_author']['alter']['word_boundary'] = 1;
  $handler->display->display_options['fields']['field_author']['alter']['ellipsis'] = 1;
  $handler->display->display_options['fields']['field_author']['alter']['strip_tags'] = 0;
  $handler->display->display_options['fields']['field_author']['alter']['trim'] = 0;
  $handler->display->display_options['fields']['field_author']['alter']['html'] = 0;
  $handler->display->display_options['fields']['field_author']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_author']['element_default_classes'] = 1;
  $handler->display->display_options['fields']['field_author']['hide_empty'] = 0;
  $handler->display->display_options['fields']['field_author']['empty_zero'] = 0;
  $handler->display->display_options['fields']['field_author']['hide_alter_empty'] = 0;
  $handler->display->display_options['fields']['field_author']['field_api_classes'] = 0;
  /* Field: Content: Keyno */
  $handler->display->display_options['fields']['field_keyno']['id'] = 'field_keyno';
  $handler->display->display_options['fields']['field_keyno']['table'] = 'field_data_field_keyno';
  $handler->display->display_options['fields']['field_keyno']['field'] = 'field_keyno';
  $handler->display->display_options['fields']['field_keyno']['label'] = '';
  $handler->display->display_options['fields']['field_keyno']['alter']['alter_text'] = 0;
  $handler->display->display_options['fields']['field_keyno']['alter']['make_link'] = 0;
  $handler->display->display_options['fields']['field_keyno']['alter']['absolute'] = 0;
  $handler->display->display_options['fields']['field_keyno']['alter']['external'] = 0;
  $handler->display->display_options['fields']['field_keyno']['alter']['replace_spaces'] = 0;
  $handler->display->display_options['fields']['field_keyno']['alter']['trim_whitespace'] = 0;
  $handler->display->display_options['fields']['field_keyno']['alter']['nl2br'] = 0;
  $handler->display->display_options['fields']['field_keyno']['alter']['word_boundary'] = 1;
  $handler->display->display_options['fields']['field_keyno']['alter']['ellipsis'] = 1;
  $handler->display->display_options['fields']['field_keyno']['alter']['strip_tags'] = 0;
  $handler->display->display_options['fields']['field_keyno']['alter']['trim'] = 0;
  $handler->display->display_options['fields']['field_keyno']['alter']['html'] = 0;
  $handler->display->display_options['fields']['field_keyno']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_keyno']['element_default_classes'] = 1;
  $handler->display->display_options['fields']['field_keyno']['hide_empty'] = 0;
  $handler->display->display_options['fields']['field_keyno']['empty_zero'] = 0;
  $handler->display->display_options['fields']['field_keyno']['hide_alter_empty'] = 0;
  $handler->display->display_options['fields']['field_keyno']['field_api_classes'] = 0;
  /* Field: Content: Dep */
  $handler->display->display_options['fields']['field_dep']['id'] = 'field_dep';
  $handler->display->display_options['fields']['field_dep']['table'] = 'field_data_field_dep';
  $handler->display->display_options['fields']['field_dep']['field'] = 'field_dep';
  $handler->display->display_options['fields']['field_dep']['label'] = '';
  $handler->display->display_options['fields']['field_dep']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_dep']['alter']['alter_text'] = 0;
  $handler->display->display_options['fields']['field_dep']['alter']['make_link'] = 0;
  $handler->display->display_options['fields']['field_dep']['alter']['absolute'] = 0;
  $handler->display->display_options['fields']['field_dep']['alter']['external'] = 0;
  $handler->display->display_options['fields']['field_dep']['alter']['replace_spaces'] = 0;
  $handler->display->display_options['fields']['field_dep']['alter']['trim_whitespace'] = 0;
  $handler->display->display_options['fields']['field_dep']['alter']['nl2br'] = 0;
  $handler->display->display_options['fields']['field_dep']['alter']['word_boundary'] = 1;
  $handler->display->display_options['fields']['field_dep']['alter']['ellipsis'] = 1;
  $handler->display->display_options['fields']['field_dep']['alter']['strip_tags'] = 0;
  $handler->display->display_options['fields']['field_dep']['alter']['trim'] = 0;
  $handler->display->display_options['fields']['field_dep']['alter']['html'] = 0;
  $handler->display->display_options['fields']['field_dep']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_dep']['element_default_classes'] = 1;
  $handler->display->display_options['fields']['field_dep']['hide_empty'] = 0;
  $handler->display->display_options['fields']['field_dep']['empty_zero'] = 0;
  $handler->display->display_options['fields']['field_dep']['hide_alter_empty'] = 0;
  $handler->display->display_options['fields']['field_dep']['field_api_classes'] = 0;
  /* Field: Content: List */
  $handler->display->display_options['fields']['field_list']['id'] = 'field_list';
  $handler->display->display_options['fields']['field_list']['table'] = 'field_data_field_list';
  $handler->display->display_options['fields']['field_list']['field'] = 'field_list';
  $handler->display->display_options['fields']['field_list']['label'] = '';
  $handler->display->display_options['fields']['field_list']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_list']['alter']['alter_text'] = 0;
  $handler->display->display_options['fields']['field_list']['alter']['make_link'] = 0;
  $handler->display->display_options['fields']['field_list']['alter']['absolute'] = 0;
  $handler->display->display_options['fields']['field_list']['alter']['external'] = 0;
  $handler->display->display_options['fields']['field_list']['alter']['replace_spaces'] = 0;
  $handler->display->display_options['fields']['field_list']['alter']['trim_whitespace'] = 0;
  $handler->display->display_options['fields']['field_list']['alter']['nl2br'] = 0;
  $handler->display->display_options['fields']['field_list']['alter']['word_boundary'] = 1;
  $handler->display->display_options['fields']['field_list']['alter']['ellipsis'] = 1;
  $handler->display->display_options['fields']['field_list']['alter']['strip_tags'] = 0;
  $handler->display->display_options['fields']['field_list']['alter']['trim'] = 0;
  $handler->display->display_options['fields']['field_list']['alter']['html'] = 0;
  $handler->display->display_options['fields']['field_list']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_list']['element_default_classes'] = 1;
  $handler->display->display_options['fields']['field_list']['hide_empty'] = 0;
  $handler->display->display_options['fields']['field_list']['empty_zero'] = 0;
  $handler->display->display_options['fields']['field_list']['hide_alter_empty'] = 0;
  $handler->display->display_options['fields']['field_list']['field_api_classes'] = 0;
  /* Field: Global: Custom text */
  $handler->display->display_options['fields']['nothing']['id'] = 'nothing';
  $handler->display->display_options['fields']['nothing']['table'] = 'views';
  $handler->display->display_options['fields']['nothing']['field'] = 'nothing';
  $handler->display->display_options['fields']['nothing']['label'] = '';
  $handler->display->display_options['fields']['nothing']['alter']['text'] = '<a class="netpunkt" href="#" rel="[field_keyno]-[field_list]">Læs</a>';
  $handler->display->display_options['fields']['nothing']['alter']['make_link'] = 0;
  $handler->display->display_options['fields']['nothing']['alter']['absolute'] = 0;
  $handler->display->display_options['fields']['nothing']['alter']['external'] = 0;
  $handler->display->display_options['fields']['nothing']['alter']['replace_spaces'] = 0;
  $handler->display->display_options['fields']['nothing']['alter']['trim_whitespace'] = 0;
  $handler->display->display_options['fields']['nothing']['alter']['nl2br'] = 0;
  $handler->display->display_options['fields']['nothing']['alter']['word_boundary'] = 1;
  $handler->display->display_options['fields']['nothing']['alter']['ellipsis'] = 1;
  $handler->display->display_options['fields']['nothing']['alter']['strip_tags'] = 0;
  $handler->display->display_options['fields']['nothing']['alter']['trim'] = 0;
  $handler->display->display_options['fields']['nothing']['alter']['html'] = 0;
  $handler->display->display_options['fields']['nothing']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['nothing']['element_default_classes'] = 1;
  $handler->display->display_options['fields']['nothing']['hide_empty'] = 0;
  $handler->display->display_options['fields']['nothing']['empty_zero'] = 0;
  $handler->display->display_options['fields']['nothing']['hide_alter_empty'] = 0;
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
  /* Sort criterion: Content: Date (field_date) */
  $handler->display->display_options['sorts']['field_date_value']['id'] = 'field_date_value';
  $handler->display->display_options['sorts']['field_date_value']['table'] = 'field_data_field_date';
  $handler->display->display_options['sorts']['field_date_value']['field'] = 'field_date_value';
  $handler->display->display_options['sorts']['field_date_value']['order'] = 'DESC';
  /* Filter criterion: Content: Date (field_date) */
  $handler->display->display_options['filters']['field_date_value']['id'] = 'field_date_value';
  $handler->display->display_options['filters']['field_date_value']['table'] = 'field_data_field_date';
  $handler->display->display_options['filters']['field_date_value']['field'] = 'field_date_value';
  $handler->display->display_options['filters']['field_date_value']['operator'] = 'between';
  $handler->display->display_options['filters']['field_date_value']['value']['value'] = '2011-12-15';
  $handler->display->display_options['filters']['field_date_value']['exposed'] = TRUE;
  $handler->display->display_options['filters']['field_date_value']['expose']['operator_id'] = 'field_date_value_op';
  $handler->display->display_options['filters']['field_date_value']['expose']['operator'] = 'field_date_value_op';
  $handler->display->display_options['filters']['field_date_value']['expose']['identifier'] = 'date';
  $handler->display->display_options['filters']['field_date_value']['expose']['multiple'] = FALSE;
  $handler->display->display_options['filters']['field_date_value']['form_type'] = 'date_popup';
  $handler->display->display_options['filters']['field_date_value']['default_date'] = '-2 week';
  $handler->display->display_options['filters']['field_date_value']['default_to_date'] = 'now';
  $handler->display->display_options['filters']['field_date_value']['year_range'] = '-1:+1';
  /* Filter criterion: Content: Dep (field_dep) */
  $handler->display->display_options['filters']['field_dep_value']['id'] = 'field_dep_value';
  $handler->display->display_options['filters']['field_dep_value']['table'] = 'field_data_field_dep';
  $handler->display->display_options['filters']['field_dep_value']['field'] = 'field_dep_value';
  $handler->display->display_options['filters']['field_dep_value']['exposed'] = TRUE;
  $handler->display->display_options['filters']['field_dep_value']['expose']['operator_id'] = 'field_dep_value_op';
  $handler->display->display_options['filters']['field_dep_value']['expose']['label'] = 'Afd';
  $handler->display->display_options['filters']['field_dep_value']['expose']['operator'] = 'field_dep_value_op';
  $handler->display->display_options['filters']['field_dep_value']['expose']['identifier'] = 'dep';
  $handler->display->display_options['filters']['field_dep_value']['expose']['reduce'] = 0;
  /* Filter criterion: Content: Prio (field_prio) */
  $handler->display->display_options['filters']['field_prio_value']['id'] = 'field_prio_value';
  $handler->display->display_options['filters']['field_prio_value']['table'] = 'field_data_field_prio';
  $handler->display->display_options['filters']['field_prio_value']['field'] = 'field_prio_value';
  $handler->display->display_options['filters']['field_prio_value']['exposed'] = TRUE;
  $handler->display->display_options['filters']['field_prio_value']['expose']['operator_id'] = 'field_prio_value_op';
  $handler->display->display_options['filters']['field_prio_value']['expose']['label'] = 'Priority';
  $handler->display->display_options['filters']['field_prio_value']['expose']['operator'] = 'field_prio_value_op';
  $handler->display->display_options['filters']['field_prio_value']['expose']['identifier'] = 'prio';
  $handler->display->display_options['filters']['field_prio_value']['expose']['reduce'] = 0;

  /* Display: Page */
  $handler = $view->new_display('page', 'Page', 'page');
  $handler->display->display_options['path'] = 'material';
  $export['material'] = $view;

  return $export;
}
