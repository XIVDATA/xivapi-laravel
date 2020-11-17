---
layout: page
title: "Content"
permalink: /content
---

# Content

Content is dynamically driven based on what content is available in the game files using magic methods for invoking the different types, eg:

- `item()`
- `instanceContent()`
- `tripleTriadCard()`

```php
$api->content->[contentName]()->list();
$api->content->[contentName]()->one($id);

// examples
$item = $api->content->item()->one(1675);
$action = $api->content->action()->one(127);
$instances = $api->content->instanceContent()->list();

// non dynamic methods:
$api->content->list();
$api->content->servers();
$api->content->serversByDataCenter();
```