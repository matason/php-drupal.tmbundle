/**
 * Implements theme_button().
 */
function <?php print $basename; ?>_button(\$element) {
  ${1:// Make sure not to overwrite classes.
  if (isset(\$element['#attributes']['class'])) {
    \$element['#attributes']['class'] = 'form-'. \$element['#button_type'] .' '. \$element['#attributes']['class'];
  \}
  else {
    \$element['#attributes']['class'] = 'form-'. \$element['#button_type'];
  \}

  return '<input type="submit" '. (empty(\$element['#name']) ? '' : 'name="'. \$element['#name'] .'" ') .'id="'. \$element['#id'] .'" value="'. check_plain(\$element['#value']) .'" '. drupal_attributes(\$element['#attributes']) ." />\n";}
}

$2