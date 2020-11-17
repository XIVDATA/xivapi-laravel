---
layout: page
title: "XIVAPI"
permalink: /xivapi
order: 10
---

# Using Queries (excludes Search)

The API has a whole host of queries to allow you to customise the response, these are all passed to the API before you request data. Search has some extra queries that are hard coded as these interact with Elastic Search.

- `limit=250` - https://xivapi.com/docs/Content#limit
- `ids=1,4,8,20` - https://xivapi.com/docs/Content#ids
- `minify=1` - https://xivapi.com/docs/Content#minify
- `language=en` - https://xivapi.com/docs/Welcome#language
- `snake_case` - https://xivapi.com/docs/Welcome#snake_case
- `columns` - https://xivapi.com/docs/Welcome#columns
- `tags` - https://xivapi.com/docs/Welcome#tags