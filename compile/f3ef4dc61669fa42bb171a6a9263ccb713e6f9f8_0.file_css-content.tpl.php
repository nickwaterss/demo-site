<?php
/* Smarty version 5.4.0, created on 2024-08-19 15:51:32
  from 'file:css-content.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.0',
  'unifunc' => 'content_66c36a04af0ca2_90402202',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f3ef4dc61669fa42bb171a6a9263ccb713e6f9f8' => 
    array (
      0 => 'css-content.tpl',
      1 => 1724082691,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66c36a04af0ca2_90402202 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\apache\\htdocs\\demo-site\\templates';
?><section class="header-image"><img src="graphics/css.png" alt="CSS logo"></section>

<section class="documentation-source">
    <div>Documentation: <a href="
        https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_selectors">https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_selectors</a></div>
    </section>

<section><p>CSS stands for Casscading Style Sheets and is a language used to style HTML elements. The browser has it's own default stylesheets and depending on how you link your own, they cascade over each other and each style can overwrite the last. Each CSS selector has a level of specificity that determines if it overwrites existing styles. By having HTML and CSS as seperate files, we can seperate the content and accessibility from the presentation.</p></section><br>
<section id="css-selectors" class="example-content"><!-- the following content was stolen from another website and needs formatting -->
    <table>
        <thead>
         <tr>
          <th style="width:25%">Selector 
          <th style="width:70%">Description
          <th style="width:5%" title="The version of CSS or which selector module the selector was introduced in.">CSS / Selector Level 
        <tbody>
         <tr>
          <td><code>*</code> 
          <td>Selects all elements.
          <td>2 
         <tr>
          <td><code>E</code> 
          <td>Selects an element of type E 
          <td>1 
    
         <tr>
          <td><code>E:not(<var>s1</var>, <var>s2</var>)</code> 
          <td>Selects an E element that does not match either <var>s1</var> or <var>s2</var>.
          <td>3/4 
         <tr>
          <td><code>E:matches(<var>s1</var>, <var>s2</var>)</code> 
          <td>Selects an E element that matches <var>s1</var> and/or <var>s2</var>.
          <td>4 
         <tr>
          <td><code>E:has(<var>rs1</var>, <var>rs2</var>)</code> 
          <td>Selects an E element, if either of the relative selectors <var>rs1</var> or <var>rs2</var>, when evaluated with E as the :scope elements, match an element.
          <td>4 
          
          
         <tr>
          <td><code>E.classname</code> 
          <td>Selects an E element belonging to the class named <code>classname</code>. 
          <td>1 
         <tr>
          <td><code>E#myid</code> 
          <td>Selects an E element with an ID of <code>myid</code>. 
          <td>1 
         <tr>
          <td><code>E[foo]</code> 
          <td>Selects an E element with a <code>foo</code> attribute.
          <td>2 
         <tr>
          <td><code>E[foo="bar"]</code> 
          <td>Selects an E element whose <code>foo</code> attribute value is exactly equal to <code>bar</code>.
          <td>2 
         <tr>
          <td><code>E[foo="bar" i]</code> 
          <td><p>Selects an E element whose <code>foo</code> attribute value is exactly equal to <code>bar</code>, regardless of its case. Basically, using <code>i</code> allows you to specify "case-sensitive" when specifying the value.</p> 
          <p>So for example, <code>Text</code>, <code>text</code>, and <code>TEXT</code> will all be selected if <code>i</code> is specified.</p>
          <td>4 
         <tr>
          <td><code>E[foo~="bar"]</code> 
          <td>Selects an E element whose <code>foo</code> attribute value is a list of whitespace-separated values, one of which is exactly equal to <code>bar</code>.
          <td>2 
         <tr>
          <td><code>E[foo^="bar"]</code> 
          <td>Selects an E element whose <code>foo</code> attribute value begins exactly with the string <code>bar</code>.
          <td>3 
         <tr>
          <td><code>E[foo$="bar"]</code> 
          <td>Selects an E element whose <code>foo</code> attribute value ends exactly with the string <code>bar</code>.
          <td>3 
         <tr>
          <td><code>E[foo*="bar"]</code> 
          <td>Selects an E element whose <code>foo</code> attribute value contains the substring <code>bar</code>.
          <td>3 
         <tr>
          <td><code>E[foo|="fruit"]</code> 
          <td>Selects an E element whose <code>foo</code> attribute value is a hyphen-separated list of values beginning with <code>en</code>.
          <td>2 
          
         <tr>
          <td><code>E:dir(ltr)</code> 
          <td>Selects an element of type E in with left-to-right directionality (the document language specifies how directionality is determined).
          <td>4 
         <tr>
          <td><code>E:lang(zh, "*-hant")</code> 
          <td>Selects an element of type E tagged as being either in Chinese (any dialect or writing system) or othewise written with traditional Chinese characters. Simply replace <code>zh</code> with the applicable language code, and <code>*-hant</code> with the applicable character code.
          <td>2/4 
          
         <tr>
          <td><code>E:any-link</code> 
          <td><p>Selects an E element being the source anchor of a hyperlink.</p>
          <p>This is the equivalent of using both the <code>:link</code> and <code>:visited</code> pseudo-classes.</p>
          <td>4 
         <tr>
          <td><code>E:link</code> 
          <td>Selects an E element being the source anchor of a hyperlink of which the target is not yet visited.
          <td>1 
         <tr>
          <td><code>E:visited</code> 
          <td>Selects an E element being the source anchor of a hyperlink of which the target is already visited.
          <td>1 
         <tr>
          <td><code>E:target</code> 
          <td><p>Selects an E element being the target of the referring URL.</p>
          <td>3 
         <tr>
          <td><code>E:scope</code> 
          <td>Selects an E element being a designated reference element.
          <td>4 
          
         <tr>
          <td><code>E:current</code> 
          <td><p>Selects an E element that is currently presented in a time-dimensional canvas.</p>
          <p>For example, if the contents are being read out while being displayed on a screen, this selector could be used to style the current item as it is being read out.</p>
          <td>4 
         <tr>
          <td><code>E:current(<var>s</var>)</code> 
          <td>Selects an E element that is the deepest <code>:current</code> element that matches selector <var>s</var>.
          <td>4 
         <tr>
          <td><code>E:past</code> 
          <td><p>Selects an E element that is in the past in a time-dimensional canvas.</p>
          <p>For example, if the contents are being read out while being displayed on a screen, this selector could be used to style the items that have already been read out.</p>
          <td>4 
         <tr>
          <td><code>E:future</code> 
          <td><p>Select an E element that is in the future in a time-dimensional canvas.</p>
          <p>For example, if the contents are being read out while being displayed on a screen, this selector could be used to style the items that have yet to be read out.</p>
          <td>4 
          
         <tr>
          <td><code>E:active</code> 
          <td>Selects an E element that is in an activated state.
          <td>1 
         <tr>
          <td><code>E:hover</code> 
          <td>Selects an E element that is under the cursor, or that has a descendant under the cursor.
          <td>2 
         <tr>
          <td><code>E:focus</code> 
          <td>Selects an E element that has user input focus.
          <td>2 
         <tr>
          <td><code>E:drop</code> 
          <td><p>Selects an E element that can possibly receive a drop.</p>
          <p>For example, in HTML you can specify a drop target with the <code>dropzone</code> attribute. This selector can be used style those elements while the user is dragging another element to be dropped.</p>
          <td>4 
         <tr>
          <td><code>E:drop(active)</code> 
          <td><p>Selects an E element that is the current drop target for the item being dragged.</p> 
          <p>In other words, if the user were to release the drag, the element would be dropped on to this drop target.</p>
          <td>4 
         <tr>
          <td><code>E:drop(valid)</code> 
          <td><p>Selects an E element that could receive the item currently being dragged. It only matches if the drop target is valid for the object currently being dragged.</p>
          <p>For example, the HTML <code>dropzone</code> attribute can be used to specify which types of files can be dropped onto an element.</p>
          <td>4 
         <tr>
          <td><code>E:drop(invalid)</code> 
          <td>Selects an E element that cannot receive the item currently being dragged, but could receive some other item. 
          <td>4 
          
         <tr>
          <td><code>E:enabled</code> 
          <td>Selects a user interface element E that is enabled.
          <td>3
         <tr>
          <td><code>E:disabled</code> 
          <td>Selects a user interface element E that is disabled.
          <td>3
         <tr>
          <td><code>E:read-write</code>
          <td><p>Selects a user interface element E that is user alterable.</p>
          <p>For example, an HTML <a href="/html/tags/html_input_tag.cfm"><code class="tag">input</code></a> element that is not disabled and not readonly is <code>:read-write</code>. Also, any HTML element with <code>contenteditable</code> attribute set to the true state is also <code>:read-write</code>.</p>
          <td>3-UI/4 
         <tr>
          <td><code>E:read-only</code> 
          <td><p>Selects a user interface element E that is not user alterable.</p>
          <p>For example, an HTML <a href="/html/tags/html_input_tag.cfm"><code class="tag">input</code></a> element that is disabled or readonly is <code>:read-only</code>.</p>
          <td>3-UI/4 
         <tr>
          <td><code>E:placeholder-shown</code> 
          <td><p>Selects an input control currently showing placeholder text. </p>
          <p>This allows you to style the placeholder text. For example, change its color, etc.</p>
          <td>3-UI/4 
         <tr>
          <td><code>E:default</code> 
          <td><p>Selects a user interface element E that is the default item in a group of related choices. </p>
          <p>For example, it could select the initially selected <a href="/html/tags/html_option_tag.cfm"><code class="tag">option</code></a> element in a <a href="/html/tags/html_select_tag.cfm"><code class="tag">select</code></a> element, or the default button in the form, etc.</p>
          <td>3-UI/4 
         <tr>
          <td><code>E:checked</code> 
          <td><p>Selects a user interface element E that is checked/selected (for example, a radio-button or checkbox).</p>
          <p>Can be used to style the element's label.</p>
          <td>3 
         <tr>
          <td><code>E:indeterminate</code> 
          <td><p>Selects a user interface element E that is in an indeterminate state (neither checked nor unchecked).</p>
          <p>Can be used to style the element's label.</p>
          <td>4 
         <tr>
          <td><code>E:valid</code>
          <td><p>Selects a user-input element E that meets its data validity semantics.</p>
          <td>3-UI/4 
         <tr>
          <td><code>E:invalid</code> 
          <td><p>Selects a user-input element E that doesn't meet its data validity semantics.</p> 
          <td>3-UI/4 
         <tr>
          <td><code>E:in-range</code> 
          <td><p>Selects a user-input element E whose value is in-range.</p>
          <td>3-UI/4 
         <tr>
          <td><code>E:out-of-range</code> 
          <td><p>Selects a user-input element E whose value is out-of-range.</p>
          <td>3-UI/4 
         <tr>
          <td><code>E:required</code>
          <td><p>Selects a user-input element E that requires input.</p>
          <p>For example, a form element with the <code>required</code> attribute.</p>
          <td>3-UI/4 
         <tr>
          <td><code>E:optional</code> 
          <td><p>Selects a user-input element E that does not require input.</p>
          <p>For example, a form element without the <code>required</code> attribute.</p>
          <td>3-UI/4 
         <tr>
          <td><code>E:user-error</code> 
          <td>Selects a user-altered user-input element E with incorrect input (invalid, out-of-range, omitted-but-required).
          <td>4 
          
         <tr>
          <td><code>E:root</code> 
          <td><p>Selects an E element, root of the document.</p>
          <p>In most cases, when using HTML this will match the <a href="/html/tags/html_html_tag.cfm"><code class="tag">html</code></a> element, however, this may not always be the case if using another language such as SVG or <a href="/xml/tutorial/">XML</a>.</p>
          <td>3 
         <tr>
          <td><code>E:empty</code> 
          <td>Selects an E element that has no children (not even text nodes).
          <td>3 
         <tr>
          <td><code>E:blank</code> 
          <td><p>Selects an E element that has no content except maybe white space.</p>
          <p>Similar to <code>:empty</code>, however, <code>:blank</code> will also select elements that contain white space (which <code>:empty</code> will not).</p>
          <td>4 
         <tr>
          <td><code>E:nth-child(<var>n</var> [of <var>S</var>]?)</code> 
          <td>Selects an E element, the <var>n</var>-th child of its parent matching <var>S</var>.
          <td>3 
         <tr>
          <td><code>E:nth-last-child(<var>n</var> [of <var>S</var>]?)</code> 
          <td>Selects an E element, the <var>n</var>-th child of its parent matching <var>S</var>, counting from the last one.
          <td>3 
         <tr>
          <td><code>E:first-child</code> 
          <td>Selects an E element, first child of its parent. 
          <td>2 
         <tr>
          <td><code>E:last-child</code> 
          <td>Selects an E element, last child of its parent. 
          <td>3 
         <tr>
          <td><code>E:only-child</code> 
          <td>Selects an E element, only child of its parent. 
          <td>3 
         <tr>
          <td><code>E:nth-of-type(<var>n</var>)</code> 
          <td>Selects an E element, the <var>n</var>-th sibling of its type. 
          <td>3 
         <tr>
          <td><code>E:nth-last-of-type(<var>n</var>)</code> 
          <td>Selects an E element, the <var>n</var>-th sibling of its type, counting from the last one.
          <td>3 
         <tr>
          <td><code>E:first-of-type</code> 
          <td>Selects an E element, first sibling of its type.
          <td>3 
         <tr>
          <td><code>E:last-of-type</code> 
          <td>Selects an E element, last sibling of its type. 
          <td>3 
         <tr>
          <td><code>E:only-of-type</code> 
          <td>Selects an E element, only sibling of its type.
          <td>3 
          
         <tr>
          <td><code>E F</code>
          <td>Selects an F element descendant of an E element. 
          <td>1
         <tr>
          <td><code>E &gt;&gt; F</code> 
          <td><p>Selects an F element descendant of an E element.</p>
          <p>Note that this selector does the same thing as the previous selector (<code>E F</code>). This selector was introduced in CSS Selectors Level 4 to give the descendant combinator a visible, non-whitespace form and to bridge the gap between the child combinator (&gt;) and the shadow-piercing descendant combinator (&gt;&gt;&gt;)</p>
          <td>4 
         <tr>
          <td><code>E > F</code> 
          <td>Selects an F element child of an E element. 
          <td>2 
         <tr>
          <td><code>E + F</code> 
          <td>Selects an F element immediately preceded by an E element.
          <td>2 
         <tr>
          <td><code>E ~ F</code> 
          <td>Selects an F element preceded by an E element. 
          <td>3 
          
         <tr>
          <td><code>F || E</code> 
          <td>Selects an E element that represents a cell in a grid/table belonging to a column represented by an element F.
          <td>4 
         <tr>
          <td><code>E:nth-column(<var>n</var>)</code> 
          <td>Selects an E element that represents a cell belonging to the <var>n</var>th column in a grid/table.
          <td>4 
         <tr>
          <td><code>E:nth-last-column(<var>n</var>)</code> 
          <td>Selects an E element that represents a cell belonging to the <var>n</var>th column in a grid/table, counting from the last one.
          <td>4 
          
         <tr>
          <td><code>:playing</code> 
          <td>Selects an element representing an audio, video, or similar resource that is capable of being "played" or "paused", when that element is "playing". 
          <td>4 
         <tr>
          <td><code>:paused</code> 
          <td>Selects an element representing an audio, video, or similar resource that is capable of being "played" or "paused", when that element is "paused". This includes both an explicit "paused" state, and other non-playing states like "loaded, hasn't been activated yet", etc.
          <td>4 
    </table>
</section><?php }
}
