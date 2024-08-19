<?php
/* Smarty version 5.4.0, created on 2024-08-19 15:56:58
  from 'file:php-content.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.0',
  'unifunc' => 'content_66c36b4a5979a9_23010661',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eac523513753be7b28fa95c897579514e8132567' => 
    array (
      0 => 'php-content.tpl',
      1 => 1724083014,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66c36b4a5979a9_23010661 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\apache\\htdocs\\demo-site\\templates';
?><section class="header-image"><img id="php-img" src="graphics/php.png" alt="php logo"></section>
<section class="documentation-source">Documentation: <a href="https://www.php.net/docs.php">https://www.php.net/docs.php</a></section>
<section><p>PHP stands for PHP Hypertext Preprocessor (used to be Personal Home Page) and is a very aged scripting language used on the back-end to create web applications. It can form a conditional response to a request by hooking into apache and display unique content to the user depending on what their request is and what they are trying to do. It can seperate large pages into different files making managing your website easier. PHP has been around forever and has many developers as well as a community around it to help you do just about anything you need to do web related (and often times non-web related as well).</p></section><br>
<section id="PHP-builtins" class="example-content">
    <h1>PHP Built-In Functions</h1><!-- the following code was stolen from official PHP Documentation and needs to be re-linked, also it is incomplete -->
    <ul class='gen-index index-for-refentry'><li class='gen-index index-for-a'>a<ul id='refentry-index-for-a'>
        <li><a href="function.abs.php" class="index">abs</a> - Absolute value</li>
        <li><a href="function.acos.php" class="index">acos</a> - Arc cosine</li>
        <li><a href="function.acosh.php" class="index">acosh</a> - Inverse hyperbolic cosine</li>
        <li><a href="function.addcslashes.php" class="index">addcslashes</a> - Quote string with slashes in a C style</li>
        <li><a href="function.addslashes.php" class="index">addslashes</a> - Quote string with slashes</li>
        <li><a href="allowdynamicproperties.construct.php" class="index">AllowDynamicProperties::__construct</a> - Construct a new AllowDynamicProperties attribute instance</li>
        <li><a href="function.apache-child-terminate.php" class="index">apache_child_terminate</a> - Terminate apache process after this request</li>
        <li><a href="function.apache-getenv.php" class="index">apache_getenv</a> - Get an Apache subprocess_env variable</li>
        <li><a href="function.apache-get-modules.php" class="index">apache_get_modules</a> - Get a list of loaded Apache modules</li>
        <li><a href="function.apache-get-version.php" class="index">apache_get_version</a> - Fetch Apache version</li>
        <li><a href="function.apache-lookup-uri.php" class="index">apache_lookup_uri</a> - Perform a partial request for the specified URI and return all info about it</li>
        <li><a href="function.apache-note.php" class="index">apache_note</a> - Get and set apache request notes</li>
        <li><a href="function.apache-request-headers.php" class="index">apache_request_headers</a> - Fetch all HTTP request headers</li>
        <li><a href="function.apache-response-headers.php" class="index">apache_response_headers</a> - Fetch all HTTP response headers</li>
        <li><a href="function.apache-setenv.php" class="index">apache_setenv</a> - Set an Apache subprocess_env variable</li>
        <li><a href="apcuiterator.current.php" class="index">APCUIterator::current</a> - Get current item</li>
        <li><a href="apcuiterator.gettotalcount.php" class="index">APCUIterator::getTotalCount</a> - Get total count</li>
        <li><a href="apcuiterator.gettotalhits.php" class="index">APCUIterator::getTotalHits</a> - Get total cache hits</li>
        <li><a href="apcuiterator.gettotalsize.php" class="index">APCUIterator::getTotalSize</a> - Get total cache size</li>
        <li><a href="apcuiterator.key.php" class="index">APCUIterator::key</a> - Get iterator key</li>
        <li><a href="apcuiterator.next.php" class="index">APCUIterator::next</a> - Move pointer to next item</li>
        <li><a href="apcuiterator.rewind.php" class="index">APCUIterator::rewind</a> - Rewinds iterator</li>
        <li><a href="apcuiterator.valid.php" class="index">APCUIterator::valid</a> - Checks if current position is valid</li>
        <li><a href="apcuiterator.construct.php" class="index">APCUIterator::__construct</a> - Constructs an APCUIterator iterator object</li>
        <li><a href="function.apcu-add.php" class="index">apcu_add</a> - Cache a new variable in the data store</li>
        <li><a href="function.apcu-cache-info.php" class="index">apcu_cache_info</a> - Retrieves cached information from APCu's data store</li>
        <li><a href="function.apcu-cas.php" class="index">apcu_cas</a> - Updates an old value with a new value</li>
        <li><a href="function.apcu-clear-cache.php" class="index">apcu_clear_cache</a> - Clears the APCu cache</li>
        <li><a href="function.apcu-dec.php" class="index">apcu_dec</a> - Decrease a stored number</li>
        <li><a href="function.apcu-delete.php" class="index">apcu_delete</a> - Removes a stored variable from the cache</li>
        <li><a href="function.apcu-enabled.php" class="index">apcu_enabled</a> - Whether APCu is usable in the current environment</li>
        <li><a href="function.apcu-entry.php" class="index">apcu_entry</a> - Atomically fetch or generate a cache entry</li>
        <li><a href="function.apcu-exists.php" class="index">apcu_exists</a> - Checks if entry exists</li>
        <li><a href="function.apcu-fetch.php" class="index">apcu_fetch</a> - Fetch a stored variable from the cache</li>
        <li><a href="function.apcu-inc.php" class="index">apcu_inc</a> - Increase a stored number</li>
        <li><a href="function.apcu-key-info.php" class="index">apcu_key_info</a> - Get detailed information about the cache key</li>
        <li><a href="function.apcu-sma-info.php" class="index">apcu_sma_info</a> - Retrieves APCu Shared Memory Allocation information</li>
        <li><a href="function.apcu-store.php" class="index">apcu_store</a> - Cache a variable in the data store</li>
        <li><a href="appenditerator.append.php" class="index">AppendIterator::append</a> - Appends an iterator</li>
        <li><a href="appenditerator.current.php" class="index">AppendIterator::current</a> - Gets the current value</li>
        <li><a href="appenditerator.getarrayiterator.php" class="index">AppendIterator::getArrayIterator</a> - Gets the ArrayIterator</li>
        <li><a href="appenditerator.getiteratorindex.php" class="index">AppendIterator::getIteratorIndex</a> - Gets an index of iterators</li>
        <li><a href="appenditerator.key.php" class="index">AppendIterator::key</a> - Gets the current key</li>
        <li><a href="appenditerator.next.php" class="index">AppendIterator::next</a> - Moves to the next element</li>
        <li><a href="appenditerator.rewind.php" class="index">AppendIterator::rewind</a> - Rewinds the Iterator</li>
        <li><a href="appenditerator.valid.php" class="index">AppendIterator::valid</a> - Checks validity of the current element</li>
        <li><a href="appenditerator.construct.php" class="index">AppendIterator::__construct</a> - Constructs an AppendIterator</li>
        <li><a href="function.array.php" class="index">array</a> - Create an array</li>
        <li><a href="arrayaccess.offsetexists.php" class="index">ArrayAccess::offsetExists</a> - Whether an offset exists</li>
        <li><a href="arrayaccess.offsetget.php" class="index">ArrayAccess::offsetGet</a> - Offset to retrieve</li>
        <li><a href="arrayaccess.offsetset.php" class="index">ArrayAccess::offsetSet</a> - Assign a value to the specified offset</li>
        <li><a href="arrayaccess.offsetunset.php" class="index">ArrayAccess::offsetUnset</a> - Unset an offset</li>
        <li><a href="arrayiterator.append.php" class="index">ArrayIterator::append</a> - Append an element</li>
        <li><a href="arrayiterator.asort.php" class="index">ArrayIterator::asort</a> - Sort entries by values</li>
        <li><a href="arrayiterator.count.php" class="index">ArrayIterator::count</a> - Count elements</li>
        <li><a href="arrayiterator.current.php" class="index">ArrayIterator::current</a> - Return current array entry</li>
        <li><a href="arrayiterator.getarraycopy.php" class="index">ArrayIterator::getArrayCopy</a> - Get array copy</li>
        <li><a href="arrayiterator.getflags.php" class="index">ArrayIterator::getFlags</a> - Get behavior flags</li>
        <li><a href="arrayiterator.key.php" class="index">ArrayIterator::key</a> - Return current array key</li>
        <li><a href="arrayiterator.ksort.php" class="index">ArrayIterator::ksort</a> - Sort entries by keys</li>
        <li><a href="arrayiterator.natcasesort.php" class="index">ArrayIterator::natcasesort</a> - Sort entries naturally, case insensitive</li>
        <li><a href="arrayiterator.natsort.php" class="index">ArrayIterator::natsort</a> - Sort entries naturally</li>
        <li><a href="arrayiterator.next.php" class="index">ArrayIterator::next</a> - Move to next entry</li>
        <li><a href="arrayiterator.offsetexists.php" class="index">ArrayIterator::offsetExists</a> - Check if offset exists</li>
        <li><a href="arrayiterator.offsetget.php" class="index">ArrayIterator::offsetGet</a> - Get value for an offset</li>
        <li><a href="arrayiterator.offsetset.php" class="index">ArrayIterator::offsetSet</a> - Set value for an offset</li>
        <li><a href="arrayiterator.offsetunset.php" class="index">ArrayIterator::offsetUnset</a> - Unset value for an offset</li>
        <li><a href="arrayiterator.rewind.php" class="index">ArrayIterator::rewind</a> - Rewind array back to the start</li>
        <li><a href="arrayiterator.seek.php" class="index">ArrayIterator::seek</a> - Seek to position</li>
        <li><a href="arrayiterator.serialize.php" class="index">ArrayIterator::serialize</a> - Serialize</li>
        <li><a href="arrayiterator.setflags.php" class="index">ArrayIterator::setFlags</a> - Set behaviour flags</li>
        <li><a href="arrayiterator.uasort.php" class="index">ArrayIterator::uasort</a> - Sort with a user-defined comparison function and maintain index association</li>
        <li><a href="arrayiterator.uksort.php" class="index">ArrayIterator::uksort</a> - Sort by keys using a user-defined comparison function</li>
        <li><a href="arrayiterator.unserialize.php" class="index">ArrayIterator::unserialize</a> - Unserialize</li>
        <li><a href="arrayiterator.valid.php" class="index">ArrayIterator::valid</a> - Check whether array contains more entries</li>
        <li><a href="arrayiterator.construct.php" class="index">ArrayIterator::__construct</a> - Construct an ArrayIterator</li>
        <li><a href="arrayobject.append.php" class="index">ArrayObject::append</a> - Appends the value</li>
        <li><a href="arrayobject.asort.php" class="index">ArrayObject::asort</a> - Sort the entries by value</li>
        <li><a href="arrayobject.count.php" class="index">ArrayObject::count</a> - Get the number of public properties in the ArrayObject</li>
        <li><a href="arrayobject.exchangearray.php" class="index">ArrayObject::exchangeArray</a> - Exchange the array for another one</li>
        <li><a href="arrayobject.getarraycopy.php" class="index">ArrayObject::getArrayCopy</a> - Creates a copy of the ArrayObject</li>
        <li><a href="arrayobject.getflags.php" class="index">ArrayObject::getFlags</a> - Gets the behavior flags</li>
        <li><a href="arrayobject.getiterator.php" class="index">ArrayObject::getIterator</a> - Create a new iterator from an ArrayObject instance</li>
        <li><a href="arrayobject.getiteratorclass.php" class="index">ArrayObject::getIteratorClass</a> - Gets the iterator classname for the ArrayObject</li>
        <li><a href="arrayobject.ksort.php" class="index">ArrayObject::ksort</a> - Sort the entries by key</li>
        <li><a href="arrayobject.natcasesort.php" class="index">ArrayObject::natcasesort</a> - Sort an array using a case insensitive &quot;natural order&quot; algorithm</li>
        <li><a href="arrayobject.natsort.php" class="index">ArrayObject::natsort</a> - Sort entries using a &quot;natural order&quot; algorithm</li>
        <li><a href="arrayobject.offsetexists.php" class="index">ArrayObject::offsetExists</a> - Returns whether the requested index exists</li>
        <li><a href="arrayobject.offsetget.php" class="index">ArrayObject::offsetGet</a> - Returns the value at the specified index</li>
        <li><a href="arrayobject.offsetset.php" class="index">ArrayObject::offsetSet</a> - Sets the value at the specified index to newval</li>
        <li><a href="arrayobject.offsetunset.php" class="index">ArrayObject::offsetUnset</a> - Unsets the value at the specified index</li>
        <li><a href="arrayobject.serialize.php" class="index">ArrayObject::serialize</a> - Serialize an ArrayObject</li>
        <li><a href="arrayobject.setflags.php" class="index">ArrayObject::setFlags</a> - Sets the behavior flags</li>
        <li><a href="arrayobject.setiteratorclass.php" class="index">ArrayObject::setIteratorClass</a> - Sets the iterator classname for the ArrayObject</li>
        <li><a href="arrayobject.uasort.php" class="index">ArrayObject::uasort</a> - Sort the entries with a user-defined comparison function and maintain key association</li>
        <li><a href="arrayobject.uksort.php" class="index">ArrayObject::uksort</a> - Sort the entries by keys using a user-defined comparison function</li>
        <li><a href="arrayobject.unserialize.php" class="index">ArrayObject::unserialize</a> - Unserialize an ArrayObject</li>
        <li><a href="arrayobject.construct.php" class="index">ArrayObject::__construct</a> - Construct a new array object</li>
        <li><a href="function.array-change-key-case.php" class="index">array_change_key_case</a> - Changes the case of all keys in an array</li>
        <li><a href="function.array-chunk.php" class="index">array_chunk</a> - Split an array into chunks</li>
        <li><a href="function.array-column.php" class="index">array_column</a> - Return the values from a single column in the input array</li>
        <li><a href="function.array-combine.php" class="index">array_combine</a> - Creates an array by using one array for keys and another for its values</li>
        <li><a href="function.array-count-values.php" class="index">array_count_values</a> - Counts the occurrences of each distinct value in an array</li>
        <li><a href="function.array-diff.php" class="index">array_diff</a> - Computes the difference of arrays</li>
        <li><a href="function.array-diff-assoc.php" class="index">array_diff_assoc</a> - Computes the difference of arrays with additional index check</li>
        <li><a href="function.array-diff-key.php" class="index">array_diff_key</a> - Computes the difference of arrays using keys for comparison</li>
        <li><a href="function.array-diff-uassoc.php" class="index">array_diff_uassoc</a> - Computes the difference of arrays with additional index check which is performed by a user supplied callback function</li>
        <li><a href="function.array-diff-ukey.php" class="index">array_diff_ukey</a> - Computes the difference of arrays using a callback function on the keys for comparison</li>
        <li><a href="function.array-fill.php" class="index">array_fill</a> - Fill an array with values</li>
        <li><a href="function.array-fill-keys.php" class="index">array_fill_keys</a> - Fill an array with values, specifying keys</li>
        <li><a href="function.array-filter.php" class="index">array_filter</a> - Filters elements of an array using a callback function</li>
        <li><a href="function.array-flip.php" class="index">array_flip</a> - Exchanges all keys with their associated values in an array</li>
        <li><a href="function.array-intersect.php" class="index">array_intersect</a> - Computes the intersection of arrays</li>
        <li><a href="function.array-intersect-assoc.php" class="index">array_intersect_assoc</a> - Computes the intersection of arrays with additional index check</li>
        <li><a href="function.array-intersect-key.php" class="index">array_intersect_key</a> - Computes the intersection of arrays using keys for comparison</li>
        <li><a href="function.array-intersect-uassoc.php" class="index">array_intersect_uassoc</a> - Computes the intersection of arrays with additional index check, compares indexes by a callback function</li>
        <li><a href="function.array-intersect-ukey.php" class="index">array_intersect_ukey</a> - Computes the intersection of arrays using a callback function on the keys for comparison</li>
        <li><a href="function.array-is-list.php" class="index">array_is_list</a> - Checks whether a given array is a list</li>
        <li><a href="function.array-keys.php" class="index">array_keys</a> - Return all the keys or a subset of the keys of an array</li>
        <li><a href="function.array-key-exists.php" class="index">array_key_exists</a> - Checks if the given key or index exists in the array</li>
        <li><a href="function.array-key-first.php" class="index">array_key_first</a> - Gets the first key of an array</li>
        <li><a href="function.array-key-last.php" class="index">array_key_last</a> - Gets the last key of an array</li>
        <li><a href="function.array-map.php" class="index">array_map</a> - Applies the callback to the elements of the given arrays</li>
        <li><a href="function.array-merge.php" class="index">array_merge</a> - Merge one or more arrays</li>
        <li><a href="function.array-merge-recursive.php" class="index">array_merge_recursive</a> - Merge one or more arrays recursively</li>
        <li><a href="function.array-multisort.php" class="index">array_multisort</a> - Sort multiple or multi-dimensional arrays</li>
        <li><a href="function.array-pad.php" class="index">array_pad</a> - Pad array to the specified length with a value</li>
        <li><a href="function.array-pop.php" class="index">array_pop</a> - Pop the element off the end of array</li>
        <li><a href="function.array-product.php" class="index">array_product</a> - Calculate the product of values in an array</li>
        <li><a href="function.array-push.php" class="index">array_push</a> - Push one or more elements onto the end of array</li>
        <li><a href="function.array-rand.php" class="index">array_rand</a> - Pick one or more random keys out of an array</li>
        <li><a href="function.array-reduce.php" class="index">array_reduce</a> - Iteratively reduce the array to a single value using a callback function</li>
        <li><a href="function.array-replace.php" class="index">array_replace</a> - Replaces elements from passed arrays into the first array</li>
        <li><a href="function.array-replace-recursive.php" class="index">array_replace_recursive</a> - Replaces elements from passed arrays into the first array recursively</li>
        <li><a href="function.array-reverse.php" class="index">array_reverse</a> - Return an array with elements in reverse order</li>
        <li><a href="function.array-search.php" class="index">array_search</a> - Searches the array for a given value and returns the first corresponding key if successful</li>
        <li><a href="function.array-shift.php" class="index">array_shift</a> - Shift an element off the beginning of array</li>
        <li><a href="function.array-slice.php" class="index">array_slice</a> - Extract a slice of the array</li>
        <li><a href="function.array-splice.php" class="index">array_splice</a> - Remove a portion of the array and replace it with something else</li>
        <li><a href="function.array-sum.php" class="index">array_sum</a> - Calculate the sum of values in an array</li>
        <li><a href="function.array-udiff.php" class="index">array_udiff</a> - Computes the difference of arrays by using a callback function for data comparison</li>
        <li><a href="function.array-udiff-assoc.php" class="index">array_udiff_assoc</a> - Computes the difference of arrays with additional index check, compares data by a callback function</li>
        <li><a href="function.array-udiff-uassoc.php" class="index">array_udiff_uassoc</a> - Computes the difference of arrays with additional index check, compares data and indexes by a callback function</li>
        <li><a href="function.array-uintersect.php" class="index">array_uintersect</a> - Computes the intersection of arrays, compares data by a callback function</li>
        <li><a href="function.array-uintersect-assoc.php" class="index">array_uintersect_assoc</a> - Computes the intersection of arrays with additional index check, compares data by a callback function</li>
        <li><a href="function.array-uintersect-uassoc.php" class="index">array_uintersect_uassoc</a> - Computes the intersection of arrays with additional index check, compares data and indexes by separate callback functions</li>
        <li><a href="function.array-unique.php" class="index">array_unique</a> - Removes duplicate values from an array</li>
        <li><a href="function.array-unshift.php" class="index">array_unshift</a> - Prepend one or more elements to the beginning of an array</li>
        <li><a href="function.array-values.php" class="index">array_values</a> - Return all the values of an array</li>
        <li><a href="function.array-walk.php" class="index">array_walk</a> - Apply a user supplied function to every member of an array</li>
        <li><a href="function.array-walk-recursive.php" class="index">array_walk_recursive</a> - Apply a user function recursively to every member of an array</li>
        <li><a href="function.arsort.php" class="index">arsort</a> - Sort an array in descending order and maintain index association</li>
        <li><a href="function.asin.php" class="index">asin</a> - Arc sine</li>
        <li><a href="function.asinh.php" class="index">asinh</a> - Inverse hyperbolic sine</li>
        <li><a href="function.asort.php" class="index">asort</a> - Sort an array in ascending order and maintain index association</li>
        <li><a href="function.assert.php" class="index">assert</a> - Checks an assertion</li>
        <li><a href="function.assert-options.php" class="index">assert_options</a> - Set/get the various assert flags</li>
        <li><a href="function.atan.php" class="index">atan</a> - Arc tangent</li>
        <li><a href="function.atan2.php" class="index">atan2</a> - Arc tangent of two variables</li>
        <li><a href="function.atanh.php" class="index">atanh</a> - Inverse hyperbolic tangent</li>
        <li><a href="attribute.construct.php" class="index">Attribute::__construct</a> - Construct a new Attribute instance</li>
        </ul></li>
        <li class='gen-index index-for-b'>b<ul id='refentry-index-for-b'>
        <li><a href="backedenum.from.php" class="index">BackedEnum::from</a> - Maps a scalar to an enum instance</li>
        <li><a href="backedenum.tryfrom.php" class="index">BackedEnum::tryFrom</a> - Maps a scalar to an enum instance or null</li>
        <li><a href="function.base64-decode.php" class="index">base64_decode</a> - Decodes data encoded with MIME base64</li>
        <li><a href="function.base64-encode.php" class="index">base64_encode</a> - Encodes data with MIME base64</li>
        <li><a href="function.basename.php" class="index">basename</a> - Returns trailing name component of path</li>
        <li><a href="mysql-xdevapi-baseresult.getwarnings.php" class="index">BaseResult::getWarnings</a> - Fetch warnings from last operation</li>
        <li><a href="mysql-xdevapi-baseresult.getwarningscount.php" class="index">BaseResult::getWarningsCount</a> - Fetch warning count from last operation</li>
        <li><a href="function.base-convert.php" class="index">base_convert</a> - Convert a number between arbitrary bases</li>
        <li><a href="function.bcadd.php" class="index">bcadd</a> - Add two arbitrary precision numbers</li>
        <li><a href="function.bccomp.php" class="index">bccomp</a> - Compare two arbitrary precision numbers</li>
        <li><a href="function.bcdiv.php" class="index">bcdiv</a> - Divide two arbitrary precision numbers</li>
        <li><a href="function.bcmod.php" class="index">bcmod</a> - Get modulus of an arbitrary precision number</li>
        <li><a href="function.bcmul.php" class="index">bcmul</a> - Multiply two arbitrary precision numbers</li>
        <li><a href="function.bcpow.php" class="index">bcpow</a> - Raise an arbitrary precision number to another</li>
        <li><a href="function.bcpowmod.php" class="index">bcpowmod</a> - Raise an arbitrary precision number to another, reduced by a specified modulus</li>
        <li><a href="function.bcscale.php" class="index">bcscale</a> - Set or get default scale parameter for all bc math functions</li>
        <li><a href="function.bcsqrt.php" class="index">bcsqrt</a> - Get the square root of an arbitrary precision number</li>
        <li><a href="function.bcsub.php" class="index">bcsub</a> - Subtract one arbitrary precision number from another</li>
        <li><a href="function.bin2hex.php" class="index">bin2hex</a> - Convert binary data into hexadecimal representation</li>
        <li><a href="function.bindec.php" class="index">bindec</a> - Binary to decimal</li>
        <li><a href="function.bindtextdomain.php" class="index">bindtextdomain</a> - Sets or gets the path for a domain</li>
        <li><a href="function.bind-textdomain-codeset.php" class="index">bind_textdomain_codeset</a> - Specify or get the character encoding in which the messages from the DOMAIN message catalog will be returned</li>
        <li><a href="function.boolval.php" class="index">boolval</a> - Get the boolean value of a variable</li>
        <li><a href="function.bzclose.php" class="index">bzclose</a> - Close a bzip2 file</li>
        <li><a href="function.bzcompress.php" class="index">bzcompress</a> - Compress a string into bzip2 encoded data</li>
        <li><a href="function.bzdecompress.php" class="index">bzdecompress</a> - Decompresses bzip2 encoded data</li>
        <li><a href="function.bzerrno.php" class="index">bzerrno</a> - Returns a bzip2 error number</li>
        <li><a href="function.bzerror.php" class="index">bzerror</a> - Returns the bzip2 error number and error string in an array</li>
        <li><a href="function.bzerrstr.php" class="index">bzerrstr</a> - Returns a bzip2 error string</li>
        <li><a href="function.bzflush.php" class="index">bzflush</a> - Do nothing</li>
        <li><a href="function.bzopen.php" class="index">bzopen</a> - Opens a bzip2 compressed file</li>
        <li><a href="function.bzread.php" class="index">bzread</a> - Binary safe bzip2 file read</li>
        <li><a href="function.bzwrite.php" class="index">bzwrite</a> - Binary safe bzip2 file write</li>
        </ul></li>
        <li class='gen-index index-for-c'>c<ul id='refentry-index-for-c'>
        <li><a href="cachingiterator.count.php" class="index">CachingIterator::count</a> - The number of elements in the iterator</li>
        <li><a href="cachingiterator.current.php" class="index">CachingIterator::current</a> - Return the current element</li>
        <li><a href="cachingiterator.getcache.php" class="index">CachingIterator::getCache</a> - Retrieve the contents of the cache</li>
        <li><a href="cachingiterator.getflags.php" class="index">CachingIterator::getFlags</a> - Get flags used</li>
        <li><a href="cachingiterator.hasnext.php" class="index">CachingIterator::hasNext</a> - Check whether the inner iterator has a valid next element</li>
        <li><a href="cachingiterator.key.php" class="index">CachingIterator::key</a> - Return the key for the current element</li>
        <li><a href="cachingiterator.next.php" class="index">CachingIterator::next</a> - Move the iterator forward</li>
        <li><a href="cachingiterator.offsetexists.php" class="index">CachingIterator::offsetExists</a> - The offsetExists purpose</li>
        <li><a href="cachingiterator.offsetget.php" class="index">CachingIterator::offsetGet</a> - The offsetGet purpose</li>
        <li><a href="cachingiterator.offsetset.php" class="index">CachingIterator::offsetSet</a> - The offsetSet purpose</li>
        <li><a href="cachingiterator.offsetunset.php" class="index">CachingIterator::offsetUnset</a> - The offsetUnset purpose</li>
        <li><a href="cachingiterator.rewind.php" class="index">CachingIterator::rewind</a> - Rewind the iterator</li>
        <li><a href="cachingiterator.setflags.php" class="index">CachingIterator::setFlags</a> - The setFlags purpose</li>
        <li><a href="cachingiterator.valid.php" class="index">CachingIterator::valid</a> - Check whether the current element is valid</li>
        <li><a href="cachingiterator.construct.php" class="index">CachingIterator::__construct</a> - Construct a new CachingIterator object for the iterator</li>
        <li><a href="cachingiterator.tostring.php" class="index">CachingIterator::__toString</a> - Return the string representation of the current element</li>
        <li><a href="callbackfilteriterator.accept.php" class="index">CallbackFilterIterator::accept</a> - Calls the callback with the current value, the current key and the inner iterator as arguments</li>
        <li><a href="callbackfilteriterator.construct.php" class="index">CallbackFilterIterator::__construct</a> - Create a filtered iterator from another iterator</li>
        <li><a href="function.call-user-func.php" class="index">call_user_func</a> - Call the callback given by the first parameter</li>
        <li><a href="function.call-user-func-array.php" class="index">call_user_func_array</a> - Call a callback with an array of parameters</li>
        <li><a href="function.cal-days-in-month.php" class="index">cal_days_in_month</a> - Return the number of days in a month for a given year and calendar</li>
        <li><a href="function.cal-from-jd.php" class="index">cal_from_jd</a> - Converts from Julian Day Count to a supported calendar</li>
        <li><a href="function.cal-info.php" class="index">cal_info</a> - Returns information about a particular calendar</li>
        <li><a href="function.cal-to-jd.php" class="index">cal_to_jd</a> - Converts from a supported calendar to Julian Day Count</li>
        <li><a href="function.ceil.php" class="index">ceil</a> - Round fractions up</li>
        <li><a href="function.chdir.php" class="index">chdir</a> - Change directory</li>
        <li><a href="function.checkdate.php" class="index">checkdate</a> - Validate a Gregorian date</li>
        <li><a href="function.checkdnsrr.php" class="index">checkdnsrr</a> - Check DNS records corresponding to a given Internet host name or IP address</li>
        <li><a href="function.chgrp.php" class="index">chgrp</a> - Changes file group</li>
        <li><a href="function.chmod.php" class="index">chmod</a> - Changes file mode</li>
        <li><a href="function.chop.php" class="index">chop</a> - Alias of rtrim</li>
        <li><a href="function.chown.php" class="index">chown</a> - Changes file owner</li>
        <li><a href="function.chr.php" class="index">chr</a> - Generate a single-byte string from a number</li>
        <li><a href="function.chroot.php" class="index">chroot</a> - Change the root directory</li>
        <li><a href="function.chunk-split.php" class="index">chunk_split</a> - Split a string into smaller chunks</li>
        <li><a href="function.class-alias.php" class="index">class_alias</a> - Creates an alias for a class</li>
        <li><a href="function.class-exists.php" class="index">class_exists</a> - Checks if the class has been defined</li>
        <li><a href="function.class-implements.php" class="index">class_implements</a> - Return the interfaces which are implemented by the given class or interface</li>
        <li><a href="function.class-parents.php" class="index">class_parents</a> - Return the parent classes of the given class</li>
        <li><a href="function.class-uses.php" class="index">class_uses</a> - Return the traits used by the given class</li>
        <li><a href="function.clearstatcache.php" class="index">clearstatcache</a> - Clears file status cache</li>
        <li><a href="mysql-xdevapi-client.getsession.php" class="index">Client::getClient</a> - Get client session</li>
        <li><a href="mysql-xdevapi-client.construct.php" class="index">Client::__construct</a> - Client constructor</li>
        <li><a href="function.cli-get-process-title.php" class="index">cli_get_process_title</a> - Returns the current process title</li>
        <li><a href="function.cli-set-process-title.php" class="index">cli_set_process_title</a> - Sets the process title</li>
        <li><a href="function.closedir.php" class="index">closedir</a> - Close directory handle</li>
        <li><a href="function.closelog.php" class="index">closelog</a> - Close connection to system logger</li>
        <li><a href="closure.bind.php" class="index">Closure::bind</a> - Duplicates a closure with a specific bound object and class scope</li>
        <li><a href="closure.bindto.php" class="index">Closure::bindTo</a> - Duplicates the closure with a new bound object and class scope</li>
        <li><a href="closure.call.php" class="index">Closure::call</a> - Binds and calls the closure</li>
        <li><a href="closure.fromcallable.php" class="index">Closure::fromCallable</a> - Converts a callable into a closure</li>
        <li><a href="closure.construct.php" class="index">Closure::__construct</a> - Constructor that disallows instantiation</li>
        <li><a href="collator.asort.php" class="index">Collator::asort</a> - Sort array maintaining index association</li>
        <li><a href="collator.compare.php" class="index">Collator::compare</a> - Compare two Unicode strings</li>
        <li><a href="collator.create.php" class="index">Collator::create</a> - Create a collator</li>
        <li><a href="collator.getattribute.php" class="index">Collator::getAttribute</a> - Get collation attribute value</li>
        <li><a href="collator.geterrorcode.php" class="index">Collator::getErrorCode</a> - Get collator's last error code</li>
        <li><a href="collator.geterrormessage.php" class="index">Collator::getErrorMessage</a> - Get text for collator's last error code</li>
        <li><a href="collator.getlocale.php" class="index">Collator::getLocale</a> - Get the locale name of the collator</li>
        <li><a href="collator.getsortkey.php" class="index">Collator::getSortKey</a> - Get sorting key for a string</li>
        <li><a href="collator.getstrength.php" class="index">Collator::getStrength</a> - Get current collation strength</li>
        <li><a href="collator.setattribute.php" class="index">Collator::setAttribute</a> - Set collation attribute</li>
        <li><a href="collator.setstrength.php" class="index">Collator::setStrength</a> - Set collation strength</li>
        <li><a href="collator.sort.php" class="index">Collator::sort</a> - Sort array using specified collator</li>
        <li><a href="collator.sortwithsortkeys.php" class="index">Collator::sortWithSortKeys</a> - Sort array using specified collator and sort keys</li>
        <li><a href="collator.construct.php" class="index">Collator::__construct</a> - Create a collator</li>
        <li><a href="collectable.isgarbage.php" class="index">Collectable::isGarbage</a> - Determine whether an object has been marked as garbage</li>
        <li><a href="mysql-xdevapi-collection.add.php" class="index">Collection::add</a> - Add collection document</li>
        <li><a href="mysql-xdevapi-collection.addorreplaceone.php" class="index">Collection::addOrReplaceOne</a> - Add or replace collection document</li>
        <li><a href="mysql-xdevapi-collection.count.php" class="index">Collection::count</a> - Get document count</li>
        <li><a href="mysql-xdevapi-collection.createindex.php" class="index">Collection::createIndex</a> - Create collection index</li>
        <li><a href="mysql-xdevapi-collection.dropindex.php" class="index">Collection::dropIndex</a> - Drop collection index</li>
        <li><a href="mysql-xdevapi-collection.existsindatabase.php" class="index">Collection::existsInDatabase</a> - Check if collection exists in database</li>
        <li><a href="mysql-xdevapi-collection.find.php" class="index">Collection::find</a> - Search for document</li>
        <li><a href="mysql-xdevapi-collection.getname.php" class="index">Collection::getName</a> - Get collection name</li>
        <li><a href="mysql-xdevapi-collection.getone.php" class="index">Collection::getOne</a> - Get one document</li>
        <li><a href="mysql-xdevapi-collection.getschema.php" class="index">Collection::getSchema</a> - Get schema object</li>
        <li><a href="mysql-xdevapi-collection.getsession.php" class="index">Collection::getSession</a> - Get session object</li>
        <li><a href="mysql-xdevapi-collection.modify.php" class="index">Collection::modify</a> - Modify collection documents</li>
        <li><a href="mysql-xdevapi-collection.remove.php" class="index">Collection::remove</a> - Remove collection documents</li>
        <li><a href="mysql-xdevapi-collection.removeone.php" class="index">Collection::removeOne</a> - Remove one collection document</li>
        <li><a href="mysql-xdevapi-collection.replaceone.php" class="index">Collection::replaceOne</a> - Replace one collection document</li>
        <li><a href="mysql-xdevapi-collection.construct.php" class="index">Collection::__construct</a> - Collection constructor</li>
        <li><a href="mysql-xdevapi-collectionadd.execute.php" class="index">CollectionAdd::execute</a> - Execute the statement</li>
        <li><a href="mysql-xdevapi-collectionadd.construct.php" class="index">CollectionAdd::__construct</a> - CollectionAdd constructor</li>
        <li><a href="mysql-xdevapi-collectionfind.bind.php" class="index">CollectionFind::bind</a> - Bind value to query placeholder</li>
        <li><a href="mysql-xdevapi-collectionfind.execute.php" class="index">CollectionFind::execute</a> - Execute the statement</li>
        <li><a href="mysql-xdevapi-collectionfind.fields.php" class="index">CollectionFind::fields</a> - Set document field filter</li>
        <li><a href="mysql-xdevapi-collectionfind.groupby.php" class="index">CollectionFind::groupBy</a> - Set grouping criteria</li>
        <li><a href="mysql-xdevapi-collectionfind.having.php" class="index">CollectionFind::having</a> - Set condition for aggregate functions</li>
        <li><a href="mysql-xdevapi-collectionfind.limit.php" class="index">CollectionFind::limit</a> - Limit number of returned documents</li>
        <li><a href="mysql-xdevapi-collectionfind.lockexclusive.php" class="index">CollectionFind::lockExclusive</a> - Execute operation with EXCLUSIVE LOCK</li>
        <li><a href="mysql-xdevapi-collectionfind.lockshared.php" class="index">CollectionFind::lockShared</a> - Execute operation with SHARED LOCK</li>
        <li><a href="mysql-xdevapi-collectionfind.offset.php" class="index">CollectionFind::offset</a> - Skip given number of elements to be returned</li>
        <li><a href="mysql-xdevapi-collectionfind.sort.php" class="index">CollectionFind::sort</a> - Set the sorting criteria</li>
        <li><a href="mysql-xdevapi-collectionfind.construct.php" class="index">CollectionFind::__construct</a> - CollectionFind constructor</li>
        <li><a href="mysql-xdevapi-collectionmodify.arrayappend.php" class="index">CollectionModify::arrayAppend</a> - Append element to an array field</li>
        <li><a href="mysql-xdevapi-collectionmodify.arrayinsert.php" class="index">CollectionModify::arrayInsert</a> - Insert element into an array field</li>
        <li><a href="mysql-xdevapi-collectionmodify.bind.php" class="index">CollectionModify::bind</a> - Bind value to query placeholder</li>
        <li><a href="mysql-xdevapi-collectionmodify.execute.php" class="index">CollectionModify::execute</a> - Execute modify operation</li>
        <li><a href="mysql-xdevapi-collectionmodify.limit.php" class="index">CollectionModify::limit</a> - Limit number of modified documents</li>
        <li><a href="mysql-xdevapi-collectionmodify.patch.php" class="index">CollectionModify::patch</a> - Patch document</li>
        <li><a href="mysql-xdevapi-collectionmodify.replace.php" class="index">CollectionModify::replace</a> - Replace document field</li>
        <li><a href="mysql-xdevapi-collectionmodify.set.php" class="index">CollectionModify::set</a> - Set document attribute</li>
        <li><a href="mysql-xdevapi-collectionmodify.skip.php" class="index">CollectionModify::skip</a> - Skip elements</li>
        <li><a href="mysql-xdevapi-collectionmodify.sort.php" class="index">CollectionModify::sort</a> - Set the sorting criteria</li>
        <li><a href="mysql-xdevapi-collectionmodify.unset.php" class="index">CollectionModify::unset</a> - Unset the value of document fields</li>
        <li><a href="mysql-xdevapi-collectionmodify.construct.php" class="index">CollectionModify::__construct</a> - CollectionModify constructor</li>
        <li><a href="mysql-xdevapi-collectionremove.bind.php" class="index">CollectionRemove::bind</a> - Bind value to placeholder</li>
        <li><a href="mysql-xdevapi-collectionremove.execute.php" class="index">CollectionRemove::execute</a> - Execute remove operation</li>
        <li><a href="mysql-xdevapi-collectionremove.limit.php" class="index">CollectionRemove::limit</a> - Limit number of documents to remove</li>
        <li><a href="mysql-xdevapi-collectionremove.sort.php" class="index">CollectionRemove::sort</a> - Set the sorting criteria</li>
        <li><a href="mysql-xdevapi-collectionremove.construct.php" class="index">CollectionRemove::__construct</a> - CollectionRemove constructor</li>
        <li><a href="mysql-xdevapi-columnresult.getcharactersetname.php" class="index">ColumnResult::getCharacterSetName</a> - Get character set</li>
        <li><a href="mysql-xdevapi-columnresult.getcollationname.php" class="index">ColumnResult::getCollationName</a> - Get collation name</li>
        <li><a href="mysql-xdevapi-columnresult.getcolumnlabel.php" class="index">ColumnResult::getColumnLabel</a> - Get column label</li>
        <li><a href="mysql-xdevapi-columnresult.getcolumnname.php" class="index">ColumnResult::getColumnName</a> - Get column name</li>
        <li><a href="mysql-xdevapi-columnresult.getfractionaldigits.php" class="index">ColumnResult::getFractionalDigits</a> - Get fractional digit length</li>
        <li><a href="mysql-xdevapi-columnresult.getlength.php" class="index">ColumnResult::getLength</a> - Get column field length</li>
        <li><a href="mysql-xdevapi-columnresult.getschemaname.php" class="index">ColumnResult::getSchemaName</a> - Get schema name</li>
        <li><a href="mysql-xdevapi-columnresult.gettablelabel.php" class="index">ColumnResult::getTableLabel</a> - Get table label</li>
        <li><a href="mysql-xdevapi-columnresult.gettablename.php" class="index">ColumnResult::getTableName</a> - Get table name</li>
        <li><a href="mysql-xdevapi-columnresult.gettype.php" class="index">ColumnResult::getType</a> - Get column type</li>
        <li><a href="mysql-xdevapi-columnresult.isnumbersigned.php" class="index">ColumnResult::isNumberSigned</a> - Check if signed type</li>
        <li><a href="mysql-xdevapi-columnresult.ispadded.php" class="index">ColumnResult::isPadded</a> - Check if padded</li>
        <li><a href="mysql-xdevapi-columnresult.construct.php" class="index">ColumnResult::__construct</a> - ColumnResult constructor</li>
        <li><a href="com.construct.php" class="index">com::__construct</a> - com class constructor</li>
        <li><a href="commonmark-cql.construct.php" class="index">CommonMark\CQL::__construct</a> - CQL Construction</li>
        <li><a href="commonmark-cql.invoke.php" class="index">CommonMark\CQL::__invoke</a> - CQL Execution</li>
        <li><a href="commonmark-interfaces-ivisitable.accept.php" class="index">CommonMark\Interfaces\IVisitable::accept</a> - Visitation</li>
        <li><a href="commonmark-interfaces-ivisitor.enter.php" class="index">CommonMark\Interfaces\IVisitor::enter</a> - Visitation</li>
        <li><a href="commonmark-interfaces-ivisitor.leave.php" class="index">CommonMark\Interfaces\IVisitor::leave</a> - Visitation</li>
        <li><a href="commonmark-node.accept.php" class="index">CommonMark\Node::accept</a> - Visitation</li>
        <li><a href="commonmark-node.appendchild.php" class="index">CommonMark\Node::appendChild</a> - AST Manipulation</li>
        <li><a href="commonmark-node.insertafter.php" class="index">CommonMark\Node::insertAfter</a> - AST Manipulation</li>
        <li><a href="commonmark-node.insertbefore.php" class="index">CommonMark\Node::insertBefore</a> - AST Manipulation</li>
        <li><a href="commonmark-node.prependchild.php" class="index">CommonMark\Node::prependChild</a> - AST Manipulation</li>
        <li><a href="commonmark-node.replace.php" class="index">CommonMark\Node::replace</a> - AST Manipulation</li>
        <li><a href="commonmark-node.unlink.php" class="index">CommonMark\Node::unlink</a> - AST Manipulation</li>
        <li><a href="commonmark-node-bulletlist.construct.php" class="index">CommonMark\Node\BulletList::__construct</a> - BulletList Construction</li>
        <li><a href="commonmark-node-codeblock.construct.php" class="index">CommonMark\Node\CodeBlock::__construct</a> - CodeBlock Construction</li>
        <li><a href="commonmark-node-heading.construct.php" class="index">CommonMark\Node\Heading::__construct</a> - Heading Construction</li>
        <li><a href="commonmark-node-image.construct.php" class="index">CommonMark\Node\Image::__construct</a> - Image Construction</li>
        <li><a href="commonmark-node-link.construct.php" class="index">CommonMark\Node\Link::__construct</a> - Link Construction</li>
        <li><a href="commonmark-node-orderedlist.construct.php" class="index">CommonMark\Node\OrderedList::__construct</a> - OrderedList Construction</li>
        <li><a href="commonmark-node-text.construct.php" class="index">CommonMark\Node\Text::__construct</a> - Text Construction</li>
        <li><a href="function.commonmark-parse.php" class="index">CommonMark\Parse</a> - Parsing</li>
        <li><a href="commonmark-parser.finish.php" class="index">CommonMark\Parser::finish</a> - Parsing</li>
        <li><a href="commonmark-parser.parse.php" class="index">CommonMark\Parser::parse</a> - Parsing</li>
        <li><a href="commonmark-parser.construct.php" class="index">CommonMark\Parser::__construct</a> - Parsing</li>
        <li><a href="function.commonmark-render.php" class="index">CommonMark\Render</a> - Rendering</li>
        <li><a href="function.commonmark-render-html.php" class="index">CommonMark\Render\HTML</a> - Rendering</li>
        <li><a href="function.commonmark-render-latex.php" class="index">CommonMark\Render\Latex</a> - Rendering</li>
        <li><a href="function.commonmark-render-man.php" class="index">CommonMark\Render\Man</a> - Rendering</li>
        <li><a href="function.commonmark-render-xml.php" class="index">CommonMark\Render\XML</a> - Rendering</li>
        <li><a href="function.compact.php" class="index">compact</a> - Create array containing variables and their values</li>
        <li><a href="compersisthelper.getcurfilename.php" class="index">COMPersistHelper::GetCurFileName</a> - Get current filename</li>
        <li><a href="compersisthelper.getmaxstreamsize.php" class="index">COMPersistHelper::GetMaxStreamSize</a> - Get maximum stream size</li>
        <li><a href="compersisthelper.initnew.php" class="index">COMPersistHelper::InitNew</a> - Initialize object to default state</li>
        <li><a href="compersisthelper.loadfromfile.php" class="index">COMPersistHelper::LoadFromFile</a> - Load object from file</li>
        <li><a href="compersisthelper.loadfromstream.php" class="index">COMPersistHelper::LoadFromStream</a> - Load object from stream</li>
        <li><a href="compersisthelper.savetofile.php" class="index">COMPersistHelper::SaveToFile</a> - Save object to file</li>
        <li><a href="compersisthelper.savetostream.php" class="index">COMPersistHelper::SaveToStream</a> - Save object to stream</li>
        <li><a href="compersisthelper.construct.php" class="index">COMPersistHelper::__construct</a> - Construct a COMPersistHelper object</li>
        <li><a href="componere-abstract-definition.addinterface.php" class="index">Componere\Abstract\Definition::addInterface</a> - Add Interface</li>
        <li><a href="componere-abstract-definition.addmethod.php" class="index">Componere\Abstract\Definition::addMethod</a> - Add Method</li>
        <li><a href="componere-abstract-definition.addtrait.php" class="index">Componere\Abstract\Definition::addTrait</a> - Add Trait</li>
        <li><a href="componere-abstract-definition.getreflector.php" class="index">Componere\Abstract\Definition::getReflector</a> - Reflection</li>
        <li><a href="componere.cast.php" class="index">Componere\cast</a> - Casting</li>
        <li><a href="componere.cast_by_ref.php" class="index">Componere\cast_by_ref</a> - Casting</li>
        <li><a href="componere-definition.addconstant.php" class="index">Componere\Definition::addConstant</a> - Add Constant</li>
        <li><a href="componere-definition.addproperty.php" class="index">Componere\Definition::addProperty</a> - Add Property</li>
        <li><a href="componere-definition.getclosure.php" class="index">Componere\Definition::getClosure</a> - Get Closure</li>
        <li><a href="componere-definition.getclosures.php" class="index">Componere\Definition::getClosures</a> - Get Closures</li>
        <li><a href="componere-definition.isregistered.php" class="index">Componere\Definition::isRegistered</a> - State Detection</li>
        <li><a href="componere-definition.register.php" class="index">Componere\Definition::register</a> - Registration</li>
        <li><a href="componere-definition.construct.php" class="index">Componere\Definition::__construct</a> - Definition Construction</li>
        <li><a href="componere-method.getreflector.php" class="index">Componere\Method::getReflector</a> - Reflection</li>
        <li><a href="componere-method.setprivate.php" class="index">Componere\Method::setPrivate</a> - Accessibility Modification</li>
        <li><a href="componere-method.setprotected.php" class="index">Componere\Method::setProtected</a> - Accessibility Modification</li>
        <li><a href="componere-method.setstatic.php" class="index">Componere\Method::setStatic</a> - Accessibility Modification</li>
        <li><a href="componere-method.construct.php" class="index">Componere\Method::__construct</a> - Method Construction</li>
        <li><a href="componere-patch.apply.php" class="index">Componere\Patch::apply</a> - Application</li>
        <li><a href="componere-patch.derive.php" class="index">Componere\Patch::derive</a> - Patch Derivation</li>
        <li><a href="componere-patch.getclosure.php" class="index">Componere\Patch::getClosure</a> - Get Closure</li>
        <li><a href="componere-patch.getclosures.php" class="index">Componere\Patch::getClosures</a> - Get Closures</li>
        <li><a href="componere-patch.isapplied.php" class="index">Componere\Patch::isApplied</a> - State Detection</li>
        <li><a href="componere-patch.revert.php" class="index">Componere\Patch::revert</a> - Reversal</li>
        <li><a href="componere-patch.construct.php" class="index">Componere\Patch::__construct</a> - Patch Construction</li>
        <li><a href="componere-value.hasdefault.php" class="index">Componere\Value::hasDefault</a> - Value Interaction</li>
        <li><a href="componere-value.isprivate.php" class="index">Componere\Value::isPrivate</a> - Accessibility Detection</li>
        <li><a href="componere-value.isprotected.php" class="index">Componere\Value::isProtected</a> - Accessibility Detection</li>
        <li><a href="componere-value.isstatic.php" class="index">Componere\Value::isStatic</a> - Accessibility Detection</li>
        <li><a href="componere-value.setprivate.php" class="index">Componere\Value::setPrivate</a> - Accessibility Modification</li>
        <li><a href="componere-value.setprotected.php" class="index">Componere\Value::setProtected</a> - Accessibility Modification</li>
        <li><a href="componere-value.setstatic.php" class="index">Componere\Value::setStatic</a> - Accessibility Modification</li>
        <li><a href="componere-value.construct.php" class="index">Componere\Value::__construct</a> - Value Construction</li>
        <li><a href="function.com-create-guid.php" class="index">com_create_guid</a> - Generate a globally unique identifier (GUID)</li>
        <li><a href="function.com-event-sink.php" class="index">com_event_sink</a> - Connect events from a COM object to a PHP object</li>
        <li><a href="function.com-get-active-object.php" class="index">com_get_active_object</a> - Returns a handle to an already running instance of a COM object</li>
        <li><a href="function.com-load-typelib.php" class="index">com_load_typelib</a> - Loads a Typelib</li>
        <li><a href="function.com-message-pump.php" class="index">com_message_pump</a> - Process COM messages, sleeping for up to timeoutms milliseconds</li>
        <li><a href="function.com-print-typeinfo.php" class="index">com_print_typeinfo</a> - Print out a PHP class definition for a dispatchable interface</li>
        <li><a href="function.connection-aborted.php" class="index">connection_aborted</a> - Check whether client disconnected</li>
        <li><a href="function.connection-status.php" class="index">connection_status</a> - Returns connection status bitfield</li>
        <li><a href="function.constant.php" class="index">constant</a> - Returns the value of a constant</li>
        <li><a href="function.convert-cyr-string.php" class="index">convert_cyr_string</a> - Convert from one Cyrillic character set to another</li>
        <li><a href="function.convert-uudecode.php" class="index">convert_uudecode</a> - Decode a uuencoded string</li>
        <li><a href="function.convert-uuencode.php" class="index">convert_uuencode</a> - Uuencode a string</li>
        <li><a href="function.copy.php" class="index">copy</a> - Copies file</li>
        <li><a href="function.cos.php" class="index">cos</a> - Cosine</li>
        <li><a href="function.cosh.php" class="index">cosh</a> - Hyperbolic cosine</li>
        <li><a href="function.count.php" class="index">count</a> - Counts all elements in an array or in a Countable object</li>
        <li><a href="countable.count.php" class="index">Countable::count</a> - Count elements of an object</li>
        <li><a href="function.count-chars.php" class="index">count_chars</a> - Return information about characters used in a string</li>
        <li><a href="function.crc32.php" class="index">crc32</a> - Calculates the crc32 polynomial of a string</li>
        <li><a href="function.create-function.php" class="index">create_function</a> - Create a function dynamically by evaluating a string of code</li>
        <li><a href="mysql-xdevapi-crudoperationbindable.bind.php" class="index">CrudOperationBindable::bind</a> - Bind value to placeholder</li>
        <li><a href="mysql-xdevapi-crudoperationlimitable.limit.php" class="index">CrudOperationLimitable::limit</a> - Set result limit</li>
        <li><a href="mysql-xdevapi-crudoperationskippable.skip.php" class="index">CrudOperationSkippable::skip</a> - Number of operations to skip</li>
        <li><a href="mysql-xdevapi-crudoperationsortable.sort.php" class="index">CrudOperationSortable::sort</a> - Sort results</li>
        <li><a href="function.crypt.php" class="index">crypt</a> - One-way string hashing</li>
        <li><a href="function.ctype-alnum.php" class="index">ctype_alnum</a> - Check for alphanumeric character(s)</li>
        <li><a href="function.ctype-alpha.php" class="index">ctype_alpha</a> - Check for alphabetic character(s)</li>
        <li><a href="function.ctype-cntrl.php" class="index">ctype_cntrl</a> - Check for control character(s)</li>
        <li><a href="function.ctype-digit.php" class="index">ctype_digit</a> - Check for numeric character(s)</li>
        <li><a href="function.ctype-graph.php" class="index">ctype_graph</a> - Check for any printable character(s) except space</li>
        <li><a href="function.ctype-lower.php" class="index">ctype_lower</a> - Check for lowercase character(s)</li>
        <li><a href="function.ctype-print.php" class="index">ctype_print</a> - Check for printable character(s)</li>
        <li><a href="function.ctype-punct.php" class="index">ctype_punct</a> - Check for any printable character which is not whitespace or an
           alphanumeric character</li>
        <li><a href="function.ctype-space.php" class="index">ctype_space</a> - Check for whitespace character(s)</li>
        <li><a href="function.ctype-upper.php" class="index">ctype_upper</a> - Check for uppercase character(s)</li>
        <li><a href="function.ctype-xdigit.php" class="index">ctype_xdigit</a> - Check for character(s) representing a hexadecimal digit</li>
        <li><a href="function.cubrid-affected-rows.php" class="index">cubrid_affected_rows</a> - Return the number of rows affected by the last SQL statement</li>
        <li><a href="function.cubrid-bind.php" class="index">cubrid_bind</a> - Bind variables to a prepared statement as parameters</li>
        <li><a href="function.cubrid-client-encoding.php" class="index">cubrid_client_encoding</a> - Return the current CUBRID connection charset</li>
        <li><a href="function.cubrid-close.php" class="index">cubrid_close</a> - Close CUBRID connection</li>
        <li><a href="function.cubrid-close-prepare.php" class="index">cubrid_close_prepare</a> - Close the request handle</li>
        <li><a href="function.cubrid-close-request.php" class="index">cubrid_close_request</a> - Close the request handle</li>
        <li><a href="function.cubrid-column-names.php" class="index">cubrid_column_names</a> - Get the column names in result</li>
        <li><a href="function.cubrid-column-types.php" class="index">cubrid_column_types</a> - Get column types in result</li>
        <li><a href="function.cubrid-col-get.php" class="index">cubrid_col_get</a> - Get contents of collection type column using OID</li>
        <li><a href="function.cubrid-col-size.php" class="index">cubrid_col_size</a> - Get the number of elements in collection type column using OID</li>
        <li><a href="function.cubrid-commit.php" class="index">cubrid_commit</a> - Commit a transaction</li>
        <li><a href="function.cubrid-connect.php" class="index">cubrid_connect</a> - Open a connection to a CUBRID Server</li>
        <li><a href="function.cubrid-connect-with-url.php" class="index">cubrid_connect_with_url</a> - Establish the environment for connecting to CUBRID server</li>
        <li><a href="function.cubrid-current-oid.php" class="index">cubrid_current_oid</a> - Get OID of the current cursor location</li>
        <li><a href="function.cubrid-data-seek.php" class="index">cubrid_data_seek</a> - Move the internal row pointer of the CUBRID result</li>
        <li><a href="function.cubrid-db-name.php" class="index">cubrid_db_name</a> - Get db name from results of cubrid_list_dbs</li>
        <li><a href="function.cubrid-disconnect.php" class="index">cubrid_disconnect</a> - Close a database connection</li>
        <li><a href="function.cubrid-drop.php" class="index">cubrid_drop</a> - Delete an instance using OID</li>
        <li><a href="function.cubrid-errno.php" class="index">cubrid_errno</a> - Return the numerical value of the error message from previous CUBRID operation</li>
        <li><a href="function.cubrid-error.php" class="index">cubrid_error</a> - Get the error message</li>
        <li><a href="function.cubrid-error-code.php" class="index">cubrid_error_code</a> - Get error code for the most recent function call</li>
        <li><a href="function.cubrid-error-code-facility.php" class="index">cubrid_error_code_facility</a> - Get the facility code of error</li>
        <li><a href="function.cubrid-error-msg.php" class="index">cubrid_error_msg</a> - Get last error message for the most recent function call</li>
        <li><a href="function.cubrid-execute.php" class="index">cubrid_execute</a> - Execute a prepared SQL statement</li>
        <li><a href="function.cubrid-fetch.php" class="index">cubrid_fetch</a> - Fetch the next row from a result set</li>
        <li><a href="function.cubrid-fetch-array.php" class="index">cubrid_fetch_array</a> - Fetch a result row as an associative array, a numeric array, or both</li>
        <li><a href="function.cubrid-fetch-assoc.php" class="index">cubrid_fetch_assoc</a> - Return the associative array that corresponds to the fetched row</li>
        <li><a href="function.cubrid-fetch-field.php" class="index">cubrid_fetch_field</a> - Get column information from a result and return as an object</li>
        <li><a href="function.cubrid-fetch-lengths.php" class="index">cubrid_fetch_lengths</a> - Return an array with the lengths of the values of each field from the current row</li>
        <li><a href="function.cubrid-fetch-object.php" class="index">cubrid_fetch_object</a> - Fetch the next row and return it as an object</li>
        <li><a href="function.cubrid-fetch-row.php" class="index">cubrid_fetch_row</a> - Return a numerical array with the values of the current row</li>
        <li><a href="function.cubrid-field-flags.php" class="index">cubrid_field_flags</a> - Return a string with the flags of the given field offset</li>
        <li><a href="function.cubrid-field-len.php" class="index">cubrid_field_len</a> - Get the maximum length of the specified field</li>
        <li><a href="function.cubrid-field-name.php" class="index">cubrid_field_name</a> - Return the name of the specified field index</li>
        <li><a href="function.cubrid-field-seek.php" class="index">cubrid_field_seek</a> - Move the result set cursor to the specified field offset</li>
        <li><a href="function.cubrid-field-table.php" class="index">cubrid_field_table</a> - Return the name of the table of the specified field</li>
        <li><a href="function.cubrid-field-type.php" class="index">cubrid_field_type</a> - Return the type of the column corresponding to the given field offset</li>
        <li><a href="function.cubrid-free-result.php" class="index">cubrid_free_result</a> - Free the memory occupied by the result data</li>
        <li><a href="function.cubrid-get.php" class="index">cubrid_get</a> - Get a column using OID</li>
        <li><a href="function.cubrid-get-autocommit.php" class="index">cubrid_get_autocommit</a> - Get auto-commit mode of the connection</li>
        <li><a href="function.cubrid-get-charset.php" class="index">cubrid_get_charset</a> - Return the current CUBRID connection charset</li>
        <li><a href="function.cubrid-get-class-name.php" class="index">cubrid_get_class_name</a> - Get the class name using OID</li>
        <li><a href="function.cubrid-get-client-info.php" class="index">cubrid_get_client_info</a> - Return the client library version</li>
        <li><a href="function.cubrid-get-db-parameter.php" class="index">cubrid_get_db_parameter</a> - Returns the CUBRID database parameters</li>
        <li><a href="function.cubrid-get-query-timeout.php" class="index">cubrid_get_query_timeout</a> - Get the query timeout value of the request</li>
        <li><a href="function.cubrid-get-server-info.php" class="index">cubrid_get_server_info</a> - Return the CUBRID server version</li>
        <li><a href="function.cubrid-insert-id.php" class="index">cubrid_insert_id</a> - Return the ID generated for the last updated AUTO_INCREMENT column</li>
        <li><a href="function.cubrid-is-instance.php" class="index">cubrid_is_instance</a> - Check whether the instance pointed by OID exists</li>
        <li><a href="function.cubrid-list-dbs.php" class="index">cubrid_list_dbs</a> - Return an array with the list of all existing CUBRID databases</li>
        <li><a href="function.cubrid-load-from-glo.php" class="index">cubrid_load_from_glo</a> - Read data from a GLO instance and save it in a file</li>
        <li><a href="function.cubrid-lob2-bind.php" class="index">cubrid_lob2_bind</a> - Bind a lob object or a string as a lob object to a prepared statement as parameters</li>
        <li><a href="function.cubrid-lob2-close.php" class="index">cubrid_lob2_close</a> - Close LOB object</li>
        <li><a href="function.cubrid-lob2-export.php" class="index">cubrid_lob2_export</a> - Export the lob object to a file</li>
        <li><a href="function.cubrid-lob2-import.php" class="index">cubrid_lob2_import</a> - Import BLOB/CLOB data from a file</li>
        <li><a href="function.cubrid-lob2-new.php" class="index">cubrid_lob2_new</a> - Create a lob object</li>
        <li><a href="function.cubrid-lob2-read.php" class="index">cubrid_lob2_read</a> - Read from BLOB/CLOB data</li>
        <li><a href="function.cubrid-lob2-seek.php" class="index">cubrid_lob2_seek</a> - Move the cursor of a lob object</li>
        <li><a href="function.cubrid-lob2-seek64.php" class="index">cubrid_lob2_seek64</a> - Move the cursor of a lob object</li>
        <li><a href="function.cubrid-lob2-size.php" class="index">cubrid_lob2_size</a> - Get a lob object's size</li>
        <li><a href="function.cubrid-lob2-size64.php" class="index">cubrid_lob2_size64</a> - Get a lob object's size</li>
        <li><a href="function.cubrid-lob2-tell.php" class="index">cubrid_lob2_tell</a> - Tell the cursor position of the LOB object</li>
        <li><a href="function.cubrid-lob2-tell64.php" class="index">cubrid_lob2_tell64</a> - Tell the cursor position of the LOB object</li>
        <li><a href="function.cubrid-lob2-write.php" class="index">cubrid_lob2_write</a> - Write to a lob object</li>
        <li><a href="function.cubrid-lob-close.php" class="index">cubrid_lob_close</a> - Close BLOB/CLOB data</li>
        <li><a href="function.cubrid-lob-export.php" class="index">cubrid_lob_export</a> - Export BLOB/CLOB data to file</li>
        <li><a href="function.cubrid-lob-get.php" class="index">cubrid_lob_get</a> - Get BLOB/CLOB data</li>
        <li><a href="function.cubrid-lob-send.php" class="index">cubrid_lob_send</a> - Read BLOB/CLOB data and send straight to browser</li>
        <li><a href="function.cubrid-lob-size.php" class="index">cubrid_lob_size</a> - Get BLOB/CLOB data size</li>
        <li><a href="function.cubrid-lock-read.php" class="index">cubrid_lock_read</a> - Set a read lock on the given OID</li>
        <li><a href="function.cubrid-lock-write.php" class="index">cubrid_lock_write</a> - Set a write lock on the given OID</li>
        <li><a href="function.cubrid-move-cursor.php" class="index">cubrid_move_cursor</a> - Move the cursor in the result</li>
        <li><a href="function.cubrid-new-glo.php" class="index">cubrid_new_glo</a> - Create a glo instance</li>
        <li><a href="function.cubrid-next-result.php" class="index">cubrid_next_result</a> - Get result of next query when executing multiple SQL statements</li>
        <li><a href="function.cubrid-num-cols.php" class="index">cubrid_num_cols</a> - Return the number of columns in the result set</li>
        <li><a href="function.cubrid-num-fields.php" class="index">cubrid_num_fields</a> - Return the number of columns in the result set</li>
        <li><a href="function.cubrid-num-rows.php" class="index">cubrid_num_rows</a> - Get the number of rows in the result set</li>
        <li><a href="function.cubrid-pconnect.php" class="index">cubrid_pconnect</a> - Open a persistent connection to a CUBRID server</li>
        <li><a href="function.cubrid-pconnect-with-url.php" class="index">cubrid_pconnect_with_url</a> - Open a persistent connection to CUBRID server</li>
        <li><a href="function.cubrid-ping.php" class="index">cubrid_ping</a> - Ping a server connection or reconnect if there is no connection</li>
        <li><a href="function.cubrid-prepare.php" class="index">cubrid_prepare</a> - Prepare a SQL statement for execution</li>
        <li><a href="function.cubrid-put.php" class="index">cubrid_put</a> - Update a column using OID</li>
        <li><a href="function.cubrid-query.php" class="index">cubrid_query</a> - Send a CUBRID query</li>
        <li><a href="function.cubrid-real-escape-string.php" class="index">cubrid_real_escape_string</a> - Escape special characters in a string for use in an SQL statement</li>
        <li><a href="function.cubrid-result.php" class="index">cubrid_result</a> - Return the value of a specific field in a specific row</li>
        <li><a href="function.cubrid-rollback.php" class="index">cubrid_rollback</a> - Roll back a transaction</li>
        <li><a href="function.cubrid-save-to-glo.php" class="index">cubrid_save_to_glo</a> - Save requested file in a GLO instance</li>
        <li><a href="function.cubrid-schema.php" class="index">cubrid_schema</a> - Get the requested schema information</li>
        <li><a href="function.cubrid-send-glo.php" class="index">cubrid_send_glo</a> - Read data from glo and send it to std output</li>
        <li><a href="function.cubrid-seq-drop.php" class="index">cubrid_seq_drop</a> - Delete an element from sequence type column using OID</li>
        <li><a href="function.cubrid-seq-insert.php" class="index">cubrid_seq_insert</a> - Insert an element to a sequence type column using OID</li>
        <li><a href="function.cubrid-seq-put.php" class="index">cubrid_seq_put</a> - Update the element value of sequence type column using OID</li>
        <li><a href="function.cubrid-set-add.php" class="index">cubrid_set_add</a> - Insert a single element to set type column using OID</li>
        <li><a href="function.cubrid-set-autocommit.php" class="index">cubrid_set_autocommit</a> - Set autocommit mode of the connection</li>
        <li><a href="function.cubrid-set-db-parameter.php" class="index">cubrid_set_db_parameter</a> - Sets the CUBRID database parameters</li>
        <li><a href="function.cubrid-set-drop.php" class="index">cubrid_set_drop</a> - Delete an element from set type column using OID</li>
        <li><a href="function.cubrid-set-query-timeout.php" class="index">cubrid_set_query_timeout</a> - Set the timeout time of query execution</li>
        <li><a href="function.cubrid-unbuffered-query.php" class="index">cubrid_unbuffered_query</a> - Perform a query without fetching the results into memory</li>
        <li><a href="function.cubrid-version.php" class="index">cubrid_version</a> - Get the CUBRID PHP module's version</li>
        <li><a href="curlfile.getfilename.php" class="index">CURLFile::getFilename</a> - Get file name</li>
        <li><a href="curlfile.getmimetype.php" class="index">CURLFile::getMimeType</a> - Get MIME type</li>
        <li><a href="curlfile.getpostfilename.php" class="index">CURLFile::getPostFilename</a> - Get file name for POST</li>
        <li><a href="curlfile.setmimetype.php" class="index">CURLFile::setMimeType</a> - Set MIME type</li>
        <li><a href="curlfile.setpostfilename.php" class="index">CURLFile::setPostFilename</a> - Set file name for POST</li>
        <li><a href="curlfile.construct.php" class="index">CURLFile::__construct</a> - Create a CURLFile object</li>
        <li><a href="curlstringfile.construct.php" class="index">CURLStringFile::__construct</a> - Create a CURLStringFile object</li>
        <li><a href="function.curl-close.php" class="index">curl_close</a> - Close a cURL session</li>
        <li><a href="function.curl-copy-handle.php" class="index">curl_copy_handle</a> - Copy a cURL handle along with all of its preferences</li>
        <li><a href="function.curl-errno.php" class="index">curl_errno</a> - Return the last error number</li>
        <li><a href="function.curl-error.php" class="index">curl_error</a> - Return a string containing the last error for the current session</li>
        <li><a href="function.curl-escape.php" class="index">curl_escape</a> - URL encodes the given string</li>
        <li><a href="function.curl-exec.php" class="index">curl_exec</a> - Perform a cURL session</li>
        <li><a href="function.curl-getinfo.php" class="index">curl_getinfo</a> - Get information regarding a specific transfer</li>
        <li><a href="function.curl-init.php" class="index">curl_init</a> - Initialize a cURL session</li>
        <li><a href="function.curl-multi-add-handle.php" class="index">curl_multi_add_handle</a> - Add a normal cURL handle to a cURL multi handle</li>
        <li><a href="function.curl-multi-close.php" class="index">curl_multi_close</a> - Close a set of cURL handles</li>
        <li><a href="function.curl-multi-errno.php" class="index">curl_multi_errno</a> - Return the last multi curl error number</li>
        <li><a href="function.curl-multi-exec.php" class="index">curl_multi_exec</a> - Run the sub-connections of the current cURL handle</li>
        <li><a href="function.curl-multi-getcontent.php" class="index">curl_multi_getcontent</a> - Return the content of a cURL handle if CURLOPT_RETURNTRANSFER is set</li>
        <li><a href="function.curl-multi-info-read.php" class="index">curl_multi_info_read</a> - Get information about the current transfers</li>
        <li><a href="function.curl-multi-init.php" class="index">curl_multi_init</a> - Returns a new cURL multi handle</li>
        <li><a href="function.curl-multi-remove-handle.php" class="index">curl_multi_remove_handle</a> - Remove a multi handle from a set of cURL handles</li>
        <li><a href="function.curl-multi-select.php" class="index">curl_multi_select</a> - Wait for activity on any curl_multi connection</li>
        <li><a href="function.curl-multi-setopt.php" class="index">curl_multi_setopt</a> - Set a cURL multi option</li>
        <li><a href="function.curl-multi-strerror.php" class="index">curl_multi_strerror</a> - Return string describing error code</li>
        <li><a href="function.curl-pause.php" class="index">curl_pause</a> - Pause and unpause a connection</li>
        <li><a href="function.curl-reset.php" class="index">curl_reset</a> - Reset all options of a libcurl session handle</li>
        <li><a href="function.curl-setopt.php" class="index">curl_setopt</a> - Set an option for a cURL transfer</li>
        <li><a href="function.curl-setopt-array.php" class="index">curl_setopt_array</a> - Set multiple options for a cURL transfer</li>
        <li><a href="function.curl-share-close.php" class="index">curl_share_close</a> - Close a cURL share handle</li>
        <li><a href="function.curl-share-errno.php" class="index">curl_share_errno</a> - Return the last share curl error number</li>
        <li><a href="function.curl-share-init.php" class="index">curl_share_init</a> - Initialize a cURL share handle</li>
        <li><a href="function.curl-share-setopt.php" class="index">curl_share_setopt</a> - Set an option for a cURL share handle</li>
        <li><a href="function.curl-share-strerror.php" class="index">curl_share_strerror</a> - Return string describing the given error code</li>
        <li><a href="function.curl-strerror.php" class="index">curl_strerror</a> - Return string describing the given error code</li>
        <li><a href="function.curl-unescape.php" class="index">curl_unescape</a> - Decodes the given URL encoded string</li>
        <li><a href="function.curl_upkeep.php" class="index">curl_upkeep</a> - Performs any connection upkeep checks</li>
        <li><a href="function.curl-version.php" class="index">curl_version</a> - Gets cURL version information</li>
        <li><a href="function.current.php" class="index">current</a> - Return the current element in an array</li>
        </ul></li>
        <li class='gen-index index-for-d'>d<ul id='refentry-index-for-d'>
        <li><a href="mysql-xdevapi-databaseobject.existsindatabase.php" class="index">DatabaseObject::existsInDatabase</a> - Check if object exists in database</li>
        <li><a href="mysql-xdevapi-databaseobject.getname.php" class="index">DatabaseObject::getName</a> - Get object name</li>
        <li><a href="mysql-xdevapi-databaseobject.getsession.php" class="index">DatabaseObject::getSession</a> - Get session name</li>
        <li><a href="function.date.php" class="index">date</a> - Format a Unix timestamp</li>
        <li><a href="dateinterval.createfromdatestring.php" class="index">DateInterval::createFromDateString</a> - Sets up a DateInterval from the relative parts of the string</li>
        <li><a href="dateinterval.format.php" class="index">DateInterval::format</a> - Formats the interval</li>
        <li><a href="dateinterval.construct.php" class="index">DateInterval::__construct</a> - Creates a new DateInterval object</li>
        <li><a href="dateperiod.createfromiso8601string.php" class="index">DatePeriod::createFromISO8601String</a> - Creates a new DatePeriod object from an ISO8601 string</li>
        <li><a href="dateperiod.getdateinterval.php" class="index">DatePeriod::getDateInterval</a> - Gets the interval</li>
        <li><a href="dateperiod.getenddate.php" class="index">DatePeriod::getEndDate</a> - Gets the end date</li>
        <li><a href="dateperiod.getrecurrences.php" class="index">DatePeriod::getRecurrences</a> - Gets the number of recurrences</li>
        <li><a href="dateperiod.getstartdate.php" class="index">DatePeriod::getStartDate</a> - Gets the start date</li>
        <li><a href="dateperiod.construct.php" class="index">DatePeriod::__construct</a> - Creates a new DatePeriod object</li>
        <li><a href="datetime.add.php" class="index">DateTime::add</a> - Modifies a DateTime object, with added amount of days, months, years, hours, minutes and seconds</li>
        <li><a href="datetime.createfromformat.php" class="index">DateTime::createFromFormat</a> - Parses a time string according to a specified format</li>
        <li><a href="datetime.createfromimmutable.php" class="index">DateTime::createFromImmutable</a> - Returns new DateTime instance encapsulating the given DateTimeImmutable object</li>
        <li><a href="datetime.createfrominterface.php" class="index">DateTime::createFromInterface</a> - Returns new DateTime object encapsulating the given DateTimeInterface object</li>
        <li><a href="datetime.getlasterrors.php" class="index">DateTime::getLastErrors</a> - Alias of DateTimeImmutable::getLastErrors</li>
        <li><a href="datetime.modify.php" class="index">DateTime::modify</a> - Alters the timestamp</li>
        <li><a href="datetime.setdate.php" class="index">DateTime::setDate</a> - Sets the date</li>
        <li><a href="datetime.setisodate.php" class="index">DateTime::setISODate</a> - Sets the ISO date</li>
        <li><a href="datetime.settime.php" class="index">DateTime::setTime</a> - Sets the time</li>
        <li><a href="datetime.settimestamp.php" class="index">DateTime::setTimestamp</a> - Sets the date and time based on an Unix timestamp</li>
        <li><a href="datetime.settimezone.php" class="index">DateTime::setTimezone</a> - Sets the time zone for the DateTime object</li>
        <li><a href="datetime.sub.php" class="index">DateTime::sub</a> - Subtracts an amount of days, months, years, hours, minutes and seconds from
           a DateTime object</li>
        <li><a href="datetime.construct.php" class="index">DateTime::__construct</a> - Returns new DateTime object</li>
        <li><a href="datetime.set-state.php" class="index">DateTime::__set_state</a> - The __set_state handler</li>
        <li><a href="datetime.wakeup.php" class="index">DateTime::__wakeup</a> - The __wakeup handler</li>
        <li><a href="datetimeimmutable.add.php" class="index">DateTimeImmutable::add</a> - Returns a new object, with added amount of days, months, years, hours, minutes and seconds</li>
        <li><a href="datetimeimmutable.createfromformat.php" class="index">DateTimeImmutable::createFromFormat</a> - Parses a time string according to a specified format</li>
        <li><a href="datetimeimmutable.createfrominterface.php" class="index">DateTimeImmutable::createFromInterface</a> - Returns new DateTimeImmutable object encapsulating the given DateTimeInterface object</li>
        <li><a href="datetimeimmutable.createfrommutable.php" class="index">DateTimeImmutable::createFromMutable</a> - Returns new DateTimeImmutable instance encapsulating the given DateTime object</li>
        <li><a href="datetimeimmutable.getlasterrors.php" class="index">DateTimeImmutable::getLastErrors</a> - Returns the warnings and errors</li>
        <li><a href="datetimeimmutable.modify.php" class="index">DateTimeImmutable::modify</a> - Creates a new object with modified timestamp</li>
        <li><a href="datetimeimmutable.setdate.php" class="index">DateTimeImmutable::setDate</a> - Sets the date</li>
        <li><a href="datetimeimmutable.setisodate.php" class="index">DateTimeImmutable::setISODate</a> - Sets the ISO date</li>
        <li><a href="datetimeimmutable.settime.php" class="index">DateTimeImmutable::setTime</a> - Sets the time</li>
        <li><a href="datetimeimmutable.settimestamp.php" class="index">DateTimeImmutable::setTimestamp</a> - Sets the date and time based on a Unix timestamp</li>
        <li><a href="datetimeimmutable.settimezone.php" class="index">DateTimeImmutable::setTimezone</a> - Sets the time zone</li>
        <li><a href="datetimeimmutable.sub.php" class="index">DateTimeImmutable::sub</a> - Subtracts an amount of days, months, years, hours, minutes and seconds</li>
        <li><a href="datetimeimmutable.construct.php" class="index">DateTimeImmutable::__construct</a> - Returns new DateTimeImmutable object</li>
        <li><a href="datetimeimmutable.set-state.php" class="index">DateTimeImmutable::__set_state</a> - The __set_state handler</li>
        <li><a href="datetime.diff.php" class="index">DateTimeInterface::diff</a> - Returns the difference between two DateTime objects</li>
        <li><a href="datetime.format.php" class="index">DateTimeInterface::format</a> - Returns date formatted according to given format</li>
        <li><a href="datetime.getoffset.php" class="index">DateTimeInterface::getOffset</a> - Returns the timezone offset</li>
        <li><a href="datetime.gettimestamp.php" class="index">DateTimeInterface::getTimestamp</a> - Gets the Unix timestamp</li>
        <li><a href="datetime.gettimezone.php" class="index">DateTimeInterface::getTimezone</a> - Return time zone relative to given DateTime</li>
        <li><a href="datetimezone.getlocation.php" class="index">DateTimeZone::getLocation</a> - Returns location information for a timezone</li>
        <li><a href="datetimezone.getname.php" class="index">DateTimeZone::getName</a> - Returns the name of the timezone</li>
        <li><a href="datetimezone.getoffset.php" class="index">DateTimeZone::getOffset</a> - Returns the timezone offset from GMT</li>
        <li><a href="datetimezone.gettransitions.php" class="index">DateTimeZone::getTransitions</a> - Returns all transitions for the timezone</li>
        <li><a href="datetimezone.listabbreviations.php" class="index">DateTimeZone::listAbbreviations</a> - Returns associative array containing dst, offset and the timezone name</li>
        <li><a href="datetimezone.listidentifiers.php" class="index">DateTimeZone::listIdentifiers</a> - Returns a numerically indexed array containing all defined timezone identifiers</li>
        <li><a href="datetimezone.construct.php" class="index">DateTimeZone::__construct</a> - Creates new DateTimeZone object</li>
        <li><a href="function.date-add.php" class="index">date_add</a> - Alias of DateTime::add</li>
        <li><a href="function.date-create.php" class="index">date_create</a> - create a new DateTime object</li>
        <li><a href="function.date-create-from-format.php" class="index">date_create_from_format</a> - Alias of DateTime::createFromFormat</li>
        <li><a href="function.date-create-immutable.php" class="index">date_create_immutable</a> - create a new DateTimeImmutable object</li>
        <li><a href="function.date-create-immutable-from-format.php" class="index">date_create_immutable_from_format</a> - Alias of DateTimeImmutable::createFromFormat</li>
        <li><a href="function.date-date-set.php" class="index">date_date_set</a> - Alias of DateTime::setDate</li>
        <li><a href="function.date-default-timezone-get.php" class="index">date_default_timezone_get</a> - Gets the default timezone used by all date/time functions in a script</li>
        <li><a href="function.date-default-timezone-set.php" class="index">date_default_timezone_set</a> - Sets the default timezone used by all date/time functions in a script</li>
        <li><a href="function.date-diff.php" class="index">date_diff</a> - Alias of DateTime::diff</li>
        <li><a href="function.date-format.php" class="index">date_format</a> - Alias of DateTime::format</li>
        <li><a href="function.date-get-last-errors.php" class="index">date_get_last_errors</a> - Alias of DateTimeImmutable::getLastErrors</li>
        <li><a href="function.date-interval-create-from-date-string.php" class="index">date_interval_create_from_date_string</a> - Alias of DateInterval::createFromDateString</li>
        <li><a href="function.date-interval-format.php" class="index">date_interval_format</a> - Alias of DateInterval::format</li>
        <li><a href="function.date-isodate-set.php" class="index">date_isodate_set</a> - Alias of DateTime::setISODate</li>
        <li><a href="function.date-modify.php" class="index">date_modify</a> - Alias of DateTime::modify</li>
        <li><a href="function.date-offset-get.php" class="index">date_offset_get</a> - Alias of DateTime::getOffset</li>
        <li><a href="function.date-parse.php" class="index">date_parse</a> - Returns associative array with detailed info about given date/time</li>
        <li><a href="function.date-parse-from-format.php" class="index">date_parse_from_format</a> - Get info about given date formatted according to the specified format</li>
        <li><a href="function.date-sub.php" class="index">date_sub</a> - Alias of DateTime::sub</li>
        <li><a href="function.date-sunrise.php" class="index">date_sunrise</a> - Returns time of sunrise for a given day and location</li>
        <li><a href="function.date-sunset.php" class="index">date_sunset</a> - Returns time of sunset for a given day and location</li>
        <li><a href="function.date-sun-info.php" class="index">date_sun_info</a> - Returns an array with information about sunset/sunrise and twilight begin/end</li>
        <li><a href="function.date-timestamp-get.php" class="index">date_timestamp_get</a> - Alias of DateTime::getTimestamp</li>
        <li><a href="function.date-timestamp-set.php" class="index">date_timestamp_set</a> - Alias of DateTime::setTimestamp</li>
        <li><a href="function.date-timezone-get.php" class="index">date_timezone_get</a> - Alias of DateTime::getTimezone</li>
        <li><a href="function.date-timezone-set.php" class="index">date_timezone_set</a> - Alias of DateTime::setTimezone</li>
        <li><a href="function.date-time-set.php" class="index">date_time_set</a> - Alias of DateTime::setTime</li>
        <li><a href="function.db2-autocommit.php" class="index">db2_autocommit</a> - Returns or sets the AUTOCOMMIT state for a database connection</li>
        <li><a href="function.db2-bind-param.php" class="index">db2_bind_param</a> - Binds a PHP variable to an SQL statement parameter</li>
        <li><a href="function.db2-client-info.php" class="index">db2_client_info</a> - Returns an object with properties that describe the DB2 database client</li>
        <li><a href="function.db2-close.php" class="index">db2_close</a> - Closes a database connection</li>
        <li><a href="function.db2-columns.php" class="index">db2_columns</a> - Returns a result set listing the columns and associated metadata for a table</li>
        <li><a href="function.db2-column-privileges.php" class="index">db2_column_privileges</a> - Returns a result set listing the columns and associated privileges for a table</li>
        <li><a href="function.db2-commit.php" class="index">db2_commit</a> - Commits a transaction</li>
        <li><a href="function.db2-connect.php" class="index">db2_connect</a> - Returns a connection to a database</li>
        <li><a href="function.db2-conn-error.php" class="index">db2_conn_error</a> - Returns a string containing the SQLSTATE returned by the last connection attempt</li>
        <li><a href="function.db2-conn-errormsg.php" class="index">db2_conn_errormsg</a> - Returns the last connection error message and SQLCODE value</li>
        <li><a href="function.db2-cursor-type.php" class="index">db2_cursor_type</a> - Returns the cursor type used by a statement resource</li>
        <li><a href="function.db2-escape-string.php" class="index">db2_escape_string</a> - Used to escape certain characters</li>
        <li><a href="function.db2-exec.php" class="index">db2_exec</a> - Executes an SQL statement directly</li>
        <li><a href="function.db2-execute.php" class="index">db2_execute</a> - Executes a prepared SQL statement</li>
        <li><a href="function.db2-fetch-array.php" class="index">db2_fetch_array</a> - Returns an array, indexed by column position, representing a row in a result set</li>
        <li><a href="function.db2-fetch-assoc.php" class="index">db2_fetch_assoc</a> - Returns an array, indexed by column name, representing a row in a result set</li>
        <li><a href="function.db2-fetch-both.php" class="index">db2_fetch_both</a> - Returns an array, indexed by both column name and position, representing a row in a result set</li>
        <li><a href="function.db2-fetch-object.php" class="index">db2_fetch_object</a> - Returns an object with properties representing columns in the fetched row</li>
        <li><a href="function.db2-fetch-row.php" class="index">db2_fetch_row</a> - Sets the result set pointer to the next row or requested row</li>
        <li><a href="function.db2-field-display-size.php" class="index">db2_field_display_size</a> - Returns the maximum number of bytes required to display a column</li>
        <li><a href="function.db2-field-name.php" class="index">db2_field_name</a> - Returns the name of the column in the result set</li>
        <li><a href="function.db2-field-num.php" class="index">db2_field_num</a> - Returns the position of the named column in a result set</li>
        <li><a href="function.db2-field-precision.php" class="index">db2_field_precision</a> - Returns the precision of the indicated column in a result set</li>
        <li><a href="function.db2-field-scale.php" class="index">db2_field_scale</a> - Returns the scale of the indicated column in a result set</li>
        <li><a href="function.db2-field-type.php" class="index">db2_field_type</a> - Returns the data type of the indicated column in a result set</li>
        <li><a href="function.db2-field-width.php" class="index">db2_field_width</a> - Returns the width of the current value of the indicated column in a result set</li>
        <li><a href="function.db2-foreign-keys.php" class="index">db2_foreign_keys</a> - Returns a result set listing the foreign keys for a table</li>
        <li><a href="function.db2-free-result.php" class="index">db2_free_result</a> - Frees resources associated with a result set</li>
        <li><a href="function.db2-free-stmt.php" class="index">db2_free_stmt</a> - Frees resources associated with the indicated statement resource</li>
        <li><a href="function.db2-get-option.php" class="index">db2_get_option</a> - Retrieves an option value for a statement resource or a connection resource</li>
        <li><a href="function.db2-last-insert-id.php" class="index">db2_last_insert_id</a> - Returns the auto generated ID of the last insert query that successfully 
          executed on this connection</li>
        <li><a href="function.db2-lob-read.php" class="index">db2_lob_read</a> - Gets a user defined size of LOB files with each invocation</li>
        <li><a href="function.db2-next-result.php" class="index">db2_next_result</a> - Requests the next result set from a stored procedure</li>
        <li><a href="function.db2-num-fields.php" class="index">db2_num_fields</a> - Returns the number of fields contained in a result set</li>
        <li><a href="function.db2-num-rows.php" class="index">db2_num_rows</a> - Returns the number of rows affected by an SQL statement</li>
        <li><a href="function.db2-pclose.php" class="index">db2_pclose</a> - Closes a persistent database connection</li>
        <li><a href="function.db2-pconnect.php" class="index">db2_pconnect</a> - Returns a persistent connection to a database</li>
        <li><a href="function.db2-prepare.php" class="index">db2_prepare</a> - Prepares an SQL statement to be executed</li>
        <li><a href="function.db2-primary-keys.php" class="index">db2_primary_keys</a> - Returns a result set listing primary keys for a table</li>
        <li><a href="function.db2-procedures.php" class="index">db2_procedures</a> - Returns a result set listing the stored procedures registered in a database</li>
        <li><a href="function.db2-procedure-columns.php" class="index">db2_procedure_columns</a> - Returns a result set listing stored procedure parameters</li>
        <li><a href="function.db2-result.php" class="index">db2_result</a> - Returns a single column from a row in the result set</li>
        <li><a href="function.db2-rollback.php" class="index">db2_rollback</a> - Rolls back a transaction</li>
        <li><a href="function.db2-server-info.php" class="index">db2_server_info</a> - Returns an object with properties that describe the DB2 database server</li>
        <li><a href="function.db2-set-option.php" class="index">db2_set_option</a> - Set options for connection or statement resources</li>
        <li><a href="function.db2-special-columns.php" class="index">db2_special_columns</a> - Returns a result set listing the unique row identifier columns for a table</li>
        <li><a href="function.db2-statistics.php" class="index">db2_statistics</a> - Returns a result set listing the index and statistics for a table</li>
        <li><a href="function.db2-stmt-error.php" class="index">db2_stmt_error</a> - Returns a string containing the SQLSTATE returned by an SQL statement</li>
        <li><a href="function.db2-stmt-errormsg.php" class="index">db2_stmt_errormsg</a> - Returns a string containing the last SQL statement error message</li>
        <li><a href="function.db2-tables.php" class="index">db2_tables</a> - Returns a result set listing the tables and associated metadata in a database</li>
        <li><a href="function.db2-table-privileges.php" class="index">db2_table_privileges</a> - Returns a result set listing the tables and associated privileges in a database</li>
        <li><a href="function.dbase-add-record.php" class="index">dbase_add_record</a> - Adds a record to a database</li>
        <li><a href="function.dbase-close.php" class="index">dbase_close</a> - Closes a database</li>
        <li><a href="function.dbase-create.php" class="index">dbase_create</a> - Creates a database</li>
        <li><a href="function.dbase-delete-record.php" class="index">dbase_delete_record</a> - Deletes a record from a database</li>
        <li><a href="function.dbase-get-header-info.php" class="index">dbase_get_header_info</a> - Gets the header info of a database</li>
        <li><a href="function.dbase-get-record.php" class="index">dbase_get_record</a> - Gets a record from a database as an indexed array</li>
        <li><a href="function.dbase-get-record-with-names.php" class="index">dbase_get_record_with_names</a> - Gets a record from a database as an associative array</li>
        <li><a href="function.dbase-numfields.php" class="index">dbase_numfields</a> - Gets the number of fields of a database</li>
        <li><a href="function.dbase-numrecords.php" class="index">dbase_numrecords</a> - Gets the number of records in a database</li>
        <li><a href="function.dbase-open.php" class="index">dbase_open</a> - Opens a database</li>
        <li><a href="function.dbase-pack.php" class="index">dbase_pack</a> - Packs a database</li>
        <li><a href="function.dbase-replace-record.php" class="index">dbase_replace_record</a> - Replaces a record in a database</li>
        <li><a href="function.dba-close.php" class="index">dba_close</a> - Close a DBA database</li>
        <li><a href="function.dba-delete.php" class="index">dba_delete</a> - Delete DBA entry specified by key</li>
        <li><a href="function.dba-exists.php" class="index">dba_exists</a> - Check whether key exists</li>
        <li><a href="function.dba-fetch.php" class="index">dba_fetch</a> - Fetch data specified by key</li>
        <li><a href="function.dba-firstkey.php" class="index">dba_firstkey</a> - Fetch first key</li>
        <li><a href="function.dba-handlers.php" class="index">dba_handlers</a> - List all the handlers available</li>
        <li><a href="function.dba-insert.php" class="index">dba_insert</a> - Insert entry</li>
        <li><a href="function.dba-key-split.php" class="index">dba_key_split</a> - Splits a key in string representation into array representation</li>
        <li><a href="function.dba-list.php" class="index">dba_list</a> - List all open database files</li>
        <li><a href="function.dba-nextkey.php" class="index">dba_nextkey</a> - Fetch next key</li>
        <li><a href="function.dba-open.php" class="index">dba_open</a> - Open database</li>
        <li><a href="function.dba-optimize.php" class="index">dba_optimize</a> - Optimize database</li>
        <li><a href="function.dba-popen.php" class="index">dba_popen</a> - Open database persistently</li>
        <li><a href="function.dba-replace.php" class="index">dba_replace</a> - Replace or insert entry</li>
        <li><a href="function.dba-sync.php" class="index">dba_sync</a> - Synchronize database</li>
        <li><a href="function.dcgettext.php" class="index">dcgettext</a> - Overrides the domain for a single lookup</li>
        <li><a href="function.dcngettext.php" class="index">dcngettext</a> - Plural version of dcgettext</li>
        <li><a href="function.debug-backtrace.php" class="index">debug_backtrace</a> - Generates a backtrace</li>
        <li><a href="function.debug-print-backtrace.php" class="index">debug_print_backtrace</a> - Prints a backtrace</li>
        <li><a href="function.debug-zval-dump.php" class="index">debug_zval_dump</a> - Dumps a string representation of an internal zval structure to output</li>
        <li><a href="function.decbin.php" class="index">decbin</a> - Decimal to binary</li>
        <li><a href="function.dechex.php" class="index">dechex</a> - Decimal to hexadecimal</li>
        <li><a href="function.decoct.php" class="index">decoct</a> - Decimal to octal</li>
        <li><a href="function.define.php" class="index">define</a> - Defines a named constant</li>
        <li><a href="function.defined.php" class="index">defined</a> - Checks whether a constant with the given name exists</li>
        <li><a href="function.deflate-add.php" class="index">deflate_add</a> - Incrementally deflate data</li>
        <li><a href="function.deflate-init.php" class="index">deflate_init</a> - Initialize an incremental deflate context</li>
        <li><a href="function.deg2rad.php" class="index">deg2rad</a> - Converts the number in degrees to the radian equivalent</li>
        <li><a href="function.delete.php" class="index">delete</a> - See unlink or unset</li>
        <li><a href="function.dgettext.php" class="index">dgettext</a> - Override the current domain</li>
        <li><a href="function.die.php" class="index">die</a> - Equivalent to exit</li>
        <li><a href="function.dio-close.php" class="index">dio_close</a> - Closes the file descriptor given by fd</li>
        <li><a href="function.dio-fcntl.php" class="index">dio_fcntl</a> - Performs a c library fcntl on fd</li>
        <li><a href="function.dio-open.php" class="index">dio_open</a> - Opens a file (creating it if necessary) at a lower level than the
           C library input/ouput stream functions allow</li>
        <li><a href="function.dio-read.php" class="index">dio_read</a> - Reads bytes from a file descriptor</li>
        <li><a href="function.dio-seek.php" class="index">dio_seek</a> - Seeks to pos on fd from whence</li>
        <li><a href="function.dio-stat.php" class="index">dio_stat</a> - Gets stat information about the file descriptor fd</li>
        <li><a href="function.dio-tcsetattr.php" class="index">dio_tcsetattr</a> - Sets terminal attributes and baud rate for a serial port</li>
        <li><a href="function.dio-truncate.php" class="index">dio_truncate</a> - Truncates file descriptor fd to offset bytes</li>
        <li><a href="function.dio-write.php" class="index">dio_write</a> - Writes data to fd with optional truncation at length</li>
        <li><a href="function.dir.php" class="index">dir</a> - Return an instance of the Directory class</li>
        <li><a href="directory.close.php" class="index">Directory::close</a> - Close directory handle</li>
        <li><a href="directory.read.php" class="index">Directory::read</a> - Read entry from directory handle</li>
        <li><a href="directory.rewind.php" class="index">Directory::rewind</a> - Rewind directory handle</li>
        <li><a href="directoryiterator.current.php" class="index">DirectoryIterator::current</a> - Return the current DirectoryIterator item</li>
        <li><a href="directoryiterator.getbasename.php" class="index">DirectoryIterator::getBasename</a> - Get base name of current DirectoryIterator item</li>
        <li><a href="directoryiterator.getextension.php" class="index">DirectoryIterator::getExtension</a> - Gets the file extension</li>
        <li><a href="directoryiterator.getfilename.php" class="index">DirectoryIterator::getFilename</a> - Return file name of current DirectoryIterator item</li>
        <li><a href="directoryiterator.isdot.php" class="index">DirectoryIterator::isDot</a> - Determine if current DirectoryIterator item is '.' or '..'</li>
        <li><a href="directoryiterator.key.php" class="index">DirectoryIterator::key</a> - Return the key for the current DirectoryIterator item</li>
        <li><a href="directoryiterator.next.php" class="index">DirectoryIterator::next</a> - Move forward to next DirectoryIterator item</li>
        <li><a href="directoryiterator.rewind.php" class="index">DirectoryIterator::rewind</a> - Rewind the DirectoryIterator back to the start</li>
        <li><a href="directoryiterator.seek.php" class="index">DirectoryIterator::seek</a> - Seek to a DirectoryIterator item</li>
        <li><a href="directoryiterator.valid.php" class="index">DirectoryIterator::valid</a> - Check whether current DirectoryIterator position is a valid file</li>
        <li><a href="directoryiterator.construct.php" class="index">DirectoryIterator::__construct</a> - Constructs a new directory iterator from a path</li>
        <li><a href="directoryiterator.tostring.php" class="index">DirectoryIterator::__toString</a> - Get file name as a string</li>
        <li><a href="function.dirname.php" class="index">dirname</a> - Returns a parent directory's path</li>
        <li><a href="function.diskfreespace.php" class="index">diskfreespace</a> - Alias of disk_free_space</li>
        <li><a href="function.disk-free-space.php" class="index">disk_free_space</a> - Returns available space on filesystem or disk partition</li>
        <li><a href="function.disk-total-space.php" class="index">disk_total_space</a> - Returns the total size of a filesystem or disk partition</li>
        <li><a href="function.dl.php" class="index">dl</a> - Loads a PHP extension at runtime</li>
        <li><a href="function.dngettext.php" class="index">dngettext</a> - Plural version of dgettext</li>
        <li><a href="function.dns-check-record.php" class="index">dns_check_record</a> - Alias of checkdnsrr</li>
        <li><a href="function.dns-get-mx.php" class="index">dns_get_mx</a> - Alias of getmxrr</li>
        <li><a href="function.dns-get-record.php" class="index">dns_get_record</a> - Fetch DNS Resource Records associated with a hostname</li>
        <li><a href="mysql-xdevapi-docresult.fetchall.php" class="index">DocResult::fetchAll</a> - Get all rows</li>
        <li><a href="mysql-xdevapi-docresult.fetchone.php" class="index">DocResult::fetchOne</a> - Get one row</li>
        <li><a href="mysql-xdevapi-docresult.getwarnings.php" class="index">DocResult::getWarnings</a> - Get warnings from last operation</li>
        <li><a href="mysql-xdevapi-docresult.getwarningscount.php" class="index">DocResult::getWarningsCount</a> - Get warning count from last operation</li>
        <li><a href="mysql-xdevapi-docresult.construct.php" class="index">DocResult::__construct</a> - DocResult constructor</li>
        <li><a href="domattr.isid.php" class="index">DOMAttr::isId</a> - Checks if attribute is a defined ID</li>
        <li><a href="domattr.construct.php" class="index">DOMAttr::__construct</a> - Creates a new DOMAttr object</li>
        <li><a href="domcdatasection.construct.php" class="index">DOMCdataSection::__construct</a> - Constructs a new DOMCdataSection object</li>
        <li><a href="domcharacterdata.after.php" class="index">DOMCharacterData::after</a> - Adds nodes after the character data</li>
        <li><a href="domcharacterdata.appenddata.php" class="index">DOMCharacterData::appendData</a> - Append the string to the end of the character data of the node</li>
        <li><a href="domcharacterdata.before.php" class="index">DOMCharacterData::before</a> - Adds nodes before the node</li>
        <li><a href="domcharacterdata.deletedata.php" class="index">DOMCharacterData::deleteData</a> - Remove a range of characters from the node</li>
        <li><a href="domcharacterdata.insertdata.php" class="index">DOMCharacterData::insertData</a> - Insert a string at the specified 16-bit unit offset</li>
        <li><a href="domcharacterdata.remove.php" class="index">DOMCharacterData::remove</a> - Removes the character data</li>
        <li><a href="domcharacterdata.replacedata.php" class="index">DOMCharacterData::replaceData</a> - Replace a substring within the DOMCharacterData node</li>
        <li><a href="domcharacterdata.replacewith.php" class="index">DOMCharacterData::replaceWith</a> - Replaces the character data with new nodes</li>
        <li><a href="domcharacterdata.substringdata.php" class="index">DOMCharacterData::substringData</a> - Extracts a range of data from the node</li>
        <li><a href="domchildnode.after.php" class="index">DOMChildNode::after</a> - Adds nodes after the node</li>
        <li><a href="domchildnode.before.php" class="index">DOMChildNode::before</a> - Adds nodes before the node</li>
        <li><a href="domchildnode.remove.php" class="index">DOMChildNode::remove</a> - Removes the node</li>
        <li><a href="domchildnode.replacewith.php" class="index">DOMChildNode::replaceWith</a> - Replaces the node with new nodes</li>
        <li><a href="domcomment.construct.php" class="index">DOMComment::__construct</a> - Creates a new DOMComment object</li>
        <li><a href="domdocument.adoptnode.php" class="index">DOMDocument::adoptNode</a> - Transfer a node from another document</li>
        <li><a href="domdocument.append.php" class="index">DOMDocument::append</a> - Appends nodes after the last child node</li>
        <li><a href="domdocument.createattribute.php" class="index">DOMDocument::createAttribute</a> - Create new attribute</li>
        <li><a href="domdocument.createattributens.php" class="index">DOMDocument::createAttributeNS</a> - Create new attribute node with an associated namespace</li>
        <li><a href="domdocument.createcdatasection.php" class="index">DOMDocument::createCDATASection</a> - Create new cdata node</li>
        <li><a href="domdocument.createcomment.php" class="index">DOMDocument::createComment</a> - Create new comment node</li>
        <li><a href="domdocument.createdocumentfragment.php" class="index">DOMDocument::createDocumentFragment</a> - Create new document fragment</li>
        <li><a href="domdocument.createelement.php" class="index">DOMDocument::createElement</a> - Create new element node</li>
        <li><a href="domdocument.createelementns.php" class="index">DOMDocument::createElementNS</a> - Create new element node with an associated namespace</li>
        <li><a href="domdocument.createentityreference.php" class="index">DOMDocument::createEntityReference</a> - Create new entity reference node</li>
        <li><a href="domdocument.createprocessinginstruction.php" class="index">DOMDocument::createProcessingInstruction</a> - Creates new PI node</li>
        <li><a href="domdocument.createtextnode.php" class="index">DOMDocument::createTextNode</a> - Create new text node</li>
        <li><a href="domdocument.getelementbyid.php" class="index">DOMDocument::getElementById</a> - Searches for an element with a certain id</li>
        <li><a href="domdocument.getelementsbytagname.php" class="index">DOMDocument::getElementsByTagName</a> - Searches for all elements with given local tag name</li>
        <li><a href="domdocument.getelementsbytagnamens.php" class="index">DOMDocument::getElementsByTagNameNS</a> - Searches for all elements with given tag name in specified namespace</li>
        <li><a href="domdocument.importnode.php" class="index">DOMDocument::importNode</a> - Import node into current document</li>
        <li><a href="domdocument.load.php" class="index">DOMDocument::load</a> - Load XML from a file</li>
        <li><a href="domdocument.loadhtml.php" class="index">DOMDocument::loadHTML</a> - Load HTML from a string</li>
        <li><a href="domdocument.loadhtmlfile.php" class="index">DOMDocument::loadHTMLFile</a> - Load HTML from a file</li>
        <li><a href="domdocument.loadxml.php" class="index">DOMDocument::loadXML</a> - Load XML from a string</li>
        <li><a href="domdocument.normalizedocument.php" class="index">DOMDocument::normalizeDocument</a> - Normalizes the document</li>
        <li><a href="domdocument.prepend.php" class="index">DOMDocument::prepend</a> - Prepends nodes before the first child node</li>
        <li><a href="domdocument.registernodeclass.php" class="index">DOMDocument::registerNodeClass</a> - Register extended class used to create base node type</li>
        <li><a href="domdocument.relaxngvalidate.php" class="index">DOMDocument::relaxNGValidate</a> - Performs relaxNG validation on the document</li>
        <li><a href="domdocument.relaxngvalidatesource.php" class="index">DOMDocument::relaxNGValidateSource</a> - Performs relaxNG validation on the document</li>
        <li><a href="domdocument.replacechildren.php" class="index">DOMDocument::replaceChildren</a> - Replace children in document</li>
        <li><a href="domdocument.save.php" class="index">DOMDocument::save</a> - Dumps the internal XML tree back into a file</li>
        <li><a href="domdocument.savehtml.php" class="index">DOMDocument::saveHTML</a> - Dumps the internal document into a string using HTML formatting</li>
        <li><a href="domdocument.savehtmlfile.php" class="index">DOMDocument::saveHTMLFile</a> - Dumps the internal document into a file using HTML formatting</li>
        <li><a href="domdocument.savexml.php" class="index">DOMDocument::saveXML</a> - Dumps the internal XML tree back into a string</li>
        <li><a href="domdocument.schemavalidate.php" class="index">DOMDocument::schemaValidate</a> - Validates a document based on a schema. Only XML Schema 1.0 is supported.</li>
        <li><a href="domdocument.schemavalidatesource.php" class="index">DOMDocument::schemaValidateSource</a> - Validates a document based on a schema</li>
        <li><a href="domdocument.validate.php" class="index">DOMDocument::validate</a> - Validates the document based on its DTD</li>
        <li><a href="domdocument.xinclude.php" class="index">DOMDocument::xinclude</a> - Substitutes XIncludes in a DOMDocument Object</li>
        <li><a href="domdocument.construct.php" class="index">DOMDocument::__construct</a> - Creates a new DOMDocument object</li>
        <li><a href="domdocumentfragment.append.php" class="index">DOMDocumentFragment::append</a> - Appends nodes after the last child node</li>
        <li><a href="domdocumentfragment.appendxml.php" class="index">DOMDocumentFragment::appendXML</a> - Append raw XML data</li>
        <li><a href="domdocumentfragment.prepend.php" class="index">DOMDocumentFragment::prepend</a> - Prepends nodes before the first child node</li>
        <li><a href="domdocumentfragment.replacechildren.php" class="index">DOMDocumentFragment::replaceChildren</a> - Replace children in fragment</li>
        <li><a href="domdocumentfragment.construct.php" class="index">DOMDocumentFragment::__construct</a> - Constructs a DOMDocumentFragment object</li>
        <li><a href="domelement.after.php" class="index">DOMElement::after</a> - Adds nodes after the element</li>
        <li><a href="domelement.append.php" class="index">DOMElement::append</a> - Appends nodes after the last child node</li>
        <li><a href="domelement.before.php" class="index">DOMElement::before</a> - Adds nodes before the element</li>
        <li><a href="domelement.getattribute.php" class="index">DOMElement::getAttribute</a> - Returns value of attribute</li>
        <li><a href="domelement.getattributenames.php" class="index">DOMElement::getAttributeNames</a> - Get attribute names</li>
        <li><a href="domelement.getattributenode.php" class="index">DOMElement::getAttributeNode</a> - Returns attribute node</li>
        <li><a href="domelement.getattributenodens.php" class="index">DOMElement::getAttributeNodeNS</a> - Returns attribute node</li>
        <li><a href="domelement.getattributens.php" class="index">DOMElement::getAttributeNS</a> - Returns value of attribute</li>
        <li><a href="domelement.getelementsbytagname.php" class="index">DOMElement::getElementsByTagName</a> - Gets elements by tagname</li>
        <li><a href="domelement.getelementsbytagnamens.php" class="index">DOMElement::getElementsByTagNameNS</a> - Get elements by namespaceURI and localName</li>
        <li><a href="domelement.hasattribute.php" class="index">DOMElement::hasAttribute</a> - Checks to see if attribute exists</li>
        <li><a href="domelement.hasattributens.php" class="index">DOMElement::hasAttributeNS</a> - Checks to see if attribute exists</li>
        <li><a href="domelement.insertadjacentelement.php" class="index">DOMElement::insertAdjacentElement</a> - Insert adjacent element</li>
        <li><a href="domelement.insertadjacenttext.php" class="index">DOMElement::insertAdjacentText</a> - Insert adjacent text</li>
        <li><a href="domelement.prepend.php" class="index">DOMElement::prepend</a> - Prepends nodes before the first child node</li>
        <li><a href="domelement.remove.php" class="index">DOMElement::remove</a> - Removes the element</li>
        <li><a href="domelement.removeattribute.php" class="index">DOMElement::removeAttribute</a> - Removes attribute</li>
        <li><a href="domelement.removeattributenode.php" class="index">DOMElement::removeAttributeNode</a> - Removes attribute</li>
        <li><a href="domelement.removeattributens.php" class="index">DOMElement::removeAttributeNS</a> - Removes attribute</li>
        <li><a href="domelement.replacechildren.php" class="index">DOMElement::replaceChildren</a> - Replace children in element</li>
        <li><a href="domelement.replacewith.php" class="index">DOMElement::replaceWith</a> - Replaces the element with new nodes</li>
        <li><a href="domelement.setattribute.php" class="index">DOMElement::setAttribute</a> - Adds new or modifies existing attribute</li>
        <li><a href="domelement.setattributenode.php" class="index">DOMElement::setAttributeNode</a> - Adds new attribute node to element</li>
        <li><a href="domelement.setattributenodens.php" class="index">DOMElement::setAttributeNodeNS</a> - Adds new attribute node to element</li>
        <li><a href="domelement.setattributens.php" class="index">DOMElement::setAttributeNS</a> - Adds new attribute</li>
        <li><a href="domelement.setidattribute.php" class="index">DOMElement::setIdAttribute</a> - Declares the attribute specified by name to be of type ID</li>
        <li><a href="domelement.setidattributenode.php" class="index">DOMElement::setIdAttributeNode</a> - Declares the attribute specified by node to be of type ID</li>
        <li><a href="domelement.setidattributens.php" class="index">DOMElement::setIdAttributeNS</a> - Declares the attribute specified by local name and namespace URI to be of type ID</li>
        <li><a href="domelement.toggleattribute.php" class="index">DOMElement::toggleAttribute</a> - Toggle attribute</li>
        <li><a href="domelement.construct.php" class="index">DOMElement::__construct</a> - Creates a new DOMElement object</li>
        <li><a href="domentityreference.construct.php" class="index">DOMEntityReference::__construct</a> - Creates a new DOMEntityReference object</li>
        <li><a href="domimplementation.createdocument.php" class="index">DOMImplementation::createDocument</a> - Creates a DOMDocument object of the specified type with its document element</li>
        <li><a href="domimplementation.createdocumenttype.php" class="index">DOMImplementation::createDocumentType</a> - Creates an empty DOMDocumentType object</li>
        <li><a href="domimplementation.hasfeature.php" class="index">DOMImplementation::hasFeature</a> - Test if the DOM implementation implements a specific feature</li>
        <li><a href="domimplementation.construct.php" class="index">DOMImplementation::__construct</a> - Creates a new DOMImplementation object</li>
        <li><a href="domnamednodemap.count.php" class="index">DOMNamedNodeMap::count</a> - Get number of nodes in the map</li>
        <li><a href="domnamednodemap.getiterator.php" class="index">DOMNamedNodeMap::getIterator</a> - Retrieve an external iterator</li>
        <li><a href="domnamednodemap.getnameditem.php" class="index">DOMNamedNodeMap::getNamedItem</a> - Retrieves a node specified by name</li>
        <li><a href="domnamednodemap.getnameditemns.php" class="index">DOMNamedNodeMap::getNamedItemNS</a> - Retrieves a node specified by local name and namespace URI</li>
        <li><a href="domnamednodemap.item.php" class="index">DOMNamedNodeMap::item</a> - Retrieves a node specified by index</li>
        <li><a href="domnode.appendchild.php" class="index">DOMNode::appendChild</a> - Adds new child at the end of the children</li>
        <li><a href="domnode.c14n.php" class="index">DOMNode::C14N</a> - Canonicalize nodes to a string</li>
        <li><a href="domnode.c14nfile.php" class="index">DOMNode::C14NFile</a> - Canonicalize nodes to a file</li>
        <li><a href="domnode.clonenode.php" class="index">DOMNode::cloneNode</a> - Clones a node</li>
        <li><a href="domnode.contains.php" class="index">DOMNode::contains</a> - Checks if node contains other node</li>
        <li><a href="domnode.getlineno.php" class="index">DOMNode::getLineNo</a> - Get line number for a node</li>
        <li><a href="domnode.getnodepath.php" class="index">DOMNode::getNodePath</a> - Get an XPath for a node</li>
        <li><a href="domnode.getrootnode.php" class="index">DOMNode::getRootNode</a> - Get root node</li>
        <li><a href="domnode.hasattributes.php" class="index">DOMNode::hasAttributes</a> - Checks if node has attributes</li>
        <li><a href="domnode.haschildnodes.php" class="index">DOMNode::hasChildNodes</a> - Checks if node has children</li>
        <li><a href="domnode.insertbefore.php" class="index">DOMNode::insertBefore</a> - Adds a new child before a reference node</li>
        <li><a href="domnode.isdefaultnamespace.php" class="index">DOMNode::isDefaultNamespace</a> - Checks if the specified namespaceURI is the default namespace or not</li>
        <li><a href="domnode.isequalnode.php" class="index">DOMNode::isEqualNode</a> - Checks that both nodes are equal</li>
        <li><a href="domnode.issamenode.php" class="index">DOMNode::isSameNode</a> - Indicates if two nodes are the same node</li>
        <li><a href="domnode.issupported.php" class="index">DOMNode::isSupported</a> - Checks if feature is supported for specified version</li>
        <li><a href="domnode.lookupnamespaceuri.php" class="index">DOMNode::lookupNamespaceURI</a> - Gets the namespace URI of the node based on the prefix</li>
        <li><a href="domnode.lookupprefix.php" class="index">DOMNode::lookupPrefix</a> - Gets the namespace prefix of the node based on the namespace URI</li>
        <li><a href="domnode.normalize.php" class="index">DOMNode::normalize</a> - Normalizes the node</li>
        <li><a href="domnode.removechild.php" class="index">DOMNode::removeChild</a> - Removes child from list of children</li>
        <li><a href="domnode.replacechild.php" class="index">DOMNode::replaceChild</a> - Replaces a child</li>
        <li><a href="domnodelist.count.php" class="index">DOMNodeList::count</a> - Get number of nodes in the list</li>
        <li><a href="domnodelist.getiterator.php" class="index">DOMNodeList::getIterator</a> - Retrieve an external iterator</li>
        <li><a href="domnodelist.item.php" class="index">DOMNodeList::item</a> - Retrieves a node specified by index</li>
        <li><a href="domparentnode.append.php" class="index">DOMParentNode::append</a> - Appends nodes after the last child node</li>
        <li><a href="domparentnode.prepend.php" class="index">DOMParentNode::prepend</a> - Prepends nodes before the first child node</li>
        <li><a href="domparentnode.replacechildren.php" class="index">DOMParentNode::replaceChildren</a> - Replace children in node</li>
        <li><a href="domprocessinginstruction.construct.php" class="index">DOMProcessingInstruction::__construct</a> - Creates a new DOMProcessingInstruction object</li>
        <li><a href="domtext.iselementcontentwhitespace.php" class="index">DOMText::isElementContentWhitespace</a> - Returns whether this text node contains whitespace in element content</li>
        <li><a href="domtext.iswhitespaceinelementcontent.php" class="index">DOMText::isWhitespaceInElementContent</a> - Indicates whether this text node contains whitespace</li>
        <li><a href="domtext.splittext.php" class="index">DOMText::splitText</a> - Breaks this node into two nodes at the specified offset</li>
        <li><a href="domtext.construct.php" class="index">DOMText::__construct</a> - Creates a new DOMText object</li>
        <li><a href="domxpath.evaluate.php" class="index">DOMXPath::evaluate</a> - Evaluates the given XPath expression and returns a typed result if possible</li>
        <li><a href="domxpath.query.php" class="index">DOMXPath::query</a> - Evaluates the given XPath expression</li>
        <li><a href="domxpath.registernamespace.php" class="index">DOMXPath::registerNamespace</a> - Registers the namespace with the DOMXPath object</li>
        <li><a href="domxpath.registerphpfunctions.php" class="index">DOMXPath::registerPhpFunctions</a> - Register PHP functions as XPath functions</li>
        <li><a href="domxpath.construct.php" class="index">DOMXPath::__construct</a> - Creates a new DOMXPath object</li>
        <li><a href="function.dom-import-simplexml.php" class="index">dom_import_simplexml</a> - Gets a DOMElement object from a
           SimpleXMLElement object</li>
        <li><a href="dotnet.construct.php" class="index">dotnet::__construct</a> - dotnet class constructor</li>
        <li><a href="function.doubleval.php" class="index">doubleval</a> - Alias of floatval</li>
        <li><a href="ds-collection.clear.php" class="index">Ds\Collection::clear</a> - Removes all values</li>
        <li><a href="ds-collection.copy.php" class="index">Ds\Collection::copy</a> - Returns a shallow copy of the collection</li>
        <li><a href="ds-collection.isempty.php" class="index">Ds\Collection::isEmpty</a> - Returns whether the collection is empty</li>
        <li><a href="ds-collection.toarray.php" class="index">Ds\Collection::toArray</a> - Converts the collection to an array</li>
        <li><a href="ds-deque.allocate.php" class="index">Ds\Deque::allocate</a> - Allocates enough memory for a required capacity</li>
        <li><a href="ds-deque.apply.php" class="index">Ds\Deque::apply</a> - Updates all values by applying a callback function to each value</li>
        <li><a href="ds-deque.capacity.php" class="index">Ds\Deque::capacity</a> - Returns the current capacity</li>
        <li><a href="ds-deque.clear.php" class="index">Ds\Deque::clear</a> - Removes all values from the deque</li>
        <li><a href="ds-deque.contains.php" class="index">Ds\Deque::contains</a> - Determines if the deque contains given values</li>
        <li><a href="ds-deque.copy.php" class="index">Ds\Deque::copy</a> - Returns a shallow copy of the deque</li>
        <li><a href="ds-deque.count.php" class="index">Ds\Deque::count</a> - Returns the number of values in the collection</li>
        <li><a href="ds-deque.filter.php" class="index">Ds\Deque::filter</a> - Creates a new deque using a callable to
            determine which values to include</li>
        <li><a href="ds-deque.find.php" class="index">Ds\Deque::find</a> - Attempts to find a value's index</li>
        <li><a href="ds-deque.first.php" class="index">Ds\Deque::first</a> - Returns the first value in the deque</li>
        <li><a href="ds-deque.get.php" class="index">Ds\Deque::get</a> - Returns the value at a given index</li>
        <li><a href="ds-deque.insert.php" class="index">Ds\Deque::insert</a> - Inserts values at a given index</li>
        <li><a href="ds-deque.isempty.php" class="index">Ds\Deque::isEmpty</a> - Returns whether the deque is empty</li>
        <li><a href="ds-deque.join.php" class="index">Ds\Deque::join</a> - Joins all values together as a string</li>
        <li><a href="ds-deque.jsonserialize.php" class="index">Ds\Deque::jsonSerialize</a> - Returns a representation that can be converted to JSON</li>
        <li><a href="ds-deque.last.php" class="index">Ds\Deque::last</a> - Returns the last value</li>
        <li><a href="ds-deque.map.php" class="index">Ds\Deque::map</a> - Returns the result of applying a callback to each value</li>
        <li><a href="ds-deque.merge.php" class="index">Ds\Deque::merge</a> - Returns the result of adding all given values to the deque</li>
        <li><a href="ds-deque.pop.php" class="index">Ds\Deque::pop</a> - Removes and returns the last value</li>
        <li><a href="ds-deque.push.php" class="index">Ds\Deque::push</a> - Adds values to the end of the deque</li>
        <li><a href="ds-deque.reduce.php" class="index">Ds\Deque::reduce</a> - Reduces the deque to a single value using a callback function</li>
        <li><a href="ds-deque.remove.php" class="index">Ds\Deque::remove</a> - Removes and returns a value by index</li>
        <li><a href="ds-deque.reverse.php" class="index">Ds\Deque::reverse</a> - Reverses the deque in-place</li>
        <li><a href="ds-deque.reversed.php" class="index">Ds\Deque::reversed</a> - Returns a reversed copy</li>
        <li><a href="ds-deque.rotate.php" class="index">Ds\Deque::rotate</a> - Rotates the deque by a given number of rotations</li>
        <li><a href="ds-deque.set.php" class="index">Ds\Deque::set</a> - Updates a value at a given index</li>
        <li><a href="ds-deque.shift.php" class="index">Ds\Deque::shift</a> - Removes and returns the first value</li>
        <li><a href="ds-deque.slice.php" class="index">Ds\Deque::slice</a> - Returns a sub-deque of a given range</li>
        <li><a href="ds-deque.sort.php" class="index">Ds\Deque::sort</a> - Sorts the deque in-place</li>
        <li><a href="ds-deque.sorted.php" class="index">Ds\Deque::sorted</a> - Returns a sorted copy</li>
        <li><a href="ds-deque.sum.php" class="index">Ds\Deque::sum</a> - Returns the sum of all values in the deque</li>
        <li><a href="ds-deque.toarray.php" class="index">Ds\Deque::toArray</a> - Converts the deque to an array</li>
        <li><a href="ds-deque.unshift.php" class="index">Ds\Deque::unshift</a> - Adds values to the front of the deque</li>
        <li><a href="ds-deque.construct.php" class="index">Ds\Deque::__construct</a> - Creates a new instance</li>
        <li><a href="ds-hashable.equals.php" class="index">Ds\Hashable::equals</a> - Determines whether an object is equal to the current instance</li>
        <li><a href="ds-hashable.hash.php" class="index">Ds\Hashable::hash</a> - Returns a scalar value to be used as a hash value</li>
        <li><a href="ds-map.allocate.php" class="index">Ds\Map::allocate</a> - Allocates enough memory for a required capacity</li>
        <li><a href="ds-map.apply.php" class="index">Ds\Map::apply</a> - Updates all values by applying a callback function to each value</li>
        <li><a href="ds-map.capacity.php" class="index">Ds\Map::capacity</a> - Returns the current capacity</li>
        <li><a href="ds-map.clear.php" class="index">Ds\Map::clear</a> - Removes all values</li>
        <li><a href="ds-map.copy.php" class="index">Ds\Map::copy</a> - Returns a shallow copy of the map</li>
        <li><a href="ds-map.count.php" class="index">Ds\Map::count</a> - Returns the number of values in the map</li>
        <li><a href="ds-map.diff.php" class="index">Ds\Map::diff</a> - Creates a new map using keys that aren't in another map</li>
        <li><a href="ds-map.filter.php" class="index">Ds\Map::filter</a> - Creates a new map using a callable to determine which pairs to include</li>
        <li><a href="ds-map.first.php" class="index">Ds\Map::first</a> - Returns the first pair in the map</li>
        <li><a href="ds-map.get.php" class="index">Ds\Map::get</a> - Returns the value for a given key</li>
        <li><a href="ds-map.haskey.php" class="index">Ds\Map::hasKey</a> - Determines whether the map contains a given key</li>
        <li><a href="ds-map.hasvalue.php" class="index">Ds\Map::hasValue</a> - Determines whether the map contains a given value</li>
        <li><a href="ds-map.intersect.php" class="index">Ds\Map::intersect</a> - Creates a new map by intersecting keys with another map</li>
        <li><a href="ds-map.isempty.php" class="index">Ds\Map::isEmpty</a> - Returns whether the map is empty</li>
        <li><a href="ds-map.jsonserialize.php" class="index">Ds\Map::jsonSerialize</a> - Returns a representation that can be converted to JSON</li>
        <li><a href="ds-map.keys.php" class="index">Ds\Map::keys</a> - Returns a set of the map's keys</li>
        <li><a href="ds-map.ksort.php" class="index">Ds\Map::ksort</a> - Sorts the map in-place by key</li>
        <li><a href="ds-map.ksorted.php" class="index">Ds\Map::ksorted</a> - Returns a copy, sorted by key</li>
        <li><a href="ds-map.last.php" class="index">Ds\Map::last</a> - Returns the last pair of the map</li>
        <li><a href="ds-map.map.php" class="index">Ds\Map::map</a> - Returns the result of applying a callback to each value</li>
        <li><a href="ds-map.merge.php" class="index">Ds\Map::merge</a> - Returns the result of adding all given associations</li>
        <li><a href="ds-map.pairs.php" class="index">Ds\Map::pairs</a> - Returns a sequence containing all the pairs of the map</li>
        <li><a href="ds-map.put.php" class="index">Ds\Map::put</a> - Associates a key with a value</li>
        <li><a href="ds-map.putall.php" class="index">Ds\Map::putAll</a> - Associates all key-value pairs of a traversable object or array</li>
        <li><a href="ds-map.reduce.php" class="index">Ds\Map::reduce</a> - Reduces the map to a single value using a callback function</li>
        <li><a href="ds-map.remove.php" class="index">Ds\Map::remove</a> - Removes and returns a value by key</li>
        <li><a href="ds-map.reverse.php" class="index">Ds\Map::reverse</a> - Reverses the map in-place</li>
        <li><a href="ds-map.reversed.php" class="index">Ds\Map::reversed</a> - Returns a reversed copy</li>
        <li><a href="ds-map.skip.php" class="index">Ds\Map::skip</a> - Returns the pair at a given positional index</li>
        <li><a href="ds-map.slice.php" class="index">Ds\Map::slice</a> - Returns a subset of the map defined by a starting index and length</li>
        <li><a href="ds-map.sort.php" class="index">Ds\Map::sort</a> - Sorts the map in-place by value</li>
        <li><a href="ds-map.sorted.php" class="index">Ds\Map::sorted</a> - Returns a copy, sorted by value</li>
        <li><a href="ds-map.sum.php" class="index">Ds\Map::sum</a> - Returns the sum of all values in the map</li>
        <li><a href="ds-map.toarray.php" class="index">Ds\Map::toArray</a> - Converts the map to an array</li>
        <li><a href="ds-map.union.php" class="index">Ds\Map::union</a> - Creates a new map using values from the current instance and another map</li>
        <li><a href="ds-map.values.php" class="index">Ds\Map::values</a> - Returns a sequence of the map's values</li>
        <li><a href="ds-map.xor.php" class="index">Ds\Map::xor</a> - Creates a new map using keys of either the current instance or of another map, but not of both</li>
        <li><a href="ds-map.construct.php" class="index">Ds\Map::__construct</a> - Creates a new instance</li>
        <li><a href="ds-pair.clear.php" class="index">Ds\Pair::clear</a> - Removes all values</li>
        <li><a href="ds-pair.copy.php" class="index">Ds\Pair::copy</a> - Returns a shallow copy of the pair</li>
        <li><a href="ds-pair.isempty.php" class="index">Ds\Pair::isEmpty</a> - Returns whether the pair is empty</li>
        <li><a href="ds-pair.jsonserialize.php" class="index">Ds\Pair::jsonSerialize</a> - Returns a representation that can be converted to JSON</li>
        <li><a href="ds-pair.toarray.php" class="index">Ds\Pair::toArray</a> - Converts the pair to an array</li>
        <li><a href="ds-pair.construct.php" class="index">Ds\Pair::__construct</a> - Creates a new instance</li>
        <li><a href="ds-priorityqueue.allocate.php" class="index">Ds\PriorityQueue::allocate</a> - Allocates enough memory for a required capacity</li>
        <li><a href="ds-priorityqueue.capacity.php" class="index">Ds\PriorityQueue::capacity</a> - Returns the current capacity</li>
        <li><a href="ds-priorityqueue.clear.php" class="index">Ds\PriorityQueue::clear</a> - Removes all values</li>
        <li><a href="ds-priorityqueue.copy.php" class="index">Ds\PriorityQueue::copy</a> - Returns a shallow copy of the queue</li>
        <li><a href="ds-priorityqueue.count.php" class="index">Ds\PriorityQueue::count</a> - Returns the number of values in the queue</li>
        <li><a href="ds-priorityqueue.isempty.php" class="index">Ds\PriorityQueue::isEmpty</a> - Returns whether the queue is empty</li>
        <li><a href="ds-priorityqueue.jsonserialize.php" class="index">Ds\PriorityQueue::jsonSerialize</a> - Returns a representation that can be converted to JSON</li>
        <li><a href="ds-priorityqueue.peek.php" class="index">Ds\PriorityQueue::peek</a> - Returns the value at the front of the queue</li>
        <li><a href="ds-priorityqueue.pop.php" class="index">Ds\PriorityQueue::pop</a> - Removes and returns the value with the highest priority</li>
        <li><a href="ds-priorityqueue.push.php" class="index">Ds\PriorityQueue::push</a> - Pushes values into the queue</li>
        <li><a href="ds-priorityqueue.toarray.php" class="index">Ds\PriorityQueue::toArray</a> - Converts the queue to an array</li>
        <li><a href="ds-priorityqueue.construct.php" class="index">Ds\PriorityQueue::__construct</a> - Creates a new instance</li>
        <li><a href="ds-queue.allocate.php" class="index">Ds\Queue::allocate</a> - Allocates enough memory for a required capacity</li>
        <li><a href="ds-queue.capacity.php" class="index">Ds\Queue::capacity</a> - Returns the current capacity</li>
        <li><a href="ds-queue.clear.php" class="index">Ds\Queue::clear</a> - Removes all values</li>
        <li><a href="ds-queue.copy.php" class="index">Ds\Queue::copy</a> - Returns a shallow copy of the queue</li>
        <li><a href="ds-queue.count.php" class="index">Ds\Queue::count</a> - Returns the number of values in the queue</li>
        <li><a href="ds-queue.isempty.php" class="index">Ds\Queue::isEmpty</a> - Returns whether the queue is empty</li>
        <li><a href="ds-queue.jsonserialize.php" class="index">Ds\Queue::jsonSerialize</a> - Returns a representation that can be converted to JSON</li>
        <li><a href="ds-queue.peek.php" class="index">Ds\Queue::peek</a> - Returns the value at the front of the queue</li>
        <li><a href="ds-queue.pop.php" class="index">Ds\Queue::pop</a> - Removes and returns the value at the front of the queue</li>
        <li><a href="ds-queue.push.php" class="index">Ds\Queue::push</a> - Pushes values into the queue</li>
        <li><a href="ds-queue.toarray.php" class="index">Ds\Queue::toArray</a> - Converts the queue to an array</li>
        <li><a href="ds-queue.construct.php" class="index">Ds\Queue::__construct</a> - Creates a new instance</li>
        <li><a href="ds-sequence.allocate.php" class="index">Ds\Sequence::allocate</a> - Allocates enough memory for a required capacity</li>
        <li><a href="ds-sequence.apply.php" class="index">Ds\Sequence::apply</a> - Updates all values by applying a callback function to each value</li>
        <li><a href="ds-sequence.capacity.php" class="index">Ds\Sequence::capacity</a> - Returns the current capacity</li>
        <li><a href="ds-sequence.contains.php" class="index">Ds\Sequence::contains</a> - Determines if the sequence contains given values</li>
        <li><a href="ds-sequence.filter.php" class="index">Ds\Sequence::filter</a> - Creates a new sequence using a callable to
            determine which values to include</li>
        <li><a href="ds-sequence.find.php" class="index">Ds\Sequence::find</a> - Attempts to find a value's index</li>
        <li><a href="ds-sequence.first.php" class="index">Ds\Sequence::first</a> - Returns the first value in the sequence</li>
        <li><a href="ds-sequence.get.php" class="index">Ds\Sequence::get</a> - Returns the value at a given index</li>
        <li><a href="ds-sequence.insert.php" class="index">Ds\Sequence::insert</a> - Inserts values at a given index</li>
        <li><a href="ds-sequence.join.php" class="index">Ds\Sequence::join</a> - Joins all values together as a string</li>
        <li><a href="ds-sequence.last.php" class="index">Ds\Sequence::last</a> - Returns the last value</li>
        <li><a href="ds-sequence.map.php" class="index">Ds\Sequence::map</a> - Returns the result of applying a callback to each value</li>
        <li><a href="ds-sequence.merge.php" class="index">Ds\Sequence::merge</a> - Returns the result of adding all given values to the sequence</li>
        <li><a href="ds-sequence.pop.php" class="index">Ds\Sequence::pop</a> - Removes and returns the last value</li>
        <li><a href="ds-sequence.push.php" class="index">Ds\Sequence::push</a> - Adds values to the end of the sequence</li>
        <li><a href="ds-sequence.reduce.php" class="index">Ds\Sequence::reduce</a> - Reduces the sequence to a single value using a callback function</li>
        <li><a href="ds-sequence.remove.php" class="index">Ds\Sequence::remove</a> - Removes and returns a value by index</li>
        <li><a href="ds-sequence.reverse.php" class="index">Ds\Sequence::reverse</a> - Reverses the sequence in-place</li>
        <li><a href="ds-sequence.reversed.php" class="index">Ds\Sequence::reversed</a> - Returns a reversed copy</li>
        <li><a href="ds-sequence.rotate.php" class="index">Ds\Sequence::rotate</a> - Rotates the sequence by a given number of rotations</li>
        <li><a href="ds-sequence.set.php" class="index">Ds\Sequence::set</a> - Updates a value at a given index</li>
        <li><a href="ds-sequence.shift.php" class="index">Ds\Sequence::shift</a> - Removes and returns the first value</li>
        <li><a href="ds-sequence.slice.php" class="index">Ds\Sequence::slice</a> - Returns a sub-sequence of a given range</li>
        <li><a href="ds-sequence.sort.php" class="index">Ds\Sequence::sort</a> - Sorts the sequence in-place</li>
        <li><a href="ds-sequence.sorted.php" class="index">Ds\Sequence::sorted</a> - Returns a sorted copy</li>
        <li><a href="ds-sequence.sum.php" class="index">Ds\Sequence::sum</a> - Returns the sum of all values in the sequence</li>
        <li><a href="ds-sequence.unshift.php" class="index">Ds\Sequence::unshift</a> - Adds values to the front of the sequence</li>
        <li><a href="ds-set.add.php" class="index">Ds\Set::add</a> - Adds values to the set</li>
        <li><a href="ds-set.allocate.php" class="index">Ds\Set::allocate</a> - Allocates enough memory for a required capacity</li>
        <li><a href="ds-set.capacity.php" class="index">Ds\Set::capacity</a> - Returns the current capacity</li>
        <li><a href="ds-set.clear.php" class="index">Ds\Set::clear</a> - Removes all values</li>
        <li><a href="ds-set.contains.php" class="index">Ds\Set::contains</a> - Determines if the set contains all values</li>
        <li><a href="ds-set.copy.php" class="index">Ds\Set::copy</a> - Returns a shallow copy of the set</li>
        <li><a href="ds-set.count.php" class="index">Ds\Set::count</a> - Returns the number of values in the set</li>
        <li><a href="ds-set.diff.php" class="index">Ds\Set::diff</a> - Creates a new set using values that aren't in another set</li>
        <li><a href="ds-set.filter.php" class="index">Ds\Set::filter</a> - Creates a new set using a callable to
            determine which values to include</li>
        <li><a href="ds-set.first.php" class="index">Ds\Set::first</a> - Returns the first value in the set</li>
        <li><a href="ds-set.get.php" class="index">Ds\Set::get</a> - Returns the value at a given index</li>
        <li><a href="ds-set.intersect.php" class="index">Ds\Set::intersect</a> - Creates a new set by intersecting values with another set</li>
        <li><a href="ds-set.isempty.php" class="index">Ds\Set::isEmpty</a> - Returns whether the set is empty</li>
        <li><a href="ds-set.join.php" class="index">Ds\Set::join</a> - Joins all values together as a string</li>
        <li><a href="ds-set.jsonserialize.php" class="index">Ds\Set::jsonSerialize</a> - Returns a representation that can be converted to JSON</li>
        <li><a href="ds-set.last.php" class="index">Ds\Set::last</a> - Returns the last value in the set</li>
        <li><a href="ds-set.merge.php" class="index">Ds\Set::merge</a> - Returns the result of adding all given values to the set</li>
        <li><a href="ds-set.reduce.php" class="index">Ds\Set::reduce</a> - Reduces the set to a single value using a callback function</li>
        <li><a href="ds-set.remove.php" class="index">Ds\Set::remove</a> - Removes all given values from the set</li>
        <li><a href="ds-set.reverse.php" class="index">Ds\Set::reverse</a> - Reverses the set in-place</li>
        <li><a href="ds-set.reversed.php" class="index">Ds\Set::reversed</a> - Returns a reversed copy</li>
        <li><a href="ds-set.slice.php" class="index">Ds\Set::slice</a> - Returns a sub-set of a given range</li>
        <li><a href="ds-set.sort.php" class="index">Ds\Set::sort</a> - Sorts the set in-place</li>
        <li><a href="ds-set.sorted.php" class="index">Ds\Set::sorted</a> - Returns a sorted copy</li>
        <li><a href="ds-set.sum.php" class="index">Ds\Set::sum</a> - Returns the sum of all values in the set</li>
        <li><a href="ds-set.toarray.php" class="index">Ds\Set::toArray</a> - Converts the set to an array</li>
        <li><a href="ds-set.union.php" class="index">Ds\Set::union</a> - Creates a new set using values from the current instance and another set</li>
        <li><a href="ds-set.xor.php" class="index">Ds\Set::xor</a> - Creates a new set using values in either the current instance or in another set, but not in both</li>
        <li><a href="ds-set.construct.php" class="index">Ds\Set::__construct</a> - Creates a new instance</li>
        <li><a href="ds-stack.allocate.php" class="index">Ds\Stack::allocate</a> - Allocates enough memory for a required capacity</li>
        <li><a href="ds-stack.capacity.php" class="index">Ds\Stack::capacity</a> - Returns the current capacity</li>
        <li><a href="ds-stack.clear.php" class="index">Ds\Stack::clear</a> - Removes all values</li>
        <li><a href="ds-stack.copy.php" class="index">Ds\Stack::copy</a> - Returns a shallow copy of the stack</li>
        <li><a href="ds-stack.count.php" class="index">Ds\Stack::count</a> - Returns the number of values in the stack</li>
        <li><a href="ds-stack.isempty.php" class="index">Ds\Stack::isEmpty</a> - Returns whether the stack is empty</li>
        <li><a href="ds-stack.jsonserialize.php" class="index">Ds\Stack::jsonSerialize</a> - Returns a representation that can be converted to JSON</li>
        <li><a href="ds-stack.peek.php" class="index">Ds\Stack::peek</a> - Returns the value at the top of the stack</li>
        <li><a href="ds-stack.pop.php" class="index">Ds\Stack::pop</a> - Removes and returns the value at the top of the stack</li>
        <li><a href="ds-stack.push.php" class="index">Ds\Stack::push</a> - Pushes values onto the stack</li>
        <li><a href="ds-stack.toarray.php" class="index">Ds\Stack::toArray</a> - Converts the stack to an array</li>
        <li><a href="ds-stack.construct.php" class="index">Ds\Stack::__construct</a> - Creates a new instance</li>
        <li><a href="ds-vector.allocate.php" class="index">Ds\Vector::allocate</a> - Allocates enough memory for a required capacity</li>
        <li><a href="ds-vector.apply.php" class="index">Ds\Vector::apply</a> - Updates all values by applying a callback function to each value</li>
        <li><a href="ds-vector.capacity.php" class="index">Ds\Vector::capacity</a> - Returns the current capacity</li>
        <li><a href="ds-vector.clear.php" class="index">Ds\Vector::clear</a> - Removes all values</li>
        <li><a href="ds-vector.contains.php" class="index">Ds\Vector::contains</a> - Determines if the vector contains given values</li>
        <li><a href="ds-vector.copy.php" class="index">Ds\Vector::copy</a> - Returns a shallow copy of the vector</li>
        <li><a href="ds-vector.count.php" class="index">Ds\Vector::count</a> - Returns the number of values in the collection</li>
        <li><a href="ds-vector.filter.php" class="index">Ds\Vector::filter</a> - Creates a new vector using a callable to
            determine which values to include</li>
        <li><a href="ds-vector.find.php" class="index">Ds\Vector::find</a> - Attempts to find a value's index</li>
        <li><a href="ds-vector.first.php" class="index">Ds\Vector::first</a> - Returns the first value in the vector</li>
        <li><a href="ds-vector.get.php" class="index">Ds\Vector::get</a> - Returns the value at a given index</li>
        <li><a href="ds-vector.insert.php" class="index">Ds\Vector::insert</a> - Inserts values at a given index</li>
        <li><a href="ds-vector.isempty.php" class="index">Ds\Vector::isEmpty</a> - Returns whether the vector is empty</li>
        <li><a href="ds-vector.join.php" class="index">Ds\Vector::join</a> - Joins all values together as a string</li>
        <li><a href="ds-vector.jsonserialize.php" class="index">Ds\Vector::jsonSerialize</a> - Returns a representation that can be converted to JSON</li>
        <li><a href="ds-vector.last.php" class="index">Ds\Vector::last</a> - Returns the last value</li>
        <li><a href="ds-vector.map.php" class="index">Ds\Vector::map</a> - Returns the result of applying a callback to each value</li>
        <li><a href="ds-vector.merge.php" class="index">Ds\Vector::merge</a> - Returns the result of adding all given values to the vector</li>
        <li><a href="ds-vector.pop.php" class="index">Ds\Vector::pop</a> - Removes and returns the last value</li>
        <li><a href="ds-vector.push.php" class="index">Ds\Vector::push</a> - Adds values to the end of the vector</li>
        <li><a href="ds-vector.reduce.php" class="index">Ds\Vector::reduce</a> - Reduces the vector to a single value using a callback function</li>
        <li><a href="ds-vector.remove.php" class="index">Ds\Vector::remove</a> - Removes and returns a value by index</li>
        <li><a href="ds-vector.reverse.php" class="index">Ds\Vector::reverse</a> - Reverses the vector in-place</li>
        <li><a href="ds-vector.reversed.php" class="index">Ds\Vector::reversed</a> - Returns a reversed copy</li>
        <li><a href="ds-vector.rotate.php" class="index">Ds\Vector::rotate</a> - Rotates the vector by a given number of rotations</li>
        <li><a href="ds-vector.set.php" class="index">Ds\Vector::set</a> - Updates a value at a given index</li>
        <li><a href="ds-vector.shift.php" class="index">Ds\Vector::shift</a> - Removes and returns the first value</li>
        <li><a href="ds-vector.slice.php" class="index">Ds\Vector::slice</a> - Returns a sub-vector of a given range</li>
        <li><a href="ds-vector.sort.php" class="index">Ds\Vector::sort</a> - Sorts the vector in-place</li>
        <li><a href="ds-vector.sorted.php" class="index">Ds\Vector::sorted</a> - Returns a sorted copy</li>
        <li><a href="ds-vector.sum.php" class="index">Ds\Vector::sum</a> - Returns the sum of all values in the vector</li>
        <li><a href="ds-vector.toarray.php" class="index">Ds\Vector::toArray</a> - Converts the vector to an array</li>
        <li><a href="ds-vector.unshift.php" class="index">Ds\Vector::unshift</a> - Adds values to the front of the vector</li>
        <li><a href="ds-vector.construct.php" class="index">Ds\Vector::__construct</a> - Creates a new instance</li>
        </ul></li>
        <li class='gen-index index-for-e'>e<ul id='refentry-index-for-e'>
        <li><a href="function.each.php" class="index">each</a> - Return the current key and value pair from an array and advance the array cursor</li>
        <li><a href="function.easter-date.php" class="index">easter_date</a> - Get Unix timestamp for midnight on Easter of a given year</li>
        <li><a href="function.easter-days.php" class="index">easter_days</a> - Get number of days after March 21 on which Easter falls for a given year</li>
        <li><a href="function.echo.php" class="index">echo</a> - Output one or more strings</li>
        <li><a href="function.eio-busy.php" class="index">eio_busy</a> - Artificially increase load. Could be useful in tests,
          benchmarking</li>
        <li><a href="function.eio-cancel.php" class="index">eio_cancel</a> - Cancels a request</li>
        <li><a href="function.eio-chmod.php" class="index">eio_chmod</a> - Change file/directory permissions</li>
        <li><a href="function.eio-chown.php" class="index">eio_chown</a> - Change file/directory permissions</li>
        <li><a href="function.eio-close.php" class="index">eio_close</a> - Close file</li>
        <li><a href="function.eio-custom.php" class="index">eio_custom</a> - Execute custom request like any other eio_* call</li>
        <li><a href="function.eio-dup2.php" class="index">eio_dup2</a> - Duplicate a file descriptor</li>
        <li><a href="function.eio-event-loop.php" class="index">eio_event_loop</a> - Polls libeio until all requests proceeded</li>
        <li><a href="function.eio-fallocate.php" class="index">eio_fallocate</a> - Allows the caller to directly manipulate the allocated disk
          space for a file</li>
        <li><a href="function.eio-fchmod.php" class="index">eio_fchmod</a> - Change file permissions</li>
        <li><a href="function.eio-fchown.php" class="index">eio_fchown</a> - Change file ownership</li>
        <li><a href="function.eio-fdatasync.php" class="index">eio_fdatasync</a> - Synchronize a file's in-core state with storage device</li>
        <li><a href="function.eio-fstat.php" class="index">eio_fstat</a> - Get file status</li>
        <li><a href="function.eio-fstatvfs.php" class="index">eio_fstatvfs</a> - Get file system statistics</li>
        <li><a href="function.eio-fsync.php" class="index">eio_fsync</a> - Synchronize a file's in-core state with storage device</li>
        <li><a href="function.eio-ftruncate.php" class="index">eio_ftruncate</a> - Truncate a file</li>
        <li><a href="function.eio-futime.php" class="index">eio_futime</a> - Change file last access and modification times</li>
        <li><a href="function.eio-get-event-stream.php" class="index">eio_get_event_stream</a> - Get stream representing a variable used in internal communications with libeio</li>
        <li><a href="function.eio-get-last-error.php" class="index">eio_get_last_error</a> - Returns string describing the last error associated with a request resource</li>
        <li><a href="function.eio-grp.php" class="index">eio_grp</a> - Creates a request group</li>
        <li><a href="function.eio-grp-add.php" class="index">eio_grp_add</a> - Adds a request to the request group</li>
        <li><a href="function.eio-grp-cancel.php" class="index">eio_grp_cancel</a> - Cancels a request group</li>
        <li><a href="function.eio-grp-limit.php" class="index">eio_grp_limit</a> - Set group limit</li>
        <li><a href="function.eio-init.php" class="index">eio_init</a> - (Re-)initialize Eio</li>
        <li><a href="function.eio-link.php" class="index">eio_link</a> - Create a hardlink for file</li>
        <li><a href="function.eio-lstat.php" class="index">eio_lstat</a> - Get file status</li>
        <li><a href="function.eio-mkdir.php" class="index">eio_mkdir</a> - Create directory</li>
        <li><a href="function.eio-mknod.php" class="index">eio_mknod</a> - Create a special or ordinary file</li>
        <li><a href="function.eio-nop.php" class="index">eio_nop</a> - Does nothing, except go through the whole request cycle</li>
        <li><a href="function.eio-npending.php" class="index">eio_npending</a> - Returns number of finished, but unhandled requests</li>
        <li><a href="function.eio-nready.php" class="index">eio_nready</a> - Returns number of not-yet handled requests</li>
        <li><a href="function.eio-nreqs.php" class="index">eio_nreqs</a> - Returns number of requests to be processed</li>
        <li><a href="function.eio-nthreads.php" class="index">eio_nthreads</a> - Returns number of threads currently in use</li>
        <li><a href="function.eio-open.php" class="index">eio_open</a> - Opens a file</li>
        <li><a href="function.eio-poll.php" class="index">eio_poll</a> - Can be to be called whenever there are pending requests that need finishing</li>
        <li><a href="function.eio-read.php" class="index">eio_read</a> - Read from a file descriptor at given offset</li>
        <li><a href="function.eio-readahead.php" class="index">eio_readahead</a> - Perform file readahead into page cache</li>
        <li><a href="function.eio-readdir.php" class="index">eio_readdir</a> - Reads through a whole directory</li>
        <li><a href="function.eio-readlink.php" class="index">eio_readlink</a> - Read value of a symbolic link</li>
        <li><a href="function.eio-realpath.php" class="index">eio_realpath</a> - Get the canonicalized absolute pathname</li>
        <li><a href="function.eio-rename.php" class="index">eio_rename</a> - Change the name or location of a file</li>
        <li><a href="function.eio-rmdir.php" class="index">eio_rmdir</a> - Remove a directory</li>
        <li><a href="function.eio-seek.php" class="index">eio_seek</a> - Repositions the offset of the open file associated with the fd argument to the argument offset according to the directive whence</li>
        <li><a href="function.eio-sendfile.php" class="index">eio_sendfile</a> - Transfer data between file descriptors</li>
        <li><a href="function.eio-set-max-idle.php" class="index">eio_set_max_idle</a> - Set maximum number of idle threads</li>
        <li><a href="function.eio-set-max-parallel.php" class="index">eio_set_max_parallel</a> - Set maximum parallel threads</li>
        <li><a href="function.eio-set-max-poll-reqs.php" class="index">eio_set_max_poll_reqs</a> - Set maximum number of requests processed in a poll</li>
        <li><a href="function.eio-set-max-poll-time.php" class="index">eio_set_max_poll_time</a> - Set maximum poll time</li>
        <li><a href="function.eio-set-min-parallel.php" class="index">eio_set_min_parallel</a> - Set minimum parallel thread number</li>
        <li><a href="function.eio-stat.php" class="index">eio_stat</a> - Get file status</li>
        <li><a href="function.eio-statvfs.php" class="index">eio_statvfs</a> - Get file system statistics</li>
        <li><a href="function.eio-symlink.php" class="index">eio_symlink</a> - Create a symbolic link</li>
        <li><a href="function.eio-sync.php" class="index">eio_sync</a> - Commit buffer cache to disk</li>
        <li><a href="function.eio-syncfs.php" class="index">eio_syncfs</a> - Calls Linux' syncfs syscall, if available</li>
        <li><a href="function.eio-sync-file-range.php" class="index">eio_sync_file_range</a> - Sync a file segment with disk</li>
        <li><a href="function.eio-truncate.php" class="index">eio_truncate</a> - Truncate a file</li>
        <li><a href="function.eio-unlink.php" class="index">eio_unlink</a> - Delete a name and possibly the file it refers to</li>
        <li><a href="function.eio-utime.php" class="index">eio_utime</a> - Change file last access and modification times</li>
        <li><a href="function.eio-write.php" class="index">eio_write</a> - Write to file</li>
        <li><a href="function.empty.php" class="index">empty</a> - Determine whether a variable is empty</li>
        <li><a href="emptyiterator.current.php" class="index">EmptyIterator::current</a> - The current() method</li>
        <li><a href="emptyiterator.key.php" class="index">EmptyIterator::key</a> - The key() method</li>
        <li><a href="emptyiterator.next.php" class="index">EmptyIterator::next</a> - The next() method</li>
        <li><a href="emptyiterator.rewind.php" class="index">EmptyIterator::rewind</a> - The rewind() method</li>
        <li><a href="emptyiterator.valid.php" class="index">EmptyIterator::valid</a> - Checks whether the current element is valid</li>
        <li><a href="function.enchant-broker-describe.php" class="index">enchant_broker_describe</a> - Enumerates the Enchant providers</li>
        <li><a href="function.enchant-broker-dict-exists.php" class="index">enchant_broker_dict_exists</a> - Whether a dictionary exists or not. Using non-empty tag</li>
        <li><a href="function.enchant-broker-free.php" class="index">enchant_broker_free</a> - Free the broker resource and its dictionaries</li>
        <li><a href="function.enchant-broker-free-dict.php" class="index">enchant_broker_free_dict</a> - Free a dictionary resource</li>
        <li><a href="function.enchant-broker-get-dict-path.php" class="index">enchant_broker_get_dict_path</a> - Get the directory path for a given backend</li>
        <li><a href="function.enchant-broker-get-error.php" class="index">enchant_broker_get_error</a> - Returns the last error of the broker</li>
        <li><a href="function.enchant-broker-init.php" class="index">enchant_broker_init</a> - Create a new broker object capable of requesting</li>
        <li><a href="function.enchant-broker-list-dicts.php" class="index">enchant_broker_list_dicts</a> - Returns a list of available dictionaries</li>
        <li><a href="function.enchant-broker-request-dict.php" class="index">enchant_broker_request_dict</a> - Create a new dictionary using a tag</li>
        <li><a href="function.enchant-broker-request-pwl-dict.php" class="index">enchant_broker_request_pwl_dict</a> - Creates a dictionary using a PWL file</li>
        <li><a href="function.enchant-broker-set-dict-path.php" class="index">enchant_broker_set_dict_path</a> - Set the directory path for a given backend</li>
        <li><a href="function.enchant-broker-set-ordering.php" class="index">enchant_broker_set_ordering</a> - Declares a preference of dictionaries to use for the language</li>
        <li><a href="function.enchant-dict-add.php" class="index">enchant_dict_add</a> - Add a word to personal word list</li>
        <li><a href="function.enchant-dict-add-to-personal.php" class="index">enchant_dict_add_to_personal</a> - Alias of enchant_dict_add</li>
        <li><a href="function.enchant-dict-add-to-session.php" class="index">enchant_dict_add_to_session</a> - Add 'word' to this spell-checking session</li>
        <li><a href="function.enchant-dict-check.php" class="index">enchant_dict_check</a> - Check whether a word is correctly spelled or not</li>
        <li><a href="function.enchant-dict-describe.php" class="index">enchant_dict_describe</a> - Describes an individual dictionary</li>
        <li><a href="function.enchant-dict-get-error.php" class="index">enchant_dict_get_error</a> - Returns the last error of the current spelling-session</li>
        <li><a href="function.enchant-dict-is-added.php" class="index">enchant_dict_is_added</a> - Whether or not 'word' exists in this spelling-session</li>
        <li><a href="function.enchant-dict-is-in-session.php" class="index">enchant_dict_is_in_session</a> - Alias of enchant_dict_is_added</li>
        <li><a href="function.enchant-dict-quick-check.php" class="index">enchant_dict_quick_check</a> - Check the word is correctly spelled and provide suggestions</li>
        <li><a href="function.enchant-dict-store-replacement.php" class="index">enchant_dict_store_replacement</a> - Add a correction for a word</li>
        <li><a href="function.enchant-dict-suggest.php" class="index">enchant_dict_suggest</a> - Will return a list of values if any of those pre-conditions are not met</li>
        <li><a href="function.end.php" class="index">end</a> - Set the internal pointer of an array to its last element</li>
        <li><a href="function.enum-exists.php" class="index">enum_exists</a> - Checks if the enum has been defined</li>
        <li><a href="error.getcode.php" class="index">Error::getCode</a> - Gets the error code</li>
        <li><a href="error.getfile.php" class="index">Error::getFile</a> - Gets the file in which the error occurred</li>
        <li><a href="error.getline.php" class="index">Error::getLine</a> - Gets the line in which the error occurred</li>
        <li><a href="error.getmessage.php" class="index">Error::getMessage</a> - Gets the error message</li>
        <li><a href="error.getprevious.php" class="index">Error::getPrevious</a> - Returns previous Throwable</li>
        <li><a href="error.gettrace.php" class="index">Error::getTrace</a> - Gets the stack trace</li>
        <li><a href="error.gettraceasstring.php" class="index">Error::getTraceAsString</a> - Gets the stack trace as a string</li>
        <li><a href="error.clone.php" class="index">Error::__clone</a> - Clone the error</li>
        <li><a href="error.construct.php" class="index">Error::__construct</a> - Construct the error object</li>
        <li><a href="error.tostring.php" class="index">Error::__toString</a> - String representation of the error</li>
        <li><a href="errorexception.getseverity.php" class="index">ErrorException::getSeverity</a> - Gets the exception severity</li>
        <li><a href="errorexception.construct.php" class="index">ErrorException::__construct</a> - Constructs the exception</li>
        <li><a href="function.error-clear-last.php" class="index">error_clear_last</a> - Clear the most recent error</li>
        <li><a href="function.error-get-last.php" class="index">error_get_last</a> - Get the last occurred error</li>
        <li><a href="function.error-log.php" class="index">error_log</a> - Send an error message to the defined error handling routines</li>
        <li><a href="function.error-reporting.php" class="index">error_reporting</a> - Sets which PHP errors are reported</li>
        <li><a href="function.escapeshellarg.php" class="index">escapeshellarg</a> - Escape a string to be used as a shell argument</li>
        <li><a href="function.escapeshellcmd.php" class="index">escapeshellcmd</a> - Escape shell metacharacters</li>
        <li><a href="ev.backend.php" class="index">Ev::backend</a> - Returns an integer describing the backend used by libev</li>
        <li><a href="ev.depth.php" class="index">Ev::depth</a> - Returns recursion depth</li>
        <li><a href="ev.embeddablebackends.php" class="index">Ev::embeddableBackends</a> - Returns the set of backends that are embeddable in other event loops</li>
        <li><a href="ev.feedsignal.php" class="index">Ev::feedSignal</a> - Feed a signal event info Ev</li>
        <li><a href="ev.feedsignalevent.php" class="index">Ev::feedSignalEvent</a> - Feed signal event into the default loop</li>
        <li><a href="ev.iteration.php" class="index">Ev::iteration</a> - Return the number of times the default event loop has polled for new
          events</li>
        <li><a href="ev.now.php" class="index">Ev::now</a> - Returns the time when the last iteration of the default event
          loop has started</li>
        <li><a href="ev.nowupdate.php" class="index">Ev::nowUpdate</a> - Establishes the current time by querying the kernel, updating the time
            returned by Ev::now in the progress</li>
        <li><a href="ev.recommendedbackends.php" class="index">Ev::recommendedBackends</a> - Returns a bit mask of recommended backends for current
          platform</li>
        <li><a href="ev.resume.php" class="index">Ev::resume</a> - Resume previously suspended default event loop</li>
        <li><a href="ev.run.php" class="index">Ev::run</a> - Begin checking for events and calling callbacks for the default
          loop</li>
        <li><a href="ev.sleep.php" class="index">Ev::sleep</a> - Block the process for the given number of seconds</li>
        <li><a href="ev.stop.php" class="index">Ev::stop</a> - Stops the default event loop</li>
        <li><a href="ev.supportedbackends.php" class="index">Ev::supportedBackends</a> - Returns the set of backends supported by current libev
          configuration</li>
        <li><a href="ev.suspend.php" class="index">Ev::suspend</a> - Suspend the default event loop</li>
        <li><a href="ev.time.php" class="index">Ev::time</a> - Returns the current time in fractional seconds since the epoch</li>
        <li><a href="ev.verify.php" class="index">Ev::verify</a> - Performs internal consistency checks(for debugging)</li>
        <li><a href="function.eval.php" class="index">eval</a> - Evaluate a string as PHP code</li>
        <li><a href="evcheck.createstopped.php" class="index">EvCheck::createStopped</a> - Create instance of a stopped EvCheck watcher</li>
        <li><a href="evcheck.construct.php" class="index">EvCheck::__construct</a> - Constructs the EvCheck watcher object</li>
        <li><a href="evchild.createstopped.php" class="index">EvChild::createStopped</a> - Create instance of a stopped EvCheck watcher</li>
        <li><a href="evchild.set.php" class="index">EvChild::set</a> - Configures the watcher</li>
        <li><a href="evchild.construct.php" class="index">EvChild::__construct</a> - Constructs the EvChild watcher object</li>
        <li><a href="evembed.createstopped.php" class="index">EvEmbed::createStopped</a> - Create stopped EvEmbed watcher object</li>
        <li><a href="evembed.set.php" class="index">EvEmbed::set</a> - Configures the watcher</li>
        <li><a href="evembed.sweep.php" class="index">EvEmbed::sweep</a> - Make a single, non-blocking sweep over the embedded loop</li>
        <li><a href="evembed.construct.php" class="index">EvEmbed::__construct</a> - Constructs the EvEmbed object</li>
        <li><a href="event.add.php" class="index">Event::add</a> - Makes event pending</li>
        <li><a href="event.addsignal.php" class="index">Event::addSignal</a> - Alias of Event::add</li>
        <li><a href="event.addtimer.php" class="index">Event::addTimer</a> - Alias of Event::add</li>
        <li><a href="event.del.php" class="index">Event::del</a> - Makes event non-pending</li>
        <li><a href="event.delsignal.php" class="index">Event::delSignal</a> - Alias of Event::del</li>
        <li><a href="event.deltimer.php" class="index">Event::delTimer</a> - Alias of Event::del</li>
        <li><a href="event.free.php" class="index">Event::free</a> - Make event non-pending and free resources allocated for this
          event</li>
        <li><a href="event.getsupportedmethods.php" class="index">Event::getSupportedMethods</a> - Returns array with of the names of the methods supported in this version of Libevent</li>
        <li><a href="event.pending.php" class="index">Event::pending</a> - Detects whether event is pending or scheduled</li>
        <li><a href="event.set.php" class="index">Event::set</a> - Re-configures event</li>
        <li><a href="event.setpriority.php" class="index">Event::setPriority</a> - Set event priority</li>
        <li><a href="event.settimer.php" class="index">Event::setTimer</a> - Re-configures timer event</li>
        <li><a href="event.signal.php" class="index">Event::signal</a> - Constructs signal event object</li>
        <li><a href="event.timer.php" class="index">Event::timer</a> - Constructs timer event object</li>
        <li><a href="event.construct.php" class="index">Event::__construct</a> - Constructs Event object</li>
        <li><a href="eventbase.dispatch.php" class="index">EventBase::dispatch</a> - Dispatch pending events</li>
        <li><a href="eventbase.exit.php" class="index">EventBase::exit</a> - Stop dispatching events</li>
        <li><a href="eventbase.free.php" class="index">EventBase::free</a> - Free resources allocated for this event base</li>
        <li><a href="eventbase.getfeatures.php" class="index">EventBase::getFeatures</a> - Returns bitmask of features supported</li>
        <li><a href="eventbase.getmethod.php" class="index">EventBase::getMethod</a> - Returns event method in use</li>
        <li><a href="eventbase.gettimeofdaycached.php" class="index">EventBase::getTimeOfDayCached</a> - Returns the current event base time</li>
        <li><a href="eventbase.gotexit.php" class="index">EventBase::gotExit</a> - Checks if the event loop was told to exit</li>
        <li><a href="eventbase.gotstop.php" class="index">EventBase::gotStop</a> - Checks if the event loop was told to exit</li>
        <li><a href="eventbase.loop.php" class="index">EventBase::loop</a> - Dispatch pending events</li>
        <li><a href="eventbase.priorityinit.php" class="index">EventBase::priorityInit</a> - Sets number of priorities per event base</li>
        <li><a href="eventbase.reinit.php" class="index">EventBase::reInit</a> - Re-initialize event base(after a fork)</li>
        <li><a href="eventbase.stop.php" class="index">EventBase::stop</a> - Tells event_base to stop dispatching events</li>
        <li><a href="eventbase.construct.php" class="index">EventBase::__construct</a> - Constructs EventBase object</li>
        <li><a href="eventbuffer.add.php" class="index">EventBuffer::add</a> - Append data to the end of an event buffer</li>
        <li><a href="eventbuffer.addbuffer.php" class="index">EventBuffer::addBuffer</a> - Move all data from a buffer provided to the current instance of EventBuffer</li>
        <li><a href="eventbuffer.appendfrom.php" class="index">EventBuffer::appendFrom</a> - Moves the specified number of bytes from a source buffer to the
          end of the current buffer</li>
        <li><a href="eventbuffer.copyout.php" class="index">EventBuffer::copyout</a> - Copies out specified number of bytes from the front of the buffer</li>
        <li><a href="eventbuffer.drain.php" class="index">EventBuffer::drain</a> - Removes specified number of bytes from the front of the buffer
          without copying it anywhere</li>
        <li><a href="eventbuffer.enablelocking.php" class="index">EventBuffer::enableLocking</a> - Description</li>
        <li><a href="eventbuffer.expand.php" class="index">EventBuffer::expand</a> - Reserves space in buffer</li>
        <li><a href="eventbuffer.freeze.php" class="index">EventBuffer::freeze</a> - Prevent calls that modify an event buffer from succeeding</li>
        <li><a href="eventbuffer.lock.php" class="index">EventBuffer::lock</a> - Acquires a lock on buffer</li>
        <li><a href="eventbuffer.prepend.php" class="index">EventBuffer::prepend</a> - Prepend data to the front of the buffer</li>
        <li><a href="eventbuffer.prependbuffer.php" class="index">EventBuffer::prependBuffer</a> - Moves all data from source buffer to the front of current buffer</li>
        <li><a href="eventbuffer.pullup.php" class="index">EventBuffer::pullup</a> - Linearizes data within buffer
          and returns it's contents as a string</li>
        <li><a href="eventbuffer.read.php" class="index">EventBuffer::read</a> - Read data from an evbuffer and drain the bytes read</li>
        <li><a href="eventbuffer.readfrom.php" class="index">EventBuffer::readFrom</a> - Read data from a file onto the end of the buffer</li>
        <li><a href="eventbuffer.readline.php" class="index">EventBuffer::readLine</a> - Extracts a line from the front of the buffer</li>
        <li><a href="eventbuffer.search.php" class="index">EventBuffer::search</a> - Scans the buffer for an occurrence of a string</li>
        <li><a href="eventbuffer.searcheol.php" class="index">EventBuffer::searchEol</a> - Scans the buffer for an occurrence of an end of line</li>
        <li><a href="eventbuffer.substr.php" class="index">EventBuffer::substr</a> - Substracts a portion of the buffer data</li>
        <li><a href="eventbuffer.unfreeze.php" class="index">EventBuffer::unfreeze</a> - Re-enable calls that modify an event buffer</li>
        <li><a href="eventbuffer.unlock.php" class="index">EventBuffer::unlock</a> - Releases lock acquired by EventBuffer::lock</li>
        <li><a href="eventbuffer.write.php" class="index">EventBuffer::write</a> - Write contents of the buffer to a file or socket</li>
        <li><a href="eventbuffer.construct.php" class="index">EventBuffer::__construct</a> - Constructs EventBuffer object</li>
        <li><a href="eventbufferevent.close.php" class="index">EventBufferEvent::close</a> - Closes file descriptor associated with the current buffer event</li>
        <li><a href="eventbufferevent.connect.php" class="index">EventBufferEvent::connect</a> - Connect buffer event's file descriptor to given address or
          UNIX socket</li>
        <li><a href="eventbufferevent.connecthost.php" class="index">EventBufferEvent::connectHost</a> - Connects to a hostname with optionally asyncronous DNS resolving</li>
        <li><a href="eventbufferevent.createpair.php" class="index">EventBufferEvent::createPair</a> - Creates two buffer events connected to each other</li>
        <li><a href="eventbufferevent.disable.php" class="index">EventBufferEvent::disable</a> - Disable events read, write, or both on a buffer event</li>
        <li><a href="eventbufferevent.enable.php" class="index">EventBufferEvent::enable</a> - Enable events read, write, or both on a buffer event</li>
        <li><a href="eventbufferevent.free.php" class="index">EventBufferEvent::free</a> - Free a buffer event</li>
        <li><a href="eventbufferevent.getdnserrorstring.php" class="index">EventBufferEvent::getDnsErrorString</a> - Returns string describing the last failed DNS lookup attempt</li>
        <li><a href="eventbufferevent.getenabled.php" class="index">EventBufferEvent::getEnabled</a> - Returns bitmask of events currently enabled on the buffer event</li>
        <li><a href="eventbufferevent.getinput.php" class="index">EventBufferEvent::getInput</a> - Returns underlying input buffer associated with current buffer
          event</li>
        <li><a href="eventbufferevent.getoutput.php" class="index">EventBufferEvent::getOutput</a> - Returns underlying output buffer associated with current buffer
          event</li>
        <li><a href="eventbufferevent.read.php" class="index">EventBufferEvent::read</a> - Read buffer's data</li>
        <li><a href="eventbufferevent.readbuffer.php" class="index">EventBufferEvent::readBuffer</a> - Drains the entire contents of the input buffer and places them into buf</li>
        <li><a href="eventbufferevent.setcallbacks.php" class="index">EventBufferEvent::setCallbacks</a> - Assigns read, write and event(status) callbacks</li>
        <li><a href="eventbufferevent.setpriority.php" class="index">EventBufferEvent::setPriority</a> - Assign a priority to a bufferevent</li>
        <li><a href="eventbufferevent.settimeouts.php" class="index">EventBufferEvent::setTimeouts</a> - Set the read and write timeout for a buffer event</li>
        <li><a href="eventbufferevent.setwatermark.php" class="index">EventBufferEvent::setWatermark</a> - Adjusts read and/or write watermarks</li>
        <li><a href="eventbufferevent.sslerror.php" class="index">EventBufferEvent::sslError</a> - Returns most recent OpenSSL error reported on the buffer event</li>
        <li><a href="eventbufferevent.sslfilter.php" class="index">EventBufferEvent::sslFilter</a> - Create a new SSL buffer event to send its data over another buffer event</li>
        <li><a href="eventbufferevent.sslgetcipherinfo.php" class="index">EventBufferEvent::sslGetCipherInfo</a> - Returns a textual description of the cipher</li>
        <li><a href="eventbufferevent.sslgetciphername.php" class="index">EventBufferEvent::sslGetCipherName</a> - Returns the current cipher name of the SSL connection</li>
        <li><a href="eventbufferevent.sslgetcipherversion.php" class="index">EventBufferEvent::sslGetCipherVersion</a> - Returns version of cipher used by current SSL connection</li>
        <li><a href="eventbufferevent.sslgetprotocol.php" class="index">EventBufferEvent::sslGetProtocol</a> - Returns the name of the protocol used for current SSL connection</li>
        <li><a href="eventbufferevent.sslrenegotiate.php" class="index">EventBufferEvent::sslRenegotiate</a> - Tells a bufferevent to begin SSL renegotiation</li>
        <li><a href="eventbufferevent.sslsocket.php" class="index">EventBufferEvent::sslSocket</a> - Creates a new SSL buffer event to send its data over an SSL on a socket</li>
        <li><a href="eventbufferevent.write.php" class="index">EventBufferEvent::write</a> - Adds data to a buffer event's output buffer</li>
        <li><a href="eventbufferevent.writebuffer.php" class="index">EventBufferEvent::writeBuffer</a> - Adds contents of the entire buffer to a buffer event's output
          buffer</li>
        <li><a href="eventbufferevent.construct.php" class="index">EventBufferEvent::__construct</a> - Constructs EventBufferEvent object</li>
        <li><a href="eventconfig.avoidmethod.php" class="index">EventConfig::avoidMethod</a> - Tells libevent to avoid specific event method</li>
        <li><a href="eventconfig.requirefeatures.php" class="index">EventConfig::requireFeatures</a> - Enters a required event method feature that the application demands</li>
        <li><a href="eventconfig.setflags.php" class="index">EventConfig::setFlags</a> - Sets one or more flags to configure the eventual EventBase will be initialized</li>
        <li><a href="eventconfig.setmaxdispatchinterval.php" class="index">EventConfig::setMaxDispatchInterval</a> - Prevents priority inversion</li>
        <li><a href="eventconfig.construct.php" class="index">EventConfig::__construct</a> - Constructs EventConfig object</li>
        <li><a href="eventdnsbase.addnameserverip.php" class="index">EventDnsBase::addNameserverIp</a> - Adds a nameserver to the DNS base</li>
        <li><a href="eventdnsbase.addsearch.php" class="index">EventDnsBase::addSearch</a> - Adds a domain to the list of search domains</li>
        <li><a href="eventdnsbase.clearsearch.php" class="index">EventDnsBase::clearSearch</a> - Removes all current search suffixes</li>
        <li><a href="eventdnsbase.countnameservers.php" class="index">EventDnsBase::countNameservers</a> - Gets the number of configured nameservers</li>
        <li><a href="eventdnsbase.loadhosts.php" class="index">EventDnsBase::loadHosts</a> - Loads a hosts file (in the same format as /etc/hosts) from hosts file</li>
        <li><a href="eventdnsbase.parseresolvconf.php" class="index">EventDnsBase::parseResolvConf</a> - Scans the resolv.conf-formatted file</li>
        <li><a href="eventdnsbase.setoption.php" class="index">EventDnsBase::setOption</a> - Set the value of a configuration option</li>
        <li><a href="eventdnsbase.setsearchndots.php" class="index">EventDnsBase::setSearchNdots</a> - Set the 'ndots' parameter for searches</li>
        <li><a href="eventdnsbase.construct.php" class="index">EventDnsBase::__construct</a> - Constructs EventDnsBase object</li>
        <li><a href="eventhttp.accept.php" class="index">EventHttp::accept</a> - Makes an HTTP server accept connections on the specified socket stream or resource</li>
        <li><a href="eventhttp.addserveralias.php" class="index">EventHttp::addServerAlias</a> - Adds a server alias to the HTTP server object</li>
        <li><a href="eventhttp.bind.php" class="index">EventHttp::bind</a> - Binds an HTTP server on the specified address and port</li>
        <li><a href="eventhttp.removeserveralias.php" class="index">EventHttp::removeServerAlias</a> - Removes server alias</li>
        <li><a href="eventhttp.setallowedmethods.php" class="index">EventHttp::setAllowedMethods</a> - Sets the what HTTP methods are supported in requests accepted by this server, and passed to user callbacks</li>
        <li><a href="eventhttp.setcallback.php" class="index">EventHttp::setCallback</a> - Sets a callback for specified URI</li>
        <li><a href="eventhttp.setdefaultcallback.php" class="index">EventHttp::setDefaultCallback</a> - Sets default callback to handle requests that are not caught by specific callbacks</li>
        <li><a href="eventhttp.setmaxbodysize.php" class="index">EventHttp::setMaxBodySize</a> - Sets maximum request body size</li>
        <li><a href="eventhttp.setmaxheaderssize.php" class="index">EventHttp::setMaxHeadersSize</a> - Sets maximum HTTP header size</li>
        <li><a href="eventhttp.settimeout.php" class="index">EventHttp::setTimeout</a> - Sets the timeout for an HTTP request</li>
        <li><a href="eventhttp.construct.php" class="index">EventHttp::__construct</a> - Constructs EventHttp object (the HTTP server)</li>
        <li><a href="eventhttpconnection.getbase.php" class="index">EventHttpConnection::getBase</a> - Returns event base associated with the connection</li>
        <li><a href="eventhttpconnection.getpeer.php" class="index">EventHttpConnection::getPeer</a> - Gets the remote address and port associated with the connection</li>
        <li><a href="eventhttpconnection.makerequest.php" class="index">EventHttpConnection::makeRequest</a> - Makes an HTTP request over the specified connection</li>
        <li><a href="eventhttpconnection.setclosecallback.php" class="index">EventHttpConnection::setCloseCallback</a> - Set callback for connection close</li>
        <li><a href="eventhttpconnection.setlocaladdress.php" class="index">EventHttpConnection::setLocalAddress</a> - Sets the IP address from which HTTP connections are made</li>
        <li><a href="eventhttpconnection.setlocalport.php" class="index">EventHttpConnection::setLocalPort</a> - Sets the local port from which connections are made</li>
        <li><a href="eventhttpconnection.setmaxbodysize.php" class="index">EventHttpConnection::setMaxBodySize</a> - Sets maximum body size for the connection</li>
        <li><a href="eventhttpconnection.setmaxheaderssize.php" class="index">EventHttpConnection::setMaxHeadersSize</a> - Sets maximum header size</li>
        <li><a href="eventhttpconnection.setretries.php" class="index">EventHttpConnection::setRetries</a> - Sets the retry limit for the connection</li>
        <li><a href="eventhttpconnection.settimeout.php" class="index">EventHttpConnection::setTimeout</a> - Sets the timeout for the connection</li>
        <li><a href="eventhttpconnection.construct.php" class="index">EventHttpConnection::__construct</a> - Constructs EventHttpConnection object</li>
        <li><a href="eventhttprequest.addheader.php" class="index">EventHttpRequest::addHeader</a> - Adds an HTTP header to the headers of the request</li>
        <li><a href="eventhttprequest.cancel.php" class="index">EventHttpRequest::cancel</a> - Cancels a pending HTTP request</li>
        <li><a href="eventhttprequest.clearheaders.php" class="index">EventHttpRequest::clearHeaders</a> - Removes all output headers from the header list of the request</li>
        <li><a href="eventhttprequest.closeconnection.php" class="index">EventHttpRequest::closeConnection</a> - Closes associated HTTP connection</li>
        <li><a href="eventhttprequest.findheader.php" class="index">EventHttpRequest::findHeader</a> - Finds the value belonging a header</li>
        <li><a href="eventhttprequest.free.php" class="index">EventHttpRequest::free</a> - Frees the object and removes associated events</li>
        <li><a href="eventhttprequest.getbufferevent.php" class="index">EventHttpRequest::getBufferEvent</a> - Returns EventBufferEvent object</li>
        <li><a href="eventhttprequest.getcommand.php" class="index">EventHttpRequest::getCommand</a> - Returns the request command(method)</li>
        <li><a href="eventhttprequest.getconnection.php" class="index">EventHttpRequest::getConnection</a> - Returns EventHttpConnection object</li>
        <li><a href="eventhttprequest.gethost.php" class="index">EventHttpRequest::getHost</a> - Returns the request host</li>
        <li><a href="eventhttprequest.getinputbuffer.php" class="index">EventHttpRequest::getInputBuffer</a> - Returns the input buffer</li>
        <li><a href="eventhttprequest.getinputheaders.php" class="index">EventHttpRequest::getInputHeaders</a> - Returns associative array of the input headers</li>
        <li><a href="eventhttprequest.getoutputbuffer.php" class="index">EventHttpRequest::getOutputBuffer</a> - Returns the output buffer of the request</li>
        <li><a href="eventhttprequest.getoutputheaders.php" class="index">EventHttpRequest::getOutputHeaders</a> - Returns associative array of the output headers</li>
        <li><a href="eventhttprequest.getresponsecode.php" class="index">EventHttpRequest::getResponseCode</a> - Returns the response code</li>
        <li><a href="eventhttprequest.geturi.php" class="index">EventHttpRequest::getUri</a> - Returns the request URI</li>
        <li><a href="eventhttprequest.removeheader.php" class="index">EventHttpRequest::removeHeader</a> - Removes an HTTP header from the headers of the request</li>
        <li><a href="eventhttprequest.senderror.php" class="index">EventHttpRequest::sendError</a> - Send an HTML error message to the client</li>
        <li><a href="eventhttprequest.sendreply.php" class="index">EventHttpRequest::sendReply</a> - Send an HTML reply to the client</li>
        <li><a href="eventhttprequest.sendreplychunk.php" class="index">EventHttpRequest::sendReplyChunk</a> - Send another data chunk as part of an ongoing chunked reply</li>
        <li><a href="eventhttprequest.sendreplyend.php" class="index">EventHttpRequest::sendReplyEnd</a> - Complete a chunked reply, freeing the request as appropriate</li>
        <li><a href="eventhttprequest.sendreplystart.php" class="index">EventHttpRequest::sendReplyStart</a> - Initiate a chunked reply</li>
        <li><a href="eventhttprequest.construct.php" class="index">EventHttpRequest::__construct</a> - Constructs EventHttpRequest object</li>
        <li><a href="eventlistener.disable.php" class="index">EventListener::disable</a> - Disables an event connect listener object</li>
        <li><a href="eventlistener.enable.php" class="index">EventListener::enable</a> - Enables an event connect listener object</li>
        <li><a href="eventlistener.getbase.php" class="index">EventListener::getBase</a> - Returns event base associated with the event listener</li>
        <li><a href="eventlistener.getsocketname.php" class="index">EventListener::getSocketName</a> - Retreives the current address to which the
          listener's socket is bound</li>
        <li><a href="eventlistener.setcallback.php" class="index">EventListener::setCallback</a> - The setCallback purpose</li>
        <li><a href="eventlistener.seterrorcallback.php" class="index">EventListener::setErrorCallback</a> - Set event listener's error callback</li>
        <li><a href="eventlistener.construct.php" class="index">EventListener::__construct</a> - Creates new connection listener associated with an event base</li>
        <li><a href="eventsslcontext.construct.php" class="index">EventSslContext::__construct</a> - Constructs an OpenSSL context for use with Event classes</li>
        <li><a href="eventutil.getlastsocketerrno.php" class="index">EventUtil::getLastSocketErrno</a> - Returns the most recent socket error number</li>
        <li><a href="eventutil.getlastsocketerror.php" class="index">EventUtil::getLastSocketError</a> - Returns the most recent socket error</li>
        <li><a href="eventutil.getsocketfd.php" class="index">EventUtil::getSocketFd</a> - Returns numeric file descriptor of a socket, or stream</li>
        <li><a href="eventutil.getsocketname.php" class="index">EventUtil::getSocketName</a> - Retreives the current address to which the
          socket is bound</li>
        <li><a href="eventutil.setsocketoption.php" class="index">EventUtil::setSocketOption</a> - Sets socket options</li>
        <li><a href="eventutil.sslrandpoll.php" class="index">EventUtil::sslRandPoll</a> - Generates entropy by means of OpenSSL's RAND_poll()</li>
        <li><a href="eventutil.construct.php" class="index">EventUtil::__construct</a> - The abstract constructor</li>
        <li><a href="evfork.createstopped.php" class="index">EvFork::createStopped</a> - Creates a stopped instance of EvFork watcher class</li>
        <li><a href="evfork.construct.php" class="index">EvFork::__construct</a> - Constructs the EvFork watcher object</li>
        <li><a href="evidle.createstopped.php" class="index">EvIdle::createStopped</a> - Creates instance of a stopped EvIdle watcher object</li>
        <li><a href="evidle.construct.php" class="index">EvIdle::__construct</a> - Constructs the EvIdle watcher object</li>
        <li><a href="evio.createstopped.php" class="index">EvIo::createStopped</a> - Create stopped EvIo watcher object</li>
        <li><a href="evio.set.php" class="index">EvIo::set</a> - Configures the watcher</li>
        <li><a href="evio.construct.php" class="index">EvIo::__construct</a> - Constructs EvIo watcher object</li>
        <li><a href="evloop.backend.php" class="index">EvLoop::backend</a> - Returns an integer describing the backend used by libev</li>
        <li><a href="evloop.check.php" class="index">EvLoop::check</a> - Creates EvCheck object associated with the current event loop
          instance</li>
        <li><a href="evloop.child.php" class="index">EvLoop::child</a> - Creates EvChild object associated with the current event loop</li>
        <li><a href="evloop.defaultloop.php" class="index">EvLoop::defaultLoop</a> - Returns or creates the default event loop</li>
        <li><a href="evloop.embed.php" class="index">EvLoop::embed</a> - Creates an instance of EvEmbed watcher associated
          with the current EvLoop object</li>
        <li><a href="evloop.fork.php" class="index">EvLoop::fork</a> - Creates EvFork watcher object associated with the current event
          loop instance</li>
        <li><a href="evloop.idle.php" class="index">EvLoop::idle</a> - Creates EvIdle watcher object associated with the current event
          loop instance</li>
        <li><a href="evloop.invokepending.php" class="index">EvLoop::invokePending</a> - Invoke all pending watchers while resetting their pending state</li>
        <li><a href="evloop.io.php" class="index">EvLoop::io</a> - Create EvIo watcher object associated with the current event
          loop instance</li>
        <li><a href="evloop.loopfork.php" class="index">EvLoop::loopFork</a> - Must be called after a fork</li>
        <li><a href="evloop.now.php" class="index">EvLoop::now</a> - Returns the current &quot;event loop time&quot;</li>
        <li><a href="evloop.nowupdate.php" class="index">EvLoop::nowUpdate</a> - Establishes the current time by querying the kernel, updating the time
            returned by EvLoop::now in the progress</li>
        <li><a href="evloop.periodic.php" class="index">EvLoop::periodic</a> - Creates EvPeriodic watcher object associated with the current
          event loop instance</li>
        <li><a href="evloop.prepare.php" class="index">EvLoop::prepare</a> - Creates EvPrepare watcher object associated with the current
          event loop instance</li>
        <li><a href="evloop.resume.php" class="index">EvLoop::resume</a> - Resume previously suspended default event loop</li>
        <li><a href="evloop.run.php" class="index">EvLoop::run</a> - Begin checking for events and calling callbacks for the loop</li>
        <li><a href="evloop.signal.php" class="index">EvLoop::signal</a> - Creates EvSignal watcher object associated with the current
          event loop instance</li>
        <li><a href="evloop.stat.php" class="index">EvLoop::stat</a> - Creates EvStat watcher object associated with the current event
          loop instance</li>
        <li><a href="evloop.stop.php" class="index">EvLoop::stop</a> - Stops the event loop</li>
        <li><a href="evloop.suspend.php" class="index">EvLoop::suspend</a> - Suspend the loop</li>
        <li><a href="evloop.timer.php" class="index">EvLoop::timer</a> - Creates EvTimer watcher object associated with the current event
          loop instance</li>
        <li><a href="evloop.verify.php" class="index">EvLoop::verify</a> - Performs internal consistency checks(for debugging)</li>
        <li><a href="evloop.construct.php" class="index">EvLoop::__construct</a> - Constructs the event loop object</li>
        <li><a href="evperiodic.again.php" class="index">EvPeriodic::again</a> - Simply stops and restarts the periodic watcher again</li>
        <li><a href="evperiodic.at.php" class="index">EvPeriodic::at</a> - Returns the absolute time that this
          watcher is supposed to trigger next</li>
        <li><a href="evperiodic.createstopped.php" class="index">EvPeriodic::createStopped</a> - Create a stopped EvPeriodic watcher</li>
        <li><a href="evperiodic.set.php" class="index">EvPeriodic::set</a> - Configures the watcher</li>
        <li><a href="evperiodic.construct.php" class="index">EvPeriodic::__construct</a> - Constructs EvPeriodic watcher object</li>
        <li><a href="evprepare.createstopped.php" class="index">EvPrepare::createStopped</a> - Creates a stopped instance of EvPrepare watcher</li>
        <li><a href="evprepare.construct.php" class="index">EvPrepare::__construct</a> - Constructs EvPrepare watcher object</li>
        <li><a href="evsignal.createstopped.php" class="index">EvSignal::createStopped</a> - Create stopped EvSignal watcher object</li>
        <li><a href="evsignal.set.php" class="index">EvSignal::set</a> - Configures the watcher</li>
        <li><a href="evsignal.construct.php" class="index">EvSignal::__construct</a> - Constructs EvSignal watcher object</li>
        <li><a href="evstat.attr.php" class="index">EvStat::attr</a> - Returns the values most recently detected by Ev</li>
        <li><a href="evstat.createstopped.php" class="index">EvStat::createStopped</a> - Create a stopped EvStat watcher object</li>
        <li><a href="evstat.prev.php" class="index">EvStat::prev</a> - Returns the previous set of values returned by EvStat::attr</li>
        <li><a href="evstat.set.php" class="index">EvStat::set</a> - Configures the watcher</li>
        <li><a href="evstat.stat.php" class="index">EvStat::stat</a> - Initiates the stat call</li>
        <li><a href="evstat.construct.php" class="index">EvStat::__construct</a> - Constructs EvStat watcher object</li>
        <li><a href="evtimer.again.php" class="index">EvTimer::again</a> - Restarts the timer watcher</li>
        <li><a href="evtimer.createstopped.php" class="index">EvTimer::createStopped</a> - Creates EvTimer stopped watcher object</li>
        <li><a href="evtimer.set.php" class="index">EvTimer::set</a> - Configures the watcher</li>
        <li><a href="evtimer.construct.php" class="index">EvTimer::__construct</a> - Constructs an EvTimer watcher object</li>
        <li><a href="evwatcher.clear.php" class="index">EvWatcher::clear</a> - Clear watcher pending status</li>
        <li><a href="evwatcher.feed.php" class="index">EvWatcher::feed</a> - Feeds the given revents set into the event loop</li>
        <li><a href="evwatcher.getloop.php" class="index">EvWatcher::getLoop</a> - Returns the loop responsible for the watcher</li>
        <li><a href="evwatcher.invoke.php" class="index">EvWatcher::invoke</a> - Invokes the watcher callback with the given received events bit
          mask</li>
        <li><a href="evwatcher.keepalive.php" class="index">EvWatcher::keepalive</a> - Configures whether to keep the loop from returning</li>
        <li><a href="evwatcher.setcallback.php" class="index">EvWatcher::setCallback</a> - Sets new callback for the watcher</li>
        <li><a href="evwatcher.start.php" class="index">EvWatcher::start</a> - Starts the watcher</li>
        <li><a href="evwatcher.stop.php" class="index">EvWatcher::stop</a> - Stops the watcher</li>
        <li><a href="evwatcher.construct.php" class="index">EvWatcher::__construct</a> - Abstract constructor of a watcher object</li>
        <li><a href="exception.getcode.php" class="index">Exception::getCode</a> - Gets the Exception code</li>
        <li><a href="exception.getfile.php" class="index">Exception::getFile</a> - Gets the file in which the exception was created</li>
        <li><a href="exception.getline.php" class="index">Exception::getLine</a> - Gets the line in which the exception was created</li>
        <li><a href="exception.getmessage.php" class="index">Exception::getMessage</a> - Gets the Exception message</li>
        <li><a href="exception.getprevious.php" class="index">Exception::getPrevious</a> - Returns previous Throwable</li>
        <li><a href="exception.gettrace.php" class="index">Exception::getTrace</a> - Gets the stack trace</li>
        <li><a href="exception.gettraceasstring.php" class="index">Exception::getTraceAsString</a> - Gets the stack trace as a string</li>
        <li><a href="exception.clone.php" class="index">Exception::__clone</a> - Clone the exception</li>
        <li><a href="exception.construct.php" class="index">Exception::__construct</a> - Construct the exception</li>
        <li><a href="exception.tostring.php" class="index">Exception::__toString</a> - String representation of the exception</li>
        <li><a href="function.exec.php" class="index">exec</a> - Execute an external program</li>
        <li><a href="mysql-xdevapi-executable.execute.php" class="index">Executable::execute</a> - Execute statement</li>
        <li><a href="mysql-xdevapi-executionstatus.construct.php" class="index">ExecutionStatus::__construct</a> - ExecutionStatus constructor</li>
        <li><a href="function.exif-imagetype.php" class="index">exif_imagetype</a> - Determine the type of an image</li>
        <li><a href="function.exif-read-data.php" class="index">exif_read_data</a> - Reads the EXIF headers from an image file</li>
        <li><a href="function.exif-tagname.php" class="index">exif_tagname</a> - Get the header name for an index</li>
        <li><a href="function.exif-thumbnail.php" class="index">exif_thumbnail</a> - Retrieve the embedded thumbnail of an image</li>
        <li><a href="function.exit.php" class="index">exit</a> - Output a message and terminate the current script</li>
        <li><a href="function.exp.php" class="index">exp</a> - Calculates the exponent of e</li>
        <li><a href="function.expect-expectl.php" class="index">expect_expectl</a> - Waits until the output from a process matches one
          of the patterns, a specified time period has passed, or an EOF is seen</li>
        <li><a href="function.expect-popen.php" class="index">expect_popen</a> - Execute command via Bourne shell, and open the PTY stream to
          the process</li>
        <li><a href="function.explode.php" class="index">explode</a> - Split a string by a string</li>
        <li><a href="function.expm1.php" class="index">expm1</a> - Returns exp($num) - 1, computed in a way that is accurate even
           when the value of number is close to zero</li>
        <li><a href="function.mysql-xdevapi-expression.php" class="index">expression</a> - Bind prepared statement variables as parameters</li>
        <li><a href="mysql-xdevapi-expression.construct.php" class="index">Expression::__construct</a> - Expression constructor</li>
        <li><a href="function.extension-loaded.php" class="index">extension_loaded</a> - Find out whether an extension is loaded</li>
        <li><a href="function.extract.php" class="index">extract</a> - Import variables into the current symbol table from an array</li>
        <li><a href="function.ezmlm-hash.php" class="index">ezmlm_hash</a> - Calculate the hash value needed by EZMLM</li>
        </ul></li>
        <li class='gen-index index-for-f'>f<ul id='refentry-index-for-f'>
        <li><a href="fannconnection.getfromneuron.php" class="index">FANNConnection::getFromNeuron</a> - Returns the postions of starting neuron</li>
        <li><a href="fannconnection.gettoneuron.php" class="index">FANNConnection::getToNeuron</a> - Returns the postions of terminating neuron</li>
        <li><a href="fannconnection.getweight.php" class="index">FANNConnection::getWeight</a> - Returns the connection weight</li>
        <li><a href="fannconnection.setweight.php" class="index">FANNConnection::setWeight</a> - Sets the connections weight</li>
        <li><a href="fannconnection.construct.php" class="index">FANNConnection::__construct</a> - The connection constructor</li>
        <li><a href="function.fann-cascadetrain-on-data.php" class="index">fann_cascadetrain_on_data</a> - Trains on an entire dataset, for a period of time using the Cascade2 training algorithm</li>
        <li><a href="function.fann-cascadetrain-on-file.php" class="index">fann_cascadetrain_on_file</a> - Trains on an entire dataset read from file, for a period of time using the Cascade2 training algorithm</li>
        <li><a href="function.fann-clear-scaling-params.php" class="index">fann_clear_scaling_params</a> - Clears scaling parameters</li>
        <li><a href="function.fann-copy.php" class="index">fann_copy</a> - Creates a copy of a fann structure</li>
        <li><a href="function.fann-create-from-file.php" class="index">fann_create_from_file</a> - Constructs a backpropagation neural network from a configuration file</li>
        <li><a href="function.fann-create-shortcut.php" class="index">fann_create_shortcut</a> - Creates a standard backpropagation neural network which is not fully connectected and has shortcut connections</li>
        <li><a href="function.fann-create-shortcut-array.php" class="index">fann_create_shortcut_array</a> - Creates a standard backpropagation neural network which is not fully connectected and has shortcut connections</li>
        <li><a href="function.fann-create-sparse.php" class="index">fann_create_sparse</a> - Creates a standard backpropagation neural network, which is not fully connected</li>
        <li><a href="function.fann-create-sparse-array.php" class="index">fann_create_sparse_array</a> - Creates a standard backpropagation neural network, which is not fully connected using an array of layer sizes</li>
        <li><a href="function.fann-create-standard.php" class="index">fann_create_standard</a> - Creates a standard fully connected backpropagation neural network</li>
        <li><a href="function.fann-create-standard-array.php" class="index">fann_create_standard_array</a> - Creates a standard fully connected backpropagation neural network using an array of layer sizes</li>
        <li><a href="function.fann-create-train.php" class="index">fann_create_train</a> - Creates an empty training data struct</li>
        <li><a href="function.fann-create-train-from-callback.php" class="index">fann_create_train_from_callback</a> - Creates the training data struct from a user supplied function</li>
        <li><a href="function.fann-descale-input.php" class="index">fann_descale_input</a> - Scale data in input vector after get it from ann based on previously calculated parameters</li>
        <li><a href="function.fann-descale-output.php" class="index">fann_descale_output</a> - Scale data in output vector after get it from ann based on previously calculated parameters</li>
        <li><a href="function.fann-descale-train.php" class="index">fann_descale_train</a> - Descale input and output data based on previously calculated parameters</li>
        <li><a href="function.fann-destroy.php" class="index">fann_destroy</a> - Destroys the entire network and properly freeing all the associated memory</li>
        <li><a href="function.fann-destroy-train.php" class="index">fann_destroy_train</a> - Destructs the training data</li>
        <li><a href="function.fann-duplicate-train-data.php" class="index">fann_duplicate_train_data</a> - Returns an exact copy of a fann train data</li>
        <li><a href="function.fann-get-activation-function.php" class="index">fann_get_activation_function</a> - Returns the activation function</li>
        <li><a href="function.fann-get-activation-steepness.php" class="index">fann_get_activation_steepness</a> - Returns the activation steepness for supplied neuron and layer number</li>
        <li><a href="function.fann-get-bias-array.php" class="index">fann_get_bias_array</a> - Get the number of bias in each layer in the network</li>
        <li><a href="function.fann-get-bit-fail.php" class="index">fann_get_bit_fail</a> - The number of fail bits</li>
        <li><a href="function.fann-get-bit-fail-limit.php" class="index">fann_get_bit_fail_limit</a> - Returns the bit fail limit used during training</li>
        <li><a href="function.fann-get-cascade-activation-functions.php" class="index">fann_get_cascade_activation_functions</a> - Returns the cascade activation functions</li>
        <li><a href="function.fann-get-cascade-activation-functions-count.php" class="index">fann_get_cascade_activation_functions_count</a> - Returns the number of cascade activation functions</li>
        <li><a href="function.fann-get-cascade-activation-steepnesses.php" class="index">fann_get_cascade_activation_steepnesses</a> - Returns the cascade activation steepnesses</li>
        <li><a href="function.fann-get-cascade-activation-steepnesses-count.php" class="index">fann_get_cascade_activation_steepnesses_count</a> - The number of activation steepnesses</li>
        <li><a href="function.fann-get-cascade-candidate-change-fraction.php" class="index">fann_get_cascade_candidate_change_fraction</a> - Returns the cascade candidate change fraction</li>
        <li><a href="function.fann-get-cascade-candidate-limit.php" class="index">fann_get_cascade_candidate_limit</a> - Return the candidate limit</li>
        <li><a href="function.fann-get-cascade-candidate-stagnation-epochs.php" class="index">fann_get_cascade_candidate_stagnation_epochs</a> - Returns the number of cascade candidate stagnation epochs</li>
        <li><a href="function.fann-get-cascade-max-cand-epochs.php" class="index">fann_get_cascade_max_cand_epochs</a> - Returns the maximum candidate epochs</li>
        <li><a href="function.fann-get-cascade-max-out-epochs.php" class="index">fann_get_cascade_max_out_epochs</a> - Returns the maximum out epochs</li>
        <li><a href="function.fann-get-cascade-min-cand-epochs.php" class="index">fann_get_cascade_min_cand_epochs</a> - Returns the minimum candidate epochs</li>
        <li><a href="function.fann-get-cascade-min-out-epochs.php" class="index">fann_get_cascade_min_out_epochs</a> - Returns the minimum out epochs</li>
        <li><a href="function.fann-get-cascade-num-candidates.php" class="index">fann_get_cascade_num_candidates</a> - Returns the number of candidates used during training</li>
        <li><a href="function.fann-get-cascade-num-candidate-groups.php" class="index">fann_get_cascade_num_candidate_groups</a> - Returns the number of candidate groups</li>
        <li><a href="function.fann-get-cascade-output-change-fraction.php" class="index">fann_get_cascade_output_change_fraction</a> - Returns the cascade output change fraction</li>
        <li><a href="function.fann-get-cascade-output-stagnation-epochs.php" class="index">fann_get_cascade_output_stagnation_epochs</a> - Returns the number of cascade output stagnation epochs</li>
        <li><a href="function.fann-get-cascade-weight-multiplier.php" class="index">fann_get_cascade_weight_multiplier</a> - Returns the weight multiplier</li>
        <li><a href="function.fann-get-connection-array.php" class="index">fann_get_connection_array</a> - Get connections in the network</li>
        <li><a href="function.fann-get-connection-rate.php" class="index">fann_get_connection_rate</a> - Get the connection rate used when the network was created</li>
        <li><a href="function.fann-get-errno.php" class="index">fann_get_errno</a> - Returns the last error number</li>
        <li><a href="function.fann-get-errstr.php" class="index">fann_get_errstr</a> - Returns the last errstr</li>
        <li><a href="function.fann-get-layer-array.php" class="index">fann_get_layer_array</a> - Get the number of neurons in each layer in the network</li>
        <li><a href="function.fann-get-learning-momentum.php" class="index">fann_get_learning_momentum</a> - Returns the learning momentum</li>
        <li><a href="function.fann-get-learning-rate.php" class="index">fann_get_learning_rate</a> - Returns the learning rate</li>
        <li><a href="function.fann-get-mse.php" class="index">fann_get_MSE</a> - Reads the mean square error from the network</li>
        <li><a href="function.fann-get-network-type.php" class="index">fann_get_network_type</a> - Get the type of neural network it was created as</li>
        <li><a href="function.fann-get-num-input.php" class="index">fann_get_num_input</a> - Get the number of input neurons</li>
        <li><a href="function.fann-get-num-layers.php" class="index">fann_get_num_layers</a> - Get the number of layers in the neural network</li>
        <li><a href="function.fann-get-num-output.php" class="index">fann_get_num_output</a> - Get the number of output neurons</li>
        <li><a href="function.fann-get-quickprop-decay.php" class="index">fann_get_quickprop_decay</a> - Returns the decay which is a factor that weights should decrease in each iteration during quickprop training</li>
        <li><a href="function.fann-get-quickprop-mu.php" class="index">fann_get_quickprop_mu</a> - Returns the mu factor</li>
        <li><a href="function.fann-get-rprop-decrease-factor.php" class="index">fann_get_rprop_decrease_factor</a> - Returns the increase factor used during RPROP training</li>
        <li><a href="function.fann-get-rprop-delta-max.php" class="index">fann_get_rprop_delta_max</a> - Returns the maximum step-size</li>
        <li><a href="function.fann-get-rprop-delta-min.php" class="index">fann_get_rprop_delta_min</a> - Returns the minimum step-size</li>
        <li><a href="function.fann-get-rprop-delta-zero.php" class="index">fann_get_rprop_delta_zero</a> - Returns the initial step-size</li>
        <li><a href="function.fann-get-rprop-increase-factor.php" class="index">fann_get_rprop_increase_factor</a> - Returns the increase factor used during RPROP training</li>
        <li><a href="function.fann-get-sarprop-step-error-shift.php" class="index">fann_get_sarprop_step_error_shift</a> - Returns the sarprop step error shift</li>
        <li><a href="function.fann-get-sarprop-step-error-threshold-factor.php" class="index">fann_get_sarprop_step_error_threshold_factor</a> - Returns the sarprop step error threshold factor</li>
        <li><a href="function.fann-get-sarprop-temperature.php" class="index">fann_get_sarprop_temperature</a> - Returns the sarprop temperature</li>
        <li><a href="function.fann-get-sarprop-weight-decay-shift.php" class="index">fann_get_sarprop_weight_decay_shift</a> - Returns the sarprop weight decay shift</li>
        <li><a href="function.fann-get-total-connections.php" class="index">fann_get_total_connections</a> - Get the total number of connections in the entire network</li>
        <li><a href="function.fann-get-total-neurons.php" class="index">fann_get_total_neurons</a> - Get the total number of neurons in the entire network</li>
        <li><a href="function.fann-get-training-algorithm.php" class="index">fann_get_training_algorithm</a> - Returns the training algorithm</li>
        <li><a href="function.fann-get-train-error-function.php" class="index">fann_get_train_error_function</a> - Returns the error function used during training</li>
        <li><a href="function.fann-get-train-stop-function.php" class="index">fann_get_train_stop_function</a> - Returns the stop function used during training</li>
        <li><a href="function.fann-init-weights.php" class="index">fann_init_weights</a> - Initialize the weights using Widrow + Nguyen&rsquo;s algorithm</li>
        <li><a href="function.fann-length-train-data.php" class="index">fann_length_train_data</a> - Returns the number of training patterns in the train data</li>
        <li><a href="function.fann-merge-train-data.php" class="index">fann_merge_train_data</a> - Merges the train data</li>
        <li><a href="function.fann-num-input-train-data.php" class="index">fann_num_input_train_data</a> - Returns the number of inputs in each of the training patterns in the train data</li>
        <li><a href="function.fann-num-output-train-data.php" class="index">fann_num_output_train_data</a> - Returns the number of outputs in each of the training patterns in the train data</li>
        <li><a href="function.fann-print-error.php" class="index">fann_print_error</a> - Prints the error string</li>
        <li><a href="function.fann-randomize-weights.php" class="index">fann_randomize_weights</a> - Give each connection a random weight between min_weight and max_weight</li>
        <li><a href="function.fann-read-train-from-file.php" class="index">fann_read_train_from_file</a> - Reads a file that stores training data</li>
        <li><a href="function.fann-reset-errno.php" class="index">fann_reset_errno</a> - Resets the last error number</li>
        <li><a href="function.fann-reset-errstr.php" class="index">fann_reset_errstr</a> - Resets the last error string</li>
        <li><a href="function.fann-reset-mse.php" class="index">fann_reset_MSE</a> - Resets the mean square error from the network</li>
        <li><a href="function.fann-run.php" class="index">fann_run</a> - Will run input through the neural network</li>
        <li><a href="function.fann-save.php" class="index">fann_save</a> - Saves the entire network to a configuration file</li>
        <li><a href="function.fann-save-train.php" class="index">fann_save_train</a> - Save the training structure to a file</li>
        <li><a href="function.fann-scale-input.php" class="index">fann_scale_input</a> - Scale data in input vector before feed it to ann based on previously calculated parameters</li>
        <li><a href="function.fann-scale-input-train-data.php" class="index">fann_scale_input_train_data</a> - Scales the inputs in the training data to the specified range</li>
        <li><a href="function.fann-scale-output.php" class="index">fann_scale_output</a> - Scale data in output vector before feed it to ann based on previously calculated parameters</li>
        <li><a href="function.fann-scale-output-train-data.php" class="index">fann_scale_output_train_data</a> - Scales the outputs in the training data to the specified range</li>
        <li><a href="function.fann-scale-train.php" class="index">fann_scale_train</a> - Scale input and output data based on previously calculated parameters</li>
        <li><a href="function.fann-scale-train-data.php" class="index">fann_scale_train_data</a> - Scales the inputs and outputs in the training data to the specified range</li>
        <li><a href="function.fann-set-activation-function.php" class="index">fann_set_activation_function</a> - Sets the activation function for supplied neuron and layer</li>
        <li><a href="function.fann-set-activation-function-hidden.php" class="index">fann_set_activation_function_hidden</a> - Sets the activation function for all of the hidden layers</li>
        <li><a href="function.fann-set-activation-function-layer.php" class="index">fann_set_activation_function_layer</a> - Sets the activation function for all the neurons in the supplied layer</li>
        <li><a href="function.fann-set-activation-function-output.php" class="index">fann_set_activation_function_output</a> - Sets the activation function for the output layer</li>
        <li><a href="function.fann-set-activation-steepness.php" class="index">fann_set_activation_steepness</a> - Sets the activation steepness for supplied neuron and layer number</li>
        <li><a href="function.fann-set-activation-steepness-hidden.php" class="index">fann_set_activation_steepness_hidden</a> - Sets the steepness of the activation steepness for all neurons in the all hidden layers</li>
        <li><a href="function.fann-set-activation-steepness-layer.php" class="index">fann_set_activation_steepness_layer</a> - Sets the activation steepness for all of the neurons in the supplied layer number</li>
        <li><a href="function.fann-set-activation-steepness-output.php" class="index">fann_set_activation_steepness_output</a> - Sets the steepness of the activation steepness in the output layer</li>
        <li><a href="function.fann-set-bit-fail-limit.php" class="index">fann_set_bit_fail_limit</a> - Set the bit fail limit used during training</li>
        <li><a href="function.fann-set-callback.php" class="index">fann_set_callback</a> - Sets the callback function for use during training</li>
        <li><a href="function.fann-set-cascade-activation-functions.php" class="index">fann_set_cascade_activation_functions</a> - Sets the array of cascade candidate activation functions</li>
        <li><a href="function.fann-set-cascade-activation-steepnesses.php" class="index">fann_set_cascade_activation_steepnesses</a> - Sets the array of cascade candidate activation steepnesses</li>
        <li><a href="function.fann-set-cascade-candidate-change-fraction.php" class="index">fann_set_cascade_candidate_change_fraction</a> - Sets the cascade candidate change fraction</li>
        <li><a href="function.fann-set-cascade-candidate-limit.php" class="index">fann_set_cascade_candidate_limit</a> - Sets the candidate limit</li>
        <li><a href="function.fann-set-cascade-candidate-stagnation-epochs.php" class="index">fann_set_cascade_candidate_stagnation_epochs</a> - Sets the number of cascade candidate stagnation epochs</li>
        <li><a href="function.fann-set-cascade-max-cand-epochs.php" class="index">fann_set_cascade_max_cand_epochs</a> - Sets the max candidate epochs</li>
        <li><a href="function.fann-set-cascade-max-out-epochs.php" class="index">fann_set_cascade_max_out_epochs</a> - Sets the maximum out epochs</li>
        <li><a href="function.fann-set-cascade-min-cand-epochs.php" class="index">fann_set_cascade_min_cand_epochs</a> - Sets the min candidate epochs</li>
        <li><a href="function.fann-set-cascade-min-out-epochs.php" class="index">fann_set_cascade_min_out_epochs</a> - Sets the minimum out epochs</li>
        <li><a href="function.fann-set-cascade-num-candidate-groups.php" class="index">fann_set_cascade_num_candidate_groups</a> - Sets the number of candidate groups</li>
        <li><a href="function.fann-set-cascade-output-change-fraction.php" class="index">fann_set_cascade_output_change_fraction</a> - Sets the cascade output change fraction</li>
        <li><a href="function.fann-set-cascade-output-stagnation-epochs.php" class="index">fann_set_cascade_output_stagnation_epochs</a> - Sets the number of cascade output stagnation epochs</li>
        <li><a href="function.fann-set-cascade-weight-multiplier.php" class="index">fann_set_cascade_weight_multiplier</a> - Sets the weight multiplier</li>
        <li><a href="function.fann-set-error-log.php" class="index">fann_set_error_log</a> - Sets where the errors are logged to</li>
        <li><a href="function.fann-set-input-scaling-params.php" class="index">fann_set_input_scaling_params</a> - Calculate input scaling parameters for future use based on training data</li>
        <li><a href="function.fann-set-learning-momentum.php" class="index">fann_set_learning_momentum</a> - Sets the learning momentum</li>
        <li><a href="function.fann-set-learning-rate.php" class="index">fann_set_learning_rate</a> - Sets the learning rate</li>
        <li><a href="function.fann-set-output-scaling-params.php" class="index">fann_set_output_scaling_params</a> - Calculate output scaling parameters for future use based on training data</li>
        <li><a href="function.fann-set-quickprop-decay.php" class="index">fann_set_quickprop_decay</a> - Sets the quickprop decay factor</li>
        <li><a href="function.fann-set-quickprop-mu.php" class="index">fann_set_quickprop_mu</a> - Sets the quickprop mu factor</li>
        <li><a href="function.fann-set-rprop-decrease-factor.php" class="index">fann_set_rprop_decrease_factor</a> - Sets the decrease factor used during RPROP training</li>
        <li><a href="function.fann-set-rprop-delta-max.php" class="index">fann_set_rprop_delta_max</a> - Sets the maximum step-size</li>
        <li><a href="function.fann-set-rprop-delta-min.php" class="index">fann_set_rprop_delta_min</a> - Sets the minimum step-size</li>
        <li><a href="function.fann-set-rprop-delta-zero.php" class="index">fann_set_rprop_delta_zero</a> - Sets the initial step-size</li>
        <li><a href="function.fann-set-rprop-increase-factor.php" class="index">fann_set_rprop_increase_factor</a> - Sets the increase factor used during RPROP training</li>
        <li><a href="function.fann-set-sarprop-step-error-shift.php" class="index">fann_set_sarprop_step_error_shift</a> - Sets the sarprop step error shift</li>
        <li><a href="function.fann-set-sarprop-step-error-threshold-factor.php" class="index">fann_set_sarprop_step_error_threshold_factor</a> - Sets the sarprop step error threshold factor</li>
        <li><a href="function.fann-set-sarprop-temperature.php" class="index">fann_set_sarprop_temperature</a> - Sets the sarprop temperature</li>
        <li><a href="function.fann-set-sarprop-weight-decay-shift.php" class="index">fann_set_sarprop_weight_decay_shift</a> - Sets the sarprop weight decay shift</li>
        <li><a href="function.fann-set-scaling-params.php" class="index">fann_set_scaling_params</a> - Calculate input and output scaling parameters for future use based on training data</li>
        <li><a href="function.fann-set-training-algorithm.php" class="index">fann_set_training_algorithm</a> - Sets the training algorithm</li>
        <li><a href="function.fann-set-train-error-function.php" class="index">fann_set_train_error_function</a> - Sets the error function used during training</li>
        <li><a href="function.fann-set-train-stop-function.php" class="index">fann_set_train_stop_function</a> - Sets the stop function used during training</li>
        <li><a href="function.fann-set-weight.php" class="index">fann_set_weight</a> - Set a connection in the network</li>
        <li><a href="function.fann-set-weight-array.php" class="index">fann_set_weight_array</a> - Set connections in the network</li>
        <li><a href="function.fann-shuffle-train-data.php" class="index">fann_shuffle_train_data</a> - Shuffles training data, randomizing the order</li>
        <li><a href="function.fann-subset-train-data.php" class="index">fann_subset_train_data</a> - Returns an copy of a subset of the train data</li>
        <li><a href="function.fann-test.php" class="index">fann_test</a> - Test with a set of inputs, and a set of desired outputs</li>
        <li><a href="function.fann-test-data.php" class="index">fann_test_data</a> - Test a set of training data and calculates the MSE for the training data</li>
        <li><a href="function.fann-train.php" class="index">fann_train</a> - Train one iteration with a set of inputs, and a set of desired outputs</li>
        <li><a href="function.fann-train-epoch.php" class="index">fann_train_epoch</a> - Train one epoch with a set of training data</li>
        <li><a href="function.fann-train-on-data.php" class="index">fann_train_on_data</a> - Trains on an entire dataset for a period of time</li>
        <li><a href="function.fann-train-on-file.php" class="index">fann_train_on_file</a> - Trains on an entire dataset, which is read from file, for a period of time</li>
        <li><a href="function.fastcgi-finish-request.php" class="index">fastcgi_finish_request</a> - Flushes all response data to the client</li>
        <li><a href="function.fbird-add-user.php" class="index">fbird_add_user</a> - Alias of ibase_add_user</li>
        <li><a href="function.fbird-affected-rows.php" class="index">fbird_affected_rows</a> - Alias of ibase_affected_rows</li>
        <li><a href="function.fbird-backup.php" class="index">fbird_backup</a> - Alias of ibase_backup</li>
        <li><a href="function.fbird-blob-add.php" class="index">fbird_blob_add</a> - Alias of ibase_blob_add</li>
        <li><a href="function.fbird-blob-cancel.php" class="index">fbird_blob_cancel</a> - Cancel creating blob</li>
        <li><a href="function.fbird-blob-close.php" class="index">fbird_blob_close</a> - Alias of ibase_blob_close</li>
        <li><a href="function.fbird-blob-create.php" class="index">fbird_blob_create</a> - Alias of ibase_blob_create</li>
        <li><a href="function.fbird-blob-echo.php" class="index">fbird_blob_echo</a> - Alias of ibase_blob_echo</li>
        <li><a href="function.fbird-blob-get.php" class="index">fbird_blob_get</a> - Alias of ibase_blob_get</li>
        <li><a href="function.fbird-blob-import.php" class="index">fbird_blob_import</a> - Alias of ibase_blob_import</li>
        <li><a href="function.fbird-blob-info.php" class="index">fbird_blob_info</a> - Alias of ibase_blob_info</li>
        <li><a href="function.fbird-blob-open.php" class="index">fbird_blob_open</a> - Alias of ibase_blob_open</li>
        <li><a href="function.fbird-close.php" class="index">fbird_close</a> - Alias of ibase_close</li>
        <li><a href="function.fbird-commit.php" class="index">fbird_commit</a> - Alias of ibase_commit</li>
        <li><a href="function.fbird-commit-ret.php" class="index">fbird_commit_ret</a> - Alias of ibase_commit_ret</li>
        <li><a href="function.fbird-connect.php" class="index">fbird_connect</a> - Alias of ibase_connect</li>
        <li><a href="function.fbird-db-info.php" class="index">fbird_db_info</a> - Alias of ibase_db_info</li>
        <li><a href="function.fbird-delete-user.php" class="index">fbird_delete_user</a> - Alias of ibase_delete_user</li>
        <li><a href="function.fbird-drop-db.php" class="index">fbird_drop_db</a> - Alias of ibase_drop_db</li>
        <li><a href="function.fbird-errcode.php" class="index">fbird_errcode</a> - Alias of ibase_errcode</li>
        <li><a href="function.fbird-errmsg.php" class="index">fbird_errmsg</a> - Alias of ibase_errmsg</li>
        <li><a href="function.fbird-execute.php" class="index">fbird_execute</a> - Alias of ibase_execute</li>
        <li><a href="function.fbird-fetch-assoc.php" class="index">fbird_fetch_assoc</a> - Alias of ibase_fetch_assoc</li>
        <li><a href="function.fbird-fetch-object.php" class="index">fbird_fetch_object</a> - Alias of ibase_fetch_object</li>
        <li><a href="function.fbird-fetch-row.php" class="index">fbird_fetch_row</a> - Alias of ibase_fetch_row</li>
        <li><a href="function.fbird-field-info.php" class="index">fbird_field_info</a> - Alias of ibase_field_info</li>
        <li><a href="function.fbird-free-event-handler.php" class="index">fbird_free_event_handler</a> - Alias of ibase_free_event_handler</li>
        <li><a href="function.fbird-free-query.php" class="index">fbird_free_query</a> - Alias of ibase_free_query</li>
        <li><a href="function.fbird-free-result.php" class="index">fbird_free_result</a> - Alias of ibase_free_result</li>
        <li><a href="function.fbird-gen-id.php" class="index">fbird_gen_id</a> - Alias of ibase_gen_id</li>
        <li><a href="function.fbird-maintain-db.php" class="index">fbird_maintain_db</a> - Alias of ibase_maintain_db</li>
        <li><a href="function.fbird-modify-user.php" class="index">fbird_modify_user</a> - Alias of ibase_modify_user</li>
        <li><a href="function.fbird-name-result.php" class="index">fbird_name_result</a> - Alias of ibase_name_result</li>
        <li><a href="function.fbird-num-fields.php" class="index">fbird_num_fields</a> - Alias of ibase_num_fields</li>
        <li><a href="function.fbird-num-params.php" class="index">fbird_num_params</a> - Alias of ibase_num_params</li>
        <li><a href="function.fbird-param-info.php" class="index">fbird_param_info</a> - Alias of ibase_param_info</li>
        <li><a href="function.fbird-pconnect.php" class="index">fbird_pconnect</a> - Alias of ibase_pconnect</li>
        <li><a href="function.fbird-prepare.php" class="index">fbird_prepare</a> - Alias of ibase_prepare</li>
        <li><a href="function.fbird-query.php" class="index">fbird_query</a> - Alias of ibase_query</li>
        <li><a href="function.fbird-restore.php" class="index">fbird_restore</a> - Alias of ibase_restore</li>
        <li><a href="function.fbird-rollback.php" class="index">fbird_rollback</a> - Alias of ibase_rollback</li>
        <li><a href="function.fbird-rollback-ret.php" class="index">fbird_rollback_ret</a> - Alias of ibase_rollback_ret</li>
        <li><a href="function.fbird-server-info.php" class="index">fbird_server_info</a> - Alias of ibase_server_info</li>
        <li><a href="function.fbird-service-attach.php" class="index">fbird_service_attach</a> - Alias of ibase_service_attach</li>
        <li><a href="function.fbird-service-detach.php" class="index">fbird_service_detach</a> - Alias of ibase_service_detach</li>
        <li><a href="function.fbird-set-event-handler.php" class="index">fbird_set_event_handler</a> - Alias of ibase_set_event_handler</li>
        <li><a href="function.fbird-trans.php" class="index">fbird_trans</a> - Alias of ibase_trans</li>
        <li><a href="function.fbird-wait-event.php" class="index">fbird_wait_event</a> - Alias of ibase_wait_event</li>
        <li><a href="function.fclose.php" class="index">fclose</a> - Closes an open file pointer</li>
        <li><a href="function.fdatasync.php" class="index">fdatasync</a> - Synchronizes data (but not meta-data) to the file</li>
        <li><a href="function.fdf-add-doc-javascript.php" class="index">fdf_add_doc_javascript</a> - Adds javascript code to the FDF document</li>
        <li><a href="function.fdf-add-template.php" class="index">fdf_add_template</a> - Adds a template into the FDF document</li>
        <li><a href="function.fdf-close.php" class="index">fdf_close</a> - Close an FDF document</li>
        <li><a href="function.fdf-create.php" class="index">fdf_create</a> - Create a new FDF document</li>
        <li><a href="function.fdf-enum-values.php" class="index">fdf_enum_values</a> - Call a user defined function for each document value</li>
        <li><a href="function.fdf-errno.php" class="index">fdf_errno</a> - Return error code for last fdf operation</li>
        <li><a href="function.fdf-error.php" class="index">fdf_error</a> - Return error description for FDF error code</li>
        <li><a href="function.fdf-get-ap.php" class="index">fdf_get_ap</a> - Get the appearance of a field</li>
        <li><a href="function.fdf-get-attachment.php" class="index">fdf_get_attachment</a> - Extracts uploaded file embedded in the FDF</li>
        <li><a href="function.fdf-get-encoding.php" class="index">fdf_get_encoding</a> - Get the value of the /Encoding key</li>
        <li><a href="function.fdf-get-file.php" class="index">fdf_get_file</a> - Get the value of the /F key</li>
        <li><a href="function.fdf-get-flags.php" class="index">fdf_get_flags</a> - Gets the flags of a field</li>
        <li><a href="function.fdf-get-opt.php" class="index">fdf_get_opt</a> - Gets a value from the opt array of a field</li>
        <li><a href="function.fdf-get-status.php" class="index">fdf_get_status</a> - Get the value of the /STATUS key</li>
        <li><a href="function.fdf-get-value.php" class="index">fdf_get_value</a> - Get the value of a field</li>
        <li><a href="function.fdf-get-version.php" class="index">fdf_get_version</a> - Gets version number for FDF API or file</li>
        <li><a href="function.fdf-header.php" class="index">fdf_header</a> - Sets FDF-specific output headers</li>
        <li><a href="function.fdf-next-field-name.php" class="index">fdf_next_field_name</a> - Get the next field name</li>
        <li><a href="function.fdf-open.php" class="index">fdf_open</a> - Open a FDF document</li>
        <li><a href="function.fdf-open-string.php" class="index">fdf_open_string</a> - Read a FDF document from a string</li>
        <li><a href="function.fdf-remove-item.php" class="index">fdf_remove_item</a> - Sets target frame for form</li>
        <li><a href="function.fdf-save.php" class="index">fdf_save</a> - Save a FDF document</li>
        <li><a href="function.fdf-save-string.php" class="index">fdf_save_string</a> - Returns the FDF document as a string</li>
        <li><a href="function.fdf-set-ap.php" class="index">fdf_set_ap</a> - Set the appearance of a field</li>
        <li><a href="function.fdf-set-encoding.php" class="index">fdf_set_encoding</a> - Sets FDF character encoding</li>
        <li><a href="function.fdf-set-file.php" class="index">fdf_set_file</a> - Set PDF document to display FDF data in</li>
        <li><a href="function.fdf-set-flags.php" class="index">fdf_set_flags</a> - Sets a flag of a field</li>
        <li><a href="function.fdf-set-javascript-action.php" class="index">fdf_set_javascript_action</a> - Sets an javascript action of a field</li>
        <li><a href="function.fdf-set-on-import-javascript.php" class="index">fdf_set_on_import_javascript</a> - Adds javascript code to be executed when Acrobat opens the FDF</li>
        <li><a href="function.fdf-set-opt.php" class="index">fdf_set_opt</a> - Sets an option of a field</li>
        <li><a href="function.fdf-set-status.php" class="index">fdf_set_status</a> - Set the value of the /STATUS key</li>
        <li><a href="function.fdf-set-submit-form-action.php" class="index">fdf_set_submit_form_action</a> - Sets a submit form action of a field</li>
        <li><a href="function.fdf-set-target-frame.php" class="index">fdf_set_target_frame</a> - Set target frame for form display</li>
        <li><a href="function.fdf-set-value.php" class="index">fdf_set_value</a> - Set the value of a field</li>
        <li><a href="function.fdf-set-version.php" class="index">fdf_set_version</a> - Sets version number for a FDF file</li>
        <li><a href="function.fdiv.php" class="index">fdiv</a> - Divides two numbers, according to IEEE 754</li>
        <li><a href="function.feof.php" class="index">feof</a> - Tests for end-of-file on a file pointer</li>
        <li><a href="ffi.addr.php" class="index">FFI::addr</a> - Creates an unmanaged pointer to C data</li>
        <li><a href="ffi.alignof.php" class="index">FFI::alignof</a> - Gets the alignment</li>
        <li><a href="ffi.arraytype.php" class="index">FFI::arrayType</a> - Dynamically constructs a new C array type</li>
        <li><a href="ffi.cast.php" class="index">FFI::cast</a> - Performs a C type cast</li>
        <li><a href="ffi.cdef.php" class="index">FFI::cdef</a> - Creates a new FFI object</li>
        <li><a href="ffi.free.php" class="index">FFI::free</a> - Releases an unmanaged data structure</li>
        <li><a href="ffi.isnull.php" class="index">FFI::isNull</a> - Checks whether a FFI\CData is a null pointer</li>
        <li><a href="ffi.load.php" class="index">FFI::load</a> - Loads C declarations from a C header file</li>
        <li><a href="ffi.memcmp.php" class="index">FFI::memcmp</a> - Compares memory areas</li>
        <li><a href="ffi.memcpy.php" class="index">FFI::memcpy</a> - Copies one memory area to another</li>
        <li><a href="ffi.memset.php" class="index">FFI::memset</a> - Fills a memory area</li>
        <li><a href="ffi.new.php" class="index">FFI::new</a> - Creates a C data structure</li>
        <li><a href="ffi.scope.php" class="index">FFI::scope</a> - Instantiates an FFI object with C declarations parsed during preloading</li>
        <li><a href="ffi.sizeof.php" class="index">FFI::sizeof</a> - Gets the size of C data or types</li>
        <li><a href="ffi.string.php" class="index">FFI::string</a> - Creates a PHP string from a memory area</li>
        <li><a href="ffi.type.php" class="index">FFI::type</a> - Creates an FFI\CType object from a C declaration</li>
        <li><a href="ffi.typeof.php" class="index">FFI::typeof</a> - Gets the FFI\CType of FFI\CData</li>
        <li><a href="ffi-ctype.getalignment.php" class="index">FFI\CType::getAlignment</a> - Description</li>
        <li><a href="ffi-ctype.getarrayelementtype.php" class="index">FFI\CType::getArrayElementType</a> - Description</li>
        <li><a href="ffi-ctype.getarraylength.php" class="index">FFI\CType::getArrayLength</a> - Description</li>
        <li><a href="ffi-ctype.getattributes.php" class="index">FFI\CType::getAttributes</a> - Description</li>
        <li><a href="ffi-ctype.getenumkind.php" class="index">FFI\CType::getEnumKind</a> - Description</li>
        <li><a href="ffi-ctype.getfuncabi.php" class="index">FFI\CType::getFuncABI</a> - Description</li>
        <li><a href="ffi-ctype.getfuncparametercount.php" class="index">FFI\CType::getFuncParameterCount</a> - Description</li>
        <li><a href="ffi-ctype.getfuncparametertype.php" class="index">FFI\CType::getFuncParameterType</a> - Description</li>
        <li><a href="ffi-ctype.getfuncreturntype.php" class="index">FFI\CType::getFuncReturnType</a> - Description</li>
        <li><a href="ffi-ctype.getkind.php" class="index">FFI\CType::getKind</a> - Description</li>
        <li><a href="ffi-ctype.getname.php" class="index">FFI\CType::getName</a> - Description</li>
        <li><a href="ffi-ctype.getpointertype.php" class="index">FFI\CType::getPointerType</a> - Description</li>
        <li><a href="ffi-ctype.getsize.php" class="index">FFI\CType::getSize</a> - Description</li>
        <li><a href="ffi-ctype.getstructfieldnames.php" class="index">FFI\CType::getStructFieldNames</a> - Description</li>
        <li><a href="ffi-ctype.getstructfieldoffset.php" class="index">FFI\CType::getStructFieldOffset</a> - Description</li>
        <li><a href="ffi-ctype.getstructfieldtype.php" class="index">FFI\CType::getStructFieldType</a> - Description</li>
        <li><a href="function.fflush.php" class="index">fflush</a> - Flushes the output to a file</li>
        <li><a href="function.fgetc.php" class="index">fgetc</a> - Gets character from file pointer</li>
        <li><a href="function.fgetcsv.php" class="index">fgetcsv</a> - Gets line from file pointer and parse for CSV fields</li>
        <li><a href="function.fgets.php" class="index">fgets</a> - Gets line from file pointer</li>
        <li><a href="function.fgetss.php" class="index">fgetss</a> - Gets line from file pointer and strip HTML tags</li>
        <li><a href="fiber.getcurrent.php" class="index">Fiber::getCurrent</a> - Gets the currently executing Fiber instance</li>
        <li><a href="fiber.getreturn.php" class="index">Fiber::getReturn</a> - Gets the value returned by the Fiber</li>
        <li><a href="fiber.isrunning.php" class="index">Fiber::isRunning</a> - Determines if the fiber is running</li>
        <li><a href="fiber.isstarted.php" class="index">Fiber::isStarted</a> - Determines if the fiber has started</li>
        <li><a href="fiber.issuspended.php" class="index">Fiber::isSuspended</a> - Determines if the fiber is suspended</li>
        <li><a href="fiber.isterminated.php" class="index">Fiber::isTerminated</a> - Determines if the fiber has terminated</li>
        <li><a href="fiber.resume.php" class="index">Fiber::resume</a> - Resumes execution of the fiber with a value</li>
        <li><a href="fiber.start.php" class="index">Fiber::start</a> - Start execution of the fiber</li>
        <li><a href="fiber.suspend.php" class="index">Fiber::suspend</a> - Suspends execution of the current fiber</li>
        <li><a href="fiber.throw.php" class="index">Fiber::throw</a> - Resumes execution of the fiber with an exception</li>
        <li><a href="fiber.construct.php" class="index">Fiber::__construct</a> - Creates a new Fiber instance</li>
        <li><a href="fibererror.construct.php" class="index">FiberError::__construct</a> - Constructor to disallow direct instantiation</li>
        <li><a href="function.file.php" class="index">file</a> - Reads entire file into an array</li>
        <li><a href="function.fileatime.php" class="index">fileatime</a> - Gets last access time of file</li>
        <li><a href="function.filectime.php" class="index">filectime</a> - Gets inode change time of file</li>
        <li><a href="function.filegroup.php" class="index">filegroup</a> - Gets file group</li>
        <li><a href="function.fileinode.php" class="index">fileinode</a> - Gets file inode</li>
        <li><a href="function.filemtime.php" class="index">filemtime</a> - Gets file modification time</li>
        <li><a href="function.fileowner.php" class="index">fileowner</a> - Gets file owner</li>
        <li><a href="function.fileperms.php" class="index">fileperms</a> - Gets file permissions</li>
        <li><a href="function.filesize.php" class="index">filesize</a> - Gets file size</li>
        <li><a href="filesystemiterator.current.php" class="index">FilesystemIterator::current</a> - The current file</li>
        <li><a href="filesystemiterator.getflags.php" class="index">FilesystemIterator::getFlags</a> - Get the handling flags</li>
        <li><a href="filesystemiterator.key.php" class="index">FilesystemIterator::key</a> - Retrieve the key for the current file</li>
        <li><a href="filesystemiterator.next.php" class="index">FilesystemIterator::next</a> - Move to the next file</li>
        <li><a href="filesystemiterator.rewind.php" class="index">FilesystemIterator::rewind</a> - Rewinds back to the beginning</li>
        <li><a href="filesystemiterator.setflags.php" class="index">FilesystemIterator::setFlags</a> - Sets handling flags</li>
        <li><a href="filesystemiterator.construct.php" class="index">FilesystemIterator::__construct</a> - Constructs a new filesystem iterator</li>
        <li><a href="function.filetype.php" class="index">filetype</a> - Gets file type</li>
        <li><a href="function.file-exists.php" class="index">file_exists</a> - Checks whether a file or directory exists</li>
        <li><a href="function.file-get-contents.php" class="index">file_get_contents</a> - Reads entire file into a string</li>
        <li><a href="function.file-put-contents.php" class="index">file_put_contents</a> - Write data to a file</li>
        <li><a href="filteriterator.accept.php" class="index">FilterIterator::accept</a> - Check whether the current element of the iterator is acceptable</li>
        <li><a href="filteriterator.current.php" class="index">FilterIterator::current</a> - Get the current element value</li>
        <li><a href="filteriterator.key.php" class="index">FilterIterator::key</a> - Get the current key</li>
        <li><a href="filteriterator.next.php" class="index">FilterIterator::next</a> - Move the iterator forward</li>
        <li><a href="filteriterator.rewind.php" class="index">FilterIterator::rewind</a> - Rewind the iterator</li>
        <li><a href="filteriterator.valid.php" class="index">FilterIterator::valid</a> - Check whether the current element is valid</li>
        <li><a href="filteriterator.construct.php" class="index">FilterIterator::__construct</a> - Construct a filterIterator</li>
        <li><a href="function.filter-has-var.php" class="index">filter_has_var</a> - Checks if variable of specified type exists</li>
        <li><a href="function.filter-id.php" class="index">filter_id</a> - Returns the filter ID belonging to a named filter</li>
        <li><a href="function.filter-input.php" class="index">filter_input</a> - Gets a specific external variable by name and optionally filters it</li>
        <li><a href="function.filter-input-array.php" class="index">filter_input_array</a> - Gets external variables and optionally filters them</li>
        <li><a href="function.filter-list.php" class="index">filter_list</a> - Returns a list of all supported filters</li>
        <li><a href="function.filter-var.php" class="index">filter_var</a> - Filters a variable with a specified filter</li>
        <li><a href="function.filter-var-array.php" class="index">filter_var_array</a> - Gets multiple variables and optionally filters them</li>
        <li><a href="finfo.buffer.php" class="index">finfo::buffer</a> - Alias of finfo_buffer()</li>
        <li><a href="finfo.file.php" class="index">finfo::file</a> - Alias of finfo_file()</li>
        <li><a href="finfo.set-flags.php" class="index">finfo::set_flags</a> - Alias of finfo_set_flags()</li>
        <li><a href="finfo.construct.php" class="index">finfo::__construct</a> - Alias of finfo_open</li>
        <li><a href="function.finfo-buffer.php" class="index">finfo_buffer</a> - Return information about a string buffer</li>
        <li><a href="function.finfo-close.php" class="index">finfo_close</a> - Close finfo instance</li>
        <li><a href="function.finfo-file.php" class="index">finfo_file</a> - Return information about a file</li>
        <li><a href="function.finfo-open.php" class="index">finfo_open</a> - Create a new finfo instance</li>
        <li><a href="function.finfo-set-flags.php" class="index">finfo_set_flags</a> - Set libmagic configuration options</li>
        <li><a href="function.floatval.php" class="index">floatval</a> - Get float value of a variable</li>
        <li><a href="function.flock.php" class="index">flock</a> - Portable advisory file locking</li>
        <li><a href="function.floor.php" class="index">floor</a> - Round fractions down</li>
        <li><a href="function.flush.php" class="index">flush</a> - Flush system output buffer</li>
        <li><a href="function.fmod.php" class="index">fmod</a> - Returns the floating point remainder (modulo) of the division
          of the arguments</li>
        <li><a href="function.fnmatch.php" class="index">fnmatch</a> - Match filename against a pattern</li>
        <li><a href="function.fopen.php" class="index">fopen</a> - Opens file or URL</li>
        <li><a href="function.forward-static-call.php" class="index">forward_static_call</a> - Call a static method</li>
        <li><a href="function.forward-static-call-array.php" class="index">forward_static_call_array</a> - Call a static method and pass the arguments as array</li>
        <li><a href="function.fpassthru.php" class="index">fpassthru</a> - Output all remaining data on a file pointer</li>
        <li><a href="function.fpm-get-status.php" class="index">fpm_get_status</a> - Returns the current FPM pool status</li>
        <li><a href="function.fprintf.php" class="index">fprintf</a> - Write a formatted string to a stream</li>
        <li><a href="function.fputcsv.php" class="index">fputcsv</a> - Format line as CSV and write to file pointer</li>
        <li><a href="function.fputs.php" class="index">fputs</a> - Alias of fwrite</li>
        <li><a href="function.fread.php" class="index">fread</a> - Binary-safe file read</li>
        <li><a href="function.frenchtojd.php" class="index">frenchtojd</a> - Converts a date from the French Republican Calendar to a Julian Day Count</li>
        <li><a href="function.fscanf.php" class="index">fscanf</a> - Parses input from a file according to a format</li>
        <li><a href="function.fseek.php" class="index">fseek</a> - Seeks on a file pointer</li>
        <li><a href="function.fsockopen.php" class="index">fsockopen</a> - Open Internet or Unix domain socket connection</li>
        <li><a href="function.fstat.php" class="index">fstat</a> - Gets information about a file using an open file pointer</li>
        <li><a href="function.fsync.php" class="index">fsync</a> - Synchronizes changes to the file (including meta-data)</li>
        <li><a href="function.ftell.php" class="index">ftell</a> - Returns the current position of the file read/write pointer</li>
        <li><a href="function.ftok.php" class="index">ftok</a> - Convert a pathname and a project identifier to a System V IPC key</li>
        <li><a href="function.ftp-alloc.php" class="index">ftp_alloc</a> - Allocates space for a file to be uploaded</li>
        <li><a href="function.ftp-append.php" class="index">ftp_append</a> - Append the contents of a file to another file on the FTP server</li>
        <li><a href="function.ftp-cdup.php" class="index">ftp_cdup</a> - Changes to the parent directory</li>
        <li><a href="function.ftp-chdir.php" class="index">ftp_chdir</a> - Changes the current directory on a FTP server</li>
        <li><a href="function.ftp-chmod.php" class="index">ftp_chmod</a> - Set permissions on a file via FTP</li>
        <li><a href="function.ftp-close.php" class="index">ftp_close</a> - Closes an FTP connection</li>
        <li><a href="function.ftp-connect.php" class="index">ftp_connect</a> - Opens an FTP connection</li>
        <li><a href="function.ftp-delete.php" class="index">ftp_delete</a> - Deletes a file on the FTP server</li>
        <li><a href="function.ftp-exec.php" class="index">ftp_exec</a> - Requests execution of a command on the FTP server</li>
        <li><a href="function.ftp-fget.php" class="index">ftp_fget</a> - Downloads a file from the FTP server and saves to an open file</li>
        <li><a href="function.ftp-fput.php" class="index">ftp_fput</a> - Uploads from an open file to the FTP server</li>
        <li><a href="function.ftp-get.php" class="index">ftp_get</a> - Downloads a file from the FTP server</li>
        <li><a href="function.ftp-get-option.php" class="index">ftp_get_option</a> - Retrieves various runtime behaviours of the current FTP connection</li>
        <li><a href="function.ftp-login.php" class="index">ftp_login</a> - Logs in to an FTP connection</li>
        <li><a href="function.ftp-mdtm.php" class="index">ftp_mdtm</a> - Returns the last modified time of the given file</li>
        <li><a href="function.ftp-mkdir.php" class="index">ftp_mkdir</a> - Creates a directory</li>
        <li><a href="function.ftp-mlsd.php" class="index">ftp_mlsd</a> - Returns a list of files in the given directory</li>
        <li><a href="function.ftp-nb-continue.php" class="index">ftp_nb_continue</a> - Continues retrieving/sending a file (non-blocking)</li>
        <li><a href="function.ftp-nb-fget.php" class="index">ftp_nb_fget</a> - Retrieves a file from the FTP server and writes it to an open file (non-blocking)</li>
        <li><a href="function.ftp-nb-fput.php" class="index">ftp_nb_fput</a> - Stores a file from an open file to the FTP server (non-blocking)</li>
        <li><a href="function.ftp-nb-get.php" class="index">ftp_nb_get</a> - Retrieves a file from the FTP server and writes it to a local file (non-blocking)</li>
        <li><a href="function.ftp-nb-put.php" class="index">ftp_nb_put</a> - Stores a file on the FTP server (non-blocking)</li>
        <li><a href="function.ftp-nlist.php" class="index">ftp_nlist</a> - Returns a list of files in the given directory</li>
        <li><a href="function.ftp-pasv.php" class="index">ftp_pasv</a> - Turns passive mode on or off</li>
        <li><a href="function.ftp-put.php" class="index">ftp_put</a> - Uploads a file to the FTP server</li>
        <li><a href="function.ftp-pwd.php" class="index">ftp_pwd</a> - Returns the current directory name</li>
        <li><a href="function.ftp-quit.php" class="index">ftp_quit</a> - Alias of ftp_close</li>
        <li><a href="function.ftp-raw.php" class="index">ftp_raw</a> - Sends an arbitrary command to an FTP server</li>
        <li><a href="function.ftp-rawlist.php" class="index">ftp_rawlist</a> - Returns a detailed list of files in the given directory</li>
        <li><a href="function.ftp-rename.php" class="index">ftp_rename</a> - Renames a file or a directory on the FTP server</li>
        <li><a href="function.ftp-rmdir.php" class="index">ftp_rmdir</a> - Removes a directory</li>
        <li><a href="function.ftp-set-option.php" class="index">ftp_set_option</a> - Set miscellaneous runtime FTP options</li>
        <li><a href="function.ftp-site.php" class="index">ftp_site</a> - Sends a SITE command to the server</li>
        <li><a href="function.ftp-size.php" class="index">ftp_size</a> - Returns the size of the given file</li>
        <li><a href="function.ftp-ssl-connect.php" class="index">ftp_ssl_connect</a> - Opens a Secure SSL-FTP connection</li>
        <li><a href="function.ftp-systype.php" class="index">ftp_systype</a> - Returns the system type identifier of the remote FTP server</li>
        <li><a href="function.ftruncate.php" class="index">ftruncate</a> - Truncates a file to a given length</li>
        <li><a href="function.function-exists.php" class="index">function_exists</a> - Return true if the given function has been defined</li>
        <li><a href="function.func-get-arg.php" class="index">func_get_arg</a> - Return an item from the argument list</li>
        <li><a href="function.func-get-args.php" class="index">func_get_args</a> - Returns an array comprising a function's argument list</li>
        <li><a href="function.func-num-args.php" class="index">func_num_args</a> - Returns the number of arguments passed to the function</li>
        <li><a href="function.fwrite.php" class="index">fwrite</a> - Binary-safe file write</li>
        </ul></li>
        <li class='gen-index index-for-g'>g<ul id='refentry-index-for-g'>
        <li><a href="function.gc-collect-cycles.php" class="index">gc_collect_cycles</a> - Forces collection of any existing garbage cycles</li>
        <li><a href="function.gc-disable.php" class="index">gc_disable</a> - Deactivates the circular reference collector</li>
        <li><a href="function.gc-enable.php" class="index">gc_enable</a> - Activates the circular reference collector</li>
        <li><a href="function.gc-enabled.php" class="index">gc_enabled</a> - Returns status of the circular reference collector</li>
        <li><a href="function.gc-mem-caches.php" class="index">gc_mem_caches</a> - Reclaims memory used by the Zend Engine memory manager</li>
        <li><a href="function.gc-status.php" class="index">gc_status</a> - Gets information about the garbage collector</li>
        <li><a href="function.gd-info.php" class="index">gd_info</a> - Retrieve information about the currently installed GD library</li>
        <li><a href="gearmanclient.addoptions.php" class="index">GearmanClient::addOptions</a> - Add client options</li>
        <li><a href="gearmanclient.addserver.php" class="index">GearmanClient::addServer</a> - Add a job server to the client</li>
        <li><a href="gearmanclient.addservers.php" class="index">GearmanClient::addServers</a> - Add a list of job servers to the client</li>
        <li><a href="gearmanclient.addtask.php" class="index">GearmanClient::addTask</a> - Add a task to be run in parallel</li>
        <li><a href="gearmanclient.addtaskbackground.php" class="index">GearmanClient::addTaskBackground</a> - Add a background task to be run in parallel</li>
        <li><a href="gearmanclient.addtaskhigh.php" class="index">GearmanClient::addTaskHigh</a> - Add a high priority task to run in parallel</li>
        <li><a href="gearmanclient.addtaskhighbackground.php" class="index">GearmanClient::addTaskHighBackground</a> - Add a high priority background task to be run in parallel</li>
        <li><a href="gearmanclient.addtasklow.php" class="index">GearmanClient::addTaskLow</a> - Add a low priority task to run in parallel</li>
        <li><a href="gearmanclient.addtasklowbackground.php" class="index">GearmanClient::addTaskLowBackground</a> - Add a low priority background task to be run in parallel</li>
        <li><a href="gearmanclient.addtaskstatus.php" class="index">GearmanClient::addTaskStatus</a> - Add a task to get status</li>
        <li><a href="gearmanclient.clearcallbacks.php" class="index">GearmanClient::clearCallbacks</a> - Clear all task callback functions</li>
        <li><a href="gearmanclient.clone.php" class="index">GearmanClient::clone</a> - Create a copy of a GearmanClient object</li>
        <li><a href="gearmanclient.context.php" class="index">GearmanClient::context</a> - Get the application context</li>
        <li><a href="gearmanclient.data.php" class="index">GearmanClient::data</a> - Get the application data (deprecated)</li>
        <li><a href="gearmanclient.do.php" class="index">GearmanClient::do</a> - Run a single task and return a result [deprecated]</li>
        <li><a href="gearmanclient.dobackground.php" class="index">GearmanClient::doBackground</a> - Run a task in the background</li>
        <li><a href="gearmanclient.dohigh.php" class="index">GearmanClient::doHigh</a> - Run a single high priority task</li>
        <li><a href="gearmanclient.dohighbackground.php" class="index">GearmanClient::doHighBackground</a> - Run a high priority task in the background</li>
        <li><a href="gearmanclient.dojobhandle.php" class="index">GearmanClient::doJobHandle</a> - Get the job handle for the running task</li>
        <li><a href="gearmanclient.dolow.php" class="index">GearmanClient::doLow</a> - Run a single low priority task</li>
        <li><a href="gearmanclient.dolowbackground.php" class="index">GearmanClient::doLowBackground</a> - Run a low priority task in the background</li>
        <li><a href="gearmanclient.donormal.php" class="index">GearmanClient::doNormal</a> - Run a single task and return a result</li>
        <li><a href="gearmanclient.dostatus.php" class="index">GearmanClient::doStatus</a> - Get the status for the running task</li>
        <li><a href="gearmanclient.echo.php" class="index">GearmanClient::echo</a> - Send data to all job servers to see if they echo it back [deprecated]</li>
        <li><a href="gearmanclient.error.php" class="index">GearmanClient::error</a> - Returns an error string for the last error encountered</li>
        <li><a href="gearmanclient.geterrno.php" class="index">GearmanClient::getErrno</a> - Get an errno value</li>
        <li><a href="gearmanclient.jobstatus.php" class="index">GearmanClient::jobStatus</a> - Get the status of a background job</li>
        <li><a href="gearmanclient.ping.php" class="index">GearmanClient::ping</a> - Send data to all job servers to see if they echo it back</li>
        <li><a href="gearmanclient.removeoptions.php" class="index">GearmanClient::removeOptions</a> - Remove client options</li>
        <li><a href="gearmanclient.returncode.php" class="index">GearmanClient::returnCode</a> - Get the last Gearman return code</li>
        <li><a href="gearmanclient.runtasks.php" class="index">GearmanClient::runTasks</a> - Run a list of tasks in parallel</li>
        <li><a href="gearmanclient.setclientcallback.php" class="index">GearmanClient::setClientCallback</a> - Callback function when there is a data packet for a task (deprecated)</li>
        <li><a href="gearmanclient.setcompletecallback.php" class="index">GearmanClient::setCompleteCallback</a> - Set a function to be called on task completion</li>
        <li><a href="gearmanclient.setcontext.php" class="index">GearmanClient::setContext</a> - Set application context</li>
        <li><a href="gearmanclient.setcreatedcallback.php" class="index">GearmanClient::setCreatedCallback</a> - Set a callback for when a task is queued</li>
        <li><a href="gearmanclient.setdata.php" class="index">GearmanClient::setData</a> - Set application data (deprecated)</li>
        <li><a href="gearmanclient.setdatacallback.php" class="index">GearmanClient::setDataCallback</a> - Callback function when there is a data packet for a task</li>
        <li><a href="gearmanclient.setexceptioncallback.php" class="index">GearmanClient::setExceptionCallback</a> - Set a callback for worker exceptions</li>
        <li><a href="gearmanclient.setfailcallback.php" class="index">GearmanClient::setFailCallback</a> - Set callback for job failure</li>
        <li><a href="gearmanclient.setoptions.php" class="index">GearmanClient::setOptions</a> - Set client options</li>
        <li><a href="gearmanclient.setstatuscallback.php" class="index">GearmanClient::setStatusCallback</a> - Set a callback for collecting task status</li>
        <li><a href="gearmanclient.settimeout.php" class="index">GearmanClient::setTimeout</a> - Set socket I/O activity timeout</li>
        <li><a href="gearmanclient.setwarningcallback.php" class="index">GearmanClient::setWarningCallback</a> - Set a callback for worker warnings</li>
        <li><a href="gearmanclient.setworkloadcallback.php" class="index">GearmanClient::setWorkloadCallback</a> - Set a callback for accepting incremental data updates</li>
        <li><a href="gearmanclient.timeout.php" class="index">GearmanClient::timeout</a> - Get current socket I/O activity timeout value</li>
        <li><a href="gearmanclient.wait.php" class="index">GearmanClient::wait</a> - Wait for I/O activity on all connections in a client</li>
        <li><a href="gearmanclient.construct.php" class="index">GearmanClient::__construct</a> - Create a GearmanClient instance</li>
        <li><a href="gearmanjob.complete.php" class="index">GearmanJob::complete</a> - Send the result and complete status (deprecated)</li>
        <li><a href="gearmanjob.data.php" class="index">GearmanJob::data</a> - Send data for a running job (deprecated)</li>
        <li><a href="gearmanjob.exception.php" class="index">GearmanJob::exception</a> - Send exception for running job (deprecated)</li>
        <li><a href="gearmanjob.fail.php" class="index">GearmanJob::fail</a> - Send fail status (deprecated)</li>
        <li><a href="gearmanjob.functionname.php" class="index">GearmanJob::functionName</a> - Get function name</li>
        <li><a href="gearmanjob.handle.php" class="index">GearmanJob::handle</a> - Get the job handle</li>
        <li><a href="gearmanjob.returncode.php" class="index">GearmanJob::returnCode</a> - Get last return code</li>
        <li><a href="gearmanjob.sendcomplete.php" class="index">GearmanJob::sendComplete</a> - Send the result and complete status</li>
        <li><a href="gearmanjob.senddata.php" class="index">GearmanJob::sendData</a> - Send data for a running job</li>
        <li><a href="gearmanjob.sendexception.php" class="index">GearmanJob::sendException</a> - Send exception for running job (exception)</li>
        <li><a href="gearmanjob.sendfail.php" class="index">GearmanJob::sendFail</a> - Send fail status</li>
        <li><a href="gearmanjob.sendstatus.php" class="index">GearmanJob::sendStatus</a> - Send status</li>
        <li><a href="gearmanjob.sendwarning.php" class="index">GearmanJob::sendWarning</a> - Send a warning</li>
        <li><a href="gearmanjob.setreturn.php" class="index">GearmanJob::setReturn</a> - Set a return value</li>
        <li><a href="gearmanjob.status.php" class="index">GearmanJob::status</a> - Send status (deprecated)</li>
        <li><a href="gearmanjob.unique.php" class="index">GearmanJob::unique</a> - Get the unique identifier</li>
        <li><a href="gearmanjob.warning.php" class="index">GearmanJob::warning</a> - Send a warning (deprecated)</li>
        <li><a href="gearmanjob.workload.php" class="index">GearmanJob::workload</a> - Get workload</li>
        <li><a href="gearmanjob.workloadsize.php" class="index">GearmanJob::workloadSize</a> - Get size of work load</li>
        <li><a href="gearmanjob.construct.php" class="index">GearmanJob::__construct</a> - Create a GearmanJob instance</li>
        <li><a href="gearmantask.create.php" class="index">GearmanTask::create</a> - Create a task (deprecated)</li>
        <li><a href="gearmantask.data.php" class="index">GearmanTask::data</a> - Get data returned for a task</li>
        <li><a href="gearmantask.datasize.php" class="index">GearmanTask::dataSize</a> - Get the size of returned data</li>
        <li><a href="gearmantask.function.php" class="index">GearmanTask::function</a> - Get associated function name (deprecated)</li>
        <li><a href="gearmantask.functionname.php" class="index">GearmanTask::functionName</a> - Get associated function name</li>
        <li><a href="gearmantask.isknown.php" class="index">GearmanTask::isKnown</a> - Determine if task is known</li>
        <li><a href="gearmantask.isrunning.php" class="index">GearmanTask::isRunning</a> - Test whether the task is currently running</li>
        <li><a href="gearmantask.jobhandle.php" class="index">GearmanTask::jobHandle</a> - Get the job handle</li>
        <li><a href="gearmantask.recvdata.php" class="index">GearmanTask::recvData</a> - Read work or result data into a buffer for a task</li>
        <li><a href="gearmantask.returncode.php" class="index">GearmanTask::returnCode</a> - Get the last return code</li>
        <li><a href="gearmantask.senddata.php" class="index">GearmanTask::sendData</a> - Send data for a task (deprecated)</li>
        <li><a href="gearmantask.sendworkload.php" class="index">GearmanTask::sendWorkload</a> - Send data for a task</li>
        <li><a href="gearmantask.taskdenominator.php" class="index">GearmanTask::taskDenominator</a> - Get completion percentage denominator</li>
        <li><a href="gearmantask.tasknumerator.php" class="index">GearmanTask::taskNumerator</a> - Get completion percentage numerator</li>
        <li><a href="gearmantask.unique.php" class="index">GearmanTask::unique</a> - Get the unique identifier for a task</li>
        <li><a href="gearmantask.uuid.php" class="index">GearmanTask::uuid</a> - Get the unique identifier for a task (deprecated)</li>
        <li><a href="gearmantask.construct.php" class="index">GearmanTask::__construct</a> - Create a GearmanTask instance</li>
        <li><a href="gearmanworker.addfunction.php" class="index">GearmanWorker::addFunction</a> - Register and add callback function</li>
        <li><a href="gearmanworker.addoptions.php" class="index">GearmanWorker::addOptions</a> - Add worker options</li>
        <li><a href="gearmanworker.addserver.php" class="index">GearmanWorker::addServer</a> - Add a job server</li>
        <li><a href="gearmanworker.addservers.php" class="index">GearmanWorker::addServers</a> - Add job servers</li>
        <li><a href="gearmanworker.clone.php" class="index">GearmanWorker::clone</a> - Create a copy of the worker</li>
        <li><a href="gearmanworker.echo.php" class="index">GearmanWorker::echo</a> - Test job server response</li>
        <li><a href="gearmanworker.error.php" class="index">GearmanWorker::error</a> - Get the last error encountered</li>
        <li><a href="gearmanworker.geterrno.php" class="index">GearmanWorker::getErrno</a> - Get errno</li>
        <li><a href="gearmanworker.options.php" class="index">GearmanWorker::options</a> - Get worker options</li>
        <li><a href="gearmanworker.register.php" class="index">GearmanWorker::register</a> - Register a function with the job server</li>
        <li><a href="gearmanworker.removeoptions.php" class="index">GearmanWorker::removeOptions</a> - Remove worker options</li>
        <li><a href="gearmanworker.returncode.php" class="index">GearmanWorker::returnCode</a> - Get last Gearman return code</li>
        <li><a href="gearmanworker.setid.php" class="index">GearmanWorker::setId</a> - Give the worker an identifier so it can be tracked when asking gearmand for the list of available workers</li>
        <li><a href="gearmanworker.setoptions.php" class="index">GearmanWorker::setOptions</a> - Set worker options</li>
        <li><a href="gearmanworker.settimeout.php" class="index">GearmanWorker::setTimeout</a> - Set socket I/O activity timeout</li>
        <li><a href="gearmanworker.timeout.php" class="index">GearmanWorker::timeout</a> - Get socket I/O activity timeout</li>
        <li><a href="gearmanworker.unregister.php" class="index">GearmanWorker::unregister</a> - Unregister a function name with the job servers</li>
        <li><a href="gearmanworker.unregisterall.php" class="index">GearmanWorker::unregisterAll</a> - Unregister all function names with the job servers</li>
        <li><a href="gearmanworker.wait.php" class="index">GearmanWorker::wait</a> - Wait for activity from one of the job servers</li>
        <li><a href="gearmanworker.work.php" class="index">GearmanWorker::work</a> - Wait for and perform jobs</li>
        <li><a href="gearmanworker.construct.php" class="index">GearmanWorker::__construct</a> - Create a GearmanWorker instance</li>
        <li><a href="gender-gender.connect.php" class="index">Gender\Gender::connect</a> - Connect to an external name dictionary</li>
        <li><a href="gender-gender.country.php" class="index">Gender\Gender::country</a> - Get textual country representation</li>
        <li><a href="gender-gender.get.php" class="index">Gender\Gender::get</a> - Get gender of a name</li>
        <li><a href="gender-gender.isnick.php" class="index">Gender\Gender::isNick</a> - Check if the name0 is an alias of the name1</li>
        <li><a href="gender-gender.similarnames.php" class="index">Gender\Gender::similarNames</a> - Get similar names</li>
        <li><a href="gender-gender.construct.php" class="index">Gender\Gender::__construct</a> - Construct the Gender object</li>
        <li><a href="generator.current.php" class="index">Generator::current</a> - Get the yielded value</li>
        <li><a href="generator.getreturn.php" class="index">Generator::getReturn</a> - Get the return value of a generator</li>
        <li><a href="generator.key.php" class="index">Generator::key</a> - Get the yielded key</li>
        <li><a href="generator.next.php" class="index">Generator::next</a> - Resume execution of the generator</li>
        <li><a href="generator.rewind.php" class="index">Generator::rewind</a> - Rewind the iterator</li>
        <li><a href="generator.send.php" class="index">Generator::send</a> - Send a value to the generator</li>
        <li><a href="generator.throw.php" class="index">Generator::throw</a> - Throw an exception into the generator</li>
        <li><a href="generator.valid.php" class="index">Generator::valid</a> - Check if the iterator has been closed</li>
        <li><a href="generator.wakeup.php" class="index">Generator::__wakeup</a> - Serialize callback</li>
        <li><a href="function.geoip-asnum-by-name.php" class="index">geoip_asnum_by_name</a> - Get the Autonomous System Numbers (ASN)</li>
        <li><a href="function.geoip-continent-code-by-name.php" class="index">geoip_continent_code_by_name</a> - Get the two letter continent code</li>
        <li><a href="function.geoip-country-code3-by-name.php" class="index">geoip_country_code3_by_name</a> - Get the three letter country code</li>
        <li><a href="function.geoip-country-code-by-name.php" class="index">geoip_country_code_by_name</a> - Get the two letter country code</li>
        <li><a href="function.geoip-country-name-by-name.php" class="index">geoip_country_name_by_name</a> - Get the full country name</li>
        <li><a href="function.geoip-database-info.php" class="index">geoip_database_info</a> - Get GeoIP Database information</li>
        <li><a href="function.geoip-db-avail.php" class="index">geoip_db_avail</a> - Determine if GeoIP Database is available</li>
        <li><a href="function.geoip-db-filename.php" class="index">geoip_db_filename</a> - Returns the filename of the corresponding GeoIP Database</li>
        <li><a href="function.geoip-db-get-all-info.php" class="index">geoip_db_get_all_info</a> - Returns detailed information about all GeoIP database types</li>
        <li><a href="function.geoip-domain-by-name.php" class="index">geoip_domain_by_name</a> - Get the second level domain name</li>
        <li><a href="function.geoip-id-by-name.php" class="index">geoip_id_by_name</a> - Get the Internet connection type</li>
        <li><a href="function.geoip-isp-by-name.php" class="index">geoip_isp_by_name</a> - Get the Internet Service Provider (ISP) name</li>
        <li><a href="function.geoip-netspeedcell-by-name.php" class="index">geoip_netspeedcell_by_name</a> - Get the Internet connection speed</li>
        <li><a href="function.geoip-org-by-name.php" class="index">geoip_org_by_name</a> - Get the organization name</li>
        <li><a href="function.geoip-record-by-name.php" class="index">geoip_record_by_name</a> - Returns the detailed City information found in the GeoIP Database</li>
        <li><a href="function.geoip-region-by-name.php" class="index">geoip_region_by_name</a> - Get the country code and region</li>
        <li><a href="function.geoip-region-name-by-code.php" class="index">geoip_region_name_by_code</a> - Returns the region name for some country and region code combo</li>
        <li><a href="function.geoip-setup-custom-directory.php" class="index">geoip_setup_custom_directory</a> - Set a custom directory for the GeoIP database</li>
        <li><a href="function.geoip-time-zone-by-country-and-region.php" class="index">geoip_time_zone_by_country_and_region</a> - Returns the time zone for some country and region code combo</li>
        <li><a href="function.getallheaders.php" class="index">getallheaders</a> - Fetch all HTTP request headers</li>
        <li><a href="function.getcwd.php" class="index">getcwd</a> - Gets the current working directory</li>
        <li><a href="function.getdate.php" class="index">getdate</a> - Get date/time information</li>
        <li><a href="function.getenv.php" class="index">getenv</a> - Gets the value of a single or all environment variables</li>
        <li><a href="function.gethostbyaddr.php" class="index">gethostbyaddr</a> - Get the Internet host name corresponding to a given IP address</li>
        <li><a href="function.gethostbyname.php" class="index">gethostbyname</a> - Get the IPv4 address corresponding to a given Internet host name</li>
        <li><a href="function.gethostbynamel.php" class="index">gethostbynamel</a> - Get a list of IPv4 addresses corresponding to a given Internet host
           name</li>
        <li><a href="function.gethostname.php" class="index">gethostname</a> - Gets the host name</li>
        <li><a href="function.getimagesize.php" class="index">getimagesize</a> - Get the size of an image</li>
        <li><a href="function.getimagesizefromstring.php" class="index">getimagesizefromstring</a> - Get the size of an image from a string</li>
        <li><a href="function.getlastmod.php" class="index">getlastmod</a> - Gets time of last page modification</li>
        <li><a href="function.getmxrr.php" class="index">getmxrr</a> - Get MX records corresponding to a given Internet host name</li>
        <li><a href="function.getmygid.php" class="index">getmygid</a> - Get PHP script owner's GID</li>
        <li><a href="function.getmyinode.php" class="index">getmyinode</a> - Gets the inode of the current script</li>
        <li><a href="function.getmypid.php" class="index">getmypid</a> - Gets PHP's process ID</li>
        <li><a href="function.getmyuid.php" class="index">getmyuid</a> - Gets PHP script owner's UID</li>
        <li><a href="function.getopt.php" class="index">getopt</a> - Gets options from the command line argument list</li>
        <li><a href="function.getprotobyname.php" class="index">getprotobyname</a> - Get protocol number associated with protocol name</li>
        <li><a href="function.getprotobynumber.php" class="index">getprotobynumber</a> - Get protocol name associated with protocol number</li>
        <li><a href="function.getrandmax.php" class="index">getrandmax</a> - Show largest possible random value</li>
        <li><a href="function.getrusage.php" class="index">getrusage</a> - Gets the current resource usages</li>
        <li><a href="function.getservbyname.php" class="index">getservbyname</a> - Get port number associated with an Internet service and protocol</li>
        <li><a href="function.getservbyport.php" class="index">getservbyport</a> - Get Internet service which corresponds to port and protocol</li>
        <li><a href="function.mysql-xdevapi-getsession.php" class="index">getSession</a> - Connect to a MySQL server</li>
        <li><a href="function.gettext.php" class="index">gettext</a> - Lookup a message in the current domain</li>
        <li><a href="function.gettimeofday.php" class="index">gettimeofday</a> - Get current time</li>
        <li><a href="function.gettype.php" class="index">gettype</a> - Get the type of a variable</li>
        <li><a href="function.get-browser.php" class="index">get_browser</a> - Tells what the user's browser is capable of</li>
        <li><a href="function.get-called-class.php" class="index">get_called_class</a> - The &quot;Late Static Binding&quot; class name</li>
        <li><a href="function.get-cfg-var.php" class="index">get_cfg_var</a> - Gets the value of a PHP configuration option</li>
        <li><a href="function.get-class.php" class="index">get_class</a> - Returns the name of the class of an object</li>
        <li><a href="function.get-class-methods.php" class="index">get_class_methods</a> - Gets the class methods' names</li>
        <li><a href="function.get-class-vars.php" class="index">get_class_vars</a> - Get the default properties of the class</li>
        <li><a href="function.get-current-user.php" class="index">get_current_user</a> - Gets the name of the owner of the current PHP script</li>
        <li><a href="function.get-debug-type.php" class="index">get_debug_type</a> - Gets the type name of a variable in a way that is suitable for debugging</li>
        <li><a href="function.get-declared-classes.php" class="index">get_declared_classes</a> - Returns an array with the name of the defined classes</li>
        <li><a href="function.get-declared-interfaces.php" class="index">get_declared_interfaces</a> - Returns an array of all declared interfaces</li>
        <li><a href="function.get-declared-traits.php" class="index">get_declared_traits</a> - Returns an array of all declared traits</li>
        <li><a href="function.get-defined-constants.php" class="index">get_defined_constants</a> - Returns an associative array with the names of all the constants and their values</li>
        <li><a href="function.get-defined-functions.php" class="index">get_defined_functions</a> - Returns an array of all defined functions</li>
        <li><a href="function.get-defined-vars.php" class="index">get_defined_vars</a> - Returns an array of all defined variables</li>
        <li><a href="function.get-extension-funcs.php" class="index">get_extension_funcs</a> - Returns an array with the names of the functions of a module</li>
        <li><a href="function.get-headers.php" class="index">get_headers</a> - Fetches all the headers sent by the server in response to an HTTP request</li>
        <li><a href="function.get-html-translation-table.php" class="index">get_html_translation_table</a> - Returns the translation table used by htmlspecialchars and htmlentities</li>
        <li><a href="function.get-included-files.php" class="index">get_included_files</a> - Returns an array with the names of included or required files</li>
        <li><a href="function.get-include-path.php" class="index">get_include_path</a> - Gets the current include_path configuration option</li>
        <li><a href="function.get-loaded-extensions.php" class="index">get_loaded_extensions</a> - Returns an array with the names of all modules compiled and loaded</li>
        <li><a href="function.get-magic-quotes-gpc.php" class="index">get_magic_quotes_gpc</a> - Gets the current configuration setting of magic_quotes_gpc</li>
        <li><a href="function.get-magic-quotes-runtime.php" class="index">get_magic_quotes_runtime</a> - Gets the current active configuration setting of magic_quotes_runtime</li>
        <li><a href="function.get-mangled-object-vars.php" class="index">get_mangled_object_vars</a> - Returns an array of mangled object properties</li>
        <li><a href="function.get-meta-tags.php" class="index">get_meta_tags</a> - Extracts all meta tag content attributes from a file and returns an array</li>
        <li><a href="function.get-object-vars.php" class="index">get_object_vars</a> - Gets the properties of the given object</li>
        <li><a href="function.get-parent-class.php" class="index">get_parent_class</a> - Retrieves the parent class name for object or class</li>
        <li><a href="function.get-required-files.php" class="index">get_required_files</a> - Alias of get_included_files</li>
        <li><a href="function.get-resources.php" class="index">get_resources</a> - Returns active resources</li>
        <li><a href="function.get-resource-id.php" class="index">get_resource_id</a> - Returns an integer identifier for the given resource</li>
        <li><a href="function.get-resource-type.php" class="index">get_resource_type</a> - Returns the resource type</li>
        <li><a href="function.glob.php" class="index">glob</a> - Find pathnames matching a pattern</li>
        <li><a href="globiterator.count.php" class="index">GlobIterator::count</a> - Get the number of directories and files</li>
        <li><a href="globiterator.construct.php" class="index">GlobIterator::__construct</a> - Construct a directory using glob</li>
        <li><a href="gmagick.addimage.php" class="index">Gmagick::addimage</a> - Adds new image to Gmagick object image list</li>
        <li><a href="gmagick.addnoiseimage.php" class="index">Gmagick::addnoiseimage</a> - Adds random noise to the image</li>
        <li><a href="gmagick.annotateimage.php" class="index">Gmagick::annotateimage</a> - Annotates an image with text</li>
        <li><a href="gmagick.blurimage.php" class="index">Gmagick::blurimage</a> - Adds blur filter to image</li>
        <li><a href="gmagick.borderimage.php" class="index">Gmagick::borderimage</a> - Surrounds the image with a border</li>
        <li><a href="gmagick.charcoalimage.php" class="index">Gmagick::charcoalimage</a> - Simulates a charcoal drawing</li>
        <li><a href="gmagick.chopimage.php" class="index">Gmagick::chopimage</a> - Removes a region of an image and trims</li>
        <li><a href="gmagick.clear.php" class="index">Gmagick::clear</a> - Clears all resources associated to Gmagick object</li>
        <li><a href="gmagick.commentimage.php" class="index">Gmagick::commentimage</a> - Adds a comment to your image</li>
        <li><a href="gmagick.compositeimage.php" class="index">Gmagick::compositeimage</a> - Composite one image onto another</li>
        <li><a href="gmagick.cropimage.php" class="index">Gmagick::cropimage</a> - Extracts a region of the image</li>
        <li><a href="gmagick.cropthumbnailimage.php" class="index">Gmagick::cropthumbnailimage</a> - Creates a crop thumbnail</li>
        <li><a href="gmagick.current.php" class="index">Gmagick::current</a> - The current purpose</li>
        <li><a href="gmagick.cyclecolormapimage.php" class="index">Gmagick::cyclecolormapimage</a> - Displaces an image's colormap</li>
        <li><a href="gmagick.deconstructimages.php" class="index">Gmagick::deconstructimages</a> - Returns certain pixel differences between images</li>
        <li><a href="gmagick.despeckleimage.php" class="index">Gmagick::despeckleimage</a> - The despeckleimage purpose</li>
        <li><a href="gmagick.destroy.php" class="index">Gmagick::destroy</a> - The destroy purpose</li>
        <li><a href="gmagick.drawimage.php" class="index">Gmagick::drawimage</a> - Renders the GmagickDraw object on the current image</li>
        <li><a href="gmagick.edgeimage.php" class="index">Gmagick::edgeimage</a> - Enhance edges within the image</li>
        <li><a href="gmagick.embossimage.php" class="index">Gmagick::embossimage</a> - Returns a grayscale image with a three-dimensional effect</li>
        <li><a href="gmagick.enhanceimage.php" class="index">Gmagick::enhanceimage</a> - Improves the quality of a noisy image</li>
        <li><a href="gmagick.equalizeimage.php" class="index">Gmagick::equalizeimage</a> - Equalizes the image histogram</li>
        <li><a href="gmagick.flipimage.php" class="index">Gmagick::flipimage</a> - Creates a vertical mirror image</li>
        <li><a href="gmagick.flopimage.php" class="index">Gmagick::flopimage</a> - Creates a horizontal mirror image</li>
        <li><a href="gmagick.frameimage.php" class="index">Gmagick::frameimage</a> - Adds a simulated three-dimensional border</li>
        <li><a href="gmagick.gammaimage.php" class="index">Gmagick::gammaimage</a> - Gamma-corrects an image</li>
        <li><a href="gmagick.getcopyright.php" class="index">Gmagick::getcopyright</a> - Returns the GraphicsMagick API copyright as a string</li>
        <li><a href="gmagick.getfilename.php" class="index">Gmagick::getfilename</a> - The filename associated with an image sequence</li>
        <li><a href="gmagick.getimagebackgroundcolor.php" class="index">Gmagick::getimagebackgroundcolor</a> - Returns the image background color</li>
        <li><a href="gmagick.getimageblueprimary.php" class="index">Gmagick::getimageblueprimary</a> - Returns the chromaticy blue primary point</li>
        <li><a href="gmagick.getimagebordercolor.php" class="index">Gmagick::getimagebordercolor</a> - Returns the image border color</li>
        <li><a href="gmagick.getimagechanneldepth.php" class="index">Gmagick::getimagechanneldepth</a> - Gets the depth for a particular image channel</li>
        <li><a href="gmagick.getimagecolors.php" class="index">Gmagick::getimagecolors</a> - Returns the color of the specified colormap index</li>
        <li><a href="gmagick.getimagecolorspace.php" class="index">Gmagick::getimagecolorspace</a> - Gets the image colorspace</li>
        <li><a href="gmagick.getimagecompose.php" class="index">Gmagick::getimagecompose</a> - Returns the composite operator associated with the image</li>
        <li><a href="gmagick.getimagedelay.php" class="index">Gmagick::getimagedelay</a> - Gets the image delay</li>
        <li><a href="gmagick.getimagedepth.php" class="index">Gmagick::getimagedepth</a> - Gets the depth of the image</li>
        <li><a href="gmagick.getimagedispose.php" class="index">Gmagick::getimagedispose</a> - Gets the image disposal method</li>
        <li><a href="gmagick.getimageextrema.php" class="index">Gmagick::getimageextrema</a> - Gets the extrema for the image</li>
        <li><a href="gmagick.getimagefilename.php" class="index">Gmagick::getimagefilename</a> - Returns the filename of a particular image in a sequence</li>
        <li><a href="gmagick.getimageformat.php" class="index">Gmagick::getimageformat</a> - Returns the format of a particular image in a sequence</li>
        <li><a href="gmagick.getimagegamma.php" class="index">Gmagick::getimagegamma</a> - Gets the image gamma</li>
        <li><a href="gmagick.getimagegreenprimary.php" class="index">Gmagick::getimagegreenprimary</a> - Returns the chromaticy green primary point</li>
        <li><a href="gmagick.getimageheight.php" class="index">Gmagick::getimageheight</a> - Returns the image height</li>
        <li><a href="gmagick.getimagehistogram.php" class="index">Gmagick::getimagehistogram</a> - Gets the image histogram</li>
        <li><a href="gmagick.getimageindex.php" class="index">Gmagick::getimageindex</a> - Gets the index of the current active image</li>
        <li><a href="gmagick.getimageinterlacescheme.php" class="index">Gmagick::getimageinterlacescheme</a> - Gets the image interlace scheme</li>
        <li><a href="gmagick.getimageiterations.php" class="index">Gmagick::getimageiterations</a> - Gets the image iterations</li>
        <li><a href="gmagick.getimagematte.php" class="index">Gmagick::getimagematte</a> - Check if the image has a matte channel</li>
        <li><a href="gmagick.getimagemattecolor.php" class="index">Gmagick::getimagemattecolor</a> - Returns the image matte color</li>
        <li><a href="gmagick.getimageprofile.php" class="index">Gmagick::getimageprofile</a> - Returns the named image profile</li>
        <li><a href="gmagick.getimageredprimary.php" class="index">Gmagick::getimageredprimary</a> - Returns the chromaticity red primary point</li>
        <li><a href="gmagick.getimagerenderingintent.php" class="index">Gmagick::getimagerenderingintent</a> - Gets the image rendering intent</li>
        <li><a href="gmagick.getimageresolution.php" class="index">Gmagick::getimageresolution</a> - Gets the image X and Y resolution</li>
        <li><a href="gmagick.getimagescene.php" class="index">Gmagick::getimagescene</a> - Gets the image scene</li>
        <li><a href="gmagick.getimagesignature.php" class="index">Gmagick::getimagesignature</a> - Generates an SHA-256 message digest</li>
        <li><a href="gmagick.getimagetype.php" class="index">Gmagick::getimagetype</a> - Gets the potential image type</li>
        <li><a href="gmagick.getimageunits.php" class="index">Gmagick::getimageunits</a> - Gets the image units of resolution</li>
        <li><a href="gmagick.getimagewhitepoint.php" class="index">Gmagick::getimagewhitepoint</a> - Returns the chromaticity white point</li>
        <li><a href="gmagick.getimagewidth.php" class="index">Gmagick::getimagewidth</a> - Returns the width of the image</li>
        <li><a href="gmagick.getpackagename.php" class="index">Gmagick::getpackagename</a> - Returns the GraphicsMagick package name</li>
        <li><a href="gmagick.getquantumdepth.php" class="index">Gmagick::getquantumdepth</a> - Returns the Gmagick quantum depth as a string</li>
        <li><a href="gmagick.getreleasedate.php" class="index">Gmagick::getreleasedate</a> - Returns the GraphicsMagick release date as a string</li>
        <li><a href="gmagick.getsamplingfactors.php" class="index">Gmagick::getsamplingfactors</a> - Gets the horizontal and vertical sampling factor</li>
        <li><a href="gmagick.getsize.php" class="index">Gmagick::getsize</a> - Returns the size associated with the Gmagick object</li>
        <li><a href="gmagick.getversion.php" class="index">Gmagick::getversion</a> - Returns the GraphicsMagick API version</li>
        <li><a href="gmagick.hasnextimage.php" class="index">Gmagick::hasnextimage</a> - Checks if the object has more images</li>
        <li><a href="gmagick.haspreviousimage.php" class="index">Gmagick::haspreviousimage</a> - Checks if the object has a previous image</li>
        <li><a href="gmagick.implodeimage.php" class="index">Gmagick::implodeimage</a> - Creates a new image as a copy</li>
        <li><a href="gmagick.labelimage.php" class="index">Gmagick::labelimage</a> - Adds a label to an image</li>
        <li><a href="gmagick.levelimage.php" class="index">Gmagick::levelimage</a> - Adjusts the levels of an image</li>
        <li><a href="gmagick.magnifyimage.php" class="index">Gmagick::magnifyimage</a> - Scales an image proportionally 2x</li>
        <li><a href="gmagick.mapimage.php" class="index">Gmagick::mapimage</a> - Replaces the colors of an image with the closest color from a reference image</li>
        <li><a href="gmagick.medianfilterimage.php" class="index">Gmagick::medianfilterimage</a> - Applies a digital filter</li>
        <li><a href="gmagick.minifyimage.php" class="index">Gmagick::minifyimage</a> - Scales an image proportionally to half its size</li>
        <li><a href="gmagick.modulateimage.php" class="index">Gmagick::modulateimage</a> - Control the brightness, saturation, and hue</li>
        <li><a href="gmagick.motionblurimage.php" class="index">Gmagick::motionblurimage</a> - Simulates motion blur</li>
        <li><a href="gmagick.newimage.php" class="index">Gmagick::newimage</a> - Creates a new image</li>
        <li><a href="gmagick.nextimage.php" class="index">Gmagick::nextimage</a> - Moves to the next image</li>
        <li><a href="gmagick.normalizeimage.php" class="index">Gmagick::normalizeimage</a> - Enhances the contrast of a color image</li>
        <li><a href="gmagick.oilpaintimage.php" class="index">Gmagick::oilpaintimage</a> - Simulates an oil painting</li>
        <li><a href="gmagick.previousimage.php" class="index">Gmagick::previousimage</a> - Move to the previous image in the object</li>
        <li><a href="gmagick.profileimage.php" class="index">Gmagick::profileimage</a> - Adds or removes a profile from an image</li>
        <li><a href="gmagick.quantizeimage.php" class="index">Gmagick::quantizeimage</a> - Analyzes the colors within a reference image</li>
        <li><a href="gmagick.quantizeimages.php" class="index">Gmagick::quantizeimages</a> - The quantizeimages purpose</li>
        <li><a href="gmagick.queryfontmetrics.php" class="index">Gmagick::queryfontmetrics</a> - Returns an array representing the font metrics</li>
        <li><a href="gmagick.queryfonts.php" class="index">Gmagick::queryfonts</a> - Returns the configured fonts</li>
        <li><a href="gmagick.queryformats.php" class="index">Gmagick::queryformats</a> - Returns formats supported by Gmagick</li>
        <li><a href="gmagick.radialblurimage.php" class="index">Gmagick::radialblurimage</a> - Radial blurs an image</li>
        <li><a href="gmagick.raiseimage.php" class="index">Gmagick::raiseimage</a> - Creates a simulated 3d button-like effect</li>
        <li><a href="gmagick.read.php" class="index">Gmagick::read</a> - Reads image from filename</li>
        <li><a href="gmagick.readimage.php" class="index">Gmagick::readimage</a> - Reads image from filename</li>
        <li><a href="gmagick.readimageblob.php" class="index">Gmagick::readimageblob</a> - Reads image from a binary string</li>
        <li><a href="gmagick.readimagefile.php" class="index">Gmagick::readimagefile</a> - The readimagefile purpose</li>
        <li><a href="gmagick.reducenoiseimage.php" class="index">Gmagick::reducenoiseimage</a> - Smooths the contours of an image</li>
        <li><a href="gmagick.removeimage.php" class="index">Gmagick::removeimage</a> - Removes an image from the image list</li>
        <li><a href="gmagick.removeimageprofile.php" class="index">Gmagick::removeimageprofile</a> - Removes the named image profile and returns it</li>
        <li><a href="gmagick.resampleimage.php" class="index">Gmagick::resampleimage</a> - Resample image to desired resolution</li>
        <li><a href="gmagick.resizeimage.php" class="index">Gmagick::resizeimage</a> - Scales an image</li>
        <li><a href="gmagick.rollimage.php" class="index">Gmagick::rollimage</a> - Offsets an image</li>
        <li><a href="gmagick.rotateimage.php" class="index">Gmagick::rotateimage</a> - Rotates an image</li>
        <li><a href="gmagick.scaleimage.php" class="index">Gmagick::scaleimage</a> - Scales the size of an image</li>
        <li><a href="gmagick.separateimagechannel.php" class="index">Gmagick::separateimagechannel</a> - Separates a channel from the image</li>
        <li><a href="gmagick.setcompressionquality.php" class="index">Gmagick::setCompressionQuality</a> - Sets the object's default compression quality</li>
        <li><a href="gmagick.setfilename.php" class="index">Gmagick::setfilename</a> - Sets the filename before you read or write the image</li>
        <li><a href="gmagick.setimagebackgroundcolor.php" class="index">Gmagick::setimagebackgroundcolor</a> - Sets the image background color</li>
        <li><a href="gmagick.setimageblueprimary.php" class="index">Gmagick::setimageblueprimary</a> - Sets the image chromaticity blue primary point</li>
        <li><a href="gmagick.setimagebordercolor.php" class="index">Gmagick::setimagebordercolor</a> - Sets the image border color</li>
        <li><a href="gmagick.setimagechanneldepth.php" class="index">Gmagick::setimagechanneldepth</a> - Sets the depth of a particular image channel</li>
        <li><a href="gmagick.setimagecolorspace.php" class="index">Gmagick::setimagecolorspace</a> - Sets the image colorspace</li>
        <li><a href="gmagick.setimagecompose.php" class="index">Gmagick::setimagecompose</a> - Sets the image composite operator</li>
        <li><a href="gmagick.setimagedelay.php" class="index">Gmagick::setimagedelay</a> - Sets the image delay</li>
        <li><a href="gmagick.setimagedepth.php" class="index">Gmagick::setimagedepth</a> - Sets the image depth</li>
        <li><a href="gmagick.setimagedispose.php" class="index">Gmagick::setimagedispose</a> - Sets the image disposal method</li>
        <li><a href="gmagick.setimagefilename.php" class="index">Gmagick::setimagefilename</a> - Sets the filename of a particular image in a sequence</li>
        <li><a href="gmagick.setimageformat.php" class="index">Gmagick::setimageformat</a> - Sets the format of a particular image</li>
        <li><a href="gmagick.setimagegamma.php" class="index">Gmagick::setimagegamma</a> - Sets the image gamma</li>
        <li><a href="gmagick.setimagegreenprimary.php" class="index">Gmagick::setimagegreenprimary</a> - Sets the image chromaticity green primary point</li>
        <li><a href="gmagick.setimageindex.php" class="index">Gmagick::setimageindex</a> - Set the iterator to the position in the image list specified with the index parameter</li>
        <li><a href="gmagick.setimageinterlacescheme.php" class="index">Gmagick::setimageinterlacescheme</a> - Sets the interlace scheme of the image</li>
        <li><a href="gmagick.setimageiterations.php" class="index">Gmagick::setimageiterations</a> - Sets the image iterations</li>
        <li><a href="gmagick.setimageprofile.php" class="index">Gmagick::setimageprofile</a> - Adds a named profile to the Gmagick object</li>
        <li><a href="gmagick.setimageredprimary.php" class="index">Gmagick::setimageredprimary</a> - Sets the image chromaticity red primary point</li>
        <li><a href="gmagick.setimagerenderingintent.php" class="index">Gmagick::setimagerenderingintent</a> - Sets the image rendering intent</li>
        <li><a href="gmagick.setimageresolution.php" class="index">Gmagick::setimageresolution</a> - Sets the image resolution</li>
        <li><a href="gmagick.setimagescene.php" class="index">Gmagick::setimagescene</a> - Sets the image scene</li>
        <li><a href="gmagick.setimagetype.php" class="index">Gmagick::setimagetype</a> - Sets the image type</li>
        <li><a href="gmagick.setimageunits.php" class="index">Gmagick::setimageunits</a> - Sets the image units of resolution</li>
        <li><a href="gmagick.setimagewhitepoint.php" class="index">Gmagick::setimagewhitepoint</a> - Sets the image chromaticity white point</li>
        <li><a href="gmagick.setsamplingfactors.php" class="index">Gmagick::setsamplingfactors</a> - Sets the image sampling factors</li>
        <li><a href="gmagick.setsize.php" class="index">Gmagick::setsize</a> - Sets the size of the Gmagick object</li>
        <li><a href="gmagick.shearimage.php" class="index">Gmagick::shearimage</a> - Creating a parallelogram</li>
        <li><a href="gmagick.solarizeimage.php" class="index">Gmagick::solarizeimage</a> - Applies a solarizing effect to the image</li>
        <li><a href="gmagick.spreadimage.php" class="index">Gmagick::spreadimage</a> - Randomly displaces each pixel in a block</li>
        <li><a href="gmagick.stripimage.php" class="index">Gmagick::stripimage</a> - Strips an image of all profiles and comments</li>
        <li><a href="gmagick.swirlimage.php" class="index">Gmagick::swirlimage</a> - Swirls the pixels about the center of the image</li>
        <li><a href="gmagick.thumbnailimage.php" class="index">Gmagick::thumbnailimage</a> - Changes the size of an image</li>
        <li><a href="gmagick.trimimage.php" class="index">Gmagick::trimimage</a> - Remove edges from the image</li>
        <li><a href="gmagick.write.php" class="index">Gmagick::write</a> - Alias of Gmagick::writeimage</li>
        <li><a href="gmagick.writeimage.php" class="index">Gmagick::writeimage</a> - Writes an image to the specified filename</li>
        <li><a href="gmagick.construct.php" class="index">Gmagick::__construct</a> - The Gmagick constructor</li>
        <li><a href="gmagickdraw.annotate.php" class="index">GmagickDraw::annotate</a> - Draws text on the image</li>
        <li><a href="gmagickdraw.arc.php" class="index">GmagickDraw::arc</a> - Draws an arc</li>
        <li><a href="gmagickdraw.bezier.php" class="index">GmagickDraw::bezier</a> - Draws a bezier curve</li>
        <li><a href="gmagickdraw.ellipse.php" class="index">GmagickDraw::ellipse</a> - Draws an ellipse on the image</li>
        <li><a href="gmagickdraw.getfillcolor.php" class="index">GmagickDraw::getfillcolor</a> - Returns the fill color</li>
        <li><a href="gmagickdraw.getfillopacity.php" class="index">GmagickDraw::getfillopacity</a> - Returns the opacity used when drawing</li>
        <li><a href="gmagickdraw.getfont.php" class="index">GmagickDraw::getfont</a> - Returns the font</li>
        <li><a href="gmagickdraw.getfontsize.php" class="index">GmagickDraw::getfontsize</a> - Returns the font pointsize</li>
        <li><a href="gmagickdraw.getfontstyle.php" class="index">GmagickDraw::getfontstyle</a> - Returns the font style</li>
        <li><a href="gmagickdraw.getfontweight.php" class="index">GmagickDraw::getfontweight</a> - Returns the font weight</li>
        <li><a href="gmagickdraw.getstrokecolor.php" class="index">GmagickDraw::getstrokecolor</a> - Returns the color used for stroking object outlines</li>
        <li><a href="gmagickdraw.getstrokeopacity.php" class="index">GmagickDraw::getstrokeopacity</a> - Returns the opacity of stroked object outlines</li>
        <li><a href="gmagickdraw.getstrokewidth.php" class="index">GmagickDraw::getstrokewidth</a> - Returns the width of the stroke used to draw object outlines</li>
        <li><a href="gmagickdraw.gettextdecoration.php" class="index">GmagickDraw::gettextdecoration</a> - Returns the text decoration</li>
        <li><a href="gmagickdraw.gettextencoding.php" class="index">GmagickDraw::gettextencoding</a> - Returns the code set used for text annotations</li>
        <li><a href="gmagickdraw.line.php" class="index">GmagickDraw::line</a> - Draws a line</li>
        <li><a href="gmagickdraw.point.php" class="index">GmagickDraw::point</a> - Draws a point</li>
        <li><a href="gmagickdraw.polygon.php" class="index">GmagickDraw::polygon</a> - Draws a polygon</li>
        <li><a href="gmagickdraw.polyline.php" class="index">GmagickDraw::polyline</a> - Draws a polyline</li>
        <li><a href="gmagickdraw.rectangle.php" class="index">GmagickDraw::rectangle</a> - Draws a rectangle</li>
        <li><a href="gmagickdraw.rotate.php" class="index">GmagickDraw::rotate</a> - Applies the specified rotation to the current coordinate space</li>
        <li><a href="gmagickdraw.roundrectangle.php" class="index">GmagickDraw::roundrectangle</a> - Draws a rounded rectangle</li>
        <li><a href="gmagickdraw.scale.php" class="index">GmagickDraw::scale</a> - Adjusts the scaling factor</li>
        <li><a href="gmagickdraw.setfillcolor.php" class="index">GmagickDraw::setfillcolor</a> - Sets the fill color to be used for drawing filled objects</li>
        <li><a href="gmagickdraw.setfillopacity.php" class="index">GmagickDraw::setfillopacity</a> - The setfillopacity purpose</li>
        <li><a href="gmagickdraw.setfont.php" class="index">GmagickDraw::setfont</a> - Sets the fully-specified font to use when annotating with text</li>
        <li><a href="gmagickdraw.setfontsize.php" class="index">GmagickDraw::setfontsize</a> - Sets the font pointsize to use when annotating with text</li>
        <li><a href="gmagickdraw.setfontstyle.php" class="index">GmagickDraw::setfontstyle</a> - Sets the font style to use when annotating with text</li>
        <li><a href="gmagickdraw.setfontweight.php" class="index">GmagickDraw::setfontweight</a> - Sets the font weight</li>
        <li><a href="gmagickdraw.setstrokecolor.php" class="index">GmagickDraw::setstrokecolor</a> - Sets the color used for stroking object outlines</li>
        <li><a href="gmagickdraw.setstrokeopacity.php" class="index">GmagickDraw::setstrokeopacity</a> - Specifies the opacity of stroked object outlines</li>
        <li><a href="gmagickdraw.setstrokewidth.php" class="index">GmagickDraw::setstrokewidth</a> - Sets the width of the stroke used to draw object outlines</li>
        <li><a href="gmagickdraw.settextdecoration.php" class="index">GmagickDraw::settextdecoration</a> - Specifies a decoration</li>
        <li><a href="gmagickdraw.settextencoding.php" class="index">GmagickDraw::settextencoding</a> - Specifies the text code set</li>
        <li><a href="gmagickpixel.getcolor.php" class="index">GmagickPixel::getcolor</a> - Returns the color</li>
        <li><a href="gmagickpixel.getcolorcount.php" class="index">GmagickPixel::getcolorcount</a> - Returns the color count associated with this color</li>
        <li><a href="gmagickpixel.getcolorvalue.php" class="index">GmagickPixel::getcolorvalue</a> - Gets the normalized value of the provided color channel</li>
        <li><a href="gmagickpixel.setcolor.php" class="index">GmagickPixel::setcolor</a> - Sets the color</li>
        <li><a href="gmagickpixel.setcolorvalue.php" class="index">GmagickPixel::setcolorvalue</a> - Sets the normalized value of one of the channels</li>
        <li><a href="gmagickpixel.construct.php" class="index">GmagickPixel::__construct</a> - The GmagickPixel constructor</li>
        <li><a href="function.gmdate.php" class="index">gmdate</a> - Format a GMT/UTC date/time</li>
        <li><a href="function.gmmktime.php" class="index">gmmktime</a> - Get Unix timestamp for a GMT date</li>
        <li><a href="gmp.construct.php" class="index">GMP::__construct</a> - Create GMP number</li>
        <li><a href="gmp.serialize.php" class="index">GMP::__serialize</a> - Serializes the GMP object</li>
        <li><a href="gmp.unserialize.php" class="index">GMP::__unserialize</a> - Deserializes the data parameter into a GMP object</li>
        <li><a href="function.gmp-abs.php" class="index">gmp_abs</a> - Absolute value</li>
        <li><a href="function.gmp-add.php" class="index">gmp_add</a> - Add numbers</li>
        <li><a href="function.gmp-and.php" class="index">gmp_and</a> - Bitwise AND</li>
        <li><a href="function.gmp-binomial.php" class="index">gmp_binomial</a> - Calculates binomial coefficient</li>
        <li><a href="function.gmp-clrbit.php" class="index">gmp_clrbit</a> - Clear bit</li>
        <li><a href="function.gmp-cmp.php" class="index">gmp_cmp</a> - Compare numbers</li>
        <li><a href="function.gmp-com.php" class="index">gmp_com</a> - Calculates one's complement</li>
        <li><a href="function.gmp-div.php" class="index">gmp_div</a> - Alias of gmp_div_q</li>
        <li><a href="function.gmp-divexact.php" class="index">gmp_divexact</a> - Exact division of numbers</li>
        <li><a href="function.gmp-div-q.php" class="index">gmp_div_q</a> - Divide numbers</li>
        <li><a href="function.gmp-div-qr.php" class="index">gmp_div_qr</a> - Divide numbers and get quotient and remainder</li>
        <li><a href="function.gmp-div-r.php" class="index">gmp_div_r</a> - Remainder of the division of numbers</li>
        <li><a href="function.gmp-export.php" class="index">gmp_export</a> - Export to a binary string</li>
        <li><a href="function.gmp-fact.php" class="index">gmp_fact</a> - Factorial</li>
        <li><a href="function.gmp-gcd.php" class="index">gmp_gcd</a> - Calculate GCD</li>
        <li><a href="function.gmp-gcdext.php" class="index">gmp_gcdext</a> - Calculate GCD and multipliers</li>
        <li><a href="function.gmp-hamdist.php" class="index">gmp_hamdist</a> - Hamming distance</li>
        <li><a href="function.gmp-import.php" class="index">gmp_import</a> - Import from a binary string</li>
        <li><a href="function.gmp-init.php" class="index">gmp_init</a> - Create GMP number</li>
        <li><a href="function.gmp-intval.php" class="index">gmp_intval</a> - Convert GMP number to integer</li>
        <li><a href="function.gmp-invert.php" class="index">gmp_invert</a> - Inverse by modulo</li>
        <li><a href="function.gmp-jacobi.php" class="index">gmp_jacobi</a> - Jacobi symbol</li>
        <li><a href="function.gmp-kronecker.php" class="index">gmp_kronecker</a> - Kronecker symbol</li>
        <li><a href="function.gmp-lcm.php" class="index">gmp_lcm</a> - Calculate LCM</li>
        <li><a href="function.gmp-legendre.php" class="index">gmp_legendre</a> - Legendre symbol</li>
        <li><a href="function.gmp-mod.php" class="index">gmp_mod</a> - Modulo operation</li>
        <li><a href="function.gmp-mul.php" class="index">gmp_mul</a> - Multiply numbers</li>
        <li><a href="function.gmp-neg.php" class="index">gmp_neg</a> - Negate number</li>
        <li><a href="function.gmp-nextprime.php" class="index">gmp_nextprime</a> - Find next prime number</li>
        <li><a href="function.gmp-or.php" class="index">gmp_or</a> - Bitwise OR</li>
        <li><a href="function.gmp-perfect-power.php" class="index">gmp_perfect_power</a> - Perfect power check</li>
        <li><a href="function.gmp-perfect-square.php" class="index">gmp_perfect_square</a> - Perfect square check</li>
        <li><a href="function.gmp-popcount.php" class="index">gmp_popcount</a> - Population count</li>
        <li><a href="function.gmp-pow.php" class="index">gmp_pow</a> - Raise number into power</li>
        <li><a href="function.gmp-powm.php" class="index">gmp_powm</a> - Raise number into power with modulo</li>
        <li><a href="function.gmp-prob-prime.php" class="index">gmp_prob_prime</a> - Check if number is &quot;probably prime&quot;</li>
        <li><a href="function.gmp-random.php" class="index">gmp_random</a> - Random number</li>
        <li><a href="function.gmp-random-bits.php" class="index">gmp_random_bits</a> - Random number</li>
        <li><a href="function.gmp-random-range.php" class="index">gmp_random_range</a> - Get a uniformly selected integer</li>
        <li><a href="function.gmp-random-seed.php" class="index">gmp_random_seed</a> - Sets the RNG seed</li>
        <li><a href="function.gmp-root.php" class="index">gmp_root</a> - Take the integer part of nth root</li>
        <li><a href="function.gmp-rootrem.php" class="index">gmp_rootrem</a> - Take the integer part and remainder of nth root</li>
        <li><a href="function.gmp-scan0.php" class="index">gmp_scan0</a> - Scan for 0</li>
        <li><a href="function.gmp-scan1.php" class="index">gmp_scan1</a> - Scan for 1</li>
        <li><a href="function.gmp-setbit.php" class="index">gmp_setbit</a> - Set bit</li>
        <li><a href="function.gmp-sign.php" class="index">gmp_sign</a> - Sign of number</li>
        <li><a href="function.gmp-sqrt.php" class="index">gmp_sqrt</a> - Calculate square root</li>
        <li><a href="function.gmp-sqrtrem.php" class="index">gmp_sqrtrem</a> - Square root with remainder</li>
        <li><a href="function.gmp-strval.php" class="index">gmp_strval</a> - Convert GMP number to string</li>
        <li><a href="function.gmp-sub.php" class="index">gmp_sub</a> - Subtract numbers</li>
        <li><a href="function.gmp-testbit.php" class="index">gmp_testbit</a> - Tests if a bit is set</li>
        <li><a href="function.gmp-xor.php" class="index">gmp_xor</a> - Bitwise XOR</li>
        <li><a href="function.gmstrftime.php" class="index">gmstrftime</a> - Format a GMT/UTC time/date according to locale settings</li>
        <li><a href="function.gnupg-adddecryptkey.php" class="index">gnupg_adddecryptkey</a> - Add a key for decryption</li>
        <li><a href="function.gnupg-addencryptkey.php" class="index">gnupg_addencryptkey</a> - Add a key for encryption</li>
        <li><a href="function.gnupg-addsignkey.php" class="index">gnupg_addsignkey</a> - Add a key for signing</li>
        <li><a href="function.gnupg-cleardecryptkeys.php" class="index">gnupg_cleardecryptkeys</a> - Removes all keys which were set for decryption before</li>
        <li><a href="function.gnupg-clearencryptkeys.php" class="index">gnupg_clearencryptkeys</a> - Removes all keys which were set for encryption before</li>
        <li><a href="function.gnupg-clearsignkeys.php" class="index">gnupg_clearsignkeys</a> - Removes all keys which were set for signing before</li>
        <li><a href="function.gnupg-decrypt.php" class="index">gnupg_decrypt</a> - Decrypts a given text</li>
        <li><a href="function.gnupg-decryptverify.php" class="index">gnupg_decryptverify</a> - Decrypts and verifies a given text</li>
        <li><a href="function.gnupg-deletekey.php" class="index">gnupg_deletekey</a> - Delete a key from the keyring</li>
        <li><a href="function.gnupg-encrypt.php" class="index">gnupg_encrypt</a> - Encrypts a given text</li>
        <li><a href="function.gnupg-encryptsign.php" class="index">gnupg_encryptsign</a> - Encrypts and signs a given text</li>
        <li><a href="function.gnupg-export.php" class="index">gnupg_export</a> - Exports a key</li>
        <li><a href="function.gnupg-getengineinfo.php" class="index">gnupg_getengineinfo</a> - Returns the engine info</li>
        <li><a href="function.gnupg-geterror.php" class="index">gnupg_geterror</a> - Returns the errortext, if a function fails</li>
        <li><a href="function.gnupg-geterrorinfo.php" class="index">gnupg_geterrorinfo</a> - Returns the error info</li>
        <li><a href="function.gnupg-getprotocol.php" class="index">gnupg_getprotocol</a> - Returns the currently active protocol for all operations</li>
        <li><a href="function.gnupg-gettrustlist.php" class="index">gnupg_gettrustlist</a> - Search the trust items</li>
        <li><a href="function.gnupg-import.php" class="index">gnupg_import</a> - Imports a key</li>
        <li><a href="function.gnupg-init.php" class="index">gnupg_init</a> - Initialize a connection</li>
        <li><a href="function.gnupg-keyinfo.php" class="index">gnupg_keyinfo</a> - Returns an array with information about all keys that matches the given pattern</li>
        <li><a href="function.gnupg-listsignatures.php" class="index">gnupg_listsignatures</a> - List key signatures</li>
        <li><a href="function.gnupg-setarmor.php" class="index">gnupg_setarmor</a> - Toggle armored output</li>
        <li><a href="function.gnupg-seterrormode.php" class="index">gnupg_seterrormode</a> - Sets the mode for error_reporting</li>
        <li><a href="function.gnupg-setsignmode.php" class="index">gnupg_setsignmode</a> - Sets the mode for signing</li>
        <li><a href="function.gnupg-sign.php" class="index">gnupg_sign</a> - Signs a given text</li>
        <li><a href="function.gnupg-verify.php" class="index">gnupg_verify</a> - Verifies a signed text</li>
        <li><a href="function.grapheme-extract.php" class="index">grapheme_extract</a> - Function to extract a sequence of default grapheme clusters from a text buffer, which must be encoded in UTF-8</li>
        <li><a href="function.grapheme-stripos.php" class="index">grapheme_stripos</a> - Find position (in grapheme units) of first occurrence of a case-insensitive string</li>
        <li><a href="function.grapheme-stristr.php" class="index">grapheme_stristr</a> - Returns part of haystack string from the first occurrence of case-insensitive needle to the end of haystack</li>
        <li><a href="function.grapheme-strlen.php" class="index">grapheme_strlen</a> - Get string length in grapheme units</li>
        <li><a href="function.grapheme-strpos.php" class="index">grapheme_strpos</a> - Find position (in grapheme units) of first occurrence of a string</li>
        <li><a href="function.grapheme-strripos.php" class="index">grapheme_strripos</a> - Find position (in grapheme units) of last occurrence of a case-insensitive string</li>
        <li><a href="function.grapheme-strrpos.php" class="index">grapheme_strrpos</a> - Find position (in grapheme units) of last occurrence of a string</li>
        <li><a href="function.grapheme-strstr.php" class="index">grapheme_strstr</a> - Returns part of haystack string from the first occurrence of needle to the end of haystack</li>
        <li><a href="function.grapheme-substr.php" class="index">grapheme_substr</a> - Return part of a string</li>
        <li><a href="function.gregoriantojd.php" class="index">gregoriantojd</a> - Converts a Gregorian date to Julian Day Count</li>
        <li><a href="function.gzclose.php" class="index">gzclose</a> - Close an open gz-file pointer</li>
        <li><a href="function.gzcompress.php" class="index">gzcompress</a> - Compress a string</li>
        <li><a href="function.gzdecode.php" class="index">gzdecode</a> - Decodes a gzip compressed string</li>
        <li><a href="function.gzdeflate.php" class="index">gzdeflate</a> - Deflate a string</li>
        <li><a href="function.gzencode.php" class="index">gzencode</a> - Create a gzip compressed string</li>
        <li><a href="function.gzeof.php" class="index">gzeof</a> - Test for EOF on a gz-file pointer</li>
        <li><a href="function.gzfile.php" class="index">gzfile</a> - Read entire gz-file into an array</li>
        <li><a href="function.gzgetc.php" class="index">gzgetc</a> - Get character from gz-file pointer</li>
        <li><a href="function.gzgets.php" class="index">gzgets</a> - Get line from file pointer</li>
        <li><a href="function.gzgetss.php" class="index">gzgetss</a> - Get line from gz-file pointer and strip HTML tags</li>
        <li><a href="function.gzinflate.php" class="index">gzinflate</a> - Inflate a deflated string</li>
        <li><a href="function.gzopen.php" class="index">gzopen</a> - Open gz-file</li>
        <li><a href="function.gzpassthru.php" class="index">gzpassthru</a> - Output all remaining data on a gz-file pointer</li>
        <li><a href="function.gzputs.php" class="index">gzputs</a> - Alias of gzwrite</li>
        <li><a href="function.gzread.php" class="index">gzread</a> - Binary-safe gz-file read</li>
        <li><a href="function.gzrewind.php" class="index">gzrewind</a> - Rewind the position of a gz-file pointer</li>
        <li><a href="function.gzseek.php" class="index">gzseek</a> - Seek on a gz-file pointer</li>
        <li><a href="function.gztell.php" class="index">gztell</a> - Tell gz-file pointer read/write position</li>
        <li><a href="function.gzuncompress.php" class="index">gzuncompress</a> - Uncompress a compressed string</li>
        <li><a href="function.gzwrite.php" class="index">gzwrite</a> - Binary-safe gz-file write</li>
        </ul></li>
        <li class='gen-index index-for-h'>h<ul id='refentry-index-for-h'>
        <li><a href="function.hash.php" class="index">hash</a> - Generate a hash value (message digest)</li>
        <li><a href="hashcontext.construct.php" class="index">HashContext::__construct</a> - Private constructor to disallow direct instantiation</li>
        <li><a href="hashcontext.serialize.php" class="index">HashContext::__serialize</a> - Serializes the HashContext object</li>
        <li><a href="hashcontext.unserialize.php" class="index">HashContext::__unserialize</a> - Deserializes the data parameter into a HashContext object</li>
        <li><a href="function.hash-algos.php" class="index">hash_algos</a> - Return a list of registered hashing algorithms</li>
        <li><a href="function.hash-copy.php" class="index">hash_copy</a> - Copy hashing context</li>
        <li><a href="function.hash-equals.php" class="index">hash_equals</a> - Timing attack safe string comparison</li>
        <li><a href="function.hash-file.php" class="index">hash_file</a> - Generate a hash value using the contents of a given file</li>
        <li><a href="function.hash-final.php" class="index">hash_final</a> - Finalize an incremental hash and return resulting digest</li>
        <li><a href="function.hash-hkdf.php" class="index">hash_hkdf</a> - Generate a HKDF key derivation of a supplied key input</li>
        <li><a href="function.hash-hmac.php" class="index">hash_hmac</a> - Generate a keyed hash value using the HMAC method</li>
        <li><a href="function.hash-hmac-algos.php" class="index">hash_hmac_algos</a> - Return a list of registered hashing algorithms suitable for hash_hmac</li>
        <li><a href="function.hash-hmac-file.php" class="index">hash_hmac_file</a> - Generate a keyed hash value using the HMAC method and the contents of a given file</li>
        <li><a href="function.hash-init.php" class="index">hash_init</a> - Initialize an incremental hashing context</li>
        <li><a href="function.hash-pbkdf2.php" class="index">hash_pbkdf2</a> - Generate a PBKDF2 key derivation of a supplied password</li>
        <li><a href="function.hash-update.php" class="index">hash_update</a> - Pump data into an active hashing context</li>
        <li><a href="function.hash-update-file.php" class="index">hash_update_file</a> - Pump data into an active hashing context from a file</li>
        <li><a href="function.hash-update-stream.php" class="index">hash_update_stream</a> - Pump data into an active hashing context from an open stream</li>
        <li><a href="function.header.php" class="index">header</a> - Send a raw HTTP header</li>
        <li><a href="function.headers-list.php" class="index">headers_list</a> - Returns a list of response headers sent (or ready to send)</li>
        <li><a href="function.headers-sent.php" class="index">headers_sent</a> - Checks if or where headers have been sent</li>
        <li><a href="function.header-register-callback.php" class="index">header_register_callback</a> - Call a header function</li>
        <li><a href="function.header-remove.php" class="index">header_remove</a> - Remove previously set headers</li>
        <li><a href="function.hebrev.php" class="index">hebrev</a> - Convert logical Hebrew text to visual text</li>
        <li><a href="function.hebrevc.php" class="index">hebrevc</a> - Convert logical Hebrew text to visual text with newline conversion</li>
        <li><a href="function.hex2bin.php" class="index">hex2bin</a> - Decodes a hexadecimally encoded binary string</li>
        <li><a href="function.hexdec.php" class="index">hexdec</a> - Hexadecimal to decimal</li>
        <li><a href="function.highlight-file.php" class="index">highlight_file</a> - Syntax highlighting of a file</li>
        <li><a href="function.highlight-string.php" class="index">highlight_string</a> - Syntax highlighting of a string</li>
        <li><a href="function.hrtime.php" class="index">hrtime</a> - Get the system's high resolution time</li>
        <li><a href="hrtime-performancecounter.getfrequency.php" class="index">HRTime\PerformanceCounter::getFrequency</a> - Timer frequency in ticks per second</li>
        <li><a href="hrtime-performancecounter.getticks.php" class="index">HRTime\PerformanceCounter::getTicks</a> - Current ticks from the system</li>
        <li><a href="hrtime-performancecounter.gettickssince.php" class="index">HRTime\PerformanceCounter::getTicksSince</a> - Ticks elapsed since the given value</li>
        <li><a href="hrtime-stopwatch.getelapsedticks.php" class="index">HRTime\StopWatch::getElapsedTicks</a> - Get elapsed ticks for all intervals</li>
        <li><a href="hrtime-stopwatch.getelapsedtime.php" class="index">HRTime\StopWatch::getElapsedTime</a> - Get elapsed time for all intervals</li>
        <li><a href="hrtime-stopwatch.getlastelapsedticks.php" class="index">HRTime\StopWatch::getLastElapsedTicks</a> - Get elapsed ticks for the last interval</li>
        <li><a href="hrtime-stopwatch.getlastelapsedtime.php" class="index">HRTime\StopWatch::getLastElapsedTime</a> - Get elapsed time for the last interval</li>
        <li><a href="hrtime-stopwatch.isrunning.php" class="index">HRTime\StopWatch::isRunning</a> - Whether the measurement is running</li>
        <li><a href="hrtime-stopwatch.start.php" class="index">HRTime\StopWatch::start</a> - Start time measurement</li>
        <li><a href="hrtime-stopwatch.stop.php" class="index">HRTime\StopWatch::stop</a> - Stop time measurement</li>
        <li><a href="function.htmlentities.php" class="index">htmlentities</a> - Convert all applicable characters to HTML entities</li>
        <li><a href="function.htmlspecialchars.php" class="index">htmlspecialchars</a> - Convert special characters to HTML entities</li>
        <li><a href="function.htmlspecialchars-decode.php" class="index">htmlspecialchars_decode</a> - Convert special HTML entities back to characters</li>
        <li><a href="function.html-entity-decode.php" class="index">html_entity_decode</a> - Convert HTML entities to their corresponding characters</li>
        <li><a href="function.http-build-query.php" class="index">http_build_query</a> - Generate URL-encoded query string</li>
        <li><a href="function.http-response-code.php" class="index">http_response_code</a> - Get or Set the HTTP response code</li>
        <li><a href="function.hypot.php" class="index">hypot</a> - Calculate the length of the hypotenuse of a right-angle triangle</li>
        </ul></li>
        <li class='gen-index index-for-i'>i<ul id='refentry-index-for-i'>
        <li><a href="function.ibase-add-user.php" class="index">ibase_add_user</a> - Add a user to a security database</li>
        <li><a href="function.ibase-affected-rows.php" class="index">ibase_affected_rows</a> - Return the number of rows that were affected by the previous query</li>
        <li><a href="function.ibase-backup.php" class="index">ibase_backup</a> - Initiates a backup task in the service manager and returns immediately</li>
        <li><a href="function.ibase-blob-add.php" class="index">ibase_blob_add</a> - Add data into a newly created blob</li>
        <li><a href="function.ibase-blob-cancel.php" class="index">ibase_blob_cancel</a> - Cancel creating blob</li>
        <li><a href="function.ibase-blob-close.php" class="index">ibase_blob_close</a> - Close blob</li>
        <li><a href="function.ibase-blob-create.php" class="index">ibase_blob_create</a> - Create a new blob for adding data</li>
        <li><a href="function.ibase-blob-echo.php" class="index">ibase_blob_echo</a> - Output blob contents to browser</li>
        <li><a href="function.ibase-blob-get.php" class="index">ibase_blob_get</a> - Get len bytes data from open blob</li>
        <li><a href="function.ibase-blob-import.php" class="index">ibase_blob_import</a> - Create blob, copy file in it, and close it</li>
        <li><a href="function.ibase-blob-info.php" class="index">ibase_blob_info</a> - Return blob length and other useful info</li>
        <li><a href="function.ibase-blob-open.php" class="index">ibase_blob_open</a> - Open blob for retrieving data parts</li>
        <li><a href="function.ibase-close.php" class="index">ibase_close</a> - Close a connection to an InterBase database</li>
        <li><a href="function.ibase-commit.php" class="index">ibase_commit</a> - Commit a transaction</li>
        <li><a href="function.ibase-commit-ret.php" class="index">ibase_commit_ret</a> - Commit a transaction without closing it</li>
        <li><a href="function.ibase-connect.php" class="index">ibase_connect</a> - Open a connection to a database</li>
        <li><a href="function.ibase-db-info.php" class="index">ibase_db_info</a> - Request statistics about a database</li>
        <li><a href="function.ibase-delete-user.php" class="index">ibase_delete_user</a> - Delete a user from a security database</li>
        <li><a href="function.ibase-drop-db.php" class="index">ibase_drop_db</a> - Drops a database</li>
        <li><a href="function.ibase-errcode.php" class="index">ibase_errcode</a> - Return an error code</li>
        <li><a href="function.ibase-errmsg.php" class="index">ibase_errmsg</a> - Return error messages</li>
        <li><a href="function.ibase-execute.php" class="index">ibase_execute</a> - Execute a previously prepared query</li>
        <li><a href="function.ibase-fetch-assoc.php" class="index">ibase_fetch_assoc</a> - Fetch a result row from a query as an associative array</li>
        <li><a href="function.ibase-fetch-object.php" class="index">ibase_fetch_object</a> - Get an object from a InterBase database</li>
        <li><a href="function.ibase-fetch-row.php" class="index">ibase_fetch_row</a> - Fetch a row from an InterBase database</li>
        <li><a href="function.ibase-field-info.php" class="index">ibase_field_info</a> - Get information about a field</li>
        <li><a href="function.ibase-free-event-handler.php" class="index">ibase_free_event_handler</a> - Cancels a registered event handler</li>
        <li><a href="function.ibase-free-query.php" class="index">ibase_free_query</a> - Free memory allocated by a prepared query</li>
        <li><a href="function.ibase-free-result.php" class="index">ibase_free_result</a> - Free a result set</li>
        <li><a href="function.ibase-gen-id.php" class="index">ibase_gen_id</a> - Increments the named generator and returns its new value</li>
        <li><a href="function.ibase-maintain-db.php" class="index">ibase_maintain_db</a> - Execute a maintenance command on the database server</li>
        <li><a href="function.ibase-modify-user.php" class="index">ibase_modify_user</a> - Modify a user to a security database</li>
        <li><a href="function.ibase-name-result.php" class="index">ibase_name_result</a> - Assigns a name to a result set</li>
        <li><a href="function.ibase-num-fields.php" class="index">ibase_num_fields</a> - Get the number of fields in a result set</li>
        <li><a href="function.ibase-num-params.php" class="index">ibase_num_params</a> - Return the number of parameters in a prepared query</li>
        <li><a href="function.ibase-param-info.php" class="index">ibase_param_info</a> - Return information about a parameter in a prepared query</li>
        <li><a href="function.ibase-pconnect.php" class="index">ibase_pconnect</a> - Open a persistent connection to an InterBase database</li>
        <li><a href="function.ibase-prepare.php" class="index">ibase_prepare</a> - Prepare a query for later binding of parameter placeholders and execution</li>
        <li><a href="function.ibase-query.php" class="index">ibase_query</a> - Execute a query on an InterBase database</li>
        <li><a href="function.ibase-restore.php" class="index">ibase_restore</a> - Initiates a restore task in the service manager and returns immediately</li>
        <li><a href="function.ibase-rollback.php" class="index">ibase_rollback</a> - Roll back a transaction</li>
        <li><a href="function.ibase-rollback-ret.php" class="index">ibase_rollback_ret</a> - Roll back a transaction without closing it</li>
        <li><a href="function.ibase-server-info.php" class="index">ibase_server_info</a> - Request information about a database server</li>
        <li><a href="function.ibase-service-attach.php" class="index">ibase_service_attach</a> - Connect to the service manager</li>
        <li><a href="function.ibase-service-detach.php" class="index">ibase_service_detach</a> - Disconnect from the service manager</li>
        <li><a href="function.ibase-set-event-handler.php" class="index">ibase_set_event_handler</a> - Register a callback function to be called when events are posted</li>
        <li><a href="function.ibase-trans.php" class="index">ibase_trans</a> - Begin a transaction</li>
        <li><a href="function.ibase-wait-event.php" class="index">ibase_wait_event</a> - Wait for an event to be posted by the database</li>
        <li><a href="function.iconv.php" class="index">iconv</a> - Convert a string from one character encoding to another</li>
        <li><a href="function.iconv-get-encoding.php" class="index">iconv_get_encoding</a> - Retrieve internal configuration variables of iconv extension</li>
        <li><a href="function.iconv-mime-decode.php" class="index">iconv_mime_decode</a> - Decodes a MIME header field</li>
        <li><a href="function.iconv-mime-decode-headers.php" class="index">iconv_mime_decode_headers</a> - Decodes multiple MIME header fields at once</li>
        <li><a href="function.iconv-mime-encode.php" class="index">iconv_mime_encode</a> - Composes a MIME header field</li>
        <li><a href="function.iconv-set-encoding.php" class="index">iconv_set_encoding</a> - Set current setting for character encoding conversion</li>
        <li><a href="function.iconv-strlen.php" class="index">iconv_strlen</a> - Returns the character count of string</li>
        <li><a href="function.iconv-strpos.php" class="index">iconv_strpos</a> - Finds position of first occurrence of a needle within a haystack</li>
        <li><a href="function.iconv-strrpos.php" class="index">iconv_strrpos</a> - Finds the last occurrence of a needle within a haystack</li>
        <li><a href="function.iconv-substr.php" class="index">iconv_substr</a> - Cut out part of a string</li>
        <li><a href="function.idate.php" class="index">idate</a> - Format a local time/date part as integer</li>
        <li><a href="function.idn-to-ascii.php" class="index">idn_to_ascii</a> - Convert domain name to IDNA ASCII form</li>
        <li><a href="function.idn-to-utf8.php" class="index">idn_to_utf8</a> - Convert domain name from IDNA ASCII to Unicode</li>
        <li><a href="function.igbinary-serialize.php" class="index">igbinary_serialize</a> - Generates a compact, storable binary representation of a value</li>
        <li><a href="function.igbinary-unserialize.php" class="index">igbinary_unserialize</a> - Creates a PHP value from a stored representation from igbinary_serialize</li>
        <li><a href="function.ignore-user-abort.php" class="index">ignore_user_abort</a> - Set whether a client disconnect should abort script execution</li>
        <li><a href="function.image2wbmp.php" class="index">image2wbmp</a> - Output image to browser or file</li>
        <li><a href="function.imageaffine.php" class="index">imageaffine</a> - Return an image containing the affine transformed src image, using an optional clipping area</li>
        <li><a href="function.imageaffinematrixconcat.php" class="index">imageaffinematrixconcat</a> - Concatenate two affine transformation matrices</li>
        <li><a href="function.imageaffinematrixget.php" class="index">imageaffinematrixget</a> - Get an affine transformation matrix</li>
        <li><a href="function.imagealphablending.php" class="index">imagealphablending</a> - Set the blending mode for an image</li>
        <li><a href="function.imageantialias.php" class="index">imageantialias</a> - Should antialias functions be used or not</li>
        <li><a href="function.imagearc.php" class="index">imagearc</a> - Draws an arc</li>
        <li><a href="function.imageavif.php" class="index">imageavif</a> - Output image to browser or file</li>
        <li><a href="function.imagebmp.php" class="index">imagebmp</a> - Output a BMP image to browser or file</li>
        <li><a href="function.imagechar.php" class="index">imagechar</a> - Draw a character horizontally</li>
        <li><a href="function.imagecharup.php" class="index">imagecharup</a> - Draw a character vertically</li>
        <li><a href="function.imagecolorallocate.php" class="index">imagecolorallocate</a> - Allocate a color for an image</li>
        <li><a href="function.imagecolorallocatealpha.php" class="index">imagecolorallocatealpha</a> - Allocate a color for an image</li>
        <li><a href="function.imagecolorat.php" class="index">imagecolorat</a> - Get the index of the color of a pixel</li>
        <li><a href="function.imagecolorclosest.php" class="index">imagecolorclosest</a> - Get the index of the closest color to the specified color</li>
        <li><a href="function.imagecolorclosestalpha.php" class="index">imagecolorclosestalpha</a> - Get the index of the closest color to the specified color + alpha</li>
        <li><a href="function.imagecolorclosesthwb.php" class="index">imagecolorclosesthwb</a> - Get the index of the color which has the hue, white and blackness</li>
        <li><a href="function.imagecolordeallocate.php" class="index">imagecolordeallocate</a> - De-allocate a color for an image</li>
        <li><a href="function.imagecolorexact.php" class="index">imagecolorexact</a> - Get the index of the specified color</li>
        <li><a href="function.imagecolorexactalpha.php" class="index">imagecolorexactalpha</a> - Get the index of the specified color + alpha</li>
        <li><a href="function.imagecolormatch.php" class="index">imagecolormatch</a> - Makes the colors of the palette version of an image more closely match the true color version</li>
        <li><a href="function.imagecolorresolve.php" class="index">imagecolorresolve</a> - Get the index of the specified color or its closest possible alternative</li>
        <li><a href="function.imagecolorresolvealpha.php" class="index">imagecolorresolvealpha</a> - Get the index of the specified color + alpha or its closest possible alternative</li>
        <li><a href="function.imagecolorset.php" class="index">imagecolorset</a> - Set the color for the specified palette index</li>
        <li><a href="function.imagecolorsforindex.php" class="index">imagecolorsforindex</a> - Get the colors for an index</li>
        <li><a href="function.imagecolorstotal.php" class="index">imagecolorstotal</a> - Find out the number of colors in an image's palette</li>
        <li><a href="function.imagecolortransparent.php" class="index">imagecolortransparent</a> - Define a color as transparent</li>
        <li><a href="function.imageconvolution.php" class="index">imageconvolution</a> - Apply a 3x3 convolution matrix, using coefficient and offset</li>
        <li><a href="function.imagecopy.php" class="index">imagecopy</a> - Copy part of an image</li>
        <li><a href="function.imagecopymerge.php" class="index">imagecopymerge</a> - Copy and merge part of an image</li>
        <li><a href="function.imagecopymergegray.php" class="index">imagecopymergegray</a> - Copy and merge part of an image with gray scale</li>
        <li><a href="function.imagecopyresampled.php" class="index">imagecopyresampled</a> - Copy and resize part of an image with resampling</li>
        <li><a href="function.imagecopyresized.php" class="index">imagecopyresized</a> - Copy and resize part of an image</li>
        <li><a href="function.imagecreate.php" class="index">imagecreate</a> - Create a new palette based image</li>
        <li><a href="function.imagecreatefromavif.php" class="index">imagecreatefromavif</a> - Create a new image from file or URL</li>
        <li><a href="function.imagecreatefrombmp.php" class="index">imagecreatefrombmp</a> - Create a new image from file or URL</li>
        <li><a href="function.imagecreatefromgd.php" class="index">imagecreatefromgd</a> - Create a new image from GD file or URL</li>
        <li><a href="function.imagecreatefromgd2.php" class="index">imagecreatefromgd2</a> - Create a new image from GD2 file or URL</li>
        <li><a href="function.imagecreatefromgd2part.php" class="index">imagecreatefromgd2part</a> - Create a new image from a given part of GD2 file or URL</li>
        <li><a href="function.imagecreatefromgif.php" class="index">imagecreatefromgif</a> - Create a new image from file or URL</li>
        <li><a href="function.imagecreatefromjpeg.php" class="index">imagecreatefromjpeg</a> - Create a new image from file or URL</li>
        <li><a href="function.imagecreatefrompng.php" class="index">imagecreatefrompng</a> - Create a new image from file or URL</li>
        <li><a href="function.imagecreatefromstring.php" class="index">imagecreatefromstring</a> - Create a new image from the image stream in the string</li>
        <li><a href="function.imagecreatefromtga.php" class="index">imagecreatefromtga</a> - Create a new image from file or URL</li>
        <li><a href="function.imagecreatefromwbmp.php" class="index">imagecreatefromwbmp</a> - Create a new image from file or URL</li>
        <li><a href="function.imagecreatefromwebp.php" class="index">imagecreatefromwebp</a> - Create a new image from file or URL</li>
        <li><a href="function.imagecreatefromxbm.php" class="index">imagecreatefromxbm</a> - Create a new image from file or URL</li>
        <li><a href="function.imagecreatefromxpm.php" class="index">imagecreatefromxpm</a> - Create a new image from file or URL</li>
        <li><a href="function.imagecreatetruecolor.php" class="index">imagecreatetruecolor</a> - Create a new true color image</li>
        <li><a href="function.imagecrop.php" class="index">imagecrop</a> - Crop an image to the given rectangle</li>
        <li><a href="function.imagecropauto.php" class="index">imagecropauto</a> - Crop an image automatically using one of the available modes</li>
        <li><a href="function.imagedashedline.php" class="index">imagedashedline</a> - Draw a dashed line</li>
        <li><a href="function.imagedestroy.php" class="index">imagedestroy</a> - Destroy an image</li>
        <li><a href="function.imageellipse.php" class="index">imageellipse</a> - Draw an ellipse</li>
        <li><a href="function.imagefill.php" class="index">imagefill</a> - Flood fill</li>
        <li><a href="function.imagefilledarc.php" class="index">imagefilledarc</a> - Draw a partial arc and fill it</li>
        <li><a href="function.imagefilledellipse.php" class="index">imagefilledellipse</a> - Draw a filled ellipse</li>
        <li><a href="function.imagefilledpolygon.php" class="index">imagefilledpolygon</a> - Draw a filled polygon</li>
        <li><a href="function.imagefilledrectangle.php" class="index">imagefilledrectangle</a> - Draw a filled rectangle</li>
        <li><a href="function.imagefilltoborder.php" class="index">imagefilltoborder</a> - Flood fill to specific color</li>
        <li><a href="function.imagefilter.php" class="index">imagefilter</a> - Applies a filter to an image</li>
        <li><a href="function.imageflip.php" class="index">imageflip</a> - Flips an image using a given mode</li>
        <li><a href="function.imagefontheight.php" class="index">imagefontheight</a> - Get font height</li>
        <li><a href="function.imagefontwidth.php" class="index">imagefontwidth</a> - Get font width</li>
        <li><a href="function.imageftbbox.php" class="index">imageftbbox</a> - Give the bounding box of a text using fonts via freetype2</li>
        <li><a href="function.imagefttext.php" class="index">imagefttext</a> - Write text to the image using fonts using FreeType 2</li>
        <li><a href="function.imagegammacorrect.php" class="index">imagegammacorrect</a> - Apply a gamma correction to a GD image</li>
        <li><a href="function.imagegd.php" class="index">imagegd</a> - Output GD image to browser or file</li>
        <li><a href="function.imagegd2.php" class="index">imagegd2</a> - Output GD2 image to browser or file</li>
        <li><a href="function.imagegetclip.php" class="index">imagegetclip</a> - Get the clipping rectangle</li>
        <li><a href="function.imagegetinterpolation.php" class="index">imagegetinterpolation</a> - Get the interpolation method</li>
        <li><a href="function.imagegif.php" class="index">imagegif</a> - Output image to browser or file</li>
        <li><a href="function.imagegrabscreen.php" class="index">imagegrabscreen</a> - Captures the whole screen</li>
        <li><a href="function.imagegrabwindow.php" class="index">imagegrabwindow</a> - Captures a window</li>
        <li><a href="function.imageinterlace.php" class="index">imageinterlace</a> - Enable or disable interlace</li>
        <li><a href="function.imageistruecolor.php" class="index">imageistruecolor</a> - Finds whether an image is a truecolor image</li>
        <li><a href="function.imagejpeg.php" class="index">imagejpeg</a> - Output image to browser or file</li>
        <li><a href="function.imagelayereffect.php" class="index">imagelayereffect</a> - Set the alpha blending flag to use layering effects</li>
        <li><a href="function.imageline.php" class="index">imageline</a> - Draw a line</li>
        <li><a href="function.imageloadfont.php" class="index">imageloadfont</a> - Load a new font</li>
        <li><a href="function.imageopenpolygon.php" class="index">imageopenpolygon</a> - Draws an open polygon</li>
        <li><a href="function.imagepalettecopy.php" class="index">imagepalettecopy</a> - Copy the palette from one image to another</li>
        <li><a href="function.imagepalettetotruecolor.php" class="index">imagepalettetotruecolor</a> - Converts a palette based image to true color</li>
        <li><a href="function.imagepng.php" class="index">imagepng</a> - Output a PNG image to either the browser or a file</li>
        <li><a href="function.imagepolygon.php" class="index">imagepolygon</a> - Draws a polygon</li>
        <li><a href="function.imagerectangle.php" class="index">imagerectangle</a> - Draw a rectangle</li>
        <li><a href="function.imageresolution.php" class="index">imageresolution</a> - Get or set the resolution of the image</li>
        <li><a href="function.imagerotate.php" class="index">imagerotate</a> - Rotate an image with a given angle</li>
        <li><a href="function.imagesavealpha.php" class="index">imagesavealpha</a> - Whether to retain full alpha channel information when saving images</li>
        <li><a href="function.imagescale.php" class="index">imagescale</a> - Scale an image using the given new width and height</li>
        <li><a href="function.imagesetbrush.php" class="index">imagesetbrush</a> - Set the brush image for line drawing</li>
        <li><a href="function.imagesetclip.php" class="index">imagesetclip</a> - Set the clipping rectangle</li>
        <li><a href="function.imagesetinterpolation.php" class="index">imagesetinterpolation</a> - Set the interpolation method</li>
        <li><a href="function.imagesetpixel.php" class="index">imagesetpixel</a> - Set a single pixel</li>
        <li><a href="function.imagesetstyle.php" class="index">imagesetstyle</a> - Set the style for line drawing</li>
        <li><a href="function.imagesetthickness.php" class="index">imagesetthickness</a> - Set the thickness for line drawing</li>
        <li><a href="function.imagesettile.php" class="index">imagesettile</a> - Set the tile image for filling</li>
        <li><a href="function.imagestring.php" class="index">imagestring</a> - Draw a string horizontally</li>
        <li><a href="function.imagestringup.php" class="index">imagestringup</a> - Draw a string vertically</li>
        <li><a href="function.imagesx.php" class="index">imagesx</a> - Get image width</li>
        <li><a href="function.imagesy.php" class="index">imagesy</a> - Get image height</li>
        <li><a href="function.imagetruecolortopalette.php" class="index">imagetruecolortopalette</a> - Convert a true color image to a palette image</li>
        <li><a href="function.imagettfbbox.php" class="index">imagettfbbox</a> - Give the bounding box of a text using TrueType fonts</li>
        <li><a href="function.imagettftext.php" class="index">imagettftext</a> - Write text to the image using TrueType fonts</li>
        <li><a href="function.imagetypes.php" class="index">imagetypes</a> - Return the image types supported by this PHP build</li>
        <li><a href="function.imagewbmp.php" class="index">imagewbmp</a> - Output image to browser or file</li>
        <li><a href="function.imagewebp.php" class="index">imagewebp</a> - Output a WebP image to browser or file</li>
        <li><a href="function.imagexbm.php" class="index">imagexbm</a> - Output an XBM image to browser or file</li>
        <li><a href="function.image-type-to-extension.php" class="index">image_type_to_extension</a> - Get file extension for image type</li>
        <li><a href="function.image-type-to-mime-type.php" class="index">image_type_to_mime_type</a> - Get Mime-Type for image-type returned by getimagesize,
           exif_read_data, exif_thumbnail, exif_imagetype</li>
        <li><a href="imagick.adaptiveblurimage.php" class="index">Imagick::adaptiveBlurImage</a> - Adds adaptive blur filter to image</li>
        <li><a href="imagick.adaptiveresizeimage.php" class="index">Imagick::adaptiveResizeImage</a> - Adaptively resize image with data dependent triangulation</li>
        <li><a href="imagick.adaptivesharpenimage.php" class="index">Imagick::adaptiveSharpenImage</a> - Adaptively sharpen the image</li>
        <li><a href="imagick.adaptivethresholdimage.php" class="index">Imagick::adaptiveThresholdImage</a> - Selects a threshold for each pixel based on a range of intensity</li>
        <li><a href="imagick.addimage.php" class="index">Imagick::addImage</a> - Adds new image to Imagick object image list</li>
        <li><a href="imagick.addnoiseimage.php" class="index">Imagick::addNoiseImage</a> - Adds random noise to the image</li>
        <li><a href="imagick.affinetransformimage.php" class="index">Imagick::affineTransformImage</a> - Transforms an image</li>
        <li><a href="imagick.animateimages.php" class="index">Imagick::animateImages</a> - Animates an image or images</li>
        <li><a href="imagick.annotateimage.php" class="index">Imagick::annotateImage</a> - Annotates an image with text</li>
        <li><a href="imagick.appendimages.php" class="index">Imagick::appendImages</a> - Append a set of images</li>
        <li><a href="imagick.autolevelimage.php" class="index">Imagick::autoLevelImage</a> - Adjusts the levels of a particular image channel</li>
        <li><a href="imagick.averageimages.php" class="index">Imagick::averageImages</a> - Average a set of images</li>
        <li><a href="imagick.blackthresholdimage.php" class="index">Imagick::blackThresholdImage</a> - Forces all pixels below the threshold into black</li>
        <li><a href="imagick.blueshiftimage.php" class="index">Imagick::blueShiftImage</a> - Mutes the colors of the image</li>
        <li><a href="imagick.blurimage.php" class="index">Imagick::blurImage</a> - Adds blur filter to image</li>
        <li><a href="imagick.borderimage.php" class="index">Imagick::borderImage</a> - Surrounds the image with a border</li>
        <li><a href="imagick.brightnesscontrastimage.php" class="index">Imagick::brightnessContrastImage</a> - Change the brightness and/or contrast of an image</li>
        <li><a href="imagick.charcoalimage.php" class="index">Imagick::charcoalImage</a> - Simulates a charcoal drawing</li>
        <li><a href="imagick.chopimage.php" class="index">Imagick::chopImage</a> - Removes a region of an image and trims</li>
        <li><a href="imagick.clampimage.php" class="index">Imagick::clampImage</a> - Restricts the color range from 0 to the quantum depth.</li>
        <li><a href="imagick.clear.php" class="index">Imagick::clear</a> - Clears all resources associated to Imagick object</li>
        <li><a href="imagick.clipimage.php" class="index">Imagick::clipImage</a> - Clips along the first path from the 8BIM profile</li>
        <li><a href="imagick.clipimagepath.php" class="index">Imagick::clipImagePath</a> - Clips along the named paths from the 8BIM profile, if present</li>
        <li><a href="imagick.clippathimage.php" class="index">Imagick::clipPathImage</a> - Clips along the named paths from the 8BIM profile</li>
        <li><a href="imagick.clone.php" class="index">Imagick::clone</a> - Makes an exact copy of the Imagick object</li>
        <li><a href="imagick.clutimage.php" class="index">Imagick::clutImage</a> - Replaces colors in the image</li>
        <li><a href="imagick.coalesceimages.php" class="index">Imagick::coalesceImages</a> - Composites a set of images</li>
        <li><a href="imagick.colorfloodfillimage.php" class="index">Imagick::colorFloodfillImage</a> - Changes the color value of any pixel that matches target</li>
        <li><a href="imagick.colorizeimage.php" class="index">Imagick::colorizeImage</a> - Blends the fill color with the image</li>
        <li><a href="imagick.colormatriximage.php" class="index">Imagick::colorMatrixImage</a> - Apply color transformation to an image</li>
        <li><a href="imagick.combineimages.php" class="index">Imagick::combineImages</a> - Combines one or more images into a single image</li>
        <li><a href="imagick.commentimage.php" class="index">Imagick::commentImage</a> - Adds a comment to your image</li>
        <li><a href="imagick.compareimagechannels.php" class="index">Imagick::compareImageChannels</a> - Returns the difference in one or more images</li>
        <li><a href="imagick.compareimagelayers.php" class="index">Imagick::compareImageLayers</a> - Returns the maximum bounding region between images</li>
        <li><a href="imagick.compareimages.php" class="index">Imagick::compareImages</a> - Compares an image to a reconstructed image</li>
        <li><a href="imagick.compositeimage.php" class="index">Imagick::compositeImage</a> - Composite one image onto another</li>
        <li><a href="imagick.contrastimage.php" class="index">Imagick::contrastImage</a> - Change the contrast of the image</li>
        <li><a href="imagick.contraststretchimage.php" class="index">Imagick::contrastStretchImage</a> - Enhances the contrast of a color image</li>
        <li><a href="imagick.convolveimage.php" class="index">Imagick::convolveImage</a> - Applies a custom convolution kernel to the image</li>
        <li><a href="imagick.count.php" class="index">Imagick::count</a> - Get the number of images</li>
        <li><a href="imagick.cropimage.php" class="index">Imagick::cropImage</a> - Extracts a region of the image</li>
        <li><a href="imagick.cropthumbnailimage.php" class="index">Imagick::cropThumbnailImage</a> - Creates a crop thumbnail</li>
        <li><a href="imagick.current.php" class="index">Imagick::current</a> - Returns a reference to the current Imagick object</li>
        <li><a href="imagick.cyclecolormapimage.php" class="index">Imagick::cycleColormapImage</a> - Displaces an image's colormap</li>
        <li><a href="imagick.decipherimage.php" class="index">Imagick::decipherImage</a> - Deciphers an image</li>
        <li><a href="imagick.deconstructimages.php" class="index">Imagick::deconstructImages</a> - Returns certain pixel differences between images</li>
        <li><a href="imagick.deleteimageartifact.php" class="index">Imagick::deleteImageArtifact</a> - Delete image artifact</li>
        <li><a href="imagick.deleteimageproperty.php" class="index">Imagick::deleteImageProperty</a> - Deletes an image property</li>
        <li><a href="imagick.deskewimage.php" class="index">Imagick::deskewImage</a> - Removes skew from the image</li>
        <li><a href="imagick.despeckleimage.php" class="index">Imagick::despeckleImage</a> - Reduces the speckle noise in an image</li>
        <li><a href="imagick.destroy.php" class="index">Imagick::destroy</a> - Destroys the Imagick object</li>
        <li><a href="imagick.displayimage.php" class="index">Imagick::displayImage</a> - Displays an image</li>
        <li><a href="imagick.displayimages.php" class="index">Imagick::displayImages</a> - Displays an image or image sequence</li>
        <li><a href="imagick.distortimage.php" class="index">Imagick::distortImage</a> - Distorts an image using various distortion methods</li>
        <li><a href="imagick.drawimage.php" class="index">Imagick::drawImage</a> - Renders the ImagickDraw object on the current image</li>
        <li><a href="imagick.edgeimage.php" class="index">Imagick::edgeImage</a> - Enhance edges within the image</li>
        <li><a href="imagick.embossimage.php" class="index">Imagick::embossImage</a> - Returns a grayscale image with a three-dimensional effect</li>
        <li><a href="imagick.encipherimage.php" class="index">Imagick::encipherImage</a> - Enciphers an image</li>
        <li><a href="imagick.enhanceimage.php" class="index">Imagick::enhanceImage</a> - Improves the quality of a noisy image</li>
        <li><a href="imagick.equalizeimage.php" class="index">Imagick::equalizeImage</a> - Equalizes the image histogram</li>
        <li><a href="imagick.evaluateimage.php" class="index">Imagick::evaluateImage</a> - Applies an expression to an image</li>
        <li><a href="imagick.exportimagepixels.php" class="index">Imagick::exportImagePixels</a> - Exports raw image pixels</li>
        <li><a href="imagick.extentimage.php" class="index">Imagick::extentImage</a> - Set image size</li>
        <li><a href="imagick.filter.php" class="index">Imagick::filter</a> - Applies a custom convolution kernel to the image</li>
        <li><a href="imagick.flattenimages.php" class="index">Imagick::flattenImages</a> - Merges a sequence of images</li>
        <li><a href="imagick.flipimage.php" class="index">Imagick::flipImage</a> - Creates a vertical mirror image</li>
        <li><a href="imagick.floodfillpaintimage.php" class="index">Imagick::floodFillPaintImage</a> - Changes the color value of any pixel that matches target</li>
        <li><a href="imagick.flopimage.php" class="index">Imagick::flopImage</a> - Creates a horizontal mirror image</li>
        <li><a href="imagick.forwardfouriertransformimage.php" class="index">Imagick::forwardFourierTransformImage</a> - Implements the discrete Fourier transform (DFT)</li>
        <li><a href="imagick.frameimage.php" class="index">Imagick::frameImage</a> - Adds a simulated three-dimensional border</li>
        <li><a href="imagick.functionimage.php" class="index">Imagick::functionImage</a> - Applies a function on the image</li>
        <li><a href="imagick.fximage.php" class="index">Imagick::fxImage</a> - Evaluate expression for each pixel in the image</li>
        <li><a href="imagick.gammaimage.php" class="index">Imagick::gammaImage</a> - Gamma-corrects an image</li>
        <li><a href="imagick.gaussianblurimage.php" class="index">Imagick::gaussianBlurImage</a> - Blurs an image</li>
        <li><a href="imagick.getcolorspace.php" class="index">Imagick::getColorspace</a> - Gets the colorspace</li>
        <li><a href="imagick.getcompression.php" class="index">Imagick::getCompression</a> - Gets the object compression type</li>
        <li><a href="imagick.getcompressionquality.php" class="index">Imagick::getCompressionQuality</a> - Gets the object compression quality</li>
        <li><a href="imagick.getcopyright.php" class="index">Imagick::getCopyright</a> - Returns the ImageMagick API copyright as a string</li>
        <li><a href="imagick.getfilename.php" class="index">Imagick::getFilename</a> - The filename associated with an image sequence</li>
        <li><a href="imagick.getfont.php" class="index">Imagick::getFont</a> - Gets font</li>
        <li><a href="imagick.getformat.php" class="index">Imagick::getFormat</a> - Returns the format of the Imagick object</li>
        <li><a href="imagick.getgravity.php" class="index">Imagick::getGravity</a> - Gets the gravity</li>
        <li><a href="imagick.gethomeurl.php" class="index">Imagick::getHomeURL</a> - Returns the ImageMagick home URL</li>
        <li><a href="imagick.getimage.php" class="index">Imagick::getImage</a> - Returns a new Imagick object</li>
        <li><a href="imagick.getimagealphachannel.php" class="index">Imagick::getImageAlphaChannel</a> - Checks if the image has an alpha channel</li>
        <li><a href="imagick.getimageartifact.php" class="index">Imagick::getImageArtifact</a> - Get image artifact</li>
        <li><a href="imagick.getimageattribute.php" class="index">Imagick::getImageAttribute</a> - Returns a named attribute</li>
        <li><a href="imagick.getimagebackgroundcolor.php" class="index">Imagick::getImageBackgroundColor</a> - Returns the image background color</li>
        <li><a href="imagick.getimageblob.php" class="index">Imagick::getImageBlob</a> - Returns the image sequence as a blob</li>
        <li><a href="imagick.getimageblueprimary.php" class="index">Imagick::getImageBluePrimary</a> - Returns the chromaticy blue primary point</li>
        <li><a href="imagick.getimagebordercolor.php" class="index">Imagick::getImageBorderColor</a> - Returns the image border color</li>
        <li><a href="imagick.getimagechanneldepth.php" class="index">Imagick::getImageChannelDepth</a> - Gets the depth for a particular image channel</li>
        <li><a href="imagick.getimagechanneldistortion.php" class="index">Imagick::getImageChannelDistortion</a> - Compares image channels of an image to a reconstructed image</li>
        <li><a href="imagick.getimagechanneldistortions.php" class="index">Imagick::getImageChannelDistortions</a> - Gets channel distortions</li>
        <li><a href="imagick.getimagechannelextrema.php" class="index">Imagick::getImageChannelExtrema</a> - Gets the extrema for one or more image channels</li>
        <li><a href="imagick.getimagechannelkurtosis.php" class="index">Imagick::getImageChannelKurtosis</a> - The getImageChannelKurtosis purpose</li>
        <li><a href="imagick.getimagechannelmean.php" class="index">Imagick::getImageChannelMean</a> - Gets the mean and standard deviation</li>
        <li><a href="imagick.getimagechannelrange.php" class="index">Imagick::getImageChannelRange</a> - Gets channel range</li>
        <li><a href="imagick.getimagechannelstatistics.php" class="index">Imagick::getImageChannelStatistics</a> - Returns statistics for each channel in the image</li>
        <li><a href="imagick.getimageclipmask.php" class="index">Imagick::getImageClipMask</a> - Gets image clip mask</li>
        <li><a href="imagick.getimagecolormapcolor.php" class="index">Imagick::getImageColormapColor</a> - Returns the color of the specified colormap index</li>
        <li><a href="imagick.getimagecolors.php" class="index">Imagick::getImageColors</a> - Gets the number of unique colors in the image</li>
        <li><a href="imagick.getimagecolorspace.php" class="index">Imagick::getImageColorspace</a> - Gets the image colorspace</li>
        <li><a href="imagick.getimagecompose.php" class="index">Imagick::getImageCompose</a> - Returns the composite operator associated with the image</li>
        <li><a href="imagick.getimagecompression.php" class="index">Imagick::getImageCompression</a> - Gets the current image's compression type</li>
        <li><a href="imagick.getimagecompressionquality.php" class="index">Imagick::getImageCompressionQuality</a> - Gets the current image's compression quality</li>
        <li><a href="imagick.getimagedelay.php" class="index">Imagick::getImageDelay</a> - Gets the image delay</li>
        <li><a href="imagick.getimagedepth.php" class="index">Imagick::getImageDepth</a> - Gets the image depth</li>
        <li><a href="imagick.getimagedispose.php" class="index">Imagick::getImageDispose</a> - Gets the image disposal method</li>
        <li><a href="imagick.getimagedistortion.php" class="index">Imagick::getImageDistortion</a> - Compares an image to a reconstructed image</li>
        <li><a href="imagick.getimageextrema.php" class="index">Imagick::getImageExtrema</a> - Gets the extrema for the image</li>
        <li><a href="imagick.getimagefilename.php" class="index">Imagick::getImageFilename</a> - Returns the filename of a particular image in a sequence</li>
        <li><a href="imagick.getimageformat.php" class="index">Imagick::getImageFormat</a> - Returns the format of a particular image in a sequence</li>
        <li><a href="imagick.getimagegamma.php" class="index">Imagick::getImageGamma</a> - Gets the image gamma</li>
        <li><a href="imagick.getimagegeometry.php" class="index">Imagick::getImageGeometry</a> - Gets the width and height as an associative array</li>
        <li><a href="imagick.getimagegravity.php" class="index">Imagick::getImageGravity</a> - Gets the image gravity</li>
        <li><a href="imagick.getimagegreenprimary.php" class="index">Imagick::getImageGreenPrimary</a> - Returns the chromaticy green primary point</li>
        <li><a href="imagick.getimageheight.php" class="index">Imagick::getImageHeight</a> - Returns the image height</li>
        <li><a href="imagick.getimagehistogram.php" class="index">Imagick::getImageHistogram</a> - Gets the image histogram</li>
        <li><a href="imagick.getimageindex.php" class="index">Imagick::getImageIndex</a> - Gets the index of the current active image</li>
        <li><a href="imagick.getimageinterlacescheme.php" class="index">Imagick::getImageInterlaceScheme</a> - Gets the image interlace scheme</li>
        <li><a href="imagick.getimageinterpolatemethod.php" class="index">Imagick::getImageInterpolateMethod</a> - Returns the interpolation method</li>
        <li><a href="imagick.getimageiterations.php" class="index">Imagick::getImageIterations</a> - Gets the image iterations</li>
        <li><a href="imagick.getimagelength.php" class="index">Imagick::getImageLength</a> - Returns the image length in bytes</li>
        <li><a href="imagick.getimagematte.php" class="index">Imagick::getImageMatte</a> - Return if the image has a matte channel</li>
        <li><a href="imagick.getimagemattecolor.php" class="index">Imagick::getImageMatteColor</a> - Returns the image matte color</li>
        <li><a href="imagick.getimagemimetype.php" class="index">Imagick::getImageMimeType</a> - Returns the image mime-type</li>
        <li><a href="imagick.getimageorientation.php" class="index">Imagick::getImageOrientation</a> - Gets the image orientation</li>
        <li><a href="imagick.getimagepage.php" class="index">Imagick::getImagePage</a> - Returns the page geometry</li>
        <li><a href="imagick.getimagepixelcolor.php" class="index">Imagick::getImagePixelColor</a> - Returns the color of the specified pixel</li>
        <li><a href="imagick.getimageprofile.php" class="index">Imagick::getImageProfile</a> - Returns the named image profile</li>
        <li><a href="imagick.getimageprofiles.php" class="index">Imagick::getImageProfiles</a> - Returns the image profiles</li>
        <li><a href="imagick.getimageproperties.php" class="index">Imagick::getImageProperties</a> - Returns the image properties</li>
        <li><a href="imagick.getimageproperty.php" class="index">Imagick::getImageProperty</a> - Returns the named image property</li>
        <li><a href="imagick.getimageredprimary.php" class="index">Imagick::getImageRedPrimary</a> - Returns the chromaticity red primary point</li>
        <li><a href="imagick.getimageregion.php" class="index">Imagick::getImageRegion</a> - Extracts a region of the image</li>
        <li><a href="imagick.getimagerenderingintent.php" class="index">Imagick::getImageRenderingIntent</a> - Gets the image rendering intent</li>
        <li><a href="imagick.getimageresolution.php" class="index">Imagick::getImageResolution</a> - Gets the image X and Y resolution</li>
        <li><a href="imagick.getimagesblob.php" class="index">Imagick::getImagesBlob</a> - Returns all image sequences as a blob</li>
        <li><a href="imagick.getimagescene.php" class="index">Imagick::getImageScene</a> - Gets the image scene</li>
        <li><a href="imagick.getimagesignature.php" class="index">Imagick::getImageSignature</a> - Generates an SHA-256 message digest</li>
        <li><a href="imagick.getimagesize.php" class="index">Imagick::getImageSize</a> - Returns the image length in bytes</li>
        <li><a href="imagick.getimagetickspersecond.php" class="index">Imagick::getImageTicksPerSecond</a> - Gets the image ticks-per-second</li>
        <li><a href="imagick.getimagetotalinkdensity.php" class="index">Imagick::getImageTotalInkDensity</a> - Gets the image total ink density</li>
        <li><a href="imagick.getimagetype.php" class="index">Imagick::getImageType</a> - Gets the potential image type</li>
        <li><a href="imagick.getimageunits.php" class="index">Imagick::getImageUnits</a> - Gets the image units of resolution</li>
        <li><a href="imagick.getimagevirtualpixelmethod.php" class="index">Imagick::getImageVirtualPixelMethod</a> - Returns the virtual pixel method</li>
        <li><a href="imagick.getimagewhitepoint.php" class="index">Imagick::getImageWhitePoint</a> - Returns the chromaticity white point</li>
        <li><a href="imagick.getimagewidth.php" class="index">Imagick::getImageWidth</a> - Returns the image width</li>
        <li><a href="imagick.getinterlacescheme.php" class="index">Imagick::getInterlaceScheme</a> - Gets the object interlace scheme</li>
        <li><a href="imagick.getiteratorindex.php" class="index">Imagick::getIteratorIndex</a> - Gets the index of the current active image</li>
        <li><a href="imagick.getnumberimages.php" class="index">Imagick::getNumberImages</a> - Returns the number of images in the object</li>
        <li><a href="imagick.getoption.php" class="index">Imagick::getOption</a> - Returns a value associated with the specified key</li>
        <li><a href="imagick.getpackagename.php" class="index">Imagick::getPackageName</a> - Returns the ImageMagick package name</li>
        <li><a href="imagick.getpage.php" class="index">Imagick::getPage</a> - Returns the page geometry</li>
        <li><a href="imagick.getpixeliterator.php" class="index">Imagick::getPixelIterator</a> - Returns a MagickPixelIterator</li>
        <li><a href="imagick.getpixelregioniterator.php" class="index">Imagick::getPixelRegionIterator</a> - Get an ImagickPixelIterator for an image section</li>
        <li><a href="imagick.getpointsize.php" class="index">Imagick::getPointSize</a> - Gets point size</li>
        <li><a href="imagick.getquantum.php" class="index">Imagick::getQuantum</a> - Returns the ImageMagick quantum range</li>
        <li><a href="imagick.getquantumdepth.php" class="index">Imagick::getQuantumDepth</a> - Gets the quantum depth</li>
        <li><a href="imagick.getquantumrange.php" class="index">Imagick::getQuantumRange</a> - Returns the Imagick quantum range</li>
        <li><a href="imagick.getregistry.php" class="index">Imagick::getRegistry</a> - Get a StringRegistry entry</li>
        <li><a href="imagick.getreleasedate.php" class="index">Imagick::getReleaseDate</a> - Returns the ImageMagick release date</li>
        <li><a href="imagick.getresource.php" class="index">Imagick::getResource</a> - Returns the specified resource's memory usage</li>
        <li><a href="imagick.getresourcelimit.php" class="index">Imagick::getResourceLimit</a> - Returns the specified resource limit</li>
        <li><a href="imagick.getsamplingfactors.php" class="index">Imagick::getSamplingFactors</a> - Gets the horizontal and vertical sampling factor</li>
        <li><a href="imagick.getsize.php" class="index">Imagick::getSize</a> - Returns the size associated with the Imagick object</li>
        <li><a href="imagick.getsizeoffset.php" class="index">Imagick::getSizeOffset</a> - Returns the size offset</li>
        <li><a href="imagick.getversion.php" class="index">Imagick::getVersion</a> - Returns the ImageMagick API version</li>
        <li><a href="imagick.haldclutimage.php" class="index">Imagick::haldClutImage</a> - Replaces colors in the image</li>
        <li><a href="imagick.hasnextimage.php" class="index">Imagick::hasNextImage</a> - Checks if the object has more images</li>
        <li><a href="imagick.haspreviousimage.php" class="index">Imagick::hasPreviousImage</a> - Checks if the object has a previous image</li>
        <li><a href="imagick.identifyformat.php" class="index">Imagick::identifyFormat</a> - Formats a string with image details</li>
        <li><a href="imagick.identifyimage.php" class="index">Imagick::identifyImage</a> - Identifies an image and fetches attributes</li>
        <li><a href="imagick.implodeimage.php" class="index">Imagick::implodeImage</a> - Creates a new image as a copy</li>
        <li><a href="imagick.importimagepixels.php" class="index">Imagick::importImagePixels</a> - Imports image pixels</li>
        <li><a href="imagick.inversefouriertransformimage.php" class="index">Imagick::inverseFourierTransformImage</a> - Implements the inverse discrete Fourier transform (DFT)</li>
        <li><a href="imagick.labelimage.php" class="index">Imagick::labelImage</a> - Adds a label to an image</li>
        <li><a href="imagick.levelimage.php" class="index">Imagick::levelImage</a> - Adjusts the levels of an image</li>
        <li><a href="imagick.linearstretchimage.php" class="index">Imagick::linearStretchImage</a> - Stretches with saturation the image intensity</li>
        <li><a href="imagick.liquidrescaleimage.php" class="index">Imagick::liquidRescaleImage</a> - Animates an image or images</li>
        <li><a href="imagick.listregistry.php" class="index">Imagick::listRegistry</a> - List all the registry settings</li>
        <li><a href="imagick.magnifyimage.php" class="index">Imagick::magnifyImage</a> - Scales an image proportionally 2x</li>
        <li><a href="imagick.mapimage.php" class="index">Imagick::mapImage</a> - Replaces the colors of an image with the closest color from a reference image</li>
        <li><a href="imagick.mattefloodfillimage.php" class="index">Imagick::matteFloodfillImage</a> - Changes the transparency value of a color</li>
        <li><a href="imagick.medianfilterimage.php" class="index">Imagick::medianFilterImage</a> - Applies a digital filter</li>
        <li><a href="imagick.mergeimagelayers.php" class="index">Imagick::mergeImageLayers</a> - Merges image layers</li>
        <li><a href="imagick.minifyimage.php" class="index">Imagick::minifyImage</a> - Scales an image proportionally to half its size</li>
        <li><a href="imagick.modulateimage.php" class="index">Imagick::modulateImage</a> - Control the brightness, saturation, and hue</li>
        <li><a href="imagick.montageimage.php" class="index">Imagick::montageImage</a> - Creates a composite image</li>
        <li><a href="imagick.morphimages.php" class="index">Imagick::morphImages</a> - Method morphs a set of images</li>
        <li><a href="imagick.morphology.php" class="index">Imagick::morphology</a> - Applies a user supplied kernel to the image according to the given morphology method.</li>
        <li><a href="imagick.mosaicimages.php" class="index">Imagick::mosaicImages</a> - Forms a mosaic from images</li>
        <li><a href="imagick.motionblurimage.php" class="index">Imagick::motionBlurImage</a> - Simulates motion blur</li>
        <li><a href="imagick.negateimage.php" class="index">Imagick::negateImage</a> - Negates the colors in the reference image</li>
        <li><a href="imagick.newimage.php" class="index">Imagick::newImage</a> - Creates a new image</li>
        <li><a href="imagick.newpseudoimage.php" class="index">Imagick::newPseudoImage</a> - Creates a new image</li>
        <li><a href="imagick.nextimage.php" class="index">Imagick::nextImage</a> - Moves to the next image</li>
        <li><a href="imagick.normalizeimage.php" class="index">Imagick::normalizeImage</a> - Enhances the contrast of a color image</li>
        <li><a href="imagick.oilpaintimage.php" class="index">Imagick::oilPaintImage</a> - Simulates an oil painting</li>
        <li><a href="imagick.opaquepaintimage.php" class="index">Imagick::opaquePaintImage</a> - Changes the color value of any pixel that matches target</li>
        <li><a href="imagick.optimizeimagelayers.php" class="index">Imagick::optimizeImageLayers</a> - Removes repeated portions of images to optimize</li>
        <li><a href="imagick.orderedposterizeimage.php" class="index">Imagick::orderedPosterizeImage</a> - Performs an ordered dither</li>
        <li><a href="imagick.paintfloodfillimage.php" class="index">Imagick::paintFloodfillImage</a> - Changes the color value of any pixel that matches target</li>
        <li><a href="imagick.paintopaqueimage.php" class="index">Imagick::paintOpaqueImage</a> - Change any pixel that matches color</li>
        <li><a href="imagick.painttransparentimage.php" class="index">Imagick::paintTransparentImage</a> - Changes any pixel that matches color with the color defined by fill</li>
        <li><a href="imagick.pingimage.php" class="index">Imagick::pingImage</a> - Fetch basic attributes about the image</li>
        <li><a href="imagick.pingimageblob.php" class="index">Imagick::pingImageBlob</a> - Quickly fetch attributes</li>
        <li><a href="imagick.pingimagefile.php" class="index">Imagick::pingImageFile</a> - Get basic image attributes in a lightweight manner</li>
        <li><a href="imagick.polaroidimage.php" class="index">Imagick::polaroidImage</a> - Simulates a Polaroid picture</li>
        <li><a href="imagick.posterizeimage.php" class="index">Imagick::posterizeImage</a> - Reduces the image to a limited number of color level</li>
        <li><a href="imagick.previewimages.php" class="index">Imagick::previewImages</a> - Quickly pin-point appropriate parameters for image processing</li>
        <li><a href="imagick.previousimage.php" class="index">Imagick::previousImage</a> - Move to the previous image in the object</li>
        <li><a href="imagick.profileimage.php" class="index">Imagick::profileImage</a> - Adds or removes a profile from an image</li>
        <li><a href="imagick.quantizeimage.php" class="index">Imagick::quantizeImage</a> - Analyzes the colors within a reference image</li>
        <li><a href="imagick.quantizeimages.php" class="index">Imagick::quantizeImages</a> - Analyzes the colors within a sequence of images</li>
        <li><a href="imagick.queryfontmetrics.php" class="index">Imagick::queryFontMetrics</a> - Returns an array representing the font metrics</li>
        <li><a href="imagick.queryfonts.php" class="index">Imagick::queryFonts</a> - Returns the configured fonts</li>
        <li><a href="imagick.queryformats.php" class="index">Imagick::queryFormats</a> - Returns formats supported by Imagick</li>
        <li><a href="imagick.radialblurimage.php" class="index">Imagick::radialBlurImage</a> - Radial blurs an image</li>
        <li><a href="imagick.raiseimage.php" class="index">Imagick::raiseImage</a> - Creates a simulated 3d button-like effect</li>
        <li><a href="imagick.randomthresholdimage.php" class="index">Imagick::randomThresholdImage</a> - Creates a high-contrast, two-color image</li>
        <li><a href="imagick.readimage.php" class="index">Imagick::readImage</a> - Reads image from filename</li>
        <li><a href="imagick.readimageblob.php" class="index">Imagick::readImageBlob</a> - Reads image from a binary string</li>
        <li><a href="imagick.readimagefile.php" class="index">Imagick::readImageFile</a> - Reads image from open filehandle</li>
        <li><a href="imagick.readimages.php" class="index">Imagick::readimages</a> - Reads image from an array of filenames</li>
        <li><a href="imagick.recolorimage.php" class="index">Imagick::recolorImage</a> - Recolors image</li>
        <li><a href="imagick.reducenoiseimage.php" class="index">Imagick::reduceNoiseImage</a> - Smooths the contours of an image</li>
        <li><a href="imagick.remapimage.php" class="index">Imagick::remapImage</a> - Remaps image colors</li>
        <li><a href="imagick.removeimage.php" class="index">Imagick::removeImage</a> - Removes an image from the image list</li>
        <li><a href="imagick.removeimageprofile.php" class="index">Imagick::removeImageProfile</a> - Removes the named image profile and returns it</li>
        <li><a href="imagick.render.php" class="index">Imagick::render</a> - Renders all preceding drawing commands</li>
        <li><a href="imagick.resampleimage.php" class="index">Imagick::resampleImage</a> - Resample image to desired resolution</li>
        <li><a href="imagick.resetimagepage.php" class="index">Imagick::resetImagePage</a> - Reset image page</li>
        <li><a href="imagick.resizeimage.php" class="index">Imagick::resizeImage</a> - Scales an image</li>
        <li><a href="imagick.rollimage.php" class="index">Imagick::rollImage</a> - Offsets an image</li>
        <li><a href="imagick.rotateimage.php" class="index">Imagick::rotateImage</a> - Rotates an image</li>
        <li><a href="imagick.rotationalblurimage.php" class="index">Imagick::rotationalBlurImage</a> - Rotational blurs an image</li>
        <li><a href="imagick.roundcorners.php" class="index">Imagick::roundCorners</a> - Rounds image corners</li>
        <li><a href="imagick.sampleimage.php" class="index">Imagick::sampleImage</a> - Scales an image with pixel sampling</li>
        <li><a href="imagick.scaleimage.php" class="index">Imagick::scaleImage</a> - Scales the size of an image</li>
        <li><a href="imagick.segmentimage.php" class="index">Imagick::segmentImage</a> - Segments an image</li>
        <li><a href="imagick.selectiveblurimage.php" class="index">Imagick::selectiveBlurImage</a> - Selectively blur an image within a contrast threshold</li>
        <li><a href="imagick.separateimagechannel.php" class="index">Imagick::separateImageChannel</a> - Separates a channel from the image</li>
        <li><a href="imagick.sepiatoneimage.php" class="index">Imagick::sepiaToneImage</a> - Sepia tones an image</li>
        <li><a href="imagick.setbackgroundcolor.php" class="index">Imagick::setBackgroundColor</a> - Sets the object's default background color</li>
        <li><a href="imagick.setcolorspace.php" class="index">Imagick::setColorspace</a> - Set colorspace</li>
        <li><a href="imagick.setcompression.php" class="index">Imagick::setCompression</a> - Sets the object's default compression type</li>
        <li><a href="imagick.setcompressionquality.php" class="index">Imagick::setCompressionQuality</a> - Sets the object's default compression quality</li>
        <li><a href="imagick.setfilename.php" class="index">Imagick::setFilename</a> - Sets the filename before you read or write the image</li>
        <li><a href="imagick.setfirstiterator.php" class="index">Imagick::setFirstIterator</a> - Sets the Imagick iterator to the first image</li>
        <li><a href="imagick.setfont.php" class="index">Imagick::setFont</a> - Sets font</li>
        <li><a href="imagick.setformat.php" class="index">Imagick::setFormat</a> - Sets the format of the Imagick object</li>
        <li><a href="imagick.setgravity.php" class="index">Imagick::setGravity</a> - Sets the gravity</li>
        <li><a href="imagick.setimage.php" class="index">Imagick::setImage</a> - Replaces image in the object</li>
        <li><a href="imagick.setimagealphachannel.php" class="index">Imagick::setImageAlphaChannel</a> - Sets image alpha channel</li>
        <li><a href="imagick.setimageartifact.php" class="index">Imagick::setImageArtifact</a> - Set image artifact</li>
        <li><a href="imagick.setimageattribute.php" class="index">Imagick::setImageAttribute</a> - Sets an image attribute</li>
        <li><a href="imagick.setimagebackgroundcolor.php" class="index">Imagick::setImageBackgroundColor</a> - Sets the image background color</li>
        <li><a href="imagick.setimagebias.php" class="index">Imagick::setImageBias</a> - Sets the image bias for any method that convolves an image</li>
        <li><a href="imagick.setimagebiasquantum.php" class="index">Imagick::setImageBiasQuantum</a> - Sets the image bias</li>
        <li><a href="imagick.setimageblueprimary.php" class="index">Imagick::setImageBluePrimary</a> - Sets the image chromaticity blue primary point</li>
        <li><a href="imagick.setimagebordercolor.php" class="index">Imagick::setImageBorderColor</a> - Sets the image border color</li>
        <li><a href="imagick.setimagechanneldepth.php" class="index">Imagick::setImageChannelDepth</a> - Sets the depth of a particular image channel</li>
        <li><a href="imagick.setimageclipmask.php" class="index">Imagick::setImageClipMask</a> - Sets image clip mask</li>
        <li><a href="imagick.setimagecolormapcolor.php" class="index">Imagick::setImageColormapColor</a> - Sets the color of the specified colormap index</li>
        <li><a href="imagick.setimagecolorspace.php" class="index">Imagick::setImageColorspace</a> - Sets the image colorspace</li>
        <li><a href="imagick.setimagecompose.php" class="index">Imagick::setImageCompose</a> - Sets the image composite operator</li>
        <li><a href="imagick.setimagecompression.php" class="index">Imagick::setImageCompression</a> - Sets the image compression</li>
        <li><a href="imagick.setimagecompressionquality.php" class="index">Imagick::setImageCompressionQuality</a> - Sets the image compression quality</li>
        <li><a href="imagick.setimagedelay.php" class="index">Imagick::setImageDelay</a> - Sets the image delay</li>
        <li><a href="imagick.setimagedepth.php" class="index">Imagick::setImageDepth</a> - Sets the image depth</li>
        <li><a href="imagick.setimagedispose.php" class="index">Imagick::setImageDispose</a> - Sets the image disposal method</li>
        <li><a href="imagick.setimageextent.php" class="index">Imagick::setImageExtent</a> - Sets the image size</li>
        <li><a href="imagick.setimagefilename.php" class="index">Imagick::setImageFilename</a> - Sets the filename of a particular image</li>
        <li><a href="imagick.setimageformat.php" class="index">Imagick::setImageFormat</a> - Sets the format of a particular image</li>
        <li><a href="imagick.setimagegamma.php" class="index">Imagick::setImageGamma</a> - Sets the image gamma</li>
        <li><a href="imagick.setimagegravity.php" class="index">Imagick::setImageGravity</a> - Sets the image gravity</li>
        <li><a href="imagick.setimagegreenprimary.php" class="index">Imagick::setImageGreenPrimary</a> - Sets the image chromaticity green primary point</li>
        <li><a href="imagick.setimageindex.php" class="index">Imagick::setImageIndex</a> - Set the iterator position</li>
        <li><a href="imagick.setimageinterlacescheme.php" class="index">Imagick::setImageInterlaceScheme</a> - Sets the image compression</li>
        <li><a href="imagick.setimageinterpolatemethod.php" class="index">Imagick::setImageInterpolateMethod</a> - Sets the image interpolate pixel method</li>
        <li><a href="imagick.setimageiterations.php" class="index">Imagick::setImageIterations</a> - Sets the image iterations</li>
        <li><a href="imagick.setimagematte.php" class="index">Imagick::setImageMatte</a> - Sets the image matte channel</li>
        <li><a href="imagick.setimagemattecolor.php" class="index">Imagick::setImageMatteColor</a> - Sets the image matte color</li>
        <li><a href="imagick.setimageopacity.php" class="index">Imagick::setImageOpacity</a> - Sets the image opacity level</li>
        <li><a href="imagick.setimageorientation.php" class="index">Imagick::setImageOrientation</a> - Sets the image orientation</li>
        <li><a href="imagick.setimagepage.php" class="index">Imagick::setImagePage</a> - Sets the page geometry of the image</li>
        <li><a href="imagick.setimageprofile.php" class="index">Imagick::setImageProfile</a> - Adds a named profile to the Imagick object</li>
        <li><a href="imagick.setimageproperty.php" class="index">Imagick::setImageProperty</a> - Sets an image property</li>
        <li><a href="imagick.setimageredprimary.php" class="index">Imagick::setImageRedPrimary</a> - Sets the image chromaticity red primary point</li>
        <li><a href="imagick.setimagerenderingintent.php" class="index">Imagick::setImageRenderingIntent</a> - Sets the image rendering intent</li>
        <li><a href="imagick.setimageresolution.php" class="index">Imagick::setImageResolution</a> - Sets the image resolution</li>
        <li><a href="imagick.setimagescene.php" class="index">Imagick::setImageScene</a> - Sets the image scene</li>
        <li><a href="imagick.setimagetickspersecond.php" class="index">Imagick::setImageTicksPerSecond</a> - Sets the image ticks-per-second</li>
        <li><a href="imagick.setimagetype.php" class="index">Imagick::setImageType</a> - Sets the image type</li>
        <li><a href="imagick.setimageunits.php" class="index">Imagick::setImageUnits</a> - Sets the image units of resolution</li>
        <li><a href="imagick.setimagevirtualpixelmethod.php" class="index">Imagick::setImageVirtualPixelMethod</a> - Sets the image virtual pixel method</li>
        <li><a href="imagick.setimagewhitepoint.php" class="index">Imagick::setImageWhitePoint</a> - Sets the image chromaticity white point</li>
        <li><a href="imagick.setinterlacescheme.php" class="index">Imagick::setInterlaceScheme</a> - Sets the image compression</li>
        <li><a href="imagick.setiteratorindex.php" class="index">Imagick::setIteratorIndex</a> - Set the iterator position</li>
        <li><a href="imagick.setlastiterator.php" class="index">Imagick::setLastIterator</a> - Sets the Imagick iterator to the last image</li>
        <li><a href="imagick.setoption.php" class="index">Imagick::setOption</a> - Set an option</li>
        <li><a href="imagick.setpage.php" class="index">Imagick::setPage</a> - Sets the page geometry of the Imagick object</li>
        <li><a href="imagick.setpointsize.php" class="index">Imagick::setPointSize</a> - Sets point size</li>
        <li><a href="imagick.setprogressmonitor.php" class="index">Imagick::setProgressMonitor</a> - Set a callback to be called during processing</li>
        <li><a href="imagick.setregistry.php" class="index">Imagick::setRegistry</a> - Sets the ImageMagick registry entry named key to value</li>
        <li><a href="imagick.setresolution.php" class="index">Imagick::setResolution</a> - Sets the image resolution</li>
        <li><a href="imagick.setresourcelimit.php" class="index">Imagick::setResourceLimit</a> - Sets the limit for a particular resource</li>
        <li><a href="imagick.setsamplingfactors.php" class="index">Imagick::setSamplingFactors</a> - Sets the image sampling factors</li>
        <li><a href="imagick.setsize.php" class="index">Imagick::setSize</a> - Sets the size of the Imagick object</li>
        <li><a href="imagick.setsizeoffset.php" class="index">Imagick::setSizeOffset</a> - Sets the size and offset of the Imagick object</li>
        <li><a href="imagick.settype.php" class="index">Imagick::setType</a> - Sets the image type attribute</li>
        <li><a href="imagick.shadeimage.php" class="index">Imagick::shadeImage</a> - Creates a 3D effect</li>
        <li><a href="imagick.shadowimage.php" class="index">Imagick::shadowImage</a> - Simulates an image shadow</li>
        <li><a href="imagick.sharpenimage.php" class="index">Imagick::sharpenImage</a> - Sharpens an image</li>
        <li><a href="imagick.shaveimage.php" class="index">Imagick::shaveImage</a> - Shaves pixels from the image edges</li>
        <li><a href="imagick.shearimage.php" class="index">Imagick::shearImage</a> - Creating a parallelogram</li>
        <li><a href="imagick.sigmoidalcontrastimage.php" class="index">Imagick::sigmoidalContrastImage</a> - Adjusts the contrast of an image</li>
        <li><a href="imagick.sketchimage.php" class="index">Imagick::sketchImage</a> - Simulates a pencil sketch</li>
        <li><a href="imagick.smushimages.php" class="index">Imagick::smushImages</a> - Takes all images from the current image pointer to the end of the image list and smushs them</li>
        <li><a href="imagick.solarizeimage.php" class="index">Imagick::solarizeImage</a> - Applies a solarizing effect to the image</li>
        <li><a href="imagick.sparsecolorimage.php" class="index">Imagick::sparseColorImage</a> - Interpolates colors</li>
        <li><a href="imagick.spliceimage.php" class="index">Imagick::spliceImage</a> - Splices a solid color into the image</li>
        <li><a href="imagick.spreadimage.php" class="index">Imagick::spreadImage</a> - Randomly displaces each pixel in a block</li>
        <li><a href="imagick.statisticimage.php" class="index">Imagick::statisticImage</a> - Modifies image using a statistics function</li>
        <li><a href="imagick.steganoimage.php" class="index">Imagick::steganoImage</a> - Hides a digital watermark within the image</li>
        <li><a href="imagick.stereoimage.php" class="index">Imagick::stereoImage</a> - Composites two images</li>
        <li><a href="imagick.stripimage.php" class="index">Imagick::stripImage</a> - Strips an image of all profiles and comments</li>
        <li><a href="imagick.subimagematch.php" class="index">Imagick::subImageMatch</a> - Searches for a subimage in the current image and returns a similarity image</li>
        <li><a href="imagick.swirlimage.php" class="index">Imagick::swirlImage</a> - Swirls the pixels about the center of the image</li>
        <li><a href="imagick.textureimage.php" class="index">Imagick::textureImage</a> - Repeatedly tiles the texture image</li>
        <li><a href="imagick.thresholdimage.php" class="index">Imagick::thresholdImage</a> - Changes the value of individual pixels based on a threshold</li>
        <li><a href="imagick.thumbnailimage.php" class="index">Imagick::thumbnailImage</a> - Changes the size of an image</li>
        <li><a href="imagick.tintimage.php" class="index">Imagick::tintImage</a> - Applies a color vector to each pixel in the image</li>
        <li><a href="imagick.transformimage.php" class="index">Imagick::transformImage</a> - Convenience method for setting crop size and the image geometry</li>
        <li><a href="imagick.transformimagecolorspace.php" class="index">Imagick::transformImageColorspace</a> - Transforms an image to a new colorspace</li>
        <li><a href="imagick.transparentpaintimage.php" class="index">Imagick::transparentPaintImage</a> - Paints pixels transparent</li>
        <li><a href="imagick.transposeimage.php" class="index">Imagick::transposeImage</a> - Creates a vertical mirror image</li>
        <li><a href="imagick.transverseimage.php" class="index">Imagick::transverseImage</a> - Creates a horizontal mirror image</li>
        <li><a href="imagick.trimimage.php" class="index">Imagick::trimImage</a> - Remove edges from the image</li>
        <li><a href="imagick.uniqueimagecolors.php" class="index">Imagick::uniqueImageColors</a> - Discards all but one of any pixel color</li>
        <li><a href="imagick.unsharpmaskimage.php" class="index">Imagick::unsharpMaskImage</a> - Sharpens an image</li>
        <li><a href="imagick.valid.php" class="index">Imagick::valid</a> - Checks if the current item is valid</li>
        <li><a href="imagick.vignetteimage.php" class="index">Imagick::vignetteImage</a> - Adds vignette filter to the image</li>
        <li><a href="imagick.waveimage.php" class="index">Imagick::waveImage</a> - Applies wave filter to the image</li>
        <li><a href="imagick.whitethresholdimage.php" class="index">Imagick::whiteThresholdImage</a> - Force all pixels above the threshold into white</li>
        <li><a href="imagick.writeimage.php" class="index">Imagick::writeImage</a> - Writes an image to the specified filename</li>
        <li><a href="imagick.writeimagefile.php" class="index">Imagick::writeImageFile</a> - Writes an image to a filehandle</li>
        <li><a href="imagick.writeimages.php" class="index">Imagick::writeImages</a> - Writes an image or image sequence</li>
        <li><a href="imagick.writeimagesfile.php" class="index">Imagick::writeImagesFile</a> - Writes frames to a filehandle</li>
        <li><a href="imagick.construct.php" class="index">Imagick::__construct</a> - The Imagick constructor</li>
        <li><a href="imagick.tostring.php" class="index">Imagick::__toString</a> - Returns the image as a string</li>
        <li><a href="imagickdraw.affine.php" class="index">ImagickDraw::affine</a> - Adjusts the current affine transformation matrix</li>
        <li><a href="imagickdraw.annotation.php" class="index">ImagickDraw::annotation</a> - Draws text on the image</li>
        <li><a href="imagickdraw.arc.php" class="index">ImagickDraw::arc</a> - Draws an arc</li>
        <li><a href="imagickdraw.bezier.php" class="index">ImagickDraw::bezier</a> - Draws a bezier curve</li>
        <li><a href="imagickdraw.circle.php" class="index">ImagickDraw::circle</a> - Draws a circle</li>
        <li><a href="imagickdraw.clear.php" class="index">ImagickDraw::clear</a> - Clears the ImagickDraw</li>
        <li><a href="imagickdraw.clone.php" class="index">ImagickDraw::clone</a> - Makes an exact copy of the specified ImagickDraw object</li>
        <li><a href="imagickdraw.color.php" class="index">ImagickDraw::color</a> - Draws color on image</li>
        <li><a href="imagickdraw.comment.php" class="index">ImagickDraw::comment</a> - Adds a comment</li>
        <li><a href="imagickdraw.composite.php" class="index">ImagickDraw::composite</a> - Composites an image onto the current image</li>
        <li><a href="imagickdraw.destroy.php" class="index">ImagickDraw::destroy</a> - Frees all associated resources</li>
        <li><a href="imagickdraw.ellipse.php" class="index">ImagickDraw::ellipse</a> - Draws an ellipse on the image</li>
        <li><a href="imagickdraw.getclippath.php" class="index">ImagickDraw::getClipPath</a> - Obtains the current clipping path ID</li>
        <li><a href="imagickdraw.getcliprule.php" class="index">ImagickDraw::getClipRule</a> - Returns the current polygon fill rule</li>
        <li><a href="imagickdraw.getclipunits.php" class="index">ImagickDraw::getClipUnits</a> - Returns the interpretation of clip path units</li>
        <li><a href="imagickdraw.getfillcolor.php" class="index">ImagickDraw::getFillColor</a> - Returns the fill color</li>
        <li><a href="imagickdraw.getfillopacity.php" class="index">ImagickDraw::getFillOpacity</a> - Returns the opacity used when drawing</li>
        <li><a href="imagickdraw.getfillrule.php" class="index">ImagickDraw::getFillRule</a> - Returns the fill rule</li>
        <li><a href="imagickdraw.getfont.php" class="index">ImagickDraw::getFont</a> - Returns the font</li>
        <li><a href="imagickdraw.getfontfamily.php" class="index">ImagickDraw::getFontFamily</a> - Returns the font family</li>
        <li><a href="imagickdraw.getfontsize.php" class="index">ImagickDraw::getFontSize</a> - Returns the font pointsize</li>
        <li><a href="imagickdraw.getfontstretch.php" class="index">ImagickDraw::getFontStretch</a> - Gets the font stretch to use when annotating with text</li>
        <li><a href="imagickdraw.getfontstyle.php" class="index">ImagickDraw::getFontStyle</a> - Returns the font style</li>
        <li><a href="imagickdraw.getfontweight.php" class="index">ImagickDraw::getFontWeight</a> - Returns the font weight</li>
        <li><a href="imagickdraw.getgravity.php" class="index">ImagickDraw::getGravity</a> - Returns the text placement gravity</li>
        <li><a href="imagickdraw.getstrokeantialias.php" class="index">ImagickDraw::getStrokeAntialias</a> - Returns the current stroke antialias setting</li>
        <li><a href="imagickdraw.getstrokecolor.php" class="index">ImagickDraw::getStrokeColor</a> - Returns the color used for stroking object outlines</li>
        <li><a href="imagickdraw.getstrokedasharray.php" class="index">ImagickDraw::getStrokeDashArray</a> - Returns an array representing the pattern of dashes and gaps used to stroke paths</li>
        <li><a href="imagickdraw.getstrokedashoffset.php" class="index">ImagickDraw::getStrokeDashOffset</a> - Returns the offset into the dash pattern to start the dash</li>
        <li><a href="imagickdraw.getstrokelinecap.php" class="index">ImagickDraw::getStrokeLineCap</a> - Returns the shape to be used at the end of open subpaths when they are stroked</li>
        <li><a href="imagickdraw.getstrokelinejoin.php" class="index">ImagickDraw::getStrokeLineJoin</a> - Returns the shape to be used at the corners of paths when they are stroked</li>
        <li><a href="imagickdraw.getstrokemiterlimit.php" class="index">ImagickDraw::getStrokeMiterLimit</a> - Returns the stroke miter limit</li>
        <li><a href="imagickdraw.getstrokeopacity.php" class="index">ImagickDraw::getStrokeOpacity</a> - Returns the opacity of stroked object outlines</li>
        <li><a href="imagickdraw.getstrokewidth.php" class="index">ImagickDraw::getStrokeWidth</a> - Returns the width of the stroke used to draw object outlines</li>
        <li><a href="imagickdraw.gettextalignment.php" class="index">ImagickDraw::getTextAlignment</a> - Returns the text alignment</li>
        <li><a href="imagickdraw.gettextantialias.php" class="index">ImagickDraw::getTextAntialias</a> - Returns the current text antialias setting</li>
        <li><a href="imagickdraw.gettextdecoration.php" class="index">ImagickDraw::getTextDecoration</a> - Returns the text decoration</li>
        <li><a href="imagickdraw.gettextencoding.php" class="index">ImagickDraw::getTextEncoding</a> - Returns the code set used for text annotations</li>
        <li><a href="imagickdraw.gettextinterlinespacing.php" class="index">ImagickDraw::getTextInterlineSpacing</a> - Gets the text interword spacing</li>
        <li><a href="imagickdraw.gettextinterwordspacing.php" class="index">ImagickDraw::getTextInterwordSpacing</a> - Gets the text interword spacing</li>
        <li><a href="imagickdraw.gettextkerning.php" class="index">ImagickDraw::getTextKerning</a> - Gets the text kerning</li>
        <li><a href="imagickdraw.gettextundercolor.php" class="index">ImagickDraw::getTextUnderColor</a> - Returns the text under color</li>
        <li><a href="imagickdraw.getvectorgraphics.php" class="index">ImagickDraw::getVectorGraphics</a> - Returns a string containing vector graphics</li>
        <li><a href="imagickdraw.line.php" class="index">ImagickDraw::line</a> - Draws a line</li>
        <li><a href="imagickdraw.matte.php" class="index">ImagickDraw::matte</a> - Paints on the image's opacity channel</li>
        <li><a href="imagickdraw.pathclose.php" class="index">ImagickDraw::pathClose</a> - Adds a path element to the current path</li>
        <li><a href="imagickdraw.pathcurvetoabsolute.php" class="index">ImagickDraw::pathCurveToAbsolute</a> - Draws a cubic Bezier curve</li>
        <li><a href="imagickdraw.pathcurvetoquadraticbezierabsolute.php" class="index">ImagickDraw::pathCurveToQuadraticBezierAbsolute</a> - Draws a quadratic Bezier curve</li>
        <li><a href="imagickdraw.pathcurvetoquadraticbezierrelative.php" class="index">ImagickDraw::pathCurveToQuadraticBezierRelative</a> - Draws a quadratic Bezier curve</li>
        <li><a href="imagickdraw.pathcurvetoquadraticbeziersmoothabsolute.php" class="index">ImagickDraw::pathCurveToQuadraticBezierSmoothAbsolute</a> - Draws a quadratic Bezier curve</li>
        <li><a href="imagickdraw.pathcurvetoquadraticbeziersmoothrelative.php" class="index">ImagickDraw::pathCurveToQuadraticBezierSmoothRelative</a> - Draws a quadratic Bezier curve</li>
        <li><a href="imagickdraw.pathcurvetorelative.php" class="index">ImagickDraw::pathCurveToRelative</a> - Draws a cubic Bezier curve</li>
        <li><a href="imagickdraw.pathcurvetosmoothabsolute.php" class="index">ImagickDraw::pathCurveToSmoothAbsolute</a> - Draws a cubic Bezier curve</li>
        <li><a href="imagickdraw.pathcurvetosmoothrelative.php" class="index">ImagickDraw::pathCurveToSmoothRelative</a> - Draws a cubic Bezier curve</li>
        <li><a href="imagickdraw.pathellipticarcabsolute.php" class="index">ImagickDraw::pathEllipticArcAbsolute</a> - Draws an elliptical arc</li>
        <li><a href="imagickdraw.pathellipticarcrelative.php" class="index">ImagickDraw::pathEllipticArcRelative</a> - Draws an elliptical arc</li>
        <li><a href="imagickdraw.pathfinish.php" class="index">ImagickDraw::pathFinish</a> - Terminates the current path</li>
        <li><a href="imagickdraw.pathlinetoabsolute.php" class="index">ImagickDraw::pathLineToAbsolute</a> - Draws a line path</li>
        <li><a href="imagickdraw.pathlinetohorizontalabsolute.php" class="index">ImagickDraw::pathLineToHorizontalAbsolute</a> - Draws a horizontal line path</li>
        <li><a href="imagickdraw.pathlinetohorizontalrelative.php" class="index">ImagickDraw::pathLineToHorizontalRelative</a> - Draws a horizontal line</li>
        <li><a href="imagickdraw.pathlinetorelative.php" class="index">ImagickDraw::pathLineToRelative</a> - Draws a line path</li>
        <li><a href="imagickdraw.pathlinetoverticalabsolute.php" class="index">ImagickDraw::pathLineToVerticalAbsolute</a> - Draws a vertical line</li>
        <li><a href="imagickdraw.pathlinetoverticalrelative.php" class="index">ImagickDraw::pathLineToVerticalRelative</a> - Draws a vertical line path</li>
        <li><a href="imagickdraw.pathmovetoabsolute.php" class="index">ImagickDraw::pathMoveToAbsolute</a> - Starts a new sub-path</li>
        <li><a href="imagickdraw.pathmovetorelative.php" class="index">ImagickDraw::pathMoveToRelative</a> - Starts a new sub-path</li>
        <li><a href="imagickdraw.pathstart.php" class="index">ImagickDraw::pathStart</a> - Declares the start of a path drawing list</li>
        <li><a href="imagickdraw.point.php" class="index">ImagickDraw::point</a> - Draws a point</li>
        <li><a href="imagickdraw.polygon.php" class="index">ImagickDraw::polygon</a> - Draws a polygon</li>
        <li><a href="imagickdraw.polyline.php" class="index">ImagickDraw::polyline</a> - Draws a polyline</li>
        <li><a href="imagickdraw.pop.php" class="index">ImagickDraw::pop</a> - Destroys the current ImagickDraw in the stack, and returns to the previously pushed ImagickDraw</li>
        <li><a href="imagickdraw.popclippath.php" class="index">ImagickDraw::popClipPath</a> - Terminates a clip path definition</li>
        <li><a href="imagickdraw.popdefs.php" class="index">ImagickDraw::popDefs</a> - Terminates a definition list</li>
        <li><a href="imagickdraw.poppattern.php" class="index">ImagickDraw::popPattern</a> - Terminates a pattern definition</li>
        <li><a href="imagickdraw.push.php" class="index">ImagickDraw::push</a> - Clones the current ImagickDraw and pushes it to the stack</li>
        <li><a href="imagickdraw.pushclippath.php" class="index">ImagickDraw::pushClipPath</a> - Starts a clip path definition</li>
        <li><a href="imagickdraw.pushdefs.php" class="index">ImagickDraw::pushDefs</a> - Indicates that following commands create named elements for early processing</li>
        <li><a href="imagickdraw.pushpattern.php" class="index">ImagickDraw::pushPattern</a> - Indicates that subsequent commands up to a ImagickDraw::opPattern() command comprise the definition of a named pattern</li>
        <li><a href="imagickdraw.rectangle.php" class="index">ImagickDraw::rectangle</a> - Draws a rectangle</li>
        <li><a href="imagickdraw.render.php" class="index">ImagickDraw::render</a> - Renders all preceding drawing commands onto the image</li>
        <li><a href="imagickdraw.resetvectorgraphics.php" class="index">ImagickDraw::resetVectorGraphics</a> - Resets the vector graphics</li>
        <li><a href="imagickdraw.rotate.php" class="index">ImagickDraw::rotate</a> - Applies the specified rotation to the current coordinate space</li>
        <li><a href="imagickdraw.roundrectangle.php" class="index">ImagickDraw::roundRectangle</a> - Draws a rounded rectangle</li>
        <li><a href="imagickdraw.scale.php" class="index">ImagickDraw::scale</a> - Adjusts the scaling factor</li>
        <li><a href="imagickdraw.setclippath.php" class="index">ImagickDraw::setClipPath</a> - Associates a named clipping path with the image</li>
        <li><a href="imagickdraw.setcliprule.php" class="index">ImagickDraw::setClipRule</a> - Set the polygon fill rule to be used by the clipping path</li>
        <li><a href="imagickdraw.setclipunits.php" class="index">ImagickDraw::setClipUnits</a> - Sets the interpretation of clip path units</li>
        <li><a href="imagickdraw.setfillalpha.php" class="index">ImagickDraw::setFillAlpha</a> - Sets the opacity to use when drawing using the fill color or fill texture</li>
        <li><a href="imagickdraw.setfillcolor.php" class="index">ImagickDraw::setFillColor</a> - Sets the fill color to be used for drawing filled objects</li>
        <li><a href="imagickdraw.setfillopacity.php" class="index">ImagickDraw::setFillOpacity</a> - Sets the opacity to use when drawing using the fill color or fill texture</li>
        <li><a href="imagickdraw.setfillpatternurl.php" class="index">ImagickDraw::setFillPatternURL</a> - Sets the URL to use as a fill pattern for filling objects</li>
        <li><a href="imagickdraw.setfillrule.php" class="index">ImagickDraw::setFillRule</a> - Sets the fill rule to use while drawing polygons</li>
        <li><a href="imagickdraw.setfont.php" class="index">ImagickDraw::setFont</a> - Sets the fully-specified font to use when annotating with text</li>
        <li><a href="imagickdraw.setfontfamily.php" class="index">ImagickDraw::setFontFamily</a> - Sets the font family to use when annotating with text</li>
        <li><a href="imagickdraw.setfontsize.php" class="index">ImagickDraw::setFontSize</a> - Sets the font pointsize to use when annotating with text</li>
        <li><a href="imagickdraw.setfontstretch.php" class="index">ImagickDraw::setFontStretch</a> - Sets the font stretch to use when annotating with text</li>
        <li><a href="imagickdraw.setfontstyle.php" class="index">ImagickDraw::setFontStyle</a> - Sets the font style to use when annotating with text</li>
        <li><a href="imagickdraw.setfontweight.php" class="index">ImagickDraw::setFontWeight</a> - Sets the font weight</li>
        <li><a href="imagickdraw.setgravity.php" class="index">ImagickDraw::setGravity</a> - Sets the text placement gravity</li>
        <li><a href="imagickdraw.setresolution.php" class="index">ImagickDraw::setResolution</a> - Sets the resolution</li>
        <li><a href="imagickdraw.setstrokealpha.php" class="index">ImagickDraw::setStrokeAlpha</a> - Specifies the opacity of stroked object outlines</li>
        <li><a href="imagickdraw.setstrokeantialias.php" class="index">ImagickDraw::setStrokeAntialias</a> - Controls whether stroked outlines are antialiased</li>
        <li><a href="imagickdraw.setstrokecolor.php" class="index">ImagickDraw::setStrokeColor</a> - Sets the color used for stroking object outlines</li>
        <li><a href="imagickdraw.setstrokedasharray.php" class="index">ImagickDraw::setStrokeDashArray</a> - Specifies the pattern of dashes and gaps used to stroke paths</li>
        <li><a href="imagickdraw.setstrokedashoffset.php" class="index">ImagickDraw::setStrokeDashOffset</a> - Specifies the offset into the dash pattern to start the dash</li>
        <li><a href="imagickdraw.setstrokelinecap.php" class="index">ImagickDraw::setStrokeLineCap</a> - Specifies the shape to be used at the end of open subpaths when they are stroked</li>
        <li><a href="imagickdraw.setstrokelinejoin.php" class="index">ImagickDraw::setStrokeLineJoin</a> - Specifies the shape to be used at the corners of paths when they are stroked</li>
        <li><a href="imagickdraw.setstrokemiterlimit.php" class="index">ImagickDraw::setStrokeMiterLimit</a> - Specifies the miter limit</li>
        <li><a href="imagickdraw.setstrokeopacity.php" class="index">ImagickDraw::setStrokeOpacity</a> - Specifies the opacity of stroked object outlines</li>
        <li><a href="imagickdraw.setstrokepatternurl.php" class="index">ImagickDraw::setStrokePatternURL</a> - Sets the pattern used for stroking object outlines</li>
        <li><a href="imagickdraw.setstrokewidth.php" class="index">ImagickDraw::setStrokeWidth</a> - Sets the width of the stroke used to draw object outlines</li>
        <li><a href="imagickdraw.settextalignment.php" class="index">ImagickDraw::setTextAlignment</a> - Specifies a text alignment</li>
        <li><a href="imagickdraw.settextantialias.php" class="index">ImagickDraw::setTextAntialias</a> - Controls whether text is antialiased</li>
        <li><a href="imagickdraw.settextdecoration.php" class="index">ImagickDraw::setTextDecoration</a> - Specifies a decoration</li>
        <li><a href="imagickdraw.settextencoding.php" class="index">ImagickDraw::setTextEncoding</a> - Specifies the text code set</li>
        <li><a href="imagickdraw.settextinterlinespacing.php" class="index">ImagickDraw::setTextInterlineSpacing</a> - Sets the text interline spacing</li>
        <li><a href="imagickdraw.settextinterwordspacing.php" class="index">ImagickDraw::setTextInterwordSpacing</a> - Sets the text interword spacing</li>
        <li><a href="imagickdraw.settextkerning.php" class="index">ImagickDraw::setTextKerning</a> - Sets the text kerning</li>
        <li><a href="imagickdraw.settextundercolor.php" class="index">ImagickDraw::setTextUnderColor</a> - Specifies the color of a background rectangle</li>
        <li><a href="imagickdraw.setvectorgraphics.php" class="index">ImagickDraw::setVectorGraphics</a> - Sets the vector graphics</li>
        <li><a href="imagickdraw.setviewbox.php" class="index">ImagickDraw::setViewbox</a> - Sets the overall canvas size</li>
        <li><a href="imagickdraw.skewx.php" class="index">ImagickDraw::skewX</a> - Skews the current coordinate system in the horizontal direction</li>
        <li><a href="imagickdraw.skewy.php" class="index">ImagickDraw::skewY</a> - Skews the current coordinate system in the vertical direction</li>
        <li><a href="imagickdraw.translate.php" class="index">ImagickDraw::translate</a> - Applies a translation to the current coordinate system</li>
        <li><a href="imagickdraw.construct.php" class="index">ImagickDraw::__construct</a> - The ImagickDraw constructor</li>
        <li><a href="imagickkernel.addkernel.php" class="index">ImagickKernel::addKernel</a> - Attach another kernel to a kernel list</li>
        <li><a href="imagickkernel.addunitykernel.php" class="index">ImagickKernel::addUnityKernel</a> - Adds a Unity Kernel to the kernel list</li>
        <li><a href="imagickkernel.frombuiltin.php" class="index">ImagickKernel::fromBuiltIn</a> - Create a kernel from a builtin in kernel</li>
        <li><a href="imagickkernel.frommatrix.php" class="index">ImagickKernel::fromMatrix</a> - Create a kernel from a 2d matrix of values</li>
        <li><a href="imagickkernel.getmatrix.php" class="index">ImagickKernel::getMatrix</a> - Get the 2d matrix of values used in this kernel</li>
        <li><a href="imagickkernel.scale.php" class="index">ImagickKernel::scale</a> - Scales a kernel list by the given amount</li>
        <li><a href="imagickkernel.separate.php" class="index">ImagickKernel::separate</a> - Separates a linked set of kernels and returns an array of ImagickKernels</li>
        <li><a href="imagickpixel.clear.php" class="index">ImagickPixel::clear</a> - Clears resources associated with this object</li>
        <li><a href="imagickpixel.destroy.php" class="index">ImagickPixel::destroy</a> - Deallocates resources associated with this object</li>
        <li><a href="imagickpixel.getcolor.php" class="index">ImagickPixel::getColor</a> - Returns the color</li>
        <li><a href="imagickpixel.getcolorasstring.php" class="index">ImagickPixel::getColorAsString</a> - Returns the color as a string</li>
        <li><a href="imagickpixel.getcolorcount.php" class="index">ImagickPixel::getColorCount</a> - Returns the color count associated with this color</li>
        <li><a href="imagickpixel.getcolorquantum.php" class="index">ImagickPixel::getColorQuantum</a> - Returns the color of the pixel in an array as Quantum values</li>
        <li><a href="imagickpixel.getcolorvalue.php" class="index">ImagickPixel::getColorValue</a> - Gets the normalized value of the provided color channel</li>
        <li><a href="imagickpixel.getcolorvaluequantum.php" class="index">ImagickPixel::getColorValueQuantum</a> - Gets the quantum value of a color in the ImagickPixel</li>
        <li><a href="imagickpixel.gethsl.php" class="index">ImagickPixel::getHSL</a> - Returns the normalized HSL color of the ImagickPixel object</li>
        <li><a href="imagickpixel.getindex.php" class="index">ImagickPixel::getIndex</a> - Gets the colormap index of the pixel wand</li>
        <li><a href="imagickpixel.ispixelsimilar.php" class="index">ImagickPixel::isPixelSimilar</a> - Check the distance between this color and another</li>
        <li><a href="imagickpixel.ispixelsimilarquantum.php" class="index">ImagickPixel::isPixelSimilarQuantum</a> - Returns whether two colors differ by less than the specified distance</li>
        <li><a href="imagickpixel.issimilar.php" class="index">ImagickPixel::isSimilar</a> - Check the distance between this color and another</li>
        <li><a href="imagickpixel.setcolor.php" class="index">ImagickPixel::setColor</a> - Sets the color</li>
        <li><a href="imagickpixel.setcolorcount.php" class="index">ImagickPixel::setColorCount</a> - Sets the color count associated with this color</li>
        <li><a href="imagickpixel.setcolorvalue.php" class="index">ImagickPixel::setColorValue</a> - Sets the normalized value of one of the channels</li>
        <li><a href="imagickpixel.setcolorvaluequantum.php" class="index">ImagickPixel::setColorValueQuantum</a> - Sets the quantum value of a color element of the ImagickPixel</li>
        <li><a href="imagickpixel.sethsl.php" class="index">ImagickPixel::setHSL</a> - Sets the normalized HSL color</li>
        <li><a href="imagickpixel.setindex.php" class="index">ImagickPixel::setIndex</a> - Sets the colormap index of the pixel wand</li>
        <li><a href="imagickpixel.construct.php" class="index">ImagickPixel::__construct</a> - The ImagickPixel constructor</li>
        <li><a href="imagickpixeliterator.clear.php" class="index">ImagickPixelIterator::clear</a> - Clear resources associated with a PixelIterator</li>
        <li><a href="imagickpixeliterator.destroy.php" class="index">ImagickPixelIterator::destroy</a> - Deallocates resources associated with a PixelIterator</li>
        <li><a href="imagickpixeliterator.getcurrentiteratorrow.php" class="index">ImagickPixelIterator::getCurrentIteratorRow</a> - Returns the current row of ImagickPixel objects</li>
        <li><a href="imagickpixeliterator.getiteratorrow.php" class="index">ImagickPixelIterator::getIteratorRow</a> - Returns the current pixel iterator row</li>
        <li><a href="imagickpixeliterator.getnextiteratorrow.php" class="index">ImagickPixelIterator::getNextIteratorRow</a> - Returns the next row of the pixel iterator</li>
        <li><a href="imagickpixeliterator.getpreviousiteratorrow.php" class="index">ImagickPixelIterator::getPreviousIteratorRow</a> - Returns the previous row</li>
        <li><a href="imagickpixeliterator.newpixeliterator.php" class="index">ImagickPixelIterator::newPixelIterator</a> - Returns a new pixel iterator</li>
        <li><a href="imagickpixeliterator.newpixelregioniterator.php" class="index">ImagickPixelIterator::newPixelRegionIterator</a> - Returns a new pixel iterator</li>
        <li><a href="imagickpixeliterator.resetiterator.php" class="index">ImagickPixelIterator::resetIterator</a> - Resets the pixel iterator</li>
        <li><a href="imagickpixeliterator.setiteratorfirstrow.php" class="index">ImagickPixelIterator::setIteratorFirstRow</a> - Sets the pixel iterator to the first pixel row</li>
        <li><a href="imagickpixeliterator.setiteratorlastrow.php" class="index">ImagickPixelIterator::setIteratorLastRow</a> - Sets the pixel iterator to the last pixel row</li>
        <li><a href="imagickpixeliterator.setiteratorrow.php" class="index">ImagickPixelIterator::setIteratorRow</a> - Set the pixel iterator row</li>
        <li><a href="imagickpixeliterator.synciterator.php" class="index">ImagickPixelIterator::syncIterator</a> - Syncs the pixel iterator</li>
        <li><a href="imagickpixeliterator.construct.php" class="index">ImagickPixelIterator::__construct</a> - The ImagickPixelIterator constructor</li>
        <li><a href="function.imap-8bit.php" class="index">imap_8bit</a> - Convert an 8bit string to a quoted-printable string</li>
        <li><a href="function.imap-alerts.php" class="index">imap_alerts</a> - Returns all IMAP alert messages that have occurred</li>
        <li><a href="function.imap-append.php" class="index">imap_append</a> - Append a string message to a specified mailbox</li>
        <li><a href="function.imap-base64.php" class="index">imap_base64</a> - Decode BASE64 encoded text</li>
        <li><a href="function.imap-binary.php" class="index">imap_binary</a> - Convert an 8bit string to a base64 string</li>
        <li><a href="function.imap-body.php" class="index">imap_body</a> - Read the message body</li>
        <li><a href="function.imap-bodystruct.php" class="index">imap_bodystruct</a> - Read the structure of a specified body section of a specific message</li>
        <li><a href="function.imap-check.php" class="index">imap_check</a> - Check current mailbox</li>
        <li><a href="function.imap-clearflag-full.php" class="index">imap_clearflag_full</a> - Clears flags on messages</li>
        <li><a href="function.imap-close.php" class="index">imap_close</a> - Close an IMAP stream</li>
        <li><a href="function.imap-create.php" class="index">imap_create</a> - Alias of imap_createmailbox</li>
        <li><a href="function.imap-createmailbox.php" class="index">imap_createmailbox</a> - Create a new mailbox</li>
        <li><a href="function.imap-delete.php" class="index">imap_delete</a> - Mark a message for deletion from current mailbox</li>
        <li><a href="function.imap-deletemailbox.php" class="index">imap_deletemailbox</a> - Delete a mailbox</li>
        <li><a href="function.imap-errors.php" class="index">imap_errors</a> - Returns all of the IMAP errors that have occurred</li>
        <li><a href="function.imap-expunge.php" class="index">imap_expunge</a> - Delete all messages marked for deletion</li>
        <li><a href="function.imap-fetchbody.php" class="index">imap_fetchbody</a> - Fetch a particular section of the body of the message</li>
        <li><a href="function.imap-fetchheader.php" class="index">imap_fetchheader</a> - Returns header for a message</li>
        <li><a href="function.imap-fetchmime.php" class="index">imap_fetchmime</a> - Fetch MIME headers for a particular section of the message</li>
        <li><a href="function.imap-fetchstructure.php" class="index">imap_fetchstructure</a> - Read the structure of a particular message</li>
        <li><a href="function.imap-fetchtext.php" class="index">imap_fetchtext</a> - Alias of imap_body</li>
        <li><a href="function.imap-fetch-overview.php" class="index">imap_fetch_overview</a> - Read an overview of the information in the headers of the given message</li>
        <li><a href="function.imap-gc.php" class="index">imap_gc</a> - Clears IMAP cache</li>
        <li><a href="function.imap-getacl.php" class="index">imap_getacl</a> - Gets the ACL for a given mailbox</li>
        <li><a href="function.imap-getmailboxes.php" class="index">imap_getmailboxes</a> - Read the list of mailboxes, returning detailed information on each one</li>
        <li><a href="function.imap-getsubscribed.php" class="index">imap_getsubscribed</a> - List all the subscribed mailboxes</li>
        <li><a href="function.imap-get-quota.php" class="index">imap_get_quota</a> - Retrieve the quota level settings, and usage statics per mailbox</li>
        <li><a href="function.imap-get-quotaroot.php" class="index">imap_get_quotaroot</a> - Retrieve the quota settings per user</li>
        <li><a href="function.imap-header.php" class="index">imap_header</a> - Alias of imap_headerinfo</li>
        <li><a href="function.imap-headerinfo.php" class="index">imap_headerinfo</a> - Read the header of the message</li>
        <li><a href="function.imap-headers.php" class="index">imap_headers</a> - Returns headers for all messages in a mailbox</li>
        <li><a href="function.imap-is-open.php" class="index">imap_is_open</a> - Check if the IMAP stream is still valid</li>
        <li><a href="function.imap-last-error.php" class="index">imap_last_error</a> - Gets the last IMAP error that occurred during this page request</li>
        <li><a href="function.imap-list.php" class="index">imap_list</a> - Read the list of mailboxes</li>
        <li><a href="function.imap-listmailbox.php" class="index">imap_listmailbox</a> - Alias of imap_list</li>
        <li><a href="function.imap-listscan.php" class="index">imap_listscan</a> - Returns the list of mailboxes that matches the given text</li>
        <li><a href="function.imap-listsubscribed.php" class="index">imap_listsubscribed</a> - Alias of imap_lsub</li>
        <li><a href="function.imap-lsub.php" class="index">imap_lsub</a> - List all the subscribed mailboxes</li>
        <li><a href="function.imap-mail.php" class="index">imap_mail</a> - Send an email message</li>
        <li><a href="function.imap-mailboxmsginfo.php" class="index">imap_mailboxmsginfo</a> - Get information about the current mailbox</li>
        <li><a href="function.imap-mail-compose.php" class="index">imap_mail_compose</a> - Create a MIME message based on given envelope and body sections</li>
        <li><a href="function.imap-mail-copy.php" class="index">imap_mail_copy</a> - Copy specified messages to a mailbox</li>
        <li><a href="function.imap-mail-move.php" class="index">imap_mail_move</a> - Move specified messages to a mailbox</li>
        <li><a href="function.imap-mime-header-decode.php" class="index">imap_mime_header_decode</a> - Decode MIME header elements</li>
        <li><a href="function.imap-msgno.php" class="index">imap_msgno</a> - Gets the message sequence number for the given UID</li>
        <li><a href="function.imap-mutf7-to-utf8.php" class="index">imap_mutf7_to_utf8</a> - Decode a modified UTF-7 string to UTF-8</li>
        <li><a href="function.imap-num-msg.php" class="index">imap_num_msg</a> - Gets the number of messages in the current mailbox</li>
        <li><a href="function.imap-num-recent.php" class="index">imap_num_recent</a> - Gets the number of recent messages in current mailbox</li>
        <li><a href="function.imap-open.php" class="index">imap_open</a> - Open an IMAP stream to a mailbox</li>
        <li><a href="function.imap-ping.php" class="index">imap_ping</a> - Check if the IMAP stream is still active</li>
        <li><a href="function.imap-qprint.php" class="index">imap_qprint</a> - Convert a quoted-printable string to an 8 bit string</li>
        <li><a href="function.imap-rename.php" class="index">imap_rename</a> - Alias of imap_renamemailbox</li>
        <li><a href="function.imap-renamemailbox.php" class="index">imap_renamemailbox</a> - Rename an old mailbox to new mailbox</li>
        <li><a href="function.imap-reopen.php" class="index">imap_reopen</a> - Reopen IMAP stream to new mailbox</li>
        <li><a href="function.imap-rfc822-parse-adrlist.php" class="index">imap_rfc822_parse_adrlist</a> - Parses an address string</li>
        <li><a href="function.imap-rfc822-parse-headers.php" class="index">imap_rfc822_parse_headers</a> - Parse mail headers from a string</li>
        <li><a href="function.imap-rfc822-write-address.php" class="index">imap_rfc822_write_address</a> - Returns a properly formatted email address given the mailbox, host, and personal info</li>
        <li><a href="function.imap-savebody.php" class="index">imap_savebody</a> - Save a specific body section to a file</li>
        <li><a href="function.imap-scan.php" class="index">imap_scan</a> - Alias of imap_listscan</li>
        <li><a href="function.imap-scanmailbox.php" class="index">imap_scanmailbox</a> - Alias of imap_listscan</li>
        <li><a href="function.imap-search.php" class="index">imap_search</a> - This function returns an array of messages matching the given search criteria</li>
        <li><a href="function.imap-setacl.php" class="index">imap_setacl</a> - Sets the ACL for a given mailbox</li>
        <li><a href="function.imap-setflag-full.php" class="index">imap_setflag_full</a> - Sets flags on messages</li>
        <li><a href="function.imap-set-quota.php" class="index">imap_set_quota</a> - Sets a quota for a given mailbox</li>
        <li><a href="function.imap-sort.php" class="index">imap_sort</a> - Gets and sort messages</li>
        <li><a href="function.imap-status.php" class="index">imap_status</a> - Returns status information on a mailbox</li>
        <li><a href="function.imap-subscribe.php" class="index">imap_subscribe</a> - Subscribe to a mailbox</li>
        <li><a href="function.imap-thread.php" class="index">imap_thread</a> - Returns a tree of threaded message</li>
        <li><a href="function.imap-timeout.php" class="index">imap_timeout</a> - Set or fetch imap timeout</li>
        <li><a href="function.imap-uid.php" class="index">imap_uid</a> - This function returns the UID for the given message sequence number</li>
        <li><a href="function.imap-undelete.php" class="index">imap_undelete</a> - Unmark the message which is marked deleted</li>
        <li><a href="function.imap-unsubscribe.php" class="index">imap_unsubscribe</a> - Unsubscribe from a mailbox</li>
        <li><a href="function.imap-utf7-decode.php" class="index">imap_utf7_decode</a> - Decodes a modified UTF-7 encoded string</li>
        <li><a href="function.imap-utf7-encode.php" class="index">imap_utf7_encode</a> - Converts ISO-8859-1 string to modified UTF-7 text</li>
        <li><a href="function.imap-utf8.php" class="index">imap_utf8</a> - Converts MIME-encoded text to UTF-8</li>
        <li><a href="function.imap-utf8-to-mutf7.php" class="index">imap_utf8_to_mutf7</a> - Encode a UTF-8 string to modified UTF-7</li>
        <li><a href="function.implode.php" class="index">implode</a> - Join array elements with a string</li>
        <li><a href="function.inet-ntop.php" class="index">inet_ntop</a> - Converts a packed internet address to a human readable representation</li>
        <li><a href="function.inet-pton.php" class="index">inet_pton</a> - Converts a human readable IP address to its packed in_addr representation</li>
        <li><a href="infiniteiterator.next.php" class="index">InfiniteIterator::next</a> - Moves the inner Iterator forward or rewinds it</li>
        <li><a href="infiniteiterator.construct.php" class="index">InfiniteIterator::__construct</a> - Constructs an InfiniteIterator</li>
        <li><a href="function.inflate-add.php" class="index">inflate_add</a> - Incrementally inflate encoded data</li>
        <li><a href="function.inflate-get-read-len.php" class="index">inflate_get_read_len</a> - Get number of bytes read so far</li>
        <li><a href="function.inflate-get-status.php" class="index">inflate_get_status</a> - Get decompression status</li>
        <li><a href="function.inflate-init.php" class="index">inflate_init</a> - Initialize an incremental inflate context</li>
        <li><a href="function.ini-alter.php" class="index">ini_alter</a> - Alias of ini_set</li>
        <li><a href="function.ini-get.php" class="index">ini_get</a> - Gets the value of a configuration option</li>
        <li><a href="function.ini-get-all.php" class="index">ini_get_all</a> - Gets all configuration options</li>
        <li><a href="function.ini-parse-quantity.php" class="index">ini_parse_quantity</a> - Get interpreted size from ini shorthand syntax</li>
        <li><a href="function.ini-restore.php" class="index">ini_restore</a> - Restores the value of a configuration option</li>
        <li><a href="function.ini-set.php" class="index">ini_set</a> - Sets the value of a configuration option</li>
        <li><a href="function.inotify-add-watch.php" class="index">inotify_add_watch</a> - Add a watch to an initialized inotify instance</li>
        <li><a href="function.inotify-init.php" class="index">inotify_init</a> - Initialize an inotify instance</li>
        <li><a href="function.inotify-queue-len.php" class="index">inotify_queue_len</a> - Return a number upper than zero if there are pending events</li>
        <li><a href="function.inotify-read.php" class="index">inotify_read</a> - Read events from an inotify instance</li>
        <li><a href="function.inotify-rm-watch.php" class="index">inotify_rm_watch</a> - Remove an existing watch from an inotify instance</li>
        <li><a href="function.intdiv.php" class="index">intdiv</a> - Integer division</li>
        <li><a href="function.interface-exists.php" class="index">interface_exists</a> - Checks if the interface has been defined</li>
        <li><a href="internaliterator.current.php" class="index">InternalIterator::current</a> - Return the current element</li>
        <li><a href="internaliterator.key.php" class="index">InternalIterator::key</a> - Return the key of the current element</li>
        <li><a href="internaliterator.next.php" class="index">InternalIterator::next</a> - Move forward to next element</li>
        <li><a href="internaliterator.rewind.php" class="index">InternalIterator::rewind</a> - Rewind the Iterator to the first element</li>
        <li><a href="internaliterator.valid.php" class="index">InternalIterator::valid</a> - Check if current position is valid</li>
        <li><a href="internaliterator.construct.php" class="index">InternalIterator::__construct</a> - Private constructor to disallow direct instantiation</li>
        <li><a href="intlbreakiterator.createcharacterinstance.php" class="index">IntlBreakIterator::createCharacterInstance</a> - Create break iterator for boundaries of combining character sequences</li>
        <li><a href="intlbreakiterator.createcodepointinstance.php" class="index">IntlBreakIterator::createCodePointInstance</a> - Create break iterator for boundaries of code points</li>
        <li><a href="intlbreakiterator.createlineinstance.php" class="index">IntlBreakIterator::createLineInstance</a> - Create break iterator for logically possible line breaks</li>
        <li><a href="intlbreakiterator.createsentenceinstance.php" class="index">IntlBreakIterator::createSentenceInstance</a> - Create break iterator for sentence breaks</li>
        <li><a href="intlbreakiterator.createtitleinstance.php" class="index">IntlBreakIterator::createTitleInstance</a> - Create break iterator for title-casing breaks</li>
        <li><a href="intlbreakiterator.createwordinstance.php" class="index">IntlBreakIterator::createWordInstance</a> - Create break iterator for word breaks</li>
        <li><a href="intlbreakiterator.current.php" class="index">IntlBreakIterator::current</a> - Get index of current position</li>
        <li><a href="intlbreakiterator.first.php" class="index">IntlBreakIterator::first</a> - Set position to the first character in the text</li>
        <li><a href="intlbreakiterator.following.php" class="index">IntlBreakIterator::following</a> - Advance the iterator to the first boundary following specified offset</li>
        <li><a href="intlbreakiterator.geterrorcode.php" class="index">IntlBreakIterator::getErrorCode</a> - Get last error code on the object</li>
        <li><a href="intlbreakiterator.geterrormessage.php" class="index">IntlBreakIterator::getErrorMessage</a> - Get last error message on the object</li>
        <li><a href="intlbreakiterator.getlocale.php" class="index">IntlBreakIterator::getLocale</a> - Get the locale associated with the object</li>
        <li><a href="intlbreakiterator.getpartsiterator.php" class="index">IntlBreakIterator::getPartsIterator</a> - Create iterator for navigating fragments between boundaries</li>
        <li><a href="intlbreakiterator.gettext.php" class="index">IntlBreakIterator::getText</a> - Get the text being scanned</li>
        <li><a href="intlbreakiterator.isboundary.php" class="index">IntlBreakIterator::isBoundary</a> - Tell whether an offset is a boundaryʼs offset</li>
        <li><a href="intlbreakiterator.last.php" class="index">IntlBreakIterator::last</a> - Set the iterator position to index beyond the last character</li>
        <li><a href="intlbreakiterator.next.php" class="index">IntlBreakIterator::next</a> - Advance the iterator the next boundary</li>
        <li><a href="intlbreakiterator.preceding.php" class="index">IntlBreakIterator::preceding</a> - Set the iterator position to the first boundary before an offset</li>
        <li><a href="intlbreakiterator.previous.php" class="index">IntlBreakIterator::previous</a> - Set the iterator position to the boundary immediately before the current</li>
        <li><a href="intlbreakiterator.settext.php" class="index">IntlBreakIterator::setText</a> - Set the text being scanned</li>
        <li><a href="intlbreakiterator.construct.php" class="index">IntlBreakIterator::__construct</a> - Private constructor for disallowing instantiation</li>
        <li><a href="intlcalendar.add.php" class="index">IntlCalendar::add</a> - Add a (signed) amount of time to a field</li>
        <li><a href="intlcalendar.after.php" class="index">IntlCalendar::after</a> - Whether this objectʼs time is after that of the passed object</li>
        <li><a href="intlcalendar.before.php" class="index">IntlCalendar::before</a> - Whether this objectʼs time is before that of the passed object</li>
        <li><a href="intlcalendar.clear.php" class="index">IntlCalendar::clear</a> - Clear a field or all fields</li>
        <li><a href="intlcalendar.createinstance.php" class="index">IntlCalendar::createInstance</a> - Create a new IntlCalendar</li>
        <li><a href="intlcalendar.equals.php" class="index">IntlCalendar::equals</a> - Compare time of two IntlCalendar objects for equality</li>
        <li><a href="intlcalendar.fielddifference.php" class="index">IntlCalendar::fieldDifference</a> - Calculate difference between given time and this objectʼs time</li>
        <li><a href="intlcalendar.fromdatetime.php" class="index">IntlCalendar::fromDateTime</a> - Create an IntlCalendar from a DateTime object or string</li>
        <li><a href="intlcalendar.get.php" class="index">IntlCalendar::get</a> - Get the value for a field</li>
        <li><a href="intlcalendar.getactualmaximum.php" class="index">IntlCalendar::getActualMaximum</a> - The maximum value for a field, considering the objectʼs current time</li>
        <li><a href="intlcalendar.getactualminimum.php" class="index">IntlCalendar::getActualMinimum</a> - The minimum value for a field, considering the objectʼs current time</li>
        <li><a href="intlcalendar.getavailablelocales.php" class="index">IntlCalendar::getAvailableLocales</a> - Get array of locales for which there is data</li>
        <li><a href="intlcalendar.getdayofweektype.php" class="index">IntlCalendar::getDayOfWeekType</a> - Tell whether a day is a weekday, weekend or a day that has a transition between the two</li>
        <li><a href="intlcalendar.geterrorcode.php" class="index">IntlCalendar::getErrorCode</a> - Get last error code on the object</li>
        <li><a href="intlcalendar.geterrormessage.php" class="index">IntlCalendar::getErrorMessage</a> - Get last error message on the object</li>
        <li><a href="intlcalendar.getfirstdayofweek.php" class="index">IntlCalendar::getFirstDayOfWeek</a> - Get the first day of the week for the calendarʼs locale</li>
        <li><a href="intlcalendar.getgreatestminimum.php" class="index">IntlCalendar::getGreatestMinimum</a> - Get the largest local minimum value for a field</li>
        <li><a href="intlcalendar.getkeywordvaluesforlocale.php" class="index">IntlCalendar::getKeywordValuesForLocale</a> - Get set of locale keyword values</li>
        <li><a href="intlcalendar.getleastmaximum.php" class="index">IntlCalendar::getLeastMaximum</a> - Get the smallest local maximum for a field</li>
        <li><a href="intlcalendar.getlocale.php" class="index">IntlCalendar::getLocale</a> - Get the locale associated with the object</li>
        <li><a href="intlcalendar.getmaximum.php" class="index">IntlCalendar::getMaximum</a> - Get the global maximum value for a field</li>
        <li><a href="intlcalendar.getminimaldaysinfirstweek.php" class="index">IntlCalendar::getMinimalDaysInFirstWeek</a> - Get minimal number of days the first week in a year or month can have</li>
        <li><a href="intlcalendar.getminimum.php" class="index">IntlCalendar::getMinimum</a> - Get the global minimum value for a field</li>
        <li><a href="intlcalendar.getnow.php" class="index">IntlCalendar::getNow</a> - Get number representing the current time</li>
        <li><a href="intlcalendar.getrepeatedwalltimeoption.php" class="index">IntlCalendar::getRepeatedWallTimeOption</a> - Get behavior for handling repeating wall time</li>
        <li><a href="intlcalendar.getskippedwalltimeoption.php" class="index">IntlCalendar::getSkippedWallTimeOption</a> - Get behavior for handling skipped wall time</li>
        <li><a href="intlcalendar.gettime.php" class="index">IntlCalendar::getTime</a> - Get time currently represented by the object</li>
        <li><a href="intlcalendar.gettimezone.php" class="index">IntlCalendar::getTimeZone</a> - Get the objectʼs timezone</li>
        <li><a href="intlcalendar.gettype.php" class="index">IntlCalendar::getType</a> - Get the calendar type</li>
        <li><a href="intlcalendar.getweekendtransition.php" class="index">IntlCalendar::getWeekendTransition</a> - Get time of the day at which weekend begins or ends</li>
        <li><a href="intlcalendar.indaylighttime.php" class="index">IntlCalendar::inDaylightTime</a> - Whether the objectʼs time is in Daylight Savings Time</li>
        <li><a href="intlcalendar.isequivalentto.php" class="index">IntlCalendar::isEquivalentTo</a> - Whether another calendar is equal but for a different time</li>
        <li><a href="intlcalendar.islenient.php" class="index">IntlCalendar::isLenient</a> - Whether date/time interpretation is in lenient mode</li>
        <li><a href="intlcalendar.isset.php" class="index">IntlCalendar::isSet</a> - Whether a field is set</li>
        <li><a href="intlcalendar.isweekend.php" class="index">IntlCalendar::isWeekend</a> - Whether a certain date/time is in the weekend</li>
        <li><a href="intlcalendar.roll.php" class="index">IntlCalendar::roll</a> - Add value to field without carrying into more significant fields</li>
        <li><a href="intlcalendar.set.php" class="index">IntlCalendar::set</a> - Set a time field or several common fields at once</li>
        <li><a href="intlcalendar.setdate.php" class="index">IntlCalendar::setDate</a> - Set a date fields</li>
        <li><a href="intlcalendar.setdatetime.php" class="index">IntlCalendar::setDateTime</a> - Set a date and time fields</li>
        <li><a href="intlcalendar.setfirstdayofweek.php" class="index">IntlCalendar::setFirstDayOfWeek</a> - Set the day on which the week is deemed to start</li>
        <li><a href="intlcalendar.setlenient.php" class="index">IntlCalendar::setLenient</a> - Set whether date/time interpretation is to be lenient</li>
        <li><a href="intlcalendar.setminimaldaysinfirstweek.php" class="index">IntlCalendar::setMinimalDaysInFirstWeek</a> - Set minimal number of days the first week in a year or month can have</li>
        <li><a href="intlcalendar.setrepeatedwalltimeoption.php" class="index">IntlCalendar::setRepeatedWallTimeOption</a> - Set behavior for handling repeating wall times at negative timezone offset transitions</li>
        <li><a href="intlcalendar.setskippedwalltimeoption.php" class="index">IntlCalendar::setSkippedWallTimeOption</a> - Set behavior for handling skipped wall times at positive timezone offset transitions</li>
        <li><a href="intlcalendar.settime.php" class="index">IntlCalendar::setTime</a> - Set the calendar time in milliseconds since the epoch</li>
        <li><a href="intlcalendar.settimezone.php" class="index">IntlCalendar::setTimeZone</a> - Set the timezone used by this calendar</li>
        <li><a href="intlcalendar.todatetime.php" class="index">IntlCalendar::toDateTime</a> - Convert an IntlCalendar into a DateTime object</li>
        <li><a href="intlcalendar.construct.php" class="index">IntlCalendar::__construct</a> - Private constructor for disallowing instantiation</li>
        <li><a href="intlchar.charage.php" class="index">IntlChar::charAge</a> - Get the &quot;age&quot; of the code point</li>
        <li><a href="intlchar.chardigitvalue.php" class="index">IntlChar::charDigitValue</a> - Get the decimal digit value of a decimal digit character</li>
        <li><a href="intlchar.chardirection.php" class="index">IntlChar::charDirection</a> - Get bidirectional category value for a code point</li>
        <li><a href="intlchar.charfromname.php" class="index">IntlChar::charFromName</a> - Find Unicode character by name and return its code point value</li>
        <li><a href="intlchar.charmirror.php" class="index">IntlChar::charMirror</a> - Get the &quot;mirror-image&quot; character for a code point</li>
        <li><a href="intlchar.charname.php" class="index">IntlChar::charName</a> - Retrieve the name of a Unicode character</li>
        <li><a href="intlchar.chartype.php" class="index">IntlChar::charType</a> - Get the general category value for a code point</li>
        <li><a href="intlchar.chr.php" class="index">IntlChar::chr</a> - Return Unicode character by code point value</li>
        <li><a href="intlchar.digit.php" class="index">IntlChar::digit</a> - Get the decimal digit value of a code point for a given radix</li>
        <li><a href="intlchar.enumcharnames.php" class="index">IntlChar::enumCharNames</a> - Enumerate all assigned Unicode characters within a range</li>
        <li><a href="intlchar.enumchartypes.php" class="index">IntlChar::enumCharTypes</a> - Enumerate all code points with their Unicode general categories</li>
        <li><a href="intlchar.foldcase.php" class="index">IntlChar::foldCase</a> - Perform case folding on a code point</li>
        <li><a href="intlchar.fordigit.php" class="index">IntlChar::forDigit</a> - Get character representation for a given digit and radix</li>
        <li><a href="intlchar.getbidipairedbracket.php" class="index">IntlChar::getBidiPairedBracket</a> - Get the paired bracket character for a code point</li>
        <li><a href="intlchar.getblockcode.php" class="index">IntlChar::getBlockCode</a> - Get the Unicode allocation block containing a code point</li>
        <li><a href="intlchar.getcombiningclass.php" class="index">IntlChar::getCombiningClass</a> - Get the combining class of a code point</li>
        <li><a href="intlchar.getfc-nfkc-closure.php" class="index">IntlChar::getFC_NFKC_Closure</a> - Get the FC_NFKC_Closure property for a code point</li>
        <li><a href="intlchar.getintpropertymaxvalue.php" class="index">IntlChar::getIntPropertyMaxValue</a> - Get the max value for a Unicode property</li>
        <li><a href="intlchar.getintpropertyminvalue.php" class="index">IntlChar::getIntPropertyMinValue</a> - Get the min value for a Unicode property</li>
        <li><a href="intlchar.getintpropertyvalue.php" class="index">IntlChar::getIntPropertyValue</a> - Get the value for a Unicode property for a code point</li>
        <li><a href="intlchar.getnumericvalue.php" class="index">IntlChar::getNumericValue</a> - Get the numeric value for a Unicode code point</li>
        <li><a href="intlchar.getpropertyenum.php" class="index">IntlChar::getPropertyEnum</a> - Get the property constant value for a given property name</li>
        <li><a href="intlchar.getpropertyname.php" class="index">IntlChar::getPropertyName</a> - Get the Unicode name for a property</li>
        <li><a href="intlchar.getpropertyvalueenum.php" class="index">IntlChar::getPropertyValueEnum</a> - Get the property value for a given value name</li>
        <li><a href="intlchar.getpropertyvaluename.php" class="index">IntlChar::getPropertyValueName</a> - Get the Unicode name for a property value</li>
        <li><a href="intlchar.getunicodeversion.php" class="index">IntlChar::getUnicodeVersion</a> - Get the Unicode version</li>
        <li><a href="intlchar.hasbinaryproperty.php" class="index">IntlChar::hasBinaryProperty</a> - Check a binary Unicode property for a code point</li>
        <li><a href="intlchar.isalnum.php" class="index">IntlChar::isalnum</a> - Check if code point is an alphanumeric character</li>
        <li><a href="intlchar.isalpha.php" class="index">IntlChar::isalpha</a> - Check if code point is a letter character</li>
        <li><a href="intlchar.isbase.php" class="index">IntlChar::isbase</a> - Check if code point is a base character</li>
        <li><a href="intlchar.isblank.php" class="index">IntlChar::isblank</a> - Check if code point is a &quot;blank&quot; or &quot;horizontal space&quot; character</li>
        <li><a href="intlchar.iscntrl.php" class="index">IntlChar::iscntrl</a> - Check if code point is a control character</li>
        <li><a href="intlchar.isdefined.php" class="index">IntlChar::isdefined</a> - Check whether the code point is defined</li>
        <li><a href="intlchar.isdigit.php" class="index">IntlChar::isdigit</a> - Check if code point is a digit character</li>
        <li><a href="intlchar.isgraph.php" class="index">IntlChar::isgraph</a> - Check if code point is a graphic character</li>
        <li><a href="intlchar.isidignorable.php" class="index">IntlChar::isIDIgnorable</a> - Check if code point is an ignorable character</li>
        <li><a href="intlchar.isidpart.php" class="index">IntlChar::isIDPart</a> - Check if code point is permissible in an identifier</li>
        <li><a href="intlchar.isidstart.php" class="index">IntlChar::isIDStart</a> - Check if code point is permissible as the first character in an identifier</li>
        <li><a href="intlchar.isisocontrol.php" class="index">IntlChar::isISOControl</a> - Check if code point is an ISO control code</li>
        <li><a href="intlchar.isjavaidpart.php" class="index">IntlChar::isJavaIDPart</a> - Check if code point is permissible in a Java identifier</li>
        <li><a href="intlchar.isjavaidstart.php" class="index">IntlChar::isJavaIDStart</a> - Check if code point is permissible as the first character in a Java identifier</li>
        <li><a href="intlchar.isjavaspacechar.php" class="index">IntlChar::isJavaSpaceChar</a> - Check if code point is a space character according to Java</li>
        <li><a href="intlchar.islower.php" class="index">IntlChar::islower</a> - Check if code point is a lowercase letter</li>
        <li><a href="intlchar.ismirrored.php" class="index">IntlChar::isMirrored</a> - Check if code point has the Bidi_Mirrored property</li>
        <li><a href="intlchar.isprint.php" class="index">IntlChar::isprint</a> - Check if code point is a printable character</li>
        <li><a href="intlchar.ispunct.php" class="index">IntlChar::ispunct</a> - Check if code point is punctuation character</li>
        <li><a href="intlchar.isspace.php" class="index">IntlChar::isspace</a> - Check if code point is a space character</li>
        <li><a href="intlchar.istitle.php" class="index">IntlChar::istitle</a> - Check if code point is a titlecase letter</li>
        <li><a href="intlchar.isualphabetic.php" class="index">IntlChar::isUAlphabetic</a> - Check if code point has the Alphabetic Unicode property</li>
        <li><a href="intlchar.isulowercase.php" class="index">IntlChar::isULowercase</a> - Check if code point has the Lowercase Unicode property</li>
        <li><a href="intlchar.isupper.php" class="index">IntlChar::isupper</a> - Check if code point has the general category &quot;Lu&quot; (uppercase letter)</li>
        <li><a href="intlchar.isuuppercase.php" class="index">IntlChar::isUUppercase</a> - Check if code point has the Uppercase Unicode property</li>
        <li><a href="intlchar.isuwhitespace.php" class="index">IntlChar::isUWhiteSpace</a> - Check if code point has the White_Space Unicode property</li>
        <li><a href="intlchar.iswhitespace.php" class="index">IntlChar::isWhitespace</a> - Check if code point is a whitespace character according to ICU</li>
        <li><a href="intlchar.isxdigit.php" class="index">IntlChar::isxdigit</a> - Check if code point is a hexadecimal digit</li>
        <li><a href="intlchar.ord.php" class="index">IntlChar::ord</a> - Return Unicode code point value of character</li>
        <li><a href="intlchar.tolower.php" class="index">IntlChar::tolower</a> - Make Unicode character lowercase</li>
        <li><a href="intlchar.totitle.php" class="index">IntlChar::totitle</a> - Make Unicode character titlecase</li>
        <li><a href="intlchar.toupper.php" class="index">IntlChar::toupper</a> - Make Unicode character uppercase</li>
        <li><a href="intlcodepointbreakiterator.getlastcodepoint.php" class="index">IntlCodePointBreakIterator::getLastCodePoint</a> - Get last code point passed over after advancing or receding the iterator</li>
        <li><a href="intldateformatter.create.php" class="index">IntlDateFormatter::create</a> - Create a date formatter</li>
        <li><a href="intldateformatter.format.php" class="index">IntlDateFormatter::format</a> - Format the date/time value as a string</li>
        <li><a href="intldateformatter.formatobject.php" class="index">IntlDateFormatter::formatObject</a> - Formats an object</li>
        <li><a href="intldateformatter.getcalendar.php" class="index">IntlDateFormatter::getCalendar</a> - Get the calendar type used for the IntlDateFormatter</li>
        <li><a href="intldateformatter.getcalendarobject.php" class="index">IntlDateFormatter::getCalendarObject</a> - Get copy of formatterʼs calendar object</li>
        <li><a href="intldateformatter.getdatetype.php" class="index">IntlDateFormatter::getDateType</a> - Get the datetype used for the IntlDateFormatter</li>
        <li><a href="intldateformatter.geterrorcode.php" class="index">IntlDateFormatter::getErrorCode</a> - Get the error code from last operation</li>
        <li><a href="intldateformatter.geterrormessage.php" class="index">IntlDateFormatter::getErrorMessage</a> - Get the error text from the last operation</li>
        <li><a href="intldateformatter.getlocale.php" class="index">IntlDateFormatter::getLocale</a> - Get the locale used by formatter</li>
        <li><a href="intldateformatter.getpattern.php" class="index">IntlDateFormatter::getPattern</a> - Get the pattern used for the IntlDateFormatter</li>
        <li><a href="intldateformatter.gettimetype.php" class="index">IntlDateFormatter::getTimeType</a> - Get the timetype used for the IntlDateFormatter</li>
        <li><a href="intldateformatter.gettimezone.php" class="index">IntlDateFormatter::getTimeZone</a> - Get formatterʼs timezone</li>
        <li><a href="intldateformatter.gettimezoneid.php" class="index">IntlDateFormatter::getTimeZoneId</a> - Get the timezone-id used for the IntlDateFormatter</li>
        <li><a href="intldateformatter.islenient.php" class="index">IntlDateFormatter::isLenient</a> - Get the lenient used for the IntlDateFormatter</li>
        <li><a href="intldateformatter.localtime.php" class="index">IntlDateFormatter::localtime</a> - Parse string to a field-based time value</li>
        <li><a href="intldateformatter.parse.php" class="index">IntlDateFormatter::parse</a> - Parse string to a timestamp value</li>
        <li><a href="intldateformatter.setcalendar.php" class="index">IntlDateFormatter::setCalendar</a> - Sets the calendar type used by the formatter</li>
        <li><a href="intldateformatter.setlenient.php" class="index">IntlDateFormatter::setLenient</a> - Set the leniency of the parser</li>
        <li><a href="intldateformatter.setpattern.php" class="index">IntlDateFormatter::setPattern</a> - Set the pattern used for the IntlDateFormatter</li>
        <li><a href="intldateformatter.settimezone.php" class="index">IntlDateFormatter::setTimeZone</a> - Sets formatterʼs timezone</li>
        <li><a href="intldatepatterngenerator.create.php" class="index">IntlDatePatternGenerator::create</a> - Creates a new IntlDatePatternGenerator instance</li>
        <li><a href="intldatepatterngenerator.getbestpattern.php" class="index">IntlDatePatternGenerator::getBestPattern</a> - Determines the most suitable date/time format</li>
        <li><a href="intlgregoriancalendar.createfromdate.php" class="index">IntlGregorianCalendar::createFromDate</a> - Create a new IntlGregorianCalendar instance from date</li>
        <li><a href="intlgregoriancalendar.createfromdatetime.php" class="index">IntlGregorianCalendar::createFromDateTime</a> - Create a new IntlGregorianCalendar instance from date and time</li>
        <li><a href="intlgregoriancalendar.getgregorianchange.php" class="index">IntlGregorianCalendar::getGregorianChange</a> - Get the Gregorian Calendar change date</li>
        <li><a href="intlgregoriancalendar.isleapyear.php" class="index">IntlGregorianCalendar::isLeapYear</a> - Determine if the given year is a leap year</li>
        <li><a href="intlgregoriancalendar.setgregorianchange.php" class="index">IntlGregorianCalendar::setGregorianChange</a> - Set the Gregorian Calendar the change date</li>
        <li><a href="intlgregoriancalendar.construct.php" class="index">IntlGregorianCalendar::__construct</a> - Create the Gregorian Calendar class</li>
        <li><a href="intliterator.current.php" class="index">IntlIterator::current</a> - Get the current element</li>
        <li><a href="intliterator.key.php" class="index">IntlIterator::key</a> - Get the current key</li>
        <li><a href="intliterator.next.php" class="index">IntlIterator::next</a> - Move forward to the next element</li>
        <li><a href="intliterator.rewind.php" class="index">IntlIterator::rewind</a> - Rewind the iterator to the first element</li>
        <li><a href="intliterator.valid.php" class="index">IntlIterator::valid</a> - Check if current position is valid</li>
        <li><a href="intlpartsiterator.getbreakiterator.php" class="index">IntlPartsIterator::getBreakIterator</a> - Get IntlBreakIterator backing this parts iterator</li>
        <li><a href="intlrulebasedbreakiterator.getbinaryrules.php" class="index">IntlRuleBasedBreakIterator::getBinaryRules</a> - Get the binary form of compiled rules</li>
        <li><a href="intlrulebasedbreakiterator.getrules.php" class="index">IntlRuleBasedBreakIterator::getRules</a> - Get the rule set used to create this object</li>
        <li><a href="intlrulebasedbreakiterator.getrulestatus.php" class="index">IntlRuleBasedBreakIterator::getRuleStatus</a> - Get the largest status value from the break rules that determined the current break position</li>
        <li><a href="intlrulebasedbreakiterator.getrulestatusvec.php" class="index">IntlRuleBasedBreakIterator::getRuleStatusVec</a> - Get the status values from the break rules that determined the current break position</li>
        <li><a href="intlrulebasedbreakiterator.construct.php" class="index">IntlRuleBasedBreakIterator::__construct</a> - Create iterator from ruleset</li>
        <li><a href="intltimezone.countequivalentids.php" class="index">IntlTimeZone::countEquivalentIDs</a> - Get the number of IDs in the equivalency group that includes the given ID</li>
        <li><a href="intltimezone.createdefault.php" class="index">IntlTimeZone::createDefault</a> - Create a new copy of the default timezone for this host</li>
        <li><a href="intltimezone.createenumeration.php" class="index">IntlTimeZone::createEnumeration</a> - Get an enumeration over time zone IDs associated with the
          given country or offset</li>
        <li><a href="intltimezone.createtimezone.php" class="index">IntlTimeZone::createTimeZone</a> - Create a timezone object for the given ID</li>
        <li><a href="intltimezone.createtimezoneidenumeration.php" class="index">IntlTimeZone::createTimeZoneIDEnumeration</a> - Get an enumeration over system time zone IDs with the given filter conditions</li>
        <li><a href="intltimezone.fromdatetimezone.php" class="index">IntlTimeZone::fromDateTimeZone</a> - Create a timezone object from DateTimeZone</li>
        <li><a href="intltimezone.getcanonicalid.php" class="index">IntlTimeZone::getCanonicalID</a> - Get the canonical system timezone ID or the normalized custom time zone ID for the given time zone ID</li>
        <li><a href="intltimezone.getdisplayname.php" class="index">IntlTimeZone::getDisplayName</a> - Get a name of this time zone suitable for presentation to the user</li>
        <li><a href="intltimezone.getdstsavings.php" class="index">IntlTimeZone::getDSTSavings</a> - Get the amount of time to be added to local standard time to get local wall clock time</li>
        <li><a href="intltimezone.getequivalentid.php" class="index">IntlTimeZone::getEquivalentID</a> - Get an ID in the equivalency group that includes the given ID</li>
        <li><a href="intltimezone.geterrorcode.php" class="index">IntlTimeZone::getErrorCode</a> - Get last error code on the object</li>
        <li><a href="intltimezone.geterrormessage.php" class="index">IntlTimeZone::getErrorMessage</a> - Get last error message on the object</li>
        <li><a href="intltimezone.getgmt.php" class="index">IntlTimeZone::getGMT</a> - Create GMT (UTC) timezone</li>
        <li><a href="intltimezone.getid.php" class="index">IntlTimeZone::getID</a> - Get timezone ID</li>
        <li><a href="intltimezone.getidforwindowsid.php" class="index">IntlTimeZone::getIDForWindowsID</a> - Translate a Windows timezone into a system timezone</li>
        <li><a href="intltimezone.getoffset.php" class="index">IntlTimeZone::getOffset</a> - Get the time zone raw and GMT offset for the given moment in time</li>
        <li><a href="intltimezone.getrawoffset.php" class="index">IntlTimeZone::getRawOffset</a> - Get the raw GMT offset (before taking daylight savings time into account</li>
        <li><a href="intltimezone.getregion.php" class="index">IntlTimeZone::getRegion</a> - Get the region code associated with the given system time zone ID</li>
        <li><a href="intltimezone.gettzdataversion.php" class="index">IntlTimeZone::getTZDataVersion</a> - Get the timezone data version currently used by ICU</li>
        <li><a href="intltimezone.getunknown.php" class="index">IntlTimeZone::getUnknown</a> - Get the &quot;unknown&quot; time zone</li>
        <li><a href="intltimezone.getwindowsid.php" class="index">IntlTimeZone::getWindowsID</a> - Translate a system timezone into a Windows timezone</li>
        <li><a href="intltimezone.hassamerules.php" class="index">IntlTimeZone::hasSameRules</a> - Check if this zone has the same rules and offset as another zone</li>
        <li><a href="intltimezone.todatetimezone.php" class="index">IntlTimeZone::toDateTimeZone</a> - Convert to DateTimeZone object</li>
        <li><a href="intltimezone.usedaylighttime.php" class="index">IntlTimeZone::useDaylightTime</a> - Check if this time zone uses daylight savings time</li>
        <li><a href="intltimezone.construct.php" class="index">IntlTimeZone::__construct</a> - Private constructor to disallow direct instantiation</li>
        <li><a href="function.intl-error-name.php" class="index">intl_error_name</a> - Get symbolic name for a given error code</li>
        <li><a href="function.intl-get-error-code.php" class="index">intl_get_error_code</a> - Get the last error code</li>
        <li><a href="function.intl-get-error-message.php" class="index">intl_get_error_message</a> - Get description of the last error</li>
        <li><a href="function.intl-is-failure.php" class="index">intl_is_failure</a> - Check whether the given error code indicates failure</li>
        <li><a href="function.intval.php" class="index">intval</a> - Get the integer value of a variable</li>
        <li><a href="function.in-array.php" class="index">in_array</a> - Checks if a value exists in an array</li>
        <li><a href="function.ip2long.php" class="index">ip2long</a> - Converts a string containing an (IPv4) Internet Protocol dotted address into a long integer</li>
        <li><a href="function.iptcembed.php" class="index">iptcembed</a> - Embeds binary IPTC data into a JPEG image</li>
        <li><a href="function.iptcparse.php" class="index">iptcparse</a> - Parse a binary IPTC block into single tags</li>
        <li><a href="function.isset.php" class="index">isset</a> - Determine if a variable is declared and is different than null</li>
        <li><a href="function.is-a.php" class="index">is_a</a> - Checks whether the object is of a given type or subtype</li>
        <li><a href="function.is-array.php" class="index">is_array</a> - Finds whether a variable is an array</li>
        <li><a href="function.is-bool.php" class="index">is_bool</a> - Finds out whether a variable is a boolean</li>
        <li><a href="function.is-callable.php" class="index">is_callable</a> - Verify that a value can be called as a function from the current scope.</li>
        <li><a href="function.is-countable.php" class="index">is_countable</a> - Verify that the contents of a variable is a countable value</li>
        <li><a href="function.is-dir.php" class="index">is_dir</a> - Tells whether the filename is a directory</li>
        <li><a href="function.is-double.php" class="index">is_double</a> - Alias of is_float</li>
        <li><a href="function.is-executable.php" class="index">is_executable</a> - Tells whether the filename is executable</li>
        <li><a href="function.is-file.php" class="index">is_file</a> - Tells whether the filename is a regular file</li>
        <li><a href="function.is-finite.php" class="index">is_finite</a> - Checks whether a float is finite</li>
        <li><a href="function.is-float.php" class="index">is_float</a> - Finds whether the type of a variable is float</li>
        <li><a href="function.is-infinite.php" class="index">is_infinite</a> - Checks whether a float is infinite</li>
        <li><a href="function.is-int.php" class="index">is_int</a> - Find whether the type of a variable is integer</li>
        <li><a href="function.is-integer.php" class="index">is_integer</a> - Alias of is_int</li>
        <li><a href="function.is-iterable.php" class="index">is_iterable</a> - Verify that the contents of a variable is an iterable value</li>
        <li><a href="function.is-link.php" class="index">is_link</a> - Tells whether the filename is a symbolic link</li>
        <li><a href="function.is-long.php" class="index">is_long</a> - Alias of is_int</li>
        <li><a href="function.is-nan.php" class="index">is_nan</a> - Checks whether a float is NAN</li>
        <li><a href="function.is-null.php" class="index">is_null</a> - Finds whether a variable is null</li>
        <li><a href="function.is-numeric.php" class="index">is_numeric</a> - Finds whether a variable is a number or a numeric string</li>
        <li><a href="function.is-object.php" class="index">is_object</a> - Finds whether a variable is an object</li>
        <li><a href="function.is-readable.php" class="index">is_readable</a> - Tells whether a file exists and is readable</li>
        <li><a href="function.is-real.php" class="index">is_real</a> - Alias of is_float</li>
        <li><a href="function.is-resource.php" class="index">is_resource</a> - Finds whether a variable is a resource</li>
        <li><a href="function.is-scalar.php" class="index">is_scalar</a> - Finds whether a variable is a scalar</li>
        <li><a href="function.is-soap-fault.php" class="index">is_soap_fault</a> - Checks if a SOAP call has failed</li>
        <li><a href="function.is-string.php" class="index">is_string</a> - Find whether the type of a variable is string</li>
        <li><a href="function.is-subclass-of.php" class="index">is_subclass_of</a> - Checks if the object has this class as one of its parents or implements it</li>
        <li><a href="function.is-tainted.php" class="index">is_tainted</a> - Checks whether a string is tainted</li>
        <li><a href="function.is-uploaded-file.php" class="index">is_uploaded_file</a> - Tells whether the file was uploaded via HTTP POST</li>
        <li><a href="function.is-writable.php" class="index">is_writable</a> - Tells whether the filename is writable</li>
        <li><a href="function.is-writeable.php" class="index">is_writeable</a> - Alias of is_writable</li>
        <li><a href="iterator.current.php" class="index">Iterator::current</a> - Return the current element</li>
        <li><a href="iterator.key.php" class="index">Iterator::key</a> - Return the key of the current element</li>
        <li><a href="iterator.next.php" class="index">Iterator::next</a> - Move forward to next element</li>
        <li><a href="iterator.rewind.php" class="index">Iterator::rewind</a> - Rewind the Iterator to the first element</li>
        <li><a href="iterator.valid.php" class="index">Iterator::valid</a> - Checks if current position is valid</li>
        <li><a href="iteratoraggregate.getiterator.php" class="index">IteratorAggregate::getIterator</a> - Retrieve an external iterator</li>
        <li><a href="iteratoriterator.current.php" class="index">IteratorIterator::current</a> - Get the current value</li>
        <li><a href="iteratoriterator.getinneriterator.php" class="index">IteratorIterator::getInnerIterator</a> - Get the inner iterator</li>
        <li><a href="iteratoriterator.key.php" class="index">IteratorIterator::key</a> - Get the key of the current element</li>
        <li><a href="iteratoriterator.next.php" class="index">IteratorIterator::next</a> - Forward to the next element</li>
        <li><a href="iteratoriterator.rewind.php" class="index">IteratorIterator::rewind</a> - Rewind to the first element</li>
        <li><a href="iteratoriterator.valid.php" class="index">IteratorIterator::valid</a> - Checks if the current element is valid</li>
        <li><a href="iteratoriterator.construct.php" class="index">IteratorIterator::__construct</a> - Create an iterator from anything that is traversable</li>
        <li><a href="function.iterator-apply.php" class="index">iterator_apply</a> - Call a function for every element in an iterator</li>
        <li><a href="function.iterator-count.php" class="index">iterator_count</a> - Count the elements in an iterator</li>
        <li><a href="function.iterator-to-array.php" class="index">iterator_to_array</a> - Copy the iterator into an array</li>
        </ul></li>
        <li class='gen-index index-for-j'>j<ul id='refentry-index-for-j'>
        <li><a href="function.jddayofweek.php" class="index">jddayofweek</a> - Returns the day of the week</li>
        <li><a href="function.jdmonthname.php" class="index">jdmonthname</a> - Returns a month name</li>
        <li><a href="function.jdtofrench.php" class="index">jdtofrench</a> - Converts a Julian Day Count to the French Republican Calendar</li>
        <li><a href="function.jdtogregorian.php" class="index">jdtogregorian</a> - Converts Julian Day Count to Gregorian date</li>
        <li><a href="function.jdtojewish.php" class="index">jdtojewish</a> - Converts a Julian day count to a Jewish calendar date</li>
        <li><a href="function.jdtojulian.php" class="index">jdtojulian</a> - Converts a Julian Day Count to a Julian Calendar Date</li>
        <li><a href="function.jdtounix.php" class="index">jdtounix</a> - Convert Julian Day to Unix timestamp</li>
        <li><a href="function.jewishtojd.php" class="index">jewishtojd</a> - Converts a date in the Jewish Calendar to Julian Day Count</li>
        <li><a href="function.join.php" class="index">join</a> - Alias of implode</li>
        <li><a href="function.jpeg2wbmp.php" class="index">jpeg2wbmp</a> - Convert JPEG image file to WBMP image file</li>
        <li><a href="jsonserializable.jsonserialize.php" class="index">JsonSerializable::jsonSerialize</a> - Specify data which should be serialized to JSON</li>
        <li><a href="function.json-decode.php" class="index">json_decode</a> - Decodes a JSON string</li>
        <li><a href="function.json-encode.php" class="index">json_encode</a> - Returns the JSON representation of a value</li>
        <li><a href="function.json-last-error.php" class="index">json_last_error</a> - Returns the last error occurred</li>
        <li><a href="function.json-last-error-msg.php" class="index">json_last_error_msg</a> - Returns the error string of the last json_encode() or json_decode() call</li>
        <li><a href="function.json-validate.php" class="index">json_validate</a> - Checks if a string contains valid JSON</li>
        <li><a href="function.juliantojd.php" class="index">juliantojd</a> - Converts a Julian Calendar date to Julian Day Count</li>
        </ul></li>
        <li class='gen-index index-for-k'>k<ul id='refentry-index-for-k'>
        <li><a href="function.key.php" class="index">key</a> - Fetch a key from an array</li>
        <li><a href="function.key-exists.php" class="index">key_exists</a> - Alias of array_key_exists</li>
        <li><a href="function.krsort.php" class="index">krsort</a> - Sort an array by key in descending order</li>
        <li><a href="function.ksort.php" class="index">ksort</a> - Sort an array by key in ascending order</li>
        </ul></li>
        <li class='gen-index index-for-l'>l<ul id='refentry-index-for-l'>
        <li><a href="function.lcfirst.php" class="index">lcfirst</a> - Make a string's first character lowercase</li>
        <li><a href="function.lcg-value.php" class="index">lcg_value</a> - Combined linear congruential generator</li>
        <li><a href="function.lchgrp.php" class="index">lchgrp</a> - Changes group ownership of symlink</li>
        <li><a href="function.lchown.php" class="index">lchown</a> - Changes user ownership of symlink</li>
        <li><a href="function.ldap-8859-to-t61.php" class="index">ldap_8859_to_t61</a> - Translate 8859 characters to t61 characters</li>
        <li><a href="function.ldap-add.php" class="index">ldap_add</a> - Add entries to LDAP directory</li>
        <li><a href="function.ldap-add-ext.php" class="index">ldap_add_ext</a> - Add entries to LDAP directory</li>
        <li><a href="function.ldap-bind.php" class="index">ldap_bind</a> - Bind to LDAP directory</li>
        <li><a href="function.ldap-bind-ext.php" class="index">ldap_bind_ext</a> - Bind to LDAP directory</li>
        <li><a href="function.ldap-close.php" class="index">ldap_close</a> - Alias of ldap_unbind</li>
        <li><a href="function.ldap-compare.php" class="index">ldap_compare</a> - Compare value of attribute found in entry specified with DN</li>
        <li><a href="function.ldap-connect.php" class="index">ldap_connect</a> - Connect to an LDAP server</li>
        <li><a href="function.ldap-connect-wallet.php" class="index">ldap_connect_wallet</a> - Connect to an LDAP server</li>
        <li><a href="function.ldap-control-paged-result.php" class="index">ldap_control_paged_result</a> - Send LDAP pagination control</li>
        <li><a href="function.ldap-control-paged-result-response.php" class="index">ldap_control_paged_result_response</a> - Retrieve the LDAP pagination cookie</li>
        <li><a href="function.ldap-count-entries.php" class="index">ldap_count_entries</a> - Count the number of entries in a search</li>
        <li><a href="function.ldap-count-references.php" class="index">ldap_count_references</a> - Counts the number of references in a search result</li>
        <li><a href="function.ldap-delete.php" class="index">ldap_delete</a> - Delete an entry from a directory</li>
        <li><a href="function.ldap-delete-ext.php" class="index">ldap_delete_ext</a> - Delete an entry from a directory</li>
        <li><a href="function.ldap-dn2ufn.php" class="index">ldap_dn2ufn</a> - Convert DN to User Friendly Naming format</li>
        <li><a href="function.ldap-err2str.php" class="index">ldap_err2str</a> - Convert LDAP error number into string error message</li>
        <li><a href="function.ldap-errno.php" class="index">ldap_errno</a> - Return the LDAP error number of the last LDAP command</li>
        <li><a href="function.ldap-error.php" class="index">ldap_error</a> - Return the LDAP error message of the last LDAP command</li>
        <li><a href="function.ldap-escape.php" class="index">ldap_escape</a> - Escape a string for use in an LDAP filter or DN</li>
        <li><a href="function.ldap-exop.php" class="index">ldap_exop</a> - Performs an extended operation</li>
        <li><a href="function.ldap-exop-passwd.php" class="index">ldap_exop_passwd</a> - PASSWD extended operation helper</li>
        <li><a href="function.ldap-exop-refresh.php" class="index">ldap_exop_refresh</a> - Refresh extended operation helper</li>
        <li><a href="function.ldap-exop-sync.php" class="index">ldap_exop_sync</a> - Performs an extended operation</li>
        <li><a href="function.ldap-exop-whoami.php" class="index">ldap_exop_whoami</a> - WHOAMI extended operation helper</li>
        <li><a href="function.ldap-explode-dn.php" class="index">ldap_explode_dn</a> - Splits DN into its component parts</li>
        <li><a href="function.ldap-first-attribute.php" class="index">ldap_first_attribute</a> - Return first attribute</li>
        <li><a href="function.ldap-first-entry.php" class="index">ldap_first_entry</a> - Return first result id</li>
        <li><a href="function.ldap-first-reference.php" class="index">ldap_first_reference</a> - Return first reference</li>
        <li><a href="function.ldap-free-result.php" class="index">ldap_free_result</a> - Free result memory</li>
        <li><a href="function.ldap-get-attributes.php" class="index">ldap_get_attributes</a> - Get attributes from a search result entry</li>
        <li><a href="function.ldap-get-dn.php" class="index">ldap_get_dn</a> - Get the DN of a result entry</li>
        <li><a href="function.ldap-get-entries.php" class="index">ldap_get_entries</a> - Get all result entries</li>
        <li><a href="function.ldap-get-option.php" class="index">ldap_get_option</a> - Get the current value for given option</li>
        <li><a href="function.ldap-get-values.php" class="index">ldap_get_values</a> - Get all values from a result entry</li>
        <li><a href="function.ldap-get-values-len.php" class="index">ldap_get_values_len</a> - Get all binary values from a result entry</li>
        <li><a href="function.ldap-list.php" class="index">ldap_list</a> - Single-level search</li>
        <li><a href="function.ldap-modify.php" class="index">ldap_modify</a> - Alias of ldap_mod_replace</li>
        <li><a href="function.ldap-modify-batch.php" class="index">ldap_modify_batch</a> - Batch and execute modifications on an LDAP entry</li>
        <li><a href="function.ldap-mod-add.php" class="index">ldap_mod_add</a> - Add attribute values to current attributes</li>
        <li><a href="function.ldap-mod_add-ext.php" class="index">ldap_mod_add_ext</a> - Add attribute values to current attributes</li>
        <li><a href="function.ldap-mod-del.php" class="index">ldap_mod_del</a> - Delete attribute values from current attributes</li>
        <li><a href="function.ldap-mod_del-ext.php" class="index">ldap_mod_del_ext</a> - Delete attribute values from current attributes</li>
        <li><a href="function.ldap-mod-replace.php" class="index">ldap_mod_replace</a> - Replace attribute values with new ones</li>
        <li><a href="function.ldap-mod_replace-ext.php" class="index">ldap_mod_replace_ext</a> - Replace attribute values with new ones</li>
        <li><a href="function.ldap-next-attribute.php" class="index">ldap_next_attribute</a> - Get the next attribute in result</li>
        <li><a href="function.ldap-next-entry.php" class="index">ldap_next_entry</a> - Get next result entry</li>
        <li><a href="function.ldap-next-reference.php" class="index">ldap_next_reference</a> - Get next reference</li>
        <li><a href="function.ldap-parse-exop.php" class="index">ldap_parse_exop</a> - Parse result object from an LDAP extended operation</li>
        <li><a href="function.ldap-parse-reference.php" class="index">ldap_parse_reference</a> - Extract information from reference entry</li>
        <li><a href="function.ldap-parse-result.php" class="index">ldap_parse_result</a> - Extract information from result</li>
        <li><a href="function.ldap-read.php" class="index">ldap_read</a> - Read an entry</li>
        <li><a href="function.ldap-rename.php" class="index">ldap_rename</a> - Modify the name of an entry</li>
        <li><a href="function.ldap-rename-ext.php" class="index">ldap_rename_ext</a> - Modify the name of an entry</li>
        <li><a href="function.ldap-sasl-bind.php" class="index">ldap_sasl_bind</a> - Bind to LDAP directory using SASL</li>
        <li><a href="function.ldap-search.php" class="index">ldap_search</a> - Search LDAP tree</li>
        <li><a href="function.ldap-set-option.php" class="index">ldap_set_option</a> - Set the value of the given option</li>
        <li><a href="function.ldap-set-rebind-proc.php" class="index">ldap_set_rebind_proc</a> - Set a callback function to do re-binds on referral chasing</li>
        <li><a href="function.ldap-sort.php" class="index">ldap_sort</a> - Sort LDAP result entries on the client side</li>
        <li><a href="function.ldap-start-tls.php" class="index">ldap_start_tls</a> - Start TLS</li>
        <li><a href="function.ldap-t61-to-8859.php" class="index">ldap_t61_to_8859</a> - Translate t61 characters to 8859 characters</li>
        <li><a href="function.ldap-unbind.php" class="index">ldap_unbind</a> - Unbind from LDAP directory</li>
        <li><a href="function.levenshtein.php" class="index">levenshtein</a> - Calculate Levenshtein distance between two strings</li>
        <li><a href="function.libxml-clear-errors.php" class="index">libxml_clear_errors</a> - Clear libxml error buffer</li>
        <li><a href="function.libxml-disable-entity-loader.php" class="index">libxml_disable_entity_loader</a> - Disable the ability to load external entities</li>
        <li><a href="function.libxml-get-errors.php" class="index">libxml_get_errors</a> - Retrieve array of errors</li>
        <li><a href="function.libxml-get-external-entity-loader.php" class="index">libxml_get_external_entity_loader</a> - Get the current external entity loader</li>
        <li><a href="function.libxml-get-last-error.php" class="index">libxml_get_last_error</a> - Retrieve last error from libxml</li>
        <li><a href="function.libxml-set-external-entity-loader.php" class="index">libxml_set_external_entity_loader</a> - Changes the default external entity loader</li>
        <li><a href="function.libxml-set-streams-context.php" class="index">libxml_set_streams_context</a> - Set the streams context for the next libxml document load or write</li>
        <li><a href="function.libxml-use-internal-errors.php" class="index">libxml_use_internal_errors</a> - Disable libxml errors and allow user to fetch error information as needed</li>
        <li><a href="limititerator.current.php" class="index">LimitIterator::current</a> - Get current element</li>
        <li><a href="limititerator.getposition.php" class="index">LimitIterator::getPosition</a> - Return the current position</li>
        <li><a href="limititerator.key.php" class="index">LimitIterator::key</a> - Get current key</li>
        <li><a href="limititerator.next.php" class="index">LimitIterator::next</a> - Move the iterator forward</li>
        <li><a href="limititerator.rewind.php" class="index">LimitIterator::rewind</a> - Rewind the iterator to the specified starting offset</li>
        <li><a href="limititerator.seek.php" class="index">LimitIterator::seek</a> - Seek to the given position</li>
        <li><a href="limititerator.valid.php" class="index">LimitIterator::valid</a> - Check whether the current element is valid</li>
        <li><a href="limititerator.construct.php" class="index">LimitIterator::__construct</a> - Construct a LimitIterator</li>
        <li><a href="function.link.php" class="index">link</a> - Create a hard link</li>
        <li><a href="function.linkinfo.php" class="index">linkinfo</a> - Gets information about a link</li>
        <li><a href="function.list.php" class="index">list</a> - Assign variables as if they were an array</li>
        <li><a href="locale.acceptfromhttp.php" class="index">Locale::acceptFromHttp</a> - Tries to find out best available locale based on HTTP &quot;Accept-Language&quot; header</li>
        <li><a href="locale.canonicalize.php" class="index">Locale::canonicalize</a> - Canonicalize the locale string</li>
        <li><a href="locale.composelocale.php" class="index">Locale::composeLocale</a> - Returns a correctly ordered and delimited locale ID</li>
        <li><a href="locale.filtermatches.php" class="index">Locale::filterMatches</a> - Checks if a language tag filter matches with locale</li>
        <li><a href="locale.getallvariants.php" class="index">Locale::getAllVariants</a> - Gets the variants for the input locale</li>
        <li><a href="locale.getdefault.php" class="index">Locale::getDefault</a> - Gets the default locale value from the INTL global 'default_locale'</li>
        <li><a href="locale.getdisplaylanguage.php" class="index">Locale::getDisplayLanguage</a> - Returns an appropriately localized display name for language of the inputlocale</li>
        <li><a href="locale.getdisplayname.php" class="index">Locale::getDisplayName</a> - Returns an appropriately localized display name for the input locale</li>
        <li><a href="locale.getdisplayregion.php" class="index">Locale::getDisplayRegion</a> - Returns an appropriately localized display name for region of the input locale</li>
        <li><a href="locale.getdisplayscript.php" class="index">Locale::getDisplayScript</a> - Returns an appropriately localized display name for script of the input locale</li>
        <li><a href="locale.getdisplayvariant.php" class="index">Locale::getDisplayVariant</a> - Returns an appropriately localized display name for variants of the input locale</li>
        <li><a href="locale.getkeywords.php" class="index">Locale::getKeywords</a> - Gets the keywords for the input locale</li>
        <li><a href="locale.getprimarylanguage.php" class="index">Locale::getPrimaryLanguage</a> - Gets the primary language for the input locale</li>
        <li><a href="locale.getregion.php" class="index">Locale::getRegion</a> - Gets the region for the input locale</li>
        <li><a href="locale.getscript.php" class="index">Locale::getScript</a> - Gets the script for the input locale</li>
        <li><a href="locale.lookup.php" class="index">Locale::lookup</a> - Searches the language tag list for the best match to the language</li>
        <li><a href="locale.parselocale.php" class="index">Locale::parseLocale</a> - Returns a key-value array of locale ID subtag elements</li>
        <li><a href="locale.setdefault.php" class="index">Locale::setDefault</a> - Sets the default runtime locale</li>
        <li><a href="function.localeconv.php" class="index">localeconv</a> - Get numeric formatting information</li>
        <li><a href="function.localtime.php" class="index">localtime</a> - Get the local time</li>
        <li><a href="function.log.php" class="index">log</a> - Natural logarithm</li>
        <li><a href="function.log1p.php" class="index">log1p</a> - Returns log(1 + number), computed in a way that is accurate even when
           the value of number is close to zero</li>
        <li><a href="function.log10.php" class="index">log10</a> - Base-10 logarithm</li>
        <li><a href="function.long2ip.php" class="index">long2ip</a> - Converts a long integer address into a string in (IPv4) Internet standard dotted format</li>
        <li><a href="function.lstat.php" class="index">lstat</a> - Gives information about a file or symbolic link</li>
        <li><a href="function.ltrim.php" class="index">ltrim</a> - Strip whitespace (or other characters) from the beginning of a string</li>
        <li><a href="lua.assign.php" class="index">Lua::assign</a> - Assign a PHP variable to Lua</li>
        <li><a href="lua.call.php" class="index">Lua::call</a> - Call Lua functions</li>
        <li><a href="lua.eval.php" class="index">Lua::eval</a> - Evaluate a string as Lua code</li>
        <li><a href="lua.getversion.php" class="index">Lua::getVersion</a> - The getversion purpose</li>
        <li><a href="lua.include.php" class="index">Lua::include</a> - Parse a Lua script file</li>
        <li><a href="lua.registercallback.php" class="index">Lua::registerCallback</a> - Register a PHP function to Lua</li>
        <li><a href="lua.construct.php" class="index">Lua::__construct</a> - Lua constructor</li>
        <li><a href="luaclosure.invoke.php" class="index">LuaClosure::__invoke</a> - Invoke luaclosure</li>
        <li><a href="luasandbox.callfunction.php" class="index">LuaSandbox::callFunction</a> - Call a function in a Lua global variable</li>
        <li><a href="luasandbox.disableprofiler.php" class="index">LuaSandbox::disableProfiler</a> - Disable the profiler</li>
        <li><a href="luasandbox.enableprofiler.php" class="index">LuaSandbox::enableProfiler</a> - Enable the profiler.</li>
        <li><a href="luasandbox.getcpuusage.php" class="index">LuaSandbox::getCPUUsage</a> - Fetch the current CPU time usage of the Lua environment</li>
        <li><a href="luasandbox.getmemoryusage.php" class="index">LuaSandbox::getMemoryUsage</a> - Fetch the current memory usage of the Lua environment</li>
        <li><a href="luasandbox.getpeakmemoryusage.php" class="index">LuaSandbox::getPeakMemoryUsage</a> - Fetch the peak memory usage of the Lua environment</li>
        <li><a href="luasandbox.getprofilerfunctionreport.php" class="index">LuaSandbox::getProfilerFunctionReport</a> - Fetch profiler data</li>
        <li><a href="luasandbox.getversioninfo.php" class="index">LuaSandbox::getVersionInfo</a> - Return the versions of LuaSandbox and Lua</li>
        <li><a href="luasandbox.loadbinary.php" class="index">LuaSandbox::loadBinary</a> - Load a precompiled binary chunk into the Lua environment</li>
        <li><a href="luasandbox.loadstring.php" class="index">LuaSandbox::loadString</a> - Load Lua code into the Lua environment</li>
        <li><a href="luasandbox.pauseusagetimer.php" class="index">LuaSandbox::pauseUsageTimer</a> - Pause the CPU usage timer</li>
        <li><a href="luasandbox.registerlibrary.php" class="index">LuaSandbox::registerLibrary</a> - Register a set of PHP functions as a Lua library</li>
        <li><a href="luasandbox.setcpulimit.php" class="index">LuaSandbox::setCPULimit</a> - Set the CPU time limit for the Lua environment</li>
        <li><a href="luasandbox.setmemorylimit.php" class="index">LuaSandbox::setMemoryLimit</a> - Set the memory limit for the Lua environment</li>
        <li><a href="luasandbox.unpauseusagetimer.php" class="index">LuaSandbox::unpauseUsageTimer</a> - Unpause the timer paused by LuaSandbox::pauseUsageTimer</li>
        <li><a href="luasandbox.wrapphpfunction.php" class="index">LuaSandbox::wrapPhpFunction</a> - Wrap a PHP callable in a LuaSandboxFunction</li>
        <li><a href="luasandboxfunction.call.php" class="index">LuaSandboxFunction::call</a> - Call a Lua function</li>
        <li><a href="luasandboxfunction.dump.php" class="index">LuaSandboxFunction::dump</a> - Dump the function as a binary blob</li>
        <li><a href="luasandboxfunction.construct.php" class="index">LuaSandboxFunction::__construct</a> - Unused</li>
        <li><a href="function.lzf-compress.php" class="index">lzf_compress</a> - LZF compression</li>
        <li><a href="function.lzf-decompress.php" class="index">lzf_decompress</a> - LZF decompression</li>
        <li><a href="function.lzf-optimized-for.php" class="index">lzf_optimized_for</a> - Determines what LZF extension was optimized for</li>
        </ul></li>
        <li class='gen-index index-for-m'>m<ul id='refentry-index-for-m'>
        <li><a href="function.mail.php" class="index">mail</a> - Send mail</li>
        <li><a href="function.mailparse-determine-best-xfer-encoding.php" class="index">mailparse_determine_best_xfer_encoding</a> - Gets the best way of encoding</li>
        <li><a href="function.mailparse-msg-create.php" class="index">mailparse_msg_create</a> - Create a mime mail resource</li>
        <li><a href="function.mailparse-msg-extract-part.php" class="index">mailparse_msg_extract_part</a> - Extracts/decodes a message section</li>
        <li><a href="function.mailparse-msg-extract-part-file.php" class="index">mailparse_msg_extract_part_file</a> - Extracts/decodes a message section</li>
        <li><a href="function.mailparse-msg-extract-whole-part-file.php" class="index">mailparse_msg_extract_whole_part_file</a> - Extracts a message section including headers without decoding the transfer encoding</li>
        <li><a href="function.mailparse-msg-free.php" class="index">mailparse_msg_free</a> - Frees a MIME resource</li>
        <li><a href="function.mailparse-msg-get-part.php" class="index">mailparse_msg_get_part</a> - Returns a handle on a given section in a mimemessage</li>
        <li><a href="function.mailparse-msg-get-part-data.php" class="index">mailparse_msg_get_part_data</a> - Returns an associative array of info about the message</li>
        <li><a href="function.mailparse-msg-get-structure.php" class="index">mailparse_msg_get_structure</a> - Returns an array of mime section names in the supplied message</li>
        <li><a href="function.mailparse-msg-parse.php" class="index">mailparse_msg_parse</a> - Incrementally parse data into buffer</li>
        <li><a href="function.mailparse-msg-parse-file.php" class="index">mailparse_msg_parse_file</a> - Parses a file</li>
        <li><a href="function.mailparse-rfc822-parse-addresses.php" class="index">mailparse_rfc822_parse_addresses</a> - Parse RFC 822 compliant addresses</li>
        <li><a href="function.mailparse-stream-encode.php" class="index">mailparse_stream_encode</a> - Streams data from source file pointer, apply encoding and write to destfp</li>
        <li><a href="function.mailparse-uudecode-all.php" class="index">mailparse_uudecode_all</a> - Scans the data from fp and extract each embedded uuencoded file</li>
        <li><a href="function.max.php" class="index">max</a> - Find highest value</li>
        <li><a href="function.mb-check-encoding.php" class="index">mb_check_encoding</a> - Check if strings are valid for the specified encoding</li>
        <li><a href="function.mb-chr.php" class="index">mb_chr</a> - Return character by Unicode code point value</li>
        <li><a href="function.mb-convert-case.php" class="index">mb_convert_case</a> - Perform case folding on a string</li>
        <li><a href="function.mb-convert-encoding.php" class="index">mb_convert_encoding</a> - Convert a string from one character encoding to another</li>
        <li><a href="function.mb-convert-kana.php" class="index">mb_convert_kana</a> - Convert &quot;kana&quot; one from another (&quot;zen-kaku&quot;, &quot;han-kaku&quot; and more)</li>
        <li><a href="function.mb-convert-variables.php" class="index">mb_convert_variables</a> - Convert character code in variable(s)</li>
        <li><a href="function.mb-decode-mimeheader.php" class="index">mb_decode_mimeheader</a> - Decode string in MIME header field</li>
        <li><a href="function.mb-decode-numericentity.php" class="index">mb_decode_numericentity</a> - Decode HTML numeric string reference to character</li>
        <li><a href="function.mb-detect-encoding.php" class="index">mb_detect_encoding</a> - Detect character encoding</li>
        <li><a href="function.mb-detect-order.php" class="index">mb_detect_order</a> - Set/Get character encoding detection order</li>
        <li><a href="function.mb-encode-mimeheader.php" class="index">mb_encode_mimeheader</a> - Encode string for MIME header</li>
        <li><a href="function.mb-encode-numericentity.php" class="index">mb_encode_numericentity</a> - Encode character to HTML numeric string reference</li>
        <li><a href="function.mb-encoding-aliases.php" class="index">mb_encoding_aliases</a> - Get aliases of a known encoding type</li>
        <li><a href="function.mb-ereg.php" class="index">mb_ereg</a> - Regular expression match with multibyte support</li>
        <li><a href="function.mb-eregi.php" class="index">mb_eregi</a> - Regular expression match ignoring case with multibyte support</li>
        <li><a href="function.mb-eregi-replace.php" class="index">mb_eregi_replace</a> - Replace regular expression with multibyte support ignoring case</li>
        <li><a href="function.mb-ereg-match.php" class="index">mb_ereg_match</a> - Regular expression match for multibyte string</li>
        <li><a href="function.mb-ereg-replace.php" class="index">mb_ereg_replace</a> - Replace regular expression with multibyte support</li>
        <li><a href="function.mb-ereg-replace-callback.php" class="index">mb_ereg_replace_callback</a> - Perform a regular expression search and replace with multibyte support using a callback</li>
        <li><a href="function.mb-ereg-search.php" class="index">mb_ereg_search</a> - Multibyte regular expression match for predefined multibyte string</li>
        <li><a href="function.mb-ereg-search-getpos.php" class="index">mb_ereg_search_getpos</a> - Returns start point for next regular expression match</li>
        <li><a href="function.mb-ereg-search-getregs.php" class="index">mb_ereg_search_getregs</a> - Retrieve the result from the last multibyte regular expression match</li>
        <li><a href="function.mb-ereg-search-init.php" class="index">mb_ereg_search_init</a> - Setup string and regular expression for a multibyte regular expression match</li>
        <li><a href="function.mb-ereg-search-pos.php" class="index">mb_ereg_search_pos</a> - Returns position and length of a matched part of the multibyte regular expression for a predefined multibyte string</li>
        <li><a href="function.mb-ereg-search-regs.php" class="index">mb_ereg_search_regs</a> - Returns the matched part of a multibyte regular expression</li>
        <li><a href="function.mb-ereg-search-setpos.php" class="index">mb_ereg_search_setpos</a> - Set start point of next regular expression match</li>
        <li><a href="function.mb-get-info.php" class="index">mb_get_info</a> - Get internal settings of mbstring</li>
        <li><a href="function.mb-http-input.php" class="index">mb_http_input</a> - Detect HTTP input character encoding</li>
        <li><a href="function.mb-http-output.php" class="index">mb_http_output</a> - Set/Get HTTP output character encoding</li>
        <li><a href="function.mb-internal-encoding.php" class="index">mb_internal_encoding</a> - Set/Get internal character encoding</li>
        <li><a href="function.mb-language.php" class="index">mb_language</a> - Set/Get current language</li>
        <li><a href="function.mb-list-encodings.php" class="index">mb_list_encodings</a> - Returns an array of all supported encodings</li>
        <li><a href="function.mb-ord.php" class="index">mb_ord</a> - Get Unicode code point of character</li>
        <li><a href="function.mb-output-handler.php" class="index">mb_output_handler</a> - Callback function converts character encoding in output buffer</li>
        <li><a href="function.mb-parse-str.php" class="index">mb_parse_str</a> - Parse GET/POST/COOKIE data and set global variable</li>
        <li><a href="function.mb-preferred-mime-name.php" class="index">mb_preferred_mime_name</a> - Get MIME charset string</li>
        <li><a href="function.mb-regex-encoding.php" class="index">mb_regex_encoding</a> - Set/Get character encoding for multibyte regex</li>
        <li><a href="function.mb-regex-set-options.php" class="index">mb_regex_set_options</a> - Set/Get the default options for mbregex functions</li>
        <li><a href="function.mb-scrub.php" class="index">mb_scrub</a> - Replace ill-formed byte sequences with the substitute character</li>
        <li><a href="function.mb-send-mail.php" class="index">mb_send_mail</a> - Send encoded mail</li>
        <li><a href="function.mb-split.php" class="index">mb_split</a> - Split multibyte string using regular expression</li>
        <li><a href="function.mb-strcut.php" class="index">mb_strcut</a> - Get part of string</li>
        <li><a href="function.mb-strimwidth.php" class="index">mb_strimwidth</a> - Get truncated string with specified width</li>
        <li><a href="function.mb-stripos.php" class="index">mb_stripos</a> - Finds position of first occurrence of a string within another, case insensitive</li>
        <li><a href="function.mb-stristr.php" class="index">mb_stristr</a> - Finds first occurrence of a string within another, case insensitive</li>
        <li><a href="function.mb-strlen.php" class="index">mb_strlen</a> - Get string length</li>
        <li><a href="function.mb-strpos.php" class="index">mb_strpos</a> - Find position of first occurrence of string in a string</li>
        <li><a href="function.mb-strrchr.php" class="index">mb_strrchr</a> - Finds the last occurrence of a character in a string within another</li>
        <li><a href="function.mb-strrichr.php" class="index">mb_strrichr</a> - Finds the last occurrence of a character in a string within another, case insensitive</li>
        <li><a href="function.mb-strripos.php" class="index">mb_strripos</a> - Finds position of last occurrence of a string within another, case insensitive</li>
        <li><a href="function.mb-strrpos.php" class="index">mb_strrpos</a> - Find position of last occurrence of a string in a string</li>
        <li><a href="function.mb-strstr.php" class="index">mb_strstr</a> - Finds first occurrence of a string within another</li>
        <li><a href="function.mb-strtolower.php" class="index">mb_strtolower</a> - Make a string lowercase</li>
        <li><a href="function.mb-strtoupper.php" class="index">mb_strtoupper</a> - Make a string uppercase</li>
        <li><a href="function.mb-strwidth.php" class="index">mb_strwidth</a> - Return width of string</li>
        <li><a href="function.mb-str-pad.php" class="index">mb_str_pad</a> - Pad a multibyte string to a certain length with another multibyte string</li>
        <li><a href="function.mb-str-split.php" class="index">mb_str_split</a> - Given a multibyte string, return an array of its characters</li>
        <li><a href="function.mb-substitute-character.php" class="index">mb_substitute_character</a> - Set/Get substitution character</li>
        <li><a href="function.mb-substr.php" class="index">mb_substr</a> - Get part of string</li>
        <li><a href="function.mb-substr-count.php" class="index">mb_substr_count</a> - Count the number of substring occurrences</li>
        <li><a href="function.mcrypt-create-iv.php" class="index">mcrypt_create_iv</a> - Creates an initialization vector (IV) from a random source</li>
        <li><a href="function.mcrypt-decrypt.php" class="index">mcrypt_decrypt</a> - Decrypts crypttext with given parameters</li>
        <li><a href="function.mcrypt-encrypt.php" class="index">mcrypt_encrypt</a> - Encrypts plaintext with given parameters</li>
        <li><a href="function.mcrypt-enc-get-algorithms-name.php" class="index">mcrypt_enc_get_algorithms_name</a> - Returns the name of the opened algorithm</li>
        <li><a href="function.mcrypt-enc-get-block-size.php" class="index">mcrypt_enc_get_block_size</a> - Returns the blocksize of the opened algorithm</li>
        <li><a href="function.mcrypt-enc-get-iv-size.php" class="index">mcrypt_enc_get_iv_size</a> - Returns the size of the IV of the opened algorithm</li>
        <li><a href="function.mcrypt-enc-get-key-size.php" class="index">mcrypt_enc_get_key_size</a> - Returns the maximum supported keysize of the opened mode</li>
        <li><a href="function.mcrypt-enc-get-modes-name.php" class="index">mcrypt_enc_get_modes_name</a> - Returns the name of the opened mode</li>
        <li><a href="function.mcrypt-enc-get-supported-key-sizes.php" class="index">mcrypt_enc_get_supported_key_sizes</a> - Returns an array with the supported keysizes of the opened algorithm</li>
        <li><a href="function.mcrypt-enc-is-block-algorithm.php" class="index">mcrypt_enc_is_block_algorithm</a> - Checks whether the algorithm of the opened mode is a block algorithm</li>
        <li><a href="function.mcrypt-enc-is-block-algorithm-mode.php" class="index">mcrypt_enc_is_block_algorithm_mode</a> - Checks whether the encryption of the opened mode works on blocks</li>
        <li><a href="function.mcrypt-enc-is-block-mode.php" class="index">mcrypt_enc_is_block_mode</a> - Checks whether the opened mode outputs blocks</li>
        <li><a href="function.mcrypt-enc-self-test.php" class="index">mcrypt_enc_self_test</a> - Runs a self test on the opened module</li>
        <li><a href="function.mcrypt-generic.php" class="index">mcrypt_generic</a> - This function encrypts data</li>
        <li><a href="function.mcrypt-generic-deinit.php" class="index">mcrypt_generic_deinit</a> - This function deinitializes an encryption module</li>
        <li><a href="function.mcrypt-generic-init.php" class="index">mcrypt_generic_init</a> - This function initializes all buffers needed for encryption</li>
        <li><a href="function.mcrypt-get-block-size.php" class="index">mcrypt_get_block_size</a> - Gets the block size of the specified cipher</li>
        <li><a href="function.mcrypt-get-cipher-name.php" class="index">mcrypt_get_cipher_name</a> - Gets the name of the specified cipher</li>
        <li><a href="function.mcrypt-get-iv-size.php" class="index">mcrypt_get_iv_size</a> - Returns the size of the IV belonging to a specific cipher/mode combination</li>
        <li><a href="function.mcrypt-get-key-size.php" class="index">mcrypt_get_key_size</a> - Gets the key size of the specified cipher</li>
        <li><a href="function.mcrypt-list-algorithms.php" class="index">mcrypt_list_algorithms</a> - Gets an array of all supported ciphers</li>
        <li><a href="function.mcrypt-list-modes.php" class="index">mcrypt_list_modes</a> - Gets an array of all supported modes</li>
        <li><a href="function.mcrypt-module-close.php" class="index">mcrypt_module_close</a> - Closes the mcrypt module</li>
        <li><a href="function.mcrypt-module-get-algo-block-size.php" class="index">mcrypt_module_get_algo_block_size</a> - Returns the blocksize of the specified algorithm</li>
        <li><a href="function.mcrypt-module-get-algo-key-size.php" class="index">mcrypt_module_get_algo_key_size</a> - Returns the maximum supported keysize of the opened mode</li>
        <li><a href="function.mcrypt-module-get-supported-key-sizes.php" class="index">mcrypt_module_get_supported_key_sizes</a> - Returns an array with the supported keysizes of the opened algorithm</li>
        <li><a href="function.mcrypt-module-is-block-algorithm.php" class="index">mcrypt_module_is_block_algorithm</a> - This function checks whether the specified algorithm is a block algorithm</li>
        <li><a href="function.mcrypt-module-is-block-algorithm-mode.php" class="index">mcrypt_module_is_block_algorithm_mode</a> - Returns if the specified module is a block algorithm or not</li>
        <li><a href="function.mcrypt-module-is-block-mode.php" class="index">mcrypt_module_is_block_mode</a> - Returns if the specified mode outputs blocks or not</li>
        <li><a href="function.mcrypt-module-open.php" class="index">mcrypt_module_open</a> - Opens the module of the algorithm and the mode to be used</li>
        <li><a href="function.mcrypt-module-self-test.php" class="index">mcrypt_module_self_test</a> - This function runs a self test on the specified module</li>
        <li><a href="function.md5.php" class="index">md5</a> - Calculate the md5 hash of a string</li>
        <li><a href="function.md5-file.php" class="index">md5_file</a> - Calculates the md5 hash of a given file</li>
        <li><a href="function.mdecrypt-generic.php" class="index">mdecrypt_generic</a> - Decrypts data</li>
        <li><a href="memcache.add.php" class="index">Memcache::add</a> - Add an item to the server</li>
        <li><a href="memcache.addserver.php" class="index">Memcache::addServer</a> - Add a memcached server to connection pool</li>
        <li><a href="memcache.close.php" class="index">Memcache::close</a> - Close memcached server connection</li>
        <li><a href="memcache.connect.php" class="index">Memcache::connect</a> - Open memcached server connection</li>
        <li><a href="memcache.decrement.php" class="index">Memcache::decrement</a> - Decrement item's value</li>
        <li><a href="memcache.delete.php" class="index">Memcache::delete</a> - Delete item from the server</li>
        <li><a href="memcache.flush.php" class="index">Memcache::flush</a> - Flush all existing items at the server</li>
        <li><a href="memcache.get.php" class="index">Memcache::get</a> - Retrieve item from the server</li>
        <li><a href="memcache.getextendedstats.php" class="index">Memcache::getExtendedStats</a> - Get statistics from all servers in pool</li>
        <li><a href="memcache.getserverstatus.php" class="index">Memcache::getServerStatus</a> - Returns server status</li>
        <li><a href="memcache.getstats.php" class="index">Memcache::getStats</a> - Get statistics of the server</li>
        <li><a href="memcache.getversion.php" class="index">Memcache::getVersion</a> - Return version of the server</li>
        <li><a href="memcache.increment.php" class="index">Memcache::increment</a> - Increment item's value</li>
        <li><a href="memcache.pconnect.php" class="index">Memcache::pconnect</a> - Open memcached server persistent connection</li>
        <li><a href="memcache.replace.php" class="index">Memcache::replace</a> - Replace value of the existing item</li>
        <li><a href="memcache.set.php" class="index">Memcache::set</a> - Store data at the server</li>
        <li><a href="memcache.setcompressthreshold.php" class="index">Memcache::setCompressThreshold</a> - Enable automatic compression of large values</li>
        <li><a href="memcache.setserverparams.php" class="index">Memcache::setServerParams</a> - Changes server parameters and status at runtime</li>
        <li><a href="memcached.add.php" class="index">Memcached::add</a> - Add an item under a new key</li>
        <li><a href="memcached.addbykey.php" class="index">Memcached::addByKey</a> - Add an item under a new key on a specific server</li>
        <li><a href="memcached.addserver.php" class="index">Memcached::addServer</a> - Add a server to the server pool</li>
        <li><a href="memcached.addservers.php" class="index">Memcached::addServers</a> - Add multiple servers to the server pool</li>
        <li><a href="memcached.append.php" class="index">Memcached::append</a> - Append data to an existing item</li>
        <li><a href="memcached.appendbykey.php" class="index">Memcached::appendByKey</a> - Append data to an existing item on a specific server</li>
        <li><a href="memcached.cas.php" class="index">Memcached::cas</a> - Compare and swap an item</li>
        <li><a href="memcached.casbykey.php" class="index">Memcached::casByKey</a> - Compare and swap an item on a specific server</li>
        <li><a href="memcached.decrement.php" class="index">Memcached::decrement</a> - Decrement numeric item's value</li>
        <li><a href="memcached.decrementbykey.php" class="index">Memcached::decrementByKey</a> - Decrement numeric item's value, stored on a specific server</li>
        <li><a href="memcached.delete.php" class="index">Memcached::delete</a> - Delete an item</li>
        <li><a href="memcached.deletebykey.php" class="index">Memcached::deleteByKey</a> - Delete an item from a specific server</li>
        <li><a href="memcached.deletemulti.php" class="index">Memcached::deleteMulti</a> - Delete multiple items</li>
        <li><a href="memcached.deletemultibykey.php" class="index">Memcached::deleteMultiByKey</a> - Delete multiple items from a specific server</li>
        <li><a href="memcached.fetch.php" class="index">Memcached::fetch</a> - Fetch the next result</li>
        <li><a href="memcached.fetchall.php" class="index">Memcached::fetchAll</a> - Fetch all the remaining results</li>
        <li><a href="memcached.flush.php" class="index">Memcached::flush</a> - Invalidate all items in the cache</li>
        <li><a href="memcached.get.php" class="index">Memcached::get</a> - Retrieve an item</li>
        <li><a href="memcached.getallkeys.php" class="index">Memcached::getAllKeys</a> - Gets the keys stored on all the servers</li>
        <li><a href="memcached.getbykey.php" class="index">Memcached::getByKey</a> - Retrieve an item from a specific server</li>
        <li><a href="memcached.getdelayed.php" class="index">Memcached::getDelayed</a> - Request multiple items</li>
        <li><a href="memcached.getdelayedbykey.php" class="index">Memcached::getDelayedByKey</a> - Request multiple items from a specific server</li>
        <li><a href="memcached.getmulti.php" class="index">Memcached::getMulti</a> - Retrieve multiple items</li>
        <li><a href="memcached.getmultibykey.php" class="index">Memcached::getMultiByKey</a> - Retrieve multiple items from a specific server</li>
        <li><a href="memcached.getoption.php" class="index">Memcached::getOption</a> - Retrieve a Memcached option value</li>
        <li><a href="memcached.getresultcode.php" class="index">Memcached::getResultCode</a> - Return the result code of the last operation</li>
        <li><a href="memcached.getresultmessage.php" class="index">Memcached::getResultMessage</a> - Return the message describing the result of the last operation</li>
        <li><a href="memcached.getserverbykey.php" class="index">Memcached::getServerByKey</a> - Map a key to a server</li>
        <li><a href="memcached.getserverlist.php" class="index">Memcached::getServerList</a> - Get the list of the servers in the pool</li>
        <li><a href="memcached.getstats.php" class="index">Memcached::getStats</a> - Get server pool statistics</li>
        <li><a href="memcached.getversion.php" class="index">Memcached::getVersion</a> - Get server pool version info</li>
        <li><a href="memcached.increment.php" class="index">Memcached::increment</a> - Increment numeric item's value</li>
        <li><a href="memcached.incrementbykey.php" class="index">Memcached::incrementByKey</a> - Increment numeric item's value, stored on a specific server</li>
        <li><a href="memcached.ispersistent.php" class="index">Memcached::isPersistent</a> - Check if a persitent connection to memcache is being used</li>
        <li><a href="memcached.ispristine.php" class="index">Memcached::isPristine</a> - Check if the instance was recently created</li>
        <li><a href="memcached.prepend.php" class="index">Memcached::prepend</a> - Prepend data to an existing item</li>
        <li><a href="memcached.prependbykey.php" class="index">Memcached::prependByKey</a> - Prepend data to an existing item on a specific server</li>
        <li><a href="memcached.quit.php" class="index">Memcached::quit</a> - Close any open connections</li>
        <li><a href="memcached.replace.php" class="index">Memcached::replace</a> - Replace the item under an existing key</li>
        <li><a href="memcached.replacebykey.php" class="index">Memcached::replaceByKey</a> - Replace the item under an existing key on a specific server</li>
        <li><a href="memcached.resetserverlist.php" class="index">Memcached::resetServerList</a> - Clears all servers from the server list</li>
        <li><a href="memcached.set.php" class="index">Memcached::set</a> - Store an item</li>
        <li><a href="memcached.setbykey.php" class="index">Memcached::setByKey</a> - Store an item on a specific server</li>
        <li><a href="memcached.setmulti.php" class="index">Memcached::setMulti</a> - Store multiple items</li>
        <li><a href="memcached.setmultibykey.php" class="index">Memcached::setMultiByKey</a> - Store multiple items on a specific server</li>
        <li><a href="memcached.setoption.php" class="index">Memcached::setOption</a> - Set a Memcached option</li>
        <li><a href="memcached.setoptions.php" class="index">Memcached::setOptions</a> - Set Memcached options</li>
        <li><a href="memcached.setsaslauthdata.php" class="index">Memcached::setSaslAuthData</a> - Set the credentials to use for authentication</li>
        <li><a href="memcached.touch.php" class="index">Memcached::touch</a> - Set a new expiration on an item</li>
        <li><a href="memcached.touchbykey.php" class="index">Memcached::touchByKey</a> - Set a new expiration on an item on a specific server</li>
        <li><a href="memcached.construct.php" class="index">Memcached::__construct</a> - Create a Memcached instance</li>
        <li><a href="function.memcache-debug.php" class="index">memcache_debug</a> - Turn debug output on/off</li>
        <li><a href="function.memory-get-peak-usage.php" class="index">memory_get_peak_usage</a> - Returns the peak of memory allocated by PHP</li>
        <li><a href="function.memory-get-usage.php" class="index">memory_get_usage</a> - Returns the amount of memory allocated to PHP</li>
        <li><a href="function.memory-reset-peak-usage.php" class="index">memory_reset_peak_usage</a> - Reset the peak memory usage</li>
        <li><a href="messageformatter.create.php" class="index">MessageFormatter::create</a> - Constructs a new Message Formatter</li>
        <li><a href="messageformatter.format.php" class="index">MessageFormatter::format</a> - Format the message</li>
        <li><a href="messageformatter.formatmessage.php" class="index">MessageFormatter::formatMessage</a> - Quick format message</li>
        <li><a href="messageformatter.geterrorcode.php" class="index">MessageFormatter::getErrorCode</a> - Get the error code from last operation</li>
        <li><a href="messageformatter.geterrormessage.php" class="index">MessageFormatter::getErrorMessage</a> - Get the error text from the last operation</li>
        <li><a href="messageformatter.getlocale.php" class="index">MessageFormatter::getLocale</a> - Get the locale for which the formatter was created</li>
        <li><a href="messageformatter.getpattern.php" class="index">MessageFormatter::getPattern</a> - Get the pattern used by the formatter</li>
        <li><a href="messageformatter.parse.php" class="index">MessageFormatter::parse</a> - Parse input string according to pattern</li>
        <li><a href="messageformatter.parsemessage.php" class="index">MessageFormatter::parseMessage</a> - Quick parse input string</li>
        <li><a href="messageformatter.setpattern.php" class="index">MessageFormatter::setPattern</a> - Set the pattern used by the formatter</li>
        <li><a href="function.metaphone.php" class="index">metaphone</a> - Calculate the metaphone key of a string</li>
        <li><a href="function.method-exists.php" class="index">method_exists</a> - Checks if the class method exists</li>
        <li><a href="function.mhash.php" class="index">mhash</a> - Computes hash</li>
        <li><a href="function.mhash-count.php" class="index">mhash_count</a> - Gets the highest available hash ID</li>
        <li><a href="function.mhash-get-block-size.php" class="index">mhash_get_block_size</a> - Gets the block size of the specified hash</li>
        <li><a href="function.mhash-get-hash-name.php" class="index">mhash_get_hash_name</a> - Gets the name of the specified hash</li>
        <li><a href="function.mhash-keygen-s2k.php" class="index">mhash_keygen_s2k</a> - Generates a key</li>
        <li><a href="function.microtime.php" class="index">microtime</a> - Return current Unix timestamp with microseconds</li>
        <li><a href="function.mime-content-type.php" class="index">mime_content_type</a> - Detect MIME Content-type for a file</li>
        <li><a href="function.min.php" class="index">min</a> - Find lowest value</li>
        <li><a href="function.mkdir.php" class="index">mkdir</a> - Makes directory</li>
        <li><a href="function.mktime.php" class="index">mktime</a> - Get Unix timestamp for a date</li>
        <li><a href="function.money-format.php" class="index">money_format</a> - Formats a number as a currency string</li>
        <li><a href="mongodb-bson-binary.getdata.php" class="index">MongoDB\BSON\Binary::getData</a> - Returns the Binary's data</li>
        <li><a href="mongodb-bson-binary.gettype.php" class="index">MongoDB\BSON\Binary::getType</a> - Returns the Binary's type</li>
        <li><a href="mongodb-bson-binary.jsonserialize.php" class="index">MongoDB\BSON\Binary::jsonSerialize</a> - Returns a representation that can be converted to JSON</li>
        <li><a href="mongodb-bson-binary.serialize.php" class="index">MongoDB\BSON\Binary::serialize</a> - Serialize a Binary</li>
        <li><a href="mongodb-bson-binary.unserialize.php" class="index">MongoDB\BSON\Binary::unserialize</a> - Unserialize a Binary</li>
        <li><a href="mongodb-bson-binary.construct.php" class="index">MongoDB\BSON\Binary::__construct</a> - Construct a new Binary</li>
        <li><a href="mongodb-bson-binary.tostring.php" class="index">MongoDB\BSON\Binary::__toString</a> - Returns the Binary's data</li>
        <li><a href="mongodb-bson-binaryinterface.getdata.php" class="index">MongoDB\BSON\BinaryInterface::getData</a> - Returns the BinaryInterface's data</li>
        <li><a href="mongodb-bson-binaryinterface.gettype.php" class="index">MongoDB\BSON\BinaryInterface::getType</a> - Returns the BinaryInterface's type</li>
        <li><a href="mongodb-bson-binaryinterface.tostring.php" class="index">MongoDB\BSON\BinaryInterface::__toString</a> - Returns the BinaryInterface's data</li>
        <li><a href="mongodb-bson-dbpointer.jsonserialize.php" class="index">MongoDB\BSON\DBPointer::jsonSerialize</a> - Returns a representation that can be converted to JSON</li>
        <li><a href="mongodb-bson-dbpointer.serialize.php" class="index">MongoDB\BSON\DBPointer::serialize</a> - Serialize a DBPointer</li>
        <li><a href="mongodb-bson-dbpointer.unserialize.php" class="index">MongoDB\BSON\DBPointer::unserialize</a> - Unserialize a DBPointer</li>
        <li><a href="mongodb-bson-dbpointer.construct.php" class="index">MongoDB\BSON\DBPointer::__construct</a> - Construct a new DBPointer (unused)</li>
        <li><a href="mongodb-bson-dbpointer.tostring.php" class="index">MongoDB\BSON\DBPointer::__toString</a> - Returns an empty string</li>
        <li><a href="mongodb-bson-decimal128.jsonserialize.php" class="index">MongoDB\BSON\Decimal128::jsonSerialize</a> - Returns a representation that can be converted to JSON</li>
        <li><a href="mongodb-bson-decimal128.serialize.php" class="index">MongoDB\BSON\Decimal128::serialize</a> - Serialize a Decimal128</li>
        <li><a href="mongodb-bson-decimal128.unserialize.php" class="index">MongoDB\BSON\Decimal128::unserialize</a> - Unserialize a Decimal128</li>
        <li><a href="mongodb-bson-decimal128.construct.php" class="index">MongoDB\BSON\Decimal128::__construct</a> - Construct a new Decimal128</li>
        <li><a href="mongodb-bson-decimal128.tostring.php" class="index">MongoDB\BSON\Decimal128::__toString</a> - Returns the string representation of this Decimal128</li>
        <li><a href="mongodb-bson-decimal128interface.tostring.php" class="index">MongoDB\BSON\Decimal128Interface::__toString</a> - Returns the string representation of this Decimal128Interface</li>
        <li><a href="mongodb-bson-document.frombson.php" class="index">MongoDB\BSON\Document::fromBSON</a> - Construct a new document instance from a BSON string</li>
        <li><a href="mongodb-bson-document.fromjson.php" class="index">MongoDB\BSON\Document::fromJSON</a> - Construct a new document instance from a JSON string</li>
        <li><a href="mongodb-bson-document.fromphp.php" class="index">MongoDB\BSON\Document::fromPHP</a> - Construct a new document instance from PHP data</li>
        <li><a href="mongodb-bson-document.get.php" class="index">MongoDB\BSON\Document::get</a> - Returns the value of a key in the document</li>
        <li><a href="mongodb-bson-document.getiterator.php" class="index">MongoDB\BSON\Document::getIterator</a> - Returns an iterator for the BSON document</li>
        <li><a href="mongodb-bson-document.has.php" class="index">MongoDB\BSON\Document::has</a> - Returns whether a key is present in the document</li>
        <li><a href="mongodb-bson-document.offsetexists.php" class="index">MongoDB\BSON\Document::offsetExists</a> - Returns whether a key is present in the document</li>
        <li><a href="mongodb-bson-document.offsetget.php" class="index">MongoDB\BSON\Document::offsetGet</a> - Returns the value of a key in the document</li>
        <li><a href="mongodb-bson-document.offsetset.php" class="index">MongoDB\BSON\Document::offsetSet</a> - Implementation of ArrayAccess</li>
        <li><a href="mongodb-bson-document.offsetunset.php" class="index">MongoDB\BSON\Document::offsetUnset</a> - Implementation of ArrayAccess</li>
        <li><a href="mongodb-bson-document.serialize.php" class="index">MongoDB\BSON\Document::serialize</a> - Serialize a Document</li>
        <li><a href="mongodb-bson-document.tocanonicalextendedjson.php" class="index">MongoDB\BSON\Document::toCanonicalExtendedJSON</a> - Returns the Canonical Extended JSON representation of the BSON document</li>
        <li><a href="mongodb-bson-document.tophp.php" class="index">MongoDB\BSON\Document::toPHP</a> - Returns the PHP representation of the BSON document</li>
        <li><a href="mongodb-bson-document.torelaxedextendedjson.php" class="index">MongoDB\BSON\Document::toRelaxedExtendedJSON</a> - Returns the Relaxed Extended JSON representation of the BSON document</li>
        <li><a href="mongodb-bson-document.unserialize.php" class="index">MongoDB\BSON\Document::unserialize</a> - Unserialize a BSON document</li>
        <li><a href="mongodb-bson-document.construct.php" class="index">MongoDB\BSON\Document::__construct</a> - Construct a new BSON document (unused)</li>
        <li><a href="mongodb-bson-document.tostring.php" class="index">MongoDB\BSON\Document::__toString</a> - Returns the string representation of this BSON Document</li>
        <li><a href="function.mongodb.bson-fromjson.php" class="index">MongoDB\BSON\fromJSON</a> - Returns the BSON representation of a JSON value</li>
        <li><a href="function.mongodb.bson-fromphp.php" class="index">MongoDB\BSON\fromPHP</a> - Returns the BSON representation of a PHP value</li>
        <li><a href="mongodb-bson-int64.jsonserialize.php" class="index">MongoDB\BSON\Int64::jsonSerialize</a> - Returns a representation that can be converted to JSON</li>
        <li><a href="mongodb-bson-int64.serialize.php" class="index">MongoDB\BSON\Int64::serialize</a> - Serialize an Int64</li>
        <li><a href="mongodb-bson-int64.unserialize.php" class="index">MongoDB\BSON\Int64::unserialize</a> - Unserialize an Int64</li>
        <li><a href="mongodb-bson-int64.construct.php" class="index">MongoDB\BSON\Int64::__construct</a> - Construct a new Int64</li>
        <li><a href="mongodb-bson-int64.tostring.php" class="index">MongoDB\BSON\Int64::__toString</a> - Returns the string representation of this Int64</li>
        <li><a href="mongodb-bson-iterator.current.php" class="index">MongoDB\BSON\Iterator::current</a> - Returns the current element</li>
        <li><a href="mongodb-bson-iterator.key.php" class="index">MongoDB\BSON\Iterator::key</a> - Returns the key of the current element</li>
        <li><a href="mongodb-bson-iterator.next.php" class="index">MongoDB\BSON\Iterator::next</a> - Advances the iterator to next element</li>
        <li><a href="mongodb-bson-iterator.rewind.php" class="index">MongoDB\BSON\Iterator::rewind</a> - Rewinds the Iterator to the first element</li>
        <li><a href="mongodb-bson-iterator.valid.php" class="index">MongoDB\BSON\Iterator::valid</a> - Checks if current position is valid</li>
        <li><a href="mongodb-bson-iterator.construct.php" class="index">MongoDB\BSON\Iterator::__construct</a> - Construct a new BSON iterator (unused)</li>
        <li><a href="mongodb-bson-javascript.getcode.php" class="index">MongoDB\BSON\Javascript::getCode</a> - Returns the Javascript's code</li>
        <li><a href="mongodb-bson-javascript.getscope.php" class="index">MongoDB\BSON\Javascript::getScope</a> - Returns the Javascript's scope document</li>
        <li><a href="mongodb-bson-javascript.jsonserialize.php" class="index">MongoDB\BSON\Javascript::jsonSerialize</a> - Returns a representation that can be converted to JSON</li>
        <li><a href="mongodb-bson-javascript.serialize.php" class="index">MongoDB\BSON\Javascript::serialize</a> - Serialize a Javascript</li>
        <li><a href="mongodb-bson-javascript.unserialize.php" class="index">MongoDB\BSON\Javascript::unserialize</a> - Unserialize a Javascript</li>
        <li><a href="mongodb-bson-javascript.construct.php" class="index">MongoDB\BSON\Javascript::__construct</a> - Construct a new Javascript</li>
        <li><a href="mongodb-bson-javascript.tostring.php" class="index">MongoDB\BSON\Javascript::__toString</a> - Returns the Javascript's code</li>
        <li><a href="mongodb-bson-javascriptinterface.getcode.php" class="index">MongoDB\BSON\JavascriptInterface::getCode</a> - Returns the JavascriptInterface's code</li>
        <li><a href="mongodb-bson-javascriptinterface.getscope.php" class="index">MongoDB\BSON\JavascriptInterface::getScope</a> - Returns the JavascriptInterface's scope document</li>
        <li><a href="mongodb-bson-javascriptinterface.tostring.php" class="index">MongoDB\BSON\JavascriptInterface::__toString</a> - Returns the JavascriptInterface's code</li>
        <li><a href="mongodb-bson-maxkey.jsonserialize.php" class="index">MongoDB\BSON\MaxKey::jsonSerialize</a> - Returns a representation that can be converted to JSON</li>
        <li><a href="mongodb-bson-maxkey.serialize.php" class="index">MongoDB\BSON\MaxKey::serialize</a> - Serialize a MaxKey</li>
        <li><a href="mongodb-bson-maxkey.unserialize.php" class="index">MongoDB\BSON\MaxKey::unserialize</a> - Unserialize a MaxKey</li>
        <li><a href="mongodb-bson-maxkey.construct.php" class="index">MongoDB\BSON\MaxKey::__construct</a> - Construct a new MaxKey</li>
        <li><a href="mongodb-bson-minkey.jsonserialize.php" class="index">MongoDB\BSON\MinKey::jsonSerialize</a> - Returns a representation that can be converted to JSON</li>
        <li><a href="mongodb-bson-minkey.serialize.php" class="index">MongoDB\BSON\MinKey::serialize</a> - Serialize a MinKey</li>
        <li><a href="mongodb-bson-minkey.unserialize.php" class="index">MongoDB\BSON\MinKey::unserialize</a> - Unserialize a MinKey</li>
        <li><a href="mongodb-bson-minkey.construct.php" class="index">MongoDB\BSON\MinKey::__construct</a> - Construct a new MinKey</li>
        <li><a href="mongodb-bson-objectid.gettimestamp.php" class="index">MongoDB\BSON\ObjectId::getTimestamp</a> - Returns the timestamp component of this ObjectId</li>
        <li><a href="mongodb-bson-objectid.jsonserialize.php" class="index">MongoDB\BSON\ObjectId::jsonSerialize</a> - Returns a representation that can be converted to JSON</li>
        <li><a href="mongodb-bson-objectid.serialize.php" class="index">MongoDB\BSON\ObjectId::serialize</a> - Serialize an ObjectId</li>
        <li><a href="mongodb-bson-objectid.unserialize.php" class="index">MongoDB\BSON\ObjectId::unserialize</a> - Unserialize an ObjectId</li>
        <li><a href="mongodb-bson-objectid.construct.php" class="index">MongoDB\BSON\ObjectId::__construct</a> - Construct a new ObjectId</li>
        <li><a href="mongodb-bson-objectid.tostring.php" class="index">MongoDB\BSON\ObjectId::__toString</a> - Returns the hexidecimal representation of this ObjectId</li>
        <li><a href="mongodb-bson-objectidinterface.gettimestamp.php" class="index">MongoDB\BSON\ObjectIdInterface::getTimestamp</a> - Returns the timestamp component of this ObjectIdInterface</li>
        <li><a href="mongodb-bson-objectidinterface.tostring.php" class="index">MongoDB\BSON\ObjectIdInterface::__toString</a> - Returns the hexidecimal representation of this ObjectIdInterface</li>
        <li><a href="mongodb-bson-packedarray.fromphp.php" class="index">MongoDB\BSON\PackedArray::fromPHP</a> - Construct a new BSON array instance from PHP data</li>
        <li><a href="mongodb-bson-packedarray.get.php" class="index">MongoDB\BSON\PackedArray::get</a> - Returns the value of an index in the array</li>
        <li><a href="mongodb-bson-packedarray.getiterator.php" class="index">MongoDB\BSON\PackedArray::getIterator</a> - Returns an iterator for the BSON array</li>
        <li><a href="mongodb-bson-packedarray.has.php" class="index">MongoDB\BSON\PackedArray::has</a> - Returns whether a index is present in the array</li>
        <li><a href="mongodb-bson-packedarray.offsetexists.php" class="index">MongoDB\BSON\PackedArray::offsetExists</a> - Returns whether a index is present in the array</li>
        <li><a href="mongodb-bson-packedarray.offsetget.php" class="index">MongoDB\BSON\PackedArray::offsetGet</a> - Returns the value of an index in the array</li>
        <li><a href="mongodb-bson-packedarray.offsetset.php" class="index">MongoDB\BSON\PackedArray::offsetSet</a> - Implementation of ArrayAccess</li>
        <li><a href="mongodb-bson-packedarray.offsetunset.php" class="index">MongoDB\BSON\PackedArray::offsetUnset</a> - Implementation of ArrayAccess</li>
        <li><a href="mongodb-bson-packedarray.serialize.php" class="index">MongoDB\BSON\PackedArray::serialize</a> - Serialize a BSON array</li>
        <li><a href="mongodb-bson-packedarray.tophp.php" class="index">MongoDB\BSON\PackedArray::toPHP</a> - Returns the PHP representation of the BSON array</li>
        <li><a href="mongodb-bson-packedarray.unserialize.php" class="index">MongoDB\BSON\PackedArray::unserialize</a> - Unserialize a BSON array</li>
        <li><a href="mongodb-bson-packedarray.construct.php" class="index">MongoDB\BSON\PackedArray::__construct</a> - Construct a new BSON array (unused)</li>
        <li><a href="mongodb-bson-packedarray.tostring.php" class="index">MongoDB\BSON\PackedArray::__toString</a> - Returns the string representation of this BSON array</li>
        <li><a href="mongodb-bson-persistable.bsonserialize.php" class="index">MongoDB\BSON\Persistable::bsonSerialize</a> - Provides an array or document to serialize as BSON</li>
        <li><a href="mongodb-bson-regex.getflags.php" class="index">MongoDB\BSON\Regex::getFlags</a> - Returns the Regex's flags</li>
        <li><a href="mongodb-bson-regex.getpattern.php" class="index">MongoDB\BSON\Regex::getPattern</a> - Returns the Regex's pattern</li>
        <li><a href="mongodb-bson-regex.jsonserialize.php" class="index">MongoDB\BSON\Regex::jsonSerialize</a> - Returns a representation that can be converted to JSON</li>
        <li><a href="mongodb-bson-regex.serialize.php" class="index">MongoDB\BSON\Regex::serialize</a> - Serialize a Regex</li>
        <li><a href="mongodb-bson-regex.unserialize.php" class="index">MongoDB\BSON\Regex::unserialize</a> - Unserialize a Regex</li>
        <li><a href="mongodb-bson-regex.construct.php" class="index">MongoDB\BSON\Regex::__construct</a> - Construct a new Regex</li>
        <li><a href="mongodb-bson-regex.tostring.php" class="index">MongoDB\BSON\Regex::__toString</a> - Returns the string representation of this Regex</li>
        <li><a href="mongodb-bson-regexinterface.getflags.php" class="index">MongoDB\BSON\RegexInterface::getFlags</a> - Returns the RegexInterface's flags</li>
        <li><a href="mongodb-bson-regexinterface.getpattern.php" class="index">MongoDB\BSON\RegexInterface::getPattern</a> - Returns the RegexInterface's pattern</li>
        <li><a href="mongodb-bson-regexinterface.tostring.php" class="index">MongoDB\BSON\RegexInterface::__toString</a> - Returns the string representation of this RegexInterface</li>
        <li><a href="mongodb-bson-serializable.bsonserialize.php" class="index">MongoDB\BSON\Serializable::bsonSerialize</a> - Provides an array or document to serialize as BSON</li>
        <li><a href="mongodb-bson-symbol.jsonserialize.php" class="index">MongoDB\BSON\Symbol::jsonSerialize</a> - Returns a representation that can be converted to JSON</li>
        <li><a href="mongodb-bson-symbol.serialize.php" class="index">MongoDB\BSON\Symbol::serialize</a> - Serialize a Symbol</li>
        <li><a href="mongodb-bson-symbol.unserialize.php" class="index">MongoDB\BSON\Symbol::unserialize</a> - Unserialize a Symbol</li>
        <li><a href="mongodb-bson-symbol.construct.php" class="index">MongoDB\BSON\Symbol::__construct</a> - Construct a new Symbol (unused)</li>
        <li><a href="mongodb-bson-symbol.tostring.php" class="index">MongoDB\BSON\Symbol::__toString</a> - Returns the Symbol as a string</li>
        <li><a href="mongodb-bson-timestamp.getincrement.php" class="index">MongoDB\BSON\Timestamp::getIncrement</a> - Returns the increment component of this Timestamp</li>
        <li><a href="mongodb-bson-timestamp.gettimestamp.php" class="index">MongoDB\BSON\Timestamp::getTimestamp</a> - Returns the timestamp component of this Timestamp</li>
        <li><a href="mongodb-bson-timestamp.jsonserialize.php" class="index">MongoDB\BSON\Timestamp::jsonSerialize</a> - Returns a representation that can be converted to JSON</li>
        <li><a href="mongodb-bson-timestamp.serialize.php" class="index">MongoDB\BSON\Timestamp::serialize</a> - Serialize a Timestamp</li>
        <li><a href="mongodb-bson-timestamp.unserialize.php" class="index">MongoDB\BSON\Timestamp::unserialize</a> - Unserialize a Timestamp</li>
        <li><a href="mongodb-bson-timestamp.construct.php" class="index">MongoDB\BSON\Timestamp::__construct</a> - Construct a new Timestamp</li>
        <li><a href="mongodb-bson-timestamp.tostring.php" class="index">MongoDB\BSON\Timestamp::__toString</a> - Returns the string representation of this Timestamp</li>
        <li><a href="mongodb-bson-timestampinterface.getincrement.php" class="index">MongoDB\BSON\TimestampInterface::getIncrement</a> - Returns the increment component of this TimestampInterface</li>
        <li><a href="mongodb-bson-timestampinterface.gettimestamp.php" class="index">MongoDB\BSON\TimestampInterface::getTimestamp</a> - Returns the timestamp component of this TimestampInterface</li>
        <li><a href="mongodb-bson-timestampinterface.tostring.php" class="index">MongoDB\BSON\TimestampInterface::__toString</a> - Returns the string representation of this TimestampInterface</li>
        <li><a href="function.mongodb.bson-tocanonicalextendedjson.php" class="index">MongoDB\BSON\toCanonicalExtendedJSON</a> - Returns the Canonical Extended JSON representation of a BSON value</li>
        <li><a href="function.mongodb.bson-tojson.php" class="index">MongoDB\BSON\toJSON</a> - Returns the Legacy Extended JSON representation of a BSON value</li>
        <li><a href="function.mongodb.bson-tophp.php" class="index">MongoDB\BSON\toPHP</a> - Returns the PHP representation of a BSON value</li>
        <li><a href="function.mongodb.bson-torelaxedextendedjson.php" class="index">MongoDB\BSON\toRelaxedExtendedJSON</a> - Returns the Relaxed Extended JSON representation of a BSON value</li>
        <li><a href="mongodb-bson-undefined.jsonserialize.php" class="index">MongoDB\BSON\Undefined::jsonSerialize</a> - Returns a representation that can be converted to JSON</li>
        <li><a href="mongodb-bson-undefined.serialize.php" class="index">MongoDB\BSON\Undefined::serialize</a> - Serialize a Undefined</li>
        <li><a href="mongodb-bson-undefined.unserialize.php" class="index">MongoDB\BSON\Undefined::unserialize</a> - Unserialize a Undefined</li>
        <li><a href="mongodb-bson-undefined.construct.php" class="index">MongoDB\BSON\Undefined::__construct</a> - Construct a new Undefined (unused)</li>
        <li><a href="mongodb-bson-undefined.tostring.php" class="index">MongoDB\BSON\Undefined::__toString</a> - Returns an empty string</li>
        <li><a href="mongodb-bson-unserializable.bsonunserialize.php" class="index">MongoDB\BSON\Unserializable::bsonUnserialize</a> - Constructs the object from a BSON array or document</li>
        <li><a href="mongodb-bson-utcdatetime.jsonserialize.php" class="index">MongoDB\BSON\UTCDateTime::jsonSerialize</a> - Returns a representation that can be converted to JSON</li>
        <li><a href="mongodb-bson-utcdatetime.serialize.php" class="index">MongoDB\BSON\UTCDateTime::serialize</a> - Serialize a UTCDateTime</li>
        <li><a href="mongodb-bson-utcdatetime.todatetime.php" class="index">MongoDB\BSON\UTCDateTime::toDateTime</a> - Returns the DateTime representation of this UTCDateTime</li>
        <li><a href="mongodb-bson-utcdatetime.todatetimeimmutable.php" class="index">MongoDB\BSON\UTCDateTime::toDateTimeImmutable</a> - Returns the DateTimeImmutable representation of this UTCDateTime</li>
        <li><a href="mongodb-bson-utcdatetime.unserialize.php" class="index">MongoDB\BSON\UTCDateTime::unserialize</a> - Unserialize a UTCDateTime</li>
        <li><a href="mongodb-bson-utcdatetime.construct.php" class="index">MongoDB\BSON\UTCDateTime::__construct</a> - Construct a new UTCDateTime</li>
        <li><a href="mongodb-bson-utcdatetime.tostring.php" class="index">MongoDB\BSON\UTCDateTime::__toString</a> - Returns the string representation of this UTCDateTime</li>
        <li><a href="mongodb-bson-utcdatetimeinterface.todatetime.php" class="index">MongoDB\BSON\UTCDateTimeInterface::toDateTime</a> - Returns the DateTime representation of this UTCDateTimeInterface</li>
        <li><a href="mongodb-bson-utcdatetimeinterface.tostring.php" class="index">MongoDB\BSON\UTCDateTimeInterface::__toString</a> - Returns the string representation of this UTCDateTimeInterface</li>
        <li><a href="mongodb-driver-bulkwrite.count.php" class="index">MongoDB\Driver\BulkWrite::count</a> - Count number of write operations in the bulk</li>
        <li><a href="mongodb-driver-bulkwrite.delete.php" class="index">MongoDB\Driver\BulkWrite::delete</a> - Add a delete operation to the bulk</li>
        <li><a href="mongodb-driver-bulkwrite.insert.php" class="index">MongoDB\Driver\BulkWrite::insert</a> - Add an insert operation to the bulk</li>
        <li><a href="mongodb-driver-bulkwrite.update.php" class="index">MongoDB\Driver\BulkWrite::update</a> - Add an update operation to the bulk</li>
        <li><a href="mongodb-driver-bulkwrite.construct.php" class="index">MongoDB\Driver\BulkWrite::__construct</a> - Create a new BulkWrite</li>
        <li><a href="mongodb-driver-clientencryption.addkeyaltname.php" class="index">MongoDB\Driver\ClientEncryption::addKeyAltName</a> - Adds an alternate name to a key document</li>
        <li><a href="mongodb-driver-clientencryption.createdatakey.php" class="index">MongoDB\Driver\ClientEncryption::createDataKey</a> - Creates a key document</li>
        <li><a href="mongodb-driver-clientencryption.decrypt.php" class="index">MongoDB\Driver\ClientEncryption::decrypt</a> - Decrypt a value</li>
        <li><a href="mongodb-driver-clientencryption.deletekey.php" class="index">MongoDB\Driver\ClientEncryption::deleteKey</a> - Deletes a key document</li>
        <li><a href="mongodb-driver-clientencryption.encrypt.php" class="index">MongoDB\Driver\ClientEncryption::encrypt</a> - Encrypt a value</li>
        <li><a href="mongodb-driver-clientencryption.encryptexpression.php" class="index">MongoDB\Driver\ClientEncryption::encryptExpression</a> - Encrypts a match or aggregate expression</li>
        <li><a href="mongodb-driver-clientencryption.getkey.php" class="index">MongoDB\Driver\ClientEncryption::getKey</a> - Gets a key document</li>
        <li><a href="mongodb-driver-clientencryption.getkeybyaltname.php" class="index">MongoDB\Driver\ClientEncryption::getKeyByAltName</a> - Gets a key document by an alternate name</li>
        <li><a href="mongodb-driver-clientencryption.getkeys.php" class="index">MongoDB\Driver\ClientEncryption::getKeys</a> - Gets all key documents</li>
        <li><a href="mongodb-driver-clientencryption.removekeyaltname.php" class="index">MongoDB\Driver\ClientEncryption::removeKeyAltName</a> - Removes an alternate name from a key document</li>
        <li><a href="mongodb-driver-clientencryption.rewrapmanydatakey.php" class="index">MongoDB\Driver\ClientEncryption::rewrapManyDataKey</a> - Rewraps data keys</li>
        <li><a href="mongodb-driver-clientencryption.construct.php" class="index">MongoDB\Driver\ClientEncryption::__construct</a> - Create a new ClientEncryption object</li>
        <li><a href="mongodb-driver-command.construct.php" class="index">MongoDB\Driver\Command::__construct</a> - Create a new Command</li>
        <li><a href="mongodb-driver-cursor.current.php" class="index">MongoDB\Driver\Cursor::current</a> - Returns the current element</li>
        <li><a href="mongodb-driver-cursor.getid.php" class="index">MongoDB\Driver\Cursor::getId</a> - Returns the ID for this cursor</li>
        <li><a href="mongodb-driver-cursor.getserver.php" class="index">MongoDB\Driver\Cursor::getServer</a> - Returns the server associated with this cursor</li>
        <li><a href="mongodb-driver-cursor.isdead.php" class="index">MongoDB\Driver\Cursor::isDead</a> - Checks if the cursor is exhausted or may have additional results</li>
        <li><a href="mongodb-driver-cursor.key.php" class="index">MongoDB\Driver\Cursor::key</a> - Returns the current result's index within the cursor</li>
        <li><a href="mongodb-driver-cursor.next.php" class="index">MongoDB\Driver\Cursor::next</a> - Advances the cursor to the next result</li>
        <li><a href="mongodb-driver-cursor.rewind.php" class="index">MongoDB\Driver\Cursor::rewind</a> - Rewind the cursor to the first result</li>
        <li><a href="mongodb-driver-cursor.settypemap.php" class="index">MongoDB\Driver\Cursor::setTypeMap</a> - Sets a type map to use for BSON unserialization</li>
        <li><a href="mongodb-driver-cursor.toarray.php" class="index">MongoDB\Driver\Cursor::toArray</a> - Returns an array containing all results for this cursor</li>
        <li><a href="mongodb-driver-cursor.valid.php" class="index">MongoDB\Driver\Cursor::valid</a> - Checks if the current position in the cursor is valid</li>
        <li><a href="mongodb-driver-cursor.construct.php" class="index">MongoDB\Driver\Cursor::__construct</a> - Create a new Cursor (not used)</li>
        <li><a href="mongodb-driver-cursorid.serialize.php" class="index">MongoDB\Driver\CursorId::serialize</a> - Serialize a CursorId</li>
        <li><a href="mongodb-driver-cursorid.unserialize.php" class="index">MongoDB\Driver\CursorId::unserialize</a> - Unserialize a CursorId</li>
        <li><a href="mongodb-driver-cursorid.construct.php" class="index">MongoDB\Driver\CursorId::__construct</a> - Create a new CursorId (not used)</li>
        <li><a href="mongodb-driver-cursorid.tostring.php" class="index">MongoDB\Driver\CursorId::__toString</a> - String representation of the cursor ID</li>
        <li><a href="mongodb-driver-cursorinterface.getid.php" class="index">MongoDB\Driver\CursorInterface::getId</a> - Returns the ID for this cursor</li>
        <li><a href="mongodb-driver-cursorinterface.getserver.php" class="index">MongoDB\Driver\CursorInterface::getServer</a> - Returns the server associated with this cursor</li>
        <li><a href="mongodb-driver-cursorinterface.isdead.php" class="index">MongoDB\Driver\CursorInterface::isDead</a> - Checks if the cursor may have additional results</li>
        <li><a href="mongodb-driver-cursorinterface.settypemap.php" class="index">MongoDB\Driver\CursorInterface::setTypeMap</a> - Sets a type map to use for BSON unserialization</li>
        <li><a href="mongodb-driver-cursorinterface.toarray.php" class="index">MongoDB\Driver\CursorInterface::toArray</a> - Returns an array containing all results for this cursor</li>
        <li><a href="mongodb-driver-commandexception.getresultdocument.php" class="index">MongoDB\Driver\Exception\CommandException::getResultDocument</a> - Returns the result document for the failed command</li>
        <li><a href="mongodb-driver-runtimeexception.haserrorlabel.php" class="index">MongoDB\Driver\Exception\RuntimeException::hasErrorLabel</a> - Returns whether an error label is associated with an exception</li>
        <li><a href="mongodb-driver-writeexception.getwriteresult.php" class="index">MongoDB\Driver\Exception\WriteException::getWriteResult</a> - Returns the WriteResult for the failed write operation</li>
        <li><a href="mongodb-driver-manager.addsubscriber.php" class="index">MongoDB\Driver\Manager::addSubscriber</a> - Registers a monitoring event subscriber with this Manager</li>
        <li><a href="mongodb-driver-manager.createclientencryption.php" class="index">MongoDB\Driver\Manager::createClientEncryption</a> - Create a new ClientEncryption object</li>
        <li><a href="mongodb-driver-manager.executebulkwrite.php" class="index">MongoDB\Driver\Manager::executeBulkWrite</a> - Execute one or more write operations</li>
        <li><a href="mongodb-driver-manager.executecommand.php" class="index">MongoDB\Driver\Manager::executeCommand</a> - Execute a database command</li>
        <li><a href="mongodb-driver-manager.executequery.php" class="index">MongoDB\Driver\Manager::executeQuery</a> - Execute a database query</li>
        <li><a href="mongodb-driver-manager.executereadcommand.php" class="index">MongoDB\Driver\Manager::executeReadCommand</a> - Execute a database command that reads</li>
        <li><a href="mongodb-driver-manager.executereadwritecommand.php" class="index">MongoDB\Driver\Manager::executeReadWriteCommand</a> - Execute a database command that reads and writes</li>
        <li><a href="mongodb-driver-manager.executewritecommand.php" class="index">MongoDB\Driver\Manager::executeWriteCommand</a> - Execute a database command that writes</li>
        <li><a href="mongodb-driver-manager.getencryptedfieldsmap.php" class="index">MongoDB\Driver\Manager::getEncryptedFieldsMap</a> - Return the encryptedFieldsMap auto encryption option for the Manager</li>
        <li><a href="mongodb-driver-manager.getreadconcern.php" class="index">MongoDB\Driver\Manager::getReadConcern</a> - Return the ReadConcern for the Manager</li>
        <li><a href="mongodb-driver-manager.getreadpreference.php" class="index">MongoDB\Driver\Manager::getReadPreference</a> - Return the ReadPreference for the Manager</li>
        <li><a href="mongodb-driver-manager.getservers.php" class="index">MongoDB\Driver\Manager::getServers</a> - Return the servers to which this manager is connected</li>
        <li><a href="mongodb-driver-manager.getwriteconcern.php" class="index">MongoDB\Driver\Manager::getWriteConcern</a> - Return the WriteConcern for the Manager</li>
        <li><a href="mongodb-driver-manager.removesubscriber.php" class="index">MongoDB\Driver\Manager::removeSubscriber</a> - Unregisters a monitoring event subscriber with this Manager</li>
        <li><a href="mongodb-driver-manager.selectserver.php" class="index">MongoDB\Driver\Manager::selectServer</a> - Select a server matching a read preference</li>
        <li><a href="mongodb-driver-manager.startsession.php" class="index">MongoDB\Driver\Manager::startSession</a> - Start a new client session for use with this client</li>
        <li><a href="mongodb-driver-manager.construct.php" class="index">MongoDB\Driver\Manager::__construct</a> - Create new MongoDB Manager</li>
        <li><a href="function.mongodb.driver.monitoring.addsubscriber.php" class="index">MongoDB\Driver\Monitoring\addSubscriber</a> - Registers a monitoring event subscriber globally</li>
        <li><a href="mongodb-driver-monitoring-commandfailedevent.getcommandname.php" class="index">MongoDB\Driver\Monitoring\CommandFailedEvent::getCommandName</a> - Returns the command name</li>
        <li><a href="mongodb-driver-monitoring-commandfailedevent.getdatabasename.php" class="index">MongoDB\Driver\Monitoring\CommandFailedEvent::getDatabaseName</a> - Returns the database on which the command was executed</li>
        <li><a href="mongodb-driver-monitoring-commandfailedevent.getdurationmicros.php" class="index">MongoDB\Driver\Monitoring\CommandFailedEvent::getDurationMicros</a> - Returns the command's duration in microseconds</li>
        <li><a href="mongodb-driver-monitoring-commandfailedevent.geterror.php" class="index">MongoDB\Driver\Monitoring\CommandFailedEvent::getError</a> - Returns the Exception associated with the failed command</li>
        <li><a href="mongodb-driver-monitoring-commandfailedevent.getoperationid.php" class="index">MongoDB\Driver\Monitoring\CommandFailedEvent::getOperationId</a> - Returns the command's operation ID</li>
        <li><a href="mongodb-driver-monitoring-commandfailedevent.getreply.php" class="index">MongoDB\Driver\Monitoring\CommandFailedEvent::getReply</a> - Returns the command reply document</li>
        <li><a href="mongodb-driver-monitoring-commandfailedevent.getrequestid.php" class="index">MongoDB\Driver\Monitoring\CommandFailedEvent::getRequestId</a> - Returns the command's request ID</li>
        <li><a href="mongodb-driver-monitoring-commandfailedevent.getserver.php" class="index">MongoDB\Driver\Monitoring\CommandFailedEvent::getServer</a> - Returns the Server on which the command was executed</li>
        <li><a href="mongodb-driver-monitoring-commandfailedevent.getserverconnectionid.php" class="index">MongoDB\Driver\Monitoring\CommandFailedEvent::getServerConnectionId</a> - Returns the server connection ID for the command</li>
        <li><a href="mongodb-driver-monitoring-commandfailedevent.getserviceid.php" class="index">MongoDB\Driver\Monitoring\CommandFailedEvent::getServiceId</a> - Returns the load balancer service ID for the command</li>
        <li><a href="mongodb-driver-monitoring-commandstartedevent.getcommand.php" class="index">MongoDB\Driver\Monitoring\CommandStartedEvent::getCommand</a> - Returns the command document</li>
        <li><a href="mongodb-driver-monitoring-commandstartedevent.getcommandname.php" class="index">MongoDB\Driver\Monitoring\CommandStartedEvent::getCommandName</a> - Returns the command name</li>
        <li><a href="mongodb-driver-monitoring-commandstartedevent.getdatabasename.php" class="index">MongoDB\Driver\Monitoring\CommandStartedEvent::getDatabaseName</a> - Returns the database on which the command was executed</li>
        <li><a href="mongodb-driver-monitoring-commandstartedevent.getoperationid.php" class="index">MongoDB\Driver\Monitoring\CommandStartedEvent::getOperationId</a> - Returns the command's operation ID</li>
        <li><a href="mongodb-driver-monitoring-commandstartedevent.getrequestid.php" class="index">MongoDB\Driver\Monitoring\CommandStartedEvent::getRequestId</a> - Returns the command's request ID</li>
        <li><a href="mongodb-driver-monitoring-commandstartedevent.getserver.php" class="index">MongoDB\Driver\Monitoring\CommandStartedEvent::getServer</a> - Returns the Server on which the command was executed</li>
        <li><a href="mongodb-driver-monitoring-commandstartedevent.getserverconnectionid.php" class="index">MongoDB\Driver\Monitoring\CommandStartedEvent::getServerConnectionId</a> - Returns the server connection ID for the command</li>
        <li><a href="mongodb-driver-monitoring-commandstartedevent.getserviceid.php" class="index">MongoDB\Driver\Monitoring\CommandStartedEvent::getServiceId</a> - Returns the load balancer service ID for the command</li>
        <li><a href="mongodb-driver-monitoring-commandsubscriber.commandfailed.php" class="index">MongoDB\Driver\Monitoring\CommandSubscriber::commandFailed</a> - Notification method for a failed command</li>
        <li><a href="mongodb-driver-monitoring-commandsubscriber.commandstarted.php" class="index">MongoDB\Driver\Monitoring\CommandSubscriber::commandStarted</a> - Notification method for a started command</li>
        <li><a href="mongodb-driver-monitoring-commandsubscriber.commandsucceeded.php" class="index">MongoDB\Driver\Monitoring\CommandSubscriber::commandSucceeded</a> - Notification method for a successful command</li>
        <li><a href="mongodb-driver-monitoring-commandsucceededevent.getcommandname.php" class="index">MongoDB\Driver\Monitoring\CommandSucceededEvent::getCommandName</a> - Returns the command name</li>
        <li><a href="mongodb-driver-monitoring-commandsucceededevent.getdatabasename.php" class="index">MongoDB\Driver\Monitoring\CommandSucceededEvent::getDatabaseName</a> - Returns the database on which the command was executed</li>
        <li><a href="mongodb-driver-monitoring-commandsucceededevent.getdurationmicros.php" class="index">MongoDB\Driver\Monitoring\CommandSucceededEvent::getDurationMicros</a> - Returns the command's duration in microseconds</li>
        <li><a href="mongodb-driver-monitoring-commandsucceededevent.getoperationid.php" class="index">MongoDB\Driver\Monitoring\CommandSucceededEvent::getOperationId</a> - Returns the command's operation ID</li>
        <li><a href="mongodb-driver-monitoring-commandsucceededevent.getreply.php" class="index">MongoDB\Driver\Monitoring\CommandSucceededEvent::getReply</a> - Returns the command reply document</li>
        <li><a href="mongodb-driver-monitoring-commandsucceededevent.getrequestid.php" class="index">MongoDB\Driver\Monitoring\CommandSucceededEvent::getRequestId</a> - Returns the command's request ID</li>
        <li><a href="mongodb-driver-monitoring-commandsucceededevent.getserver.php" class="index">MongoDB\Driver\Monitoring\CommandSucceededEvent::getServer</a> - Returns the Server on which the command was executed</li>
        <li><a href="mongodb-driver-monitoring-commandsucceededevent.getserverconnectionid.php" class="index">MongoDB\Driver\Monitoring\CommandSucceededEvent::getServerConnectionId</a> - Returns the server connection ID for the command</li>
        <li><a href="mongodb-driver-monitoring-commandsucceededevent.getserviceid.php" class="index">MongoDB\Driver\Monitoring\CommandSucceededEvent::getServiceId</a> - Returns the load balancer service ID for the command</li>
        <li><a href="mongodb-driver-monitoring-logsubscriber.log.php" class="index">MongoDB\Driver\Monitoring\LogSubscriber::log</a> - Notification method for a log message</li>
        <li><a href="function.mongodb.driver.monitoring.removesubscriber.php" class="index">MongoDB\Driver\Monitoring\removeSubscriber</a> - Unregisters a monitoring event subscriber globally</li>
        <li><a href="mongodb-driver-monitoring-sdamsubscriber.serverchanged.php" class="index">MongoDB\Driver\Monitoring\SDAMSubscriber::serverChanged</a> - Notification method for a server description change</li>
        <li><a href="mongodb-driver-monitoring-sdamsubscriber.serverclosed.php" class="index">MongoDB\Driver\Monitoring\SDAMSubscriber::serverClosed</a> - Notification method for closing a server</li>
        <li><a href="mongodb-driver-monitoring-sdamsubscriber.serverheartbeatfailed.php" class="index">MongoDB\Driver\Monitoring\SDAMSubscriber::serverHeartbeatFailed</a> - Notification method for a failed server heartbeat</li>
        <li><a href="mongodb-driver-monitoring-sdamsubscriber.serverheartbeatstarted.php" class="index">MongoDB\Driver\Monitoring\SDAMSubscriber::serverHeartbeatStarted</a> - Notification method for a started server heartbeat</li>
        <li><a href="mongodb-driver-monitoring-sdamsubscriber.serverheartbeatsucceeded.php" class="index">MongoDB\Driver\Monitoring\SDAMSubscriber::serverHeartbeatSucceeded</a> - Notification method for a successful server heartbeat</li>
        <li><a href="mongodb-driver-monitoring-sdamsubscriber.serveropening.php" class="index">MongoDB\Driver\Monitoring\SDAMSubscriber::serverOpening</a> - Notification method for opening a server</li>
        <li><a href="mongodb-driver-monitoring-sdamsubscriber.topologychanged.php" class="index">MongoDB\Driver\Monitoring\SDAMSubscriber::topologyChanged</a> - Notification method for a topology description change</li>
        <li><a href="mongodb-driver-monitoring-sdamsubscriber.topologyclosed.php" class="index">MongoDB\Driver\Monitoring\SDAMSubscriber::topologyClosed</a> - Notification method for closing the topology</li>
        <li><a href="mongodb-driver-monitoring-sdamsubscriber.topologyopening.php" class="index">MongoDB\Driver\Monitoring\SDAMSubscriber::topologyOpening</a> - Notification method for opening the topology</li>
        <li><a href="mongodb-driver-monitoring-serverchangedevent.gethost.php" class="index">MongoDB\Driver\Monitoring\ServerChangedEvent::getHost</a> - Returns the hostname of the server</li>
        <li><a href="mongodb-driver-monitoring-serverchangedevent.getnewdescription.php" class="index">MongoDB\Driver\Monitoring\ServerChangedEvent::getNewDescription</a> - Returns the new description for the server</li>
        <li><a href="mongodb-driver-monitoring-serverchangedevent.getport.php" class="index">MongoDB\Driver\Monitoring\ServerChangedEvent::getPort</a> - Returns the port on which this server is listening</li>
        <li><a href="mongodb-driver-monitoring-serverchangedevent.getpreviousdescription.php" class="index">MongoDB\Driver\Monitoring\ServerChangedEvent::getPreviousDescription</a> - Returns the previous description for the server</li>
        <li><a href="mongodb-driver-monitoring-serverchangedevent.gettopologyid.php" class="index">MongoDB\Driver\Monitoring\ServerChangedEvent::getTopologyId</a> - Returns the topology ID associated with this server</li>
        <li><a href="mongodb-driver-monitoring-serverclosedevent.gethost.php" class="index">MongoDB\Driver\Monitoring\ServerClosedEvent::getHost</a> - Returns the hostname of the server</li>
        <li><a href="mongodb-driver-monitoring-serverclosedevent.getport.php" class="index">MongoDB\Driver\Monitoring\ServerClosedEvent::getPort</a> - Returns the port on which this server is listening</li>
        <li><a href="mongodb-driver-monitoring-serverclosedevent.gettopologyid.php" class="index">MongoDB\Driver\Monitoring\ServerClosedEvent::getTopologyId</a> - Returns the topology ID associated with this server</li>
        <li><a href="mongodb-driver-monitoring-serverheartbeatfailedevent.getdurationmicros.php" class="index">MongoDB\Driver\Monitoring\ServerHeartbeatFailedEvent::getDurationMicros</a> - Returns the heartbeat's duration in microseconds</li>
        <li><a href="mongodb-driver-monitoring-serverheartbeatfailedevent.geterror.php" class="index">MongoDB\Driver\Monitoring\ServerHeartbeatFailedEvent::getError</a> - Returns the Exception associated with the failed heartbeat</li>
        <li><a href="mongodb-driver-monitoring-serverheartbeatfailedevent.gethost.php" class="index">MongoDB\Driver\Monitoring\ServerHeartbeatFailedEvent::getHost</a> - Returns the hostname of the server</li>
        <li><a href="mongodb-driver-monitoring-serverheartbeatfailedevent.getport.php" class="index">MongoDB\Driver\Monitoring\ServerHeartbeatFailedEvent::getPort</a> - Returns the port on which this server is listening</li>
        <li><a href="mongodb-driver-monitoring-serverheartbeatfailedevent.isawaited.php" class="index">MongoDB\Driver\Monitoring\ServerHeartbeatFailedEvent::isAwaited</a> - Returns whether the heartbeat used a streaming protocol</li>
        <li><a href="mongodb-driver-monitoring-serverheartbeatstartedevent.gethost.php" class="index">MongoDB\Driver\Monitoring\ServerHeartbeatStartedEvent::getHost</a> - Returns the hostname of the server</li>
        <li><a href="mongodb-driver-monitoring-serverheartbeatstartedevent.getport.php" class="index">MongoDB\Driver\Monitoring\ServerHeartbeatStartedEvent::getPort</a> - Returns the port on which this server is listening</li>
        <li><a href="mongodb-driver-monitoring-serverheartbeatstartedevent.isawaited.php" class="index">MongoDB\Driver\Monitoring\ServerHeartbeatStartedEvent::isAwaited</a> - Returns whether the heartbeat used a streaming protocol</li>
        <li><a href="mongodb-driver-monitoring-serverheartbeatsucceededevent.getdurationmicros.php" class="index">MongoDB\Driver\Monitoring\ServerHeartbeatSucceededEvent::getDurationMicros</a> - Returns the heartbeat's duration in microseconds</li>
        <li><a href="mongodb-driver-monitoring-serverheartbeatsucceededevent.gethost.php" class="index">MongoDB\Driver\Monitoring\ServerHeartbeatSucceededEvent::getHost</a> - Returns the hostname of the server</li>
        <li><a href="mongodb-driver-monitoring-serverheartbeatsucceededevent.getport.php" class="index">MongoDB\Driver\Monitoring\ServerHeartbeatSucceededEvent::getPort</a> - Returns the port on which this server is listening</li>
        <li><a href="mongodb-driver-monitoring-serverheartbeatsucceededevent.getreply.php" class="index">MongoDB\Driver\Monitoring\ServerHeartbeatSucceededEvent::getReply</a> - Returns the heartbeat reply document</li>
        <li><a href="mongodb-driver-monitoring-serverheartbeatsucceededevent.isawaited.php" class="index">MongoDB\Driver\Monitoring\ServerHeartbeatSucceededEvent::isAwaited</a> - Returns whether the heartbeat used a streaming protocol</li>
        <li><a href="mongodb-driver-monitoring-serveropeningevent.gethost.php" class="index">MongoDB\Driver\Monitoring\ServerOpeningEvent::getHost</a> - Returns the hostname of the server</li>
        <li><a href="mongodb-driver-monitoring-serveropeningevent.getport.php" class="index">MongoDB\Driver\Monitoring\ServerOpeningEvent::getPort</a> - Returns the port on which this server is listening</li>
        <li><a href="mongodb-driver-monitoring-serveropeningevent.gettopologyid.php" class="index">MongoDB\Driver\Monitoring\ServerOpeningEvent::getTopologyId</a> - Returns the topology ID associated with this server</li>
        <li><a href="mongodb-driver-monitoring-topologychangedevent.getnewdescription.php" class="index">MongoDB\Driver\Monitoring\TopologyChangedEvent::getNewDescription</a> - Returns the new description for the topology</li>
        <li><a href="mongodb-driver-monitoring-topologychangedevent.getpreviousdescription.php" class="index">MongoDB\Driver\Monitoring\TopologyChangedEvent::getPreviousDescription</a> - Returns the previous description for the topology</li>
        <li><a href="mongodb-driver-monitoring-topologychangedevent.gettopologyid.php" class="index">MongoDB\Driver\Monitoring\TopologyChangedEvent::getTopologyId</a> - Returns the topology ID</li>
        <li><a href="mongodb-driver-monitoring-topologyclosedevent.gettopologyid.php" class="index">MongoDB\Driver\Monitoring\TopologyClosedEvent::getTopologyId</a> - Returns the topology ID</li>
        <li><a href="mongodb-driver-monitoring-topologyopeningevent.gettopologyid.php" class="index">MongoDB\Driver\Monitoring\TopologyOpeningEvent::getTopologyId</a> - Returns the topology ID</li>
        <li><a href="mongodb-driver-query.construct.php" class="index">MongoDB\Driver\Query::__construct</a> - Create a new Query</li>
        <li><a href="mongodb-driver-readconcern.bsonserialize.php" class="index">MongoDB\Driver\ReadConcern::bsonSerialize</a> - Returns an object for BSON serialization</li>
        <li><a href="mongodb-driver-readconcern.getlevel.php" class="index">MongoDB\Driver\ReadConcern::getLevel</a> - Returns the ReadConcern's &quot;level&quot; option</li>
        <li><a href="mongodb-driver-readconcern.isdefault.php" class="index">MongoDB\Driver\ReadConcern::isDefault</a> - Checks if this is the default read concern</li>
        <li><a href="mongodb-driver-readconcern.serialize.php" class="index">MongoDB\Driver\ReadConcern::serialize</a> - Serialize a ReadConcern</li>
        <li><a href="mongodb-driver-readconcern.unserialize.php" class="index">MongoDB\Driver\ReadConcern::unserialize</a> - Unserialize a ReadConcern</li>
        <li><a href="mongodb-driver-readconcern.construct.php" class="index">MongoDB\Driver\ReadConcern::__construct</a> - Create a new ReadConcern</li>
        <li><a href="mongodb-driver-readpreference.bsonserialize.php" class="index">MongoDB\Driver\ReadPreference::bsonSerialize</a> - Returns an object for BSON serialization</li>
        <li><a href="mongodb-driver-readpreference.gethedge.php" class="index">MongoDB\Driver\ReadPreference::getHedge</a> - Returns the ReadPreference's &quot;hedge&quot; option</li>
        <li><a href="mongodb-driver-readpreference.getmaxstalenessseconds.php" class="index">MongoDB\Driver\ReadPreference::getMaxStalenessSeconds</a> - Returns the ReadPreference's &quot;maxStalenessSeconds&quot; option</li>
        <li><a href="mongodb-driver-readpreference.getmode.php" class="index">MongoDB\Driver\ReadPreference::getMode</a> - Returns the ReadPreference's &quot;mode&quot; option</li>
        <li><a href="mongodb-driver-readpreference.getmodestring.php" class="index">MongoDB\Driver\ReadPreference::getModeString</a> - Returns the ReadPreference's &quot;mode&quot; option as a string</li>
        <li><a href="mongodb-driver-readpreference.gettagsets.php" class="index">MongoDB\Driver\ReadPreference::getTagSets</a> - Returns the ReadPreference's &quot;tagSets&quot; option</li>
        <li><a href="mongodb-driver-readpreference.serialize.php" class="index">MongoDB\Driver\ReadPreference::serialize</a> - Serialize a ReadPreference</li>
        <li><a href="mongodb-driver-readpreference.unserialize.php" class="index">MongoDB\Driver\ReadPreference::unserialize</a> - Unserialize a ReadPreference</li>
        <li><a href="mongodb-driver-readpreference.construct.php" class="index">MongoDB\Driver\ReadPreference::__construct</a> - Create a new ReadPreference</li>
        <li><a href="mongodb-driver-server.executebulkwrite.php" class="index">MongoDB\Driver\Server::executeBulkWrite</a> - Execute one or more write operations on this server</li>
        <li><a href="mongodb-driver-server.executecommand.php" class="index">MongoDB\Driver\Server::executeCommand</a> - Execute a database command on this server</li>
        <li><a href="mongodb-driver-server.executequery.php" class="index">MongoDB\Driver\Server::executeQuery</a> - Execute a database query on this server</li>
        <li><a href="mongodb-driver-server.executereadcommand.php" class="index">MongoDB\Driver\Server::executeReadCommand</a> - Execute a database command that reads on this server</li>
        <li><a href="mongodb-driver-server.executereadwritecommand.php" class="index">MongoDB\Driver\Server::executeReadWriteCommand</a> - Execute a database command that reads and writes on this server</li>
        <li><a href="mongodb-driver-server.executewritecommand.php" class="index">MongoDB\Driver\Server::executeWriteCommand</a> - Execute a database command that writes on this server</li>
        <li><a href="mongodb-driver-server.gethost.php" class="index">MongoDB\Driver\Server::getHost</a> - Returns the hostname of this server</li>
        <li><a href="mongodb-driver-server.getinfo.php" class="index">MongoDB\Driver\Server::getInfo</a> - Returns an array of information describing this server</li>
        <li><a href="mongodb-driver-server.getlatency.php" class="index">MongoDB\Driver\Server::getLatency</a> - Returns the latency of this server in milliseconds</li>
        <li><a href="mongodb-driver-server.getport.php" class="index">MongoDB\Driver\Server::getPort</a> - Returns the port on which this server is listening</li>
        <li><a href="mongodb-driver-server.getserverdescription.php" class="index">MongoDB\Driver\Server::getServerDescription</a> - Returns a ServerDescription for this server</li>
        <li><a href="mongodb-driver-server.gettags.php" class="index">MongoDB\Driver\Server::getTags</a> - Returns an array of tags describing this server in a replica set</li>
        <li><a href="mongodb-driver-server.gettype.php" class="index">MongoDB\Driver\Server::getType</a> - Returns an integer denoting the type of this server</li>
        <li><a href="mongodb-driver-server.isarbiter.php" class="index">MongoDB\Driver\Server::isArbiter</a> - Checks if this server is an arbiter member of a replica set</li>
        <li><a href="mongodb-driver-server.ishidden.php" class="index">MongoDB\Driver\Server::isHidden</a> - Checks if this server is a hidden member of a replica set</li>
        <li><a href="mongodb-driver-server.ispassive.php" class="index">MongoDB\Driver\Server::isPassive</a> - Checks if this server is a passive member of a replica set</li>
        <li><a href="mongodb-driver-server.isprimary.php" class="index">MongoDB\Driver\Server::isPrimary</a> - Checks if this server is a primary member of a replica set</li>
        <li><a href="mongodb-driver-server.issecondary.php" class="index">MongoDB\Driver\Server::isSecondary</a> - Checks if this server is a secondary member of a replica set</li>
        <li><a href="mongodb-driver-server.construct.php" class="index">MongoDB\Driver\Server::__construct</a> - Create a new Server (not used)</li>
        <li><a href="mongodb-driver-serverapi.bsonserialize.php" class="index">MongoDB\Driver\ServerApi::bsonSerialize</a> - Returns an object for BSON serialization</li>
        <li><a href="mongodb-driver-serverapi.serialize.php" class="index">MongoDB\Driver\ServerApi::serialize</a> - Serialize a ServerApi</li>
        <li><a href="mongodb-driver-serverapi.unserialize.php" class="index">MongoDB\Driver\ServerApi::unserialize</a> - Unserialize a ServerApi</li>
        <li><a href="mongodb-driver-serverapi.construct.php" class="index">MongoDB\Driver\ServerApi::__construct</a> - Create a new ServerApi instance</li>
        <li><a href="mongodb-driver-serverdescription.gethelloresponse.php" class="index">MongoDB\Driver\ServerDescription::getHelloResponse</a> - Returns the server's most recent &quot;hello&quot; response</li>
        <li><a href="mongodb-driver-serverdescription.gethost.php" class="index">MongoDB\Driver\ServerDescription::getHost</a> - Returns the hostname of this server</li>
        <li><a href="mongodb-driver-serverdescription.getlastupdatetime.php" class="index">MongoDB\Driver\ServerDescription::getLastUpdateTime</a> - Returns the server's last update time in microseconds</li>
        <li><a href="mongodb-driver-serverdescription.getport.php" class="index">MongoDB\Driver\ServerDescription::getPort</a> - Returns the port on which this server is listening</li>
        <li><a href="mongodb-driver-serverdescription.getroundtriptime.php" class="index">MongoDB\Driver\ServerDescription::getRoundTripTime</a> - Returns the server's round trip time in milliseconds</li>
        <li><a href="mongodb-driver-serverdescription.gettype.php" class="index">MongoDB\Driver\ServerDescription::getType</a> - Returns a string denoting the type of this server</li>
        <li><a href="mongodb-driver-session.aborttransaction.php" class="index">MongoDB\Driver\Session::abortTransaction</a> - Aborts a transaction</li>
        <li><a href="mongodb-driver-session.advanceclustertime.php" class="index">MongoDB\Driver\Session::advanceClusterTime</a> - Advances the cluster time for this session</li>
        <li><a href="mongodb-driver-session.advanceoperationtime.php" class="index">MongoDB\Driver\Session::advanceOperationTime</a> - Advances the operation time for this session</li>
        <li><a href="mongodb-driver-session.committransaction.php" class="index">MongoDB\Driver\Session::commitTransaction</a> - Commits a transaction</li>
        <li><a href="mongodb-driver-session.endsession.php" class="index">MongoDB\Driver\Session::endSession</a> - Terminates a session</li>
        <li><a href="mongodb-driver-session.getclustertime.php" class="index">MongoDB\Driver\Session::getClusterTime</a> - Returns the cluster time for this session</li>
        <li><a href="mongodb-driver-session.getlogicalsessionid.php" class="index">MongoDB\Driver\Session::getLogicalSessionId</a> - Returns the logical session ID for this session</li>
        <li><a href="mongodb-driver-session.getoperationtime.php" class="index">MongoDB\Driver\Session::getOperationTime</a> - Returns the operation time for this session</li>
        <li><a href="mongodb-driver-session.getserver.php" class="index">MongoDB\Driver\Session::getServer</a> - Returns the server to which this session is pinned</li>
        <li><a href="mongodb-driver-session.gettransactionoptions.php" class="index">MongoDB\Driver\Session::getTransactionOptions</a> - Returns options for the currently running transaction</li>
        <li><a href="mongodb-driver-session.gettransactionstate.php" class="index">MongoDB\Driver\Session::getTransactionState</a> - Returns the current transaction state for this session</li>
        <li><a href="mongodb-driver-session.isdirty.php" class="index">MongoDB\Driver\Session::isDirty</a> - Returns whether the session has been marked as dirty</li>
        <li><a href="mongodb-driver-session.isintransaction.php" class="index">MongoDB\Driver\Session::isInTransaction</a> - Returns whether a multi-document transaction is in progress</li>
        <li><a href="mongodb-driver-session.starttransaction.php" class="index">MongoDB\Driver\Session::startTransaction</a> - Starts a transaction</li>
        <li><a href="mongodb-driver-session.construct.php" class="index">MongoDB\Driver\Session::__construct</a> - Create a new Session (not used)</li>
        <li><a href="mongodb-driver-topologydescription.getservers.php" class="index">MongoDB\Driver\TopologyDescription::getServers</a> - Returns the servers in the topology</li>
        <li><a href="mongodb-driver-topologydescription.gettype.php" class="index">MongoDB\Driver\TopologyDescription::getType</a> - Returns a string denoting the type of this topology</li>
        <li><a href="mongodb-driver-topologydescription.hasreadableserver.php" class="index">MongoDB\Driver\TopologyDescription::hasReadableServer</a> - Returns whether the topology has a readable server</li>
        <li><a href="mongodb-driver-topologydescription.haswritableserver.php" class="index">MongoDB\Driver\TopologyDescription::hasWritableServer</a> - Returns whether the topology has a writable server</li>
        <li><a href="mongodb-driver-writeconcern.bsonserialize.php" class="index">MongoDB\Driver\WriteConcern::bsonSerialize</a> - Returns an object for BSON serialization</li>
        <li><a href="mongodb-driver-writeconcern.getjournal.php" class="index">MongoDB\Driver\WriteConcern::getJournal</a> - Returns the WriteConcern's &quot;journal&quot; option</li>
        <li><a href="mongodb-driver-writeconcern.getw.php" class="index">MongoDB\Driver\WriteConcern::getW</a> - Returns the WriteConcern's &quot;w&quot; option</li>
        <li><a href="mongodb-driver-writeconcern.getwtimeout.php" class="index">MongoDB\Driver\WriteConcern::getWtimeout</a> - Returns the WriteConcern's &quot;wtimeout&quot; option</li>
        <li><a href="mongodb-driver-writeconcern.isdefault.php" class="index">MongoDB\Driver\WriteConcern::isDefault</a> - Checks if this is the default write concern</li>
        <li><a href="mongodb-driver-writeconcern.serialize.php" class="index">MongoDB\Driver\WriteConcern::serialize</a> - Serialize a WriteConcern</li>
        <li><a href="mongodb-driver-writeconcern.unserialize.php" class="index">MongoDB\Driver\WriteConcern::unserialize</a> - Unserialize a WriteConcern</li>
        <li><a href="mongodb-driver-writeconcern.construct.php" class="index">MongoDB\Driver\WriteConcern::__construct</a> - Create a new WriteConcern</li>
        <li><a href="mongodb-driver-writeconcernerror.getcode.php" class="index">MongoDB\Driver\WriteConcernError::getCode</a> - Returns the WriteConcernError's error code</li>
        <li><a href="mongodb-driver-writeconcernerror.getinfo.php" class="index">MongoDB\Driver\WriteConcernError::getInfo</a> - Returns metadata document for the WriteConcernError</li>
        <li><a href="mongodb-driver-writeconcernerror.getmessage.php" class="index">MongoDB\Driver\WriteConcernError::getMessage</a> - Returns the WriteConcernError's error message</li>
        <li><a href="mongodb-driver-writeerror.getcode.php" class="index">MongoDB\Driver\WriteError::getCode</a> - Returns the WriteError's error code</li>
        <li><a href="mongodb-driver-writeerror.getindex.php" class="index">MongoDB\Driver\WriteError::getIndex</a> - Returns the index of the write operation corresponding to this WriteError</li>
        <li><a href="mongodb-driver-writeerror.getinfo.php" class="index">MongoDB\Driver\WriteError::getInfo</a> - Returns metadata document for the WriteError</li>
        <li><a href="mongodb-driver-writeerror.getmessage.php" class="index">MongoDB\Driver\WriteError::getMessage</a> - Returns the WriteError's error message</li>
        <li><a href="mongodb-driver-writeresult.getdeletedcount.php" class="index">MongoDB\Driver\WriteResult::getDeletedCount</a> - Returns the number of documents deleted</li>
        <li><a href="mongodb-driver-writeresult.getinsertedcount.php" class="index">MongoDB\Driver\WriteResult::getInsertedCount</a> - Returns the number of documents inserted (excluding upserts)</li>
        <li><a href="mongodb-driver-writeresult.getmatchedcount.php" class="index">MongoDB\Driver\WriteResult::getMatchedCount</a> - Returns the number of documents selected for update</li>
        <li><a href="mongodb-driver-writeresult.getmodifiedcount.php" class="index">MongoDB\Driver\WriteResult::getModifiedCount</a> - Returns the number of existing documents updated</li>
        <li><a href="mongodb-driver-writeresult.getserver.php" class="index">MongoDB\Driver\WriteResult::getServer</a> - Returns the server associated with this write result</li>
        <li><a href="mongodb-driver-writeresult.getupsertedcount.php" class="index">MongoDB\Driver\WriteResult::getUpsertedCount</a> - Returns the number of documents inserted by an upsert</li>
        <li><a href="mongodb-driver-writeresult.getupsertedids.php" class="index">MongoDB\Driver\WriteResult::getUpsertedIds</a> - Returns an array of identifiers for upserted documents</li>
        <li><a href="mongodb-driver-writeresult.getwriteconcernerror.php" class="index">MongoDB\Driver\WriteResult::getWriteConcernError</a> - Returns any write concern error that occurred</li>
        <li><a href="mongodb-driver-writeresult.getwriteerrors.php" class="index">MongoDB\Driver\WriteResult::getWriteErrors</a> - Returns any write errors that occurred</li>
        <li><a href="mongodb-driver-writeresult.isacknowledged.php" class="index">MongoDB\Driver\WriteResult::isAcknowledged</a> - Returns whether the write was acknowledged</li>
        <li><a href="function.move-uploaded-file.php" class="index">move_uploaded_file</a> - Moves an uploaded file to a new location</li>
        <li><a href="function.mqseries-back.php" class="index">mqseries_back</a> - MQSeries MQBACK</li>
        <li><a href="function.mqseries-begin.php" class="index">mqseries_begin</a> - MQseries MQBEGIN</li>
        <li><a href="function.mqseries-close.php" class="index">mqseries_close</a> - MQSeries MQCLOSE</li>
        <li><a href="function.mqseries-cmit.php" class="index">mqseries_cmit</a> - MQSeries MQCMIT</li>
        <li><a href="function.mqseries-conn.php" class="index">mqseries_conn</a> - MQSeries MQCONN</li>
        <li><a href="function.mqseries-connx.php" class="index">mqseries_connx</a> - MQSeries MQCONNX</li>
        <li><a href="function.mqseries-disc.php" class="index">mqseries_disc</a> - MQSeries MQDISC</li>
        <li><a href="function.mqseries-get.php" class="index">mqseries_get</a> - MQSeries MQGET</li>
        <li><a href="function.mqseries-inq.php" class="index">mqseries_inq</a> - MQSeries MQINQ</li>
        <li><a href="function.mqseries-open.php" class="index">mqseries_open</a> - MQSeries MQOPEN</li>
        <li><a href="function.mqseries-put.php" class="index">mqseries_put</a> - MQSeries MQPUT</li>
        <li><a href="function.mqseries-put1.php" class="index">mqseries_put1</a> - MQSeries MQPUT1</li>
        <li><a href="function.mqseries-set.php" class="index">mqseries_set</a> - MQSeries MQSET</li>
        <li><a href="function.mqseries-strerror.php" class="index">mqseries_strerror</a> - Returns the error message corresponding to a result code (MQRC)</li>
        <li><a href="function.msg-get-queue.php" class="index">msg_get_queue</a> - Create or attach to a message queue</li>
        <li><a href="function.msg-queue-exists.php" class="index">msg_queue_exists</a> - Check whether a message queue exists</li>
        <li><a href="function.msg-receive.php" class="index">msg_receive</a> - Receive a message from a message queue</li>
        <li><a href="function.msg-remove-queue.php" class="index">msg_remove_queue</a> - Destroy a message queue</li>
        <li><a href="function.msg-send.php" class="index">msg_send</a> - Send a message to a message queue</li>
        <li><a href="function.msg-set-queue.php" class="index">msg_set_queue</a> - Set information in the message queue data structure</li>
        <li><a href="function.msg-stat-queue.php" class="index">msg_stat_queue</a> - Returns information from the message queue data structure</li>
        <li><a href="function.mt-getrandmax.php" class="index">mt_getrandmax</a> - Show largest possible random value</li>
        <li><a href="function.mt-rand.php" class="index">mt_rand</a> - Generate a random value via the Mersenne Twister Random Number Generator</li>
        <li><a href="function.mt-srand.php" class="index">mt_srand</a> - Seeds the Mersenne Twister Random Number Generator</li>
        <li><a href="multipleiterator.attachiterator.php" class="index">MultipleIterator::attachIterator</a> - Attaches iterator information</li>
        <li><a href="multipleiterator.containsiterator.php" class="index">MultipleIterator::containsIterator</a> - Checks if an iterator is attached</li>
        <li><a href="multipleiterator.countiterators.php" class="index">MultipleIterator::countIterators</a> - Gets the number of attached iterator instances</li>
        <li><a href="multipleiterator.current.php" class="index">MultipleIterator::current</a> - Gets the registered iterator instances</li>
        <li><a href="multipleiterator.detachiterator.php" class="index">MultipleIterator::detachIterator</a> - Detaches an iterator</li>
        <li><a href="multipleiterator.getflags.php" class="index">MultipleIterator::getFlags</a> - Gets the flag information</li>
        <li><a href="multipleiterator.key.php" class="index">MultipleIterator::key</a> - Gets the registered iterator instances</li>
        <li><a href="multipleiterator.next.php" class="index">MultipleIterator::next</a> - Moves all attached iterator instances forward</li>
        <li><a href="multipleiterator.rewind.php" class="index">MultipleIterator::rewind</a> - Rewinds all attached iterator instances</li>
        <li><a href="multipleiterator.setflags.php" class="index">MultipleIterator::setFlags</a> - Sets flags</li>
        <li><a href="multipleiterator.valid.php" class="index">MultipleIterator::valid</a> - Checks the validity of sub iterators</li>
        <li><a href="multipleiterator.construct.php" class="index">MultipleIterator::__construct</a> - Constructs a new MultipleIterator</li>
        <li><a href="mysqli.affected-rows.php" class="index">mysqli::$affected_rows</a> - Gets the number of affected rows in a previous MySQL operation</li>
        <li><a href="mysqli.get-client-info.php" class="index">mysqli::$client_info</a> - Get MySQL client info</li>
        <li><a href="mysqli.get-client-version.php" class="index">mysqli::$client_version</a> - Returns the MySQL client version as an integer</li>
        <li><a href="mysqli.connect-errno.php" class="index">mysqli::$connect_errno</a> - Returns the error code from last connect call</li>
        <li><a href="mysqli.connect-error.php" class="index">mysqli::$connect_error</a> - Returns a description of the last connection error</li>
        <li><a href="mysqli.errno.php" class="index">mysqli::$errno</a> - Returns the error code for the most recent function call</li>
        <li><a href="mysqli.error.php" class="index">mysqli::$error</a> - Returns a string description of the last error</li>
        <li><a href="mysqli.error-list.php" class="index">mysqli::$error_list</a> - Returns a list of errors from the last command executed</li>
        <li><a href="mysqli.field-count.php" class="index">mysqli::$field_count</a> - Returns the number of columns for the most recent query</li>
        <li><a href="mysqli.get-host-info.php" class="index">mysqli::$host_info</a> - Returns a string representing the type of connection used</li>
        <li><a href="mysqli.info.php" class="index">mysqli::$info</a> - Retrieves information about the most recently executed query</li>
        <li><a href="mysqli.insert-id.php" class="index">mysqli::$insert_id</a> - Returns the value generated for an AUTO_INCREMENT column by the last query</li>
        <li><a href="mysqli.get-proto-info.php" class="index">mysqli::$protocol_version</a> - Returns the version of the MySQL protocol used</li>
        <li><a href="mysqli.get-server-info.php" class="index">mysqli::$server_info</a> - Returns the version of the MySQL server</li>
        <li><a href="mysqli.get-server-version.php" class="index">mysqli::$server_version</a> - Returns the version of the MySQL server as an integer</li>
        <li><a href="mysqli.sqlstate.php" class="index">mysqli::$sqlstate</a> - Returns the SQLSTATE error from previous MySQL operation</li>
        <li><a href="mysqli.thread-id.php" class="index">mysqli::$thread_id</a> - Returns the thread ID for the current connection</li>
        <li><a href="mysqli.warning-count.php" class="index">mysqli::$warning_count</a> - Returns the number of warnings from the last query for the given link</li>
        <li><a href="mysqli.autocommit.php" class="index">mysqli::autocommit</a> - Turns on or off auto-committing database modifications</li>
        <li><a href="mysqli.begin-transaction.php" class="index">mysqli::begin_transaction</a> - Starts a transaction</li>
        <li><a href="mysqli.change-user.php" class="index">mysqli::change_user</a> - Changes the user of the specified database connection</li>
        <li><a href="mysqli.character-set-name.php" class="index">mysqli::character_set_name</a> - Returns the current character set of the database connection</li>
        <li><a href="mysqli.close.php" class="index">mysqli::close</a> - Closes a previously opened database connection</li>
        <li><a href="mysqli.commit.php" class="index">mysqli::commit</a> - Commits the current transaction</li>
        <li><a href="mysqli.debug.php" class="index">mysqli::debug</a> - Performs debugging operations</li>
        <li><a href="mysqli.dump-debug-info.php" class="index">mysqli::dump_debug_info</a> - Dump debugging information into the log</li>
        <li><a href="function.mysqli-escape-string.php" class="index">mysqli::escape_string</a> - Alias of mysqli_real_escape_string</li>
        <li><a href="mysqli.execute-query.php" class="index">mysqli::execute_query</a> - Prepares, binds parameters, and executes SQL statement</li>
        <li><a href="mysqli.get-charset.php" class="index">mysqli::get_charset</a> - Returns a character set object</li>
        <li><a href="mysqli.get-connection-stats.php" class="index">mysqli::get_connection_stats</a> - Returns statistics about the client connection</li>
        <li><a href="mysqli.get-warnings.php" class="index">mysqli::get_warnings</a> - Get result of SHOW WARNINGS</li>
        <li><a href="mysqli.init.php" class="index">mysqli::init</a> - Initializes MySQLi and returns an object for use with mysqli_real_connect()</li>
        <li><a href="mysqli.kill.php" class="index">mysqli::kill</a> - Asks the server to kill a MySQL thread</li>
        <li><a href="mysqli.more-results.php" class="index">mysqli::more_results</a> - Check if there are any more query results from a multi query</li>
        <li><a href="mysqli.multi-query.php" class="index">mysqli::multi_query</a> - Performs one or more queries on the database</li>
        <li><a href="mysqli.next-result.php" class="index">mysqli::next_result</a> - Prepare next result from multi_query</li>
        <li><a href="mysqli.options.php" class="index">mysqli::options</a> - Set options</li>
        <li><a href="mysqli.ping.php" class="index">mysqli::ping</a> - Pings a server connection, or tries to reconnect if the connection has gone down</li>
        <li><a href="mysqli.poll.php" class="index">mysqli::poll</a> - Poll connections</li>
        <li><a href="mysqli.prepare.php" class="index">mysqli::prepare</a> - Prepares an SQL statement for execution</li>
        <li><a href="mysqli.query.php" class="index">mysqli::query</a> - Performs a query on the database</li>
        <li><a href="mysqli.real-connect.php" class="index">mysqli::real_connect</a> - Opens a connection to a mysql server</li>
        <li><a href="mysqli.real-escape-string.php" class="index">mysqli::real_escape_string</a> - Escapes special characters in a string for use in an SQL statement, taking into account the current charset of the connection</li>
        <li><a href="mysqli.real-query.php" class="index">mysqli::real_query</a> - Execute an SQL query</li>
        <li><a href="mysqli.reap-async-query.php" class="index">mysqli::reap_async_query</a> - Get result from async query</li>
        <li><a href="mysqli.refresh.php" class="index">mysqli::refresh</a> - Refreshes</li>
        <li><a href="mysqli.release-savepoint.php" class="index">mysqli::release_savepoint</a> - Removes the named savepoint from the set of savepoints of the current transaction</li>
        <li><a href="mysqli.rollback.php" class="index">mysqli::rollback</a> - Rolls back current transaction</li>
        <li><a href="mysqli.savepoint.php" class="index">mysqli::savepoint</a> - Set a named transaction savepoint</li>
        <li><a href="mysqli.select-db.php" class="index">mysqli::select_db</a> - Selects the default database for database queries</li>
        <li><a href="mysqli.set-charset.php" class="index">mysqli::set_charset</a> - Sets the client character set</li>
        <li><a href="function.mysqli-set-opt.php" class="index">mysqli::set_opt</a> - Alias of mysqli_options</li>
        <li><a href="mysqli.ssl-set.php" class="index">mysqli::ssl_set</a> - Used for establishing secure connections using SSL</li>
        <li><a href="mysqli.stat.php" class="index">mysqli::stat</a> - Gets the current system status</li>
        <li><a href="mysqli.stmt-init.php" class="index">mysqli::stmt_init</a> - Initializes a statement and returns an object for use with mysqli_stmt_prepare</li>
        <li><a href="mysqli.store-result.php" class="index">mysqli::store_result</a> - Transfers a result set from the last query</li>
        <li><a href="mysqli.thread-safe.php" class="index">mysqli::thread_safe</a> - Returns whether thread safety is given or not</li>
        <li><a href="mysqli.use-result.php" class="index">mysqli::use_result</a> - Initiate a result set retrieval</li>
        <li><a href="mysqli.construct.php" class="index">mysqli::__construct</a> - Open a new connection to the MySQL server</li>
        <li><a href="function.mysqli-connect.php" class="index">mysqli_connect</a> - Alias of mysqli::__construct</li>
        <li><a href="mysqli-driver.report-mode.php" class="index">mysqli_driver::$report_mode</a> - Sets mysqli error reporting mode</li>
        <li><a href="mysqli-driver.embedded-server-end.php" class="index">mysqli_driver::embedded_server_end</a> - Stop embedded server</li>
        <li><a href="mysqli-driver.embedded-server-start.php" class="index">mysqli_driver::embedded_server_start</a> - Initialize and start embedded server</li>
        <li><a href="function.mysqli-execute.php" class="index">mysqli_execute</a> - Alias of mysqli_stmt_execute</li>
        <li><a href="function.mysqli-get-client-stats.php" class="index">mysqli_get_client_stats</a> - Returns client per-process statistics</li>
        <li><a href="function.mysqli-get-links-stats.php" class="index">mysqli_get_links_stats</a> - Return information about open and cached links</li>
        <li><a href="function.mysqli-report.php" class="index">mysqli_report</a> - Alias of mysqli_driver-&gt;report_mode</li>
        <li><a href="mysqli-result.current-field.php" class="index">mysqli_result::$current_field</a> - Get current field offset of a result pointer</li>
        <li><a href="mysqli-result.field-count.php" class="index">mysqli_result::$field_count</a> - Gets the number of fields in the result set</li>
        <li><a href="mysqli-result.lengths.php" class="index">mysqli_result::$lengths</a> - Returns the lengths of the columns of the current row in the result set</li>
        <li><a href="mysqli-result.num-rows.php" class="index">mysqli_result::$num_rows</a> - Gets the number of rows in the result set</li>
        <li><a href="mysqli-result.data-seek.php" class="index">mysqli_result::data_seek</a> - Adjusts the result pointer to an arbitrary row in the result</li>
        <li><a href="mysqli-result.fetch-all.php" class="index">mysqli_result::fetch_all</a> - Fetch all result rows as an associative array, a numeric array, or both</li>
        <li><a href="mysqli-result.fetch-array.php" class="index">mysqli_result::fetch_array</a> - Fetch the next row of a result set as an associative, a numeric array, or both</li>
        <li><a href="mysqli-result.fetch-assoc.php" class="index">mysqli_result::fetch_assoc</a> - Fetch the next row of a result set as an associative array</li>
        <li><a href="mysqli-result.fetch-column.php" class="index">mysqli_result::fetch_column</a> - Fetch a single column from the next row of a result set</li>
        <li><a href="mysqli-result.fetch-field.php" class="index">mysqli_result::fetch_field</a> - Returns the next field in the result set</li>
        <li><a href="mysqli-result.fetch-fields.php" class="index">mysqli_result::fetch_fields</a> - Returns an array of objects representing the fields in a result set</li>
        <li><a href="mysqli-result.fetch-field-direct.php" class="index">mysqli_result::fetch_field_direct</a> - Fetch meta-data for a single field</li>
        <li><a href="mysqli-result.fetch-object.php" class="index">mysqli_result::fetch_object</a> - Fetch the next row of a result set as an object</li>
        <li><a href="mysqli-result.fetch-row.php" class="index">mysqli_result::fetch_row</a> - Fetch the next row of a result set as an enumerated array</li>
        <li><a href="mysqli-result.field-seek.php" class="index">mysqli_result::field_seek</a> - Set result pointer to a specified field offset</li>
        <li><a href="mysqli-result.free.php" class="index">mysqli_result::free</a> - Frees the memory associated with a result</li>
        <li><a href="mysqli-result.getiterator.php" class="index">mysqli_result::getIterator</a> - Retrieve an external iterator</li>
        <li><a href="mysqli-result.construct.php" class="index">mysqli_result::__construct</a> - Constructs a mysqli_result object</li>
        <li><a href="mysqli-sql-exception.getsqlstate.php" class="index">mysqli_sql_exception::getSqlState</a> - Returns the SQLSTATE error code</li>
        <li><a href="mysqli-stmt.affected-rows.php" class="index">mysqli_stmt::$affected_rows</a> - Returns the total number of rows changed, deleted, inserted, or
          matched by the last statement executed</li>
        <li><a href="mysqli-stmt.errno.php" class="index">mysqli_stmt::$errno</a> - Returns the error code for the most recent statement call</li>
        <li><a href="mysqli-stmt.error.php" class="index">mysqli_stmt::$error</a> - Returns a string description for last statement error</li>
        <li><a href="mysqli-stmt.error-list.php" class="index">mysqli_stmt::$error_list</a> - Returns a list of errors from the last statement executed</li>
        <li><a href="mysqli-stmt.field-count.php" class="index">mysqli_stmt::$field_count</a> - Returns the number of columns in the given statement</li>
        <li><a href="mysqli-stmt.insert-id.php" class="index">mysqli_stmt::$insert_id</a> - Get the ID generated from the previous INSERT operation</li>
        <li><a href="mysqli-stmt.num-rows.php" class="index">mysqli_stmt::$num_rows</a> - Returns the number of rows fetched from the server</li>
        <li><a href="mysqli-stmt.param-count.php" class="index">mysqli_stmt::$param_count</a> - Returns the number of parameters for the given statement</li>
        <li><a href="mysqli-stmt.sqlstate.php" class="index">mysqli_stmt::$sqlstate</a> - Returns SQLSTATE error from previous statement operation</li>
        <li><a href="mysqli-stmt.attr-get.php" class="index">mysqli_stmt::attr_get</a> - Used to get the current value of a statement attribute</li>
        <li><a href="mysqli-stmt.attr-set.php" class="index">mysqli_stmt::attr_set</a> - Used to modify the behavior of a prepared statement</li>
        <li><a href="mysqli-stmt.bind-param.php" class="index">mysqli_stmt::bind_param</a> - Binds variables to a prepared statement as parameters</li>
</section><?php }
}
