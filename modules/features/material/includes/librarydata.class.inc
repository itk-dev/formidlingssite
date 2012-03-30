<?php

/**
 * @file
 * Feed parser for data feeds from globus data about team events. This feed
 * parser can be used by the feeds module.
 */

class LibrarydataParser extends FeedsParser {

  public function parse(FeedsSource $source, FeedsFetcherResult $fetcher_result) {

    // Load library helper functions.
    feeds_include_library('common_syndication_parser.inc', 'common_syndication_parser');

    // Parser data
    $items = array();
    $xml = new SimpleXMLElement($fetcher_result->getRaw());

    // Build result object.
    $result = new FeedsParserResult();
    $result->title = 'Librarydata';
    $result->description = 'Librarydata data';

    // Run through news items
    foreach ($xml->records->record as $record) {
      $item = array();
      
      $item['id'] = (string)$record->id;
      $item['keyno'] = (string)$record->keyno;
      $item['prio'] = ( (string)$record->prio == '1' ) ? 1 : 0;//boolean
      $item['dk5'] = (string)$record->dk5;
      $item['opcode'] = (string)$record->opcode;
      $item['dep'] = (string)$record->dep; // list text
      $item['title'] = (string)$record->title;
      $item['author'] = (string)$record->author;
      $item['mattype'] = (string)$record->mattype;
      $item['list'] = (string)$record->list;
      $item['category'] = (string)$record->category;
      $item['pubdate'] = _parser_common_syndication_parse_date((string)$record->pubdate); // dags dato
      $item['date'] = _parser_common_syndication_parse_date((string)$record->date); // dato
  
      // Add feed item
      $result->items[] = $item;
    }
  
    return $result;
  }

  public function getMappingSources() {
    return false;
    /*
    return array(
      'id' => array(
        'name' => t('Id'),
        'description' => t('Id.'),
      ),
      'title' => array(
        'name' => t('Title'),
        'description' => t('Title.'),
      ),
     
    ) + parent::getMappingSources();
    
    */
  }
}