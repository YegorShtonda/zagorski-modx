<?php  return array (
  'simplesearch.no_results' => 'There were no search results for the search "[[+query]]". Please try using more general terms to get more results.',
  'simplesearch.search' => 'Search',
  'simplesearch.results_found' => '[[+count]] Results found for "[[+text]]"',
  'simplesearch.result_pages' => 'Result pages:',
  'simplesearch.index_finished' => 'Finished indexing [[+total]] Resources.',
  'setting_simplesearch.driver_class' => 'Search Driver Class',
  'setting_simplesearch.driver_class_desc' => 'Change this to use a different search driver. SimpleSearch provides you with SimpleSearchDriverBasic and SimpleSearchDriverSolr (assuming you have a working Solr server).',
  'setting_simplesearch.driver_class_path' => 'Search Driver Class Path',
  'setting_simplesearch.driver_class_path_desc' => 'Optional. Set this to point to the absolute path where the search driver_class can be found. Leave blank to use the default driver directory.',
  'setting_simplesearch.driver_db_specific' => 'Search Driver Database Specificity',
  'setting_simplesearch.driver_db_specific_desc' => 'Set this to Yes if the search driver you are using uses derivative classes for different SQL drivers. (SQL searches will be Yes, Solr and other index-based searches will be No.)',
  'setting_simplesearch.autosuggest_tv' => 'Autosuggest Template Variable',
  'setting_simplesearch.autosuggest_tv_desc' => 'Provide the TV ID or name to use for generating a list of autosuggest search terms.',
);