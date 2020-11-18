---
title: "Search"
---

# Search

```php
$api->search->find($string)->results();
```

Search modification methods are:
```php
// The column to search on
$api->search->findColumn($column);

// the algorithm to use
$api->search->findAlgorithm($searchStringAlgorithm);

// the page to start on
$api->search->page($number);

// sorting order
$api->search->sort($field, $order);

// limit results
$api->search->limit($limit);

// columns in the results
$api->search->columns($columns);

// change elastics filter bool condition (eg: should, must, must_not)
$api->search->bool($bool);
```

Filters are additive, multiple can be added, eg:

```php
$api->search
    ->filter('LevelItem', 30, SearchFilters::GREATER_THAN)
    ->filter('ItemSearchCategory', 10, SearchFilters::GREATER_THAN_OR_EQUAL_TO);
```