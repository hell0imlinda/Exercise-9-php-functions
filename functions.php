<?php 

/**
 * Echos dimsum incredient.
 *
 * @param Type of Dim Sum
 */

function makeDimsum($type) {
  if ($type == 'ha-gow') {
    echo '<p>Ha gow is a traditional Cantonese dumpling served in dim sum. The dumpling is sometimes called a shrimp bonnet for its pleated shape.</p>';
  } else if ($type == 'shu-mai') {
    echo '<p>Shu-mai or siu mai, the Chinese steamed pork and shrimp dumplings, are one of the most popular items at dim sum parlors. But you dont have to go out just to enjoy them, because they&#8217re one of the easiest dumplings to make at home.</p>';
  } else {
    echo '<p>That&rsquo;s not a real dimsum dish.</p>';
  }
}