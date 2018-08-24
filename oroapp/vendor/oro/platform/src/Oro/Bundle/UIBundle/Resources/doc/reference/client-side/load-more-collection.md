## LoadMoreCollection

<a name="module_LoadMoreCollection"></a>

Collection with "load more" functionality support. Any add/remove actions will be considered like already done
on the server and collection will update `state.totalItemsQuantity` and `route.limit`

Requires API route which accepts `limit` query parameter

**Augment**: RoutingCollection  

* [LoadMoreCollection](#module_LoadMoreCollection)
  * [.parse()](#module_LoadMoreCollection#parse)
  * [.loadMore()](#module_LoadMoreCollection#loadMore) ⇒ `$.Promise`
  * [._onAdd()](#module_LoadMoreCollection#_onAdd)
  * [._onRemove()](#module_LoadMoreCollection#_onRemove)

<a name="module_LoadMoreCollection#parse"></a>
### loadMoreCollection.parse()
**Kind**: instance method of [LoadMoreCollection](#module_LoadMoreCollection)  
<a name="module_LoadMoreCollection#loadMore"></a>
### loadMoreCollection.loadMore() ⇒ `$.Promise`
Loads additional state.loadMoreItemsQuantity items to this collection

**Kind**: instance method of [LoadMoreCollection](#module_LoadMoreCollection)  
**Returns**: `$.Promise` - promise  
<a name="module_LoadMoreCollection#_onAdd"></a>
### loadMoreCollection._onAdd()
**Kind**: instance method of [LoadMoreCollection](#module_LoadMoreCollection)  
<a name="module_LoadMoreCollection#_onRemove"></a>
### loadMoreCollection._onRemove()
**Kind**: instance method of [LoadMoreCollection](#module_LoadMoreCollection)  
